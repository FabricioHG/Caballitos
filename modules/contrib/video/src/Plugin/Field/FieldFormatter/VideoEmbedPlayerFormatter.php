<?php

namespace Drupal\video\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\video\ProviderManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\file\Entity\File;
use Drupal\Core\Field\FieldDefinitionInterface;

/**
 * Plugin implementation of the video field formatter.
 *
 * @FieldFormatter(
 *   id = "video_embed_player",
 *   label = @Translation("Embedded Video Player"),
 *   field_types = {
 *     "video"
 *   }
 * )
 */
class VideoEmbedPlayerFormatter extends FormatterBase implements ContainerFactoryPluginInterface {

  /**
   * The embed provider plugin manager.
   *
   * @var \Drupal\video\ProviderManagerInterface
   */
  protected $providerManager;

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];
    $settings = $this->getSettings();
    foreach ($items as $delta => $item) {
      $file = File::load($item->target_id);
      if(!$file) continue;
      $metadata = isset($item->data) ? unserialize($item->data) : [];
      $scheme = \Drupal::service('stream_wrapper_manager')->getScheme($file->getFileUri());

      $provider = $this->providerManager->loadProviderFromStream($scheme, $file, $metadata);
      if($provider){
        $element[$delta] = $provider->renderEmbedCode($settings);
      }
    }
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'width' => '854',
      'height' => '480',
      'autoplay' => TRUE,
      'related_videos' => FALSE
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form = [];
    $form['autoplay'] = [
      '#title' => t('Autoplay'),
      '#type' => 'checkbox',
      '#default_value' => $this->getSetting('autoplay'),
    ];
    $form['related_videos'] = [
      '#title' => t('Related Videos'),
      '#type' => 'checkbox',
      '#default_value' => $this->getSetting('related_videos'),
    ];
    $form['width'] = [
      '#title' => t('Width'),
      '#type' => 'textfield',
      '#default_value' => $this->getSetting('width'),
      '#required' => TRUE,
    ];
    $form['height'] = [
      '#title' => t('Height'),
      '#type' => 'textfield',
      '#default_value' => $this->getSetting('height'),
      '#required' => TRUE,
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary[] = t('Embedded Video (@widthx@height@autoplay@related_videos).', [
      '@width' => $this->getSetting('width'),
      '@height' => $this->getSetting('height'),
      '@related_videos' => $this->getSetting('related_videos') ? t(', showing related videos') : '' ,
      '@autoplay' => $this->getSetting('autoplay') ? t(', autoplaying') : '' ,
    ]);
    return $summary;
  }

  /**
   * Constructs a new instance of the plugin.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Field\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Third party settings.
   * @param \Drupal\video\ProviderManagerInterface $provider_manager
   *   The video embed provider manager.
   */
  public function __construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings, ProviderManagerInterface $provider_manager) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings);
    $this->providerManager = $provider_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('video.provider_manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition) {
    if(empty($field_definition->getTargetBundle())){
      return TRUE;
    }
    else {
      $form_mode = 'default';
      $entity_form_display = \Drupal::service('entity_display.repository')
      ->getFormDisplay(
        $field_definition->getTargetEntityTypeId(), $field_definition->getTargetBundle(), $form_mode);
      if (!$entity_form_display) {
        $entity_form_display = \Drupal::entityTypeManager()
          ->getStorage('entity_form_display')
          ->create([
            'targetEntityType' => $field_definition->getTargetEntityTypeId(),
            'bundle' => $field_definition->getTargetBundle(),
            'mode' => $form_mode,
            'status' => TRUE,
          ]);
      }
      $widget = $entity_form_display->getRenderer($field_definition->getName());
      if ($widget) {
        $widget_id = $widget->getBaseId();
        if($widget_id == 'video_embed') return TRUE;
      }
    }
    return FALSE;
  }
}
