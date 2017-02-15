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
	
	/*For Millionier Scheme*/
	.mill_def_text{
		background: none !important;
		border: 0 !important;
		color: #b1b1b1 !important;
		font-style: italic;
		margin-top: 15px;
		text-align: center;
	}
	.mill_tenure_list {
		padding-left: 27px;
	}
	.mill_tenure_list>li{
		list-style: none;
		display: inline-block;
		margin-right: 10px;
	}
	.mill_tenure_list>li>input[type='checkbox']{

	}
	/*Custom checkbox*/
	.squaredOne {
		width: 28px;
		height: 28px;
		position: relative;
		margin: 0px auto 10px auto;
	}
	.squaredOne label {
		width: 25px;
		height: 25px;
		position: absolute;
		top: 4px;
		left: 4px;
		cursor: pointer;
		background: #58add4;
		box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.5), 0px 1px 0px white;
		color: #fff;
		text-align: center;
		line-height: 2;
		border-radius: 3px;
		font-size: 12px;
	}
	.squaredOne label:after {
		content: '';
		width: 24px;
		height: 24px;
		position: absolute;
		top: 0px;
		left: 0px;
		opacity: 0;
		border: 2px solid #333;
		border-radius: 3px;
	}
	.squaredOne label:hover::after {
	  opacity: 0.3;
	}
	.squaredOne input[type=checkbox] {
	  visibility: hidden;
	}
	.squaredOne input[type=checkbox]:checked + label:after {
	  opacity: 1;
	  border: 2px solid #333;
	}
    label.checkDisable {
        background: #a5a5a5;
    }

    #millionaire_tenure{width: 233px;}
</style>

<section id="maximizer_header"></section>

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
                                $loan_user = $this->Select_model->select_all('millionaire_i_am','ASC');
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


						<div class="clearfix"></div>

						<div class="card_query_fdr">
							<p>Select Maturity Amount</p>

							<p class="mill_def_text">Select Amount</p>
                            <div class="fdrTenurepadding">
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="1" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        100 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="2" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        200 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="3" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        300 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="4" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        400 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="5" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        500 K
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="6" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        1 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="7" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        2.5 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="8" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        5 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="9" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        10 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="10" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        20 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="11" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        30 Million
                                    </label>
                                </div>
                                <div class="fdr_tenure pull-left">
                                    <label class="material_radio_group fdr_radio">
                                        <input type="radio" name="maturity_amount" value="12" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        40 Million
                                    </label>
                                </div>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="card_query_fdr">
							<p>Tenure</p>

							<p class="mill_def_text">Tenure Based on 100K</p>

							<ul class="no-pading mill_tenure_list" id="millionaire_tenure">
								<li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="1" id="check01" name="check" disabled/>
                                            <label for="check01" class="checkDisable">1</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="2" id="check02" name="check" disabled/>
                                            <label for="check02" class="checkDisable">2</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="3" id="check03" name="check" disabled/>
                                            <label for="check03" class="checkDisable">3</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="4" id="check04" name="check" disabled/>
                                            <label for="check04" class="checkDisable">4</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="5" id="check05" name="check" disabled/>
                                            <label for="check05" class="checkDisable">5</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="6" id="check06" name="check" disabled/>
                                            <label for="check06" class="checkDisable">6</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="7" id="check07" name="check" disabled/>
                                            <label for="check07" class="checkDisable">7</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="8" id="check08" name="check" disabled/>
                                            <label for="check08" class="checkDisable">8</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="9" id="check09" name="check" disabled/>
                                            <label for="check09" class="checkDisable">9</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="10" id="check10" name="check" disabled/>
                                            <label for="check10" class="checkDisable">10</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>

                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="11" id="check11" name="check" disabled/>
                                            <label for="check11" class="checkDisable">11</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="12" id="check12" name="check" disabled/>
                                            <label for="check12" class="checkDisable">12</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="13" id="check13" name="check" disabled/>
                                            <label for="check13" class="checkDisable">13</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="14" id="check14" name="check" disabled/>
                                            <label for="check14" class="checkDisable">14</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="15" id="check15" name="check" disabled/>
                                            <label for="check15" class="checkDisable">15</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>

                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="16" id="check16" name="check" disabled/>
                                            <label for="check16" class="checkDisable">16</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="17" id="check17" name="check" disabled/>
                                            <label for="check17" class="checkDisable">17</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="18" id="check18" name="check" disabled/>
                                            <label for="check18" class="checkDisable">18</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="19" id="check19" name="check" disabled/>
                                            <label for="check19" class="checkDisable">19</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
                                <li>
                                    <section title="">
                                        <!-- .squaredOne -->
                                        <div class="squaredOne">
                                            <input type="checkbox" value="20" id="check20" name="check" disabled/>
                                            <label for="check20" class="checkDisable">20</label>
                                        </div>
                                        <!-- end .squaredOne -->
                                    </section>
                                </li>
							</ul>
						</div>

						<div class="clearfix"></div>


					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
                <div class="col-sm-9 col-xs-9">
                    <div id="searchMillionaire">
                        <div id="loading" class="text-center"></div>
                    </div>
                </div>
				<!-- Right bar content end -->
			</div>
		</div>
	</section>

<script type="text/javascript">
	jQuery(document).ready(function($){

        $('#searchMillionaire').on('click', '.more_info', function (){

            var  formData = $(this).data();
            var millionaire_id = formData.millionaire_id;
            console.log(millionaire_id);

            $("#moreInfo"+millionaire_id).toggleClass("in");
            $('#rePaymentSchedule'+millionaire_id).removeClass("in");

        });
/*
        $('#searchMillionaire').on('click', '.rePaymentSchedule', function (){

            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);
            $('#rePaymentSchedule'+repayment).html('<iframe  src="http://test.finager.com/en/home_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");

        });*/

        $('input[name="maturity_amount"]').on('click',function() {
            var thisVal= 'selected_amount='+$(this).val();
//            alert(thisVal);


            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>millionaire/ajax_get_tenure",
                data: thisVal,
                cache: false,
                success: function(msg)
                {

//                    loading_hide();
//                    console.log(msg);

                    $("#millionaire_tenure").html(msg);



                }
            });



        });
        });
</script>


<script type="text/javascript">

//for show hide (more info & Available Offer)

$(document).ready(function() {

        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='50'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
            loading_show();


            var millionaire_tenure = new Array();
            $('input[name="millionaire_tenure"]:checked').each(function(){
                millionaire_tenure.push($(this).val());
            });

            var millionaire_tenure_list = "&millionaire_tenure="+millionaire_tenure;


            var millionaire_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                millionaire_user.push($(this).val());
            });
            var millionaire_user_list = "&millionaire_user="+millionaire_user;

            var maturity_amount = new Array();
            $('input[name="maturity_amount"]:checked').each(function(){
                maturity_amount.push($(this).val());
            });
            var maturity_amount_list = "&maturity_amount="+maturity_amount;


            var main_string = millionaire_tenure_list+millionaire_user_list+maturity_amount_list;
            main_string = main_string.substring(1, main_string.length);
            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>millionaire/ajax_get_millionaire",
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchMillionaire").html(msg);

                }
            });
        }

        $("input[type='checkbox'], input[type='radio']").on( "click", loadData );
    $(document).on('click','.squaredOne input[type="checkbox"]',function() {
        loadData();
    });

        loadData();
});

</script>