<!--Header-->

<?php get_template_part( 'templates/pages', 'header' ); ?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="col-12">
    <div class="row breadcrumbs">
      <div class="col-12">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
      </div>
    </div>
  </div>
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
            <div class="col-lg-8">
              <div class="row state-description">
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
              <div class="row state-issues">
                <div class="col-12">
                  <h2><?php the_title(); ?> Legal Issues</h2>
                </div>
              </div>
              <div class="row state-lawyers">
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

<?php get_template_part( 'templates/pages', 'footer' ); ?>

<!--End Footer-->
