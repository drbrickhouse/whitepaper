<?php

if( is_plugin_active('advanced-custom-fields/acf.php') ) {
  $footer_choice = get_field('footer');
  if ($header_footer == 'default') {
    get_footer();
  } else {
    get_footer($footer_choice);
  }
} else {
  get_footer();
}

?>
