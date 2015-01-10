<!DOCTYPE html>
	<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
    <head>
        <title>Elastislide - A Responsive Image Carousel</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="keywords" content="carousel, jquery, responsive, fluid, elastic, resize, thumbnail, slider" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script src="js/modernizr.custom.17475.js"></script>
    </head>
    <body>
		<div class="container demo-1">
			<!-- Codrops top bar -->
            <div class="codrops-top clearfix">
               <a href="http://tympanus.net/Development/Slicebox/"><strong>&laquo; Previous Demo: </strong>Slicebox</a>
                <span class="right">
                	<a href="http://www.flickr.com/people/smanography/" target="_blank">Images by Sherman Geronimo-Tan</a>
					<a href="http://tympanus.net/codrops/?p=5677"><strong>back to the Codrops post</strong></a>
                </span>
            </div><!--/ Codrops top bar -->

            <div class="main">
				<header class="clearfix">	
					<h1>Elastislide <span>A Responsive Image Carousel</span></h1>
					<nav class="codrops-demos">
						<a class="current-demo" href="index.php">Example 1</a>
						<a href="index2.php">Example 2</a>
						<a href="index3.php">Example 3</a>
						<a href="index4.php">Example 4</a>
					</nav>
				</header>

				<!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list">
        <?php
$files = glob("../portfolio/6/*.{png,jpg,jpeg,JPG}", GLOB_BRACE);
shuffle($files);
if(count($files)>0) {
foreach ($files as $file) {
	
	
	
	list($width, $height, $type, $attr) = getimagesize("$file");
	
    print "<li><a href=\"#\"><img class=\"portfolio-img\" width=\"$width\" height=\"$height\" src=\"$file\" /></li>";
	//for ($i = 1; $i <= 5; $i++) {
    //print " <li><img src=\"http://lorempixel.com/800/600/?gino=".rand()."\"  class=\"img-responsive\" /></li>";
}} else {
	    print "<li><a href=\"#\"><img src=\"http://dummyimage.com/800x600/0a0/fff?gino=".rand()."\"  /></a></li>";

}
?>


				</ul>
				<!-- End Elastislide Carousel -->

				<p><strong>Resize the browser to see how the carousel adapts</strong></p>

				<p class="info"><strong>Example 1:</strong> A minimum of 3 (default) images are always visible.</p>
			</div>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide();
			
		</script>
    </body>
</html>