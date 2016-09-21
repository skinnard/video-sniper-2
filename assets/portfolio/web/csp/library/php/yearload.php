<?php

$year = $_POST['year'];

if(file_exists('../../years/'.$year.'.html'))
echo file_get_contents('../../years/'.$year.'.html');

?>
