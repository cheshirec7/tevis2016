<?php

/**

 * @file

 * Contains \Drupal\endless_scroll\Plugin\Block\EndlessScrollBlock.

 */



namespace Drupal\endless_scroll\Plugin\Block;



use Drupal\Core\Block\BlockBase;

use Drupal\Core\Form\FormStateInterface;



/**

 * Provides a "Endless Scroll" block.

 *

 * @Block(

 *   id = "endless-scroll",

 *   admin_label = @Translation("Endless Scroll")

 * )

 */

class EndlessScrollBlock extends BlockBase {



  /**

   * {@inheritdoc}

   */

  public function defaultConfiguration() {



    $width = '100%';

    $height = '100px';

    $steps = -2;

    $speed = 40;

    $mousestop = true;

    

    return array('width' => $width,

        'height' => $height,

        'steps' => $steps,

        'speed' => $speed,

        'mousestop' => $mousestop,

        );

  }



  /**

   * {@inheritdoc}

   */

  public function blockForm($form, FormStateInterface $form_state) {

//    $form['jquery_countdown_timer_date'] = array(

//      '#type' => 'datetime',

//      '#title' => t('Timer date'),

//      '#required' => 1,

//      '#default_value' => new DrupalDateTime($this->configuration['countdown_datetime']),

//      '#date_date_element' => 'date',

//      '#date_time_element' => 'time',

//      '#date_year_range' => '2016:+50',

//    );

//    $form['jquery_countdown_timer_font_size'] = array(

//      '#type' => 'number',

//      '#title' => t('Timer font size'),

//      '#default_value' => $this->configuration['font_size'],

//      '#required' => 1

//    );

//

    return $form;

  }



  /**

   * {@inheritdoc}

   */

  public function blockSubmit($form, FormStateInterface $form_state) {

//    $dt = $form_state->getValue('jquery_countdown_timer_date');

//    $this->configuration['countdown_datetime'] = $dt->format('Y-m-d H:i:s');

//    $this->configuration['font_size'] = $form_state->getValue('jquery_countdown_timer_font_size');

  }



  /**

   * {@inheritdoc}

   */

  public function build() {



    $settings = array(

//      'unixtimestamp' => strtotime($this->configuration['countdown_datetime']),

//      'fontsize' => $this->configuration['font_size'],

    );



    $build = array();







//    $m = '<a href="http://www.vettec.com/"><img alt="Vettec" src="/img/2016/sponsors50/vettec.png"></a>';

//    $m .= '<a href="http://echoranch.com/" target="_blank"><img alt="Echo Valley Ranch" src="/img/2016/sponsors50/echo.png"></a>';

    $m = '<a href="http://www.personalazeit.biz/" target="_blank"><img alt="Personalaze-It" src="/img/2016/sponsors50/personalaze.png" /></a>';

    $m .= '<a href="http://www.platinumperformance.com/" target="_blank"><img alt="Platinum Performance" src="/img/2016/sponsors50/platinum.png" /></a>';

    $m .= '<a href="http://www.mallardcreekinc.com/" target="_blank"><img alt="Mallard Creek" src="/img/2016/sponsors50/mallardcreek.png" /></a>';





//    $m .= '<a href="http://kerrits.com/" target="_blank"><img alt="Kerrits" src="/img/2016/sponsors50/kerrits.png" /></a>';

//    $m .= '<a href="http://www.equipedic.com/" target="_blank"><img alt="Equipedic" src="/img/2016/sponsors50/equipedic.png" /></a>';

    $m .= '<a href="http://www.phoenixperformance.com/" target="_blank"><img alt="Phoenix" src="/img/2016/sponsors50/phoenix.jpg" /></a>';

    $m .= '<a href="http://www.phoenixperformance.com/" target="_blank"><img alt="Tipperary" src="/img/2016/sponsors50/tipperary.jpg" /></a>';

//    $m .= '<a href="http://www.easycareinc.com/" target="_blank"><img alt="EasyCare" src="/img/2016/sponsors50/ec-logo-blue.png" /></a>';

//    $m .= '<a href="http://www.heritagegloves.com/" target="_blank"><img alt="Heritage Gloves" src="/img/2016/sponsors50/heritage.jpg"></a>';



    $m .= '<a href="http://www.ridingwarehouse.com/trail.html?from=tevis" target="_blank"><img alt="Riding Warehouse" src="/img/2016/sponsors50/riding_warehouse.jpg" /></a>';



    $m .= '<a href="http://www.auburnlabs.com/" target="_blank"><img alt="Auburn Labs" src="/img/2016/sponsors50/auburnlabs.jpg" /></a>';

    $m .= '<a href="http://equsani.com/" target="_blank"><img alt="Equsani" src="/img/2016/sponsors50/equsani.png" /></a>';

    $m .= '<a href="http://www.hammernutrition.com" target="_blank"><img alt="Hammer" src="/img/2016/sponsors50/hammer.jpg" /></a>';

    $m .= '<a href="http://www.well-horse.com/" target="_blank"><img alt="Well Horse" src="/img/2016/sponsors50/wellhorse.png" /></a>';

    $m .= '<a href="http://www.HorseSenseSolutions.com" target="_blank"><img alt="HorseSenseSolutions" src="/img/2016/sponsors50/horsesensesolutions.jpg" /></a>';

    //$m .= 'img alt="A Little Pet Vet" src="/img/2016/sponsors50/alittlepetvet.jpg" />';



    $m .= '<a href="http://www.farmerswarehouse.com/" target="_blank"><img alt="Farmers Warehouse" src="/img/2016/sponsors50/farmers259.png" /></a>';

    $m .= '<a href="http://www.lmffeeds.com/" target="_blank"><img alt="LMF Feeds" src="/img/2016/sponsors50/lmffeeds.png" /></a>';

    $m .= '<a href="http://jewelry-auburn-ca.com/rings-necklaces-bracelets-earrings-clocks/" target="_blank"><img alt="Ropers Jewelry" src="/img/2016/sponsors50/ropers.gif" /></a>';



    $m .= '<a href="http://www.sundownerofca.com/" target="_blank"><img alt="Sundowner" src="/img/2016/sponsors50/sundowner.png" /></a>';

    $m .= '<a href="http://www.arvrental.com/index.shtml" target="_blank"><img alt="Affordable RV" src="/img/2016/sponsors50/affordable-rv.png" /></a>';

    $m .= '<a href="http://www.elkgrovemilling.com/" target="_blank"><img alt="Elk Grove Milling" src="/img/2016/sponsors50/elkgrovemilling.png" /></a>';

    $m .= '<a href="http://www.horseware.com/usa/" target="_blank"><img alt="Horseware Ireland" src="/img/2016/sponsors50/horseware_ireland.gif" /></a>';

$m .= '<a href="http://calibercollision.com/" target="_blank"><img alt="" src="/img/2016/sponsors50/caliber_logo_50.jpg" /></a>';

    $build['content'] = array(

      '#markup' => '<div id="endless-scroll">'.$m.'</div>',

        //'#markup' => '<marquee behavior="scroll" direction="left">'.$m.'</marquee>',

    );



    // Attach library containing css and js files.

    $build['#attached']['library'][] = 'endless_scroll/endless.scroll';

    //$build['#attached']['drupalSettings']['endless-scroll'] = $settings;



    return $build;

  }

}

?>

