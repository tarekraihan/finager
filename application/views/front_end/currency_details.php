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

<section id="auto_header">
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
                                <input type="radio" name="i_want" id="iWant1" value="1" class="material_radiobox">
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
                            <input type="text" name="" class="form-control m-b-10" id="" value="" placeholder="Enter Amount">
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
                
                <table id="currency-table" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Bank Logo</th>
                            <th>Currency Short Code</th>
                            <th class="buy_rate_amount">Buy Rate</th>
                            <th>Sell Rate</th>
                            <th class="buy_rate_amount">Central Bank Buy</th>
                            <th>Central Bank Sell</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/AB-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td>70.45</td>
                            <td class="buy_rate_amount">75.56</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Bank-Alfalah.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td>70.45</td>
                            <td class="buy_rate_amount">75.56</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Commercial-Bank-of-Ceylon.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td>70.45</td>
                            <td class="buy_rate_amount">75.56</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Agrani-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td>70.45</td>
                            <td class="buy_rate_amount">75.56</td>
                            <td>68.99</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="currency-bank-logo" src="<?php echo base_url();?>resource/common_images/bank_logo/Dutch-Bangla-Bank.png">
                            </td>
                            <td>AUD</td>
                            <td class="buy_rate_amount">76.88</td>
                            <td>70.45</td>
                            <td class="buy_rate_amount">75.56</td>
                            <td>68.99</td>
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
        $('#currency-table').DataTable({
            "searching": false,
            "ordering": true,
            "info": false,
            "paging": false
        });
    });
</script>