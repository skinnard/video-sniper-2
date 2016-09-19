<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');
// header('Location: http://www.bell.ca/Bell_Internet');

/* FOR LIVE - START */
$goal = 44;
$current = 7;
/* FOR LIVE - END */

/* FOR TESTING ONLY - START */
/*
$goal = $_GET['g'];
$current = $_GET['c'];
if (!$goal){$goal = 145;}
if (!$current){$current = 0;}
*/
/*FOR TESTING ONLY - END */

$building = "135 Village Green Square";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "135&nbsp;Village&nbsp;Green&nbsp;Square, Toronto";
$legalDate = "September&nbsp;2,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
