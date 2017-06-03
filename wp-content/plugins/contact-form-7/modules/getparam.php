<?php
/**
 * Get and Show Parameter from URL Contact Form 7 Plugin
 *
 * Developed by: Chad Huntley
 * Version: 0.9
 * Date: 11/18/2012
 * URL: http://elementdesignllc.com/2011/11/contact-form-7-get-parameter-from-url-into-form-plugin/
 */

wpcf7_add_shortcode('getparam', 'wpcf7_getparam_shortcode_handler', true);

function wpcf7_getparam_shortcode_handler($tag) {
    if (!is_array($tag)) return '';

    $name = $tag['name'];
    if (empty($name)) return '';

    $html = '<input type="hidden" name="' . $name . '" value="'. $_GET[$name] . '" />';
    return $html;
}

wpcf7_add_shortcode('showparam', 'wpcf7_showparam_shortcode_handler', true);

function wpcf7_showparam_shortcode_handler($tag) {
    if (!is_array($tag)) return '';

    $name = $tag['name'];
    if (empty($name)) return '';

    $html = $_GET[$name];
    return $html;
}

?>