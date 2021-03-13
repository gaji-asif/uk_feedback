(function($) {
	"use strict";
	$('.nav_toggle').on('click', function(){
		$(".navigation_menu").toggleClass("menu_open");
		$(this).toggleClass("close_toggle");
	});
	//dropdown menu
	$(".navigation_menu ul li ul.sub_menu").parents("li").addClass("dropdown_toggle");
	$(".dropdown_toggle").append("<span class='caret_down'></span>");
	$(".navigation_menu ul li").children(".caret_down").on("click",function(){
		$(this).toggleClass("caret_up");
		$(this).prev("ul").slideToggle();
	});
	//mega menu js
	$(".mega_menu").parents("li").addClass("mega_dropdown");
	$(".mega_dropdown").prepend("<span class='mega_toggle'></span>");
	
	//mega menu js script
	var win_w = $(window).outerWidth();
	if(win_w < 992){
		$(".mega_dropdown > a").on('click', function(){
			$(this).next(".mega_menu").slideToggle(300);
			$(this).parents(".mega_dropdown").toggleClass("caret_up");
		});
		//mega dropdown menu
		$(".mega_menu .links_head").on('click', function(){
			$(this).next(".m_submenu").slideToggle(300);
			//$(this).parents(".mega_menu").show();
		});
	}
	//fix header on scroll
	var win_scroll = $(window).scrollTop();
	$(window).on('bind scroll', function(e) {
		if ($(window).scrollTop() > 300) {
			$('.navigation_header').addClass('fixed_menu');
		} else {
			$('.navigation_header').removeClass('fixed_menu');
		}	
	}); 
	//slider
	$(".main_slider").owlCarousel({
		singleItem:true,
		items:1,
		loop:true,
		margin:0,
		autoplay:true,
		autoplayTimeout:20000,
		autoplaySpeed:2000,
		smartSpeed:2000,
		dots:true,
		nav:false,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
	});
	//pdf gallery slider
	$('.pdf_gallery_slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
		if (!e.namespace)  {
		  return;
		}
		var carousel = e.relatedTarget;
		$('.slider_counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
	  }).owlCarousel({
		singleItem:true,
		items:1,
		loop:false,
		margin:0,
		autoplay:false,
		autoplayTimeout:20000,
		autoplaySpeed:2000,
		smartSpeed:2000,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
	  });
	
	//Trust Slider
	$(".trusted_slider").owlCarousel({
		singleItem:true,
		items:1,
		loop:true,
		margin:0,
		autoplay:true,
		autoplayTimeout:6000,
		autoplaySpeed:1500,
		smartSpeed:1500,
		dots:true,
		nav:false,
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
	});
	//Testimonial Slider
	$(".c_testimonial_slider").owlCarousel({
		singleItem:true,
		items:1,
		loop:true,
		margin:0,
		autoplay:true,
		autoplayTimeout:3000,
		autoplaySpeed:1500,
		smartSpeed:1500,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		animateIn: 'fadeIn',
		animateOut: 'fadeOut'
	});
    //service carousel
	$(".service_carousel").owlCarousel({
		singleItem:true,
		items:3,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		autoplaySpeed:1500,
		smartSpeed:1500,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsiveClass: true,
		responsive : {
			0 : {
				items: 1
			},
			767 : {
				items: 2
			},
			1200 : {
				items:3
			}
		}
	});
	//Country slider
	$(".country_slider").owlCarousel({
		singleItem:true,
		items:5,
		loop:true,
		margin:15,
		autoplay:true,
		autoplayTimeout:3000,
		autoplaySpeed:1500,
		smartSpeed:1500,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsiveClass: true,
		responsive : {
			0 : {
				items: 1
			},
			375 : {
				items: 2
			},
			600 : {
				items: 3
			},
			768 : {
				items: 3
			},
			992 : {
				items: 4
			},
			1200 : {
				items:5
			}
		}
	});
	//content slider
	$(".gallery_slider").owlCarousel({
		items:5,
		loop:false,
		margin:15,
		autoplay:true,
		autoplayTimeout:3000,
		autoplaySpeed:1500,
		smartSpeed:1500,
		dots:false,
		nav:true,
		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsiveClass: true,
		responsive : {
			0 : {
				items: 1
			},
			550 : {
				items: 2
			},
			960 : {
				items:3
			},
			1200 : {
				items: 5
			},
		}
	});
	//popup gallery js
	$('.gallery_popup').magnificPopup({
		delegate: '.gallery_icon',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'my_zoom_in',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: false,
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small></small>';
			}
		}
	});
	
	//Portfolio gallery js
	$('.portfolio_gallery_1').magnificPopup({
		delegate: '.gallery_icon',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'my_zoom_in',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: false,
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small></small>';
			}
		}
	});
	//Portfolio gallery js
	$('.portfolio_gallery_2').magnificPopup({
		delegate: '.gallery_icon',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'my_zoom_in',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: false,
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			//tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small></small>';
			}
		}
	});
	//Portfolio gallery js
	$('.portfolio_gallery_3').magnificPopup({
		delegate: '.gallery_icon',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'my_zoom_in',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: false,
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small></small>';
			}
		}
	});
	//portfolio mixit js
	// if ($('#portfolio_mix_wrap').length > 0){
		// $('#portfolio_mix_wrap').mixItUp({
		  // load: {
			// sort: 'order:asc'
		  // },
		  // selectors: {
			// target: '.mix-target',
			// filter: '.filter-btn'
		  // },
		  // callbacks: {
			// onMixEnd: function(state){
			  // console.log(state)
			// }
		  // }
		// });
	// }
	//onclick popup js
	$('.popup_icon').on('click', function() {
		$('.popup_wrapper').removeClass("open_popup");
		var popup_show = $(this).attr('data-show');
		$('#'+ popup_show).addClass("open_popup");	
	});
	$('.popup_wrapper').on('click', function(){
		$(this).removeClass("open_popup");
	});
	$('.close_btn').on('click', function(){
		$('.popup_wrapper').removeClass("open_popup");
	});
	$('.popup_inner_content').on('click', function(e){
		e.stopPropagation();
	});	
	//load event
	$(window).on('load', function() {
		$(".ayu_loader").delay(600).fadeOut("slow");
		//slider full height
		var hdr_h = $('.main_header').outerHeight();
		var win_h = $(window).outerHeight();
		var main_hh = win_h-hdr_h
		$('.slider_item').css('height',main_hh);
		
	});
	//add class on focus in label
	// $('.input').focus(function(){
		// $(this).parents('.form_group').addClass('focused');
	// });
	//Remove class on focus in label
	// $('.input').blur(function(){
		// var inputValue = $(this).val();
		// if ( inputValue == "" ) {
			// $(this).parents('.form_group').removeClass('focused');  
		// } 
	// });
	//tabs Menu
	$('.tabs_menu > li').on('click', function(){
		var tab_data = $(this).attr("data-tab");
		$('.tabs_menu > li').removeClass("active");
		$(this).addClass("active");	
		$(".tab_content").removeClass("active");
		$("#"+tab_data).addClass("active");
	});
    //counter js
	if ($('.number_counter').length > 0){
		$('.number_counter').appear(function() {
			$('.number_counter').each(count);
			function count(options) {	
				var $this = $(this);
				options = $.extend({}, options || {}, $this.data('countToOptions') || {});
				$this.countTo(options);
			}
		});
	}
	//testimonial height js
	var wind_w = $(window).outerWidth();
	if(wind_w > 767){
		$('.testimonial_body').each(function(){
		  var t_thumb_h = $(this).outerHeight();
		  $(this).children('.testi_thumb_part').css('min-height',t_thumb_h);
		});
	}
    //case study sidebar
	if(wind_w < 992){
		$('.case_study_sidebar .widget_title').on('click', function(){
			$(this).next(".category_list").slideToggle(100);
		});
	}
	//Portfolio sidebar
	var wind_wd = $(window).outerWidth();
	if(wind_wd < 992){
		//Portfolio sidebar open
		$('.portfolio_sidebar .heading').on('click', function(){
			$(this).next(".port_filter_lst").slideToggle(100);
		});
		//Portfolio sidebar close
		$('.port_filter_lst .filter-btn').on('click', function(){
			$(this).parents(".port_filter_lst").slideUp(100);
		});
	}
	//portfolio sidebar add class active
    $('.port_filter_lst .filter_btn').on('click', function(){
    	$('.port_filter_lst .filter_btn').removeClass("active");
    	$(this).addClass("active");	
    });
	//file name with jquery
	$('.file_upload_button input[type="file"]').change(function(e){
		var fileName = e.target.files[0].name;
		$(this).parents(".file_upload_button").next(".filepath").text(fileName);
	});
	//dropdown menu
	$(".p_dropdown_list").slideDown(300);
	$(".dropdown_head").on('click', function(){
		$(this).next(".p_dropdown_list").slideToggle(300);
	});
	//show plan tabs
	$('.p_dropdown_list > li').on('click', function(){
		var tab_data2 = $(this).attr("data-tab");
		$('.p_dropdown_list > li').removeClass("active");
		$(this).addClass("active");	
		$(".m_plan_div").removeClass("active");
		$("#"+tab_data2).addClass("active");
	});
	//show plan data
	$('.m_plan_tab > li').on('click', function(){
		var tab_data3 = $(this).attr("data-tab");
		$('.m_plan_tab > li').removeClass("active");
		$(this).addClass("active");	
		$(".m_pricing_box").removeClass("active");
		$("#"+tab_data3).addClass("active");
	});
	//fixed icons js
	$(".social_btn").on("mouseover", function(){
		$(".fixed_icon_wrap").addClass("show");
	});
	$(".fixed_icon_wrap").on("mouseleave", function(){
		$(this).removeClass("show");
	});
	//content marketing sidebar accordion
	$(".category_list li").on("click", function(){ 
		$(this).children(".subcatgory").slideToggle(100);
		$(".category_list li").not(this).children(".subcatgory").slideUp(100);
		//$(".ac_heading").not(this).removeClass("active");
	});
	//bootsrape selectpicker
    if ($(".selectpicker").length > 0) {
      $('.selectpicker').selectpicker();
    }
	//portfolio tabs Menu
	$('.filter_lst > li').on('click', function(){
		var tab_data = $(this).attr("data-tab");
		$('.filter_lst > li').removeClass("active");
		$(this).addClass("active");	
		$(".p_tab_content").removeClass("active");
		$("#"+tab_data).addClass("active");
	});
})(jQuery);
	
	function getCarrerType (type){
	   $("#c_type").val(type);
	}
	function getPackageDetail (pack_type , feature){
	   $("#pack_type").val(pack_type);
	   $("#pack_feature").val(feature);
	}