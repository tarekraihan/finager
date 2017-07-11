<?php
$id=$this->uri->segment(3, 0);
$deposited_amount=$this->uri->segment(4, 0);
if(!empty($id) && is_numeric($id) ){

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

	$res =  $this->Front_end_select_model->select_dps_loan_info_details( $s[0],$s[1],$s[2],$id);
	$result = $res->row_array();

	$res2  = $this->Front_end_select_model->select_dps_by_id($id);
	$result2 = $res2->row_array();

	$row = array_merge($result2,$result);

	$bank = "";
	if ($row['is_non_bank'] == 1) {
		$bank = $row['non_bank_name'];
	} else {
		$bank = $row['bank_name'];
	}
	$bank_logo = "";
	if ($row['is_non_bank'] == 1) {
		$bank_logo = $row['non_bank_logo'];
	} else {
		$bank_logo = $row['bank_logo'];
	}
	/*pr($deposit_result);die;

	echo $id;
	echo '<br/>';
	echo 'deposit='.$deposited_amount;*/

}else{
	redirect(base_url().'My404');
}

?>
<style type="text/css">
	.btnHomeLoan {
	    margin-top: 30px;
	}
</style>

	<section id="card_details_top">
		<div class="container">
			<div class="row">
				<div class="card_details_body">
					<div class="col-sm-2 col-xs-4">
						<div><img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo;?>" /></div>
						<p class="text-center">
							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
						</p>
						<p class="rating text-center">Rated By 5 Person</p>
					</div>
					<div class="col-sm-10 col-xs-12">
						<div class="row">
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Installment Amount </p>
									<p class="card_details_features">
										BDT <?php echo number_format($deposited_amount);?>
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Number of Installment</p>
									<p class="card_details_features">
										<?php echo $row['no_of_installment']; ?>
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Maturity Amount</p>
									<p class="card_details_features">
										BDT <?php echo number_format($row['maturity']); ?>
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Accrued Interest</p>
									<p class="card_details_features">
										BDT <?php echo number_format($row['interest']); ?>
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Loan Facility</p>
									<p class="card_details_features">
										<?php echo number_format($row['loan_facility']); ?> %
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="btnHomeLoan">
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
				<p><b>Available Deposits (BDT):</b> 500, 1000, 1500, 2000, 2500, 3000, 4000, 5000, 8000, 10000.</p>
				<p><b>Available Terms:</b> 2, 3, 4, 5, 6, 7, 8, 10.</p>
				<p><b>Interest Rate:<?php echo $row['interest_rate']; ?>%</b></p>
				<div class="offer_table">
				  <h4>Monthly Installment Size and Benefit After Maturity</h4>
					<?php echo $row['available_benefit']; ?>
				</div>
			</div>
		</div>
	</section>
	<div style="clear:both;"></div>
	<section id="card_details_FeesCharges">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Features</h4>
				<div class="prosConsHr"></div><br/>
				<?php echo $row['available_feature']; ?>
			</div>
		</div>
	</section>
	<section id="card_details_basic">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Fees & Charges:</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
					<?php echo $row['fees_and_charges']; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="card_details_Eligibility">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Terms & Conditions:</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
					<?php echo $row['terms_and_conditions']; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="card_details_Benefits">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Eligibility:</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2">
					<?php echo $row['eligibility']; ?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_Benefits">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Requirement</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2">
					<?php echo $row['required_document']; ?>
				</div>
			</div>
		</div>
	</section>

	<div style="clear:both;"></div>
	<section id="card_details_userReview">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4 class="card_details_pronsCons_head">User reviews</h4>
				<?php echo $row['review']; ?>
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