<?php
require "../Tools/dir_credentials.php";

$pageName = "Page Principale";
require $GLOBALS['TOOLS']."autoloader.php";
autoloader::register();

ob_start(); ?>
<h1>Hello World !</h1>
<?php
$code = ob_get_clean();
(new Templates\mainTemp)->render($code, $pageName);
