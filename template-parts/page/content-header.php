<?php

$header_choice = get_theme_mod('whitepaper_default_header_template');

if( is_plugin_active('advanced-custom-fields/acf.php') ) {
  if ( !empty(get_field('header')) && get_field('header') !== 'default' ) {
    $header_choice = get_field('header');
  }
}

get_header($header_choice);

?>
