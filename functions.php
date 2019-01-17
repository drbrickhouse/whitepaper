<?php
//Stylesheets
function whitepaper_theme_styles() {
  //Font Awesome
  wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css');
  //Bootstrap
  wp_enqueue_style('boostrap_css', get_template_directory_uri() . '/css/vendor/bootstrap.min.css');
  //Base CSS
  wp_enqueue_style('base_css', get_template_directory_uri() . '/css/whitepaper_base.css');
  //Main CSS
  wp_enqueue_style('main_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'whitepaper_theme_styles');

//Javascript
function whitepaper_theme_js() {
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'whitepaper_theme_js');

//Enable features
function whitepaper_enable_feautres() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
}

add_action('init', 'whitepaper_enable_feautres');


//Disable Adding Paragraphs
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//Remove the Read More Dots
function whitepaper_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'whitepaper_excerpt_more' );

//Navigation Menus
function register_theme_menus() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu', 'bootpress'),
    'footer-menu' => __('Footer Menu', 'bootpress'),
    ));
}

add_action('init', 'register_theme_menus');

//Register Custom Navigation Walker
if(file_exists(get_stylesheet_directory() . '/wp_bootstrap_navwalker.php')) {
  require_once(get_stylesheet_directory() . '/wp_bootstrap_navwalker.php');
} else {
  require_once(get_template_directory() . '/wp_bootstrap_navwalker.php');
}

//WooCommerce
function whitepaper_woocommerce_setup() {
  //Declare WooCommerce Support
  add_theme_support( 'woocommerce' );

  //Add support for image gallery options
  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'whitepaper_woocommerce_setup' );

function whitepaper_woocommerce_edit_actions() {
  remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
  remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
  remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
}

add_action( 'after_setup_theme', 'whitepaper_woocommerce_edit_actions' );

//Shortcodes
function whitepaper_shortcode_title(){
  return '<?php the_title(); ?>';
}

function whitepaper_shortcode_content(){
  return '<?php the_content(); ?>';
}

function whitepaper_shortcode_excerpt(){
  return'<?php the_excerpt(); ?>';
}

function whitepaper_shortcode_featured_image(){
  return '<?php the_post_thumbnail(); ?>';
}

function whitepaper_shortcode_category(){
  return '<?php
  $whitspace_category_post_id = get_the_ID();
  $cats = get_the_category(); ?>
  <a href="<?php echo get_category_link($cats[0]->cat_ID); ?>"><?php echo $cats[0]->name; ?></a>';
}

function whitepaper_shortcode_featured_image_url(){
  return '<?php the_post_thumbnail_url(); ?>';
}

function whitepaper_shortcode_permalink(){
  return '<?php the_permalink(); ?>';
}

function whitepaper_shortcode_search_form(){
  return '<?php get_search_form(); ?>';
}

function whitepaper_shortcode_cta_link(){
  return '<?php the_field(link); ?>';
}

function whitepaper_shortcode_cta_icon() {
  return '<i class="fa <?php the_field(font_awesome_icon_class); ?>"></i>';
}

function whitepaper_shortcode_event_start_date($format) {
  extract (shortcode_atts(array(
    'dateformat' => 'M jS'
  ), $format));

  $output = '<?php echo eo_get_the_start("' . $dateformat . '"); ?>';

  return $output;
}

function whitepaper_shortcode_event_end_date($format) {
  extract (shortcode_atts(array(
    'dateformat' => 'M jS'
  ), $format));

  $output = '<?php echo eo_get_the_end("' . $dateformat . '"); ?>';

  return $output;
}

function whitepaper_shortcode_event_start_time($format) {
  extract (shortcode_atts(array(
    'timeformat' => 'g:i A'
  ), $format));

  $output = '<?php echo eo_get_the_start("' . $timeformat . '"); ?>';

  return $output;
}



add_shortcode( 'the_title', 'whitepaper_shortcode_title' );
add_shortcode( 'the_content', 'whitepaper_shortcode_content' );
add_shortcode( 'the_excerpt', 'whitepaper_shortcode_excerpt' );
add_shortcode( 'featured_image', 'whitepaper_shortcode_featured_image' );
add_shortcode( 'the_category', 'whitepaper_shortcode_category' );
add_shortcode( 'featured_image_url', 'whitepaper_shortcode_featured_image_url' );
add_shortcode( 'the_permalink', 'whitepaper_shortcode_permalink' );
add_shortcode( 'search_form', 'whitepaper_shortcode_search_form' );
add_shortcode( 'cta_link', 'whitepaper_shortcode_cta_link' );
add_shortcode( 'cta_icon', 'whitepaper_shortcode_cta_icon' );
add_shortcode( 'event_start_date', 'whitepaper_shortcode_event_start_date' );
add_shortcode( 'event_end_date', 'whitepaper_shortcode_event_end_date' );
add_shortcode( 'event_start_time', 'whitepaper_shortcode_event_start_time' );

//Custom fields
if(function_exists("register_field_group"))
{
  register_field_group(array (
		'id' => 'acf_templates',
		'title' => 'Templates',
		'fields' => array (
			array (
				'key' => 'field_5975529261dbc',
				'label' => 'Header',
				'name' => 'header',
				'type' => 'select',
				'choices' => array (
					'default' => 'Default',
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
					'm-b123' => 'M-B123',
				),
				'default_value' => 'default',
				'allow_null' => 0,
				'multiple' => 0,
      ),
        array (
  				'key' => 'field_597812602b921',
  				'label' => 'Footer',
  				'name' => 'footer',
  				'type' => 'select',
  				'choices' => array (
  					'default' => 'Default',
            'a1-b1' => 'A1-B1',
            'a1-b2' => 'A1-B2',
            'a1-b12' => 'A1-B12',
            'a1-b13' => 'A1-B13',
            'a1-b23' => 'A1-B23',
            'a1-b123' => 'A1-B123',
            'b12' => 'B12'
  				),
  				'default_value' => 'default',
  				'allow_null' => 0,
  				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_ctas',
		'title' => 'CTA\'s',
		'fields' => array (
			array (
				'key' => 'field_58f2f06cb45e7',
				'label' => 'Link',
				'name' => 'link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
      array (
				'key' => 'field_59753a49a55db',
				'label' => 'Font Awesome Icon Class',
				'name' => 'font_awesome_icon_class',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'fa-icon-name',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'ctas',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_portfolio',
		'title' => 'Portfolio',
		'fields' => array (
			array (
				'key' => 'field_58f2efb43e07f',
				'label' => 'CMS',
				'name' => 'cms',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
  register_field_group(array (
		'id' => 'acf_locations',
		'title' => 'Locations',
		'fields' => array (
			array (
				'key' => 'field_5a95ae4f2cfbd',
				'label' => 'Address Line 1',
				'name' => 'address_line_1',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a95ae8e2cfbe',
				'label' => 'Address Line 2',
				'name' => 'address_line_2',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a95aeaf2cfbf',
				'label' => 'City',
				'name' => 'city',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a95aeb72cfc0',
				'label' => 'State',
				'name' => 'state',
				'type' => 'select',
				'choices' => array (
					'Alabama' => 'Alabama',
					'Alaska' => 'Alaska',
					'Arizona' => 'Arizona',
					'Arkansas' => 'Arkansas',
					'California' => 'California',
					'Colorado' => 'Colorado',
					'Connecticut' => 'Connecticut',
					'Delaware' => 'Delaware',
					'Florida' => 'Florida',
					'Georgia' => 'Georgia',
					'Hawaii' => 'Hawaii',
					'Idaho' => 'Idaho',
					'Illinois' => 'Illinois',
					'Indiana' => 'Indiana',
					'Iowa' => 'Iowa',
					'Kansas' => 'Kansas',
					'Kentucky' => 'Kentucky',
					'Louisiana' => 'Louisiana',
					'Maine' => 'Maine',
					'Maryland' => 'Maryland',
					'Massachusetts' => 'Massachusetts',
					'Michigan' => 'Michigan',
					'Minnesota' => 'Minnesota',
					'Mississippi' => 'Mississippi',
					'Missouri' => 'Missouri',
					'Montana' => 'Montana',
					'Nebraska' => 'Nebraska',
					'Nevada' => 'Nevada',
					'New Hampshire' => 'New Hampshire',
					'New Jersey' => 'New Jersey',
					'New Mexico' => 'New Mexico',
					'New York' => 'New York',
					'North Carolina' => 'North Carolina',
					'North Dakota' => 'North Dakota',
					'Ohio' => 'Ohio',
					'Oklahoma' => 'Oklahoma',
					'Oregon' => 'Oregon',
					'Pennsylvania' => 'Pennsylvania',
					'Rhode Island' => 'Rhode Island',
					'South Carolina' => 'South Carolina',
					'South Dakota' => 'South Dakota',
					'Tennessee' => 'Tennessee',
					'Texas' => 'Texas',
					'Utah' => 'Utah',
					'Vermont' => 'Vermont',
					'Virginia' => 'Virginia',
					'Washington' => 'Washington',
					'Washington DC' => 'Washington DC',
					'West Virginia' => 'West Virginia',
					'Wisconsin' => 'Wisconsin',
					'Wyoming' => 'Wyoming',
				),
				'default_value' => 'Alabama',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5a95af542cfc1',
				'label' => 'ZIP Code',
				'name' => 'zip_code',
				'type' => 'number',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
        'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a95af6a2cfc2',
				'label' => 'Phone Number',
				'name' => 'phone_number',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
        'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a95af9b2cfc3',
				'label' => 'Fax Number',
				'name' => 'fax_number',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5a95afe42cfc4',
				'label' => 'Email Address',
				'name' => 'email_address',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'locations',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
  register_field_group(array (
		'id' => 'acf_staff',
		'title' => 'Staff',
		'fields' => array (
			array (
				'key' => 'field_5a99cbc902e95',
				'label' => 'Phone Number',
				'name' => 'phone_number',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a99cc0a02e96',
				'label' => 'Email Address',
				'name' => 'email_address',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'staff',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


//Global Variables
function whitepaper_global_variables() {
	global $post_types;
	$post_types = get_post_types();
}

add_action( 'init', 'whitepaper_global_variables', 999 );

//Widgets
  //Allow Shortcodes in Widgets
  add_filter( 'widget_text', 'shortcode_unautop');
  add_filter('widget_text', 'do_shortcode', 101);
  add_filter('widget_custom_html_content', 'do_shortcode');

function whitepaper_create_widget($name, $id, $description) {
  register_sidebar(array(
    'name' => __($name),
    'id' => $id,
    'description' => __($description),
    'before_widget' => '<div class="row widget'.' '.$id.' '.'"><div class="col-12"><div class="row widget-inner"><div class="col-12">',
    'after_widget' => '</div></div></div></div>',
    'before_title' => '<h2 class="module-heading">',
    'after_title' => '</h2>'
  ));
}

whitepaper_create_widget('Top Bar', 'top-bar', 'The topmost section of the website, generally used for a phone number or CTA');
whitepaper_create_widget('Masthead', 'masthead', 'An area for widets above the menu');
whitepaper_create_widget('Header A1', 'header-a1', '');
whitepaper_create_widget('Header A2', 'header-a2', '');
whitepaper_create_widget('Header A3', 'header-a3', '');
whitepaper_create_widget('Header B1', 'header-b1', '');
whitepaper_create_widget('Header B2', 'header-b2', '');
whitepaper_create_widget('Header B3', 'header-b3', '');
whitepaper_create_widget('Footer A1', 'footer-a1', '');
whitepaper_create_widget('Footer B1', 'footer-b1', '');
whitepaper_create_widget('Footer B2', 'footer-b2', '');
whitepaper_create_widget('Footer B3', 'footer-b3', '');
whitepaper_create_widget('Sidebar A', 'sidebar-a', 'The first of two available sidebars in this theme');
whitepaper_create_widget('Sidebar B', 'sidebar-b', 'The second of two available sidebars in this theme');
?>
