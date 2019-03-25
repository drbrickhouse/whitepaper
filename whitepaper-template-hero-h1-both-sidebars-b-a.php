<?php
/*
Template Name: Hero H1 Both Sidebars B-A
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
        <div class="col-md-12 col-lg-8 col-xl-6 order-lg-2 order-xl-2">
          <?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
        </div>
        <aside class="col-md-12 col-lg-4 col-xl-3 order-lg-1 order-xl-1">
          <?php dynamic_sidebar('sidebar-b') ?>
        </aside>
        <aside class="col-md-12 col-lg-12 col-xl-3 order-lg-3 order-xl-3">
          <?php dynamic_sidebar('sidebar-a') ?>
        </aside>
      </div>
    </div>
  </article>
</main>

<!--End Content-->

<!--Footer-->

<?php get_footer(); ?>

<!--End Footer-->
