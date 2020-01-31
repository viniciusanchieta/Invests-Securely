<?php

$server = filter_input(INPUT_SERVER, 'SERVER_NAME');

$urlLink = "";
$mystring = $server;
$findme = 'localhost';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    $urlLink = "http://192.168.15.2/investssecurely/";
} else {
    $urlLink = "http://localhost/investssecurely/";
}