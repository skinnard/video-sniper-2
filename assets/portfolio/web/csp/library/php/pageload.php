<?php

$year = $_POST['year'];
$month = $_POST['month'];
$project = $_POST['project'];

if(file_exists('../../projects/'.$year.'/'.$month.'/'.$project.'.html'))
echo file_get_contents('../../projects/'.$year.'/'.$month.'/'.$project.'.html');

else echo 'There is no such page!' . $year . $month . $project;

?>
