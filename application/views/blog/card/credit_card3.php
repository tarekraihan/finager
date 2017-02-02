<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finager Blog</title>
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>

<body>
<style>
	.navbar-default .navbar-nav>li>a {
			color:#fff;
		}
</style>
	<!-- <section id="details_header"></section> -->
	<section id="details_header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="../index.html">
						<div class="logo">
							<img src="../images/FinagerWhiteLogo.svg" />
						</div>
					  </a>
					</div>
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Our team</a></li>
							<li><a href="#">Our portfolio</a></li>
							<li><a href="#">contact</a></li>
							<!-- <button type="button" class="btn btn-default blog_btn">
							  <span class="glyphicon glyphicon-search gis"></span> 
							</button> -->
							<a data-toggle="collapse" href="#search" aria-expanded="false" aria-controls="search">
							  <i class="fa fa-search fa-lg blog_scl" aria-hidden="true" ></i>
							</a>
							<div class="collapse" id="search">        
								<form class="navbar-form">
									<div class="form-group blog_srch">                              
									  <input type="text" class="form-control blog_Sr" placeholder="search here">
									</div>                       
								</form>
							</div>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<div class="details_heading_img">
				<img src="../images/Akter.jpg" alt="not-found"/>
				<h4>Akter ul alam</h4>
				<h5>Head of R&D</h5>
				<p>Index Group</p>
				<a href="#">View profile</a>
			</div>
		</div>
	</section>
	<section id="details_highlight">
		<div class="container">
			<div class="details_post">
				<div class="details_heading">
					<h3>The Basics About MasterCard’s Excessive Chargeback Program That You Absolutely HAVE To Know</h3>
					<h4><i>Akter ul alam, 02-Oct-2016</i></h4>
				</div>
				<br>
				<p>
					MasterCard’s Excessive Chargeback Program (ECP) sets the rules that all acquiring banks (also called acquirers or processors) 
					must comply with in their efforts to monitor the chargeback performance of their merchants and to determine when a merchant has exceeded or is likely to 
					exceed monthly chargeback thresholds. 
				</p><br/>
				<h4>Reporting Requirements</h4>
				<p>
					The ECP requires processors to calculate and report to MasterCard, for each calendar month, the chargeback-to-transaction ratio (CTR) for each of its merchants. 
					CTR is the number of chargebacks received by the acquirer for a merchant in a calendar month divided by the number of the merchant’s sales
					transactions in the preceding month acquired by that acquirer, calculated in basis points (a CTR of 1% equals 100 basis points).
				</p>
				
				<p>
					Each calendar month, an acquirer must submit to MasterCard a separate Chargeback-Monitored Merchant (CMM) report for each of its merchants that qualifies as 
					a CMM for the previous calendar month. CMM is a merchant that has a CTR in excess of 50 basis points and at least 50 chargebacks in a calendar month. 
					MasterCard assesses processors a reporting fee of $50 for each CMM report submitted. A failure to submit a CMM report may cost an acquirer up to $5,000 
					for each month that a specific CMM report is overdue.
				</p>

				<p>
					A merchant becomes an Excessive Chargeback Merchant (ECM) if in each of two consecutive calendar months (the “trigger months”),
					the merchant has a minimum CTR of 100 basis points and at least 50 chargebacks in each month. This designation is maintained until
					the ECM’s CTR is below 100 basis points for two consecutive months.
				</p>
				
				<p>
					Within 30 days of the end of the second trigger month, and on a monthly basis thereafter, the acquirer must submit a separate ECM report
					for each of its ECMs (in lieu of a CMM report) until that ECM’s CTR is below 100 basis points for two consecutive months. 
					The acquirer also must provide a copy of the ECM report to the specific ECM merchant. MasterCard assesses processors a reporting fee of $300
					for each ECM report submitted. A failure to submit an ECM report may cost an acquirer up to $500 per day for the first 15 days that a specific 
					ECM report is overdue and up to $1,000 per day thereafter until the report is submitted.
				</p><br/>
				
				<h4><b>Assessments</b></h4>
				<p>
					In addition to any applicable assessments for CMM reports, ECM reports, or late report submissions, MasterCard may assess the acquirer for issuer reimbursement 
					fees and violation assessments for excessive chargebacks arising from an ECM.
				</p>
				<h4>1.	ECP Assessment Calculation</h4>
				<p>
					MasterCard determines an acquirer’s liability for the monthly issuer reimbursement fees and assessments for each ECM as set forth below. 
					<ol style="margin-left:12px;" type="1">
						<li>Calculate the CTR for each calendar month that the ECM exceeded a CTR of 100 basis points (which may also be expressed as 1% or 0.01).</li>
						<li>From the total number of chargebacks in the above CTR calculation, subtract the number of chargebacks that account for the first 100 basis points of the CTR. (This amount is equivalent to 1% of the number of monthly sales transactions used to calculate the CTR.) The result is the number of chargebacks above the threshold of 100 basis points.</li>
						<li>Multiply the result from step 2 by $25. This is the issuer reimbursement.</li>
						<li>Adjust the result in step 3 to reflect the extent that the acquirer has exceeded the 100 basis points threshold by multiplying the value in step 3 by the CTR (expressed as basis points). Divide this result by 100. This amount is the violation assessment.</li>
					</ol>
				</p>
				

			</div>
		</div>	
	</section>
	<section id="hight_header_post_">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<div class="relative">
						<p>Comment</p>
						<textarea class="common_textarea form-control" rows="4"></textarea>
					</div>
					<button class="btn common_btn user_comment_btn">Post</button>
				</div>
				
				<div class="col-sm-6 col-xs-12">
					<div class="icon">
						<a href="#"><img src="../images/facebook_counter.png" alt="facebook_counter"/></a>
						<a href="#"><img src="../images/twitter_counter.png" alt="twitter_counter"/></a>
						<a href="#"><img src="../images/pinterest_counter.png" alt="pinterest_counter"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- <div class="horizantal_bar"></div> -->
	
	<section id="details_related">
		<div class="container">
			<hr/>
			<div class="related_post">
				<h3 class="related_pst">Related Post</h3>
				<div class="col-md-4 col-sm-6"> 
					<img class="img-responsive" src="../images/new car.png" alt="not found"/>
					<h4>Buying a New Car</h4>
					<h5><i>Writen by Sujat, 03-Oct-2016</i></h5>
					<p>Technology has come a long way over the years, taking even shopping for the car you want to a level beyond what it was just a decade ago.
					   These changes can be rather scary. Online search bars and their results can spill mass................
					</p>
					<a href="../loan/car_loan1.html"><button type="button" class="btn btn-primary details_btn">Read More</button></a>
				</div>
				<div class="col-md-4 col-sm-65"> 
					<img class="img-responsive" src="../images/personal_loan.jpg" alt="home_moto_blog"/>
					<h4>Six Reasons to Get a Personal Loan</h4>
					<h5><i>Writen by Asef Jamil, 10-10-2016</i></h5>
					<p>While it would be great if we all had enough money to fund all of life’s expenses without worry, 
						we know that’s not the case. Sometimes we have to borrow a little to keep............
					</p>
					<a href="../loan/personal_loan1.html"><button type="button" class="btn btn-primary details_btn">Read More</button></a>
				</div>
				<div class="col-md-4 col-sm-6"> 
					<img class="img-responsive" src="../images/home_moto_blog.jpg" alt="home_moto_blog"/>
					<h4>What is Lorem Ipsum</h4>
					<h5><i>Writen by Sujat, 03-Oct-2016</i></h5>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					</p>
					<a href="#"><button type="button" class="btn btn-primary details_btn">Read More</button></a>
				</div>				
			</div>
		</div>
	</section>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>
