<?php

namespace Drupal\udg_liston\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Entity\Entity\EntityViewDisplay;
use Drupal\node\Entity\Node;


/**
 * Definición de nuestro bloque
 *
 * @Block(
 *   id = "mailto_udg",
 *   admin_label = @Translation("Mailto UDG")
 * )
 */
class MailtoBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
    	//obtener id de nodo 
    	$node = \Drupal::routeMatch()->getParameter('node');
    	$nid = $node->id();

    	/* D8 old $node = node_load($nid);*/
    	$node = node::load($nid);
    	//Cargar titulo del nodo
    	$field_title = $node->get('title');
    	$valor_tittle = $field_title->getValue();
    	$titulo=$valor_tittle[0]['value'];
    	//Cargar cuerpo del nodo
      if(isset($node->toArray()['body']['0']['value'])){
        $cuerpo = $node->toArray()['body']['0']['value'];
        $cuerpo = strip_tags($cuerpo); 
        $cuerpo=str_replace('"', '',$cuerpo );
        $cuerpo=str_replace("'", "",$cuerpo );
      }else{
        $cuerpo = '';
      }
    	
    	
      //$cuerpo = $node->toArray()['body']['0']['value'];
      //Obtener url del nodo
      /* D8 OLD $url_nodo = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$nid);*/
      $url_nodo = \Drupal::service('path_alias.manager')->getAliasByPath('/node/'.$nid);
      $servidor=$_SERVER['SERVER_ADDR'];
     	$url_compartir_facebook=$servidor.$url_nodo;
      $url_compartir_twitter=$servidor.$url_nodo;
      //obtener fecha en que el nodo fue creado
      $field_created = $node->get('created');
    	$valor_created = $field_created->getValue();
    	$created=$valor_created[0]['value'];
		  setlocale(LC_ALL,'es_MX');
      $fecha=strftime("%d de %B de %Y",$created);
      //Quitar espacios a titulo y cuerpo para quitar error de accesibilidad en url
	    $titulo=rawurlencode ($titulo); 
      $cuerpo2=rawurlencode ($cuerpo); 
	   
    
      	$markup ='<span class="fecha_pag_noticia">'.$fecha.'</span>
                  <a href="/libraries/Share_php/funciones.php?subject='.rawurlencode($titulo).'&cuerpo='.rawurlencode ($cuerpo).'&opcion=email"><img alt="Enviar por correo" src="/modules/udg_liston/icons/ico_correo.png" ></a>
                  <a href="/libraries/Share_php/funciones.php?nid='.$nid.'&opcion=pdf"><img alt="Convertir a pdf" src="/modules/udg_liston/icons/ico_pdf.png" ></a>
                  <a href="/libraries/Share_php/funciones.php?url='.$url_compartir_facebook.'&opcion=facebook_compartir"><img alt="Compartir en facebook" src="/modules/udg_liston/icons/ico_facebook.png"> </a>
                  <a href="/libraries/Share_php/funciones.php?&subject='.$titulo.'&url='.$url_compartir_twitter.'&opcion=twitter"><img  alt="compartir en twitter"  src="/modules/udg_liston/icons/ico_twitter.png"></a>
                  <iframe title="Facebook like" src="//www.facebook.com/plugins/like.php?locale=es_ES&href=http://'.$url_compartir_facebook.'&layout=button_count"></iframe>

                  ';
                 
// &original_referer=https%3A%2F%2Fdeveloper.twitter.com%2Fen%2Fdocs%2Ftwitter-for-websites%2Ftweet-button%2Foverview&ref_src=twsrc%5Etfw&related=twitterapi%2Ctwitter&text=Hello%20world&tw_p=tweetbutton&url=https%3A%2F%2Fexample.com%2Ffoo&via=twitterdev


      	//$markup =$cuerpo;   
    	return array(
	    	'#type' => 'markup',
	    	'#attached' => array(
					'library' => array(
						'udg_liston/boton_share',
						),
				),
			'#markup' => $markup,
			'#cache' => array(
							'max-age' => 0,
							 ),
			'#allowed_tags' => [
    			'a',
    			'span',
    			'iframe',
    			'img',
          'body',
    			'button'
    		],		);



    }



}

?>
