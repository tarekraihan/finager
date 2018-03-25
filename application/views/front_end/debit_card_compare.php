<?php
    //$id = $this->session->userdata('first_card') ;
$id = (int)$card1['id'];
    $result = $this->Front_end_select_model->select_debit_card_details($id);
    $first_card = $result->row();
//    print_r($first_card); die;

    //$id1 = $this->session->userdata('second_card') ;
$id1 = (int)$card2['id'];
    $result1 = $this->Front_end_select_model->select_debit_card_details($id1);
    $second_card = $result1->row();
?>

<section id="card_compare_default">
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <td><p> <a href="<?php echo base_url(); ?>compare-debit-cards/<?php echo $first_card->slug; ?>.html" ><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_card->bank_logo; ?>" /></a></p></td>
                    <td><b><p class="text-center com_title">Comparison </p></b>
                       
                    </td>
                    <td> <a href="<?php echo base_url(); ?>compare-debit-cards/<?php echo $first_card->slug; ?>.html" ><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_card->bank_logo; ?>" /></a></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<section id="basic_info">
    <div class="container">

        <div class="row">
            <h3 class="text-center"><img class="Debit-Card-Compare-hr" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <table class="table text-center">
                <tr>
                    <td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
                    <td><b> Rating </b></td>
                    <td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
                </tr>
            </table>
        </div>

        <div class="row">

            <h3 class="text-center compare-feature-bar"> <span>Debit Card</span> </h3>
            <div class="col-md-6 col-sm-6 tble-no-padding-left">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-align compare_table">
                        <tr>
                            <td class="abc"><b> Bank Name </b></td>
                            <td> <?php echo $first_card->bank_name;?> </td>
                        </tr>

                        <tr>
                            <td><b> Annual Fee</b></td>
                            <td> <?php echo $first_card->annual_fee;?> </td>
                        </tr>

                        <tr>
                            <td><b> Daily Withdrawal Limit</b></td>
                            <td><?php echo $first_card->daily_withdrawal_limit;?>  </td>
                        </tr>

                        <tr>
                            <td><b> No of Withdrawal</b></td>
                            <td><?php echo $first_card->no_of_withdrawal;?> </td>
                        </tr>

                        <tr>
                            <td><b> Per Transaction Limit</b></td>
                            <td><?php echo $first_card->per_transaction_limit;?> </td>
                        </tr>

                        <tr>
                            <td><b> ATM Charges</b></td>
                            <td> Own ATM :<?php echo $first_card->atm_charge_own;?> <br/> Other ATM : <?php echo $first_card->atm_charge_other;?> </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tble-no-padding-right">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-align compare_table">
                        <tr>
                            <td class="abc"><b> Bank Name </b></td>
                            <td> <?php echo $second_card->bank_name;?> </td>
                        </tr>

                        <tr>
                            <td><b> Annual Fee</b></td>
                            <td> <?php echo $second_card->annual_fee;?> </td>
                        </tr>

                        <tr>
                            <td><b> Daily Withdrawal Limit</b></td>
                            <td><?php echo $second_card->daily_withdrawal_limit;?>  </td>
                        </tr>

                        <tr>
                            <td><b> No of Withdrawal</b></td>
                            <td><?php echo $second_card->no_of_withdrawal;?> </td>
                        </tr>

                        <tr>
                            <td><b> Per Transaction Limit</b></td>
                            <td><?php echo $second_card->per_transaction_limit;?> </td>
                        </tr>

                        <tr>
                            <td><b> ATM Charges</b></td>
                            <td> Own ATM :<?php echo $second_card->atm_charge_own;?> <br/> Other ATM : <?php echo $second_card->atm_charge_other;?> </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center compare-feature-bar"> <span>Fees & Charges</span> </h3>
            <div class="col-md-6 col-sm-6 tble-no-padding-left">
                <div class="table-responsive">
                    <?php echo $first_card->fees_and_charges;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tble-no-padding-right">
                <div class="table-responsive">
                    <?php echo $second_card->fees_and_charges;?>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center compare-feature-bar margin-top-50"> <span>Features</span> </h3>
            <div class="col-md-6 col-sm-6 tble-no-padding-left">
                <div class="table-responsive">
                    <?php echo $first_card->features;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tble-no-padding-right">
                <div class="table-responsive">
                    <?php echo $second_card->features;?>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center compare-feature-bar margin-top-50"> <span>Requirements</span> </h3>
            <div class="col-md-6 col-sm-6 tble-no-padding-left">
                <div class="table-responsive home_compare_div">
                    <?php echo $first_card->requirement;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tble-no-padding-right">
                <div class="table-responsive home_compare_div">
                    <?php echo $second_card->requirement;?>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center compare-feature-bar margin-top-50"> <span>Terms and Conditions</span> </h3>
            <div class="col-md-6 col-sm-6 tble-no-padding-left">
                <div class="table-responsive">
                    <?php echo $first_card->terms_and_conditions;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tble-no-padding-right">
                <div class="table-responsive">
                    <?php echo $second_card->terms_and_conditions;?>
                </div>
            </div>
        </div>

        <div class="row comparision-subscribe">
            <h4 class="text-center">  Send this comparison to yourself. Enter your email here.  </h4>
            <div class="col-md-12">
                <div class="comparison_email">
                    <div class="form-group col-md-11">
                        <input type="email" class="form-control" id="send_comparison_email" placeholder="Enter your email here">
                    </div>
                    <div class="form-group col-md-1">
                        <button type="submit" class="btn btn-default" id="send_comparison_button">SEND </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>