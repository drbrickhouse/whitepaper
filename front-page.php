<?php
/*
Template Name: Home
*/
?>

<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<?php if( is_active_sidebar('home-1') ) { ?>
  <div class="row" id="home-1-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-1') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-2') ) { ?>
  <div class="row" id="home-2-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-2') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-3') ) { ?>
  <div class="row" id="home-3-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-3') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-4') ) { ?>
  <div class="row" id="home-4-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-4') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-5') ) { ?>
  <div class="row" id="home-5-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-5') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-6') ) { ?>
  <div class="row" id="home-6-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-6') ?>
    </div>
  </div>
<?php } ?>

<!--End Content-->

<!--Footer-->

<?php get_template_part( 'templates/pages', 'footer' ); ?>

<!--End Footer-->
