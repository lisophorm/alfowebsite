<?php 
require_once("./stats/stats.php");
if(isset($_POST['uri'])) {
$stats=new picoStats();
$stats->trackPage("alfonso",$_POST['uri']);
}

?>