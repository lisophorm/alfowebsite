$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            console.log("inside press password");
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var password = $("#passwordfield").val();

            $.ajax({
                url: "././portfolio/login.php",
                type: "POST",
                data: {
                    passwd: password
                },
                cache: false
            }).done(function(data) {
                if (data == "SUCCSSS") {
                    console.log("pwd success");
                    $("#passwordform").collapse();
                    //$('#mycarousel').carousel('cycle');
                    //$("#contento").collapse();
                    loadCase(1, false);
                } else {
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("WRONG PASSWORD");
                    $('#success > .alert-danger').append('</div>');
                }
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

function loadCase(page, event) {
        //$(".preloaderbox").fadeIn(300);
        console.log("loadcase pagina:" + page);
        if (page == 0) {
            console.log("page > 0");
            $(".whitebox").animate({
                opacity: 1
            }, function() {
                console.log("whitepage very first page=0");
            });

        } else {

        }
        if (event) {
            event.preventDefault();
        }
        
        /*        $('html, body').stop().animate({
                 scrollTop: $("#protetto").offset().top-100
             }, 1500, 'easeInOutExpo');*/
        console.log("loadcase:" + page);
        $(".whitebox").clearQueue();
        $(".whitebox").stop();

        $(".whitebox").animate({
            opacity: 0
        }, 300);

        //$("#portfoliolink").delay( 1000).trigger("click").delay( 300).trigger("click");
        setTimeout(function() {

            console.log("loading pagina:" + page);
            $("#protetto").load("portfolio/portfolio.php?id=" + page, function(data) {
				console.log(data);
			 var theOffset = parseInt($("#protettowipe").offset().top)-(parseInt($("#navstripe").height())*1.5);
	
			$('html, body').stop().animate({
				scrollTop:theOffset+"px"
			}, 500,function() {

			});				

				
                $(".pager li a").click(function(e) {
                    console.log("click on pafgintio pager");
                    history.pushState(null, null, $(this).attr('href'));

                });
                $(".pager li a.prevcase").click(function(e) {


                    $(".prev").trigger("click");

                });
                $(".pager li a.nextcase").click(function(e) {

                    $(".next").trigger("click");

                });
                console.log("ciao caro");


                $("#passwordform").collapse();
				
				$("#slide-column").height($("#slide-column").width());
				
				$(".cycle-slideshow img").height($("#slide-column").height());	
				$(".side-slideshow img").width($("#thumbscolumn").width());
				$(".side-slideshow").cycle("reinit");
				$(".cycle-slideshow").cycle("reinit");

				$(".side-slideshow").height($("#slide-column").width());
$( '.side-slideshow' ).on( 'cycle-update-view', function(event, optionHash, slideOptionsHash, currentSlideEl) {
    //console.log("************* side slide update");
	$(".gino").css("opacity",1);
});				
				$.getScript( "http://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.js", function( data, textStatus, jqxhr ) {
  console.log( data ); // Data returned
  console.log( textStatus ); // Success
  console.log( jqxhr.status ); // 200
  console.log( "Load was performed." );
});
            });

        }, 300);

        //$("#protettowipe").delay( 800 ).fadeOut( 400 );

        $('#page-content').text('Page ' + page);

    }
    /*
    ,
                    success: function() {
                        // Success message
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-success')
                            .append("<strong>Your message has been sent. </strong>");
                        $('#success > .alert-success')
                            .append('</div>');

                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                    error: function() {
                        // Fail message
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                        $('#success > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
    */

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});

$(document).ready(function(e) {
    // need this just to trigger event later 
    $(".whitebox").animate({
        opacity: 0.5
    });
    $("#protetto").load("portfolio/portfolio.php?id=1",function() {
				$(".side-slideshow").cycle();
				$( '.side-slideshow' ).on( 'cycle-update-view', function(event, optionHash, slideOptionsHash, currentSlideEl) {
    //console.log("************* side slide update");
});
				$(".cycle-slideshow").cycle({
					    centerHorz: true,
    					centerVert: true
				});
		console.log("end page.load in portfolio.js");
		
		
	});
    $('#pagination-demo').twbsPagination({
        totalPages: 35,
        visiblePages: 7,
        onPageClick: function(event, page) {
            loadCase(page, event);

        }
    });
    $('.pagination a').click(function(e) {
        console.log("click on pafgintio next");
        history.pushState(null, null, $(this).attr('href'));

    });




});

$( document ).on( "portFolioEvent", {
    foo: "bar"
}, function( event, arg1, arg2 ) {
    console.log( "********** PORTFOLO EVENYT FIRED" ); // "bar"
	$(window).trigger("resize");
				$("#slide-column").height($("#slide-column").width());
				
				$(".cycle-slideshow img").height($("#slide-column").height());	
				$(".side-slideshow img").width($("#thumbscolumn").width());


				$(".side-slideshow").height($("#slide-column").width());
				
		console.log("pace done");
        //$(".preloaderbox").fadeOut(300);
        $("#protettowipe").collapse();
        $(".whitebox").animate({
            opacity: 1
        });
});

function discoverSlide() {
	console.load("********** bbig first image loaded");
	$(window).trigger("resize");
}

function preloadCompleto() {
	

		

        /*	$('.bxslider').bxSlider({
					adaptiveHeight:true,
					responsive:true,
                    auto: true,
                    controls:false
                });*/
/*

        $('.bxslider').montage({
            maxh: 140,
            liquid: false,
            alternateHeight: true,
            fillLastRow: true,
			margin:0
        });



        $(".portfolio-img").click(function() {
            console.log("you clicked img");


            if ($(this).hasClass("selectedZoomTarget")) {
                console.log("zoon target");
            }
        });
        $(".portfolio-img").zoomTarget({
            targetsize: 0.75,

            closeclick: true,
            duration: 600


        });


*/

    
}

function endZoom() {
    console.log("endzoom");
}