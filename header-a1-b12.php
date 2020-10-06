<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=width-device , initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php if(!empty(get_theme_mod('whitepaper_favicon'))) { ?><link href="<?php echo get_theme_mod('whitepaper_favicon') ?>" rel="shortcut icon"><?php } ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!--Site Header-->

    <header>
      <div class="container-fluid" id="top-area">
        <?php dynamic_sidebar('top-bar') ?>
      </div>
      <div class="container-fluid" id="header-a">
        <?php dynamic_sidebar('header-a1') ?>
      </div>
      <div class="container-fluid" id="header-b">
        <div class="row">
          <div class="col-10 col-sm-10 col-md-11 col-lg-3 col-xl-3 order-1" id="header-b1">
            <?php dynamic_sidebar('header-b1') ?>
          </div>
          <div class="col-2 col-sm-2 col-md-1 col-lg-12 col-xl-12 order-2 order-lg-3" id="header-b1-1">
            <?php dynamic_sidebar('header-b1-1') ?>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 order-3 order-lg-2" id="header-b2">
            <?php dynamic_sidebar('header-b2') ?>
          </div>
        </div>
      </div>
    </header>

    <!--End Header-->

    <div id="full-wrapper">
