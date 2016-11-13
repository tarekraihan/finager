<style type="text/css">
    .savingsContainer .leftCont {
        padding: 0 0 0 0;
    }
    .calcSection .dragBox .drag {
        width: 200px;
    }
    .calcSection .dragBox .next {
        right: 103px;
    }
    .calcSection .dragBox .drag2 {
        width: 201px;
    }
    .monthWrap .calcSection .dragBox {
        width: 215px;
    }
    .calcSection .dragBox .slideImg {
        width: 210px;
    }
    .monthWrap .calcSection .dragBox .slideImg {
        width: 207px;
    }
    .calcSection .dragBox .drag span {
        background: none;
    }
    .calborder {
        border-bottom:0px solid #DADADA;
    }
    #maximizer_header{
        background-image: url(http://placehold.it/1680x320);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 300px;
        margin-bottom: 20px;
        position: relative;
    }
    /*For Millionier Scheme*/
    .mill_def_text{
        background: none !important;
        border: 0 !important;
        color: #b1b1b1 !important;
        font-style: italic;
        margin-top: 15px;
        text-align: center;
    }
    .mill_tenure_list {
        padding-left: 27px;
    }
    .mill_tenure_list>li{
        list-style: none;
        display: inline-block;
        margin-right: 10px;
    }
    .mill_tenure_list>li>input[type='checkbox']{

    }
    /*Custom checkbox*/
    .squaredOne {
        width: 28px;
        height: 28px;
        position: relative;
        margin: 0px auto 10px auto;
    }
    .squaredOne label {
        width: 25px;
        height: 25px;
        position: absolute;
        top: 4px;
        left: 4px;
        cursor: pointer;
        background: #58add4;
        box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px white;
        color: #fff;
        text-align: center;
        line-height: 2;
        border-radius: 3px;
        font-size: 12px;
    }
    .squaredOne label:after {
        content: '';
        width: 24px;
        height: 24px;
        position: absolute;
        top: 0px;
        left: 0px;
        opacity: 0;
        border: 2px solid #333;
        border-radius: 3px;
    }
    .squaredOne label:hover::after {
        opacity: 0.3;
    }
    .squaredOne input[type=checkbox] {
        visibility: hidden;
    }
    .squaredOne input[type=checkbox]:checked + label:after {
        opacity: 1;
        border: 2px solid #333;
    }
    .feature-table>tbody>tr>td{
        width: 50%;

    }
    .card_text3 h5 {
        min-height: 30px;
    }
</style>
<section id="maximizer_header"></section>

<section id="fdr_loan">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3">
                <div class="home_loan_left_bar">
                    <div class="card_query">
                        <p>I Am</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="iAm" value="generalConsumer" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                Individual
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="iAm" value="businessOwner" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                Corporate Bodies
                            </label><br/>
                        </div>
                    </div>
                    <div class="card_query">
                        <p>Select Deposit Amount</p>
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

                                                            <div style="display:none;" class="slideWrapper" id="avgSave">

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


                                                            <div style="display:none;" class="slideWrapper" id="interest">

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
                    </div>

                    <div class="clearfix"></div>

                    <div class="card_query_fdr">
                        <p>Select Maturity Amount</p>

                        <p class="mill_def_text">Select Amount</p>

                        <div class="fdrTenurepadding">
                            <div class="fdr_tenure pull-left">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    1 Month
                                </label>
                            </div>
                            <div class="fdr_tenure pull-right">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    3 Month
                                </label>
                            </div>
                            <div class="fdr_tenure pull-left">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    6 Month
                                </label>
                            </div>
                            <div class="fdr_tenure pull-right">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    1 Year
                                </label>
                            </div>
                            <div class="fdr_tenure pull-left">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    2 Year
                                </label>
                            </div>
                            <div class="fdr_tenure pull-right">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    3 Years
                                </label>
                            </div>
                            <div class="fdr_tenure pull-left">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    4 Years
                                </label>
                            </div>
                            <div class="fdr_tenure pull-right">
                                <label class="material_radio_group fdr_radio">
                                    <input type="radio" name="month" value="first_month" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    5 Years
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="card_query_fdr">
                        <p>Tenure</p>

                        <p class="mill_def_text">Tenure Based on 100K</p>

                        <ul class="no-pading mill_tenure_list">
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="0" id="check01" name="check" />
                                        <label for="check01">1</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="1" id="check02" name="check" />
                                        <label for="check02">2</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="2" id="check03" name="check" />
                                        <label for="check03">3</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="3" id="check04" name="check" />
                                        <label for="check04">4</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="4" id="check05" name="check" />
                                        <label for="check05">5</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="5" id="check06" name="check" />
                                        <label for="check06">6</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="6" id="check07" name="check" />
                                        <label for="check07">7</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="7" id="check08" name="check" />
                                        <label for="check08">8</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="8" id="check09" name="check" />
                                        <label for="check09">9</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>
                            <li>
                                <section title="">
                                    <!-- .squaredOne -->
                                    <div class="squaredOne">
                                        <input type="checkbox" value="9" id="check10" name="check" />
                                        <label for="check10">10</label>
                                    </div>
                                    <!-- end .squaredOne -->
                                </section>
                            </li>

                        </ul>
                    </div>

                    <div class="clearfix"></div>

                    <div class="card_query">
                        <p>I want Interest </p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Excellent" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                On Maturity
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Good" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                Monthly
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Fair" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                Quarterly
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Bad" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                Advance Interest after Deposit
                            </label><br/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left bar query content end -->

            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9">
                <div class="full-card">
                    <div class="row fdr_right_bar no-margin-lr">
                        <div class="col-sm-2 col-xs-2">
                            <a href=""><img title="Free Web tutorials" class="img-responsive fdr_bank_logo" src="<?php echo base_url();?>resource/front_end/images/brac-bank-logo.png" /></a>
                            <p class="text-center">Brac Bank</p>
                            <p class="text-center">
                                <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                            </p>
                            <p class="rating text-center">Rated By 5 Person</p>
                        </div>

                        <div class="col-sm-10 col-xs-10">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3 no-padding">
                                    <div class="card_text3">
                                        <h5>Initial Deposit</h5>
                                        <p>0</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 no-padding">
                                    <div class="card_text3">
                                        <h5>Monthly Installment</h5>
                                        <p>14,020</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 no-padding">
                                    <div class="card_text3">
                                        <h5>No of Installment</h5>
                                        <p>60</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-3 no-padding">
                                    <div class="card_text3">
                                        <h5>Total Principal Amount</h5>
                                        <p>841,200</p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-2 no-padding">
                                    <div class="card_text3">
                                        <h5>Accrued Interest</h5>
                                        <p>158,800</p>
                                    </div>
                                </div>

                                <div class="col-sm-2 col-xs-2 no-padding">
                                    <div class="card_text3">
                                        <h5>Maturity Amount</h5>
                                        <p>1,000,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row more_availabe">
                                <div class="col-md-2"><a id="hideDetailsButton" href="javascript:;"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a></div>
                                <div class="col-md-4"><a id="hideDetailsButton2" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Available Offer</a></div>
                                <div class="col-md-4"><a id="hideDetailsButton2" href="#"><img class="fdr_apply pull-right" src="<?php echo base_url();?>resource/front_end/images/application.png" alt="FDR Application" /></a></div>
                                <div class="col-md-2"><a id="hideDetailsButton2" href="#"><img class="pull-right" src="<?php echo base_url();?>resource/front_end/images/comparison.png" alt="FDR Application" /></a></div>
                            </div>
                        </div>
                    </div>


                    <!-- More Info Tab content start -->
                    <div class="col-sm-12 card_more_info">
                        <div id="hideDetailsDiv" class="hideMe">
                            <section id="tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#Features" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
                                    <li role="presentation"><a href="#fees" aria-controls="home" role="tab" data-toggle="tab">Fees & Charges</a></li>
                                    <li role="presentation"><a href="#Eligibility" aria-controls="profile" role="tab" data-toggle="tab">Eligibility</a></li>
                                    <li role="presentation"><a href="#RequiredDocuments" aria-controls="messages" role="tab" data-toggle="tab">Requirement</a></li>
                                    <li role="presentation"><a href="#TermsConditions" aria-controls="messages" role="tab" data-toggle="tab">Terms & Conditions</a></li>
                                    <li role="presentation"><a href="#Review" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#UserReview" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Features">
                                        <!--h4>Features</h4-->
                                        <table class="table table-striped table-bordered feature-table">
                                            <tbody>
                                            <tr>
                                                <td class="abc">Product Name</td>
                                                <td> Bank Asia Sonchoy E Koti Poti </td>
                                            </tr>

                                            <tr>
                                                <td>Maturity Amount</td>
                                                <td>BDT 1,000,000</td>
                                            </tr>

                                            <tr>
                                                <td>Available Tenure</td>
                                                <td>5, 7, 10, 12, 15</td>
                                            </tr>

                                            <tr>
                                                <td>Available Installment</td>
                                                <td>
                                                    BDT 14020 for 5 Year Tenure<br>

                                                    BDT 9240 for 7 Year Tenure<br>

                                                    BDT 5745 for 10 Year Tenure<br>

                                                    BDT 4395 for 12 Year Tenure<br>

                                                    BDT 3000 for 15 Year Tenure
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Initial Deposit</td>
                                                <td>No Initial Deposit Required, first month installment will be used to open the account</td>
                                            </tr>

                                            <tr>
                                                <td>Loan Facility</td>
                                                <td>Available, Credit Percentage is subject to negotiation.</td>
                                            </tr>

                                            <tr>
                                                <td>Auto Transfer Facility</td>
                                                <td>Available</td>
                                            </tr>

                                            <tr>
                                                <td>Joint Name</td>
                                                <td>Allowed.</td>
                                            </tr>

                                            <tr>
                                                <td>Premature Settlement Facility</td>
                                                <td>In case of premature settlement, savings rate will be applicable</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="fees">
                                        <!--h4>Features</h4-->
                                        <table class="table table-striped table-bordered feature-table">
                                            <tbody>
                                            <tr>
                                                <td class="abc">Late Payment Fee</td>
                                                <td> 5% </td>
                                            </tr>

                                            <tr>
                                                <td>Account Maintenance Fee:</td>
                                                <td>500</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                        Govt. tax &amp; excise duties are applicable
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="Eligibility">
                                        <!--h4>Eligibility</h4-->
                                        <ul>
                                            <li>Age 18 years and above.</li>
                                            <li>Bangladeshi nationals.</li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="RequiredDocuments">
                                        <!--h4>Required Documents</h4-->
                                        <p>Savings account must be open on that branch where customer want to open Bank Asia Sonchoy E Koti Poti.</p>
                                        <h4>Documents</h4>

                                        <ul>
                                            <li>Prescribed application form</li>
                                            <li>Photograph of the nominee(s) is/are required</li>
                                            <li>Specimen Signature required</li>
                                            <li>Photocopy of Citizenship Certificate / Passport / National I.D. Card / Driving License.</li>
                                            <li>Applicants must satisfy the following documentation requirements</li>
                                            <li>Photocopy of Citizenship Certificate / Passport / National I.D. Card / Driving License.</li>
                                            <li>Two copies of recent passport size photograph duly attested by the introducer.</li>
                                            <li>Cheque on Self or Cash deposit;</li>
                                            <li>Photograph of Nominee. In case of minor nominee, a copy of the birth certificate and photographrequired;</li>
                                            <li>Personal Information Form;</li>
                                            <li>KYC Form</li>
                                            <li>TIN Certificate.</li>
                                            <li>Single/Joint A/C can be open.</li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane Documents" id="TermsConditions">
                                        <!--h4>Terms & Conditions</h4-->
                                        <ul>
                                            <li>Only Respective Bank accountholder(s) can apply for the scheme</li>
                                            <li>Link account means the current or savings account of the applicant(s) of the Scheme</li>
                                            <li>Customer can open more than one scheme</li>
                                            <li>The customer can close the scheme in advance at any time (prior to maturity) by giving closing instruction in writing. In this case, Bank shall apply prevailing premature encashment policy for the respective scheme product and adjust the interest, Income tax and other duties.</li>
                                            <li>The bank reserves the right to change the product parameters including premature encashment policy at any time without prior notice.</li>
                                            <li>In case of death of account holder before maturity, the relevant account will be closed and Nominee will receive the premature encashment value of the account</li>
                                            <li>The bank reserves the right to change/alter/ratify the terms and conditions any time without prior notice</li>
                                            <li>The terms and conditions are governed and shall be governed in accordance with the laws of the land. Unless there is anything repugnant in the subject or context, the terms and conditions of the link (current or savings) account shall also be applicable in this term deposit account.</li>
                                        </ul>

                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="Review">
                                        <h4>Review</h4>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="UserReview">
                                        <h4>User Review</h4>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- More Info Tab content end -->

                    <div id="hideDetailsDiv2" class="row hideMe">
                        <!--iframe src="http://finager.com/finager/home_loan_chart.php" class="loan-iframe" ></iframe-->
                        <iframe src="fdr_iframe.php"  frameborder="0"  width="100%" height="1930" scrolling="no" ></iframe>
                    </div>
                </div>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.squaredOne input[type="checkbox"]').click(function() { 
		    if ($(this).is(':checked')) {
		        //$(this).prop('checked',false);
		        var thisVal=$(this).val();
		        alert("is checked");
		        alert(thisVal);
		    } else {
		         //$(this).prop('checked',true);
		        alert("not checked");
		    }
		});
	});
</script>


<script type="text/javascript">
    jQuery(document).ready(function($){
        $('.squaredOne input[type="checkbox"]').click(function() {
            if ($(this).is(':checked')) {
                //$(this).prop('checked',false);
                var thisVal=$(this).val();
                alert("is checked");
                alert(thisVal);
            } else {
                //$(this).prop('checked',true);
                alert("not checked");
            }
        });
    });
</script>


<script type="text/javascript">

    //for show hide (more info & Available Offer)

    $(document).ready(function() {
        $('#hideDetailsDiv').hide();
        $('a#hideDetailsButton').click(function() {
            if (!$('#hideDetailsDiv').is(':visible')) {
                $('.hideMe').hide(400);
            }
            $('#hideDetailsDiv').toggle(800);
        });
    });

    $(document).ready(function() {
        $('#hideDetailsDiv2').hide();
        $('a#hideDetailsButton2').click(function() {
            if (!$('#hideDetailsDiv2').is(':visible')) {
                $('.hideMe').hide(400);
            }
            $('#hideDetailsDiv2').toggle(400);
        });
    });
</script>