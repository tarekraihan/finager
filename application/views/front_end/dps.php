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
		padding-left: 10px;
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
		border-bottom: 0px !important;
		height: 368px;
	}
	.fdr_right_bar {
		border: 1px solid #D09E59;
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
                                                    <?php
                                                    $selected_bank_ids = array();
                                                    if(isset($this->session->userdata['dps_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['dps_bank_ids']);
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
								$loan_user = $this->Select_model->select_all('fdr_i_am','ASC');
								foreach($loan_user->result() as $row){
								?>
								<label class="material_radio_group">
									<input type="radio" name="i_am" value="<?php echo $row->id; ?>" id="i_am<?php echo $row->id; ?>" class="material_radiobox"  <?php echo ($this->session->userdata("dps_i_am") == $row->id) ? 'checked' :'' ?>/>
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
										<input type="radio" name="dps_tenure" id="dps_tenure1" value="1" class="material_radiobox" <?php echo ($this->session->userdata("dps_tenure") == "1") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										1 Year
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure2" value="2" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "2") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										2 Year
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure3" value="3" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "3") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										3 Year 
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure4" value="4" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "4") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										4 Year 
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="5" value="5" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "5") ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										5 Year
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure6" value="6" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "6") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										6 Year
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure7" value="7" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "7") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										7 Years 
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure8" value="8" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "8") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										8 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure9" value="9" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "9") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										9 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure10" value="10" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "10") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										10 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure15" value="15" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "15") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										11 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure11" value="11" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "11") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										12 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure12" value="12" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "12") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										14 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure13" value="13" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "13") ? 'checked' :'' ?>/>
										<span class="material_check_radio"></span>
										15 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="dps_tenure" id="dps_tenure14" value="14" class="material_radiobox"  <?php echo ($this->session->userdata("dps_tenure") == "14") ? 'checked' :'' ?>/>
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
                <div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">
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

    // This function will be executed when the user scrolls the page.
    $(document).on("scroll",function () {
        var header = $("#sidebar").offset().top;
        var scroll = $(window).scrollTop();

        var top_height = $('#top-page').height();
        var banner_height = $('#dps_header').height();
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
        setTimeout(function(){
            //alert($("#finalAssest").val());
            $("#finalAssest").focus();
            $("#finalAssest").blur();

            $("#finalLiability").focus();
            $("#finalLiability").blur();
        },500);
    });

</script>

<script>
	$(document).ready(function(){

		$(document).on('click','#pagination a',function(e){
			e.preventDefault();
			page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
			loadData(page);
		});

        function loadData(page = null ){

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
            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&dps_bank_ids="+bank_ids;


            var main_string = dps_tenure_list+dps_user_list+deposited_amount+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
//            console.log(main_string);
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
                beforeSend: function() {
                    overlay(true,true);
                },
                success: function(msg)
                {
					count_selected_row();
                    $("#searchDPS").html(msg);
					overlay(false);

                }
            });
        }

        function data_caching(){

            var dps_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                dps_user.push($(this).val());
            });
            var dps_user_list = "&dps_i_am="+dps_user;

            var dps_tenure = new Array();
            $('input[name="dps_tenure"]:checked').each(function(){
                dps_tenure.push($(this).val());
            });
            var dps_tenure_list = "&dps_tenure="+dps_tenure;

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());
            });
            var bank_id_list = "&dps_bank_ids="+bank_ids;

            var dps_i_am_label = '&dps_i_am_label='+$('input[name="i_am"]:checked').parent().text().trim();
            var dps_tenure_label = '&dps_tenure_label='+$('input[name="dps_tenure"]:checked').parent().text().trim();

            var main_string = dps_user_list+bank_id_list+dps_i_am_label+dps_tenure_list+dps_tenure_label;
            main_string = main_string.substring(1, main_string.length);

            var url_str = "<?php echo base_url();?>dps/ajax_dps_caching/" ;

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response){
                    var option = [];
                    var obj = JSON.parse(response);
                    if(obj.dps_i_am !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.dps_i_am_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="dps_i_am" data-dps_i_am="'+ obj.dps_i_am +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.dps_tenure !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.dps_tenure_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="dps_tenure_id" data-dps_tenure="'+ obj.dps_tenure +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.dps_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.dps_bank_ids.length; i++) {
                            var bank_id = obj.dps_bank_ids[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+bank_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="dps_bank_id" data-dps_bank_id="'+ bank_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }
                    }
                    $(".filter-list").html(option);
                }
            });
        }

		function count_selected_row(){


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
			var bank_ids = new Array();
			$('input[name="bank_id"]:checked').each(function(){
				bank_ids.push($(this).val());
			});
			var bank_id_list = "&dps_bank_ids="+bank_ids;
			var main_string = dps_tenure_list+dps_user_list+deposited_amount+bank_id_list;
			main_string = main_string.substring(1, main_string.length);

			var url_str = "<?php echo base_url();?>dps/ajax_count_selected_row/";
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

        loadData( page = null );
        data_caching();
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData( page = null );
            data_caching();
        } );


        $(".draggable").on("dragstop",function(ev,ui){

            setTimeout(function(){ //Updated by Tarek on 14-05-2017
                //alert($("#finalAssest").val());
                loadData(page = null);
                data_caching();
            }, 1000);

        });

        $('#finalAssest').on('keyup',function(){
            loadData( page = null );
            data_caching();
        });



        $('#searchDPS').on('click', '.more_info', function (){
			var  formData = $(this).data();
			var dps_id = formData.dps_id;
//			console.log(dps_id);
			$("#moreInfo"+dps_id).toggleClass("in");
			$('#availableOffer'+dps_id).removeClass("in");
			if($("#moreInfo"+dps_id).hasClass('in')){
				$('#more_info'+dps_id).html("<i class='fa fa-info-circle'></i> Less info");
			}else{
				$('#more_info'+dps_id).html("<i class='fa fa-info-circle'></i> More info");
			}
		});

		$('#searchDPS').on('click', '.availableOffer', function (){
			var  formData = $(this).data();
			var available_offer = formData.available_offer;
//			console.log(available_offer);

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
			if( ! $('.cart_anchor01').children('img').data()){
				$("#comparison_min_two_alert").modal('show');
			}
			var amount = $('#finalAssest').val();
			if(amount == ''){
				amount = 500;
			}
			var deposit_amount = "-tk"+amount;
			var  formData = $('.cart_anchor').children('img').data();
			var dps_url1 = formData.dps_url;
			var  formData = $('.cart_anchor01').children('img').data();
			var dps_url2 = formData.dps_url;
			var dps_urls = dps_url1+'-vs-'+dps_url2+deposit_amount;
			console.log(dps_urls);
			if(dps_url1 != '' && dps_url2 != ''){
				window.location.href = "<?php echo base_url();?>compare-dps/"+dps_urls+".html";
			}else{
				alert("Please add 2 card for compare ! ");
			}

		});

        $(document).on('click','#clear_all',function(){
            var data = 'session=dps';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>dps/ajax_clear_session",
                data:data,
                success: function(response)
                {
                    window.location.href = window.location.href;

                }
            });
        });

        $(document).on('click', '.dps_tenure_id', function (){
            var  formData = $(this).data();
            var dps_tenure = formData.dps_tenure;
//            console.log(dps_tenure);
            $('#dps_tenure'+dps_tenure).prop('checked', false);
            var data = 'dps_tenure='+dps_tenure;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>dps/unset_dps_tenure_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.dps_i_am', function (){
            var  formData = $(this).data();
            var dps_i_am = formData.dps_i_am;
            $('#i_am'+dps_i_am).prop('checked', false);
            var data = 'dps_i_am='+dps_i_am;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>dps/unset_dps_i_am_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.dps_bank_id', function (){
            var  formData = $(this).data();
            var dps_bank_id = formData.dps_bank_id;
            $('#filter-bank-'+dps_bank_id).prop('checked', false);
            var data = 'dps_bank_id='+dps_bank_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>dps/unset_dps_bank_id_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
	});
</script>