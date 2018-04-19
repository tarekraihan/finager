<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/mashmenu-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/front_end/css/mashable-menu.css">


<div class="main_body">
    <section id="top-page">
        <div class="header container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="">
                        <div class="col-xs-2 col-sm-2 header-right pull-right">
			     <div data-toggle="modal" data-target="#myModal" class="pull-right search_icon">
				<i class="fa fa-search" data-toggle="modal" data-target="#serchModal" aria-hidden="true"></i>
			     </div>
		        </div>

                        <div class="logobar">
                            <a href="<?php echo base_url(); ?>">
                                <img class="logo" title="Finager Logo" src="<?php echo base_url(); ?>resource/front_end/images/FinagerLogo.svg" alt="Logo" />
                                <img class="beta-icon" title="Finager Logo" src="<?php echo base_url(); ?>resource/front_end/images/Beta-Ico.png" alt="Logo" />
                            </a>
                        </div>

                        <nav class="mash-menu separator" data-color="">
                            <section class="mash-menu-inner-container">

                                <!-- brand -->
                                <ul class="mash-brand">
                                    <li>

                                        <!-- mobile button -->
                                        <button class="mash-mobile-button"><span></span></button>
                                    </li>
                                </ul>

                                <!-- list items -->
                                <ul class="mash-list-items">

                                    <li><a href="#">Cards<i class="fa fa-caret-down fa-indicator"></i> </a>
                                        <!-- full size drop down -->
                                        <!-- For cards drop down -->
                                        <div class="drop-down-large" style="display: none;">
                                            <!-- vertical tabs container -->
                                            <div class="vertical-tabs-container nav-golden" id="credit-card">
                                                <!-- bootstrap start -->
                                                <div class="container-fluid space-0">   <!-- bootstrap fluid container -->
                                                    <!-- bootstrap columns -->
                                                    <div class="col-sm-3 col-md-2 clearfix space-0" style="min-height: 407px; background: rgba(159, 145, 100, 0.84);">
                                                        <h4 class="nav-title">Cards</h4>
                                                        <!-- vertical tab -->
                                                        <div class="vertical-tabs">
                                                            <!-- active --> <!-- hidden-xs,sm,md-lg id bootstrap classes -->
                                                            <a class="" href="#CreditCards">Credit Cards <i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#DebitCards">Debit Cards<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9 col-md-10 space-0" style="background: rgb(251, 247, 223);">
                                                        <!-- vertical tabs content container -->
                                                        <div class="vertical-tabs-content-container">
                                                            <!-- this is vertical tabs content 1 -->
                                                            <div id="CreditCards" class="vertical-tabs-content" style="display: block;">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Credit Cards</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
																					<a href="<?php echo base_url();?>credit-cards.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/Credit-Card-Manu-Icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<a class="megamenu_feature_link button-hover" data-text="Find All Credit Cards Here" href="<?php echo base_url();?>credit-cards.html">Find All Credit Cards Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/credit_card1">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card2.png" alt="img">
                                                                                                <p title="6 Best Credit Card Bonuses Available Today" class="item-title">6 Best Credit Card Bonuses Available Today</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/credit_card2">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card1.png" alt="img">
                                                                                                <p title="Authorization, Clearing and Settlement: How Master Card Works" class="item-title">Authorization, Clearing and Settlement.....</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/credit_card3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/credit_card_menu.png" alt="img">
                                                                                                <p title="The Basics About MasterCard’s Excessive Chargeback Program That You Absolutely HAVE To Know" class="item-title">The Basics About MasterCard’s Excessive...</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/credit_card3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/credit_card_menu.png" alt="img">
                                                                                                <p title="The Basics About MasterCard’s Excessive Chargeback Program That You Absolutely HAVE To Know" class="item-title">The Basics About MasterCard’s Excessive...</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="DebitCards" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Debit Cards</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
																					<a href="<?php echo base_url(); ?>debit-cards.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/Debit-Card-Icon-2.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<a class="megamenu_feature_link button-hover" data-text="Find All Debit Cards Here" href="<?php echo base_url(); ?>debit-cards.html">Find All Debit Cards Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/debit_card1">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/debit_card1.png" alt="img">
                                                                                                <p title="The Basics of Your Debit Card" class="item-title">The Basics of Your Debit Card</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/debit_card2">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/debit_card2.png" alt="img">
                                                                                                <p title="What Is a Debit Card and How Is It Used?" class="item-title">What Is a Debit Card and How Is It Used?</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/debit_card3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/debit_card3.png" alt="img">
                                                                                                <p title="Chip Debit Cards: What You Need to Know" class="item-title">Chip Debit Cards: What You Need to Know</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/debit_card3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/debit_card3.png" alt="img">
                                                                                                <p title="Chip Debit Cards: What You Need to Know" class="item-title">Chip Debit Cards: What You Need to Know</p>

                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- bootstrap end -->
                                            </div>
                                        </div>
                                    </li>


                                    <li><a href="#">Loans <i class="fa fa-caret-down fa-indicator"></i> </a>
                                        <!-- drop down full width -->
                                        <!-- For cards drop down -->
                                        <div class="drop-down-large" style="display: none;">
                                            <!-- vertical tabs container -->
                                            <div class="vertical-tabs-container nav-skyblue" id="">
                                                <!-- bootstrap start -->
                                                <div class="container-fluid space-0">   <!-- bootstrap fluid container -->
                                                    <!-- bootstrap columns -->
                                                    <div class="col-sm-3 col-md-2 clearfix space-0" style="background: #7eb0c5; min-height: 400px;">
                                                        <h4 class="nav-title">Loans</h4>
                                                        <!-- vertical tab -->
                                                        <div class="vertical-tabs">
                                                            <!-- active --> <!-- hidden-xs,sm,md-lg id bootstrap classes -->
                                                            <a class="" href="#HomeLoan">Home Loan<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#PersonalLoan">Personal Loan<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#AutoLoan">Auto Loan<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#EducationLoan">Education Loan<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9 col-md-10 space-0" style="background: rgb(227, 244, 253);">
                                                        <!-- vertical tabs content container -->
                                                        <div class="vertical-tabs-content-container">
                                                            <!-- this is vertical tabs content 1 -->
                                                            <div id="HomeLoan" class="vertical-tabs-content" style="display: block;">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Home Loan</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url(); ?>home-loan.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/Home-Loan-manu-Icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<!--<p class="text-right">
																								<span class="focus-text">Home Loan</span> is given by a bank or other financial institution for the purchase of residence. In home loan, the owner of the property transfers the title to the lender on the condition that the title will be transferred back to the owner once the payment has been made.
																							</p>-->

																							<a class="megamenu_feature_link button-hover" data-text="Find All Home Loan Here"  href="<?php echo base_url(); ?>home-loan.html">Find All Home Loan Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <!--<div class="col-sm-8 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <img class="item-image thumbnail" src="<?php /*echo base_url(); */?>resource/front_end/images/mashmenu/loan/home_loan.png" alt="img">
                                                                                                <p title="Nearly half of mortgage borrowers don’t shop around when they buy a home" class="item-title">Nearly half of mortgage borrowers don’t shop...</p>
                                                                                                <p>
                                                                                                    Buying a home is a big purchase, but it’s just that: a purchase. When it comes to spending money on our daily expenses, we have lots of options to help us find...
                                                                                                </p>

                                                                                                <a href="<?php /*echo base_url(); */?>/blog/home_loan1">Read More</a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-4 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <img class="item-image thumbnail" src="<?php /*echo base_url(); */?>resource/front_end/images/mashmenu/loan/home_loan2.png" alt="img">
                                                                                                <p title="Understanding the mortgage process: Your home loan toolkit" class="item-title">Understanding the mortgage process: Your home...</p>
                                                                                                <p>
                                                                                                    The Know Before You Owe mortgage disclosure rule makes getting a mortgage easier for homebuyers and refinancers. It helps you shop for the loan that’s...
                                                                                                </p>

                                                                                                <a href="<?php /*echo base_url(); */?>/blog/home_loan2">Read More</a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-4 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <img class="item-image thumbnail" src="<?php /*echo base_url(); */?>resource/front_end/images/mashmenu/loan/home_loan3.png" alt="img">
                                                                                                <p class="item-title">Fannie Mae Homepath Program</p>
                                                                                                <p>
                                                                                                    Fannie Mae Homepath Program is now The Home Ready™ Mortgage Buying a home is a scary experience, especially when you are on a budget and trying to...
                                                                                                </p>

                                                                                                <a href="#">Read More</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>-->

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item" style="padding-bottom: 10px;">
                                                                                                <a href="<?php echo base_url();?>/blog/home_loan1">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/home_loan.png" alt="img">
                                                                                                    <p title="Nearly half of mortgage borrowers don’t shop around when they buy a home" class="item-title" style="margin: 0; font-weight: 400 !important; font-style: normal !important; text-align: left !important;">Nearly half of mortgage...</p>
                                                                                                    <!--<p>
                                                                                                        Buying a home is a big purchase, but it’s just that: a purchase. When it comes to spending money on our daily expenses, we have lots of options to help us find...
                                                                                                    </p>-->

                                                                                                    <!--<a href="<?php /*echo base_url(); */?>/blog/home_loan1">Read More</a>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>/blog/home_loan2">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/home_loan2.png" alt="img">
                                                                                                    <p title="Understanding the mortgage process: Your home loan toolkit" class="item-title" style="margin: 0; font-weight: 400 !important; font-style: normal !important; text-align: left !important;">Understanding mortgage...</p>
                                                                                                    <!--<p>
                                                                                                        The Know Before You Owe mortgage disclosure rule makes getting a mortgage easier for homebuyers and refinancers. It helps you shop for the loan that’s...
                                                                                                    </p>-->

                                                                                                    <!--<a href="<?php /*echo base_url(); */?>/blog/home_loan2">Read More</a>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>/blog/home_loan2">
                                                                                                    <img class="item-image thumbnail" style="width: 195px; height: auto; padding: 0;" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/home_loan2.png" alt="img">
                                                                                                    <p title="Understanding the mortgage process: Your home loan toolkit" class="item-title" style="margin: 0; font-weight: 400 !important; font-style: normal !important; text-align: left !important;">Understanding mortgage...</p>
                                                                                                    <!--<p>
                                                                                                        The Know Before You Owe mortgage disclosure rule makes getting a mortgage easier for homebuyers and refinancers. It helps you shop for the loan that’s...
                                                                                                    </p>-->

                                                                                                    <!--<a href="<?php /*echo base_url(); */?>/blog/home_loan2">Read More</a>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item bRight padding-top-13">
                                                                                                <a href="<?php /*echo base_url(); */?>/blog/home_loan2">
                                                                                                    <img class="item-image thumbnail" style="width: 195px; height: auto; padding: 0;" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/home_loan2.png" alt="img">
                                                                                                    <p title="Understanding the mortgage process: Your home loan toolkit" class="item-title" style="margin: 0; font-weight: 400 !important; font-style: normal !important; text-align: left !important;">Understanding mortgage...</p>
                                                                                                    <!--<p>
                                                                                                        The Know Before You Owe mortgage disclosure rule makes getting a mortgage easier for homebuyers and refinancers. It helps you shop for the loan that’s...
                                                                                                    </p>-->

                                                                                                    <!--<a href="<?php /*echo base_url(); */?>/blog/home_loan2">Read More</a>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <!--span class="help-topic">Fin</span><br-->
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>
                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="PersonalLoan" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Personal Loan</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">

                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url(); ?>personal-loan.html">
                                                                                        <div class="features">
                                                                                            <img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/Personal-loan-menu-icon.png" alt="img" class="thumbnail">
                                                                                            <div class="clearfix"></div>
                                                                                            <!--<p class="text-right">
                                                                                                <span class="focus-text">Home Loan</span> is given by a bank or other financial institution for the purchase of residence. In home loan, the owner of the property transfers the title to the lender on the condition that the title will be transferred back to the owner once the payment has been made.
                                                                                            </p>-->

                                                                                            <a class="megamenu_feature_link button-hover" data-text="Find All Personal Loan Here" href="<?php echo base_url();?>personal-loan.html">Find All Personal Loan Here</a>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/personal_loan1">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/personal_loan1.png" alt="img">
                                                                                                    <p class="item-title">Six Reasons to Get a Personal Loan</p>
                                                                                                    <!--<p>
                                                                                                        While it would be great if we all had enough money to fund all of life’s expenses without worry, we know that’s not the case. Sometimes we have to borrow a little to keep moving forward, and that’s when a personal loan can be a good solution...
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/personal_loan2">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/personal_loan2.png" alt="img">
                                                                                                    <p class="item-title">How to Get an Unsecured Personal Loan</p>
                                                                                                    <!--<p>
                                                                                                        If you want to finance an adoption, consolidate your credit card debt or move cross-country, a personal loan can help you cover your immediate expenses without breaking the bank. You can get these loans, typically unsecured,...
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                        <hr style="border-top: 1px solid #ddd; margin:0;">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/personal_loan3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/personal_loan3.png" alt="img">
                                                                                                    <p class="item-title">What to watch out for with personal loans</p>
                                                                                                    <!--<p>
                                                                                                        If you ignore the fine print in your personal loan agreement, you could find out the hard way that you agreed to less-than-desirable terms. Look for these gotchas before signing your contract:.....
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/personal_loan3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/personal_loan3.png" alt="img">
                                                                                                    <p class="item-title">What to watch out for with personal loans</p>
                                                                                                    <!--<p>
                                                                                                        If you ignore the fine print in your personal loan agreement, you could find out the hard way that you agreed to less-than-desirable terms. Look for these gotchas before signing your contract:.....
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <!--span class="help-topic">Fin</span><br-->
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="AutoLoan" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Auto Loan</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>auto-loan.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/Auto-Loan-menu-icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<!--<p class="text-right">
																								 A <span class="focus-text">Auto Loan</span> in which the borrower's car title is used as collateral. The borrower must be the lien holder (i.e. own the car outright). Before the loan is repaid, the lender will be the title holder of that car and after repaying, the title will be transferred back to the borrower.
																							</p>-->

																							<a class="megamenu_feature_link button-hover" data-text="Find All Car Loan Here" href="<?php echo base_url();?>auto-loan.html">Find All Car Loan Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/auto_loan1">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/auto_loan1.png" alt="img">
                                                                                                    <p title="Buying a New Car – How to Research for What You Really Want" class="item-title">Buying a New Car – How to Research for What You...</p>
                                                                                                    <!--<p>
                                                                                                        Technology has come a long way... over the years, taking even shopping for the car you want to a level beyond what it was just a decade ago. These changes can be rather scary...
                                                                                                    </p>-->

                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/auto_loan2">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/auto_loan2.png" alt="img">
                                                                                                    <p class="item-title">5 Reasons to Have Your Car Loan Ready...</p>
                                                                                                    <!--<p>
                                                                                                        Why go through the trouble of getting a car loan from a bank or credit union, rather than just getting it through the dealership? It’s certainly easier to let the dealership handle the...
                                                                                                    </p>-->

                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/auto_loan3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/auto_loan3.png" alt="img">
                                                                                                    <p class="item-title">Questions to Ask When Leasing a New Car</p>
                                                                                                    <!--<p>
                                                                                                        Leasing a new car is a serious financial commitment that should not be undergone without carefully weighing the pros and cons. While some people advise against leasing a...
                                                                                                    </p>-->

                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item bRight padding-top-13">
                                                                                                <a href="<?php echo base_url();?>blog/auto_loan3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/auto_loan3.png" alt="img">
                                                                                                    <p class="item-title">Questions to Ask When Leasing a New Car</p>
                                                                                                    <!--<p>
                                                                                                        Leasing a new car is a serious financial commitment that should not be undergone without carefully weighing the pros and cons. While some people advise against leasing a...
                                                                                                    </p>-->

                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <!--span class="help-topic">Fin</span><br-->
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="EducationLoan" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Education Loan</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>education-loan.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/Edu-Laon-Menu-icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<!--<p class="text-right">
																							   In <span class="focus-text">Education Loan,</span> money borrowed to finance education or school related expenses. Payments are often deferred while in school and repaid after graduation.
																							</p>-->

																							<a class="megamenu_feature_link button-hover" data-text="Find All Education Loan Here" href="<?php echo base_url();?>education-loan.html">Find All Education Loan Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/education_loan1">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/education_loan1.png" alt="img">
                                                                                                    <p class="item-title">International Student Loans</p>
                                                                                                   <!-- <p>
                                                                                                        The International Student Loan Center provides international students and study abroad students with access to a range of loan products to help fund...
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/education_loan2">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/education_loan2.png" alt="img">
                                                                                                    <p class="item-title">How to Compare Student Loan Options</p>
                                                                                                    <!--<p>
                                                                                                        Have you already checked out our International Student Loan Comparison Tool, but realized that you weren’t exactly sure how to...
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/education_loan3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/education_loan3.png" alt="img">
                                                                                                    <p class="item-title">What International Student Loan is Right for Me?</p>
                                                                                                    <!--<p>
                                                                                                        When choosing an international student loan, there are several questions you need to take into consideration...
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item bRight padding-top-13">
                                                                                                <a href="<?php echo base_url(); ?>blog/education_loan3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/education_loan3.png" alt="img">
                                                                                                <p class="item-title">What International Student Loan is Right for Me?</p>
                                                                                                <!--<p>
                                                                                                    When choosing an international student loan, there are several questions you need to take into consideration...
                                                                                                </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <!--span class="help-topic">Fin</span><br-->
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/loan/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- bootstrap end -->
                                            </div>
                                        </div>
                                    </li>

                                    <li><a href="#">Investments<i class="fa fa-caret-down fa-indicator"></i> </a>
                                        <!-- drop down full width -->
                                        <!-- For cards drop down -->
                                        <div class="drop-down-large" style="display: none;">
                                            <!-- vertical tabs container -->
                                            <div class="vertical-tabs-container nav-green" id="">
                                                <!-- bootstrap start -->
                                                <div class="container-fluid space-0">   <!-- bootstrap fluid container -->
                                                    <!-- bootstrap columns -->
                                                    <div class="col-sm-3 col-md-2 clearfix space-0" style="background: #9bb176; min-height:400px;">
                                                        <h4 class="nav-title">Investments</h4>
                                                        <!-- vertical tab -->
                                                        <div class="vertical-tabs">
                                                            <!-- active --> <!-- hidden-xs,sm,md-lg id bootstrap classes -->
                                                            <a class="" href="#FDR">FDR<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#DPS">DPS<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#Millionaire">Lakhpoti & Millionaire Scheme<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#MultiBenefit">Money Maximizer<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>

                                                            <a href="#PeriodicBenefit">Monthly Benefit Scheme<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                                        
															<a href="#Accounts">All Accounts<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
														</div>
                                                    </div>

                                                    <div class="col-sm-9 col-md-10 space-0" style="background: #e7f2d7;">
                                                        <!-- vertical tabs content container -->
                                                        <div class="vertical-tabs-content-container">
                                                            <!-- this is vertical tabs content 1 -->
                                                            <div id="FDR" class="vertical-tabs-content" style="display: block;">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">FDR</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>fdr.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/FDR-Menu-Icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<!--<p class="text-right">
																							   The term <span class="focus-text">Fixed Deposit Account</span>  refers to a type of savings account or certificate of deposit where deposits are made for a specified period of time and that pay out a fixed rate of interest.
																							</p>-->

																							<a class="megamenu_feature_link button-hover" data-text="Find All FDR Here" href="<?php echo base_url();?>fdr.html">Find All FDR Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/investment/fdr1">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/fdr1.png" alt="img">
                                                                                                    <p title="Four Reasons Why You Didn't Get the Best Fixed Deposit Rate From Your Bank" class="item-title">Four Reasons Why You Didn't Get the Best Fixed Deposit...</p>
                                                                                                    <!--<p>
                                                                                                        Fixed Deposits lately come with advertisements of super high, attractive interest rates but many people eagerly sign up only to find they didn't get the rate thought they...
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/investment/fdr2">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/fdr2.png" alt="img">
                                                                                                    <p title="Fixed deposit Rates Render Good and Lucrative Rate of return on investment" class="item-title">Fixed deposit Rates Render Good and Lucrative Rate...</p>
                                                                                                    <!--<p>
                                                                                                        Each form investment has a rate of interest associated with it else the investment will be meaningless. The interest rate gives an idea of your earnings...
                                                                                                    </p>-->

                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">

                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/investment/fdr3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/fdr3.png" alt="img">
                                                                                                    <p title="How and Why Do Interest Rates on Fixed Deposits Fluctuate" class="item-title">How and Why Do Interest Rates on Fixed...</p>
                                                                                                    <!--<p>
                                                                                                        For a number of Indians, a Fixed Deposit is the preferred option when it comes to investing. Why? Because Fixed Deposits offer attractive rates of interest,
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">

                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/investment/fdr3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/fdr3.png" alt="img">
                                                                                                    <p title="How and Why Do Interest Rates on Fixed Deposits Fluctuate" class="item-title">How and Why Do Interest Rates on Fixed...</p>
                                                                                                    <!--<p>
                                                                                                        For a number of Indians, a Fixed Deposit is the preferred option when it comes to investing. Why? Because Fixed Deposits offer attractive rates of interest,
                                                                                                    </p>-->
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <!--span class="help-topic">Fin</span><br-->
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="DPS" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">DPS</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>dps.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/DPS-Menu-Icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
                                                                                            <a class="megamenu_feature_link button-hover" href="<?php echo base_url();?>dps.html">Find All DPS Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/dps1">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/dps1.png" alt="img">
                                                                                                    <p class="item-title">DEPOSIT DISPUTES REACH RECORD HIGH</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/dps2">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/dps2.png" alt="img">
                                                                                                    <p class="item-title">What is different about the tenancy deposit schemes?</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/dps3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/dps3.png" alt="img">
                                                                                                    <p class="item-title">The DPS Insured Scheme</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url();?>blog/dps3">
                                                                                                    <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/dps3.png" alt="img">
                                                                                                    <p class="item-title">The DPS Insured Scheme</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="Millionaire" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Lakhpoti & Millionaire Scheme</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>millionaire.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/Lakhpoti-&-Millionaire-manu-icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<a class="megamenu_feature_link button-hover"  data-text="Find All Lakhpoti & Millionaire Scheme Here" href="<?php echo base_url();?>millionaire.html">Find All Lakhpoti & Millionaire Scheme Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/millionaire1">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/millionaire1.png" alt="img">
                                                                                                <p class="item-title">Apply Fixed Deposit | Compare FD Calculator</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/millionaire2">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/millionaire2.png" alt="img">
                                                                                                <p class="item-title">Best Bank Account Interest Rates</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/millionaire3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/millionaire3.png" alt="img">
                                                                                                <p class="item-title">How to Deposit Cash at an Online-Only Bank</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/millionaire3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/millionaire3.png" alt="img">
                                                                                                <p class="item-title">How to Deposit Cash at an Online-Only Bank</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="MultiBenefit" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Money Maximizer</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>money-maximizer.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/Money-Maximizer-Manu-Icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<a class="megamenu_feature_link land_modal button-hover" data-text="Find All Money Maximizer Scheme Here" href="<?php echo base_url();?>money-maximizer.html">Find All Money Maximizer Scheme Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/money-maximizer1">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/moneymax1.png" alt="img">
                                                                                                <p class="item-title">Money Multiplier Plan</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/money-maximizer2">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/moneymax2.png" alt="img">
                                                                                                <p title="How beneficial is it to invest in the ICICI Money Multiplier scheme with the Auto Sweep option?" class="item-title">How beneficial is it to invest in the ICICI Money...</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/money-maximizer3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/moneymax3.png" alt="img">
                                                                                                <p class="item-title">How to Open a Money Market Account</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="<?php echo base_url(); ?>blog/money-maximizer3">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/moneymax3.png" alt="img">
                                                                                                <p class="item-title">How to Open a Money Market Account</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>

                                                            <div id="PeriodicBenefit" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Monthly Benefit Scheme</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url();?>monthly-benefit.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/Monthly-Benefit-Scheme-menu-icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<a class="megamenu_feature_link land_modal button-hover" data-text="Find All Monthly Benefit Scheme"  href="<?php echo base_url();?>monthly-benefit.html">Find All Monthly Benefit Scheme</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card2.png" alt="img">
                                                                                                <p title="Heading" class="item-title">Heading</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card1.png" alt="img">
                                                                                                <p title="Heading" class="item-title">Heading</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card1.png" alt="img">
                                                                                                <p title="Heading" class="item-title">Heading</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/card1.png" alt="img">
                                                                                                <p title="Heading" class="item-title">Heading</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>
															
															<!-- Account menu START -->
															<div id="Accounts" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">

                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">All Accounts</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-4 col-xs-12">
                                                                                    <a href="<?php echo base_url(); ?>savings-account.html">
																						<div class="features2">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/Saving-Acc-Menu-Icon.jpg" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<p class="text-right">
																							<span class="focus-text">Saving Account</span>  is an interest-bearing deposit account held at a bank or another financial institution that provides ...
                                                                                            </p>
																							<a class="megamenu_feature_link" href="<?php echo base_url(); ?>savings-account.html">Find All Saving Account Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-4 col-xs-12">
                                                                                    <a href="<?php echo base_url(); ?>current-account.html">
																						<div class="features2">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/CurrentAccMenuIcon.jpg" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<p class="text-right">
                                                                                               <span class="focus-text">Current Account</span> is made with Bank or financial institution that permits the withdrawal of funds and allows checks to be ...
                                                                                            </p>

																							<a class="megamenu_feature_link" href="<?php echo base_url(); ?>current-account.html">Find All Current Account Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-4 col-xs-12">
                                                                                    <a href="<?php echo base_url(); ?>snd.html">
																						<div class="features2">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/SND-Menu-Icon.jpg" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<p class="text-right">
																								<span class="focus-text">SND Account</span> is an interest bearing deposit where advance notice of 7 to 30 days required for amount withdrawal.
																							</p>

																							<a class="megamenu_feature_link" href="<?php echo base_url(); ?>snd.html">Find All SND Account Here</a>
																						</div>
																					</a>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>

                                                                                        <span class="help-focus">Fin Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/investment/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>
															<!-- Account menu END -->
														</div>
                                                    </div>
                                                </div>
                                                <!-- bootstrap end -->
                                            </div>
                                        </div>
                                    </li>
									<!-- How to menu details -->
									<li><a href="#">How To<i class="fa fa-caret-down fa-indicator"></i> </a>
                                        <!-- full size drop down -->
                                        <!-- For cards drop down -->
                                        <div class="drop-down-large" style="display: none;">
                                            <!-- vertical tabs container -->
                                            <div class="vertical-tabs-container nav-gray" id="credit-card">
                                                <!-- bootstrap start -->
                                                <div class="container-fluid space-0">   <!-- bootstrap fluid container -->
                                                    <!-- bootstrap columns -->
                                                    <div class="col-sm-3 col-md-2 clearfix space-0" style="background: rgba(158,158,158,1); min-height:407px;">
                                                        <h4 class="nav-title">How To</h4>
                                                        <!-- vertical tab -->
                                                        <div class="vertical-tabs">
                                                            <!-- active --> <!-- hidden-xs,sm,md-lg id bootstrap classes -->
                                                            <a class="" href="#Export">Export &amp; Import<i class="fa fa-angle-right hidden-xs"></i> <i class="fa fa-angle-down hidden-sm hidden-md hidden-lg"></i> </a>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-9 col-md-10 space-0">
                                                        <!-- vertical tabs content container -->
                                                        <div class="vertical-tabs-content-container">
                                                            <!-- this is vertical tabs content 1 -->
                                                            <div id="Export" class="vertical-tabs-content">
                                                                <!-- bootstrap start -->
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-9">
                                                                            <p class="MegaMenu_title">Export &amp; Import</p>
                                                                            <hr class="menu-border-top">

                                                                            <div class="row">
                                                                                <div class="col-sm-7 col-xs-12">
                                                                                    <a href="<?php echo base_url(); ?>export-import.html">
																						<div class="features">
																							<img class="pull-right" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/export/Export-Import-Menu-Icon.png" alt="img" class="thumbnail">
																							<div class="clearfix"></div>
																							<a class="megamenu_feature_link button-hover" data-text="Find All Export &amp; Import Here" href="<?php echo base_url(); ?>export-import.html">Find All Export &amp; Import Here</a>
																						</div>
																					</a>
                                                                                </div>

                                                                                <div class="col-sm-5 col-xs-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6 col-xs-12 bRight">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/export/export1.png" alt="img">
                                                                                                <p title="INTERNATIONAL TRADE LEAD AND BUSINESS SERVICE" class="item-title">INTERNATIONAL TRADE LEAD AND BUSINESS SERVICE</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/export/export2.png" alt="img">
                                                                                                <p title="IMPORT FROM CHINA" class="item-title">IMPORT FROM CHINA</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <hr style="border-top: 1px solid #ddd; margin:0;">

                                                                                    <div class="row">

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/export/export3.png" alt="img">                                                                                                

                                                                                                <p title="START YOUR OWN EXPORT IMPORT BUSINESS" class="item-title">START YOUR OWN EXPORT IMPORT BUSINESS</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-sm-6 col-xs-12 bRight padding-top-13">
                                                                                            <div class="menu-item">
                                                                                                <a href="#">
                                                                                                <img class="item-image thumbnail" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/export/export3.png" alt="img">

                                                                                                <p title="START YOUR OWN EXPORT IMPORT BUSINESS" class="item-title">START YOUR OWN EXPORT IMPORT BUSINESS</p>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <hr class="menu-border-bottom">
                                                                        </div>

                                                                        <div class="col-sm-3">

                                                                            <div class="help-text">
                                                                                <a href="#">
                                                                                    <p>
                                                                                        <span class="help-normal">Get Help From</span><br>
                                                                                        <span class="help-topic">Export &amp; Import</span><br>
                                                                                        <span class="help-focus">Guru</span>
                                                                                    </p>
                                                                                </a>

                                                                            </div>

                                                                            <img class="support-bg" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/export/B4.png" alt="img">
                                                                        </div>
                                                                        <img class="support-image" src="<?php echo base_url(); ?>resource/front_end/images/mashmenu/guru-bg.png" alt="img">
                                                                    </div>

                                                                </div>

                                                                <!-- bootstrap end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- bootstrap end -->
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>all-bank-details.html">Bank Info </a></li>
                                </ul>
                            </section>
                        </nav>

                    </div>
                </div>

            </div>
            <div class="text-center">
                <img class="hr-bar" src="<?php echo base_url();?>resource/front_end/images/hr-bar.png" alt="Horizontal Line" />
            </div>
        </div>
    </section>