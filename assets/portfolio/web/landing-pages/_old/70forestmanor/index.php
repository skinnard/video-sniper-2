<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 45;
$current = 21;
/* FOR LIVE - END */

/* FOR TESTING ONLY - START */
/*
$goal = $_GET['g'];
$current = $_GET['c'];
if (!$goal){$goal = 145;}
if (!$current){$current = 0;}
*/
/*FOR TESTING ONLY - END */

$building = "70 Forest Manor Road";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "70&nbsp;Forest&nbsp;Manor&nbsp;Road, North York";
$legalDate = "July&nbsp;22,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
