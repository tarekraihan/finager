<section id="card">
    <div class="container">
        <div class="row">
            <!-- Right bar content start -->
            <div class="col-sm-12 col-xs-12">
                <div id="savingsAccountSearch">
                    <div id="loading" class="text-center"></div>
                </div>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>
<script type="text/javascript">

    function overlay(s, l) {
        $('.overlay').remove();
        if( s )
            $('body').append('<div class="overlay" style="width:100%;height:100%;position:fixed;display:block;background:#000;opacity:0.7;top:0;left:0;z-index:1000;"></div>');
        if( l )
            $('.overlay').html('<div style="position:absolute;top:'+(document.documentElement.clientHeight/2)+'px;left:'+(document.documentElement.clientWidth/2)+'px;"><img src="<?php echo base_url();?>resource/front_end/images/loader.gif" width="100"></div>');
    }
    $(document).on('click','#pagination a',function(e){
        e.preventDefault();
        var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
        loadData(cur_page);
    });

    $(document).on('click','#pagination a',function(e){
        e.preventDefault();
        var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
        loadData(cur_page);
        console.log(cur_page);
    });



    function loadData( page = null ){
        var page_count ='';
        if( page != null ){
            page_count = page ;
        }
        var url_str = "<?php echo base_url();?>savings_account/ajax_get_savings_account/" + page_count;
        $.ajax
        ({
            type: "POST",
            url: url_str,
            //data: main_string,
            cache: false,
            beforeSend: function() {
                overlay(true,true);
            },
            success: function(msg)
            {
                overlay(false);
                $("#savingsAccountSearch").html(msg);

            }
        });
    }

    loadData( page = null );

    //for show hide (more info & Available Offer)

    $('#monthlyBenefitSearch').on('click', '.more_info', function (){
        var  formData = $(this).data();
        var monthly_id = formData.monthly_id;
        console.log(monthly_id);
        $("#moreInfo"+monthly_id).toggleClass("in");
    });

    $(document).on('click','.add-to-compare',function(){

        $("#hiden_div").animate({bottom:'0px'});
        $('html, body').animate({

        });

        if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
            alert("Sorry");
        }else{
            if($(".cart_anchor").hasClass("img_active")){

                var itemImg = $(this).parents('.full-card').find('.auto_loan_logo').eq(0);
                $(".cart_anchor01").addClass("img_active");
                $(this).addClass("hidden");

                var  formData = $(this).data();
                var monthly_id = "monthly_id="+formData.monthly_id;

                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>monthly_benefit/ajax_compare_monthly_image",
                        data: monthly_id,
                        success: function(msg)
                        {
                            $(".cart_anchor01").html(msg);
                        }
                    });
                },850);

            }
            else{

                //Select item image and pass to the function
                var itemImg = $(this).parents('div:eq(0)').find('.auto_loan_logo').eq(0);
                //flyToElement($(itemImg), $('.cart_anchor'));

                $(".cart_anchor").addClass("img_active");
                $(this).addClass("hidden");

                var itemImg = $(this).parents('div:eq(0)').find('.auto_loan_logo').eq(0);
                var  formData = $(this).data();
                var monthly_id = "monthly_id="+formData.monthly_id;
                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>monthly_benefit/ajax_compare_monthly_image",
                        data: monthly_id,
                        success: function(msg)
                        {
                            $(".cart_anchor").html(msg);
                        }
                    });
                },850);

            }
        }

    });

    $(document).on('click','.compare-cross-btn',function(){

        var collected_card = $(this).prev().attr("data-fdr_id");

        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-fdr_id');
            if(parseInt(collected_card)==parseInt(index)){
                obj.removeClass("hidden");
            }

        });

        $(this).parent(".cart_anchor").removeClass("img_active");
        $(this).parent(".cart_anchor").html('');
        $(this).addClass("hidden");

    });


    $(document).on('click','.compare-cross-btn',function(){

        $(this).parent(".cart_anchor01").removeClass("img_active");
        $(this).parent(".cart_anchor01").html('');
    });

    $(document).on('click','.compare-cross-btn',function(){

        var empty = $(this).parents(".hidden_div_container").find("a");
        $(".compare-card").each(function(){
            if(!$(".cart_anchor").hasClass('img_active') && !$(".cart_anchor01").hasClass('img_active')){
                $("#hiden_div").fadeOut(1500);
            }
        });
    });

    $('#go_compare').click(function(){
        //alert(1);
        var  formData = $('.cart_anchor').children('img').data();
        var monthly_id1 = "monthly_id1="+formData.monthly_id;
        var principal_amount = "&monthly_amount=" + $('#finalAssest').val();

        var  formData = $('.cart_anchor01').children('img').data();
        var monthly_id2 = "&monthly_id2="+formData.monthly_id;

        var monthly_ids = monthly_id1+monthly_id2+principal_amount;
        if(monthly_id1 != '' && monthly_id2 != ''){
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>monthly_benefit/ajax_go_compare_page",
                data: monthly_ids,
                success: function(msg)
                {
                    if(msg != 'error'){

                        window.location.href = "<?php echo base_url();?>en/monthly_benefit_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 Deposit for compare ! ")
        }


    });


</script>