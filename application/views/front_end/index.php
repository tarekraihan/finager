<style type="text/css">
    #home-page{
        /*background-image: url(images/fana.gif);
        height: 100%;
        width: 100%;
        background-size: cover;*/
    }
    .bg-gif{
        position: absolute;
        left: 0;
        right: 0;
        margin: 0 auto;
        top: 227px;
    }
    .find-bar {
        margin-top: 160px;

        text-align: center;
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        z-index: 99;
    }
    .feature-bg {
        margin: 175px 0 !important;
    }

    #CategoryIcon{
       
        background: rgba(233, 238, 245, 0.33);
    }
    #home_search{
      height:664px;
      width:100%;
      background-image:url(<?php echo base_url(); ?>resource/front_end/images/Finagersearchbackground.jpg);
      background-repeat: no-repeat;
      background-position: center center;
      background-attachment: fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');
      -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";
      -moz-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";
   }
</style>

<section id="home_search">
    <div class="header container-fluid">
        <!--
        <div class="find-bar">
            <img class="logo-lg" src="<?php /*echo base_url();*/?>resource/front_end/images/logo-lg.png" alt="Large Logo" /><br/><br/>
            <a href=""><img src="<?php /*echo base_url();*/?>resource/front_end/images/serch-bar.png" alt="Serch box" class="img-responsive center-block" /></a>
        </div>-->

        <div class="feature-bg">
            <div class="find-bar">
                <img class="logo-lg" src="<?php echo base_url(); ?>resource/front_end/images/logo.png" alt="Large Logo" /><br/><br/>
                <img class="search-image" data-toggle="modal" data-target="#serchModal" src="<?php echo base_url(); ?>resource/front_end/images/srcbutton.png" alt="Serch box" />
            </div>
            
        </div>
    </div>
</section>
<section id="CategoryIcon">
		<div class="container">
			<div class="row">
				<div class="catagory-icon">
				<h1>Top Categories</h1>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/all scheme.png" alt=""/>
								<p>All Scheme</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/business loan.png" alt=""/>
								<p>Business Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/buy new car.png" alt=""/>
								<p>Buy New Car</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/credit card.png" alt=""/>
								<p>Credit Card</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/education loan.png" alt=""/>
								<p>Education Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/financial calculator.png" alt=""/>
								<p>Financial Calculator</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/home loan.png" alt=""/>
								<p>Home Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/loan.png" alt=""/>
								<p>Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/money market.png" alt=""/>
								<p>Money Market</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/personal loan.png" alt=""/>
								<p>Personal Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="#">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/bank map.png" alt=""/>
								<p>Bank Map</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a href="<?php echo base_url(); ?>en/more_logo">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/more.png" alt=""/>
								<p>More</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<section id="header2">
    <div class="container Aboutcredit_card">
        <div class="col-md-2 col-sm-2">
            <img class="img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/finager_logo.png">
        </div>
        <div class="col-md-7 col-sm-7">
            <div class="header_paragrph">
                <h3>About Finager.com</h3>
                <p>At CreditCards.com we've partnered with leading banks and issuers in order to bring you
                    credit card offers online. Offers are displayed side by side so you can easily compare key
                    factors such as interest rates, annual fees as well as other key features.<br/><br/>
                    Once you have found the card from one of our partners that is best for you, you can fill
                    out an online application and in some cases even get a credit decision within 60 seconds.<br/><br/>
                    At CreditCards.com our goal is to provide consumers a resource to search, compare and
                    apply for a selection of credit card offers online.
                </p>
            </div>
        </div>
        <div class="col-md-3 col-sm-3">
            <div class="req_card">
                <span class="req_para">We’re Here to Help You</span>
                <a href="cardMatch2.php">
                    <div class="req_card1">
                        <div class="card_div">
                            <!--img class="img-responsive" src="images/card.png" alt="" />
                            <span class="req_head">My Finager.com</span-->
                            <img src="<?php echo base_url(); ?>resource/front_end/images/frontCard/card.png" alt="" />
                            <span>My Finager.com</span>
                        </div>
                        <i class="fa fa-arrow-right pull-right" style="font-size:18px;" aria-hidden="true"></i>
                        <div class="req_paragrph">Free Credit Score and Monitoring</div> Get an updated credit score for free
                        each month.
                    </div>
                </a>
                <a href="chooseCardabout.php">
                    <div class="req_card2">
                        <div class="card_div">
                            <!--img class="img-responsive" src="images/card_2.png">
                            <span class="match_crd">CardMatch</span><br/><span class="req_head1">by <b>finager.com</b></span-->
                            <img src="<?php echo base_url(); ?>resource/front_end/images/frontCard/card_2.png" alt="" />
                            <span>CardMatch</span><br/><span class="req_head1">by <b>finager.com</b><span>
								<i class="fa fa-arrow-right pull-right" style="font-size:18px;" aria-hidden="true"></i>

                        </div>
                        <div class="req_paragrph">Better Offers via CardMatch</div> See offers matched with your credit
                        profile.
                    </div>
                </a>
                <a href="#">
                    <div class="req_card3">
                        <div class="card_div">
                            <!--img class="img-responsive" src="images/card_3.png">
                            <span class="match_crd">WalletUp </span><br/><span class="req_head1">by <b>finager.com</b></span-->
                            <img src="<?php echo base_url(); ?>resource/front_end/images/frontCard/card_3.png" alt="" />
                            <span>WalletUp</span><br/><span class="req_head1">by <b>finager.com</b></span>
                            <i class="fa fa-arrow-right pull-right" style="font-size:18px;" aria-hidden="true"></i>

                        </div>
                        <div class="req_paragrph">Max Rewards with WallerUp</div> Maximize your rewards, cash back and
                        points earnings.
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<div style="clear:both"></div>

