<style>
    .pagination {
        position: relative;
        right: 0px;
        top: 0;
        cursor: pointer;
        z-index: 1;
        margin-bottom: 60px;
        float: left;
    }
</style>

<section id="savings_account_header">
</section>

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

<section id="hiden_div">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3 col-sm-12">
                <div class="card-holder">
                    <div class="card-bg">
                        <img src="<?php echo base_url();?>resource/front_end/images/hidendivshead.png" alt="" />
                        <div class="hidden_div relative">
                            <div class="hidden_div_container">
                                <ul class="no-padding pull-left no-list-style">
                                    <li>

                                    </li>
                                    <li></li>
                                </ul>
                                <a class="cart_anchor compare-card">

                                </a>
                                <a class="cart_anchor01 comapre-card">

                                </a>
                                <a href="javascript:void(0);" id="go_compare" class="btn common-btn v-middle-btn">
                                    Compare
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });

        var bank_id_list = "saving_account_bank_ids="+bank_ids;
        var url_str = "<?php echo base_url();?>saving_account/ajax_get_savings_account/" + page_count;
        $.ajax
        ({
            type: "POST",
            url: url_str,
            data: bank_id_list,
            cache: false,
            beforeSend: function() {
                overlay(true,true);
            },
            success: function(msg)
            {
                count_selected_row();
                overlay(false);
                $("#savingsAccountSearch").html(msg);

            }
        });
    }

    function count_selected_row(){

        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val());
        });
        var bank_id_list = "saving_account_bank_ids="+bank_ids;

        var url_str = "<?php echo base_url();?>saving_account/ajax_count_selected_row/";

        $.ajax
        ({
            type: "POST",
            url: url_str,
            data: bank_id_list,
            cache: false,
            success: function(response) {
                $(".bank-small-filter").html(response);
            }
        });
    }

    function data_caching(){
        var bank_ids = new Array();
        $('input[name="bank_id"]:checked').each(function(){
            bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());
        });
        var bank_id_list = "saving_account_bank_ids="+bank_ids;

        var url_str = "<?php echo base_url();?>saving_account/ajax_saving_account_caching/" ;

        $.ajax({
            type: "POST",
            url: url_str,
            data: bank_id_list,
            cache: false,
            success: function(response){

                var option = [];
                var obj = JSON.parse(response);

                if(obj.saving_account_bank_ids.length > 0 ){
                    for (var i = 0; i < obj.saving_account_bank_ids.length; i++) {
                        var bank_id = obj.saving_account_bank_ids[i].split("=");
                        option.push('<li><div class="filter-option"><span>' + bank_id[1] + '</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="saving_account_bank_id" data-saving_account_bank_id="' +  bank_id[0] + '"><i class="icon-close icons"></i></a></span></div></li>');
                    }

                }
                $(".filter-list").html(option);
            }
        });
    }

    $(document).ready(function(){
        data_caching();
        loadData( page = null );

        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            data_caching();
            loadData(page = null);
        } );


        $(document).on('click','#clear_all',function(){
            var data = 'session=saving_account';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>saving_account/ajax_clear_session",
                data:data,
                success: function(response)
                {
                    window.location.href = window.location.href;

                }
            });
        });


        $(document).on('click', '.saving_account_bank_id', function (){
            var  formData = $(this).data();
            var saving_account_bank_id = formData.saving_account_bank_id;
            $('#filter-bank-'+saving_account_bank_id).prop('checked', false);
            var data = 'saving_account_bank_id='+saving_account_bank_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>saving_account/unset_saving_account_bank_id_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
    });

    //for show hide (more info & Available Offer)

    $('#savingsAccountSearch').on('click', '.more_info', function (){
        var  formData = $(this).data();
        var account_id = formData.account_id;
        $("#moreInfo"+account_id).toggleClass("in");
        if($("#moreInfo"+account_id).hasClass('in')){
            $('#more_info'+account_id).html("<i class='fa fa-info-circle'></i> Less info");
        }else{
            $('#more_info'+account_id).html("<i class='fa fa-info-circle'></i> More info");
        }
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
                var account_id = "account_id="+formData.account_id;

                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>saving_account/ajax_compare_saving_account_image",
                        data: account_id,
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
                var account_id = "account_id="+formData.account_id;
                setTimeout(function(){
                    $.ajax
                    ({
                        type: "POST",
                        url: "<?php echo base_url();?>saving_account/ajax_compare_saving_account_image",
                        data: account_id,
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

        var collected_card = $(this).prev().attr("data-account_id");

        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-account_id');

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
        if( ! $('.cart_anchor01').children('img').data()){
            $("#comparison_min_two_alert").modal('show');
        }
        var  formData = $('.cart_anchor').children('img').data();
        var account_url1 = formData.account_slug;
        var  formData = $('.cart_anchor01').children('img').data();
        var account_url2 = formData.account_slug;
        var account_urls = account_url1+'-vs-'+account_url2;
        if(account_url1 != '' && account_url2 != ''){
            window.location.href = "<?php echo base_url();?>compare-savings-account/"+account_urls+".html";
        }else{
            $('#comparison_min_two_alert').modal('show');
        }
    });


</script>