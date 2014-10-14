$(document).ready(function(){
	var w_height=$(window).height();
  	$("#intro").hide();
	$("#intro").fadeIn(3000);
	$("#navMenu").hide();
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);
	      	$('html, body').stop().animate({
	        	'scrollTop': $target.offset().top
	    	}, 2900, 'swing', function () {
	        	window.location.hash = target;
	    });
	});

	$("#intro").css("height",w_height); //try screen instead window height//
	$("#contact").css("height",w_height);
	$("#container").css("margin-top",w_height/3);
  	$(window).on("scroll",function(){
  		if($(window).scrollTop()>w_height/3.5){
  			$("#info").slideUp(300);  				   
  		}
  		else{
  			$("#info").fadeIn(1000);
 		}
  		if($(window).scrollTop()>w_height/4){
  			$("#navigationIcons").fadeOut(100);
  		}
  		else{
  			$("#navigationIcons").slideDown(1000);
  		}
    	if($(window).scrollTop()>w_height/1.5){
   			$("#topHeader").fadeOut(100);
   			$("#navMenu").slideDown(500);
    	}
    	else{
	     	$("#topHeader").slideDown(1000);
	     	$("#navMenu").hide();
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
	 		$("#skills").css("height",auto);
	 	});
	}
	else{
			$("#skills").css("height",w_height);
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
  	$('#bar-1').jqbar({ label: 'HTML5', value: 90, barColor: '#FF0000' });

    $('#bar-2').jqbar({ label: 'CSS3', value: 90, barColor: '#E80C7A' });

    $('#bar-3').jqbar({ label: 'Javascript', value: 80, barColor: '#15A12C' });

    $('#bar-5').jqbar({ label: 'PHP', value: 60, barColor: '#E807CD' });

    $('#bar-6').jqbar({ label: 'Photoshop', value: 70, barColor: '#B2FF0D' });
  
});


