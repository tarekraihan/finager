<?php
//		print_r($this->session->userdata());
$id = $this->session->userdata('first_fdr') ;
$result = $this->Front_end_select_model->select_fdr_details($id);
$first_fdr = $result->row();

$id1 = $this->session->userdata('second_fdr') ;
$result1 = $this->Front_end_select_model->select_fdr_details($id1);
$second_fdr = $result1->row();

//	print_r($second_fdr);die;

/*
$loan_facility = $first_fdr->loan_facility;

$xplode(" ",$str))*/

$first_bank_name = "";
$first_bank_logo = "";
if($first_fdr->is_non_bank == 1){
    $first_bank_name = $first_fdr->non_bank_name;
    $first_bank_logo = $first_fdr->non_bank_logo;
}else{
    $first_bank_name = $first_fdr->bank_name;
    $first_bank_logo = $first_fdr->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_fdr->is_non_bank == 1){
    $second_bank_name = $second_fdr->non_bank_name;
    $second_bank_logo = $second_fdr->non_bank_logo;
}else{
    $second_bank_name = $second_fdr->bank_name;
    $second_bank_logo = $second_fdr->bank_logo;
}

?>

	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></p></td>
						<td><b><p class="text-center com_title">Comparison </p></b></td>
						<td><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></td>
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
				<h3 class="text-center"> <img class="auto-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/>FDR <img class="auto-loan-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td><?php echo $first_bank_name; ?></td>
						</tr>
						
						<tr>
							<td><b> Interest Rate</b></td>
							<td> <?php echo $first_fdr->interest_rate;?></td>
						</tr>
						
						<tr>
							<td><b> Deposit Amount</b></td>
							<td> <?php echo $first_fdr->min_amount;?> </td>
						</tr>

						<tr>
							<td><b> Tenure</b></td>
							<td> <?php echo $first_fdr->tenure;?> </td>
						</tr>

						<tr>
							<td><b> Loan Facility</b></td>
							<td> <?php echo $first_fdr->loan_facility;?> % </td>
						</tr>

						
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">
							<tr>
								<td class="abc"><b> Bank Name </b></td>
								<td> <?php echo $second_bank_name; ?> </td>
							</tr>

                            <tr>
                                <td><b> Interest Rate</b></td>
                                <td> <?php echo $second_fdr->interest_rate;?></td>
                            </tr>

                            <tr>
                                <td><b> Deposit Amount</b></td>
                                <td> <?php echo $second_fdr->min_amount;?> </td>
                            </tr>

                            <tr>
                                <td><b> Tenure</b></td>
                                <td> <?php echo $second_fdr->tenure;?> </td>
                            </tr>

                            <tr>
                                <td><b> Loan Facility</b></td>
                                <td> <?php echo $second_fdr->loan_facility;?> % </td>
                            </tr>


                        </table>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Requirement  <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_fdr->required_document;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_fdr->required_document;?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="home-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Features<img class="home-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_fdr->available_feature;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_fdr->available_feature;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="auto-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Eligibility  <img class="auto-loan-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_fdr->eligibility;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_fdr->eligibility;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center">  <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Terms and Conditions <img class="home-loan-Compare-hr4" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
		
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_fdr->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_fdr->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center">  <img class="auto-loan-Compare-hr5" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Review <img class="auto-loan-Compare-hr5" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_fdr->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive" >
                        <?php echo $second_fdr->review;?>
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