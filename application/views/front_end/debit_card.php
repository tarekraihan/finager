  <style>
    .card_btn_apllication {
        margin: 7px 24px;
    }
    .card_text2 p{
        position:relative;
    }

</style>
<section id="debitCard_header">

</section>

<section id="card">
		<div class="container">
			<div class="row">
		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3">
					<div class="card_left_bar">
						<div class="card_query">
							<p>Choose Account</p>
							<div class="query_radio">
                                <?php
                                $choose_account = $this->Select_model->select_all('debit_card_choose_account');

                                foreach($choose_account->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="choose_account" id="choose_account_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->account_name;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
							</div>
						</div>
						<div class="card_query">
							<p>Looking for</p>
							<div class="query_radio">
                                <?php
                                $looking_for = $this->Select_model->select_all('debit_card_looking_for');
                                foreach($looking_for->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="looking_for" id="looking_for_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->looking_for;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
							</div>
						</div>
						<div class="card_query">
							<p>I Want</p>
							<div class="query_radio">

                                <?php
                                $i_want = $this->Select_model->select_all('debit_card_i_want');
                                foreach($i_want->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="i_want" id="i_want_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->i_want;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
							</div>
						</div>
                        <div class="card_query">
                            <p>Card Issuer</p>
                            <div class="query_radio">
                                <?php
                                $i_want = $this->Select_model->select_all('debit_card_issuer');
                                foreach($i_want->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="card_issuer" id="card_issuer_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->card_issuer_name;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->

				<div class="col-sm-9 col-xs-9" id="SearchDebitCard">
                    <div id="loading" class="text-center" style="margin-top: 150px"></div>
                </div>

	</section>

    <!-- card compare section starts-->

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
                                    <a class="cart_anchor01 compare-card">

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

$(window).on('scroll', function (){    
        alert();   
	if ($(window).scrollTop() > 350){
	  $('.card_left_bar').addClass('fixedElement');
	}if($(window).scrollTop()<350){
	  $('.card_left_bar').removeClass('fixedElement');
	}if($(window).scrollTop() > 2260){
	  $('.card_left_bar').removeClass('fixedElement');
	}
});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
            loadData(cur_page);
            console.log(cur_page);
        });

        $('#SearchDebitCard').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var loan_id = formData.loan_id;

            //console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            if($("#moreInfo"+loan_id).hasClass('in')){
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> Less info");
            }else{
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> more info");
            }

        });

        function loadData( page = null ){

            var choose_account = new Array();
            $('input[name="choose_account"]:checked').each(function(){
                choose_account.push($(this).val());
            });
            var choose_account_list = "&choose_account="+choose_account;
            var looking_for = new Array();
            $('input[name="looking_for"]:checked').each(function(){
                looking_for.push($(this).val());
            });

            var looking_for_list = "&looking_for="+looking_for;
            var card_issuer = new Array();
            $('input[name="card_issuer"]:checked').each(function(){
                card_issuer.push($(this).val());
            });
            var card_issuer_list = "&card_issuer="+card_issuer;
            var i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                i_want.push($(this).val());
            });
            var i_want_list = "&i_want=" + i_want;

            var page_count ='';
            if( page != null ){
                page_count = page ;
            }


            var main_string = choose_account_list + looking_for_list + card_issuer_list + i_want_list;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>debit_card/ajax_debit_card_info/" + page_count;
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
                    overlay(true,true);
                },
                success: function(msg){
                    $("#SearchDebitCard").html(msg);
                    overlay( false );
                }
            });
        }

        loadData(page = null);
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData(page = null);
        } );

    });

</script>
<script type="text/javascript">
//for more info search

        $(document).on('click','.add-to-compare',function(){

            $("#hiden_div").animate({bottom:'0px'});
            //$("#hiden_div").addClass("hiddenHalfDown");

            $('html, body').animate({
                //'scrollTop' : $(".cart_anchor").position().top+1500
            });

            if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
                alert("Sorry");
            }else{
                if($(".cart_anchor").hasClass("img_active")){
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    flyToElement($(itemImg), $('.cart_anchor01'));
                    $(".cart_anchor01").addClass("img_active");
                    $(this).addClass("hidden");

                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    var  formData = $(this).data();
                    var card_id = "card_id="+formData.card_id;
                    //alert(card_id);
                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>debit_card/ajax_compare_card_image",
                            data: card_id,
                            success: function(msg)
                            {
                                //loading_hide();
                                console.log(msg);
                                $(".cart_anchor01").html(msg);
                            }
                        });
                    },850);

                }
                else{
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    flyToElement($(itemImg), $('.cart_anchor'));

                    $(".cart_anchor").addClass("img_active");
                    $(this).addClass("hidden");

                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    var  formData = $(this).data();
                    var card_id = "card_id="+formData.card_id;

                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>debit_card/ajax_compare_card_image",
                            data: card_id,
                            success: function(msg)
                            {
                                console.log(msg);
                                $(".cart_anchor").html(msg);
                            }
                        });
                    },850);

                }
            }

        });

        $(document).on('click','.compare-cross-btn',function(){

            var collected_card = $(this).prev().attr("data-card_id");
            //var card_id = collected_card.card_id;

            //var card_id = "data-card_id="+collected_card.card_id;
            //alert(collected_card);

            $(".full-card").each(function(){
                var obj=$(this).children().find('.add-to-compare');
                var index=$(this).children().find('.add-to-compare').attr('data-card_id');
                //alert(index);
                //if()
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
            var card_id1 = "card_id1="+formData.card_id;

            var  formData = $('.cart_anchor01').children('img').data();
            var card_id2 = "&card_id2="+formData.card_id;

            var card_ids = card_id1+card_id2;
            if(card_id1 != '' && card_id2 != ''){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>debit_card/ajax_go_card_compare_page",
                    data: card_ids,
                    success: function(msg)
                    {
                        if(msg != 'error'){

                            window.location.href = "<?php echo base_url();?>en/debit_card_compare";
                        }
                    }
                });
            }else{
                alert("Please add 2 card for compare ! ")
            }

            //alert(card_ids);

        });

</script>
