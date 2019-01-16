                <div class="row">
                  <div class="col-12">
                    <footer>
                      <div class="row" id="footer-a">
                        <div class="col-12">
                          <?php dynamic_sidebar('footer-a1') ?>
                        </div>
                      </div>
                      <div class="row" id="footer-b">
                        <div class="col-12">
                          <?php dynamic_sidebar('footer-b1') ?>
                        </div>
                      </div>
                      <div class="row" id="copyright">
                        <div class="col-12">
                          <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> | <a href="/sitemap/" title="sitemap">Sitemap</a></p>
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
