<link rel="stylesheet" id="siteorigin-panels-front-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/front-legacy.css" type="text/css" media="all">
<link rel="stylesheet" id="siteorigin-widgets-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/style(1).css" type="text/css" media="all">
<link rel="stylesheet" id="sage_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/main.css" type="text/css" media="all">
<link rel="stylesheet" id="jetpack_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/jetpack.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/css(1)" type="text/css" media="all">
<link rel="stylesheet" id="commoncalculator_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/commoncalculator.css" type="text/css" media="all">
<link rel="stylesheet" id="emicalculator_css-css" href="<?php echo base_url();?>resource/front_end/loan_calculator/emicalculator.css" type="text/css" media="all">

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>resource/front_end/loan_calculator/simple-pull-quote.css">

<style type="text/css">
    img#wpstats {
        display: none
    }
    .input-group {
	    position: relative !important; 
	    margin-top: 0px; 
	    padding: 0px; 
	}
</style>

<style type="text/css" media="all" id="siteorigin-panels-layouts-head">
    /* Layout 7 */
    
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
</style>

<div class="m-t-40 wrap container" role="document">
    <div class="content row">
        <main class="main" role="main">
            <article class="post-7 page type-page status-publish hentry">
                <div class="page-header">
                    <h1>
                        EMI Calculator
                    </h1>
                </div>

                <div class="calculatorcontainer">
                    <div class="emicalculatorcontainer">
                        <div id="loanformcontainer" class="row">
                            <div id="emicalculatordashboard" class="col-sm-12">
                                <ul class="loanproduct-nav">
                                    <li id="home-loan" class="active"><a href="https://emicalculator.net/#">Home Loan</a></li>
                                </ul>
                                <div class="cleardiv"></div>
                                <div id="emicalculatorinnerformwrapper">
                                    <form id="emicalculatorform" class="">
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
                                    <div class="text-center" style="margin: 15px 0;">
                                        <button class="btn btn-success" id="calculate_btn">Calculate</button>
                                    </div>
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
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span></div>
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
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/devicepx-jetpack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/core.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/widget.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/mouse.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/slider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/commoncalculator.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/loan_calculator/emicalculator.js"></script>
<script>
    jQuery(function($){
        $('#calculate_btn').click(function(){
            $('#calculate_result, #emipaymentdetails').removeClass('hidden');
        });
    });
</script>