<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}




$titre = "Accueil";
include "$racine/vue/vueHeader.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/vueFooter.php";