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

// searching text effect for homepage search START
document.addEventListener('DOMContentLoaded',function(event){
    // array with texts to type in typewriter
    var dataText = [ "Looking for..."];

    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
        // chekc if text isn't finished yet
        if (i < (text.length)) {
            // add next character to h1
            document.querySelector(".typewrite").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

            // wait for a while and call this function again for next character
            setTimeout(function() {
                typeWriter(text, i + 1, fnCallback)
            }, 200);
        }
        // text finished, call callback if there is a callback function
        else if (typeof fnCallback == 'function') {
            // call callback after timeout
            setTimeout(fnCallback, 800);
        }
    }
    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
        if (typeof dataText[i] == 'undefined'){
            setTimeout(function() {
                StartTextAnimation(0);
            }, 1500);
        }
        // check if dataText[i] exists
        if (i < dataText.length) {
            // text exists! start typewriter animation
            typeWriter(dataText[i], 0, function(){
                // after callback (and whole text has been animated), start next text
                StartTextAnimation(i + 1);
            });
        }
    }
    // start the text animation
    StartTextAnimation(0);
});

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            //new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};
// searching text effect for homepage search END

// main page filter var
$('.dropdown.mega-dropdown a').on('click', function (event) {
    $(this).parent().toggleClass("open");
});

$('body').on('click', function (e) {
    if (!$('.dropdown.mega-dropdown').is(e.target) && $('li.dropdown.mega-dropdown').has(e.target).length === 0 && $('.open').has(e.target).length === 0) {
        $('.dropdown.mega-dropdown').removeClass('open');
    }
});

$(document).on('click','.filter-option a',function(){
    $(this).parents('li').remove();
});

/***********************For Fixed side Nav for credit card backup************************/
// This function will be executed when the user scrolls the page.
/*$(document).on("scroll",function () {
    var scroller_anchor = $("#sidebar").offset().top;
    var sidebar_height = $("#sidebar").height();
    var window_height = $(window).height();

    var offsetToTop = parseInt($(this).scrollTop());
    var stickySidebar = $('#sidebar').offset() || { "top": NaN }.top;

    var top_height = $('#top-page').height();
    var banner_height = $('#creditCard_header').height();
    var filter_height = $('#filter-bar').height();
    var total_top = parseInt(top_height+banner_height+filter_height+60);

    var main_height = $(".main-content-area").height();
    //console.log(main_height);
    $(".sidebar_parent").height(main_height-20);
    //console.log($(".sidebar_parent").height());
    console.log( $(".footer").offset().top);


    // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
    if ($(window).scrollTop() >= scroller_anchor && sidebar_height < window_height )
    {
        $('#sidebar').addClass('fixed');
    }

    if ($(window).scrollTop() < scroller_anchor && sidebar_height > window_height )
    {
        $('#sidebar').removeClass('fixed');
        $("#sidebar").removeClass("fixed-bottom");
    }

    if($("#moreFilterText").css("display") == "block" && sidebar_height > window_height){
        $('#sidebar').removeClass('fixed');
        $("#sidebar").removeClass("fixed-bottom");
        $('#sidebar').addClass('relative');
        //alert();
    }

    if($("#moreFilterText").css("display") == "none" && sidebar_height < window_height){
        $("#sidebar").removeClass("fixed-bottom");
        $('#sidebar').removeClass('relative');
        $('#sidebar').addClass('fixed');
        //alert();
    }

    if(sidebar_height > window_height && $(window).scrollTop()>1510){
        $('#sidebar').removeClass('relative');
        $('#sidebar').addClass('fixed-bottom');
    }

    if($('#sidebar').offset().top + $('#sidebar').height()
        >= $('.footer').offset().top - 65){
        $("#sidebar").removeClass("fixed");
        $("#sidebar").removeClass("fixed-bottom");
        $("#sidebar").addClass("sidebar-absolute-bottom");
    }

    if(sidebar_height > window_height && $(document).scrollTop() + window.innerHeight < $('.footer').offset().top){
        $("#sidebar").addClass("fixed-bottom");
        $("#sidebar").removeClass("sidebar-absolute-bottom");
    }

    if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top){
        $("#sidebar").addClass("fixed");
        $("#sidebar").removeClass("sidebar-absolute-bottom");
    }

    if($("#sidebar").offset().top < total_top){
        $("#sidebar").removeClass("fixed");
        $("#sidebar").removeClass("fixed-bottom");
        $("#sidebar").addClass("sidebar-absolute");
    }
});*/



