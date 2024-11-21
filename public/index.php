<?php

session_start();

$rota = $_SERVER['REQUEST_SCHEME'] ."://". $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$rota = str_replace("index.php", "", $rota);

define('ROOT',$rota);
define('ASSETS',$rota . "ASSETS/");

require "../private/core/init.php";

$app = new App();