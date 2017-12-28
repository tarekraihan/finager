<style>
    .sidebar_parent{
        min-height: 1600px;
    }
</style>

<section id="creditCard_header"></section>
<section><?php
//  pr($_SESSION);
//    $feature_array = array();
//    foreach($_SESSION['credit_card_features_benefits'] as $feature){
//        $data = explode('=',$feature);
//        array_push($feature_array,$data[0]);
//    }
//    pr($feature_array);
    ?></section>
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
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_parent">
                <div id="sticky-anchor"></div>
                <div class="card_left_bar home_left_bar"  id="sidebar">
                    <div class="card_query">
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                            $card_user = $this->Select_model->select_all('card_card_user');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" <?php echo (!empty($this->session->userdata('credit_card_i_am')) && ($this->session->userdata('credit_card_i_am') == $row->id )) ? 'checked' : '' ?> class="material_radiobox"/>
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
                                <input type="radio" name="myIncomeRange" id="myIncomeRange10000-19999" value="10000-19999" class="material_radiobox" <?php echo (!empty($this->session->userdata('credit_card_income_range')) && ($this->session->userdata('credit_card_income_range') == '10000-19999' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 10,000- BDT 19,999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange20000-49999" value="20000-49999" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_income_range')) && ($this->session->userdata('credit_card_income_range') == '20000-49999' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 20,000- BDT 49,999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange50000-199999" value="50000-199999" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_income_range')) && ($this->session->userdata('credit_card_income_range') == '50000-199999' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 50,000- BDT 199,999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange200000-500000" value="200000-500000" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_income_range')) && ($this->session->userdata('credit_card_income_range') == '200000-500000' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 200,000- BDT 500,000
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="myIncomeRange" id="myIncomeRange500001-2500000" value="500001-2500000" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_income_range')) && ($this->session->userdata('credit_card_income_range') == '500001-2500000' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 500,000 plus
                            </label>
                        </div>
                    </div>
                    <div class="card_query">
                        <p>Want Credit Limit</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit10000-49999" value="10000-49999" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_want_credit_limit')) && ($this->session->userdata('credit_card_want_credit_limit') == '10000-49999' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 10,000- BDT 49,999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit50000-99999" value="50000-99999" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_want_credit_limit')) && ($this->session->userdata('credit_card_want_credit_limit') == '50000-99999' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 50,000- BDT 99,999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit100000-199999" value="100000-199999" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_want_credit_limit')) && ($this->session->userdata('credit_card_want_credit_limit') == '100000-199999' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 100,000- BDT 199,999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit200000-500000" value="200000-500000" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_want_credit_limit')) && ($this->session->userdata('credit_card_want_credit_limit') == '200000-500000' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 200,000- BDT 500,000
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="wantCreditLimit" id="wantCreditLimit500001-2500000" value="500001-2500000" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_want_credit_limit')) && ($this->session->userdata('credit_card_want_credit_limit') == '500001-2500000' )) ? 'checked' : '' ?>/>
                                <span class="material_check_radio"></span>
                                BDT 500,000 plus
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
                                    <input type="radio" name="creditCardType" id="creditCardType<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_type')) && ($this->session->userdata('credit_card_type') == $row->id )) ? 'checked' : '' ?>/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->cc_card_type; ?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="more_filter">
                        <p><a id="displayMoreFilter" href="javascript:toggle2();"><?php echo ($this->session->userdata("credit_card_features_benefits") || $this->session->userdata("card_types")) ? 'Fewer Filters ' :'More Filter' ?> <i class="fa fa-sort-desc fa-lg"></i></a></p>
                    </div>

                    <div id="moreFilterText" <?php echo ($this->session->userdata("credit_card_features_benefits") || $this->session->userdata("card_types")) ? 'style="display: block"' :'style="display: none"' ?>>
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
                                        <input type="checkbox" id="featuresBenefits<?php echo $row->id; ?>" name="featuresBenefits" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected_benefit; ?>/>
                                        <label class="material_label_checkbox" for="featuresBenefits<?php echo $row->id; ?>"><?php echo $row->reward_name; ?></label>
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
                                    <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod46" value="46" class="material_radiobox"  <?php echo (!empty($this->session->userdata('credit_card_maximum_interest_free_period')) && ($this->session->userdata('credit_card_maximum_interest_free_period') == '46' )) ? 'checked' : '' ?>/>
                                    <span class="material_check_radio"></span>
                                    More than 45 Days
                                </label><br/>
                            </div>
                        </div>
                        <div class="card_query">
                            <p>Card Type</p>
                            <div class="query_radio">
                                <?php
                                $selected_card_types = array();
                                if(isset($this->session->userdata['card_types']) && !empty($this->session->userdata['card_types'])){
                                    $types = array_values($this->session->userdata['card_types']);
                                    foreach($types as $type){
                                        $selected_type = explode("=",$type);
                                        array_push($selected_card_types,$selected_type[0]);
                                    }
                                }

                                $card_type = $this->Select_model->select_all('card_card_type');
                                foreach($card_type->result() as $row){
                                    $selected_type ='';
                                    if(in_array($row->id,$selected_card_types)){
                                        $selected_type ='checked';
                                    }
                                    ?>
                                    <div class="material_checkbox_group">
                                        <input type="checkbox" id="cardType<?php echo $row->id;?>" name="cardType" value="<?php echo $row->id;?>" class="material_checkbox" <?php echo $selected_type; ?> />
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
                                $selected_card_issuers = array();
                                if(isset($this->session->userdata['card_issuers']) && !empty($this->session->userdata['card_issuers'])){
                                    $issuers = array_values($this->session->userdata['card_issuers']);
                                    foreach($issuers as $issuer){
                                        $selected_issuer = explode("=",$issuer);
                                        array_push($selected_card_issuers,$selected_issuer[0]);
                                    }
                                }
                                $card_issuer = $this->Select_model->select_all('card_card_issuer');
                                foreach($card_issuer->result() as $row){
                                    $selected_issuer_checked ='';
                                    if(in_array($row->id,$selected_card_types)){
                                        $selected_issuer_checked ='checked';
                                    }
                                    ?>
                                    <div class="material_checkbox_group">
                                        <input type="checkbox" id="cardIssuer<?php echo $row->id;?>" name="cardIssuer" value="<?php echo $row->id;?>" class="material_checkbox"  <?php echo $selected_issuer_checked;?>/>
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
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-content-area" id="SearchCard">
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
        var total_top = parseInt(top_height+banner_height+filter_height + 45);

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

        if($('#sidebar').offset().top + $('#sidebar').height() >= $('.footer').offset().top + 50){
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
                    beforeSend: function() {
                        overlay(true,true);
                    },
                success: function(msg) {
                    count_selected_row();
                    $("#SearchCard").html(msg);
                    overlay(false);
                }
            });
        }

        function count_selected_row(){
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

            var url_str = "<?php echo base_url();?>card/ajax_count_selected_row/";

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

            var credit_card_maximumInterestFreePeriod = new Array();
            $('input[name="maximumInterestFreePeriod"]:checked').each(function(){
                credit_card_maximumInterestFreePeriod.push($(this).val());
            });
            var credit_card_maximumInterestFreePeriod_list = "&credit_card_maximum_interest_free_period="+credit_card_maximumInterestFreePeriod;

            var credit_card_type = new Array();
            $('input[name="creditCardType"]:checked').each(function(){
                credit_card_type.push($(this).val());
            });
            var credit_card_type_list = "&credit_card_type="+credit_card_type;

            var credit_card_features_benefits = new Array();
            $('input[name="featuresBenefits"]:checked').each(function(){
                credit_card_features_benefits.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.material_label_checkbox').text().trim());
            });
            var credit_card_features_benefits = "&credit_card_features_benefits="+credit_card_features_benefits;

            var card_type = new Array();
            $('input[name="cardType"]:checked').each(function(){
                card_type.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.card_type_checkbox').text().trim());
            });
            var card_type_list = "&card_type="+card_type;

            var card_issuers = new Array();
            $('input[name="cardIssuer"]:checked').each(function(){
                card_issuers.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.card_issuer_checkbox').text().trim());
            });
            var card_issuers_list = "&card_issuers="+card_issuers;

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());

            });
            var bank_id_list = "&credit_card_bank_ids="+bank_ids;

            var credit_card_i_am_label = '&credit_card_i_am_label='+$('input[name="iAm"]:checked').parent().text().trim();
            var credit_card_income_range_label = '&credit_card_income_range_label='+$('input[name="myIncomeRange"]:checked').parent().text().trim();
            var credit_card_want_credit_limit_label = '&credit_card_want_credit_limit_label='+$('input[name="wantCreditLimit"]:checked').parent().text().trim();
            var credit_card_type_label = '&credit_card_type_label='+$('input[name="creditCardType"]:checked').parent().text().trim();
            var credit_card_maximum_interest_free_period_label = '&credit_card_maximum_interest_free_period_label='+$('input[name="maximumInterestFreePeriod"]:checked').parent().text().trim();

            var main_string = credit_card_i_am_list+bank_id_list+credit_card_myIncomeRange_list+credit_card_wantCreditLimit_list+credit_card_maximumInterestFreePeriod_list+credit_card_type_list+credit_card_i_am_label+credit_card_income_range_label+credit_card_want_credit_limit_label+credit_card_type_label+credit_card_features_benefits+card_type_list+card_issuers_list+credit_card_maximum_interest_free_period_label;
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
                        option.push('<li><div class="filter-option"><span>'+obj.credit_card_i_am_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_i_am" data-credit_card_i_am="'+ obj.credit_card_i_am +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.credit_card_income_range !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.credit_card_income_range_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_income_range" data-credit_card_income_range="'+ obj.credit_card_income_range +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.credit_card_want_credit_limit !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.credit_card_want_credit_limit_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_want_credit_limit" data-credit_card_want_credit_limit="'+ obj.credit_card_want_credit_limit +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.credit_card_type !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.credit_card_type_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_type" data-credit_card_type="'+ obj.credit_card_type +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.credit_card_maximum_interest_free_period !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.credit_card_maximum_interest_free_period_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_maximum_interest_free_period" data-credit_card_maximum_interest_free_period="'+ obj.credit_card_maximum_interest_free_period +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.card_issuers.length > 0 ){
                        for (var i = 0; i < obj.card_issuers.length; i++) {
                            var card_issuer_id = obj.card_issuers[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+card_issuer_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="card_issuer_id" data-card_issuer_id="'+ card_issuer_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }

                    }
                    if(obj.card_types.length > 0 ){
                        for (var i = 0; i < obj.card_types.length; i++) {
                            var card_type_id = obj.card_types[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+card_type_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="card_type_id" data-card_type_id="'+ card_type_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }

                    }
                    if(obj.credit_card_features_benefits.length > 0 ){
                        for (var i = 0; i < obj.credit_card_features_benefits.length; i++) {
                            var feature_id = obj.credit_card_features_benefits[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+feature_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_feature_benefit_id" data-credit_card_feature_benefit_id="'+ feature_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }

                    }
                    if(obj.credit_card_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.credit_card_bank_ids.length; i++) {
                            var bank_id = obj.credit_card_bank_ids[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+bank_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="credit_card_bank_id" data-credit_card_bank_id="'+ bank_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
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

        $(document).on('click','#clear_all',function(){
            var data = 'session=credit_card';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>card/ajax_clear_session",
                data:data,
                success: function(response)
                {
                    window.location.href = window.location.href;

                }
            });
        });

        $(document).on('click', '.credit_card_i_am', function (){
            var  formData = $(this).data();
            var credit_card_i_am = formData.credit_card_i_am;
            $('#iAm'+credit_card_i_am).prop('checked', false);
            var data = 'credit_card_i_am='+credit_card_i_am;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_i_am_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.credit_card_income_range', function (){
            var  formData = $(this).data();
            var credit_card_income_range = formData.credit_card_income_range;
            $('#myIncomeRange'+credit_card_income_range).prop('checked', false);
            var data = 'credit_card_income_range='+credit_card_income_range;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_income_range_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.credit_card_want_credit_limit', function (){
            var  formData = $(this).data();
            var credit_card_want_credit_limit = formData.credit_card_want_credit_limit;
            $('#wantCreditLimit'+credit_card_want_credit_limit).prop('checked', false);
            var data = 'credit_card_want_credit_limit='+credit_card_want_credit_limit;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_want_credit_limit_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
        $(document).on('click', '.credit_card_type', function (){
            var  formData = $(this).data();
            var credit_card_type = formData.credit_card_type;
            $('#creditCardType'+credit_card_type).prop('checked', false);
            var data = 'credit_card_type='+credit_card_type;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_type_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
        $(document).on('click', '.credit_card_maximum_interest_free_period', function (){
            var  formData = $(this).data();
            var credit_card_maximum_interest_free_period = formData.credit_card_maximum_interest_free_period;
            $('#maximumInterestFreePeriod'+credit_card_maximum_interest_free_period).prop('checked', false);
            var data = 'credit_card_maximum_interest_free_period='+credit_card_maximum_interest_free_period;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_maximum_interest_free_period_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
        $(document).on('click', '.credit_card_feature_benefit_id', function (){
            var  formData = $(this).data();
            var credit_card_feature_benefit_id = formData.credit_card_feature_benefit_id;
            $('#featuresBenefits'+credit_card_feature_benefit_id).prop('checked', false);
            var data = 'credit_card_feature_benefit_id='+credit_card_feature_benefit_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_feature_benefit_id_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
        $(document).on('click', '.card_type_id', function (){
            var  formData = $(this).data();
            var card_type_id = formData.card_type_id;
            $('#cardType'+card_type_id).prop('checked', false);
            var data = 'card_type_id='+card_type_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_card_types_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
        $(document).on('click', '.card_issuer_id', function (){
            var  formData = $(this).data();
            var card_issuer_id = formData.card_issuer_id;
            $('#cardIssuer'+card_issuer_id).prop('checked', false);
            var data = 'card_issuer_id='+card_issuer_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_card_issuer_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.credit_card_bank_id', function (){
            var  formData = $(this).data();
            var credit_card_bank_id = formData.credit_card_bank_id;
            $('#filter-bank-'+credit_card_bank_id).prop('checked', false);
            var data = 'credit_card_bank_id='+credit_card_bank_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/unset_credit_card_bank_id_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

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
            $('#comparison_alert').modal('show');
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
        if( ! $('.cart_anchor01').children('img').data()){
            $("#comparison_min_two_alert").modal('show');
        }
        var  formData = $('.cart_anchor').children('img').data();
        var card_url1 = formData.card_url;
        var  formData = $('.cart_anchor01').children('img').data();
        var card_url2 = formData.card_url;
        var card_urls = card_url1+'-vs-'+card_url2;
        if(card_url1 != '' && card_url2 != ''){
            window.location.href = "<?php echo base_url();?>compare-credit-cards/"+card_urls+".html";
        }else{
            $('#comparison_min_two_alert').modal('show');
        }

    });
</script>