<style>
    .collapse.in {
        display: block !important;
    }
</style>

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
                            $card_user = $this->Select_model->select_all('home_loan_looking_for','ASC');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iWant" id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->home_loan_looking_for;?>
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
                                                        <label for="savingCalculator">Home Loan Calculator</label>
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
                            $card_user = $this->Select_model->select_all('home_loan_user','ASC');
                            foreach($card_user->result() as $row){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $row->home_loan_user;?>
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
                    <?php
                    $home_loan = $this->Front_end_select_model->select_home_loan_info();
                    $home = '';
                    foreach($home_loan->result() as $row){

                        $home .='<div class="full-card">
                       <div class="row home_loan_right_bar no-margin-lr2">
                           <div class="col-sm-3 col-xs-3">
                               <a href="home_loan_details.php"><img title="'.$row->id.'" class="img-responsive" src="'.base_url().'resource/front_end/images/visa_card.png" /></a>
                           </div>
                           <div class="col-sm-9 col-xs-9">
                               <div class="row">
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Security Required </h5>
                                           <p>'.$row->security_required.'</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Interest (Mid Rate)</h5>

                                           <p>'.$row->interest_rate_average.' % <br/>min '.$row->interest_rate_min.'%,<br> max '.$row->interest_rate_max.'%</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>EMI</h5>
                                           <p>3500</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Total Payable Amount</h5>
                                           <p>120000</p>
                                       </div>
                                   </div>
                                   <div class="col-sm-2 col-xs-2 w20">
                                       <div class="card_text2">
                                           <h5>Down Payment (Min)</h5>
                                           <p>20000</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-sm-12 col-xs-12 home_loan_button">
                               <img class="btnCardApply img-responsive" src="'.base_url().'resource/front_end/images/card_btn_apllication.png" />

                               <span class="more_info_icon Hloan_more_icon"><a role="button"  class="more_info" data-toggle="collapse" data-loan_id="'.$row->id.'"><i class="fa fa-info-circle"></i>  More info </a></span>
                               <span class="more_info_icon Hloan_more_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span>
                               <span class="more_info_icon Hloan_more_icon"><a  class="rePaymentSchedule" role="button" data-toggle="collapse" data-repayment="'.$row->id.'"><i class="fa fa-plus-circle"></i> Repayment Schedule</a></span>
                           </div>
                           <div class="collapse" id="moreInfo'.$row->id.'">
                             <div class="col-md-12">
                                   <section id="tab">
                                       <!-- Nav tabs -->
                                       <ul class="nav nav-tabs" role="tablist">
                                           <li role="presentation" class="active"><a href="#FeesCharges'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                           <li role="presentation"><a href="#Features'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Features</a></li>
                                           <li role="presentation"><a href="#Eligibility'.$row->id.'" aria-controls="messages" role="tab" data-toggle="tab">Eligibility for Applying</a></li>
                                           <li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Required Documents</a></li>
                                           <li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                           <li role="presentation"><a href="#UserReviews'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User reviews</a></li>
                                       </ul>

                                       <!-- Tab panes -->
                                       <div class="tab-content">
                                           <div role="tabpanel" class="tab-pane active" id="FeesCharges'.$row->id.'">
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
                                           <div role="tabpanel" class="tab-pane" id="Features'.$row->id.'">
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
                                               <div class="card_details_pronsCons">
                                                   <h4>Required Documents</h4>
                                                   <div class="prosConsHr"></div><br/>
                                                   <div class="prosCons_body2">
                                                       '.$row->required_document.'
                                                   </div>
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
                               <iframe  src="'.base_url().'en/home_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>
                           </div>
                       </div>
                   </div>';

                    }

                    echo $home;
                    ?>

                </div>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>


<script>
    $(document).ready(function(){

        $('#searchHomeLoan').on('click', '.more_info', function (){

            var  formData = $(this).data();
            var loan_id = formData.loan_id;
            //});

            console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");
            alert('#moreInfo'+loan_id);

        });

        $('#searchHomeLoan').on('click', '.rePaymentSchedule', function (){

            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);
            //$("#repbtn").click(function(){
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");
//            alert('#moreInfo'+repayment);

        });
        // });


    });

</script>

