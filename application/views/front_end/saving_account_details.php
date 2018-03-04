<?php
$id=$saving_account_details['id'];
if(!empty($id) && is_numeric($id) ){
	$query=$this->Front_end_select_model->select_savings_account_info_details($id);
	$row=$query->row();
	$bank_name = "";
	if($row->is_non_bank == 1){
		$bank_name = $row->non_bank_name;
	}else{
		$bank_name = $row->bank_name;
	}
	$bank_logo ='';
	if($row->is_non_bank == 1){
		$bank_logo = $row->non_bank_logo;
	}else{
		$bank_logo = $row->bank_logo;
	}

	$interest = '';
	if(is_numeric($row->interest_rate)){
		$interest = $row->interest_rate.' %';
	}else{
		$interest = $row->interest_rate;
	}
	$min_balance = ($row->min_balance_for_interest != '') ? $row->min_balance_for_interest : 'N/A';



}else{
	redirect(base_url().'My404');
}

?>

<section id="card_details_top">
	<div class="container">
		<div class="row">
			<div class="card_details_body">
				<div class="col-sm-2 col-xs-4">
					<div>
						<img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo ?>" />
						<p class="card_details_head2"><?php echo $bank_name;?></p>
					</div>
					<p class="text-center">
						<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
					</p>
					<p class="rating text-center">Rated By 5 Person</p>
				</div>

				<div class="col-sm-2 col-xs-8">
					<div>
						<p><b>A/C Opening Balance</b></p>
						<p>BDT. <?php echo number_format($row->opening_balance); ?></p>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<div class="row">
						<div class="col-sm-5 col-xs-6">
							<div class="text-center">
								<p><b>Interest Rate</b></p>
								<p><?php echo $interest; ?></p>
							</div>
						</div>
						<div class="col-sm-4 col-xs-6">
							<div>
								<p><b>Minimum Balance for Interest</b></p>
								<p>BDT.<?php echo number_format($min_balance); ?> Per Month</p>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div>
								<p><b>Interest Paid</b></p>
								<p><?php echo $row->interest_paid; ?></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Saving Account :</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<table class="table table-bordered table-hover text-center table-align  compare_table">
					<tr>
						<td class="abc"><b> Bank Name </b></td>
						<td> <?php echo $bank_name;?> </td>
					</tr>

					<tr>
						<td><b> Product Name</b></td>
						<td><?php echo $row->saving_account_name;?></td>
					</tr>

					<tr>
						<td><b> A/C Opening Balance</b></td>
						<td> BDT. <?php echo number_format($row->opening_balance)?> </td>

					</tr>

					<tr>
						<td><b> Interest Rate</b></td>
						<td> <?php echo $interest;?> </td>
					</tr>
					<tr>
						<td><b>Minimum Balance for Interest</b></td>
						<td> BDT. <?php echo number_format($min_balance)?>  Per Month</td>
					</tr>

					<tr>
						<td><b> Interest Paid</b></td>
						<td> <?php echo $row->interest_paid;?> </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>

<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Features:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<table class="table table-striped table-bordered">
					<?php echo $row->features;?>
				</table>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Fees and Charges:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->fees_and_charges;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Requirements:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->requirements;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Terms and Conditions:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->terms_and_conditions;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>User Review:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->review;?>
			</div>
		</div>
	</div>
</section>
<div style="clear:both;"></div>
<script>
	$(document).ready(function() {
		$('[data-toggle="toggle"]').change(function(){
			$(this).parents().next('.hide').toggle();
		});
	});

</script>