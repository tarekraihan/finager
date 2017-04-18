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
                <h3 class="panel-title text-center">Demo Bank Home Loan Repayment Schedule</h3>
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
                                                        <label for="savingCalculator">Home Loan Calculator</label>
                                                    </div>
                                                    <div class="radiobox">
                                                        <input type="radio" id="depositCalculator" value="" title="Year" name="selCalc"  checked="checked">
                                                        <label for="depositCalculator">Home Loan Calculator</label>
                                                    </div>
                                                </div>

                                                <div class="savingsContainer emiContainer">

                                                    <div class="leftCont">
                                                        <!--Amount Already Saved START-->
                                                        <div class="slideWrapper" id="alreadySaved">
                                                            <div class="questWrap">
                                                                <p class="quest">Enter your home loan amount required</p>
                                                                <p><?php //echo "amount = ". $_GET['amount'];?></p>
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
                                                            <p class="quest" style="margin-left: 45px;">Enter tenure for home loan</p>
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
                                                            <p class="quest" style="margin-left: 45px;">Interest rate on home loan</p>
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
                          