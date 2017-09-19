  <style>
      /*Testing comment*/
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
<section id="debitCard_header">
</section>

<!--Filter bar by bank START -->
<div class="container">
      <section id="filter-bar">
          <div class="row">
              <div class="col-md-3">
                  <div class="bank-filter">
                      <p class="bank-small-filter">50 of 50 results filtered by:</p>
                      <div class="bank-big-filter">

                          <!--<div class="dropdown mega-dropdown">
                              <a href="javascript:;" class="dropdown-toggle">
                                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                          </div>-->
                          <ul class="filter-by">
                              <li class="dropdown mega-dropdown">
                                  <a href="javascript:;" class="dropdown-toggle">
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
                                                      if(isset($this->session->userdata['debit_card_bank_ids'])){
                                                          $bank_ids = array_values($this->session->userdata['debit_card_bank_ids']);
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
                                                      <a class="btn-filter-clear" href="javascript:void(0);" id="clear_all">
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
                  <a class="btn-filter-clear"  href="javascript:void(0);" id="clear_all">
                        <span>
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </span>
                      Clear All
                  </a>
              </div>
          </div>
      </section>
  </div>
<!--Filter bar by bank START -->

<section id="card">
		<div class="container">
			<div class="row">

		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3 sidebar_parent">
                    <div id="sticky-anchor"></div>

                    <div class="card_left_bar home_loan_left_bar" id="sidebar">
						<div class="card_query">
							<p>Choose Account</p>
							<div class="query_radio">
                                <?php
                                $choose_account = $this->Select_model->select_all('debit_card_choose_account');

                                foreach($choose_account->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="choose_account" id="choose_account_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox " data-choose_account="<?php echo $row->account_name;?>" <?php echo ($this->session->userdata("choose_account") ==$row->id) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio debit_card_choose_account"></span>
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
                                        <input type="radio" name="looking_for" id="looking_for_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox" data-name="<?php echo $row->looking_for;?>" <?php echo ($this->session->userdata("looking_for") ==$row->id) ? 'checked' :'' ?>/>
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
                                        <input type="radio" name="i_want" id="i_want_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox" data-name="<?php echo $row->i_want;?>" <?php echo ($this->session->userdata("i_want") ==$row->id) ? 'checked' :'' ?>/>
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
                                        <input type="radio" name="card_issuer" id="card_issuer_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox" data-name="<?php echo $row->card_issuer_name;?>" <?php echo ($this->session->userdata("card_issuer") ==$row->id) ? 'checked' :'' ?>/>
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

				<div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">
                    <div id="loading" class="text-center" style="margin-top: 150px"></div>
                </div>
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
        var banner_height = $('#debitCard_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        if (scroll > header || header > 0){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").addClass("fixed");
        }
        if ($('#SearchDebitCard').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });
    /*
    $(document).on("scroll",function () {
        var scroller_anchor = $("#sidebar").offset().top;
        var sidebar_height = $("#sidebar").height();
        var window_height = $(window).height();

        var offsetToTop = parseInt($(this).scrollTop());
        var stickySidebar = $('#sidebar').offset() || { "top": NaN }.top;

        var top_height = $('#top-page').height();
        var banner_height = $('#debitCard_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
        if ($(window).scrollTop() >= scroller_anchor && sidebar_height < window_height )
        {
            $('#sidebar').addClass('fixed');
        }

        if ($(window).scrollTop() < scroller_anchor && sidebar_height > window_height )
        {
            $('#sidebar').removeClass('fixed');
        }

        if($('#sidebar').offset().top + $('#sidebar').height() >= $('.footer').offset().top - 65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }

        if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top + 230){
            $("#sidebar").addClass("fixed");
            $("#sidebar").removeClass("sidebar-absolute-bottom");
        }

        if($("#sidebar").offset().top < total_top){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute");
        }

    });
    */

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

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&debit_card_bank_ids="+bank_ids;

            var debit_card_choose_account = '&debit_card_choose_account='+ $('input[name="choose_account"]:checked').parent().text().trim();
            var debit_card_looking_for = '&debit_card_looking_for='+$('input[name="looking_for"]:checked').parent().text().trim();
            var debit_card_card_issuer = '&debit_card_card_issuer='+$('input[name="card_issuer"]:checked').parent().text().trim();
            var debit_card_i_want = '&debit_card_i_want='+$('input[name="i_want"]:checked').parent().text().trim();
//            alert(debit_card_i_want);

            var main_string = choose_account_list + looking_for_list + card_issuer_list + i_want_list + debit_card_choose_account + debit_card_looking_for + debit_card_card_issuer + debit_card_i_want + bank_id_list;
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
                    count_selected_row();
                    $("#SearchDebitCard").html(msg);
                    overlay( false );
                }
            });
        }


        function count_selected_row(){

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

            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&debit_card_bank_ids="+bank_ids;

            var debit_card_choose_account = '&debit_card_choose_account='+ $('input[name="choose_account"]:checked').parent().text().trim();
            var debit_card_looking_for = '&debit_card_looking_for='+$('input[name="looking_for"]:checked').parent().text().trim();
            var debit_card_card_issuer = '&debit_card_card_issuer='+$('input[name="card_issuer"]:checked').parent().text().trim();
            var debit_card_i_want = '&debit_card_i_want='+$('input[name="i_want"]:checked').parent().text().trim();

            var main_string = choose_account_list + looking_for_list + card_issuer_list + i_want_list + debit_card_choose_account + debit_card_looking_for + debit_card_card_issuer + debit_card_i_want + bank_id_list;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>debit_card/ajax_count_selected_row/";
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response){
                    $(".bank-small-filter").html(response);
                }
            });
        }


        function data_caching(){
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

            var bank_ids = new Array();

            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());

            });
            var bank_id_list = "&debit_card_bank_ids="+bank_ids;

            var choose_account_label = '&choose_account_label='+ $('input[name="choose_account"]:checked').parent().text().trim();
            var looking_for_label = '&looking_for_label='+$('input[name="looking_for"]:checked').parent().text().trim();
            var card_issuer_label = '&card_issuer_label='+$('input[name="card_issuer"]:checked').parent().text().trim();
            var i_want_label = '&i_want_label='+$('input[name="i_want"]:checked').parent().text().trim();

            var main_string = choose_account_list+looking_for_list+bank_id_list+card_issuer_list+i_want_list+choose_account_label+looking_for_label+card_issuer_label+i_want_label;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>debit_card/ajax_debit_card_caching/" ;

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                success: function(response){


                    var option = [];
                    var obj = JSON.parse(response);
                    if(obj.choose_account !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.choose_account_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="choose_account" data-choose_account="'+obj.choose_account+'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.looking_for !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.looking_for_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="looking_for" data-looking_for="'+ obj.looking_for +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.card_issuer !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.card_issuer_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="card_issuer" data-card_issuer="'+ obj.card_issuer +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.i_want !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.i_want_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="i_want" data-i_want="'+ obj.i_want +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }
                    if(obj.debit_card_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.debit_card_bank_ids.length; i++) {
                            var bank_id = obj.debit_card_bank_ids[i].split("=");
//                            console.log(bank_id[0]);
                            option.push('<li><div class="filter-option"><span>'+bank_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="debit_card_bank_id" data-debit_card_bank_id="'+ bank_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }

                    }
                    $(".filter-list").html(option);
                }
            });
        }


        loadData(page = null);
        data_caching();
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData(page = null);
            data_caching();
        } );


        $(document).on('click','#clear_all',function(){
            var data = 'session=debit_card';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/ajax_clear_session",
                data:data,
                success: function(response)
                {
                    window.location.href = window.location.href;

                }
            });
        });

        $(document).on('click', '.choose_account', function (){
            var  formData = $(this).data();
            var choose_account = formData.choose_account;
            $('#choose_account_'+choose_account).prop('checked', false);
            var data = 'choose_account='+choose_account;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/unset_debit_card_choose_account_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.looking_for', function (){
            var  formData = $(this).data();
            var looking_for = formData.looking_for;
            $('#looking_for_'+looking_for).prop('checked', false);
            var data = 'looking_for='+looking_for;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/unset_debit_card_looking_for_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.i_want', function (){
            var  formData = $(this).data();
            var i_want = formData.i_want;
            $('#i_want_'+i_want).prop('checked', false);
            var data = 'i_want='+i_want;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/unset_debit_card_i_want_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });
        $(document).on('click', '.card_issuer', function (){
            var  formData = $(this).data();
            var card_issuer = formData.card_issuer;
            $('#card_issuer_'+card_issuer).prop('checked', false);
            var data = 'card_issuer='+card_issuer;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/unset_debit_card_card_issuer_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });

        $(document).on('click', '.debit_card_bank_id', function (){
            var  formData = $(this).data();
            var debit_card_bank_id = formData.debit_card_bank_id;
            $('#filter-bank-'+debit_card_bank_id).prop('checked', false);
            var data = 'debit_card_bank_id='+debit_card_bank_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/unset_debit_card_bank_id_session",
                data: data,
                success: function(msg){
                    loadData( page = null );
                }
            });

        });



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

        $(document).on('click','#clear_all',function(){
            var data = 'session='+'debit_card';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/ajax_clear_session",
                data:data,
                success: function(response)
                {
                        window.location.href = window.location.href;

                }
            });
        });

        $(document).on('click', '.debit_card_choose_account', function (){
            var  formData = $(this).data();
            var chose_account = formData.choose_account;
            var str = chose_account.split();
            alert(str);
        });


</script>
