<?php

/**
 * Plugin Name: Jewish Hebrew date
 * Description: plugin display hebrew date
 * Author: GO APP.
 * Author URI: https://appupgo.co.il/
 * Version: 1.0.2
 * Plugin URI: 
 * License: GPL
 */

 
defined('ABSPATH') or die('No script kiddies please!');


function dhds_display_hebrew_date_shortcode() {
    $gregorian_date = date('Y-m-d');

    $hebrew_date = jdtojewish(gregoriantojd(date("m"), date("d"), date("Y")), true, CAL_JEWISH_ADD_GERESHAYIM + CAL_JEWISH_ADD_ALAFIM + CAL_JEWISH_ADD_ALAFIM_GERESH);

    return iconv('WINDOWS-1255', 'UTF-8', $hebrew_date);
}


add_shortcode('dhds_display_hebrew_date_shortcode', 'dhds_display_hebrew_date_shortcode');

?>
