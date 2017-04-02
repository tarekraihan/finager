<?php
//		print_r($this->session->userdata());
$id = $this->session->userdata('first_education_loan') ;
$result = $this->Front_end_select_model->select_education_loan_details($id);
$first_education_loan = $result->row();

$id1 = $this->session->userdata('second_education_loan') ;
$result1 = $this->Front_end_select_model->select_education_loan_details($id1);
$second_education_loan = $result1->row();

	print_r($second_education_loan);die;

//	echo $first_home_loan->loan_short_description;

$first_interest =($first_education_loan->is_fixed =='0')? $first_education_loan->avg_interest.' % (Avg)' : $first_education_loan->fixed_interest.' % (Fixed)';
$first_yearly_interest = floatval( ( $first_education_loan->is_fixed =='0' ) ? $first_education_loan->avg_interest : $first_education_loan->fixed_interest ) ;

$second_yearly_interest = floatval( ( $second_education_loan->is_fixed =='0' ) ? $second_education_loan->avg_interest : $second_education_loan->fixed_interest ) ;
$second_interest =($second_education_loan->is_fixed =='0')? $second_education_loan->avg_interest.' % (Avg)' : $second_education_loan->fixed_interest.' % (Fixed)';


$first_bank_name = "";
$first_bank_logo = "";
if($first_education_loan->is_non_bank == 1){
    $first_bank_name = $first_education_loan->non_bank_name;
    $first_bank_logo = $first_education_loan->non_bank_logo;
}else{
    $first_bank_name = $first_education_loan->bank_name;
    $first_bank_logo = $first_education_loan->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_education_loan->is_non_bank == 1){
    $second_bank_name = $second_education_loan->non_bank_name;
    $second_bank_logo = $second_education_loan->non_bank_logo;
}else{
    $second_bank_name = $second_education_loan->bank_name;
    $second_bank_logo = $second_education_loan->bank_logo;
}

?>


	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>en/education_loan_details/<?php echo $first_education_loan->id;?>" ><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></a></p></td>
						<td><b><p class="text-center com_title">Comparison </p></b></td>
						<td><a href="<?php echo base_url();?>en/education_loan_details/<?php echo $second_education_loan->id;?>" ><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></a></td>
					</tr>			
				</table>
			</div>
		</div>
	</section>
        <div class="home_loan_com_cal container text-center">
             <p>
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
																		  <label for="savingCalculator">Education Loan Calculator</label>
																		</div>
																		<div class="radiobox">
																		  <input type="radio" id="depositCalculator" value="" title="Year" name="selCalc"  checked="checked">
																		  <label for="depositCalculator">Education Loan Calculator</label>
																		</div>
																	</div>

																	<div class="savingsContainer emiContainer">
																
																		<div class="leftCont" style="margin:0 auto; float: none;"> 
																		  <!--Amount Already Saved START-->
																			<div class="slideWrapper" id="alreadySaved">
																				<div class="questWrap">
																				  <p class="quest">Enter your education loan amount required</p>
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
																				<p class="quest">Enter tenure for education loan</p>
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


																			<div class="slideWrapper hide" id="interest">
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
																		  <div class="resultWrapper hide">
																			<h2>Education Loan EMI Result</h2>
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
						
							</p>
        </div>


<input type="hidden" id="first_yearly_interest" name="first_yearly_interest" value="<?php echo $first_yearly_interest; ?>">
<input type="hidden" id="second_yearly_interest" name="second_yearly_interest" value="<?php echo $second_yearly_interest; ?>">

	<section id="basic_info">
		<div class="container">
			
			<div class="row">
				<h3 class="text-center">  <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<table class="table text-center">
					<tr>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
						<td><b> Rating </b></td>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
					</tr>
				</table>
			</div>
		
			<div class="row">
				<h3 class="text-center"> <img class="education-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Education Loan <img class="education-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_bank_name;?> </td>
						</tr>
						
						<tr>
							<td><b> Interest Rate</b></td>
							<td> <?php echo $first_interest; ?> </td>
						</tr>
						
						<tr>
							<td><b> Equal Monthly Installment (EMI)</b></td>
                            <td id="firstEmiAmount"> </td>
						</tr>
						
						<tr>
							<td><b> Total Payable Amount</b></td>
                            <td id="firstPayableAmount"> 68,50,000 </td>
						</tr>
						
						<tr>
							<td><b> Security Required</b></td>
							<td> Mortgage of the Property </td>
						</tr>

						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $second_bank_name;?>  </td>
							</tr>
							
							<tr>
								<td><b> Interest Rate</b></td>
								<td> <?php echo $second_interest;?>  </td>
							</tr>
							
							<tr>
								<td><b> Equal Monthly Installment (EMI)</b></td>
                                <td id="secondEmiAmount"> 35624 </td>
							</tr>
							
							<tr>
								<td><b> Total Payable Amount</b></td>
                                <td> <?php echo $second_personal_loan->security_required; ?> </td>
							</tr>
							
							<tr>
								<td><b> Security Required</b></td>
								<td> Mortgage of the Property </td>
							</tr>

						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-12 col-sm-12">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center compare_table">
							<tr>
								<td><?php echo $first_education_loan->processing_fee;?></td>
                                <td><b> Processing Fee</b></td>
                                <td> <?php echo $second_education_loan->processing_fee;?></td>
                            </tr>
							
							<tr>
								<td><?php echo $first_education_loan->early_settlement_fee;?></td>
								<td><b> Early Settlement Fee</b></td>
                                <td><?php echo $second_education_loan->early_settlement_fee;?></td>
							</tr>
							
							<tr>
								<td><?php echo $first_education_loan->partial_payment_fee;?></td>
								<td> Partial Payment Fee </td>
                                <td><?php echo $second_education_loan->partial_payment_fee;?></td>
							</tr>
							
							<tr>
								<td><?php echo $first_education_loan->penalty_charge;?></td>
                                <td><b> Penalty Charge</b></td>
                                <td><?php echo $second_education_loan->penalty_charge;?></td>
                            </tr>
						</table>
					</div>
				</div>

			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="home-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Features <img class="home-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_education_loan->feature;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $second_education_loan->feature;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Eligibility for Applying <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
		
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
						<?php echo $first_education_loan->eligibility;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_education_loan->eligibility;?>
					</div>
				</div>
			</div>
			


			<div class="row">
				<h3 class="text-center">  <img class="education-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Requirements <img class="education-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
						<?php echo $first_education_loan->requirement;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_education_loan->requirement;?>
					</div>
				</div>
			</div>


			<div class="row">
				<h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Terms and Conditions <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_education_loan->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_education_loan->terms_and_conditions;?>
					</div>
				</div>
			</div>


			<div class="row">
				<h3 class="text-center">  <img class="education-loan-Compare-hr5" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Review <img class="education-loan-Compare-hr5" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_education_loan->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_education_loan->review;?>
					</div>
				</div>
			</div>


			
			<div class="row">
				<h4 class="text-center">  Send this comparison to yourself. Enter your email here.  </h4>	
				<div class="col-md-12">
					<form class="comparison_email">
					  <div class="form-group col-md-11">
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email here">
					  </div>
					  <div class="form-group col-md-1">
						<button type="submit" class="btn btn-default">SEND </button>
					  </div>
					</form>
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


<script type="text/javascript">

//for left bar query
$(document).ready(function () {
	
	$('[data-toggle="toggle"]').change(function(){
		$(this).parents().next('.hide').toggle();
	});

	var outputSpan = $('#spanOutPut');
	var sliderElement = $('#slider');


	sliderElement.slider({
		range: false,
		min: 2,
		max: 120,
		values: [10],
		slide:function(event, ui) {
			outputSpan.html(ui.values[0] + ' Years');
			$('#txtMinAge').val(ui.values[0]);
		}
	});
	outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
	$('#txtMinAge').val(sliderElement.slider('values', 0));
	


	var outputSpan = $('#spanOutPut');
	var sliderElement = $('#slider1');


	sliderElement.slider({
		range: false,
		min: 2,
		max: 120,
		values: [10],
		slide:function(event, ui) {
			outputSpan.html(ui.values[0] + ' Years');
			$('#txtMinAge1').val(ui.values[0]);
		}
	});
	outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
	$('#txtMinAge1').val(sliderElement.slider('values', 0));
	


	var outputSpan = $('#spanOutPut');
	var sliderElement = $('#slider2');


	sliderElement.slider({
		range: false,
		min: 2,
		max: 120,
		values: [10],
		slide:function(event, ui) {
			outputSpan.html(ui.values[0] + ' Years');
			$('#txtMinAge2').val(ui.values[0]);
		}
	});
	outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
	$('#txtMinAge2').val(sliderElement.slider('values', 0));


    $( ".draggable" ).mouseout(function(){
        calculation();
    });

    calculation();
    function calculation(){

//        var x = number_format( 5400000, 0, '.', ',' );
//        alert(x);
//        parseFloat();

        var principle_amount = parseFloat($('#finalAssest').val());
        var amount = (principle_amount <= 50000) ? 50000 : principle_amount;
        var tenure = parseInt($('#finalCustAge').val());
        var month = (tenure <= 6 ) ? 6 : tenure;


        var first_yearly_interest = parseFloat($('#first_yearly_interest').val());
        var first_interest_rate = first_yearly_interest / 100 / 12;
        var second_yearly_interest = parseFloat($('#second_yearly_interest').val());
        var second_monthly_interest  =  second_yearly_interest / 12 /100 ;
//        var first_downpayment_amount =  Math.round( ( amount * first_downpayment ) / 100 );
//        var second_downpayment_amount =  Math.round( ( amount * second_downpayment ) / 100 );

        var rate =Math.pow( ( 1 + first_interest_rate ),month);


        var first_emi = Math.round(amount * first_interest_rate * (( Math.pow( (1+first_interest_rate),month)) / ( Math.pow( ( 1 + first_interest_rate ) , month ) -1 )));
        var first_payable_amount = first_emi * month;

        var second_emi = Math.round(amount * second_monthly_interest * (( Math.pow( (1+second_monthly_interest),month)) / ( Math.pow( ( 1 + second_monthly_interest ) , month ) -1 )));
        var second_payable_amount = second_emi * month;

//        alert("amoun: "+ amount+ "Month : "+ month+ "first_int :  "+ first_interest_rate+ "downpayment : "+first_downpayment);

        $('#firstEmiAmount').text("BDT. " + number_format( first_emi, 0, '.', ',' ));
        $('#firstPayableAmount').text("BDT. " + number_format( first_payable_amount, 0, '.', ',' ) );
//        $('#firstDownpaymentAmount').text("BDT. " + number_format( first_downpayment_amount, 0, '.', ',' ) );

        $('#secondEmiAmount').text("BDT. " + number_format( second_emi, 0, '.', ',' ));
        $('#secondPayableAmount').text("BDT. " + number_format( second_payable_amount, 0, '.', ',' ) );
//        $('#secondDownpaymentAmount').text("BDT. " + number_format( second_downpayment_amount, 0, '.', ',' ) );

    }


//for show hide (more info & Repayment Schedule)


		$('#hideDetailsDiv').hide();
		$('a#hideDetailsButton').click(function() {
			if (!$('#hideDetailsDiv').is(':visible')) {
				$('.hideMe').hide(400);
			}
			$('#hideDetailsDiv').toggle(800);
		});

    $('#hideDetailsDiv2').hide();
    $('a#hideDetailsButton2').click(function() {
        if (!$('#hideDetailsDiv2').is(':visible')) {
            $('.hideMe').hide(400);
        }
        $('#hideDetailsDiv2').toggle(400);
    });


	if ($(window).scrollTop() > 150){
	  $('#card_compare_default').addClass('compare-bg');
	} else {
	  $('#card_compare_default').removeClass('compare-bg');
	}
});
</script>