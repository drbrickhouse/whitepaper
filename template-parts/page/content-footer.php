<?php

$footer_choice = get_theme_mod('whitepaper_default_footer_template');

if( is_plugin_active('advanced-custom-fields/acf.php') ) {
  if (get_field('footer') == 'default') {
    get_footer($footer_choice);
  } else {
    $footer_choice =  get_field('footer');
    get_footer($footer_choice);
  }
} else {
  get_footer($footer_choice);
}

?>
