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
</head>

<body>

<div id="hideDetailsDiv2" class="hideMe">
    <div class="col-sm-12">
        <div class="panel panel-default">
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
                                                        <label for="depositCalculator">Personal Loan Calculator</label>
                                                    </div>
                                                </div>

                                                <div class="savingsContainer emiContainer">

                                                    <div class="leftCont">
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


                                                        <div class="slideWrapper" id="interest">
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
                                                        <div class="resultWrapper">
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




            <div class="panel-body">
                <h3 class="text-center">Your Monthly Home Loan EMI : 4566511</h3>
                <div class="row">
                    <div class="col-sm-12 col-md-5  col-xs-12">
                        <h4 class="text-center">Break-up of all total amount</h4>
                        <div id="pie2"></div>
                        <div class="pietable">
                            <table class="table text-center">
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
                    </div>

                    <div class="col-sm-12 col-md-7 col-xs-12">
                        <div class="chartright">
                            <h3>Your loan details as specified by you</h3>
                            <table class="table">
                                <tr>
                                    <td>Total Amount Payable</td>
                                    <td>&#2547; 250000</td>
                                </tr>
                                <tr>
                                    <td>Loan Amount</td>
                                    <td>&#2547; 20000</td>
                                </tr>
                                <tr>
                                    <td>Tenure</td>
                                    <td>6 Months</td>
                                </tr>
                                <tr>
                                    <td>Interest Rate</td>
                                    <td>10.25%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div id="chart1"></div>
                    </div>
                </div>

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
<script>
    <!-- for chart-->
        $(document).ready(function(){
            var plot2 = $.jqplot('pie2', [[['a',7],['b',88],['c',5]]], {
                seriesDefaults:{ renderer:$.jqplot.PieRenderer, trendline:{ show: true } },
                legend:{ show: false },
                grid: {borderColor: 'white', shadow: false, drawBorder: true}
            });
        });


    <!-- for main chart-->
    $(document).ready(function () {
        var s1 = [[2002, 112000], [2003, 122000], [2004, 104000], [2005, 99000], [2006, 121000]];
        var s2 = [[2002, 10200], [2003, 10800], [2004, 11200], [2005, 11800], [2006, 12400]];

        plot1 = $.jqplot("chart1", [s2, s1], {
            // Turns on animatino for all series in this plot.
            animate: true,
            // Will animate plot on calls to plot1.replot({resetAxes:true})
            animateReplot: true,
            cursor: {
                show: true,
                zoom: true,
                looseZoom: true,
                showTooltip: false
            },
            series:[
                {
                    pointLabels: {
                        show: true
                    },
                    renderer: $.jqplot.BarRenderer,
                    showHighlight: false,
                    yaxis: 'y2axis',
                    rendererOptions: {
                        // Speed up the animation a little bit.
                        // This is a number of milliseconds.
                        // Default for bar series is 3000.
                        animation: {
                            speed: 2500
                        },
                        barWidth: 15,
                        barPadding: -15,
                        barMargin: 0,
                        highlightMouseOver: false
                    }
                },
                {
                    rendererOptions: {
                        // speed up the animation a little bit.
                        // This is a number of milliseconds.
                        // Default for a line series is 2500.
                        animation: {
                            speed: 2000
                        }
                    }
                }
            ],
            axesDefaults: {
                pad: 0
            },
            axes: {
                // These options will set up the x axis like a category axis.
                xaxis: {
                    tickInterval: 1,
                    drawMajorGridlines: false,
                    drawMinorGridlines: true,
                    drawMajorTickMarks: false,
                    rendererOptions: {
                        tickInset: 0.5,
                        minorTicks: 1
                    }
                },
                yaxis: {
                    tickOptions: {
                        formatString: "$%'d"
                    },
                    rendererOptions: {
                        forceTickAt0: true
                    }
                },
                y2axis: {
                    tickOptions: {
                        formatString: "$%'d"
                    },
                    rendererOptions: {
                        // align the ticks on the y2 axis with the y axis.
                        alignTicks: true,
                        forceTickAt0: true
                    }
                }
            },
            highlighter: {
                show: true,
                showLabel: true,
                tooltipAxes: 'y',
                sizeAdjust: 7.5 , tooltipLocation : 'ne'
            },
            grid: {borderColor: 'white', shadow: false, drawBorder: true}
        });

    });

</script>


</body>
</html>