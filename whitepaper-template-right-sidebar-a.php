<?php
/*
Template Name: Right Sidebar A
*/
?>

<!--Header-->

<?php get_template_part( 'template-parts/page/content', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <!--Breadcrumbs-->
  <?php get_template_part( 'template-parts/internal/content', 'breadcrumbs' ); ?>
  <!--End Breadcrumbs-->
  <div class="col-12">
    <div class="row" id="main-wrapper">
      <div class="col-12">
        <div class="row" id="title-bar">
          <div class="col-12 col-lg-6 offset-lg-3">
            <?php get_template_part( 'template-parts/internal/content', 'title' ); ?>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
              <?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
            </div>
            <div class="col-12 col-lg-3">
              <?php dynamic_sidebar('sidebar-a') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Content-->

<!--Footer-->

<?php get_template_part( 'template-parts/page/content', 'footer' ); ?>

<!--End Footer-->
