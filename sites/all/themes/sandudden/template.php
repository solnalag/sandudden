<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_preprocess_html.
 */
function sandudden_preprocess_html(&$vars) {

  // Viewport for responsive
  // $meta_viewport = array(
  //   '#type' => 'html_tag',
  //   '#tag' => 'meta',
  //   '#attributes' => array(
  //     'name' => 'viewport',
  //     'content' => 'width=device-width, target-densitydpi=high-dpi, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0'
  //   )
  // );


  // IE for better compatible
  // $meta_ie = array(
  //   '#type' => 'html_tag',
  //   '#tag' => 'meta',
  //   '#attributes' => array(
  //     'http-equiv' => 'X-UA-Compatible',
  //     'content' => 'IE=edge,chrome=1'
  //   )
  // );

  // drupal_add_html_head($meta_viewport, 'viewport');
  //drupal_add_html_head($meta_ie, 'ie');

}
