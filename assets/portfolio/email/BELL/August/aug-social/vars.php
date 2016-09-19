<?php 

/*********************************************************************************************************

HERE IS WHERE WE SET OUR VARIABLES.

**********************************************************************************************************/

$month = date("F");
$year = date("Y");
$docket = "6091 Aug Social";

$cc = $_GET['cc'];
$lang = $_GET['l'];
$v = $_GET['v'];
$ppv = $_GET['ppv'];

// Paste path to IMG folder here for all of this months PPV projects
$img_path = "http://dev.jamcreative.ca/bell/PPV-master/2016/August/aug-social/HTMLemails/images/";

// SUBJECT LINE
// NOTE: Please don't encode characters in the subject line, that is handled while sending
if ($cc === '3A1E') {
	$subj_en = "What’s new this month on Pay-per-view";
} else {
	$subj_en = "What’s new this month on demand";
}
// NOTE: Please don't encode characters in the subject line, that is handled while sending
if ($cc === "3A1F") {
	$subj_fr = "SUBJECT FR 01";
} else {
	$subj_fr = "SUBJECT FR 02";
}

// PREHEADER AND TITLE TAG TEXT
if ($cc === "3A1E") {
	$preheader_en = "Watch The Angry Birds Movie, Love &amp; Friendship, The Nice Guys and many more on Pay Per View this month.";
} else { 
	$preheader_en = "Watch The Angry Birds Movie, Love &amp; Friendship, The Nice Guys and many more on demand this month.";
} 

if ($cc === "3A1F") {
	$preheader_fr = "Preheader Text FRENCH 01";
} else { 
	$preheader_fr = "Preheader Text FRENCH 02";
}


