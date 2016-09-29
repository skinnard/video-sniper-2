<?php

// Get the latest Year from projects directory
$years = glob('./projects/*' , GLOB_ONLYDIR);
$years = str_replace('./projects/', '', $years);
global $year;
$year = end($years);

// Get the latest Month from the project directory
$months = glob('./projects/'.$year.'/*' , GLOB_ONLYDIR);
$months = str_replace('./projects/'.$year.'/', '', $months);

usort($months, "compare_months");

function compare_months($a, $b) { // sorts months using date_parse
    $monthA = date_parse($a);
    $monthB = date_parse($b);

    return $monthA["month"] - $monthB["month"];
}

global $months;
$month = end($months);
?>

<div id="nav-wrapper" class="nav-wrapper">
  <div class="nav">
    <a class="pop-out-button" href="#"><i class="fa fa-angle-double-left"></i></a>
    <ul class="year-dropdown">
      <li class="year-list-parent">
        <i class="fa fa-caret-down"></i>
          <p id="year"><?php echo $year; ?></p>
        <ul class="year-list">
          <li class="year-li"><a id="2015" class="year" href="?year=2015">2015</a></li>
        </ul>
      </li>
    </ul>
    <ul class="month-dropdown">
      <li class="month-list-parent">
        <i class="fa fa-caret-down"></i>
        <p id="month"><?php echo ucfirst($month); ?></p>
          <?php include('years/' . $year . '.php'); ?>
      </li>
    </ul>
  </div>
  <?php include('months/'.$year.'/'.$month.'.php'); ?>
</div>
