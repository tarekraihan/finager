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
            <li>Card</li><li>Credit Card</li><li> Fees and Charges</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Credit Card
							<span>> 
								Fees and Charges
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
                            <h2>Add Card Fees and Charges</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>card/card_fees_charges" class="smart-form" novalidate="novalidate">
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
                                                    <label class="label">Card Name</label>
                                                    <label class="select">
                                                        <select name="txtCardName" id="txtCardName">

                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardName');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Annual Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCardAnnualFee" value="<?php echo set_value('txtCardAnnualFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardAnnualFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Supplementary Card Annual Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtSupplementaryFee" value="<?php echo set_value('txtSupplementaryFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSupplementaryFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Purchase Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtPurchaseFee" value="<?php echo set_value('txtPurchaseFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPurchaseFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Balance Transfer Fee(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtBalanceTransferFee" value="<?php echo set_value('txtBalanceTransferFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee(Own ATM)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCashAdvanceFeeOwnATM" value="<?php echo set_value('txtCashAdvanceFeeOwnATM'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeOwnATM');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee (Other ATM)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCashAdvanceFeeOtherATM" value="<?php echo set_value('txtCashAdvanceFeeOtherATM'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeOtherATM');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee International</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCashAdvanceFeeInternational" value="<?php echo set_value('txtCashAdvanceFeeInternational'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeInternational');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Late Payment Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtLatePaymentFee" value="<?php echo set_value('txtLatePaymentFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLatePaymentFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Replacement Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCardReplacementFee" value="<?php echo set_value('txtCardReplacementFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardReplacementFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Pin Replacement Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtPinReplacementFee" value="<?php echo set_value('txtPinReplacementFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPinReplacementFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Over limit Charge </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtOverLimitCharge" value="<?php echo set_value('txtOverLimitCharge'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtOverLimitCharge');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Transaction Alert Service</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtTransactionAlertService" value="<?php echo set_value('txtTransactionAlertService'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtTransactionAlertService');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Assurance Program Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCreditAssuranceProgramFee" value="<?php echo set_value('txtCreditAssuranceProgramFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditAssuranceProgramFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Monthly E-Statement Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtMonthlyEStatementFee" value="<?php echo set_value('txtMonthlyEStatementFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMonthlyEStatementFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cheque Book Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtChequeBookFee" value="<?php echo set_value('txtChequeBookFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtChequeBookFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Payment</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtMinimumPayment" value="<?php echo set_value('txtMinimumPayment'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumPayment');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cheque Return Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtChequeReturnFee" value="<?php echo set_value('txtChequeReturnFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtChequeReturnFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Duplicate Statement</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtDuplicateStatement" value="<?php echo set_value('txtDuplicateStatement'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDuplicateStatement');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Cheque Processing Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCardChequeProcessingFee" value="<?php echo set_value('txtCardChequeProcessingFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardChequeProcessingFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Card Cheque Issuing Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtCardCheckIssuingFee" value="<?php echo set_value('txtCardCheckIssuingFee'); ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardCheckIssuingFee');?></label>
                                                </section>
                                            </div>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <button type="submit" id="save" class="btn btn-primary"  >
                                            Save
                                        </button>
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