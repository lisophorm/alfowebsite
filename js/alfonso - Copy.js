// JavaScript Document

// parallax shit



$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('.parallax').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
// face the musoic

var theColors = ["#E74F13", "#DB5714", "#E62914", "#DC3709", "#D92D17", "#F7673B", "#EA6D43", "#E23212", "#EE553A", "#EC713C", "#E1510E", "#DC4918", "#EA2F1A", "#D34C12", "#EB0F0F"];

$(window).on('load',function(){
    var $body   = $('body'), 
        $navtop = $('#navbar'),
        offset  = $navtop.outerHeight();

    // fix body padding (in case navbar size is different than the padding)
    //$body.css('padding-top', offset);
    // Enable scrollSpy with correct offset based on height of navbar
    //$body.scrollspy({target: '#navtop', offset: offset });

    // function to do the tweaking
    function fixSpy() {
        // grab a copy the scrollspy data for the element
        var data = $body.data('bs.scrollspy');
        // if there is data, lets fiddle with the offset value
        if (data) {
            // get the current height of the navbar
            offset = $navtop.outerHeight();
            // adjust the body's padding top to match
            $body.css('padding-top', offset);
            // change the data's offset option to match
            data.options.offset = offset
            // now stick it back in the element
            $body.data('bs.scrollspy', data);
            // and finally refresh scrollspy
            $body.scrollspy('refresh');
        }
    }

    // Now monitor the resize events and make the tweaks
    var resizeTimer;
    $(window).resize(function() {
        clearTimeout(resizeTimer);
   //     resizeTimer = setTimeout(fixSpy, 200);
    });
});

$(document).ready(function(e) {

	$(".servicebits").on("mouseenter",".serviceblock", function (e) {
	$(this).children(".description").show(300);
	$('.servicebits').isotope( 'layout' );
	var index=$(this).css("z-index");
	console.log("z-index"+index);
	index=parseInt(index)+1;
	console.log("NEW z-index"+index);
	$(this).css("z-index",index);
	
});

$(".servicebits").on("mouseleave",".serviceblock", function (e) {
	$(this).children(".description").hide(300);
	$('.servicebits').isotope( 'layout' );
});
	setInterval(function() {
		var off=$("#alfo").offset();
		//console.log("alfonsi si trova:"+off.left+"-"+off.top);
		var wid=$("#alfo").width();
		var heig=$("#alfo").height();
	},100);
	
	$("#stretchme").fitText(0.7);
	var sizeinem=parseFloat($('#stretchme').css('font-size')) / 2;
	console.log("the dize is:"+sizeinem);
	$(".rotoskills").css('font-size',Math.floor(sizeinem)+"px");
	    $(".rotoskills").textrotator({
			separator:",",
            animation: "flipCube",
            speed: 4000
        });
	var debug=$(".rotoskills").html();
	console.log(debug);
	$(".servicebits").isotope(
	{ layoutMode: 'masonry',
	animationEngine: 'best-available',
	itemSelector: '.serviceblock', }
	);
	
	var time = 500;
	
		$(".servicedata").each(function() {
			
			var self = this;
			
        var hue = 'hsla(' + (Math.floor((Math.random() * 360) + 1)) + ',80%,40%,1)';
 
		 console.log($(this).html());
		 var $newItems = $('<div class="serviceblock">'+$(this).html()+'</div>');
		 $newItems.css("background-color", theColors[Math.floor((Math.random() * 14))]);
		 $newItems.css("z-index", 3);
		     (function(index) {
        setTimeout(function() { 
		$('.servicebits').append( index ).isotope( 'appended', index );
		$(".servicebits").width($(".row").width());
		$('.servicebits').isotope( 'layout' );
		 }, time);
    })($newItems);
		 
		 time+=100;
		
    });
	

	setTimeout(handleSkills,300);
});

$(window).on("debouncedresize", function( event ) {
   console.log("SMARTRESIZE the dize");
   	
	
	handleSkills();
	$('.servicebits').isotope( 'layout' );
});

function handleSkills() {
	var sizeinem=parseFloat($('#stretchme').css('font-size')) / 2;
	console.log("RESIZE the dize is:"+sizeinem);
	$(".rotoskills").css('font-size',Math.floor(sizeinem)+"px");

	
	$('.servicebits').width($(".row").width());
	$('#skillbit').width($(".row").width());
	var skillBitHeight=parseInt($("#home").outerHeight());
	var blokkoHeight=parseInt($(".rotoskills").outerHeight());
	console.log("HEIGHT of HOME is:"+skillBitHeight);
	$("#skillbit").css('top',skillBitHeight-(blokkoHeight/2));
	
	var offpic=parseInt($("#imgcol").offset().top);
	var offimg=parseInt($("#textcol").offset().top);
	var imgHeight=parseInt($("#alfo").height());
	var alfoHeight=parseInt($("#title").height());
	
	//this means pic and text on the same column
	if(offpic == offimg) {
		var textOffset=(imgHeight-alfoHeight)/2;
		$("#title").css("margin-top",String(textOffset)+"px");
	} else {
		$("#title").css("margin-top","0px");
	}
	
	console.log("Offset of pic:"+$("#imgcol").offset().top);
	console.log("offset of text:"+$("#textcol").offset().top);
}

/*
$( window ).resize(function() {
	var sizeinem=parseFloat($('#stretchme').css('font-size')) / 2;
	console.log("RESIZE the dize is:"+sizeinem);
	$(".rotoskills").css('font-size',Math.floor(sizeinem)+"px");
});*/