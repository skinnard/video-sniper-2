<?php

$year = $_POST['year'];

if(file_exists('../../years/'.$year.'.php'))
echo file_get_contents('../../years/'.$year.'.php');

?>
