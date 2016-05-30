<?php

    $id=$this->uri->segment(3, 0);
    if(!empty($id) && is_numeric($id) ){
        $query=$this->Front_end_select_model->select_card_details($id);
        $row=$query->row();
//        print_r($row);die;
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
                         <?php if($row->card_image_name != "&lt;") {
                             ?>
                             <img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/card/credit_card/<?php echo $row->card_image_name; ?>"/>

                         <?php
                         }else{
                             ?>
                             <img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/demo_card.png"/>
                        <?php
                         }
                         ?>

                    </div>
                    <img class="btnCardApply img-responsive" src="<?php echo base_url();?>resource/front_end/images/BtnCard_apply.png" />
                    <p class="text-center">
                        <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                    </p>
                    <p class="rating text-center">Rated By 5 Person</p>
                </div>
                <div class="col-sm-2 col-xs-8">
                    <div>
                        <p class="card_details_head2"><?php echo $row->card_name;?></p>
                        <p class="card_details_features">
                            <?php echo $row->card_summary;?>
                        </p>
                        <!--<p class="add_comp_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></p>-->
                    </div>
                </div>

                <div class="col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div>
                                <p class="card_details_head2">Balance Transfer Interest Rate</p>
                                <p class="card_details_features">
                                    <?php echo $row->balance_transfer_rate;?>%, Monthly <?php echo $row->balance_transfer_rate_monthly;?>%
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <div>
                                <p class="card_details_head2">Purchase Interest Rate</p>
                                <p class="card_details_features">
                                    <?php echo $row->purchase_interest_rate;?>%, Monthly <?php echo $row->purchase_interest_rate_monthly;?>%
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <div>
                                <p class="card_details_head2">Annual Fee</p>
                                <p class="card_details_features head_margin">
                                    BDT <?php echo $row->annual_fee; ?> + <?php echo $row->annual_fee_vat; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div>
                                <p class="card_details_head2">Cash Advance Interest Rate</p>
                                <p class="card_details_features head_margin">
                                    <?php echo $row->cash_advance_interest_rate_yearly; ?>%, Monthly <?php echo $row->cash_advance_interest_rate; ?>%
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-6">
                            <div>
                                <p class="card_details_head2">Cash Advance Limit</p>
                                <p class="card_details_features">
                                    <?php echo $row->cash_advance_limit; ?>%
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
                <h4 class="card_details_pronsCons_head">Pros & cons</h4>
                <div class="col-sm-6">
                    <div class="prosCons_body">
                        <h5>What's good?</h5>
                        <div class="prosConsHr"></div>
                        <div class="tab_body_icon">
                            <?php echo $row->pros;?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="prosCons_body">
                        <h5>What's not so good?</h5>
                        <div class="prosConsHr"></div>
                        <div class="tab_body_icon2">
                            <?php echo $row->cons; ?>
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
        <div class="card_details_pronsCons">
            <h4>Review</h4>
            <div class="prosConsHr"></div>
            <div class="prosCons_body2">
                <?php echo $row->review;?>
            </div>
        </div>
    </div>
</section>

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

<section id="card_details_basic">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Basics</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2">
                <table class="table table-striped table-bordered">
                    <tbody>
                    <tr>
                        <td>Minimum Income</td>
                        <td><?php echo $row->income_range_min_salaried.' '.$row->income_range_max_business;?> (both salaried & self-employed)</td>
                    </tr>
                    <tr>
                        <td>Minimum Age</td>
                        <td><?php echo $row->age_limit_min;?></td>
                    </tr>
                    <tr>
                        <td>Minimum Credit</td>
                        <td><?php echo $row->credit_limit_min_business;?></td>
                    </tr>
                    <tr>
                        <td>Maximum Credit</td>
                        <td><?php echo $row->credit_limit_max_business;?></td>
                    </tr>
                    <tr>
                        <td>Year of Experience on Earning</td>
                        <td>Latest <?php echo $row->experience_salaried;?> months’ bank statement for salaried person Latest <?php echo $row->experience_business; ?> Year bank statement for salaried person</td>
                    </tr>
                    <tr>
                        <td>Maximum Interest Free Days</td>
                        <td><?php echo $row->interest_free_pefiod_max;?> Days</td>
                    </tr>
                    <tr>
                        <td>Credit Card Type</td>
                        <td><?php echo $row->cc_card_type;?></td>
                    </tr>
                    <tr>
                        <td>Card Issuer</td>
                        <td><?php echo $row->card_issuer_name; ?></td>
                    </tr>
                    <tr>
                        <td>Card Type</td>
                        <td><?php echo $row->card_type_name;?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<section id="card_details_FeesCharges">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Fees & Charges</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2">
                <table class="table table-striped table-bordered">
                    <tbody>
                    <tr>
                        <td>Basic Card Annual Fee</td>
                        <td><?php echo $row->basic_card_annual_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Supplementary Card Annual Fee</td>
                        <td><?php echo $row->supplementary_card_annual_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Purchase Fee</td>
                        <td><?php echo $row->purchase_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Balance Transfer Fee</td>
                        <td><?php echo $row->balance_transfer_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Cash Advance Fee
                            <ul>
                                <li>From own ATM</li>
                                <li>From other bank ATM</li>
                                <li>International</li>
                            </ul>
                        </td>
                        <td><br/>
                            <ul>
                                <li><?php echo $row->cash_advance_fee_own_atm; ?></li>
                                <li><?php echo $row->cash_advance_fee_other_atm; ?></li>
                                <li><?php echo $row->cash_advance_fee_international; ?></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Late Payment Fee</td>
                        <td><?php echo $row->late_payment_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Card Replacement Fee</td>
                        <td><?php echo $row->card_replacement_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Pin Replacement Fee</td>
                        <td><?php echo $row->pin_replacement_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Over limit Charge</td>
                        <td><?php echo $row->over_limit_charge; ?></td>
                    </tr>
                    <tr>
                        <td>Transaction Alert Service</td>
                        <td><?php echo $row->transaction_alert_service; ?></td>
                    </tr>
                    <tr>
                        <td>Credit Assurance Program Fee</td>
                        <td><?php echo $row->credit_assurance_program_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Monthly E-Statement Fee</td>
                        <td><?php echo $row->monthly_e_statement_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Cheque Book Fee</td>
                        <td><?php echo $row->check_book_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Minimum Payment</td>
                        <td><?php echo $row->minimum_payment; ?></td>
                    </tr>
                    <tr>
                        <td>Cheque Return Fee</td>
                        <td><?php echo $row->cheque_return_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Duplicate Statement</td>
                        <td><?php echo  $row->duplicate_statement ; ?></td>
                    </tr>
                    <tr>
                        <td>Card Cheque Processing Fee</td>
                        <td><?php echo $row->card_cheque_processing_fee; ?></td>
                    </tr>
                    <tr>
                        <td>Card Cheque Issuing Fee</td>
                        <td><?php echo $row->card_cheque_issuing_fee; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<section id="card_details_Benefits">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Benefits</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2">
                <?php echo $row->benifit_details; ?>
            </div>
        </div>
    </div>
</section>


<section id="card_details_Eligibility">
    <div class="container">
        <div class="card_details_pronsCons">
            <h4>Eligibility</h4>
            <div class="prosConsHr"></div><br/>
            <div class="prosCons_body2">
                <?php echo $row->eligibility; ?>
            </div>
        </div>
    </div>
</section>