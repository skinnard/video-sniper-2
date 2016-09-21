<?php include('includes/head.php') ?>

<body>
  <?php include('includes/nav.php') // Pulling in global variables for latest $year and $month ?>

  <div id="main-wrapper">
    <div class="mobileDim"></div>
    <div class="header-wrapper">
      <div class="header-content-wrapper">
        <div class="header">
          <img class="logo" alt="" src="library/images/logo.gif">
          <h1>BRS Acquisition Creative</h1>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div id="content">
        <?php include('projects/'.$year.'/'.$month.'/5139_Oct_NBR_Fibe_FTTH_DM_EN.html'); ?>
      </div>
    </div>
  </div>

<?php include('includes/footer.php') ?>
