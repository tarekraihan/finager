<?php
$id=$this->uri->segment(3, 0);
if(!empty($id) && is_numeric($id) ){

    $query=$this->Front_end_select_model->select_snd_details($id);
    $row=$query->row();
	$snd_amount = ($this->session->userdata('snd_amount')) ? $this->session->userdata('snd_amount') : 100000;
	$snd_i_want_interest = ($this->session->userdata('snd_i_want_interest')) ? $this->session->userdata('snd_i_want_interest') : '';

	$snd_tenure = 0;
	if($snd_i_want_interest == 'Monthly'){
		$snd_tenure = 1;
	}else if($snd_i_want_interest == 'Quarterly'){
		$snd_tenure = 3;
	}else if($snd_i_want_interest == 'Half Yearly'){
		$snd_tenure = 6;
	}else{
		$snd_tenure = 12;
	}

	$bank = "";
	if($row->is_non_bank == 1){
		$bank = $row->non_bank_name;
	}else{
		$bank = $row->bank_name;
	}

	if($row->is_non_bank == 1){
		$bank_logo = $row->non_bank_logo;
	}else{
		$bank_logo = $row->bank_logo;
	}
	$interest_amount = 0;
	$interest = '';
	if(is_numeric($row->interest_rate)){
		$interest_amount = ((float)$snd_amount * (float)$row->interest_rate * (float)$snd_tenure ) / (12 * 100);
		$interest = $row->interest_rate.' %';
	}else{
		$interest = $row->interest_rate;
	}
	$maturity_amount = (float)$snd_amount + (float) $interest_amount;
}else{
    redirect(base_url().'My404');
}
?>
<style>
    .panel-default {border-color: #EAEAEC;background-color:#EAEAEC;}
    .savingsContainer .leftCont {padding: 0 0 0 24px;margin: 0 0 4% 23%;}
    .quest {font-size: 20px;}
    #alreadySaved .questWrap {margin-bottom: 16px;}
    .btnHomeLoan {
	    margin-top: 30px;
	}

</style>

	<section id="card_details_top">
		<div class="container">
			<div class="row">
				<div class="card_details_body">
					<div class="col-sm-2 col-xs-4">
						<div><img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo; ?>" /></div>
						<p class="text-center">
							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
						</p>
						<p class="rating text-center">Rated By 5 Person</p>
					</div>
					<div class="col-sm-2 col-xs-8">
						<div>
							<p class="card_details_head2"><?php echo $bank?> </p>
							<p class="card_details_features">
                                SND
							</p>
						</div>
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="row">
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Deposited Amount</p>
									<p class="card_details_features">
										BDT <?php echo number_format($snd_amount); ?>
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Interest Rate</p>
									<p class="card_details_features">
                                        <?php echo $interest; ?>
									</p>
								</div>
							</div>

							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Maturity Amount</p>
									<p class="card_details_features">
										BDT <?php echo number_format($maturity_amount);?>
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Notice Day</p>
									<p class="card_details_features">
										<?php echo $row->notice_day;?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="btnHomeLoan">
							<!-- <div class="col-sm-3 col-xs-12"><span class="add_comp_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span></div> -->
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
				<h4>Available Offer</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
					<?php echo $row->available_offer;?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_basic">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Features</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->features;?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_Eligibility">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Fees and Charges</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->fees_and_charges;?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_Eligibility">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Requirements</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->requirements;?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_Benefits">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Terms & Conditions</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2">
                    <?php echo $row->terms_and_conditions;?>
				</div>
			</div>
		</div>
	</section>
	<section id="card_details_Benefits">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Review</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2">
                    <?php echo $row->review;?>
				</div>
			</div>
		</div>
	</section>
	<div style="clear:both;"></div>
	<section id="card_details_userReview">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4 class="card_details_pronsCons_head">User reviews</h4>
				<h5 class="card_details_pronsCons_head"><b>How well does it rate with cardholders?</b></h5>
				<div class="prosConsHr"></div>
				<div class="row">
					<div class="col-sm-4 col-xs-4">
						<div class="userReview_body">
							<span class="userReviewLeft1">4.4</span><br/>
							<span class="userReviewLeft2">out of 5.0</span><br/>
							<span class="userReviewLeft3">based on 2 reviews</span>
						</div>
					</div>
					<div class="col-sm-4 col-xs-4">
						<div class="prosCons_body2">
							<p>Rates and fees</p>
							<p>Rewards</p>
							<p>Customer service</p>
							<p>Convenience</p>
							<p>Trust</p>
						</div>
					</div>
					<div class="col-sm-4 col-xs-4">
						<div class="prosCons_body2">
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
							<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="prosCons_body2">
							<p class="userreviw_note">Disclaimer: The opinions expressed about credit cards are the reviewer's alone, and do not reflect the views of Credit Card Compare or the credit card issuer. Reviews have not been approved or otherwise endorsed by Credit Card Compare.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>