<?php
$id=$this->uri->segment(3, 0);
if(!empty($id) && is_numeric($id) ){

    $query=$this->Front_end_select_model->select_fdr_details($id);
    $row=$query->row();

    if($row->is_non_bank == 1){
        $bank_name = $row->non_bank_name;
        $bank_logo = $row->non_bank_logo;

    }else{
        $bank_name = $row->bank_name;
        $bank_logo = $row->bank_logo;
    }
	$amount = 5000;
	if($this->session->userdata('fdr_deposit_amount')){
		$amount = $this->session->userdata('fdr_deposit_amount');
	}
    $yearly_interest = floatval( $row->interest_rate ) ;
    $interest = ($yearly_interest / 100);
    $tenure = floatval($row->installment);
    $no_of_times = 12;
    $payment = round($amount * pow(1 + $interest /$no_of_times,($no_of_times*($tenure/12))));
    $loan_facility = (!empty($row->loan_facility)) ? $row->loan_facility.'%' : 'N/A';

}else{
    redirect(base_url().'My404');
}

?>

<style>

    .panel-default {

        border-color: #EAEAEC;

        background-color:#EAEAEC;

    }

    .savingsContainer .leftCont {

        padding: 0 0 0 24px;

        margin: 0 0 4% 23%;

    }

    .quest {

        font-size: 20px;

    }

    #alreadySaved .questWrap {

        margin-bottom: 16px;

    }

    .btnHomeLoan {
	    margin-top: 30px;
	}

</style>

	<section id="card_details_top">

		<div class="container">

			<div class="row">

				<div class="card_details_body">

					<div class="col-sm-2 col-xs-4">

						<div><img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $bank_logo; ?>" /></div>

						<p class="text-center">

							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>

						</p>

						<p class="rating text-center">Rated By 5 Person</p>

					</div>

					<div class="col-sm-2 col-xs-8">

						<div>

							<p class="card_details_head2"><?php echo $bank_name?> </p>

							<p class="card_details_features">

                                FDR

							</p>

						</div>

					</div>

					

					<div class="col-sm-8 col-xs-12">

						<div class="row">

							<div class="col-sm-3 col-xs-6">

								<div>

									<p class="card_details_head2">Deposited Amount </p>

									<p class="card_details_features">

										BDT <?php echo number_format($amount); ?>

									</p>

								</div>

							</div>

							<div class="col-sm-1 col-xs-6">

								<div>

									<p class="card_details_head2">Tenure</p>

									<p class="card_details_features">

                                        <?php echo $row->tenure; ?>

									</p>

								</div>

							</div>

							<div class="col-sm-2 col-xs-6">

								<div>

									<p class="card_details_head2">Interest Rate</p>

									<p class="card_details_features">

                                        <?php echo $yearly_interest; ?>%

									</p>

								</div>

							</div>

							<div class="col-sm-3 col-xs-6">

								<div>

									<p class="card_details_head2">Maturity Amount</p>

									<p class="card_details_features">

										BDT <?php echo number_format($payment);?>

									</p>

								</div>

							</div>

							<div class="col-sm-3 col-xs-6">

								<div>

									<p class="card_details_head2">Loan Facility</p>

									<p class="card_details_features">

										<?php echo $loan_facility;?>

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

	

	<!-- <section id="card_details_userReview">

		<div class="container">

			<div class="fdr_iframe">

				<h2 class="text-center">Available Offer</h2>

				<div class="panel panel-default">	

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

												 

											  

												<div class="innerMdlInner">

													<div class="calcWrapper">



														<div class="clear"></div>


														  

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


																<div class="slideWrapper" id="alreadySaved">

																	<div class="questWrap">

																	  <p class="quest">Select Deposit Amount</p>

																	</div>

																  

																	<div class="inputWrapper"> <span class="rupee"></span>

																	  <div class="inputField">

																		<div class="inpLft"></div>

																		<div class="inpMdl">

																		  <input type="text" name="" value="0" id="finalAssest" class="input_LoanAmt"/>

																		</div>


																	  </div>

																	</div>

																	<div class="clear"></div>


																	<div class="calcContainer">

																	  <div class="calcSection">

																		<div class="dragBox">

																		  <div class="drag"> <span></span>

																			<div class="sliderHover"></div>

																			<div class="draggable ui-widget-content drag3"> </div>

																		  </div>


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


																	

																</div>


																  

																<div class="slideWrapper" style="display:none;" id="avgSave">

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

																	

																	<div class="calcContainer yearWrap" style="display:none">

																	  <div class="calcSection">

																		<div class="dragBox">

																		  <div class="drag"> <span></span>

																			<div class="draggable ui-widget-content drag3"></div>

																		  </div>


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

																	

																	<div class="calcContainer monthWrap">

																	  <div class="calcSection">

																		<div class="dragBox">

																		  <div class="drag2"> <span></span>

																			<div class="draggable draggable2 ui-widget-content drag3"></div>

																		  </div>


																		  <div class="slideImg" id="monthExp">

																			<ul>

																			</ul>

																		  </div>

																 

																		</div>

																		<div class="hideVal">5</div>

																	  </div>

																	</div>


																</div>





																<div class="slideWrapper" style="display:none;" id="interest">

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

																

																	<div class="calcContainer">

																	  <div class="calcSection">

																		<div class="dragBox">

																		  <div class="drag"> <span></span>

																			<div class="draggable ui-widget-content drag3"></div>

																		  </div>

																		  

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


																</div>

																  

																 

																  <input type="hidden" id="input_Payment" />

															</div>



															<div style="display:none;" class="rightCont"> 

															

															  <div class="resultWrapper">

																<h2>Personal Loan EMI Result</h2>

																<div class="resultContainer">

																 

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

				</div>

				

				<div class="container">

					<div class="offer_table">

						<div class="col-sm-11">

							<table class="table table-bordered">

								<thead>

								  <tr>

									<th>Select Tenure</th>

									<th>Available Interest Rate</th>

									<th>Maturity Amount Based On</th>

								  </tr>

								</thead>

								<tbody>

								  <tr>

									<td>1 Month</td>

									<td>none</td>

									<td>none</td>

								  </tr>

								  <tr>

									<td>3 Month</td>

									<td>4%</td>

									<td>10700</td>

								  </tr>

								  <tr>

									<td>1 Year</td>

									<td>6%</td>

									<td>13000</td>

								  </tr>

								  <tr>

									<td>2 Year</td>

									<td>6%</td>

									<td>16000</td>

								  </tr>

								  <tr>

									<td>3 Year</td>

									<td>none</td>

									<td>none</td>

								  </tr>

								  <tr>

									<td>4 Year</td>

									<td>none</td>

									<td>none</td>

								  </tr>

								  <tr>

									<td>5 Year</td>

									<td>none</td>

									<td>none</td>

								  </tr>

								</tbody>

							</table>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section> -->

	

	<section id="card_details_FeesCharges">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Features</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2 trbodywidth">

					<?php echo $row->available_feature;?>

				</div>

			</div>

		</div>

	</section>

	

	

	<section id="card_details_basic">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Eligibility</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2 trbodywidth">

                    <?php echo $row->eligibility;?>

				</div>

			</div>

		</div>

	</section>

	

	<section id="card_details_Eligibility">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Required Documents</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2 trbodywidth">

                    <?php echo $row->required_document;?>

				</div>

			</div>

		</div>

	</section>

	

	

	<section id="card_details_Benefits">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Terms & Conditions</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2">

                    <?php echo $row->terms_and_conditions;?>

				</div>

			</div>

		</div>

	</section>

	

	<section id="card_details_Benefits">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Review</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2">

                    <?php echo $row->review;?>

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

<!--script>


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



</script-->