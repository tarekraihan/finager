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

<script src="<?php echo base_url();?>resource/front_end/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/main.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/modernizr.js"></script>


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
    $(document).ready(function(){
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
    });
</script>
</body>
</html>