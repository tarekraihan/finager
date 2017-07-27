<?php
//print_r($this->session->userdata());

$id = $this->session->userdata('first_personal_loan') ;
$result = $this->Front_end_select_model->select_personal_loan_details($id);
$first_personal_loan = $result->row();

$id1 = $this->session->userdata('second_personal_loan') ;
$result1 = $this->Front_end_select_model->select_personal_loan_details($id1);
$second_personal_loan = $result1->row();

$first_interest =($first_personal_loan->is_fixed =='0')? $first_personal_loan->interest_rate_average.' % (Avg)' : $first_personal_loan->interest_rate_fixed.' % (Fixed)';
$first_yearly_interest = floatval( ( $first_personal_loan->is_fixed =='0' ) ? $first_personal_loan->interest_rate_average : $first_personal_loan->interest_rate_fixed ) ;

$second_yearly_interest = floatval( ( $second_personal_loan->is_fixed =='0' ) ? $second_personal_loan->interest_rate_average : $second_personal_loan->interest_rate_fixed ) ;
$second_interest =($second_personal_loan->is_fixed =='0')? $second_personal_loan->interest_rate_average.' % (Avg)' : $second_personal_loan->interest_rate_fixed.' % (Fixed)';

$first_bank_name = "";
$first_bank_logo = "";
if($first_personal_loan->is_non_bank == 1){
    $first_bank_name = $first_personal_loan->non_bank_name;
    $first_bank_logo = $first_personal_loan->non_bank_logo;
}else{
    $first_bank_name = $first_personal_loan->bank_name;
    $first_bank_logo = $first_personal_loan->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_personal_loan->is_non_bank == 1){
    $second_bank_name = $second_personal_loan->non_bank_name;
    $second_bank_logo = $second_personal_loan->non_bank_logo;
}else{
    $second_bank_name = $second_personal_loan->bank_name;
    $second_bank_logo = $second_personal_loan->bank_logo;
}

?>
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>en/personal_loan_details/<?php echo $first_personal_loan->id;?>" ><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></a></p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
						</td>
						<td><a href="<?php echo base_url();?>en/personal_loan_details/<?php echo $second_personal_loan->id;?>" ><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></a></td>
					</tr>			
				</table>
			</div>
		</div>
	</section>

<input type="hidden" id="first_yearly_interest" name="first_yearly_interest" value="<?php echo $first_yearly_interest; ?>">
<input type="hidden" id="second_yearly_interest" name="second_yearly_interest" value="<?php echo $second_yearly_interest; ?>">
<input type="hidden" id="principal_amount" name="principal_amount" value="<?php echo $this->session->userdata('principal_amount'); ?>">
<input type="hidden" id="month_limit" name="month_limit" value="<?php echo $this->session->userdata('month_limit'); ?>">

	<section id="basic_info">
		<div class="container">
			
			<div class="row">
				<h3 class="text-center"><img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<table class="table text-center">
					<tr>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
						<td><b> Rating </b></td>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
					</tr>
				</table>
			</div>
		
			<div class="row">
				<h3 class="text-center"> <img class="personal-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Personal Loan <img class="personal-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_bank_name; ?></td>
						</tr>
						
						<tr>
							<td><b> Interest Rate</b></td>
							<td> <?php echo $first_interest; ?> </td>
						</tr>

						<tr>
							<td><b> Tenure</b></td>
							<td id="firstTenure"> 6 Month </td>
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
							<td> <?php echo $first_personal_loan->security_required; ?> </td>
						</tr>
						

						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td><?php echo $second_bank_name; ?></td>
							</tr>
							
							<tr>
								<td><b> Interest Rate</b></td>
								<td> <?php echo $second_interest; ?> </td>
							</tr>

							<tr>
								<td><b> Tenure</b></td>
								<td id="secondTenure"> 6 Month </td>
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
								<td> <?php echo $second_personal_loan->security_required; ?> </td>
							</tr>
							

						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_personal_loan->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_personal_loan->fees_and_charges;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="personal-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Eligibility for Applying  <img class="personal-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_personal_loan->eligibility_for_applying;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_personal_loan->eligibility_for_applying;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />Required Document<img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
		
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_personal_loan->required_document;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_personal_loan->required_document;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />Terms and Conditions<img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_personal_loan->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_personal_loan->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />Review<img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_personal_loan->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_personal_loan->review;?>
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

    /*--------Calculation----------------*/


    $( ".draggable" ).mouseout(function(){
        calculation();
    });

    calculation();
    function calculation(){
        var principle_amount = parseFloat($('#principal_amount').val());
        var amount = (principle_amount <= 25000) ? 25000 : principle_amount;
        var tenure = parseInt($('#month_limit').val());
        var month = (tenure <= 6 ) ? 6 : tenure;


        var first_yearly_interest = parseFloat($('#first_yearly_interest').val());
        var first_interest_rate = first_yearly_interest / 100 / 12;
        var second_yearly_interest = parseFloat($('#second_yearly_interest').val());
        var second_monthly_interest  =  second_yearly_interest / 12 /100 ;
//        var first_downpayment_amount =  Math.round( ( amount * first_downpayment ) / 100 );
//        var second_downpayment_amount =  Math.round( ( amount * second_downpayment ) / 100 );

        var first_emi = Math.round(amount * first_interest_rate * (( Math.pow( (1+first_interest_rate),month)) / ( Math.pow( ( 1 + first_interest_rate ) , month ) -1 )));
        var first_payable_amount = first_emi * month;

        var second_emi = Math.round(amount * second_monthly_interest * (( Math.pow( (1+second_monthly_interest),month)) / ( Math.pow( ( 1 + second_monthly_interest ) , month ) -1 )));
        var second_payable_amount = second_emi * month;

        $('#firstEmiAmount').html("&#2547; " + number_format( first_emi, 0, '.', ',' ));
        $('#firstPayableAmount').html("&#2547; " + number_format( first_payable_amount, 0, '.', ',' ) );
        $('#firstTenure').text(tenure +' Month' );
//        $('#firstDownpaymentAmount').text("BDT. " + number_format( first_downpayment_amount, 0, '.', ',' ) );

        $('#secondEmiAmount').html("&#2547; " + number_format( second_emi, 0, '.', ',' ));
        $('#secondPayableAmount').html("&#2547; " + number_format( second_payable_amount, 0, '.', ',' ) );
		$('#secondTenure').text(tenure +' Month' );
//        $('#secondDownpaymentAmount').text("BDT. " + number_format( second_downpayment_amount, 0, '.', ',' ) );

    }
});
</script>