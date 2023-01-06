/*** FOOTER ***/
$(document).ready(function(){
	var ww = $(window).width();
	if(ww < 768){
		$('footer .list-menu').hide();
		$('footer .footer-heading-title').on('click', function(){
			$(this).next('.list-menu').slideToggle('fast');
		});
	} else {
		$('footer .list-menu').show();
	}
});


/*** MENU ASIDE ***/
jQuery(function($) {
	"use strict";
	$(".sidebar-linklists").accordion({
		accordion:false,
		speed: 300,
		closedSign: '<i class="fa fa-angle-down" aria-hidden="true"></i>',
		openedSign: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
	});
});
(function($){
	$.fn.extend({ 
		accordion: function(options) {  
			var defaults = {
				accordion: 'true',
				speed: 300,
				closedSign: '[-]',
				openedSign: '[+]'
			};  
			var opts = $.extend(defaults, options); 
			var $this = $(this);  
			$this.find("li").each(function() {
				if($(this).find("ul").size() != 0){
					$(this).find("a:first").after("<em>"+ opts.closedSign +"</em>");  
					if($(this).find("a:first").attr('href') == "#"){
						$(this).find("a:first").click(function(){return false;});
					}
				}
			}); 
			$this.find("li em").click(function() {
				if($(this).parent().find("ul").size() != 0){
					if(opts.accordion){
						//Do nothing when the list is open
						if(!$(this).parent().find("ul").is(':visible')){
							parents = $(this).parent().parents("ul");
							visible = $this.find("ul:visible");
							visible.each(function(visibleIndex){
								var close = true;
								parents.each(function(parentIndex){
									if(parents[parentIndex] == visible[visibleIndex]){
										close = false;
										return false;
									}
								});
								if(close){
									if($(this).parent().find("ul") != visible[visibleIndex]){
										$(visible[visibleIndex]).slideUp(opts.speed, function(){
											$(this).parent("li").find("em:first").html(opts.closedSign);
										});   
									}
								}
							});
						}
					}
					if($(this).parent().find("ul:first").is(":visible")){
						$(this).parent().find("ul:first").slideUp(opts.speed, function(){
							$(this).parent("li").find("em:first").delay(opts.speed).html(opts.closedSign);
						}); 
					}else{
						$(this).parent().find("ul:first").slideDown(opts.speed, function(){
							$(this).parent("li").find("em:first").delay(opts.speed).html(opts.openedSign);
						});
					}
				}
			});
		}
	});
})(jQuery);

/*** Thu gọn collection.list ***/
$('.main-best-tour-content .sidebar-linklists > ul').each(function(){
	var nc = $(this).find('.tour-list').length;
	if (nc > 5){
		$('.tour-list',this).eq(6).nextAll().hide().addClass('toggleable');
		$(this).append('<li class="more"><a><label>Xem thêm ... </label></a></li>');
	}
});
$('.main-best-tour-content .sidebar-linklists > ul').on('click','.more', function(){
	if($(this).hasClass('less')){
		$(this).html('<a><label>Xem thêm ...</label></a>').removeClass('less');
	} else {
		$(this).html('<a><label>Thu gọn ... </label></a>').addClass('less');;
	}
	$(this).siblings('li.toggleable').slideToggle();
});

/*** Thu gọn collection menu list ***/
$('.sidebar-menu-content .sidebar-linklists > ul').each(function(){
	var nc = $(this).find('.sidebar-menu-list').length;
	if (nc > 8){
		$('.sidebar-menu-list',this).eq(9).nextAll().hide().addClass('toggleable');
		$(this).append('<li class="more"><a><label>Xem thêm ... </label></a></li>');
	}
});
$('.sidebar-menu-content .sidebar-linklists > ul').on('click','.more', function(){
	if($(this).hasClass('less')){
		$(this).html('<a><label>Xem thêm ...</label></a>').removeClass('less');
	} else {
		$(this).html('<a><label>Thu gọn ... </label></a>').addClass('less');;
	}
	$(this).siblings('li.toggleable').slideToggle();
});