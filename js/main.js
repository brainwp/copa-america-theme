jQuery(function($){	
$(document).ready(function() {

  	if($('body').hasClass('page-template-default') || $('body').hasClass('page-template-page-times')){
  		$('.bg-slider').css('height',$('.entry-header-page').outerHeight(true) + 'px');
  	}
  	$("html").niceScroll();
});	
});