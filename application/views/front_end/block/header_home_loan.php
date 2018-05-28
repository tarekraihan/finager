<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv='cache-control' content='public'>
    <meta http-equiv='expires' content='<?php echo date('D M j Y G:i:s', strtotime('+2 months'));?>'>
    <meta http-equiv='robots' content='all'>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="<?php echo (isset($description) && !empty($description)) ? $description : 'Finager.com help them to take financial decisions in their everyday life.' ; ?>">
    <meta name="keywords" content="<?php echo (isset($keywords) && !empty($keywords)) ? $keywords : 'Loan, home Loan,Personal Loan, Bank, Investment, Credit Card, Debit Card, FDR, DPS, Auto Loan, Education Loan,Get Credit Card,  Bangladesh, Money Market' ; ?>">
    <meta name="author" content="Finager Developer">
    <title><?php if(isset($title) && !empty($title)){echo $title;}else { echo "Welcome to Finager"; } ?></title>
    <!-- <link rel="icon" href="<?php echo base_url();?>resource/front_end/images/favicon.ico"> -->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>resource/front_end/images/Fin-Fab.png">
    <script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>
    <script src="<?php echo base_url();?>resource/front_end/js/function_script.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/font-awesome.min.css" /-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquerysctipttop.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/clientlib.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/stylecal.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquery.ui.slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/material_theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/jquery-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/style.css" />
    <script src="<?php echo base_url();?>resource/front_end/js/codex-fly.js"></script>
    <style type="text/css">

        .savingsContainer .leftCont {
            padding: 0 0 0 0;
        }

        .calcSection .dragBox .drag {
            width: 200px;
        }

        .calcSection .dragBox .next {
            right: 103px;
        }

        .calcSection .dragBox .drag2 {
            width: 201px;
        }

        .monthWrap .calcSection .dragBox {
            width: 215px;
        }

        .calcSection .dragBox .slideImg {
            width: 210px;
        }

        .monthWrap .calcSection .dragBox .slideImg {
            width: 207px;
        }
        .calcSection .dragBox .drag span {
            background: none;
        }
        .card_details_pronsCons {
            margin-top:0;
            border-bottom:0;
        }

        .tPaybleAmount{
            font-size:9px;
            font-style: italic;
        }

        .collapse.in {
            display: block !important;
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 10px !important;
        }

        .home_loan_logo{
            border:1px solid #EAEAEC;
        }
        .home_loan_bank_name{
            text-align: center;
            font-weight: 700;
            display: block;
            margin-top: 5px;

        }
        .home_loan_bank_name a{
            text-decoration: none;
            color: #000000;
        }
        #loading{z-index: 100}
    </style>
</head>
<body>