<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 1/23/2017
 * Time: 1:26 PM
 */
function __autoload($class) {//Þetta verður virkt þegar við köllum í klassa og loadar þan klssa sem við kölðum á
    include "$class.php";
}

function initialise_site(csite $site) {
    $site->addHeader("header.php");// add header og Footer eru function í csite classanum sem við notum hér
    $site->addFooter("footer.php");
}