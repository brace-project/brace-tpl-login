<?php


require __DIR__ . "/../vendor/autoload.php";

$lp = new \Brace\Tpl\Login\LoginPage();

echo $lp->getLoginHtml();