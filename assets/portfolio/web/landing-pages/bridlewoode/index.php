<?php

$myurl= $_SERVER['HTTP_HOST'];

if ($myurl == 'offredegroupebell.ca' OR $myurl == 'www.offredegroupebell.ca') {
    //if French go to this url    
    // header('Location: http://www.bell.ca/Services_Internet');
} else {
    //if English go to this url    
    // header('Location: http://www.bell.ca/Bell_Internet'); 
}

/* FOR LIVE - START */
$goal = 29;
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

$building = "Bridlewoode Place";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "25&nbsp;Bamburgh&nbsp;Circle, Scarborough";
$legalDate = "September&nbsp;10,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php"; 

?>
