<?php

// INCLUDE VARIABLES
include('../vars.php');

/*********************************************************************************************************/

// UNCOMMENT THIS SECTION IF YOU WANT TO SEE SUBJECT AND PREHEADER TEXT AT TOP OF EMAIL FOR TESTING

echo "<p style='text-align:center; border-top:1px solid #000; margin:0px; padding-bottom:10px; padding-top:10px; background:#f2f2f2; font-family:Arial,sans-serif;'><span style='font-weight:bold;''>SUBJECT:</span> " . $subj_fr . "</p>";
echo "<p style='text-align:center; border-bottom:1px solid #000; margin:0px; padding-bottom:10px; background:#f2f2f2; font-family:Arial,sans-serif;'><span style='font-weight:bold;''>PREHEADER:</span> " . $preheader_fr . "</p>";

/*********************************************************************************************************/

include('includes/head.php');
include('includes/header.php');
include('includes/hero.php');
include('includes/poster.php');

// INCLUDE FIND IT ALL HERE SECTION
if ($cc === "1A1F") {
  include("includes/FIAH/FIAH-1A1F-fr.php");
} elseif ($cc === "1A2F") {
  include("includes/FIAH/FIAH-1A2F-fr.php");
} elseif ($cc === "3A1F") {
  include("includes/FIAH/FIAH-3A1F-fr.php");
} elseif ($cc === "2A1F") {
  include("includes/FIAH/FIAH-2A1F-fr.php");
} elseif ($cc === "4A1F") {
  include("includes/FIAH/FIAH-4A1F-fr.php");
} elseif ($cc === "4B1F") {
  include("includes/FIAH/FIAH-4B1F-fr.php");
} elseif ($cc === "1B1F") {
  include("includes/FIAH/FIAH-1B1F-fr.php");
} elseif ($cc === "1B2F") {
  include("includes/FIAH/FIAH-1B2F-fr.php");
} else {
  echo "FIAH SECTION ERROR!";
}

include('includes/footer.php');
