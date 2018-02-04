<?php
$id= $monthly_benefit_details['id'];
if(!empty($id) && is_numeric($id) ){
    $query=$this->Front_end_select_model->select_monthly_benefit_details($id);
    $row=$query->row();
	$tenure = ($row->tenure == '0.5') ? '6 Months' : $row->tenure.' Years';
	$loan_facility = (strtoupper($row->loan_facility) != 'N/A') ? $row->loan_facility.' %' :'N/A';

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
                            <img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" />
                            <p class="card_details_head2"><?php echo $row->bank_name;?></p>
                        </div>
						<p class="text-center">
							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
						</p>
						<p class="rating text-center">Rated By 5 Person</p>
					</div>

					<div class="col-sm-2 col-xs-8">
						<div>
							<p class="card_details_head2">Deposit Amount</p>
							<p class="card_details_features">
                                BDT <?php echo number_format($row->deposit_amount);?>
							</p>
						</div>
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="row">
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Tenure</p>
									<p class="card_details_features">
										<?php echo $tenure;?>
									</p>
								</div>
							</div>
							<div class="col-sm-2 col-xs-6">
								<div>
									<p class="card_details_head2">Benefit Amount</p>
									<p class="card_details_features">
                                        BDT <?php echo number_format($row->benefit_amount);?>
									</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Period</p>
									<p>Monthly</p>
								</div>
							</div>
							<div class="col-sm-3 col-xs-6">
								<div>
									<p class="card_details_head2">Loan Facility</p>
									<p class="card_details_features">
                                        <?php echo $loan_facility;?>
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
	<section id="">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Monthly Benefit Scheme :</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <table class="table table-bordered table-hover text-center table-align  compare_table">
                        <tr>
                            <td class="abc"><b> Bank Name </b></td>
                            <td> <?php echo $row->bank_name;?> </td>
                        </tr>
                        <tr>
                            <td><b> Product Name</b></td>
                            <td><?php echo $row->deposit_name;?></td>
                        </tr>
						<tr>
							<td><b>Deposited Amount</b></td>
							<td> BDT <?php echo number_format($row->deposit_amount);?> </td>
						</tr>

						<tr>
							<td><b>Tenure</b></td>
							<td> <?php echo $tenure;?> </td>
						</tr>

						<tr>
							<td><b> Benefit Amount</b></td>
							<td> BDT <?php echo number_format($row->benefit_amount);?> </td>
						</tr>
						<tr>
							<td><b> Loan Facility</b></td>
							<td> <?php echo $loan_facility;?> </td>
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
				<h4>Eligibility for Applying:</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->eligibility;?>
				</div>
			</div>
		</div>
	</section>
	<section id="">
		<div class="container">
			<div class="card_details_pronsCons">
				<h4>Requirement:</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
                    <?php echo $row->requirement;?>
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
				<h4>Review:</h4>
				<div class="prosConsHr"></div><br/>
				<div class="prosCons_body2 trbodywidth">
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
				<h5 class="card_details_pronsCons_head"><b>How well does it rate with Users?</b></h5>
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