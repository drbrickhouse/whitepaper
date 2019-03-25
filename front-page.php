<?php
/*
Template Name: Home
*/
?>

<!--Header-->

<?php get_header(); ?>

<!--End Header-->

<!--Content-->

<div class="container-fluid">
<?php get_template_part( 'template-parts/internal/content', 'loop' ); ?>
</div>

<!--End Content-->

<!--Footer-->

<?php get_footer(); ?>

<!--End Footer-->
