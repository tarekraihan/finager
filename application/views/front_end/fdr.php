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
	height: 200px;
    }
    .home_loan_left_bar {
	margin-bottom: 10px;
    }

</style>

<section id="fdr_header"></section>

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
                                        <input type="radio" name="i_am" value="<?php echo $row->id; ?>" class="material_radiobox"/>
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
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="1" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										1 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="2" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="3" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										6 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="4" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										1 Year
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="5" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										2 Year
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="6" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Years 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="7" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										4 Years
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="8" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										5 Years
									</label>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
				<div class="col-sm-9 col-xs-9">
                    <div id="searchFDR">
                       <!-- <div id="loading" class="text-center"></div>-->


                <?php
                $fdr_deposit = $this->Front_end_select_model->select_fdr_loan_info();

                //                        print_r($dps_deposit->result()); die;

                $fdr = '';
                foreach($fdr_deposit->result() as $row) {

                    $bank = "";
                    if ($row->is_non_bank == 1) {
                        $bank = $row->non_bank_name;
                    } else {
                        $bank = $row->bank_name;
                    }
                    $bank_logo = "";
                    if ($row->is_non_bank == 1) {
                        $bank_logo = $row->non_bank_logo;
                    } else {
                        $bank_logo = $row->bank_logo;
                    }

                    $query_amount = 1000000;
                    $tenure = 3 * 12;

                    $interest_rate = $row->interest_rate;

                    $cal_interest = round(($interest_rate / 100) / $tenure, 4);

                    $emi = $query_amount * $cal_interest * pow((1 + $cal_interest), $tenure) / pow((1 + $cal_interest), ($tenure - 1));
                    $total_payable = $emi * $tenure;

                    $fdr .= '<div class="full-card">
						<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="'. base_url() .'en/fdr_details"><img title="'.$bank.'" class="img-responsive fdr_bank_logo" src="'. base_url() .'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
								<p class="text-center">'.$bank.'</p>
								<p class="text-center">
									<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
								</p>
								<p class="rating text-center">Rated By 5 Person</p>
							</div>

							<div class="col-sm-10 col-xs-10">
								<div class="row">
									<div class="col-sm-3 col-xs-3">
										<div class="card_text3">
											<h5>Deposited Amount</h5>
											<p>&#2547; 10000</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Tenure</h5>
											<p>1 Year</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Interest Rate</h5>
											<p>'.$interest_rate.'%</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3">
										<div class="card_text3">
											<h5>Maturity Amount</h5>
											<p>&#2547; 1300</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Loan Facility</h5>
											<p>'.$row->loan_facility.'%</p>
										</div>
									</div>
								</div>
								<div class="row more_availabe">
									<div class="col-md-2"><a id="hideDetailsButton"  class="more_info" href="javascript:void(0)" data-toggle="collapse" data-fdr_id="'.$row->id.'"><i class="fa fa-info-circle" aria-hidden="true" ></i> More Info</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" class="availableOffer" href="javascript:void(0)" data-toggle="collapse" data-available_offer="'.$row->id.'"><i class="fa fa-info-circle " aria-hidden="true" role="button" ></i> Available Offer</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/application.png" alt="FDR Application" /></a></div>
									<div class="col-md-2"><a id="hideDetailsButton2" href="#"><img class="pull-right" src="'.base_url().'resource/front_end/images/comparison.png" alt="FDR Application" /></a></div>
								</div>
							</div>
						</div>


						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="moreInfo'.$row->id.'" class="collapse">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="Eligibility" role="tab" data-toggle="tab">Eligibility</a></li>
										<li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="RequiredDocuments" role="tab" data-toggle="tab">Required Documents</a></li>
										<li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="TermsConditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Review'.$row->id.'" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="UserReview" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
											<h4>Features</h4>
											'.$row->available_feature.'
										</div>
										<div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
											<h4>Eligibility</h4>
											'.$row->eligibility.'
										</div>
										<div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
											<h4>Required Documents</h4>
											'.$row->required_document.'
										</div>
										<div role="tabpanel" class="tab-pane fdr_terms" id="TermsConditions'.$row->id.'">
											<h4>Terms & Conditions</h4>
											'.$row->terms_and_conditions.'
										</div>
										<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">
											<h4>Review</h4>
										</div>
										<div role="tabpanel" class="tab-pane" id="UserReview'.$row->id.'">
											<h4>User Review</h4>
										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->

						<div id="availableOffer'.$row->id.'" class="collapse">
						    <h4>Available Offer</h4>


						</div>
                    </div>';
                         }
                        echo $fdr;
                        ?>

                 </div>
				</div>
				<!-- Right bar content end -->
			</div>
		</div>
	</section>


<script type="text/javascript"> 


//for show hide (more info & Available Offer)

    $(document).ready(function() {


        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
            loading_show();


            var fdr_tenure = new Array();
            $('input[name="fdr_tenure"]:checked').each(function(){
                fdr_tenure.push($(this).val());
            });

            var fdr_tenure_list = "&fdr_tenure="+fdr_tenure;


            var fdr_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                fdr_user.push($(this).val());
            });
            var fdr_user_list = "&fdr_user="+fdr_user;


            var main_string = fdr_i_want_list+fdr_user_list;
            main_string = main_string.substring(1, main_string.length);
            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>fdr/ajax_get_fdr",
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchFDR").html(msg);

                }
            });
        }

        $("input[type='checkbox'], input[type='radio']").on( "click", loadData );

        loadData();


        $('#searchFDR').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var fdr_id = formData.fdr_id;
            console.log(fdr_id);
            $("#moreInfo"+fdr_id).toggleClass("in");
            $('#availableOffer'+fdr_id).removeClass("in");

        });

        $('#searchFDR').on('click', '.availableOffer', function (){

            var  formData = $(this).data();
            var available_offer = formData.available_offer;
            console.log(available_offer);
            $('#availableOffer'+available_offer).html('<iframe  src="http://test.finager.com/en/auto_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#availableOffer'+available_offer).toggleClass("in");
            $('#moreInfo'+available_offer).removeClass("in");
        });
	});

</script>