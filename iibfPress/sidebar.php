<div class="left">
    <h3>Arama Yap</h3>
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
            <a href="#">Bölümler</a>
            <ul>
                <li><a href="http://iibf.ogu.edu.tr/isletme">İşletme</a></li>
                <li><a href="http://iibf.ogu.edu.tr/iktisat">İktisat</a></li>
                <li><a href="http://iibf.ogu.edu.tr/maliye">Maliye</a></li>
                <li><a href="http://iibf.ogu.edu.tr/uluslar">Uluslararası İlişkiler</a></li>
            </ul>
        </li>

        <li>
            <a href="#">Sayfalar</a>
            <ul>
                <?php include('menu.php'); ?>
            </ul>
        </li>
        <li><a href="http://iibf.ogu.edu.tr/dergi">İİBF Dergisi</a></li>
        <li><a href="http://iibf.ogu.edu.tr/karmer">Kariyer Merkezi</a></li>
        <li><a href="http://193.140.141.9:7777/pls/osmangaziuniversitesibilgisistemi/asp.home">Öğrenci Bilgi Sistemi</a></li>
    </ul>

    <h3>Duyurular</h3>
    <div id="notice">
        <ul>
            <!--<marquee direction="up" height="150px">-->
                <?php notices() ?>
            <!--</marquee>-->
        </ul>
    </div>

    <h3>Site Yönetimi</h3>
    <ul>
        <li><a href="mailto:gokmengorgen@yahoo.com.tr">Hata Bildir</a></li>
    </ul>
</div>
