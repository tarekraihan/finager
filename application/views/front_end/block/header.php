<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Finager.com help them to take financial decisions intheir every day life.">
    <meta name="keywords" content="Loan,homeLoan,PersonalLoan,Bank,Investment,CreditCard,DebitCard,FDR,DPS,AutoLoan,EducationLoan,,Bangladesh">
    <meta name="author" content="Finager">
    <title>Welcome to finager</title>
    <link rel="icon" href="<?php echo base_url();?>resource/front_end/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/material_theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/front_end/css/frontCard.css" />
	<script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>
    <script src="<?php echo base_url();?>resource/front_end/js/function_script.js"></script>
	<script src="<?php echo base_url();?>resource/front_end/js/codex-fly.js"></script>	<script src="<?php echo base_url();?>resource/front_end/js/booNavigation.js"></script>

    <script type="text/javascript">
        // searching text effect START
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            else if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = false;
                this.hide();
                this.loopNum++;
                delta = 500;
            }
            /*else if (this.isDeleting && this.txt === '') {
             this.isDeleting = false;
             }*/

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
        // searching text effect START

    </script>
    <!-- add card compare ends-->
    <!-- add card compare ends-->

    <style>
        #loading{z-index: 100}
    </style>


</head>
<body>