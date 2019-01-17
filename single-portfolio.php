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
          <div class="col-12 col-lg-8 offset-lg-2">
            <?php get_template_part( 'template-parts/internal/content', 'title' ); ?>
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

<?php get_template_part( 'template-parts/page/content', 'footer' ); ?>

<!--End Footer-->
