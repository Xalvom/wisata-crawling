<?php
// This snippet will print out all of the post titles in the DevDungeon.com archive.
require_once('scrap/simple_html_dom.php'); // Get simple_html_dom.php from http://simplehtmldom.sourceforge.net/

$url="https://www.nativeindonesia.com/category/wisata/";

$teks = file_get_contents($url);

$temp = getStringBetween($teks, "var pageConfigData = ",";
        var configGlobal");

        $data = json_decode($temp);

?>