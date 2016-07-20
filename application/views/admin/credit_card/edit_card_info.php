<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='card_card_informations';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
   /* print_r($row1);
        die;*/


}else{
    $row['id']='';
    $row['bank_id']='';
    $row['cc_type_id']='';
    $row['card_type_id']='';
    $row['card_name']='';
    //$row['card_user_id']='';
    $row['income_range_min_business']='';
    $row['income_range_min_salaried']='';
    $row['income_range_max_business']='';
    $row['income_range_max_salaried']='';
    $row['income_range_max_salaried']='';
    $row['credit_limit_min_business']='';
    $row['credit_limit_min_salaried']='';
    $row['credit_limit_max_business']='';
    $row['credit_limit_max_salaried']='';
    $row['age_limit_min']='';
    $row['age_limit_max']='';
    $row['experience_min']='';
    $row['experience_max']='';
    $row['cc_issuer_id']='';
    $row['card_benifit_id']='';
    $row['benifit_details']='';
    $row['interest_free_period_min']='';
    $row['interest_free_pefiod_max']='';
    $row['card_summary']='';
    $row['pros']='';
    $row['cons']='';
    $row['review']='';
    $row['annual_fee']='';
    $row['annual_fee_vat']='';
    $row['supplimentary']='';
    $row['billing_cycle_start']='';
    $row['billing_cycle_end']='';
    $row['eligibility']='';
    $row['balance_transfer_limit']='';
    $row['purchase_interest_rate']='';
    $row['balance_transfer_rate']='';
    $row['cash_advance_interest_rate_yearly']='';
    $row['purchase_interest_rate_monthly']='';
    $row['balance_transfer_rate_monthly']='';
    $row['cash_advance_interest_rate']='';
    $row['cash_advance_limit']='';
    $row['featured']='';
    $row['status']='';
}
?>
<script src="<?php echo base_url(); ?>resource/admin/js/plugin/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    $(document).ready(function () {

        CKEDITOR.replace('.ckeditor', {
            height: '120px',
            width:100%,
            startupFocus: true,
            toolbarGroups: [
                {name: 'document', groups: ['mode', 'document']}, // Displays document group with its two subgroups.
                {name: 'clipboard', groups: ['clipboard', 'undo']}, // Group's name will be used to create voice label.
                '/', // Line break - next group will be placed in new line.
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'links'}
            ]


        });
        CKEDITOR.config.removePlugins = 'save,print,preview,find,about,maximize,showblocks';

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
            <li>Home</li><li>Card</li><li>Edit Card Information</li>
        </ol>

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-edit fa-fw "></i>
                    Card
							<span>>
								Edit Card Information
							</span>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <a href="<?php echo base_url();?>card/card_info_list/" class="btn btn-primary pull-right">Card List </a>
            </div>
        </div>


        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- START ROW -->

            <div class="row">

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Card Information </h2>

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

                                <form class="smart-form" method="post" action="<?php echo base_url();?>card/edit_card_info" enctype="multipart/form-data">

                                <?php

                                //-----Display Success or Error message---
                                if(isset($feedback)){
                                    echo $feedback;
                                }
                                ?>
                                    <fieldset>
                                        <!-- custom select-->
                                        <section>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Bank Name</label>
                                                    <input type="hidden" value="<?php echo $row['id'];?>" name="txtCardId">
                                                    <label class="select">
                                                        <select name="txtBankName">
                                                            <option value=''>-- Select One --</option>
                                                            <?php
                                                            $result=$this->Select_model->select_all('card_bank');
                                                            foreach($result->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["bank_id"]) && $row["bank_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtBankName",$row1->id)?>><?php echo $row1->bank_name ; ?></option>';
                                                           <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                     <label class="red"><?php echo form_error('txtBankName');?></label>
                                                </section>
                                                <section class="col col-6" >
                                                    <label class="label">Card Type</label>
                                                    <label class="select">
                                                        <select name="txtCardType">
                                                            <?php
                                                            $result=$this->Select_model->select_all('card_card_type');
                                                            foreach($result->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["card_type_id"]) && $row["card_type_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtCardType",$row1->id)?>><?php echo $row1->card_type_name ; ?></option>';
                                                           <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardType');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Card Type</label>
                                                    <label class="select" >
                                                        <select name="txtCreditCardType">
                                                            <?php
                                                            $result=$this->Select_model->select_all('card_credit_card_type');
                                                            foreach($result->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["cc_type_id"]) && $row["cc_type_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtCreditCardType",$row1->id)?>><?php echo $row1->cc_card_type ; ?></option>';
                                                           <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditCardType');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Card Issuer</label>
                                                    <label class="select">
                                                        <select name="txtCardIssuer">
                                                            <?php
                                                                $result=$this->Select_model->select_all('card_card_issuer');
                                                                foreach($result->result() as $row1){
                                                            ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["cc_issuer_id"]) && $row["cc_issuer_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtCardIssuer",$row1->id)?>><?php echo $row1->card_issuer_name ; ?></option>';
                                                           <?php
                                                                 }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardIssuer');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Name</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCardName" value="<?php if(isset($row["card_name"]) && $row["card_name"] != ""){echo $row["card_name"];}else{echo set_value('txtCardName');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Card Image </label>
                                                    <div class="input input-file">
                                                        <span class="button"><input type="file" id="file" name="file"  onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
                                                    </div>
                                                    <label class="red"><?php echo form_error('file');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Income range (Min) Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtIncomeRangeMinBusiness" value="<?php if(isset($row["income_range_min_business"]) && $row["income_range_min_business"] != ""){echo $row["income_range_min_business"];}else{echo set_value('txtIncomeRangeMinBusiness');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMinBusiness');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Income range (Max) Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtIncomeRangeMaxBusiness" value="<?php if(isset($row["income_range_max_business"]) && $row["income_range_max_business"] != ""){echo $row["income_range_max_business"];}else{echo set_value('txtIncomeRangeMaxBusiness');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMaxBusiness');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Income range (Min) Salaried </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtIncomeRangeMinSalaried" value="<?php if(isset($row["income_range_min_salaried"]) && $row["income_range_min_salaried"] != ""){echo $row["income_range_min_salaried"];}else{echo set_value('txtIncomeRangeMinSalaried');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMinSalaried');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Income range (Max) Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtIncomeRangeMaxSalaried"  value="<?php if(isset($row["income_range_max_salaried"]) && $row["income_range_max_salaried"] != ""){echo $row["income_range_max_salaried"];}else{echo set_value('txtIncomeRangeMaxSalaried');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMaxSalaried');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">I'm (Card User)</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtIm[]">
                                                            <?php
                                                            $result1=$this->Select_model->select_all('card_card_user');
                                                            $card_user_id= explode(",", $row["card_user_id"]);
                                                            $count = count($card_user_id);

                                                            foreach($result1->result() as $row1){
                                                                for($i=0;$i<$count;$i++) {
                                                                    ?>
                                                                    <option value="<?php echo $row1->id;?>" <?php if ($card_user_id[$i] == $row1->id) { echo "selected='select'"; }?><?php echo set_select("txtIm[]", $row1->id)?>><?php echo $row1->card_user; ?></option>';
                                                                <?php
                                                                }
                                                            }
                                                            ?>

                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIm[]');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">User Age Min</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtUserAgeMin"  value="<?php if(isset($row["age_limit_min"]) && $row["age_limit_min"] != ""){echo $row["age_limit_min"];}else{echo set_value('txtUserAgeMin');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtUserAgeMin');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">User Age Max</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtUserAgeMax" value="<?php if(isset($row["age_limit_max"]) && $row["age_limit_max"] != ""){echo $row["age_limit_max"];}else{echo set_value('txtUserAgeMax');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtUserAgeMax');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Min Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCreditLimitMinBusiness" value="<?php if(isset($row["credit_limit_min_business"]) && $row["credit_limit_min_business"] != ""){echo $row["credit_limit_min_business"];}else{echo set_value('txtCreditLimitMinBusiness');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMinBusiness');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Max Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCreditLimitMaxBusiness" value="<?php if(isset($row["credit_limit_max_business"]) && $row["credit_limit_max_business"] != ""){echo $row["credit_limit_max_business"];}else{echo set_value('txtCreditLimitMaxBusiness');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMaxBusiness');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Min Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCreditLimitMinSalaried" value="<?php if(isset($row["credit_limit_min_salaried"]) && $row["credit_limit_min_salaried"] != ""){echo $row["credit_limit_min_salaried"];}else{echo set_value('txtCreditLimitMinSalaried');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMinSalaried');?></label>
                                                </section>

                                            </div>
											<div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Max Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCreditLimitMaxSalaried" value="<?php if(isset($row["credit_limit_max_salaried"]) && $row["credit_limit_max_salaried"] != ""){echo $row["credit_limit_max_salaried"];}else{echo set_value('txtCreditLimitMaxSalaried');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMaxSalaried');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Supplementary Card</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtSupplementary"  value="<?php if(isset($row["supplimentary"]) && $row["supplimentary"] != ""){echo $row["supplimentary"];}else{echo set_value('txtSupplementary');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSupplementary');?></label>
                                                </section>
											</div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Experience Salaried (Month)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtYearOfExperienceSalaried" value="<?php if(isset($row["experience_salaried"]) && $row["experience_salaried"] != ""){echo $row["experience_salaried"];}else{echo set_value('txtYearOfExperienceSalaried');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtYearOfExperienceSalaried');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Experience Business (year)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtYearOfExperienceBusiness" value="<?php if(isset($row["experience_business"]) && $row["experience_business"] != ""){echo $row["experience_business"];}else{echo set_value('txtYearOfExperienceBusiness');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtYearOfExperienceBusiness');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Rewards</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtCardBenefit[]">
                                                            <?php
                                                            $result=$this->Select_model->select_all('card_reward');
                                                            $benifit_id= explode(",", $row["card_benifit_id"]);
                                                            $count = count($benifit_id);

                                                            foreach($result->result() as $row1){
                                                                for($i=0;$i<$count;$i++) {
                                                                    ?>
                                                                    <option value="<?php echo $row1->id;?>" <?php if ($benifit_id[$i] == $row1->id) { echo "selected='select'"; }?><?php echo set_select("txtCardBenefit[]", $row1->id)?>><?php echo $row1->reward_name; ?></option>';
                                                                <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardBenefit[]');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Interest Free Period Min</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtInterestFreePeriodMin"  value="<?php if(isset($row["interest_free_period_min"]) && $row["interest_free_period_min"] != ""){echo $row["interest_free_period_min"];}else{echo set_value('txtInterestFreePeriodMin');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestFreePeriodMin');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Interest Free Period Max</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtInterestFreePeriodMax"  value="<?php if(isset($row["interest_free_pefiod_max"]) && $row["interest_free_pefiod_max"] != ""){echo $row["interest_free_pefiod_max"];}else{echo set_value('txtInterestFreePeriodMax');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestFreePeriodMax');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Interest Rate (Yearly)</label><!--Cash Withdraw same as Cash Advance rate Yearly -->
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCashAdvanceRateYearly" value="<?php if(isset($row["cash_advance_interest_rate_yearly"]) && $row["cash_advance_interest_rate_yearly"] != ""){echo $row["cash_advance_interest_rate_yearly"];}else{echo set_value('txtCashAdvanceRateYearly');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceRateYearly');?></label>
                                                </section>
                                            </div>
											
											<div class="row">

												<section class="col col-6">
                                                    <label class="label">Annual Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtAnnualFee" value="<?php if(isset($row["annual_fee"]) && $row["annual_fee"] != ""){echo $row["annual_fee"];}else{echo set_value('txtAnnualFee');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAnnualFee');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Annual Fee Vat(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtAnnualFeeVat" value="<?php if(isset($row["annual_fee_vat"]) && $row["annual_fee_vat"] != ""){echo $row["annual_fee_vat"];}else{echo set_value('txtAnnualFeeVat');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAnnualFeeVat');?></label>
                                                </section>

                                            </div>
											
											<div class="row">
												<section class="col col-6">
                                                    <label class="label">Purchase Interest Rate(Yearly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtPurchaseInterestRate" value="<?php if(isset($row["purchase_interest_rate"]) && $row["purchase_interest_rate"] != ""){echo $row["purchase_interest_rate"];}else{echo set_value('txtPurchaseInterestRate');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPurchaseInterestRate');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Purchase Interest Rate (Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtPurchaseInterestRateMonthly"  value="<?php if(isset($row["purchase_interest_rate_monthly"]) && $row["purchase_interest_rate_monthly"] != ""){echo $row["purchase_interest_rate_monthly"];}else{echo set_value('txtPurchaseInterestRateMonthly');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPurchaseInterestRateMonthly');?></label>
                                                </section>

                                            </div>


											<div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Balance Transfer Rate (Yearly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtBalanceTransferRate"  value="<?php if(isset($row["balance_transfer_rate"]) && $row["balance_transfer_rate"] != ""){echo $row["balance_transfer_rate"];}else{echo set_value('txtBalanceTransferRate');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferRate');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Balance Transfer Rate (Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtBalanceTransferRateMonthly"  value="<?php if(isset($row["balance_transfer_rate_monthly"]) && $row["balance_transfer_rate_monthly"] != ""){echo $row["balance_transfer_rate_monthly"];}else{echo set_value('txtBalanceTransferRateMonthly');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferRateMonthly');?></label>
                                                </section>

                                            </div>


											<div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Interest Rate(Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCashAdvanceInterestRateMonthly"  value="<?php if(isset($row["cash_advance_interest_rate"]) && $row["cash_advance_interest_rate"] != ""){echo $row["cash_advance_interest_rate"];}else{echo set_value('txtCashAdvanceInterestRateMonthly');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceInterestRateMonthly');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Limit(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtCashAdvanceLimit"  value="<?php if(isset($row["cash_advance_limit"]) && $row["cash_advance_limit"] != ""){echo $row["cash_advance_limit"];}else{echo set_value('txtCashAdvanceLimit');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceLimit');?></label>
                                                </section>

                                            </div>

											<div class="row">
												<section class="col col-6">
                                                    <label class="label">Billing cycle (Start)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtBillingCycleStart"  value="<?php if(isset($row["billing_cycle_start"]) && $row["billing_cycle_start"] != ""){echo $row["billing_cycle_start"];}else{echo set_value('txtBillingCycleStart');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBillingCycleStart');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Billing cycle (End)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtBillingCycleEnd"  value="<?php if(isset($row["billing_cycle_end"]) && $row["billing_cycle_end"] != ""){echo $row["billing_cycle_end"];}else{echo set_value('txtBillingCycleEnd');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBillingCycleEnd');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <div class="col col-3">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="txtFeaturedProduct" value="featured" <?php if(isset($row["featured"]) && $row["featured"]==1){echo "checked='checked'";}?> >
                                                        <i></i>Featured Product</label>
                                                </div>
                                                <div class="col col-3">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="isActive" value="active" <?php if(isset($row["status"]) && $row["status"]==1){echo "checked='checked'";}?>>
                                                        <i></i>Is Active</label>
                                                </div>
                                                <div class="col col-6">
                                                    <label class="label">Balance Transfer Limit (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtBalanceTransferLimit"   value="<?php if(isset($row["balance_transfer_limit"]) && $row["balance_transfer_limit"] != ""){echo $row["balance_transfer_limit"];}else{echo set_value('txtBalanceTransferLimit');} ?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferLimit');?></label>
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
                                                                <textarea type="text" id="txtEligibility" class="ckeditor" name="txtEligibility"><?php if(isset($row["eligibility"]) && $row["eligibility"] != ""){echo $row["eligibility"];}else{echo set_value('txtEligibility');} ?></textarea>
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



                                        <article class="col-sm-6 col-md-6 col-lg-6">

                                            <!-- Widget ID (each widget will need unique ID)-->
                                            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                                    <h2>Card Summary</h2>

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
                                                                <textarea type="text" id="txtCardSummary" class="ckeditor" name="txtCardSummary"><?php if(isset($row["card_summary"]) && $row["card_summary"] != ""){echo $row["card_summary"];}else{echo set_value('txtCardSummary');} ?></textarea>
                                                            </label>
                                                        </section>

                                                    </div>
                                                    <!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtCardSummary');?></label>
                                                </div>
                                                <!-- end widget div -->

                                            </div>
                                            <!-- end widget -->

                                        </article>
                                        <article class="col-sm-6 col-md-6 col-lg-6">

											<!-- Widget ID (each widget will need unique ID)-->
											<div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
												<header>
													<span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
													<h2>Pros</h2>

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
                                                                <textarea type="text" id="txtPros" class="ckeditor" name="txtPros"><?php if(isset($row["pros"]) && $row["pros"] != ""){echo $row["pros"];}else{echo set_value('txtPros');} ?></textarea>
                                                            </label>
                                                        </section>

													</div>
													<!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtPros');?></label>
												</div>
												<!-- end widget div -->

											</div>
											<!-- end widget -->

										</article>
										<!-- WIDGET END -->



                                        <article class="col-sm-6 col-md-6 col-lg-6">

                                            <!-- Widget ID (each widget will need unique ID)-->
                                            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                                    <h2>Cons</h2>

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
                                                                <textarea type="text" id="txtCons" class="ckeditor" name="txtCons"><?php if(isset($row["cons"]) && $row["cons"] != ""){echo $row["cons"];}else{echo set_value('txtPros');} ?></textarea>
                                                            </label>
                                                        </section>

                                                    </div>
                                                    <!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtCons');?></label>
                                                </div>
                                                <!-- end widget div -->

                                            </div>
                                            <!-- end widget -->

                                        </article>
                                        <article class="col-sm-12 col-md-12 col-lg-12">

                                            <!-- Widget ID (each widget will need unique ID)-->
                                            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                                    <h2>Benefit</h2>

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

                                                            <label class="input" style="width:100%;">
                                                                <textarea type="text" id="txtBenefit" class="ckeditor" name="txtBenefit"><?php if(isset($row["benifit_details"]) && $row["benifit_details"] != ""){echo $row["benifit_details"];}else{echo set_value('txtBenefit');} ?></textarea>
                                                            </label>
                                                        </section>

                                                    </div>
                                                    <!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtBenefit');?></label>
                                                </div>
                                                <!-- end widget div -->

                                            </div>
                                            <!-- end widget -->

                                        </article>

                                        <article class="col-sm-12 col-md-12 col-lg-12">

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

                                                            <label class="input" style="width:100%;">
                                                                <textarea type="text" id="txtReview" class="ckeditor" name="txtReview"><?php if(isset($row["review"]) && $row["review"] != ""){echo $row["review"];}else{echo set_value('txtReview');} ?></textarea>
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

                                        <div class="row">
                                            <section class='col-md-6'>

                                            </section>
                                            <section class="col-md-6">
                                                <label class="input">
                                                    <button class="btn btn-primary" type="submit" >Save</button>
                                                </label>
                                            </section>

                                        </div>
                <!-- WIDGET END -->

                                    </fieldset>
                                </form>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- END COL -->

            </div>

            <!-- END ROW -->


        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>


