<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 38;
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

$building = "21 &amp; 23 Carlton Street";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "21&nbsp;&amp; 23&nbsp;Carlton&nbsp;Street, Toronto";
$legalDate = "August&nbsp;12,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
