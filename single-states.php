<!--Header-->

<?php get_header(); ?>

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
            <div class="col-lg-8">
              <div class="row" id="state-description">
                <div class="col-12">
                  <?php
                  if ( have_posts() ) : while( have_posts() ) : the_post();
                    $featured_img_size = ('full');
                    $featured_img_attr = ['class' => "img-fluid alignleft"];
                    the_post_thumbnail($featured_img_size, $featured_img_attr);
                    the_content();
                  endwhile; endif;
                  ?>
                </div>
              </div>
              <div class="row" id="state-issues">
                <div class="col-12">
                  <h2><?php the_title(); ?> Legal Issues</h2>
                </div>
              </div>
              <div class="row" id="state-lawyers">
                <div class="col-12">
                  <h2><?php the_title(); ?> Lawyers</h2>
                </div>
              </div>

            </div>
            <div class="col-lg-4">
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

<?php get_footer(); ?>

<!--End Footer-->
