<?php include("./simplestats/simplestats.inc"); 
require_once("stats/stats.php");
$stats=new picoStats();
$stats->trackPage("alfonso",$_SERVER['REQUEST_URI']);
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List of Services</title>
<style type="text/css">
html, body, iframe { height: 100%; }
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: rgba(0,0,0,1);
}
</style>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57695221-1', 'auto');
  ga('send', 'pageview');

</script>
<iframe src="https://docs.google.com/presentation/d/18MgvLfDFL8-DXJWxXUYkdp6tJDuEMCG---i0J2CHhMo/embed?start=false&loop=false&delayms=3000" frameborder="0" width="100%" height="100%" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</body>
</html>
