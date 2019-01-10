<?php
/*
Template Name: Hero Left Sidebar B
*/
?>

<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="col-12">
    <div class="row page-hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
      <div class="col-12">
        <div class="row page-hero-overlay">
        </div>
      </div>
    </div>
  </div>
  <!--Breadcrumbs-->
  <?php get_template_part( 'templates/internal', 'breadcrumbs' ); ?>
  <!--End Breadcrumbs-->
  <div class="col-12">
    <div class="row main-wrapper">
      <div class="col-12">
        <div class="row title-bar">
          <div class="col-12">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 order-lg-2 order-xl-2">
              <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                   the_content();
              endwhile; endif; ?>
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
