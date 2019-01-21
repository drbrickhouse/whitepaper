<?php

$header_choice = get_theme_mod('whitepaper_default_header_template');

if( is_plugin_active('advanced-custom-fields/acf.php') ) {
  if (get_field('header') == 'default') {
    get_header($header_choice);
  } else {
    $header_choice =  get_field('header');
    get_header($header_choice);
  }
} else {
  get_header($header_choice);
}

?>
