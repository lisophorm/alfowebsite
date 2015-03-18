<?php header('Content-Type: text/html; charset=utf-8');
include("./simplestats/simplestats.inc"); 

require_once("./stats/stats.php");

$stats=new picoStats();
$stats->trackPage("alfonso","/",$_GET['ref']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.contenuto {
	display: none;
}

.contenuto.show {
	display: block;
}

.pageload-overlay {
	background-color:#F30004;
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 9999;
	display:none;
}

.pageload-overlay img {
	position:absolute;
	top:50%;
	right:50%;
}
@-webkit-keyframes pulse { 
    0% { -webkit-transform: scale(1); } 
    50% { -webkit-transform: scale(1.1); } 
    100% { -webkit-transform: scale(1); } 
} 
@keyframes pulse { 
    0% { transform: scale(1); } 
    50% { transform: scale(1.1); } 
    100% { transform: scale(1); } 
} 
</style>
<meta charset="utf-8">
<meta property="og:image" content="http://www.crystal-bits.co.uk/img/alfoicon.jpg" />
<meta property="og:title" content="Alfonso Florio - Software Architect / Lead Developer / Creative Technologist" />
<meta property="og:url" content="http://www.crystal-bits.co.uk" />
<meta property="og:description" content="An award winning software architect, creative technologist, and experimental artist with over 20 years of expertise in advertising, media and marketing." />
<meta property="og:type" content="website" />
<meta name="twitter:url" content="http://www.crystal-bits.co.uk">
<meta name="twitter:card" content="summary">
<meta property="twitter:image" content="http://www.crystal-bits.co.uk/img/alfoicon.jpg" />
<meta property="twitter:title" content="Alfonso Florio - Software Architect / Lead Developer / Creative Technologist" />
<meta property="twitter:description" content="An award winning software architect, creative technologist, and experimental artist with over 20 years of expertise in advertising, media and marketing." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Alfonso Florio - Software Architect / Lead Developer / Creative Technologist">
<meta name="author" content="Alfonso Florio">
<title>Alfonso Florio - Software Architect / Lead Developer / Creative Technologist</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href="css/alfonso.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/textrotator.css">
<link rel="stylesheet" type="text/css" href="css/stripes.css">
<!--link rel="stylesheet" type="text/css" href="fonts/font.css"-->
<link rel="stylesheet" type="text/css" href="css/Whitneyfont.css">
<link href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
<link rel="stylesheet" type="text/css" href="css/madrerussia.css">
<link rel="stylesheet" type="text/css" href="bxslider/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stuf/akzident grotesque condensed.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-58911215-1', 'auto');
ga('require', 'displayfeatures');
ga('require', 'linkid', 'linkid.js');
ga('send', 'pageview','/homepage');

</script>
<script src="//load.sumome.com/" data-sumo-site-id="60c752a21dde84fea4049acb99eff848abd1acd92427810f6207c0a812f4cdb5" async></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="pagewrap" class="pagewrap">
<div id="loader" class="pageload-overlay" > <img src="img/Preloader_7.gif" width="64" height="64" alt=""/> </div>
		</div><!-- /pagewrap -->
<div class="contenuto show">
  <nav id="navstripe" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li  class="active"><a class="page-scroll" href="#home">Home</a> </li>
          <li><a class="page-scroll" href="#about">About</a> </li>
          <li><a class="page-scroll" href="#strenghts">My Strenghts</a> </li>
          <li><a class="page-scroll" href="#skills">My Skills</a> </li>
          <li><a class="page-scroll" href="#portfolio">Portfolio</a> </li>
          <li><a class="page-scroll" href="#contact">Contact</a> </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </nav>
  <!--div id="pagewrap" class="pagewrap"-->
  <header class="jumbotron red" id="home">
  
    <div itemscope itemtype="http://data-vocabulary.org/Person">
      <div class="row">
        <div id="imgcol" class="col-sx-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-2 text-center">
          <div class="jumbo-icon text-center" > <img id="alfo" itemprop="photo" class="img-responsive center-block" src="img/alfocenteredl.png" alt="" /> </div>
          <div class="sunburst">
            <div class="outer"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> </div>
          </div>
        </div>
        <div class="col-sx-12 col-sm-12 col-md-6 col-lg-6 text-center" id="textcol">
          <div id="title" >
            <h1 id="stretchme" itemprop="name">ALFONSO FLORIO</h1>
            <div id="skillbit"> <span class="rotoskills"><span>CREATIVE&nbsp;TECHNOLOGIST</span>,<span>SOFTWARE&nbsp;ARCHITECT</span>,<span>LEAD&nbsp;DEVELOPER</span></span> 
            
            </div>
          </div>
        </div>
      </div>

    </div>

  </header>
  <div class="animated infinite bounce">
  <div class="arrow"></div>
</div>  <section id="frivolo">
    <div class="row">
    <div class="col-xs-10 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-offset-2 col-md-3 col-lg-2 col-lg-offset-3 vertical-center">
    <a href="download.php?file=Alfonso_Florio_CV.pdf" data-virtualurl="/downloadCV" class="btn btn-1 btn-1a btn-large" role="button">DOWNLOAD MY CV</a>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-2 col-lg-2 col-lg-offset-0 vertical-center">
    	<img class="hidden-lg hidden-md" src="img/spacer.gif" height="20" />
        <img class="img-responsive hidden-xs hidden-sm" src="img/rockinyourbrand.png" alt="" /> 

    </div>
    <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-offset-0 col-md-3 col-lg-2 col-lg-offset-0 vertical-center">
    <a href="http://uk.linkedin.com/in/bug01/" data-virtualurl="/gotoLinkedIn" target="_blank" class="center-block"><img src="img/btn_viewmy_160x33.gif" class="img-responsive" alt=""/></a>
    </div>

    </div>
  </section>
  <section id="about">
    <div class="wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">
      <div class="row">
        <div class="col-sx-12 col-md-11 col-md-offset-1 col-lg-10 col-lg-offset-2 rusky text-left">
          <div class="">
            <h2 class="chapter">A LITTLE ABOUT ME</h2>
            <h3>And why I am your new secret weapon</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-7 col-md-offset-1 col-lg-6 col-lg-offset-2">
        <p>An <strong>award winning software architect, creative technologist, </strong>and<strong> experimental artist with over 20 years of expertise</strong> In advertising, media and marketing. <strong>My experience spans across software, television, design and experimental art</strong>. </p>
        <p>My interdisciplinary approach always brings fresh ideas to the table, and <strong>I can play a key role connecting creatives with geeks</strong> to make ideas reality. </p>
        <p>I specialise in creating bespoke technologies that engage consumers at events and amplify via social media. Even if you're not into experiential marketing <strong>you can benefit from my mission critical approach to projects</strong>.</p>
        <p>I&rsquo;ve created digital engagement tools for <strong>award winning events</strong> from Dublin to Qatar, Manchester to Mumbai. For brands and rights holders as diverse as <strong>Vodafone, EDF Energy, the NFL and Tesco</strong>.</p>
        <p>My work and that of my team has <strong>won numerous international awards</strong> and recognition and has achieved amplification of campaigns that largely exceeds the standard 175 impressions per published post.</p>
        <p>Nothing gives me greater pleasure than seeing the end result of late night programming coming to life in a moment of joy when a consumer engages with one of my creations.</p>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 text-center"> <div id="bombacontainer" ><img class="img-responsive center-block" style="position:relative;" id="bomba" src="img/lovethebomb.png" alt="" /></div> <a href="download.php?file=Alfonso_Florio_CV.pdf" data-virtualurl="/downloadCV" class="btn btn-1 btn-1a btn-large img-responsive" role="button">DOWNLOAD MY CV</a><hr/> <a href="http://uk.linkedin.com/in/bug01/" data-virtualurl="/gotoLinkedIn" target="_blank" class="center-block"><img src="img/btn_viewmy_160x33.gif" class="img-responsive" alt=""/></a></div>
    </div>
  </section>
  <section class="module parallax parallax-1" id="strenghts">
    <div class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
      <div class="row">
        <div class="col-s-12 col-md-11 col-lg-10 rusky text-right ">
          <div class="">
            <h2 class="chapter">MY STRENGHTS</h2>
            <h3>&quot;attention to detail&quot; - really you want to read that again?</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 col-md-offset-1 col-lg-5 col-lg-offset-2">
        <ul>
          <li><strong>Plug & play consultant</strong>: swift to to integrate with your workflow and understand your methods</li>
          <li>Seven years in experiential marketing solutions</li>
          <li>Bridges the gap between technical and creative</li>
          <li>Good team manager</li>
          <li>Guarantees excellence in high pressure situations</li>
          <li>Designs and delivers mission critical / fail safe solutions</li>
          <li>Thinks outside the box and brings fresh ideas</li>
          <li>Making technology simple for the consumer</li>
          <li>Neapolitan passion for ideas</li>
          <li>And it's fun to work with me!</li>
        </ul>
       
      </div>
      <div class="col-md-3"><img class="img-responsive center-block" src="img/leaky_pad.png" alt="" /> </div>
    </div>
  </section>
  <section id="skills">
    <div class="wow slideInRight" data-wow-duration="1s" data-wow-delay="1s">
      <div class="row">
        <div class="col-s-12 col-md-11 col-md-offset-1 col-lg-10 col-lg-offset-2 rusky text-left">
          <div class="">
            <h2 class="chapter">MY SKILLS</h2>
            <h3>fantasy, intuition, boldness and execution speed</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-s-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-left">
        <div class="col-xs-6 col-sm-6 col-md-4 pull-right"> <img class="img-responsive" src="img/network.png" alt="" /> </div>
        <p>Wireframing / UML / software design</p>
        <p>Excellent interpersonal skills, can lead a small team of developers / designers</p>
        <p>Proficient with servers, Linux and Windows</p>
        <p>Mobile and web developer</p>
        <p>Design and build network of computers for live events</p>
        <p>Customer data <strong>Security</strong>: Proficient with vulnerability assessments and familiar with penetration tests</p>
        <p>Authentication &amp; Access Control - for both online (booking systems, customer registrations) and live environments (check in / crowd N management etc)</p>
        <p>Physical computing. <strong>Can interface computers with sensors / lights / motors</strong> </p>
        <p>Integration of <strong>biometric devices</strong> and <strong>rfid</strong>. For crowd management, user engagement and social media amplification</p>
        <p>Proficiency with analytics. Google Analytics - Facebook insights - Custom tailored systems. From both technical and data mining perspectives</p>
        <p>Integration of <strong>SMS</strong> / <strong>MMS</strong> into digital campaigns</p>
        <p>Familiar with email campaign and mass mailing</p>
        <p>Use and integration of the major social networks. From both technical and human sides.</p>
        <p>Familiar with <strong>audience measurement</strong> software</p>
        <p>Deep knowledge of streaming video/audio</p>
        <p>Graphic design background, confident with the leading market tools</p>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
  <section id="portfolio" class="module parallax parallax-3">
    <div class="wow slideInLeft" data-wow-duration="1s" data-wow-delay="1s">
      <div class="row">
        <div class="col-s-12 col-md-11 col-lg-10 rusky text-right">
          <h2 class="chapter">MY CASE STUDIES</h2>
          <h3>my work speaks by itself</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="passwordform" class="col-xs-10 col-sm-10 col-xs-offset-1 col-sm-offset-1 col-md-4 col-md-offset-4 col-lg-2 col-lg-offset-5 collapse in">
        <form name="passwordfom1" id="passwordfom1" novalidate>
          <div class="row">
            <div class="form-groupfloating-label-form-group controls">
              <label>Type in your password</label>
              <input type="password" class="form-control" placeholder="Type here your password" id="passwordfield" required data-validation-required-message="Please enter the password.">
              <p class="help-block text-danger"></p>
              <div id="success"></div>
              <button id="pwbutton" type="submit" class="btn btn-1 btn-1a btn-large">Show me the magic</button>
              <p><br/>It's easy, just <a href="mailto:lisophorm@gmail.com?subject=Portfolio password request" data-virtualurl="/requestPass">click here and drop me a line</a> to request a password.</p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row collapse" id="protettowipe">
      <div class="">
        <div class="col-s-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
          <div class="whitebox">
            <div id="protetto"> </div>
          </div>
          <div class="row collapse" id="portfoliopaginator">
            <ul id="pagination-demo" class="pagination-lg">
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="#cselogos" class="jcarousel-wrapper collapse in">
        <div class="jcarousel">
          <ul id="logos">
            <?php
$files = glob("img/clients/*.{png}", GLOB_BRACE);
if(count($files)>0) {
foreach ($files as $file) {
    print "<li><img src=\"$file\"  class=\"img-responsive\" /></li>";
	//for ($i = 1; $i <= 5; $i++) {
    //print " <li><img src=\"http://lorempixel.com/800/600/?gino=".rand()."\"  class=\"img-responsive\" /></li>";
}}
?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="module parallax parallax-4">
    <div class="row">
      <div class="col-xs-10 col-xs-push-1 col-md-4 col-md-push-4 text-center">
        <h2 id="justdoit">LET'S DO THIS</h2>

        <a role="button" href="#myModal" id="lurido" data-virtualurl="/sendEmail" data-toggle="modal" class="btn btn-1 btn-1a btn-large">Get in touch</a><br/>
        <br/>
      </div>
      <div class="col-xs-5 col-sm-3 col-md-4 col-md-pull-4"> <img src="img/dobbsapproved.png" class="center-block img-responsive" alt=""/></div>
      <div class="col-xs-7 col-md-3 col-lg-2"> <img src="img/peraspera.png" alt="My lasagne" class="img-responsive img-circle" data-src="holder.js/300x300"> </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center line-top">feel free to stalk me: 41 Albany Close N15 3RG - London / ph 07404 189935 / <a href="mailto:lisophorm@gmail.com">lisophorm@gmail.com</a> </div>
    </div>
  </section>
</div>

			

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Feel free to express yourself</h3>
      </div>
      <div class="modal-body">
       <form name="myform" id="contactForm" data-async class="form-horizontal col-sm-12" action="contact/contact.php" enctype="multipart/form-data" method="post">
<div class="form-group"><label>Your message</label><textarea class="form-control"  required placeholder="Type your message here" data-placement="top" data-trigger="manual" data-content="Must say something" name="emailBody" id="emailBody" type="text"></textarea></div>
          <div class="form-group"><label>Your name</label><input class="form-control" placeholder="Just to break ice..." required data-placement="top" data-trigger="manual" name="sender" id="sender" type="text" ></div>
          <div class="form-group"><label>E-Mail</label><input class="form-control email" placeholder="email@you.com (I'll attend a mind reading seminar soon)" required data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" name="email" id="email" type="email" ></div>

          <div class="form-group"><button type="submit" class="btn btn-1 btn-1a btn-success pull-right">Send It!</button> <button class="btn btn-1 btn-1a" data-virtualUrl="/cancelsend" href="/cancellaForm" id="cancella" data-dismiss="modal" aria-hidden="true">Cancel</button><p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div><div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/jquery.debouncedresize.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/simple-text-rotator/1.0.0/jquery.simple-text-rotator.min.js"></script> 
<script src="js/jqBootstrapValidation.js"></script> 
<script src="js/anim.js"></script> 
<script src="pagination/jquery.twbsPagination.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/wow/1.0.2/wow.min.js"></script> 
<script src="js/jquery.animate-enhanced.min.js"></script> 
<script type="text/javascript">
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        });
		
	$(document).ready(function() {
    animateDiv();

});

function makeNewPosition($container) {

    // Get viewport dimensions (remove the dimension of the div)
    $container = ($container || $(window))
    var h = 10;
    var w = 10;

    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);

    return [nh, nw];

}

function animateDiv() {
    var $target = $('#bomba');
    var newq = makeNewPosition($target.parent());
    var oldq = $target.offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);

    $('#bomba').animate({
        top: newq[0],
        left: newq[1]
    }, speed, function() {
        animateDiv();
    });

};

function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);

    var greatest = x > y ? x : y;

    var speedModifier = 1.1;

    var speed = Math.ceil(greatest / speedModifier);

    return speed;

}	
		function getRandomizer(bottom, top) {
    return function() {
        return Math.floor( Math.random() * ( 1 + top - bottom ) ) + bottom;
    }
}

    </script> 
<script src="js/velocity.js"></script> 
<script src="bxslider/jquery.bxslider.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>
<script src="js/alfonso.js"></script> 
<script src="js/portfolio.js"></script>
</body>
</html>