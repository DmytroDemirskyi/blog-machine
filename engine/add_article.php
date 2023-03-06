<?php 

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://ru.wikipedia.org/wiki/Sikorsky_UH-60_Black_Hawk");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$page = curl_exec($ch);

$page1 = strstr($page, "<h1");
$page1 = strstr($page1, "<h2", true);














curl_close($ch);