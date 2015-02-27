// JavaScript Document
// jQuery for page scrolling feature - requires jQuery Easing plugin
// parallax shit
$(document).ready(function() {

    var jcarOffset = parseInt($(".jcarousel img").width());
    
    $(".jcarousel").css("left", "-" + jcarOffset + "px");
    //$(".jcarousel").animate({left:jcarOffset},1000);


    animate_loop = function animate_loop() {
        
        var jcarOffset = $(".jcarousel img").width();
        $(".jcarousel").animate({
            left: "0px"

        }, 1000, "linear", function() {
            $('#logos > li:first').before($('#logos > li:last'));
            var jcarOffset = parseInt($(".jcarousel img").width());
            $(".jcarousel").css("left", "-" + jcarOffset + "px");
            animate_loop();
        });
    }

    animate_loop();

    $window = $(window);

    $('.parallax').each(function() {
        // declare the variable to affect the defined data-type
        var $scroll = $(this);

        $(window).scroll(function() {
            // HTML5 proves useful for helping with creating JS functions!
            // also, negative value because we're scrolling upwards                             
            var yPos = -($window.scrollTop() / $scroll.data('speed'));

            // background position
            var coords = '50% ' + yPos + 'px';

            // move the background
            $scroll.css({
                backgroundPosition: coords
            });
        }); // end window scroll
    }); // end section function
}); // close out script
// face the musoic

var theColors = ["#E74F13", "#DB5714", "#E62914", "#DC3709", "#D92D17", "#F7673B", "#EA6D43", "#E23212", "#EE553A", "#EC713C", "#E1510E", "#DC4918", "#EA2F1A", "#D34C12", "#EB0F0F"];

$(window).on('load', function() {
	
	$("#loader").stop().fadeOut(500);
	    var $body = $('body'),
        $navtop = $('#navbar'),
        offset = $navtop.outerHeight();

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


function analitico(e) {
	var host="/unknown";
	if($(this).attr("data-virtualurl")) {
		host=$(this).attr("data-virtualurl");
		
	} else if($(this).attr("href")) {
		if(isLetter($(this).attr("href").charAt(0))) {
			host="/"+$(this).attr("href");
		} else {
			host="/"+$(this).attr("href").substr(1)
		}
		
		
	} else {
		host="/"+escape($(this).html());
		

	}
	console.log("analytic call:"+host);
	ga('send', 'pageview',host);
	$.post( "trackaction.php", { uri: host} );
	
}

function isLetter(str) {
  return str.length === 1 && str.match(/[a-z]/i);
}

$( document ).ajaxComplete(function(event, xhr, settings) {
console.log( "Triggered ajaxComplete handler url:" + settings.url);


  if(settings.url) {
	  if (settings.url.toLowerCase().indexOf("portfolio.php") >= 0) {
		  console.log( "Portfolio page!" + settings.url);

	  }
  }
 
  $("body").off("click", "a", null, analitico);
  
  $("body").on("click", "a", null, analitico);
});




$(document).ready(function(e) {
	
	$("body").on("click", "a", null, analitico);


    $("#navbar").on("click", "a", null, function() {
        
        $("#navbar").collapse("hide");
    });

    $("#navbar").find("a").bind('click', function(event) {
        
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500);
        event.preventDefault();
    });

    setInterval(function() {
        var off = $("#alfo").offset();
        //
        var wid = $("#alfo").width();
        var heig = $("#alfo").height();
    }, 100);

    $("#stretchme").fitText(0.7);
    var sizeinem = parseFloat($('#stretchme').css('font-size')) / 2;
    
    $(".rotoskills").css('font-size', Math.floor(sizeinem) + "px");
    $(".rotoskills").textrotator({
        separator: ",",
		speed: 4000
    });
    var debug = $(".rotoskills").html();
    console.log(debug);


    var time = 500;

$(window).on("orientationchange",function(event){
      
	
	// for portfolio keeps it squared
	
					$("#slide-column").height($("#slide-column").width());
				



    handleSkills();
	
});

$(window).on("resize", function(event) {
    
	
	// for portfolio keeps it squared
	
					$("#slide-column").height($("#slide-column").width());
				



    handleSkills();

}).trigger('resize');

    setTimeout(handleSkills, 300);
});



function handleSkills() {
    var sizeinem = parseFloat($('#stretchme').css('font-size')) / 2.3;
    
    $(".rotoskills").css('font-size', Math.floor(sizeinem) + "px");


/*    $('.servicebits').width($(".row").width());
    $('#skillbit').width($(".row").width());
    var skillBitHeight = parseInt($("#home").outerHeight());
    var blokkoHeight = parseInt($(".rotoskills").outerHeight());
    
    $("#skillbit").css('top', skillBitHeight - (blokkoHeight / 2));*/

    var offpic = parseInt($("#imgcol").offset().top);
    var offimg = parseInt($("#textcol").offset().top);
    var imgHeight = parseInt($("#alfo").height());
    var alfoHeight = parseInt($("#title").height());

    //this means pic and text on the same column
    if (offpic == offimg) {
        var textOffset = (imgHeight - alfoHeight) / 2;
        $("#title").css("margin-top", String(textOffset) + "px");
    } else {
        $("#title").css("margin-top", "0px");
    }

    
    
}

/*
$( window ).resize(function() {
	var sizeinem=parseFloat($('#stretchme').css('font-size')) / 2;
	
	$(".rotoskills").css('font-size',Math.floor(sizeinem)+"px");
});*/

(function( $ ) {
 
    $.fn.fonzPreload = function() {
 
        this.filter( "img" ).each(function() {
            var img = $( this );
            img.css("opacity","0.5");
        });
 
        return this;
 
    };
 
}( jQuery ));

(function($) {

    $.fn.helloWorld = function() {

        this.each( function() {
            $(this).text("Hello, World!");
        });

    }

}(jQuery));

$(function () { $("#contactForm").find("input,textarea,select").jqBootstrapValidation(); } );

$("#contactForm").submit(function(e) {
	
		var $form = $(this);
        var $target = $($form.attr('data-target'));
		var dato=$form.serialize();
 		console.log("contact form"+dato);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
			dataType:"text",
 
            success: function(data, status) {
				console.log("output:"+data);
                $("#justdoit").text(data);
				$("#lurido").text("There is hope that your message has been sent");
				$("#lurido").addClass("disabled");
				$(".modal").removeClass('in');
            }
        });
    event.preventDefault();
});
$("#cancella").click(function(e) {
	ga('send', 'pageview','/cancelMessage');
	$.post( "trackaction.php", { uri: '/cancelMessage'} );
    $("#justdoit").text("PLEASE DON'T GO AWAY");
	$("#lurido").text("Give me a second chance");
});
   /* $('#contactForm').live('submit', function(event) {
        var $form = $(this);
        var $target = $($form.attr('data-target'));
 
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize(),
 
            success: function(data, status) {
                $target.html(data);
            }
        });
 
        event.preventDefault();
    });*/




