$(function() {

    $("#passwordfom1").find("input,textarea").jqBootstrapValidation({
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
                    $.post( "trackaction.php", { uri: "/showFolio/"+password} );
                    $("#passwordform").collapse();
                    //$('#mycarousel').carousel('cycle');
                    //$("#contento").collapse();
                    loadCase(1, false);
                } else {
					$.post( "trackaction.php", { uri: "/wrongFolio/"+password} );
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
        $("#loader").fadeIn(600);

        if (event) {
            event.preventDefault();
        }
        
        /*        $('html, body').stop().animate({
                 scrollTop: $("#protetto").offset().top-100
             }, 1500, 'easeInOutExpo');*/
        console.log("loadcase:" + page);


        //$("#portfoliolink").delay( 1000).trigger("click").delay( 300).trigger("click");
        setTimeout(function() {



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
				
				callSliders();
		

            });

        }, 300);



        $('#page-content').text('Page ' + page);

    }

$('#name').focus(function() {
    $('#success').html('');
});

$(document).ready(function(e) {

    $("#protetto").load("portfolio/portfolio.php?id=0",function() {

		
	callSliders();
		
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
	
	$("#thumbscolumn").height($("#slide-column").width());
	
    console.log( "********** PORTFOLO EVENYT FIRED:" + arg1 ); // "bar"
							setTimeout( function() {
								$("#loader").fadeOut(600);

							}, 1000 );
	$(window).trigger("resize");

				

    $("#protettowipe").collapse();

	
});

function discoverSlide() {
	console.load("********** bbig first image loaded");
	$(window).trigger("resize");
	
}

function preloadCompleto() {
	
 
}

function endZoom() {
    
}

// GLOBALS PLEASE GOD OF OBNOXIOUS CODERS FORGIVE ME
var squareSlider = 0;
var stripeSlider = 0;

function callSliders() {
	try {
		squareSlider.destroySlider();
		stripeSlider.destroySlider();
	} catch (e) {
		console.log("my first");
	}
	squareSlider=$("#square-wrapper").bxSlider({
						pause: 5000,
						controls:false,
						pager:false,
			 		 	auto: true,
			  			autoControls: true,
						onSliderLoad:function() {
						console.log("********** square slider loaded");
						}
					});
	stripeSlider=$("#side-slideshow").bxSlider({
						responsive: true,
						autoHover: true,
						mode:'vertical',
						minSlides: 5,
    					maxSlides: 5,
						moveSlides: 1,
						moveSlideQty:1,
						controls:false,
						pager:false,
			 		 	auto: true,
			  			autoControls: true,
						onSliderLoad:function() {
						console.log("********** column slider loaded");
						}
					});
}