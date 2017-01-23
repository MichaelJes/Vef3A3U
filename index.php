<?php
include 'stdlib.php';// includar Stdlib sem heldur um hluti eins og footer og header

$site = new csite();//Býr til nýtt instance of csite sem er svona framework fyrir nýja síðuna

// Þetta er aðferð fyrir þessa síðu
initialise_site($site);

$page = new cpage("Welcome to my site!");
$site->setPage($page);//settur þetta á síðuna

$content = "Welcome to my personal web site!";
    $page->setContent($content);//Settur content á síðuna undir content

    $site->render();//Renderar allt saman
?>