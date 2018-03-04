<?php

$id= (int)$card_details['id'];
if(!empty($id) && is_numeric($id) ){
	$query=$this->Front_end_select_model->select_debit_card_details($id);
	$row=$query->row();
	$summary = $row->card_name.' of '.$row->bank_name.' is a valid both in Bangladesh & outside the country. It has waiver on annual fee from the second year if 18 transactions (including 10 POS transaction) is done in a physical year.';

}else{
	redirect(base_url().'My404');
}
?>
<section id="card_details_top">
		<div class="container">
			<div class="row">
				<div class="card_details_body">
					<div class="col-sm-2 col-xs-4">
						<div><a href="<?php echo base_url();?>compare-debit-cards/<?php echo $row->slug;?>.html"> <img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" /></a></div>
						<p class="text-center">
							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
						</p>
						<p class="rating text-center">Rated By 5 Person</p>
					</div>
					<div class="col-sm-4 col-xs-8">
						<div>
							<p class="card_details_head2"><?php echo $row->card_name; ?></p>
							<p class="card_details_features"><?php echo (!empty($row->card_summary)) ? $row->card_summary : $summary ;?></p>
						</div>
					</div>
					
					<div class="col-sm-6 col-xs-12">
						<div class="row ccard_details_feature">
							<div class="col-sm-4 col-xs-6">
								<div>
									<p class="card_details_head2">Daily Withdrawal Limit</p>
									<p class="card_details_features">
                                        <?php echo $row->daily_withdrawal_limit; ?>
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div>
									<p class="card_details_head2">Number of Withdrawal</p>
									<p class="card_details_features">
                                        <?php echo $row->no_of_withdrawal; ?>
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div>
									<p class="card_details_head2">ATM Charge</p>
									<p class="card_details_features head_margin">
										Own ATM: <?php echo $row->atm_charge_own; ?><br/>
										Others ATM:<br/>
                                        <?php echo $row->atm_charge_other; ?>
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Annual Fee</p>
									<p class="card_details_features head_margin">
                                        <?php echo $row->annual_fee; ?>
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div>
									<p class="card_details_head2">Account Required</p>
									<p class="card_details_features">
                                        <?php echo $row->account_name; ?>
									</p>
								</div>
							</div>
						</div>	
					</div>					
				</div>
			</div>
		</div>
	</section>
	
	<section id="card_details_ProsCons">
		<div class="container">
			<div class="card_details_pronsCons">
				<div class="row">
					<div class="col-sm-12">
						<div class="debit_card_tab">
							<h4>Features</h4>
							<div class="prosConsHr"></div><br/>
							<div class="prosCons_body2 trbodywidth">
                                <?php echo $row->features; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div style="clear:both;"></div>
	
	<section id="card_details_review">
		<div class="container">
			<div class="debit_card_tab">
				<h4>Fees & Charges</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->fees_and_charges; ?>

				</div>
			</div>
		</div>
	</section>
	
	<section id="card_details_userReview">
		<div class="container">
			<div class="debit_card_tab">
				<h4>Requirement</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->requirement; ?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_FeesCharges">
		<div class="container">
			<div class="debit_card_tab">
				<h4>Terms & Conditions</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->terms_and_conditions; ?>
				</div>
			</div>
		</div>
	</section>
	
	
	<section id="card_details_Benefits">
		<div class="container">
			<div class="debit_card_tab">
				<h4>Review</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->review; ?>
				</div>
			</div>
		</div>
	</section>
	
