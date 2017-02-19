<?php
//		print_r($this->session->userdata());
$id = $this->session->userdata('first_millionaire_id') ;
$result = $this->Front_end_select_model->select_millionaire_info_details($id);
$first_millionaire = $result->row();

$id1 = $this->session->userdata('second_millionaire_id') ;
$result1 = $this->Front_end_select_model->select_millionaire_info_details($id1);
$second_millionaire = $result1->row();

//	print_r($second_millionaire);die;

//	echo $first_home_loan->loan_short_description;
//$first_interest =($first_home_loan->is_fixed =='0')? $first_home_loan->interest_rate_average.' % (Avg)' : $first_home_loan->interest_rate_fixed.' % (Fixed)';
$first_bank_name = "";
$first_bank_logo = "";
if($first_millionaire->is_non_bank == 1){
    $first_bank_name = $first_millionaire->non_bank_name;
    $first_bank_logo = $first_millionaire->non_bank_logo;
}else{
    $first_bank_name = $first_millionaire->bank_name;
    $first_bank_logo = $first_millionaire->bank_logo;
}

//$second_interest =($second_home_loan->is_fixed =='0')? $second_home_loan->interest_rate_average.' % (Avg)' : $second_home_loan->interest_rate_fixed.' % (Fixed)';
$second_bank_name = "";
$second_bank_logo = "";
if($second_millionaire->is_non_bank == 1){
    $second_bank_name = $second_millionaire->non_bank_name;
    $second_bank_logo = $second_millionaire->non_bank_logo;
}else{
    $second_bank_name = $second_millionaire->bank_name;
    $second_bank_logo = $second_millionaire->bank_logo;
}

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
						<td><p><a href="<?php echo base_url();?>en/millionaire_details/<?php echo $first_millionaire->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></a> </p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
							
						</td>
						<td><a href="<?php echo base_url();?>en/millionaire_details/<?php echo $second_millionaire->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></a> </td>
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
				<h3 class="text-center"> <img class="home-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Lakhpoti & MIllionaire Scheme <img class="Card-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_bank_name;?> </td>
						</tr>
						
						<tr>
							<td><b> Product Name</b></td>
							<td><?php echo $first_millionaire->millionaire_info_name;?></td>
						</tr>
						
						<tr>
							<td><b> Initial Deposit</b></td>
							<td> <?php echo $first_millionaire->initial_deposit;?> </td>
						</tr>
						
						<tr>
							<td><b> Monthly Installment Size</b></td>
							<td> <?php echo $first_millionaire->monthly_deposit;?> </td>
						</tr>
						
						<tr>
							<td><b> Term</b></td>
							<td><?php echo $first_millionaire->tenure_id;?> Years </td>
						</tr>
						
						<tr>
							<td><b> Number of Installment</b></td>
							<td> <?php echo $first_millionaire->no_of_installment;?> </td>
						</tr>
						
						<tr>
							<td><b>Total Principal Amount</b></td>
							<td> <?php echo $first_millionaire->total_principal_amount;?> </td>
						</tr>
						
						<tr>
							<td><b>Total Accrued Interest</b></td>
							<td> <?php echo $first_millionaire->accured_interest;?> </td>
						</tr>
						
						<tr>
							<td><b> Maturity Amount</b></td>
							<td> <?php echo $first_millionaire->maturity_amount;?> </td>
						</tr>
						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">

                            <tr>
                                <td class="abc"><b> Bank Name </b></td>
                                <td> <?php echo $second_bank_name;?> </td>
                            </tr>

                            <tr>
                                <td><b> Product Name</b></td>
                                <td><?php echo $second_millionaire->millionaire_info_name;?></td>
                            </tr>

                            <tr>
                                <td><b> Initial Deposit</b></td>
                                <td> <?php echo $second_millionaire->initial_deposit;?> </td>
                            </tr>

                            <tr>
                                <td><b> Monthly Installment Size</b></td>
                                <td> <?php echo $second_millionaire->monthly_deposit;?> </td>
                            </tr>

                            <tr>
                                <td><b> Term</b></td>
                                <td><?php echo $second_millionaire->tenure_id;?> Years </td>
                            </tr>

                            <tr>
                                <td><b> Number of Installment</b></td>
                                <td> <?php echo $second_millionaire->no_of_installment;?> </td>
                            </tr>

                            <tr>
                                <td><b>Total Principal Amount</b></td>
                                <td> <?php echo $second_millionaire->total_principal_amount;?> </td>
                            </tr>

                            <tr>
                                <td><b>Total Accrued Interest</b></td>
                                <td> <?php echo $second_millionaire->accured_interest;?> </td>
                            </tr>

                            <tr>
                                <td><b> Maturity Amount</b></td>
                                <td> <?php echo $second_millionaire->maturity_amount;?> </td>
                            </tr>
							
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="home-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Available Installment with Tenure <img class="Card-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
					<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_millionaire->available_benefit;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_millionaire->available_benefit;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="home-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/>Features<img class="Card-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
					<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_millionaire->available_feature;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_millionaire->available_feature;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_millionaire->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_millionaire->fees_and_charges;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Eligibility for Applying <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_millionaire->eligibility;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_millionaire->eligibility;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Requirement <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_millionaire->required_document;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_millionaire->required_document;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Terms and Conditions <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_millionaire->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_millionaire->terms_and_conditions;?>
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