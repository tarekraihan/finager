<script src="<?php echo base_url(); ?>resource/admin/js/plugin/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    $(document).ready(function () {

        CKEDITOR.replace('.ckeditor', {
            height: '80px',
            startupFocus: true,
            toolbarGroups: [
                {name: 'document', groups: ['mode', 'document']}, // Displays document group with its two subgroups.
                {name: 'clipboard', groups: ['clipboard', 'undo']}, // Group's name will be used to create voice label.
                '/', // Line break - next group will be placed in new line.
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                '/', // Line break - next group will be placed in new line.
                {name: 'links'}
            ]


        });
        CKEDITOR.config.removePlugins = 'save,print,about,preview,find,maximize,showblocks';

    });
</script>
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
        <li>Card</li><li>Debit Card</li><li> Add Card Information</li>
    </ol>
</div>
<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<div id="content">

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-table fa-fw "></i>
            Debit Card
                <span>>
                    Add Card Information
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
            <h2>Add Card Information</h2>

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

                <form id="age_limit" method="post" action="<?php echo base_url();?>debit_card/add_card_info" class="smart-form" novalidate="novalidate">
                    <?php
                    //-----Display Success or Error message---
                    if(isset($feedback)){
                        echo $feedback;
                    }
                    ?>
                    <fieldset>
                        <section>
                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">Bank Name</label>
                                    <label class="select">
                                        <select name="txtBankName" id="txtBankName">
                                            <?php echo $this->Select_model->select_bank();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtBankName');?></label>
                                </section>

                                <section class="col col-6">
                                    <label class="label">Choose Account</label>
                                    <label class="select">
                                        <select name="txtChooseAccount" id="txtChooseAccount">
                                            <?php echo $this->Select_model->debit_card_choose_account();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtChooseAccount');?></label>
                                </section>
                            </div>
                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">Looking For</label>
                                    <label class="select">
                                        <select name="txtLookingFor" id="txtLookingFor">
                                            <?php echo $this->Select_model->debit_card_looking_for();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtLookingFor');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">I Want</label>
                                    <label class="select">
                                        <select name="txtIWant" id="txtIWant">
                                            <?php echo $this->Select_model->debit_card_i_want();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtIWant');?></label>
                                </section>
                            </div>
                            <div class="row">



                                <section class="col col-6">
                                    <label class="label">Card Issuer</label>
                                    <label class="select">
                                        <select name="txtCardIssuer" id="txtCardIssuer">
                                            <?php echo $this->Select_model->debit_card_issuer();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtCardIssuer');?></label>
                                </section>

                                <section class="col col-6">
                                    <label class="label">Card Name</label>
                                    <label class="input">
                                        <input type="text" maxlength="150" name="txtCardName" value="<?php echo set_value('txtCardName'); ?>" placeholder="Write Bank Card Name">
                                    </label>
                                    <label class="red"><?php echo form_error('txtCardName');?></label>
                                </section>
                            </div>

                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">Annual Fee</label>
                                    <label class="input">
                                        <input type="text" maxlength="150" name="txtAnnualFee" value="<?php echo set_value('txtAnnualFee'); ?>" placeholder="Write Annual Fee">
                                    </label>
                                    <label class="red"><?php echo form_error('txtAnnualFee');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Daily Withdrawal Limit</label>
                                    <label class="input">
                                        <input type="text" maxlength="15" name="txtDailyWithdrawalLimit" value="<?php echo set_value('txtDailyWithdrawalLimit'); ?>" placeholder="Write Daily Withdrawal limit">
                                    </label>
                                    <label class="red"><?php echo form_error('txtDailyWithdrawalLimit');?></label>
                                </section>
                            </div>
                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">No of Withdrawal (Times)</label>
                                    <label class="input">
                                        <input type="text" maxlength="2" name="txtNoOfWithdrawal" id="txtNoOfWithdrawal" value="<?php echo set_value('txtNoOfWithdrawal'); ?>" placeholder="Write no of withdrawal">
                                    </label>
                                    <label class="red"><?php echo form_error('txtNoOfWithdrawal');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Per Transaction Limit</label>
                                    <label class="input">
                                        <input type="text" maxlength="15" name="txtPerTransactionLimit" id="txtPerTransactionLimit" value="<?php echo set_value('txtPerTransactionLimit'); ?>" placeholder="Write Per Transaction Limit">
                                    </label>
                                    <label class="red"><?php echo form_error('txtPerTransactionLimit');?></label>
                                </section>
                            </div>

                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">ATM Charge( Own )</label>
                                    <label class="input">
                                        <input type="text" maxlength="10" name="txtOwnAtmCharge" id="txtOwnAtmCharge" value="<?php echo set_value('txtOwnAtmCharge'); ?>" placeholder="Write own ATM Charge">
                                    </label>
                                    <label class="red"><?php echo form_error('txtNoOfWithdrawal');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">ATM Charge( Other )</label>
                                    <label class="input">
                                        <input type="text" maxlength="15" name="txtOtherAtmCharge" id="txtOtherAtmCharge" value="<?php echo set_value('txtOtherAtmCharge'); ?>" placeholder="Write Other ATM Charge">
                                    </label>
                                    <label class="red"><?php echo form_error('txtOtherAtmCharge');?></label>
                                </section>
                            </div>

</article>
<!-- WIDGET END -->



<!-- NEW WIDGET START -->
<article class="col-sm-6 col-md-6 col-lg-6">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
            <h2>Features</h2>

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
                <section class="col col-12">

                    <label class="input">
                        <textarea type="text" id="txtAvailableFeatures" class="ckeditor" name="txtAvailableFeatures"><?php echo set_value('txtAvailableFeatures'); ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtAvailableFeatures');?></label>
        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

</article>
<!-- WIDGET END -->
<!-- NEW WIDGET START -->
<article class="col-sm-6 col-md-6 col-lg-6">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
            <h2>Requirements</h2>

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
                <section class="col col-12">

                    <label class="input">
                        <textarea type="text" id="txtRequirements" class="ckeditor" name="txtRequirements"><?php echo set_value('txtRequirements'); ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtRequirements');?></label>
        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

</article>
<!-- WIDGET END -->

<!-- NEW WIDGET START -->
<article class="col-sm-6 col-md-6 col-lg-6">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
            <h2>Terms and Conditions</h2>

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
                <section class="col col-12">

                    <label class="input">
                        <textarea type="text" id="txtTermsAndConditions" class="ckeditor" name="txtTermsAndConditions"><?php echo set_value('txtTermsAndConditions'); ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtTermsAndConditions');?></label>
        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

</article>
<!-- WIDGET END -->
<!-- NEW WIDGET START -->
<article class="col-sm-6 col-md-6 col-lg-6">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
            <h2>Fees and Charges</h2>

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
                <section class="col col-12">

                    <label class="input">
                        <textarea type="text" id="txtFeesAndCharges" class="ckeditor" name="txtFeesAndCharges"><?php echo set_value('txtFeesAndCharges'); ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtFeesAndCharges');?></label>
        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

</article>
<!-- WIDGET END -->
<!-- NEW WIDGET START -->
<article class="col-sm-6 col-md-6 col-lg-6">

    <!-- Widget ID (each widget will need unique ID)-->
    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
            <h2>Review</h2>

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
                <section class="col col-12">

                    <label class="input">
                        <textarea type="text" id="txtReview" class="ckeditor" name="txtReview"><?php echo set_value('txtReview'); ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtReview');?></label>
        </div>
        <!-- end widget div -->

    </div>
    <!-- end widget -->

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
        $("#txtDepositType").on('change', function(){
            call_draft_info();
        });
        $("#txtBankName").on('change', function(){
            call_draft_info();
        });
        $("#txtNonBankName").on('change', function(){
            call_draft_info();
        });
        $("#txtIAm").on('change', function(){
            call_draft_info();
        });

        $("#is_minimum_amount_no_limit").click(function () {
            if ($(this).is(":checked")) {

                $("#txtMinimumDepositAmount").attr("disabled", "disabled");
                $('#txtMinimumDepositAmount').val("");
            } else {
                $("#txtMinimumDepositAmount").removeAttr("disabled");
                $("#txtMinimumDepositAmount").focus();
            }
        });

        $("#is_maximum_amount_no_limit").click(function () {
            if ($(this).is(":checked")) {

                $("#txtMaximumDepositAmount").attr("disabled", "disabled");
                $('#txtMaximumDepositAmount').val("");
            } else {
                $("#txtMaximumDepositAmount").removeAttr("disabled");
                $("#txtMaximumDepositAmount").focus();
            }
        });

        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
            }
        });

        if($("input[name ='is_non_bank']").is(':checked')){
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
    });

    function call_draft_info(){
        var deposit_type = $('#txtDepositType').val();
        var i_am = $('#txtIAm').val();
        var bank_id = $('#txtBankName').val();
        var non_bank_id = $('#txtNonBankName').val();
        if($("input[name ='is_non_bank']").is(':checked')){
            var param = 'non_bank_id='+non_bank_id+'&deposit_type='+deposit_type+'&i_am='+i_am+'&is_non_bank=1';
        }else{
            var param = 'bank_id='+bank_id+'&deposit_type='+deposit_type+'&i_am='+i_am+'&is_non_bank=0';
        }
        if(bank_id != '' && deposit_type != '' && i_am != ''){
            $.ajax({
                url: "<?php echo base_url(); ?>fdr/ajax_get_draft_fdr_info",
                type : "POST",
                dataType : "json",
                data : param
            })
                .done(function( data ) {

                    if(data.process){

                        CKEDITOR.instances['txtAvailableFeatures'].setData(data.available_feature);
                        CKEDITOR.instances['txtEligibility'].setData(data.eligibility);
                        CKEDITOR.instances['txtRequiredDocument'].setData(data.required_document);
                        CKEDITOR.instances['txtTermsAndConditions'].setData(data.terms_and_conditions);
                        CKEDITOR.instances['txtReview'].setData(data.review);
                    }else{
                        CKEDITOR.instances['txtAvailableFeatures'].setData('');
                        CKEDITOR.instances['txtEligibility'].setData('');
                        CKEDITOR.instances['txtRequiredDocument'].setData('');
                        CKEDITOR.instances['txtTermsAndConditions'].setData('');
                        CKEDITOR.instances['txtReview'].setData('');
                    }

//                    console.log(data.available_feature);
                });

        }
    }
</script>