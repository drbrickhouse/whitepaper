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

    $wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'whitepaper_header_scripts', array(
          'section'   => 'whitepaper_scripts',
          'settings' => 'whitepaper_header_scripts',
          'label'     => 'Custom Header Scripts',
          'description' => 'Add any scripts that you\'d like in the <head> section below.',
          'code_type' => 'php'
        )
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

    $wp_customize->add_control( new WP_Customize_Code_Editor_Control( $wp_customize, 'whitepaper_footer_scripts', array(
          'section'   => 'whitepaper_scripts',
          'settings' => 'whitepaper_footer_scripts',
          'label'     => 'Custom Footer Scripts',
          'description' => 'Add any scripts that you\'d like in the footer section below.',
          'code_type' => 'php'
        )
      )
    );

  //Site Options
  $wp_customize->add_section(
    'whitepaper_site_options',
    array(
      'title'     => 'Site Options',
      'priority'  => 20
    )
  );
    //Default Page Template
    $wp_customize->add_setting(
      'whitepaper_default_page_template',
      array(
        'default'    =>  'whitepaper-template-no-sidebar.php',
        'transport'  =>  'refresh'
      )
    );

    $templates = wp_get_theme()->get_page_templates();

    $wp_customize->add_control( 'whitepaper_default_page_template', array(
        'type' => 'select',
        'section' => 'whitepaper_site_options',
        'settings' => 'whitepaper_default_page_template',
        'label' => 'Default Page Template',
        'description' => 'Choose the default template to be used for all pages',
        'choices' => $templates
      )
    );

    //Default Header Template
    $wp_customize->add_setting(
      'whitepaper_default_header_template',
      array(
        'default'    =>  'b12',
        'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control( 'whitepaper_default_header_template', array(
        'type' => 'select',
        'section' => 'whitepaper_site_options',
        'settings' => 'whitepaper_default_header_template',
        'label' => 'Default Header Template',
        'description' => 'Choose the default header to be used for all pages',
        'choices' => array (
          'a1-b1' => 'A1-B1',
          'a1-b12' => 'A1-B12',
          'a1-b123' => 'A1-B123',
          'a12-b1' => 'A12-B1',
          'a12-b12' => 'A12-B12',
          'b1' => 'B1',
          'b12' => 'B12',
          'b123' => 'B123',
					'm-a1-b1' => 'M-A1-B1',
					'm-a1-b12' => 'M-A1-B12',
					'm-a1-b123' => 'M-A1-B123',
					'm-a12-b1' => 'M-A12-B1',
					'm-a12-b12' => 'M-A12-B12',
					'm-b1' => 'M-B1',
					'm-b12' => 'M-B12',
					'm-b123' => 'M-B1'
        ),
      )
    );

    //Default Footer Template
    $wp_customize->add_setting(
      'whitepaper_default_footer_template',
      array(
        'default'    =>  'b12',
        'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control( 'whitepaper_default_footer_template', array(
        'type' => 'select',
        'section' => 'whitepaper_site_options',
        'settings' => 'whitepaper_default_footer_template',
        'label' => 'Default Footer Template',
        'description' => 'Choose the default footer to be used for all pages',
        'choices' => array (
          'a1-b1' => 'A1-B1',
          'a1-b2' => 'A1-B2',
          'a1-b12' => 'A1-B12',
          'a1-b13' => 'A1-B13',
          'a1-b23' => 'A1-B23',
          'a1-b123' => 'A1-B123',
          'b12' => 'B12'
        ),
      )
    );

    $wp_customize->add_setting(
      'whitepaper_favicon',
      array(
        'default'    =>  '',
        'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'whitepaper_favicon', array(
          'settings'		=> 'whitepaper_favicon',
          'section'		=> 'whitepaper_site_options',
          'label'			=> 'Favicon',
          'description'	=> 'The icon that appears on your browser tab',
        )
      )
    );

    //Sitemap Link
    $wp_customize->add_setting(
      'whitepaper_sitemap_link_on',
      array(
        'default'    =>  'no',
        'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control( 'whitepaper_sitemap_link_on', array(
        'type' => 'radio',
        'section' => 'whitepaper_site_options',
        'settings' => 'whitepaper_sitemap_link_on',
        'label' => 'Show Sitemap Link?',
        'description' => 'Displays a custom link to the sitemap in the footer',
        'choices' => array(
          'yes' => 'Yes',
          'no' => 'No',
        ),
      )
    );

    function whitepaper_is_sitemap_link_on() {
      if(get_theme_mod('whitepaper_sitemap_link_on') == 'yes') {
        return true;
      } else {
        return false;
      }
    }

    $wp_customize->add_setting(
      'whitepaper_sitemap_link',
      array(
        'default'    =>  '',
        'transport'  =>  'refresh'
      )
    );

    $wp_customize->add_control( 'whitepaper_sitemap_link', array(
        'type' => 'text',
        'section' => 'whitepaper_site_options',
        'settings' => 'whitepaper_sitemap_link',
        'label' => 'Sitemap Link URL',
        'active_callback' => 'whitepaper_is_sitemap_link_on'
        )
      );

      //Site Credits
      $wp_customize->add_setting(
        'whitepaper_site_credits_on',
        array(
          'default'    =>  'no',
          'transport'  =>  'refresh'
        )
      );

      $wp_customize->add_control( 'whitepaper_site_credits_on', array(
          'type' => 'radio',
          'section' => 'whitepaper_site_options',
          'settings' => 'whitepaper_site_credits_on',
          'label' => 'Show Site Credits?',
          'description' => 'Displays a logo in the footer for whoever built the site.',
          'choices' => array(
            'yes' => 'Yes',
            'no' => 'No',
          ),
        )
      );

      function whitepaper_is_site_credits_on() {
        if(get_theme_mod('whitepaper_site_credits_on') == 'yes') {
          return true;
        } else {
          return false;
        }
      }

      $wp_customize->add_setting(
        'whitepaper_site_credits_logo',
        array(
          'default'    =>  '',
          'transport'  =>  'refresh'
        )
      );

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'whitepaper_site_credits_logo', array(
    				'settings'		=> 'whitepaper_site_credits_logo',
    				'section'		=> 'whitepaper_site_options',
    				'label'			=> 'Site Credit Logo',
    				'description'	=> 'Logo of the company or person who built the site',
            'active_callback' => 'whitepaper_is_site_credits_on'
    			)
    		)
    	);

      $wp_customize->add_setting(
        'whitepaper_site_credits_link',
        array(
          'default'    =>  '',
          'transport'  =>  'refresh'
        )
      );

      $wp_customize->add_control( 'whitepaper_site_credits_link', array(
          'type' => 'text',
          'section' => 'whitepaper_site_options',
          'settings' => 'whitepaper_site_credits_link',
          'label' => 'Site Credit Link',
          'active_callback' => 'whitepaper_is_site_credits_on'
          )
        );

}

add_action( 'customize_register', 'whitepaper_theme_customizer' );
?>
