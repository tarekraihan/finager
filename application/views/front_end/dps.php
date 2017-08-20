<!--
/*********************************
*  Design : S. M. Rubiyet        *
*  UI : Sifuddin Lokman          *
*  Programmer : Tarek Raihan     *
*  Date : 09-11-2016			 *
**********************************/
-->
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

	.material_check_radio {
		border: 2px solid #d7ad75;
	}
	.material_check_radio::after {
		background-color: #905300;
	}
	.more_availabe i {
		color: #d3a465;
	}
	.home_loan_left_bar p {
		border-bottom: 1px solid #DADADA;
		background-color: #D09F5C;
		padding-left: 8px;
		color: #fff;
		font-weight: bold;
	}
	.home_loan_left_bar {
		border: 2px solid #D09F5C;
	}
	.card_query {
		border-bottom: 0px;
	}
	.card_query_fdr {
		border-bottom: 0px;
		height: 368px;
	}
	.fdr_right_bar {
		border: 1px solid #D09E59;
	}

</style>
<section id="dps_header"></section>

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
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-01" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-01">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(1).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-02" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-02">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(2).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-03" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-03">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(3).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-04" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-04">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(4).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-05" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-05">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(4).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-06" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-06">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(5).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-07" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-07">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(6).png" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-08" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-08">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-09" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-09">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-10" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-10">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-11" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-11">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-12" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-12">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-13" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-13">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-03" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-14">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-03" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-15">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="item row">
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-016" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-16">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-17" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-17">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-18" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-18">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-19" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-19">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-20" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-20">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-21" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-21">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-22" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-22">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-23" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-23">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-24" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-24">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-25" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-25">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-26" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-26">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-27" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-27">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-28" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-28">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-29" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-29">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4 col-xs-12">
                                                        <div class="material_checkbox_group">
                                                            <input type="checkbox" id="filter-bank-30" name="featuresBenefits" value="" class="material_checkbox">
                                                            <label class="material_label_checkbox" for="filter-bank-30">
                                                                <div class="filter-check-img">
                                                                    <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                </div>
                                                                <div class="filter-check-name">
                                                                    Waiver on Annual Fee
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
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
                                                    <a class="btn-filter-clear" href="javascript:void(0);">
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
                    <li>
                            <span class="filter-option">
                                <span>Filter Option 1</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 2</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 3</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 4</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 5</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 6</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 7</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 8</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 9</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>

                    <li>
                            <span class="filter-option">
                                <span>Filter Option 10</span>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                    </li>
                </ul>
            </div>
            <div class="col-md-1 no-padding-left">
                <a class="btn-filter-clear" href="javascript:void(0);">
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
				<div class="col-sm-3 col-xs-3">
					<div class="home_loan_left_bar">
						<div class="card_query">
							<p>I Am</p>
							<div class="query_radio">
								<?php
								$loan_user = $this->Select_model->select_all('fdr_i_am','ASC');
								foreach($loan_user->result() as $row){
								?>
								<label class="material_radio_group">
									<input type="radio" name="i_am" value="<?php echo $row->id; ?>" class="material_radiobox"  <?php echo ($this->session->userdata("dps_i_am") == $row->id) ? 'checked' :'' ?>/>
									<span class="material_check_radio"></span>
									<?php echo $row->i_am; ?>
								</label><br/>
								<?php } ?>
							</div>
						</div>
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
																		<div class="hideVal">500</div>
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
						</div>
						<div class="card_query_fdr">
							<p>Tenure</p>
							<div class="fdrTenurepadding">
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="1" class="material_radiobox" <?php echo ($this->session->userdata("dps_tenure") == "1") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										1 Year
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="2" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "2") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										2 Year
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="3" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "3") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										3 Year 
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="4" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "4") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										4 Year 
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="5" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "5") ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										5 Year
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="6" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "6") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										6 Year
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="7" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "7") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										7 Years 
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="8" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "8") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										8 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="9" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "9") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										9 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="10" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "10") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										10 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="15" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "15") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										11 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="11" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "11") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										12 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="12" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "12") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										14 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="13" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "13") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										15 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" value="14" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "14") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										20 Years
									</label>
								</div>
							</div>
							</div>

						</div>

				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
				<div class="col-sm-9 col-xs-9">
					<div id="searchDPS">
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
	<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/dps-calculator.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        setTimeout(function(){
            //alert($("#finalAssest").val());
            $("#finalAssest").focus();
            $("#finalAssest").blur();

            $("#finalLiability").focus();
            $("#finalLiability").blur();
        },500);
    });

$(window).on('scroll', function (){
	if ($(window).scrollTop() > 350){
	  $('.home_loan_left_bar').addClass('fixedElement');
	}if($(window).scrollTop()<350){
	  $('.home_loan_left_bar').removeClass('fixedElement');
	}if($(window).scrollTop() > 2050){
	  $('.home_loan_left_bar').removeClass('fixedElement');
	}
});
</script>

<script>
	$(document).ready(function(){

		$(document).on('click','#pagination a',function(e){
			e.preventDefault();
			page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
			loadData(page);
		});

        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(page = null ){
            loading_show();


			var amount = $('#finalAssest').val();
			var deposited_amount = "&deposited_amount="+amount;


			var dps_tenure = new Array();
            $('input[name="dps_tenure"]:checked').each(function(){
                dps_tenure.push($(this).val());
            });

            var dps_tenure_list = "&dps_tenure="+dps_tenure;


            var dps_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                dps_user.push($(this).val());
            });
            var dps_user_list = "&dps_user="+dps_user;


            var main_string = dps_tenure_list+dps_user_list+deposited_amount;
            main_string = main_string.substring(1, main_string.length);
            console.log(main_string);
			var page_count ='';
			if( page != null ){
				page_count = page ;
			}
			var url_str = "<?php echo base_url();?>dps/ajax_get_dps/" + page_count;
            $.ajax
            ({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchDPS").html(msg);

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

        $('#finalAssest').on('keyup',function(){
            loadData( page = null );
        });



        $('#searchDPS').on('click', '.more_info', function (){
			var  formData = $(this).data();
			var dps_id = formData.dps_id;
			console.log(dps_id);
			$("#moreInfo"+dps_id).toggleClass("in");
			$('#availableOffer'+dps_id).removeClass("in");
		});

		$('#searchDPS').on('click', '.availableOffer', function (){
			var  formData = $(this).data();
			var available_offer = formData.available_offer;
			console.log(available_offer);

			$('#availableOffer'+available_offer).toggleClass("in");
			$('#moreInfo'+available_offer).removeClass("in");

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
					var itemImg = $(this).parents('.full-card').find('.dps_bank_logo').eq(0);
					//flyToElement($(itemImg), $('.cart_anchor01'));
					$(".cart_anchor01").addClass("img_active");
					$(this).addClass("hidden");
					// var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
					var  formData = $(this).data();
					var dps_id = "dps_id="+formData.dps_id;


					setTimeout(function(){
						$.ajax({
							type: "POST",
							url: "<?php echo base_url();?>dps/ajax_compare_dps_image",
							data: dps_id,
							success: function(msg){
								$(".cart_anchor01").html(msg);
							}
						});
					},850);
				}

				else{
					//Select item image and pass to the function
					var itemImg = $(this).parents('div:eq(0)').find('.dps_bank_logo').eq(0);
					$(".cart_anchor").addClass("img_active");
					$(this).addClass("hidden");
					var itemImg = $(this).parents('div:eq(0)').find('.dps_bank_logo').eq(0);
					var  formData = $(this).data();
					var dps_id = "dps_id="+formData.dps_id;
					setTimeout(function(){
						$.ajax({
							type: "POST",
							url: "<?php echo base_url();?>dps/ajax_compare_dps_image",
							data: dps_id,
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

			var collected_card = $(this).prev().attr("data-dps_id");

			$(".full-card").each(function(){
				var obj=$(this).children().find('.add-to-compare');
				var index=$(this).children().find('.add-to-compare').attr('data-dps_id');
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
			var dps_id1 = "dps_id1="+formData.dps_id;
			var  formData = $('.cart_anchor01').children('img').data();
			var dps_id2 = "&dps_id2="+formData.dps_id;
			var amount = $('#finalAssest').val();
			if(amount == ''){
				amount = 500;
			}
			var deposit_amount = "&deposit_amount="+amount;

			var dps_info = dps_id1+dps_id2+deposit_amount;
			if(dps_id1 != '' && dps_id2 != ''){
				$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>dps/ajax_go_compare_page",
					data: dps_info,
					success: function(msg){
						if(msg != 'error'){
							window.location.href = "<?php echo base_url();?>en/dps_compare";
						}
					}
				});
			}else{
				alert("Please add 2 DPS for compare ! ");
			}
		});
	});
</script>