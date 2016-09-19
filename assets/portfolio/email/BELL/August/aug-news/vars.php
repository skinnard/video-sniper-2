<?php 

/*********************************************************************************************************

HERE IS WHERE WE SET OUR VARIABLES.

**********************************************************************************************************/

$month = date("F");
$year = date("Y");
$docket = "6040 Aug Newsletter";

$cc = $_GET['cc'];
$lang = $_GET['l'];
$v = $_GET['v'];
$ppv = $_GET['ppv'];

// Paste path to IMG folder here for all of this months PPV projects
$img_path = "http://dev.jamcreative.ca/bell/PPV-master/2016/August/aug-news/HTMLemails/images/";
$legal_path = "http://dev.jamcreative.ca/bell/PPV-master/2016/August/aug-news/HTMLemails/legal/";

// SUBJECT LINE
// NOTE: Please don't encode characters in the subject line, that is handled while sending
if ($cc === '3A1E') {
	$subj_en = "What’s new this month on Pay-per-view";
} else {
	$subj_en = "What’s new this month on demand";
}
// NOTE: Please don't encode characters in the subject line, that is handled while sending
if ($cc === "3A1F") {
	$subj_fr = "Les nouveautés du mois sur Télé à la carte";
} else {
	$subj_fr = "Les nouveautés du mois sur demande";
} 

// PREHEADER AND TITLE TAG TEXT
if ($cc === "3A1E") {
	$preheader_en = "Watch The Angry Birds Movie, Love &amp; Friendship, The Nice Guys and many more on Pay Per View this month.";
} else { 
	$preheader_en = "Watch The Angry Birds Movie, Love &amp; Friendship, The Nice Guys and many more on demand this month.";
} 

if ($cc === "3A1F") {
	$preheader_fr = "Regardez Angry Birds : Le film, La F&ecirc;te des M&egrave;res, Amour & Amiti&eacute; et bien plus sur T&eacute;l&eacute; &agrave; la carte ce mois-ci.";
} else { 
	$preheader_fr = "Regardez Angry Birds : Le film, La f&eacute;te des m&egrave;res, Amour & Amiti&eacute; et bien plus ce mois-ci sur demande.";
}


