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
								Bank or Non Bank Branch Information
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
                                                        <select name="txtProductType">
                                                            <option value="card_card_informations" <?php echo set_select('txtProductType','card_card_informations');?>>Credit Card</option>
                                                            <option value="debit_card_info" <?php echo set_select('txtProductType','debit_card_info');?>>Debit Card</option>
                                                            <option value="home_loan_info" <?php echo set_select('txtProductType','home_loan_info');?>>Home Loan</option>
                                                            <option value="personal_loan_info" <?php echo set_select('txtProductType','personal_loan_info');?>>Personal Loan</option>
                                                            <option value="auto_loan_info" <?php echo set_select('txtProductType','auto_loan_info');?>>Auto Loan</option>
                                                            <option value="education_loan_info" <?php echo set_select('txtProductType','education_loan_info');?>>Education Loan</option>
                                                            <option value="fdr_info" <?php echo set_select('txtProductType','fdr_info');?>>FDR</option>
                                                            <option value="millionaire_info" <?php echo set_select('txtProductType','millionaire_info');?>>Lakhpoti & Millionaire Scheme</option>
                                                            <option value="money_maxi_info" <?php echo set_select('txtProductType','money_maxi_info');?>>Money Maximizer</option>
                                                            <option value="monthly_benefit_info" <?php echo set_select('txtProductType','monthly_benefit_info');?>>Monthly Benefit Scheme</option>
                                                            <option value="saving_account_info" <?php echo set_select('txtProductType','saving_account_info');?>>Savings Account</option>
                                                            <option value="current_account_info" <?php echo set_select('txtProductType','current_account_info');?>>Current Account</option>
                                                            <option value="snd_info" <?php echo set_select('txtProductType','snd_info');?>>SND Account</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProductType');?></label>
                                                </section>
                                                <section class="col col-md-12">
                                                    <label class="label">Product Name</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtBranchName" value="<?php echo set_value('txtBranchName');?>" placeholder="Write Branch Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBranchName');?></label>
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
    $(document).ready(function(){

        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
            }
        });
    });
</script>