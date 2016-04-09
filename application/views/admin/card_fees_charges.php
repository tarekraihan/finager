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
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
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
                                                        <input type="text" maxlength="10" name="txtCardAnnualFee" value="<?php set_value('txtCardAnnualFee') ? set_value('txtCardAnnualFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardAnnualFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Card Annual Fee Plus</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCardAnnualFeePlus" value="<?php set_value('txtCardAnnualFeePlus') ? set_value('txtCardAnnualFeePlus') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardAnnualFeePlus');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Supplementary Card Annual Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtSupplementaryFee" value="<?php set_value('txtSupplementaryFee') ? set_value('txtSupplementaryFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSupplementaryFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Purchase Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="30" name="txtPurchaseFee" value="<?php set_value('txtPurchaseFee') ? set_value('txtPurchaseFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPurchaseFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Balance Transfer Fee(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtBalanceTransferFee" value="<?php set_value('txtBalanceTransferFee') ? set_value('txtBalanceTransferFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee(Own ATM)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceFeeOwnATM" value="<?php set_value('txtCashAdvanceFeeOwnATM') ? set_value('txtCashAdvanceFeeOwnATM') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeOwnATM');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee (Other ATM)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceFeeOtherATM" value="<?php set_value('txtCashAdvanceFeeOtherATM') ? set_value('txtCashAdvanceFeeOtherATM') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeOtherATM');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee(Other ATM) Plus</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="30" name="txtCashAdvanceFeeOtherATMPlus" value="<?php set_value('txtCashAdvanceFeeOtherATMPlus') ? set_value('txtCashAdvanceFeeOtherATMPlus') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeOtherATMPlus');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee (International)USD</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceFeeInternationalUSD" value="<?php set_value('txtCashAdvanceFeeInternationalUSD') ? set_value('txtCashAdvanceFeeInternationalUSD') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeInternationalUSD');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee(International) Percentage(%) </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceFeeInternationalPercentage" value="<?php set_value('txtCashAdvanceFeeInternationalPercentage') ? set_value('txtCashAdvanceFeeInternationalPercentage') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeInternationalPercentage');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Fee (International) Remarks</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtCashAdvanceFeeInternationalRemarks" value="<?php set_value('txtCashAdvanceFeeInternationalRemarks') ? set_value('txtCashAdvanceFeeInternationalRemarks') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceFeeInternationalRemarks');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Late Payment Fee BDT </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtLatePaymentFeeBDT" value="<?php set_value('txtLatePaymentFeeBDT') ? set_value('txtLatePaymentFeeBDT') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLatePaymentFeeBDT');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Late Payment Fee USD </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtLatePaymentFeeUSD" value="<?php set_value('txtLatePaymentFeeUSD') ? set_value('txtLatePaymentFeeUSD') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLatePaymentFeeUSD');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Card Replacement Fee BDT</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtReplacementFee" value="<?php set_value('txtReplacementFee') ? set_value('txtReplacementFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtReplacementFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Pin Replacement Fee BDT</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtPinReplacementFee" value="<?php set_value('txtPinReplacementFee') ? set_value('txtPinReplacementFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPinReplacementFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Over limit Charge BDT</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtOverLimitChargeBDT" value="<?php set_value('txtOverLimitChargeBDT') ? set_value('txtOverLimitChargeBDT') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtOverLimitChargeBDT');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Over limit Charge USD</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtOverLimitChargeUSD" value="<?php set_value('txtOverLimitChargeUSD') ? set_value('txtOverLimitChargeUSD') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtOverLimitChargeUSD');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Transaction Alert Service BDT</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtTransactionAlertService" value="<?php set_value('txtTransactionAlertService') ? set_value('txtTransactionAlertService') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtTransactionAlertService');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Transaction Alert Service Plus</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtTransactionAlertServicePlus" value="<?php set_value('txtTransactionAlertServicePlus') ? set_value('txtTransactionAlertServicePlus') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtTransactionAlertServicePlus');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Assurance Program Fee(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCreditAssuranceProgramFee" value="<?php set_value('txtCreditAssuranceProgramFee') ? set_value('txtCreditAssuranceProgramFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditAssuranceProgramFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Assurance Program Fee Remarks</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtCreditAssuranceProgramFeeRemarks" value="<?php set_value('txtCreditAssuranceProgramFeeRemarks') ? set_value('txtCreditAssuranceProgramFeeRemarks') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditAssuranceProgramFeeRemarks');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Monthly E-Statement Fee BDT</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMonthlyEStatementFee" value="<?php set_value('txtMonthlyEStatementFee') ? set_value('txtMonthlyEStatementFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMonthlyEStatementFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cheque Book Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtChequeBookFee" value="<?php set_value('txtChequeBookFee') ? set_value('txtChequeBookFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtChequeBookFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Payment BDT</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumPaymentBDT" value="<?php set_value('txtMinimumPaymentBDT') ? set_value('txtMinimumPaymentBDT') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumPaymentBDT');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Payment USD</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumPaymentUSD" value="<?php set_value('txtMinimumPaymentUSD') ? set_value('txtMinimumPaymentUSD') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumPaymentUSD');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Payment Percentage(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumPaymentPercentage" value="<?php set_value('txtMinimumPaymentPercentage') ? set_value('txtMinimumPaymentPercentage') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumPaymentPercentage');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Payment Remarks</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtMinimumPaymentRemarks" value="<?php set_value('txtMinimumPaymentRemarks') ? set_value('txtMinimumPaymentRemarks') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumPaymentRemarks');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cheque Return Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtChequeReturnFee" value="<?php set_value('txtChequeReturnFee') ? set_value('txtChequeReturnFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtChequeReturnFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Duplicate Statement</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDuplicateStatement" value="<?php set_value('txtDuplicateStatement') ? set_value('txtDuplicateStatement') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDuplicateStatement');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Card Cheque Processing Fee(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCardChequeProcessingFee" value="<?php set_value('txtCardChequeProcessingFee ') ? set_value('txtCardChequeProcessingFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardChequeProcessingFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Cheque Issuing Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCardCheckIssuingFee" value="<?php set_value('txtCardCheckIssuingFee') ? set_value('txtCardCheckIssuingFee') : ''?>">
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