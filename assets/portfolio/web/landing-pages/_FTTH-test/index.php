<?php

$myurl= $_SERVER['HTTP_HOST'];
//include "../_sorry/index.php";

if ($myurl == 'offredegroupebell.ca' OR $myurl == 'www.offredegroupebell.ca') {
    //if French go to this url    
    // header('Location: http://www.bell.ca/Services_Internet');
}else{
    //if English go to this url    
    // header('Location: http://www.bell.ca/Bell_Internet'); 
}

/* FOR LIVE - START */
$goal = 11;
$current = 0;
/* FOR LIVE - END */

/* FOR TESTING ONLY - START */

// $goal = $_GET['g'];
// $current = $_GET['c'];
// if (!$goal){$goal = 145;}
// if (!$current){$current = 0;}

$lang = $_GET['l'];
// $lang = "fr";

// $FTTN = true;
// $toggle = true;

/*FOR TESTING ONLY - END */

$building = "21 Clairtrell Road";
$building_fr = "21 French Road";

$repEmail = "GroupBuy@bell.ca";
$repPhone = "416 705-2808";

$legalAddress = "21&nbsp;Clairtrell&nbsp;Road, North&nbsp;York";
$legalAddress_fr = "21&nbsp;French&nbsp;Road, North&nbsp;York";

$legalDate = "August&nbsp;5,&nbsp;2016";
$legalDate_fr = "French&nbsp;5,&nbsp;2016";

$offer = "triple";
$package = "better";

include "../inc/content-BACKUP.php"; 

?>
