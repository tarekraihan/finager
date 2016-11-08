
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
</style>


	<section id="personal_header_part">
		
	</section>
	<section id="card">
		<div class="container">
			<div class="row">
		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3">
					<div class="home_loan_left_bar">
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
									//										print_r($result->result_array());die;
									foreach($result->result() as $row){
										?>
										<label class="material_radio_group">
											<input type="radio" name="i_want" value="<?php echo $row->id;?>" class="material_radiobox"/>
											<span class="material_check_radio"></span>
											<?php echo $row->personal_loan_looking_for;?>
										</label><br/>
									<?php } ?>
								</div>
								<div>
									<!--a id="displayText" href="javascript:toggle();">More Filter <i class="fa fa-sort-desc fa-lg"></i></a-->
									<button class="btnPmore" data-toggle="collapse" data-target="#demo">More</button>
								</div>
								<!--div id="toggleText" style="display: none"-->
								<div id="demo" class="collapse">
									<?php
									$this->Common_model->table_name = 'personal_loan_looking_for';
									$this->Common_model->offset = 3;
									$this->Common_model->limit = 20;
									$result = $this->Common_model->select_all();
									foreach($result->result() as $row){
										?>
										<label class="material_radio_group">
											<input type="radio" name="i_want" value="<?php echo $row->id;?>" class="material_radiobox"/>
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
													          
													        <div class="slideWrapper" id="avgSave">
													           
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
										<input type="radio" name="i_am" value="<?php echo $row->id ;?>" class="material_radiobox"/>
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
				<div class="col-sm-9 col-xs-9">
					<div id="searchPersonalLoan">
						<?php
						$personal_loan = $this->Front_end_select_model->select_personal_loan_info();

//						print_r($personal_loan->result());die;
						$personal = '';
						foreach($personal_loan->result() as $row){

							$bank = "";
							if($row->is_non_bank == 1){
								$bank = $row->non_bank_name;
							}else{
								$bank = $row->bank_name;
							}
							$bank_logo = "";
							if($row->is_non_bank == 1){
								$bank_logo = $row->non_bank_logo;
							}else{
								$bank_logo = $row->bank_logo;
							}
							$is_fixed =$row->is_fixed;
							$show_interest ='';
							if($is_fixed == 1){
								$show_interest .='<h5>Interest (Fixed Rate)</h5>
											<p>Fixed '.$row->interest_rate_fixed.'%</p>';
							}else{
								$show_interest .='<h5>Interest (Avg Rate)</h5>
												<p>Avg '.$row->interest_rate_average.'% <br/>min '.$row->interest_rate_min.'%,<br> max '.$row->interest_rate_max.'%</p>';
							}

                            $query_amount = 1000000;


                            $tenure = 3 * 12;

							$interest_rate = 0;
                            if($is_fixed == 1){
                                $interest_rate = $row->interest_rate_fixed;
                            }else{
                                $interest_rate = $row->interest_rate_average;
                            }
                            $cal_interest = round(($interest_rate / 100) / $tenure,4);

                            $emi = $query_amount * $cal_interest * pow(( 1+ $cal_interest),$tenure) /pow((1 + $cal_interest),($tenure-1));
                            $total_payable = $emi * $tenure;





							$personal .='<div class="row home_loan_right_bar no-margin-lr2">
							<div class="col-sm-3 col-xs-3">
								<a href="'.base_url().'en/personal_loan_details"><img title="click here to details" class="img-responsive home_loan_logo" src="'.base_url().'resource/common_images/bank_logo/'.$bank_logo.'" /></a>
								<small class="home_loan_bank_name"><a  href="">'.$bank.'</a></small>
							</div>
							<div class="col-sm-9 col-xs-9">
								<div class="row">
									<div class="col-sm-2 col-xs-2 w20">
										<div class="card_text2">
											<h5>Amount </h5>
											<p>Tk.'.$query_amount.'.00</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 w20">
										<div class="card_text2">
											'.$show_interest.'
										</div>
									</div>
									<div class="col-sm-1 col-xs-1 w20">
										<div class="card_text2">
											<h5>EMI</h5>
											<p>'.$emi.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 w20">
										<div class="card_text2">
											<h5>Total Payable Amount</h5>
											<p>'.$total_payable.'<br/><span class="tPaybleAmount">based on '.$query_amount.'</span></p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-1 w20">
										<div class="card_text2">
											<h5>Down Payment (Min)</h5>
											<p>BDT 1300 + VAT</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 home_loan_button">
								<img class="btnCardApply img-responsive button pull-right" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" />
								<span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" data-toggle="collapse" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
								<span class="more_info_icon Hloan_more_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
								<span class="more_info_icon Hloan_more_icon"><a  class="rePaymentSchedule" role="button" data-toggle="collapse" data-repayment="'.$row->id.'"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>
							</div>
							<div class="collapse" id="moreInfo'.$row->id.'">
								<div class="col-md-12">
									<section id="tab">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="Features" role="tab" data-toggle="tab">Features</a></li>
											<li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="FeesCharges" role="tab" data-toggle="tab">Fees & Charges</a></li>
											<li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="Eligibility" role="tab" data-toggle="tab">Eligibility</a></li>
											<li role="presentation"><a href="#Requirement'.$row->id.'" aria-controls="Requirement" role="tab" data-toggle="tab">Requirement</a></li>
											<li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="TermsConditions" role="tab" data-toggle="tab">Terms & Conditions</a></li>
											<li role="presentation"><a href="#Review'.$row->id.'" aria-controls="Review" role="tab" data-toggle="tab">Review</a></li>
											<li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="UserReviews" role="tab" data-toggle="tab">User reviews</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="Features'.$row->id.'">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Fees & Charges</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
															'.$row->fees_and_charges.'
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Features</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
															'.$row->features.'
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
												<div class="card_details_pronsCons">
													<h4>Eligibility for Applying</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														'.$row->eligibility_for_applying.'
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="Requirement'.$row->id.'">

											    <div class="card_details_pronsCons">
													<h4>Security Required</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														'.$row->security_required.'
													</div>
												</div>
												<div class="card_details_pronsCons">
													<h4>Required Documents</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														'.$row->required_document.'
													</div>
												</div>

											</div>
											<div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
											<div class="card_details_pronsCons">
													<h4>Terms and Condition</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														'.$row->terms_and_conditions.'
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">...</div>
											<div role="tabpanel" class="tab-pane" id="UserReviews'.$row->id.'">...</div>
										</div>
									</section>
								</div>
							</div>
                            <div class="collapse" id="rePaymentSchedule'.$row->id.'">

							</div>
						</div>';

						 }
							echo $personal;
						?>
					</div>
				</div>
				<!-- Right bar content end -->
			</div>
		</div>
	</section>

<script>
    $(document).ready(function(){

        $('#searchPersonalLoan').on('click', '.more_info', function (){

            var  formData = $(this).data();
            var loan_id = formData.loan_id;

            console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");


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

</script>