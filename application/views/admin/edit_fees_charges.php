<?php
    $fees_id= $this->uri->segment(3,0);
    if(!empty($fees_id) && is_numeric($fees_id) ){
        $query=$this->Select_model->select_fees_charges($fees_id);
        $row=$query->row_array();
    }else if(!empty($fees_id) && ($fees_id == 'success' || $fees_id =='error')){
        $row['id']='';
        $row['basic_card_annual_fee']='';
        $row['basic_card_annual_fee_plus']='';
        $row['supplementary_card_annual_fee']='';
        $row['purchase_fee']='';
        $row['balance_transfer_fee']='';
        $row['cash_advance_fee_own_atm']='';
        $row['cash_advance_fee_other_atm']='';
        $row['cash_advance_fee_other_atm_plus']='';
        $row['cash_advance_fee_international_usd']='';
        $row['cash_advance_fee_international_percentage']='';
        $row['cash_advance_fee_international_remarks']='';
        $row['late_payment_fee_bdt']='';
        $row['late_payment_fee_usd']='';
        $row['card_replacement_fee']='';
        $row['pin_replacement_fee']='';
        $row['over_limit_charge_bdt']='';
        $row['over_limit_charge_usd']='';
        $row['transaction_alert_service']='';
        $row['transaction_alert_service_plus']='';
        $row['credit_assurance_program_fee']='';
        $row['credit_assurance_program_fee_remarks']='';
        $row['monthly_e_statement_fee']='';
        $row['check_book_fee']='';
        $row['minimum_payment_bdt']='';
        $row['minimum_payment_usd']='';
        $row['minimum_payment_percentage']='';
        $row['minimum_payment_remarks']='';
        $row['cheque_return_fee']='';
        $row['duplicate_statement']='';
        $row['card_cheque_processing_fee']='';
        $row['card_cheque_issuing_fee']='';
    }else{
        redirect(base_url().'My404');
    }
?>


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
        <li>Card</li><li>Credit Card</li><li>Edit Fees and Charges</li>
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
								Edit Fees and Charges
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

<form id="age_limit" method="post" action="<?php echo base_url();?>card/edit_fees_charges" class="smart-form" novalidate="novalidate">
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
        <input type="hidden" name="txtFeesChargesId" value="<?php echo $row['id'];?>">
        <label class="label">Card Annual Fee</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCardAnnualFee" value="<?php if($row['basic_card_annual_fee'] !=''){echo $row['basic_card_annual_fee'];}else{echo set_value('txtCardAnnualFee');}  ?>">
        </label>
        <label class="red"><?php echo form_error('txtCardAnnualFee');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Card Annual Fee Plus</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCardAnnualFeePlus" value="<?php if($row['basic_card_annual_fee_plus'] !=''){echo $row['basic_card_annual_fee_plus'];}else{echo set_value('txtCardAnnualFeePlus') ;} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCardAnnualFeePlus');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Supplementary Card Annual Fee</label>
        <label class="input">
            <input type="text" maxlength="200" name="txtSupplementaryFee" value="<?php if($row['supplementary_card_annual_fee'] !=''){echo $row['supplementary_card_annual_fee'];}else{ echo set_value('txtSupplementaryFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtSupplementaryFee');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Purchase Fee </label>
        <label class="input">
            <input type="text" maxlength="30" name="txtPurchaseFee" value="<?php if($row['purchase_fee'] !=''){echo $row['purchase_fee'];}else{echo set_value('txtPurchaseFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtPurchaseFee');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Balance Transfer Fee(%)</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtBalanceTransferFee" value="<?php if($row['balance_transfer_fee'] !=''){echo $row['balance_transfer_fee'];}else{echo set_value('txtBalanceTransferFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtBalanceTransferFee');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Cash Advance Fee(Own ATM)</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCashAdvanceFeeOwnATM" value="<?php if($row['cash_advance_fee_own_atm'] !=''){echo $row['cash_advance_fee_own_atm'];}else{echo set_value('txtCashAdvanceFeeOwnATM');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCashAdvanceFeeOwnATM');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Cash Advance Fee (Other ATM)</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCashAdvanceFeeOtherATM" value="<?php if($row['cash_advance_fee_other_atm'] !=''){echo $row['cash_advance_fee_other_atm'];}else{ echo set_value('txtCashAdvanceFeeOtherATM');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCashAdvanceFeeOtherATM');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Cash Advance Fee(Other ATM) Plus</label>
        <label class="input">
            <input type="text" maxlength="30" name="txtCashAdvanceFeeOtherATMPlus" value="<?php if($row['cash_advance_fee_other_atm_plus'] !=''){echo $row['cash_advance_fee_other_atm_plus'];}else{ echo set_value('txtCashAdvanceFeeOtherATMPlus');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCashAdvanceFeeOtherATMPlus');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Cash Advance Fee (International)USD</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCashAdvanceFeeInternationalUSD" value="<?php if($row['cash_advance_fee_international_usd'] !=''){echo $row['cash_advance_fee_international_usd'];}else{ echo set_value('txtCashAdvanceFeeInternationalUSD'); } ?>">
        </label>
        <label class="red"><?php echo form_error('txtCashAdvanceFeeInternationalUSD');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Cash Advance Fee(International) Percentage(%) </label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCashAdvanceFeeInternationalPercentage" value="<?php if($row['cash_advance_fee_international_percentage'] !=''){echo $row['cash_advance_fee_international_percentage'];}else{echo set_value('txtCashAdvanceFeeInternationalPercentage');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCashAdvanceFeeInternationalPercentage');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Cash Advance Fee (International) Remarks</label>
        <label class="input">
            <input type="text" maxlength="100" name="txtCashAdvanceFeeInternationalRemarks" value="<?php if($row['cash_advance_fee_international_remarks'] !=''){echo $row['cash_advance_fee_international_remarks'];}else{ echo set_value('txtCashAdvanceFeeInternationalRemarks');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCashAdvanceFeeInternationalRemarks');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Late Payment Fee BDT </label>
        <label class="input">
            <input type="text" maxlength="10" name="txtLatePaymentFeeBDT" value="<?php if($row['late_payment_fee_bdt'] !=''){echo $row['late_payment_fee_bdt'];}else{  echo set_value('txtLatePaymentFeeBDT');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtLatePaymentFeeBDT');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Late Payment Fee USD </label>
        <label class="input">
            <input type="text" maxlength="10" name="txtLatePaymentFeeUSD" value="<?php if($row['late_payment_fee_usd'] !=''){echo $row['late_payment_fee_usd'];}else{ echo set_value('txtLatePaymentFeeUSD');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtLatePaymentFeeUSD');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Card Replacement Fee BDT</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtReplacementFee" value="<?php if($row['card_replacement_fee'] !=''){echo $row['card_replacement_fee'];}else{ echo set_value('txtReplacementFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtReplacementFee');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Pin Replacement Fee BDT</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtPinReplacementFee" value="<?php if($row['pin_replacement_fee'] !=''){echo $row['pin_replacement_fee'];}else{ echo set_value('txtPinReplacementFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtPinReplacementFee');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Over limit Charge BDT</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtOverLimitChargeBDT" value="<?php if($row['over_limit_charge_bdt'] !=''){echo $row['over_limit_charge_bdt'];}else{ echo set_value('txtOverLimitChargeBDT');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtOverLimitChargeBDT');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Over limit Charge USD</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtOverLimitChargeUSD" value="<?php if($row['over_limit_charge_usd'] !=''){echo $row['over_limit_charge_usd'];}else{ echo set_value('txtOverLimitChargeUSD');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtOverLimitChargeUSD');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Transaction Alert Service BDT</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtTransactionAlertService" value="<?php if($row['transaction_alert_service'] !=''){echo $row['transaction_alert_service'];}else{echo set_value('txtTransactionAlertService');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtTransactionAlertService');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Transaction Alert Service Plus</label>
        <label class="input">
            <input type="text" maxlength="100" name="txtTransactionAlertServicePlus" value="<?php if($row['transaction_alert_service_plus'] !=''){echo $row['transaction_alert_service_plus'];}else{ echo set_value('txtTransactionAlertServicePlus');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtTransactionAlertServicePlus');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Credit Assurance Program Fee(%)</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCreditAssuranceProgramFee" value="<?php if($row['credit_assurance_program_fee'] !=''){echo $row['credit_assurance_program_fee'];}else{echo set_value('txtCreditAssuranceProgramFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCreditAssuranceProgramFee');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Credit Assurance Program Fee Remarks</label>
        <label class="input">
            <input type="text" maxlength="200" name="txtCreditAssuranceProgramFeeRemarks" value="<?php if($row['credit_assurance_program_fee_remarks'] !=''){echo $row['credit_assurance_program_fee_remarks'];}else{ echo set_value('txtCreditAssuranceProgramFeeRemarks');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCreditAssuranceProgramFeeRemarks');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Monthly E-Statement Fee BDT</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtMonthlyEStatementFee" value="<?php if($row['monthly_e_statement_fee'] !=''){echo $row['monthly_e_statement_fee'];}else{ echo set_value('txtMonthlyEStatementFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtMonthlyEStatementFee');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Cheque Book Fee</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtChequeBookFee" value="<?php if($row['check_book_fee'] !=''){echo $row['check_book_fee'];}else{ echo set_value('txtChequeBookFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtChequeBookFee');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Minimum Payment BDT</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtMinimumPaymentBDT" value="<?php if($row['minimum_payment_bdt'] !=''){echo $row['minimum_payment_bdt'];}else{echo set_value('txtMinimumPaymentBDT');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtMinimumPaymentBDT');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Minimum Payment USD</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtMinimumPaymentUSD" value="<?php if($row['minimum_payment_usd'] !=''){echo $row['minimum_payment_usd'];}else{echo set_value('txtMinimumPaymentUSD');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtMinimumPaymentUSD');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Minimum Payment Percentage(%)</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtMinimumPaymentPercentage" value="<?php if($row['minimum_payment_percentage'] !=''){echo $row['minimum_payment_percentage'];}else{echo set_value('txtMinimumPaymentPercentage');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtMinimumPaymentPercentage');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Minimum Payment Remarks</label>
        <label class="input">
            <input type="text" maxlength="200" name="txtMinimumPaymentRemarks" value="<?php if($row['minimum_payment_remarks'] !=''){echo $row['minimum_payment_remarks'];}else{ echo set_value('txtMinimumPaymentRemarks');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtMinimumPaymentRemarks');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Cheque Return Fee</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtChequeReturnFee" value="<?php if($row['cheque_return_fee'] !=''){echo $row['cheque_return_fee'];}else{echo set_value('txtChequeReturnFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtChequeReturnFee');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Duplicate Statement</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtDuplicateStatement" value="<?php if($row['duplicate_statement'] !=''){echo $row['duplicate_statement'];}else{echo set_value('txtDuplicateStatement');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtDuplicateStatement');?></label>
    </section>
    <section class="col col-6">
        <label class="label">Card Cheque Processing Fee(%)</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCardChequeProcessingFee" value="<?php if($row['card_cheque_processing_fee'] !=''){echo $row['card_cheque_processing_fee'];}else{ echo set_value('txtCardChequeProcessingFee');} ?>">
        </label>
        <label class="red"><?php echo form_error('txtCardChequeProcessingFee');?></label>
    </section>
</div>
<div class="row">
    <section class="col col-6">
        <label class="label">Card Cheque Issuing Fee</label>
        <label class="input">
            <input type="text" maxlength="10" name="txtCardCheckIssuingFee" value="<?php if($row['card_cheque_issuing_fee'] !=''){echo $row['card_cheque_issuing_fee'];}else{ echo set_value('txtCardCheckIssuingFee');} ?>">
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