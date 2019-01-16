<?php
/*
Template Name: Left Sidebar B
*/
?>

<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <!--Breadcrumbs-->
  <?php get_template_part( 'templates/internal', 'breadcrumbs' ); ?>
  <!--End Breadcrumbs-->
  <div class="col-12">
    <div class="row" id="main-wrapper">
      <div class="col-12">
        <div class="row" id="title-bar">
          <div class="col-12">
            <?php get_template_part( 'templates/internal', 'title' ); ?>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 order-lg-2 order-xl-2">
              <?php get_template_part( 'templates/internal', 'loop' ); ?>
            </div>
            <div class="col-12 col-sm-12 col-lg-3 col-xl-3 order-lg-1 order-xl-1">
              <?php dynamic_sidebar('sidebar-b') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Content-->

<!--Footer-->

<?php get_template_part( 'templates/pages', 'footer' ); ?>

<!--End Footer-->
