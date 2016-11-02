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
            <li>Loan</li><li>Education Loan</li><li> Loan Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Education Loan
							<span>> 
								Loan Information
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
                            <h2>Add Loan Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>education_loan/loan_info" class="smart-form" novalidate="novalidate">
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
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?> > Is Non Bank Institution ?
                                                    </label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6" id="institution">

                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan Type</label>
                                                    <label class="select">
                                                        <select name="txtLoanType" id="txtLoanType">
                                                            <?php echo $this->Select_model->loan_type();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanType');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan Name </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="220" name="txtLoanName" value="<?php echo set_value('txtLoanName'); ?>" placeholder="Write Loan Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Expenses Considered</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtExpensesConsidered[]" required>
                                                            <?php echo $this->Select_model->education_loan_expenses_considered();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtExpensesConsidered[]');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan Purpose</label>
                                                    <label class="select">
                                                        <select  multiple style="width:100%" class="select2"  name="txtLoanPurpose[]" id="txtLoanPurpose" required>
                                                            <?php echo $this->Select_model->select_education_loan_purpose();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanPurpose[]');?></label>
                                                </section>


                                                <section class="col col-6">
                                                    <label class="label">Grace Period</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="220" name="txtGracePeriod" value="<?php echo set_value('txtGracePeriod'); ?>" placeholder="Write Grace Period">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtGracePeriod');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Term</label>
                                                    <label class="select">
                                                        <select name="txtMinEducationLoanTenure" id="txtMinEducationLoanTenure">
                                                            <?php echo $this->Select_model->select_min_education_loan_tenure();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinEducationLoanTenure');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Maximum Term</label>
                                                    <label class="select">
                                                        <select name="txtMaxEducationLoanTenure" id="txtMaxEducationLoanTenure">
                                                            <?php echo $this->Select_model->select_max_education_loan_tenure();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaxEducationLoanTenure');?></label>
                                                </section>
                                            </div>
                                            <div class="row">


                                                <section class="col col-6">
                                                    <label class="label">Minimum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMinimumLoanAmount" value="<?php echo set_value('txtMinimumLoanAmount'); ?>" placeholder="Write min loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumLoanAmount');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Maximum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMaximumLonAmount" value="<?php echo set_value('txtMaximumLonAmount'); ?>" placeholder="Write Max loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumLonAmount');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Down Payment (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPayment" value="<?php echo set_value('txtDownPayment'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPayment');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan Short Description</label>
                                                    <label class="input">
                                                        <input type="text"  name="txtLoanShortDescription" value="<?php echo set_value('txtLoanShortDescription'); ?>" placeholder="Write short description">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanShortDescription');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Loan Against FDR</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtLoanAgainstFDR" value="<?php echo set_value('txtLoanAgainstFDR'); ?>" placeholder="Write Loan Against FDR ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanAgainstFDR');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Processing Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtProcessingFee" value="<?php echo set_value('txtProcessingFee'); ?>" placeholder="Write Processing Fee ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProcessingFee');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Early Settlement Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtEarlySettlementFee" value="<?php echo set_value('txtEarlySettlementFee'); ?>" placeholder="Write Early Settlement Fee ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEarlySettlementFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Partial Payment Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtPartialPaymentFee" value="<?php echo set_value('txtPartialPaymentFee'); ?>" placeholder="Write Partial Payment fee ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPartialPaymentFee');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Penalty Charge</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtPenaltyCharge" value="<?php echo set_value('txtPenaltyCharge'); ?>" placeholder="Write Penalty Charge ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPenaltyCharge');?></label>
                                                </section>
                                                <section class="col col-6"  >
                                                    <label class="radio-inline" style="margin-left: 25px ">
                                                        <input type="radio" name="is_fixed" value="variable" > Variable Interest
                                                    </label>
                                                    <label class="radio-inline" style=" margin-left:35px">
                                                        <input type="radio" name="is_fixed" id="is_fixed" value="fixed" checked > Fixed Interest
                                                    </label>

                                                </section>
                                            </div>


                                            <div id="interest_rate">

                                                <div class="row">
                                                    <section class="col col-6">
                                                        <label class="label">Interest Rate Fixed (%)</label>
                                                        <label class="input">
                                                            <input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php echo set_value('txtInterestRateFixed'); ?>" placeholder="Write Interest Rate without percentage sign">
                                                        </label>
                                                        <label class="red"><?php echo form_error('txtInterestRateFixed');?></label>
                                                    </section>

                                                </div>

                                            </div>

                        </article>
                        <!-- WIDGET END -->

                <!-- NEW WIDGET START -->
                <article class="col-sm-6 col-md-6 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                            <h2>Eligibility</h2>

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
                                        <textarea type="text" id="txtEligibility" class="ckeditor" name="txtEligibility"><?php echo set_value('txtEligibility'); ?></textarea>
                                    </label>
                                </section>

                            </div>
                            <!-- end widget content -->
                            <label class="red"><?php echo form_error('txtEligibility');?></label>
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
                                        <textarea type="text" id="txtRequiredDocument" class="ckeditor" name="txtRequiredDocument"><?php echo set_value('txtRequiredDocument'); ?></textarea>
                                    </label>
                                </section>

                            </div>
                            <!-- end widget content -->
                            <label class="red"><?php echo form_error('txtRequiredDocument');?></label>
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
        //----Interest Rate Fixed / Variable
        $("input[name ='is_fixed']").click(function() {
            var v_value = $(this).val();
            if(v_value == 'fixed'){
                $.ajax({
                    url: "<?php echo base_url(); ?>home_loan/ajax_home_loan_interest_variable",
                    type : "POST",
                    dataType : "html"
                })
                .done(function( data ) {
                    $('#interest_rate').html('<div class="row"><section class="col col-6"><label class="label">Interest Rate Fixed (%)</label><label class="input"><input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php echo set_value('txtInterestRateFixed'); ?>" placeholder="Write Interest Rate without percentage sign"></label><label class="red"><?php echo form_error('txtInterestRateFixed');?></label></section></div>');
                });

            }

            if(v_value == 'variable'){
                $.ajax({
                    url: "<?php echo base_url(); ?>home_loan/ajax_home_loan_interest_variable",
                    type : "POST",
                    dataType : "html"
                })
                .done(function( data ) {
                    $('#interest_rate').html(data);
                });
            }
        });
    });
</script>