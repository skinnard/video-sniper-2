<?php

// header('Location: http://bellgroupoffer.ca/_sorry/');

/* FOR LIVE - START */
$goal = 30;
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

$building = "5 Hanna Avenue";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "5&nbsp;Hanna&nbsp;Avenue, Toronto";
$legalDate = "July&nbsp;8,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php";

?>
