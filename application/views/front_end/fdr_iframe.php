<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to finager</title>
<script src="<?php echo base_url(); ?>resource/front_end/js/jquery-1.11.3.js"></script>
<script src="<?php echo base_url(); ?>resource/front_end/js/booNavigation.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/jquerysctipttop.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/material_theme.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/clientlib.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/stylecal.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/jquery.ui.slider.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<!--link rel="stylesheet" type="text/css" href="css/responsive.css" /-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/style.css" />

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
</head>
<body>
<div id="hideDetailsDiv2" class="hideMe">
	<div class="col-sm-12">
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
			
			<div class="offer_table">
				<div class="container">
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

<script src="<?php echo base_url(); ?>resource/front_end/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>resource/front_end/js/main.js"></script>
<script src="<?php echo base_url(); ?>resource/front_end/js/modernizr.js"></script>
<script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
<script type="text/javascript" src="<?php echo base_url(); ?>resource/front_end/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resource/front_end/js/clientlib.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resource/front_end/js/jquery.ui.touch-punch.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resource/front_end/js/personal-loan-calculator.js"></script>

</body>
</html>
