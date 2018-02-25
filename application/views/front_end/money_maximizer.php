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



<section id="mony_max_header"></section>

<!--Filter bar by bank START -->
<div class="container">
    <section id="filter-bar">
        <div class="row">
            <div class="col-md-3">
                <div class="bank-filter">
                    <p class="bank-small-filter">50 of 50 results filtered by:</p>
                    <div class="bank-big-filter">

                        <!--<div class="dropdown mega-dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                        </div>-->
                        <ul class="filter-by">
                            <li class="dropdown mega-dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle">
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
                                                    if(isset($this->session->userdata['maximizer_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['maximizer_bank_ids']);
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
                <a class="btn-filter-clear" href="javascript:void(0);" id="clear_all">
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

<section id="fdr_loan">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_parent">
                <div id="sticky-anchor"></div>
                <div class="home_loan_left_bar" id="sidebar">
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
                        <p>Benifit Times</p>
                        <div class="fdrTenurepadding">

                            <?php
                            $tenure = $this->Select_model->select_all('money_maxi_choose_your_benefit','DESC');
                            foreach($tenure->result() as $row){
                                ?>
                                <div class="fdr_tenure pull-left">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="tenure" value="<?php echo $row->id; ?>" id="maximizer_benefit<?php echo $row->id; ?>" class="material_radiobox" <?php echo ($this->session->userdata("maximizer_benefit") == $row->id ) ? 'checked' :'' ?> />
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
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-content-area" id="SearchDebitCard">
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
    $(document).on("scroll",function () {
        var header = $("#sidebar").offset().top;
        var scroll = $(window).scrollTop();

        var top_height = $('#top-page').height();
        var banner_height = $('#mony_max_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        if (scroll > header || header > 0){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").addClass("fixed");
        }
        if ($('#moneyMaximizerSearch').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });

    $(document).ready(function(){

        setTimeout(function(){
            $("#finalAssest").focus();
            $("#finalAssest").blur();

            $("#finalLiability").focus();
            $("#finalLiability").blur();
        },500);
    });

</script>
<script type="text/javascript">

    $(document).ready(function(){
        $('#finalAssest').val(<?php echo $this->session->userdata("maximizer_deposit_amount");?>);
    });

    $(document).on('click','#pagination a',function(e){
        e.preventDefault();
        var cur_page = $(this).attr('data-ci-pagination-page');
        loadData(cur_page);
    });


    function loadData( page = null ){
        var maximizer_tenure = new Array();
        $('input[name="tenure"]:checked').each(function(){
            maximizer_tenure.push($(this).val());
        });

        var maximizer_tenure_list = "&maximizer_tenure="+maximizer_tenure;
        var amount = $('#finalAssest').val();
        var deposit_amount = "&deposit_amount="+amount;
        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "&maximizer_bank_ids="+bank_ids;
        var main_string = maximizer_tenure_list+deposit_amount+bank_id_list;
        main_string = main_string.substring(1, main_string.length);
        var page_count ='';
        if( page != null ){
            page_count = page ;
        }
        var url_str = "<?php echo base_url();?>money_maximizer/ajax_get_money_maximizer/" + page_count;
        $.ajax
        ({
            type: "POST",
            url: url_str,
            data: main_string,
            cache: false,
            beforeSend: function() {
                overlay(true,true);
            },
            success: function(msg)
            {
                count_selected_row();
                $("#moneyMaximizerSearch").html(msg);
                overlay(false);

            }
        });
    }

    function data_caching(){
        var amount = $('#finalAssest').val();
        var deposit_amount = "&maximizer_deposit_amount="+amount;

        var maximizer_benefit = new Array();
        $('input[name="tenure"]:checked').each(function(){
            maximizer_benefit.push($(this).val());
        });
        var maximizer_benefit_list = "&maximizer_benefit="+maximizer_benefit;
        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());
        });
        var bank_id_list = "&maximizer_bank_ids="+bank_ids;
        var maximizer_benefit_label = '&maximizer_benefit_label='+$('input[name="tenure"]:checked').parent().text().trim();
        var main_string = maximizer_benefit_list+bank_id_list+deposit_amount+maximizer_benefit_label;
        main_string = main_string.substring(1, main_string.length);
        var url_str = "<?php echo base_url();?>money_maximizer/ajax_maximizer_caching/" ;
        $.ajax({
            type: "POST",
            url: url_str,
            data: main_string,
            cache: false,
            success: function(response){
                var option = [];
                var obj = JSON.parse(response);
                if(obj.maximizer_benefit !='') {
                    option.push('<li><div class="filter-option"><span>' + obj.maximizer_benefit_label + '</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="maximizer_benefit" data-maximizer_benefit="' + obj.maximizer_benefit + '"><i class="icon-close icons"></i></a></span></div></li>');
                }
                if(obj.maximizer_bank_ids.length > 0 ){
                    for (var i = 0; i < obj.maximizer_bank_ids.length; i++) {
                        var bank_id = obj.maximizer_bank_ids[i].split("=");
                        option.push('<li><div class="filter-option"><span>' + bank_id[1] + '</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="maximizer_bank_id" data-maximizer_bank_id="' +  bank_id[0] + '"><i class="icon-close icons"></i></a></span></div></li>');
                    }

                }
                $(".filter-list").html(option);
            }
        });
    }

    function count_selected_row(){
        var maximizer_tenure = new Array();
        $('input[name="tenure"]:checked').each(function(){
            maximizer_tenure.push($(this).val());
        });

        var maximizer_tenure_list = "&maximizer_tenure="+maximizer_tenure;

        var amount = $('#finalAssest').val();

        var deposit_amount = "&deposit_amount="+amount;

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "&maximizer_bank_ids="+bank_ids;

        var main_string = maximizer_tenure_list+deposit_amount+bank_id_list;
        main_string = main_string.substring(1, main_string.length);
        var url_str = "<?php echo base_url();?>money_maximizer/ajax_count_selected_row/";

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


    $(document).on('click','#clear_all',function(){
        var data = 'session=money_maximizer';
        $.ajax
        ({
            type: "POST",
            url: "<?php echo base_url();?>money_maximizer/ajax_clear_session",
            data:data,
            success: function(response)
            {
                window.location.href = window.location.href;

            }
        });
    });


    $(document).on('click', '.maximizer_benefit', function (){
        var  formData = $(this).data();
        var maximizer_benefit = formData.maximizer_benefit;
        $('#maximizer_benefit'+maximizer_benefit).prop('checked', false);
        var data = 'maximizer_benefit='+maximizer_benefit;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>money_maximizer/unset_maximizer_benefit_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });


    $(document).on('click', '.maximizer_bank_id', function (){
        var  formData = $(this).data();
        var maximizer_bank_id = formData.maximizer_bank_id;
        $('#filter-bank-'+maximizer_bank_id).prop('checked', false);
        var data = 'maximizer_bank_id='+maximizer_bank_id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>money_maximizer/unset_maximizer_bank_id_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });

    setTimeout(function(){ //Updated by Tarek on 14-05-2017
        data_caching();
        loadData(page = null);
    }, 1000);
    $("input[type='checkbox'], input[type='radio']").on( "click", function() {
        data_caching();
        loadData( page = null );

    } );


    $(".draggable").on("dragstop",function(ev,ui){

        setTimeout(function(){ //Updated by Tarek on 14-05-2017
            data_caching();
            loadData(page = null);
        }, 1000);

    });

    $("#finalAssest,#finalLiability").change(function () {
        data_caching();
        loadData(page = null);
    });

    $("#alreadySaved").find(".next").click(function(){
        setTimeout(function(){ //Updated by Tarek on 14-05-2017
            data_caching();
            loadData(page = null);
        }, 1000);
    });

    $("#alreadySaved").find(".prev").click(function(){
        setTimeout(function(){ //Updated by Tarek on 14-05-2017
            data_caching();
            loadData(page = null);
        }, 1000);
    });

    //for show hide (more info & Available Offer)

     $('#moneyMaximizerSearch').on('click', '.more_info', function (){
         var  formData = $(this).data();
         var maximizer_id = formData.maximizer_id;
         $("#moreInfo"+maximizer_id).toggleClass("in");
         if($("#moreInfo"+maximizer_id).hasClass('in')){
             $('#more_info'+maximizer_id).html("<i class='fa fa-info-circle'></i> Less info");
         }else{
             $('#more_info'+maximizer_id).html("<i class='fa fa-info-circle'></i> More info");
         }
     });

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
        }else{
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
        if( ! $('.cart_anchor01').children('img').data()){
            $("#comparison_min_two_alert").modal('show');
        }
        var  formData = $('.cart_anchor').children('img').data();
        var maximizer_url1 = formData.maximizer_url;
        var  formData = $('.cart_anchor01').children('img').data();
        var maximizer_url2 = formData.maximizer_url;
        var maximizer_urls = maximizer_url1+'-vs-'+maximizer_url2;
        if(maximizer_url1 != '' && maximizer_url2 != ''){
            window.location.href = "<?php echo base_url();?>compare-money-maximizer/"+maximizer_urls+".html";
        }else{
            $('#comparison_min_two_alert').modal('show');
        }
    });
</script>