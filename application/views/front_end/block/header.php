<!doctype html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108464268-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-108464268-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv='cache-control' content='public'>
    <meta http-equiv='expires' content='<?php echo date('D M j Y G:i:s', strtotime('+2 months'));?>'>
    <meta http-equiv='robots' content='all'>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

    <meta name="description" content="<?php echo (isset($description) && !empty($description)) ? $description : 'Finager.com help them to take financial decisions in their everyday life.' ; ?>">

    <meta name="keywords" content="<?php echo (isset($keywords) && !empty($keywords)) ? $keywords : 'Loan, home Loan,Personal Loan, Bank, Investment, Credit Card, Debit Card, FDR, DPS, Auto Loan, Education Loan,Get Credit Card,  Bangladesh, Money Market' ; ?>">

    <meta name="author" content="Finager Developer">

    <title><?php if(isset($title) && !empty($title)){echo $title;}else { echo "Welcome to Finager"; } ?></title>

    <link rel="icon" type="image/png" href="<?php echo base_url();?>resource/front_end/images/Fin-Fab.png">

    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/font-awesome.min.css" /-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/material_theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/responsive.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/style.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/frontCard.css" />

    <script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>

    <!--  <script src="<?php echo base_url();?>resource/front_end/js/function_script.js"></script> -->

    <script src="<?php echo base_url();?>resource/front_end/js/codex-fly.js"></script>

    <script src="<?php echo base_url();?>resource/front_end/js/booNavigation.js"></script>
    <style>
        #loading{z-index: 100}
    </style>
</head>
<body>