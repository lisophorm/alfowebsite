$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            
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

        if (event) {
            event.preventDefault();
        }
        
        /*        $('html, body').stop().animate({
                 scrollTop: $("#protetto").offset().top-100
             }, 1500, 'easeInOutExpo');*/
        console.log("loadcase:" + page);


        //$("#portfoliolink").delay( 1000).trigger("click").delay( 300).trigger("click");
        setTimeout(function() {


			loader.show();
            $("#protetto").load("portfolio/portfolio.php?id=" + page, function(data) {

			 var theOffset = parseInt($("#protettowipe").offset().top)-(parseInt($("#navstripe").height())*1.5);
	
			$('html, body').stop().animate({
				scrollTop:theOffset+"px"
			}, 500,function() {

			});				

				
                $(".pager li a").click(function(e) {
                    
                    history.pushState(null, null, $(this).attr('href'));

                });
                $(".pager li a.prevcase").click(function(e) {


                    $(".prev").trigger("click");

                });
                $(".pager li a.nextcase").click(function(e) {

                    $(".next").trigger("click");

                });
                


                $("#passwordform").collapse();
				
				$("#slide-column").height($("#slide-column").width());
				
				$(".cycle-slideshow img").height($("#slide-column").height());	
				$(".side-slideshow img").width($("#thumbscolumn").width());
				$(".side-slideshow").cycle("reinit");
				$(".cycle-slideshow").cycle("reinit");

				$(".side-slideshow").height($("#slide-column").width());
$( '.side-slideshow' ).on( 'cycle-update-view', function(event, optionHash, slideOptionsHash, currentSlideEl) {
    //
	$(".gino").css("opacity",1);
});				

            });

        }, 300);

        				$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('Checking our the events huh?');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

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

    $("#protetto").load("portfolio/portfolio.php?id=0",function() {
				$(".side-slideshow").cycle();
				$( '.side-slideshow' ).on( 'cycle-update-view', function(event, optionHash, slideOptionsHash, currentSlideEl) {
    //
});
				$(".cycle-slideshow").cycle({
					    centerHorz: true,
    					centerVert: true
				});
		
		
		
	});
    $('#pagination-demo').twbsPagination({
        totalPages: 35,
        visiblePages: 7,
        onPageClick: function(event, page) {
            loadCase(page, event);

        }
    });
    $('.pagination a').click(function(e) {
        
        history.pushState(null, null, $(this).attr('href'));

    });




});

$( document ).on( "portFolioEvent", {
    foo: "bar"
}, function( event, arg1, arg2 ) {
    console.log( "********** PORTFOLO EVENYT FIRED:" + arg1 ); // "bar"
	$(window).trigger("resize");
				$("#slide-column").height($("#slide-column").width());
				
				$(".cycle-slideshow img").height($("#slide-column").height());	
				$(".side-slideshow img").width($("#thumbscolumn").width());


				$(".side-slideshow").height($("#slide-column").width());
				
		
        //$(".preloaderbox").fadeOut(300);
        $("#protettowipe").collapse();

		loader.hide();
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
            


            if ($(this).hasClass("selectedZoomTarget")) {
                
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
    
}

loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 100 } );
loader.show();