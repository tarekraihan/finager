<style type="text/css">
    .savingsContainer .leftCont {
        padding: 0 0 0 0;
    }
    .calcSection .dragBox .drag {
        width: 200px;
    }
    .calcSection .dragBox .next {
        right: 103px;
    }
    .calcSection .dragBox .drag2 {
        width: 201px;
    }
    .monthWrap .calcSection .dragBox {
        width: 215px;
    }
    .calcSection .dragBox .slideImg {
        width: 210px;
    }
    .monthWrap .calcSection .dragBox .slideImg {
        width: 207px;
    }
    .calcSection .dragBox .drag span {
        background: none;
    }
    .calborder {
        border-bottom:0px solid #DADADA;
    }
    .card_query_fdr {
        border-bottom: 2px solid #DADADA;
        height: 165px;
    }
	
	.pagination-centered{position:relative; top:0; right:0;}

</style>



<section id="mony_max_header"></section>

<section id="fdr_loan">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3">
                <div class="home_loan_left_bar">
                    <div class="card_query">
                        <p>Select Deposit Amount</p>
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
                                                                        <div class="hideVal">25000</div>
                                                                    </div>
                                                                </div>
                                                                <!--Calculator Section END-->

                                                            </div>
                                                            <!--Amount Already Saved END-->

                                                            <div style="display:none;" class="slideWrapper" id="avgSave">

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
                                                                            <!--<div class="prev"></div>
                                                                                                <div class="next active"></div>-->
                                                                        </div>
                                                                        <div class="hideVal">5</div>
                                                                    </div>
                                                                </div>
                                                                <!--Calculator Section END-->
                                                            </div>


                                                            <div style="display:none;" class="slideWrapper" id="interest">

                                                                <div class="inputWrapper">
                                                                    <div class="inputField">
                                                                        <div class="inpLft"></div>
                                                                        <div class="inpMdl">
                                                                            <input type="text" name="" value="8" id="finalLiability" class="input_AIR"/>
                                                                        </div>
                                                                        <div class="inpRt"></div>
                                                                    </div>
                                                                    <span class="perc">%</span>
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
                                                                        <div class="hideVal">10000</div>
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
                    </div>
                    <div class="card_query_fdr">
                        <p>Tenure</p>
                        <div class="fdrTenurepadding">

                            <?php
                            $tenure = $this->Select_model->select_all('money_maxi_choose_your_benefit','DESC');
                            foreach($tenure->result() as $row){
                                ?>
                                <div class="fdr_tenure pull-left">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="tenure" value="<?php echo $row->id; ?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->your_benefit; ?> Times
                                </label><br/>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
            </div>
            <!-- Left bar query content end -->

            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9">
                <div id="moneyMaximizerSearch">
                    <div id="loading" class="text-center"></div>
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
                                <a class="cart_anchor01 comapre-card">

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
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/money-max.js"></script>

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
<script type="text/javascript">

    $(document).on('click','#pagination a',function(e){
        e.preventDefault();
        var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
        loadData(cur_page);
        console.log(cur_page);
    });


    function loading_show(){
        //alert();
        $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50'  style='margin-top:150px'/>").fadeIn('fast');
    }
    function loading_hide(){
        $('#loading').html("");
    }

    function loadData( page = null ){
        loading_show();


        var maximizer_tenure = new Array();
        $('input[name="tenure"]:checked').each(function(){
            maximizer_tenure.push($(this).val());
        });

        var maximizer_tenure_list = "&maximizer_tenure="+maximizer_tenure;

        var amount = $('#finalAssest').val();

//        localStorage.setItem("deposit_amount", amount);
        var deposit_amount = "&deposit_amount="+amount;


        var main_string = maximizer_tenure_list+deposit_amount;
        main_string = main_string.substring(1, main_string.length);
        var page_count ='';
        if( page != null ){
            page_count = page ;
        }
        var url_str = "<?php echo base_url();?>money_maximizer/ajax_get_money_maximizer/" + page_count;
        console.log(main_string);
        $.ajax
        ({
            type: "POST",
            url: url_str,
            data: main_string,
            cache: false,
            beforeSend: function(){
                loading_show()
            },
            success: function(msg)
            {

                loading_hide();
                // console.log(msg);

                $("#moneyMaximizerSearch").html(msg);

            }
        });
    }

    loadData( page = null );
    $("input[type='checkbox'], input[type='radio']").on( "click", function() {
        loadData( page = null );
    } );


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

    $("#alreadySaved").find(".next").click(function(){
        setTimeout(function(){ //Updated by Tarek on 14-05-2017
            //alert($("#finalAssest").val());
            loadData(page = null);
        }, 1000);
    });

    $("#alreadySaved").find(".prev").click(function(){
        setTimeout(function(){ //Updated by Tarek on 14-05-2017
            //alert($("#finalAssest").val());
            loadData(page = null);
        }, 1000);
    });

    //for show hide (more info & Available Offer)

         $('#moneyMaximizerSearch').on('click', '.more_info', function (){
             var  formData = $(this).data();
             var maximizer_id = formData.maximizer_id;
             console.log(maximizer_id);
             $("#moreInfo"+maximizer_id).toggleClass("in");
         });
        /*
         $('#searchDPS').on('click', '.availableOffer', function (){
         var  formData = $(this).data();
         var available_offer = formData.available_offer;
         console.log(available_offer);

         $('#availableOffer'+available_offer).toggleClass("in");
         $('#moreInfo'+available_offer).removeClass("in");
        */
         //});

</script>


<script>

    $(document).on('click','.add-to-compare',function(){

        $("#hiden_div").animate({bottom:'0px'});

        // For card fly START
        if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
            alert("Sorry");
        }

        if($(".cart_anchor").hasClass("img_active")){

            var cart01 = $('.cart_anchor01');
            var imgtodrag01 = $(this).parents('.full-card').find('.selected_card').eq(0);
            if (imgtodrag01) {
                var imgclone01 = imgtodrag01.clone()
                    .offset({
                        top: imgtodrag01.offset().top,
                        left: imgtodrag01.offset().left
                    })
                    .css({
                        'opacity': '0.7',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '100'
                    })
                    .appendTo($('body'))
                    .animate({
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
            var maximizer_id = "maximizer_id="+formData.maximizer_id;

            setTimeout(function(){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>money_maximizer/ajax_compare_money_maximizer_image",
                    data: maximizer_id,
                    success: function(msg)
                    {
                        $(".cart_anchor01").html(msg);
                    }
                });
            });


        }

        else{
            var cart = $('.cart_anchor');
            var imgtodrag = $(this).parents('.full-card').find('.selected_card').eq(0);
            if (imgtodrag) {
                var imgclone = imgtodrag.clone()
                    .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                    .css({
                        'opacity': '0.7',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '100'
                    })
                    .appendTo($('body'))
                    .animate({
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
            var maximizer_id = "maximizer_id="+formData.maximizer_id;
            //alert(home_id);

            setTimeout(function(){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>money_maximizer/ajax_compare_money_maximizer_image",
                    data: maximizer_id,
                    success: function(msg)
                    {
                        $(".cart_anchor").html(msg);
                    }
                });
            });

            $(".cart_anchor").addClass("img_active");
            $(this).addClass("hidden");

        }


    });


    $(document).on('click','.compare-cross-btn',function(){
        //alert();

        var collected_card = $(this).prev().attr("data-maximizer_id");
        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-maximizer_id');
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
        //alert(1);
        var  formData = $('.cart_anchor').children('img').data();
        var maximizer_id1 = "maximizer_id1="+formData.maximizer_id;

        var  formData = $('.cart_anchor01').children('img').data();
        var maximizer_id2 = "&maximizer_id2="+formData.maximizer_id;

        var maximizer_ids = maximizer_id1+maximizer_id2;
        if( maximizer_id1 != '' && maximizer_id2 != '' ){
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>millionaire/ajax_go_compare_page",
                data: millionaire_ids,
                success: function(msg)
                {
                    if(msg != 'error'){

                        window.location.href = "<?php echo base_url();?>en/millionaire_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 card for compare ! ")
        }


    });
</script>