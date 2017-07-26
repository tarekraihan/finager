<section id="creditCard_header">
</section>
<section id="card">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3">
            <div class="card_left_bar">
            <div class="card_query">
                <p>I Am</p>
                <div class="query_radio">
                    <?php
                        $card_user = $this->Select_model->select_all('card_card_user');
                        foreach($card_user->result() as $row){
                            ?>
                            <label class="material_radio_group">
                        <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                           <?php echo $row->card_user;?>
                            </label><br/>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="card_query">
                <p>My Income Range</p>
                <div class="query_radio">
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeTen" value="10000-19999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 10000- BDT 19999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeTwenty" value="20000-49999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 20000- BDT 49999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeFifty" value="50000-199999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 50000- BDT 199999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeTwoLac" value="200000-500000" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 200000- BDT 500000
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeFiveLac" value="500001-2500000" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 500000+
                    </label>
                </div>
            </div>
            <div class="card_query">
                <p>Want Credit Limit</p>
                <div class="query_radio">
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitTen" value="10000-49999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 10000- BDT 49999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitFifty" value="50000-99999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 50000- BDT 99999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitOneLac" value="100000-199999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 100000- BDT 199999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitTwoLac" value="200000-500000" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 200000- BDT 500000
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitFiveLac" value="500001-2500000" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 500000+
                    </label>
                </div>
            </div>
            <div class="card_query">
                <p>Looking For</p>
                <div class="query_radio">
                    <?php
                    $credit_card_type = $this->Select_model->select_all('card_credit_card_type');
                    foreach($credit_card_type->result() as $row){
                    ?>
                    <label class="material_radio_group">
                        <input type="radio" name="creditCardType" id="looking<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        <?php echo $row->cc_card_type; ?>
                    </label><br/>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="more_filter">
                <p><a id="displayMoreFilter" href="javascript:toggle2();"><?php echo ($this->session->userdata("feature_benefits") || $this->session->userdata("card_type")) ? 'Fewer Filters ' :'More Filter' ?> <i class="fa fa-sort-desc fa-lg"></i></a></p>
            </div><br/>
            <div id="moreFilterText" <?php echo ($this->session->userdata("feature_benefits") || $this->session->userdata("card_type")) ? 'style="display: block"' :'style="display: none"' ?>>
                <div class="card_query">
                    <p>Features & Benefits</p>
                    <div class="query_radio">
                    <?php
                        $card_benefits = $this->Select_model->select_all('card_reward');
                        foreach($card_benefits->result() as $row){
                    ?>
                        <div class="material_checkbox_group">
                            <input type="checkbox" id="featuresBenefits<?php echo $row->id; ?>" name="featuresBenefits" value="<?php echo $row->id; ?>" class="material_checkbox"  <?php echo ($this->session->userdata("feature_benefits") == $row->id) ? 'checked' :'' ?>/>
                            <label class="material_label_checkbox" for="featuresBenefits<?php echo $row->id; ?>"><?php echo $row->reward_name; ?></label>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="card_query">
                    <p>Maximum Interest Free Period</p>
                    <div class="query_radio">
                        <label class="material_radio_group">
                            <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod15" value="15-30" class="material_radiobox"/>
                            <span class="material_check_radio"></span>
                            15-30 Days
                        </label><br/>
                        <label class="material_radio_group">
                            <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod31" value="31-45" class="material_radiobox"/>
                            <span class="material_check_radio"></span>
                            31-45 Days
                        </label><br/>
                        <label class="material_radio_group">
                            <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod46" value="46" class="material_radiobox"/>
                            <span class="material_check_radio"></span>
                            More than 45 Days
                        </label><br/>
                    </div>
                </div>
                <div class="card_query">
                    <p>Card Type</p>
                    <div class="query_radio">
                        <?php
                            $card_type = $this->Select_model->select_all('card_card_type');
                            foreach($card_type->result() as $row){
                        ?>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="cardType<?php echo $row->id;?>" name="cardType" value="<?php echo $row->id;?>" class="material_checkbox" <?php echo ($this->session->userdata("card_type") == $row->id) ? 'checked' :'' ?> />
                                    <label class="material_label_checkbox" for="cardType<?php echo $row->id;?>"><?php echo $row->card_type_name;?></label>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="card_query">
                    <p>Card Issuer</p>
                    <div class="query_radio">
                        <?php
                        $card_issuer = $this->Select_model->select_all('card_card_issuer');
                        foreach($card_issuer->result() as $row){
                        ?>
                            <div class="material_checkbox_group">
                                <input type="checkbox" id="cardIssuer<?php echo $row->id;?>" name="cardIssuer" value="<?php echo $row->id;?>" class="material_checkbox" />
                                <label class="material_label_checkbox" for="cardIssuer<?php echo $row->id;?>"><?php echo $row->card_issuer_name;?></label>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            </div>
            </div>

            <!-- Left bar query content end -->
            <!-- Right bar content start -->

            <div class="col-sm-9 col-xs-9" id="SearchCard">
                <div id="loading" class="text-center" style="margin-top: 150px"></div>
            </div>
            <!-- Right bar content end -->
        </div>
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
									<li></li>
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

<!-- card compare section ends-->

<script type="text/javascript">

    $(document).ready(function(){

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
            loadData(cur_page);
            console.log(cur_page);
        });

        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50' />").fadeIn('fast');
        }

        function loading_hide(){
            $('#loading').html("");
        }

        function loadData( page = null ){
            loading_show();
            var card_user = new Array();
            $('input[name="iAm"]:checked').each(function(){
                card_user.push($(this).val());
            });
            var card_user_list = "&card_user="+card_user;
            var income_range = new Array();
            $('input[name="myIncomeRange"]:checked').each(function(){
                income_range.push($(this).val());
            });
            var income_range_list = "&income_range="+income_range;
            var credit_limit = new Array();

            $('input[name="wantCreditLimit"]:checked').each(function(){
                credit_limit.push($(this).val());
            });

            var credit_limit_list = "&credit_limit="+credit_limit;
            var credit_card_type = new Array();
            $('input[name="creditCardType"]:checked').each(function(){
                credit_card_type.push($(this).val());
            });
            var credit_card_type_list = "&credit_card_type="+credit_card_type;
            var feature_benefits = new Array();

            $('input[name="featuresBenefits"]:checked').each(function(){
                feature_benefits.push($(this).val());
            });

            var feature_benefits_list = "&feature_benefits="+feature_benefits;

            var max_interest_free_period = new Array();
            $('input[name="maximumInterestFreePeriod"]:checked').each(function(){
                max_interest_free_period.push($(this).val());
            });

            var max_interest_free_period_list = "&max_interest_free_period="+max_interest_free_period;

            var card_type = new Array();
            $('input[name="cardType"]:checked').each(function(){
                card_type.push($(this).val());
            });

            var card_type_list = "&card_type="+card_type;

            var card_issuer = new Array();
            $('input[name="cardIssuer"]:checked').each(function(){
                card_issuer.push($(this).val());
            });

            var card_issuer_list = "&card_issuer="+card_issuer;
            var main_string = card_user_list+income_range_list+credit_limit_list+credit_card_type_list+feature_benefits_list+max_interest_free_period_list+card_type_list+card_issuer_list;
            main_string = main_string.substring(1, main_string.length);
            var page_count ='';
            if( page != null ){
                page_count = page ;
            }

            var url_str = "<?php echo base_url();?>card/ajax_get_credit_card/" + page_count;
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(msg){
                    loading_hide();
                    $("#SearchCard").html(msg);
                }
            });
        }

        loadData(page = null);
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData(page = null);
        } );

    });

    $('#SearchCard').on('click', '.displayText', function () {
        var  formData = $(this).data();
        var card_id = formData.card_id;
        var ele = document.getElementById("toggleText"+card_id);
        var text = document.getElementById("displayText");

        if(ele.style.display == "block") {
            ele.style.display = "none";
            text.html("<i class='fa fa-info-circle'></i> more info");
        }else {
            ele.style.display = "block";
            text.html("<i class='fa fa-info-circle'></i> Less info");
        }
    });
    //for more more filter

    function toggle2() {
        var ele = document.getElementById("moreFilterText");
        var text = document.getElementById("displayMoreFilter");
        if(ele.style.display == "block") {
            ele.style.display = "none";
            text.innerHTML = "More Filters <i class='fa fa-sort-desc fa-lg'></li>";
        }else {
            ele.style.display = "block";
            text.innerHTML = "Fewer Filters <i class='fa fa-sort-asc fa-lg'></i>";
        }
    }

    $(document).on('click','.add-to-compare',function(){
        $("#hiden_div").animate({bottom:'0px'});

        if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
            alert("Sorry");

        }else{

			if($(".cart_anchor").hasClass("img_active")){

				var cart01 = $('.cart_anchor01');
				var imgtodrag01 = $(this).parents('.full-card').find('.selected_card').eq(0);
				if (imgtodrag01) {
					var imgclone01 = imgtodrag01.clone().offset({
						top: imgtodrag01.offset().top,
						left: imgtodrag01.offset().left
					}).css({
						'opacity': '0.7',
                        'position': 'absolute',
                        'height': '150px',
                        'width': '150px',
                        'z-index': '100'
					}).appendTo($('body'))
						.animate({
						'top': cart01.offset().top,
                        'left': cart01.offset().left + 10,
                        'width': 75,
                        'height': 75
					}, 1000, 'easeInOutExpo');

					setTimeout(function () {
						cart01.effect("shake", {
							times: 2
						}, 200);
					}, 1000);

					imgclone01.animate({
						'width': 0,
						'height': 0
					}, function () {
						$(this).detach()
					});
				}

				$(".cart_anchor01").addClass("img_active");
                $(this).addClass("hidden");
				var  formData = $(this).data();
                var card_id = "card_id="+formData.card_id;
                setTimeout(function(){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>card/ajax_compare_card_image",
                        data: card_id,
                        success: function(msg){
                            $(".cart_anchor01").html(msg);
                        }
                    });
                });
            }else{
				var cart = $('.cart_anchor');
				var imgtodrag = $(this).parents('.full-card').find('.selected_card').eq(0);
				if (imgtodrag) {
					var imgclone = imgtodrag.clone()
						.offset({
						top: imgtodrag.offset().top,
						left: imgtodrag.offset().left
					}).css({
						'opacity': '0.7',
						'position': 'absolute',
						'height': '150px',
						'width': '150px',
						'z-index': '100'
					}).appendTo($('body')).animate({
						'top': cart.offset().top + 10,
						'left': cart.offset().left + 10,
						'width': 75,
						'height': 75
					}, 1000, 'easeInOutExpo');

					setTimeout(function () {
						cart.effect("shake", {
							times: 2
						}, 200);
					}, 1000);

					imgclone.animate({
						'width': 0,
						'height': 0
					}, function () {
						$(this).detach()
					});
				}

				var  formData = $(this).data();
                var card_id = "card_id="+formData.card_id;

                setTimeout(function(){
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url();?>card/ajax_compare_card_image",
                        data: card_id,
                        success: function(msg){
                            $(".cart_anchor").html(msg);
                        }
                    });
                });

				$(".cart_anchor").addClass("img_active");
				$(this).addClass("hidden");
            }
        }
    });

    $(document).on('click','.compare-cross-btn',function(){
        var collected_card = $(this).prev().attr("data-card_id");
        $(".full-card").each(function(){
            var obj=$(this).children().find('.add-to-compare');
            var index=$(this).children().find('.add-to-compare').attr('data-card_id');
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
        var  formData = $('.cart_anchor').children('img').data();
        var card_id1 = "card_id1="+formData.card_id;
        var  formData = $('.cart_anchor01').children('img').data();
        var card_id2 = "&card_id2="+formData.card_id;
        var card_ids = card_id1+card_id2;
        if(card_id1 != '' && card_id2 != ''){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>card/ajax_go_card_compare_page",
                data: card_ids,
                success: function(msg){
                    if(msg != 'error'){
                        window.location.href = "<?php echo base_url();?>en/card_compare";
                    }
                }
            });
        }else{
            alert("Please add 2 card for compare ! ")
        }
    });

</script>



