<?php
function whitepaper_theme_customizer( $wp_customize ) {

  //Scripts
  $wp_customize->add_section(
      'whitepaper_scripts',
      array(
          'title'     => 'Scripts',
          'priority'  => 200
      )
  );

    //Header Scripts
    $wp_customize->add_setting(
      'whitepaper_header_scripts',
      array(
          'default'    =>  '',
          'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control(
      'whitepaper_header_scripts',
      array(
          'section'   => 'whitepaper_scripts',
          'label'     => 'Custom Header Scripts',
          'description' => 'Add any scripts that you\'d like in the <head> section below.',
          'type'      => 'textarea'
      )
    );

  //Footer Scripts
  $wp_customize->add_setting(
    'whitepaper_footer_scripts',
    array(
        'default'    =>  '',
        'transport'  =>  'refresh'
    )
  );

  $wp_customize->add_control(
    'whitepaper_footer_scripts',
    array(
        'section'   => 'whitepaper_scripts',
        'label'     => 'Custom Footer Scripts',
        'description' => 'Add any scripts that you\'d like in the footer section below.',
        'type'      => 'textarea'
    )
  );

}

add_action( 'customize_register', 'whitepaper_theme_customizer' );
?>
