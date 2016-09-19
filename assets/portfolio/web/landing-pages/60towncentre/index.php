<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 28;
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

$building = "60 Town Centre";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "60&nbsp;Town&nbsp;Centre&nbsp;Court, Toronto";
$legalDate = "August&nbsp;12,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
