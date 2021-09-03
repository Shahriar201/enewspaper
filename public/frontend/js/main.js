(function ($) {
	"use strict";

    jQuery(document).ready(function($){
       
 /*---------- menu js start---------*/  
     $('.stellarnav').stellarNav({
		theme: 'dark',
		breakpoint: 660,
		position: 'static',
		phoneBtn: false,
		locationBtn: false,
		sticky:false,
		showArrows:true,
		openingSpeed: 500,
		closingDelay: 500,
               
    });
        
        window.onscroll = function() {myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
        
/*---------- menu js End---------*/  


	
        
   $(".themesbazar_led_active").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:true,
            margin:20,
    	    autoplay:true,
            smartSpeed: 1000,
            autoplayTimeout:5000,
            navText:["<i Class='fas fa-angle-left'></i>", 
          			"<i Class='fas fa-angle-right'></i>"],
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 1,
			  },
			  1000: {
				items:1,
			  }
			}

    	});
        
                   

        
   
		$(".photoSlider-active").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:true,
    	    autoplay:true,
            smartSpeed: 1000,
            autoplayTimeout:5000,
            navText:["<i Class='fas fa-angle-left'></i>", 
          			"<i Class='fas fa-angle-right'></i>"],
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 1,
			  },
			  1000: {
				items:1,
			  }
			}

		});
	
        
   
		$(".secFive-slider").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:false,
			margin:10,
    	    autoplay:true,
            smartSpeed: 1000,
            autoplayTimeout:5000,
            navText:["<i Class='fas fa-angle-left'></i>", 
          			"<i Class='fas fa-angle-right'></i>"],
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 1,
			  },
			  1000: {
				items:4,
			  }
			}

		});
	

                

       $("img.lazyload").lazyload();
        
		$( "#from" ).datepicker();		
       $( "#to" ).datepicker();	
        
        // $( "#php" ).datepicker();	
 
        $('.popup').magnificPopup({
            type: 'iframe'
          });
      
        $('.live').magnificPopup({
            type: 'iframe'
          });
      

        
        
        $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('.scrollToTop').fadeIn();
		        } else {
		            $('.scrollToTop').fadeOut();
		        }
		    });

		    //Click event to scroll to top
		    $('.scrollToTop').on('click', function(){
		        $('html, body').animate({scrollTop : 0},800);
		        return false;
		    });
        
//        

    });




}(jQuery));	