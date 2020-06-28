;(function($) {

   'use strict'
   
   
	var scrollUp = function() {
		$(window).scroll(function() {
			if ( $(this).scrollTop() > 850 ) {
				$('#scroll-up').addClass('visible');
			} else {
				$('#scroll-up').removeClass('visible');
			}
		});

		$('#scroll-up').on('click', function() {
			$("html, body").animate({ scrollTop: 0 }, 900);
			return false;
		});
	};
	
	var onePage = function() {
		
		jQuery(function($) {
			
			$('#main-navigation a[href*="#"]').on('click',function (e) {
			
			var target = this.hash;
			var $target = $(target);
			$('#main-navigation a[href*="#"]').addClass('active');

			if ( $target.length ) {
				e.preventDefault();
				$('html, body').animate({
					'scrollTop': $target.offset().top - 100
				}, 900, 'swing');
				
				
			}
			
			});
			
		});
	};
	
		var responsiveMenu = function() {
		

		$(window).on('load resize', function() {
			
				if ( window.innerWidth <= 1024 ) {
					
					
					$('#main-navigation').removeClass('main-menu');
					$('#main-navigation').addClass('mob-nav');
					$('#main-navigation.mob-nav').hide();
					$('#main-navigation.mob-nav .sub-menu').hide();
					
					$('#main-navigation.mob-nav').find( '.menu-item-has-children > a' ).after('<span class="submenu-btn"></span>');
					
					$('.menu-btn').removeClass('focus');
					$('.menu-btn').show();
					
				} else {
					
					$('#main-navigation').addClass('main-menu');
					$('#main-navigation').removeClass('mob-nav');
					$('#main-navigation.main-menu').show();
					$('#main-navigation.mob-nav .submenu').removeAttr('style');
					$('.hide-mob-menu').removeClass('show');
					$('.submenu-btn').remove();
					$('.menu-btn').hide();
				}
			
			});
			
				$('.menu-btn').on('click', function() {
					$('#main-navigation.mob-nav').slideToggle(300);
					$(this).toggleClass('focus');
					$('.hide-mob-menu').addClass('show');
					
				});

				$(document).on('click', '#main-navigation.mob-nav li .submenu-btn', function(e) {
					$(this).toggleClass('focus');
					$(this).next('.sub-menu').slideToggle(300);
					
					e.stopImmediatePropagation()
				});
				
				$('.hide-mob-menu').on('click', function() {
					$('#main-navigation.mob-nav').hide();
					
				});
		};
	
		var searchToggle = function() {
		jQuery("#main-navigation .search-icon").on("click", function() {
			jQuery(".search-container .nl-search-box").toggleClass("visible");
			});
		};
		
		
		
		var stickyHeader = function() {
			if (million_shades_sticky == 1)	{
				if (million_shades_headerAlign != 'inline'){
					
				if ($("#site-header").is('*')) {
					var elem = $('#site-header');
					var offset = elem.offset();
					
					var topValue =  offset.top + elem.height();
					var width = elem.width();
					
					$(window).on('load scroll', function() {
					var y = $(this).scrollTop();
					if (y >= topValue) {  
						if ($('#site-header').hasClass('fixed')){	 
						}else{
							$('#site-header').addClass('fixed');
							$('.topbar-text').addClass('fixed');
							$('.topbar-social').addClass('fixed');
							
							
							$('#site-header').css({
								top: '0px',
								width:width,
							});
							
							$('#site-header').animate({ 
								top: '0',
							}, 500, function() {	
							});
						}
					} else {	
						if ($('#site-header').hasClass('fixed')){	 	
							$('#site-header').removeClass('fixed');
							$('.topbar-text').removeClass('fixed');
							$('.topbar-social').removeClass('fixed');
		
							$('#site-header').fadeOut('fast', function(){ 
							$('#site-header').fadeIn('fast');
							});
						}
					}
				});
			}
			
			} 
			
			else 
			
			{
				
			if ($(".main-menu").is('*')) {
					var elem = $('.site-navigation-container');
				
					var width = elem.width();
				
				$(window).on('load scroll', function() {
					var y = $(this).scrollTop();
					if (y >= 107) {  
						if ($('.site-navigation-container').hasClass('inline')){	 
						}else{
							$('.site-navigation-container').addClass('inline');
							$('#main-navigation.main-menu').addClass('inline');
							$('#main-navigation.main-menu ul').addClass('inline');
							$('.site-title').addClass('inline');
							$('#site-header').addClass('inline');
							$('.topbar').addClass('inline');
				
							$('.main-menu.inline').css({
								top: '0px',
								width:'100%',
								left: '0px',
							});
							
							
							$('.main-menu.inline').animate({ 
								top: '0',
							}, 500, function() {	
							});
						}
					} else {	
						
							$('.site-navigation-container').removeClass('inline');							
							$('#main-navigation.main-menu').removeClass('inline');
							$('#main-navigation.main-menu ul').removeClass('inline');
							$('.site-title').removeClass('inline');
							$('.topbar').removeClass('inline');
							$('#site-header').removeClass('inline');
		
							$('#main-navigation.main-menu').fadeOut('fast', function(){ 
							$('#main-navigation.main-menu').fadeIn('fast');
							});
						
					}
				});
			}
				
				
			}
			}
		};
		
	$(function() {
		
	onePage();
	stickyHeader();
	scrollUp();
	
	responsiveMenu();
	
	searchToggle();
	
	
	
	  	});
})(jQuery);