<?php
/*
Template Name: Hero H1 Right Sidebar B
*/
?>

<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="col-12">
    <div class="row" id="page-hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
      <div class="col-12">
        <div class="row" id="page-hero-overlay">
          <div class="col-12">
            <div class="row" id="title-bar">
              <div class="col-12 col-lg-6 offset-lg-3">
                <?php get_template_part( 'templates/internal', 'title' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Breadcrumbs-->
  <?php get_template_part( 'templates/internal', 'breadcrumbs' ); ?>
  <!--End Breadcrumbs-->
  <div class="col-12">
    <div class="row" id="main-wrapper">
      <div class="col-12">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
              <?php get_template_part( 'templates/internal', 'loop' ); ?>
            </div>
            <div class="col-12 col-lg-3">
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
