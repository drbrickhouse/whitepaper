<?php
/*
Template Name: Archive
*/
?>

<!--Header-->

<?php get_header (); ?>

<!--End Header-->

<!--Content-->
<div class="main-wrapper">
  <div class="row">
    <div class="col-12">
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

<!--End Content-->

<!--Footer-->

<?php get_footer(); ?>

<!--End Footer-->
