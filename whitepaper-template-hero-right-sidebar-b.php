<?php
/*
Template Name: Hero Right Sidebar B
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
  <div class="page-hero" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
    <div class="page-hero-overlay">
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
  <div class="col-lg-12">
    <div class="row main-wrapper">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12 title-bar">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
              <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                   the_content();
              endwhile; endif; ?>
            </div>
            <div class="col-12 col-lg-3">
              <?php dynamic_sidebar('sidebar-b') ?>
            </div>
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
