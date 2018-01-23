<?php
$id = $millionaire1['id'] ;
$result = $this->Front_end_select_model->select_millionaire_info_details($id);
$first_millionaire = $result->row();

$id1 = $millionaire2['id'] ;
$result1 = $this->Front_end_select_model->select_millionaire_info_details($id1);
$second_millionaire = $result1->row();

$first_bank_name = "";
$first_bank_logo = "";
if($first_millionaire->is_non_bank == 1){
    $first_bank_name = $first_millionaire->non_bank_name;
    $first_bank_logo = $first_millionaire->non_bank_logo;
}else{
    $first_bank_name = $first_millionaire->bank_name;
    $first_bank_logo = $first_millionaire->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_millionaire->is_non_bank == 1){
    $second_bank_name = $second_millionaire->non_bank_name;
    $second_bank_logo = $second_millionaire->non_bank_logo;
}else{
    $second_bank_name = $second_millionaire->bank_name;
    $second_bank_logo = $second_millionaire->bank_logo;
}

?>

<style>
	.innerMdlWrapper .innerMdlInner {
		width: 418px;
	}
	.home-loan-Compare-hr1 {
		width: 41.5%;
	}
	.Card-Compare-hr2 {
		width: 41%;
	}
	.home-loan-Compare-hr3 {
		width: 44.3%;
	}
	.home-loan-Compare-hr4 {
		width: 39.5%;
	}
	#basic_info {
		margin-top: -45px;
	}

</style>
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>en/millionaire_details/<?php echo $first_millionaire->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></a> </p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
							
						</td>
						<td><a href="<?php echo base_url();?>en/millionaire_details/<?php echo $second_millionaire->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></a> </td>
					</tr>			
				</table>
			</div>
		</div>
	</section>
	
	<section id="basic_info">
		<div class="container">
			
			<div class="row">
				<h3 class="text-center">  <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Review</span> </h3>
				<table class="table text-center">
					<tr>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
						<td><b> Rating </b></td>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
					</tr>
				</table>
			</div>
		
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Lakhpoti & MIllionaire Scheme</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_bank_name;?> </td>
						</tr>
						
						<tr>
							<td><b> Product Name</b></td>
							<td><?php echo $first_millionaire->millionaire_info_name;?></td>
						</tr>
						
						<tr>
							<td><b> Initial Deposit</b></td>
							<td> <?php echo $first_millionaire->initial_deposit;?> </td>
						</tr>
						
						<tr>
							<td><b> Monthly Installment Size</b></td>
							<td> <?php echo $first_millionaire->monthly_deposit;?> </td>
						</tr>
						
						<tr>
							<td><b> Term</b></td>
							<td><?php echo $first_millionaire->tenure_id;?> Years </td>
						</tr>
						
						<tr>
							<td><b> Number of Installment</b></td>
							<td> <?php echo $first_millionaire->no_of_installment;?> </td>
						</tr>
						
						<tr>
							<td><b>Total Principal Amount</b></td>
							<td> <?php echo $first_millionaire->total_principal_amount;?> </td>
						</tr>
						
						<tr>
							<td><b>Total Accrued Interest</b></td>
							<td> <?php echo $first_millionaire->accured_interest;?> </td>
						</tr>
						
						<tr>
							<td><b> Maturity Amount</b></td>
							<td> <?php echo $first_millionaire->maturity_amount;?> </td>
						</tr>
						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">

                            <tr>
                                <td class="abc"><b> Bank Name </b></td>
                                <td> <?php echo $second_bank_name;?> </td>
                            </tr>

                            <tr>
                                <td><b> Product Name</b></td>
                                <td><?php echo $second_millionaire->millionaire_info_name;?></td>
                            </tr>

                            <tr>
                                <td><b> Initial Deposit</b></td>
                                <td> <?php echo $second_millionaire->initial_deposit;?> </td>
                            </tr>

                            <tr>
                                <td><b> Monthly Installment Size</b></td>
                                <td> <?php echo $second_millionaire->monthly_deposit;?> </td>
                            </tr>

                            <tr>
                                <td><b> Term</b></td>
                                <td><?php echo $second_millionaire->tenure_id;?> Years </td>
                            </tr>

                            <tr>
                                <td><b> Number of Installment</b></td>
                                <td> <?php echo $second_millionaire->no_of_installment;?> </td>
                            </tr>

                            <tr>
                                <td><b>Total Principal Amount</b></td>
                                <td> <?php echo $second_millionaire->total_principal_amount;?> </td>
                            </tr>

                            <tr>
                                <td><b>Total Accrued Interest</b></td>
                                <td> <?php echo $second_millionaire->accured_interest;?> </td>
                            </tr>

                            <tr>
                                <td><b> Maturity Amount</b></td>
                                <td> <?php echo $second_millionaire->maturity_amount;?> </td>
                            </tr>
							
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Available Installment with Tenure</span> </h3>
					<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_millionaire->available_benefit;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_millionaire->available_benefit;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Features</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_millionaire->available_feature;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_millionaire->available_feature;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Fees & Charges</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_millionaire->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_millionaire->fees_and_charges;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Eligibility for Applying</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_millionaire->eligibility;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_millionaire->eligibility;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Requirement</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_millionaire->required_document;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_millionaire->required_document;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Terms and Conditions</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_millionaire->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_millionaire->terms_and_conditions;?>
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
	

});

$(document).ready(function () {

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
	

});

$(document).ready(function () {

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
	

});

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
<script>
$(window).on('scroll', function (){
	if ($(window).scrollTop() > 150){
	  $('#card_compare_default').addClass('compare-bg');
	} else {
	  $('#card_compare_default').removeClass('compare-bg');
	}
});
</script>