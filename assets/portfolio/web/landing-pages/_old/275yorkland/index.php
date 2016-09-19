<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 40;
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

$building = "275 Yorkland Road";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "275&nbsp;Yorkland&nbsp;Road, Toronto";
$legalDate = "August&nbsp;6,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
