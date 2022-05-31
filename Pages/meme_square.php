<?php
require "../Tools/dir_credentials.php";
$pageName = "Memes square";
require $GLOBALS['TOOLS']."autoloader.php";
autoloader::register();

ob_start();

$code = ob_get_clean();
(new Templates\mainTemp)->render($code, $pageName);