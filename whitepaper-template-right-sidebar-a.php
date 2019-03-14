<?php
/*
Template Name: Right Sidebar A
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
      <div class="col-12 col-lg-8">
        <?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
      </div>
      <aside class="col-12 col-lg-4">
        <?php dynamic_sidebar('sidebar-a') ?>
      </aside>
    </div>
  </article>
</main>

<!--End Content-->

<!--Footer-->

<?php get_template_part( 'template-parts/page/content', 'footer' ); ?>

<!--End Footer-->
