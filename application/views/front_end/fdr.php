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
                                        <input type="radio" name="i_am" value="<?php echo $row->id; ?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->i_am; ?>
                                    </label><br/>
                                <?php } ?>
							</div>
						</div>
						<div class="card_query">
							<p>Select Deposit Amount</p>
							<div class="row">
								<div class="span8">
									<div class="singleColumn page common">
										<div class="htmltextarea section">
											<div class="innerMdlWrapper"> 
												 <!-- Middle Inner START--> 
												<div class="innerMdlInner">
													<div class="calcWrapper">
														<div class="clear"></div>
														<!--Calculator Banner END-->
														<div class="selectCalcWrapper" style="display:none;">
															<div class="radiobox">
															  <input type="radio" id="savingCalculator" value="" title="Year" name="selCalc">
															  <label for="savingCalculator">Home Loan Calculator</label>
															</div>
															<div class="radiobox">
															  <input type="radio" id="depositCalculator" value="" title="Year" name="selCalc"  checked="checked">
															  <label for="depositCalculator">Personal Loan Calculator</label>
															</div>
														</div>

														<div class="savingsContainer emiContainer">
													
															<div class="leftCont"> 
																  
															  <!--Amount Already Saved START-->

																<div class="slideWrapper" id="alreadySaved">
																  
																	<div class="inputWrapper"> <span class="rupee"></span>
																	  <div class="inputField">
																		<div class="inpLft"></div>
																		<div class="inpMdl">
																		  <input type="text" name="" value="0" id="finalAssest" class="input_LoanAmt"/>
																		</div>
																		<div class="inpRt"></div>
																	  </div>
																	</div>
																	<div class="clear"></div>
																	
																	<!--Calculator Section START-->
																	<div class="calcContainer">
																	  <div class="calcSection calborder">
																		<div class="dragBox">
																		  <div class="drag"> <span></span>
																			<div class="sliderHover"></div>
																			<div class="draggable ui-widget-content drag3"> </div>
																		  </div>
																		  <div class="clear"></div>
																		  <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
																		  <div class="slideImg" id="finacialAssest">
																			<ul>
																			</ul>
																		  </div>
																		  <div class="prev"></div>
																		  <div class="next active"></div>
																		</div>
																		<div class="hideVal">25000</div>
																	  </div>
																	</div>
																	<!--Calculator Section END--> 
																	
																</div>
																  <!--Amount Already Saved END-->
																  
																<div style="display:none;" class="slideWrapper" id="avgSave">
																   
																	<div class="inputWrapper">
																	  <div class="inputField">
																		<div class="inpLft"></div>
																		<div class="inpMdl">
																		  <input type="text" name="" value="1" id="finalCustAge" maxlength="3" class="input_LoanPeriod"/>
																		</div>
																		<div class="inpRt"></div>
																	  </div>
																	  <div class="inpRadio">
																		<div id="tenureType">
																		  <label>Year</label>
																		</div>
																	  </div>
																	</div>
																	<div class="clear"></div>
																	<!--Calculator Section START-->
																	<div class="calcContainer yearWrap" style="display:none">
																	  <div class="calcSection calborder">
																		<div class="dragBox">
																		  <div class="drag"> <span></span>
																			<div class="draggable ui-widget-content drag3"></div>
																		  </div>
																		  <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
																		  <div class="slideImg" id="custAge">
																			<ul>
																			</ul>
																		  </div>
																		  <div class="prev"></div>
																		  <div class="next active"></div>
																		</div>
																		<div class="hideVal">5</div>
																	  </div>
																	</div>
																	<!--Calculator Section END--> 
																	
																	<!--Calculator Section START-->
																	<div class="calcContainer monthWrap">
																	  <div class="calcSection calborder">
																		<div class="dragBox">
																		  <div class="drag2"> <span></span>
																			<div class="draggable draggable2 ui-widget-content drag3"></div>
																		  </div>
																		  <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
																		  <div class="slideImg" id="monthExp">
																			<ul>
																			</ul>
																		  </div>
																		  <!--<div class="prev"></div>
																							  <div class="next active"></div>--> 
																		</div>
																		<div class="hideVal">5</div>
																	  </div>
																	</div>
																	<!--Calculator Section END--> 
																</div>


																<div style="display:none;" class="slideWrapper" id="interest">
																   
																	<div class="inputWrapper">
																	  <div class="inputField">
																		<div class="inpLft"></div>
																		<div class="inpMdl">
																		  <input type="text" name="" value="8" id="finalLiability" class="input_AIR"/>
																		</div>
																		<div class="inpRt"></div>
																	  </div>
																	  <span class="perc">%</span> 
																	</div>
																	<div class="clear"></div>
																	<!--Calculator Section START-->
																	<div class="calcContainer">
																	  <div class="calcSection">
																		<div class="dragBox">
																		  <div class="drag"> <span></span>
																			<div class="draggable ui-widget-content drag3"></div>
																		  </div>
																		  <div class="clear"></div>
																		  <!--<div class="highLight"><input type="text" value="0" id="dragAssest"/></div>-->
																		  <div class="slideImg" id="liability">
																			<ul>
																			</ul>
																		  </div>
																		  <div class="prev"></div>
																		  <div class="next active"></div>
																		</div>
																		<div class="hideVal">0.5</div>
																	  </div>
																	</div>
																	<!--Calculator Section END--> 
																</div>
																  
																  <!--<a href="javascript:;" class="submit">Submit</a>-->
																  <input type="hidden" id="input_Payment" />
															</div>

														   
														</div>

													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							
							<input class="w100" type="text" >
						</div>
						<div class="card_query_fdr">
							<p>Tenure</p>
							<div class="fdrTenurepadding">
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="1" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										1 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="2" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="3" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										6 Month 
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="4" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										1 Year
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="5" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										2 Year
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="6" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										3 Years 
									</label>
								</div>
								<div class="fdr_tenure pull-left">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="7" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										4 Years
									</label>
								</div>
								<div class="fdr_tenure pull-right">
									<label class="material_radio_group fdr_radio">
										<input type="radio" name="fdr_tenure" value="8" class="material_radiobox"/>
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

            var amount = $('#finalAssest').val();
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
            $('#availableOffer'+available_offer).html('<iframe  src="http://test.finager.com/en/fdr_iframe"  frameborder="0"  width="100%" height="570" scrolling="no" ></iframe>');
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

        $('#go_compare').click(function(){
            //alert(1);
            var  formData = $('.cart_anchor').children('img').data();
            var fdr_id1 = "fdr_id1="+formData.fdr_id;

            var  formData = $('.cart_anchor01').children('img').data();
            var fdr_id2 = "&fdr_id2="+formData.fdr_id;

            var fdr_ids = fdr_id1+fdr_id2;
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