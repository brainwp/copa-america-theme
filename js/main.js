jQuery(function($){	
$(document).ready(function() {

  	if($('body').hasClass('page-template-default')){
  		$('.bg-slider').css('height',$('.entry-header-page').outerHeight(true) + 'px');
  		console.log('foi')
  	}
  	console.log('nfoi');
});	
});