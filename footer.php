                <div class="row">
                  <div class="col-lg-12">
                    <footer>
                      <div class="row footer-wrapper">
                        <div class="col-lg-12">
                          <?php dynamic_sidebar('footer-a1') ?>
                          <?php dynamic_sidebar('footer-b1') ?>
                        </div>
                      </div>
                      <div class="row copyright">
                        <div class="col-lg-12">
                          <div class="row copyright-inner">
                            <div class="col-12 col-lg-6">
                              <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> | <a href="/sitemap/" title="sitemap">Sitemap</a></p>
                            </div>
                            <div class="col-12 col-lg-6">
                              <p>Site by: <a href="https://tenpeaksdigital.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . "/images/ten-peaks-logo.png" ?>"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php wp_footer(); ?>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
