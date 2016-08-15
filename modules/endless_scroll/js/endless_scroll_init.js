(function ($, Drupal, drupalSettings) {
    "use strict";
    
    Drupal.behaviors.jsEndlessScroll = {
        attach: function (context) {

            $(context).find('#endless-scroll').once('endless-scroll').endlessScroll({
                width: '100%',
                height: '50px',
                steps: -2,
                speed: 50,
                mousestop: false
            });
        }
    };
})(jQuery, Drupal, drupalSettings);