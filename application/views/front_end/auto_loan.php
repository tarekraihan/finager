<style type="text/css">

    .sidebar-absolute{
        /*transition: all 1s ease;*/
    }
    .sidebar-absolute-bottom{
        position: absolute;
        width: 262px;
        bottom: 35px;
        left: 15px;
    }
    .fixed {
        position: fixed;
        top: 0px;
        width: 262.5px;
    }
    .sidebar_parent{
        position: relative;
        min-height: 700px;;
    }
    #sidebar{
        margin-top: 0;
    }

</style>

<section id="auto_header">
</section>

<!--Filter bar by bank START -->
<div class="container">
    <section id="filter-bar">
        <div class="row">
            <div class="col-md-3">
                <div class="bank-filter">
                    <p class="bank-small-filter">50 of 50 results filtered by:</p>
                    <div class="bank-big-filter">

                        <!--<div class="dropdown mega-dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                        </div>-->
                        <ul class="filter-by">
                            <li class="dropdown mega-dropdown">
                                <a href="javascript:;" class="dropdown-toggle">
                                    Filter By: Bank
                                        <span>
                                           <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </span>
                                </a>

                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li>
                                        <div id="filter-carousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li class="" data-slide-to="0" data-target="#carousel"></li>
                                                <li class="active" data-slide-to="1" data-target="#carousel"></li>
                                            </ol>
                                            <div class="carousel-inner">

                                                <div class="item active row">
                                                    <?php
                                                    $selected_bank_ids = array();
                                                    if(isset($this->session->userdata['auto_loan_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['auto_loan_bank_ids']);
                                                        foreach($bank_ids as $bank_id){
                                                            $selected_bank = explode("=",$bank_id);
                                                            array_push($selected_bank_ids,$selected_bank[0]);
                                                        }
                                                    }

                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,0);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="item row">
                                                    <?php
                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,15);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="item row">
                                                    <?php
                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,30);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="item row">
                                                    <?php
                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,45);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <a data-slide="prev" role="button" href="#filter-carousel" class="left">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </a>
                                                    <a data-slide="next" role="button" href="#filter-carousel" class="right">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                </div>

                                                <div class="col-sm-6"></div>

                                                <div class="col-sm-3">
                                                    <a class="btn-filter-clear" href="javascript:void(0);" id="clear_all">
                                                        <span>
                                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                                        </span>
                                                        Clear All
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 no-padding">
                <ul class="filter-list">

                </ul>
            </div>
            <div class="col-md-1 no-padding-left">
                <a class="btn-filter-clear"  href="javascript:void(0);" id="clear_all">
                    <span>
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                    </span>
                    Clear All
                </a>
            </div>
        </div>
    </section>
</div>
<!--Filter bar by bank END -->

<section id="card">

    <div class="container">

        <div class="row">

            <!-- Left bar query content start -->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_parent">

				<div id="sticky-anchor"></div>

                <div class="home_loan_left_bar" id="sidebar">

                    <!-- slider range sidebar start-->

                    <div class="card_query">

                        <p>I Want </p>

                        <div class="query_radio">

                            <?php

                            $loan_user = $this->Select_model->select_all('auto_i_want','ASC');

                            foreach($loan_user->result() as $row){

                                ?>

                                <label class="material_radio_group">

                                    <input type="radio" name="i_want" id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"  <?php echo ($this->session->userdata("auto_loan_i_want") ==$row->id) ? 'checked' :'' ?>/>

                                    <span class="material_check_radio"></span>

                                    <?php echo $row->i_want;?>
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

                                                        <label for="savingCalculator">Car Loan Calculator</label>

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

                                                                    <div class="hideVal">100000</div>

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

                                                                <span class="perc">Month</span>

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
                                                                            <ul></ul>
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
                            $card_user = $this->Select_model->select_all('auto_i_am','ASC');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="i_am" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"  <?php echo ($this->session->userdata("auto_loan_i_am") ==$row->id) ? 'checked' :'' ?>/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->i_am;?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div id="sidebar-bottom"></div>
                </div>
            </div>
            <!-- Left bar query content end -->
            <!-- Right bar content start -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-content-area">
                <div id="searchAutoLoan">
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
                                    <li></li>
                                    <li></li>
                                </ul>
                                <a class="cart_anchor compare-card"></a>

                                <a class="cart_anchor01 compare-card"></a>
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
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/auto-loan-calculator.js"></script>
<script>

    // This function will be executed when the user scrolls the page.
    $(document).on("scroll",function () {
        var header = $("#sidebar").offset().top;
        var scroll = $(window).scrollTop();

        var top_height = $('#top-page').height();
        var banner_height = $('#auto_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        if (scroll > header || header > 0){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").addClass("fixed");
        }
        if ($('#searchAutoLoan').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });
    /*
    $(document).on("scroll",function () {
        var scroller_anchor = $("#sidebar").offset().top;
        var sidebar_height = $("#sidebar").height();
        var window_height = $(window).height();

        var offsetToTop = parseInt($(this).scrollTop());
        var stickySidebar = $('#sidebar').offset() || { "top": NaN }.top;

        var top_height = $('#top-page').height();
        var banner_height = $('#auto_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+45);

        var main_height = $(".main-content-area").height();
        console.log(main_height);
        $(".sidebar_parent").height(main_height-20);
        console.log($(".sidebar_parent").height());
       // console.log( $(".footer").offset().top);


        // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
        if ($(window).scrollTop() >= scroller_anchor && sidebar_height < window_height )
        {
            $('#sidebar').addClass('fixed');
        }

        if ($(window).scrollTop() < scroller_anchor && sidebar_height > window_height )
        {
            $('#sidebar').removeClass('fixed');
        }

        if($('#sidebar').offset().top + $('#sidebar').height()
            >= $('.footer').offset().top - 65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }

        if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top+250){
            $("#sidebar").addClass("fixed");
            $("#sidebar").removeClass("sidebar-absolute-bottom");
        }

        if($("#sidebar").offset().top < total_top){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute");
        }
    });
    */


    $(document).ready(function(){

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
            loadData(cur_page);
        });

        function loadData( page = null ){
            var auto_i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                auto_i_want.push($(this).val());
            });

            var auto_i_want_list = "&auto_i_want="+auto_i_want;
            var amount = $('#finalAssest').val();
            var principal_amount = "&principal_amount="+amount;
            var month = $('#finalLiability').val();
            var month_limit = "&month_limit="+month;
            var auto_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                auto_user.push($(this).val());
            });

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&auto_loan_bank_ids="+bank_ids;


            var auto_user_list = "&auto_user="+auto_user;
            var main_string = auto_i_want_list+auto_user_list+principal_amount+month_limit+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
            var page_count ='';
            if( page != null ){
                page_count = page ;
            }
            var url_str = "<?php echo base_url();?>auto_loan/ajax_get_auto_loan/" + page_count;

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
                    overlay(true,true);
                },
                success: function(msg){
                    count_selected_row();
                    $("#searchAutoLoan").html(msg);
                    overlay(false);
                }

            });
        }

        function data_caching(){

            var auto_loan_i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                auto_loan_i_want.push($(this).val());
            });
            var auto_loan_i_want_list = "&auto_loan_i_want="+auto_loan_i_want;
            var auto_loan_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                auto_loan_user.push($(this).val());
            });
            var auto_loan_user_list = "&auto_loan_i_am="+auto_loan_user;

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());

            });
            var bank_id_list = "&auto_loan_bank_ids="+bank_ids;


            var auto_loan_i_want_label = '&auto_loan_i_want_label='+ $('input[name="i_want"]:checked').parent().text().trim();
            var auto_loan_i_am_label = '&auto_loan_i_am_label='+$('input[name="i_am"]:checked').parent().text().trim();

            var main_string = auto_loan_i_want_list+auto_loan_user_list+bank_id_list+auto_loan_i_want_label+auto_loan_i_am_label;
            main_string = main_string.substring(1, main_string.length);

            var url_str = "<?php echo base_url();?>auto_loan/ajax_auto_loan_caching/" ;

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response){


                    var option = [];
                    var obj = JSON.parse(response);
                    if(obj.auto_loan_i_want !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.auto_loan_i_want_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="auto_loan_i_want" data-auto_loan_i_want="'+obj.auto_loan_i_want+'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.auto_loan_i_am !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.auto_loan_i_am_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="auto_loan_i_am" data-auto_loan_i_am="'+ obj.auto_loan_i_am +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.auto_loan_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.auto_loan_bank_ids.length; i++) {
                            var bank_id = obj.auto_loan_bank_ids[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+bank_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="auto_loan_bank_id" data-auto_loan_bank_id="'+ bank_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }

                    }
                    $(".filter-list").html(option);
                }
            });
        }

        function count_selected_row(){
            var auto_i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                auto_i_want.push($(this).val());
            });

            var auto_i_want_list = "&auto_i_want="+auto_i_want;
            var amount = $('#finalAssest').val();
            var principal_amount = "&principal_amount="+amount;
            var month = $('#finalLiability').val();
            var month_limit = "&month_limit="+month;
            var auto_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                auto_user.push($(this).val());
            });

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&auto_loan_bank_ids="+bank_ids;


            var auto_user_list = "&auto_user="+auto_user;
            var main_string = auto_i_want_list+auto_user_list+principal_amount+month_limit+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>auto_loan/ajax_count_selected_row/";

            $.ajax
            ({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response) {
                    $(".bank-small-filter").html(response);
                }
            });
        }


        data_caching();
        loadData( page = null );
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData( page = null );
            data_caching();
        } );

// Stop dragging calculator and fire event for search

        $(".draggable").on("dragstop",function(ev,ui){

            setTimeout(function(){ //Updated by Tarek on 14-05-2017
                //alert($("#finalAssest").val());
                loadData(page = null);
                data_caching();
            }, 1000);

        });

        $("#finalAssest,#finalLiability").change(function () {
            //alert($("#finalAssest").val());
            loadData(page = null);
            data_caching();
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


        $('#searchAutoLoan').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var loan_id = formData.loan_id;
            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");
            if($("#moreInfo"+loan_id).hasClass('in')){
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> Less info");
            }else{
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> More info");
            }
        });

        $('#searchAutoLoan').on('click', '.rePaymentSchedule', function (){
            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);
            $('#rePaymentSchedule'+repayment).html('<iframe  src="<?php echo base_url();?>en/auto_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");
        });

        $(document).on('click','.add-to-compare',function(){
            $("#hiden_div").animate({bottom:'0px'});
            //$("#hiden_div").addClass("hiddenHalfDown");
            $('html, body').animate({
            });

            if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
                alert("Sorry");
            }else{
                if($(".cart_anchor").hasClass("img_active")){
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('.full-card').find('.auto_loan_logo').eq(0);
                    //flyToElement($(itemImg), $('.cart_anchor01'));
                    $(".cart_anchor01").addClass("img_active");
                    $(this).addClass("hidden");
                    // var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    var  formData = $(this).data();
                    var loan_id = "loan_id="+formData.loan_id;


                    setTimeout(function(){
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>auto_loan/ajax_compare_auto_loan_image",
                            data: loan_id,
                            success: function(msg){
                                $(".cart_anchor01").html(msg);
                            }
                        });
                    },850);
                }

                else{
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('div:eq(0)').find('.auto_loan_logo').eq(0);
                    $(".cart_anchor").addClass("img_active");
                    $(this).addClass("hidden");
                    var itemImg = $(this).parents('div:eq(0)').find('.auto_loan_logo').eq(0);
                    var  formData = $(this).data();
                    var loan_id = "loan_id="+formData.loan_id;
                    setTimeout(function(){
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>auto_loan/ajax_compare_auto_loan_image",
                            data: loan_id,
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
            var collected_card = $(this).prev().attr("data-loan_id");
            $(".full-card").each(function(){
                var obj=$(this).children().find('.add-to-compare');
                var index=$(this).children().find('.add-to-compare').attr('data-loan_id');
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

/*
        $('#go_compare').click(function(){

            var  formData = $('.cart_anchor').children('img').data();
            var loan_id1 = "loan_id1="+formData.loan_id;
            var  formData = $('.cart_anchor01').children('img').data();
            var loan_id2 = "&loan_id2="+formData.loan_id;
            var amount = $('#finalAssest').val();
            var principal_amount = "&principal_amount="+amount;
            var year = $('#finalLiability').val();
            var year_limit = "&year_limit="+year;
            var loan_ids = loan_id1+loan_id2+principal_amount+year_limit;
            if(loan_id1 != '' && loan_id2 != ''){
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>auto_loan/ajax_go_compare_page",
                    data: loan_ids,
                    success: function(msg){
                        if(msg != 'error'){
                            window.location.href = "<?php echo base_url();?>en/car_loan_compare";
                        }
                    }
                });
            }else{
                alert("Please add 2 card for compare ! ");
            }
        });*/

        $('#go_compare').click(function(){
            if( ! $('.cart_anchor01').children('img').data()){
                $("#comparison_min_two_alert").modal('show');
            }
            var  formData = $('.cart_anchor').children('img').data();
            var loan_url1 = formData.loan_url;
            var  formData = $('.cart_anchor01').children('img').data();
            var loan_url2 = formData.loan_url;
            var loan_urls = loan_url1+'-vs-'+loan_url2;
            if(loan_url1 != '' && loan_url2 != ''){
                window.location.href = "<?php echo base_url();?>compare-auto-loans/"+loan_urls+".html";
            }else{
                $('#comparison_min_two_alert').modal('show');
            }


        });

        $(document).on('click','#clear_all',function(){
            var data = 'session=auto_loan';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>auto_loan/ajax_clear_session",
                data:data,
                success: function(response)
                {
                    window.location.href = window.location.href;

                }
            });
        });

        $(document).on('click', '.auto_loan_i_want', function (){
            var  formData = $(this).data();
            var auto_loan_i_want = formData.auto_loan_i_want;
            console.log(auto_loan_i_want);
            $('#iWant'+auto_loan_i_want).prop('checked', false);
            var data = 'auto_loan_i_want='+auto_loan_i_want;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>auto_loan/unset_auto_loan_i_want_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.auto_loan_i_am', function (){
            var  formData = $(this).data();
            var auto_loan_i_am = formData.auto_loan_i_am;
            $('#iAm'+auto_loan_i_am).prop('checked', false);
            var data = 'auto_loan_i_am='+auto_loan_i_am;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>auto_loan/unset_auto_loan_i_am_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.auto_loan_bank_id', function (){
            var  formData = $(this).data();
            var auto_loan_bank_id = formData.auto_loan_bank_id;
            $('#filter-bank-'+auto_loan_bank_id).prop('checked', false);
            var data = 'auto_loan_bank_id='+auto_loan_bank_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>auto_loan/unset_auto_loan_bank_id_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

    });
</script>