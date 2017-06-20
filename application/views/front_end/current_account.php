<section id="currantAccount_header">

</section>
<section id="card">
    <div class="container">
        <div class="row">
            <!-- Left bar query content start -->
            <div class="col-sm-3 col-xs-3">
                <div class="card_left_bar">
                    <div class="caccount_left_head">
                        <p>I Am</p>
                        <div class="query_radio">
                            <?php
                            $this->Common_model->table_name = 'current_account_i_am';
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
                <div id="currentAccountSearch">
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
                                <a class="cart_anchor01 comapre-card">

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

    function overlay(s, l) {
        $('.overlay').remove();
        if( s )
            $('body').append('<div class="overlay" style="width:100%;height:100%;position:fixed;display:block;background:#000;opacity:0.7;top:0;left:0;z-index:1000;"></div>');
        if( l )
            $('.overlay').html('<div style="position:absolute;top:'+(document.documentElement.clientHeight/2)+'px;left:'+(document.documentElement.clientWidth/2)+'px;"><img src="<?php echo base_url();?>resource/front_end/images/loader.gif" width="100"></div>');
    }
    $(document).on('click','#pagination a',function(e){
        e.preventDefault();
        var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
        loadData(cur_page);
    });

    $(document).on('click','#pagination a',function(e){
        e.preventDefault();
        var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
        loadData(cur_page);
        console.log(cur_page);
    });



    function loadData( page = null ){
        var page_count ='';
        if( page != null ){
            page_count = page ;
        }
        var current_account_i_am = new Array();
        $('input[name="i_am"]:checked').each(function(){
            current_account_i_am.push($(this).val());
        });
        var current_account_i_am_list = "&current_account_i_am="+current_account_i_am;
        var url_str = "<?php echo base_url();?>current_account/ajax_get_current_account/" + page_count;
        $.ajax
        ({
            type: "POST",
            url: url_str,
            data: current_account_i_am_list,
            cache: false,
            beforeSend: function() {
                overlay(true,true);
            },
            success: function(msg)
            {
                overlay(false);
                $("#currentAccountSearch").html(msg);

            }
        });
    }

    $(" input[type='radio']").on( "click", function() {
        loadData(page = null);
    } );


    $(document).ready(function(){
        loadData( page = null );
    });


    //for show hide (more info & Available Offer)

    $('#currentAccountSearch').on('click', '.more_info', function (){
        var  formData = $(this).data();
        var account_id = formData.account_id;
        console.log(account_id);
        $("#moreInfo"+account_id).toggleClass("in");
    });

</script>