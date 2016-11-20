<section id="auto_header">
</section>
<section id="card">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3">
                <div class="home_loan_left_bar">
                    <!-- slider range sidebar start-->
                    <div class="card_query">
                        <p>I Want </p>
                        <div class="query_radio">
                            <?php
                            $loan_user = $this->Select_model->select_all('auto_i_want','ASC');
                            foreach($loan_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iWant" id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->i_want;?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span8">
                            <div class="singleColumn page common">
                                <div class="htmltextarea section">
                                    <div class="innerMdlWrapper">
                                        <!-- Middle Inner START-->
                                        <div class="innerMdlInner">
                                            <div class="calcWrapper">
                                                <div class="clear"></div>
                                                <!--Calculator Banner END-->
                                                <div class="selectCalcWrapper" style="display:none;">
                                                    <div class="radiobox">
                                                        <input type="radio" id="savingCalculator" value="" title="Year" name="selCalc">
                                                        <label for="savingCalculator">Car Loan Calculator</label>
                                                    </div>
                                                    <div class="radiobox">
                                                        <input type="radio" id="depositCalculator" value="" title="Year" name="selCalc"  checked="checked">
                                                        <label for="depositCalculator">Personal Loan Calculator</label>
                                                    </div>
                                                </div>

                                                <div class="savingsContainer emiContainer">

                                                    <div class="leftCont">

                                                        <!--Amount Already Saved START-->

                                                        <div class="slideWrapper" id="alreadySaved">

                                                            <div class="inputWrapper"> <span class="rupee"></span>
                                                                <div class="inputField">
                                                                    <div class="inpLft"></div>
                                                                    <div class="inpMdl">
                                                                        <input type="text" name="" value="0" id="finalAssest" class="input_LoanAmt"/>
                                                                    </div>
                                                                    <div class="inpRt"></div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>

                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer">
                                                                <div class="calcSection calborder">
                                                                    <div class="dragBox">
                                                                        <div class="drag"> <span></span>
                                                                            <div class="sliderHover"></div>
                                                                            <div class="draggable ui-widget-content drag3"> </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="finacialAssest">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="prev"></div>
                                                                        <div class="next active"></div>
                                                                    </div>
                                                                    <div class="hideVal">25000</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->

                                                        </div>
                                                        <!--Amount Already Saved END-->

                                                        <div class="slideWrapper" id="avgSave">

                                                            <div class="inputWrapper">
                                                                <div class="inputField">
                                                                    <div class="inpLft"></div>
                                                                    <div class="inpMdl">
                                                                        <input type="text" name="" value="1" id="finalCustAge" maxlength="3" class="input_LoanPeriod"/>
                                                                    </div>
                                                                    <div class="inpRt"></div>
                                                                </div>
                                                                <div class="inpRadio">
                                                                    <div id="tenureType">
                                                                        <label>Year</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer yearWrap" style="display:none">
                                                                <div class="calcSection calborder">
                                                                    <div class="dragBox">
                                                                        <div class="drag"> <span></span>
                                                                            <div class="draggable ui-widget-content drag3"></div>
                                                                        </div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="custAge">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="prev"></div>
                                                                        <div class="next active"></div>
                                                                    </div>
                                                                    <div class="hideVal">5</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->

                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer monthWrap">
                                                                <div class="calcSection calborder">
                                                                    <div class="dragBox">
                                                                        <div class="drag2"> <span></span>
                                                                            <div class="draggable draggable2 ui-widget-content drag3"></div>
                                                                        </div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="monthExp">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <!--<div class="prev"></div>
                                                                                            <div class="next active"></div>-->
                                                                    </div>
                                                                    <div class="hideVal">5</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->
                                                        </div>


                                                        <div class="slideWrapper" id="interest">

                                                            <div class="inputWrapper">
                                                                <div class="inputField">
                                                                    <div class="inpLft"></div>
                                                                    <div class="inpMdl">
                                                                        <input type="text" name="" value="8" id="finalLiability" class="input_AIR"/>
                                                                    </div>
                                                                    <div class="inpRt"></div>
                                                                </div>
                                                                <span class="perc">%</span>
                                                            </div>
                                                            <div class="clear"></div>
                                                            <!--Calculator Section START-->
                                                            <div class="calcContainer">
                                                                <div class="calcSection">
                                                                    <div class="dragBox">
                                                                        <div class="drag"> <span></span>
                                                                            <div class="draggable ui-widget-content drag3"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
                                                                        <div class="slideImg" id="liability">
                                                                            <ul>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="prev"></div>
                                                                        <div class="next active"></div>
                                                                    </div>
                                                                    <div class="hideVal">0.5</div>
                                                                </div>
                                                            </div>
                                                            <!--Calculator Section END-->
                                                        </div>

                                                        <!--<a href="javascript:;" class="submit">Submit</a>-->
                                                        <input type="hidden" id="input_Payment" />
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider range sidebar start-->

                    <div class="card_query">
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                            $card_user = $this->Select_model->select_all('auto_i_am','ASC');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->i_am;?>
                                </label><br/>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Left bar query content end -->

            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9">
                <div id="searchHomeLoan">

                    <div id="loading" class="text-center"></div>
                    <?php/*
                    $home_loan = $this->Front_end_select_model->select_auto_loan_info();
                    $home = '';
                    foreach($home_loan->result() as $row){

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
                        $is_fixed =$row->is_fixed;
                        $show_interest ='';
                        if($is_fixed == 1){
                            $show_interest .='<h5>Interest (Fixed Rate)</h5>
											<p>Fixed '.$row->interest_rate_fixed.'%</p>';
                        }else{
                            $show_interest .='<h5>Interest (Avg Rate)</h5>
												<p>Avg '.$row->interest_rate_average.'% <br/>min '.$row->interest_rate_min.'%,<br> max '.$row->interest_rate_max.'%</p>';
                        }

                        $query_amount = 1000000;


                        $tenure = 3 * 12;

                        $interest_rate = 0;
                        if($is_fixed == 1){
                            $interest_rate = $row->interest_rate_fixed;
                        }else{
                            $interest_rate = $row->interest_rate_average;
                        }
                        $cal_interest = round(($interest_rate / 100) / $tenure,4);

                        $emi = $query_amount * $cal_interest * pow(( 1+ $cal_interest),$tenure) /pow((1 + $cal_interest),($tenure-1));
                        $total_payable = $emi * $tenure;
                        $downpayment = round(($row->downpayment/ 100) * $query_amount);


                        $home .='<div class="full-card">
                       <div class="row home_loan_right_bar no-margin-lr2">
                           <div class="col-sm-3 col-xs-3">
                               <a href="'.base_url().'en/car_loan_details"><img title="Click Here To Show details" class="img-responsive home_loan_logo" src="'.base_url().'resource/common_images/bank_logo/'.$row->bank_logo.'" /></a>
                               <small class="home_loan_bank_name"><a  href="javascript:void(0)">'.$row->bank_name.'</a></small>
                               <small class="home_loan_bank_name">'.$row->i_want.'</small>
                           </div>
                           <div class="col-sm-9 col-xs-9">
                               <div class="row">
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Amount</h5>
                                           <p>Tk.'.$query_amount.'.00</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                        '.$show_interest.'
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>EMI</h5>
                                           <p>Tk.'.$emi.'</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Payable Amount</h5>
                                           <p>Tk.'.$total_payable.'<br/><span class="tPaybleAmount">based on tk'.$query_amount.'</span></p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Down Payment</h5>
                                           <p>Tk.'.$downpayment.'</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-12 col-xs-12 home_loan_button">

                               <span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" href="javascript:void(0)" data-toggle="collapse" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i>  More info </a></span>
                               <span class="more_info_icon Hloan_more_icon"><a id="" href="javascript:void(0)"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
                               <span class="more_info_icon Hloan_more_icon"><a  class="rePaymentSchedule" role="button" data-toggle="collapse" data-repayment="'.$row->id.'"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>
                               <img class="btnCardApply img-responsive pull-right" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" />
                           </div>
                           <div class="collapse" id="moreInfo'.$row->id.'">
                             <div class="col-md-12">
                                   <section id="tab">
                                       <!-- Nav tabs -->
                                       <ul class="nav nav-tabs" role="tablist">
                                           <li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Features</a></li>
                                           <li role="presentation" ><a href="#FeesCharges'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                           <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Eligibility</a></li>
                                           <li role="presentation"><a href="#Security'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Security</a></li>
                                           <li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Required Doc</a></li>
                                           <li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                           <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                           <li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User reviews</a></li>
                                       </ul>

                                       <!-- Tab panes -->
                                       <div class="tab-content">
                                           <div role="tabpanel" class="tab-pane  active" id="Features'.$row->id.'">
                                                   <section id="card_details_FeesCharges">
                                                       <div class="card_details_pronsCons">
                                                           <h4>Features</h4>
                                                           <div class="prosConsHr"></div><br/>
                                                           <div class="prosCons_body2 trbodywidth">
                                                           '.$row->features.'
                                                       </div>
                                                   </div>
                                               </section>
                                           </div>
                                           <div role="tabpanel" class="tab-pane" id="FeesCharges'.$row->id.'">
                                               <section id="card_details_FeesCharges">
                                                   <div class="card_details_pronsCons">
                                                       <h4>Fees & Charges</h4>
                                                       <div class="prosConsHr"></div><br/>
                                                       <div class="prosCons_body2 trbodywidth">
                                                           '.$row->fees_and_charges.'
                                                       </div>
                                                   </div>
                                               </section>
                                           </div>

                                           <div role="tabpanel" class="tab-pane" id="Security'.$row->id.'">
                                               <section id="card_details_FeesCharges">
                                                   <div class="card_details_pronsCons">
                                                       <h4>Security Required</h4>
                                                       <div class="prosConsHr"></div><br/>
                                                       <div class="prosCons_body2 trbodywidth">
                                                       '.$row->security_required.'</div>
                                                    </div>
                                               </section>
                                           </div>

                                           <div role="tabpanel" class="tab-pane" id="Eligibility'.$row->id.'">
                                               <div class="card_details_pronsCons">
                                                   <h4>Eligibility</h4>
                                                   <div class="prosConsHr"></div><br/>
                                                   <div class="prosCons_body2">
                                                       <h4>Minimum Income:</h4>
                                                       '.$row->eligibility_for_applying.'
                                                   </div>
                                               </div>
                                           </div>
                                           <div role="tabpanel" class="tab-pane" id="RequiredDocuments'.$row->id.'">
                                              <section id="card_details_FeesCharges">
                                                   <div class="card_details_pronsCons">
                                                       <h4>Required Documents</h4>
                                                       <div class="prosConsHr"></div><br/>
                                                       <div class="prosCons_body2 trbodywidth">
                                                       '.$row->required_document.'</div>
                                                    </div>
                                              </section>
                                           </div>
                                           <div role="tabpanel" class="tab-pane" id="TermsConditions'.$row->id.'">
                                                    <h4>Terms and Conditions</h4>
                                                    <div class="prosConsHr"></div><br/>
                                                    <div class="prosCons_body2">
                                                       '.$row->terms_and_conditions.'
                                                    </div>
                                           </div>
                                           <div role="tabpanel" class="tab-pane" id="Review'.$row->id.'">'.$row->review.'</div>
                                           <div role="tabpanel" class="tab-pane" id="UserReviews'.$row->id.'">...</div>
                                       </div>
                                   </section>
                               </div>
                            </div>
                           <div class="collapse" id="rePaymentSchedule'.$row->id.'">
                               <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe-->

                           </div>
                       </div>
                   </div>';

                    }

                    echo $home;*/
                    ?>

                </div>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>


<script>
    $(document).ready(function(){


        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
            loading_show();


            var personal_i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                personal_i_want.push($(this).val());
            });

            var personal_i_want_list = "&personal_i_want="+personal_i_want;


            var personal_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                personal_user.push($(this).val());
            });
            var personal_user_list = "&personal_user="+personal_user;


            var main_string = personal_i_want_list+personal_user_list;
            main_string = main_string.substring(1, main_string.length);
            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>personal_loan/ajax_get_personal_loan",
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchPersonalLoan").html(msg);

                }
            });
        }



        $('#searchHomeLoan').on('click', '.more_info', function (){

            var  formData = $(this).data();
            var loan_id = formData.loan_id;
            //});

            console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");
//            alert('#moreInfo'+loan_id);

        });

        $('#searchHomeLoan').on('click', '.rePaymentSchedule', function (){

            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);
            //$("#repbtn").click(function(){
            $('#rePaymentSchedule'+repayment).html('<iframe  src="http://test.finager.com/en/auto_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");
//            alert('#moreInfo'+repayment);

        });
        // });


    });

</script>

