<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 1/23/2017
 * Time: 1:26 PM
 */
function __autoload($class) {//Þetta lopar gegnum alla hltuina í intialise site og includar það í Index síðuna
    include "$class.php";
}

function initialise_site(csite $site) {
    $site->addHeader("header.php");// add header og Footer eru function í csite classanum sem við notum hér
    $site->addFooter("footer.php");
}