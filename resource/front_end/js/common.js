
var autoTimer=0;
/*********************************************Career Script starts**********************************************/

/*Clear input text boxes script starts*/
function clearText(field)
{if(field.value==''){field.value=field.defaultValue}
else if(field.value==field.defaultValue){field.value=''}
} 
/*Clear input text boxes script starts*/

/* Detect IE8 Browser START*/
function isIE( version, comparison ){
    var $div = $('<div style="display:none;"/>').appendTo($('body'));
    $div.html('<!--[if '+(comparison||'')+' IE '+(version||'')+']><a>&nbsp;</a><![endif]-->');
    var ieTest = $div.find('a').length;
    $div.remove();
    return ieTest;
}
/* Detect IE8 Browser END*/

$(document).ready(function(){	
  

   /*CC Read more  25/5/2016*/
   $(".expandParaTwo").click(function(){
		//$(".CCpara-two").slideToggle(500);
		 if($(this).hasClass('active')){
	 	$(".CCpara-two").slideUp();
		$(this).text('Read More');
		$(this).removeClass('active');
	 }
	 else {
		 $(".CCpara-two").slideDown();
		 $(this).text('Show Less');
		 $(this).addClass('active');
	 }
		})
  /*CC Read more*/
 // MM_openBrWindow();

$('.bxReadmore').click(function(){	
	var lightboxCont = $(this).parent().next().html();
	
    	$(".scrollElem").html("")
        var clientWidth = $(window).width();
		var clientHeight = $(window).height();	
		$(".overlay").height($(document).height());
		$(".srLightboxTC").css("left", (clientWidth - $(".srLightboxTC").width()) / 2 + "px");
		$(".srLightboxTC").css("top", (clientHeight - $(".srLightboxTC").height()) / 2 + "px");
		$(".scrollElem").html(lightboxCont)
		$(".srLightboxTC").show();
		$('.overlay').fadeIn();
});


/* Tax Assist Calculator - START */

	$('.boxCont').hover(function(){
		$(this).find('.boxData').stop(false,true).animate({'bottom':0})
	},function(){
		$(this).find('.boxData').stop(false,true).animate({'bottom':'-100%'})
	});
	
	$("select").change(function(){
			//alert("Inside change");
			$(this).prev().html($(this).find('option:selected').text());
	});

/* Tax Assist Calculator - END*/

	/*Compliments corner know more*/
	
	$('.topButton').click(function(){
		$('html,body').animate({
			scrollTop:0
		},1000);
	});
	
$('.customerSpeaks table.offersCC').find('tr').eq(25).prevAll().show();
	
	var counter = 25
	var defaultCounter = 25
	
	$('.loadMore').click(function(){
		var visibleTr = $('.customerSpeaks table.offersCC').find('tr:visible').last().nextAll().length
		counter += defaultCounter
		//alert(visibleTr +"------"+ defaultCounter);
		if(visibleTr<=defaultCounter)
		{
			//alert(1)
			$('.customerSpeaks table.offersCC').find('tr').show();
			$(this).hide();
		}
		else
		{
			//alert(2)
			$('.customerSpeaks table.offersCC').find('tr').eq(counter).prevAll().show();
		}
	});
	/*Compliments corner know more*/
/*QuickPay*/

/**/
		
$('.quikService .expandDiv li a').click(function(event){
	
	if(!$(this).parents('.quikService').hasClass('creditService') && $(this).text()!='QuickPay')
	{
		
	event.preventDefault();
	var thisTitle = $(this).text();
	var thisHelp = $(this).parent().find(".tooltip").text();
	var iframeUrl = $(this).attr("href");
	$('.srLightbox').find('iframe').attr('src',iframeUrl);
	
	var clientWidth = $(window).width();
	var clientHeight = $(window).height();
	//var currScrollTop = $(document).scrollTop();
	$(".overlay").height($(document).height());
	$(".srLightbox").css("left", (clientWidth - $(".srLightbox").width()) / 2 + "px");
	$(".srLightbox").css("top", (clientHeight - $(".srLightbox").height()) / 2 + "px");
	$(".srLightbox").fadeIn();
	$('.overlay').fadeIn();
	setTimeout(function(){
		$(".srLightbox").find('h2').text(thisTitle);
		$(".srLightbox").find('.srHelp').text(thisHelp);
	},2000);
	}
	
});
		
	/*CMYK lightbox brands page*/
	$(".srLightbox").hide();
	$(".cmyk").click(function(){	
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();	
		$(".overlay").height($(document).height());
		$(".srLightbox").css("left", (clientWidth - $(".srLightbox").width()) / 2 + "px");
		$(".srLightbox").css("top", (clientHeight - $(".srLightbox").height()) / 2 + "px");
		$(".srLightbox").fadeIn()
		$('.overlay').fadeIn();
	})	
	/*CMYK lightbox ends*/	
	

		
	/*Video call popup - added on 19th Jan'15 Starts*/
	$(".callbkBtn").mouseover(function () { 
		$(this).addClass("sel");
		$(".callback").addClass("hover").animate({right: '0'});
		clearTimeout(); 
	});

	$(".callback").mouseleave(function(){
		$(".callbkBtn").removeClass("sel");
		$(".callback").stop(true).removeClass("hover").animate({right: '-320px'});
	});
	/*Video call popup - added on 19th Jan'15 Ends*/
	
/*05-01-2015 Chelsea page starts here*/	
/*Logos Tab Functionality START */
  $(".logoTabs li").click(function(){
	  var tabIndex = $(this).index();
	  $(this).addClass('active').siblings().removeClass('active');
	  $('.logoWrap').find('.logoCont').eq(tabIndex).show().siblings().hide();
  }).eq(0).click();
  /*Logos Tab Functionality END */
  
  /*Logo Img and data popup Start*/
  $('.logoThum').click(function() {
	  $('.logoData').hide();
	  $('.logosInfo li').removeClass('sel');
	  $(this).parent().addClass('sel').siblings().removeClass('sel');
	  $(this).parent().next().show();
	  $("html,body").animate({scrollTop:$(this).offset().top},500);
  });
  $('.logoData .clsBtn').click(function() {
	  $(this).parent().hide();
	  $(this).parents('.logosInfo').find('li').removeClass('sel');
  });
  /*Logo Img and data popup End*/
 /*05-01-2015 Chelsea page starts here*/
	
	
/*Added on 5th Dec'14 - Starts*/
if($('.owl-vfapp').length>=1){
owl = $('.owl-vfapp');
owl.owlCarousel({
items:1,
loop: true,
autoplay:true,
autoplayTimeout:5000,
nav:true,
dots:false
});	
}
/*Added on 5th Dec'14 - Ends*/

/* Disable Right Click for DDA Form - START */	
$('.tablout table').bind('contextmenu',function(e){
	e.preventDefault();
	alert('Right Click is Disabled For Security Purpose');
});
/* Disable Right Click for DDA Form - END */	
	
$('.formdda').click(function(){
	$('#DDAForm').show();
	var formOffset = $('#DDAForm').offset().top;
	$('html,body').animate({
		scrollTop : formOffset
	},1000);
});

/* Detect IE8 Browser START*/	
if(isIE(8)){
	$('body').addClass('ie8')
	$('.loginWrapper').parents('.section').removeClass('section');
}

if(isIE(7)){
	$('body').addClass('ie7')
}
/* Detect IE8 Browser END*/	

setTimeout(function(){
/* Custom Browse Fucnctionality START */
$(':file').change(function(){
$this = $(this);
setTimeout(function(){
	var fileValue1 = $this.val();
	var fileValue2 = fileValue1.split('\\');
	var fileValue3 = fileValue2[fileValue2.length - 1];
	$this.parents('.upload').find('span').html(fileValue3);
},500);
});
},2000);
/* Custom Browse Fucnctionality END */

/* Home page Navigation START */
var lftLinkIndex = $('.ltLinkWrapper ul').find('li').index();
var rtLinkIndex = $('.ltLinkWrapper ul').find('li').index();

$('.primaryNav > ul').find('li').hover(function(){
	var primeIndex = $(this).index();
	$(this).addClass('sel').siblings().removeClass('sel');
	$(this).find('.homeSubNavWrapper').slideDown().parent().siblings().find('.homeSubNavWrapper').hide();
	
	$(this).find('.homeSubNavWrapper').find('.rtLinkWrapper > ul').eq(0).show();
	$(this).find('.homeSubNavWrapper').find('.rtSubLinkWrapper > ul').eq(0).show();
	
	$(this).find('.homeSubNavWrapper').find('.ltLinkWrapper > ul > li').eq(0).addClass('ltSelected');			
},function(){
	$(this).removeClass('sel');
	$(this).find('.homeSubNavWrapper').hide();
	$(this).find('.ltLinkWrapper > ul > li').removeClass('ltSelected');
	$(this).find('.rtLinkWrapper ul li').removeClass('rtSelected');
	$(this).find('.rtLinkWrapper ul').hide();
	$(this).find('.rtSubLinkWrapper ul').hide();
});

$('.ltLinkWrapper > ul').find('li').hover(function(){
	var ltLinkIndex = $(this).index();
	$(this).addClass('ltSelected').siblings().removeClass('ltSelected');
	$(this).parents('.homeSubNavWrapper').find('.rtLinkWrapper ul').eq(ltLinkIndex).show().siblings().hide();
	$('.rtSubLinkWrapper div').hide();
	//$('.subContent ul').hide();
	$('.rtLinkWrapper').find('li').removeClass('rtSelected');
});

$('.rtLinkWrapper > ul').find('li').hover(function(){
	var rtLinkIndex = $(this).index();
	var rtParentIndex = $(this).parent('ul').index();
	//console.log(rtParentIndex)
	$(this).addClass('rtSelected').siblings().removeClass('rtSelected');
	$(this).parents('.homeSubNavWrapper').find('.rtSubLinkWrapper div').eq(rtParentIndex).show().siblings().hide();
	$(this).parents('.homeSubNavWrapper').find('.rtSubLinkWrapper div').eq(rtParentIndex).find('ul').eq(rtLinkIndex).show().siblings().hide();
});

/* Home page Navigation END */


/* Added Chat online in Footer START */	
if($('.primaryNav ul li.currentActive').find('h1').html()=="NRI")
{
$('.secondFooter .fLink').append('<li><a title="Chat Online" href="/content/home/nri-banking/payment-services/nri-chat.html" target="_blank">Chat Online</a></li>');

if($('.iWant > ul > li').eq(3).find('.subLink > ul > li').length==0)
{
	$('.iWant > ul > li').eq(3).find('.subLink').remove();
	$('.iWant > ul > li').eq(3).hover(function(){
		$(this).css({"background-color":"#fff"});
		$(this).find('a').attr("href","/content/home/nri-banking/payment-services/nri-chat.html");
	});
}
}
/* Added Chat online in Footer END */

/* Video Branch menu on Home Page - START */
if($('.primaryNav li.currentActive').find('h1').text()=="PERSONAL" || $('.primaryNav li.currentActive').find('h1').text()=="NRI" || $('.primaryNav li.currentActive').find('h1').text()=="BUSINESS & COMMERCIAL")
{
	$('.primaryNav > ul').append('<li class="videoBranch"><a href="/content/home/personal-banking/payment-service/services/video-branch.html" title="Video Branch"><img title="Video Branch" alt="Video Branch" src="/content/dam/indusind/desktop/video-branch-img.jpg"></a></li>');
}
/* Video Branch menu on Home Page - END */


/* Home page my account Banner START */
$('.accCarousel').addClass('personalCarousel');
if($('.primaryNav li.currentActive').find('h1').text()=="CORPORATE & INSTITUTIONAL")
{
	$('.accCarousel').removeClass('personalCarousel');
}
/* Home page my account Banner END */


/* Safari on;y detection code START */ // For select error message
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
	$('select').parents('.selectgen').addClass('safari');
}
/* Safari on;y detection code END */


$(".emailFormatter").each(function(){
	 var mytext = $(this).text().split("{}");
	 $(this).after("<a href='mailto:"+mytext[0]+"@"+mytext[1]+"' target='_blank'>"+mytext[0]+"@"+mytext[1]+"</a> ")
	 $(this).remove();
});


/** function for email starts **/
function emailFormatter(senderId,mailDomain,subject)
{
	if(subject!=null)
	{
		subject=escape(subject);
		document.write("<a href=mailto:" + senderId + "@" + mailDomain + "?subject=" + subject + " class='email'>" + senderId + "@" + mailDomain + "</a>");
	}
	else
	{
		document.write('<a href="mailto:' + senderId + '@' + mailDomain + '" class="email">' + senderId + '@' + mailDomain + '</a>');
	}
}
/** function for email ends **/

	
/* See more Functionality START */
    $('.prodcuctReviewWrapper .hiddencomments-customdiv').hide();
	var size_li = $(".prodcuctReview .hiddencomments-customdiv").size();
    x=3; 
	$('.prodcuctReview .hiddencomments-customdiv:lt('+x+')').show();
    $('#showMoreComments').click(function () {
        var _this=$(this);
        if(!_this.hasClass('lessComments')){
            x= (x+3 <= size_li) ? x+3 : size_li;
            $('.prodcuctReview .hiddencomments-customdiv:lt('+x+')').show();

            if($('.prodcuctReviewWrapper .hiddencomments-customdiv').eq(size_li-1).css('display')=='block'){
                $('#showMoreComments').addClass('lessComments').html('Less');
            }
        }
        else{
            x=3; 
            $('.prodcuctReviewWrapper .hiddencomments-customdiv').hide(); 
			$('.prodcuctReview .hiddencomments-customdiv:lt('+x+')').show();
            $('#showMoreComments').removeClass('lessComments').html('See more');
            var thistop = _this.parents('.prodcuctReview').offset().top-74;
			$('body, html').animate({'scrollTop':thistop},1000);

        }
    });
/* See more Functionality END */

	/*Added on 28th Mar'14 - Starts*/
	$(".innerPrimNav li.premium").hover(function(){
		var imgSrc = $('.innerPrimNav li.premium img').attr('src')
		var newSrc = imgSrc.replace("premium-service-img1","premium-service-img1_hover");
		$(".innerPrimNav li.premium").find('img').attr('src',newSrc);
	},function(){
		var imgSrc = $('.innerPrimNav li.premium img').attr('src')
		var newSrc = imgSrc.replace("premium-service-img1_hover","premium-service-img1");
		$(".innerPrimNav li.premium").find('img').attr('src',newSrc);
	});
	/*Added on 28th Mar'14 - Ends*/
	
	 $(".innerBtmBox:odd, .btmBox:odd").css('background-image','none');
	 
	$('.faqsQuest:first').addClass('active');
		$('.faqAns:first').show();
		/************** Start ACCORD CHANEGS - ****************/
		  $('.faqsQuest').click(function(){
		   if($(this).hasClass('active')){
			$(this).next(".faqAns").slideUp();
			$(this).removeClass('active');
		   }
		   else{
			$(this).next(".faqAns").slideDown().siblings(".faqAns").slideUp(500);
			$(this).addClass("active").siblings(".faqsQuest").removeClass("active");
		   }
		  });
		/************** End ACCORD CHANEGS - ****************/ 
	 
	/* Inner page Home Dropdown START */
	$('.innerTopNav ul.navLink li.sel').hover(function(){
		$(this).find('.homeDropdown').stop(false,true).show();
	},function(){
		$(this).find('.homeDropdown').stop(false,true).hide();
	});
	/* Inner page Home Dropdown END */
	
	
	/*Career Prime navigation js starts*/
	var currActiveLink1 = $('.innerPrimNavInner').find('.sel').index();
	$(".innerPrimNavInner li").click(function(){
		
		if(!$(this).hasClass('navigation'))
		{
		var innerPrimind = $(this).index(); 
		$(".primeNavigation").eq(innerPrimind).slideToggle().siblings().hide();
		$(this).toggleClass("sel").siblings().removeClass("sel");
		if(!$(this).hasClass('sel'))
		{
			//$(".innerPrimNavInner li").eq(currActiveLink1).addClass('sel')
		}
		}
		
		
	});
	/*Career Prime navigation js ends*/

	/*Career tab script starts*/
	$("ul.careerTab li:first").addClass("activetab");
	$(".careerTab li").click(function(){
	   var thumbTabInd = $(this).index(); 

	   $(".careerContent").eq(thumbTabInd).show().siblings().hide();
	   $(this).animate({"width":"279px"},"fast").siblings().animate({"width":"208px"},"fast")
	   $(this).find("img").animate({"width":"279px","height":"237px","margin-top":"0px"},"fast").parents("li").siblings().find("img").animate({"width":"206px","height":"167px","margin-top":"47px"},"fast"); 
	   $(this).addClass("activetab").siblings().removeClass("activetab");
	   $('.careerContent:visible').find('.carrerLftNav li').eq(0).click();
	}).eq(0).click()

	$(".carrerLftNav li").click(function(){
		 var lftNavtabInd = $(this).index();
		 $(this).parent().next().find(".careerContentTab").eq(lftNavtabInd).show().siblings().hide();	
		 $(this).addClass("actleftTab").siblings().removeClass("actleftTab");
	}).eq(0).click()

	/*Career tab script ends*/
	/*Job List Script starts*/	

	$(".AccSlideContent").hide();
	$(".expandAcc").click(function(){
		$(this).parents(".ListExpand").find(".AccSlideContent").slideToggle().parents(".ListExpand").siblings().find(".AccSlideContent").slideUp();
		$(this).toggleClass("collapsAcc").parents(".ListExpand").siblings().find(".expandAcc").removeClass("collapsAcc");		 

	})/*.eq(0).click()*/
 	/*Job List Script starts*/
	

	 /*Apply Now Script starts*/ 

	 $(".applyNowSlide").click(function(){
		$(this).parents(".applyContainer").animate({'right':'-22px'},800);
		$(this).removeClass("slideShow");
		$(this).hide("slow");
		$(this).hide();
		$(this).parents(".applyContainer").find(".closeForm").show("slow");
	 })

	

	 $(".closeForm").click(function(){
			$(this).parents(".applyContainer").animate({'right':'-991px'},"slow");
			$(this).parents(".applyContainer").find(".applyNowSlide").show("slow");
			$(this).hide();
     });
	/*Apply Now Script ends*/  
	
	$(".closeBtn").click(function(){
		$(".AccountLightBox, .callLightbox, .ratingLightbox, .srLightbox, .getNewUpdateLightBox, .formMessageLightbox, .reviewLightbox, .srLightboxAadhar, .srLightboxQuickpay, .srLightboxTC").hide();
		$(".overlay").hide();
		$('.fLink li').removeClass('sel');
		$('.srLightbox').find('iframe').attr('src','');
		$('.srLightbox').find('h2').html('');
		$('.srLightbox').find('.srHelp').html('');
	})
	
	$(".closeQuickpay").click(function(){
			$(".srLightboxQuickpay, .overlayQuickpay").hide();
		})
	
	/*Rates tab starts*/ 
	$(".savingTab ul li").click(function(){
		var savetabEQ = $(this).index();
		var $this=$(this);
		$(".savingTabContent").eq(savetabEQ).show().siblings().hide();
		$(this).addClass("activetab").siblings().removeClass("activetab");
		setTimeout(function(){
			$this.parents('.savingTab').find('.otherRate .selectbg').removeClass("activetab");
			
		},100);
	}).eq(0).click();
	
	$('.otherRate select').change(function(){
		var _this=$(this);
		setTimeout(function(){
			_this.parents('.selectbg').addClass('activetab');
			_this.parents('.savingTab').find('ul li').removeClass('activetab');
		},100);
	});
	/*Rates tab ends*/
	
	/*Site map starts*/
	
	var menuClick = false;

	$('.siteMenu a').click(function(){
		menuClick = true;
		setTimeout(function(){
			menuClick = false;
		},200);
	});
	

	$("ul.Mailsitemenu > li").click(function(){
		if(menuClick==false)
		{
			$(this).find(".subSitemap").slideToggle();	
			$(this).toggleClass("Expandmenu");
		}
	});
	
	$("ul.subSitemap > li").click(function(e){
		if(menuClick==false)
		{
			e.stopPropagation();
			$(this).toggleClass("Expandmenu");
			$(this).find(".subSubSitemap").slideToggle();
		}
	});


	
	/*$("ul.subSitemap > li > ul > li").click(function(e){
		e.stopPropagation();
	});*/
	
	
	$("ul.subSitemap > li > ul > li").click(function(e){
		if(menuClick==false)
		{
			e.stopPropagation();
			$(this).toggleClass("Expandmenu");
			$(this).find(".lastLevel").slideToggle();
		}
	});
	
	
	
	/*Site map starts*/
	
$('.impLinks ul li:last').addClass('last');

/* Product landing page height calculation START */

	var count=Math.ceil($(this).find('.prdWrapper ul li').length/4);
	//console.log(count);
	//alert(count)
	for(var k=0;k<count;k++){
		i=k*4;
		var ht1 = ht2 = ht3 = ht4 = ht= 0;
					
		ht1=$(this).find('.prdWrapper ul li').eq(i+0).find('.prdBox').height();
		if($(this).find('.prdWrapper ul li').eq(i+1).length!=0){
			ht2=$(this).find('.prdWrapper ul li').eq(i+1).find('.prdBox').height();
		}
		if($(this).find('.prdWrapper ul li').eq(i+2).length!=0){
			ht3=$(this).find('.prdWrapper ul li').eq(i+2).find('.prdBox').height();
		}
		if($(this).find('.prdWrapper ul li').eq(i+3).length!=0){
			ht4=$(this).find('.prdWrapper ul li').eq(i+3).find('.prdBox').height();
		}
		//alert("ht1  " + ht1 + "  ht2  " + ht2 + "  ht3  " + ht3 + "  ht4  " + ht4);
		if(ht1>ht2){
			ht=ht1;
		}
		else{
			ht=ht2;
		}
		if(ht3>ht){
			ht=ht3;
		}
		
		if(ht4>ht)
		{
			ht=ht4;
		}
		
		$('.prdWrapper ul li').eq(i+0).find('.prdBox').height(ht);
		$('.prdWrapper ul li').eq(i+1).find('.prdBox').height(ht);
		$('.prdWrapper ul li').eq(i+2).find('.prdBox').height(ht);
		$('.prdWrapper ul li').eq(i+3).find('.prdBox').height(ht);
	}

/* Product landing page height calculation START */

/*$('.secondFooterWrapper').hover(function(){
	$(this).css('z-index','11');
},function(){
	$(this).css('z-index','10');
});*/

$('.impLinks .mdlInner > ul').after("<p class='bestViewNote' style='position:absolute; top:141px; right:0px; font-size:1.1em; color:#848484'>This site is best viewed in IE9+, latest version of Firefox, Chrome, Opera & Safari browsers at 1024 x 768 resolution.</p>")

if($('.contactWrapper').length)
{
	$('.contactWrapper').parents('.termCondition').removeClass('termCondition');
}

/* Videobranch FAQ START */
$('.faqHeading .exp').click(function(){
	$(this).toggleClass('active');
	$('.faqInnerWrapper').slideToggle();
});
/* Videobranch FAQ END */

/* Detect Super Saver Pack page and adding banner START */

if($('.superSaverPack').length)
{
	$('.innerBanner').html("");
	var bannerHtml = $('.superSaverPack').html();
	$('.innerBanner').append(bannerHtml);
	$('.superSaverPack').remove();
}
/* Detect Super Saver Pack page and adding banner START */

/* Child Page Auto Banner START */
	if($('.wrp_indsSlider').length)
	{
		var liText="<ul>"
	$(".wrp_indsSlider img").each(function(){
		liText+="<li></li>";
	})
	liText+="</ul>";
	$(".inds_pagination").html(liText)
	$(".inds_pagination ul li").eq(0).addClass('active')
	$(".wrp_indsSlider img").eq(0).show()
	auto();
	$(".inds_pagination ul li").click(function(){
		clearTimeout(autoTimer);
		$(".wrp_indsSlider img").fadeOut(1000);
		$(".wrp_indsSlider img").eq($(this).index()).fadeIn(1000);
		$(this).addClass('active').siblings().removeClass('active');
		auto();
	});
	}
	
/* Child Page Auto Banner END */

/* Accenture page required changes START */
if($('.tabaccenture').length)
{
	$('.innerPrimNav').remove();
	$('.prdDeatilWrapper .prdDetailRight .loginWrapper').css({"margin-top":"0px"});
	$('.impLinks').css({"margin-top":"-5px"});
	
}
/* Accenture page required changes END */
});
/* Child Page Auto Banner END */
function auto(){

	var i=$(".inds_pagination ul li.active").index()+1;
	autoTimer=setInterval(function(){
		if(i==$(".wrp_indsSlider img").size())  i=0;
		
		$(".wrp_indsSlider img").fadeOut(1000);
		$(".wrp_indsSlider img").eq(i).fadeIn(1000)
		$(".inds_pagination ul li").eq(i).addClass('active').siblings().removeClass('active');
		i++;
		
	},5000);
}
/* Child Page Auto Banner END */
/**********************************************Career Script ends**********************************************/
var cookieValArr = [];
$(function(){

var abc;
var counter=0;
var videoSrc;
var videoTitle;
var lightboxName;
applyBorder();

$(document).on("click",'#myRoundabout .roundabout-in-focus', function(){
	return false;
});



$(window).on("popstate", function(e) {

	var example4Ajax = function(url) {
		$.ajax({
		headers : { 'X-Content-Only':'true' },
		type: "GET",
		url: url,
		cache: false
		}).done(function( content ) {
			//alert($('#ajaxOutput',content).html())
			var roundabtIndex = $('#ajaxOutput',content).find('#hidden').val()-1;
			$('#myRoundabout').find('li').eq(roundabtIndex).click();
			$(".bannerTabs li").eq(roundabtIndex).click();
			
		});
	}
		var self = $(this);
		var url = window.location.href;
		example4Ajax(url);
});

$(".bannerTabs li a").click(function(event){
	  event.preventDefault();
});

$(".bannerTabs li").eq(0).addClass('bannerActive');

$(".bannerTabs li").click(function(){
	$(this).addClass('bannerSelTab').siblings().removeClass('bannerSelTab');
	$(this).find('img').animate({"margin-left":"0px","margin-top":"0px","width":"332px"}).parents('li').siblings().find("img").animate({"margin-left":"40px","margin-top":"30px","width":"265px"},function(){
		$(".bannerTabs li").removeClass('bannerActive');
	});
	
//For History.push START
	/*if($('#ajaxOutput').length)
			{
		if (-[1,]) {
			
			var example4Ajax = function(url) {
		
			$.ajax({
			headers : { 'X-Content-Only':'true' },
			type: "GET",
			url: url,
			cache: false
			}).done(function( content ) {
			//  alert(content);
							
			$("#ajaxOutput").remove();
			//$("#example-4").html($('.div1',content).html())  ;
			var pre = $('<div id="ajaxOutput"></div>').html($('#ajaxOutput',content).html()).addClass("prdWrapper animated bounceInLeft");
			$("#example-4").append(pre);
			});
			};
		
		//$("#myRoundabout a").on("click", function() {
			var self = $(this);
			//alert($(this).attr('class'));
			var url = $(this).find('a').attr('href');
			//alert(url)
			example4Ajax(url);
			history.pushState(null, null, url); 
		//}); //onclick
		}
		else{ // For IE7 and IE8

			var url = $(this).find('a').attr('href');
			window.location.href = url
		}
			}*/
		
//For History.push END
	
	
});


$('.large').click(function () {
$(document.body).css('font-size', '65%');
	/*$('img').each(function () {
		this.width *= 1.5;
	})*/
});

$('.small').click(function () {
$(document.body).css('font-size', '60%');
	/*$('img').each(function () {
		this.width *= 1.5;
	})*/
});



$('.medium').click(function () {

$(document.body).css('font-size', '62.5%');

	/*$('img').each(function () {

		this.width *= 1.5;

	})*/

});



$(".secLink li").not(".subLink li").hover(function(){

	$(this).css("z-index","1")

	$(this).find(".subLink").show();

},function(){

	$(this).find(".subLink").hide();

	$(this).css("z-index","0")

});



/* ---------------------------------SearchBox Functionality START----------------------------- */

$(".search").not('.searchWrapper .search').click(function(){

	$(".searchDiv").slideToggle();

});

/* ---------------------------------SearchBox Functionality END----------------------------- */



/* ---------------------------------Checkbox/Radio Functionality START----------------------------- */
$(document).on("change",'.checkbox input:checkbox', function(){
	$(this).is(":checked") ? $(this).parent().addClass("checked") :  $(this).parent().removeClass("checked");
});

$(document).on("change",'.radiobox input:radio', function(){
	$(this).is(":checked") ? $(this).parent().addClass("checked").siblings().removeClass('checked') :  $(this).parent().removeClass("checked");
});

$('input:radio').each(function(){
	$(this).is(":checked") ? $(this).parent().addClass("checked").siblings().removeClass('checked') :  $(this).parent().removeClass("checked");
});

$('input:checkbox').each(function(){
	$(this).is(":checked") ? $(this).parent().addClass("checked") :  $(this).parent().removeClass("checked");
});
/* ---------------------------------Checkbox/Radio Functionality END----------------------------- */

var timer;
var bannerLength = $('.bannerImg li').length;

if(bannerLength!=1)
{
 $('.bannerImg li').each(function(){
	$(".pagination").append("<li></li>"); 
 })
}
else if(bannerLength==1)
{
	$(".bannerBgContainer div").eq(0).show();
	$('.bannerImg li').eq(0).show();
	$(".bannerLink").attr('href',$(".bannerImg li").eq(0).find('a').attr('href'));
	clearInterval(timer);
}

	/* ---------------------------------Banner Functionality START----------------------------- */



	$(".bannerLink").css('left',($(window).width()-$(".bannerLink").width())/2+'px');
	$(".pagination li").click(function(){
		clearInterval(timer);
		$(this).addClass("sel").siblings().removeClass("sel");
		var thisIndex = $(this).index();
		$(".bannerLink").attr('href',$(".bannerImg li").eq(thisIndex).find('a').attr('href'));
		$(".bannerImg li").eq(thisIndex).stop(false,true).fadeIn(800).siblings().stop(false,true).fadeOut(800);
		$(".bannerBgContainer div").eq(thisIndex).stop(false,true).fadeIn(800).siblings().stop(false,true).fadeOut(800);
		var selIndex = $(this).index();
		var eventTrackCode = $('.bannerImg li').eq(selIndex).find('a').attr('onclick');
		if($('.bannerImg li').eq(selIndex).find('a').attr('onclick'))
		{
			$(".bannerLink").attr("onclick",eventTrackCode);
		}
		else
		{
			$('.bannerLink').removeAttr("onClick");
		}
		
// Banner Event Tracking Code START	
	/*var imgVideoBranchSrc = $(".bannerImg li").eq(thisIndex).find('img').attr('src').split('desktop/')[1];
	if($('.primaryNav li.currentActive').find('h1').text()=="PERSONAL")
	{
		if(imgVideoBranchSrc=="personal-banner-4.png")
		{
			$('.bannerLink').attr("onClick","_gaq.push(['_trackEvent', 'HP Main Banner', 'Click', 'Video Branch Homepage Top Banner'])")
			
		}
		else
		{
			$('.bannerLink').removeAttr("onClick");
		}
	}
	else if($('.primaryNav li.currentActive').find('h1').text()=="NRI")
	{
		if(imgVideoBranchSrc=="personal-banner-4.png")
		{
			$('.bannerLink').attr("onClick","_gaq.push(['_trackEvent', 'NRI Banking Main Banner', 'Click', 'Video Branch NRI Top Banner'])")
			
		}
		else
		{
			$('.bannerLink').removeAttr("onClick");
		}
	}
	else if($('.primaryNav li.currentActive').find('h1').text()=="BUSINESS & COMMERCIAL")
	{
		if(imgVideoBranchSrc=="personal-banner-4.png")
		{
			$('.bannerLink').attr("onClick","_gaq.push(['_trackEvent', 'Business Banking Main Banner', 'Click', 'Video Branch Business Banking Top Banner'])")
			
		}
		else
		{
			$('.bannerLink').removeAttr("onClick");
		}
	}
	else if($('.primaryNav li.currentActive').find('h1').text()=="CORPORATE & INSTITUTIONAL")
	{
		if(imgVideoBranchSrc=="personal-banner-4.png")
		{
			$('.bannerLink').attr("onClick","_gaq.push(['_trackEvent', 'Corporate Banking Main Banner', 'Click', 'Video Branch Corporate Banking Top Banner'])")
			
		}
		else
		{
			$('.bannerLink').removeAttr("onClick");
		}
	}*/
// Banner Event Tracking Code END	
		
		if($(".bannerImg li").eq(thisIndex).find('a').attr('target'))
		{
			$(".bannerLink").removeAttr('target');
			$(".bannerLink").attr('target','_blank');
		}
		else
		{
			$(".bannerLink").removeAttr('target');
		}
		
		if($(".bannerImg li").eq(thisIndex).find('a').attr('href')=="#")
		{
			$(".bannerLink").css('cursor','default');	
		}
		else
		{
			$(".bannerLink").css('cursor','pointer');
		}
		
	}).eq(0).click();
	
if(bannerLength==1)
{
}
else
{
	timer = setInterval(function(){
		var bannerSelIndex = $('.pagination li.sel').index();
		//alert($('.bannerImg li:visible').next().find('a').attr('href'));
		setTimeout(function(){
			var bannerInd = $('.pagination li.sel').index();
			if($('.bannerImg li:visible').find('a').attr('href')=="#")
			{	
				$(".bannerLink").css('cursor','default');
				
			}
			else
			{	
				$(".bannerLink").css('cursor','pointer');
			}
			
			if($('.bannerImg li:visible').find('a').attr('target'))
			{
				$(".bannerLink").attr('target','_blank');
			}
			else
			{
				$(".bannerLink").removeAttr('target');
			}
			
			var eventTrackCode = $('.bannerImg li').eq(bannerInd).find('a').attr('onclick');
			if($('.bannerImg li').eq(bannerInd).find('a').attr('onclick'))
			{
				$(".bannerLink").attr("onclick",eventTrackCode);
			}
			else
			{
				$('.bannerLink').removeAttr("onClick");
			}
			
		},1000);
		
		
		
		
			if(bannerSelIndex==(bannerLength-1))
			{	
				$(".pagination li").eq(0).addClass("sel").siblings().removeClass("sel");
				$(".bannerLink").attr('href',$(".bannerImg li").eq(0).find('a').attr('href'));
				$(".bannerImg li").eq(0).stop(false,true).fadeIn(800).siblings().stop(false,true).fadeOut(800);
				$(".bannerBgContainer div").eq(0).stop(false,true).fadeIn(800).siblings().stop(false,true).fadeOut(800);
			}
			else
			{	$(".pagination li").eq(bannerSelIndex).next().addClass("sel").siblings().removeClass("sel");
				$(".bannerLink").attr('href',$(".bannerImg li").eq(bannerSelIndex).next().find('a').attr('href'));
				$(".bannerImg li").eq(bannerSelIndex).next().stop(false,true).fadeIn(800).siblings().stop(false,true).fadeOut(800);
				$(".bannerBgContainer div").eq(bannerSelIndex).next().stop(false,true).fadeIn(800).siblings().stop(false,true).fadeOut(800);
			}
			
			
			
			/*if($(".bannerImg li").eq(bannerSelIndex).find('a').attr('target'))
			{
				$(".bannerLink").removeAttr('target');
			}
			else
			{
				$(".bannerLink").removeAttr('target');
				$(".bannerLink").attr('target','_blank');
			}
			
			if($(".bannerImg li").eq(bannerSelIndex).find('a').attr('href')=="#")
			{
				$(".bannerLink").css('cursor','pointer');
			}
			else
			{
				$(".bannerLink").css('cursor','default');
			}*/
			
		},3000);
}

if($(".bannerImg li").eq(0).find('a').attr('href')=="#")
{
	$(".bannerLink").css('cursor','default');
}
else
{
	$(".bannerLink").css('cursor','pointer');
}
	
	/*--------------------------------------Banner Functionality END-------------------------------------------- */


	/*------------------------------------ My Account carousel Functionality START--------------------------------- */
	var carouselImgLength = $(".accCarousel li").length;
	$(".accCarousel li").each(function(){
		$(".carouselPagination").append("<span></span>")
	});
	
	$(".accCarousel ul").css("width",carouselImgLength*580+"px");

	$(".carouselPagination span").click(function(){
		var carIndex = $(this).index();
		$(this).addClass("sel").siblings().removeClass("sel");
		$(".accCarousel ul").animate({"margin-left": "-" + 580*carIndex +"px"});
	}).eq(0).click();
	/*----------------------------------- My Account carousel Functionality END -------------------------------------*/
	

	/*------------------------------ What's New carousel Functionality START ----------------------------------*/

	var whatsnewLength = $(".newContentWrapper .newContent").length;
	
	$(".newContentWrapper .newContent").each(function(){
		$(".newsPagination").append("<span></span>");
	});
	
	$(".newContentWrapper").css("width",whatsnewLength*197+"px");
	
	$(".newsPagination span").click(function(){
		var newthisIndex = $(this).index();
		$(this).addClass("sel").siblings().removeClass("sel");
		$(".newContentWrapper").animate({"margin-left": "-" + 197*newthisIndex +"px"});
	}).eq(0).click();

	/*------------------------------- What's New carousel Functionality END--------------------------------- */
	
	/*-------------------------------Homepage Ticker START -06-11-2014-------------------------------- */
var homepageTickerLiLength = $(".homepagenewsTicker ul li").length
var homepagenewsTickerTimer;

$(".homepagenewsTicker ul").css("width",homepageTickerLiLength*$(".homepagenewsTicker ul li").width()+"px");

$(".homepagenewsTickerWrapper .next").click(function(){
				if (!$(".homepagenewsTicker ul").is(':animated'))
{
								$(".homepagenewsTicker ul li:first").clone().appendTo($(".homepagenewsTicker ul"));
								var homepagenewsTickerCurrMargin = $(".homepagenewsTicker ul").css("margin-left");

								$(".homepagenewsTicker ul").animate({"margin-left":"-=983px"},function(){
												$(".homepagenewsTicker ul").css("margin-left", "0px"); $(".homepagenewsTicker ul li:first-child").remove()
								});
				}
});


$(".homepagenewsTickerWrapper .prev").click(function(){
				$(".homepagenewsTicker ul li").last().clone().prependTo($(".homepagenewsTicker ul"));
$(".homepagenewsTicker ul li:last-child").remove();
				$(".homepagenewsTicker ul").css("margin-left", "-983px");
				
				if(!$(".homepagenewsTicker ul").is(':animated'))
				{
								var homepagenewsTickerCurrMargin = $(".homepagenewsTicker ul").css("margin-left");
								$(".homepagenewsTicker ul").animate({"margin-left":"+=983px"});
				}
});
// Autoplay start
homepagenewsTickerTimer = setInterval(function(){
				if (!$(".homepagenewsTicker ul").is(':animated'))
{
								$(".homepagenewsTicker ul li:first").clone().appendTo($(".homepagenewsTicker ul"));
								var homepagenewsTickerCurrMargin = $(".homepagenewsTicker ul").css("margin-left");

								$(".homepagenewsTicker ul").animate({"margin-left":"-=983px"},function(){
												$(".homepagenewsTicker ul").css("margin-left", "0px"); $(".homepagenewsTicker ul li:first-child").remove()
								});
				}
},5000);

$(".homepagenewsTickerWrapper .prev, .homepagenewsTickerWrapper .next").click(function(){
				clearInterval(homepagenewsTickerTimer);
});
// Autoplay end


/*---------------------------------Homepage Ticker END-06-11-2014-------------------------------- */

	/*-------------------------------Security Tips Functionality START-------------------------------- */
	var securityLiLength = $(".tipsWrapper ul li").length
	var securityTimer;
	
	$(".tipsWrapper ul").css("width",securityLiLength*$(".tipsWrapper ul li").width()+"px");
	
	$(".securityTip .next").click(function(){
		 if (!$(".tipsWrapper ul").is(':animated'))
         {
			$(".tipsWrapper ul li:first").clone().appendTo($(".tipsWrapper ul"));
			var securityCurrMargin = $(".tipsWrapper ul").css("margin-left");

			$(".tipsWrapper ul").animate({"margin-left":"-=380px"},function(){
				$(".tipsWrapper ul").css("margin-left", "0px"); $(".tipsWrapper ul li:first-child").remove()
			});
		 }
	});

	
	$(".securityTip .prev").click(function(){
		$(".tipsWrapper ul li").last().clone().prependTo($(".tipsWrapper ul"));
        $(".tipsWrapper ul li:last-child").remove();
		$(".tipsWrapper ul").css("margin-left", "-380px");
		
		if(!$(".tipsWrapper ul").is(':animated'))
		{
			var securityCurrMargin = $(".tipsWrapper ul").css("margin-left");
			$(".tipsWrapper ul").animate({"margin-left":"+=380px"});
		}
	});

	securityTimer = setInterval(function(){
		if (!$(".tipsWrapper ul").is(':animated'))
         {
			$(".tipsWrapper ul li:first").clone().appendTo($(".tipsWrapper ul"));
			var securityCurrMargin = $(".tipsWrapper ul").css("margin-left");

			$(".tipsWrapper ul").animate({"margin-left":"-=380px"},function(){
				$(".tipsWrapper ul").css("margin-left", "0px"); $(".tipsWrapper ul li:first-child").remove()
			});
		 }
	},5000);

	$(".securityTip .prev, .securityTip .next").click(function(){
		clearInterval(securityTimer);
	});

	/*---------------------------------Security Tips Functionality END-------------------------------- */
	

	/*---------------------------------Video Lightbox Functionality START-------------------------------- */
	
	$(".videoCallBranch").click(function(){
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();

		$(".overlay").height($(document).height());
		$(".videoBoxWrapper").css("left", (clientWidth - $(".videoBoxWrapper").width()) / 2 + "px");
		$(".videoBoxWrapper").css("top", (clientHeight - $(".videoBoxWrapper").height()) / 2 + "px");

		$(".videoBoxWrapper, .overlay").fadeIn()
	});
	
	
	var videoLength = $('.videos li').length;
	
	$(".videos li, .playVideo").click(function(){
		videoTitle = $(this).find('.title').html();
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();

		/*var currScrollTop = $(document).scrollTop(); Commented on 30th Apr'14*/

		$(this).addClass('activeVideo').siblings().removeClass('activeVideo');

		$(".overlay").height($(document).height());
		$(".videoBoxWrapper").css("left", (clientWidth - $(".videoBoxWrapper").width()) / 2 + "px");
		/*$(".videoBoxWrapper").css("top", (clientHeight - $(".videoBoxWrapper").height()) / 2 + currScrollTop + "px");Commented on 30th Apr'14*/
		/*Added on 30th Apr'14*/$(".videoBoxWrapper").css("top", (clientHeight - $(".videoBoxWrapper").height()) / 2 + "px");

		$(".videoBoxWrapper, .overlay").fadeIn()
		$(".videoBox").find("iframe").attr("src",$(this).find('img').attr("name")+"?wmode=transparent&rel=0");
		if($(this).hasClass('playVideo'))
		{
			$(".videoBox").find("iframe").attr("src",$(this).attr("name")+"?wmode=transparent&rel=0");
		}
		$('.videoBox h2').html(videoTitle);
	});
	
	/* Added on 13-10-2014 for Video Branch Page - START*/
	
	$('.video_demo').click(function(){
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();
		
		$(".overlay").height($(document).height());
		$(".videoBoxWrapper").css("left", (clientWidth - $(".videoBoxWrapper").width()) / 2 + "px");
		$(".videoBoxWrapper").css("top", (clientHeight - $(".videoBoxWrapper").height()) / 2 + "px");

		$(".videoBoxWrapper, .overlay").fadeIn();
		$(".videoBox").find("iframe").attr("src","http://www.youtube.com/embed/wNk_fSPvcLQ?wmode=transparent&rel=0");
	});
	
	/* Added on 13-10-2014 for Video Branch Page - END*/

	$(".videoClose").click(function(){
		$(".videoBoxWrapper, .overlay, .hmvideocall").fadeOut();
		$(".videoBox").find("iframe").attr("src","");
	});
	
	$('.nextVideo').click(function(){
		videoTitle = $('.activeVideo').next().find('.title').html();
		if($('.activeVideo').index()==(videoLength-1))
		{
			$(".videos li").eq(0).addClass("activeVideo").siblings().removeClass('activeVideo');
			videoSrc = $(".videos li").eq(0).find('img').attr('name');
			$(".videoBox").find("iframe").attr("src",videoSrc+"?wmode=transparent&rel=0");
			$(".videoBox h2").html($(".videos li").eq(0).find('.title').html());
		}
		else
		{
			videoSrc = $('.activeVideo').next().find('img').attr('name');
			$(".videoBox").find("iframe").attr("src",videoSrc+"?wmode=transparent&rel=0");
			$('.activeVideo').next().addClass("activeVideo").siblings().removeClass('activeVideo');
			$(".videoBox h2").html(videoTitle);
		}
	});
	
	$('.prevVideo').click(function(){
		videoTitle = $('.activeVideo').prev().find('.title').html();
		if($('.activeVideo').index()==0)
		{
			$(".videos li").eq(videoLength-1).addClass("activeVideo").siblings().removeClass('activeVideo');
			videoSrc = $(".videos li").eq(videoLength-1).find('img').attr('name');
			$(".videoBox").find("iframe").attr("src",videoSrc+"?wmode=transparent&rel=0");
			$(".videoBox h2").html($(".videos li").eq(videoLength-1).find('.title').html());
		}
		else
		{
			videoSrc = $('.activeVideo').prev().find('img').attr('name');
			$(".videoBox").find("iframe").attr("src",videoSrc+"?wmode=transparent&rel=0");
			$('.activeVideo').prev().addClass("activeVideo").siblings().removeClass('activeVideo');
			$(".videoBox h2").html(videoTitle);
		}
	});
	/*---------------------------------Video Lightbox Functionality END-------------------------------- */
	
	/*---------------------------------dropdown Video Lightbox Functionality - Added on 28th Mar'14- Starts------------------------------- */
	$(".drpdnVideoLink").click(function(){
		videoTitle = $(this).attr("title");
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();
		var currScrollTop = $(document).scrollTop();

		$(".overlay").height($(document).height());
		$(".drpdnVideoBoxWrapper").css("left", (clientWidth - $(".drpdnVideoBoxWrapper").width()) / 2 + "px");
		$(".drpdnVideoBoxWrapper").css("top", (clientHeight - $(".drpdnVideoBoxWrapper").height()) / 2 + currScrollTop + "px");

		$(".drpdnVideoBoxWrapper, .overlay").fadeIn()
		$(".videoBox").find("iframe").attr("src",$(this).attr("name")+"?wmode=transparent&rel=0");
		$('.videoBox h2').html(videoTitle);
	});


	$(".videoClose").click(function(){
		$(".drpdnVideoBoxWrapper, .overlay").fadeOut();
		$(".videoBox").find("iframe").attr("src","");
	});
	/*---------------------------------dropdown Video Lightbox Functionality - Added on 28th Mar'14- Ends------------------------------- */
	
	/*---------------------------------Homepage Video Lightbox Functionality - Added on 28th Mar'14- Starts------------------------------- */
	
	$(".accWrapper .videoLink a").click(function(){
		if($(".hmvideocall").length)
		{
		videoTitle = $(this).attr("title");
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();
		var currScrollTop = $(document).scrollTop();

		$(".overlay").height($(document).height());
		$(".hmpgVideoBoxWrapper").css("left", (clientWidth - $(".hmpgVideoBoxWrapper").width()) / 2 + "px");
		$(".hmpgVideoBoxWrapper").css("top", (clientHeight - $(".hmpgVideoBoxWrapper").height()) / 2 + currScrollTop + "px");

		$(".hmpgVideoBoxWrapper, .overlay").fadeIn()
		$(".videoBox").find("iframe").attr("src",$(this).attr("name")+"?wmode=transparent&rel=0");
		$('.videoBox h2').html(videoTitle);
	}
	});


	$(".videoClose").click(function(){
		$(".hmpgVideoBoxWrapper, .overlay").fadeOut();
		$(".videoBox").find("iframe").attr("src","");
	});
	/*---------------------------------Homepage Video Lightbox Functionality - Added on 28th Mar'14- Ends------------------------------- */
	

	/*--------------------------------- Go Bottom/TOP Functionality START ---------------------------- */
	$(".goBottom").click(function(){
		$("html,body").animate({
			scrollTop:465
		},1000);
	});

	$(".goTop").click(function(){
		$("html,body").animate({
			scrollTop:0
		},1000);
	});
	/*----------------------------------- Go Bottom/TOP Functionality END-------------------------------- */


	/*-----------------Select code--------------------*/
		$("select").each(function(){
			$(this).children("option").each(function(){
				if($(this).attr("selected"))
				{
					//alert("Inside Selected");
					$(this).parents('.selectedvalue').html($(this).html());
				}
			});
		});

if($('.jet-wrapper').length==0 && $('.laplandingrefform').length==0)
{
		$("select").change(function(){
				//alert("Inside change");
			$(this).prev(".selectedvalue").html($(this).find('option:selected').text());
		});
}
		/*---Required for Login And register----*/
		$("#myselect").change(function(){
			$(this).prev().html($('#myselect option:selected').text());
			});		
	/*---------------Select code----------------------*/

	

		$(".personalize").click(function(){
			var clientWidth = $(window).width();
			var clientHeight = $(window).height();
			
			$(".overlay").height($(document).height());

			$(".perLightbox").css("left", (clientWidth - $(".perLightbox").width()) / 2 + "px");
			$(".perLightbox").css("top", (clientHeight - $(".perLightbox").height()) / 2 + "px");
			$(".perLightbox, .overlay").fadeIn();
			getCookie();
			getCookie();
		});

		$(".lightboxClose").click(function(){
				$(".perLightbox, .overlay").fadeOut();
				getCookie();
				getCookie();
		});

	/*----------------------------- Expand/Collapse Functionality START----------------------- */
		$(".login").find('.expandDiv').slideDown();
		$('.quikService').find('.expand').removeClass('collapse');
		$(".login").find('.expand').addClass('collapse');

		
		$(".loginWrapper .expand").click(function(){
			//alert("dsf")
			var _index = $(this).parent().index();
			if(_index==3)
			{
				//alert(3);
				if($(this).next().css("display")=="none")
				{
					//$(this).toggleClass("collapse").parent().siblings().find(".expand").toggleClass("collapse");
					$(this).addClass("collapse").parent().siblings().find(".expand").removeClass('collapse');
					$(this).next().slideToggle().parent().siblings().find(".expandDiv").slideUp();
					$(this).parent().next().find(".expandDiv").slideUp();
				}
				else
				{
					$(".expandDiv").slideUp();
					$(".login").find('.expand').addClass('collapse');
					
					$(this).removeClass("collapse");
					$(".login").find('.expandDiv').slideDown();
				}
			}
			else if(_index==2)
			{
				//alert(3);
				if($(this).next().css("display")=="none")
				{
					//alert(1)
					//$(this).toggleClass("collapse").parent().siblings().find(".expand").toggleClass("collapse");
					$(this).addClass("collapse").parent().siblings().find(".expand").removeClass('collapse');
					$(this).next().slideToggle().parent().siblings().find(".expandDiv").slideUp();
					$(this).parent().next().find(".expandDiv").slideUp();
				}
				else
				{
					//alert(2)
					/*$(".expandDiv").slideUp();
					$(".login").find('.expand').addClass('collapse');
					
					$(this).removeClass("collapse");
					$(".login").find('.expandDiv').slideDown();*/
					
					$(this).removeClass("collapse").parent().next().find(".expand").addClass('collapse');
					//$(this).parent().siblings().find('.expand').removeClass('collapse');
					$(this).next().slideUp();
					$(this).parent().next().find('.expandDiv').slideDown();
					
				}
			}
			else if(_index==0)
			{
				//alert(1)
				if($(this).next().css("display")=="block")
				{
					$(this).removeClass("collapse").parent().next().find('.expand').addClass('collapse');
					$(this).next().slideUp();
					$(this).parent().next().find('.expandDiv').slideDown();
				}
				else
				{
					$(this).addClass("collapse").parent().next().find(".expand").removeClass('collapse');
					$(this).parent().siblings().find('.expand').removeClass('collapse');
					$(this).next().slideDown();
					$(this).parent().siblings().find('.expandDiv').slideUp();
				}
				
			}
			else if(_index==1)
			{
				//alert(2)
				if($(this).next().css("display")=="none")
				{
					//$(this).toggleClass("collapse").parent().siblings().find(".expand").toggleClass("collapse");
					$(this).addClass("collapse").parent().siblings().find(".expand").removeClass('collapse');
					$(this).next().slideToggle().parent().siblings().find(".expandDiv").slideUp();
					$(this).parent().next().find(".expandDiv").slideUp();
				}
				else
				{
					$(".expandDiv").slideUp();
					$(".login").find('.expand').addClass('collapse');
					
					$(this).removeClass("collapse");
					$(".login").find('.expandDiv').slideDown();
				}
			}
			
		
			
		});

		$(".loginWrapper .expandDiv .help").hover(function(){
			$(this).parents('li').css('z-index','50');
			$(this).find('.tooltip').stop(true,false).show();
		},function(){
			$(this).parents('li').css('z-index','10');
			$(this).find('.tooltip').stop(true,false).hide();
		});

		/*Added on 28th Mar'14 - Starts*/
		//$('.rightLinkWrapper .expand:first').addClass('collapse');
		//$('.rightLinkWrapper .expandDiv:first').show();
		/*Added on 28th Mar'14 - Ends*/

		$('.rightLinkWrapper .expand').click(function(){
			$(this).toggleClass('collapse').siblings().not('.expandDiv').removeClass('collapse');
			$(this).next().slideToggle().siblings().not('.expand').slideUp();
		});
	/*----------------------------- Expand/Collapse Functionality END----------------------- */

	/*----------------------------- Page Personalized Functionality START----------------------- */
		$(".persBox label").click(function(){
			var thisClass = $(this).parents("ul").attr("class");
			$(this).hasClass("active") ? $(this).removeClass("active") :  $(this).addClass("active") ;
			var chkboxLength = $(this).parents("ul").find(".active").length;
			
			$(".previewMdl").find("." + thisClass).show();
			//alert($(".persBox ."+ thisClass).find("input:checked").length)
			
			if(chkboxLength==0)
			{
				$(".previewMdl").find("." + thisClass).hide();
			}

			if($(this).hasClass("active"))
			{
				$(".previewMdl").find("." + thisClass).find(".prevDots").append("<span></span>")
			}
			else
			{
				$(".previewMdl").find("." + thisClass).find(".prevDots").children("span:last").remove();
			}
			
			var selBoxLength = $(".selBox:visible").length;
			
			if(selBoxLength==1 || selBoxLength==3 || selBoxLength==5)
			{
				$(".prevRateWrapper").addClass("odd");
			}
			else
			{
				$(".prevRateWrapper").removeClass("odd");
			}
		});

		$(".personalizeBtn").click(function(){
			abc = '';
			$(".persBox").each(function(){
			//alert($(this).find("input:checked").parents("ul").attr("class"));
				var persBoxClass = $(this).find(".active").parents("ul").attr("class");
				var chkdLength = $(this).find(".active").length;
				
				

				$(this).find("li").each(function(){
					if( $(this).find(".active").length)
					{
						abc += 1 + "|"
					}
					else
					{
						abc += 0 + "|"
					}
				});
				
				abc += "##"
			});
			
			$.cookie("personalizes",abc,{expires : 1, path:'/'});
			getCookie();
			getCookie();

			$(".perLightbox, .overlay").hide();
			$("html,body").animate({
				scrollTop:950
			},1000);
			
			/* 23-04-2014 START  */
			
			setTimeout(function(){
	
	$('.pBox').each(function(){
		//alert($(this).find('.navCont ul:visible').find('li img').html());
		var activeInd = $(this).find('.nav li:visible').index();
		//alert($(this).attr("id") +"-----------------------"+$(this).find('.nav li:visible').index());
		$(this).find('.navCont ul').eq(activeInd).show().siblings().hide();
		//alert($(this).find('.navCont ul').eq(activeInd).find('img').width());
		//alert($(this).attr("id") +'-----------------'+ $(this).find('.navCont ul').eq(activeInd).find('img').attr('src') +'adasdasdsa'+ $(this).find('.navCont ul').eq(activeInd).find('img').width());
		$(this).find('.navCont ul').each(function(){
			//alert($(this).parents('.pBox').attr("id") +'-----------------'+ $(this).find('img').attr('src') +'adasdasdsa'+ $(this).find('img').width());
			
			if($(this).parents('.pBox').attr("id")=="news")
			{
				if($(this).find('img').width() == 1 || $(this).find('img').width() == 0)
				{
				
				}
				else
				{
					$(this).find('img').css({'width':'99px','height':'66px'});
				}
			}
			else
			{
				$(this).find('img').css({'width':'99px','height':'66px'});
			}
			
			
		})
		/*if($(this).find('.navCont ul').eq(activeInd).find('img').width() == 1)
		{
			//alert(12345)
		}
		else
		{
			$(this).find('.navCont ul').eq(activeInd).find('img').css({'width':'99px','height':'66px'})
		}*/
	//alert($(this).find('.navCont ul').html());
	});

},1000)
			
			
			
			
		});





		$(".defaultBtn").click(function(){
			$('.perLightbox .persBox').each(function(){
				$(this).find("label").removeClass("active");
				$(".previewBox .box").hide();
				$('.previewBox .box').eq(5).show();
				$('.previewBox .box').eq(6).show();
				$('.prevRateWrapper').removeClass('odd');
				$(".previewBox .box").find(".prevDots").html("");
			});
			
			$(".whatsNew").removeClass("rtBrd");
			$(".btmBrd").remove();
			$(".rates").after("<div class='btmBrd'></div>");
			$.cookie("personalizes",null,{expires : 1, path:'/'});
			$(".perLightbox, .overlay").hide();
			
			$("html,body").animate({
				scrollTop:950
			},1000);
			getCookie();
		});
	/*----------------------------- Page Personalized Functionality END----------------------- */

	/* Reset Functionality START */
	$(".resetBtn").click(function(){
		$('.perLightbox .persBox').each(function(){
			//$(this).find("input:checkbox").attr("checked","");
			$(this).find("label").removeClass("active");
			$(".previewBox .box").hide();
			$('.previewBox .box').eq(5).show();
			$('.previewBox .box').eq(6).show();
			$('.prevRateWrapper').removeClass('odd');
			$(".previewBox .box").find(".prevDots").html("");
		});
	});
	/* Reset Functionality END */

/* Footer Functionality START */
$('.fLink li a').click(function(){
	$(this).parent().toggleClass('sel').siblings().removeClass('sel');
	$(this).parent().children('div').slideToggle();
	$(this).parent().siblings().children('div').slideUp('slow',function(){
		$('.iWantLocate').show().siblings().not('.closeBtn').hide();
	});
});

$('.footerLocateus .closeBtn').click(function(){
	$('.footerLocateus').slideUp('slow',function(){
		$('.secondFooter ul li').removeClass('sel');
		$('.iWantLocate').show().siblings().not('.closeBtn').hide();
	});
});

$('.exPopup .closeBtn').click(function(){
	$('.exPopup').slideUp('slow',function(){
		$('.secondFooter ul li').removeClass('sel');
	});
});


$('.atms').click(function(){
	if(isIE(8) || isIE(7)){
		$('.locateLabel').show();
		$('.ipConflict').show().siblings().not('.closeBtn').hide();
	}
	else
	{
		$('.locateLabel').hide();
		$('.locateAtm').show().siblings().not('.closeBtn').hide();
	}
});

$('.locNo').click(function(){
	$('.ipConflict').show().siblings().not('.closeBtn').hide();
});

$('.branches').click(function(){
	if(isIE(8) || isIE(7)){
		$('.locateLabel').show();
		$('.ipConflictBranch').show().siblings().not('.closeBtn').hide();
	}
	else
	{
		$('.locateLabel').hide();
		$('.locateBranch').show().siblings().not('.closeBtn').hide();
	}
});

$('.locNoBranch').click(function(){
	$('.ipConflictBranch').show().siblings().not('.closeBtn').hide();
});
/* Footer Functionality END */

/**/
<!--Changes done on 24/03/2014 END -->
$('.atmsLink').click(function(){
	$(this).addClass('active').siblings().removeClass('active');
	$('.atmSearchContainer').show();
	$('.atmContWrapper').show();
	$('.branchContWrapper').hide();
});

$('.branchesLink').click(function(){
	$(this).addClass('active').siblings().removeClass('active');
	$('.atmSearchContainer').show();
	$('.atmContWrapper').hide();
	$('.branchContWrapper').show();
});
<!--Changes done on 24/03/2014 END -->
/////////////////////////////////////////////////////////////////////    INNER PAGE START   ///////////////////////////////////////////////////////////////////////////
/* Primary Navigation START */

	var currActiveLink = $('.innerPrimNav').find('.current').index();

	$(".innerPrimNav li").not('.premium').click(function(){
	
	if(!$(this).hasClass('navigation'))
	{
		//$(".innerPrimNav li.current").removeClass('current');
		
		if($(this).parents('.innerPrimNav').hasClass('innerPagelink'))
		{	
			/*if($(".primeNavigation:visible").length!=0)
			{
				$(".innerPrimNav li.current").find('.arrow').show();
			}
			else
			{
				$(".innerPrimNav li.current").find('.arrow').hide();
			}*/
			var navIndex = $(this).index();
			
			if(!$(this).hasClass('sel'))
			{
				
				//$(".innerPrimNav li").eq(currActiveLink).addClass('current')
			}
			
			if($(this).attr("id")=="MediaRoom")
			{
				$(this).find('a').attr('href','/about-us/media-room.html');
			}
			else
			{
				$(this).toggleClass("sel").siblings().removeClass("sel");
				$(".primeNavigation").eq(navIndex).slideToggle().siblings().hide();
			}
			
		}
		else
		{
			if($(this).index()==0)
			{
				return false
			}
			
			if($(".primeNavigation:visible").length!=0)
			{
				$(".innerPrimNav li.current").find('.arrow').show();
			}
			else
			{
				$(".innerPrimNav li.current").find('.arrow').hide();
			}
			
			var navIndex = $(this).index();
			$(this).toggleClass("sel").siblings().removeClass("sel");

			/*if(!$(this).hasClass('sel'))
			{
				$(".innerPrimNavInner li").eq(currActiveLink1).addClass('sel')
			}*/
			$(".primeNavigation").eq(navIndex).slideToggle().siblings().hide();
		}
		
	}
	
		
		
		
		
		
	});

/* Primary Navigation END */


/*---------------------------------Generic child page Lightbox Functionality Starts------------------------------- */
	$(".opnLightbox").click(function(){
		//alert(1)
		var clientWidth = $(window).width();
		var clientHeight = $(window).height();
		var currScrollTop = $(document).scrollTop();
		var lightboxName = $(this).find('span').attr('class');
		
		//alert("lightbox name" + lightboxName +"----" + $("."+lightboxName).width());

		$(".overlay").height($(document).height());
		$("."+lightboxName).css("left", (clientWidth - 800) / 2 + "px");
		$("."+lightboxName).css("top", (clientHeight - $("."+lightboxName).height()) / 2 + currScrollTop + "px");

		$(".overlay").fadeIn()
		$("."+lightboxName).fadeIn()
		$('.scroll-pane').jScrollPane({autoReinitialise: true});
	});
	
	$(".closeBtn").click(function(){
		$(".genericLightBox").find('iframe').attr('src','');
		$(".genericLightBox, .overlay").fadeOut();
	});
	
/////////////////////////////////////////////////////////////////

/*$('.opnLightbox').find('a').click(function(event){
	event.preventDefault();
	var clientWidth = $(window).width();
	var clientHeight = $(window).height();
	var currScrollTop = $(document).scrollTop();
	var iframeSource = $(this).attr('href');
	

	$(".genericLightBox").find('iframe').attr('src',iframeSource);

	alert($(".genericLightBox").find('iframe').find('.termCondition').html())
	//alert(134567)
	$(".overlay").height($(document).height());
	$(".genericLightBox").css("left", (clientWidth - 800) / 2 + "px");
	$(".genericLightBox").css("top", (clientHeight - $(".genericLightBox").height()) / 2 + currScrollTop + "px");
	$(".overlay").fadeIn();
	$(".genericLightBox").fadeIn()
	$('.scroll-pane').jScrollPane({autoReinitialise: true});
	
	$(".closeBtn").click(function(){
		$(".genericLightBox").find('iframe').attr('src','');
		$(".genericLightBox, .overlay").fadeOut();
	});
});*/
	
/*---------------------------------Generic child page Lightbox Functionality End------------------------------- */


/* Product compare START */

/*Commented on 10-04-2014 START*/
/*
var chkCounter = 0
$(document).on("click",'.prdWrapper input:checkbox', function(){
		if($(this).is(":checked"))
		{
			if(chkCounter==3)
			{
				//$(this).parent().removeClass('checked');
				//alert("You can compare only three products");
				return false;
			}
			if(chkCounter<4)
			{
				$(this).parents("li").addClass("selected");
				if(chkCounter>=1)
				{
					$(this).parents(".compare").find("label").hide();
					$(this).parents(".compare").find(".comparebtn").show();
					$('.prdWrapper ul li.selected').find("label").hide();
					$('.prdWrapper ul li.selected').find(".comparebtn").show();
				}
				chkCounter = chkCounter+1;
			}
		}
		else
		{	
			$(this).parents("li").removeClass("selected");
			if(chkCounter==2)
			{
				$('.prdWrapper ul li.selected').find("label").show();
				$('.prdWrapper ul li.selected').find(".comparebtn").hide();
			}
			$(this).parents(".compare").find("label").show();
			$(this).parents(".compare").find(".comparebtn").hide();
			if(chkCounter<4)
			{
				chkCounter = chkCounter-1
			}
		}

//		$(".prdWrapper").find("li").each(function(){
//			$(this).find(".comparebtn span").html(chkCounter);
//			
////			document.cookie = "checkCount" + "=" + (chkCounter+1);
//		});
		
});
*/
/*Commented on 10-04-2014 END*/

$('.giveCallWrapper').find('input:checkbox').click(function(){
	if($(this).is(":checked"))
	{
		$(this).parents('.compare').find('.comparebtn').show();
		$(this).parents('.compare').find('label').hide();
	}
	else
	{
		$(this).parents('.compare').find('.comparebtn').hide();
		$(this).parents('.compare').find('label').show();
	}
});

/* Product compare END */

/*Benefits Tab Functionality START */
$(".tabWrapper li").click(function(){
	var tabIndex = $(this).index();
	$(this).addClass('selected').siblings().removeClass('selected');
	$('.tabContWrapper').find('.tabCont').eq(tabIndex).show().siblings().hide();
	$('.tabCont').eq(tabIndex).find('.faqsQuest').eq(0).addClass('active');
	$('.tabCont').eq(tabIndex).find('.faqsQuest').eq(0).next().slideDown();
}).eq(0).click();
/*Benefits Tab Functionality END */

/*LocateUs Accordion Functionality START */

$(".locateusLeft .accord").click(function(){
	//var pane = $('.scroll-pane');
	//var api = pane.data('jsp');
	$(this).addClass('active').parents('li').siblings().find('.accord').removeClass('active');
	$(this).next().not('.accord').slideToggle();
	$(this).parents('li').siblings().find('.addressCont').not('.accord').slideUp();
	$(this).next().find('.locationbtn').removeClass('sel');
	$(this).next().find('.lctExpand').hide();
}).eq(0).click();

/*var pane = $('.scroll-pane');
pane.jScrollPane();
var api = pane.data('jsp');

$('.locateusLeft .accord').bind(
	'click',
	function()
	{
		// Note, there is also scrollToX and scrollToY methods if you only
		// want to scroll in one dimension
		var thisPos = $(this).position().top;
		api.scrollTo(10,thisPos)
		//setTimeout(function(){api.scrollTo(10,thisPos);},500);
	}
);*/

$('.locationbtn').click(function(){
	var thisIndex = $(this).index();
	$(this).parents('.addressCont').find('.lctExpand').eq(thisIndex).slideToggle().siblings().hide();
	$(this).toggleClass('sel').siblings().removeClass('sel');
});

$('.dirIcon').click(function(){
	$(this).addClass('sel').siblings().removeClass('sel');
});

$('.atmSearchContainer > ul > li, .branchesContainer > ul > li').click(function(){
	var thsInd = $(this).index();

	$(this).toggleClass('sel').siblings().removeClass('sel');
	$(this).parent().next().find('.refineSearch').eq(thsInd).slideToggle().siblings().hide();
});

/*LocateUs Accordion Functionality END */

$('.swap').click(function(){
	var from = $(this).parent().find('input[name="From"]').val()
	var to = $(this).parent().find('input[name="To"]').val()

	//alert("From" + from +"------"+ "To" + to);
	
	$(this).parent().find('input[name="From"]').val(to)
	$(this).parent().find('input[name="To"]').val(from)
});

$(".helpIcon").hover(function(){
	$(this).parent().find('.tooltip').stop(true,false).show();
},function(){
	$(this).parent().find('.tooltip').stop(true,false).hide();
});


/* About Us Page START */
var liLength = $('.timelineContainer ul li').length
$('.timelineContainer ul').css('width',liLength*136+'px');

/*if(liLength<7)
{
	$('.timelineWrapper .next').removeClass('active');
}*/

$('.timelineContainer ul li').click(function(){
	var leftOffset = $(this).offset().left;
	var _thisInd = $(this).index();
	
	$('.yearData').eq(_thisInd).fadeIn().siblings().hide();
	
	if(!$('.timelineContainer ul').is(':animated'))
	{
		$(this).addClass('sel').siblings().removeClass('sel');
		//alert(leftOffset)
		if(leftOffset>853)
		{
			if($('.timelineContainer ul li.sel').index()==(liLength-1))
			{
				$('.timelineWrapper .next').removeClass('active');
				return false
			}
			else
			{
				$('.timelineContainer ul').animate({'margin-left':'-=136px'})
			}
		}
		else if((leftOffset<315))
		{
			  if(!parseInt($('.timelineContainer ul').css('margin-left'))==0)
			  {
				$('.timelineContainer ul').animate({'margin-left':'+=136px'});
			  }
		}
		
		if($('.timelineContainer ul li.sel').index()>0)
		{
			if(liLength<7)
			{
				if($('.timelineContainer ul li.sel').index()==(liLength-1))
				{
					$('.timelineWrapper .next').removeClass('active');
					$('.timelineWrapper .prev').addClass('active');	
					return false
				}
				else
				{
					$('.timelineWrapper .next').addClass('active');
				}
			}
			else
			{
				$('.timelineWrapper .next').addClass('active');
			}
			$('.timelineWrapper .prev').addClass('active');	
		}
		else if($('.timelineContainer ul li.sel').index()==0)
		{
			$('.timelineWrapper .prev').removeClass('active');
			$('.timelineWrapper .next').addClass('active');	
		}
	}
	
}).eq(0).click();


$('.timelineWrapper .next').click(function(){
	
		$('.timelineContainer ul li.sel').next().click();
});

$('.timelineWrapper .prev').click(function(){
	$('.timelineContainer ul li.sel').prev().click();
});

$('.boardofDirectCont ul li').click(function(){
	setTimeout(function(){
		var activeIndex = $('.roundabout-in-focus').index();
		$('.profile').eq(activeIndex).fadeIn('slow').siblings().not('.topArrow').hide();
	},1000);
});

var profileLength = $('.boardofDirectCont ul li').length;
$('.profNext').click(function(){
	if($('.roundabout-in-focus').index()==(profileLength-1))
	{
		$('.boardofDirectCont ul li').eq(0).click();
	}
	else
	{
		$('.roundabout-in-focus').next().click();
	}
});

$('.profPrev').click(function(){
	if($('.roundabout-in-focus').index()==0)
	{
		$('.boardofDirectCont ul li').eq(profileLength-1).click();
	}
	else
	{
		$('.roundabout-in-focus').prev().click();
	}
});
/* About Us Page END */





/////////////////////////////////////////////////////////////////////    INNER PAGE END   ///////////////////////////////////////////////////////////////////////////	
getCookie();


/* Rating Star START */
/* Rating Star END */

/* Product Review Functionality START */
/*$('.viewReview').click(function(){
	var thisOffset = $(this).offset().top
	$("html,body").animate({
		scrollTop:thisOffset-31
	},1000);
	
	$('.writeReviewWrapper').hide();
	$('.prodcuctReviewWrapper').slideDown();
});*/

$('.review').click(function(){
	var thisOffset = $(this).offset().top
	
	//alert(thisOffset);
	$("html,body").animate({
		scrollTop:thisOffset-10
	},1000);
	$('.prodcuctReviewWrapper').hide();
	$('.writeReviewWrapper').slideDown();
});

$('.close').click(function(){
	$(this).parents('.reviewWrap').slideUp();
})
/* Product Review Functionality END */






});



function getCookie(){
	$('.personalised .pBox, .personalised .pBox .nav li, .personalised .pBox .navCont ul, .previewBox .box').hide();
	$('.personalised .pBox').eq(5).show();
	$('.personalised .pBox').eq(6).show();
	$('.previewBox .box').eq(5).show();
	$('.previewBox .box').eq(6).show();
	$('.rates, .prevRateWrapper').removeClass('odd');
	$('.personalised .activeBox').removeClass("activeBox");
	$('.persBox .abc').removeClass("abc");
	$('.persBox .checked').removeClass('checked');
	if($.cookie("personalizes")==null)
	{
		return false;
	}
	var cookieVal = $.cookie("personalizes").split("##");
	cookieValArr = [];
	//console.log('cookieValArr::'+cookieValArr);
	
	//alert($('.persBox').length);
	var persBoxLength = $('.persBox').length
	
	for(var i=0; i<persBoxLength; i++){
		var a = cookieVal[i].split('|');
		cookieValArr.push(a);
	}
	//console.log('cookieValArr::'+cookieValArr);
	for(var i=0; i<persBoxLength; i++){
	var len = cookieValArr[i].length;
	for(var j=0; j<len; j++){
	if( parseInt(cookieValArr[i][j]) == 1 ){
		var _ths1 = $('.personalised .pBox').eq(i);
		_ths1.show().addClass("activeBox");
		_ths1.find('.nav').find('li').eq(j).show();
		_ths1.find('.navCont').find('ul').eq(j).show();
		$('.previewBox .box').eq(i).show();
		//$('.perLightbox .persBox').eq(i).find('.checkbox').eq(j).find('input').change();
		//$('.perLightbox .persBox').eq(i).find('.checkbox').eq(j).find('input').click();
	$('.persBox').eq(i).find('li').eq(j).find("label").click();
	}
	}
	}
	//console.log('cookieValArr::'+cookieValArr);
	var abLen = $('.personalised .activeBox').length;
	if(!(abLen%2==0)){
		$('.rates, .prevRateWrapper').addClass('odd');
	}
	$(".pBox").each(function(){
		$(this).find(".nav li").click(function(){
			var navInd = $(this).index();
			$(this).css({'border':'1px solid #bb4140'});
			$(this).siblings().css({'border':'1px solid transparent'});
			$(this).parents(".pBox").find(".navCont ul").eq(navInd).show().siblings().hide();
		}).eq(0).click();
	});
	applyBorder();
}

function applyBorder()
{
	setTimeout(function(){
		$(".btmBrd").remove();
		$(".pBox").removeClass("rtBrd");
		$(".pBox:visible:odd").after("<div class='btmBrd'></div>");
		$(".pBox:visible:odd").addClass("rtBrd");
	},1000);
}

/**/

/*Homepage quickpaye banner overlay*/

/*function getCookieQuickpayBanner(){
		if($.cookie("QuickpayBanner")==null)
			{
				*//*set cookie and show banner & cookie expiry code also*//*
				$.cookie("QuickpayBanner",'true',{expires : 1, path:'/'});
				if(url=='http://www.indusind.com/content/home/personal-banking.html'){
				$(".overlayQuickpay, .srLightboxQuickpay").fadeIn(1000);
					setTimeout(function(){
					$(".overlayQuickpay, .srLightboxQuickpay").fadeOut(1000)
					},10000);
				}
			}
		else{
			*//* hide banner*//*
			$(".overlayQuickpay, .srLightboxQuickpay").hide()
			}
	}*/


$(window).load(function(){
	
	//getCookieQuickpayBanner();
	/*Homepage quickpaye banner overlay getCookieQuickpayBanner();
if(url=='http://10.24.124.143:4502/content/home/personal-banking.html'){
$(".overlayQuickpay, .srLightboxQuickpay").fadeIn(1000);
setTimeout(function(){
	$(".overlayQuickpay, .srLightboxQuickpay").fadeOut(1000)
	},10000);
}	
	/*Homepage quickpaye banner overlay*/
	
/* Home page banner onLoad START */
if($(".hmvideocall").length)
{

	var clientWidth = $(window).width();
	var clientHeight = $(window).height();
	$(".overlay").height($(document).height());
	$(".hmvideocall").css("left", (clientWidth - $(".hmvideocall").width()) / 2 + "px");
	//$(".hmvideocall").css("top", (clientHeight - $(".hmvideocall").height()) / 2 + "px");
	$(".hmvideocall").css("top", "50px");
	$(".hmvideocall").fadeIn()
	$('.overlay').fadeIn();
}
/* Home page banner onLoad END */

if($(".hmvideocall").length==0)
{
$(".accWrapper .videoLink a").attr('href',$(".accWrapper .videoLink a").attr('name'));
$(".accWrapper .videoLink a").attr('target','_blank');
}

	
/* Replace .html extension from PDF link START 23-07-2014 */
$(".giveCallWrapper").find('ul li').each(function(){
	//alert($(this).find('a').attr("href"));
	var linkReplace = $(this).find('a').attr("href");
	if($(this).find('a').attr("href").split(".pdf")[1]==".html")
	{
		var newLink = linkReplace.replace(".html", "");
		$(this).find('a').attr("href",newLink);
	}
});

$(".importantNotice").find('ul li').each(function(){
	//alert($(this).find('a').attr("href"));
	var linkReplace = $(this).find('a').attr("href");
	if($(this).find('a').attr("href").split(".pdf")[1]==".html")
	{
		var newLink = linkReplace.replace(".html", "");
		$(this).find('a').attr("href",newLink);
	}
});
/* Replace .html extension from PDF link END 23-07-2014 */

/*Open tab in Savings Rate START */
if($('.otherRate').length)
{
	var locationURL=window.location.href;
	locationURL=locationURL.split("?")[1];
	$(".savingTab ul li").eq(locationURL-1).click();
}
/*Open tab in Savings Rate END */

/*Open tab in Child Page START */
if($('.tabWrapper').length)
{
	var locationURL=window.location.href;
	locationURL=locationURL.split("?")[1];
	$(".tabWrapper li").eq(locationURL-1).click();
}
/*Open tab in Child Page START */
	
if($('.prdBox').find('img').length)
{
	$('.prdWrapper .prdBox').css('min-height','275px');
}

	
if($('.innerPrimNav li.premium').find('a').length==0)
{
	$('.innerPrimNav li.premium').remove();
}

/* RHS link functionality START */
$('.rightLinkWrapper').find('.active').parents('.expandDiv').prev().click();


/* RHS link functionality END */
	
if($('.scroll-pane').length)
{
	$('.scroll-pane').jScrollPane({autoReinitialise: true});
}

$("#myRoundabout").css('visibility','visible')
if($("#myRoundabout").length)
{
	$('ul#myRoundabout').roundabout({minScale: 0.4, maxScale: 1, minOpacity: 0, minOpacity: 1});
}

var activeIndex = $('.roundabout-in-focus').index();
$('.profile').eq(activeIndex).show().siblings().not('.topArrow').hide();


/*alert("Homebanner" + $('.homeBanner').length)
alert("----" + "Termscondition" + $('.termCondition').length)
alert("-------" + "FormWrapper" + $('.formWrapper').length)
alert(+ "-----" + "Innerbanner" + $('.innerBanner').length)*/

if($('.homeBanner').length==0 && $('.termCondition').length==0 && $('.formWrapper').length==0 && $('.innerBanner').length==1)
{
	if($('.innerPrimNav').length==0 && $('.innerPrimNavInner').length==0)
	{
		/*$("html,body").animate({
			scrollTop:0
		},10);*/
	}
	else
	{
		/*$("html,body").animate({
			scrollTop:130
		},1000);*/
	}
}
if($('.termCondition').length==1 &&  $('.innerBanner').length==1)
{
	/*$("html,body").animate({
		scrollTop:130
	},1000);*/
}

if($('.innerBanner').length==0)
{
	/*$("html,body").animate({
		scrollTop:0
	},10);*/
}

/****************************************** Hide border above video wrapper START***********************/
setTimeout(function(){
	if($('.videoWrapper .videos').find('li').length==0)
	{
		$('.btmBrd').last().css('background','none');
	}
},800)

/****************************************** Hide border above video wrapper END***********************/

$('.personalised').next().css('float','left');

setTimeout(function(){
	$('.pBox').each(function(){
		//alert($(this).find('.navCont ul:visible').find('li img').html());
		var activeInd = $(this).find('.nav li:visible').index();
		//alert($(this).attr("id") +"-----------------------"+$(this).find('.nav li:visible').index());
		$(this).find('.navCont ul').eq(activeInd).show().siblings().hide();
		//alert($(this).find('.navCont ul').eq(activeInd).find('img').width());
		//alert($(this).attr("id") +'-----------------'+ $(this).find('.navCont ul').eq(activeInd).find('img').attr('src') +'adasdasdsa'+ $(this).find('.navCont ul').eq(activeInd).find('img').width());
		$(this).find('.navCont ul').each(function(){
			//alert($(this).parents('.pBox').attr("id") +'-----------------'+ $(this).find('img').attr('src') +'adasdasdsa'+ $(this).find('img').width());
			
			if($(this).parents('.pBox').attr("id")=="news")
			{
				if($(this).find('img').width() == 1 || $(this).find('img').width() == 0)
				{
				
				}
				else
				{
					$(this).find('img').css({'width':'99px','height':'66px'});
				}
			}
			else
			{
				$(this).find('img').css({'width':'99px','height':'66px'});
			}
			
			
		})
		/*if($(this).find('.navCont ul').eq(activeInd).find('img').width() == 1)
		{
			//alert(12345)
		}
		else
		{
			$(this).find('.navCont ul').eq(activeInd).find('img').css({'width':'99px','height':'66px'})
		}*/
	//alert($(this).find('.navCont ul').html());
	});
},1000)

var roundabtIndex = $('.prdWrapper').find('#hidden').val();
$('#myRoundabout').find('ul li').eq(roundabtIndex).click();

$('.int-link-wrap > ul').eq(1).children('li').eq(1).children('a').attr('href','/content/home/personal-banking/products/super-saver-pack.html');

$('.primeNavigation').eq(1).children().eq(6).find('li').eq(0).find('span').wrap('<a href="/content/home/personal-banking/products/super-saver-pack.html" title="Super Saver Pack"></a>')

$('.primaryNav > ul > li').eq(0).find('.rtSubLinkWrapper ul').eq(7).find('li').eq(0).before("<li><a title='Forex Cards' href='/content/home/personal-banking/products/cards/forex-card.html'>Forex Cards</a></li>");

if($('.primaryNav li.currentActive').find('h1').text()=="PERSONAL")
{
$('.int-link-wrap > ul').eq(1).children().eq(3).find('.subLink').find('ul').eq(0).find('li').eq(0).before('<li><a title="Forex Cards" href="/content/home/personal-banking/products/cards/forex-card.html">Forex Cards</a></li>')
}

/* Animate body in Vision & Mission - START */
$('.carrerBoxes').find('li').eq(0).click(function(){
	if($(this).find('.prdTitle').text()=='Genesis')
	{
		$.cookie("vision",'genesis',{expires : 1, path:'/'});
	}
});


if($.cookie("vision")=='genesis')
{
	var genesisOffset = $('.genesisnewern').offset().top
	$('html,body').animate({
		scrollTop:genesisOffset
	},800);
	
	setTimeout(function(){
		$.cookie("vision",'',{expires : 1, path:'/'});
	},500);
}

/* Animate body in Vision & Mission - END */

});



function openLightbox(lightboxName)
{
	var clientWidth = $(window).width();
	var clientHeight = $(window).height();
	/*var currScrollTop = $(document).scrollTop();Commented on 30th Apr'14*/
	$(".overlay").height($(document).height());
	$("." + lightboxName).css("left", (clientWidth - $("." + lightboxName).width()) / 2 + "px");
	/*$("." + lightboxName).css("top", (clientHeight - $("." + lightboxName).height()) / 2 + currScrollTop + "px");Commented on 30th Apr'14*/
	/*Added on 30th Apr'14*/$("." + lightboxName).css("top", (clientHeight - $("." + lightboxName).height()) / 2 + "px");
	if(lightboxName=="AccountLightBox")
	{
		$("." + lightboxName).css("top", (clientHeight - $("." + lightboxName).height()) / 2 + (50) + "px");
	}

	$("." + lightboxName).fadeIn()
	$('.overlay').fadeIn();
}
/*
function impNotice()
{
	$('.importantNotice').slideDown();
	setTimeout(function(){
		$('.importantNotice').slideUp();
	},5000);
}
*/

/*$(window).load(function() {
	if($.cookie("impNotice")==null)
	{
		$.cookie("impNotice","yes",{expires : 1, path:'/'});
		var templateName="/apps/indusind/templates/indusindhomepage";
		if(templateName==="/apps/indusind/templates/indusindhomepage")
		{	
			$('.importantNotice').slideDown();
			setTimeout(function(){
				$('.importantNotice').slideDown();
			},5000); 
		}
	}
});

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}*/

//function openDepositpopup() {
	//alert(1);
	//window.open('http://www.google.co.in', 'width=500,height=500,scrollbars=yes');
//}
// JavaScript Document



//ICF added 16-12-2015 Method to call sms servlet start

function sendMessageToUser(mobilenumber,messagetext){
 	//alert("Sending Message");
  $.ajax({
      type : "POST",
      url : "/bin/sendSMS/posteddata",
      data : {
        mobile : mobilenumber,
        feedid : "344030",
        messageText: messagetext
      },
      success : function(data) {
        if(data == "true"){
         //alert("Message successfully sent");
        }else{
          //alert("Failed to send message");
        }
      }
  });
}

//ICF added 16-12-2015 Method to call sms servlet end




