<div class="col-sm-12">
    <div class="footer">
        <div class="text-center">
            <img class="hr-bar" src="<?php echo base_url();?>resource/front_end/images/hr-bar.png" alt="Horizontal Line" />
        </div>
        <div class="col-sm-4 footer-text">
            <p>&copy; 2016 finager.com</p>
        </div>
        <div class="col-sm-4 text-center footer-text">
            <p>Terms & Conditions</p>
        </div>
        <div class="col-sm-4">
            <div class="pull-right">
                <img src="<?php echo base_url();?>resource/front_end/images/fb.png" alt="Facebook" />
                <img src="<?php echo base_url();?>resource/front_end/images/tw.png" alt="Twitter" />
                <img src="<?php echo base_url();?>resource/front_end/images/in.png" alt="Linkedin" />
            </div>
        </div>
    </div>
</div>

</div><!-- main body-->
<script src="<?php echo base_url();?>resource/front_end/js/jquery-1.11.3.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/booNavigation.js"></script>

<script src="<?php echo base_url();?>resource/front_end/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/main.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/modernizr.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/jquery-ui.min.js"></script>



<!-- plus a jQuery UI theme, here I use "flick" -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">

<!--script src="js/jquery-ui-slider-pips.js"></script>
<!-- for chart -->
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/common.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/clientlib.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/jquery.ui.touch-punch.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>resource/front_end/js/personal-loan-calculator.js"></script>
<script>
    $(document).ready(function() {

        $('[data-toggle="toggle"]').change(function(){
            $(this).parents().next('.hide').toggle();
        });
    });
</script>


<script type="text/javascript">


    //for show hide (more info & Repayment Schedule)

    $(document).ready(function() {
        $('#hideDetailsDiv').hide();
        $('a#hideDetailsButton').click(function() {
            if (!$('#hideDetailsDiv').is(':visible')) {
                $('.hideMe').hide(400);
            }
            $('#hideDetailsDiv').toggle(800);
        });
    });

    $(document).ready(function() {
        $('#hideDetailsDiv2').hide();
        $('a#hideDetailsButton2').click(function() {
            if (!$('#hideDetailsDiv2').is(':visible')) {
                $('.hideMe').hide(400);
            }
            $('#hideDetailsDiv2').toggle(400);
        });
    });


</script>
</body>
</html>