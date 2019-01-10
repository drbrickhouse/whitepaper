<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <!--Breadcrumbs-->
  <?php get_template_part( 'templates/internal', 'breadcrumbs' ); ?>
  <!--End Breadcrumbs-->
  <div class="col-12">
    <div class="row main-wrapper">
      <div class="col-12">
        <div class="row title-bar">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="jumbotron-post">
                  <?php
                    $size = ('full');
                    $attr = ['class' => "img-fluid"];
                    the_post_thumbnail($size, $attr);
                  ?>
                </div>
                <div class="col-12">
                  <?php the_content(); ?>
                  <?php endwhile; else : ?>
                  <p><?php _e('Oh no! There\'s no content here!') ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--End Content-->

<!--Start Footer-->

<?php get_template_part( 'templates/pages', 'footer' ); ?>

<!--End Footer-->
