<?php require_once('../Connections/localhost.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "successo.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  die("<h1>Unauthorized access to page</h1>");
  exit;
}

$colname_dummy = "-1";
if (isset($_GET['password'])) {
  $colname_dummy = $_GET['password'];
}
mysql_select_db($database_localhost, $localhost);
$query_dummy = sprintf("SELECT passwd FROM `access` WHERE passwd = %s", GetSQLValueString($colname_dummy, "text"));
$dummy = mysql_query($query_dummy, $localhost) or die(mysql_error());
$row_dummy = mysql_fetch_assoc($dummy);
$totalRows_dummy = mysql_num_rows($dummy);

$colname_getcase = "-1";
if (isset($_GET['id'])) {
  $colname_getcase = $_GET['id'];
}


$body="";
$htmlfile = glob(GetSQLValueString($colname_getcase, "int")."/*.{htm,html}", GLOB_BRACE);


$dom = new DOMDocument;
$dom->loadHTMLFile($htmlfile[0]);
$bodycopy = $dom->getElementsByTagName('p');
foreach ($bodycopy as $p) {
        $body.="<p>".$p->nodeValue."</p>";
}

$h3 = $dom->getElementsByTagName('h3');
$h4 = $dom->getElementsByTagName('h4');
header('Content-Type: text/html;charset=UTF-8');
?>
<div class="row">
  <div class="col-md-12">
    <div class="caseheader">
      <h3>
        <?php foreach ($h3 as $p) {
        echo $p->nodeValue;
}	 ?>
      </h3>
      <h4>
        <?php foreach ($h4 as $p) {
        echo $p->nodeValue;
}	 ?>
      </h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <div> <?php echo $body; ?>
      <nav>
        <ul class="pager">
          <?php if($colname_getcase>1) { ?>
          <li><a class="prevcase btn btn-4 btn-4b icon-arrow-left" ><i class="fa fa-arrow-left"></i></a></li>
          <?php }
		if (file_exists($colname_getcase+1)) { ?>
          <li ><a class="nextcase btn btn-4 btn-4a icon-arrow-right"  ><i class="fa fa-arrow-right"></i></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>
  <!---->
  <div class="col-md-2 col-sm-6 col-xs-6" style="padding-left:0px;padding-right:0px;" id="thumbscolumn">
    <ul class="side-slideshow" 
    data-cycle-carousel-vertical="true"  
    data-slide-active-class="gino-attivo" 
    data-pause-on-hover="true"
    data-slide-class="gino" 
    data-cycle-fx="carousel" 
    data-cycle-timeout="1000" 
    data-cycle-carousel-visible="6" 
    data-cycle-loader="wait"
    data-cycle-slides="> li" ><?php
$files = glob(GetSQLValueString($colname_getcase, "int")."/*.{png,jpg,jpeg,JPG}", GLOB_BRACE);
shuffle($files); 
if(count($files)>0) {

	$file=array_pop($files);

	
	list($width, $height, $type, $attr) = getimagesize("$file");
	//class=\"portfolio-img\" width=\"$width\" height=\"$height\"
    print "<li class=\"case-item\"><a class=\"litto\" data-lightbox=\"gino\" href=\"portfolio/$file\"><img class=\"img-responsive\"  src=\"timthumb.php?src=alfonso/portfolio/$file&w=250\" /></a></li>";

    if(count($files)>0) {
		$imgblock=array();

		 		foreach ($files as $file) {
					
			    $imgblock[]=  "<li class=\"case-item\"><a data-lightbox=\"gino\" href=\"portfolio/$file\"><img class=\"img-responsive\"  src=\"timthumb.php?src=alfonso/portfolio/$file&w=250\" /></a></li>";


		}
		$blocco=implode("\r\n",$imgblock);
		print $blocco;

		
	} 
} else {
	    print " <a><img src=\"http://dummyimage.com/800x600/0a0/fff?gino=".rand()."\"  /></a>";

}
?>

    </ul>
  </div>

  <div class="col-xs-6 col-sm-6 col-md-6" id="slide-column">
    <div class="square-wrapper">
      <div class="cycle-slideshow" data-cycle-center-horz="true" data-cycle-center-vert="true" data-cycle-loader="wait" >
        <?php
$files = glob(GetSQLValueString($colname_getcase, "int")."/*.{png,jpg,jpeg,JPG}", GLOB_BRACE);
shuffle($files); 
if(count($files)>0) {
	$file=array_pop($files);
	print "<img  src=\"portfolio/$file\" onload='$(document).trigger(\"portFolioEvent\");' />";
}
if(count($files)>0) {
foreach ($files as $file) {
	
	
	
	list($width, $height, $type, $attr) = getimagesize("$file");
	//class=\"portfolio-img\" width=\"$width\" height=\"$height\"
    print "<img  src=\"portfolio/$file\" />";
	//for ($i = 1; $i <= 5; $i++) {
    //print " <li><img src=\"http://lorempixel.com/800/600/?gino=".rand()."\"  class=\"img-responsive\" /></li>";
}} else {
	    print " <a><img src=\"http://dummyimage.com/800x600/0a0/fff?gino=".rand()."\"  /></a>";

}
?>
      </div>
    </div>
  </div>
</div>
<?php
mysql_free_result($dummy);
?>
