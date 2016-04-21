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
                        $card_user = $this->Select_model->select_all('card_card_user');
                        foreach($card_user->result() as $row){
                            ?>
                            <label class="material_radio_group">
                        <input type="radio" name="iAm" id="iAm<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                           <?php echo $row->card_user;?>
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
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeTen" value="10000-19999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 10000- BDT 19999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeTwenty" value="20000-49999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 20000- BDT 49999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeFifty" value="50000-199999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 50000- BDT 199999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeTwoLac" value="200000-500000" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 200000- BDT 500000
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="myIncomeRange" id="myIncomeRangeFiveLac" value="500001-2500000" class="material_radiobox"/>
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
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitTen" value="10000-49999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 10000- BDT 49999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitFifty" value="50000-99999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 50000- BDT 99999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitOneLac" value="100000-199999" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 100000- BDT 199999
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitTwoLac" value="200000-500000" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        BDT 200000- BDT 500000
                    </label><br/>
                    <label class="material_radio_group">
                        <input type="radio" name="wantCreditLimit" id="wantCreditLimitFiveLac" value="500001-2500000" class="material_radiobox"/>
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
                    $credit_card_type = $this->Select_model->select_all('card_credit_card_type');
                    foreach($credit_card_type->result() as $row){
                    ?>
                    <label class="material_radio_group">
                        <input type="radio" name="creditCardType" id="looking<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" class="material_radiobox"/>
                        <span class="material_check_radio"></span>
                        <?php echo $row->cc_card_type; ?>
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
                <div class="card_query">
                    <p>Featurs& Benefits</p>
                    <div class="query_radio">
                    <?php
                        $card_benefits = $this->Select_model->select_all('card_reward');
                        foreach($card_benefits->result() as $row){
                    ?>
                            <div class="material_checkbox_group">
                                <input type="checkbox" id="featuresBenefits<?php echo $row->id; ?>" name="featuresBenefits" value="<?php echo $row->id; ?>" class="material_checkbox" />
                                <label class="material_label_checkbox" for="featuresBenefits<?php echo $row->id; ?>"><?php echo $row->reward_name; ?></label>
                            </div>
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
                            <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod15" value="15-30" class="material_radiobox"/>
                            <span class="material_check_radio"></span>
                            15-30 Days
                        </label><br/>
                        <label class="material_radio_group">
                            <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod31" value="31-45" class="material_radiobox"/>
                            <span class="material_check_radio"></span>
                            31-45 Days
                        </label><br/>
                        <label class="material_radio_group">
                            <input type="radio" name="maximumInterestFreePeriod" id="maximumInterestFreePeriod46" value="46" class="material_radiobox"/>
                            <span class="material_check_radio"></span>
                            More than 45 Days
                        </label><br/>
                    </div>

                </div>
                <hr/>
                <div class="card_query">
                    <p>Card Type</p>
                    <div class="query_radio">
                        <?php
                            $card_type = $this->Select_model->select_all('card_card_type');

                            foreach($card_type->result() as $row){
                        ?>
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="cardType<?php echo $row->id;?>" name="cardType" value="<?php echo $row->id;?>" class="material_checkbox" />
                                    <label class="material_label_checkbox" for="cardType<?php echo $row->id;?>"><?php echo $row->card_type_name;?></label>
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
                        $card_issuer = $this->Select_model->select_all('card_card_issuer');

                        foreach($card_issuer->result() as $row){
                        ?>
                            <div class="material_checkbox_group">
                                <input type="checkbox" id="cardIssuer<?php echo $row->id;?>" name="cardIssuer" value="<?php echo $row->id;?>" class="material_checkbox" />
                                <label class="material_label_checkbox" for="cardIssuer<?php echo $row->id;?>"><?php echo $row->card_issuer_name;?></label>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
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

//            var mainarray = new Array();

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
                url: "<?php echo base_url();?>card/get_credit_card",
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