<pre>
    <?php
        $id = $this->session->userdata('first_card') ;
        $result = $this->Front_end_select_model->select_card_details($id);
        $first_card = $result->row();
    print_r($this->session->userdata());

       //echo $_SESSION['first_card']['developer'];

    ?>
</pre>
<section id="card_compare_default">
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <td> <p><img class="pull-left" src="<?php echo base_url();?>resource/card/credit_card/<?php echo $first_card->card_image_name; ?>" /></p></td>
                    <td><b> <p class="text-center com_title">Comparison </p></b></td>
                    <td> <p><img class="pull-right" src="<?php echo base_url();?>resource/front_end/images/visa_card.png" /></p></td>
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
                        <td> Brac Bank Ltd </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->card_issuer_name; ?> </td>
                        <td><b> Network</b></td>
                        <td> Visa </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->card_type_name; ?>  </td>
                        <td><b> Card Type</b></td>
                        <td> Classic </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->income_range_min_salaried; ?>  for Salaried & <?php echo $first_card->income_range_min_business; ?>  for self-employed </td>
                        <td><b> Income Range</b></td>
                        <td> 25000 (both salaried & self-employed) </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->credit_limit_max_business; ?> </td>
                        <td><b> Maximum Credit Limit</b></td>
                        <td> 75000 </td>
                    </tr>

                    <tr>
                        <td>  <?php echo $first_card->cc_card_type; ?>  </td>
                        <td><b> Use Availability</b></td>
                        <td> Local & International </td>
                    </tr>

                    <tr>
                        <td>  <?php echo $first_card->interest_free_pefiod_max; ?> </td>
                        <td><b> Maximum Interest Free Days</b></td>
                        <td> 20 </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->interest_free_period_min; ?> </td>
                        <td><b> Minimum Interest Free Days</b></td>
                        <td> 20 </td>
                    </tr>

                    <tr>
                        <td> <?php echo $first_card->cash_advance_limit; ?>% </td>
                        <td><b> Transferable Balance Limit</b></td>
                        <td> 50% </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table">
                    <tr>
                        <td> Dutch Bangla Bank </td>
                        <td class="def"><b> Basic Card Annual Fee</b></td>
                        <td> Dutch Bangla Bank </td>
                    </tr>

                    <tr>
                        <td> Master Card </td>
                        <td><b> Supplementary Card Annual Fee</b></td>
                        <td> Master Card </td>
                    </tr>

                    <tr>
                        <td> Nexus-Pro </td>
                        <td><b> Purchase Fee</b></td>
                        <td> Nexus-Pro </td>
                    </tr>

                    <tr>
                        <td> 30,000 tk </td>
                        <td><b> Balance Transfer Fee</b></td>
                        <td> 30,000 tk </td>
                    </tr>

                    <tr>
                        <td> 1,00,000 tk </td>
                        <td><b> Cash Advance Fee From own ATM</b></td>
                        <td> 1,00,000 tk </td>
                    </tr>

                    <tr>
                        <td> Sample </td>
                        <td><b> Cash Advance Fee From other bank ATM</b></td>
                        <td> Sample </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Cash Advance Fee International</b></td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Late Payment Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Card Replacement Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Pin Replacement Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Over Limit Charge</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Transaction Alert Service</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Credit Assurance Program Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Monthly E-Statement Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Check Book Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Minimum Payment</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Check Return Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Duplicate Statement</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Card Cheque Processing Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Card Cheque Issuing Fee</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="Card-Compare-hr3" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> Benefits <img class="Card-Compare-hr3" src="<?php echo base_url();?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table">
                    <tr>
                        <td> Dutch Bangla Bank </td>
                        <td class="third"><b> Waiver on Annual Fee</b></td>
                        <td> Dutch Bangla Bank </td>
                    </tr>

                    <tr>
                        <td> Master Card </td>
                        <td><b> Discount Facility</b></td>
                        <td> Master Card </td>
                    </tr>

                    <tr>
                        <td> Nexus-Pro </td>
                        <td><b> Airport Lounge Facility & Priority Pass</b></td>
                        <td> Nexus-Pro </td>
                    </tr>

                    <tr>
                        <td> 30,000 tk </td>
                        <td><b> Installment Payment for Bill & Purchase</b></td>
                        <td> 30,000 tk </td>
                    </tr>

                    <tr>
                        <td> 1,00,000 tk </td>
                        <td><b> Reward Program</b></td>
                        <td> 1,00,000 tk </td>
                    </tr>

                    <tr>
                        <td> Sample </td>
                        <td><b> Credit Assurance Program</b></td>
                        <td> Sample </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Worldwide Cash Advance Facility</b></td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Convenient Payment Option</b></td>
                        <td> Sample 45 </td>
                    </tr>
                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Multiple Supplementary Card</b></td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Auto Debit Payment Service</b> </td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Check Book Facility</b></td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Multiple Suplementary Card</b></td>
                        <td> Sample 45 </td>
                    </tr>

                    <tr>
                        <td> Sample 45 </td>
                        <td><b> Global Emergency ASSISTANCE SERVICE</b></td>
                        <td> Sample 45 </td>
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
                            <ul>
                                <li> Any Bangladeshi National</li>
                                <li>For salaried person minimum monthly income after tax is BDT 25,000</li>
                                <li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
                            </ul>
                            <ul> <b> Age: </b>
                                <li> Any Bangladeshi National</li>
                                <li>For salaried person minimum monthly income after tax is BDT 25,000</li>
                                <li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
                            </ul>
                        </td>
                        <td class="fourth text-center"><b> Eligibility </b></td>
                        <td class="text-left">
                            <ul>
                                <li> Any Bangladeshi National</li>
                                <li>For salaried person minimum monthly income after tax is BDT 25,000</li>
                                <li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
                            </ul>
                            <ul> <b> Age: </b>
                                <li> Any Bangladeshi National</li>
                                <li>For salaried person minimum monthly income after tax is BDT 25,000</li>
                                <li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <ul> <b> Pros: </b>
                                <li>Triple benefits insurance plan for the cardholders (See review for details).</li>
                                <li>Use of 100% limit through card cheque (See review for details).</li>
                                <li>Convenient payment option (See review for details). </li>
                                <li>You can set your own limit.</li>
                                <li>Installment program is available. </li>
                            </ul>

                            <ul> <b> Cons: </b>
                                <li>Triple benefits insurance plan for the cardholders (See review for details).</li>
                                <li>Use of 100% limit through card cheque (See review for details).</li>
                                <li>Convenient payment option (See review for details). </li>
                                <li>You can set your own limit.</li>
                                <li>Installment program is available. </li>
                            </ul>
                        </td>
                        <td class="text-center"><b> Pros & Cons </b></td>
                        <td class="text-left">
                            <ul> <b> Pros: </b>
                                <li>Triple benefits insurance plan for the cardholders (See review for details).</li>
                                <li>Use of 100% limit through card cheque (See review for details).</li>
                                <li>Convenient payment option (See review for details). </li>
                                <li>You can set your own limit.</li>
                                <li>Installment program is available. </li>
                            </ul>

                            <ul> <b> Cons: </b>
                                <li>Triple benefits insurance plan for the cardholders (See review for details).</li>
                                <li>Use of 100% limit through card cheque (See review for details).</li>
                                <li>Convenient payment option (See review for details). </li>
                                <li>You can set your own limit.</li>
                                <li>Installment program is available. </li>
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