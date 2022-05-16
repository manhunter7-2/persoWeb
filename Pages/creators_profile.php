<?php
require "../Tools/dir_credentials.php";

$pageName = "Creator's profile";
require $GLOBALS['TOOLS']."autoloader.php";
autoloader::register();

ob_start(); ?>

<?php
$code = ob_get_clean();
(new Templates\mainTemp)->render($code, $pageName);