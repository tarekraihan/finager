<style>
/*-------------------------------*/
/*           VARIABLES           */
/*-------------------------------*/

.hamburger.is-open{
    right: 220px;
}
.nav .open > a { background-color: transparent; }

.nav .open > a:hover { background-color: transparent; }

.nav .open > a:focus { background-color: transparent; }

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    padding-right: 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled { padding-right: 220px; }

#wrapper.toggled #sidebar-wrapper { width: 220px; }

#wrapper.toggled #page-content-wrapper {
    margin-right: 220px;
    position: absolute;
}

#sidebar-wrapper {
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    background: #1a1a1a;
    height: 100%;
    left: 100%;

    margin-left: -220px;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 0px;
    z-index: 1000;
}
#sidebar-wrapper::-webkit-scrollbar {
    display: none;
}

#page-content-wrapper {
<!-- padding-top: 70px; -->
    width: 100%;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/

.sidebar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    width: 220px;
}

.sidebar-nav li {
    display: inline-block;
    line-height: 20px;
    position: relative;
    width: 100%;
}

.sidebar-nav li:before {
    -moz-transition: width 0.2s ease-in;
    -ms-transition: width 0.2s ease-in;
    -webkit-transition: width 0.2s ease-in;
    background-color: #1c1c1c;
    content: '';
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    -webkit-transition: width 0.2s ease-in;
    transition: width 0.2s ease-in;
    width: 3px;
    z-index: -1;
}

.sidebar-nav li:first-child a {
    background-color: #1a1a1a;
    color: #ffffff;
}

.sidebar-nav li:nth-child(2):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(3):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(4):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(5):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(6):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(7):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(8):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(9):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(10):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(11):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(12):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(13):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(14):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(15):before { background-color: #337ab7; }

.sidebar-nav li:nth-child(16):before { background-color: #337ab7; }

.sidebar-nav li:hover:before {
    -webkit-transition: width 0.2s ease-in;
    transition: width 0.2s ease-in;
    width: 100%;
}

.sidebar-nav li a {
    color: #dddddd;
    display: block;
    padding: 10px 15px 10px 30px;
    text-decoration: none;
}

.sidebar-nav li.open:hover before {
    -webkit-transition: width 0.2s ease-in;
    transition: width 0.2s ease-in;
    width: 100%;
}

.sidebar-nav .dropdown-menu {
    background-color: #00597d;
    border-radius: 0;
    border: none;
    box-shadow: none;
    margin: 0;
    padding: 14px 0;
    position: relative;
    width: 100%;
}

.sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
    background-color: transparent;
    color: #ffffff;
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    font-size: 20px;
    height: 65px;
    line-height: 44px;
}

/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
    background: transparent;
    border: none;
    display: block;
    height: 32px;
    margin-right: 25px;
    position: fixed;
    top: 20px;
    width: 32px;
    z-index: 999;
    right: 0;
}

.hamburger:hover { outline: none; }

.hamburger:focus { outline: none; }

.hamburger:active { outline: none; }

.hamburger.is-closed:before {
    -webkit-transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.35s ease-in-out;
    color: #ffffff;
    content: '';
    display: block;
    font-size: 14px;
    line-height: 32px;
    opacity: 0;
    text-align: center;
    width: 100px;
}

.hamburger.is-closed:hover before {
    -webkit-transform: translate3d(-100px, 0, 0);
    -webkit-transition: all 0.35s ease-in-out;
    display: block;
    opacity: 1;
}

.hamburger.is-closed:hover .hamb-top {
    -webkit-transition: all 0.35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-bottom {
    -webkit-transition: all 0.35s ease-in-out;
}

.hamburger.is-closed .hamb-top {
    -webkit-transition: all 0.35s ease-in-out;
    background-color: #000;
    top: 5px;
}

.hamburger.is-closed .hamb-middle {
    background-color: #000;
    margin-top: -2px;
    top: 50%;
}

.hamburger.is-closed .hamb-bottom {
    -webkit-transition: all 0.35s ease-in-out;
    background-color: #000;
    bottom: 5px;
}

.hamburger.is-closed .hamb-top, .hamburger.is-closed .hamb-middle, .hamburger.is-closed .hamb-bottom, .hamburger.is-open .hamb-top, .hamburger.is-open .hamb-middle, .hamburger.is-open .hamb-bottom {
    height: 4px;
    left: 0;
    position: absolute;
    width: 100%;
}

.hamburger.is-open .hamb-top {
    -webkit-transform: rotate(45deg);
    -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
    background-color: #000;
    margin-top: -2px;
    top: 50%;
}

.hamburger.is-open .hamb-middle {
    background-color: #000;
    display: none;
}

.hamburger.is-open .hamb-bottom {
    -webkit-transform: rotate(-45deg);
    -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
    background-color: #000;
    margin-top: -2px;
    top: 50%;
}

.hamburger.is-open:before {
    -webkit-transform: translate3d(0, 0, 0);
    -webkit-transition: all 0.35s ease-in-out;
    color: #ffffff;
    content: '';
    display: block;
    font-size: 14px;
    line-height: 32px;
    opacity: 0;
    text-align: center;
    width: 100px;
}

.hamburger.is-open:hover before {
    -webkit-transform: translate3d(-100px, 0, 0);
    -webkit-transition: all 0.35s ease-in-out;
    display: block;
    opacity: 1;
}

/*-------------------------------*/
/*          Dark Overlay         */
/*-------------------------------*/

.overlay {

}

.margin_left_body{
    margin-right: 220px;
    overflow-x: hidden;
}

</style>

<div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <!-- <li> <a href="#"><i class="fa fa-fw fa-home"></i> Home</a> </li>
            <li> <a href="#"><i class="fa fa-fw fa-folder"></i> Page one</a> </li>
            <li> <a href="#"><i class="fa fa-fw fa-file-o"></i> Second page</a> </li>-->
            <div class="top-menu">
                <ul>
                    <li><a href="#">Loan</a></li>
                    <li><a href="#">Credit Card</a></li>
                    <li><a href="#">Any Purpose Loan</a></li>
                    <li><a href="#">NGO Funding</a></li>
                    <li><a href="#">How to</a></li>
                </ul>
            </div>
            <li> <a href="#"><i></i></a> </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Cards <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?php echo base_url();?>credit-cards.html">Credit Card</a></li>
                    <li><a href="<?php echo base_url(); ?>debit-cards.html">Debit Card</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Loans <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?php echo base_url(); ?>home-loan.html">Home Loan  </a></li>
                    <li><a href="<?php echo base_url();?>personal-loan.html">Personal Loan</a></li>
                    <li><a href="<?php echo base_url();?>auto-loan.html">Auto Loan</a></li>
                    <li><a href="<?php echo base_url();?>education-loan.html">Education Loan</a></li>
                </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i>	Investment <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"></li>
                    <li><a href="<?php echo base_url();?>fdr.html">FDR</a></li>
                    <li><a href="<?php echo base_url();?>dps.html">DPS</a></li>
                    <li><a href="<?php echo base_url();?>millionaire.html">Lakhpoti & Millionaire Scheme </a></li>
                    <li><a href="<?php echo base_url();?>money-maximizer.html">Money Maximizer</a></li>
                    <li><a href="<?php echo base_url();?>monthly-benefit.html">Monthly Benefit Scheme</a></li>
                    <li><a href="<?php echo base_url(); ?>savings-account.html">Saving Account</a></li>
                    <li><a href="<?php echo base_url(); ?>current-account.html">Current Account</a></li>
                    <li><a href="<?php echo base_url(); ?>snd.html">SND Account</a></li>
                </ul>
            </li>
            <li> <a href="<?php echo base_url(); ?>export-import.html"><i></i> Export Import</a> </li>
            <li> <a href="<?php echo base_url(); ?>all-bank-details.html"><i></i> Bank Info</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Calculator/Apps</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Bank Job & Guide </a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Insurance</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Maps</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Gold Rate </a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Money Rate</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Tax Guide</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Blog </a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Events</a> </li>
            <li> <a href="javascript:(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i></i> Forum</a> </li>
            <li> <a href="<?php echo base_url(); ?>about-us.html"><i></i> About Us</a> </li>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>

    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script>
    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        trigger.click(function () {
            hamburger_cross();
        });

        function hamburger_cross() {

            if (isClosed == true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
            $("body").toggleClass("margin_left_body"),1000;
            //$(".container").css('width','80%'),1000;
            //$(".catagory-icon p").css('font-size','10px');
        });
    });
</script>
