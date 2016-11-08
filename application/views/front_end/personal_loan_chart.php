<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to finager</title>
    <script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquerysctipttop.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/booNavigation.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquery.jqplot.css" /> <!-- for chart -->
    <!-- for emi cal -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/clientlib.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/stylecal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquery.ui.slider.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/material_theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquery-ui.min.css" />
    <!--link rel="stylesheet" type="text/css" href="css/responsive.css" /-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/style.css" />

    <style type="text/css">
        .overflow-hidden{
            overflow: hidden;
        }
        .rsltField {
            float: left;
            margin: 0 0 11px 0;
        }
        .savingsContainer.emiContainer {
            margin-top: 0px;
            background: #F5F4F4;
            padding: 25px 0;
            width: 100%;
        }
        .resultWrapper h2 {
            color: #000;
            font-size: 19px !important;
            padding: 6px 0 6px 0px;
            text-align: center !important;
            margin: 20px 0 20px 0px !important;
        }
        .questWrap{
            margin-left: 45px;
        }
        .calcContainer {
            margin-left: 45px;
        }
        .pie-section{
            padding: 10px 0 25px 0;
        }
        .pietable {
            height: 300px;
            position: relative;
        }
        .pie-chart-table{
            position: absolute;
            bottom: 22px;
            border-top: 1px solid #c2c2c2;
        }
        .pie-chart-table tr td{
            border: 1px solid #c2c2c2;
            border-top: 1px solid #c2c2c2 !important;
            padding: 8px 12px;
        }
        .pie-chart-table tr:nth-child(even) {
            background-color: #F5F4F4;
        }
        .pric_table,.tablechart-section {
            margin: 25px auto !important;
        }

        .chartright {
            padding: 25px 0px;
        }
        .chartright-table {
            margin-top: 20px;
        }
        .chartright-title{
            font-size: 20px;
            font-weight: 500;
            text-align: center;
        }
        .chartright-table>tbody>tr>td{
            padding: 10px 0;
            font-size: 16px;
        }
        td.chart-right-val {
            text-align: right;
            color: #38acc9;
            font-size: 19px !important;
            font-weight: 500 !important;
        }

        .pie-chart-details {
            text-align: left;
            font-size: 13px;
            padding-top: 10px;
            width: 80%;
            margin: 0 auto;
            display: block;
            float: none;
        }
        .colmn1 {
            width: 64%;
            float: left;
        }
        .colmn2 {
            width: 35%;
            float: left;
        }
        .rows-left .arange-squre, .rows-left .green-squre, .rows-left .red-squre, .rows-left .gray-squre, .rows-left .purple-squre, .rows-left .blue-squre {
            width: 10px;
            height: 10px;
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
        }
        .arange-squre {
            background: #f1a334;
        }
        .green-squre {
            background: #02c8a5;
        }
        .red-squre {
            background: #ff3334;
        }
        .rows-left {
            margin-bottom: 5px;
        }
        .chartright {
            padding: 55px 25px;
            border: 1px solid #c2c2c2;
        }
        a.canvasjs-chart-credit {
            display: none;
        }

        .pric_table th {
            background: #EAEAEA;
            color: black;
            font-weight: 500;
            font-size: 15px;
        }

        .labels tr td {
            background-color: #FFFFFF;
            font-weight: 500 !important;
            color: #000;
            font-size: 14px;
        }
        .labels tr td label{
            font-weight: 500;
        }
        .jqplot-highlighter-tooltip{
            background-color: #fff;
            z-index: 999;
            padding:3px 6px;
            font-size: 13px;
            border: 1px solid #c2c2c2;
            font-style: italic;
        }
    </style>
</head>

<body>

<div id="hideDetailsDiv2" class="hideMe">
    <div class="col-sm-12">
        <div class="panel panel-default overflow-hidden">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Personal Loan Repayment Schedule</h3>
            </div>

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
                                                        <label for="savingCalculator">Personal Loan Calculator</label>
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
                                                            <div class="questWrap">
                                                                <p class="quest">Enter your personal loan amount required</p>
                                                            </div>

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
                                                            <p class="quest" style="margin-left: 45px;">Enter tenure for Personal loan</p>
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


                                                        <div class="slideWrapper" id="interest" style="margin-top: -25px;">
                                                            <p class="quest" style="margin-left: 45px;">Interest rate on personal loan</p>
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
                                                        <div class="resultWrapper">
                                                            <h2>Personal Loan EMI Result</h2>
                                                            <div class="resultContainer">
                                                                <div class="rsltField">
                                                                    <p>Total Amount Payable</p>
                                                                    <span class="rupee"></span>
                                                                    <div id="totalAmtPay" class="result">5,00,000</div>
                                                                </div>
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


            <div class="panel-body">
                <div class="pie-section">
                    <h3 class="text-center" style="font-size: 20px;">Your Monthly Personal Loan EMI : 4566511</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-5  col-xs-12">
                            <h4 class="text-center" style="margin-top: 0; font-size: 16px;">Break-up of all total amount</h4>

                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div id="pie2"></div>
                                    <div class="pie-chart-details">
                                        <div class="detail-table-piechart" id="break-down-section">
                                            <div class="rows-left">
                                                <div class="colmn1"> <span class="arange-squre"></span>Total Amount Payable</div>
                                                <div class="colmn2">
                                                    <span id="pieLoanAmount">79,00,000</span>
                                                    <!--span>
                                                        <img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite">
                                                    </span-->
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>

                                            <div class="rows-left">
                                                <div class="colmn1"> <span class="arange-squre"></span>Loan Amount</div>
                                                <div class="colmn2">
                                                    <span id="pieLoanAmount">70,00,000</span>
                                                    <!--span>
                                                        <img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite">
                                                    </span-->
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="rows-left">
                                                <div class="colmn1"> <span class="green-squre"></span>Tenure</div>
                                                <div class="colmn2">
                                                    <span id="pieInterestPay">7 Months</span>
                                                    <!--span>
                                                        <img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite">
                                                    </span-->
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="rows-left">
                                                <div class="colmn1"> <span class="red-squre"></span>Interest Rate</div>
                                                <div class="colmn2">
                                                    <span id="pieProcessFee">14%</span>
                                                    <!--span><img src="/images/landing/rupee-icon-black.png" alt="Sprite" title="Sprite"-->
                                                    </span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-xs-12">
                                    <div class="pietable hide">
                                        <table class="table text-center pie-chart-table">
                                            <tr>
                                                <td>Loan Amount</td>
                                                <td>&#2547; 25000</td>
                                            </tr>
                                            <tr>
                                                <td>Total Interest Due</td>
                                                <td>&#2547; 25000</td>
                                            </tr>
                                            <tr>
                                                <td>Processing Fee</td>
                                                <td>&#2547; 25000</td>
                                            </tr>
                                            <tr class="pietd">
                                                <td>Total Amount Payable</td>
                                                <td>&#2547; 25000</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="chartright">
                                        <h4 class="chartright-title">Your loan details as specified by you</h4>
                                        <table class="table chartright-table">
                                            <tr>
                                                <td>Total Amount Payable</td>
                                                <td class="chart-right-val">&#2547; 250000</td>
                                            </tr>
                                            <tr>
                                                <td>Loan Amount</td>
                                                <td class="chart-right-val">&#2547; 20000</td>
                                            </tr>
                                            <tr>
                                                <td>Tenure</td>
                                                <td class="chart-right-val">6 Months</td>
                                            </tr>
                                            <tr>
                                                <td>Interest Rate</td>
                                                <td class="chart-right-val">10.25%</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-7 col-xs-12">

                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="tablechart-section">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div id="chart1" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="tablechart-section">

                    <table class="pric_table">
                        <thead>
                        <tr>
                            <th>Regian</th>
                            <th>Q1 2010</th>
                            <th>Q2 2010</th>
                            <th>Q3 2010</th>
                            <th>Q4 2010</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tbody class="labels">
                        <tr>
                            <td>
                                <label for="accounting">Accounting</label>
                                <input type="checkbox" name="accounting" id="accounting" data-toggle="toggle">
                            </td>
                            <td>$7,685.00</td>
                            <td>$3,544.00</td>
                            <td>$5,834.00</td>
                            <td>$10,583.00</td>
                        </tr>
                        </tbody>
                        <tbody style="display:none;" class="hide">
                        <tr>
                            <td>Australia</td>
                            <td>$7,685.00</td>
                            <td>$3,544.00</td>
                            <td>$5,834.00</td>
                            <td>$10,583.00</td>
                        </tr>
                        <tr>
                            <td>Central America</td>
                            <td>$7,685.00</td>
                            <td>$3,544.00</td>
                            <td>$5,834.00</td>
                            <td>$10,583.00</td>
                        </tr>
                        </tbody>

                        <tbody class="labels">
                        <tr>
                            <td>
                                <label for="management">management</label>
                                <input type="checkbox" name="accounting" id="management" data-toggle="toggle">
                            </td>
                            <td>$7,685.00</td>
                            <td>$3,544.00</td>
                            <td>$5,834.00</td>
                            <td>$10,583.00</td>
                        </tr>
                        </tbody>
                        <tbody style="display:none;" class="hide">
                        <tr>
                            <td>Australia</td>
                            <td>$7,685.00</td>
                            <td>$3,544.00</td>
                            <td>$5,834.00</td>
                            <td>$10,583.00</td>
                        </tr>
                        <tr>
                            <td>Central America</td>
                            <td>$7,685.00</td>
                            <td>$3,544.00</td>
                            <td>$5,834.00</td>
                            <td>$10,583.00</td>
                        </tr>
                        </tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/booNavigation.js"></script>

<script src="<?php echo base_url();?>resource/front_end/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/main.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/modernizr.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/jquery-ui.min.js"></script>

<!-- for chart -->
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jquery.jqplot.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jqplot.pieRenderer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jqplot.barRenderer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jqplot.highlighter.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jqplot.cursor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jqplot.pointLabels.js"></script>

<script src="<?php echo base_url();?>resource/front_end/js/canvasjs.min.js"></script>

<script>
    <!-- for chart-->
    $(document).ready(function(){
        var plot2 = $.jqplot('pie2', [[['Total Amount',7],['Loan Amount	',88],['Tenure',5],['Interest Rate',5]]], {
            animate: true,
            seriesDefaults:{ renderer:$.jqplot.PieRenderer, trendline:{ show: true } },

            /*
             legend:{
                         show:true,
                         placement: 'outside',
                         rendererOptions: {
                             numberRows: 4
                         },
                         location:'s',
                         marginTop: '15px'
                     },
             */
            seriesColors: [ "#868686","#dcdcdc","#e7af7d", "#ffffff"],

            grid: {borderColor: 'white', shadow: false, drawBorder: true, background: '#ffffff'},
            highlighter: {
                show: true,
                useAxesFormatters: false,
                sizeAdjust: 10,
                lineWidthAdjust:10,
                tooltipFormatString: '%s'
            }

        });
    });
</script>


<!-- coloum chart -->
<script type="text/javascript">
    window.onload = function () {
        CanvasJS.addColorSet("greenShades",
            [//colorSet Array
                '#bcbcbc',
                //'#e56a6c',
                //'#faa66e',
                '#868686'
            ]);

        var chart1 = new CanvasJS.Chart("chart1",
            {
                colorSet: "greenShades",
                title:{
                    text: "Your Amortization Details (Yearly/Monthly)" ,
                    fontSize: 20,
                },
                axisY:{
                    title:"Balanced Amount"
                },
                axisY2: {
                    title: "EMI Payment/Year"
                },
                animationEnabled: true,
                data: [
                    {
                        type: "stackedColumn",
                        toolTipContent: "{label}<br/><span style='\"'color: {color};'\"'><strong>{name}</strong></span>: {y}mn tonnes",
                        name: "Anthracite and Bituminous",
                        showInLegend: "true",
                        dataPoints: [
                            {  y: 111338 , label: "2007"},
                            {  y: 49088, label: "2008" },
                            {  y: 62200, label: "2009" },
                            {  y: 90085, label: "2010" },
                            {  y: 38600, label: "20011"},
                            {  y: 48750, label: "20012"}

                        ]
                    },  {
                        type: "column",
                        name: "Oil Production (million/day)",
                        legendText: "Oil Production",
                        axisYType: "secondary",
                        showInLegend: true,
                        dataPoints:[
                            {label: "2007", y: 11.15},
                            {label: "2008", y: 2.5},
                            {label: "2009", y: 3.6},
                            {label: "2010", y: 4.2},
                            {label: "2011", y: 2.6},
                            {label: "2012", y: 2.7},
                            {label: "2013", y: 3.1}


                        ]
                    }
                ]
                ,
                legend:{
                    fontSize: 14,
                    cursor:"pointer",

                    itemclick: function(e) {
                        if (typeof (e.dataSeries.visible) ===  "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        }
                        else
                        {
                            e.dataSeries.visible = true;
                        }
                        chart1.render();
                    }
                }
            });

        chart1.render();
    }
</script>

<!-- plus a jQuery UI theme, here I use "flick" -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">

<!--script src="js/jquery-ui-slider-pips.js"></script>
<!-- for chart -->
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/clientlib.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jquery.ui.touch-punch.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/personal-loan-calculator.js"></script>
<script>
    $(document).ready(function() {

        $('[data-toggle="toggle"]').change(function(){
            $(this).parents().next('.hide').toggle();
        });
    });
</script>




</body>
</html>