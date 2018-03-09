<?php
error_reporting(E_ALL || ~E_NOTICE);
require("../../../config/config.php");

$siren = $_GET['siren_EE'];

function EvaluationEntreprises($p_siren, $p_token) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.datainfogreffe-dev.latelier.co/api/v1/Entreprise/scoreifg/$p_siren?token=$p_token");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $res = curl_exec($ch);
    curl_close($ch);
    echo $res;
}

EvaluationEntreprises($siren, $token_dev_demo);