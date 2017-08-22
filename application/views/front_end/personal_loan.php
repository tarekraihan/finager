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

	.card_details_pronsCons {
		margin-top:0px;
		border-bottom:0px;
	}
	.tPaybleAmount{
		font-size:9px;
	}

	.btnPmore {
		background-color: #f3f3f3;
		border: 1px solid #EAEAEC;
		padding: 1px 8px;
		margin-bottom: 5px;
		border-radius: 6px;
		font-size: 12px;
		font-weight: bold;

	}
	.btnPmore:hover {
		background-color: #2B99BB;
		color: #fff;
		border: 1px solid #2B99BB;
	}

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
        min-height: 600px;;
    }
    #sidebar{
        margin-top: 0;
    }
</style>

	<section id="personal_header">
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
                                                        <a class="btn-filter-clear" href="javascript:;">
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
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 2</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 3</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 4</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 5</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 6</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 7</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 8</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 9</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                        <li>
                            <span class="filter-option">
                            <span>Filter Option 10</span>
                            <a href="javascript:;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1 no-padding-left">
                    <a class="btn-filter-clear" href="javascript:;">
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
                    <div class="card_left_bar home_loan_left_bar" id="sidebar">
						<!-- slider range sidebar start-->
						<div class="card_query">
							<p>I Want </p>
							<div class="query_radio">
								<div>
									<?php
									$this->Common_model->table_name = 'personal_loan_looking_for';
									$this->Common_model->offset = 0;
									$this->Common_model->limit = 3;
									$result = $this->Common_model->select_all();
									foreach($result->result() as $row){
										?>
										<label class="material_radio_group">
											<input type="radio" name="i_want"  id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" <?php echo ($this->session->userdata('personal_loan_i_want') == $row->id) ? 'checked' : '' ?> class="material_radiobox"/>
											<span class="material_check_radio"></span>
											<?php echo $row->personal_loan_looking_for;?>
										</label><br/>
									<?php } ?>
								</div>
								<div>
									<button class="btnPmore" data-toggle="<?php echo ($this->session->userdata('personal_loan_i_want') > 2) ? 'collapsed' : 'collapse' ?>" data-target="#demo"><?php echo ($this->session->userdata('personal_loan_i_want') > 2) ? 'Less' : 'More' ?></button>
								</div>
								<div id="demo" class="collapse <?php echo ($this->session->userdata('personal_loan_i_want') != '') ? 'in' : '' ?>">
									<?php
									$this->Common_model->table_name = 'personal_loan_looking_for';
									$this->Common_model->offset = 3;
									$this->Common_model->limit = 20;
									$result = $this->Common_model->select_all();
									foreach($result->result() as $row){
										?>
										<label class="material_radio_group">
											<input type="radio" name="i_want"  id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" <?php echo ($this->session->userdata('personal_loan_i_want') == $row->id) ? 'checked' : '' ?> class="material_radiobox"/>
											<span class="material_check_radio"></span>
											<?php echo $row->personal_loan_looking_for;?>
										</label><br/>
									<?php } ?>
								</div>
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

													                  <input type="text" name="" value="6" id="finalLiability" class="input_AIR"/>

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

													                    <ul>

													                    </ul>

													                  </div>

													                  <div class="prev"></div>

													                  <div class="next active"></div>

													                </div>

													                <div class="hideVal">6</div>

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
								$this->Common_model->table_name = 'personal_loan_i_am';
								$this->Common_model->offset = 0;
								$this->Common_model->limit = 20;
								$result = $this->Common_model->select_all();
								foreach($result->result() as $row){
								?>
									<label class="material_radio_group">
										<input type="radio" name="i_am"  id="i_am<?php echo $row->id; ?>"  value="<?php echo $row->id ;?>" class="material_radiobox"  <?php echo ($this->session->userdata('personal_loan_i_am') == $row->id) ? 'checked' : '' ?>/>
										<span class="material_check_radio"></span>
										<?php echo $row->i_am; ?>
									</label><br/>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<!-- Left bar query content end -->
				<!-- Right bar content start -->
                <div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">

					<div id="searchPersonalLoan">
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
                                        <li></li>
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


<script src="<?php echo base_url();?>resource/front_end/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/Ppersonal-loan-calculator.js"></script>



<script>

    $(document).ready(function(){
        // This function will be executed when the user scrolls the page.
        /*$(document).on("scroll",function () {
            var scroller_anchor = $("#sidebar").offset().top;
            var sidebar_height = $("#sidebar").height();
            var window_height = $(window).height();

            var offsetToTop = parseInt($(this).scrollTop());
            var stickySidebar = $('#sidebar').offset() || { "top": NaN }.top;

            var top_height = $('#top-page').height();
            var banner_height = $('#personal_header').height();
            var filter_height = $('#filter-bar').height();
            var total_top = parseInt(top_height+banner_height+filter_height+35);
            var main_height = parseInt($(".main-content-area").height());

            $(".sidebar_parent").height(main_height-20);

            // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
            if ($(window).scrollTop() >= scroller_anchor && sidebar_height < window_height )
            {
                $('#sidebar').addClass('fixed');
            }

            if ($(window).scrollTop() < scroller_anchor && sidebar_height > window_height )
            {
                $('#sidebar').removeClass('fixed');
            }

            if($('#sidebar').offset().top + $('#sidebar').height() >= $('.footer').offset().top-65){
                $("#sidebar").removeClass("fixed");
                $("#sidebar").addClass("sidebar-absolute-bottom");
            }

            if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top+65){
                $("#sidebar").addClass("fixed");
                $("#sidebar").removeClass("sidebar-absolute-bottom");
            }

            if($("#sidebar").offset().top < total_top){
                $("#sidebar").removeClass("fixed");
                $("#sidebar").addClass("sidebar-absolute");
            }

        });*/

        var current_page = '<?php echo base_url();?>en/all_personal_loan';

        var page = '<?php echo($this->uri->segment(3)) ?>';
            if( page ){
            }else{
                page = 0;
            }

    	$(".btnPmore").click(function(){

    		if($(this).hasClass("btn-open")){
	    		$(this).text("More");
	    		$(this).removeClass("btn-open");
				$('#demo').removeClass("in");
	    	}else{
	    		$(this).text("Less");
	    		$(this).addClass("btn-open");
				$('#demo').addClass("in");
	    	}
    	});

    	//pagination START

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
            loadData(page);
        });

        function loadData( page = null  ){
            var amount = $('#finalAssest').val();
            var principal_amount = "&principal_amount="+amount;
            var month = $('#finalLiability').val();
            var month_limit = "&month_limit="+month;
            var personal_i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                personal_i_want.push($(this).val());
            });
            var personal_i_want_list = "&personal_i_want="+personal_i_want;
            var personal_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                personal_user.push($(this).val());
            });
            var personal_user_list = "&personal_user="+personal_user;
            var main_string = personal_i_want_list+personal_user_list+principal_amount+month_limit;
            main_string = main_string.substring(1, main_string.length);
            var page_count ='';
            if( page != null ){
                page_count = page ;
            }
            var url_str = "<?php echo base_url();?>personal_loan/ajax_get_personal_loan/" + page_count;

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
                    overlay(true,true);
                },
                success: function(msg){
                    $("#searchPersonalLoan").html(msg);
                    overlay(false);
                }
            });
        }



        loadData(page);

        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData(page);
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
        // Stop dragging calculator and fire event for search


		$('#searchPersonalLoan').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var loan_id = formData.loan_id;
            console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");
            if($("#moreInfo"+loan_id).hasClass('in')){
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> Less info");
            }else{
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> more info");
            }
        });


        $('#searchPersonalLoan').on('click', '.rePaymentSchedule', function (){
            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);

            $('#rePaymentSchedule'+repayment).html('<iframe  src="<?php echo base_url(); ?>en/personal_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');

            $('#rePaymentSchedule'+repayment).toggleClass("in");

            $('#moreInfo'+repayment).removeClass("in");

        });

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

//                alert(1);

                //Select item image and pass to the function

                var itemImg = $(this).parents('.full-card').find('.personal_loan_logo').eq(0);

                //flyToElement($(itemImg), $('.cart_anchor01'));

                $(".cart_anchor01").addClass("img_active");

                $(this).addClass("hidden");



                // var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);

                var  formData = $(this).data();

                var loan_id = "loan_id="+formData.loan_id;

//                alert(loan_id);



                setTimeout(function(){

                    $.ajax

                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>personal_loan/ajax_compare_personal_loan_image",
                        data: loan_id,
                        success: function(msg)
                        {
                            $(".cart_anchor01").html(msg);
                        }
                    });
                },850);

            }
            else{

                //Select item image and pass to the function
                var itemImg = $(this).parents('div:eq(0)').find('.personal_loan_logo').eq(0);
                //flyToElement($(itemImg), $('.cart_anchor'));

                $(".cart_anchor").addClass("img_active");
                $(this).addClass("hidden");

                var itemImg = $(this).parents('div:eq(0)').find('.personal_loan_logo').eq(0);
                var  formData = $(this).data();
                var loan_id = "loan_id="+formData.loan_id;
                //alert(loan_id);

                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>personal_loan/ajax_compare_personal_loan_image",
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

    $('#go_compare').click(function(){
        //alert(1);


        var amount = $('#finalAssest').val();
        var principal_amount = "&principal_amount="+amount;

        var month = $('#finalLiability').val();
        var month_limit = "&month_limit="+month;

        var  formData = $('.cart_anchor').children('img').data();
        var loan_id1 = "loan_id1="+formData.loan_id;

        var  formData = $('.cart_anchor01').children('img').data();
        var loan_id2 = "&loan_id2="+formData.loan_id;

        var loan_ids = loan_id1+loan_id2+principal_amount+month_limit;
        if(loan_id1 != '' && loan_id2 != ''){
            console.log(loan_ids);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>personal_loan/ajax_go_compare_page",
                data: loan_ids,
                success: function(msg)
                {
                    if(msg != 'error'){

                        window.location.href = "<?php echo base_url();?>en/personal_loan_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 card for compare ! ")
        }


    });

</script>