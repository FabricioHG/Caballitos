/*!
 * jQuery Once v2.2.3 - http://github.com/robloach/jquery-once
 * @license MIT, GPL-2.0
 *   http://opensource.org/licenses/MIT
 *   http://opensource.org/licenses/GPL-2.0
 */
(function(e){"use strict";if(typeof exports==="object"&&typeof exports.nodeName!=="string"){e(require("jquery"))}else if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(t){"use strict";var r=function(e){e=e||"once";if(typeof e!=="string"){throw new TypeError("The jQuery Once id parameter must be a string")}return e};t.fn.once=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)!==true}).data(n,true)};t.fn.removeOnce=function(e){return this.findOnce(e).removeData("jquery-once-"+r(e))};t.fn.findOnce=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)===true})}});

(function ($) {
  Drupal.behaviors.ListonBlock = {
    attach: function (context, settings) {
        // Donde queremos cambiar el tamaño de la fuente
      var donde = $('body');
      var state = 0;
      var sizeFuenteOriginal = donde.css('font-size');
       // Resetear Font Size
     $(".resetearFont").once().click(function(){
            donde.css('font-size', sizeFuenteOriginal);
            state = 0;
            $("body").removeClass("accessibility-invert-image");
            $("body").removeClass("accessibility-contrast-image");
            $("body").removeClass("accessibility-sepia-image");
      });
        // Aumentar Font Size
      $(".aumentarFont").once().click(function(){
        if(state <= 2){
            var sizeFuenteActual = donde.css('font-size');
            var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
            var sizeFuenteNuevo = sizeFuenteActualNum*1.2;
            donde.css('font-size', sizeFuenteNuevo);
            state = state + 1;
            return false;

        }

      });
      // Disminuir Font Size
      $(".disminuirFont").once().click(function(){
        if(state >= -1){
            var sizeFuenteActual = donde.css('font-size');
            var sizeFuenteActualNum = parseFloat(sizeFuenteActual, 10);
            var sizeFuenteNuevo = sizeFuenteActualNum*0.8;
            donde.css('font-size', sizeFuenteNuevo);
            state = state - 1;
            return false;
        }
      });

     $("#accessibility-invert").once().click(function(){
        $("body").toggleClass("accessibility-invert-image");
        $("body").removeClass("accessibility-contrast-image");
        $("body").removeClass("accessibility-sepia-image");
      });
     $("#accessibility-contrast").once().click(function(){
        $("body").toggleClass("accessibility-contrast-image");
        $("body").removeClass("accessibility-sepia-image");
        $("body").removeClass("accessibility-invert-image");
      });
     $("#accessibility-sepia").once().click(function(){
        $("body").toggleClass("accessibility-sepia-image");
        $("body").removeClass("accessibility-invert-image");
        $("body").removeClass("accessibility-contrast-image");
      });

     function invertHex(hex) {
       return (Number(`0x1${hex}`) ^ 0xFFFFFF).toString(16).substr(1).toUpperCase()
      }

    }
  }
}(jQuery));
;
