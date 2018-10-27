<?php
/*
Template Name: Hero H1 Left Sidebar A
*/
?>

<!--Header-->

<?php
$header_choice = get_field('header');
if ($header_choice == 'default') {
  get_header();
} else {
  get_header($header_choice);
}
?>

<!--End Header-->

<!--Content-->
<div class="row">
  <div class="col-lg-12">
    <div class="row page-hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
      <div class="col-lg-12">
        <div class="row page-hero-overlay">
          <div class="col-lg-12 title-bar">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="row breadcrumbs">
      <div class="col-lg-12">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
      </div>
    </div>
  </div>
  <div class="row main-wrapper">
    <div class="col-lg-12">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-12 col-lg-8 col-lg-push-4">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                 the_content();
            endwhile; endif; ?>
          </div>
          <div class="col-12 col-lg-4 col-lg-pull-8">
            <?php dynamic_sidebar('sidebar-a') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Content-->

<!--Footer-->

<?php
$footer_choice = get_field('footer');
if ($header_footer == 'default') {
  get_footer();
} else {
  get_footer($footer_choice);
}
?>

<!--End Footer-->
