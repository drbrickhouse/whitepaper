<!--Header-->

<?php get_header (); ?>

<!--End Header-->

<!--Start Content-->

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="jumbotron-post">
        <?php
          $size = ('full');
          $attr = ['class' => "img-fluid"];
          the_post_thumbnail($size, $attr);
        ?>
      </div>
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
        <p><?php _e('Oh no! There\'s no content here!') ?>
    <?php endif; ?>
      </div>
<!--End Content-->


<!--Start Footer-->

<?php get_footer(); ?>

<!--End Footer-->
