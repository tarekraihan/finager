<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>General</li><li>Meta Information</li><li> Add Meta Tags and Description</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                   General
							<span>>
								Add Meta Tags and Description
                            </span>
                </h1>
            </div>

        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">


                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Add Meta Tags and Description</h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <form id="age_limit" method="post" action="<?php echo base_url();?>general/add_meta_tag_description" class="smart-form" novalidate="novalidate">
                                    <?php
                                    //-----Display Success or Error message---
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                        <section>
                                            <div class="row">
                                                <section class="col col-md-12">
                                                    <label class="label">Product Type</label>
                                                    <label class="select">
                                                        <select name="txtProductType" id="txtProductType">
                                                            <option value="">Select Product Type</option>
                                                            <option value="card_card_informations" <?php echo set_select('txtProductType','card_card_informations');?>>Credit Card</option>
                                                            <option value="debit_card_info" <?php echo set_select('txtProductType','debit_card_info');?>>Debit Card</option>
                                                            <option value="home_loan_info" <?php echo set_select('txtProductType','home_loan_info');?>>Home Loan</option>
                                                            <option value="personal_loan_info" <?php echo set_select('txtProductType','personal_loan_info');?> disabled >Personal Loan</option>
                                                            <option value="auto_loan_info" <?php echo set_select('txtProductType','auto_loan_info');?> disabled >Auto Loan</option>
                                                            <option value="education_loan_info" <?php echo set_select('txtProductType','education_loan_info');?> disabled >Education Loan</option>
                                                            <option value="fdr_info" <?php echo set_select('txtProductType','fdr_info');?> disabled >FDR</option>
                                                            <option value="millionaire_info" <?php echo set_select('txtProductType','millionaire_info');?> disabled >Lakhpoti & Millionaire Scheme</option>
                                                            <option value="money_maxi_info" <?php echo set_select('txtProductType','money_maxi_info');?> disabled >Money Maximizer</option>
                                                            <option value="monthly_benefit_info" <?php echo set_select('txtProductType','monthly_benefit_info');?> disabled >Monthly Benefit Scheme</option>
                                                            <option value="saving_account_info" <?php echo set_select('txtProductType','saving_account_info');?> disabled >Savings Account</option>
                                                            <option value="current_account_info" <?php echo set_select('txtProductType','current_account_info');?> disabled >Current Account</option>
                                                            <option value="snd_info" <?php echo set_select('txtProductType','snd_info');?> disabled >SND Account</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProductType');?></label>
                                                </section>
                                                <section class="col col-md-12">
                                                    <label class="label">Product Name</label>
                                                    <label class="select">
                                                        <select name="txtProductName" id="txtProductName">

                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProductName');?></label>
                                                </section>
                                                <section class="col col-md-12">
                                                    <label class="label">Meta Tags</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="150" name="txtMetaTags" value="<?php echo set_value('txtMetaTags'); ?>" placeholder="Write Tags max : 150 char">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMetaTags');?></label>
                                                </section>
                                                <section class="col col-md-12">
                                                    <label class="label">Meta Description </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="300" name="txtMetaDescription" value="<?php echo set_value('txtMetaDescription'); ?>" placeholder="Write meta description max: 300 char">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMetaDescription');?></label>
                                                </section>

                                            </div>

                            </article>
                        <!-- WIDGET END -->

                        </fieldset>
                    <footer>
                        <div class="row">
                            <section class='col-md-6'>

                            </section>
                            <section class="col-md-6">
                                <label class="input">
                                    <button class="btn btn-primary" type="submit" >Save</button>
                                </label>
                            </section>

                        </div>
                    </footer>
                </form>

            </div>
            <!-- end widget content -->

    </div>
    <!-- end widget div -->

</div>
<!-- end widget -->

<!-- Widget ID (each widget will need unique ID)-->

</article>
<!-- END COL -->

</div>

<!-- end row -->

<!-- end row -->

</section>
<!-- end widget grid -->

</div>
<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    jQuery(document).ready(function(){

        jQuery('#txtProductType').on('change',function(){
            var table_name = jQuery("#txtProductType option:selected").val();
            var data = 'table_name = '+table_name;
            console.log(data);
            jQuery.ajax({
                url: "general/ajax_get_product_list/",
                type : "POST",
                dataType: 'json',
                data: data,
                success: function(response){
                    console.log(response);
                    var options ='';
                    var i = 0;
                    while ( i < response.length) {
                        options += '<option value="'+response[i].id+'">'+response[i].slug+'</option>';
                        i++;
                    }
                    jQuery('#txtProductName').html(options);
                }
            });

        })
    });

</script>