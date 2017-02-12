<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finager Blog</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/blog/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/blog/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/blog/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/blog/css/responsive.css">
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
							<img src="<?php echo base_url();?>resource/blog/images/FinagerWhiteLogo.svg" />
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
				<img src="<?php echo base_url();?>resource/blog/images/Akter.jpg" alt="not-found"/>
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
					<h3>Authorization, Clearing and Settlement: How MasterCard Works</h3>
					<h4><i>Akter ul alam, 02-Oct-2016</i></h4>
				</div>
				<br>
				<p>
					The credit card companies are proud with the reliability of their payment processing systems. 
					The big ones are processing millions of transactions every hour and yet, MasterCard, for example, claims that its own payment
					network is up 99.9 percent of the time. Not to be undone, Visa boasts that its system has been functioning uninterruptedly 100 
					percent of the time for 18 consecutive “peak seasons”. 
				</p><br/>
				<p>
					Now, before we get too excited, we should note that the huge complexity of both Visa’s and MasterCard’s ecosystems makes it possible,
					indeed inevitable, that at any given time many merchants would not be able to connect to their networks, even though they may be up 
					and running perfectly smoothly. The reason, of course, is that merchants connect to Visa and MasterCard through their payment processors’
					systems, which are beyond the two networks’ control.
				</p><br/>
				
				<p>
					Nevertheless, the leading card networks have built two amazingly robust payment processing infrastructures, each processing astonishingly
					large amounts of data at an incredible speed. Card transactions — whether debit or credit, online or in-person — are processed in seconds, 
					during which time a long series of interactions takes place. Once the payment information is collected by the merchant, it is sent to the
					payment processor and from there to the card network (Visa or MasterCard), then on to the card issuer for transaction approval
					and then back through the same channel to the merchant. 
				</p><br/>

				<p>
					And now think about that: MasterCard says that it is facilitating more than 65,000 such transactions every minute and without
					a hitch! How does it do it? Well, this is the process that I will examine today. Before I get started, I should say that I’ve
					written on this subject many times before, but today I will delve much deeper than I’ve ever done before. Many readers may find that, 
					say, this post covers the topic well enough for you, but I am certain that many others, especially those of you running larger operations,
					will benefit from a more complete understanding of the way your transactions are processed. Let’s get going.
				</p><br/>
				
				<h4><b>The First Stage: Authorization</b></h4>
				<p>
					When you take your customer’s card payment, your payment system (whether a POS terminal or its web-based counterpart — the payment gateway) 
					immediately transmits the transaction information to the card’s issuer, at which point a series of tests and decisions is initiated.  
				</p><br/>
				
				<h4><b>Clearing and Settlement: The Basics</b></h4>
				<p>
					To facilitate the exchange of money between the merchants and their customers, the card networks conduct interbank “clearing” and “settlement” 
					of each card transaction. These interactions (exchanges of data and related funds) take place between “acquiring” banks, which serve the merchants 
					and are their link to the payments systems, and “issuing” banks, which service the consumers’ card accounts. 
				</p>
				<p>
					Settlement is the final process in the series of stages that begins with authorization and follows clearing, which is the non-monetary
					exchange of transaction-related information. Data exchanged during the clearing process serve to provide the verification for the amounts 
					debited from the issuers and credited to the acquirers. Clearing data also provide the details needed by acquirers in making credits to their merchants’
					accounts and by issuers for debiting their cardholders’ accounts. Additionally, banks also use the clearing data for their own account management purposes.
				</p>
				<p>
					For clearing purposes, there are two distinct types of card transactions and they need to be examined separately.
				</p><br/>
				
				<h4><b>Clearing of Dual-Message Transactions</b></h4>
				<p>
					The “dual-message” clearing protocol typically requires either a physical or virtual signature and includes credit card transactions
					(with the exception of ATM cash advances) and signature-authenticated debit transactions. When a merchant receives an authorization message, 
					its payment processing system creates a record of that authorization through something called “electronic draft capture” (EDC). 
					These electronic drafts are then stored in a “batch” until it is processed. For most merchants, batch processing occurs once a day,
					however high-volume merchants may do it multiple times a day and very low-volume merchants may do so less frequently than on a daily basis.
					Whatever the frequency, however, merchants submit all of their authorized transactions to their acquirer in batch mode, not individually. 
				</p>
				<p>
					MasterCard has defined time frames for the submission of transaction information. Merchants are required to submit records of their authorized
					transactions to their acquirers within a specified time period and those acquirers, in turn, have their own time period to comply with for submitting
					these transactions into network clearing. As long as those time periods are met, issuers are required to honor the transaction. Additionally,
					issuers are required to honor transactions cleared outside of the defined time period, as long as the cardholders’ accounts are still open and in good standing.
				</p>
				<p>
					MasterCard provides multiple windows for dual-message batch processes. Once received, these records are organized into electronic reports and transmitted to 
					the respective issuers. These reports contain all the data that the issuer needs for the posting of transactions to cardholder accounts and
					facilitating disputes on behalf of its cardholders.
				</p>
				<p>
					The processing of all these transaction records also enables MasterCard to calculate the total amount owed by each issuer and the
					amount owed to each acquirer. This function of the clearing process is essential to the final settlement stage, as we will see in a bit.
				</p><br/>
				<h4><b>Clearing of Single-Message Transactions</b></h4>
				<p>
					In most of the world, including the U.S., but excluding Europe, all card transactions authenticated with a PIN are single-message transactions. 
					(Europe uses dual messaging for all card transactions, whether signature- or PIN-based.) With single-messaging, the authorization and clearing are 
					done simultaneously and all the information necessary to post a transaction to the cardholder’s account is exchanged during the transaction. Therefore, 
					there is no need to create transaction batches to be entered into clearing at a later point, as it is done with dual-messaging — only monetary settlement is required.  
				</p>
				<p>
					Single-message transactions have only one cut-off time each day, in contrast to the multiple ones available for dual-message ones. 
					This cut-off time is the same for all participants and is non-negotiable. At cut-off, MasterCard calculates the total monetary positions for 
					all of its banks for that day’s single-message transactions. These include both PIN-based sales transactions and ATM transactions that take
					place at “foreign” ATMs — when a cardholder has used an ATM that is not operated by her card’s issuer. The ATM category includes withdrawals
					made with debit cards, as well as cash advances made with credit cards.
				</p><br/>
				<h4><b>MasterCard’s Settlement</b></h4>
				<p>
					MasterCard uses only one settlement window for both dual- and single-message transactions and settlement is done on an aggregate net basis.
					So all of each bank’s credits and debits are summed up and the net amount is either credited in a lump sum to the client bank’s account,
					in the case of an acquirer, or debited from the bank’s account, in the case of an issuer.
				</p>
				<p>
					For issuers, most of their customers’ activity is in the debit category — cardholders are making purchases for which the issuer will pay into settlement
					on their behalf. But some transactions, in particular merchandise returns, fall into the credit category. The issuer may also have made ATM cash disbursements
					to other banks’ cardholders and these will also be credited to the issuer’s settlement amount. MasterCard calculates the total of the debits, deducts the total
					of the credits and the net remaining amount is collected from the issuer through settlement. 
				</p>
				<p>
					For acquirers, most of their merchants’ activity is in the credit category, but merchants also conduct transactions, such as the aforementioned refunds, which create debits. 
					These debits are subtracted from the total of funds owed to the acquirer and the net amount is deposited into the bank’s account through settlement.
				</p>
				<p>
					But things are made more complicated by another activity which creates a debit position for the acquirer (and its merchant) and a credit for the issuer
					(and its cardholder) — the chargeback. Chargebacks typically occur when a cardholder disputes a successfully completed transaction, which is then reversed.
					Of course, chargebacks are complicated, there are time limits, allowable reasons for dispute, etc., but these need not concern us here — we’ve dealt with
					chargebacks elsewhere and at length.
				</p>
				<p>
					MasterCard plays an intermediary role in the processing of chargebacks and is the final arbiter as to their validity. If the chargeback is resolved in 
					the merchant’s favor, no settlement activity takes place, as nothing changes from transaction processing standpoint. If, on the other hand, the chargeback 
					is resolved in the cardholder’s favor, MasterCard will debit the transaction amount from the acquirer’s net settlement and credit it to the issuer’s net settlement.
				</p>
				<p>
					Finally, it is also during settlement that the interchange fees are collected from acquirers and credited to issuers for sales transactions. 
					For cash advances, withdrawals, credits and returns, the interchange flow is reversed and the issuer pays interchange fees to the acquirer.
				</p>
				<p>
					Interchange fees are established by MasterCard and vary depending on a number of factors, such as the type of card used, the merchant category,
					the type of transaction, the merchant’s sales channel and the fraud rates associated with the merchant and its category.
					All these data are captured as a transaction is authorized and sent on for clearing, during which MasterCard assesses its appropriate
					interchange fee. This amount is then added to or deducted from the bank’s net settlement amount.
				</p>
				<p>
					All of the activity just outlined is conducted before the settlement cut-off time, at which time MasterCard sends notifications of 
					these amounts to each of its client bank. Banks with a net debit position are notified of the amounts they need to remit to MasterCard’s
					clearing account and banks with a net credit position are informed of the amounts that will be deposited to their settlement accounts.
					Most credits and debits are processed within an hour after cut-off.
				</p>
				<p>
					Once funds are settled between issuers and acquirers, these banks proceed to post the appropriate debits and credits to their own customers’ 
					(cardholders and merchants, respectively) accounts. The electronic reports provided by MasterCard during clearing are used by its banks for
					facilitating the detailed entries into the individual customer accounts each processing day.
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
						<a href="#"><img src="<?php echo base_url();?>resource/blog/images/facebook_counter.png" alt="facebook_counter"/></a>
						<a href="#"><img src="<?php echo base_url();?>resource/blog/images/twitter_counter.png" alt="twitter_counter"/></a>
						<a href="#"><img src="<?php echo base_url();?>resource/blog/images/pinterest_counter.png" alt="pinterest_counter"/></a>
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
					<img class="img-responsive" src="<?php echo base_url();?>resource/blog/images/new car.png" alt="not found"/>
					<h4>Buying a New Car</h4>
					<h5><i>Writen by Sujat, 03-Oct-2016</i></h5>
					<p>Technology has come a long way over the years, taking even shopping for the car you want to a level beyond what it was just a decade ago.
					   These changes can be rather scary. Online search bars and their results can spill mass................
					</p>
					<a href="<?php echo base_url();?>blog/car_loan1"><button type="button" class="btn btn-primary details_btn">Read More</button></a>
				</div>
				<div class="col-md-4 col-sm-65"> 
					<img class="img-responsive" src="<?php echo base_url();?>resource/blog/images/personal_loan.jpg" alt="home_moto_blog"/>
					<h4>Six Reasons to Get a Personal Loan</h4>
					<h5><i>Writen by Asef Jamil, 10-10-2016</i></h5>
					<p>While it would be great if we all had enough money to fund all of life’s expenses without worry, 
						we know that’s not the case. Sometimes we have to borrow a little to keep............
					</p>
					<a href="<?php echo base_url();?>blog/personal_loan1"><button type="button" class="btn btn-primary details_btn">Read More</button></a>
				</div>
				<div class="col-md-4 col-sm-6"> 
					<img class="img-responsive" src="<?php echo base_url();?>resource/blog/images/home_moto_blog.jpg" alt="home_moto_blog"/>
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
