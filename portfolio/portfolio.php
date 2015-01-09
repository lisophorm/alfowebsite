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
?>


  <div class="row">

    <div class="col-md-12">
      <div class="caseheader">
        <h3><?php foreach ($h3 as $p) {
        echo $p->nodeValue;
}	 ?></h3>
        <h4><?php foreach ($h4 as $p) {
        echo $p->nodeValue;
}	 ?></h4>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5">
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
    <div class="col-md-7">
      <div class="bxslider">
        <?php
$files = glob(GetSQLValueString($colname_getcase, "int")."/*.{png,jpg,jpeg,JPG}", GLOB_BRACE);
shuffle($files); 
if(count($files)>0) {
foreach ($files as $file) {
    print "<div><img class=\"portfolio-img\" src=\"portfolio/$file\" /></div>";
	//for ($i = 1; $i <= 5; $i++) {
    //print " <li><img src=\"http://lorempixel.com/800/600/?gino=".rand()."\"  class=\"img-responsive\" /></li>";
}} else {
	    print " <a><img src=\"http://dummyimage.com/800x600/0a0/fff?gino=".rand()."\"  /></a>";

}
?>
      </div>
    </div>
  </div>