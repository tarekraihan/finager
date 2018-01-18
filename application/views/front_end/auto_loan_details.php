<?php
$id= (int) $loan_details['id'];
if(!empty($id) && is_numeric($id) ){
    $query=$this->Front_end_select_model->select_auto_loan_details($id);
    $row=$query->row();
    $bank = "";
    if($row->is_non_bank == 1){
        $bank = $row->non_bank_name;
    }else{
        $bank = $row->bank_name;
    }
    $bank_logo = "";
    if($row->is_non_bank == 1){
        $bank_logo = $row->non_bank_logo;
    }else{
        $bank_logo = $row->bank_logo;
    }

    $principal_amount = 100000;
    $month_limit = 12;
    $is_fixed =$row->is_fixed;
    $show_interest ='';
    if($is_fixed == 1){
        $show_interest .='<h5>Interest (Fixed Rate)</h5><p>Fixed '.$row->interest_rate_fixed.'%</p>';
    }else{
        $show_interest .='<h5>Interest (Avg Rate)</h5><p>Avg '.$row->interest_rate_average.'% <br/>min '.$row->interest_rate_min.'%,<br> max '.$row->interest_rate_max.'%</p>';
    }

	$yearly_interest = floatval( ($row->is_fixed =='0')? $row->interest_rate_average : $row->interest_rate_fixed ) ;
	if($yearly_interest =='' || $yearly_interest < 6){
		$yearly_interest = floatval( '6');
	}
	$monthly_interest = ($yearly_interest /100/12);
	$emi = $principal_amount * $monthly_interest * ((pow( ( 1 + $monthly_interest ) , ( $month_limit ) )) / (pow( ( 1 + $monthly_interest ) , ( $month_limit ) ) -1 ));
	$total_payable = round( $emi * $month_limit );
	$downpayment_percentage = ( $row->downpayment == 'N/A' ) ? 0 : $row->downpayment;
	$downpayment_amount = round( ($principal_amount * $downpayment_percentage)/ 100 );

}else{
    redirect(base_url().'My404');
}

?>
<style type="text/css">
	.btnHomeLoan {
	    margin-top: 30px;
	}
	.margin-bottom{
		margin-bottom: 30px;
	}
</style>
<section id="card_details_top">
	<div class="container">
		<div class="row">
			<div class="card_details_body">
				<div class="col-sm-2 col-xs-4">
					<div><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo; ?>" /></div>
					<p class="text-center">
						<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
					</p>
					<p class="rating text-center">Rated By 5 Person</p>
				</div>
				<div class="col-sm-2 col-xs-8">
					<div>
						<p class="card_details_head2"><?php echo $bank;?></p>
						<p class="card_details_features">
							<?php echo $row->auto_loan_looking_for;?>
						</p>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<div class="row">
						<div class="col-sm-3 col-xs-6">
							<div>
								<p class="card_details_features">
									<?php echo $show_interest;?>
								</p>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div>
								<p class="card_details_head2">Equal Monthly Installment(EMI)</p>
								<p class="card_details_features">
									BDT <?php echo number_format($emi);?>
								</p>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div>
								<p class="card_details_head2">Total Payable Amount</p>
								<p class="card_details_features">
									BDT  <?php echo number_format($total_payable);?><br/><span class="tPaybleAmount">based on  BDT <?php echo number_format($principal_amount);?></span>
								</p>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div>
								<p class="card_details_head2">Down Payment (Min)</p>
								<p class="card_details_features">BDT
									<?php echo number_format($downpayment_amount);?>
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
            <h4>Fees & Charges</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2 trbodywidth">
                <?php echo $row->fees_and_charges;?>
            </div>
        </div>
    </div>
</section>
<section id="card_details_FeesCharges">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Security Required</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2 trbodywidth">
                <?php echo $row->security_required;?>
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
            <h4>Eligibility for Applying</h4>
            <div class="prosConsHr"></div><br/>
            <?php echo $row->eligibility_for_applying;?>
        </div>
    </div>
</section>
<section id="card_details_Benefits">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Required Documents</h4>
            <div class="prosConsHr"></div><br/>
            <?php echo $row->required_document;?>
        </div>
    </div>
</section>
<div style="clear:both;"></div>
<section id="card_details_review">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Review</h4>
            <div class="prosConsHr"></div>
            <?php echo $row->review;?>
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
