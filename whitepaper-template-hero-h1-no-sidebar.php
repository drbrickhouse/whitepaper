<?php
/*
Template Name: Hero H1 No Sidebar
*/
?>

<!--Header-->

<?php get_header(); ?>

<!--End Header-->

<!--Content-->

<main>
  <article>
    <div class="container-fluid" id="page-hero" <?php if (has_post_thumbnail()) { ?>style="background-image: url('<?php the_post_thumbnail_url() ?>')"<?php } ?>>
      <div class="row" id="page-hero-overlay">
        <div class="col-12">
          <div class="row" id="title-bar">
            <div class="col-12">
              <?php get_template_part( 'template-parts/internal/content', 'title' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Breadcrumbs-->

    <?php get_template_part( 'template-parts/internal/content', 'breadcrumbs' ); ?>

    <!--End Breadcrumbs-->

    <div class="container" id="main-wrapper">
      <div class="row" id="content-wrapper">
        <div class="col-12">
          <?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
        </div>
      </div>
    </div>
  </article>
</main>

<!--End Content-->

<!--Footer-->

<?php get_template_part( 'template-parts/page/content', 'footer' ); ?>

<!--End Footer-->
