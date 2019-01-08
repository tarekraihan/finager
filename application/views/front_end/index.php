<style type="text/css">

#home-page {

/*background-image: url(images/fana.gif);        height: 100%;        width: 100%;        background-size: cover;*/

}

.bg-gif {

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

    margin: 180px 0 !important;

}

#home_search {

    height: 664px;

    width: 100%;

    background-image: url(<?php echo base_url();?>resource/front_end/images/FInBackground.svg);

    /*background-color: #b4bcc8;*/

    background-repeat: no-repeat;

    background-position: center center;

    background-attachment: fixed;

    -webkit-background-size: cover;

    -moz-background-size: cover;

    -o-background-size: cover;

    background-size: cover;

    filter: progid: DXImageTransform.Microsoft.AlphaImageLoader(src='.myBackground.jpg', sizingMethod='scale');

    -ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";

    -moz-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='myBackground.jpg', sizingMethod='scale')";

}

.home-search-section {

position: relative;

}

.home-search-section>p {

    font-size: 25px;

    font-style: italic;

    color: rgb(66, 66, 66);

    font-weight: 600;

    position: absolute;

    left: 0;

    right: 0;

    top: 21px;

    cursor: pointer;

    font-family: 'Lato', sans-serif;

}



h3.fin-about-heading>span {

font-size: 36px;

}

.fin-about-heading {

font-family: 'Courgette', cursive;

font-size: 22px;

}

/*svg*/

.Cicon a {display: block;  }



</style>
<h1 class="sec-tag">Your Financial Manager for Cards, Loans and Investments</h1>
<section id="home_search">

    <div class="header container-fluid">

        <div class="feature-bg">

            <div class="find-bar">

                <img class="logo-lg" src="<?php echo base_url(); ?>resource/front_end/images/finager-logo.png" alt="Finager Promotional Logo" /><br/>

                <div class="home-search-section" data-toggle="modal" data-target="#serchModal" >

                    <img class="search-image" src="<?php echo base_url(); ?>resource/front_end/images/10.png" alt="Search box" />

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

                        <a class="Cicon_a" href="<?php echo base_url(); ?>credit-cards.html">

                            <img class="svg_img" src="<?php /*echo base_url(); */?>resource/front_end/images/categoryIcon/creditcard.png" alt="Credit Card"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/creditcard.svg">

                                Credit Card

                            </object>

                            <p>Credit Card</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>debit-cards.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/DebitCard.png" alt="Debit Card"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/DebitCard.svg">

                                Debit Card <!-- fallback image in CSS -->

                            </object>

                            <p>Debit Card</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>home-loan.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/homeloan.png" alt="Home Loan"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/homeloan.svg">

                                Home Loan

                            </object>

                            <p>Home Loan</p>

                        </a>

                    </div>

                </div>



                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>personal-loan.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/personalloan.png" alt="Personal Loan"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/personalloan.svg">

                                Personal Loan

                            </object>

                            <p>Personal Loan</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>auto-loan.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/buynewcar.png" alt="Auto Loan"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/buynewcar.svg">

                                Auto Loan

                            </object>

                            <p>Auto Loan</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>education-loan.html">

                            <img class="svg_img " src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/educationloan.png" alt="Education Loan"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/educationloan.svg">

                                Education Loan

                            </object>

                            <p>Education Loan</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>fdr.html">

                            <img class="svg_img "  src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/fdr.png" alt="FDR"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/fdr.svg">

                                FDR

                            </object>

                            <p>FDR</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>dps.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/dps.png" alt="DPS"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/dps.svg">

                                DPS

                            </object>

                            <p>DPS</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="Cicon_a" href="<?php echo base_url(); ?>millionaire.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/loan.png" alt="Lakhpoti & Millionaire Scheme"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/loan.svg">

                                Lakhpoti & Millionaire Scheme

                            </object>

                            <p>Lakhpoti & Millionaire Scheme</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="land_modal Cicon_a" href="<?php echo base_url();?>currency-rates.html">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/moneymarket.png" alt="Currency Rates"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/moneymarket.svg">

                                Currency Rates

                            </object>

                            <p>Currency Rates</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="land_modal Cicon_a" data-toggle="modal" data-target=".bs-example-modal-lg">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/bankmap.png" alt="bank map"/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/bankmap.svg">

                                Bank Map

                            </object>

                            <p>Bank Map</p>

                        </a>

                    </div>

                </div>

                <div class="col-xs-6 col-sm-2">

                    <div class="Cicon">

                        <a class="land_modal Cicon_a" data-toggle="modal" data-target=".bs-example-modal-lg">

                            <img class="svg_img" src="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/more.png" alt=""/>

                            <object class="svg_icon hidden" type="image/svg+xml" data="<?php echo base_url(); ?>resource/front_end/images/categoryIcon/more.svg">

                                More

                            </object>

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

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="header_paragrph">

               <h1 class="text-center">Today's Currency Exchange Rate</h1>
               <p class="text-center">Information Provided by Bangladesh Bank</p>

               <div class="m-t-30">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs currency-tab row" role="tablist">
                        <li role="presentation" class="active col-sm-6 col-xs-12">
                            <a id="rate-sel" href="#Sell" aria-controls="Sell" role="tab" data-toggle="tab"><!-- <i class="fa fa-handshake-o" aria-hidden="true"></i> --> Today's Currency Sell Rate</a>
                        </li>
                        <li role="presentation" class="col-sm-6 col-xs-12">
                            <a id="rate-buy" href="#Buy" aria-controls="Buy" role="tab" data-toggle="tab">Today's Currency Buy Rate</a>
                        </li>

                    </ul>

                    <!--div class="currency-update"><small>Last Update: 12/12/2018</small></div-->

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Sell">
                            <div class="row rate-focus" id="rate-focus-sell">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>USD</label>
                                        <div class="flag USD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['USD']){
                                                    echo number_format($currency_exchange['USD'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['USD'][0]->central_bank_buy_rate > $currency_exchange['USD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['USD'][0]->central_bank_buy_rate == $currency_exchange['USD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['USD'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>EUR</label>
                                        <div class="flag EUR"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['EUR']){
                                                    echo number_format($currency_exchange['EUR'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['EUR'][0]->central_bank_buy_rate > $currency_exchange['EUR'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['EUR'][0]->central_bank_buy_rate == $currency_exchange['EUR'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['EUR'][1]->central_bank_buy_rate, 2); ?></p>     
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>GBP</label>
                                        <div class="flag GBP"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['GBP']){
                                                    echo number_format($currency_exchange['GBP'][0]->central_bank_buy_rate, 2);
                                                }

                                                if( $currency_exchange['GBP'][0]->central_bank_buy_rate > $currency_exchange['GBP'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['GBP'][0]->central_bank_buy_rate == $currency_exchange['GBP'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                            
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['GBP'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>JPY</label>
                                        <div class="flag YEN"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['JPY']){
                                                    echo number_format($currency_exchange['JPY'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['JPY'][0]->central_bank_buy_rate > $currency_exchange['JPY'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['JPY'][0]->central_bank_buy_rate == $currency_exchange['JPY'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['JPY'][1]->central_bank_buy_rate, 2); ?></p>    
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>AUD</label>
                                        <div class="flag AUD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['AUD']){
                                                    echo number_format($currency_exchange['AUD'][0]->central_bank_buy_rate, 2);
                                                }

                                                if( $currency_exchange['AUD'][0]->central_bank_buy_rate > $currency_exchange['AUD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['AUD'][0]->central_bank_buy_rate == $currency_exchange['AUD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['AUD'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>INR</label>
                                        <div class="flag INR"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['INR']){
                                                    echo number_format($currency_exchange['INR'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['INR'][0]->central_bank_buy_rate > $currency_exchange['INR'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['INR'][0]->central_bank_buy_rate == $currency_exchange['INR'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['INR'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>CAD</label>
                                        <div class="flag CAD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['CAD']){
                                                    echo number_format($currency_exchange['CAD'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['CAD'][0]->central_bank_buy_rate > $currency_exchange['CAD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['CAD'][0]->central_bank_buy_rate == $currency_exchange['CAD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['CAD'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>SGD</label>
                                        <div class="flag SGD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['SGD']){
                                                    echo number_format($currency_exchange['SGD'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['SGD'][0]->central_bank_buy_rate > $currency_exchange['SGD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['SGD'][0]->central_bank_buy_rate == $currency_exchange['SGD'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['SGD'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>CNH</label>
                                        <div class="flag CNH"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['CNH']){
                                                    echo number_format($currency_exchange['CNH'][0]->central_bank_buy_rate, 2);
                                                }
                                                if( $currency_exchange['CNH'][0]->central_bank_buy_rate > $currency_exchange['CNH'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['CNH'][0]->central_bank_buy_rate == $currency_exchange['CNH'][1]->central_bank_buy_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['CNH'][1]->central_bank_buy_rate, 2); ?></p>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="Buy">
                            <div class="row rate-focus" id="rate-focus-sell">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>USD</label>
                                        <div class="flag USD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['USD']){
                                                    echo number_format($currency_exchange['USD'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['USD'][0]->central_bank_sell_rate > $currency_exchange['USD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['USD'][0]->central_bank_sell_rate == $currency_exchange['USD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['USD'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>EUR</label>
                                        <div class="flag EUR"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['EUR']){
                                                    echo number_format($currency_exchange['EUR'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['EUR'][0]->central_bank_sell_rate > $currency_exchange['EUR'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['EUR'][0]->central_bank_sell_rate == $currency_exchange['EUR'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['EUR'][1]->central_bank_sell_rate, 2); ?></p>     
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>GBP</label>
                                        <div class="flag GBP"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['GBP']){
                                                    echo number_format($currency_exchange['GBP'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['GBP'][0]->central_bank_sell_rate > $currency_exchange['GBP'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['GBP'][0]->central_bank_sell_rate == $currency_exchange['GBP'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['GBP'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>JPY</label>
                                        <div class="flag YEN"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['JPY']){
                                                    echo number_format($currency_exchange['JPY'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['JPY'][0]->central_bank_sell_rate > $currency_exchange['JPY'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['JPY'][0]->central_bank_sell_rate == $currency_exchange['JPY'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['JPY'][1]->central_bank_sell_rate, 2); ?></p>    
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>AUD</label>
                                        <div class="flag AUD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['AUD']){
                                                    echo number_format($currency_exchange['AUD'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['AUD'][0]->central_bank_sell_rate > $currency_exchange['AUD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['AUD'][0]->central_bank_sell_rate == $currency_exchange['AUD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['AUD'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>INR</label>
                                        <div class="flag INR"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['INR']){
                                                    echo number_format($currency_exchange['INR'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['INR'][0]->central_bank_sell_rate > $currency_exchange['INR'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['INR'][0]->central_bank_sell_rate == $currency_exchange['INR'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['INR'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>CAD</label>
                                        <div class="flag CAD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['CAD']){
                                                    echo number_format($currency_exchange['CAD'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['CAD'][0]->central_bank_sell_rate > $currency_exchange['CAD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['CAD'][0]->central_bank_sell_rate == $currency_exchange['CAD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['CAD'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>SGD</label>
                                        <div class="flag SGD"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['SGD']){
                                                    echo number_format($currency_exchange['SGD'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['SGD'][0]->central_bank_sell_rate > $currency_exchange['SGD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['SGD'][0]->central_bank_sell_rate == $currency_exchange['SGD'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['SGD'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="div-focus">
                                        <label>CNH</label>
                                        <div class="flag CNH"></div>
                                        <h4>
                                            <span>৳</span>
                                            <?php 
                                                if($currency_exchange['CNH']){
                                                    echo number_format($currency_exchange['CNH'][0]->central_bank_sell_rate, 2);
                                                }
                                                if( $currency_exchange['CNH'][0]->central_bank_sell_rate > $currency_exchange['CNH'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-success">
                                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }else if( $currency_exchange['CNH'][0]->central_bank_sell_rate == $currency_exchange['CNH'][1]->central_bank_sell_rate){
                                                    ?>
                                                    <span class="text-warning">
                                                    <img src="<?php echo base_url();?>resource/front_end/fonts/equals.png" width="25" />
                                                    </span>
                                                    <?php 
                                                }else{
                                                    ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                    </span>
                                                    <?php 
                                                }
                                            ?>
                                        </h4>  
                                        <p>Last Day Rate ৳ <?php echo number_format($currency_exchange['CNH'][1]->central_bank_sell_rate, 2); ?></p>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                        <p style="margin-top: -10px;">Last Update: <?php echo date('d/m/Y',strtotime($currency_exchange['INR'][0]->date_of_exchange_rate)) ?></p>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <a href="<?php echo base_url();?>currency-rates.html" class="rate-more-button">Find Bank Exchange Rates Here</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section id="header1">

    <div class="container Aboutcredit_card">

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

            <div class="header_paragrph">

               <h1 class="text-center m-b-40">Upcoming Product</h1>

                <div class="fin-about-text">

                    <img class="img-responsive" src="<?php echo base_url(); ?>resource/front_end/images/Up-Comming-Calculator.jpg" alt="Currency Calculator">

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

                        <div class="req_paragrph">Free Credit Score and Monitoring</div>

                        Get an updated credit score for free each month.

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

                        <div class="req_paragrph">Better Offers via CardMatch</div>

                        See offers matched with your credit profile.

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

                        <div class="req_paragrph">Max Rewards with WallerUp</div>

                        Maximize your rewards, cash back and points earnings.

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

