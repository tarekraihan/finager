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
				<div class="col-sm-12">
					<div class="cc_menu">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Home Refinance</a></li>
                                        <li><a href="#">Buying a Home</a></li>
                                        <li><a href="#">Mortgage</a></li>
                                        <li><a href="#">Personal Loans</a></li>
                                        <li><a href="#">Auto</a></li>
                                        <li><a href="#">Credit Cards</a></li>
                                        <li><a href="#">Debt Solutions</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
					</div>
				</div>
		
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
                                        <input type="radio" name="choose_account_<?php echo $row->id; ?>" id="choose_account_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
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
                                        <input type="radio" name="looking_for_<?php echo $row->id; ?>" id="looking_for_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
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
                                        <input type="radio" name="i_want_<?php echo $row->id; ?>" id="i_want_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
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
                                        <input type="radio" name="card_issuer_<?php echo $row->id; ?>" id="card_issuer_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
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

				<div class="col-sm-9 col-xs-9">

                         <?php
                            $result = $this->Front_end_select_model->select_debit_card_info();
//                         print_r($result->result());
                         $debit_card ='';
                         foreach($result->result() as $row) {
                             $debit_card .= '<div class="full-card">

						<div class="row card_right_bar no-margin-lr">
							<div class="col-sm-3 col-xs-3">
								<a href=""><img title="Free Web tutorials" class="img-responsive" src="' . base_url() . 'resource/common_images/bank_logo/'.$row->bank_logo.'" /></a>
								<img class="btnCardApply img-responsive" src="' . base_url() . 'resource/front_end/images/BtnCard_apply.png" />

								<p class="text-center">
									<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
								</p>
								<p class="rating text-center">Rated By 5 Person</p>

								<span class="more_info_icon"><a id="" href="javascript:void(0);" class="add-to-compare" data-card_id="'.$row->id.'" ><i class="fa fa-plus-circle"></i> Add to comparison</a></span><br/>
								<span class="more_info_icon"><a class="displayText" style="cursor:pointer"  data-card_id="'.$row->id.'"><i class="fa fa-info-circle"></i> More info</a></span>
							</div>

							<div class="col-sm-9 col-xs-9">
								<div class="row">
									<div class="col-sm-9 col-xs-9">
										<div class="card_text1">
											<b>'.$row->card_name.'</b>
											<p class="card_description">Dual Currency Visa Classic Card of Brac Bank Ltd. is a valid both in Bangladesh & outside the country. It has waiver on annual fee from the second year if 18 transactions (including 10 POS transaction) is done in a physical year.</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3">
										<div class="card_text1 card_btn_apllication">
											<img class="img-responsive" src="' . base_url() . 'resource/front_end/images/card_btn_apllication.png" />
										</div>
                                        <div>

                                            <div class="card_text2">
                                                <h5>Annual Fee</h5>
                                                <p>'.$row->annual_fee.'</p>
                                            </div>

                                        </div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-2 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Daily Withdrawal Limit</h5>
											<p> '.$row->daily_withdrawal_limit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Number of Withdrawal</h5>
											<p>'.$row->no_of_withdrawal.'</p>
										</div>
									</div>
									<div class="col-sm-3 col-xs-3 w20 no-padding">
										<div class="card_text2">
											<h5>ATM Charge</h5>
											<p>Own ATM: '.$row->atm_charge_own.'<br> Others ATM:<br> '.$row->atm_charge_other.'</p>
										</div>
									</div>
									<div class="col-sm-1 col-xs-2 w20 no-padding">
										<div class="card_text2">
											<h5>Per Transaction Limit</h5>
											<p>'.$row->per_transaction_limit.'</p>
										</div>
									</div>
									<div class="col-sm-2 col-xs-1 w20 no-padding">
										<div class="card_text2">
											<h5>Account Required</h5>
											<p>'.$row->account_name.'</p>
										</div>
									</div>
								</div>
							</div>
						</div>


						<!-- More Info Tab content start -->
						<div class="col-sm-12 card_more_info">
							<div id="toggleText'.$row->id.'" style="display: none">
								<section id="tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#Features'.$row->id.'" aria-controls="home" role="tab" data-toggle="tab">Features</a></li>
										<li role="presentation"><a href="#FeesCharges'.$row->id.'" aria-controls="profile" role="tab" data-toggle="tab">Fees & Charges</a></li>
										<li role="presentation"><a href="#RequiredDocuments'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Required Documents</a></li>
										<li role="presentation"><a href="#TermsConditions'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Terms & Conditions</a></li>
										<li role="presentation"><a href="#Review'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">Review</a></li>
										<li role="presentation"><a href="#UserReview'.$row->id.'" aria-controls="settings" role="tab" data-toggle="tab">User Review</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="Features">
											<div class="col-sm-12">
												<div class="debit_card_tab">
													<h4>Features</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2 trbodywidth">
														'.$row->features.'
													</div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="FeesCharges">
											<div class="col-sm-12">
												<div class="debit_card_tab">
													<h4>Fees & Charges</h4>
													<div class="prosConsHr"></div><br/>
													<div class="prosCons_body2 trbodywidth">
														'.$row->fees_and_charges.'
													</div>
												</div>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="RequiredDocuments">
											<div class="debit_card_tab">
												<h4>Requirement</h4>
												<div class="prosConsHr"></div><br/>
												<div class="prosCons_body2 trbodywidth">
													'.$row->requirement.'
												</div>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="TermsConditions">
											<div class="debit_card_tab">
												<h4>Terms and Condition</h4>
												<div class="prosConsHr"></div><br/>
												<div class="prosCons_body2 trbodywidth">
													'.$row->terms_and_conditions.'
												</div>
											</div>
										</div>

										<div role="tabpanel" class="tab-pane" id="Review">
											<div class="debit_card_tab">
												<h4>Review</h4>
												<div class="prosConsHr"></div><br/>
												<div class="prosCons_body2 trbodywidth">
													'.$row->review.'
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="UserReview">...</div>
									</div>
								</section>
							</div>
						</div>
						<!-- More Info Tab content end -->
					</div>';

                 }
                 echo $debit_card;
                 ?>


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
                                    <a class="cart_anchor">

                                    </a>
                                    <a class="cart_anchor01">

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
    $(document).ready(function(){

        $('.full-card').on('click', '.displayText', function () {
            var  formData = $(this).data();
            var card_id = formData.card_id;
            var ele = document.getElementById("toggleText"+card_id);
            var text = document.getElementById("displayText");

            console.log(ele);
            if(ele.style.display == "block") {
                ele.style.display = "none";
                text.html("<i class='fa fa-info-circle'></i> more info");
            }
            else {
                ele.style.display = "block";
                text.html("<i class='fa fa-info-circle'></i> Less info");
            }

        });

        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50' />").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
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
//            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>card/ajax_get_credit_card",
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
// console.log(msg);

                    $("#SearchCard").html(msg);

                }
            });
        }

        loadData();
        $("input[type='checkbox'], input[type='radio']").on( "click", loadData );

    });

</script>


<script type="text/javascript">
//for more info search

function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "<i class='fa fa-info-circle'></i> More info";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "<i class='fa fa-info-circle'></i> Less info";
	}
}

//for more info search
function toggle1() {
	var ele = document.getElementById("toggleText1");
	var text = document.getElementById("displayText1");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "<i class='fa fa-info-circle'></i> More info";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "<i class='fa fa-info-circle'></i> Less info";
	}
}

//for more more filter
function toggle2() {
	var ele = document.getElementById("toggleText2");
	var text = document.getElementById("displayText2");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "More Filters <i class='fa fa-sort-desc fa-lg'></li>";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Fewer Filters <i class='fa fa-sort-asc fa-lg'></i>";
	}
}



    </script>

    <script>

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

                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>card/ajax_compare_card_image",
                            data: card_id,
                            success: function(msg)
                            {
                                //loading_hide();
                                //console.log(msg);
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
                            url: "<?php echo base_url();?>card/ajax_compare_card_image",
                            data: card_id,
                            success: function(msg)
                            {
                                //loading_hide();
                                //console.log(msg);
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
                    url: "<?php echo base_url();?>card/ajax_go_card_compare_page",
                    data: card_ids,
                    success: function(msg)
                    {
                        if(msg != 'error'){

                            window.location.href = "<?php echo base_url();?>en/card_compare";
                        }
                    }
                });
            }else{
                alert("Please add 2 card for compare ! ")
            }

            //alert(card_ids);

        });

    </script>
