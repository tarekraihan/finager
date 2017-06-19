<?php

//pr($this->session->userdata());

$id = $this->session->userdata('first_monthly_id') ;

$monthly_amount = $this->session->userdata('monthly_deposit_amount') ;
$result = $this->Front_end_select_model->select_monthly_benefit_details($id);
$first_monthly_benefit = $result->row();

$id1 = $this->session->userdata('second_monthly_id') ;
$result1 = $this->Front_end_select_model->select_monthly_benefit_details($id1);
$second_monthly_benefit = $result1->row();

$second_monthly_benefit_tenure = ($second_monthly_benefit->tenure == '0.5') ? '6 Months' : $second_monthly_benefit->tenure.' Years';
$second_monthly_benefit_loan_facility = (strtoupper($second_monthly_benefit->loan_facility) != 'N/A') ? $second_monthly_benefit->loan_facility.' %' :'N/A';

$first_monthly_benefit_tenure = ($first_monthly_benefit->tenure == '0.5') ? '6 Months' : $first_monthly_benefit->tenure.' Years';
$first_monthly_benefit_loan_facility = (strtoupper($first_monthly_benefit->loan_facility) != 'N/A') ? $first_monthly_benefit->loan_facility.' %' :'N/A';


//pr($first_monthly_benefit);

?>

<style>
	.innerMdlWrapper .innerMdlInner {
		width: 418px;
	}
	.home-loan-Compare-hr1 {
		width: 41.5%;
	}
	.Card-Compare-hr2 {
		width: 41%;
	}
	.home-loan-Compare-hr3 {
		width: 44.3%;
	}
	.home-loan-Compare-hr4 {
		width: 39.5%;
	}
	#basic_info {
		margin-top: -45px;
	}

</style>
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>en/monthly_benefit_details/<?php echo $first_monthly_benefit->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_monthly_benefit->bank_logo; ?>" /></a> </p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
							
						</td>
						<td><a href="<?php echo base_url();?>en/monthly_benefit_details/<?php echo $second_monthly_benefit->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_monthly_benefit->bank_logo; ?>" /></a> </td>
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
				<h3 class="text-center"> <img class="millionaire-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Lakhpoti & MIllionaire Scheme <img class="millionaire-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_monthly_benefit->bank_name;?> </td>
						</tr>
						
						<tr>
							<td><b> Product Name</b></td>
							<td><?php echo $first_monthly_benefit->deposit_name;?></td>
						</tr>

						<tr>
							<td><b>Deposited Amount</b></td>
							<td> <?php echo number_format($monthly_amount);?> </td>
						</tr>
						
						<tr>
							<td><b>Tenure</b></td>
							<td> <?php echo $first_monthly_benefit_tenure;?> </td>
						</tr>
						
						<tr>
							<td><b> Benefit Amount</b></td>
							<td> <?php echo $first_monthly_benefit->benefit_amount;?> </td>
						</tr>
						<tr>
							<td><b> Loan Facility</b></td>
							<td> <?php echo $first_monthly_benefit_loan_facility;?> </td>
						</tr>
						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">

							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $second_monthly_benefit->bank_name;?> </td>
							</tr>

							<tr>
								<td><b> Product Name</b></td>
								<td><?php echo $second_monthly_benefit->deposit_name;?></td>
							</tr>

							<tr>
								<td><b>Deposited Amount</b></td>
								<td> <?php echo number_format($monthly_amount);?> </td>
							</tr>

							<tr>
								<td><b>Tenure</b></td>
								<td> <?php echo $second_monthly_benefit_tenure;?> </td>
							</tr>

							<tr>
								<td><b> Benefit Amount</b></td>
								<td> <?php echo $second_monthly_benefit->benefit_amount;?> </td>
							</tr>
							<tr>
								<td><b> Loan Facility</b></td>
								<td> <?php echo $second_monthly_benefit_loan_facility;?> </td>
							</tr>
							
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="millionaire-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Features <img class="millionaire-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
					<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_monthly_benefit->features;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_monthly_benefit->features;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="millionaire-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/>Eligibility<img class="millionaire-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
					<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_monthly_benefit->eligibility;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_monthly_benefit->eligibility;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Requirements <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_monthly_benefit->requirement;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_monthly_benefit->requirement;?>
					</div>
				</div>
			</div>

			
			<div class="row">
				<h3 class="text-center"> <img class="millionaire-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Terms and Conditions <img class="millionaire-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_monthly_benefit->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_monthly_benefit->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="millionaire-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Review <img class="millionaire-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_monthly_benefit->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_monthly_benefit->review;?>
					</div>
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
		;
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
<script>
$(window).on('scroll', function (){
	if ($(window).scrollTop() > 150){
	  $('#card_compare_default').addClass('compare-bg');
	} else {
	  $('#card_compare_default').removeClass('compare-bg');
	}
});
</script>