<link rel="stylesheet" type="text/css" href="https://thdoan.github.io/bootstrap-select/css/bootstrap-select.css">
<style type="text/css">

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
<section id="currency_header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="currency-title-section">
                    <h1>Exchange Rates</h1>
                    <h4>Check foreign exchange rates on the most popular currency pairs here <br>before you initiate your money transfer</h4>
                </div>
                <div class="top-currency-cal">
                    <div class="currency-converter--panel">
                        <div class="currency-converter--row">
                            <div class="currency-converter--column currency-converter--you">
                                <label for="currency-converter--you" class="currency-converter--column--title"> </label>
                                <div class="currency-converter--input-group is-focused" data-new-direction="to-recipient">
                                    <div class="currency-converter--currencies-dropdown">
                                        <select title="Select your select2-hidden-accessible" class="selectpicker" id="currency-converter--you" data-theme="currency" data-dropdown-parent=".currency-converter--input-group--dropdown--you">
                                          <option value="USD" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/usd.png">USD</option>
                                          <option value="EUR" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/euro.png">EUR</option>
                                          <option value="JPY" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/yen.gif">JYP</option>
                                          <option value="GBP" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/gbp.gif">GBP</option>
                                          <option value="AUD" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/asd.png">AUD</option>
                                          <option value="INR" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/inr.png">INR</option>
                                          <option value="CAD" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/cad.png">CAD</option>
                                          <option value="SGD" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/sgd.png">SGD</option>
                                          <option value="CNH" data-thumbnail="<?php echo base_url();?>resource/front_end/images/currency-icon/chn.png">CNH</option>
                                        </select>
                                    </div>
                                    <label for="currency-converter--input--you" class="sr-only">Amount</label>
                                    <input type="text" value="1000" name="currency-converter--input--you" id="currency-converter--input--you" class="currency-converter--input-text currency-converter--input--you is-invalid">
                                    <div class="currency-converter--input-group--dropdown--you"></div>
                                </div>
                            </div>

                            <div class="currency-converter--column currency-converter--recipient">
                                <label for="currency-converter--recipient" class="currency-converter--column--title"> </label>
                                <div class="currency-converter--input-group" data-new-direction="to-you">
                                    <div class="currency-converter--currencies-dropdown" id="currency-bdt">
                                        <span class="select2 select2-container select2-container--currency select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-currency-converter--recipient-container"><span class="select2-selection__rendered" id="select2-currency-converter--recipient-container" title="BDT">BDT</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <label for="currency-converter--input--recipient" class="sr-only">Amount</label>
                                    <input type="text" name="currency-converter--input--recipient" id="currency-converter--input--recipient" class="currency-converter--input-text currency-converter--input--recipient is-invalid" value="">
                                    <div class="currency-converter--input-group--dropdown--recipient"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top-currency-cal-info">
                    <p class="currency-status"><span>1</span> <span id="info-curr">USD</span> = BDT <span id="currency_in_bdt">76.66</span></p>
                    <input type="hidden" id="currency_rate" name="currency_rate" />
                    <p class="currency-converter--status--item currency-converter--status--success is-active">
                        <span class="currency-converter--status--item--text">Information Provided by Bangladesh Bank</span>
                    </p>
                </div>
            </div>
        </div>
    </div>     
</section>

<!--Filter bar by bank START -->
<div class="container">
    <section id="filter-bar">
        <div class="row">
            <div class="col-md-3">
                <div class="bank-filter">
                    <p class="bank-small-filter">50 of 50 results filtered by:</p>
                    <div class="bank-big-filter">
                        <ul class="filter-by">
                            <li class="dropdown mega-dropdown">
                                <a href="javascript:(0);" class="dropdown-toggle">
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
                                                    if(isset($this->session->userdata['currency_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['currency_bank_ids']);
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
<!--Filter bar by bank END -->

<section id="card">

    <div class="container">

        <div class="row">

            <!-- Left bar query content start -->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 sidebar_parent">

                <div id="sticky-anchor"></div>

                <div class="home_loan_left_bar" id="sidebar">
                    <div class="card_query">
                        <p>I Want to</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                            <?php if($this->session->userdata("currency_i_want")){ ?>
                                <input type="radio" name="i_want" id="iWant1" value="Buy" class="material_radiobox"  <?php echo ($this->session->userdata("currency_i_want") =="Buy") ? 'checked' :'' ?>>
                            <?php }else{ ?>    
                                <input type="radio" name="i_want" id="iWant1" value="Buy" class="material_radiobox" checked >
                            <?php } ?>
                                <span class="material_check_radio"></span>
                                Buy                             
                            </label>
                            <br>
                        
                            <label class="material_radio_group">
                                <input type="radio" name="i_want" id="iWant2" value="Sell" class="material_radiobox"  <?php echo ($this->session->userdata("currency_i_want") =="Sell") ? 'checked' :'' ?>>
                                <span class="material_check_radio"></span>
                                Sell                                
                            </label>
                            <br> 
                        </div>
                    </div>


                    <div class="card_query">
                        <p>Currency</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                            <?php if($this->session->userdata("currency")){ ?>
                                <input type="radio" name="currency" id="USD" value="USD" class="material_radiobox"  <?php echo ($this->session->userdata("currency") =="USD") ? 'checked' :'' ?>>
                            <?php  }else{ ?>
                                <input type="radio" name="currency" id="USD" value="USD" class="material_radiobox" checked >
                            <?php } ?>
                                <span class="material_check_radio"></span>
                                USD                               
                            </label>
                            <br>
                        
                            <label class="material_radio_group">
                                <input type="radio" name="currency" id="GBP" value="GBP" class="material_radiobox"  <?php echo ($this->session->userdata("currency") =="GBP") ? 'checked' :'' ?>>
                                <span class="material_check_radio"></span>
                                GBP                          
                            </label>
                            <br> 

                            <label class="material_radio_group">
                                <input type="radio" name="currency" id="EUR" value="EUR" class="material_radiobox"  <?php echo ($this->session->userdata("currency") =="EUR") ? 'checked' :'' ?>>
                                <span class="material_check_radio"></span>
                                EUR
                            </label>
                            <br> 

                            <label class="material_radio_group">
                                <input type="radio" name="currency" id="JPY" value="JPY" class="material_radiobox"  <?php echo ($this->session->userdata("currency") =="JPY") ? 'checked' :'' ?>>
                                <span class="material_check_radio"></span>
                                JPY                          
                            </label>
                            <br> 
                        </div>
                    </div>

                    <div class="card_query">
                        <p>Amount</p>
                        <div class="form-group_fdr">
                            <div class="input-group">
                                <span class="input-group-addon" id="search-currency-symbol">$</span>
                                <input type="text" id="finalAssest" value=" <?php echo ($this->session->userdata("currency_amount") ) ? $this->session->userdata("currency_amount") :'1000' ?>" class="form-control" placeholder="Enter Amount" aria-describedby="search-currency-symbol">
                            </div>
                            <button id="searchCurrency" class="btn btn-primary btn-block m-b-10">Submit</button>
                        </div>
                    </div>

                    <div id="sidebar-bottom"></div>
                </div>
            </div>
            <!-- Left bar query content end -->
            <!-- Right bar content start -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-content-area">
                <div id="searchAutoLoan">
                    <div id="loading" class="text-center"></div>
                </div>
                <table id="currency-table-buy" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th class="no-sort">Bank Logo</th>
                            <th class="no-sort">Short Code</th>
                            <th>Sell Rate</th>
                            <th>Sell Amount
                            <th>Sell Rate <br/>(Central Bank)</th>
                            <th>Sell Amount <br/>(Central Bank)</th>
                        </tr>
                    </thead>

                    <tbody id="searchSell">
                    
                    </tbody>
                </table>
                <table id="currency-table-sell" class="hidden display" style="width:100%">
                    <thead>
                        <tr>
                            <th class="no-sort">Bank Logo</th>
                            <th class="no-sort">Short Code</th>
                            <th >Buy Rate</th>
                            <th >Buy Amount</th>
                            <th >Buy Rate <br/>(Central Bank)</th>
                            <th >Buy Amount <br/>(Central Bank)</th>
                        </tr>
                    </thead>
                    <tbody id="searchBuy">
                   
                    </tbody>
                </table>

                <section id="hiden_div"></section>
            </div>
            <!-- Right bar content end -->
        </div>
    </div>
</section>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://thdoan.github.io/bootstrap-select/js/bootstrap-select.js"></script>
<script type="text/javascript" src="http://www.decorplanit.com/plugin/autoNumeric-1.9.18.js"></script>
<script>
    // This function will be executed when the user scrolls the page.
    $(document).on("scroll",function () {
        var header = $("#sidebar").offset().top;
        var scroll = $(window).scrollTop();

        var top_height = $('#top-page').height();
        var banner_height = $('#auto_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        if (scroll > header || header > 0){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").addClass("fixed");
        }
        if ($('#searchAutoLoan').offset().top > scroll){
            $("#sidebar").removeClass("sidebar-absolute-bottom");
            $("#sidebar").removeClass("fixed");
        }
        if($('#sidebar').offset().top + $('#sidebar').height() > $('.footer').offset().top-65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }
    });

    $(document).ready(function() {
       
         function loadData(){
            var currency = "&currency=" + $('input[name="currency"]:checked').val();
          
            var amount = $('#finalAssest').val().trim();
            var principal_amount = "&amount="+amount;
            
            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val());
            });
            var bank_id_list = "&currency_bank_ids="+bank_ids;

            var main_string = currency+principal_amount+bank_id_list;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>currency_rate/ajax_get_currency_rate/";
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
                    //overlay(true,true);
                },
                success: function(response){
                    var data = JSON.parse(response);
                    var response_sell ='';
                    var response_buy = '';
                    data.forEach(function(element) {
                        
                        response_sell += '<tr>' +
                            '<td> ' +
                                '<img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/'+ element.bank_logo+ '">'+
                            '</td>'+
                            '<td>'+ element.currency_name +'</td>'+
                            '<td>BDT '+ Number(element.bank_buy_rate).toFixed(2) +'</td>'+
                            '<td>BDT '+ Number(element.bank_buy_rate_amount).toFixed(2)+ '</td>'+
                            '<td>BDT '+ Number(element.central_bank_buy_rate).toFixed(2)+'</td>'+
                            '<td>BDT '+ Number(element.central_bank_buy_rate_amount).toFixed(2)+'</td>'+
                            '</tr>';
                            response_buy += '<tr>' +
                            '<td> ' +
                                '<img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/'+ element.bank_logo+ '">'+
                            '</td>'+
                            '<td>'+ element.currency_name +'</td>'+
                            '<td>BDT '+ Number(element.bank_sell_rate).toFixed(2) +'</td>'+
                            '<td>BDT '+ Number(element.bank_sell_rate_amount).toFixed(2) + '</td>'+
                            '<td>BDT '+ Number(element.central_bank_sell_rate).toFixed(2) +'</td>'+
                            '<td>BDT '+ Number(element.central_bank_sell_rate_amount).toFixed(2) +'</td>'+
                            '</tr>';
                    });
                    $("#searchSell").html(response_sell);
                    $("#searchBuy").html(response_buy);
                }

            });
        }

        function data_caching(){
            var currency = "&currency=" + $('input[name="currency"]:checked').val();
            var i_want = "&currency_i_want=" + $('input[name="i_want"]:checked').val();
          
            var amount = $('#finalAssest').val().trim();
            var principal_amount = "&amount="+amount;
            
            var bank_ids = new Array();
            $('input[name="bank_id"]:checked').each(function(){
                bank_ids.push($(this).val()+'='+$(this).parent('.material_checkbox_group').find('.filter-check-name').text().trim());

            });
            var bank_id_list = "&currency_bank_ids="+bank_ids;

            var main_string = currency+principal_amount+bank_id_list+i_want;
            main_string = main_string.substring(1, main_string.length);
            
            var url_str = "<?php echo base_url();?>currency_rate/ajax_currency_rate_caching/";

            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
                    //overlay(true,true);
                },
                success: function(response){
                    var option = [];
                    var obj = JSON.parse(response);
                    if(obj.currency_i_want !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.currency_i_want_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="currency_i_want" data-currency_i_want="'+obj.currency_i_want+'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.currency !=''){
                        option.push('<li><div class="filter-option"><span>'+obj.currency_label+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="currency" data-currency="'+ obj.currency +'"><i class="icon-close icons"></i></span></a></div></li>');
                    }

                    if(obj.currency_bank_ids.length > 0 ){
                        for (var i = 0; i < obj.currency_bank_ids.length; i++) {
                            var bank_id = obj.currency_bank_ids[i].split("=");
                            option.push('<li><div class="filter-option"><span>'+bank_id[1]+'</span><span class="filter-icon-wrapper"><a href="javascript:void(0);" class="currency_bank_id" data-currency_bank_id="'+ bank_id[0] +'"><i class="icon-close icons"></i></span></a></div></li>');
                        }

                    }
                    $(".filter-list").html(option);
                }
            });
        }


        loadData();
        data_caching();
        $("input[type='checkbox'], input[name='currency']").on( "click", function() {
            loadData();
            data_caching();
        } );
        $(" #searchCurrency ").on( "click", function() {
            loadData();
            data_caching();
        } );


        $('#currency-table-buy, #currency-table-sell').DataTable({
            searching: false,
            info: false,
            paging: false,
            bSort: false,
            columnDefs: [
                { targets: [1],orderable: true }
            ]
        });

        $('#currency-converter--you').on('change', function(){
           var selected = $('.selectpicker option:selected').val();
           $('#info-curr').html(selected);
           var currency = <?php echo json_encode($currency); ?>;
           var currency_exchange_in_bdt = {
               USD : currency.USD.central_bank_sell_rate,
               EUR : currency.EUR.central_bank_sell_rate,
               JPY : currency.JPY.central_bank_sell_rate,
               GBP : currency.GBP.central_bank_sell_rate,
               AUD : currency.AUD.central_bank_sell_rate,
               INR : currency.INR.central_bank_sell_rate,
               CAD : currency.CAD.central_bank_sell_rate,
               SGD : currency.SGD.central_bank_sell_rate,
               CNH : currency.CNH.central_bank_sell_rate
           };
           $('#currency_in_bdt').text(currency_exchange_in_bdt[selected]);
           $('#currency_rate').val(currency_exchange_in_bdt[selected]);
           calculation_when_change_btd();
        }).trigger("change");

        $('#currency-converter--input--recipient').on('keyup', function(){
            var currency_rate = $("#currency_rate").val();
            var bdt_amount = $("#currency-converter--input--recipient").val();
            
            var calculated_amount = (parseFloat(bdt_amount) / parseFloat(currency_rate)).toFixed(2);
          
            $("#currency-converter--input--you").val( check_after_decimal_digits_are_non_zero(calculated_amount) );
        });

        $('#currency-converter--input--you').on('keyup', function(){
            calculation_when_change_btd();
        }).trigger("keyup");

        $(document).on('click','#clear_all',function(){
            var data = 'session=currency';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>currency_rate/ajax_clear_session",
                data:data,
                success: function(response)
                {
                    window.location.href = window.location.href;

                }
            });
        });


        $(document).on('click', '.currency_bank_id', function (){
            var  formData = $(this).data();
            var currency_bank_id = formData.currency_bank_id;
            $('#filter-bank-'+currency_bank_id).prop('checked', false);
            var data = 'currency_bank_id='+currency_bank_id;
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>currency_rate/unset_currency_bank_id_session",
                data: data,
                success: function(msg){
                    loadData();
                }
            });

        });

        
        $('input[name="currency"]').on('change',function(){
            var this_id = $(this).attr('id');
            var selected_currency = $('input[name="currency"]:checked').val();
            console.log('currency==',selected_currency)
            if(this_id == 'USD' || selected_currency == 'USD'){
                $('#search-currency-symbol').html('$');
            }
            else if(this_id == 'GBP' || selected_currency == 'GBP'){
                $('#search-currency-symbol').html('£');
            }
            else if(this_id == 'EUR' || selected_currency == 'EUR'){
                $('#search-currency-symbol').html('€');
            }else{
                $('#search-currency-symbol').html('¥');
            }
        }).trigger('change');

    });

     

    function calculation_when_change_btd(){
        var currency_rate = $("#currency_rate").val();
        
        var foreign_amount = $("#currency-converter--input--you").val(); 
       
        var calculated_amount = (parseFloat(foreign_amount) * parseFloat(currency_rate)).toFixed(2);
        $("#currency-converter--input--recipient").val( check_after_decimal_digits_are_non_zero(calculated_amount) );
    }
    function check_after_decimal_digits_are_non_zero(val){
        var num_array = val.toString().split(".");
        if(num_array.length == 1 || num_array[1] == "00"){
            return parseInt( num_array[0] );
        }else{
            return val;
        }
    }

    //cursor blink
    jQuery.fn.putCursorAtEnd = function() {
      return this.each(function() {
        // Cache references
        var $el = $(this),
            el = this;

        // Only focus if input isn't already
        if (!$el.is(":focus")) {
         $el.focus();
        }

        // If this function exists... (IE 9+)
        if (el.setSelectionRange) {
          // Double the length because Opera is inconsistent about whether a carriage return is one character or two.
          var len = $el.val().length * 2;
          // Timeout seems to be required for Blink
          setTimeout(function() {
            el.setSelectionRange(len, len);
          }, 1);
        
        } else {
          // As a fallback, replace the contents with itself
          // Doesn't work in Chrome, but Chrome supports setSelectionRange
          $el.val($el.val());
        }
        // Scroll to the bottom, in case we're in a tall textarea
        // (Necessary for Firefox and Chrome)
        this.scrollTop = 999999;
      });
    };

    (function() {
      var searchInput = $("#currency-converter--input--you");
      searchInput
        .putCursorAtEnd() // should be chainable
        .on("focus", function() { // could be on any event
          searchInput.putCursorAtEnd()
        });
      
    })();


    $('#iWant1').click(function(){
        if($(this).is(':checked') == true){
            $('#currency-table-buy').removeClass('hidden');
            $('#currency-table-sell').addClass('hidden');
        }
    });

    $('#iWant2').click(function(){
        if($(this).is(':checked') == true){
            $('#currency-table-buy').addClass('hidden');
            $('#currency-table-sell').removeClass('hidden');
        }
    });



</script>