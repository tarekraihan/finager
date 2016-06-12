<pre>
    <?php
        $id = $this->session->userdata('first_card') ;
        $result = $this->Front_end_select_model->select_card_details($id);
        $first_card = $result->row();

    $id1 = $this->session->userdata('second_card') ;
    $result1 = $this->Front_end_select_model->select_card_details($id1);
    $second_card = $result1->row();
    //print_r($this->session->userdata());

//    print_r($first_card); die;

    $first_card_benefit = explode(',',$first_card->card_benifit_id);
    $second_card_benefit = explode(',',$second_card->card_benifit_id);

    $result = $this->Select_model->get_card_benefit();
//    $row = $query->result_array();


    //if(in_array($result[0]['id'], $first_card_benifit)){echo " YES";}else{ echo "No"; }
    //echo $result[0]['id'];die;
    //print_r($result);

    ?>
</pre>
<section id="card_compare_default">
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <td> <p><img class="pull-left compare_image img-responsive" src="<?php echo base_url();?>resource/card/credit_card/<?php echo $first_card->card_image_name; ?>" /></p></td>
                    <td><b> <p class="text-center com_title">Comparison </p></b></td>
                    <td> <p><img class="pull-right compare_image img-responsive" src="<?php echo base_url();?>resource/card/credit_card/<?php echo $second_card->card_image_name; ?>" /></p></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<section id="basic_info">
    <div class="container">

        <div class="row">
            <h3 class="text-center">
                <img class="Card-Compare-hr" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" />
                User Reviews
                <img class="Card-Compare-hr" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" />
            </h3>

            <table class="table text-center">
                <tr>
                    <td>
                        <p class="text-center">	<i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </p>
                    </td>
                    <td>
                        <b> Rating </b>
                    </td>
                    <td>
                        <p class="text-center">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="Card-Compare-hr1" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Basic Info <img class="Card-Compare-hr1" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center table-align  compare_table">
                    <tr>
                        <td> <?php echo $first_card->bank_name; ?></td>
                        <td class="abc"><b> Bank Name </b></td>
                        <td> <?php echo $second_card->bank_name; ?></td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->card_issuer_name; ?> </td>
                        <td><b> Network</b></td>
                        <td> <?php echo $second_card->card_issuer_name; ?> </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->card_type_name; ?>  </td>
                        <td><b> Card Type</b></td>
                        <td> <?php echo $second_card->card_type_name; ?>  </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->income_range_min_salaried; ?>  for Salaried & <?php echo $first_card->income_range_min_business; ?>  for self-employed </td>
                        <td><b> Income Range</b></td>
                        <td> <?php echo $second_card->income_range_min_salaried; ?>  for Salaried & <?php echo $second_card->income_range_min_business; ?>  for self-employed </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->credit_limit_max_business; ?> </td>
                        <td><b> Maximum Credit Limit</b></td>
                        <td> <?php echo $second_card->credit_limit_max_business; ?> </td>
                    </tr>

                    <tr>
                        <td>  <?php echo $first_card->cc_card_type; ?>  </td>
                        <td><b> Use Availability</b></td>
                        <td>  <?php echo $second_card->cc_card_type; ?>  </td>
                    </tr>

                    <tr>
                        <td>  <?php echo $first_card->interest_free_pefiod_max; ?> </td>
                        <td><b> Maximum Interest Free Days</b></td>
                        <td>  <?php echo $second_card->interest_free_pefiod_max; ?> </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->interest_free_period_min; ?> </td>
                        <td><b> Minimum Interest Free Days</b></td>
                        <td> <?php echo $second_card->interest_free_period_min; ?> </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->balance_transfer_limit; ?>% </td>
                        <td><b>Balance Transfer Limit</b></td>
                        <td> <?php echo $second_card->balance_transfer_limit; ?>% </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table">
                    <tr>
                        <td><?php echo $first_card->basic_card_annual_fee; ?></td>
                        <td class="def"><b> Basic Card Annual Fee</b></td>
                        <td><?php echo $second_card->basic_card_annual_fee; ?></td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->supplementary_card_annual_fee; ?> </td>
                        <td><b> Supplementary Card Annual Fee</b></td>
                        <td> <?php echo $second_card->supplementary_card_annual_fee; ?> </td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->purchase_fee; ?>  </td>
                        <td><b> Purchase Fee</b></td>
                        <td><?php echo $second_card->purchase_fee; ?>  </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->balance_transfer_fee; ?></td>
                        <td><b> Balance Transfer Fee</b></td>
                        <td> <?php echo $second_card->balance_transfer_fee; ?></td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->cash_advance_fee_own_atm; ?> </td>
                        <td><b> Cash Advance Fee From own ATM</b></td>
                        <td> <?php echo $second_card->cash_advance_fee_own_atm; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->cash_advance_fee_other_atm; ?></td>
                        <td><b> Cash Advance Fee From other bank ATM</b></td>
                        <td><?php echo $second_card->cash_advance_fee_other_atm; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->cash_advance_fee_international; ?> </td>
                        <td><b> Cash Advance Fee International</b></td>
                        <td><?php echo $second_card->cash_advance_fee_international; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->late_payment_fee; ?></td>
                        <td><b> Late Payment Fee</b> </td>
                        <td><?php echo $second_card->late_payment_fee; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->card_replacement_fee; ?> </td>
                        <td><b> Card Replacement Fee</b> </td>
                        <td><?php echo $second_card->card_replacement_fee; ?> </td>
                    </tr>

                    <tr>
                        <td>  <?php echo $first_card->pin_replacement_fee; ?>  </td>
                        <td><b> Pin Replacement Fee</b> </td>
                        <td> <?php echo $second_card->pin_replacement_fee; ?>  </td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->over_limit_charge; ?></td>
                        <td><b> Over Limit Charge</b> </td>
                        <td> <?php echo $second_card->over_limit_charge; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->transaction_alert_service; ?></td>
                        <td><b> Transaction Alert Service</b> </td>
                        <td><?php echo $second_card->transaction_alert_service; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->credit_assurance_program_fee; ?></td>
                        <td><b> Credit Assurance Program Fee</b> </td>
                        <td><?php echo $second_card->credit_assurance_program_fee; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->monthly_e_statement_fee; ?>  </td>
                        <td><b> Monthly E-Statement Fee</b> </td>
                        <td><?php echo $second_card->monthly_e_statement_fee; ?>  </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->check_book_fee; ?> </td>
                        <td><b> Check Book Fee</b> </td>
                        <td> <?php echo $second_card->check_book_fee; ?> </td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->minimum_payment; ?></td>
                        <td><b> Minimum Payment</b> </td>
                        <td><?php echo $second_card->minimum_payment; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $first_card->cheque_return_fee; ?>  </td>
                        <td><b> Check Return Fee</b> </td>
                        <td><?php echo $second_card->cheque_return_fee; ?>  </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->duplicate_statement; ?>  </td>
                        <td><b> Duplicate Statement</b> </td>
                        <td> <?php echo $second_card->duplicate_statement; ?>  </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->card_cheque_processing_fee; ?> </td>
                        <td><b> Card Cheque Processing Fee</b> </td>
                        <td> <?php echo $second_card->card_cheque_processing_fee; ?></td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->card_cheque_issuing_fee; ?> </td>
                        <td><b> Card Cheque Issuing Fee</b> </td>
                        <td> <?php echo $second_card->card_cheque_issuing_fee; ?> </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="Card-Compare-hr3" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Benefits <img class="Card-Compare-hr3" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table">


                    <tr>
                        <td><?php if(in_array($result[0]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[0]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[0]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[1]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[1]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[1]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[2]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[2]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[2]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[3]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[3]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[3]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[4]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[4]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[4]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[5]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[5]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[5]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[6]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[6]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[6]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[7]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[7]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[0]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[8]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[8]['reward_name'];?></b> </td>
                        <td> <?php if(in_array($result[8]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[9]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[9]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[9]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[10]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[10]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[0]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>

                    <tr>
                        <td><?php if(in_array($result[11]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[11]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[0]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[12]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[12]['reward_name'];?></b></td>
                        <td> <?php if(in_array($result[12]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[13]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[13]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[13]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[14]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[14]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[14]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[15]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[15]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[15]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[16]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[16]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[16]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[17]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[17]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[17]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[18]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[18]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[18]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[19]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[19]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[19]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[20]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[20]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[20]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[21]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                        <td><b><?php echo $result[21]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[21]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>
                    <tr>
                        <td><?php if(in_array($result[22]['id'], $first_card_benefit)){echo " Yes";}else{ echo "No"; } ?> </td>
                        <td><b><?php echo $result[22]['reward_name'];?></b></td>
                        <td><?php if(in_array($result[22]['id'], $second_card_benefit)){echo " Yes";}else{ echo "No"; } ?></td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center">  <img class="Card-Compare-hr4" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Additional Info <img class="Card-Compare-hr4" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table ">

                    <tr>
                        <td class="text-left">
                            <?php echo $first_card->eligibility; ?>
                        </td>
                        <td class="fourth text-center"><b> Eligibility </b></td>
                        <td class="text-left">
                            <?php echo $second_card->eligibility; ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <ul> <b> Pros: </b>
                                <?php echo $first_card->pros; ?>
                            </ul>

                            <ul> <b> Cons: </b>
                                <?php echo $first_card->cons; ?>
                            </ul>
                        </td>
                        <td class="text-center"><b> Pros & Cons </b></td>
                        <td class="text-left">
                            <ul> <b> Pros: </b>
                                <?php echo $first_card->pros; ?>
                            </ul>

                            <ul> <b> Cons: </b>
                                <?php echo $first_card->cons; ?>
                            </ul>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="row">
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