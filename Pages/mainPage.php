<?php 
$pageName = "Page Principale";
require "../Tools/dir_credentials.php";
require $GLOBALS['TOOLS']."autoloader.php";
session_start();
autoloader::register();

use Templates\mainTemp;
ob_start(); ?>
<h2>Hello World !</h2>
<?php
$code=ob_get_clean();
mainTemp::render($code, $pageName);