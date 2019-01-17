<?php
/*
Template Name: Hero No Sidebar
*/
?>

<!--Header-->

<?php get_template_part( 'template-parts/page/content', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="col-12">
    <div class="row" id="page-hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
      <div class="col-12">
        <div class="row" id="page-hero-overlay">
        </div>
      </div>
    </div>
  </div>
  <!--Breadcrumbs-->
  <?php get_template_part( 'template-parts/internal/content', 'breadcrumbs' ); ?>
  <!--End Breadcrumbs-->
  <div class="col-12">
    <div class="row" id="main-wrapper">
      <div class="col-12">
        <div class="row" id="title-bar">
          <div class="col-12 col-lg-8 offset-lg-2">
            <?php get_template_part( 'template-parts/internal/content', 'title' ); ?>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col- 12 col-lg-8 offset-lg-2">
              <?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
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
