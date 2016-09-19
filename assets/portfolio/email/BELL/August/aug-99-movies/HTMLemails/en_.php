<?php

// INCLUDE VARIABLES
include('../vars.php');

/*********************************************************************************************************/

// UNCOMMENT THIS IF YOU WANT TO SEE SUBJECT AND PREHEADER TEXT AT TOP OF EMAIL FOR TESTING
echo "<p style='text-align:center; border-top:1px solid #000; margin:0px; padding-bottom:10px; padding-top:10px; background:#f2f2f2; font-family:Arial,sans-serif;'><span style='font-weight:bold;''>SUBJECT:</span> " . $subj_en . "</p>";
echo "<p style='text-align:center; border-bottom:1px solid #000; margin:0px; padding-bottom:10px; background:#f2f2f2; font-family:Arial,sans-serif;'><span style='font-weight:bold;''>PREHEADER:</span> " . $preheader_en . "</p>";

/*********************************************************************************************************/

include('includes/head.php');
include('includes/header.php');
include('includes/hero.php');
include('includes/poster.php');
// include('includes/poster-small.php');

// INCLUDE FIND IT ALL HERE SECTION
if ($cc === "1A1E") {
  include("includes/FIAH/FIAH-1A1E.php");
} elseif ($cc === "1A2E") {
  include("includes/FIAH/FIAH-1A2E.php");
} elseif ($cc === "3A1E") {
  include("includes/FIAH/FIAH-3A1E.php");
} elseif ($cc === "2A1E") {
  include("includes/FIAH/FIAH-2A1E.php");
} elseif ($cc === "4A1E") {
  include("includes/FIAH/FIAH-4A1E.php");
} elseif ($cc === "4B1E") {
  include("includes/FIAH/FIAH-4B1E.php");
} elseif ($cc === "1B1E") {
  include("includes/FIAH/FIAH-1B1E.php");
} elseif ($cc === "1B2E") {
  include("includes/FIAH/FIAH-1B2E.php");
} else {
  echo "FIAH SECTION ERROR!";
}

// INCLUDE FOOTER SECTION
include('includes/footer.php');

?>
