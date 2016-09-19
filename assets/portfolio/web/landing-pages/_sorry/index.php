<?php

$page_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$myurl= $_SERVER['HTTP_HOST'];
if ($myurl == 'offredegroupebell.ca' OR $myurl == 'www.offredegroupebell.ca') {
 $lang = 'fr';
 $togglelink = "http://bellgroupoffer.ca$_SERVER[REQUEST_URI]";    
}else{
 $lang = 'en';
 $togglelink = "http://offredegroupebell.ca$_SERVER[REQUEST_URI]";
}
?>
<!DOCTYPE html>
<!--[if lte IE 7 ]>    <html lass="no-js ie7"> <![endif]-->
<!--[if lte IE 8 ]>    <html class="no-js ie8 "> <![endif]-->
<html><!--<![endif]-->
<head>
<meta charset="UTF-8">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<?php if ($lang === 'fr') { ?>
        <title>Offre de groupe Bell</title>
        <?php } else { ?>
        <title>Bell Group Offer</title>
        <?php } ?>

<meta name="viewport" content="initial-scale=1.0, width=device-width"> 

<link rel="stylesheet" type="text/css" href="../css/styles.css" />


</head>

<body class="error">
<?php include_once("../analyticstracking.php") ?>

<!-- HEADER - START -->
<div class="wrapper header">
  
  <div class="container">
    
    <a href="http://www.bell.ca<?php if ($lang === 'fr') { ?>/Accueil<?php } ?>" target="_blank"><img src="../img/logo.png" alt="Bell" width="60" height="33"></a>
    
    <?php if($toggle == true) { ?>
                  <a href="http://bellgroupoffer.ca/lovecondos-m"><h4 class="toggle">中文</h4></a>
                <?php }
                if ($lang === 'fr') { ?>
                  <a href="<?php echo $togglelink;?>"><h4 class="toggle">English</h4></a>
                <?php } else { ?>
                  <a href="<?php echo $togglelink;?>"><h4 class="toggle">Français</h4></a>
                <?php } ?>
  
  </div>

</div>
<!-- HEADER - END -->


<!-- MAIN - START -->
<div class="wrapper main">
  
  <div class="container top">
    
    
    <div>
      <?php if ($lang === 'fr') { ?>
      
      <h1 style="padding-top: 32px; margin-top: 0; font-size: 40px;">Nous sommes d&eacute;sol&eacute;s.</h1>
      <h2>Cette offre n&rsquo;est plus&nbsp;disponible.<br> Si&nbsp;vous vous y &ecirc;tes abonn&eacute;, un conseiller de Bell communiquera bient&ocirc;t avec&nbsp;vous.</h2>
      
      <?php } else { ?>
      
      <h1 style="padding-top: 32px; margin-top: 0; font-size: 40px;">We&rsquo;re sorry.</h1>
      <h2>This offer is no longer&nbsp;available.<br> If&nbsp;you signed up for it, a Bell rep will be in touch&nbsp;shortly.</h2>
      
      <?php } ?>
      
    </div>
 
    
  </div>
    
  
  </div>


<!-- MAIN - END -->


<!-- LEGAL - START -->
<div class="wrapper">

  <div class="container legal">
  
    <p>&copy;&nbsp;Bell&nbsp;Canada, 2016. <?php if ($lang === 'fr') { ?>Tous&nbsp;droits&nbsp;r&eacute;serv&eacute;s.<?php } else { ?> All&nbsp;rights&nbsp;reserved.<?php } ?></p>

  </div>

</div>
<!-- LEGAL - END -->


</body>
</html>
