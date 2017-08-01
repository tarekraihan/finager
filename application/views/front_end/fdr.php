<style type="text/css">
    .savingsContainer .leftCont {
        padding: 0 0 0 0;
    }
    .calcSection .dragBox .drag {
        width: 200px;
    }
    .calcSection .dragBox .next {
        right: 103px;
    }
    .calcSection .dragBox .drag2 {
        width: 201px;
    }
    .monthWrap .calcSection .dragBox {
        width: 215px;
    }
    .calcSection .dragBox .slideImg {
        width: 210px;
    }
    .monthWrap .calcSection .dragBox .slideImg {
        width: 207px;
    }
    .calcSection .dragBox .drag span {
        background: none;
    }
    .calborder {
        border-bottom:0px solid #DADADA;
    }
    .card_query_fdr {
	height: 200px;
    }
    .home_loan_left_bar {
	margin-bottom: 10px;
    }

</style>

<section id="fdr_header"></section>

<section id="fdr_loan">
		<div class="container">
			<div class="row">
		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3">
					<div class="home_loan_left_bar">
						<div class="card_query">
							<p>I Am</p>
							<div class="query_radio">
                                <?php
                                $loan_user = $this->Select_model->select_all('fdr_i_am','ASC');
                                foreach($loan_user->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="i_am" value="<?php echo $row->id; ?>" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_i_am") == $row->id) ? 'checked' :'' ?> />
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->i_am; ?>
                                    </label><br/>
                                <?php } ?>
							</div>
						</div>
                        <div class="card_query_fdr2">
                            <p>Select Deposit Amount</p>
                            <div class="form-group_fdr">
                                <input type="text" name="deposited_amount" class="form-control" id="deposited_amount" value="50000"/>
                            </div>
                            <div class="fdrTenurepadding">
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="5000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        5K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="50000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        50K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="100000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        1 LAC
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="1000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        10 LAC
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="2500000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        25 LAC
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="5000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        50 LAC
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="10000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        1 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="50000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        5 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="100000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        10 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="250000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        25 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="500000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        50 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="1000000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        100 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="2000000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        200 CORE
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-right">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="deposit_amount" value="5000000000" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        500 CORE
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
						<div class="card_query_fdr">
							<p>Tenure</p>
							<div class="fdrTenurepadding">
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="1" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "1" ) ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										1 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="2" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "2" ) ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										3 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="3" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "3" ) ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										6 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="4" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "4" ) ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										1 Year
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="5" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "5" ) ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										2 Year
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="6" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "6") ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										3 Years 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="7" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "7") ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										4 Years
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="8" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_tenure") == "8") ? 'checked' :'' ?> />
										<span class="material_check_radio"></span>
										5 Years
									</label>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
				<div class="col-sm-9 col-xs-9">
                    <input type="hidden" id="principle_amount" name="principle_amount" value="500000">
                    <div id="searchFDR">
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
	if ($(window).scrollTop() > 350){
	  $('.home_loan_left_bar').addClass('fixedElement');
	}if($(window).scrollTop()<350){
	  $('.home_loan_left_bar').removeClass('fixedElement');
	}if($(window).scrollTop() > 2200){
	  $('.home_loan_left_bar').removeClass('fixedElement');
	}
});
</script>

<script type="text/javascript"> 


//for show hide (more info & Available Offer)

    $(document).ready(function() {
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            $('input[name="deposit_amount"]:checked').each(function(){
                $('#deposited_amount').val($(this).val());
//                alert($('#deposited_amount').val());

            });

        } );

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
            loadData(cur_page);
            console.log(cur_page);
        });


        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData( page = null ){
            loading_show();


            var fdr_tenure = new Array();
            $('input[name="fdr_tenure"]:checked').each(function(){
                fdr_tenure.push($(this).val());
            });

            var amount = $('#deposited_amount').val();
            var principal_amount = "&principal_amount="+amount;

            var fdr_tenure_list = "&fdr_tenure="+fdr_tenure;


            var fdr_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                fdr_user.push($(this).val());
            });
            var fdr_user_list = "&fdr_user="+fdr_user;


            var main_string = fdr_tenure_list+fdr_user_list+principal_amount;
            main_string = main_string.substring(1, main_string.length);
            var page_count ='';
            if( page != null ){
                page_count = page ;
            }
            var url_str = "<?php echo base_url();?>fdr/ajax_get_fdr/" + page_count;
            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchFDR").html(msg);

                }
            });
        }

        loadData( page = null );
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData( page = null );
        } );


        $( ".draggable" ).mouseout(function(){


        });
        $('#deposited_amount').on('keyup',function(){
            loadData( page = null );
        });



        $('#searchFDR').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var fdr_id = formData.fdr_id;
            console.log(fdr_id);
            $("#moreInfo"+fdr_id).toggleClass("in");
            $('#availableOffer'+fdr_id).removeClass("in");

        });

        $('#searchFDR').on('click', '.availableOffer', function (){

            var  formData = $(this).data();
            var available_offer = formData.available_offer;
            console.log(available_offer);
            $('#availableOffer'+available_offer).html('<iframe  src="<?php echo base_url();?>en/fdr_iframe"  frameborder="0"  width="100%" height="570" scrolling="no" ></iframe>');
            $('#availableOffer'+available_offer).toggleClass("in");
            $('#moreInfo'+available_offer).removeClass("in");
        });



        $(document).on('click','.add-to-compare',function(){

            $("#hiden_div").animate({bottom:'0px'});
            //$("#hiden_div").addClass("hiddenHalfDown");

            $('html, body').animate({

            });

            if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
                alert("Sorry");
            }else{
                if($(".cart_anchor").hasClass("img_active")){
//                alert(1);
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('.full-card').find('.auto_loan_logo').eq(0);
                    //flyToElement($(itemImg), $('.cart_anchor01'));
                    $(".cart_anchor01").addClass("img_active");
                    $(this).addClass("hidden");

                    // var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    var  formData = $(this).data();
                    var fdr_id = "fdr_id="+formData.fdr_id;
//                alert(loan_id);

                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>fdr/ajax_compare_fdr_image",
                            data: fdr_id,
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
                    var fdr_id = "fdr_id="+formData.fdr_id;
                    //alert(loan_id);

                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>fdr/ajax_compare_fdr_image",
                            data: fdr_id,
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
            var fdr_id1 = "fdr_id1="+formData.fdr_id;
            var principal_amount = "&amount=" + $('#principle_amount').val();

            var  formData = $('.cart_anchor01').children('img').data();
            var fdr_id2 = "&fdr_id2="+formData.fdr_id;

            var fdr_ids = fdr_id1+fdr_id2+principal_amount;
            if(fdr_id1 != '' && fdr_id2 != ''){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>fdr/ajax_go_compare_page",
                    data: fdr_ids,
                    success: function(msg)
                    {
                        if(msg != 'error'){

                            window.location.href = "<?php echo base_url();?>en/fdr_compare";
                        }
                    }
                });
            }else{
                alert("Please add 2 Deposit for compare ! ")
            }


        });






    });

</script>