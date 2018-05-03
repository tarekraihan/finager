<?php
		//print_r($this->session->userdata());
$id = $loan1['id'] ;
$result = $this->Front_end_select_model->select_auto_loan_details($id);
$first_auto_loan = $result->row();

$id1 = $loan2['id'];
$result1 = $this->Front_end_select_model->select_auto_loan_details($id1);
$second_auto_loan = $result1->row();


$principal_amount = intval (500000);
$month_limit = intval( 24);


$first_interest =($first_auto_loan->is_fixed =='0')? $first_auto_loan->interest_rate_average.' % (Avg)' : $first_auto_loan->interest_rate_fixed.' % (Fixed)';
$first_yearly_interest = floatval( ( $first_auto_loan->is_fixed =='0' ) ? $first_auto_loan->interest_rate_average : $first_auto_loan->interest_rate_fixed ) ;

$second_yearly_interest = floatval( ( $second_auto_loan->is_fixed =='0' ) ? $second_auto_loan->interest_rate_average : $second_auto_loan->interest_rate_fixed ) ;
$second_interest =($second_auto_loan->is_fixed =='0')? $second_auto_loan->interest_rate_average.' % (Avg)' : $second_auto_loan->interest_rate_fixed.' % (Fixed)';

$first_downpayment =  floatval( $first_auto_loan->downpayment );
$second_downpayment =  floatval( $second_auto_loan->downpayment );

$first_bank_name = "";
$first_bank_logo = "";
if($first_auto_loan->is_non_bank == 1){
    $first_bank_name = $first_auto_loan->non_bank_name;
    $first_bank_logo = $first_auto_loan->non_bank_logo;
}else{
    $first_bank_name = $first_auto_loan->bank_name;
    $first_bank_logo = $first_auto_loan->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_auto_loan->is_non_bank == 1){
    $second_bank_name = $second_auto_loan->non_bank_name;
    $second_bank_logo = $second_auto_loan->non_bank_logo;
}else{
    $second_bank_name = $second_auto_loan->bank_name;
    $second_bank_logo = $second_auto_loan->bank_logo;
}

?>

	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><a href="<?php echo base_url();?>compare-auto-loans/<?php echo $first_auto_loan->slug;?>.html" ><p><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></p> <p><?php echo $first_auto_loan->auto_loan_looking_for;?></p></a></td>
						<td><b><p class="text-center com_title">Comparison </p></b></td>
						<td><a href="<?php echo base_url();?>compare-auto-loans/<?php echo $second_auto_loan->slug;?>.html" ><p><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></p></a><p><?php echo $second_auto_loan->auto_loan_looking_for;?></p></td>
					</tr>			
				</table>
			</div>
		</div>
	</section>


<input type="hidden" id="first_yearly_interest" name="first_yearly_interest" value="<?php echo $first_yearly_interest; ?>">
<input type="hidden" id="first_downpayment" name="first_downpayment" value="<?php echo $first_downpayment; ?>">
<input type="hidden" id="second_yearly_interest" name="second_yearly_interest" value="<?php echo $second_yearly_interest; ?>">
<input type="hidden" id="second_downpayment" name="second_downpayment" value="<?php echo $second_downpayment; ?>">

<input type="hidden" id="principal_amount" name="principal_amount" value="<?php echo $principal_amount; ?>">
<input type="hidden" id="month_limit" name="month_limit" value="<?php echo $month_limit; ?>">

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
                <h3 class="text-center compare-feature-bar"> <span>Car Loan</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td><?php echo $first_bank_name; ?></td>
						</tr>
						<tr>
							<td class="abc"><b> Selected Amount </b></td>
							<td>BDT <?php echo number_format($principal_amount); ?></td>
						</tr>
						<tr>
							<td><b> Interest Rate</b></td>
							<td> <?php echo $first_interest;?></td>
						</tr>

						<tr>
							<td><b> Tenure </b></td>
							<td id="firstTenure"> </td>
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
							<td> <?php echo $first_auto_loan->security_required; ?> </td>
						</tr>
						
						<tr>
							<td><b> Minimum Down Payment Amount</b></td>
                            <td id="firstDownpaymentAmount"> 15,00,000 </td>
						</tr>
						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $second_bank_name; ?> </td>
							</tr>
							<tr>
                                <td class="abc"><b> Selected Amount </b></td>
                                <td>BDT <?php echo number_format($principal_amount); ?></td>
							</tr>
							<tr>
								<td><b> Interest Rate</b></td>
								<td> <?php echo $second_interest; ?> </td>
							</tr>

							<tr>
								<td><b> Tenure </b></td>
								<td id="secondTenure"> </td>
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
								<td> <?php echo $second_auto_loan->security_required; ?> </td>
							</tr>
							
							<tr>
								<td><b> Minimum Down Payment Amount</b></td>
                                <td id="secondDownpaymentAmount"> 15,00,000 </td>
							</tr>
							
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Fees & Charges</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_auto_loan->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_auto_loan->fees_and_charges;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Features</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_auto_loan->features;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_auto_loan->features;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Eligibility for Applying</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_auto_loan->eligibility_for_applying;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_auto_loan->eligibility_for_applying;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Terms and Conditions</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_auto_loan->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_auto_loan->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Review</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_auto_loan->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive" >
                        <?php echo $second_auto_loan->review;?>
					</div>
				</div>
			</div>

			<div class="row comparision-subscribe">
				<h4 class="text-center">  Send this comparison to yourself. Enter your email here.  </h4>
				<div class="col-md-12">
					<div class="comparison_email">
						<div class="form-group col-md-11">
							<input type="email" class="form-control" id="send_comparison_email" placeholder="Enter your email here">
						</div>
						<div class="form-group col-md-1">
							<button type="submit" class="btn btn-default" id="send_comparison_button">SEND </button>
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

    $( ".draggable" ).mouseout(function(){
        calculation();
    });

    calculation();
    function calculation(){


        var principle_amount = parseInt($('#principal_amount').val());
        var amount = (principle_amount <= 100000) ? 100000 : principle_amount;
        var tenure = parseInt($('#month_limit').val());
        //alert(tenure);
        var month = parseInt(tenure > 12 ) ? 12 : tenure;



        var first_yearly_interest = parseFloat($('#first_yearly_interest').val());
        var first_interest_rate = first_yearly_interest / 100 / 12;
        var first_downpayment = parseFloat($('#first_downpayment').val());
        var second_yearly_interest = parseFloat($('#second_yearly_interest').val());
        var second_monthly_interest  =  second_yearly_interest / 12 /100 ;
        var second_downpayment = parseFloat($('#second_downpayment').val());
        var first_downpayment_amount =  Math.round( ( amount * first_downpayment ) / 100 );
        var second_downpayment_amount =  Math.round( ( amount * second_downpayment ) / 100 );

        var rate =Math.pow( ( 1 + first_interest_rate ),month);


        var first_emi = Math.round(amount * first_interest_rate * (( Math.pow( (1+first_interest_rate),month)) / ( Math.pow( ( 1 + first_interest_rate ) , month ) -1 )));
        var first_payable_amount = first_emi * month;

        var second_emi = Math.round(amount * second_monthly_interest * (( Math.pow( (1+second_monthly_interest),month)) / ( Math.pow( ( 1 + second_monthly_interest ) , month ) -1 )));
        var second_payable_amount = second_emi * month;

        //alert("amoun: "+ amount+ "Month : "+ month+ "first_int :  "+ first_interest_rate+ "downpayment : "+first_downpayment);

        $('#firstEmiAmount').text("BDT " + number_format( first_emi, 0, '.', ',' ));
        $('#firstPayableAmount').text("BDT " + number_format( first_payable_amount, 0, '.', ',' ) );
        $('#firstDownpaymentAmount').text("BDT " + number_format( first_downpayment_amount, 0, '.', ',' ) );
        $('#firstTenure').text(month +' Month');

        $('#secondEmiAmount').text("BDT " + number_format( second_emi, 0, '.', ',' ));
        $('#secondPayableAmount').text("BDT " + number_format( second_payable_amount, 0, '.', ',' ) );
        $('#secondDownpaymentAmount').text("BDT " + number_format( second_downpayment_amount, 0, '.', ',' ) );
		$('#secondTenure').text(month +' Month');
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
});
</script>
<script>
$(window).on('scroll', function (){
	if ($(window).scrollTop() > 150){
	  $('#card_compare_default').addClass('compare-bg');
	} else {
	  $('#card_compare_default').removeClass('compare-bg');
	}
});
</script>