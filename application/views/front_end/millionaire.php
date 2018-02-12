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
	
	/*For Millionier Scheme*/
	.mill_def_text{
		background: none !important;
		border: 0 !important;
		color: #b1b1b1 !important;
		font-style: italic;
		margin-top: 15px;
		text-align: center;
	}
	.mill_tenure_list {
		padding-left: 27px;
	}
	.mill_tenure_list>li{
		list-style: none;
		display: inline-block;
		margin-right: 10px;
	}
	.mill_tenure_list>li>input[type='checkbox']{

	}
	/*Custom checkbox*/
	.squaredOne {
		width: 28px;
		height: 28px;
		position: relative;
		margin: 0px auto 10px auto;
	}
	.squaredOne label {
		width: 25px;
		height: 25px;
		position: absolute;
		top: 4px;
		left: 4px;
		cursor: pointer;
		background: #58add4;
		box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px white;
		color: #fff;
		text-align: center;
		line-height: 2;
		border-radius: 3px;
		font-size: 12px;
	}
	.squaredOne label:after {
		content: '';
		width: 24px;
		height: 24px;
		position: absolute;
		top: 0px;
		left: 0px;
		opacity: 0;
		border: 2px solid #333;
		border-radius: 3px;
	}
	.squaredOne label:hover::after {
	  opacity: 0.3;
	}
	.squaredOne input[type=checkbox] {
	  visibility: hidden;
	}
	.squaredOne input[type=checkbox]:checked + label:after {
	  opacity: 1;
	  border: 2px solid #333;
	}
    label.checkDisable {
        background: #a5a5a5;
    }

    #millionaire_tenure{width: 233px;}
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

<section id="maximizer_header"></section>


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
                                                    if(isset($this->session->userdata['millionaire_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['millionaire_bank_ids']);
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
                                                    <a class="btn-filter-clear"  href="javascript:void(0);" id="clear_all">
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
                                $loan_user = $this->Select_model->select_all('millionaire_i_am','ASC');
                                foreach($loan_user->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="i_am" id="i_am<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_i_am") == $row->id) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->i_am; ?>
                                    </label><br/>
                                <?php } ?>
                            </div>
                        </div>


						<div class="clearfix"></div>

						<div class="card_query_fdr" style="border-bottom:0">
							<p>Select Maturity Amount</p>

							<!--p class="mill_def_text">Select Amount</p-->
                            <div class="fdrTenurepadding">
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount"  id="maturity_amount1" value="1" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "1" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        100 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount"  id="maturity_amount2" value="2" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "2" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        200 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount3" value="3" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "3" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        300 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount4" value="4" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "4" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        400 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount"  id="maturity_amount5" value="5" class="material_radiobox" <?php echo ($this->session->userdata("millionaire_maturity_amount") == "5" ) ? 'checked' :'' ?> />
                                        <span class="material_check_radio"></span>
                                        500 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount6" value="6" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "6" ) ? 'checked' :'' ?> />
                                        <span class="material_check_radio"></span>
                                        1 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount"  id="maturity_amount7" value="7" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "7" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        2.5 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount8" value="8" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "8" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        5 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount9" value="9" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "9" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        10 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount10" value="10" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "10" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        20 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount11" value="11" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "11" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        30 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" id="maturity_amount12" value="12" class="material_radiobox"  <?php echo ($this->session->userdata("millionaire_maturity_amount") == "12" ) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        40 Million
                                    </label>
                                </div>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="card_query_fdr">
							<p>Tenure</p>

							<p class="mill_def_text" id="tenure_label">Tenure Based on 100K</p>

							<ul class="no-pading mill_tenure_list" id="millionaire_tenure">
								<li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="1" id="check01" name="check" disabled/>
                                            <label for="check01" class="checkDisable">1</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="2" id="check02" name="check" disabled/>
                                            <label for="check02" class="checkDisable">2</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="3" id="check03" name="check" disabled/>
                                            <label for="check03" class="checkDisable">3</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="4" id="check04" name="check" disabled/>
                                            <label for="check04" class="checkDisable">4</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="5" id="check05" name="check" disabled/>
                                            <label for="check05" class="checkDisable">5</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="6" id="check06" name="check" disabled/>
                                            <label for="check06" class="checkDisable">6</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="7" id="check07" name="check" disabled/>
                                            <label for="check07" class="checkDisable">7</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="8" id="check08" name="check" disabled/>
                                            <label for="check08" class="checkDisable">8</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="9" id="check09" name="check" disabled/>
                                            <label for="check09" class="checkDisable">9</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="10" id="check10" name="check" disabled/>
                                            <label for="check10" class="checkDisable">10</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>

                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="11" id="check11" name="check" disabled/>
                                            <label for="check11" class="checkDisable">11</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="12" id="check12" name="check" disabled/>
                                            <label for="check12" class="checkDisable">12</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="13" id="check13" name="check" disabled/>
                                            <label for="check13" class="checkDisable">13</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="14" id="check14" name="check" disabled/>
                                            <label for="check14" class="checkDisable">14</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="15" id="check15" name="check" disabled/>
                                            <label for="check15" class="checkDisable">15</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>

                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="16" id="check16" name="check" disabled/>
                                            <label for="check16" class="checkDisable">16</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="17" id="check17" name="check" disabled/>
                                            <label for="check17" class="checkDisable">17</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="18" id="check18" name="check" disabled/>
                                            <label for="check18" class="checkDisable">18</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="19" id="check19" name="check" disabled/>
                                            <label for="check19" class="checkDisable">19</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="20" id="check20" name="check" disabled/>
                                            <label for="check20" class="checkDisable">20</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
							</ul>
						</div>

						<div class="clearfix"></div>


					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
                <div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">
                    <div id="searchMillionaire">
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
    // This function will be executed when the user scrolls the page.
    $(document).on("scroll",function () {
        var header = $("#sidebar").offset().top;
        var scroll = $(window).scrollTop();

        var top_height = $('#top-page').height();
        var banner_height = $('#maximizer_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        if (scroll > header || header > 0){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").addClass("fixed");
        }
        if ($('#SearchDebitCard').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });

    $(document).ready(function(){
        // This function will be executed when the user scrolls the page.
        setTimeout(function(){
            //alert($("#finalAssest").val());
            $("#finalAssest").focus();
            $("#finalAssest").blur();

            $("#finalLiability").focus();
            $("#finalLiability").blur();
        },500);
    });

</script>
<script type="text/javascript">
	jQuery(document).ready(function($){

        $('#searchMillionaire').on('click', '.more_info', function (){

            var  formData = $(this).data();
            var millionaire_id = formData.millionaire_id;
            $("#moreInfo"+millionaire_id).toggleClass("in");
            $('#availableOfferSchedule'+millionaire_id).removeClass("in");
            if($("#moreInfo"+millionaire_id).hasClass('in')){
                $('#more_info'+millionaire_id).html("<i class='fa fa-info-circle'></i> Less info");
            }else{
                $('#more_info'+millionaire_id).html("<i class='fa fa-info-circle'></i> More info");
            }

        });

        $('#searchMillionaire').on('click', '.availableOffer', function (){

            var  formData = $(this).data();
            var offer = formData.offer;
//            console.log(offer);
            $('#availableOfferSchedule'+offer).html('<iframe  src="<?php echo base_url(); ?>en/home_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#availableOfferSchedule'+offer).toggleClass("in");
            $('#moreInfo'+offer).removeClass("in");

        });


        $('input[name="maturity_amount"]').on('click',function() {
            var amount = $(this).val();
            var thisVal= '&selected_amount='+$(this).val();
            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&millionaire_bank_ids="+bank_ids;
            var main_string = thisVal+bank_id_list;
            main_string = main_string.substring(1, main_string.length);

            var amount_list = {1:'100K', 2:'200K', 3:'300K',4:'400K',5:'500K',6:'1 Million',7:'2.5 Million', 8:'5 Million',9:'10 Million',10:'20 Million',11:'30 Million',12:'40 Million'};
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>millionaire/ajax_get_tenure",
                data: main_string,
                cache: false,
                success: function(msg)
                {
                    $("#millionaire_tenure").html(msg);
                    $('#tenure_label').html('Tenure Based on '+ amount_list[amount]);
                }
            });
        });
        $('input[name="maturity_amount"]:checked').each(function(){
            var amount = $(this).val();
            var thisVal= '&selected_amount='+$(this).val();
            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&millionaire_bank_ids="+bank_ids;
            var main_string = thisVal+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
            var amount_list = {1:'100K', 2:'200K', 3:'300K',4:'400K',5:'500K',6:'1 Million',7:'2.5 Million', 8:'5 Million',9:'10 Million',10:'20 Million',11:'30 Million',12:'40 Million'};
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>millionaire/ajax_get_tenure",
                data: main_string,
                cache: false,
                success: function(msg)
                {
                    $("#millionaire_tenure").html(msg);
                    $('#tenure_label').html('Tenure Based on '+ amount_list[amount]);
                }
            });
        });


    });
</script>


<script type="text/javascript">

//for show hide (more info & Available Offer)

$(document).ready(function() {

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
    //            alert(cur_page);
            loadData(cur_page);
            //console.log(cur_page);
        });


    function loadData( page = null ){

            var millionaire_tenure = new Array();
            $('input[name="millionaire_tenure"]:checked').each(function(){
                millionaire_tenure.push($(this).val());
            });

            var millionaire_tenure_list = "&millionaire_tenure="+millionaire_tenure;


            var millionaire_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                millionaire_user.push($(this).val());
            });
            var millionaire_user_list = "&millionaire_user="+millionaire_user;

            var maturity_amount = new Array();
            $('input[name="maturity_amount"]:checked').each(function(){
                maturity_amount.push($(this).val());
            });
            var maturity_amount_list = "&maturity_amount="+maturity_amount;

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "&millionaire_bank_ids="+bank_ids;

        var main_string = millionaire_tenure_list+millionaire_user_list+maturity_amount_list+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
        var page_count ='';
        if( page != null ){
            page_count = page ;
        }
        var url_str = "<?php echo base_url();?>millionaire/ajax_get_millionaire/" + page_count;
//            console.log(main_string);
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
                    $("#searchMillionaire").html(msg);
                    overlay(false);

                }
            });
        }

    function data_caching(){


        var millionaire_tenure = new Array();
        $('input[name="millionaire_tenure"]:checked').each(function(){
            millionaire_tenure.push($(this).val());
        });

        var millionaire_tenure_list = "&millionaire_tenure="+millionaire_tenure;


        var millionaire_user = new Array();
        $('input[name="i_am"]:checked').each(function(){
            millionaire_user.push($(this).val());
        });
        var millionaire_user_list = "&millionaire_i_am="+millionaire_user;

        var maturity_amount = new Array();
        $('input[name="maturity_amount"]:checked').each(function(){
            maturity_amount.push($(this).val());
        });
        var maturity_amount_list = "&millionaire_maturity_amount="+maturity_amount;

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());
        });
        var bank_id_list = "&millionaire_bank_ids="+bank_ids;

        var millionaire_i_am_label = '&millionaire_i_am_label='+$('input[name="i_am"]:checked').parent().text().trim();
        var millionaire_maturity_amount_label = '&millionaire_maturity_amount_label='+$('input[name="maturity_amount"]:checked').parent().text().trim();

        var main_string = millionaire_tenure_list+millionaire_user_list+maturity_amount_list+bank_id_list+millionaire_i_am_label+millionaire_maturity_amount_label;
        main_string = main_string.substring(1, main_string.length);

        var url_str = "<?php echo base_url();?>millionaire/ajax_millionaire_caching/" ;

        $.ajax({
            type: "POST",
            url: url_str,
            data: main_string,
            cache: false,
            success: function(response){
                var option = [];
                var obj = JSON.parse(response);
                if(obj.millionaire_i_am !=''){
                    option.push('<li><div class="filter-option"><span>'+obj.millionaire_i_am_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="millionaire_i_am" data-millionaire_i_am="'+ obj.millionaire_i_am +'"><i class="icon-close icons"></i></span></a></div></li>');
                }

                if(obj.millionaire_maturity_amount !=''){
                    option.push('<li><div class="filter-option"><span>'+obj.millionaire_maturity_amount_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="millionaire_maturity_amount" data-millionaire_maturity_amount="'+ obj.millionaire_maturity_amount +'"><i class="icon-close icons"></i></span></a></div></li>');
                }

                if(obj.millionaire_tenure.length > 0 ){
                    for (var i = 0; i < obj.millionaire_tenure.length; i++) {
                        var tenure_id = obj.millionaire_tenure[i];
                        var tenure_label = 'Year';
                        if(tenure_id > 1){
                            tenure_label = 'Years'
                        }

                        option.push('<li><div class="filter-option"><span>'+tenure_id+' ' +tenure_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="millionaire_tenure" data-millionaire_tenure="'+ tenure_id +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                }

                if(obj.millionaire_bank_ids.length > 0 ){
                    for (var i = 0; i < obj.millionaire_bank_ids.length; i++) {
                        var bank_id = obj.millionaire_bank_ids[i].split("=");
//                            console.log(bank_id[0]);
                        option.push('<li><div class="filter-option"><span>'+bank_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="millionaire_bank_id" data-millionaire_bank_id="'+ bank_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                }
                $(".filter-list").html(option);
            }
        });
    }

    function count_selected_row(){

        var millionaire_tenure = new Array();
        $('input[name="millionaire_tenure"]:checked').each(function(){
            millionaire_tenure.push($(this).val());
        });

        var millionaire_tenure_list = "&millionaire_tenure="+millionaire_tenure;


        var millionaire_user = new Array();
        $('input[name="i_am"]:checked').each(function(){
            millionaire_user.push($(this).val());
        });
        var millionaire_user_list = "&millionaire_user="+millionaire_user;

        var maturity_amount = new Array();
        $('input[name="maturity_amount"]:checked').each(function(){
            maturity_amount.push($(this).val());
        });
        var maturity_amount_list = "&maturity_amount="+maturity_amount;

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "&millionaire_bank_ids="+bank_ids;

        var main_string = millionaire_tenure_list+millionaire_user_list+maturity_amount_list+bank_id_list;
        main_string = main_string.substring(1, main_string.length);
        var url_str = "<?php echo base_url();?>millionaire/ajax_count_selected_row/";

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

    $("input[type='checkbox'],input[type='radio']").on( "click", function() {
        data_caching();
        loadData( page = null );
    } );

    $(document).on('click','.squaredOne input[type="checkbox"]',function() {
        data_caching();
        loadData( page = null )
    });
    data_caching();
    loadData( page = null );

    $(document).on('click', '.millionaire_i_am', function (){
        var  formData = $(this).data();
        var millionaire_i_am = formData.millionaire_i_am;
        $('#i_am'+millionaire_i_am).prop('checked', false);
        var data = 'millionaire_i_am='+millionaire_i_am;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>millionaire/unset_millionaire_i_am_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });
    $(document).on('click', '.millionaire_maturity_amount', function (){
        var  formData = $(this).data();
        var millionaire_maturity_amount = formData.millionaire_maturity_amount;
        $('#maturity_amount'+millionaire_maturity_amount).prop('checked', false);
        var data = 'millionaire_maturity_amount='+millionaire_maturity_amount;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>millionaire/unset_millionaire_maturity_amount_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });

    $(document).on('click', '.millionaire_bank_id', function (){
        var  formData = $(this).data();
        var millionaire_bank_id = formData.millionaire_bank_id;
        $('#filter-bank-'+millionaire_bank_id).prop('checked', false);
        var data = 'millionaire_bank_id='+millionaire_bank_id;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>millionaire/unset_millionaire_bank_id_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });

    $(document).on('click', '.millionaire_tenure', function (){
        var  formData = $(this).data();
        var millionaire_tenure = formData.millionaire_tenure;
        $('#check'+millionaire_tenure).prop('checked', false);
        var data = 'millionaire_tenure='+millionaire_tenure;
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>millionaire/unset_millionaire_tenure_session",
            data: data,
            success: function(msg){
                loadData( page = null );
            }
        });

    });


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
            var millionaire_id = "millionaire_id="+formData.millionaire_id;
            setTimeout(function(){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>millionaire/ajax_compare_millionaire_image",
                    data: millionaire_id,
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
            var millionaire_id = "millionaire_id="+formData.millionaire_id;
            setTimeout(function(){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>millionaire/ajax_compare_millionaire_image",
                    data: millionaire_id,
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

        var collected_card = $(this).prev().attr("data-millionaire_id");

        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-millionaire_id');
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
        var millionaire_url1 = formData.millionaire_url;
        var  formData = $('.cart_anchor01').children('img').data();
        var millionaire_url2 = formData.millionaire_url;
        var millionaire_urls = millionaire_url1+'-vs-'+millionaire_url2;
        if(millionaire_url1 != '' && millionaire_url2 != ''){
            window.location.href = "<?php echo base_url();?>compare-millionaires/"+millionaire_urls+".html";
        }else{
            $('#comparison_min_two_alert').modal('show');
        }
    });
</script>