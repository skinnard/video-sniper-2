<?php

/****************************************************************************************************

THIS PAGE HANDLES SENDING, YOU SHOULDN'T HAVE TO TOUCH ANYTHING HERE

*****************************************************************************************************/

include('vars.php') 

?>

<link rel="stylesheet" href="css/font-awesome.min.css">

<style>
  #success {
    background-color: #DFF2BF;
    color: #4F8A10;
    width:100%;
    height:40px;
    text-align:center;
    font-size: 20px;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    padding-top: 13px;
    box-shadow: 0px 5px 20px #ccc;
    border-radius: 7px;
  }

  #success i {
    font-size: 20px;
    color: #4F8A10;
    padding-right: 10px;
  }

  #error {
    background-color: #FFBABA;
    color: #D8000C;
    width:100%;
    height:40px;
    text-align:center;
    font-size: 20px;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    padding-top: 13px;
    box-shadow: 0px 5px 20px #ccc;
    border-radius: 7px;
  }

  #error i {
    font-size: 20px;
    color: #D8000C;
    padding-right: 10px;
  }
</style>

<?php

  function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
  }

  $cc = $_GET["cc"];
  $htmlfile = $_GET["f"];
  $lang = $_GET["l"];

  $to = $_GET['email'];
  $from = "system@jamdigital.ca";


  // Below is where subject line gets pulled in
  // SUBJECT FIX: Subject must just be text, NO ENCODED CHARACTERS!!!! - that's handled below.
  if (startsWith($htmlfile, "fr")){
      $subject = "[TEST " . $cc . "] " . $subj_fr;
  } else {
      $subject = "[TEST " . $cc . "] " . $subj_en;
  }

  $lines = array();
  $message = '';

  $file = fopen("HTMLemails/".$htmlfile , "r");
  $url = 'http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], '/') + 1). 'HTMLemails/' . $htmlfile . '?cc=' . $cc;

  $message = file_get_contents($url);
  $headers = "From: $from\r\n";
  $headers .= "Content-type: text/html\r\n";


  // now lets send the email.
  // SUBJECT FIX: copy this line over the old mail() line to fix special characters in the subject
  $success = mail($to, '=?utf-8?B?'.base64_encode($subject).'?=', $message, $headers);

  // Redirect back to index page, show either error or success message
  $email_address = $_GET['email'];
  if ($success) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?success=1&email=$email_address\">";
    die();
  } else {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?success=0&email=$email_address\">";
    die();
  }
