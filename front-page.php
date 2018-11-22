<?php
/*
Template Name: Home
*/
?>

<!--Header-->

<?php
$header_choice = get_field('header');
if ($header_choice == 'default') {
  get_header();
} else {
  get_header($header_choice);
}
?>

<!--End Header-->





<!--Content-->
<?php if( is_active_sidebar('home-1') ) { ?>
  <div class="row home-1-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-1') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-2') ) { ?>
  <div class="row home-2-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-2') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-3') ) { ?>
  <div class="row home-3-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-3') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-4') ) { ?>
  <div class="row home-4-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-4') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-5') ) { ?>
  <div class="row home-5-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-5') ?>
    </div>
  </div>
<?php } ?>
<?php if( is_active_sidebar('home-6') ) { ?>
  <div class="row home-6-wrapper">
    <div class="col-12">
      <?php dynamic_sidebar('home-6') ?>
    </div>
  </div>
<?php } ?>

<!--End Content-->





<!--Footer-->

<?php
$footer_choice = get_field('footer');
if ($footer_choice == 'default') {
  get_footer();
} else {
  get_footer($footer_choice);
}
?>

<!--End Footer-->
