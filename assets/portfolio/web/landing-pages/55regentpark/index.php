<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 41;
$current = 0;
/* FOR LIVE - END */

/* FOR TESTING ONLY - START */
/*
$goal = $_GET['g'];
$current = $_GET['c'];
if (!$goal){$goal = 145;}
if (!$current){$current = 0;}
*/
/*FOR TESTING ONLY - END */

$building = "55 Regent Park Boulevard";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "55&nbsp;Regent&nbsp;Park&nbsp;Boulevard, Toronto";
$legalDate = "July&nbsp;8,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
