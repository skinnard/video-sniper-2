<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = "http://" . $_SERVER["SERVER_NAME"] . "/";
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");

switch(getenv("REDIRECT_STATUS"))
{
	# "400 - Bad Request"
	case 400:
	$error_code = "400 - Bad Request";
	$explanation = "The syntax of the URL submitted by your browser could not be understood.  Please verify the address and try again.";
	$redirect_to = "";
	break;

	# "401 - Unauthorized"
	case 401:
	$error_code = "401 - Unauthorized";
	$explanation = "This section requires a password or is otherwise protected.  If you feel you have reached this page in error, please check the URL and try again, or contact the webmaster if you continue to have&nbsp;problems.";
	$redirect_to = "";
	break;

	# "403 - Forbidden"
	case 403:
	$error_code = "403 - Forbidden";
	$explanation = "This section requires a password or is otherwise protected.  If you feel you have reached this page in error, please check the URL and try again, or contact the webmaster if you continue to have&nbsp;problems.";
	$redirect_to = "";
	break;

	# "404 - Not Found"
	case 404:
	$error_code = "404 - Not Found";
	$explanation = "The requested resource '" . $page_redirected_from . "' could not be found on this server.  Please verify the address and try&nbsp;again.";
	$redirect_to = "";
	break;

	# "500 - Internal Server Error"
	case 500:
	$error_code = "500 - Internal Server Error";
	$explanation = "The server experienced an unexpected error.  Please verify the address and try&nbsp;again.";
	$redirect_to = "";
	break;
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- META -->
  <title>JAM Direct | <?php print ($error_code); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="https://dev.jamcreative.ca/jam/errors/css/kickstart.css" media="all" />
  <link rel="stylesheet" type="text/css" href="https://dev.jamcreative.ca/jam/errors/css/style.css" media="all" />

  <!-- Javascript -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://dev.jamcreative.ca/jam/errors/js/kickstart.js"></script>

<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
<?php
	if ($redirect_to != "")
	{
?>

	<meta http-equiv="Refresh" content="5; url='<?php print($redirect_to); ?>'">
<?php
	}
?>

	<title>Page not found: <?php print ($redirect_to); ?></title>
</head>
<body>
  <div id="wrap">
    <div class="col_12 logo-container">
<!--         <div>
            <img id="circle-logo" src="https://dev.jamcreative.ca/jam/errors/images/jam-logo.gif" alt="Jam Direct" />
        </div> -->
    </div>
    <div class="col_12 text">
        <h2><?php print ($error_code); ?></h2>
        <p>The URL you requested was not found. <?PHP echo($explanation); ?></p>
        <a href="http://jamdirect.ca"><button type="button" name="button">HOME</button></a>
        <a href="javascript:history.back()"><button type="button" name="button">BACK</button></a>
    </div>
    <div class="col_12">
        <div class="logo">
            <img src="https://dev.jamcreative.ca/jam/errors/images/logo.png" alt="JAM Direct" />
        </div>
    </div>
  </div>
  <!-- End Grid -->
</body>

</html>
