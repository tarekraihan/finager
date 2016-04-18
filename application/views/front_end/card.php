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
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                                $query= $this->Front_end_select_model->select_all('card_card_user');
                                foreach($query->result() as $card_user){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="iAm" value="<?php echo $card_user->id;?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $card_user->card_user;?>
                                    </label><br/>

                            <?php
                                }
                            ?>
                        </div>
                        <hr/>
                    </div>
                    <div class="card_query">
                        <p>My Income Range</p>
                        <div class="query_radio">
                            <label class="material_radio_group">
                                <input type="radio" name="MyIncomeRange" value="Excellent" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 10000- BDT 19999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="MyIncomeRange" value="Good" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 20000- BDT 49999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="MyIncomeRange" value="Fair" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 50000- BDT 199999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="MyIncomeRange" value="Bad" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 200000- BDT 500000
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="MyIncomeRange" value="NoCreditLimitHistory" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 500000+
                            </label>
                        </div>
                        <hr/>
                    </div>
                    <div class="card_query">
                        <p>Want Credit Limit</p>
                        <div class="query_radio">

                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Excellent" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 10000- BDT 19999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Good" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 20000- BDT 49999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Fair" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 50000- BDT 199999
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="Bad" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 200000- BDT 500000
                            </label><br/>
                            <label class="material_radio_group">
                                <input type="radio" name="WantCreditLimit" value="NoCreditLimitHistory" class="material_radiobox"/>
                                <span class="material_check_radio"></span>
                                BDT 500000+
                            </label>
                        </div>
                        <hr/>
                    </div>
                    <div class="card_query">
                        <p>Looking For</p>
                        <div class="query_radio">
                            <?php
                            $query= $this->Front_end_select_model->select_all('card_credit_card_type');
                            foreach($query->result() as $cc_type){
                                ?>
                                <label class="material_radio_group">
                                    <input type="radio" name="lookingFor" value="<?php echo $cc_type->id;?>" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    <?php echo $cc_type->cc_card_type;?>
                                </label><br/>

                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <div class="more_filter">
                        <p><a id="displayMoreFilter" href="javascript:toggle2();">More Filter <i class="fa fa-sort-desc fa-lg"></i></a></p>
                    </div><br/>
                    <div id="moreFilterText" style="display: none">
                        <div class="card_query"  >
                            <p>Features & Benefits</p>
                            <div class="query_radio">
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits" name="FeatursBenefits" value="balanceTransferFeeNone" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits">Waiver on Annual Fee</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits1" name="FeatursBenefits" value="balanceTransferFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits1">Low Interest Rate</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits2" name="FeatursBenefits" value="balanceTransferFee4" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits2">Discounts</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits3" name="FeatursBenefits" value="balanceTransferFee5" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits3">Fund Transfer Facility</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits4" name="FeatursBenefits" value="foreignTransactionFeeNone" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits4">Airport Lounge Facility & Priority Pass</label>
                                </div><br/>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits5" name="FeatursBenefits" value="foreignTransactionFee1" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits5">Installment Payment for bill & Purchase</label>
                                </div><br/>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits6" name="FeatursBenefits" value="foreignTransactionFee2" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits6">Reward Program</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits7" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits7">Cashback/Rebate</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits8" name="FeatursBenefits" value="foreignTransactionFee1" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits8">No Issuance Fee</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits9" name="FeatursBenefits" value="foreignTransactionFee2" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits9">Travel Benefit</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits10" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits10">Worldwide Cash Advance Facility</label>
                                </div><br/>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits11" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits11">Convenient Payment Option</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits12" name="FeatursBenefits" value="foreignTransactionFee1" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits12">Zero Cash Advance Fee</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits13" name="FeatursBenefits" value="foreignTransactionFee2" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits13">Multiple Supplementary Card</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits14" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits14">Credit Assurance Program</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits15" name="FeatursBenefits" value="foreignTransactionFee2" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits15">Accidental Death Insurance Coverage</label>
                                </div><br/>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits16" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits16">Travel Accident Insurance</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits17" name="FeatursBenefits" value="foreignTransactionFee1" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits17">Self Set Limit</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits18" name="FeatursBenefits" value="foreignTransactionFee2" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits18">Free Supplementary Card</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits19" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits19">Auto Debit Payment Service</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits20" name="FeatursBenefits" value="foreignTransactionFee3" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits20">Global Emergency Assistance Service</label>
                                </div><br/>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits21" name="FeatursBenefits" value="foreignTransactionFee1" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits21">Utility Bill Pay Service</label>
                                </div>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="FeatursBenefits22" name="FeatursBenefits" value="foreignTransactionFee2" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="FeatursBenefits22">Cheque Book Facility</label>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="card_query">
                            <p>Card Type</p>
                            <div class="query_radio">

                                <?php
                                $query= $this->Front_end_select_model->select_all('card_card_type');
                                foreach($query->result() as $card_type){
                                    ?>
                                    <div class="material_checkbox_group">
                                        <input type="checkbox" id="CardType<?php echo $card_type->id;?>" name="CardType" value="<?php echo $card_type->id;?>" class="material_checkbox" />
                                        <label class="material_label_checkbox" for="CardType<?php echo $card_type->id;?>"><?php echo $card_type->card_type_name;?></label>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <hr/>
                        <div class="card_query">
                            <p>Card Issuer</p>
                            <div class="query_radio">
                                <?php
                                $query= $this->Front_end_select_model->select_all('card_card_issuer');
                                foreach($query->result() as $card_issuer){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="CardIssuer" value="<?php echo $card_issuer->id;?>" class="material_radiobox"/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $card_issuer->card_issuer_name;?>
                                    </label><br/>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <hr/>
                        <div class="card_query">
                            <p>Maximum Interest Free Period</p>
                            <div class="query_radio">
                                <label class="material_radio_group">
                                    <input type="radio" name="MaximumInterestFreePeriod" value="PhotoCardsOnly" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    15-30 Days
                                </label><br/>
                                <label class="material_radio_group">
                                    <input type="radio" name="MaximumInterestFreePeriod" value="AllCardsPhoto" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    31-45 Days
                                </label><br/>
                                <label class="material_radio_group">
                                    <input type="radio" name="MaximumInterestFreePeriod" value="AllCardsPhoto" class="material_radiobox"/>
                                    <span class="material_check_radio"></span>
                                    More than 45 Days
                                </label><br/>
                            </div>
                            <hr/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left bar query content end -->

            <!-- Right bar content start -->
            <div class="col-sm-9 col-xs-9" id="SearchCard">
                <div id="loading" class="text-center"></div>


            </div>
            <!-- Right bar content end -->




        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){

        function loading_show(){
            $('#loading').html("<img src='<?php echo base_url();?>resource/front_end/images/loader.gif' width='30' />").fadeIn('fast');
        }
        function loading_hide(){
            $('#loading').html("");
        }

        function loadData(){
            loading_show();
           /* var book_id=document.frm_search.txt_book.value;
            var limit=document.frm_search.txt_limit.value;
            var keyword=document.frm_search.txt_keyword.value;
            var editor_id=document.frm_search.txt_editor.value;
            var ques_id=document.frm_search.txt_quesid.value;
            var page_from=document.frm_search.txt_pagefrom.value;
            var page_to=document.frm_search.txt_pageto.value;
            var topic=document.frm_search.txt_topic.value;
            var tf=$('input[name=chk_tf]').is(':checked')==true?1:0;
            var ma=$('input[name=chk_ma]').is(':checked')==true?1:0;
            var sa=$('input[name=chk_sa]').is(':checked')==true?1:0;
            var fg=$('input[name=chk_fg]').is(':checked')==true?1:0;
            var sq=$('input[name=chk_sq]').is(':checked')==true?1:0;*/

            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>card/get_credit_card",
                data: {data:'I Love You'},
                success: function(msg)
                {

                    loading_hide();
                   // console.log(msg);

                    $("#SearchCard").html(msg);

                }
            });
        }

        loadData();
    });

    $('#SearchCard').on('click', '.displayText', function () {
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
//        console.log(formData);

            });

    //for more more filter
    function toggle2() {
        var ele = document.getElementById("moreFilterText");
        var text = document.getElementById("displayMoreFilter");
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