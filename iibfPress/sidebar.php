<div class="span-6 first">
  <div id="sidebar">
    <ul>
    <li class="s">
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </li>

    <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
	 <li><h2>Author</h2>
	   <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
	 </li>
	 -->

    <?php if ( is_404() || is_category() || is_day() || is_month() ||
	  is_year() || is_search() || is_paged() ) {
	  ?> <li>

      <?php /* If this is a 404 page */ if (is_404()) { ?>
      <?php /* If this is a category archive */ } elseif (is_category()) { ?>
      <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

      <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
      <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
	for the day <?php the_time('l, F jS, Y'); ?>.</p>

      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
	for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
	for the year <?php the_time('Y'); ?>.</p>

      <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
      <p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
	for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

      <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

      <?php } ?>

    </li> <?php }?>





    <li><h2>Arşiv</h2>
      <ul>
	<?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>

    <?php wp_list_categories('show_count=0&title_li=<h2>Kategoriler</h2>'); ?>
    <?php wp_list_bookmarks('title_li=<h2>Bağlantılar</h2>'); ?>
  </ul>

  <div id="contact">
    <h3>İletişim</h3>
    <p>Eskişehir Osmangazi Üniversitesi İktisadi ve İdari Bilimler Fakültesi Meşelik Kampüsü</p>
    <p>26480 Eskişehir</p><br />
    <p><strong>Tel:</strong> +90 222 223 25 23</p>
    <p><strong>Fax:</strong> +90 222 229 25 27</p>

    <h3>Site Yönetimi</h3>
    <p><?php wp_loginout(); ?></p>
    <p><?php wp_meta(); ?></p>
    <p><a href="http://www.google.com/recaptcha/mailhide/d?k=014BUBWL9QnLGtpvtZG0a7RA==&c=F2t0xKKeNpbmga9Rqw4sH4ew6JVd04R1Hpacd3BWEqc=">Hata bildir</a></p>
  </div>
</div>
</div><!-- /sidebar -->
