// JavaScript Document


//custAge = On a average how long I can save
//finacialAssest = I have already saved
//finacialAssest1 = Amount I would save in my account each month


var lft, q= 30, i;
var newWid, wid, len, dragFlag = true, clickEventFlag = false, dragEventFlag = false;
var leftDrag, leftSlide, totalSlideWidth, selectValue, lftPosArray, prevActionArray;
var duration =1;
var _this, setInter;
var finalAge, finalExp , finalFincialAssest, finalFincialAssest1, finalLiabilities, final_FeatureGoal, final_ExstngLifeCover;
var keyFlag = true;
var keyFlag1 = false;
var incrmentalVal = -1 ;
var increCounter = 1 ;
$(function(event) {
	
		/****** input box calculation ****/
		$('input').keyup(function (e) {
			if (e.keyCode == 13) {
				keyFlag = true;
				keyFlag1 = false;
				$(this).blur();
			}
		});
		
		$('.inputWrapper input').blur(function(){
			
			if(keyFlag == true && keyFlag1== false)
			{
				keyFlag = false;
				keyFlag = true;
			}
			else if(keyFlag == false && keyFlag1 == true)
			{
				keyFlag = true;
				keyFlag1 = false;
				return false;
			}
			
			var valInput =parseInt( $(this).val());
			var diff = parseInt($(this).parents('.slideWrapper').find('.hideVal').text());
			var monEx = $(this).parents('.slideWrapper').find('#finalMonthExp').val();
			var finAsst = $(this).parents('.slideWrapper').find('#finalAssest').val();
			var finAsst1 = $(this).parents('.slideWrapper').find('#finalAssest1').val();
			var finLiablty = $(this).parents('.slideWrapper').find('#finalLiability').val();
			var lifCvr = $(this).parents('.slideWrapper').find('#finalExistingLifeCover').val();	
			var futureGoal = $(this).parents('.slideWrapper').find('#finalFeatureGoal').val();	
			var interest = $(this).parents('.slideWrapper').find('#finalLiability').val();	
			var savedMonth = $(this).parents('.slideWrapper').find('#finalCustAge').val();	

			
			if(lifCvr >=0 && lifCvr <=100000000)
			{
				
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(valInput);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				if(valInput <= 10000000)
				{
					var marLft_input =  (valInput/diff) *35;
					$(this).parents('.slideWrapper').find('ul').animate({marginLeft:-marLft_input});	
				}
				else if(valInput > 10000000)
				{
					var marLft_input1 =  ((10000000/25000) *35)  + (((valInput-10000000)/2500000)*35);
					$(this).parents('.slideWrapper').find('ul').animate({marginLeft:-marLft_input1});
				}
				finalCalculation();
			}
			else if(lifCvr < 0 || lifCvr >=100000000 )
			{
				
				alert("Minimum Life Cover should be 0 & Maximum Life Cover should be 100000000");
				$(this).val(0);
				$(this).parents('.slideWrapper').find('ul').animate({marginLeft:0});
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(0);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				finalCalculation();
			}
			
			
			/******** Financial Assests, Liabilty, life cover Calculation ***********/
			
			/******************* Main Calculation for slider range and effect *****************/
			var amtDetail;
			amtDetail = 10000000
			
			if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Home Loan Calculator')
			{
				amtDetail = 10000000
			}
			else if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Personal Loan Calculator')
			{
				amtDetail = 2000000
			}
			
			if(finAsst < 25000 && finAsst < amtDetail){
				alert("Minimum amount should be 25000 & maximum amount 2000000");
				$("#finalAssest").val("25000");
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
			}
			else if(finAsst >=25000 && finAsst <=amtDetail)
			{
				console.log("more than 25000");
				//alert(amtDetail)
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(valInput);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				
				if(valInput <= amtDetail)
				{
					//alert(valInput+'---'+diff)
					/*if(amtDetail==10000000)
					{
						var marLft_input =  (valInput/diff) *35;
					}
					else */if(amtDetail>=25000)
					{
						var marLft_input = ((valInput/diff)-1) *35;
					}
					
					//console.log("marLft_input" + marLft_input +'Difference'+ diff);
					$(this).parents('.slideWrapper').find('ul').animate({marginLeft:-marLft_input});	
				}
				else if(valInput > amtDetail)
				{
					//console.log("Else" + valInput)
					alert("Minimum amount should be 25000 & maximum amount 2000000");
					$("#finalAssest").val("25000");
					$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
									}
					finalCalculation();
			}
			else if(finAsst <0 || finAsst >=amtDetail )
			{
				
				alert("Minimum amount should be 0 & Maximum amount should be" + amtDetail);
				$("#finalAssest").val("25000");
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				/*$(this).val(amtDetail);
				$(this).parents('.slideWrapper').find('ul').animate({marginLeft:'-2345px'});
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(0);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',385);*/
				finalCalculation();
			}
/* Changes Done on 03-06-2014 END */

			/*else if(finLiablty <0 || finLiablty >=100000000 )
			{
				alert("Minimum Liabilities  should be 0 & Maximum Liabilities should be 100000000");
				$(this).val(0);
				$(this).parents('.slideWrapper').find('ul').animate({marginLeft:0});
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(0);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				finalCalculation();
			}
			*/
			
			
			/******** Future Goal Calculation ***********/
			if(futureGoal >=0 && futureGoal <=100000000)
			{
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(valInput);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				var marLft_input =  (valInput/diff) *35;
				$(this).parents('.slideWrapper').find('ul').animate({marginLeft:-marLft_input});
				finalCalculation();
			}
			else if(futureGoal <0 || futureGoal >=100000000 )
			{
				alert("Minimum Future goals should be 0 & Maximum Future goals should be 100000000");
				$(this).val(0);
				$(this).parents('.slideWrapper').find('ul').animate({marginLeft:0});
				$(this).parents('.slideWrapper').find('.highLight').css('visibility','visible').find('input').val(0);
				$(this).parents('.slideWrapper').find('.draggable, .highLight ').css('left',0);
				finalCalculation();
			}
		});
		
		$('#interest .inputWrapper input').blur(function(){
			var valInput =parseFloat( $(this).val());
			var _this=$(this);
			//alert(valInput)
			if(valInput < 6){
				alert("Minimum Month should be 6 & Maximum Year should be 60");
				_this.val(6);
				_this.parents('.slideWrapper').find('.calcContainer ul').animate({marginLeft:0});
				_this.parents('#interest').find('.draggable').css('left',0);
				finalCalculation();
			}
			
			/*********************************
			*******************Year*******************
			*******************************************/
			else if(valInput > 60){
				alert("Minimum Month should be 6 & Maximum Year should be 60");
				_this.val(6);
				_this.parents('.slideWrapper').find('.calcContainer ul').animate({marginLeft:'0'});
				_this.parents('#interest').find('.draggable').css('left','0');
				finalCalculation();
			}
			/*else if(valInput == 25){
				_this.val(25);
				_this.parents('.slideWrapper').find('.calcContainer ul').animate({marginLeft:'-665px'});
				_this.parents('#interest').find('.draggable').css('left','175px');
				finalCalculation();
			}*/
			else{
				var diff = parseFloat($(this).parents('#interest').find('.hideVal').text());
				//alert(diff)
				_this.parents('.calcSection').find('.highLight').css('visibility','visible').find('input').val(valInput);
				_this.parents('#interest').find('.draggable').css('left',0);
				/*if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Home Loan Calculator')
				{
					var marLft_input =  ((valInput-8)/0.25)*35;
				}
				else*/ 
				if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Personal Loan Calculator')
				{
					var marLft_input =  ((valInput/6)-1)*35;
					//alert(marLft_input);
				}

				//alert(marLft_input)
				_this.parents('.slideWrapper').find('#liability ul').animate({marginLeft:-marLft_input});
			
				finalCalculation();
			}


		});
		
		
		
		/****** input box calculation ****/		
	finalCalculation();
	/******** generation of li *****/
	var custAgeLi='',featureGoalLi='',monthExpLi='', monthExpLiLkh='', intRate='',intVal,ratesRange ;
	
	for(var k=0; k<201; k++){
		if(k>=1 && k<=30){
			custAgeLi += "<li>"+ k +"</li>";
		}

		if(k>=1 && k<=25){
			monthExpLi += "<li>"+ k*1 +"</li>";			
		}
		
		if(k>=32 && k<=60){
			intVal = k*0.25
			intRate += "<li>"+ intVal +"</li>";			
		}
	}
	
	for(var k=0; k<=1000; k++){
		if(k<=100000){
			var crK= k;
			if(crK <=100)
			{
		//		featureGoalLi += "<li>"+ k +"L</li>";	
				var fetureK_Cr = k/100;
				featureGoalLi += k == 100 ? "<li>"+ fetureK_Cr +"Cr</li>" : "<li>"+ k +"L</li>"
			}
			else
			{
				crk =k/100;
				featureGoalLi += "<li>"+ crk +"Cr</li>";	
			}
		}
	}
	$("#featureGoal ul").html(featureGoalLi);
	$("#custAge ul").html(custAgeLi);
	$("#monthExp ul").html(monthExpLi);
	$("#liability ul").html(intRate);
	
	$('.selectCalcWrapper .radiobox').click(function(){
		intRate=''
		if($(this).find('label').text()=='Home Loan Calculator')
		{
			/*for(var k=0; k<201; k++){
				if(k>=1 && k<=30){
					custAgeLi += "<li>"+ k +"</li>";
				}
				if(k>=32 && k<=60){
					intVal = k*0.25
					intRate += "<li>"+ intVal +"</li>";			
				}
			}*/
		}
		else if($(this).find('label').text()=='Personal Loan Calculator')
		{
			for(var k=0; k<11; k++){
				/*if(k>=1 && k<=30){
					custAgeLi += "<li>"+ k +"</li>";
				}*/

				/****************
				****Year Range***
				***************/
				if(k>=1 && k<=11){
					intVal = k*6;
					intRate += "<li>"+ intVal +"</li>";		
				}
			}
		}
		$("#liability ul").html(intRate);
	});
	
	
	/*var crLifeFirst = 0;
	var cr1 = 1;
	var val1='', cr_1='';
	
	for(var i=0; i<400; i++)
	{
		var valueK = i*25;
		//if(valueK<100){
			val1 +=  "<li>"+ valueK +"%</li>";
		//}
		 
		//var valueCr = i*0.0025;
		valueCr = i*0.25;
		if(valueCr <= 9)
		{
			cr_1 +=  "<li>"+ (crLifeFirst +valueCr) +"Cr</li>" ;
		}
	}
	$("#finacialAssest ul, #liability ul").html(val1 + cr_1);*/
	


	var valueCr =0;
	var crLife1 = 1;
	var valLife='', cr_1_life='';
	for(var i=0; i<400; i++)
	{
		var valueK = i*25;
		if(valueK<100){
			valLife +=  "<li>"+ valueK +"K</li>";
		}
		else{
			var valueL = valueK/100;
			var finAssL_Cr = valueL/100;
			valLife += valueL == 100 ? "<li>"+ finAssL_Cr +"Cr</li>" : "<li>"+ valueL +"L</li>"
		}
		valueCr = i;
		if(valueCr < 1)
		{
			cr_1_life +=  "<li>"+ (crLife1 +valueCr) +"Cr</li>" ;
		}
	}
	/* For Home Loan/Personal Loan Calculator START*/
	$('.selectCalcWrapper .radiobox').click(function(){
		if($(this).find('label').text()=="Home Loan Calculator")
		{
			var valLife='', cr_1_life='';
			for(var i=5; i<400; i++)
			{
				var valueK = i*25;
				if(valueK<100){
					valLife +=  "<li>"+ valueK +"K</li>";
				}
				else{
					var valueL = valueK/100;
					var finAssL_Cr = valueL/100;
					valLife += valueL == 100 ? "<li>"+ finAssL_Cr +"Cr</li>" : "<li>"+ valueL +"L</li>"
				}
				valueCr = i;
				if(valueCr < 1)
				{
					cr_1_life +=  "<li>"+ (crLife1 +valueCr) +"Cr</li>" ;
				}
			}
			
			$("#existingLifeCover ul, #finacialAssest ul, #finacialAssest1 ul").html(valLife + cr_1_life );
				for(var j =0; j<4; j++)
				{
					wid = $('.calcSection').eq(j).find('ul li').width();
					len = $('.calcSection').eq(j).find('ul li').length;
					newWid = len *wid;
					$('.calcSection').eq(j).find('ul').css('width', newWid);	
				}
		}
		else if($(this).find('label').text()=="Personal Loan Calculator")
		{
			var valLife='', cr_1_life='';
			valLife = "<li>25K</li>"
			for(var i=2; i<81; i++)
			{
				
				var valueK = i*25;
				if(valueK<100){
					valLife +=  "<li>"+ valueK +"K</li>";
				}
				else{
					var valueL = valueK/100;
					var finAssL_Cr = valueL/100;
					valLife += valueL == 100 ? "<li>"+ finAssL_Cr +"Cr</li>" : "<li>"+ valueL +"L</li>"
				}
				valueCr = i;
				if(valueCr < 1)
				{
					cr_1_life +=  "<li>"+ (crLife1 +valueCr) +"Cr</li>" ;
				}
			}
			
			$("#existingLifeCover ul, #finacialAssest ul, #finacialAssest1 ul").html(valLife + cr_1_life);
			for(var j =0; j<4; j++)
				{
					wid = $('.calcSection').eq(j).find('ul li').width();
					len = $('.calcSection').eq(j).find('ul li').length;
					newWid = len *wid;
					$('.calcSection').eq(j).find('ul').css('width', newWid);	
				}
		}
	});
	/* For Home Loan/Personal Loan Calculator END*/
	
	$("#existingLifeCover ul, #finacialAssest ul, #finacialAssest1 ul").html(valLife + cr_1_life );
	
	/******** generation of li *****/	
	for(var j =0; j<4;j++)
	{
		wid = $('.calcSection').eq(j).find('ul li').width();
		len = $('.calcSection').eq(j).find('ul li').length;
		newWid = len *wid;
		$('.calcSection').eq(j).find('ul').css('width', newWid);	
	}
	$( ".draggable" ).draggable({ axis: "x",
		drag: function( event, ui ) {
			
			if(dragEventFlag == false){
				dragEventFlag = true;
				_this =	$(this);
				intervalFunc(_this);
			}
		},
		stop: function(event, ui){
				clickEventFlag = false;
				dragEventFlag = false;
				//var leftPosCal = parseInt($(this).css('left'))/35;
				//var leftPos = Math.ceil(leftPosCal)*35;
				//$(".sliderHover").animate({'width':leftPos+5+'px'});
				//alert("Drag stop");
		},
		containment: ".drag",
		scroll: false 	
	});
	$( ".draggable2" ).draggable({
		containment: ".drag2"
	});
	
	$( ".draggable" ).mousedown(function(){
		clickEventFlag = true;
		
	})

	$( ".draggable" ).mouseout(function(){

	});

	$( ".draggable" ).mouseup(function(){

		$('body .dragLiAdjust').removeClass('dragLiAdjust');
		$(this).addClass('dragLiAdjust');
		dragLiAdjustFunction();
		//console.log(parseInt($(this).parents('.calcSection').find('ul').css("margin-left")));
		if(parseInt($(this).parents('.calcSection').find('ul').css("margin-left"))<=-35)
		{
			$(this).parents('.calcSection').find('.prev').addClass('active');
		}
		else if(parseInt($(this).parents('.calcSection').find('ul').css("margin-left"))>=-35)
		{
			$(this).parents('.calcSection').find('.prev').removeClass('active');
		}
		/*  */
		var leftPosCal = parseInt($(this).css('left'))/35;
		var leftPos = Math.ceil(leftPosCal)*35;
		
		var thMar = Math.abs(parseInt($(this).css('left')));
		var ulMar = thMar + 45 + Math.abs(parseInt($(this).parents('.dragBox').find('.slideImg ul').css('margin-left')));
		var ulWid = Math.abs(parseInt($(this).parents('.dragBox').find('.slideImg ul').css('width')));

	
		if( ulMar >= ulWid ){
			if($(this).parents('.calcSection').find('.draggable2').length)
			{
				$(this).parents('.calcSection').find('.draggable, .highLight ').css('left',277);
			}
			else
			{
				$(this).parents('.calcSection').find('.draggable, .highLight ').css('left',385);
			}
		}
		else if(leftPos < 350){
		
			$(this).parents('.calcSection').find('.draggable, .highLight ').css('left',leftPos);
		}
		else{
			
		}
		/*  */
		var slidePosCal = parseInt($(this).parents('.calcSection').find('.slideImg ul').css('marginLeft'))/35;
		var slidePos = Math.ceil(slidePosCal)*35;
		
		setTimeout(function(){
			dragLiAdjustFunction();
			calculationSlider();
		},200);
		clickEventFlag = false;
		dragEventFlag = false;
	})
	$('.next').click(function(){
		var marLft = parseInt( $(this).parents('.calcSection').find('ul').css('margin-left'));
		var newULWidth = (parseInt($(this).parents('.calcSection').find('ul').css('width')) - 435);
		lftPostion = parseInt($(this).parents('.calcSection').find('.draggable').css('left'));
		_this=$(this).parents('.calcSection').find('.draggable');
		var $this = $(this);
		
		$(this).parents('.dragBox').find('.prev').addClass('active');

		
		
		
		if (!$(this).parents('.calcSection').find('ul').is(':animated'))
		{
			if(Math.abs(marLft) > newULWidth)
			{
					
				dragFlag=true;
				return false;				
			}
			else
			{
					$(this).parents('.calcSection').find('ul').animate({marginLeft : '-=35px'}, 300, function(){
					incrmentalVal++;						
					calculationSlider();
					dragFlag=true;
					});
			}
		}
	});
	
	$('.prev').click(function(){
		var marLft = parseInt( $(this).parents('.calcSection').find('ul').css('margin-left'));
		lftPostion = parseInt($(this).parents('.calcSection').find('.draggable').css('left'));
		_this=$(this).parents('.calcSection').find('.draggable');
		var $this = $(this);
		
		setTimeout(function(){
			if(parseInt( $this.parents('.calcSection').find('ul').css('margin-left'))==0)
			{
				$this.parents('.dragBox').find('.prev').removeClass('active');
			}
		},500);
		
		if (!$(this).parents('.calcSection').find('ul').is(':animated'))
		{
			if(marLft >= 0)
			{
				dragFlag=true;
				return false;				
			}
			else
			{
				 $(this).parents('.calcSection').find('ul').animate({marginLeft : '+=35px'}, 300, function(){
					 dragFlag=true;
					 incrmentalVal--;
					 calculationSlider();
				 });
			}
		}
	})

$('.input_LoanAmt').blur(function(){
	/*if($(this).val()>0 && $(this).val()<=100000)
	{
		//$('#interest .draggable').animate({'left':'350px'});
		$('#liability ul').css('margin-left','0px');
		$('.input_AIR').val(8.25)
	}
	else if($(this).val()>100000)
	{
		//$('#interest .draggable').animate({'left':'390px'});
		$('#liability ul').css('margin-left','0px');
		$('.input_AIR').val(15)
	}*/
});

$('.selectCalcWrapper .radiobox').click(function(){
	var inputTxt = $(this).find('label').text();
	if(inputTxt=='Home Loan Calculator')
	{
		$('.yearWrap').show();
		$('.monthWrap').hide();
		$('#tenureType').find('label').text('Year');
		$('#finalAssest').val(0);
		$('#finalLiability').val(8);
		$('#finalCustAge').val(1);
	}
	else if(inputTxt=='Personal Loan Calculator')
	{
		$('.yearWrap').hide();
		$('.monthWrap').show();
		$('#tenureType').find('label').text('Month');
		$('#finalAssest').val(25000)
		$('#finalLiability').val(6);
		$('#finalCustAge').val(1);
	}
	pmtCalc();
	/*Reset All the values*/
	
	//$('#finacialAssest ul').animate({marginLeft:0});
	//$('#liability ul').animate({marginLeft:0});
	//$('#totalAmtPay').text(0);
	//$('#princpAmt').text(0);
	//$('#monthPayment').text(0);
	//$('#totalInterest').text(0);
	
	$('.slideWrapper').find('.draggable, .highLight ').css('left',0);
	/*Reset All the values*/
	
});

$('.selectCalcWrapper .radiobox').eq(1).click();



// Year/Month Calculation END

});
var lftPostion, prev1Action='' ;
function intervalFunc(_this){
	setInter = setInterval(function(){
		if(clickEventFlag == false || dragEventFlag == false)
		{
			clearInterval(setInter);
		}
		detectDragPosition(_this);				
		lft = parseInt(_this.css('left'));
	},4);
}
function detectDragPosition(_this)
{
	if(dragFlag == true){
		dragFlag=false;
	}else if(dragFlag == false){
		return false;
	}
	lftPostion = parseInt(_this.css('left'));
	lftPosArray =[0,2,3,3,175,400];
	prevActionArray =['prevFast','prevSlow','middleSection','nextSlow','nextFast'];
	for(var i = 0; i < lftPosArray.length ; i++)
	{
		if(lftPostion >= lftPosArray[i] && lftPostion < lftPosArray[i+1])
		{
			prev1Action = prevActionArray[i];
			break;
		}
	}
	animaredSlides(prev1Action);
	calculationSlider();
}
var final_ExstngLifeCover_new;

final_ExstngLifeCover =0;
var counterIncr;
function calculationSlider()
{	
	leftDrag = lftPostion;
	leftSlide = parseInt( _this.parents('.calcSection').find('ul').css('margin-left').replace('-',''));
	_this.parents('.calcSection').find('.highLight').css({ left : leftDrag +8, 'visibility' : 'visible'});
	totalSlideWidth =  leftSlide + leftDrag;
	//console.log("Axis total slider width" + totalSlideWidth)
	selectValue = Math.round(totalSlideWidth/ wid);
	//console.log(totalSlideWidth+'----'+wid+'---'+selectValue)
	//console.log("Wid" + wid)
	
	if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Home Loan Calculator')
	{
		finalAge =  selectValue + 1;
	}
	else if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Personal Loan Calculator')
	{	

		if(selectValue <= 25)
		{
			finalAge =  ((selectValue+1)*1);
			//alert(finalAge);
		}
	}
	
	
	
	
	//console.log("finalAge" + finalAge)
	
	
	if(selectValue <= 12)
	{
		//finalLiabilities = (selectValue * 0.5 );
	}
	
	if(selectValue <= 2000)
	{
		
		if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Home Loan Calculator')
		{
			finalFincialAssest =(selectValue * 25000 );
			finalLiabilities = ((selectValue+32) * 0.25 );
		}
		else if($('.selectCalcWrapper .radiobox.checked').find('label').text()=='Personal Loan Calculator')
		{
			console.log(selectValue);
			finalFincialAssest =((selectValue+1) * 25000 );
			finalLiabilities = ((selectValue+1) * 6);
		}
		finalFincialAssest1 =(selectValue * 5000 );
		
		
	}
	else if(selectValue > 400)
	{
		counterIncr= String(selectValue/100);
		counterIncr=parseInt(counterIncr.split('.')[1]);
		//finalLiabilities = (counterIncr+4) *2500000;
		finalFincialAssest = (counterIncr+4) *5000;
		
		
/*		if(isNaN(counterIncr))
		{
			finalLiabilities =12500000;
			finalFincialAssest=12500000;
		}
		else
		{
			finalLiabilities = (counterIncr+5) *2500000;
			finalFincialAssest = (counterIncr+5) * 2500000;
		}
*/	
	}
	
	_this.parents('.slideWrapper').find('#finalCustAge, #dragCust').val(finalAge);
	_this.parents('.calcSection').find('#finalMonthExp, #dragExpnse').val(finalExp);
	_this.parents('.slideWrapper').find('#finalAssest, #dragAssest').val(finalFincialAssest);
	_this.parents('.slideWrapper').find('#finalAssest1, #dragAssest').val(finalFincialAssest1);
	_this.parents('.slideWrapper').find('#finalLiability, #dragLiability').val(finalLiabilities);
	_this.parents('.calcSection').find('#finalFeatureGoal, #dragFutrGoal').val(final_FeatureGoal);
	_this.parents('.calcSection').find('#finalExistingLifeCover, #dragLifeCver').val(final_ExstngLifeCover);
	finalCalculation();
	
}
function finalCalculation(){
	var ageVal = parseInt($('#finalCustAge').val());
	var expenseVal = parseInt($('#finalMonthExp').val());
	var assestVal = parseInt($('#finalAssest').val());
	var assestVal1 = parseInt($('#finalAssest1').val());
	var liabilityVal = parseInt($('#finalLiability').val());
	var featureGoalVal = parseInt($('#finalFeatureGoal').val());
	var lifeCoverVal = parseInt($('#finalExistingLifeCover').val());
	
	var ageLmt =25;
	ageVal=25;
	/*if(ageVal <= 50)
	{
		ageVal=20;
	}
	else
	{
		ageVal=12;
	}*/
	var result1 = (expenseVal * 1 * ageVal);
	var result2 = liabilityVal - assestVal - lifeCoverVal + featureGoalVal;
	var finalResult = parseInt( result1 + result2);
	var lacsRes = finalResult/100000;
	$('.finalResult span').removeClass('adeqIns').text(lacsRes+' Lacs')
	if(finalResult<=0)
	{
		$('.finalResult span').addClass('adeqIns').text('Adequately Insured');
	}
	if(finalResult >= 10000000)
	{
		var res =finalResult /10000000;
		$('.finalResult span').removeClass('adeqIns').text(res +' Cr')
	}
	pmtCalc();
	
// Generate Hichart START
var intRateVal = ((Math.ceil(pmt*($('.input_LoanPeriod').val()*12))-$('.input_LoanAmt').val())*100)/Math.ceil(pmt*($('.input_LoanPeriod').val()*12))

}
function animaredSlides(prev1Action)
{
	var marLft = parseInt( _this.parents('.calcSection').find('ul').css('margin-left'));
	var newULWidth = (parseInt(_this.parents('.calcSection').find('ul').css('width')) - 415);
	
	
	if(prev1Action == 'prevSlow')
	{
		if(marLft >= 0)
		{
			dragFlag=true;
			return false;	
		}
		else
		{
			// $('ul').animate({marginLeft : '+=30px'}, duration, function(){dragFlag=true;});
			 _this.parents('.calcSection').find('ul').animate({marginLeft : '+=1px'}, duration, function(){dragFlag=true;});

		}
	}
	else if(prev1Action == 'prevFast')
	{
		if(marLft >= 0)
		{
			dragFlag=true;
			return false;				
		}
		else
		{
		 _this.parents('.calcSection').find('ul').animate({marginLeft : '+=5px'}, duration, function(){dragFlag=true;});
		}
	}
	else if(prev1Action == 'nextFast')
	{
		if(Math.abs(marLft) > newULWidth)
		{
				
			dragFlag=true;
			return false;				
		}
		else
		{
			 _this.parents('.calcSection').find('ul').animate({marginLeft : '-=5px'}, duration, function(){dragFlag=true;});
		}
	}
	else if(prev1Action == 'nextSlow')
	{

		if(Math.abs(marLft) > newULWidth)
		{
			dragFlag=true;
				return false;		
		}
		else
		{
			 _this.parents('.calcSection').find('ul').animate(duration, function(){dragFlag=true;});
		}
	}
	else
	{
		dragFlag=true;

	}
}



// Calculator Functionality START
function PMT(i, n, p) {
	//alert(123)
	 return i * p * Math.pow((1 + i), n) / (1 - Math.pow((1 + i), n));
}
var pmt;
function CalculatePMT(input_LoanAmt, input_AIR, input_LoanPeriod, input_Payment) {
	//alert($('.' + input_AIR).val())
	 var i = ($('.' + input_AIR).val()/100) / 12;
	 var n = $('.' + input_LoanPeriod).val();
	 var p = $('.' + input_LoanAmt).val();
	 
	 //alert(i+'-----------'+n+'-----------'+p);
	 //var inpSelected = $('.inpRadio .checked').find('label').text();
	 var inpSelected = $('.selectCalcWrapper .checked').find('label').text();
	 
	 if(inpSelected=='Home Loan Calculator')
		{
			n = n*12	
		}
	else if(inpSelected=='Personal Loan Calculator'){
			n=n;
	}
		pmt = PMT(i, n, -p);
	 $('#' + input_Payment).val(Math.round(pmt));
	 //alert("pmt" + pmt)
}

//PMT Calculation
function pmtCalc()
{
	//var inpSelected = $('.inpRadio .checked').find('label').text();
	var inpSelected = $('.selectCalcWrapper .checked').find('label').text();
	CalculatePMT('input_LoanAmt', 'input_AIR', 'input_LoanPeriod','input_Payment');
	$("#princpAmt").text(addCommas($('.input_LoanAmt').val())); //Principle Amount
	$('#monthPayment').text(addCommas($('#input_Payment').val())); //Monthly Payment
	
	//$.format($('.input_LoanAmt').val(), "c", "hi-IN");
	//$('#totalAmtPay').text(Math.ceil(pmt*$('.input_LoanPeriod').val())); //Total Amount Payable
	//$('#totalInterest').text(Math.ceil(pmt*$('.input_LoanPeriod').val())-$('.input_LoanAmt').val()); //Total Interest Payable
	
	if(inpSelected=='Home Loan Calculator')
	{
		//alert('year')
		$('#totalAmtPay').text(addCommas(Math.ceil(pmt*($('.input_LoanPeriod').val()*12)))); //Total Amount Payable
		$('#totalInterest').text(addCommas(Math.ceil(pmt*($('.input_LoanPeriod').val()*12))-$('.input_LoanAmt').val())); //Total Interest Payable			
	}
	else if(inpSelected=='Personal Loan Calculator')
	{			
		//alert('month')
		$('#totalAmtPay').text(addCommas(Math.ceil(pmt*$('.input_LoanPeriod').val()))); //Total Amount Payable
		$('#totalInterest').text(addCommas(Math.ceil(pmt*$('.input_LoanPeriod').val())-$('.input_LoanAmt').val())); //Total Interest Payable
	}
}

$(function(){
	$('.submit').click(function(){
		
		
	});
	
	// Numbers Only Function
	$('.calcWrapper input').keypress(function (e) {
		return numbersonly(e);
	});
	
});

//Numbers Only
function numbersonly(e){
	var unicode=e.charCode? e.charCode : e.keyCode
	if (unicode!=8 && unicode!=9 && unicode!=46){ //if the key isn't the backspace key (which we should allow)
	if (unicode<48||unicode>57) //if not a number
	return false //disable key press
	}
}

function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function dragLiAdjustFunction(){
	var ths = $('.dragLiAdjust').parents('.dragBox').find('.slideImg ul');
	var a = b = c = 0, v = 35, m = Math.abs(parseInt(ths.css('margin-left')));
	for(var i=0; i<ths.find('li').length; i++){
		a=v*i, c=a+35, b=a+17;
		if(m>=a && m<=b){ m = a; break; }
		else if(m>b && m<=c){ m = c; break; }
	}
	ths.css({'margin-left': '-'+m+'px'});
}


// Calculator Functionality END
