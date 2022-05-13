<?php
require "../Tools/dir_credentials.php";

$pageName = "Page Principale";
require $GLOBALS['TOOLS']."autoloader.php";
autoloader::register();
use Templates\mainTemp;

ob_start(); ?>
<h1>Hello World !</h1>
<?php
$code = ob_get_clean();
mainTemp::render($pageName, $code);
