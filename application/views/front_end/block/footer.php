<div class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="row margin_bottom_15">
                    <div class="col-sm-6">
                        <img class="pull-left footer-logo" src="<?php echo base_url();?>resource/front_end/images/frontCard/finager_logo.png">
                    </div>

                    <div class="col-sm-6">
                        <ul class="footer-socio">
                            <li>
                                <a href="">
                                    <img src="<?php echo base_url();?>resource/front_end/images/social/Facebook-1.png">
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="<?php echo base_url();?>resource/front_end/images/social/G+-1.png">
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="<?php echo base_url();?>resource/front_end/images/social/IN-1.png">
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="<?php echo base_url();?>resource/front_end/images/social/RSS-1.png">
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="<?php echo base_url();?>resource/front_end/images/social/Twitter-1.png">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-2">
                        <p class="footer-menu-title">Loan</p>

                        <ul class="no-padding footer-menus">
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Home Loan Financing</a></li>
                            <li><a href="">Home Equity Loan</a></li>
                            <li><a href="">Personal Loan</a></li>
                            <li><a href="">Renovation Loan</a></li>
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Education Loan</a></li>
                            <li><a href="">Auto Loan</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <p class="footer-menu-title">Insurance</p>

                        <ul class="no-padding footer-menus">
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Home Loan Financing</a></li>
                            <li><a href="">Home Equity Loan</a></li>
                            <li><a href="">Personal Loan</a></li>
                            <li><a href="">Renovation Loan</a></li>
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Education Loan</a></li>
                            <li><a href="">Auto Loan</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <p class="footer-menu-title">Credit Cards</p>

                        <ul class="no-padding footer-menus">
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Home Loan Financing</a></li>
                            <li><a href="">Home Equity Loan</a></li>
                            <li><a href="">Personal Loan</a></li>
                            <li><a href="">Renovation Loan</a></li>
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Education Loan</a></li>
                            <li><a href="">Auto Loan</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-2">
                        <p class="footer-menu-title">Blog</p>

                        <ul class="no-padding footer-menus">
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Home Loan Financing</a></li>
                            <li><a href="">Home Equity Loan</a></li>
                            <li><a href="">Personal Loan</a></li>
                            <li><a href="">Renovation Loan</a></li>
                            <li><a href="">Home Loan</a></li>
                            <li><a href="">Education Loan</a></li>
                            <li><a href="">Auto Loan</a></li>
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <p class="footer-menu-title uppercase">Talk With Us</p>

                        <p class="no-margin">t: +8801521631641</p>
                        <p class="no-margin">info: info@finager.com</p>
                        <p class="no-margin">support: support@finager.com</p>

                        <h5 class="footer-menu-title uppercase margin_top_10">Subscribe us</h5>
                        <form>
                            <input type="" class="form-control margin_bottom_10 subscribe-footer" placeholder="Your email address" name="">
                            <a href="" class="btn footer-submit-btn subscribe-footer-btn">Submit</a>
                        </form>
                    </div>
                </div>

                <hr class="footer-hr">

                <p class="text-center footer-ass-text no-margin">
                    @0000-0000 finager.com All right reserved. Use of this site constitutes of our
                    <a href="">Terms of use</a> and <a href="">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url();?>resource/front_end/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/main.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/modernizr.js"></script>


<!-- megamenu -->
<script src="<?php echo base_url();?>resource/front_end/js/material.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>resource/front_end/js/mashable-menu.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/demo.js"></script>


<!-for scale hide show ->
<script>
    $("#buttons button").click(function() {
        var id = $(this).attr("id");
        $("#pages div").css("display", "none");
        $("#pages div#" + id + "").css("display", "block");
    });
</script>
<!- for Simple interest calculation ->
<script>
   /* $(document).ready(function(){
        //alert (1);
        // initial load fro calc
        simpleCalc();

        $(".simple-calc").on('keyup keypress blur change click', function(){
            simpleCalc();
        });


        function simpleCalc(){
            var princ = parseInt($("#principal").val());
            var intRate = ($("#rate").val() / 100);
            var months = $("#time").val();
            var inte = Math.floor(princ*intRate*months);
            var payment = (princ + inte);
            payment = Math.round(payment);

            if(!isNaN(payment)){
                $("#total").val(payment);
            }else{
                $("#total").html('NaN');
            }

        }

        //----------------for dit cal

        ditCalc();

        $(".dit-calc").on('keyup keypress blur change click', function(){
            ditCalc();
        });


        function ditCalc(){
            var debt_payment = parseInt($("#monthly_debt_payment").val());
            var monthly_income = parseInt($("#gross_monthly_income").val());

            var payment = ((debt_payment / monthly_income)*100);
            payment = Math.round(payment);

            console.log(payment);
            if(!isNaN(payment)){
                $("#dit_calc_total").val(payment+" %");
            }else{
                $("#dit_calc_total").html('NaN');
            }

        }
    });*/
</script>






</body>
</html>