(function($){"use strict";$(document).ready(function(){jQuery(window).on('scroll',function(){if($(this).scrollTop()>100){$('.header.onepage').addClass("sticky")}else{$('.header.onepage').removeClass("sticky")}});$('.nav').slicknav({prependTo:".mobile-nav",});$(".slider-one").owlCarousel({loop:true,autoplay:true,smartSpeed:700,autoplayTimeout:4500,autoplayHoverPause:true,center:false,nav:true,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],dots:true,items:1,responsive:{300:{nav:false,},480:{nav:false,},768:{nav:false,},1170:{nav:true,},}});$(".slider-two").owlCarousel({loop:true,autoplay:false,smartSpeed:700,autoplayTimeout:4500,autoplayHoverPause:true,center:false,nav:false,dots:true,items:1});$('.single-layer.one').mouseParallax({moveFactor:3});$('.single-layer.two').mouseParallax({moveFactor:3});$('.single-layer.three').mouseParallax({moveFactor:3});$('.single-layer.four').mouseParallax({moveFactor:3});$('.single-layer.five').mouseParallax({moveFactor:3});$('.number').counterUp({time:1000});$('.single-team.one').on("click",function(){$('.team-details.one').toggleClass('active')});$('.single-team.two').on("click",function(){$('.team-details.two').toggleClass('active')});$('.single-team.three').on("click",function(){$('.team-details.three').toggleClass('active')});$('.single-team.four').on("click",function(){$('.team-details.four').toggleClass('active')});$('.team-details .cross').on("click",function(){$('.team-details.one, .team-details.two, .team-details.three, .team-details.four').removeClass('active')});$('.team-details').perfectScrollbar();$(".testimonial-carousel").owlCarousel({loop:true,autoplay:false,smartSpeed:700,center:false,margin:15,nav:true,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],dots:false,items:1,});$('input[type="checkbox"]').change(function(){if($(this).is(':checked')){$(this).parent("label").addClass("checked")}else{$(this).parent("label").removeClass("checked")}});$(".clients-slider").owlCarousel({loop:true,autoplay:true,smartSpeed:500,autoplayTimeout:3000,margin:30,nav:false,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],dots:false,responsive:{300:{items:2,},480:{items:3,},768:{items:4,},1170:{items:6,},}});$(".blog-slider").owlCarousel({loop:true,autoplay:true,smartSpeed:700,autoplayTimeout:4000,autoplayHoverPause:true,margin:30,nav:true,dots:false,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],responsive:{300:{items:1,},480:{items:1,},768:{items:2,},1170:{items:3,},}});$(".services-slider").owlCarousel({loop:true,autoplay:false,smartSpeed:700,autoplayTimeout:5000,center:false,margin:15,nav:true,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],dots:false,items:1});$('[data-countdown]').each(function(){var $this=$(this),finalDate=$(this).data('countdown');$this.countdown(finalDate,function(event){$this.html(event.strftime('<div class="cdown"><span class="days"><strong>%-D</strong><p>Days.</p></span></div><div class="cdown"><span class="hour"><strong> %-H</strong><p>Hours.</p></span></div> <div class="cdown"><span class="minutes"><strong>%M</strong> <p>MINUTES.</p></span></div><div class="cdown"><span class="second"><strong> %S</strong><p>SECONDS.</p></span></div>'))})});$('.bxslider').bxSlider({pagerCustom:'#bx-pager',controls:false,});$(".blog-slide").owlCarousel({autoplay:false,loop:true,smartSpeed:700,autoplayTimeout:5000,autoplayHoverPause:true,center:false,items:1,margin:0,dots:false,nav:true,navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],});$('.sticky-area').theiaStickySidebar({additionalMarginTop:0});$(window).stellar({responsive:true,positionProperty:'position',horizontalOffset:0,verticalOffset:0,horizontalScrolling:false});$('.btn, .slicknav_nav li a').on('click',function(event){var $anchor=$(this);$('html, body').stop().animate({scrollTop:$($anchor.attr('href')).offset().top-0},1000,'easeInOutQuart');event.preventDefault()});$.scrollUp({scrollName:'scrollUp',scrollDistance:300,scrollFrom:'top',scrollSpeed:1000,easingType:'easeInOutQuart',animation:'fade',animationSpeed:200,scrollTrigger:false,scrollTarget:false,scrollText:["<i class='fa fa-angle-up'></i>"],scrollTitle:false,scrollImg:false,activeOverlay:false,zIndex:2147483647})});$('.video-popup').magnificPopup({type:'iframe',removalDelay:300,mainClass:'mfp-fade'});$('#header .search').on("click",function(){$('.search-form, .search').toggleClass('active')});$('#coming-soon .button .btn,.subscription-form .cross').on("click",function(){$('.subscription-form').toggleClass('active')});$('.panel').on('click',function(){$(".panel").removeClass("active");$(this).addClass("active")})})(jQuery);