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
            <h1 class="page-title"><?php the_archive_title(); ?></h1>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <?php if(get_the_post_thumbnail()) : ?>
                  <div class="tumbnail-container">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
                <p class="post-date"><?php the_time('F j, Y'); ?></p>
              </div>
              <?php endwhile; ?>
              <div class="navigation">
                <div class="next-posts alignright"><?php next_posts_link(); ?></div>
                <div class="prev-posts alignleft"><?php previous_posts_link(); ?></div>
              </div>
              <?php else : ?>
                <p>We're sorry. There are no results for your query.</p>
              <?php endif; ?>
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
