<?php

$month = date("F");
$year = date("Y");
$docket = "6040 Aug PPV"; 

?>

<!DOCTYPE HTML>
<html class="no-js">

<head>
  <meta charset="UTF-8">
  <title><?php echo $docket; ?></title>
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/placeholders.min.js"></script>
  <script>
    function validate(cc, f, cellcode) {
      document.getElementById("cc").value = cc;
      document.getElementById("f").value = f;
      document.getElementById("cellcode").value = cellcode;

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
  </script>
</head>

<body id="fr">
  <div id="header">
    <header>
      <a id="logo" href="http://jamdirect.ca">
        <img src="img/logo.png" width="38" height="35" alt="JAM Direct Inc." />
      </a>
      <h1><?php echo $docket; ?></h1>
<!--       <h1 class="home"><a id="home" href="../index.php">HOME<i class="fa fa-home"></i></a></h1>
 -->    </header>
  </div>
  <!-- ID="HEADER" -->
  <div id="wrapper">
    <ul>
      <li class="border-bottom"><a href='aug-mf'>Movie Feature</a></li>
      <li class="border-bottom"><a href='aug-news'>Newsletter</a></li>
      <li class="border-bottom"><a href='aug-99-movies'>99 Cent Movies</a></li>
      <li><a href='aug-social'>Social</a></li>
    </ul>
  </div>

  </div>
  <!-- ID="WRAPPER" -->
</body>

</html>
