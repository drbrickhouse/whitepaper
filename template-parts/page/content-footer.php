<?php

$footer_choice = get_theme_mod('whitepaper_default_footer_template');

if( is_plugin_active('advanced-custom-fields/acf.php') ) {
  if ( !empty(get_field('footer')) && get_field('footer') !== 'default' ) {
    $footer_choice = get_field('footer');
  }
}

get_footer($footer_choice);

?>
