<div class="col-sm-12">
    <div class="footer">
        <div class="text-center">
            <img class="hr-bar" src="<?php echo base_url();?>resource/front_end/images/hr-bar.png" alt="Horizontal Line" />
        </div>
        <div class="col-sm-4 footer-text">
            <p>&copy; 2016 finager.com</p>
        </div>
        <div class="col-sm-4 text-center footer-text">
            <p>Terms & Conditions</p>
        </div>
        <div class="col-sm-4">
            <div class="pull-right">
                <img src="<?php echo base_url();?>resource/front_end/images/fb.png" alt="Facebook" />
                <img src="<?php echo base_url();?>resource/front_end/images/tw.png" alt="Twitter" />
                <img src="<?php echo base_url();?>resource/front_end/images/in.png" alt="Linkedin" />
            </div>
        </div>
    </div>
</div>

</div><!-- main body-->

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

<script type="text/javascript">

    //for left bar query
    $(document).ready(function () {

        $('[data-toggle="toggle"]').change(function(){

            $(this).parents().next('.hide').toggle();
        });

        var outputSpan = $('#spanOutPut');
        var sliderElement = $('#slider');


        sliderElement.slider({
            range: false,
            min: 2,
            max: 120,
            values: [10],
            slide:function(event, ui) {
                outputSpan.html(ui.values[0] + ' Years');
                $('#txtMinAge').val(ui.values[0]);
            }
        });
        outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
        $('#txtMinAge').val(sliderElement.slider('values', 0));


    });

    $(document).ready(function () {

        var outputSpan = $('#spanOutPut');
        var sliderElement = $('#slider1');


        sliderElement.slider({
            range: false,
            min: 2,
            max: 120,
            values: [10],
            slide:function(event, ui) {
                outputSpan.html(ui.values[0] + ' Years');
                $('#txtMinAge1').val(ui.values[0]);
            }
        });
        outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
        $('#txtMinAge1').val(sliderElement.slider('values', 0));


    });

    $(document).ready(function () {

        var outputSpan = $('#spanOutPut');
        var sliderElement = $('#slider2');


        sliderElement.slider({
            range: false,
            min: 2,
            max: 120,
            values: [10],
            slide:function(event, ui) {
                outputSpan.html(ui.values[0] + ' Years');
                $('#txtMinAge2').val(ui.values[0]);
            }
        });
        outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
        $('#txtMinAge2').val(sliderElement.slider('values', 0));


    });

    //for show hide (more info & Repayment Schedule)

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
<!--script type="text/javascript">
		$(document).on("click",".next",function(){
			$(".slider-range li.active").removeClass('active').next().addClass('active');
			$(".slider-range").css('margin-left','-=45');
		});

		$(document).on("click",".prev",function(){
			$(".slider-range li.active").removeClass('active').prev().addClass('active');
			$(".slider-range").css('margin-left','+=45');
		});
	</script>

	<script>
	$(function() {
	    $( "#slider-button" ).draggable({ axis: "x",containment : ".slider-rangebar", grid: [ 45, 0 ] });
	});
  </script-->
</body>
</html>