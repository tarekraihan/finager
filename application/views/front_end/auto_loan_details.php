<?php

$id=$this->uri->segment(3, 0);
if(!empty($id) && is_numeric($id) ){
    $query=$this->Front_end_select_model->select_auto_loan_details($id);
    $row=$query->row();

    $interest =($row->is_fixed =='0')? $row->interest_rate_average.' % (Avg)' : $row->interest_rate_fixed.' % (Fixed)';
    $bank_name = "";
    $bank_logo = "";
    if($row->is_non_bank == 1){
        $bank_name = $row->non_bank_name;
        $bank_logo = $row->non_bank_logo;
    }else{
        $bank_name = $row->bank_name;
        $bank_logo = $row->bank_logo;
    }
/*
   echo "<pre>";
         print_r($row);die;

     echo "</pre>";*/

}else{
    redirect(base_url().'My404');
}
?>
<section id="card_details_top">
		<div class="container">
			<div class="row">
				<div class="card_details_body">
					<div class="col-sm-2 col-xs-4">
						<div><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo; ?>" /></div>
						<p class="text-center">
							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
						</p>
						<p class="rating text-center">Rated By 5 Person</p>
					</div>
					<div class="col-sm-2 col-xs-8">
						<div>
							<p class="card_details_head2"><?php echo $bank_name;?></p>
							<p class="card_details_features">
								<?php echo $row->auto_loan_looking_for;?>
							</p>
						</div>
					</div>
					
					<div class="col-sm-8 col-xs-12">
						<div class="row">
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Security Required</p>
									<p class="card_details_features">
										28%,<br> Monthly 2.33%
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Interest (Mid Rate)</p>
									<p class="card_details_features">
										min 8%,<br> max 9%
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">EMI</p>
									<p class="card_details_features">
										28%,<br> Monthly 2.33%
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Total Payable Amount</p>
									<p class="card_details_features">
										50%,<br/><span class="tPaybleAmount">based on 100000</span>
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Down Payment (Min)</p>
									<p class="card_details_features">
										BDT 1300 + VAT
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

<section id="card_details_FeesCharges">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Fees & Charges</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2 trbodywidth">
                <?php echo $row->fees_and_charges;?>
            </div>
        </div>
    </div>
</section>


<section id="card_details_basic">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Features</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2 trbodywidth">
                <?php echo $row->features;?>
            </div>
        </div>
    </div>
</section>

<section id="card_details_Eligibility">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Eligibility for Applying</h4>
            <div class="prosConsHr"></div><br/>
            <?php echo $row->eligibility_for_applying;?>
        </div>
    </div>
</section>


<section id="card_details_Benefits">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Required Documents</h4>
            <div class="prosConsHr"></div><br/>
            <?php echo $row->required_document;?>
        </div>
    </div>
</section>


<div style="clear:both;"></div>

<section id="card_details_review">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Review</h4>
            <div class="prosConsHr"></div>
            <?php echo $row->review;?>
        </div>
    </div>
</section>
<div style="clear:both;"></div>

<section id="card_details_review">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Review</h4>
            <div class="prosConsHr"></div>
            <?php echo $row->review;?>
        </div>
    </div>
</section>
	
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
	

	
	<section id="chart_section">
		<div class="container">
			<div id="" class="row card_details_pronsCons">
								<div class="col-sm-12">
									<div class="panel panel-default">
									  	<div class="panel-heading">
									    	<h3 class="panel-title text-center">Demo Bank Home Loan Repayment Schedule</h3>
									  	</div>
										
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
																						  <p class="quest">Enter your home loan amount required</p>
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
																					  
																					<div class="slideWrapper" id="avgSave">
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


																					<div class="slideWrapper" id="interest">
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

																				<div class="rightCont"> 
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
										
									  	<div class="panel-body">
									    	<h3 class="text-center">Your Monthly Home Loan EMI : 4566511</h3>
								    		<div class="row">
									    		<div class="col-sm-5 col-xs-12">
									    			<h4 class="text-center">Break-up of all total amount</h4>
									    			<div id="pie2"></div>
													<div class="pietable">
														<table class="table text-center">
														  <tr>
															<td>Loan Amount</td>
															<td>&#2547; 25000</td>		
														  </tr>
														  <tr>
															<td>Total Interest Due</td>
															<td>&#2547; 25000</td>		
														  </tr>
														  <tr>
															<td>Processing Fee</td>
															<td>&#2547; 25000</td>		
														  </tr>
														  <tr class="pietd">
															<td>Total Amount Payable</td>
															<td>&#2547; 25000</td>		
														  </tr>
														</table>
													</div>
									    		</div>

									    		<div class="col-sm-7 col-xs-12">
													<div class="chartright">
														<h3>Your loan details as specified by you</h3>
														<table class="table">
														  <tr>
															<td>Total Amount Payable</td>
															<td>&#2547; 250000</td>		
														  </tr>
														  <tr>
															<td>Loan Amount</td>
															<td>&#2547; 20000</td>		
														  </tr>
														  <tr>
															<td>Tenure</td>
															<td>6 Months</td>		
														  </tr>
														  <tr>
															<td>Interest Rate</td>
															<td>10.25%</td>		
														  </tr>
														</table>
													</div>													
									    		</div>
								  			</div>

								  			<div class="row">
									    		<div class="col-sm-12 col-xs-12">
									    			<div id="chart1"></div>
									    		</div>
								  			</div>
										</div>
									</div>
							
								<div class="col-sm-12">
									<table class="pric_table">
										<thead>
											<tr>
												<th>Regian</th>
												<th>Q1 2010</th>
												<th>Q2 2010</th>
												<th>Q3 2010</th>
												<th>Q4 2010</th>
											</tr>
										</thead>
										<tbody>
											<tbody class="labels">
												<tr>
													<td>
														<label for="accounting">Accounting</label>
														<input type="checkbox" name="accounting" id="accounting" data-toggle="toggle">
													</td>
													<td>$7,685.00</td>
													<td>$3,544.00</td>
													<td>$5,834.00</td>
													<td>$10,583.00</td>
												</tr>
											</tbody>
											<tbody style="display:none;" class="hide">
												<tr>
													<td>Australia</td>
													<td>$7,685.00</td>
													<td>$3,544.00</td>
													<td>$5,834.00</td>
													<td>$10,583.00</td>
												</tr>
												<tr>
													<td>Central America</td>
													<td>$7,685.00</td>
													<td>$3,544.00</td>
													<td>$5,834.00</td>
													<td>$10,583.00</td>
												</tr>
											</tbody>
											
											<tbody class="labels">
												<tr>
													<td>
														<label for="management">management</label>
														<input type="checkbox" name="accounting" id="management" data-toggle="toggle">
													</td>
													<td>$7,685.00</td>
													<td>$3,544.00</td>
													<td>$5,834.00</td>
													<td>$10,583.00</td>
												</tr>
											</tbody>
											<tbody style="display:none;" class="hide">
												<tr>
													<td>Australia</td>
													<td>$7,685.00</td>
													<td>$3,544.00</td>
													<td>$5,834.00</td>
													<td>$10,583.00</td>
												</tr>
												<tr>
													<td>Central America</td>
													<td>$7,685.00</td>
													<td>$3,544.00</td>
													<td>$5,834.00</td>
													<td>$10,583.00</td>
												</tr>
											</tbody>
											
												
										</tbody>
									</table>
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