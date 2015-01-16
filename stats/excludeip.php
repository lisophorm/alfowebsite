<?php

require_once("stats.php");

$inst=new picoStats();
$inst->excludeIP($_SERVER['REMOTE_ADDR']);

?>