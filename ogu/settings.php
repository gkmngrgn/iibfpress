<?php

$title = "Eskişehir Osmangazi Üniversitesi - İktisadi ve İdari Bilimler Fakültesi";
$charset = "UTF-8";

$url = "http://localhost/~gkmngrgn/ogu";

$currentUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

$cssDir = $url . "/css";
$jsDir = $url . "/js";
$imageDir = $url . "/images";

function mainPage() {
    include('pages/mainpage.php');
}

function administration() {
    include('pages/administration.php');
}

function facmem() {
    include('pages/facmem.php');
}

function lessons() {
    include('pages/lessons.php');
}

function contact() {
    echo "İletişim sayfası";
}

?>
