<?php

if( is_plugin_active('advanced-custom-fields/acf.php') ) {
  $header_choice = get_field('header');
  if ($header_choice == 'default') {
    get_header();
  } else {
    get_header($header_choice);
  }
} else {
  get_header();
}

?>
