<!DOCTYPE html><html lang="en"><head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">    <title>Finager</title>    <link rel="stylesheet" href="<?php echo base_url();?>banner/css/bootstrap.min.css">    <link rel="stylesheet" href="<?php echo base_url();?>banner/css/jquery.scrollbar.css">    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">    <link href="<?php echo base_url();?>banner/css/style.css" rel="stylesheet"></head><body><div class="container-fluid">    <div class="row">        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">            <div class="logo-section">                <img class="logo img-responsive" src="<?php echo base_url();?>banner/images/logo.png">            </div>            <img class="greeting-img img-responsive" src="<?php echo base_url();?>banner/images/greeting.png">        </div>        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">            <img class="sorry-img" src="<?php echo base_url();?>banner/images/Sorry.gif">            <p class="sorry-text">                Our servers are under maintenance. We are doing our best to come back faster than the <span>"Speed of Light"</span>.Site will be available again on <span>1st May 2017, at 10 pm. </span> <br>                Please feel free to mail us for the latest updates.											<span class="info">						</br>                            info@finager.com</br>                            <span class="team"> Developer Team</span>						</span>            </p>        </div>    </div></div><div style="width: 150px; position: fixed; bottom:0; right: 0; margin-right: 15px; margin-bottom: 15px;">    <form class="form-signin" action="<?php echo base_url();?>en/login" method="post">        <input type="text" class="form-control" name="txtEmail" placeholder="User Name"  /><br/>        <input type="password" class="form-control" name="txtPassword" placeholder="Password" /><br/>        <button class="btn  btn-primary btn-sm" type="submit">Login</button>    </form></div><script src="<?php echo base_url();?>banner/js/jquery.min.js"></script><script src="<?php echo base_url();?>banner/js/jquery.scrollbar.js"></script><script src="<?php echo base_url();?>banner/js/bootstrap.min.js"></script><script type="text/javascript">    jQuery(document).ready(function(){        jQuery('.scrollbar-macosx').scrollbar();    });</script></body></html>