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
		height: 285px;
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
		height: 341px;
	}
	.fdr_right_bar {
		border: 1px solid #D09E59;
	}

</style>
<section id="dps_header"></section>

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
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										2 Year 
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Year 
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										4 Year 
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										5 Year
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										6 Year
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										7 Years 
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										8 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										9 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										10 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										12 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										14 Years
									</label>
								</div>
								<div class="dps_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										15 Years
									</label>
								</div>
								<div class="dps_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="month" value="first_month" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										20 Years
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
					<div class="searchDPS">
                        <?php
                        $dps_deposit = $this->Front_end_select_model->select_dps_loan_info();

//                        print_r($dps_deposit->result()); die;

                        $dps = '';
                        foreach($dps_deposit->result() as $row) {

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

                            $dps .= '<div class="row fdr_right_bar no-margin-lr">
							<div class="col-sm-2 col-xs-2">
								<a href="'. base_url().'en/dps_details"><img title="Free Web tutorials" class="img-responsive fdr_bank_logo" src="'.base_url().'resource/front_end/images/brac-bank-logo.png" /></a>
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
											<h5>Installment Amount</h5>
											<p>&#2547; '.$query_amount.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Number of Installment</h5>
											<p> '.$tenure.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Maturity Amount</h5>
											<p>&#2547; '.$total_payable.'</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3">
										<div class="card_text3">
											<h5>Accrued Interest</h5>
											<p>&#2547; 5799</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2">
										<div class="card_text3">
											<h5>Loan Facility</h5>
											<p>'.$row->loan_facility.'</p>
										</div>
									</div>
								</div>
								<div class="row more_availabe">
									<div class="col-md-2"><a id="hideDetailsButton" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Available Offer</a></div>
									<div class="col-md-4"><a id="hideDetailsButton2" href="#"><img class="fdr_apply pull-right" src="'.base_url().'resource/front_end/images/btnDpsApply.png" alt="FDR Application" /></a></div>
									<div class="col-md-2"><a id="hideDetailsButton2" href="#"><img class="pull-right" src="'.base_url().'resource/front_end/images/btnDpsCom.png" alt="FDR Application" /></a></div>
								</div>
							</div>
						</div>
						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="hideDetailsDiv" class="hideMe"> 
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation"><a href="#Features" aria-controls="messages" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#FeesCharges" aria-controls="messages" role="tab" data-toggle="tab">Fees & Charges</a></li>
										<li role="presentation"><a href="#TermsConditions" aria-controls="messages" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Eligibility" aria-controls="messages" role="tab" data-toggle="tab">Eligibility</a></li>
										<li role="presentation"><a href="#RequiredDoc" aria-controls="messages" role="tab" data-toggle="tab">Required Doc</a></li>
										<li role="presentation"><a href="#Review" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features">
											<h4>Features:</h4>
											<table class="table table-bordered">
												<tr>
													<td>Deposit Payment Date</td>
													<td>14th Date of the Month</td>
												</tr>
												<tr>
													<td>Auto Transfer Facility</td>
													<td>Available</td>
												</tr>
												<tr>
													<td>Flexible Installment Date</td>
													<td>Available</td>
												</tr>
												<tr>
													<td>Loan Facility on Deposited Amount</td>
													<td>90% of the total deposited amount</td>
												</tr>
												<tr>
													<td>Insurance Facility</td>
													<td>Available</td>
												</tr>
												<tr>
													<td>Bonus Facility</td>
													<td>Not Available</td>
												</tr>
												<tr>
													<td>Free Savings Account</td>
													<td>Available</td>
												</tr>
												<tr>
													<td>Premature Partial Encashment</td>
													<td>Available</td>
												</tr>
												<tr>
													<td>Availability of More than one Scheme</td>
													<td>Available</td>
												</tr>
												<tr>
													<td>Allow of Joint Name</td>
													<td>Available</td>
												</tr>
											</table>
										</div>
										<div role="tabpanel" class="tab-pane" id="FeesCharges">
											<h4>Fees & Charges:</h4>
											<ul>
												<li>Late Payment Charge</li>
												<li>Other Charges</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="TermsConditions">
											<h4>Terms & Conditions:</h4>
											<ol>
												<li>The facility shall be made available for the customer from the date of Bank\'s approval of this application until such time is stipulated in any letter and this facility shall be continuing on until the adjustment of the dues of the Bank with interest and other charges.</li>
												<li>The Bank reserves the right to withdraw the credit facility and demand repayment if there has been any default in repayment of the loan.</li>
												<li>The Bank shall not be obliged to make the credit facility available until it has received formal written acknowledgement from you accepting the credit facility on the basis of outline and subject to the terms and conditions specified in the banking arrangement letter.</li>
												<li>The acceptance of the terms and conditions of the banking arrangement letter by the customer constitutes a legal and binding obligation and is enforceable in accordance with the terms of the Banking arrangement letter.</li>
												<li>By use of the credit facility provided by the bank, the customer accepts the conditions enumerated in the banking arrangement letter and authorizes the bank to appoint agents to collect funds payable to the bank, as the Bank may consider necessary. In the due discharge of their duty, information regarding borrower\'s credit facility will be supplied to the agent. All charges payable to such agents, to collect amounts owed to the bank, are liable to be at borrower\'s cost and risk, in addition to all other costs, charges and expenses incurred by the bank to recover outstanding dues/money.</li>
												<li>The bank is authorized to open and maintain account(s) for the purpose of administering and recording payments by the customer in respect of the facility.</li>
												<li>The loan shall be utilized for the specified purpose for which it has been sanctioned. Payment shall be made directly by the bank to the vendor or to the customer, as determined by the Bank, depending upon the purpose of the loan.</li>
												<li>All payments in respect of the facility shall be made by the customer on or before the due dates and the customer hereby irrevocably authorizes the Bank to debit any of the customer\'s account(s) with the Bank with all amounts. Owing in respect of the facility including interest and charges and expenses (together the indebtedness) at such time as the same shall become or be due and, payable and transfer such sum to the loan account for adjustment but in any case, the customer shall always remain liable and agree(s) to make payment in full of all such sums to the Bank.</li>
												<li>The customer unconditionally undertakes to repay the loan as per terms and conditions of the Banking Arrangement Letter.</li>
												<li>The customer undertakes to deposit his/her salary/wages/honorarium payable by his/her employer to the designated account maintained with the Bank.</li>
												<li>The Bank is authorized to enforce all or any of the securities executed as well as kept by the customer in favor of the Bank and recover the loan amount with interest and other charges accrued in the loan account.</li>
												<li>The customer irrevocably authorizes the Bank to enforce the securities arts absolute discretion in the event the loan account becomes irregular and shall apply any proceeds recovered towards adjustment of outstanding loan liabilities along with all legal fees.</li>
												<li>Where the facility is made available for purchase of consumer item(s) including Home loan customer unconditionally and irrevocably undertakes to deliver possession of the consumer items including the Home loan purchased b1 the loan amount without any question whatever to the bank as and when demanded by the bank. The customer further authorizes the bank irrevocably, to sell the mortgage items and apply the proceeds towards adjustment of the dues. For any unadjusted sum, the customer undertakes to repay the same with interest and other charges.</li>
											</ol>
										</div>
										<div role="tabpanel" class="tab-pane fdr_terms" id="Eligibility">
											<h4>Eligibility:</h4>
											<ul type="1">
												<li>Age 18 years and above.</li>
												<li>Bangladeshi nationals.</li>
											</ul>
										</div>
										<div role="tabpanel" class="tab-pane" id="RequiredDoc">
											<h4>Required Documents</h4>
											<ul>
												<li>Salary Certificate/Letter of Introduction</li>
												<li>Application form (payment structure & schedule must be reflected)</li>
												<li>CV/Biodata</li>
												<li>Latest one-year personal bank statement</li>
												<li>Latest tax clearance certificate</li>
												<li>Photocopy of passport/driving license/national id of applicant(s) and guarantor(s) </li>
												<li>2 copy recent passport size photographs of applicant(s) and guarantor(s)</li>
												<li>NOC from spouse if co-applicant is anybody other than spouse</li>
												<li>Letter of introduction</li>
												<li>Copy of latest utility bill</li>
												<li>Personal net worth statements of applicant(s) and guarantor(s)</li>
												<li>Personal guarantee of spouse/parents/any person accepted to bank</li>
												<li>Evidence of another income source</li>
											</ul>
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
						<div id="hideDetailsDiv2" class="row hideMe col-md-12">
							<div class="col-md-12">
								<p><b>Available Deposits (BDT):</b> 500, 1000, 1500, 2000, 2500, 3000, 4000, 5000, 8000, 10000.</p>
								<p><b>Available Terms:</b> 2, 3, 4, 5, 6, 7, 8, 10.</p>
								<p><b>Interest Rate:8%</b></p>
							</div>
							 <div class="offer_table">
								<div class="col-md-9">
								  <h4>Monthly Installment Size and Benefit After Maturity</h4>
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<th>Monthly Deposit</th>
										<th>2 Years</th>
										<th>3 Years</th>
										<th>4 Years</th>
										<th>5 Years</th>
										<th>6 Years</th>
										<th>7 Years</th>
										<th>8 Years</th>
										<th>10 Years</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>Tk 500</td>
										<td>12,886.06</td>
										<td>20,013.23</td>
										<td>27,639.30</td>
										<td>35,799.20</td>
										<td>44,530.30</td>
										<td>53,872.57</td>
										<td>63,868.80</td>
										<td>86,009.44</td>
									  </tr>
									  <tr>
										<td>Tk 1000</td>
										<td>25,772.12</td>
										<td>40,026.46</td>
										<td>55,278.61</td>
										<td>71,598.41</td>
										<td>89,060.60</td>
										<td>107,745.13</td>
										<td>127,737.59</td>
										<td>172,018.88</td>
									  </tr>
									  <tr>
										<td>Tk 2000</td>
										<td>51,544.23</td>
										<td>80,052.92</td>
										<td>110,557.22</td>
										<td>143,196.82</td>
										<td>178,121.19</td>
										<td>215,490.27</td>
										<td>255,475.18</td>
										<td>344,037.77</td>
									  </tr>
									  <tr>
										<td>Tk 3000</td>
										<td>77,316.35</td>
										<td>120,079.38</td>
										<td>165,835.83</td>
										<td>214,795.23</td>
										<td>267,181.79</td>
										<td>323,235.40</td>
										<td>383,212.77</td>
										<td>516,056.65</td>
									  </tr>
									  <tr>
										<td>Tk 5000</td>
										<td>128,860.58</td>
										<td>200,132.30</td>
										<td>276,393.05</td>
										<td>357,992.05</td>
										<td>445,302.98</td>
										<td>538,725.67</td>
										<td>638,687.95</td>
										<td>860,094.41</td>
									  </tr>
									  <tr>
										<td>Tk 10,000</td>
										<td>257,721.15</td>
										<td>400,264.60</td>
										<td>552,786.10</td>
										<td>715,984.09</td>
										<td>890,605.95</td>
										<td>1,077,451.34</td>
										<td>1,277,375.91</td>
										<td>1,720,188.83</td>
									  </tr>
									  <tr>
										<td>Tk 20,000</td>
										<td>515,442.30</td>
										<td>800,529.21</td>
										<td>1,105,572.19</td>
										<td>1,431,968.19</td>
										<td>1,781,211.91</td>
										<td>2,154,902.68</td>
										<td>2,554,751.81</td>
										<td>3,440,377.65</td>
									  </tr>
									  <tr>
										<td>Tk 25,000</td>
										<td>644,302.88</td>
										<td>1,000,661.51</td>
										<td>1,381,965.24</td>
										<td>1,789,960.24</td>
										<td>2,226,514.88</td>
										<td>2,693,628.35</td>
										<td>3,193,439.77</td>
										<td>4,300,472.07</td>
									  </tr>
									  <tr>
										<td>Number of Installments</td>
										<td>24</td>
										<td>36</td>
										<td>48</td>
										<td>60</td>
										<td>72</td>
										<td>84</td>
										<td>96</td>
										<td>108</td>
									  </tr>
									</tbody>
								  </table>
								</div>
							</div>
						</div>';


                        }

                        echo $dps;

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