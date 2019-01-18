<?php
function whitespace_theme_customizer( $wp_customize ) {

  //Scripts
  $wp_customize->add_section(
      'whitespace_scripts',
      array(
          'title'     => 'Scripts',
          'priority'  => 200
      )
  );

    //Header Scripts
    $wp_customize->add_setting(
      'whitespace_header_scripts',
      array(
          'default'    =>  '',
          'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control(
      'whitespace_header_scripts',
      array(
          'section'   => 'whitespace_scripts',
          'label'     => 'Custom Header Scripts',
          'description' => 'Add any scripts that you\'d like in the <head> section below.',
          'type'      => 'textarea'
      )
    );

  //Footer Scripts
  $wp_customize->add_setting(
    'whitespace_footer_scripts',
    array(
        'default'    =>  '',
        'transport'  =>  'refresh'
    )
  );

  $wp_customize->add_control(
    'whitespace_footer_scripts',
    array(
        'section'   => 'whitespace_scripts',
        'label'     => 'Custom Footer Scripts',
        'description' => 'Add any scripts that you\'d like in the footer section below.',
        'type'      => 'textarea'
    )
  );

}

add_action( 'customize_register', 'whitespace_theme_customizer' );
?>
