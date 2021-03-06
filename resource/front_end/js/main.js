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


    $('#filter-carousel').carousel({
        interval: false
    });

// searching text effect for homepage search START

    document.addEventListener('DOMContentLoaded', function (event) {
        // array with texts to type in typewriter
        var dataText = ["Looking for..."];

        function typeWriter(text, i, fnCallback) {

            if (i < (text.length)) {
                //document.querySelector(".typewrite").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';
                $(".typewrite").html(text.substring(0, i + 1) + '<span aria-hidden="true"></span>');

                // wait for a while and call this function again for next character
                setTimeout(function () {
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
            if (typeof dataText[i] == 'undefined') {
                setTimeout(function () {
                    StartTextAnimation(0);
                }, 1500);
            }
            // check if dataText[i] exists
            if (i < dataText.length) {
                // text exists! start typewriter animation
                typeWriter(dataText[i], 0, function () {
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


$('.Cicon_a').hover(function(){
        $(this).children('.svg_img').addClass('hidden');
        $(this).children('.svg_icon').removeClass('hidden');
        $(this).children('p').addClass('svg_show_text');
    },
    function(){
        $(this).children('.svg_img').removeClass('hidden');
        $(this).children('.svg_icon').addClass('hidden');
        $(this).children('p').removeClass('svg_show_text');
    }
);

$('#rate-sel, #rate-buy').click(function(){
    $('.div-focus').addClass('animated zoomIn');
});