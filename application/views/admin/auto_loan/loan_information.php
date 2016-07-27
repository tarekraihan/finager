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
            <li>Loan</li><li>Auto Loan</li><li> Loan Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Auto Loan
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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>auto_loan/loan_info" class="smart-form" novalidate="novalidate">
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
                                                    <label class="label">Applicant Type</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtApplicantType[]" required>
                                                            <?php echo $this->Select_model->auto_loan_applicant_type();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtApplicantType[]');?></label>
                                                </section>

                                            </div>


                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Looking For</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtLookingFor[]" required>
                                                            <?php echo $this->Select_model->auto_loan_looking_for();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLookingFor[]');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan User</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtAutoLoanUser[]" required>
                                                            <?php echo $this->Select_model->auto_loan_user();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAutoLoanUser[]');?></label>
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
                                                    <label class="label">Min Income Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtMinIncomeSalaried" value="<?php echo set_value('txtMinIncomeSalaried'); ?>" placeholder="Write Min Income for Salaried Person">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeSalaried');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Min Income Professional</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtMinIncomeProfessional" value="<?php echo set_value('txtMinIncomeProfessional'); ?>" placeholder="Write Min Income for Professional">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeProfessional');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Min Income Businessmen</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtMinIncomeBusinessmen" value="<?php echo set_value('txtMinIncomeBusinessmen'); ?>" placeholder="Write Min Income for Businessmen">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeBusinessmen');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Min Income Landlord</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtMinIncomeLandlord" value="<?php echo set_value('txtMinIncomeLandlord'); ?>"  placeholder="Write Min Income for Landlord">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeLandlord');?></label>
                                                </section>
                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Min Income NRB</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtMinIncomeNrb" value="<?php echo set_value('txtMinIncomeNrb'); ?>" placeholder="Write Min Income for NRB">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeNrb');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Interest Rate Min</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtInterestRateMin" value="<?php echo set_value('txtInterestRateMin'); ?>" placeholder="Write Min Interest Rate">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRateMin');?></label>
                                                </section>

                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Interest Rate Max</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtInterestRateMax" value="<?php echo set_value('txtInterestRateMax'); ?>" placeholder="Write Max Interest Rate">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRateMax');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Interest Rate Average</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtInterestRateAverage" value="<?php echo set_value('txtInterestRateAverage'); ?>" placeholder="Write Average Interest Rate">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRateAverage');?></label>
                                                </section>

                                            </div>


                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Down Payment New Car </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtDownPaymentNewCar" value="<?php echo set_value('txtDownPaymentNewCar'); ?>" placeholder="Write Down Payment New Car">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentNewCar');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Down Payment Old Car </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtDownPaymentOldCar" value="<?php echo set_value('txtDownPaymentOldCar'); ?>" placeholder="Write Down Payment Old Car">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentOldCar');?></label>
                                                </section>
                                            </div>


                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Security Required</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtSecurityRequired" value="<?php echo set_value('txtSecurityRequired'); ?>" placeholder="Write Security Required">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSecurityRequired');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">RePayment Option</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtRePaymentOption" value="<?php echo set_value('txtRePaymentOption'); ?>" placeholder="Write Re Payment Options">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtRePaymentOption');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">RePayment Type</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtRePaymentType" value="<?php echo set_value('txtRePaymentType'); ?>" placeholder="Write Re Payment Type">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtRePaymentType');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Processing Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtProcessingFee" value="<?php echo set_value('txtProcessingFee'); ?>" placeholder="Write Processing Fee">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProcessingFee');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Early Settlement Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtEarlySettlementFee" value="<?php echo set_value('txtEarlySettlementFee'); ?>" placeholder="Write Early Settlement Fee">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEarlySettlementFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Penalty Charge</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtPenaltyCharge" value="<?php echo set_value('txtPenaltyCharge'); ?>" placeholder="Write Penalty Charge">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPenaltyCharge');?></label>
                                                </section>
                                            </div>


                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan Rescheduling Charge</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtLoanReschedulingCharge" value="<?php echo set_value('txtLoanReschedulingCharge'); ?>" placeholder="Write Loan Rescheduling Charge">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanReschedulingCharge');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Term</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtMinimumTerm" value="<?php echo set_value('txtMinimumTerm'); ?>" placeholder="Write Minimum Term">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumTerm');?></label>
                                                </section>
                                            </div>



                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Maximum Term</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtMaximumTerm" value="<?php echo set_value('txtMaximumTerm'); ?>" placeholder="Write Maximum Term">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumTerm');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Available of Early Settlement</label>
                                                    <label class="select">
                                                        <select name="txtAvailableOfEarlySettlement" id="txtAvailableOfEarlySettlement">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAvailableOfEarlySettlement');?></label>
                                                </section>
                                            </div>



                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Available of Partial Settlement</label>
                                                    <label class="select">
                                                        <select name="txtAvailableOfPartialSettlement" id="txtAvailableOfPartialSettlement">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAvailableOfPartialSettlement');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Age</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtMinimumAge" value="<?php echo set_value('txtMinimumAge'); ?>" placeholder="Write Minimum Age">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumAge');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Auto Loan Feature</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtAutoLoanFeature[]" required>
                                                            <?php echo $this->Select_model->auto_loan_feature();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAutoLoanFeature[]');?></label>
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
                                                        <h2>Required Documents</h2>

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

<script>
    $(function() {
        $("#txtBankName").change(function () {
            var data = $("#txtBankName").val();
           //console.log(data);
            $.ajax({
                type:"POST",
                url:"<?php echo base_url();?>card/get_card_name",
                data:{id : data},
                success: function(response){
                    if(response != "error"){
                        //console.log(response);return;
                       document.getElementById('txtCardName').innerHTML = response;
                    }else{
                        alert(response);
                    }
                }
            });
        });
    });
</script>