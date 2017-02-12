
<script src="<?php echo base_url();?>resource/blog/js/bootstrap.min.js"></script>

<script src="<?php echo base_url();?>resource/blog/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>resource/blog/js/isotope.function.js"></script>

<script src="<?php echo base_url();?>resource/front_end/js/mashable-menu.js"></script>
<script src="<?php echo base_url();?>resource/front_end/js/demo.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>resource/blog/js/ws-calendar-min.js"></script>

<script>

    function toggle2() {
        var ele = document.getElementById("toggleText2");
        var text = document.getElementById("displayText2");
        if(ele.style.display == "block") {
            ele.style.display = "none";
            text.innerHTML = '<button type="button" class="btn btn-primary bloger_button red_btn">More</button>';
        }
        else {
            ele.style.display = "block";
            text.innerHTML = '<button type="button" class="btn btn-primary bloger_button red_btn">Less</button>';
        }
    }
    function toggle() {
        var ele = document.getElementById("toggleText");
        var text = document.getElementById("displayText");
        if(ele.style.display == "block") {
            ele.style.display = "none";
            text.innerHTML = '<button type="button" class="btn btn-primary bloger_button red_btn">More</button>';
        }
        else {
            ele.style.display = "block";
            text.innerHTML = '<button type="button" class="btn btn-primary bloger_button red_btn">Less</button>';
        }
    }
</script>

<script>
    $( function() {
        $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "dd-mm-yy"
        });
    } );
</script>

</body>
</html>