$(document).ready(function ($) {
	awe_backtotop();
	awe_owl();
	awe_category();
	awe_menumobile();
	awe_tab();
});
/*
$(window).on("load resize",function(e){	
	setTimeout(function(){					 
		awe_resizeimage();
	},200);
	setTimeout(function(){	
		awe_resizeimage();
	},1000);
});
*/
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})

/********************************************************
# SHOW NOITICE
********************************************************/
function awe_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function() {
		$(selector).animate({right: '-300px'}, 500);
	}, 3500);
}  window.awe_showNoitice=awe_showNoitice;

/********************************************************
# SHOW LOADING
********************************************************/
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;

/********************************************************
# HIDE LOADING
********************************************************/
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;

/********************************************************
# SHOW POPUP
********************************************************/
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;

/********************************************************
# HIDE POPUP
********************************************************/
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;

/********************************************************
# CONVERT VIETNAMESE
********************************************************/
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/g,"a"); 
	str= str.replace(/??|??|???|???|???|??|???|???|???|???|???/g,"e"); 
	str= str.replace(/??|??|???|???|??/g,"i"); 
	str= str.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/g,"o"); 
	str= str.replace(/??|??|???|???|??|??|???|???|???|???|???/g,"u"); 
	str= str.replace(/???|??|???|???|???/g,"y"); 
	str= str.replace(/??/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;

/********************************************************
# RESIDE IMAGE PRODUCT BOX
********************************************************/
/*
function awe_resizeimage() { 
	$('.product-box .product-thumbnail a img').each(function(){
		var t1 = (this.naturalHeight/this.naturalWidth);
		var t2 = ($(this).parent().height()/$(this).parent().width());
		if(t1<= t2){
			$(this).addClass('bethua');
		}
		var m1 = $(this).height();
		var m2 = $(this).parent().height();
		if(m1 <= m2){
			$(this).css('padding-top',(m2-m1)/2 + 'px');
		}
	})	
} window.awe_resizeimage=awe_resizeimage;
*/
/********************************************************
# SIDEBAR CATEOGRY
********************************************************/
function awe_category(){
	$('.nav-category .fa-angle-down').click(function(e){
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;

/********************************************************
# MENU MOBILE
********************************************************/
function awe_menumobile(){
	$('.menu-bar').click(function(e){
		e.preventDefault();
		$('#nav').toggleClass('open');
	});
	$('#nav .fa').click(function(e){		
		e.preventDefault();
		$(this).parent().parent().toggleClass('open');
		if($(this).hasClass('fa-angle-down')){
			$(this).removeClass('fa-angle-down').addClass('fa-angle-up');
		} else {
			$(this).removeClass('fa-angle-up').addClass('fa-angle-down');
		}
	});
} window.awe_menumobile=awe_menumobile;

/********************************************************
# ACCORDION
********************************************************/
function awe_accordion(){
	$('.accordion .nav-link').click(function(e){
		e.preventDefault;
		$(this).parent().toggleClass('active');
	})
} window.awe_accordion=awe_accordion;

/********************************************************
# OWL CAROUSEL
********************************************************/
function awe_owl() { 
	setTimeout(function(){
		$('.owl-carousel:not(.not-dqowl)').each( function(){
			var xxs_item = $(this).attr('data-xxs-items');
			var xs_item = $(this).attr('data-xs-items');
			var md_item = $(this).attr('data-md-items');
			var lg_item = $(this).attr('data-lg-items');
			var sm_item = $(this).attr('data-sm-items');	
			var margin	= $(this).attr('data-margin');
			var dot		= $(this).attr('data-dot');
			var loop	= $(this).attr('data-loop');
			var nav		= $(this).attr('data-nav');
			var auto_play = $(this).attr('data-auto-play');
			if (typeof margin !== typeof undefined && margin !== false) {    
			} else{
				margin = 30;
			}
			if (typeof xxs_item !== typeof undefined && xxs_item !== false) {    
			} else{
				xxs_item = 1;
			}
			if (typeof xs_item !== typeof undefined && xs_item !== false) {    
			} else{
				xs_item = 1;
			}
			if (typeof sm_item !== typeof undefined && sm_item !== false) {    

			} else{
				sm_item = 3;
			}	
			if (typeof md_item !== typeof undefined && md_item !== false) {    
			} else{
				md_item = 3;
			}
			if (typeof dot !== typeof undefined && dot !== true) {   
				dot= true;
			} else{
				dot = false;
			}
			if (typeof loop !== typeof undefined && loop !== true){
				loop = true;
			} else {
				loop = false;
			}
			if (typeof nav !== typeof undefined && nav !== true){
				nav = true;
			} else {
				nav = false;
			}
			if (typeof auto_play !== typeof undefined && auto_play !== true){
				auto_play = true;
			} else {
				auto_play = false;
			}
			$(this).owlCarousel({
				loop: loop,
				margin:Number(margin),
				responsiveClass:true,
				dots:dot,
				nav:nav,
				responsive:{
					0:{
						items:Number(xxs_item)				
					},
					543:{
						items:Number(xs_item)				
					},
					768:{
						items:Number(sm_item)				
					},
					992:{
						items:Number(md_item)				
					},
					1200:{
						items:Number(lg_item)				
					}
				},
				autoplay: auto_play,
				autoPlayHoverPause: true,
				autoheight: false
			})
		})
	},600);
} window.awe_owl=awe_owl;

/********************************************************
# BACKTOTOP
********************************************************/
function awe_backtotop() { 
	if ($('.back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
} window.awe_backtotop=awe_backtotop;

/********************************************************
# TAB
********************************************************/
function awe_tab() {
	$(".e-tabs").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');

		$(this).find('.tabs-title li').click(function(){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
		});    
	});
} window.awe_tab=awe_tab;

/********************************************************
# DROPDOWN
********************************************************/
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});