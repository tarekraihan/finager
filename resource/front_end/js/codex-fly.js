// For compare button Hover START
/*

// For compare button Hover START
$(document).on('click','.add-to-compare',function(){

	var hovered = $('.card-holder:not(:hover)');

	//$("#hiden_div").removeClass("hiddenHalfDown");
	//var test = $('#hiden_div:not(:hover)');
	
	if(hovered == true){
		alert("not hovered");
	}
	else{
		setTimeout(function() {
			$("#hiden_div").addClass("hiddenHalfDown");
		}, 4000);
	}
});

$(document).on("mouseenter", ".card-holder", function() {
    // hover starts code here

	$("#hiden_div").removeClass("hiddenHalfDown");
});

$(document).on("mouseleave", ".card-holder", function() {
    // hover ends code here
	console.log("over");
	$("#hiden_div").addClass("hiddenHalfDown");
	//setTimeout(function() {
		//$("#hiden_div").addClass("hiddenHalfDown");
	//},2000);
});
*/
// New code 14.04.2017
$(document).on("mouseenter", ".card-holder", function() {
    // hover starts code here

	$("#hiden_div").removeClass("hiddenHalfDown");
  	$("#hiden_div").addClass("hovering");
});

$(document).on("mouseleave", ".card-holder", function() {
    // hover ends code here
	console.log("over");
	$("#hiden_div").addClass("hiddenHalfDown");
	$("#hiden_div").removeClass("hovering");
});

// For compare button Hover START
$(document).on('click','.add-to-compare',function(){

	$("#hiden_div").css("display","block");

	if ($("#hiden_div").hasClass("hovering")) {
		event.preventDefault();
	}
	else{
		$("#hiden_div").removeClass("hiddenHalfDown");
		window.setTimeout(function(){$("#hiden_div").addClass("hiddenHalfDown");}, 2500);
	}	
});

// For compare button Hover END

/*!
 * Function: flyToElement
 * Author: CodexWorld
 * Author URI: http://www.codexworld.com  
 * Author Email: contact@codexworld.com
 * Description: This function is used for adding flying effect to the element.
 */
function flyToElement(flyer, flyingTo) {
	var $func = $(this);
	var divider = 3;
	var flyerClone = $(flyer).clone();
	$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
	$('body').append($(flyerClone));
	var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
	var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
	 
	$(flyerClone).animate({
		opacity: 0.4,
		left: gotoX,
		top: gotoY,
		width: $(flyer).width()/divider,
		height: $(flyer).height()/divider
	},1000,
	
	function () {
		$(flyingTo).fadeOut('fast', function () {
			$(flyingTo).fadeIn('fast', function () {
				$(flyerClone).fadeOut('fast', function () {
					$(flyerClone).remove();
				});
			});
		});
	});
}



