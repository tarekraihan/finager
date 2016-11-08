
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
								<label class="material_radio_group">
									<input type="radio" name="iAm" value="generalConsumer" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Individual
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="iAm" value="businessOwner" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Corporate Bodies
								</label><br/>
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
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										1 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										6 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										1 Year
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										2 Year
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Years 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										4 Years
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										5 Years
									</label>
								</div>
							</div>
						</div>
						<div class="card_query">
							<p>I want Interest </p>
							<div class="query_radio">
								<label class="material_radio_group">
									<input type="radio" name="WantCreditLimit" value="Excellent" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									On Maturity
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="WantCreditLimit" value="Good" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Monthly
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="WantCreditLimit" value="Fair" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Quarterly
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="WantCreditLimit" value="Bad" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Advance Interest after Deposit
								</label><br/>
							</div>
						</div>
					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
				<div class="col-sm-9 col-xs-9">
					<div class="full-card">
						<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="<?php echo base_url(); ?>en/fdr_details"><img title="Free Web tutorials" class="img-responsive fdr_bank_logo" src="<?php echo base_url(); ?>resource/front_end/images/brac-bank-logo.png" /></a>
								<p class="text-center">Brac Bank</p>
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
											<p>6%</p>
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
											<p>90%</p>
										</div>
									</div>
								</div>
								<div class="row more_availabe">
									<div class="col-md-2"><a id="hideDetailsButton" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Available Offer</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><img class="fdr_apply pull-right" src="<?php echo base_url(); ?>resource/front_end/images/application.png" alt="FDR Application" /></a></div>
									<div class="col-md-2"><a id="hideDetailsButton2" href="#"><img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/comparison.png" alt="FDR Application" /></a></div>
								</div>
							</div>
						</div>
					
					
						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="hideDetailsDiv" class="hideMe"> 
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#Eligibility" aria-controls="profile" role="tab" data-toggle="tab">Eligibility</a></li>
										<li role="presentation"><a href="#RequiredDocuments" aria-controls="messages" role="tab" data-toggle="tab">Required Documents</a></li>
										<li role="presentation"><a href="#TermsConditions" aria-controls="messages" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Review" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features">
											<h4>Features</h4>
											<ul>
												<li>Pre-mature full Encashment Facility</li>
												<li>Auto Renewal Option with Interest</li>
												<li>Loan Against Fixed Deposit Facility</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="Eligibility">
											<h4>Eligibility</h4>
											<ul>
												<li>FDS Account can be opened both for Individual and Corporate bodies</li>
												<li>Only Resident Bangladeshi National is allowed to open Personal FDS Account.</li>
												<li>Joint account can be opened.</li>
												<li>Minor account can be opened under the supervision of his / her / their guardian.</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="RequiredDocuments">
											<h4>Required Documents</h4>
											<ul>
												<li>Salary Certificate/Letter of Introduction.</li>
												<li>Application form (payment structure & schedule must be reflected).</li>
												<li>CV/Biodata.</li>
												<li>Latest one-year personal bank statement.</li>
												<li>Latest tax clearance certificate.</li>
												<li>Photocopy of passport/driving license/national id of applicant(s) and guarantor(s) .</li>
												<li>2 copy recent passport size photographs of applicant(s) and guarantor(s).</li>
												<li>NOC from spouse if co-applicant is anybody other than spouse.</li>
												<li>Letter of introduction.</li>
												<li>Copy of latest utility bill.</li>
												<li>Personal net worth statements of applicant(s) and guarantor(s).</li>
												<li>Personal guarantee of spouse/parents/any person accepted to bank.</li>
												<li>Evidence of another income source.</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane fdr_terms" id="TermsConditions">
											<h4>Terms & Conditions</h4>
											<ol type="1">
												<li>The facility shall be made available for the customer from the date of Bank's approval of this application until such time is stipulated in any letter and this facility shall be continuing on until the adjustment of the dues of the Bank with interest and other charges.</li>
												<li>The Bank reserves the right to withdraw the credit facility and demand repayment if there has been any default in repayment of the loan.</li>
												<li>The Bank shall not be obliged to make the credit facility available until it has received formal written acknowledgement from you accepting the credit facility on the basis of outline and subject to the terms and conditions specified in the banking arrangement letter.</li>
												<li>The acceptance of the terms and conditions of the banking arrangement letter by the customer constitutes a legal and binding obligation and is enforceable in accordance with the terms of the Banking arrangement letter.</li>
												<li>By use of the credit facility provided by the bank, the customer accepts the conditions enumerated in the banking arrangement letter and authorizes the bank to appoint agents to collect funds payable to the bank, as the Bank may consider necessary. In the due discharge of their duty, information regarding borrower's credit facility will be supplied to the agent. All charges payable to such agents, to collect amounts owed to the bank, are liable to be at borrower's cost and risk, in addition to all other costs, charges and expenses incurred by the bank to recover outstanding dues/money.</li>
												<li>The bank is authorized to open and maintain account(s) for the purpose of administering and recording payments by the customer in respect of the facility.</li>
												<li>The loan shall be utilized for the specified purpose for which it has been sanctioned. Payment shall be made directly by the bank to the vendor or to the customer, as determined by the Bank, depending upon the purpose of the loan.</li>
												<li>All payments in respect of the facility shall be made by the customer on or before the due dates and the customer hereby irrevocably authorizes the Bank to debit any of the customer's account(s) with the Bank with all amounts. Owing in respect of the facility including interest and charges and expenses (together the indebtedness) at such time as the same shall become or be due and, payable and transfer such sum to the loan account for adjustment but in any case, the customer shall always remain liable and agree(s) to make payment in full of all such sums to the Bank.</li>
												<li>The customer unconditionally undertakes to repay the loan as per terms and conditions of the Banking Arrangement Letter.</li>
												<li>The customer undertakes to deposit his/her salary/wages/honorarium payable by his/her employer to the designated account maintained with the Bank.</li>
												<li>The Bank is authorized to enforce all or any of the securities executed as well as kept by the customer in favor of the Bank and recover the loan amount with interest and other charges accrued in the loan account.</li>
												<li>The customer irrevocably authorizes the Bank to enforce the securities art's absolute discretion in the event the loan account becomes irregular and shall apply any proceeds recovered towards adjustment of outstanding loan liabilities along with all legal fees.</li>
												<li>Where the facility is made available for purchase of consumer item(s) including Home loan customer unconditionally and irrevocably undertakes to deliver possession of the consumer items including the Home loan purchased b1 the loan amount without any question whatever to the bank as and when demanded by the bank. The customer further authorizes the bank irrevocably, to sell the mortgage items and apply the proceeds towards adjustment of the dues. For any unadjusted sum, the customer undertakes to repay the same with interest and other charges.</li>
											</ol>
										</div>
										<div role="tabpanel" class="tab-pane" id="Review">
											<h4>Review</h4>
										</div>
										<div role="tabpanel" class="tab-pane" id="UserReview">
											<h4>User Review</h4>
										</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->
						
						<div id="hideDetailsDiv2" class="row hideMe">
							 <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe--> 
							 <iframe src="<?php echo base_url();?>en/fdr_iframe"  frameborder="0"  width="100%" height="1930" scrolling="no" ></iframe>
						</div>
					</div>
				</div>
				<!-- Right bar content end -->
			</div>
		</div>
	</section>


<script type="text/javascript"> 


//for show hide (more info & Available Offer)

$(document).ready(function() {
		$('#hideDetailsDiv').hide();
		$('a#hideDetailsButton').click(function() {
			if (!$('#hideDetailsDiv').is(':visible')) {
				$('.hideMe').hide(400);
			}
			$('#hideDetailsDiv').toggle(800);
		});
	});

	$(document).ready(function() {
		$('#hideDetailsDiv2').hide();
		$('a#hideDetailsButton2').click(function() {
			if (!$('#hideDetailsDiv2').is(':visible')) {
				$('.hideMe').hide(400);
			}
			$('#hideDetailsDiv2').toggle(400);
		});
	});
</script>