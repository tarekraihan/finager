<!--

/*********************************

*  Design : S. M. Rubiyet        *

*  UI : Sifuddin Lokman          *

*  Programmer : Tarek Raihan     *

*  Date : 09-11-2016		 *

**********************************/

-->



<section id="home_header">

</section>

<section id="card">

    <div class="container">

        <div class="row">

            <!-- Left bar query content start -->

            <div class="col-sm-3 col-xs-3">

                <div class="home_loan_left_bar" id="sidebar">

                    <!-- slider range sidebar start-->

                    <div class="card_query">

                        <p>I Want </p>

                        <div class="query_radio">

                            <?php

                            $card_user = $this->Select_model->select_all('home_loan_looking_for','ASC');

                            foreach($card_user->result() as $row){

                                ?>

                                <label class="material_radio_group">

                                    <input type="radio" name="iWant" id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>

                                    <span class="material_check_radio"></span>

                                    <?php echo $row->home_loan_looking_for;?>

                                </label><br/>

                            <?php

                            }

                            ?>

                        </div>

                    </div>

                    <div class="row">

                        <div class="span8">

                            <div class="singleColumn page common">

                                <div class="htmltextarea section">

                                    <div class="innerMdlWrapper">

                                        <!-- Middle Inner START-->

                                        <div class="innerMdlInner">

                                            <div class="calcWrapper">

                                                <div class="clear"></div>

                                                <!--Calculator Banner END-->

                                                <div class="selectCalcWrapper" style="display:none;">

                                                    <div class="radiobox">

                                                        <input type="radio" id="savingCalculator" value="" title="Year" name="selCalc">

                                                        <label for="savingCalculator">Home Loan Calculator</label>

                                                    </div>

                                                    <div class="radiobox">

                                                        <input type="radio" id="depositCalculator" value="" title="Year" name="selCalc"  checked="checked">

                                                        <label for="depositCalculator">Personal Loan Calculator</label>

                                                    </div>

                                                </div>



                                                <div class="savingsContainer emiContainer">



                                                    <div class="leftCont">



                                                        <!--Amount Already Saved START-->



                                                        <div class="slideWrapper" id="alreadySaved">
                                                            <div class="inputWrapper"> <span class="rupee"></span>
                                                                <div class="inputField">
                                                                    <div class="inpLft"></div>
                                                                    <div class="inpMdl">
                                                                        <input type="text" name="" value="0" id="finalAssest" class="input_LoanAmt"/>
                                                                    </div>
                                                                    <div class="inpRt"></div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer">
                                                                <div class="calcSection calborder">
                                                                    <div class="dragBox">
                                                                        <div class="drag"> <span></span>
                                                                            <div class="sliderHover"></div>
                                                                            <div class="draggable ui-widget-content drag3"> </div>
                                                                       </div>

                                                                        <div class="clear"></div>

                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->

                                                                        <div class="slideImg" id="finacialAssest">

                                                                            <ul>

                                                                            </ul>

                                                                        </div>

                                                                        <div class="prev"></div>

                                                                        <div class="next active"></div>
                                                                    </div>
                                                                    <div class="hideVal">50000</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->
                                                        </div>
                                                        <!--Amount Already Saved END-->
                                                        <div class="slideWrapper hidden" id="avgSave">
                                                            <div class="inputWrapper">
                                                                <div class="inputField">
                                                                    <div class="inpLft"></div>
                                                                    <div class="inpMdl">
                                                                        <input type="text" name="" value="1" id="finalCustAge" maxlength="3" class="input_LoanPeriod"/>
                                                                    </div>
                                                                    <div class="inpRt"></div>
                                                                </div>
                                                                <div class="inpRadio">
                                                                    <div id="tenureType">
                                                                        <label>Year</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer yearWrap" style="display:none">
                                                                <div class="calcSection calborder">
                                                                    <div class="dragBox">
                                                                        <div class="drag"> <span></span>
                                                                            <div class="draggable ui-widget-content drag3"></div>
                                                                        </div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="custAge">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="prev"></div>
                                                                        <div class="next active"></div>
                                                                    </div>
                                                                    <div class="hideVal">5</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->
                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer monthWrap">
                                                                <div class="calcSection calborder">
                                                                    <div class="dragBox">
                                                                        <div class="drag2"> <span></span>
                                                                            <div class="draggable draggable2 ui-widget-content drag3"></div>
                                                                        </div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="monthExp">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <!--<div class="prev"></div><div class="next active"></div>-->
                                                                    </div>
                                                                    <div class="hideVal">5</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->
                                                        </div>
                                                        <div class="slideWrapper" id="interest">
                                                            <div class="inputWrapper">
                                                                <div class="inputField">
                                                                    <div class="inpLft"></div>
                                                                    <div class="inpMdl">
                                                                        <input type="text" name="" value="8" id="finalLiability" class="input_AIR"/>
                                                                    </div>
                                                                    <div class="inpRt"></div>
                                                                </div>
                                                                <span class="perc">Year</span>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer">
                                                                <div class="calcSection">
                                                                    <div class="dragBox">
                                                                        <div class="drag"> <span></span>
                                                                            <div class="draggable ui-widget-content drag3"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="liability">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="prev"></div>
                                                                        <div class="next active"></div>
                                                                    </div>
                                                                    <div class="hideVal">1</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->
                                                        </div>
                                                        <!--<a href="javascript:;" class="submit">Submit</a>-->
                                                        <input type="hidden" id="input_Payment" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider range sidebar start-->

                    <div class="card_query">
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                            $card_user = $this->Select_model->select_all('home_loan_user','ASC');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->home_loan_user;?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left bar query content end -->
            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9">
                <div id="searchHomeLoan">
                    <div id="loading" class="text-center" style="margin-top: 150px"></div>
                </div>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>

<section id="hiden_div">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3 col-sm-12">
                <div class="card-holder">
                    <div class="card-bg">
                        <img src="<?php echo base_url();?>resource/front_end/images/hidendivshead.png" alt="" />
                        <div class="hidden_div relative">
                            <div class="hidden_div_container">
                                <ul class="no-padding pull-left no-list-style">
                                    <li>
                                    </li>
                                    <li></li>
                                </ul>
                                <a class="cart_anchor compare-card">
                                </a>
                                <a class="cart_anchor01 compare-card">
                                </a>
                                <a href="javascript:void(0);" id="go_compare" class="btn common-btn v-middle-btn">
                                    Compare
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="<?php echo base_url();?>resource/front_end/js/personal-loan-calculator.js"></script>
<script type="text/javascript">
$(window).on('scroll', function (){
	if ($(window).scrollTop() > 350){
	  $('.home_loan_left_bar').addClass('fixedElement');
	}if($(window).scrollTop()<350){
	  $('.home_loan_left_bar').removeClass('fixedElement');
	}if($(window).scrollTop() > 2260){
	  $('.home_loan_left_bar').removeClass('fixedElement');
	}
});
</script>
<script>
    $(document).ready(function(){
        function overlay(s, l) {
            $('.overlay').remove();
            if( s )
                $('body').append('<div class="overlay" style="width:100%;height:100%;position:fixed;display:block;background:#000;opacity:0.7;top:0;left:0;z-index:1000;"></div>');
            if( l )
                $('.overlay').html('<div style="position:absolute;top:'+(document.documentElement.clientHeight/2)+'px;left:'+(document.documentElement.clientWidth/2)+'px;"><img src="<?php echo base_url();?>resource/front_end/images/loader.gif" width="100"></div>');
            }
        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
            loadData(cur_page);
        });

        function loadData( page = null ){
//            loading_show();
			 var amount = $('#finalAssest').val();
            var principal_amount = "&principal_amount="+amount;
            var month = $('#finalLiability').val();
            var month_limit = "&month_limit="+month;
            var home_i_want = new Array();
            $('input[name="iWant"]:checked').each(function(){
                home_i_want.push($(this).val());
            });
            var home_i_want_list = "&home_i_want="+home_i_want;
            var home_user = new Array();
            $('input[name="iAm"]:checked').each(function(){
                home_user.push($(this).val());
            });
            var home_user_list = "&home_user="+home_user;
            var main_string = home_i_want_list+home_user_list+principal_amount+month_limit;
            main_string = main_string.substring(1, main_string.length);
            var page_count ='';
            if( page != null ){
                page_count = page ;
            }
            var url_str = "<?php echo base_url();?>home_loan/ajax_get_home_loan/" + page_count;
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
//                    loading_show();
                    overlay(true,true);
                },
                success: function(msg){
//                    loading_hide();
                    overlay(false);
                    $("#searchHomeLoan").html(msg);
                }
            });
        }

        loadData(page = null);
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData(page = null);
        } );
		// Stop dragging calculator and fire event for search
         $(".draggable").on("dragstop",function(ev,ui){
            setTimeout(function(){ //Updated by Tarek on 14-05-2017
                //alert($("#finalAssest").val());
                loadData(page = null);
            }, 1000);
        });

        $("#finalAssest,#finalLiability").change(function () {
            //alert($("#finalAssest").val());
            loadData(page = null);
        });

        $(".leftCont").find(".next").click(function(){
            setTimeout(function(){ //Updated by Tarek on 14-05-2017
                //alert($("#finalAssest").val());
                loadData(page = null);
            }, 1000);
        });

        $(".leftCont").find(".prev").click(function(){
            setTimeout(function(){ //Updated by Tarek on 14-05-2017
                //alert($("#finalAssest").val());
                loadData(page = null);
            }, 1000);
        });
        // Stop dragging calculator and fire event for search
        $('#searchHomeLoan').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var loan_id = formData.loan_id;
            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");

            if($("#moreInfo"+loan_id).hasClass('in')){
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> Less info");
            }else{
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> more info");
            }
        });

        $('#searchHomeLoan').on('click', '.rePaymentSchedule', function (){
			var amount = $('#finalAssest').val();
            var month = $('#finalCustAge').val();
            var  formData = $(this).data();
            var repayment = formData.repayment;
            var  formData = $(this).data();
            var repayment = formData.repayment;
            $('#rePaymentSchedule'+repayment).html('<iframe  src="<?php echo base_url();?>en/home_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");
        });
    });

    $(document).on('click','.add-to-compare',function(){
        $("#hiden_div").animate({bottom:'0px'});
        $('html, body').animate({
        });
        if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
            alert("Sorry");
        }else{
            if($(".cart_anchor").hasClass("img_active")){
                // prev fly to element

				/*

                //Select item image and pass to the function

                var itemImg = $(this).parents('.full-card').find('.selected_card').eq(0);

                flyToElement($(itemImg), $('.cart_anchor01'));

                $(".cart_anchor01").addClass("img_active");

                $(this).addClass("hidden");



               // var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);

                var  formData = $(this).data();

                var home_id = "home_id="+formData.home_id;



                setTimeout(function(){

                    $.ajax

                    ({

                        type: "POST",

                        url: "<?php echo base_url();?>home_loan/ajax_compare_home_loan_image",

                        data: home_id,

                        success: function(msg)

                        {

                            $(".cart_anchor01").html(msg);

                        }

                    });

                });

				*/

				var cart01 = $('.cart_anchor01');
				var imgtodrag01 = $(this).parents('.full-card').find('.selected_card').eq(0);
				if (imgtodrag01) {
					var imgclone01 = imgtodrag01.clone()
						.offset({
						top: imgtodrag01.offset().top,
						left: imgtodrag01.offset().left
					}).css({'opacity': '0.7',
							'position': 'absolute',
							'height': '150px',
							'width': '150px',
							'z-index': '100'
					}).appendTo($('body')).animate({
						'top': cart01.offset().top,
							'left': cart01.offset().left + 10,
							'width': 75,
							'height': 75
					}, 1000, 'easeInOutExpo');
					setTimeout(function () {
						cart01.effect("shake", {
							times: 2
						}, 200);
					}, 1000);
					imgclone01.animate({
						'width': 0,
						'height': 0
					}, function () {
						$(this).detach()
					});
				}

				$(".cart_anchor01").addClass("img_active");
                $(this).addClass("hidden");
				var  formData = $(this).data();
                var home_id = "home_id="+formData.home_id;
                setTimeout(function(){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>home_loan/ajax_compare_home_loan_image",
                        data: home_id,
                        success: function(msg){
                            $(".cart_anchor01").html(msg);
                        }
                    });
                });
            }else{

				/*

                //Select item image and pass to the function
                var itemImg = $(this).parents('.full-card').find('.selected_card').eq(0);
                flyToElement($(itemImg), $('.cart_anchor'));
                $(".cart_anchor").addClass("img_active");
                $(this).addClass("hidden");
                var itemImg = $(this).parents('.full-card').find('.selected_card').eq(0);
                var  formData = $(this).data();

                var home_id = "home_id="+formData.home_id;

                //alert(home_id);



                setTimeout(function(){

                    $.ajax

                    ({

                        type: "POST",

                        url: "<?php echo base_url();?>home_loan/ajax_compare_home_loan_image",

                        data: home_id,

                        success: function(msg)

                        {

                            $(".cart_anchor").html(msg);

                        }

                    });

                });

				*/


				var cart = $('.cart_anchor');
				var imgtodrag = $(this).parents('.full-card').find('.selected_card').eq(0);
				if (imgtodrag) {
					var imgclone = imgtodrag.clone()
						.offset({
						top: imgtodrag.offset().top,
						left: imgtodrag.offset().left
					}).css({'opacity': '0.7',
							'position': 'absolute',
							'height': '150px',
							'width': '150px',
							'z-index': '100'
					}).appendTo($('body')).animate({
						'top': cart.offset().top + 10,
							'left': cart.offset().left + 10,
							'width': 75,
							'height': 75
					}, 1000, 'easeInOutExpo');
                    setTimeout(function () {
						cart.effect("shake", {
							times: 2
						}, 200);
					}, 1000);

					imgclone.animate({
						'width': 0,
						'height': 0
					}, function () {
						$(this).detach()
					});
				}
				var  formData = $(this).data();
                var home_id = "home_id="+formData.home_id;
				setTimeout(function(){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>home_loan/ajax_compare_home_loan_image",
                        data: home_id,
                        success: function(msg){
                            $(".cart_anchor").html(msg);
                        }
                    });
                });

				$(".cart_anchor").addClass("img_active");
				$(this).addClass("hidden");
            }
        }
    });
    $(document).on('click','.compare-cross-btn',function(){
        var collected_card = $(this).prev().attr("data-home_id");
        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-home_id');
            if(parseInt(collected_card)==parseInt(index)){
                obj.removeClass("hidden");
            }
        });


        $(this).parent(".cart_anchor").removeClass("img_active");
        $(this).parent(".cart_anchor").html('');
        $(this).addClass("hidden");
    });


    $(document).on('click','.compare-cross-btn',function(){
        $(this).parent(".cart_anchor01").removeClass("img_active");
        $(this).parent(".cart_anchor01").html('');
    });

    $(document).on('click','.compare-cross-btn',function(){
        var empty = $(this).parents(".hidden_div_container").find("a");
        $(".compare-card").each(function(){
            if(!$(".cart_anchor").hasClass('img_active') && !$(".cart_anchor01").hasClass('img_active')){
                $("#hiden_div").fadeOut(1500);
            }
        });
    });

    $('#go_compare').click(function(){
        var  formData = $('.cart_anchor').children('img').data();
        var home_id1 = "home_id1="+formData.home_id;
        var  formData = $('.cart_anchor01').children('img').data();
        var home_id2 = "&home_id2="+formData.home_id;
        var amount = $('#finalAssest').val();
        var principal_amount = "&principal_amount="+amount;
        var month = $('#finalCustAge').val();
        var month_limit = "&month_limit="+month;
        var home_ids = home_id1+home_id2+principal_amount+month_limit;
        if(home_id1 != '' && home_id2 != ''){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>home_loan/ajax_go_compare_page",
                data: home_ids,
                success: function(msg){
                    if(msg != 'error'){
                        window.location.href = "<?php echo base_url();?>en/home_loan_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 card for compare ! ")
        }
    });
</script>



