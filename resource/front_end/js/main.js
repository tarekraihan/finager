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
    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);

    var  formData = $(this).data();
    var card_id = "&card_id="+formData.card_id;

    $.ajax
    ({
        type: "POST",
        url: "<?php echo base_url();?>home_loan/ajax_compare_card_image",
        data: card_id,
        cache: false,
        success: function(msg)
        {

            loading_hide();
            // console.log(msg);

            $("#SearchCard").html(msg);

        }
    });

	//Scroll to top if cart icon is hidden on top

	$('html, body').animate({
		 'scrollTop' : $(".cart_anchor").position().top+1500
	});

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
        