<?php

require_once("stats.php");

$inst=new picoStats();
$inst->includeIP($_SERVER['REMOTE_ADDR']);

?>