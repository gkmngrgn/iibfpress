<?php

$title = "Eskişehir Osmangazi Üniversitesi - İktisadi ve İdari Bilimler Fakültesi";
$charset = "UTF-8";

$url = "http://localhost/~gkmngrgn/ogu";

$cssDir = $url . "/css";
$jsDir = $url . "/js";
$imageDir = $url . "/images";

function about() {
    include('pages/about.php');
}

function contact() {
    echo "İletişim sayfası";
}

function mainPage() {
    echo "Ana sayfa";
}

?>
