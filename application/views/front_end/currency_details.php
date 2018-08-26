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
                                        <!-- <select id="currency-converter--you" data-theme="currency" data-dropdown-parent=".currency-converter--input-group--dropdown--you" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                            <option value="EUR" data-currency-name="Euro">EUR</option>
                                            <option value="GBP" data-currency-name="British Pound">GBP</option>
                                            <option value="YEN" data-currency-name="Japan Yen">YEN</option>
                                            <option value="USD" data-currency-name="US Dollar">USD</option>
                                        </select> -->

                                        <select title="Select your select2-hidden-accessible" class="selectpicker" id="currency-converter--you" data-theme="currency" data-dropdown-parent=".currency-converter--input-group--dropdown--you">
                                          <option value="USD" data-thumbnail="https://www.ultimatedrivingtours.com/wp-content/uploads/2018/02/united-states-of-america-usa.png">USD</option>
                                          <option value="GBP" data-thumbnail="http://shop.flagshop.com/media/catalog/product/cache/1/thumbnail/128x128/9df78eab33525d08d6e5fb8d27136e95/f/l/flag-world-euro-union.gif">EUR</option>
                                          <option value="YEN" data-thumbnail="https://www.theflagshop.co.uk/media/catalog/product/cache/1/thumbnail/9df78eab33525d08d6e5fb8d27136e95/j/a/japan-flag-8x5.gif">YEN</option>
                                          <option value="EUR" data-thumbnail="http://tsatours.com/wp-content/uploads/2012/02/UK-flag.gif">GBP</option>
                                        </select>
                                    </div>
                                    <label for="currency-converter--input--you" class="sr-only">Amount</label>
                                    <input type="text" value="10000" name="currency-converter--input--you" id="currency-converter--input--you" class="currency-converter--input-text currency-converter--input--you is-invalid">
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
                                    <input type="text" name="currency-converter--input--recipient" id="currency-converter--input--recipient" class="currency-converter--input-text currency-converter--input--recipient" value="80000">
                                    <div class="currency-converter--input-group--dropdown--recipient"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top-currency-cal-info">
                    <p class="currency-status"><span>1</span> USD = BDT <span>76.66</span></p>
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
                                                    if(isset($this->session->userdata['auto_loan_bank_ids'])){
                                                        $bank_ids = array_values($this->session->userdata['auto_loan_bank_ids']);
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
                                <input type="radio" name="i_want" id="iWant1" value="1" class="material_radiobox" checked="">
                                <span class="material_check_radio"></span>
                                Buy                             
                            </label>
                            <br>
                        
                            <label class="material_radio_group">
                                <input type="radio" name="i_want" id="iWant2" value="2" class="material_radiobox">
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
                                <input type="radio" name="Currency" id="USD" value="1" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                USD                               
                            </label>
                            <br>
                        
                            <label class="material_radio_group">
                                <input type="radio" name="Currency" id="GBP" value="2" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                GBP                          
                            </label>
                            <br> 

                            <label class="material_radio_group">
                                <input type="radio" name="Currency" id="EURO" value="2" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                EURO                          
                            </label>
                            <br> 

                            <label class="material_radio_group">
                                <input type="radio" name="Currency" id="YEN" value="2" class="material_radiobox">
                                <span class="material_check_radio"></span>
                                YEN                          
                            </label>
                            <br> 
                        </div>
                    </div>

                    <div class="card_query">
                        <p>Amount</p>
                        <div class="form-group_fdr">
                            <div class="input-group">
                                <span class="input-group-addon" id="search-currency-symbol">৳</span>
                                <input type="text" class="form-control" placeholder="Enter Amount" aria-describedby="search-currency-symbol">
                            </div>
                            <button class="btn btn-primary btn-block m-b-10">Submit</button>
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
                            <th>Bank Logo</th>
                            <th>Currency Short Code</th>
                            <th>Sell Rate</th>
                            <th>Central Bank Sell</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/AB-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td>70.45</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Bank-Alfalah.png">
                            </td>
                            <td>AUD</td>
                            <td>70.45</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Commercial-Bank-of-Ceylon.png">
                            </td>
                            <td>AUD</td>
                            <td>70.45</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Agrani-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td>70.45</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Dutch-Bangla-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td>70.45</td>
                            <td>68.99</td>
                        </tr>
                    </tbody>
                </table>

                <table id="currency-table-sell" class="hidden display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Bank Logo</th>
                            <th>Currency Short Code</th>
                            <th class="buy_rate_amount">Buy Rate</th>
                            <th class="buy_rate_amount">Central Bank Buy</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/AB-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td class="buy_rate_amount">75.56</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Bank-Alfalah.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td class="buy_rate_amount">75.56</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Commercial-Bank-of-Ceylon.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td class="buy_rate_amount">75.56</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Agrani-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td class="buy_rate_amount">75.56</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Dutch-Bangla-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td class="buy_rate_amount">75.56</td>
                        </tr>
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
        $('#currency-table-buy, #currency-table-sell').DataTable({
            "searching": false,
            "ordering": true,
            "info": false,
            "paging": false
        });
    });

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

    $(document).on('click','input[name="Currency"]',function(){
        var this_id = $(this).attr('id');
        if(this_id == 'USD'){
            $('#search-currency-symbol').html('$');
        }
        else if(this_id == 'GBP'){
            $('#search-currency-symbol').html('£');
        }
        else if(this_id == 'EURO'){
            $('#search-currency-symbol').html('€');
        }
        else if(this_id == 'YEN'){
            $('#search-currency-symbol').html('¥');
        }
    });
</script>