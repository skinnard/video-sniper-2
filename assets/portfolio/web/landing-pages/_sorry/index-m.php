<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>

<!DOCTYPE html>
<!--[if lte IE 7 ]>    <html lass="no-js ie7"> <![endif]-->
<!--[if lte IE 8 ]>    <html class="no-js ie8 "> <![endif]-->
<html><!--<![endif]-->
<head>
<meta charset="UTF-8">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />

<title><?php if (isset($_GET['lang'])) { echo "Bell Group Offer"; } else { echo "Bell 团购优惠"; } ?></title>

<meta name="viewport" content="initial-scale=1.0, width=device-width"> 

<link rel="stylesheet" type="text/css" href="../css/styles.css" />

</head>

<body class="error">
<?php include_once("../analyticstracking.php"); ?>

<!-- HEADER - START -->
<div class="wrapper header">
  
  <div class="container">
    
    <a href="http://www.bell.ca" target="_blank"><img src="../img/logo.png" alt="Bell" width="60" height="33"></a>

    <form action = "<?php $_PHP_SELF ?>" method = "GET">
    <?php if (!isset($_GET['lang'])) { ?>
      <input id="submit" type="submit" value="EN" name="lang">
    <?php } else { ?>
      <a href="<?php echo substr($url,0,-8) ?>"><h4 class="toggle">中文</h4></a>
    <?php } ?>  
    </form>

  </div>

</div>
<!-- HEADER - END -->

<!-- MAIN - START -->
<div class="wrapper main">
  
  <div class="container top">
    
  <?php if (isset($_GET['lang'])) { ?>
    <div>
      <h1 style="padding-top: 32px; margin-top: 0; font-size: 40px;">We&rsquo;re sorry.</h1>
      <h2>This offer is no longer&nbsp;available.<br> If&nbsp;you signed up for it, a Bell rep will be in touch&nbsp;shortly.</h2>
    </div>
  <?php } else { ?>
    <div>
      <h1 style="padding-top: 32px; margin-top: 0; font-size: 40px;">对不起。</h1>
      <h2>此优惠已结束。<br> 若阁下曾签署报名，Bell 的一位营业代表将会尽快与您联系。</h2>
    </div>
  <?php } ?>

    
  </div>
    
  
  </div>
<!-- MAIN - END -->

<!-- LEGAL - START -->
<div class="wrapper">

  <div class="container legal">
  
  <?php if (isset($_GET['lang'])) { ?>
    <p>&copy; Bell&nbsp;Canada,&nbsp;2016. All&nbsp;rights&nbsp;reserved.</p>
 <?php } else { ?>
    <p>&copy; Bell&nbsp;Canada,&nbsp;2016. 版权所有。</p>
  <?php } ?>

  </div>

</div>
<!-- LEGAL - END -->

</body>
</html>
