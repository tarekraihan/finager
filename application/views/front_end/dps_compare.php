<?php
//pr($_SESSION);die;

$dps_1 = $this->session->userdata('first_dps_id');
$dps_2 = $this->session->userdata('second_dps_id');
$deposited_amount = $this->session->userdata('deposit_amount');
if(!empty($dps_1) && is_numeric($dps_1) && !empty($dps_2) && is_numeric($dps_2) ){

	$array_map = array(
		'200' => array('two_hundred_maturity','two_hundred_interest','dps_info_id'),
		'300' => array('three_hundred_maturity','three_hundred_interest','dps_info_id'),
		'400' => array('four_hundred_maturity','four_hundred_interest','dps_info_id'),
		'500' => array('five_hundred_maturity','five_hundred_interest','dps_info_id'),
		'1000' => array('one_thousand_maturity','one_thousand_interest','dps_info_id'),
		'1500' => array('one_thousand_five_hundred_maturity','one_thousand_five_hundred_interest','dps_info_id'),
		'2000' => array('two_thousand_maturity','two_thousand_interest','dps_info_id'),
		'2500' => array('two_thousand_five_hundred_maturity','two_thousand_five_hundred_interest','dps_info_id'),
		'3000' => array('three_thousand_maturity','three_thousand_interest','dps_info_id'),
		'3500' => array('three_thousand_five_hundred_maturity','three_thousand_five_hundred_interest','dps_info_id'),
		'4000' => array('four_thousand_maturity','four_thousand_interest','dps_info_id'),
		'4500' => array('four_thousand_five_hundred_maturity','four_thousand_five_hunderd_interest','dps_info_id'),
		'5000' => array('five_thousand_maturity','five_thousand_interest','dps_info_id'),
		'5500' => array('five_thousand_five_hundred_maturity','five_thousand_five_hundred_interest','dps_info_id'),
		'6000' => array('six_thousand_maturity','six_thousand_interest','dps_info_id'),
		'6500' => array('six_thousand_five_hundred_maturity','six_thousand_five_hundred_interest','dps_info_id'),
		'7000' => array('seven_thousand_maturity','seven_thousand_interest','dps_info_id'),
		'7500' => array('seven_thousand_five_hundred_maturity','seven_thousand_five_hundred_interest','dps_info_id'),
		'8000' => array('eight_thousand_maturity','eight_thousand_interest','dps_info_id'),
		'9000' => array('nine_thousand_maturity','nine_thousand_interest','dps_info_id'),
		'10000' => array('ten_thousand_maturity','ten_thousand_interest','dps_info_id'),
		'11000' => array('eleven_thousand_maturity','eleven_thousand_interest','dps_info_id'),
		'12000' => array('twelve_thousand_maturity','twelve_thousand_interest','dps_info_id'),
		'13000' => array('thirteen_thousadn_maturity','thirteen_thousand_interest','dps_info_id'),
		'14000' => array('fourteen_thousand_maturity','fourteen_thousand_interest','dps_info_id'),
		'15000' => array('fifteen_thousand_maturity','fifteen_thousand_interest','dps_info_id'),
		'16000' => array('sixteen_thousand_maturity','sixteen_thousand_interest','dps_info_id'),
		'17000' => array('seventeen_thousand_maturity','seventeen_thousand_interest','dps_info_id'),
		'18000' => array('eighteen_thousand_maturity','eighteen_thousand_interest','dps_info_id'),
		'19000' => array('nineteen_thousand_maturity','nineteen_thousand_interest','dps_info_id'),
		'20000' => array('twenty_thousand_maturity','twenty_thousand_interest','dps_info_id'),
		'21000' => array('twenty_one_thousand_maturity','twenty_one_thousand_interest','dps_info_id'),
		'22000' => array('twenty_two_thousand_maturity','twenty_two_thousand_interest','dps_info_id'),
		'23000' => array('twenty_three_thousand_maturity','twenty_three_thousand_interest','dps_info_id'),
		'24000' => array('twenty_four_thousand_maturity','twenty_four_thousand_interest','dps_info_id'),
		'25000' => array('twenty_five_thousand_maturity','twenty_five_thousand_interest','dps_info_id'),
		'26000' => array('twenty_six_thousand_maturity','twenty_six_thousand_interest','dps_info_id'),
		'27000' => array('twenty_seven_thousand_maturity','twenty_seven_thousand_interest','dps_info_id'),
		'28000' => array('twenty_eight_thousand_maturity','twenty_eight_thousand_interest','dps_info_id'),
		'29000' => array('twenty_nine_thousand_maturity','twenty_nine_thousand_interest','dps_info_id'),
		'30000' => array('thirty_thousand_maturity','thirty_thousand_interest','dps_info_id'),
		'50000' => array('fifty_thousand_maturity','fifty_thousand_interest','dps_info_id'),
		'100000' => array('one_lac_maturity','one_lac_interest','dps_info_id'),
	);

	$s = array();
	if (array_key_exists($deposited_amount, $array_map)) {
		$s =  $array_map[$deposited_amount];
	}

	$dps_1_res =  $this->Front_end_select_model->select_dps_loan_info_details( $s[0],$s[1],$s[2],$dps_1);
	$dps_1_result = $dps_1_res->row_array();

	$dps_1_res2  = $this->Front_end_select_model->select_dps_by_id($dps_1);
	$dps_1_result2 = $dps_1_res2->row_array();

	$dps_1_row = array_merge($dps_1_result2,$dps_1_result);

//	pr($dps_1_row);die;
	$dps_1_bank = "";
	if ($dps_1_row['is_non_bank'] == 1) {
		$dps_1_bank = $dps_1_row['non_bank_name'];
	} else {
		$dps_1_bank = $dps_1_row['bank_name'];
	}
	$dps_1_bank_logo = "";
	if ($dps_1_row['is_non_bank'] == 1) {
		$dps_1_bank_logo = $dps_1_row['non_bank_logo'];
	} else {
		$dps_1_bank_logo = $dps_1_row['bank_logo'];
	}



	$dps_2_res =  $this->Front_end_select_model->select_dps_loan_info_details( $s[0],$s[1],$s[2],$dps_2);
	$dps_2_result = $dps_2_res->row_array();

	$dps_2_res2  = $this->Front_end_select_model->select_dps_by_id($dps_2);
	$dps_2_result2 = $dps_2_res2->row_array();

	$dps_2_row = array_merge($dps_2_result2,$dps_2_result);

//	pr($dps_1_row);die;
	$dps_2_bank = "";
	if ($dps_2_row['is_non_bank'] == 1) {
		$dps_2_bank = $dps_2_row['non_bank_name'];
	} else {
		$dps_2_bank = $dps_2_row['bank_name'];
	}
	$dps_2_bank_logo = "";
	if ($dps_2_row['is_non_bank'] == 1) {
		$dps_2_bank_logo = $dps_2_row['non_bank_logo'];
	} else {
		$dps_2_bank_logo = $dps_2_row['bank_logo'];
	}

}else{
	redirect(base_url().'My404');
}

?>
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>en/fdr_details/<?php echo $dps_1_row['id'];?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $dps_1_bank_logo; ?>" /></a></p></td>
						<td><b><p class="text-center com_title">Comparison </p></b></td>
						<td><a href="<?php echo base_url();?>en/fdr_details/<?php echo $dps_2_row['id'];?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $dps_2_bank_logo; ?>" /></a></td>

					</tr>			
				</table>
			</div>
		</div>
	</section>
	
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
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Available Benefit</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $dps_1_row['available_benefit']; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $dps_2_row['available_benefit']; ?>
					</div>
				</div>
			</div>
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>DPS</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $dps_1_bank;?> </td>
						</tr>
						
						<tr>
							<td><b> Interest Rate </b></td>
							<td> <?php echo $dps_1_row['interest_rate']; ?> % </td>
						</tr>
						
						<tr>
							<td><b> Deposited Amount </b></td>
							<td>BDT <?php echo number_format( $deposited_amount ); ?> </td>
						</tr>
						
						<tr>
							<td><b> Maturity Amount </b></td>
							<td>BDT <?php echo number_format( $dps_1_row['maturity'] ); ?> </td>
						</tr>
						
						<tr>
							<td><b> Accrued Interest </b></td>
							<td>BDT <?php echo number_format( $dps_1_row['interest'] ); ?> </td>
						</tr>
						
						<tr>
							<td><b> No of Installment </b></td>
							<td> <?php echo $dps_1_row['no_of_installment']; ?> </td>
						</tr>
						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $dps_2_bank;?> </td>
							</tr>

							<tr>
								<td><b> Interest Rate </b></td>
								<td> <?php echo $dps_2_row['interest_rate']; ?> % </td>
							</tr>

							<tr>
								<td><b> Deposited Amount </b></td>
								<td>BDT <?php echo number_format( $deposited_amount ); ?> </td>
							</tr>

							<tr>
								<td><b> Maturity Amount </b></td>
								<td>BDT <?php echo number_format( $dps_2_row['maturity'] ); ?> </td>
							</tr>

							<tr>
								<td><b> Accrued Interest </b></td>
								<td>BDT <?php echo number_format( $dps_2_row['interest'] ); ?> </td>
							</tr>

							<tr>
								<td><b> No of Installment </b></td>
								<td> <?php echo $dps_2_row['no_of_installment']; ?> </td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Fees & Charges</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $dps_1_row['fees_and_charges']; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $dps_2_row['fees_and_charges']; ?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Features</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $dps_1_row['available_feature']; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $dps_2_row['available_feature']; ?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Eligibility for Applying</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $dps_1_row['eligibility']; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $dps_2_row['eligibility']; ?>
					</div>
				</div>
			</div>


			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Requirement</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $dps_1_row['required_document']; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $dps_2_row['required_document']; ?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Review</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $dps_1_row['review']; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<?php echo $dps_2_row['review']; ?>
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