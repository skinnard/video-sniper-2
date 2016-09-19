<?php


include('vars.php');

$success_msg = "<div id='success'>MESSAGE SENT!</div>";
$error_msg = "<div id='fail'>MESSAGE NOT SENT!</div>";

?>

<!DOCTYPE HTML>
<html class="no-js">

<head>
  <meta charset="UTF-8">
  <title><?php echo $docket ?> - SENDING TOOL</title>
  <link rel="shortcut icon" href="favicon.ico">
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/placeholders.min.js"></script>
  <script>
    function validate(cc, f, l) {
      document.getElementById("cc").value = cc;
      document.getElementById("f").value = f;
      document.getElementById("l").value = l;

      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert('Please enter a valid email address');
        document.getElementById('email').focus();
      } else {
        document.getElementById('form').submit();
      }
    }

    function fadeout() {
      $('#success').fadeOut( 3000 );
      $('#fail').fadeOut( 3000 );
    }

    function getPathFromUrl(url) {
      return url.split("?")[0];
    }

  </script>
</head>

<style media="screen">

#success {
  height: 27px;
  width: 100%;
  position: absolute;
  top: 0px;
  text-align: center;
  background: rgb(191, 238, 191);
  color: RGB(98, 172, 98);
  padding: 12px;
  box-shadow: 5px 5px 25px #E0E0E0;
}

#fail {
  height: 27px;
  width: 100%;
  position: absolute;
  top: 0px;
  text-align: center;
  background: #FF8787;
  color: #fff;
  padding: 12px;
  box-shadow: 5px 5px 25px #E0E0E0;
}

</style>

<body id="fr">
  <div id="header">
    <header>
      <a id="logo" href="http://jamdirect.ca">
        <img src="img/logo.png" width="38" height="35" alt="JAM Direct Inc." />
      </a>
      <h1><?php echo $docket ?> - SENDING TOOL</h1>
      <h1 class="home"><a id="home" href="../index.php">HOME<i class="fa fa-home"></i></a></h1>
    </header>
  </div>
  <!-- ID="HEADER" -->
  <div id="wrapper">

    <form name="form" id="form" method="get" action="sendmail.php">
      <input type="hidden" name="cc" id="cc" value="" />
      <input type="hidden" name="f" id="f" value="" />
      <input type="hidden" name="l" id="l" value="" />

      <div id="main-top">
        <h3>Test Email Recipient:</h3>
        <input type="email" id="email" name="email" placeholder="Email address" value="<?php echo $_GET['email']; ?>" />
        <small>For multiple recipients; use comma to separate email addresses</small>
      </div>
      
      <!-- ID="MAIN-TOP" -->
      <div id="main-left">

        <!-- ********************************************************************************************
        PASTE CELL CODES BELOW - REMEMBER TO CHANGE IN 3 PLACES - ADD OR SUBTRACT AS MANY AS YOU NEED
        ********************************************************************************************* -->

        <h2 class='category-01'>ENGLISH</h2>
        <ul class='category-01'>
          <li><a href='HTMLemails/en_.php?cc=1A1E&f=en_.php&l=en&ppv=news'>Fibe - 1A1E <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('1A1E','en_.php')" />
          </li>
          <li><a href='HTMLemails/en_.php?cc=3A1E&f=en_.php&l=en&ppv=news'>Sat Non-Push - 3A1E <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('3A1E','en_.php')" />
          </li>
          <li><a href='HTMLemails/en_.php?cc=1B1E&f=en_.php&l=en&ppv=news'>Aliant - 1B1E <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('1B1E','en_.php')" />
          </li>
          <li><a href='HTMLemails/en_.php?cc=2A1E&f=en_.php&l=en&ppv=news'>IPVOD - 2A1E <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('2A1E','en_.php')" />
          </li>
          <li><a href='HTMLemails/en_.php?cc=4A1E&f=en_.php&l=en&ppv=news'>IPVOD - 4A1E <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('4A1E','en_.php')" />
          </li>
          <li><a href='HTMLemails/en_.php?cc=4B1E&f=en_.php&l=en&ppv=news'>IPVOD - 4B1E <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('4B1E','en_.php')" />
          </li>
        </ul>

        <h2 class='category-02'>FRENCH</h2>
        <ul class='category-02'>
         <li><a href='HTMLemails/fr_.php?cc=1A1F&f=fr_.php&l=fr&ppv=news'>Fibe - 1A1F <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('1A1F','fr_.php')" />
          </li>
          <li><a href='HTMLemails/fr_.php?cc=3A1F&f=fr_.php&l=fr&ppv=news'>Sat Non-Push - 3A1F <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('3A1F','fr_.php')" />
          </li>
          <li><a href='HTMLemails/fr_.php?cc=1B1F&f=fr_.php&l=fr&ppv=news'>Aliant - 1B1F <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('1B1F','fr_.php')" />
          </li>
          <li><a href='HTMLemails/fr_.php?cc=2A1F&f=fr_.php&l=fr&ppv=news'>IPVOD - 2A1F <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('2A1F','fr_.php')" />
          </li>
          <li><a href='HTMLemails/fr_.php?cc=4A1F&f=fr_.php&l=fr&ppv=news'>IPVOD - 4A1F <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('4A1F','fr_.php')" />
          </li>
          <li><a href='HTMLemails/fr_.php?cc=4B1F&f=fr_.php&l=fr&ppv=news'>IPVOD - 4B1F <span class='arrow'>&#9658;</span></a>
            <input class="send-test-btn" type='button' value='Send Test' onClick="validate('4B1F','fr_.php')" />
          </li>
        </ul>

      </div>

    </form>
  </div>
  <!-- ID="WRAPPER" -->

 <script>
  var newUrl = refineUrl();
  window.history.pushState({}, "", newUrl );
  function refineUrl()
  {
      var url = window.location.href;
      var value  = url.split("?")[0];
      return value;
  }
  </script>
  
</body>
</html>

<?php

if ($_GET['success'] === '1') {
  echo $success_msg;
  // echo $success_msg;
} elseif ($_GET['success'] === '0') {
  echo $error_msg;
} else {
  echo "";
}

?>

<script type="text/javascript">

$( document ).ready(function() {
    fadeout();
});

</script>
