<?php
    $id = $this->session->userdata('first_card') ;
    $result = $this->Front_end_select_model->select_debit_card_details($id);
    $first_card = $result->row();
//    print_r($first_card); die;

    $id1 = $this->session->userdata('second_card') ;
    $result1 = $this->Front_end_select_model->select_debit_card_details($id1);
    $second_card = $result1->row();
?>
<style>
    .innerMdlWrapper .innerMdlInner {
        width: 418px;
    }
    .home-loan-Compare-hr1 {
        width: 41.5%;
    }
    .Card-Compare-hr2 {
        width: 41%;
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
                    <td><p><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_card->bank_logo; ?>" /></p></td>
                    <td><b><p class="text-center com_title">Comparison </p></b>
                       
                    </td>
                    <td><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_card->bank_logo; ?>" /></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<section id="basic_info">
    <div class="container">

        <div class="row">
            <h3 class="text-center">  <img class="Card-Compare-hr" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <table class="table text-center">
                <tr>
                    <td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
                    <td><b> Rating </b></td>
                    <td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="home-loan-Compare-hr1" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png"/> Debit Card<img class="Card-Compare-hr1" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-align  compare_table">
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
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center table-align  compare_table">
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
            <h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $first_card->fees_and_charges;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $second_card->fees_and_charges;?>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="home-loan-Compare-hr3" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Features <img class="home-loan-Compare-hr3" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $first_card->features;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $second_card->features;?>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Requirements<img class="home-loan-Compare-hr4" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $first_card->requirement;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $second_card->requirement;?>
                </div>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Terms and Conditions<img class="home-loan-Compare-hr4" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $first_card->terms_and_conditions;?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="table-responsive">
                    <?php echo $second_card->terms_and_conditions;?>
                </div>
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