<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=width-device , initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link href="<?php echo get_stylesheet_directory_uri().'/images/favicon.ico' ?>" rel="shortcut icon">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container-fluid">

    <!--Site Header-->

    <header>
      <div class="row top">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <?php dynamic_sidebar('top-bar') ?>
            </div>
          </div>
          <div class="row header-a">
            <div class="col-12">
              <?php dynamic_sidebar('header-a1') ?>
            </div>
          </div>
          <div class="row header-b">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 order-lg-1 order-xl-1">
              <?php dynamic_sidebar('header-b1') ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 order-lg-3 order-xl-3">
              <?php dynamic_sidebar('header-b3') ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-lg-2 order-xl-2">
              <?php dynamic_sidebar('header-b2') ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--End Header-->

    <div class="row">
      <div class="col-12">
        <div class="row full-wrapper">
          <div class="col-12">
