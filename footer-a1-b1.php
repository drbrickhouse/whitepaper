      <footer>
        <div class="container-fluid" id="footer-a">
          <?php dynamic_sidebar('footer-a1') ?>
        </div>
        <div class="container-fluid" id="footer-b">
          <?php dynamic_sidebar('footer-b1') ?>
        </div>
        <?php get_template_part( 'template-parts/footer/content', 'copyright' ); ?>
        <?php wp_footer(); ?>
      </footer>
    </div>
  </body>
</html>
