<?php

$year = $_POST['year'];
$month = $_POST['month'];

if(file_exists('../../months/'.$year.'/'.$month.'.html'))
echo file_get_contents('../../months/'.$year.'/'.$month.'.html');

else echo 'There is no such page!' . $month;

?>
