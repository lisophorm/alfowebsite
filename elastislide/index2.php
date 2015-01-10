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
    </head>
    <body>
		<div class="container demo-2">
			<!-- Codrops top bar -->
            <div class="codrops-top clearfix">
               <a href="http://tympanus.net/Development/Slicebox/"><strong>&laquo; Previous Demo: </strong>Slicebox</a>
                <span class="right">
                	<a href="http://www.flickr.com/people/smanography/" target="_blank">Images by Sherman Geronimo-Tan</a>
					<a href="http://tympanus.net/codrops/?p=5677"><strong>back to the Codrops post</strong></a>
                </span>
            </div><!--/ Codrops top bar -->

            <div class="main clearfix">
				<header class="clearfix">	
					<h1>Elastislide <span>A Responsive Image Carousel</span></h1>
					<nav class="codrops-demos">
						<a href="index.php">Example 1</a>
						<a class="current-demo" href="index2.php">Example 2</a>
						<a href="index3.php">Example 3</a>
						<a href="index4.php">Example 4</a>
					</nav>
				</header>
				<div class="column">
					<!-- Elastislide Carousel -->
					<ul id="carousel" class="elastislide-list">
						<li><a href="#"><img src="images/small/4.jpg" alt="image04" /></a></li>
						<li><a href="#"><img src="images/small/5.jpg" alt="image05" /></a></li>
						<li><a href="#"><img src="images/small/6.jpg" alt="image06" /></a></li>
						<li><a href="#"><img src="images/small/7.jpg" alt="image07" /></a></li>
						<li><a href="#"><img src="images/small/11.jpg" alt="image11" /></a></li>
						<li><a href="#"><img src="images/small/12.jpg" alt="image12" /></a></li>
						<li><a href="#"><img src="images/small/13.jpg" alt="image13" /></a></li>
						<li><a href="#"><img src="images/small/14.jpg" alt="image14" /></a></li>
						<li><a href="#"><img src="images/small/15.jpg" alt="image15" /></a></li>
						<li><a href="#"><img src="images/small/16.jpg" alt="image16" /></a></li>
						<li><a href="#"><img src="images/small/17.jpg" alt="image17" /></a></li>
						<li><a href="#"><img src="images/small/18.jpg" alt="image18" /></a></li>
						<li><a href="#"><img src="images/small/19.jpg" alt="image19" /></a></li>
						<li><a href="#"><img src="images/small/20.jpg" alt="image20" /></a></li>
						<li><a href="#"><img src="images/small/1.jpg" alt="image01" /></a></li>
						<li><a href="#"><img src="images/small/2.jpg" alt="image02" /></a></li>
						<li><a href="#"><img src="images/small/3.jpg" alt="image03" /></a></li>
						<li><a href="#"><img src="images/small/8.jpg" alt="image08" /></a></li>
						<li><a href="#"><img src="images/small/9.jpg" alt="image09" /></a></li>
						<li><a href="#"><img src="images/small/10.jpg" alt="image10" /></a></li>
					</ul>
					<!-- End Elastislide Carousel -->
				</div>

				<div class="column">
					<p><strong>Resize the browser to see how the carousel adapts</strong></p>
					<p class="info"><strong>Example 2:</strong> Vertical with a minimum of 3 items visible (automatic height).</p>
				</div>

			</div>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript">
			
			$( '#carousel' ).elastislide( {
				orientation : 'vertical'
			} );
			
		</script>
    </body>
</html>
