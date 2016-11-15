<!--
/*********************************
*  Design : S. M. Rubiyet        *
*  UI : Sifuddin Lokman          *
*  Programmer : Tarek Raihan     *
*  Date : 09-11-2016			 *
**********************************/
-->
<section id="home_header">
</section>
<section id="card">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3">
                <div class="home_loan_left_bar">
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
                                                                    <div class="hideVal">25000</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->

                                                        </div>
                                                        <!--Amount Already Saved END-->

                                                        <div class="slideWrapper" id="avgSave">

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


                                                        <div class="slideWrapper" id="interest">

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
                                                                    <div class="hideVal">0.5</div>
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
                                <a class="cart_anchor">

                                </a>
                                <a class="cart_anchor01">

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


<script>
    $(document).ready(function(){

        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='30'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
            loading_show();

//            var mainarray = new Array();

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


            var main_string = home_i_want_list+home_user_list;
            main_string = main_string.substring(1, main_string.length);
//            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>home_loan/ajax_get_home_loan",
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchHomeLoan").html(msg);

                }
            });
        }

        $("input[type='checkbox'], input[type='radio']").on( "click", loadData );

        loadData();

        $('#searchHomeLoan').on('click', '.more_info', function (){

            var  formData = $(this).data();
            var loan_id = formData.loan_id;
            console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");

        });

        $('#searchHomeLoan').on('click', '.rePaymentSchedule', function (){

            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);
            $('#rePaymentSchedule'+repayment).html('<iframe  src="http://test.finager.com/en/home_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");

        });

    });

</script>

<script>

    $(document).on('click','.add-to-compare',function(){


        $("#hiden_div").animate({bottom:'0px'});

        $('html, body').animate({

        });

        if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
            alert("Sorry");
        }else{
            if($(".cart_anchor").hasClass("img_active")){
                //Select item image and pass to the function
                var itemImg = $(this).parents().siblings().find('.home_loan_logo').eq(0);
                flyToElement($(itemImg), $('.cart_anchor01'));
                $(".cart_anchor01").addClass("img_active");
                $(this).addClass("hidden");

                var itemImg = $(this).parents().siblings().find('.home_loan_logo').eq(0);
                var  formData = $(this).data();
                var home_id= "home_id="+formData.home_id;
                alert(1);
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
                },850);

            }
            else{
                //Select item image and pass to the function
                var itemImg = $(this).parents().siblings().find('.home_loan_logo').eq(0);
                flyToElement($(itemImg), $('.cart_anchor'));

                $(".cart_anchor").addClass("img_active");
                $(this).addClass("hidden");

                var itemImg = $(this).parents().siblings().find('.home_loan_logo').eq(0);
                var  formData = $(this).data();
                var home_id = "home_id="+formData.home_id;
                alert(2);

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
                },850);

            }
        }

    });

    $(document).on('click','.compare-cross-btn',function(){

        var collected_home_loan = $(this).prev().attr("data-home_id");

        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-home_id');
            if(parseInt(collected_home_loan)==parseInt(index)){
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

    $('#go_compare').click(function(){
        //alert(1);
        var  formData = $('.cart_anchor').children('img').data();
        var card_id1 = "card_id1="+formData.card_id;

        var  formData = $('.cart_anchor01').children('img').data();
        var card_id2 = "&card_id2="+formData.card_id;

        var card_ids = card_id1+card_id2;
        if(card_id1 != '' && card_id2 != ''){
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>card/ajax_go_card_compare_page",
                data: card_ids,
                success: function(msg)
                {
                    if(msg != 'error'){

                        window.location.href = "<?php echo base_url();?>en/card_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 card for compare ! ")
        }

    });

</script>


