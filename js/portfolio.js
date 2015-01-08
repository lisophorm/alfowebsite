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
            }).done(function( data ) {
   	if(data=="SUCCSSS") {
		console.log("pwd success");
		        $("#passwordform").collapse();
                //$('#mycarousel').carousel('cycle');
                //$("#contento").collapse();
				loadCase(1,false);
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

        function loadCase(page,event) {
			//$(".preloaderbox").fadeIn(300);
			console.log("loadcase pagina:" + page);
			if(page==0) {
				console.log("page > 0");
			$(".whitebox").animate({ opacity: 1 },function() {
			console.log("whitepage very first page=0");
			});
			
			}  else {
				
			}
			if(event) {
            event.preventDefault();
			}
			console.log("before pace:" + page);
            Pace.restart();
			console.log("pace restart:" + page);
			/*        $('html, body').stop().animate({
            scrollTop: $("#protetto").offset().top-100
        }, 1500, 'easeInOutExpo');*/
		console.log("loadcase:" + page);
           	$(".whitebox").clearQueue();
 			 $(".whitebox").stop();

            $(".whitebox").animate({ opacity: 0 },300);

            //$("#portfoliolink").delay( 1000).trigger("click").delay( 300).trigger("click");
			setTimeout(function() {
				
                           console.log("loading pagina:" + page);
            $("#protetto").load("portfolio/portfolio.php?id=" + page, function() {
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


            });
            
			},300);

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
		$(".whitebox").animate({ opacity: 0.5});
		$("#protetto").load("portfolio/portfolio.php?id=0");
        $('#pagination-demo').twbsPagination({
            totalPages: 35,
            visiblePages: 7,
            onPageClick: function(event, page) {
                loadCase(page,event);

            }
        });
        $('.pagination a').click(function(e) {
            console.log("click on pafgintio next");
            history.pushState(null, null, $(this).attr('href'));

        });
});

            Pace.on('done', function() {
				console.log("pace done");
            //$(".preloaderbox").fadeOut(300);
			$("#protettowipe").collapse();
						$(".whitebox").animate({ opacity: 1});
			/*	$('.bxslider').bxSlider({
					adaptiveHeight:true,
					responsive:true,
                    auto: true,
                    controls:false
                });*/
				
				
	$('.bxslider').montage({
								maxh:140,
								liquid:true,
								alternateHeight         : true,
								fillLastRow:true
							});
		
			
		$(".am-wrapper").zoomTarget({targetsize:0.75, closeclick:true, duration:600});	
							
            //    $(".portfolio-img").click(function(e) {
				//	e.preventDefault();
                  //  console.log("click on .portfolio-img");
                  //  history.pushState(null, null, $(this).attr('href'));

               // });
					
	
				
        });
		
		            Pace.on('restart', function() {
				console.log("pace restart");
            //$(".preloaderbox").fadeOut(300);
						//$(".whitebox").animate({ opacity: 1});
        });