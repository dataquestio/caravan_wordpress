<?php
/**
 * @package DataquestCaravan
 * @version 1.0
 */
/*
Plugin Name: Dataquest Caravan
Description: Enables embedding the Dataquest code running interface and answer checking into a blog post.
Version: 1.0
Author URI: https://dataquest.io/
Author: Dataquest
GitHub: https://github.com/dataquestio/caravan_wordpress
*/
// Code written by Curtis M. Humphrey, Ph.D.

if (!defined('ABSPATH')) exit;

class DataquestCaravan {
  public static function load_scripts() {   
    wp_enqueue_script("dataquest-postbox", '//dqeditor.dataquest.io/dq_post_box.js');
    wp_enqueue_script("dataquest-helper", plugins_url('/dq_helper.js' , __FILE__ ), array('jquery'));
  }

  public static function show_media_button() {
    echo  '<a href="" class="button" ' .
            'id="insert-dataquest-exercise-button" ' .
            'title="' . __("Insert Dataquest Caravan Exercise Template", 'add_dataquest_exercise') .
          '">' .
            'Add Caravan Template' .
          '</a>';
  }

  public static function include_media_button() {
    wp_enqueue_script('dataquest_media_button', plugins_url('/media_button_insert.js', __FILE__), array('jquery'));
  }

  public static function run() {
    add_action('media_buttons',  array(__CLASS__, 'show_media_button'));
    add_action('wp_enqueue_media', array(__CLASS__, 'include_media_button'));
    add_action("wp_enqueue_scripts", array(__CLASS__, "load_scripts"));
  }
}

// Run plugin
DataquestCaravan::run();

?>
