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
    .home-search-section {
        position: relative;
    }
    .home-search-section>p {
        font-size: 25px;
        font-style: italic;
        color: rgb(84, 172, 208);
        font-weight: 500;
        position: absolute;
        left: 0;
        right: 0;
        top: 7px;
        cursor: pointer;
        font-family: 'Ubuntu', sans-serif;
    }
    .fin-about-text{
        font-family: 'Ubuntu', sans-serif;
    }
    h3.fin-about-heading>span {
        font-size: 36px;
    }
    .fin-about-heading{
        font-family: 'Courgette', cursive;
        font-size: 22px;
    }

</style>

<section id="home_search">
    <div class="header container-fluid">
        <!--
        <div class="find-bar">
            <img class="logo-lg" src="<?php /*echo base_url();*/?>resource/front_end/images/FinAlfa.svg" alt="Large Logo" /><br/><br/>
            <a href=""><img src="<?php /*echo base_url();*/?>resource/front_end/images/serch-bar.png" alt="Serch box" class="img-responsive center-block" /></a>
        </div>-->

        <!--<div class="feature-bg">
            <div class="find-bar">
                <img class="logo-lg" src="<?php /*echo base_url(); */?>resource/front_end/images/FinAlfa.svg" alt="Large Logo" /><br/><br/>
                <img class="search-image" data-toggle="modal" data-target="#serchModal" src="<?php /*echo base_url(); */?>resource/front_end/images/srcbutton.png" alt="Serch box" />
            </div>
            
        </div>-->
        <div class="feature-bg">
            <div class="find-bar">
                <img class="logo-lg" src="<?php echo base_url(); ?>resource/front_end/images/FinAlfa.svg" alt="Large Logo" /><br/><br/>
                <div class="home-search-section" data-toggle="modal" data-target="#serchModal" >
                    <img class="search-image" src="<?php echo base_url(); ?>resource/front_end/images/srcbutton.png" alt="Serch box" />
                    <p class="typewrite" data-period="3000" data-type='[ "Looking for..."]'>
                        <span class="wrap"></span>
                </div>
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
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/all scheme.png" alt=""/>
								<p>All Scheme</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/business loan.png" alt=""/>
								<p>Business Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/buy new car.png" alt=""/>
								<p>Buy New Car</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/credit card.png" alt=""/>
								<p>Credit Card</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/education loan.png" alt=""/>
								<p>Education Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/financial calculator.png" alt=""/>
								<p>Financial Calculator</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/home loan.png" alt=""/>
								<p>Home Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/loan.png" alt=""/>
								<p>Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/money market.png" alt=""/>
								<p>Money Market</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
								<img src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/personal loan.png" alt=""/>
								<p>Personal Loan</p>
							</a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-2">
						<div class="Cicon">
							<a class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
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
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <img class="img-responsive about-logo" src="<?php echo base_url(); ?>resource/front_end/images/FinAlfa.svg">
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="header_paragrph">
                <h3 class="fin-about-heading"><span>A</span>bout <span>F</span>inager.com</h3>
                <div class="fin-about-text">
                <p>
                    "finager" is a fintech initiave of core-concept inc. This is the first 360 degree financial industry platfrom of
                    bangladesh. It helps visitors taking perfect decisions on their financial affairs- providing updated, authentic and
                    analysed data and tools.
                <p>
                    Today is the age of knowladge based economy.To succeed, people need to work with someone who knows and understands,
                    somewhere that  shares knowledge, risk and result and defines realistic objectives and the ways to reach them.
                </p>

                <p>visit "finager" , a partner you can count on day after day, a partner who is committed to help you to lead you to success.</p>

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
            <div class="req_card">
                <span class="req_para">We’re Here to Help You</span>
                <div class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
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
                </div>
                <div class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
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
                </div>
                <div class="land_modal" data-toggle="modal" data-target=".bs-example-modal-lg">
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
                </div>
            </div>
        </div>
    </div>
</section>
