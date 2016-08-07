<section id="card_compare_default">
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <td><p><img class="home_loan_img" src="<?php echo base_url(); ?>resource/front_end/images/visa_card.png" /></p></td>
                    <td><b><p class="text-center com_title">Comparison </p></b>
                        <p>
                        <div class="emi_cal">
                            <div id="">
                                <a href="#skip" class="offscreen">Skip to Content</a>

                                <div class="clear"></div>
                                <div class="overlay"></div>
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
                                                            <!--h1 class="blackColor">Personal Loan EMI Calculator</h1-->

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

                                                                <div class="leftCont" style="margin:0 auto; float: none;">
                                                                    <!--Amount Already Saved START-->
                                                                    <div class="slideWrapper" id="alreadySaved">
                                                                        <div class="questWrap">
                                                                            <p class="quest">Enter your home loan amount required</p>
                                                                        </div>

                                                                        <div class="inputWrapper"> <span class="rupee"></span>
                                                                            <div class="inputField">
                                                                                <div class="inpLft"></div>
                                                                                <div class="inpMdl">
                                                                                    <input type="text" name="" value="0" id="finalAssest" class="input_LoanAmt"/>
                                                                                </div>
                                                                                <!--div class="inpRt"></div-->
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>

                                                                        <!--Calculator Section START-->
                                                                        <div class="calcContainer">
                                                                            <div class="calcSection">
                                                                                <div class="dragBox">
                                                                                    <div class="drag"> <span></span>
                                                                                        <div class="sliderHover"></div>
                                                                                        <div class="draggable ui-widget-content drag3"> </div>
                                                                                    </div>
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
                                                                        <p class="quest">Enter tenure for home loan</p>
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
                                                                            <div class="calcSection">
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
                                                                            <div class="calcSection">
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


                                                                    <div class="slideWrapper hide" id="interest">
                                                                        <p class="quest">Interest rate on home loan</p>
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

                                                                <div class="rightCont">
                                                                    <!--Result Wrapper START-->
                                                                    <div class="resultWrapper hide">
                                                                        <h2>Personal Loan EMI Result</h2>
                                                                        <div class="resultContainer">
                                                                            <!--div class="rsltField">
                                                                              <p>Total Amount Payable</p>
                                                                              <span class="rupee"></span>
                                                                              <div id="totalAmtPay" class="result">5,00,000</div>
                                                                            </div-->
                                                                            <div class="rsltField">
                                                                                <p>Principal Amount</p>
                                                                                <span class="rupee"></span>
                                                                                <div id="princpAmt" class="result">2025</div>
                                                                            </div>
                                                                            <div class="rsltField">
                                                                                <p>Interest Payable</p>
                                                                                <span class="rupee"></span>
                                                                                <div id="totalInterest" class="result">2025</div>
                                                                            </div>
                                                                            <div class="rsltField">
                                                                                <p>Total Monthly Payment</p>
                                                                                <span class="rupee"></span>
                                                                                <div id="monthPayment" class="result">2025</div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </p>
                    </td>
                    <td><img src="<?php echo base_url(); ?>resource/front_end/images/visa_card.png" /></td>
                </tr>
            </table>
        </div>
    </div>
</section>

<section id="basic_info">
    <div class="container">

        <div class="row">
            <h3 class="text-center">  <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <table class="table text-center">
                <tr>
                    <td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
                    <td><b> Rating </b></td>
                    <td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="home-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Home Loan <img class="Card-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center table-align  compare_table">
                    <tr>
                        <td> Bank Asia Ltd </td>
                        <td class="abc"><b> Bank Name </b></td>
                        <td> Brac Bank Ltd </td>
                    </tr>

                    <tr>
                        <td> 11 </td>
                        <td><b> Interest Rate</b></td>
                        <td> 12 </td>
                    </tr>

                    <tr>
                        <td> 32154 </td>
                        <td><b> Equal Monthly Installment (EMI)</b></td>
                        <td> 35624 </td>
                    </tr>

                    <tr>
                        <td> 66,70,000 </td>
                        <td><b> Total Payable Amount</b></td>
                        <td> 68,50,000 </td>
                    </tr>

                    <tr>
                        <td> Mortgage of the Property </td>
                        <td><b> Security Required</b></td>
                        <td> Mortgage of the Property </td>
                    </tr>

                    <tr>
                        <td> 15,00,000 </td>
                        <td><b> Minimum Down Payment Amount</b></td>
                        <td> 15,00,000 </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table">
                    <tr>
                        <td> 1% </td>
                        <td class="def"><b> Processing Fee</b></td>
                        <td> 1.5% </td>
                    </tr>

                    <tr>
                        <td> Free </td>
                        <td><b> Processing Fee for Takeover Loan</b></td>
                        <td> .05% </td>
                    </tr>

                    <tr>
                        <td> Free </td>
                        <td><b> Early Settlement Fee</b></td>
                        <td> Free </td>
                    </tr>

                    <tr>
                        <td> 2% </td>
                        <td><b> Partial Payment Fee</b></td>
                        <td> 1% </td>
                    </tr>

                    <tr>
                        <td> 5000 or 5% of the installment </td>
                        <td><b> Penalty Charge</b></td>
                        <td> 4000 or 5% of the installment </td>
                    </tr>

                    <tr>
                        <td> 5000 or 5% of the installment </td>
                        <td><b> Loan Rescheduling Charges</b></td>
                        <td> 5000 or 5% of the installment </td>
                    </tr>

                    <tr>
                        <td> 3000 or 5% of the installment </td>
                        <td><b> EMI Date Rescheduling Charges</b></td>
                        <td> 4000 or 5% of the installment </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center"> <img class="home-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Features <img class="home-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table">
                    <tr>
                        <td> 10,00,000 </td>
                        <td class="third"><b> Minimum Loan Amount</b></td>
                        <td> 5,00,000 </td>
                    </tr>

                    <tr>
                        <td> 1,20,00,000 </td>
                        <td><b> Maximum Loan Amount</b></td>
                        <td> 1,00,00,000 </td>
                    </tr>

                    <tr>
                        <td> 5 Year </td>
                        <td><b> Minimum Term</b></td>
                        <td> 4 Year </td>
                    </tr>

                    <tr>
                        <td> 15 Year </td>
                        <td><b> Maximum Term</b></td>
                        <td> 25 Year </td>
                    </tr>

                    <tr>
                        <td> 30% </td>
                        <td><b> Down payment (%)</b></td>
                        <td> 30% </td>
                    </tr>

                    <tr>
                        <td> 1 Year </td>
                        <td><b> Grace Period</b></td>
                        <td> N/A </td>
                    </tr>

                    <tr>
                        <td> Available </td>
                        <td><b> Availability of Early Settlement</b></td>
                        <td> Available </td>
                    </tr>

                    <tr>
                        <td> Available </td>
                        <td><b> Availability of Partial Payment</b></td>
                        <td> Available </td>
                    </tr>
                    <tr>
                        <td> Available </td>
                        <td><b> Availability of Take Over Loan</b></td>
                        <td> Available </td>
                    </tr>

                    <tr>
                        <td> 3-16 Months </td>
                        <td><b> Try Party Agreement Allowed up to</b> </td>
                        <td> 3-24 Months </td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="row">
            <h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Eligibility for Applying <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center compare_table ">

                    <tr>
                        <td class="text-left">
                            <ul>
                                <li>Salaried: 30,000</li>
                                <li>Businessman: 40,000</li>
                                <li>Professional: 50,000 </li>
                                <li>Landlord: 40,000 </li>
                                <li>NRB: 60,000 </li>
                            </ul>
                        </td>
                        <td class="fourth text-center"><b> Minimum Income </b></td>
                        <td class="text-left">
                            <ul>
                                <li>Salaried: 30,000</li>
                                <li>Businessman: 40,000</li>
                                <li>Professional: 50,000 </li>
                                <li>Landlord: 40,000 </li>
                                <li>NRB: 60,000 </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-left">
                            <ul>
                                <li>Salaried: (1) year experience with 6   months employment in present organization</li>
                                <li>Businessman: (1) year experience in the same line of business.</li>
                                <li>Professional: 1) year experience in the same line of Profession. </li>
                                <li>Landlord:  6 months rental income continuation</li>
                                <li>NRB: (1) year experience with 6   months </li>
                            </ul>
                        </td>
                        <td class="text-center"><b> Minimum Experience </b></td>
                        <td class="text-left">
                            <ul>
                                <li>Salaried: (1) year experience with 6   months employment in present organization</li>
                                <li>Businessman: (1) year experience in the same line of business.</li>
                                <li>Professional: 1) year experience in the same line of Profession. </li>
                                <li>Landlord:  6 months rental income continuation</li>
                                <li>NRB: (1) year experience with 6   months </li>
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
	