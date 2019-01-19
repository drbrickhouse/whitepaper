      <footer>
        <div class="container-fluid" id="footer-a">
          <?php dynamic_sidebar('footer-a1') ?>
        </div>
        <div class="container-fluid" id="footer-b">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <?php dynamic_sidebar('footer-b1') ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <?php dynamic_sidebar('footer-b2') ?>
            </div>
          </div>
        </div>
        <?php get_template_part( 'template-parts/footer/content', 'copyright' ); ?>
        <?php wp_footer(); ?>
      </footer>
    </div>
  </body>
</html>
