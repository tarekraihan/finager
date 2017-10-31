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
                                                    if(isset($this->session->userdata['snd_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['snd_bank_ids']);
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
            <div class="col-sm-3 col-xs-3 sidebar_parent">
                <div id="sticky-anchor"></div>
                <div class="home_loan_left_bar" id="sidebar">
                    <div class="card_query">
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                            $loan_user = $this->Select_model->select_all('snd_account_i_am','ASC');
                            foreach($loan_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="i_am" id="i_am<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" class="material_radiobox"  <?php echo ($this->session->userdata("snd_i_am") == $row->id) ? 'checked' :'' ?>/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->i_am; ?>
                                </label><br/>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="card_query">
                        <p>Select Deposit Amount</p>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group" style="position: relative !important; margin: 0; padding: 0; margin: 0 10px 10px 10px;">
                                    <input type="number" name="snd_amount" id="snd_amount" class="form-control" placeholder="10L To 100C" max="12">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" name="btnGo" id="btnGo" type="button">Go!</button>
                                    </span>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>


                    <div class="card_query">
                        <p>I Want Interest</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="i_want_interest" id="Monthly" value="Monthly" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                Monthly
                            </label><br>
                            <label class="material_radio_group">
                                <input type="radio" name="i_want_interest" id="Quarterly" value="Quarterly" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                Quarterly
                            </label><br>
                            <label class="material_radio_group">
                                <input type="radio" name="i_want_interest" id="Half Yearly" value="Half Yearly" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                Half-Yearly
                            </label><br>
                            <label class="material_radio_group">
                                <input type="radio" name="i_want_interest" id="Yearly" value="Yearly" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                Yearly
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Left bar query content end -->

            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">
                <div id="sndSearch">
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

<script type="text/javascript">
    $(document).on("scroll",function (){
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
        if ($('#sndSearch').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        loadData(page = null );
    });
    function loadData( page = null ){
        var snd_i_am = new Array();
        $('input[name="i_am"]:checked').each(function(){
            snd_i_am.push($(this).val());
        });

        var snd_i_am_list = "&snd_i_am="+snd_i_am;

        var snd_i_want_interest = new Array();
        $('input[name="i_want_interest"]:checked').each(function(){
            snd_i_want_interest.push($(this).val());
        });

        var snd_i_want_interest_list = "&snd_i_want_interest="+snd_i_want_interest;

        var snd_amount = $('#snd_amount').val();
        var snd_amount = "&snd_amount="+snd_amount;

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "&snd_bank_ids="+bank_ids;

        var main_string = snd_i_am_list+snd_i_want_interest_list+bank_id_list+snd_amount;
        main_string = main_string.substring(1, main_string.length);
        var page_count ='';
        if( page != null ){
            page_count = page ;
        }
        var url_str = "<?php echo base_url();?>snd_account/ajax_get_snd_account/" + page_count;
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
                //count_selected_row();
                $("#sndSearch").html(msg);
                overlay(false);

            }
        });
    }


    $('#sndSearch').on('click', '.more_info', function (){
        var  formData = $(this).data();
        var snd_id = formData.snd_id;
        $("#more_info"+snd_id).toggleClass("in");
        if($("#more_info"+snd_id).hasClass('in')){
            $('#more_info'+snd_id).html("<i class='fa fa-info-circle'></i> Less info");
        }else{
            $('#more_info'+snd_id).html("<i class='fa fa-info-circle'></i> More info");
        }
    });

//    function data_caching(){
//
//        var amount = $('#finalAssest').val();
//        var deposit_amount = "&snd_deposit_amount="+amount;
//
//        var snd_benefit = new Array();
//        $('input[name="tenure"]:checked').each(function(){
//            snd_benefit.push($(this).val());
//        });
//        var snd_benefit_list = "&snd_benefit="+snd_benefit;
//
//
//        var bank_ids = new Array();
//        $('input[name="bank_id"]:checked').each(function(){
//            bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());
//
//        });
//        var bank_id_list = "&snd_bank_ids="+bank_ids;
//        var snd_benefit_label = '&snd_benefit_label='+$('input[name="tenure"]:checked').parent().text().trim();
//
//
//        var main_string = snd_benefit_list+bank_id_list+deposit_amount+snd_benefit_label;
//        main_string = main_string.substring(1, main_string.length);
//        var url_str = "<?php //echo base_url();?>//snd/ajax_snd_caching/" ;
//        $.ajax({
//            type: "POST",
//            url: url_str,
//            data: main_string,
//            cache: false,
//            success: function(response){
//                var option = [];
//                var obj = JSON.parse(response);
////                console.log(obj.snd_benefit_label);
//                if(obj.snd_benefit !='') {
//                    option.push('<li><div class="filter-option"><span>' + obj.snd_benefit_label + '</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="snd_benefit" data-snd_benefit="' + obj.snd_benefit + '"><i class="icon-close icons"></i></a></span></div></li>');
//                }
//                if(obj.snd_bank_ids.length > 0 ){
//                    for (var i = 0; i < obj.snd_bank_ids.length; i++) {
//                        var bank_id = obj.snd_bank_ids[i].split("=");
//                        option.push('<li><div class="filter-option"><span>' + bank_id[1] + '</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="snd_bank_id" data-snd_bank_id="' +  bank_id[0] + '"><i class="icon-close icons"></i></a></span></div></li>');
//                    }
//
//                }
//                $(".filter-list").html(option);
//            }
//        });
//    }

    function count_selected_row(){
        var snd_tenure = new Array();
        $('input[name="tenure"]:checked').each(function(){
            snd_tenure.push($(this).val());
        });

        var snd_tenure_list = "&snd_tenure="+snd_tenure;

        var amount = $('#finalAssest').val();

        var deposit_amount = "&deposit_amount="+amount;

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "&snd_bank_ids="+bank_ids;

        var main_string = snd_tenure_list+deposit_amount+bank_id_list;
        main_string = main_string.substring(1, main_string.length);
        var url_str = "<?php echo base_url();?>snd_account/ajax_count_selected_row/";

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


/*

    $(document).on('click','#clear_all',function(){
        var data = 'session=snd';
        $.ajax
        ({
            type: "POST",
            url: "<?php echo base_url();?>snd_account/ajax_clear_session",
            data:data,
            success: function(response)
            {
                window.location.href = window.location.href;

            }
        });
    });


    $(document).on('click', '.snd_benefit', function (){
        var  formData = $(this).data();
        var snd_benefit = formData.snd_benefit;
        $('#snd_benefit'+snd_benefit).prop('checked', false);
        var data = 'snd_benefit='+snd_benefit;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>snd_account/unset_snd_benefit_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });


    $(document).on('click', '.snd_bank_id', function (){
        var  formData = $(this).data();
        var snd_bank_id = formData.snd_bank_id;
        $('#filter-bank-'+snd_bank_id).prop('checked', false);
        var data = 'snd_bank_id='+snd_bank_id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>snd_account/unset_snd_bank_id_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });
*/

    $('#btnGo').click(function(){
        loadData( page = null );
    });


    $("input[type='checkbox'], input[type='radio']").on( "click", function() {
        //data_caching();
        loadData( page = null );

    } );


    //for show hide (more info & Available Offer)

    $('#sndSearch').on('click', '.more_info', function (){
        var  formData = $(this).data();
        var snd_id = formData.snd_id;
        $("#moreInfo"+snd_id).toggleClass("in");
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
            if (imgtodrag01.length) {
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
            var snd_id = "snd_id="+formData.snd_id;

            setTimeout(function(){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>snd_account/ajax_compare_snd_image",
                    data: snd_id,
                    success: function(msg)
                    {
                        console.log(msg);
                        $(".cart_anchor01").html(msg);
                    }
                });
            });


        }else{

            var cart = $('.cart_anchor');
            var imgtodrag = $(this).parents('.full-card').find('.selected_card').eq(0);
            if (imgtodrag.length) {

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
            var snd_id = "snd_id="+formData.snd_id;

            setTimeout(function(){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>snd_account/ajax_compare_snd_image",
                    data: snd_id,
                    success: function(msg)
                    {
                        console.log(msg);
                        $(".cart_anchor").html(msg);
                    }
                });
            });

            $(".cart_anchor").addClass("img_active");
            $(this).addClass("hidden");

        }
    });


    $(document).on('click','.compare-cross-btn',function(){
        var collected_card = $(this).prev().attr("data-snd_id");
        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-snd_id');
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
        var snd_id1 = "snd_id1="+formData.snd_id;

        var  formData = $('.cart_anchor01').children('img').data();
        var snd_id2 = "&snd_id2="+formData.snd_id;
        var amount = $('#finalAssest').val();
        var deposit_amount = "&deposit_amount="+amount;

        var snd_ids = snd_id1+snd_id2+deposit_amount;
        if( snd_id1 != '' && snd_id2 != '' ){
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>snd_account/ajax_go_compare_page",
                data: snd_ids,
                success: function(msg)
                {
                    if(msg != 'error'){

                        window.location.href = "<?php echo base_url();?>en/snd_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 card for compare ! ")
        }


    });
</script>