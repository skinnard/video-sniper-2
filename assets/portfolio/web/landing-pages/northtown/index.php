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
$goal = 40;
$current = 0;
/* FOR LIVE - END */

/* FOR TESTING ONLY - START */

// $goal = $_GET['g'];
// $current = $_GET['c'];
// if (!$goal){$goal = 145;}
// if (!$current){$current = 0;}

/*FOR TESTING ONLY - END */

$FTTN = true;
// $toggle = true;

$building = "10 Northtown Way";
// $building_fr = "21 Clairtrell Road";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "10&nbsp;Northtown&nbsp;Way, North&nbsp;York";
// $legalAddress_fr = "21&nbsp;Clairtrell&nbsp;Road, North&nbsp;York";

$legalDate = "September&nbsp;10,&nbsp;2016";
// $legalDate_fr = "August&nbsp;5,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content.php"; 

?>
