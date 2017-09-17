<style>
    .sidebar_parent{
        min-height: 1600px;
    }
</style>

<section id="creditCard_header"></section>
<div ><?php //session_destroy();
    //pr($_SESSION);?></div>
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
                                                    if(isset($this->session->userdata['credit_card_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['credit_card_bank_ids']);
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

<section id="card">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3 sidebar_parent">
                <div id="sticky-anchor"></div>
                <div class="card_left_bar home_loan_left_bar"  id="sidebar">
                    <div class="card_query">
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                            $card_user = $this->Select_model->select_all('card_card_user');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" <?php echo ($this->session->userdata('credit_card_i_am') == $row->id) ? 'checked' : '' ;?> class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->card_user;?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card_query">
                        <p>My Income Range</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange10000-19999" value="10000-19999"  <?php echo ($this->session->userdata('credit_card_income_range') == '10000-19999') ? 'checked' : '' ;?>  class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 10000- BDT 19999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange20000-49999"  <?php echo ($this->session->userdata('credit_card_income_range') == '20000-49999') ? 'checked' : '' ;?>  value="20000-49999" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 20000- BDT 49999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange50000-199999"  <?php echo ($this->session->userdata('credit_card_income_range') == '50000-199999') ? 'checked' : '' ;?>  value="50000-199999" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 50000- BDT 199999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange200000-500000"  <?php echo ($this->session->userdata('credit_card_income_range') == '200000-500000') ? 'checked' : '' ;?>  value="200000-500000" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 200000- BDT 500000
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange500001-2500000"  <?php echo ($this->session->userdata('credit_card_income_range') == '500001-2500000') ? 'checked' : '' ;?>  value="500001-2500000" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 500000+
                            </label>
                        </div>
                    </div>
                    <div class="card_query">
                        <p>Want Credit Limit</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit10000-49999"  <?php echo ($this->session->userdata('credit_card_want_credit_limit') == '10000-49999') ? 'checked' : '' ;?>  value="10000-49999" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 10000- BDT 49999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit50000-99999"  <?php echo ($this->session->userdata('credit_card_want_credit_limit') == '50000-99999') ? 'checked' : '' ;?>  value="50000-99999" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 50000- BDT 99999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit100000-199999"  <?php echo ($this->session->userdata('credit_card_want_credit_limit') == '100000-199999') ? 'checked' : '' ;?>  value="100000-199999" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 100000- BDT 199999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit200000-500000"  <?php echo ($this->session->userdata('credit_card_want_credit_limit') == '200000-500000') ? 'checked' : '' ;?>  value="200000-500000" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 200000- BDT 500000
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit500001-2500000"  <?php echo ($this->session->userdata('credit_card_want_credit_limit') == '500001-2500000') ? 'checked' : '' ;?>  value="500001-2500000" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 500000+
                            </label>
                        </div>
                    </div>
                    <div class="card_query">
                        <p>Looking For</p>
                        <div class="query_radio">
                            <?php
                            $credit_card_type = $this->Select_model->select_all('card_credit_card_type');
                            foreach($credit_card_type->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="creditCardType" id="creditCardType<?php echo $row->id; ?>"  <?php echo ($this->session->userdata('credit_card_type') == $row->id) ? 'checked' : '' ;?>  value="<?php echo $row->id; ?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->cc_card_type; ?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="more_filter">
                        <p><a id="displayMoreFilter" href="javascript:toggle2();"><?php echo ($this->session->userdata("credit_card_feature_benefits") || $this->session->userdata("credit_card_type")) ? 'Fewer Filters ' :'More Filter' ?> <i class="fa fa-sort-desc fa-lg"></i></a></p>
                    </div>
                    <br/>
                    <div id="moreFilterText" <?php echo ($this->session->userdata("credit_card_features_benefits") || $this->session->userdata("card_type")) ? 'style="display: block"' :'style="display: none"' ?>>
                        <div class="card_query">
                            <p>Features & Benefits</p>
                            <div class="query_radio">
                                <?php
                                $selected_feature_benefits = array();
                                if(isset($this->session->userdata['credit_card_features_benefits']) && !empty($this->session->userdata['credit_card_features_benefits'])){
                                    $features = array_values($this->session->userdata['credit_card_features_benefits']);
                                    foreach($features as $feature){
                                        $selected_feature = explode("=",$feature);
                                        array_push($selected_feature_benefits,$selected_feature[0]);
                                    }
                                }

                                $card_benefits = $this->Select_model->select_all('card_reward');
                                foreach($card_benefits->result() as $row){
                                    $selected_benefit ='';
                                    if(in_array($row->id,$selected_feature_benefits)){
                                        $selected_benefit ='checked';
                                    }
                                    ?>
                                    <div class="material_checkbox_group">
                                        <input type="checkbox" id="featuresBenefits<?php echo $row->id; ?>" name="featuresBenefits" value="<?php echo $row->id; ?>" class="material_checkbox"/>
                                        <label class="material_label_checkbox features_benefits_checkbox" for="featuresBenefits<?php echo $row->id; ?>"><?php echo $row->reward_name; ?></label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="card_query">
                            <p>Maximum Interest Free Period</p>
                            <div class="query_radio">
                                <label class="material_radio_group">
                                    <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod15-30" value="15-30" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_maximum_interest_free_period')) && ($this->session->userdata('credit_card_maximum_interest_free_period') == '15-30' )) ? 'checked' : '' ?>/>
                                    <span class="material_check_radio"></span>
                                    15-30 Days
                                </label><br/>
                                <label class="material_radio_group">
                                    <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod31-45" value="31-45" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_maximum_interest_free_period')) && ($this->session->userdata('credit_card_maximum_interest_free_period') =='31-45' )) ? 'checked' : '' ?>/>
                                    <span class="material_check_radio"></span>
                                    31-45 Days
                                </label><br/>
                                <label class="material_radio_group">
                                    <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod46" value="46" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_maximum_interest_free_period')) && ($this->session->userdata('credit_card_maximum_interest_free_period') =='46' )) ? 'checked' : '' ?> />
                                    <span class="material_check_radio"></span>
                                    More than 45 Days
                                </label><br/>
                            </div>
                        </div>
                        <div class="card_query">
                            <p>Card Type</p>
                            <div class="query_radio">
                                <?php
                                $card_type = $this->Select_model->select_all('card_card_type');
                                foreach($card_type->result() as $row){
                                    ?>
                                    <div class="material_checkbox_group">
                                        <input type="checkbox" id="cardType<?php echo $row->id;?>" name="cardType" value="<?php echo $row->id;?>" class="material_checkbox" <?php echo ($this->session->userdata("credit_card_type") == $row->id) ? 'checked' :'' ?> />
                                        <label class="material_label_checkbox card_type_checkbox" for="cardType<?php echo $row->id;?>"><?php echo $row->card_type_name;?></label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="card_query">
                            <p>Card Issuer</p>
                            <div class="query_radio">
                                <?php
                                $card_issuer = $this->Select_model->select_all('card_card_issuer');
                                foreach($card_issuer->result() as $row){
                                    ?>
                                    <div class="material_checkbox_group">
                                        <input type="checkbox" id="cardIssuer<?php echo $row->id;?>" name="cardIssuer" value="<?php echo $row->id;?>" class="material_checkbox" />
                                        <label class="material_label_checkbox card_issuer_checkbox" for="cardIssuer<?php echo $row->id;?>"><?php echo $row->card_issuer_name;?></label>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left bar query content end -->
            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9 main-content-area" id="SearchCard">
                <div id="loading" class="text-center" style="margin-top: 150px"></div>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>
<!-- card compare section starts-->
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
<!-- card compare section ends-->
<script type="text/javascript">

    $(document).on("scroll",function () {
        var scroller_anchor = $("#sidebar").offset().top;
        var sidebar_height = $("#sidebar").height();
        var window_height = $(window).height();

        var offsetToTop = parseInt($(this).scrollTop());
        var stickySidebar = $('#sidebar').offset() || { "top": NaN }.top;

        var top_height = $('#top-page').height();
        var banner_height = $('#creditCard_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+45);

        var main_height = $(".main-content-area").height();
        //console.log(main_height);
        $(".sidebar_parent").height(main_height-20);
        //console.log($(".sidebar_parent").height());
        //console.log( $(".footer").offset().top);

        $(document).on("click","#displayMoreFilter",function(){
            if($("#moreFilterText").css("display") == "none"){
                //alert();
                $('#sidebar').removeClass('fixed');
                $("#sidebar").removeClass("fixed-bottom");
                $('#sidebar').addClass('pRelative');
                //alert();
            }
            else{

            }
        });

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
            $('#sidebar').addClass('pRelative');
            //alert();
        }

        if($("#moreFilterText").css("display") == "none" && sidebar_height < window_height){
            $("#sidebar").removeClass("fixed-bottom");
            $('#sidebar').removeClass('pRelative');
            $('#sidebar').addClass('fixed');
            //alert();
        }

        if(sidebar_height > window_height && $(window).scrollTop()>1520){
            $('#sidebar').removeClass('pRelative');
            $('#sidebar').addClass('fixed-bottom');
        }

        if($('#sidebar').offset().top + $('#sidebar').height() >= $('.footer').offset().top - 90){
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
    });


    $(document).ready(function(){
        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
            loadData(cur_page);
        });

        function loadData( page = null ){
            var card_user = new Array();
            $('input[name="iAm"]:checked').each(function(){
                card_user.push($(this).val());
            });
            var card_user_list = "&card_user="+card_user;
            var income_range = new Array();
            $('input[name="myIncomeRange"]:checked').each(function(){
                income_range.push($(this).val());
            });
            var income_range_list = "&income_range="+income_range;
            var credit_limit = new Array();
            $('input[name="wantCreditLimit"]:checked').each(function(){
                credit_limit.push($(this).val());
            });
            var credit_limit_list = "&credit_limit="+credit_limit;
            var credit_card_type = new Array();
            $('input[name="creditCardType"]:checked').each(function(){
                credit_card_type.push($(this).val());
            });
            var credit_card_type_list = "&credit_card_type="+credit_card_type;
            var feature_benefits = new Array();
            $('input[name="featuresBenefits"]:checked').each(function(){
                feature_benefits.push($(this).val());
            });
            var feature_benefits_list = "&feature_benefits="+feature_benefits;
            var max_interest_free_period = new Array();
            $('input[name="maximumInterestFreePeriod"]:checked').each(function(){
                max_interest_free_period.push($(this).val());
            });
            var max_interest_free_period_list = "&max_interest_free_period="+max_interest_free_period;

            var card_type = new Array();
            $('input[name="cardType"]:checked').each(function(){
                card_type.push($(this).val());
            });

            var card_type_list = "&card_type="+card_type;
            var card_issuer = new Array();
            $('input[name="cardIssuer"]:checked').each(function(){
                card_issuer.push($(this).val());
            });
            var card_issuer_list = "&card_issuer="+card_issuer;

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&credit_card_bank_ids="+bank_ids;
            var main_string = card_user_list+income_range_list+credit_limit_list+credit_card_type_list+feature_benefits_list+max_interest_free_period_list+card_type_list+card_issuer_list+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
            var page_count ='';
            if( page != null ){
                page_count = page ;
            }
            var url_str = "<?php echo base_url();?>card/ajax_get_credit_card/" + page_count;

            $.ajax
            ({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(msg) {
                    $("#SearchCard").html(msg);
                }
            });
        }


        function data_caching(){
            var credit_card_i_am = new Array();
            $('input[name="iAm"]:checked').each(function(){
                credit_card_i_am.push($(this).val());
            });
            var credit_card_i_am_list = "&credit_card_i_am="+credit_card_i_am;

            var credit_card_myIncomeRange = new Array();
            $('input[name="myIncomeRange"]:checked').each(function(){
                credit_card_myIncomeRange.push($(this).val());
            });
            var credit_card_myIncomeRange_list = "&credit_card_income_range="+credit_card_myIncomeRange;

            var credit_card_wantCreditLimit = new Array();
            $('input[name="wantCreditLimit"]:checked').each(function(){
                credit_card_wantCreditLimit.push($(this).val());
            });
            var credit_card_wantCreditLimit_list = "&credit_card_want_credit_limit="+credit_card_wantCreditLimit;

            var credit_card_type = new Array();
            $('input[name="creditCardType"]:checked').each(function(){
                credit_card_type.push($(this).val());
            });
            var credit_card_type_list = "&credit_card_type="+credit_card_type;

            var credit_card_maximumInterestFreePeriod = new Array();
            $('input[name="maximumInterestFreePeriod"]:checked').each(function(){
                credit_card_type.push($(this).val());
            });
            var credit_card_maximumInterestFreePeriod_list = "&credit_card_maximum_interest_free_period="+credit_card_maximumInterestFreePeriod;


            var bank_ids = new Array();

            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());

            });
            var bank_id_list = "&credit_card_bank_ids="+bank_ids;

            var credit_card_features_benefits = new Array();
            $('input[name="featuresBenefits"]:checked').each(function(){
                credit_card_features_benefits.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.features_benefits_checkbox').text().trim());

            });
            var credit_card_features_benefits_list = "&credit_card_features_benefits="+credit_card_features_benefits;

            var card_type = new Array();
            $('input[name="cardType"]:checked').each(function(){
                card_type.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.card_type_checkbox').text().trim());

            });
            var card_type_list = "&card_type="+card_type;

            var card_issuers = new Array();
            $('input[name="cardType"]:checked').each(function(){
                card_issuers.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.card_issuer_checkbox').text().trim());

            });
            var card_issuers_list = "&card_issuers="+card_issuers;

            var credit_card_i_am_label = '&credit_card_i_am_label='+$('input[name="iAm"]:checked').parent().text().trim();
            var credit_card_income_range_label = '&credit_card_income_range_label='+$('input[name="myIncomeRange"]:checked').parent().text().trim();
            var credit_card_want_credit_limit_label = '&credit_card_want_credit_limit_label='+$('input[name="wantCreditLimit"]:checked').parent().text().trim();
            var credit_card_type_label = '&credit_card_type_label='+$('input[name="creditCardType"]:checked').parent().text().trim();
            var credit_card_maximum_interest_free_period_label = '&credit_card_maximum_interest_free_period_label='+$('input[name="maximumInterestFreePeriod"]:checked').parent().text().trim();



            var main_string = credit_card_i_am_list+credit_card_myIncomeRange_list+credit_card_wantCreditLimit_list+credit_card_type_list+credit_card_maximumInterestFreePeriod_list +bank_id_list + credit_card_features_benefits_list+card_type_list+card_issuers_list+credit_card_i_am_label+credit_card_income_range_label+credit_card_want_credit_limit_label+credit_card_type_label+credit_card_maximum_interest_free_period_label;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>card/ajax_credit_card_caching/" ;
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response){


                    var option = [];
                    var obj = JSON.parse(response);
                    if(obj.credit_card_i_am !=''){
                        console.log(obj.credit_card_i_am_label);
                        option.push('<li><span class="filter-option"><span>'+obj.credit_card_i_am_label+'</span><a href="javascript:void(0);" class="credit_card_i_am" data-credit_card_i_am="'+ obj.credit_card_i_am +'"><i class="fa fa-times" aria-hidden="true"></i></a></span></li>');
                    }
                    if(obj.credit_card_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.credit_card_bank_ids.length; i++) {
                            var bank_id = obj.credit_card_bank_ids[i].split("=");
                            //console.log(bank_id[1]);
                            option.push('<li><span class="filter-option"><span>'+ bank_id[1] +'</span><a href="javascript:void(0);" class="credit_card_bank_id" data-credit_card_bank_id="'+ bank_id[0] +'"><i class="fa fa-times" aria-hidden="true"></i></a></span></li>');
                        }

                    }
                    $(".filter-list").html(option);
                }
            });
        }



        data_caching();
        loadData(page = null);
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            data_caching();
            loadData(page = null);
        } );
    });

    $('#SearchCard').on('click', '.displayText', function () {
        var  formData = $(this).data();
        var card_id = formData.card_id;
        var ele = document.getElementById("toggleText"+card_id);
        var text = document.getElementById("displayText");
        console.log(ele);
        if(ele.style.display == "block") {
            ele.style.display = "none";
            text.html("<i class='fa fa-info-circle'></i> more info");
        }
        else {
            ele.style.display = "block";
            text.html("<i class='fa fa-info-circle'></i> Less info");
        }
    });

    //for more more filter
    function toggle2() {
        var ele = document.getElementById("moreFilterText");
        var text = document.getElementById("displayMoreFilter");
        if(ele.style.display == "block") {
            ele.style.display = "none";
            text.innerHTML = "More Filters <i class='fa fa-sort-desc fa-lg'></li>";
        }
        else {
            ele.style.display = "block";
            text.innerHTML = "Fewer Filters <i class='fa fa-sort-asc fa-lg'></i>";
        }
    }

    $(document).on('click','.add-to-compare',function(){
        $("#hiden_div").animate({bottom:'0px'});

        if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
            alert("Sorry");
        }else{
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
                var card_id = "card_id="+formData.card_id;
                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>card/ajax_compare_card_image",
                        data: card_id,
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
                var card_id = "card_id="+formData.card_id;
                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>card/ajax_compare_card_image",
                        data: card_id,
                        success: function(msg)
                        {
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
        var collected_card = $(this).prev().attr("data-card_id");
        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-card_id');
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
            alert("Please add 2 card for compare ! ");
        }
    });
</script>