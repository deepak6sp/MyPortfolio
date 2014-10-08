$(document).ready(function(){
  	$("#intro").hide();
	$("#intro").fadeIn(3000);
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 1000, 'swing', function () {
	        window.location.hash = target;
	    });
	});

	$("#intro").css("height",$(window).height()); //try screen instead window height//
	$("#wrapper").css("height",$(window).height());
	$("#skills").css("height",$(window).height());

	$("#navigationIcons ul li").hover(function(){
		$("#wrapper").css("background-color","#F9D423");
		},function(){
		$("#wrapper").css("background-color","#C73B3E");
	});

  	$(window).on("scroll",function(){
  	/*	if($(window).scrollTop()>100){
			 $("#wrapper").slideUp(1000);
		}
		else{
			$("#wrapper").slideDown(1000);
		}*/
    	if($(window).scrollTop()>450){
    		$('#name').hide();
    		$('#socialIcons').hide();
		    $("#info").slideUp(1000);
		    $("#navigationIcons").fadeOut(100);
		    $("#navMenu").slideDown(500);
		  	$("#header").addClass('headerFixed');
		  	if($(window).scrollTop()>650){
    			$("nav").removeClass('large').addClass('small');
    		}
    		else{
    			$("nav").removeClass('small').addClass('large');
    		}
    	}
    	else{
    		$('#name').show();
    		$('#socialIcons').show();
	      	$("#info").fadeIn(1000);
	      	$("#navigationIcons").slideDown(1000);
	     	$("#navMenu").slideUp();
	  		$("#header").removeClass('headerFixed');
    	}

  	});
  	
  	$('.nav-btn').click(function(event) {
 		$('#navMenu ul li').toggle();
  	});

	$(window).resize(function(event) {
	 	if ($(window).width() > 600){
			$('#navMenu ul li').removeAttr('style');
	 	}
	});

	if ($(window).width() < 600){
	 	$('#navMenu ul li a').click(function(event) {
	 		$('#navMenu ul li').slideUp(500);
	 	});
	}

	$("#navigationIcons ul li ").on('click', function(event) {
		event.preventDefault();
		$("#navMenu ul li .active").removeClass('active');
		

		/* Act on the event */
	});

	$("#navMenu ul li").on('click',function(event) {
		event.preventDefault();
		$(".active").removeClass('active');
		$(this).addClass('active');
		/* Act on the event */
	});

	/* calling external jquery plugins*/
	$('.fancybox').fancybox(); 


   	// progressbar
  	$('#bar-1').jqbar({ label: 'HTML5', value: 100, barColor: '#FF0000' });

    $('#bar-2').jqbar({ label: 'CSS3', value: 100, barColor: '#E80C7A' });

    $('#bar-3').jqbar({ label: 'Javascript', value: 90, barColor: '#15A12C' });

    $('#bar-4').jqbar({ label: 'jQuery', value: 90, barColor: '#ffffff' });

    $('#bar-5').jqbar({ label: 'PHP', value: 50, barColor: '#E807CD' });

    $('#bar-6').jqbar({ label: 'MYSQL', value: 50, barColor: '#B2FF0D' });
  
});


