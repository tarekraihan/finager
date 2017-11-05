<?php
//pr($this->session->userdata());die;
$id = $this->session->userdata('first_snd') ;
$result = $this->Front_end_select_model->select_snd_details($id);
$first_snd = $result->row();

$id1 = $this->session->userdata('second_snd') ;
$result1 = $this->Front_end_select_model->select_snd_details($id1);
$second_snd = $result1->row();

$snd_amount = ($this->session->userdata('snd_amount')) ? $this->session->userdata('snd_amount') : 100000;
$snd_i_want_interest = ($this->session->userdata('snd_i_want_interest')) ? $this->session->userdata('snd_i_want_interest') : '';

$snd_tenure = 0;
if($snd_i_want_interest == 'Monthly'){
	$snd_tenure = 1*30;
}else if($snd_i_want_interest == 'Quarterly'){
	$snd_tenure = 3*30;
}else if($snd_i_want_interest == 'Half Yearly'){
	$snd_tenure = 6*30;
}else if($snd_i_want_interest == 'Yearly'){
	$snd_tenure = 12*30;
}else{
	$snd_tenure = 1;
}


$bank1 = "";
if($first_snd->is_non_bank == 1){
	$bank1 = $first_snd->non_bank_name;
}else{
	$bank1 = $first_snd->bank_name;
}
$bank_logo1='';
if($first_snd->is_non_bank == 1){
	$bank_logo1 = $first_snd->non_bank_logo;
}else{
	$bank_logo1 = $first_snd->bank_logo;
}
$interest_amount1 = 0;
$interest1 = '';
if(is_numeric($first_snd->interest_rate)){
	$interest_amount1 = ((float)$snd_amount * (float)$first_snd->interest_rate * (float)$snd_tenure ) / (360 * 100);
	$interest1 = $first_snd->interest_rate.' %';
}else{
	$interest1 = $first_snd->interest_rate;
}
$maturity_amount1 = (float)$snd_amount + (float) $interest_amount1;


$bank2 = "";
if($second_snd->is_non_bank == 1){
	$bank2 = $second_snd->non_bank_name;
}else{
	$bank2 = $second_snd->bank_name;
}
$bank_logo2='';
if($second_snd->is_non_bank == 1){
	$bank_logo2 = $second_snd->non_bank_logo;
}else{
	$bank_logo2 = $second_snd->bank_logo;
}
$interest_amount2 = 0;
$interest2 = '';
if(is_numeric($second_snd->interest_rate)){
	$interest_amount2 = ((float)$snd_amount * (float)$second_snd->interest_rate * (float)$snd_tenure ) / (360 * 100);
	$interest2 = $second_snd->interest_rate.' %';
}else{
	$interest2 = $second_snd->interest_rate;
}
$maturity_amount2 = (float)$snd_amount + (float) $interest_amount1;

$interest_calculated = '';
if($snd_tenure == 1){
	$interest_calculated = '1 day';
}else{
	$interest_calculated = $snd_tenure. ' days';
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
		width: 39%;
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
						<td><p><a href="<?php echo base_url();?>en/snd_details/<?php echo $first_snd->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo1; ?>" /></a> </p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
							
						</td>
						<td><a href="<?php echo base_url();?>en/snd_details/<?php echo $second_snd->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo2; ?>" /></a> </td>
					</tr>			
				</table>
			</div>
		</div>
	</section>
	
	<section id="basic_info">
		<div class="container">
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>SND Account</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $bank1;?> </td>
						</tr>
						
						<tr>
							<td><b> Product Name</b></td>
							<td><?php echo $first_snd->snd_name;?></td>
						</tr>
						<tr>
							<td><b> Deposited Amount</b></td>
							<td>BDT <?php echo number_format($snd_amount);?> </td>
						</tr>
						<tr>
							<td><b>Interest Calculated</b></td>
							<td><?php echo $interest_calculated;?> </td>
						</tr>
						<tr>
							<td><b> Interest Rate</b></td>
							<td> <?php echo $interest1;?> </td>
						</tr>
                        <tr>
                            <td><b>Payable Amount</b></td>
                            <td> BDT <?php echo number_format($maturity_amount1)?></td>
                        </tr>
						
						<tr>
							<td><b> Notice Day</b></td>
							<td> <?php echo $first_snd->notice_day;?> </td>
						</tr>
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $bank1;?> </td>
							</tr>

							<tr>
								<td><b> Product Name</b></td>
								<td><?php echo $second_snd->snd_name;?></td>
							</tr>
							<tr>
								<td><b> Deposited Amount</b></td>
								<td>BDT <?php echo number_format( $snd_amount );?> </td>
							</tr>

							<tr>
								<td><b>Interest Calculated</b></td>
								<td><?php echo $interest_calculated;?> </td>
							</tr>
							<tr>
								<td><b> Interest Rate</b></td>
								<td> <?php echo $interest2;?> </td>
							</tr>
							<tr>
								<td><b>Payable Amount</b></td>
								<td> BDT <?php echo number_format($maturity_amount2)?></td>
							</tr>

							<tr>
								<td><b> Notice Day</b></td>
								<td> <?php echo $second_snd->notice_day;?> </td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Available Offer</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_snd->available_offer;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_snd->available_offer;?>
					</div>
				</div>
			</div>
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Features</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_snd->features;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_snd->features;?>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Fees and Charges</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_snd->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_snd->fees_and_charges;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Requirements</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_snd->requirements;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_snd->requirements;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Terms and Conditions</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_snd->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_snd->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Review</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_snd->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_snd->review;?>
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