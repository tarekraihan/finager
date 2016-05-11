<style>
/* for Card Compare Page */
.card_compare_head{
	font-family:SaintAndrewsQueen;
	font-size:60px;
}
.compare_btnApplication{
	margin-left:39px;
}
.compare_btnApplication1{
	margin-left: 35px;
	margin-top: 121px;

}
.Card-Compare-hr{
	height:2px;
	width: 43%;
}
.Card-Compare-hr1{
	width: 44.7%;
}
.Card-Compare-hr2{
	width: 42%;
}

.Card-Compare-hr3{
	width: 45.7%;
}
.Card-Compare-hr4{
	width: 42.8%;
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
	border-top: none !important;
}
.comparison_email{
	width: 33.33333333%;
	height:auto;
	margin: 0px auto;
}
</style>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to finager</title>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/booNavigation.js"></script>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/material_theme.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<?php include("right_menu.html");?>


<div class="main_body">
	<section id="top-page2">
		<div class="header container-fluid">
			<div class="row">
				<div class="col-sm-2">
					<img class="logo" src="images/logo.png" alt="Logo" />
				</div>	
				<div class="col-xs-8 col-sm-8">
					<div class="vMenu">
						<?php include ("vertical-menu.html");?>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 header-right">
					<div class="pull-right">
						<span class="login">Login</span>
					</div>
				</div>
			</div>
			<div class="text-center">
				<img class="hr-bar" src="images/hr-bar.png" alt="Horizontal Line" />
			</div>
		</div>
	</section>
	
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td> <p><img class="pull-left" src="images/visa_card.png" /></p></td>
						<td><b> <p class="text-center com_title">Comparison </p></b></td>
						<td> <p><img class="pull-right" src="images/visa_card.png" /></p></td>
					</tr>
					
				
					
				</table>
			</div>
		</div>
	</section>
	
<!-- 	<section id="card_compare">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="card_compare_body pull-right">
						<p><img class="pull-right" src="images/visa_card.png" /></p>
						<p class="compare_btnApplication1"><img src="images/card_btn_apllication.png" /></p>
						
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card_compare_body text-center">
						<p class="card_compare_head">Comparison</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card_compare_body">
						<p><img src="images/visa_card.png" /></p>
						<p class="compare_btnApplication"><img src="images/card_btn_apllication.png" /></p>
					
					</div>
				</div>
			</div>
		</div>
	</section> -->
	
	<section id="basic_info">
		<div class="container">
			
			<div class="row">
				<h3 class="text-center">  <img class="Card-Compare-hr" src="images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="images/Card-Compare-hr.png" /> </h3>
				
				<table class="table text-center">
					<tr>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
						<td><b> Rating </b></td>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
					</tr>
				</table>
			</div>
		
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr1" src="images/Card-Compare-hr.png" /> Basic Info <img class="Card-Compare-hr1" src="images/Card-Compare-hr.png" /> </h3> 
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td> Bank Asia Ltd </td>
							<td class="abc"><b> Bank Name </b></td>
							<td> Brac Bank Ltd </td>
						</tr>
						
						<tr>
							<td> Mastercard </td>
							<td><b> Network</b></td>
							<td> Visa </td>
						</tr>
						
						<tr>
							<td> Gold </td>
							<td><b> Card Type</b></td>
							<td> Classic </td>
						</tr>
						
						<tr>
							<td> 30000 for Salaried & 45000 for self-employed </td>
							<td><b> Income Range</b></td>
							<td> 25000 (both salaried & self-employed) </td>
						</tr>
						
						<tr>
							<td> 500000 </td>
							<td><b> Maximum Credit Limit</b></td>
							<td> 75000 </td>
						</tr>
						
						<tr>
							<td> Local </td>
							<td><b> Use Availability</b></td>
							<td> Local & International </td>
						</tr>
						
						<tr>
							<td> 45 </td>
							<td><b> Maximum Interest Free Days</b></td>
							<td> 20 </td>
						</tr>
						
						<tr>
							<td> 15 </td>
							<td><b> Minimum Interest Free Days</b></td>
							<td> 20 </td>
						</tr>
						
						<tr>
							<td> 50% </td>
							<td><b> Transferable Balance Limit</b></td>
							<td> 50% </td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="images/Card-Compare-hr.png" />  Fees & Charges <img class="Card-Compare-hr2" src="images/Card-Compare-hr.png" /> </h3>
				
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center compare_table">
						<tr>
							<td> Dutch Bangla Bank </td>
							<td class="def"><b> Basic Card Annual Fee</b></td>
							<td> Dutch Bangla Bank </td>
						</tr>
						
						<tr>
							<td> Master Card </td>
							<td><b> Supplementary Card Annual Fee</b></td>
							<td> Master Card </td>
						</tr>
						
						<tr>
							<td> Nexus-Pro </td>
							<td><b> Purchase Fee</b></td>
							<td> Nexus-Pro </td>
						</tr>
						
						<tr>
							<td> 30,000 tk </td>
							<td><b> Balance Transfer Fee</b></td>
							<td> 30,000 tk </td>
						</tr>
						
						<tr>
							<td> 1,00,000 tk </td>
							<td><b> Cash Advance Fee From own ATM</b></td>
							<td> 1,00,000 tk </td>
						</tr>
						
						<tr>
							<td> Sample </td>
							<td><b> Cash Advance Fee From other bank ATM</b></td>
							<td> Sample </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Cash Advance Fee International</b></td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Late Payment Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Card Replacement Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Pin Replacement Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Over Limit Charge</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Transaction Alert Service</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Credit Assurance Program Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Monthly E-Statement Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Check Book Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Minimum Payment</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Check Return Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Duplicate Statement</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Card Cheque Processing Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Card Cheque Issuing Fee</b> </td>
							<td> Sample 45 </td>
						</tr>
						
					</table>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr3" src="images/Card-Compare-hr.png" /> Benefits <img class="Card-Compare-hr3" src="images/Card-Compare-hr.png" /> </h3>
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center compare_table">
						<tr>
							<td> Dutch Bangla Bank </td>
							<td class="third"><b> Waiver on Annual Fee</b></td>
							<td> Dutch Bangla Bank </td>
						</tr>
						
						<tr>
							<td> Master Card </td>
							<td><b> Discount Facility</b></td>
							<td> Master Card </td>
						</tr>
						
						<tr>
							<td> Nexus-Pro </td>
							<td><b> Airport Lounge Facility & Priority Pass</b></td>
							<td> Nexus-Pro </td>
						</tr>
						
						<tr>
							<td> 30,000 tk </td>
							<td><b> Installment Payment for Bill & Purchase</b></td>
							<td> 30,000 tk </td>
						</tr>
						
						<tr>
							<td> 1,00,000 tk </td>
							<td><b> Reward Program</b></td>
							<td> 1,00,000 tk </td>
						</tr>
						
						<tr>
							<td> Sample </td>
							<td><b> Credit Assurance Program</b></td>
							<td> Sample </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Worldwide Cash Advance Facility</b></td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Convenient Payment Option</b></td>
							<td> Sample 45 </td>
						</tr>
						<tr>
							<td> Sample 45 </td>
							<td><b> Multiple Supplementary Card</b></td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Auto Debit Payment Service</b> </td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Check Book Facility</b></td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Multiple Suplementary Card</b></td>
							<td> Sample 45 </td>
						</tr>
						
						<tr>
							<td> Sample 45 </td>
							<td><b> Global Emergency ASSISTANCE SERVICE</b></td>
							<td> Sample 45 </td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="row">
				<h3 class="text-center">  <img class="Card-Compare-hr4" src="images/Card-Compare-hr.png" /> Additional Info <img class="Card-Compare-hr4" src="images/Card-Compare-hr.png" /> </h3>		
		
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center compare_table ">
			
						<tr>
							<td class="text-left">
								<ul> 
									<li> Any Bangladeshi National</li>
									<li>For salaried person minimum monthly income after tax is BDT 25,000</li>
									<li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
								</ul>
								<ul> <b> Age: </b>
									<li> Any Bangladeshi National</li>
									<li>For salaried person minimum monthly income after tax is BDT 25,000</li>
									<li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
								</ul>
							</td>
							<td class="fourth text-center"><b> Eligibility </b></td>
							<td class="text-left">
								<ul> 
									<li> Any Bangladeshi National</li>
									<li>For salaried person minimum monthly income after tax is BDT 25,000</li>
									<li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
								</ul>
								<ul> <b> Age: </b>
									<li> Any Bangladeshi National</li>
									<li>For salaried person minimum monthly income after tax is BDT 25,000</li>
									<li>For self-employed person minimum monthly income after tax is BDT 25,000 </li>
								</ul>
							</td>
						</tr>
						
						<tr>
							<td class="text-left">						
								<ul> <b> Pros: </b>
									<li>Triple benefits insurance plan for the cardholders (See review for details).</li>
									<li>Use of 100% limit through card cheque (See review for details).</li>
									<li>Convenient payment option (See review for details). </li>
									<li>You can set your own limit.</li>
									<li>Installment program is available. </li>
								</ul>
								
								<ul> <b> Cons: </b>
									<li>Triple benefits insurance plan for the cardholders (See review for details).</li>
									<li>Use of 100% limit through card cheque (See review for details).</li>
									<li>Convenient payment option (See review for details). </li>
									<li>You can set your own limit.</li>
									<li>Installment program is available. </li>
								</ul>
							</td>
							<td class="text-center"><b> Pros & Cons </b></td>
							<td class="text-left">
								<ul> <b> Pros: </b>
									<li>Triple benefits insurance plan for the cardholders (See review for details).</li>
									<li>Use of 100% limit through card cheque (See review for details).</li>
									<li>Convenient payment option (See review for details). </li>
									<li>You can set your own limit.</li>
									<li>Installment program is available. </li>
								</ul>
								
								<ul> <b> Cons: </b>
									<li>Triple benefits insurance plan for the cardholders (See review for details).</li>
									<li>Use of 100% limit through card cheque (See review for details).</li>
									<li>Convenient payment option (See review for details). </li>
									<li>You can set your own limit.</li>
									<li>Installment program is available. </li>
								</ul>
							</td>
						</tr>			
						
					</table>
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
	
	<!-- footer part -->
	<div class="col-sm-12">
		<div class="footer">
			<div class="text-center">
				<img class="hr-bar" src="images/hr-bar.png" alt="Horizontal Line" />
			</div>
			<div class="col-sm-4 footer-text">
				<p>&copy; 2016 finager.com</p>
			</div>
			<div class="col-sm-4 text-center footer-text">
				<p>Terms & Conditions</p>
			</div>
			<div class="col-sm-4">
				<div class="pull-right">
					<img src="images/fb.png" alt="Facebook" />
					<img src="images/tw.png" alt="Twitter" />
					<img src="images/in.png" alt="Linkedin" />
				</div>
			</div>
		</div>
	</div>
	
</div><!-- main body-->

<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>