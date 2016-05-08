jQuery(document).ready(function(){
	if( $('.cd-stretchy-nav').length > 0 ) {
		var stretchyNavs = $('.cd-stretchy-nav');
		
		stretchyNavs.each(function(){
			var stretchyNav = $(this),
				stretchyNavTrigger = stretchyNav.find('.cd-nav-trigger');
			
			stretchyNavTrigger.on('click', function(event){
				event.preventDefault();
				stretchyNav.toggleClass('nav-is-visible');
			});
		});

		$(document).on('click', function(event){
			( !$(event.target).is('.cd-nav-trigger') && !$(event.target).is('.cd-nav-trigger span') ) && stretchyNavs.removeClass('nav-is-visible');
		});
	}
});


$(document).on('click','.add-to-compare',function(){
	//$(".card-holder").removeClass("hidden").slideDown();

	
	//Scroll to top if cart icon is hidden on top
	$('html, body').animate({
		 'scrollTop' : $(".cart_anchor").position().top+1500
	});
	//Select item image and pass to the function
	//var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
	//flyToElement($(itemImg), $('.cart_anchor'));

	if($(".cart_anchor").hasClass("img_active")){
		//Select item image and pass to the function
		var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
		flyToElement($(itemImg), $('.cart_anchor01'));
		$(this).addClass("hidden");
	}
	else{
		//Select item image and pass to the function
		var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
		flyToElement($(itemImg), $('.cart_anchor'));

		$(".cart_anchor").addClass("img_active");
		$(this).addClass("hidden");

	}
});
        