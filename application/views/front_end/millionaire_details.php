<?php
$id= $millionaire_details['id'];
if(!empty($id) && is_numeric($id) ){
	$query=$this->Front_end_select_model->select_millionaire_info_details($id);
	$row=$query->row();
	$bank_name = "";
	$bank_logo = "";
	if($row->is_non_bank == 1){
		$bank_name = $row->non_bank_name;
		$bank_logo = $row->non_bank_logo;
	}else{
		$bank_name = $row->bank_name;
		$bank_logo = $row->bank_logo;
	}

	$initial_deposit  = ($row->initial_deposit) ? 'BDT'.$row->initial_deposit : 'N/A';

}else{
	redirect(base_url().'My404');
}

?>

<section id="card_details_top">
	<div class="container">
		<div class="row">
			<div class="card_details_body">
				<div class="col-sm-2 col-xs-4">
					<div>
						<img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo ?>" />
						<p class="card_details_head2"><?php echo $bank_name;?></p>
					</div>
					<p class="text-center">
						<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
					</p>
					<p class="rating text-center">Rated By 5 Person</p>
				</div>

				<div class="col-sm-2 col-xs-8">
					<div>
						<p class="card_details_head2">Initial Deposit</p>
						<p class="card_details_features">
							<?php echo $initial_deposit;?>
						</p>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<div class="row">
						<div class="col-sm-3 col-xs-6">
							<div>
								<p class="card_details_head2">Monthly Instalment</p>
								<p class="card_details_features">
									BDT <?php echo number_format( $row->monthly_deposit );?>
								</p>
							</div>
						</div>
						<div class="col-sm-2 col-xs-6">
							<div>
								<p class="card_details_head2">No of Installment</p>
								<p class="card_details_features">
									<?php echo $row->no_of_installment;?>
								</p>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div>
								<p class="card_details_head2">Total Principal Amount</p>
								<p class="card_details_features">
									BDT <?php echo number_format( $row->total_principal_amount );?>
								</p>
							</div>
						</div>
						<div class="col-sm-2 col-xs-6">
							<div>
								<p class="card_details_head2">Accrued Interest</p>
								<p class="card_details_features">
									BDT <?php echo number_format( $row->accured_interest );?>
								</p>
							</div>
						</div>

						<div class="col-sm-2 col-xs-6">
							<div>
								<p class="card_details_head2">Maturity Amount</p>
								<p class="card_details_features">
									BDT <?php echo number_format( $row->maturity_amount );?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-8 col-xs-12">
					<div class="btnHomeLoan">
						<!-- <div class="col-sm-3 col-xs-12"><span class="add_comp_icon"><a id="" href="#"><i class="fa fa-plus-circle"></i> Add to comparison</a></span></div> -->
						<div class="col-sm-3 col-xs-12"><span><a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/BtnCard_apply.png" /></a></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Lakhpoti & MIllionaire Scheme :</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<table class="table table-bordered table-hover text-center table-align  compare_table">
					<tr>
						<td class="abc"><b> Bank Name </b></td>
						<td> <?php echo $bank_name;?> </td>
					</tr>
					<tr>
						<td><b> Product Name</b></td>
						<td><?php echo $row->millionaire_info_name;?></td>
					</tr>
					<tr>
						<td><b> Initial Deposit</b></td>
						<td> <?php echo $initial_deposit;?> </td>
					</tr>
					<tr>
						<td><b> Monthly Installment Size</b></td>
						<td> BDT <?php echo number_format( $row->monthly_deposit );?> </td>
					</tr>
					<tr>
						<td><b> Term</b></td>
						<td><?php echo $row->tenure_id;?> Years </td>
					</tr>
					<tr>
						<td><b> Number of Installment</b></td>
						<td> <?php echo $row->no_of_installment;?> </td>
					</tr>
					<tr>
						<td><b>Total Principal Amount</b></td>
						<td> BDT <?php echo number_format( $row->total_principal_amount );?> </td>
					</tr>
					<tr>
						<td><b>Total Accrued Interest</b></td>
						<td> BDT <?php echo number_format( $row->accured_interest );?> </td>
					</tr>
					<tr>
						<td><b> Maturity Amount</b></td>
						<td> BDT <?php echo number_format( $row->maturity_amount );?> </td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Available Installment with Tenure :</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->available_benefit;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Features:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<table class="table table-striped table-bordered">
					<?php echo $row->available_feature;?>
				</table>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Fees & Charges:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->fees_and_charges;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Eligibility for Applying:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->eligibility;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Requirement:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->required_document;?>
			</div>
		</div>
	</div>
</section>
<section id="">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4>Terms and Conditions:</h4>
			<div class="prosConsHr"></div><br/>
			<div class="prosCons_body2 trbodywidth">
				<?php echo $row->terms_and_conditions;?>
			</div>
		</div>
	</div>
</section>
<div style="clear:both;"></div>
<section id="card_details_userReview">
	<div class="container">
		<div class="card_details_pronsCons">
			<h4 class="card_details_pronsCons_head">User reviews</h4>
			<h5 class="card_details_pronsCons_head"><b>How well does it rate with cardholders?</b></h5>
			<div class="prosConsHr"></div>
			<div class="row">
				<div class="col-sm-4 col-xs-4">
					<div class="userReview_body">
						<span class="userReviewLeft1">4.4</span><br/>
						<span class="userReviewLeft2">out of 5.0</span><br/>
						<span class="userReviewLeft3">based on 2 reviews</span>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4">
					<div class="prosCons_body2">
						<p>Rates and fees</p>
						<p>Rewards</p>
						<p>Customer service</p>
						<p>Convenience</p>
						<p>Trust</p>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4">
					<div class="prosCons_body2">
						<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
						<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
						<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
						<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
						<p><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></p>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="prosCons_body2">
						<p class="userreviw_note">Disclaimer: The opinions expressed about credit cards are the reviewer's alone, and do not reflect the views of Credit Card Compare or the credit card issuer. Reviews have not been approved or otherwise endorsed by Credit Card Compare.</p>
					</div>
				</div>
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
<!--
<script>

	$(document).ready(function(){
	    var plot2 = $.jqplot('pie2', [[['a',7],['b',88],['c',5]]], {
	        seriesDefaults:{ renderer:$.jqplot.PieRenderer, trendline:{ show: true } },
	        legend:{ show: false },
	        grid: {borderColor: 'white', shadow: false, drawBorder: true}
	    });
	});

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
</script>-->