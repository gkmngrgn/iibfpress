<div class="span-6 first">
  <div id="sidebar">
    <ul>
    <li class="s">
      <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </li>

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
