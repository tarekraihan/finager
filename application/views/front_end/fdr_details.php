<style>
    .panel-default {
        border-color: #EAEAEC;
        background-color:#EAEAEC;
    }
    .savingsContainer .leftCont {
        padding: 0 0 0 24px;
        margin: 0 0 4% 23%;
    }
    .quest {
        font-size: 20px;
    }
    #alreadySaved .questWrap {
        margin-bottom: 16px;
    }
</style>
	<section id="card_details_top">
		<div class="container">
			<div class="row">
				<div class="card_details_body">
					<div class="col-sm-2 col-xs-4">
						<div><img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/visa_card.png" /></div>
						<p class="text-center">
							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
						</p>
						<p class="rating text-center">Rated By 5 Person</p>
					</div>
					<div class="col-sm-2 col-xs-8">
						<div>
							<p class="card_details_head2">Prime Bank Home Loan</p>
							<p class="card_details_features">
								Purchase Apartment/Flat
							</p>
						</div>
					</div>
					
					<div class="col-sm-8 col-xs-12">
						<div class="row">
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Deposited Amount </p>
									<p class="card_details_features">
										&#2547; 10000
									</p>
								</div>
							</div>
							<div class="col-sm-1 col-xs-6">
								<div>
									<p class="card_details_head2">Tenure</p>
									<p class="card_details_features">
										1 Year
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Interest Rate</p>
									<p class="card_details_features">
										6%
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Maturity Amount</p>
									<p class="card_details_features">
										&#2547; 1300
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Loan Facility</p>
									<p class="card_details_features">
										90%
									</p>
								</div>
							</div>
						</div>	
					</div>	
					<div class="col-sm-8 col-xs-12">
						<div class="btnHomeLoan">
							<div class="col-sm-3 col-xs-12"><span class="add_comp_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span></div>
							<div class="col-sm-3 col-xs-12"><span><a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/BtnCard_apply.png" /></a></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="card_details_userReview">
		<div class="container">
			<div class="fdr_iframe">
				<h2 class="text-center">Available Offer</h2>
				<div class="panel panel-default">	
					<div class="emi_cal">
						<div id="">
							<a href="#skip" class="offscreen">Skip to Content</a>
							<div class="clear"></div>
							<div class="overlay"></div>
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
														<!--h1 class="blackColor">Personal Loan EMI Calculator</h1-->
														  
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
																	<div class="questWrap">
																	  <p class="quest">Select Deposit Amount</p>
																	</div>
																  
																	<div class="inputWrapper"> <span class="rupee"></span>
																	  <div class="inputField">
																		<div class="inpLft"></div>
																		<div class="inpMdl">
																		  <input type="text" name="" value="0" id="finalAssest" class="input_LoanAmt"/>
																		</div>
																		<!--div class="inpRt"></div-->
																	  </div>
																	</div>
																	<div class="clear"></div>
																	
																	<!--Calculator Section START-->
																	<div class="calcContainer">
																	  <div class="calcSection">
																		<div class="dragBox">
																		  <div class="drag"> <span></span>
																			<div class="sliderHover"></div>
																			<div class="draggable ui-widget-content drag3"> </div>
																		  </div>
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
																  
																<div class="slideWrapper" style="display:none;" id="avgSave">
																	<p class="quest">Enter tenure for home loan</p>
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
																	  <div class="calcSection">
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
																	  <div class="calcSection">
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


																<div class="slideWrapper" style="display:none;" id="interest">
																	<p class="quest">Interest rate on home loan</p>
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

															<div style="display:none;" class="rightCont"> 
															  <!--Result Wrapper START-->
															  <div class="resultWrapper">
																<h2>Personal Loan EMI Result</h2>
																<div class="resultContainer">
																  <!--div class="rsltField">
																	<p>Total Amount Payable</p>
																	<span class="rupee"></span>
																	<div id="totalAmtPay" class="result">5,00,000</div>
																  </div-->
																  <div class="rsltField">
																	<p>Principal Amount</p>
																	<span class="rupee"></span>
																	<div id="princpAmt" class="result">2025</div>
																  </div>
																  <div class="rsltField">
																	<p>Interest Payable</p>
																	<span class="rupee"></span>
																	<div id="totalInterest" class="result">2025</div>
																  </div>
																  <div class="rsltField">
																	<p>Total Monthly Payment</p>
																	<span class="rupee"></span>
																	<div id="monthPayment" class="result">2025</div>
																  </div>
																  
																</div>
															  </div>
															</div>
															<div class="clear"></div>
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
				</div>
				
				<div class="container">
					<div class="offer_table">
						<div class="col-sm-11">
							<table class="table table-bordered">
								<thead>
								  <tr>
									<th>Select Tenure</th>
									<th>Available Interest Rate</th>
									<th>Maturity Amount Based On</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>1 Month</td>
									<td>none</td>
									<td>none</td>
								  </tr>
								  <tr>
									<td>3 Month</td>
									<td>4%</td>
									<td>10700</td>
								  </tr>
								  <tr>
									<td>1 Year</td>
									<td>6%</td>
									<td>13000</td>
								  </tr>
								  <tr>
									<td>2 Year</td>
									<td>6%</td>
									<td>16000</td>
								  </tr>
								  <tr>
									<td>3 Year</td>
									<td>none</td>
									<td>none</td>
								  </tr>
								  <tr>
									<td>4 Year</td>
									<td>none</td>
									<td>none</td>
								  </tr>
								  <tr>
									<td>5 Year</td>
									<td>none</td>
									<td>none</td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="card_details_FeesCharges">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Features</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
					<ul>
						<li>Pre-mature full Encashment Facility</li>
						<li>Auto Renewal Option with Interest</li>
						<li>Loan Against Fixed Deposit Facility</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="card_details_basic">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Eligibility</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
					<ul>
						<li>FDS Account can be opened both for Individual and Corporate bodies</li>
						<li>Only Resident Bangladeshi National is allowed to open Personal FDS Account.</li>
						<li>Joint account can be opened.</li>
						<li>Minor account can be opened under the supervision of his / her / their guardian.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section id="card_details_Eligibility">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Required Documents</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
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
			</div>
		</div>
	</section>
	
	
	<section id="card_details_Benefits">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Terms & Conditions</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2">
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
			</div>
		</div>
	</section>
	
	<section id="card_details_Benefits">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Review</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2">
					<ul>
						<li>Application form (payment structure & schedule must be reflected)</li>
						<li>CV/Biodata</li>
						<li>Insurance coverage.</li>
						<li>Latest one-year personal bank statement</li>
						<li>Latest tax clearance certificate</li>
						<li>2 copy recent passport size photographs of applicant(s) and guarantor(s)</li>
						<li>NOC from spouse if co-applicant is anybody other than spouse</li>
						<li>Letter of introduction</li>
						<li>Copy of latest utility bill</li>
						<li>Personal net worth statements of applicant(s) and guarantor(s)</li>
						<li>Personal guarantee of spouse/parents/any person accepted to bank</li>
						<li>Evidence of another income source</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<div style="clear:both;"></div>

	
	<section id="card_details_userReview">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4 class="card_details_pronsCons_head">User reviews</h4>
				<h5 class="card_details_pronsCons_head"><b>How well does it rate with cardholders?</b></h5>
				<div class="prosConsHr"></div>
				<div class="row">
					<div class="col-sm-4 col-xs-4">
						<div class="userReview_body">
							<span class="userReviewLeft1">4.4</span><br/>
							<span class="userReviewLeft2">out of 5.0</span><br/>
							<span class="userReviewLeft3">based on 2 reviews</span>
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-4">
						<div class="prosCons_body2">
							<p>Rates and fees</p>
							<p>Rewards</p>
							<p>Customer service</p>
							<p>Convenience</p>
							<p>Trust</p>
						</div>
					</div>
					
					<div class="col-sm-4 col-xs-4">
						<div class="prosCons_body2">
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="prosCons_body2">
							<p class="userreviw_note">Disclaimer: The opinions expressed about credit cards are the reviewer's alone, and do not reflect the views of Credit Card Compare or the credit card issuer. Reviews have not been approved or otherwise endorsed by Credit Card Compare.</p>
						</div>
					</div>
				</div>
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
<script>
	<!-- for chart-->
	$(document).ready(function(){
	    var plot2 = $.jqplot('pie2', [[['a',7],['b',88],['c',5]]], {
	        seriesDefaults:{ renderer:$.jqplot.PieRenderer, trendline:{ show: true } },
	        legend:{ show: false },
	        grid: {borderColor: 'white', shadow: false, drawBorder: true}
	    });
	});
	

	<!-- for main chart-->	
	$(document).ready(function () {
	    var s1 = [[2002, 112000], [2003, 122000], [2004, 104000], [2005, 99000], [2006, 121000]];
	    var s2 = [[2002, 10200], [2003, 10800], [2004, 11200], [2005, 11800], [2006, 12400]];
	 
	    plot1 = $.jqplot("chart1", [s2, s1], {
	        // Turns on animatino for all series in this plot.
	        animate: true,
	        // Will animate plot on calls to plot1.replot({resetAxes:true})
	        animateReplot: true,
	        cursor: {
	            show: true,
	            zoom: true,
	            looseZoom: true,
	            showTooltip: false
	        },
	        series:[
	            {
	                pointLabels: {
	                    show: true
	                },
	                renderer: $.jqplot.BarRenderer,
	                showHighlight: false,
	                yaxis: 'y2axis',
	                rendererOptions: {
	                    // Speed up the animation a little bit.
	                    // This is a number of milliseconds.  
	                    // Default for bar series is 3000.  
	                    animation: {
	                        speed: 2500
	                    },
	                    barWidth: 15,
	                    barPadding: -15,
	                    barMargin: 0,
	                    highlightMouseOver: false
	                }
	            }, 
	            {
	                rendererOptions: {
	                    // speed up the animation a little bit.
	                    // This is a number of milliseconds.
	                    // Default for a line series is 2500.
	                    animation: {
	                        speed: 2000
	                    }
	                }
	            }
	        ],
	        axesDefaults: {
	            pad: 0
	        },
	        axes: {
	            // These options will set up the x axis like a category axis.
	            xaxis: {
	                tickInterval: 1,
	                drawMajorGridlines: false,
	                drawMinorGridlines: true,
	                drawMajorTickMarks: false,
	                rendererOptions: {
	                tickInset: 0.5,
	                minorTicks: 1
	            }
	            },
	            yaxis: {
	                tickOptions: {
	                    formatString: "$%'d"
	                },
	                rendererOptions: {
	                    forceTickAt0: true
	                }
	            },
	            y2axis: {
	                tickOptions: {
	                    formatString: "$%'d"
	                },
	                rendererOptions: {
	                    // align the ticks on the y2 axis with the y axis.
	                    alignTicks: true,
	                    forceTickAt0: true
	                }
	            }
	        },
	        highlighter: {
	            show: true, 
	            showLabel: true, 
	            tooltipAxes: 'y',
	            sizeAdjust: 7.5 , tooltipLocation : 'ne'
	        },
	        grid: {borderColor: 'white', shadow: false, drawBorder: true}
	    });
	   
	});

</script>