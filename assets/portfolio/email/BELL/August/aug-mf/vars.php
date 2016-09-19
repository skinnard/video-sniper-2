<?php 

/*********************************************************************************************************

HERE IS WHERE WE SET OUR VARIABLES.

**********************************************************************************************************/

$month = date("F");
$year = date("Y");
$docket = "6040 Aug Movie Feature";

$cc = $_GET['cc'];
$lang = $_GET['l'];
$v = $_GET['v'];
$ppv = $_GET['ppv'];

// Paste path to IMG folder here for all of this months PPV projects
$img_path = "http://dev.jamcreative.ca/bell/PPV-master/2016/August/aug-mf/HTMLemails/images/";

// SUBJECT LINE
// NOTE: Please don't encode characters in the subject line, that is handled while sending
$subj_en = "New to watch on Bell TV";

// NOTE: Please don't encode characters in the subject line, that is handled while sending
$subj_fr = "Nouveautés à voir sur Bell Télé";


// PREHEADER AND TITLE TAG TEXT
if ($cc === "3A1E") {
	$preheader_en = "The Jungle Book is back in an incredible live-action adaptation that the whole family can enjoy on Pay-per-view.";
} else { 
	$preheader_en = "The Jungle Book is back in an incredible live-action adaptation that the whole family can enjoy On Demand.";
} 

if ($cc === "3A1F") {
	$preheader_fr = "Le Livre de la jungle est de retour dans une adaptation plus grande que nature que toute la famille peut voir gr&acirc;ce &agrave; T&eacute;l&eacute; &agrave; la carte.";
} else { 
	$preheader_fr = "Le Livre de la jungle est de retour dans une adaptation plus grande que nature que toute la famille peut voir Sur demande.";
}


