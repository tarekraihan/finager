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
        document.addEventListener('DOMContentLoaded',function(event){
            // array with texts to type in typewriter
            var dataText = [ "I am looking for..."];

            // type one text in the typwriter
            // keeps calling itself until the text is finished
            function typeWriter(text, i, fnCallback) {
                // chekc if text isn't finished yet
                if (i < (text.length)) {
                    // add next character to h1
                    document.querySelector(".typewrite").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

                    // wait for a while and call this function again for next character
                    setTimeout(function() {
                        typeWriter(text, i + 1, fnCallback)
                    }, 200);
                }
                // text finished, call callback if there is a callback function
                else if (typeof fnCallback == 'function') {
                    // call callback after timeout
                    setTimeout(fnCallback, 100);
                }
            }
            // start a typewriter animation for a text in the dataText array
            function StartTextAnimation(i) {
                if (typeof dataText[i] == 'undefined'){
                    setTimeout(function() {
                        StartTextAnimation(0);
                    }, 1000);
                }
                // check if dataText[i] exists
                if (i < dataText.length) {
                    // text exists! start typewriter animation
                    typeWriter(dataText[i], 0, function(){
                        // after callback (and whole text has been animated), start next text
                        StartTextAnimation(i + 1);
                    });
                }
            }
            // start the text animation
            StartTextAnimation(0);
        });

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    //new TxtType(elements[i], JSON.parse(toRotate), period);
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