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
    .sidebar-absolute{
        /*transition: all 1s ease;*/
    }
    .sidebar-absolute-bottom{
        position: absolute;
        width: 262px;
        bottom: 35px;
        left: 15px;
    }
    .fixed {
        position: fixed;
        top: 0px;
        width: 262.5px;
    }
    .sidebar_parent{
        position: relative;
        min-height: 700px;;
    }
    #sidebar{
        margin-top: 0;
    }

</style>

<section id="fdr_header"></section>

<!--Filter bar by bank START -->
<div class="container">
    <section id="filter-bar">
        <div class="row">
            <div class="col-md-3">
                <div class="bank-filter">
                    <p class="bank-small-filter">50 of 50 results filtered by:</p>
                    <div class="bank-big-filter">

                        <!--<div class="dropdown mega-dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle">
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                        </div>-->
                        <ul class="filter-by">
                            <li class="dropdown mega-dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle">
                                    Filter By: Bank
                                        <span>
                                           <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </span>
                                </a>

                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <li>
                                        <div id="filter-carousel" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li class="" data-slide-to="0" data-target="#carousel"></li>
                                                <li class="active" data-slide-to="1" data-target="#carousel"></li>
                                            </ol>
                                            <div class="carousel-inner">

                                                <div class="item active row">
                                                    <?php
                                                    $selected_bank_ids = array();
                                                    if(isset($this->session->userdata['fdr_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['fdr_bank_ids']);
                                                        foreach($bank_ids as $bank_id){
                                                            $selected_bank = explode("=",$bank_id);
                                                            array_push($selected_bank_ids,$selected_bank[0]);
                                                        }
                                                    }

                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,0);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="item row">
                                                    <?php
                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,15);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="item row">
                                                    <?php
                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,30);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="item row">
                                                    <?php
                                                    $bank_info = $this->Front_end_select_model->select_bank_info(15,45);
                                                    foreach($bank_info->result() as $row){
                                                        $selected ='';
                                                        if(in_array($row->id,$selected_bank_ids)){
                                                            $selected ='checked';
                                                        }
                                                        ?>
                                                        <div class="col-sm-4 col-xs-12">
                                                            <div class="material_checkbox_group">
                                                                <input type="checkbox" id="filter-bank-<?php echo $row->id; ?>" name="bank_id" value="<?php echo $row->id; ?>" class="material_checkbox" <?php echo $selected;?>>
                                                                <label class="material_label_checkbox" for="filter-bank-<?php echo $row->id; ?>">
                                                                    <div class="filter-check-img">
                                                                        <img src="<?php echo base_url();?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" alt="<?php echo $row->bank_name; ?>"/>
                                                                    </div>
                                                                    <div class="filter-check-name">
                                                                        <?php echo $row->bank_name; ?>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <a data-slide="prev" role="button" href="#filter-carousel" class="left">
                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                    </a>
                                                    <a data-slide="next" role="button" href="#filter-carousel" class="right">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                </div>

                                                <div class="col-sm-6"></div>

                                                <div class="col-sm-3">
                                                    <a class="btn-filter-clear" href="javascript:void(0);">
                                                            <span>
                                                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                                            </span>
                                                        Clear All
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 no-padding">
                <ul class="filter-list">

                </ul>
            </div>
            <div class="col-md-1 no-padding-left">
                <a class="btn-filter-clear" href="javascript:void(0);">
                        <span>
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </span>
                    Clear All
                </a>
            </div>
        </div>
    </section>
</div>
<!--Filter bar by bank END -->

<section id="fdr_loan">
		<div class="container">
			<div class="row">
		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3 sidebar_parent">
                    <div id="sticky-anchor"></div>
					<div class="home_loan_left_bar" id="sidebar">
						<div class="card_query">
							<p>I Am</p>
							<div class="query_radio">
                                <?php
                                $loan_user = $this->Select_model->select_all('fdr_i_am','ASC');
                                foreach($loan_user->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="i_am" id="i_am<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" class="material_radiobox"  <?php echo ($this->session->userdata("fdr_i_am") == $row->id) ? 'checked' :'' ?> />
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
                <div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">
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

    // This function will be executed when the user scrolls the page.
    $(document).on("scroll",function () {
        var header = $("#sidebar").offset().top;
        var scroll = $(window).scrollTop();

        var top_height = $('#top-page').height();
        var banner_height = $('#fdr_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        if (scroll > header || header > 0){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").addClass("fixed");
        }
        if ($('#searchFDR').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });


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
            //console.log(cur_page);
        });


        function loadData( page = null ){
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
                beforeSend: function() {
                    overlay(true,true);
                },
                success: function(msg)
                {
                    overlay(false);
                    $("#searchFDR").html(msg);

                }
            });
        }


        function data_caching(){
            var amount = $('#deposited_amount').val();
            var fdr_deposit_amount = "&fdr_deposit_amount="+amount;

            var fdr_user = new Array();
            $('input[name="i_am"]:checked').each(function(){
                fdr_user.push($(this).val());
            });
            var fdr_user_list = "&fdr_i_am="+fdr_user;

            var fdr_tenure = new Array();
            $('input[name="fdr_tenure"]:checked').each(function(){
                fdr_tenure.push($(this).val());
            });
            var fdr_tenure_list = "&fdr_tenure="+fdr_tenure;

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());
            });
            var bank_id_list = "&fdr_bank_ids="+bank_ids;

            var fdr_i_am_label = '&fdr_i_am_label='+$('input[name="i_am"]:checked').parent().text().trim();
            var fdr_deposit_amount_label = '&fdr_deposit_amount_label='+$('input[name="deposit_amount"]:checked').parent().text().trim();
            var fdr_tenure_label = '&fdr_tenure_label='+$('input[name="fdr_tenure"]:checked').parent().text().trim();

            var main_string = fdr_user_list+bank_id_list+fdr_i_am_label+fdr_deposit_amount+fdr_deposit_amount_label+fdr_tenure_list+fdr_tenure_label;
            main_string = main_string.substring(1, main_string.length);

            var url_str = "<?php echo base_url();?>fdr/ajax_fdr_caching/" ;

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response){
                    var option = [];
                    var obj = JSON.parse(response);
                    if(obj.fdr_deposit_amount !=''){
                        option.push('<li><span class="filter-option"><span>'+obj.fdr_deposit_amount_label+'</span><a href="javascript:void(0);" class="fdr_deposit_amount" data-fdr_deposit_amount="'+obj.fdr_deposit_amount+'"><i class="fa fa-times" aria-hidden="true"></i></a></span></li>');
                    }
                    if(obj.fdr_i_am !=''){
                        option.push('<li><span class="filter-option"><span>'+obj.fdr_i_am_label+'</span><a href="javascript:void(0);" class="fdr_i_am" data-fdr_i_am="'+ obj.fdr_i_am +'"><i class="fa fa-times" aria-hidden="true"></i></a></span></li>');
                    }

                    if(obj.fdr_tenure !=''){
                        option.push('<li><span class="filter-option"><span>'+obj.fdr_tenure_label+'</span><a href="javascript:void(0);" class="fdr_tenure" data-fdr_tenure="'+ obj.fdr_tenure +'"><i class="fa fa-times" aria-hidden="true"></i></a></span></li>');
                    }

                    if(obj.fdr_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.fdr_bank_ids.length; i++) {
                            var bank_id = obj.fdr_bank_ids[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><span class="filter-option"><span>'+bank_id[1]+'</span><a href="javascript:void(0);" class="fdr_bank_id" data-fdr_bank_id="'+ bank_id[0] +'"><i class="fa fa-times" aria-hidden="true"></i></a></span></li>');
                        }
                    }
                    $(".filter-list").html(option);
                }
            });
        }

        loadData( page = null );
        data_caching();
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData( page = null );
            data_caching();
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