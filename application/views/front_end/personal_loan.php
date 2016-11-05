
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
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="generalConsumer" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Any Purpose Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="businessOwner" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Loan for Professional
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Consumer Durable Loan
									</label><br/>
								</div>
								<div>
									<!--a id="displayText" href="javascript:toggle();">More Filter <i class="fa fa-sort-desc fa-lg"></i></a-->
									<button class="btnPmore" data-toggle="collapse" data-target="#demo">More</button>
								</div>
								<!--div id="toggleText" style="display: none"-->
								<div id="demo" class="collapse">
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Marriage Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Women Entrepreneurship Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Festival Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Travel Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Medical Treatment Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Overseas Job Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Hajj Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										Senior Support Loan
									</label><br/>
									<label class="material_radio_group">
										<input type="radio" name="iAm" value="collegeStudent"  class="material_radiobox"/>
										<span class="material_check_radio"></span>
										CNG Conversion Loan
									</label><br/>
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
								<label class="material_radio_group">
									<input type="radio" name="MyIncomeRange" value="Excellent" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Salaried Person
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="MyIncomeRange" value="Good" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Businessman
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="MyIncomeRange" value="Fair" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Professional
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="MyIncomeRange" value="Bad" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									Landlord
								</label><br/>
								<label class="material_radio_group">
									<input type="radio" name="MyIncomeRange" value="NoCreditLimitHistory" class="material_radiobox"/>
									<span class="material_check_radio"></span>
									NRB
								</label>
							</div>
						</div>

					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
				<div class="col-sm-9 col-xs-9">
					<div class="full-card">
						<div class="row home_loan_right_bar no-margin-lr2">
							<div class="col-sm-3 col-xs-3">
								<a href="home_loan_details.php"><img title="click here to details" class="img-responsive" src="<?php echo base_url();?>resource/front_end/images/visa_card.png" /></a>
							</div>
							<div class="col-sm-9 col-xs-9">
								<div class="row">
									<div class="col-sm-2 col-xs-2 w20">
										<div class="card_text2">
											<h5>Amount </h5>
											<p>28%,<br> Monthly 2.33%</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 w20">
										<div class="card_text2">
											<h5>Interest (Mid Rate)</h5>
											<p>min 8%,<br> max 9%</p>
										</div>
									</div>
									<div class="col-sm-1 col-xs-1 w20">
										<div class="card_text2">
											<h5>EMI</h5>
											<p>28%,<br> Monthly 2.33%</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 w20">
										<div class="card_text2">
											<h5>Total Payable Amount</h5>
											<p>50%,<br/><span class="tPaybleAmount">based on 100000</span></p>
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
								<img class="btnCardApply img-responsive" src="<?php echo base_url();?>resource/front_end/images/card_btn_apllication.png" />
								<span class="more_info_icon Hloan_more_icon"><a id="hideDetailsButton" href="#"><i class="fa fa-info-circle"></i> More info</a></span>
								<span class="more_info_icon Hloan_more_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
								<span class="more_info_icon Hloan_more_icon"><a id="hideDetailsButton2" href="#"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>
							</div>
							<div id="hideDetailsDiv" class="row hideMe">
								<div class="col-md-12">
									<section id="tab">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#Features" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
											<li role="presentation"><a href="#FeesCharges" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
											<li role="presentation"><a href="#Eligibility" aria-controls="messages" role="tab" data-toggle="tab">Eligibility</a></li>
											<li role="presentation"><a href="#Requirement" aria-controls="settings" role="tab" data-toggle="tab">Requirement</a></li>
											<li role="presentation"><a href="#TermsConditions" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
											<li role="presentation"><a href="#Review" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
											<li role="presentation"><a href="#UserReviews" aria-controls="settings" role="tab" data-toggle="tab">User reviews</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="Features">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Fees & Charges</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
															<table class="table table-striped table-bordered">
																<tbody>
																  <tr>
																	<td>Processing Fee</td>
																	<td>2%</td>
																  </tr>
																  <tr>
																	<td>Early Settlement Fee</td>
																	<td>1%</td>
																  </tr>
																  <tr>
																	<td>Partial Payment Fee</td>
																	<td>2% on Overdue Amount</td>
																  </tr>
																  <tr>
																	<td>Quotation Change Fee</td>
																	<td>BDT 500 Per Quotation</td>
																  </tr>
																</tbody>
															</table>
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="FeesCharges">
												<section id="card_details_FeesCharges">
													<div class="card_details_pronsCons">
														<h4>Features</h4>
														<div class="prosConsHr"></div><br/>
														<div class="prosCons_body2 trbodywidth">
															<table class="table table-striped table-bordered">
																<tbody>
																  <tr>
																	<td>Minimum Loan Amount</td>
																	<td>10 Lac</td>
																  </tr>
																  <tr>
																	<td>Maximum Loan Amount</td>
																	<td>120 Lac</td>
																  </tr>
																  <tr>
																	<td>Minimum Term</td>
																	<td>5 Year</td>
																  </tr>
																  <tr>
																	<td>Maximum Term</td>
																	<td>20 Year</td>
																  </tr>
																  <tr>
																	<td>Down payment (%)</td>
																	<td>30</td>
																  </tr>
																  <tr>
																	<td>Grace Period</td>
																	<td>1 Year</td>
																  </tr>
																  <tr>
																	<td>Try Party Agreement Allowed up to</td>
																	<td>3-24 Month</td>
																  </tr>
																  <tr>
																	<td>Lower Interest Rate</td>
																	<td>None</td>
																  </tr>
																  <tr>
																	<td>Availability of Grace Period</td>
																	<td>None</td>
																  </tr>
																  <tr>
																	<td>Lower Processing Fee</td>
																	<td>None</td>
																  </tr>
																  <tr>
																	<td>Life Insurance Coverage </td>
																	<td>None</td>
																  </tr>
																  <tr>
																	<td>Flexible Payment Schedule</td>
																	<td>None</td>
																  </tr>
																  <tr>
																	<td>Joint Applicant Allowed</td>
																	<td>None</td>
																  </tr>
																</tbody>
															</table>
														</div>
													</div>
												</section>
											</div>
											<div role="tabpanel" class="tab-pane" id="Eligibility">
												<div class="card_details_pronsCons">
													<h4>Eligibility for Applying</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														<h4>Minimum Income:</h4>
														<ul>
															<li>BDT. 40,000.00 (Taka Forty Thousand) for salaried person of MNCs, LLC, Foreign NGOs and UN bodies.</li>
															<li>BDT. 45,000.00 (Taka Forty Five Thousand)) for salaried person other than MNCs, LLC, Foreign NGOs and UN bodies.</li>
															<li>BDT. 30,000.00 (Taka Thirty Thousand) for Govt. employees.</li>
															<li>BDT. 50,000.00 (Taka Fifty Thousand) for Landlord/ Landlady.</li>
															<li>BDT. 55,000.00 (Taka Fifty Five Thousand) for Businessmen.</li>
														</ul>
														<h4>Minimum Experience:</h4>
														<ul>
															<li>For permanent and confirmed salaried person, minimum one (1) year experience with 6 months employment in present organization.</li>
															<li>For Businessmen one (1) year experience in the same line of business.</li>
															<li>For Landlord/Landlady having 6 months rental income continuation.</li>
														</ul>
														<h4>Age Requirement:</h4>
														<ul>
															<li>Minimum: 22 Years (at the time of application).</li>
															<li>Maximum: 65 years (at the end of loan tenor).</li>
															<li>(Age limit can be relaxed in case of joint applicant provided).</li>
														</ul>
													</div>
												</div>
											</div>	
											<div role="tabpanel" class="tab-pane" id="Requirement">
												<div class="col-sm-6">
													<div class="tab_body">
														<h4>Security Required</h4>
														<hr/>
														<ul>
															<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>
															<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>
															<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>
															<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>
															<li>Latest tax certificate/E-TIN.</li>
															<li>Personal net worth statements of applicant (s) and guarantor (s).</li>
															<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>
															<li>Rent or lease agreement of house/property (if applicable).</li>
														</ul>
														<p><b>Additional documents required for Salaried Person/ Self Employed</b></p>
														<ul>
															<li>Salary Certificate/ Letter of Introduction.</li>
															<li>Offer letter/Release letter from previous employer to prove service experience.</li>
															<li>Professional certificate issued by concerned institution.</li>
														</ul>
														<p><b>Additional documents required for Businessmen</b></p>
														<ul>
															<li>Copy of trade license.</li>
															<li>Memorandum of Association and Articles of Association of the company.</li>
															<li>Certificate of Incorporation.</li>
															<li>Latest form xii.</li>
															<li>Partnership deed.</li>
														</ul>
														<p><b>Additional documents required for Landlord/Landlady</b></p>
														<ul>
															<li>Title deed of premises / property.</li>
															<li>Valid rental deed with tenants.</li>
															<li>Utility bill copy.</li>
															<li>Ground rent payment and municipal tax payment receipt.</li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="tab_body">
													<h4>Required Documents</h4>
													<hr/>
														<ul>
															<li>Monthly fee 10 taka+vat for sms service & transaction alert.</li><br/>
															<li>0.35 paisa for every 100/= taka will be deducted for insurance program.</li><br/>
															<li>Out of 18    transactions, there must be 10 POS transaction to get waiver on annual fee.</li><br/>
														</ul>
													</div>
												</div>
												<!--div class="card_details_pronsCons">
													<h4>Required Documents</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2">
														<ul>
															<li>Recent passport size color photographs of applicant (s) and guarantor (s).</li>
															<li>Photocopy of NID/passport/ driving license of applicant (s) and guarantor (s).</li>
															<li>Copy of latest utility bill (gas/water/electricity/municipal tax).</li>
															<li>Business card/ office ID copy of applicant (s) and guarantor (s) if any.</li>
															<li>Latest tax certificate/E-TIN.</li>
															<li>Personal net worth statements of applicant (s) and guarantor (s).</li>
															<li>Bank statement of last 12 months for businessmen and 6 months for other categories.</li>
															<li>Rent or lease agreement of house/property (if applicable).</li>
														</ul>
														<h4>Additional documents required for Salaried Person/ Self Employed</h4>
														<ul>
															<li>Salary Certificate/ Letter of Introduction.</li>
															<li>Offer letter/Release letter from previous employer to prove service experience.</li>
															<li>Professional certificate issued by concerned institution.</li>
														</ul>
														<h4>Additional documents required for Businessmen</h4>
														<ul>
															<li>Copy of trade license.</li>
															<li>Memorandum of Association and Articles of Association of the company.</li>
															<li>Certificate of Incorporation.</li>
															<li>Latest form xii.</li>
															<li>Partnership deed.</li>
														</ul>
														<h4>Additional documents required for Landlord/Landlady</h4>
														<ul>
															<li>Title deed of premises / property.</li>
															<li>Valid rental deed with tenants.</li>
															<li>Utility bill copy.</li>
															<li>Ground rent payment and municipal tax payment receipt.</li>
														</ul>
													</div>
												</div-->
											</div>
											<div role="tabpanel" class="tab-pane" id="TermsConditions">...</div>
											<div role="tabpanel" class="tab-pane" id="Review">...</div>
											<div role="tabpanel" class="tab-pane" id="UserReviews">...</div>
										</div>
									</section>
								</div>
							</div>
							
							<div id="hideDetailsDiv2" class="row hideMe">
								 <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe--> 
								 <iframe src="<?php echo base_url(); ?>en/personal_loan_chart"  frameborder="0"  width="100%" height="1700" scrolling="no" ></iframe>
							</div>
						</div>
					</div>
				</div>
				<!-- Right bar content end -->
			</div>
		</div>
	</section>

<script>
$(document).ready(function() {
	
	$('[data-toggle="toggle"]').change(function(){
		$(this).parents().next('.hide').toggle();
	});
});
</script>


<script type="text/javascript"> 

//for more info search
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "<i class='fa fa-info-circle'></i> More info";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "<i class='fa fa-info-circle'></i> Less info";
	}
} 

//for show hide (more info & Repayment Schedule)

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