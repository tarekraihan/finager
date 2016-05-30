<?php
    $fees_id= $this->uri->segment(3,0);
    if(!empty($fees_id) && is_numeric($fees_id) ){
        $query=$this->Select_model->select_fees_charges($fees_id);
        $row=$query->row_array();
    }else if(!empty($fees_id) && ($fees_id == 'success' || $fees_id =='error')){
        $row['id']='';
        $row['basic_card_annual_fee']='';
        $row['supplementary_card_annual_fee']='';
        $row['purchase_fee']='';
        $row['balance_transfer_fee']='';
        $row['cash_advance_fee_own_atm']='';
        $row['cash_advance_fee_international']='';
        $row['late_payment_fee']='';
        $row['card_replacement_fee']='';
        $row['pin_replacement_fee']='';
        $row['over_limit_charge']='';
        $row['transaction_alert_service']='';
        $row['credit_assurance_program_fee']='';
        $row['monthly_e_statement_fee']='';
        $row['check_book_fee']='';
        $row['minimum_payment']='';
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
    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
        <a href="<?php echo base_url();?>card/card_fees_charges_list/" class="btn btn-primary pull-right">Fees and Charges List </a>
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
                <input type="text" maxlength="250" name="txtCardAnnualFee" value="<?php if($row['basic_card_annual_fee'] !=''){echo $row['basic_card_annual_fee'];}else{echo set_value('txtCardAnnualFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCardAnnualFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Supplementary Card Annual Fee</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtSupplementaryFee" value="<?php if($row['supplementary_card_annual_fee'] !=''){echo $row['supplementary_card_annual_fee'];}else{echo set_value('txtSupplementaryFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtSupplementaryFee');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Purchase Fee </label>
            <label class="input">
                <input type="text" maxlength="250" name="txtPurchaseFee" value="<?php if($row['purchase_fee'] !=''){echo $row['purchase_fee'];}else{echo set_value('txtPurchaseFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtPurchaseFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Balance Transfer Fee(%)</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtBalanceTransferFee" value="<?php if($row['balance_transfer_fee'] !=''){echo $row['balance_transfer_fee'];}else{echo set_value('txtBalanceTransferFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtBalanceTransferFee');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Cash Advance Fee(Own ATM)</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCashAdvanceFeeOwnATM" value="<?php if($row['cash_advance_fee_own_atm'] !=''){echo $row['cash_advance_fee_own_atm'];}else{echo set_value('txtCashAdvanceFeeOwnATM');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCashAdvanceFeeOwnATM');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Cash Advance Fee (Other ATM)</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCashAdvanceFeeOtherATM" value="<?php if($row['cash_advance_fee_own_atm'] !=''){echo $row['cash_advance_fee_own_atm'];}else{echo set_value('txtCashAdvanceFeeOtherATM');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCashAdvanceFeeOtherATM');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Cash Advance Fee International</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCashAdvanceFeeInternational" value="<?php if($row['cash_advance_fee_international'] !=''){echo $row['cash_advance_fee_international'];}else{echo set_value('txtCashAdvanceFeeInternational');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCashAdvanceFeeInternational');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Late Payment Fee </label>
            <label class="input">
                <input type="text" maxlength="250" name="txtLatePaymentFee" value="<?php if($row['late_payment_fee'] !=''){echo $row['late_payment_fee'];}else{echo set_value('txtLatePaymentFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtLatePaymentFee');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Card Replacement Fee </label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCardReplacementFee" value="<?php if($row['card_replacement_fee'] !=''){echo $row['card_replacement_fee'];}else{echo set_value('txtCardReplacementFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCardReplacementFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Pin Replacement Fee </label>
            <label class="input">
                <input type="text" maxlength="250" name="txtPinReplacementFee" value="<?php if($row['pin_replacement_fee'] !=''){echo $row['pin_replacement_fee'];}else{echo set_value('txtPinReplacementFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtPinReplacementFee');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Over limit Charge </label>
            <label class="input">
                <input type="text" maxlength="250" name="txtOverLimitCharge" value="<?php if($row['over_limit_charge'] !=''){echo $row['over_limit_charge'];}else{echo set_value('txtOverLimitCharge');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtOverLimitCharge');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Transaction Alert Service</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtTransactionAlertService" value="<?php if($row['transaction_alert_service'] !=''){echo $row['transaction_alert_service'];}else{echo set_value('txtTransactionAlertService');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtTransactionAlertService');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Credit Assurance Program Fee</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCreditAssuranceProgramFee" value="<?php if($row['credit_assurance_program_fee'] !=''){echo $row['credit_assurance_program_fee'];}else{echo set_value('txtCreditAssuranceProgramFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCreditAssuranceProgramFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Monthly E-Statement Fee </label>
            <label class="input">
                <input type="text" maxlength="250" name="txtMonthlyEStatementFee" value="<?php if($row['monthly_e_statement_fee'] !=''){echo $row['monthly_e_statement_fee'];}else{echo set_value('txtMonthlyEStatementFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtMonthlyEStatementFee');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Cheque Book Fee</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtChequeBookFee" value="<?php if($row['check_book_fee'] !=''){echo $row['check_book_fee'];}else{echo set_value('txtChequeBookFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtChequeBookFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Minimum Payment</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtMinimumPayment" value="<?php if($row['minimum_payment'] !=''){echo $row['minimum_payment'];}else{echo set_value('txtMinimumPayment');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtMinimumPayment');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Cheque Return Fee</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtChequeReturnFee" value="<?php if($row['cheque_return_fee'] !=''){echo $row['cheque_return_fee'];}else{echo set_value('txtChequeReturnFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtChequeReturnFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Duplicate Statement</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtDuplicateStatement" value="<?php if($row['duplicate_statement'] !=''){echo $row['duplicate_statement'];}else{echo set_value('txtDuplicateStatement');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtDuplicateStatement');?></label>
        </section>
    </div>
    <div class="row">
        <section class="col col-6">
            <label class="label">Card Cheque Processing Fee</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCardChequeProcessingFee" value="<?php if($row['card_cheque_processing_fee'] !=''){echo $row['card_cheque_processing_fee'];}else{echo set_value('txtCardChequeProcessingFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCardChequeProcessingFee');?></label>
        </section>
        <section class="col col-6">
            <label class="label">Card Cheque Issuing Fee</label>
            <label class="input">
                <input type="text" maxlength="250" name="txtCardCheckIssuingFee" value="<?php if($row['card_cheque_issuing_fee'] !=''){echo $row['card_cheque_issuing_fee'];}else{echo set_value('txtCardCheckIssuingFee');}  ?>">
            </label>
            <label class="red"><?php echo form_error('txtCardCheckIssuingFee');?></label>
        </section>
    </div>
</section>
</fieldset>
<footer>
    <button type="submit" id="save" class="btn btn-primary"  >
        Update
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