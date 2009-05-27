<h3><?php _e('Search'); ?></h3>
<form action="http://www.google.com.tr/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-0952188451968791:ut3pov-bpwi"/>
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="15" class="cse-search-box"/>
    <input type="submit" name="sa" value="Ara" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=tr"></script>

<ul id="vmenu">
    <li>
        <a href="#"><?php _e('Pages'); ?></a>
        <ul>
            <?php wp_list_pages('title_li='); ?>
        </ul>
    </li>
    <li>
        <a href="#">Bölümler</a>
        <ul>
            <li><a href="http://iibf.ogu.edu.tr/isletme">İşletme</a></li>
            <li><a href="http://iibf.ogu.edu.tr/iktisat">İktisat</a></li>
            <li><a href="http://iibf.ogu.edu.tr/maliye">Maliye</a></li>
            <li><a href="http://iibf.ogu.edu.tr/uluslar">Uluslararası İlişkiler</a></li>
        </ul>
    </li>
    <li>
        <a href="#"><?php _e('Recent Posts'); ?></a>
        <ul>
            <?php
                global $post;
                $myposts = get_posts('numberposts=7&offset=1&category=1');
                foreach($myposts as $post) :
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
         </ul> 
    </li>
    <li>
        <a href="#"><?php _e('Archives'); ?></a>
        <ul>
            <?php get_archives('monthly','10','custom','<li>','</li>'); ?>
        </ul>
    </li>
</ul>

<h3>İletişim</h3>
<ul>
    <li style="color: #444">
Eskişehir Osmangazi Üniversitesi<br>
İktisadi ve İdari Bilimler Fakültesi<br>
Meşelik Kampüsü<br>
26480 <i>Eskişehir</i><br><br>
<strong>Tel:</strong> +90 222 223 25 23<br>
<strong>Fax:</strong> +90 222 229 25 27<br>
    </li>
</ul>

<h3>Site Yönetimi</h3>
<ul>
    <?php wp_register(); ?>
    <li><?php wp_loginout(); ?></li>
    <?php wp_meta(); ?>
    <li><a href="mailto:gokmengorgen@yahoo.com.tr">Hata Bildir</a></li>
</ul>
