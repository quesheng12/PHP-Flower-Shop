(function($) {
	
	"use strict";
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.loader-wrap').length){
			$('.loader-wrap').delay(1000).fadeOut(500);
		}
		TweenMax.to($(".loader-wrap .overlay"), 1.2, {
            force3D: true,
            left: "100%",
            ease: Expo.easeInOut,
        });
	}

	var menuBtns = document.getElementsByClassName('js-anim-menu-btn');
	if( menuBtns.length > 0 ) {
		for(var i = 0; i < menuBtns.length; i++) {(function(i){
			initMenuBtn(menuBtns[i]);
		})(i);}

		function initMenuBtn(btn) {
			btn.addEventListener('click', function(event){	
				event.preventDefault();
				var status = !Util.hasClass(btn, 'anim-menu-btn--state-b');
				Util.toggleClass(btn, 'anim-menu-btn--state-b', status);
				// emit custom event
				var event = new CustomEvent('anim-menu-btn-clicked', {detail: status});
				btn.dispatchEvent(event);
			});
		};
	};
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var sticky_header = $('.fixed-header .sticky-header, .header-style-two');
			if (windowpos > 250) {
				siteHeader.addClass('fixed-header');
				sticky_header.addClass("animated slideInDown");
			} else {
				siteHeader.removeClass('fixed-header');
				sticky_header.removeClass("animated slideInDown");
			}
		}
	}
	
	// headerStyle();

	//Submenu Dropdown Toggle
	if($('.menu-box li.dropdown ul').length){
		$('.menu-box .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
	}


	//Search Form Show / Hide
	if($('.search-box .search-icon').length){
		$('.search-box .search-icon').on('click', function() {
			$('.main-header .main-search-form').fadeToggle(300);
		});
	}

	// $(".mobile-menu .menu-wrapper-box").niceScroll({
    //     cursorborder: "none",
	// 		cursorborderradius: "0px",
	// 		touchbehavior: true,
	// 		bouncescroll: false,
	// 		scrollspeed: 120,
	// 		mousescrollstep: 90,
	// 		horizrailenabled: true,
	// 		preservenativescrolling: true,
	// 		cursordragontouch: true
    // });
		
	//Mobile Nav Hide Show
	if($('.mobile-menu').length){

		
		
		//Dropdown Button
		$('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});

		var animButton = $(".anim-menu-btn"),
			navOverlay = $(".nav-overlay"),
	        mobileMneu = $(".mobile-menu");

	    function showMenu() {
	        TweenMax.to(mobileMneu, 0.6, {
	            force3D: false,
	            left: "0",
	            ease: Expo.easeInOut
	        });
			mobileMneu.removeClass("close-menu");
			navOverlay.fadeIn(500);
	    }

	    function hideMenu() {
	        TweenMax.to(mobileMneu, 0.6, {
	            force3D: false,
	            left: "-600px",
	            ease: Expo.easeInOut
	        });
			mobileMneu.addClass("close-menu");
			navOverlay.fadeOut(500);
	    }
	    animButton.on("click", function() {
	        if (mobileMneu.hasClass("close-menu")) showMenu();
	        else hideMenu();
		});
		navOverlay.on("click", function() {
	    	if (mobileMneu.hasClass("close-menu")) showMenu();
			else hideMenu();
			$('.anim-menu-btn').removeClass('anim-menu-btn--state-b');
	    });
	}
	
	function fullHeight(){
		$('.full-height').css("height", $(window).height());
	}
	fullHeight();

	if ($('.nav-overlay').length) {
		// / cursor /
		var cursor = $(".nav-overlay .cursor"),
		follower = $(".nav-overlay .cursor-follower");

		var posX = 0,
		posY = 0;

		var mouseX = 0,
		mouseY = 0;

		TweenMax.to({}, 0.016, {
			repeat: -1,
			onRepeat: function() {
				posX += (mouseX - posX) / 9;
				posY += (mouseY - posY) / 9;

				TweenMax.set(follower, {
					css: { 
						left: posX - 22,
						top: posY - 22
					}
				});

				TweenMax.set(cursor, {
					css: { 
						left: mouseX,
						top: mouseY
					}
				});

			}
		});

		$(document).on("mousemove", function(e) {
			var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
			mouseX = e.pageX;
			mouseY = e.pageY - scrollTop;
		});
		$("button, a").on("mouseenter", function() {
			cursor.addClass("active");
			follower.addClass("active");
		});
		$("button, a").on("mouseleave", function() {
			cursor.removeClass("active");
			follower.removeClass("active");
		});
		$(".nav-overlay").on("mouseenter", function() {
			cursor.addClass("close-cursor");
			follower.addClass("close-cursor");
		});
		$(".nav-overlay").on("mouseleave", function() {
			cursor.removeClass("close-cursor");
			follower.removeClass("close-cursor");
		});
	}

	//Update Sidebar Progress Line
	function sidebarProgressLine() {
		if($('.fixed-page-title .page-progress-bar').length){
			var progressLineBar = $('.fixed-page-title .page-progress-bar .bar-inner .page-progress');
			var pageHeight = $(document).height();
			var windwoHeight = $(window).height();
			var windowPos = $(window).scrollTop();
			var progressLineBarWidth = windowPos / (pageHeight - windwoHeight) * 100;
			$(progressLineBar).css('height',(progressLineBarWidth + '%'));
		}
	}
	
	sidebarProgressLine();

	//Update Sidebar Progress Line
	function sidebarProgressLineTwo() {
		if($('.bottom-panel-two .page-progress-bar').length){
			var progressLineBar = $('.bottom-panel-two .page-progress-bar .bar-inner .page-progress');
			var pageHeight = $(document).height();
			var windwoHeight = $(window).height();
			var windowPos = $(window).scrollTop();
			var progressLineBarWidth = windowPos / (pageHeight - windwoHeight) * 100;
			$(progressLineBar).css('width',(progressLineBarWidth + '%'));
		}
	}
	
	sidebarProgressLineTwo();
	

	//Sortable Masonary with Filters
	function sortableMasonry() {
		if($('.sortable-masonry').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.sortable-masonry .items-container');
			var $filter=$('.filter-btns');
	
			$container.isotope({
				filter:'*',
				packery: {
				gutter: 100
				},
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
	
			// Isotope Filter 
			$filter.find('li').on('click', function(){
				var selector = $(this).attr('data-filter');
	
				try {
					$container.isotope({ 
						filter	: selector,
						animationOptions: {
							duration: 500,
							easing	: 'linear',
							queue	: false
						}
					});
				} catch(err) {
	
				}
				return false;
			});
	
	
			winDow.on('resize', function(){
				var selector = $filter.find('li.active').attr('data-filter');

				$container.isotope({ 
					filter	: selector,
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
				$container.isotope()
			});
	
	
			var filterItemA	= $('.filter-btns li');
	
			filterItemA.on('click', function(){
				var $this = $(this);
				if ( !$this.hasClass('active')) {
					filterItemA.removeClass('active');
					$this.addClass('active');
				}
			});  
			$container.isotope("on", "layoutComplete", function(a, b) {

                var a = b.length,
                    pcn = $(".portfolio-pagination .current");
                TweenMax.to(pcn, 0.2, {
                    force3D: true,
                    y: -10,
                    opacity: 0,
                    ease: Power2.easeOut,
                    onComplete: function() {
                        TweenMax.to(pcn, 0.1, {
                            force3D: true,
                            y: 10
                        });
                        pcn.html(a);
                    }
                });
                TweenMax.to(pcn, 0.2, {
                    force3D: true,
                    y: 0,
                    delay: 0.3,
                    opacity: 1,
                    ease: Power2.easeOut
                });
            });

            var mi = $(".masonry-item").length;
            $(".portfolio-pagination .total").html(mi);           
		}
	}
	
	sortableMasonry();

	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}

	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}

	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}

	// Accordion Box
	if($('.accordion-box').length){
        $(".accordion-box").on('click', '.accord-btn', function() {

            if($(this).hasClass('active')!==true){
            $('.accordion .accord-btn').removeClass('active');

            }

            if ($(this).next('.accord-content').is(':visible')){
                $(this).removeClass('active');
                $(this).next('.accord-content').slideUp(500);
            }else{
                $(this).addClass('active');
                $('.accordion .accord-content').slideUp(500);
                $(this).next('.accord-content').slideDown(500);	
            }
        });	
    }


	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}

	function bannerSlider() {
	    if ($(".banner-slider").length) {

			var bannerSliderImage = new Swiper(".banner-slider-image .swiper-container", {
                preloadImages: false,
                loop: true,
                resistance: true,
                direction: 'vertical',
                spaceBetween: 10,
                effect: "slide",
            });

		    // Banner Slider
			var bannerSlider = new Swiper('.banner-slider-content .swiper-container', {
				spaceBetween: 0,
				slidesPerView: 1,
				mousewheel: true,
				grabCursor: true,
				effect: "fade",
				loop: true,
				speed: 1400,
				autoplay: {
				    delay: 50000,
				},
				pagination: {
	                el: '.banner-slider-pagination',
	                clickable: true,
	            },
	            navigation: {
	                nextEl: '.banner-slider-button-next',
	                prevEl: '.banner-slider-button-prev',
	            },
			});
			bannerSlider.on('slideChange', function() {
	            var csli = bannerSlider.realIndex + 1,
	                curnum = $('#current');
	            TweenMax.to(curnum, 0.2, {
	                force3D: true,
	                y: -10,
	                opacity: 0,
	                ease: Power2.easeOut,
	                onComplete: function() {
	                    TweenMax.to(curnum, 0.1, {
	                        force3D: true,
	                        y: 10
	                    });
	                    curnum.html('0' + csli);
	                }
	            });
	            TweenMax.to(curnum, 0.2, {
	                force3D: true,
	                y: 0,
	                delay: 0.3,
	                opacity: 1,
	                ease: Power2.easeOut
	            });
			});
			
			function kpsc() {
                $(".slide-progress").css({
                    width: "100%",
                    transition: "width 4000ms"
                });
            }
            function eqwe() {
                $(".slide-progress").css({
                    width: 0,
                    transition: "width 0s"
                });
            }

	        kpsc();
            bannerSlider.on("slideChangeTransitionStart", function() {
                eqwe();
            });
            bannerSlider.on("slideChangeTransitionEnd", function() {
                kpsc();
			});
			
            bannerSliderImage.controller.control = bannerSlider;
			bannerSlider.controller.control = bannerSliderImage;
	        
	        var totalSlides = bannerSlider.slides.length - 2;
	        $('#total').html('0' + totalSlides);
		}
		if ($(".multi-slider").length) {
            var ms1 = new Swiper(".multi-slider-1 .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
                effect: "slide",                
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false
				},
				pagination: {
	                el: '.banner-slider-pagination',
	                clickable: true,
	            },
	            navigation: {
	                nextEl: '.banner-slider-button-next',
	                prevEl: '.banner-slider-button-prev',
				},				
			});
			ms1.on('slideChange', function() {
				var csli = ms1.realIndex + 1,
					curnum = $('#current');
				TweenMax.to(curnum, 0.2, {
					force3D: true,
					y: -10,
					opacity: 0,
					ease: Power2.easeOut,
					onComplete: function() {
						TweenMax.to(curnum, 0.1, {
							force3D: true,
							y: 10
						});
						curnum.html('0' + csli);
					}
				});
				TweenMax.to(curnum, 0.2, {
					force3D: true,
					y: 0,
					delay: 0.3,
					opacity: 1,
					ease: Power2.easeOut
				});
			});
			
			function kpsc() {
				$(".slide-progress").css({
					width: "100%",
					transition: "width 2500ms"
				});
			}
			function eqwe() {
				$(".slide-progress").css({
					width: 0,
					transition: "width 0s"
				});
			}

			kpsc();
			ms1.on("slideChangeTransitionStart", function() {
				eqwe();
			});
			ms1.on("slideChangeTransitionEnd", function() {
				kpsc();
			});
			var totalSlides = ms1.slides.length - 2;
	        $('#total').html('0' + totalSlides);
            var ms2 = new Swiper(".multi-slider-2 .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
				effect: "slide",
				direction: "vertical",
            });
            var ms3 = new Swiper(".multi-slider-3 .swiper-container", {
                preloadImages: false,
                loop: true,
                speed: 1400,
                spaceBetween: 0,
                effect: "slide",
            });
            ms1.controller.control = ms2;
            ms2.controller.control = ms1;
            ms2.controller.control = ms3;
            ms3.controller.control = ms2;
		}
		if ($(".banner-carousel").length) {

		    // Banner Slider
			var bannerCarousel = new Swiper('.banner-carousel .swiper-container', {
				spaceBetween: 4,
				slidesPerView: 2,
				mousewheel: true,
				grabCursor: true,
				effect: "slide",
				loop: true,
				speed: 1400,
				autoplay: {
				    delay: 50000,
				},
				pagination: {
	                el: '.banner-slider-pagination',
	                clickable: true,
	            },
	            navigation: {
	                nextEl: '.banner-slider-button-next',
	                prevEl: '.banner-slider-button-prev',
				},
				breakpoints: {
                    991: {
                      slidesPerView: 1,
                    } 
                } 
			});
			bannerCarousel.on('slideChange', function() {
	            var csli = bannerCarousel.realIndex + 1,
	                curnum = $('#current');
	            TweenMax.to(curnum, 0.2, {
	                force3D: true,
	                y: -10,
	                opacity: 0,
	                ease: Power2.easeOut,
	                onComplete: function() {
	                    TweenMax.to(curnum, 0.1, {
	                        force3D: true,
	                        y: 10
	                    });
	                    curnum.html('0' + csli);
	                }
	            });
	            TweenMax.to(curnum, 0.2, {
	                force3D: true,
	                y: 0,
	                delay: 0.3,
	                opacity: 1,
	                ease: Power2.easeOut
	            });
			});
			
			function kpsc() {
                $(".slide-progress").css({
                    width: "100%",
                    transition: "width 4000ms"
                });
            }
            function eqwe() {
                $(".slide-progress").css({
                    width: 0,
                    transition: "width 0s"
                });
            }

	        kpsc();
            bannerCarousel.on("slideChangeTransitionStart", function() {
                eqwe();
            });
            bannerCarousel.on("slideChangeTransitionEnd", function() {
                kpsc();
			});
	        
	        var totalSlides = bannerCarousel.slides.length - 4;
	        $('#total').html('0' + totalSlides);
		}
		if ($(".video-banner").length) {

		    // Banner Slider
			var videoBannerContent = new Swiper('.video-banner-content .swiper-container', {
				spaceBetween: 0,
				slidesPerView: 1,
				mousewheel: true,
				grabCursor: true,
				effect: "fade",
				loop: true,
				speed: 1400,
				autoplay: {
				    delay: 50000,
				},
				pagination: {
	                el: '.banner-slider-pagination',
	                clickable: true,
	            },
	            navigation: {
	                nextEl: '.banner-slider-button-next',
	                prevEl: '.banner-slider-button-prev',
				},
				breakpoints: {
                    991: {
                      slidesPerView: 1,
                    } 
                } 
			});
		}
		if ($(".banner-grid-carousel").length) {

		    // Grid Slider
			var gridCarousel = new Swiper('.banner-grid-carousel .swiper-container', {
				spaceBetween: 0,
				slidesPerView: 3,
				mousewheel: true,
				grabCursor: true,
				effect: "slide",
				loop: true,
				speed: 1400,
				autoplay: {
				    delay: 50000,
				},
				pagination: {
	                el: '.banner-slider-pagination',
	                clickable: true,
	            },
	            navigation: {
	                nextEl: '.banner-slider-button-next',
	                prevEl: '.banner-slider-button-prev',
				},
				breakpoints: {
                    991: {
                      slidesPerView: 2,
                    },
					767: {
						slidesPerView: 1,
					} 
                } 
			});
			gridCarousel.on('slideChange', function() {
	            var csli = gridCarousel.realIndex + 1,
	                curnum = $('#current');
	            TweenMax.to(curnum, 0.2, {
	                force3D: true,
	                y: -10,
	                opacity: 0,
	                ease: Power2.easeOut,
	                onComplete: function() {
	                    TweenMax.to(curnum, 0.1, {
	                        force3D: true,
	                        y: 10
	                    });
	                    curnum.html('0' + csli);
	                }
	            });
	            TweenMax.to(curnum, 0.2, {
	                force3D: true,
	                y: 0,
	                delay: 0.3,
	                opacity: 1,
	                ease: Power2.easeOut
	            });
			});
			
			function kpsc() {
                $(".slide-progress").css({
                    width: "100%",
                    transition: "width 5000ms"
                });
            }
            function eqwe() {
                $(".slide-progress").css({
                    width: 0,
                    transition: "width 0s"
                });
            }

	        kpsc();
            gridCarousel.on("slideChangeTransitionStart", function() {
                eqwe();
            });
            gridCarousel.on("slideChangeTransitionEnd", function() {
                kpsc();
			});
	        
	        var totalSlides = gridCarousel.slides.length - 4;
	        $('#total').html('0' + totalSlides);
		}
		if ($(".fullscreen-banner").length) {

		    // Banner Slider
			var videoBannerContent = new Swiper('.fullscreen-banner-content .swiper-container', {
				spaceBetween: 0,
				slidesPerView: 1,
				mousewheel: true,
				grabCursor: true,
				effect: "slide",
				loop: true,
				speed: 1400,
				autoplay: {
				    delay: 50000,
				},
				pagination: {
	                el: '.banner-slider-pagination',
	                clickable: true,
	            },
	            navigation: {
	                nextEl: '.banner-slider-button-next',
	                prevEl: '.banner-slider-button-prev',
				},
				breakpoints: {
                    991: {
                      slidesPerView: 1,
                    } 
                } 
			});
		}
	}

	// Video background
	if ($('.my-background-video').length) {
		$('.my-background-video').bgVideo({
			showPausePlay: false,
			pauseAfter: 1200
		});
	}

	if ($('.testimonial-carousel').length) {
		// Testimonial 
		var galleryThumbs = new Swiper('.testimonial-thumbs', {
			loop: true,
			spaceBetween: 10,
			slidesPerView: 3,
			initialSlide: 1,
			freeMode: true,
			speed: 1400,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			centeredSlides: true,
			autoplay: {
			    delay: 5000,
			},
		});
		var totalSlides = $(".swiper-container").length;
		var galleryTop = new Swiper('.testimonial-content', {
			spaceBetween: 10,
			slidesPerView: 1,
			mousewheel: true,
			autoplay: {
			    delay: 5000,
			},
			loop: true,
			speed: 1400,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			thumbs: {
				swiper: galleryThumbs
			}
		});
	}
		
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}


	function windwLoad() {
		sortableMasonry();
		fullHeight();
		bannerSlider();
		setTimeout(function() {
	        $(".animInBottom").each(function(a) {
	            var b = $(this);
	            setTimeout(function() {
	                TweenMax.to(b, 1.2, {
	                    force3D: true,
	                    bottom: "0",
	                    ease: Expo.easeInOut
	                });
	            }, 230 * a);
	        });

	    }, 400);

	    setTimeout(function() {
	        $(".animInTop").each(function(a) {
	            var b = $(this);
	            setTimeout(function() {
	                TweenMax.to(b, 1.2, {
	                    force3D: true,
	                    top: "0",
	                    ease: Expo.easeInOut
	                });
	            }, 230 * a);
	        });

	    }, 800);
	}	


	//Single Item Carousel
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}
	//Two Item Carousel
	if ($('.two-item-carousel').length) {
		$('.two-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				992:{
					items:2
				},
				1200:{
					items:2
				}
			}
		});    		
	}
	//Three Item Carousel
	if ($('.three-item-carousel').length) {
		$('.three-item-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				992:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	


	if ($('.quantity-spinner').length) {
        $("input.quantity-spinner").TouchSpin({
            verticalbuttons: true
        });
    }
	




/* ==========================================================================
	When document is resize, do
   ========================================================================== */
   $(window).on('resize', function() {
		fullHeight();
		sortableMasonry();
		sidebarProgressLine();	
		sidebarProgressLineTwo();	
	});

/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
		sidebarProgressLine();
		sidebarProgressLineTwo();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		windwLoad();
		sidebarProgressLine();
		sidebarProgressLineTwo();
	});
		

})(window.jQuery);

