<?php
error_reporting(E_ALL || ~E_NOTICE);
require("../../../config/config.php");

$siren = $_GET['siren_NPP'];

function NotaPMEPerformance($p_siren) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://79.137.30.196:8079/notapme/notes?siren=$p_siren");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_USERPWD, 'infogreffe:3fn4rg2ff2');

    $res = curl_exec($ch);
    curl_close($ch);
    echo $res;
}

NotaPMEPerformance($siren);