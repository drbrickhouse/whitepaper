<?php
/*
Template Name: Both Sidebars A-B
*/
?>

<!--Header-->

<?php get_header(); ?>

<!--End Header-->

<!--Content-->

<!--Breadcrumbs-->

<?php get_template_part( 'template-parts/internal/content', 'breadcrumbs' ); ?>

<!--End Breadcrumbs-->

<main class="container">
  <article>
    <div class="row" id="title-bar">
      <div class="col-12">
        <?php get_template_part( 'template-parts/internal/content', 'title' ); ?>
      </div>
    </div>
    <div class="row" id="content-wrapper">
      <div class="col-md-12 col-lg-8 col-xl-6 col-xl-3 order-lg-2 order-xl-2">
        <?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
      </div>
      <aside class="col-md-12 col-lg-4 col-xl-3 col-xl-3 order-lg-1 order-xl-1">
        <?php dynamic_sidebar('sidebar-a') ?>
      </aside>
      <aside class="col-md-12 col-lg-12 col-xl-3 col-xl-3 order-lg-3 order-xl-3">
        <?php dynamic_sidebar('sidebar-b') ?>
      </aside>
    </div>
  </article>
</main>

<!--End Content-->

<!--Footer-->

<?php get_template_part( 'template-parts/page/content', 'footer' ); ?>

<!--End Footer-->
