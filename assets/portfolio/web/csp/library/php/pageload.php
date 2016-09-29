<?php

$year = $_POST['year'];
$month = $_POST['month'];
$project = $_POST['project'];

if(file_exists('../../projects/'.$year.'/'.$month.'/'.$project.'.php'))
echo file_get_contents('../../projects/'.$year.'/'.$month.'/'.$project.'.php');

else echo 'There is no such page!' . $year . $month . $project;

?>
