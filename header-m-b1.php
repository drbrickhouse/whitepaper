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
        <div class="col-lg-12">
          <div class="row top-area">
            <div class="col-lg-12">
              <?php dynamic_sidebar('top-bar') ?>
              <?php dynamic_sidebar('masthead') ?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 header-b">
              <?php dynamic_sidebar('header-b1') ?>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--End Header-->

    <div class="row">
      <div class="col-lg-12">
        <div class="row full-wrapper">
          <div class="col-lg-12">
