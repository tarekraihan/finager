<link rel="stylesheet" id="siteorigin-panels-front-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/front-legacy.css" type="text/css" media="all">
<link rel="stylesheet" id="siteorigin-widgets-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/style(1).css" type="text/css" media="all">
<link rel="stylesheet" id="sage_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/main.css" type="text/css" media="all">
<link rel="stylesheet" id="jetpack_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/jetpack.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/css(1)" type="text/css" media="all">
<link rel="stylesheet" id="commoncalculator_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/commoncalculator.css" type="text/css" media="all">
<link rel="stylesheet" id="emicalculator_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/emicalculator.css" type="text/css" media="all">

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>resource/front_end/loan_calculator/simple-pull-quote.css">

<link rel="stylesheet" href="https://thdoan.github.io/bootstrap-select/css/bootstrap-select.css">

<style type="text/css">
    img#wpstats {
        display: none
    }
    .input-group {
	    position: relative !important; 
	    margin-top: 0px; 
	    padding: 0px; 
	}
    
    #pgc-7-0-0 {
        width: 100%
    }
    
    #pg-7-0,
    #pl-7 .so-panel {
        margin-bottom: 30px
    }
    
    #pg-7-0,
    #pg-7-1 {
        margin-left: -15px;
        margin-right: -15px
    }
    
    #pg-7-0 .panel-grid-cell,
    #pg-7-1 .panel-grid-cell {
        padding-left: 15px;
        padding-right: 15px
    }
    
    #pgc-7-1-0,
    #pgc-7-1-1,
    #pgc-7-1-2 {
        width: 33.3333%
    }
    
    #pl-7 .so-panel:last-child {
        margin-bottom: 0px
    }
    
    #pgc-7-1-0 {
        align-self: auto
    }
    
    #panel-7-1-0-0> .panel-widget-style,
    #panel-7-1-1-0> .panel-widget-style,
    #panel-7-1-2-0> .panel-widget-style {
        background-color: #eeeeee;
        border: 1px solid #cccccc;
        padding: 15px 15px 15px 15px
    }
    .datepicker.dropdown-menu{
        min-width: 285px !important;
    }
    .datepicker table {
        width: 100% !important;
    }
    .prev, .next {
        top: 2px !important;
    }
    .print_title{display: none;}
    .p-t-40{padding-top: 40px;}
    .bootstrap-select ul.dropdown-menu>li>a{
        color: #000;
    }
    .bootstrap-select ul.dropdown-menu>li.selected>a, .bootstrap-select ul.dropdown-menu>li>a:hover{
        color: #fff;
    }
    @media (max-width:780px) {
        #pl-7 .panel-grid-cell {
            float: none;
            width: auto
        }
        #pl-7 .panel-grid {
            margin-left: 0;
            margin-right: 0
        }
        #pl-7 .panel-grid-cell {
            padding: 0
        }
        #pl-7 .panel-grid .panel-grid-cell-empty {
            display: none
        }
        #pl-7 .panel-grid .panel-grid-cell-mobile-last,
        #pg-7-0 .panel-grid-cell:last-child,
        #pg-7-1 .panel-grid-cell:last-child {
            margin-bottom: 0px
        }
        #pg-7-0 .panel-grid-cell,
        #pg-7-1 .panel-grid-cell {
            margin-bottom: 30px
        }
    }
    @media print {
        .calculator_actions{display: none !important;}
        #emicalculatorform, .monthlypaymentcontainer, .print_title{display: block !important; }
        .htmltextarea .innerMdlWrapper, #loanamountslider, #loanamountsteps,#loaninterestslider,#loanintereststeps, #loantermslider, #loantermsteps, .tenure-choice{display: none !important;}
    }
</style>
<div style="background-color: #f5f5f5;">
    <div class="p-t-40 wrap container" role="document">
        <div class="content row">
            <main class="main" role="main">
                <article class="post-7 page type-page status-publish hentry">
                    <div class="page-header">
                        <h1>
                            Medical Loan EMI Calculator EMI Calculator
                        </h1>
                    </div>

                    <div class="calculatorcontainer">
                        <div class="emicalculatorcontainer">
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <h1 class="print_title" style="text-align: center;"> EMI Calculator </h1>
                                    <ul class="calculator_actions">
                                        <li>
                                            <a href="javascript:;" title="Print" class="ecalprint">
                                                <img src="<?php echo base_url();?>resource/front_end/images/calculator/printer.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="Email" >
                                                <img src="<?php echo base_url();?>resource/front_end/images/calculator/email.png" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="Info">
                                                <img src="<?php echo base_url();?>resource/front_end/images/calculator/info.png" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="loanformcontainer" class="row">
                                <div class="col-sm-4 col-sm-offset-4" id="loan-calculator-type">
                                    <select name="" class="form-control selectpicker">
                                        <option  value="">Select Loan Type</option>
                                        <option value="" data-thumbnail="https://thdoan.github.io/bootstrap-select/images/icon-chrome.png">Home Loan Calculator</option>
                                        <option selected="" value="" data-thumbnail="https://thdoan.github.io/bootstrap-select/images/icon-firefox.png">Personal Loan Calculator</option>
                                        <option value="" data-thumbnail="https://thdoan.github.io/bootstrap-select/images/icon-safari.png">Car Loan Calculator</option>
                                    </select>
                                </div>

                                <div id="emicalculatordashboard" class="col-sm-12">
                                    <ul class="loanproduct-nav">
                                        <li id="home-loan" class="active"><a href="#">Home Loan</a></li>
                                    </ul>
                                    <div class="cleardiv"></div>

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
                                                                <div class="inputWrapper"><span class="rupee">Loan Amount (৳)</span>
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
                                                                                <ul></ul>
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
                                                                    <div class="inpRadio">
                                                                        <div id="tenureType">
                                                                            <label>Loan Period (Month)</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="inputField">
                                                                        <div class="inpLft"></div>
                                                                        <div class="inpMdl">
                                                                            <input type="text" name="" value="1" id="finalCustAge" maxlength="3" class="input_LoanPeriod"/>
                                                                        </div>
                                                                        <div class="inpRt"></div>
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
                                                                            <div class="prev"></div><div class="next active"></div>
                                                                        </div>
                                                                        <div class="hideVal">5</div>
                                                                    </div>
                                                                </div>
                                                                <!--Calculator Section END-->
                                                            </div>
                                                            <div class="slideWrapper" id="interest">
                                                                <div class="inputWrapper">
                                                                    <span class="perc">Interest Rate (%)</span>
                                                                    <div class="inputField">
                                                                        <div class="inpLft"></div>
                                                                        <div class="inpMdl">
                                                                            <input type="text" name="" value="8" id="finalLiability" class="input_AIR"/>
                                                                        </div>
                                                                        <div class="inpRt"></div>
                                                                    </div>
                                                                    
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
                                                                        <div class="hideVal">1</div>
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
                                        
                                    <div class="clearfix"></div>

                                    <div id="emicalculatorinnerformwrapper">
                                        <form id="emicalculatorform" class="hidden">
                                            <div class="form-horizontal" id="emicalculatorinnerform">
                                                <div class="form-group lamount">
                                                    <label class="col-md-4 control-label" for="loanamount"><strong>Home Loan Amount</strong></label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input class="form-control" id="loanamount" name="loanamount" value="25,00,000" type="text">
                                                            <span class="input-group-addon">   ৳</span></div>
                                                    </div>
                                                </div>

                                                <div id="loanamountslider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                </div> 

                                                <div id="loanamountsteps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">0</span></span><span class="tick hidden-xs" style="left: 12.5%;">|<br><span class="marker">25L</span></span><span class="tick" style="left: 25%;">|<br><span class="marker">50L</span></span><span class="tick hidden-xs" style="left: 37.5%;">|<br><span class="marker">75L</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">100L</span></span><span class="tick hidden-xs" style="left: 62.5%;">|<br><span class="marker">125L</span></span><span class="tick" style="left: 75%;">|<br><span class="marker">150L</span></span><span class="tick hidden-xs" style="left: 87.5%;">|<br><span class="marker">175L</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">200L</span></span>
                                                </div>

                                                <div class="sep form-group lint">
                                                    <label class="col-md-4 control-label" for="loaninterest">Interest Rate</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input class="form-control" id="loaninterest" name="loaninterest" value="10.5" type="text">
                                                            <span class="input-group-addon">%</span></div>
                                                    </div>
                                                </div>
                                                <div id="loaninterestslider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                </div>

                                                <div id="loanintereststeps" class="steps">
                                                    <span class="tick" style="left: 0%;">|<br><span class="marker">5</span></span><span class="tick" style="left: 16.67%;">|<br><span class="marker">7.5</span></span><span class="tick" style="left: 33.34%;">|<br><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">12.5</span></span><span class="tick" style="left: 66.67%;">|<br><span class="marker">15</span></span><span class="tick" style="left: 83.34%;">|<br><span class="marker">17.5</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">20</span></span>
                                                </div>

                                                <div class="sep form-group form-inline lterm">
                                                    <label class="col-md-4 control-label" for="loanterm">Loan Tenure</label>
                                                    <div class="col-md-6">
                                                        <div class="loantermwrapper">
                                                            <div class="btn-group float-right gutter-left no-gutter-right tenure-choice" data-toggle="buttons">
                                                                <label class="btn btn-default active">
                                                                    <input type="radio" name="loantenure" id="loanyears" value="loanyears" tabindex="4" autocomplete="off" checked="checked">Yr </label>
                                                                <label class="btn btn-default">
                                                                    <input type="radio" name="loantenure" id="loanmonths" value="loanmonths" tabindex="5" autocomplete="off">Mo </label>
                                                            </div>
                                                            <div class="input-group fill-width">
                                                                <input class="form-control" id="loanterm" name="loanterm" value="20" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="loantermslider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                    <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                                </div>

                                                <div id="loantermsteps" class="steps"><span class="tick" style="left: 0%;">|<br><span class="marker">0</span></span><span class="tick" style="left: 16.67%;">|<br><span class="marker">5</span></span><span class="tick" style="left: 33.33%;">|<br><span class="marker">10</span></span><span class="tick" style="left: 50%;">|<br><span class="marker">15</span></span><span class="tick" style="left: 66.67%;">|<br><span class="marker">20</span></span><span class="tick" style="left: 83.33%;">|<br><span class="marker">25</span></span><span class="tick" style="left: 100%;">|<br><span class="marker">30</span></span>
                                                </div>
                                            </div>
                                            <input id="loanproduct" name="loanproduct" value="home-loan" type="hidden">
                                            <input id="loanstartdate" name="loanstartdate" value="Oct 2018" type="hidden">
                                            <input id="loandata" name="loandata" value="" type="hidden">
                                            <input id="calcversion" name="calcversion" value="4.0" type="hidden">
                                        </form>

                                        <!-- <div class="text-center" style="margin: 15px 0;">
                                            <button class="btn btn-success" id="calculate_btn">Calculate</button>
                                        </div> -->
                                        <div id="calculate_result" class="row gutter-left gutter-right hidden">
                                            <div id="emipaymentsummary" class="col-sm-5 col-md-6 no-gutter-left no-gutter-right">
                                                <div id="emiamount">
                                                    <h4>Loan EMI</h4>
                                                    <p>৳<span>32,947</span></p>
                                                </div>
                                                <div id="emitotalinterest">
                                                    <h4>Total Interest Payable</h4>
                                                    <p>৳<span>46,07,169</span></p>
                                                </div>
                                                <div id="emitotalamount" class="column-last">
                                                    <h4>Total Payment<br>(Principal + Interest)</h4>
                                                    <p>৳<span>79,07,169</span></p>
                                                </div>
                                            </div>
                                            <div id="emipiechart" class="no-gutter-left no-gutter-right col-sm-7 col-md-6 highcharts-container" data-highcharts-chart="2">
                                            </div>
                                        </div>

                                        <div class="cleardiv"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="emipaymentdetails" class="hidden">
                                <form class="gutter-left gutter-right form-horizontal">
                                    <div class="form-group" id="emipaymentscheduleheader">
                                        <label class="col-sm-6 control-label" for="startmonthyear">Schedule showing EMI payments starting from</label>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="input-group">
                                                <input class="form-control" id="startmonthyear" name="startmonthyear" value="" type="text" readonly="readonly">
                                                <span class="input-group-addon" id="startmonthyear_addon"><i class="fa fa-calendar"></i></span></div>
                                        </div>
                                    </div>
                                </form>

                                <div id="emibarchart" class="hidden-ts highcharts-container" data-highcharts-chart="3">
                                </div>

                                <div id="emipaymenttable">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th class="col-xs-2 col-md-1" id="yearheader">Year</th>
                                                <th class="col-sm-2 hidden-xs" id="principalheader">Principal
                                                    <br>(A)</th>
                                                <th class="col-xs-3 col-sm-2 visible-xs" id="principalheader">Principal</th>
                                                <th class="col-sm-2 hidden-xs" id="interestheader">Interest
                                                    <br>(B)</th>
                                                <th class="col-xs-3 col-sm-2 visible-xs" id="interestheader">Interest</th>
                                                <th class="col-sm-3 hidden-xs" id="totalheader">Total Payment
                                                    <br>(A + B)</th>
                                                <th class="col-xs-4 col-sm-3" id="balanceheader">Balance</th>
                                                <th class="col-md-1 hidden-xs hidden-sm" id="paidtodateheader">Loan Paid To Date</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Print -->
                                <!-- <div id="ecalprintandshare">
                                    <p id="ecalprintandsharetext">Want to print OR share a custom link to your EMI calculation (with all your numbers pre-filled)?</p>
                                    <a title="Print this page" class="ecalprint btn btn-primary btn-lg" href="#" role="button"><i class="fa fa-print"></i> Print</a>
                                    <a title="Share this EMI calculation with friends &amp; family" class="ecalshare btn btn-primary btn-lg hidden" href="#" role="button"><i class="fa fa-link"></i> Share</a>
                                    <div id="loader"><i class="fa fa-spinner fa-pulse"></i></div>
                                </div>
                                <div id="ecalsharelink" class="form-group hidden" style="display: none;">
                                    <label class="control-label" for="sharelink">Copy and share this link</label>
                                    <input class="form-control" name="sharelink" id="sharelink" readonly="readonly" type="text" value="https://ecal.in/">
                                </div>  -->
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">


<script src="https://thdoan.github.io/bootstrap-select/js/bootstrap-select.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/devicepx-jetpack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/main.js"></script> -->
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/core.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/widget.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/mouse.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/slider.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/commoncalculator.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/emicalculator.js"></script>

<script src="<?php echo base_url();?>resource/front_end/js/personal-emi-calculator.js"></script>
<script>
    jQuery(function($){

        setTimeout(function(){
            $('#calculate_result, #emipaymentdetails').removeClass('hidden');
            calculation_change();
        },1000);

        $("#startmonthyear_addon").click(function(){
            $("#startmonthyear").focus(); 
        });

        function calculation_change(){
            var loan_amount = $('#finalAssest').val();
            var interest_rate = $('#finalLiability').val();
            var tenure_year = $('#finalCustAge').val();
            tenure_year = tenure_year/12;


            $('#loanamount').val(loan_amount);
            $('#loaninterest').val(interest_rate);
            $('#loanterm').val(tenure_year);

            $('#loanamount').trigger('change');
            $('#loaninterest').trigger('change');
            $('#loanterm').trigger('change');
        }

        $(".leftCont").find(".next,.prev").click(function(){
            setTimeout(function(){ 
                calculation_change();
            }, 1000);
        });

        $(".draggable").on("dragstop",function(ev,ui){
            setTimeout(function(){ 
                calculation_change();
            }, 1000);
        });

        $("#finalAssest,#finalLiability,#finalCustAge").change(function () {
            setTimeout(function(){ 
                calculation_change();
            }, 1000);
        });
    });
</script>