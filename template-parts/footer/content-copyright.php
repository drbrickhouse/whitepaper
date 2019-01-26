<div class="container-fluid" id="copyright">
  <div class="row" id="copyright-inner">
    <div class="col-12 col-sm-12 col-lg-6 text-center text-lg-left">
      <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> <?php if(get_theme_mod('whitepaper_sitemap_link_on') == 'yes') { ?> | <a href="<?php echo get_theme_mod('whitepaper_sitemap_link') ?>" title="sitemap">Sitemap</a> <?php } ?></p>
    </div>
    <div class="col-12 col-sm-12 col-lg-6 text-center text-lg-right">
      <?php if(get_theme_mod('whitepaper_site_credits_on') == 'yes') { ?>
        <p>Site by: <a href="<?php echo get_theme_mod('whitepaper_site_credits_link') ?>"><img src="<?php echo get_theme_mod('whitepaper_site_credits_logo') ?>"></a>
      <?php } ?>
    </div>
  </div>
</div>
