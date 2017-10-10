<?php
//		print_r($this->session->userdata());
$id = $this->session->userdata('first_education_loan') ;
//echo $id;die;
$result = $this->Front_end_select_model->select_education_loan_details($id);
$first_education_loan = $result->row();

$id1 = $this->session->userdata('second_education_loan') ;
$result1 = $this->Front_end_select_model->select_education_loan_details($id1);
$second_education_loan = $result1->row();

$principal_amount = intval ($this->session->userdata('principal_amount'));
$year_limit = intval( $this->session->userdata('year_limit'));


//	print_r($second_education_loan);die;

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

<input type="hidden" id="first_yearly_interest" name="first_yearly_interest" value="<?php echo $first_yearly_interest; ?>">
<input type="hidden" id="second_yearly_interest" name="second_yearly_interest" value="<?php echo $second_yearly_interest; ?>">
<input type="hidden" id="principal_amount" name="principal_amount" value="<?php echo $principal_amount; ?>">
<input type="hidden" id="year_limit" name="year_limit" value="<?php echo $year_limit; ?>">

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
                <h3 class="text-center compare-feature-bar"> <span>Education Loan</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_bank_name;?> </td>
						</tr>
						<tr>
							<td class="abc"><b>Selected Amount </b></td>
							<td>BDT. <?php echo number_format($principal_amount);?> </td>
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
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $second_bank_name;?>  </td>
							</tr>
                            <tr>
                                <td class="abc"><b>Selected Amount </b></td>
                                <td>BDT. <?php echo number_format($principal_amount);?> </td>
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
                                <td id="secondPayableAmount"> 68,50,000 </td>
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
                <h3 class="text-center compare-feature-bar"> <span>Fees & Charges</span> </h3>
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
                <h3 class="text-center compare-feature-bar"> <span>Features</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_education_loan->feature;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $second_education_loan->feature;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Eligibility for Applying</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
						<?php echo $first_education_loan->eligibility;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_education_loan->eligibility;?>
					</div>
				</div>
			</div>
			


			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Requirements</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
						<?php echo $first_education_loan->requirement;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_education_loan->requirement;?>
					</div>
				</div>
			</div>


			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Terms and Conditions</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_education_loan->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_education_loan->terms_and_conditions;?>
					</div>
				</div>
			</div>


			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Review</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_education_loan->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_education_loan->review;?>
					</div>
				</div>
			</div>


			
			<div class="row comparision-subscribe">
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

        var principle_amount = parseFloat($('#principal_amount').val());
        var amount = (principle_amount <= 50000) ? 50000 : principle_amount;
        var tenure = parseInt($('#year_limit').val());
        //alert(tenure);
        var tenure_year = (tenure > 1 ) ? 1 : tenure;
        var month = parseInt(tenure_year * 12 );


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

        //alert("amoun: "+ amount+ "Month : "+ month+ "first_int :  "+ first_interest_rate+ "downpayment : "+first_downpayment);

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