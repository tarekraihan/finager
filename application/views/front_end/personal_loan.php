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
	.card_details_pronsCons {
		margin-top:0px;
		border-bottom:0px;
	}
	.tPaybleAmount{
		font-size:9px;
	}
	.btnPmore {
		background-color: #f3f3f3;
		border: 1px solid #EAEAEC;
		padding: 1px 8px;
		margin-bottom: 5px;
		border-radius: 6px;
		font-size: 12px;
		font-weight: bold;
	}
	.btnPmore:hover {
		background-color: #2B99BB;
		color: #fff;
		border: 1px solid #2B99BB;
	}
</style>


	<section id="personal_header">
		
	</section>
	<section id="card">
		<div class="container">
			<div class="row">
		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3">
					<div class="home_loan_left_bar">
						<!-- slider range sidebar start-->
						<div class="card_query">
							<p>I Want </p>
							<div class="query_radio">
								<div>
									<?php
									$this->Common_model->table_name = 'personal_loan_looking_for';
									$this->Common_model->offset = 0;
									$this->Common_model->limit = 3;
									$result = $this->Common_model->select_all();
									//										print_r($result->result_array());die;
									foreach($result->result() as $row){
										?>
										<label class="material_radio_group">
											<input type="radio" name="i_want"  id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
											<span class="material_check_radio"></span>
											<?php echo $row->personal_loan_looking_for;?>
										</label><br/>
									<?php } ?>
								</div>
								<div>
									<!--a id="displayText" href="javascript:toggle();">More Filter <i class="fa fa-sort-desc fa-lg"></i></a-->
									<button class="btnPmore" data-toggle="collapse" data-target="#demo">More</button>
								</div>
								<!--div id="toggleText" style="display: none"-->
								<div id="demo" class="collapse">
									<?php
									$this->Common_model->table_name = 'personal_loan_looking_for';
									$this->Common_model->offset = 3;
									$this->Common_model->limit = 20;
									$result = $this->Common_model->select_all();
									foreach($result->result() as $row){
										?>
										<label class="material_radio_group">
											<input type="radio" name="i_want"  id="iWant<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
											<span class="material_check_radio"></span>
											<?php echo $row->personal_loan_looking_for;?>
										</label><br/>
									<?php } ?>
								</div>
							</div>
						</div>
						
						
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
													          
													        <div class="slideWrapper" id="avgSave">
													           
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
						<!-- slider range sidebar start-->
						
						<div class="card_query">
							<p>I Am</p>
							<div class="query_radio">
								<?php
								$this->Common_model->table_name = 'personal_loan_i_am';
								$this->Common_model->offset = 0;
								$this->Common_model->limit = 20;
								$result = $this->Common_model->select_all();
								foreach($result->result() as $row){
								?>
									<label class="material_radio_group">
										<input type="radio" name="i_am"  id="i_am<?php echo $row->id; ?>"  value="<?php echo $row->id ;?>" class="material_radiobox"/>
										<span class="material_check_radio"></span>
										<?php echo $row->i_am; ?>
									</label><br/>
								<?php } ?>

							</div>
						</div>

					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->
				<div class="col-sm-9 col-xs-9">
					<div id="searchPersonalLoan">

					</div>
				</div>
				<!-- Right bar content end -->
			</div>
		</div>
	</section>

<script>
    $(document).ready(function(){


        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='30'  style='margin-top:150px'/>").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
            loading_show();


            var personal_i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                personal_i_want.push($(this).val());
            });

            var personal_i_want_list = "&personal_i_want="+personal_i_want;


            var personal_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                personal_user.push($(this).val());
            });
            var personal_user_list = "&personal_user="+personal_user;


            var main_string = personal_i_want_list+personal_user_list;
            main_string = main_string.substring(1, main_string.length);
            console.log(main_string);
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>personal_loan/ajax_get_personal_loan",
                data: main_string,
                cache: false,
                success: function(msg)
                {

                    loading_hide();
                    // console.log(msg);

                    $("#searchPersonalLoan").html(msg);

                }
            });
        }
        $("input[type='checkbox'], input[type='radio']").on( "click", loadData );

        loadData();

        $('#searchPersonalLoan').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var loan_id = formData.loan_id;

            console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            $('#rePaymentSchedule'+loan_id).removeClass("in");

        });

        $('#searchPersonalLoan').on('click', '.rePaymentSchedule', function (){

            var  formData = $(this).data();
            var repayment = formData.repayment;
            console.log(repayment);

            $('#rePaymentSchedule'+repayment).html('<iframe  src="<?php echo base_url(); ?>en/personal_loan_chart"  frameborder="0"  width="100%" height="1560" scrolling="no" ></iframe>');
            $('#rePaymentSchedule'+repayment).toggleClass("in");
            $('#moreInfo'+repayment).removeClass("in");

        });


    });

</script>