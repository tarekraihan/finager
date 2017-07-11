<?php
$id=$this->uri->segment(3, 0);
$deposited_amount=$this->uri->segment(4, 0);
if(!empty($id) && is_numeric($id) ){

	echo $id;
	echo '<br/>';
	echo 'deposit='.$deposited_amount;

}else{
	redirect(base_url().'My404');
}

?>
<style type="text/css">
	.btnHomeLoan {
	    margin-top: 30px;
	}
</style>

	<section id="card_details_top">

		<div class="container">

			<div class="row">

				<div class="card_details_body">

					<div class="col-sm-2 col-xs-4">

						<div><img class="card_details_ImgCard img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/visa_card.png" /></div>

						<p class="text-center">

							<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>

						</p>

						<p class="rating text-center">Rated By 5 Person</p>

					</div>

					<div class="col-sm-2 col-xs-8">

						<div>

							<p class="card_details_head2">Prime Bank Home Loan</p>

							<p class="card_details_features">

								Purchase Apartment/Flat

							</p>

						</div>

					</div>



					<div class="col-sm-8 col-xs-12">

						<div class="row">

							<div class="col-sm-3 col-xs-6">

								<div>

									<p class="card_details_head2">Installment Amount </p>

									<p class="card_details_features">

										&#2547; 500

									</p>

								</div>

							</div>

							<div class="col-sm-2 col-xs-6">

								<div>

									<p class="card_details_head2">Number of Installment</p>

									<p class="card_details_features">

										60

									</p>

								</div>

							</div>

							<div class="col-sm-2 col-xs-6">

								<div>

									<p class="card_details_head2">Maturity Amount</p>

									<p class="card_details_features">

										&#2547; 35,799.20

									</p>

								</div>

							</div>

							<div class="col-sm-2 col-xs-6">

								<div>

									<p class="card_details_head2">Accrued Interest</p>

									<p class="card_details_features">

										&#2547; 5799

									</p>

								</div>

							</div>

							<div class="col-sm-3 col-xs-6">

								<div>

									<p class="card_details_head2">Loan Facility</p>

									<p class="card_details_features">

										90%

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

	

	<section id="card_details_FeesCharges">

		<div class="container">

			<div class="card_details_pronsCons">

				<p><b>Available Deposits (BDT):</b> 500, 1000, 1500, 2000, 2500, 3000, 4000, 5000, 8000, 10000.</p>

				<p><b>Available Terms:</b> 2, 3, 4, 5, 6, 7, 8, 10.</p>

				<p><b>Interest Rate:8%</b></p>

				<div class="offer_table">

				  <h4>Monthly Installment Size and Benefit After Maturity</h4>

					<table class="table table-bordered">

						<thead>

						  <tr>

							<th>Monthly Deposit</th>

							<th>2 Years</th>

							<th>3 Years</th>

							<th>4 Years</th>

							<th>5 Years</th>

							<th>6 Years</th>

							<th>7 Years</th>

							<th>8 Years</th>

							<th>10 Years</th>

						  </tr>

						</thead>

						<tbody>

						  <tr>

							<td>Tk 500</td>

							<td>12,886.06</td>

							<td>20,013.23</td>

							<td>27,639.30</td>

							<td>35,799.20</td>

							<td>44,530.30</td>

							<td>53,872.57</td>

							<td>63,868.80</td>

							<td>86,009.44</td>

						  </tr>

						  <tr>

							<td>Tk 1000</td>

							<td>25,772.12</td>

							<td>40,026.46</td>

							<td>55,278.61</td>

							<td>71,598.41</td>

							<td>89,060.60</td>

							<td>107,745.13</td>

							<td>127,737.59</td>

							<td>172,018.88</td>

						  </tr>

						  <tr>

							<td>Tk 2000</td>

							<td>51,544.23</td>

							<td>80,052.92</td>

							<td>110,557.22</td>

							<td>143,196.82</td>

							<td>178,121.19</td>

							<td>215,490.27</td>

							<td>255,475.18</td>

							<td>344,037.77</td>

						  </tr>

						  <tr>

							<td>Tk 3000</td>

							<td>77,316.35</td>

							<td>120,079.38</td>

							<td>165,835.83</td>

							<td>214,795.23</td>

							<td>267,181.79</td>

							<td>323,235.40</td>

							<td>383,212.77</td>

							<td>516,056.65</td>

						  </tr>

						  <tr>

							<td>Tk 5000</td>

							<td>128,860.58</td>

							<td>200,132.30</td>

							<td>276,393.05</td>

							<td>357,992.05</td>

							<td>445,302.98</td>

							<td>538,725.67</td>

							<td>638,687.95</td>

							<td>860,094.41</td>

						  </tr>

						  <tr>

							<td>Tk 10,000</td>

							<td>257,721.15</td>

							<td>400,264.60</td>

							<td>552,786.10</td>

							<td>715,984.09</td>

							<td>890,605.95</td>

							<td>1,077,451.34</td>

							<td>1,277,375.91</td>

							<td>1,720,188.83</td>

						  </tr>

						  <tr>

							<td>Tk 20,000</td>

							<td>515,442.30</td>

							<td>800,529.21</td>

							<td>1,105,572.19</td>

							<td>1,431,968.19</td>

							<td>1,781,211.91</td>

							<td>2,154,902.68</td>

							<td>2,554,751.81</td>

							<td>3,440,377.65</td>

						  </tr>

						  <tr>

							<td>Tk 25,000</td>

							<td>644,302.88</td>

							<td>1,000,661.51</td>

							<td>1,381,965.24</td>

							<td>1,789,960.24</td>

							<td>2,226,514.88</td>

							<td>2,693,628.35</td>

							<td>3,193,439.77</td>

							<td>4,300,472.07</td>

						  </tr>

						  <tr>

							<td>Number of Installments</td>

							<td>24</td>

							<td>36</td>

							<td>48</td>

							<td>60</td>

							<td>72</td>

							<td>84</td>

							<td>96</td>

							<td>108</td>

						  </tr>

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</section>

	<div style="clear:both;"></div>

	<section id="card_details_FeesCharges">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Features</h4>

				<div class="prosConsHr"></div><br/>

				<table class="table table-bordered">

					<tr>

						<td>Deposit Payment Date</td>

						<td>14th Date of the Month</td>

					</tr>

					<tr>

						<td>Auto Transfer Facility</td>

						<td>Available</td>

					</tr>

					<tr>

						<td>Flexible Installment Date</td>

						<td>Available</td>

					</tr>

					<tr>

						<td>Loan Facility on Deposited Amount</td>

						<td>90% of the total deposited amount</td>

					</tr>

					<tr>

						<td>Insurance Facility</td>

						<td>Available</td>

					</tr>

					<tr>

						<td>Bonus Facility</td>

						<td>Not Available</td>

					</tr>

					<tr>

						<td>Free Savings Account</td>

						<td>Available</td>

					</tr>

					<tr>

						<td>Premature Partial Encashment</td>

						<td>Available</td>

					</tr>

					<tr>

						<td>Availability of More than one Scheme</td>

						<td>Available</td>

					</tr>

					<tr>

						<td>Allow of Joint Name</td>

						<td>Available</td>

					</tr>

				</table>

			</div>

		</div>

	</section>

	

	

	<section id="card_details_basic">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Fees & Charges:</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2 trbodywidth">

					<ul>

						<li>Late Payment Charge</li>

						<li>Other Charges</li>

					</ul>

				</div>

			</div>

		</div>

	</section>

	

	<section id="card_details_Eligibility">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Terms & Conditions:</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2 trbodywidth">

					<ol>

						<li>The facility shall be made available for the customer from the date of Bank's approval of this application until such time is stipulated in any letter and this facility shall be continuing on until the adjustment of the dues of the Bank with interest and other charges.</li>

						<li>The Bank reserves the right to withdraw the credit facility and demand repayment if there has been any default in repayment of the loan.</li>

						<li>The Bank shall not be obliged to make the credit facility available until it has received formal written acknowledgement from you accepting the credit facility on the basis of outline and subject to the terms and conditions specified in the banking arrangement letter.</li>

						<li>The acceptance of the terms and conditions of the banking arrangement letter by the customer constitutes a legal and binding obligation and is enforceable in accordance with the terms of the Banking arrangement letter.</li>

						<li>By use of the credit facility provided by the bank, the customer accepts the conditions enumerated in the banking arrangement letter and authorizes the bank to appoint agents to collect funds payable to the bank, as the Bank may consider necessary. In the due discharge of their duty, information regarding borrower's credit facility will be supplied to the agent. All charges payable to such agents, to collect amounts owed to the bank, are liable to be at borrower's cost and risk, in addition to all other costs, charges and expenses incurred by the bank to recover outstanding dues/money.</li>

						<li>The bank is authorized to open and maintain account(s) for the purpose of administering and recording payments by the customer in respect of the facility.</li>

						<li>The loan shall be utilized for the specified purpose for which it has been sanctioned. Payment shall be made directly by the bank to the vendor or to the customer, as determined by the Bank, depending upon the purpose of the loan.</li>

						<li>All payments in respect of the facility shall be made by the customer on or before the due dates and the customer hereby irrevocably authorizes the Bank to debit any of the customer's account(s) with the Bank with all amounts. Owing in respect of the facility including interest and charges and expenses (together the indebtedness) at such time as the same shall become or be due and, payable and transfer such sum to the loan account for adjustment but in any case, the customer shall always remain liable and agree(s) to make payment in full of all such sums to the Bank.</li>

						<li>The customer unconditionally undertakes to repay the loan as per terms and conditions of the Banking Arrangement Letter.</li>

						<li>The customer undertakes to deposit his/her salary/wages/honorarium payable by his/her employer to the designated account maintained with the Bank.</li>

						<li>The Bank is authorized to enforce all or any of the securities executed as well as kept by the customer in favor of the Bank and recover the loan amount with interest and other charges accrued in the loan account.</li>

						<li>The customer irrevocably authorizes the Bank to enforce the securities art's absolute discretion in the event the loan account becomes irregular and shall apply any proceeds recovered towards adjustment of outstanding loan liabilities along with all legal fees.</li>

						<li>Where the facility is made available for purchase of consumer item(s) including Home loan customer unconditionally and irrevocably undertakes to deliver possession of the consumer items including the Home loan purchased b1 the loan amount without any question whatever to the bank as and when demanded by the bank. The customer further authorizes the bank irrevocably, to sell the mortgage items and apply the proceeds towards adjustment of the dues. For any unadjusted sum, the customer undertakes to repay the same with interest and other charges.</li>

					</ol>

				</div>

			</div>

		</div>

	</section>

	

	

	<section id="card_details_Benefits">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Eligibility:</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2">

					<ul type="1">

						<li>Age 18 years and above.</li>

						<li>Bangladeshi nationals.</li>

					</ul>

				</div>

			</div>

		</div>

	</section>

	

	<section id="card_details_Benefits">

		<div class="container">

			<div class="card_details_pronsCons">

				<h4>Requirement</h4>

				<div class="prosConsHr"></div><br/>

				<div class="prosCons_body2">

					<ul>

						<li>Salary Certificate/Letter of Introduction</li>

						<li>Application form (payment structure & schedule must be reflected)</li>

						<li>CV/Biodata</li>

						<li>Latest one-year personal bank statement</li>

						<li>Latest tax clearance certificate</li>

						<li>Photocopy of passport/driving license/national id of applicant(s) and guarantor(s) </li>

						<li>2 copy recent passport size photographs of applicant(s) and guarantor(s)</li>

						<li>NOC from spouse if co-applicant is anybody other than spouse</li>

						<li>Letter of introduction</li>

						<li>Copy of latest utility bill</li>

						<li>Personal net worth statements of applicant(s) and guarantor(s)</li>

						<li>Personal guarantee of spouse/parents/any person accepted to bank</li>

						<li>Evidence of another income source</li>

					</ul>

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