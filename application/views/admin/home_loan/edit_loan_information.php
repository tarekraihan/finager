<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $table='home_loan_info';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
//    print_r($row);die;
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['loan_type_id']='';
    $row['home_loan_name']='';
    $row['min_loan_amount']='';
    $row['max_loan_amount']='';
    $row['min_income_salaried']='';
    $row['min_income_salaried']='';
    $row['min_income_professional']='';
    $row['min_income_businessmen']='';
    $row['min_income_landlord']='';
    $row['interest_rate_min']='';
    $row['interest_rate_max']='';
    $row['interest_rate_average']='';
    $row['downpayment_flat']='';
    $row['downpayment_housing_plot']='';
    $row['downpayment_extension_finish_work']='';
    $row['downpayment_home_loan_take_over']='';
    $row['security_required']='';
    $row['repayment_type']='';
    $row['repayment_option']='';
    $row['processing_fee']='';
    $row['early_settlement_fee']='';
    $row['partial_payment_fee']='';
    $row['penalty_charge']='';
    $row['quotation_charge_fee']='';
    $row['minimum_term']='';
    $row['maximum_term']='';
    $row['grace_period']='';
    $row['availability_of_early_settlement']='';
    $row['availability_of_partial_payment']='';
    $row['try_party_agreement_up_to']='';
    $row['min_experience_salaried']='';
    $row['min_experience_professional']='';
    $row['min_experience_businessmen']='';
    $row['min_age']='';
    $row['max_age']='';
    $row['required_document']='';

}
?>

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
            <li>Loan</li><li>Home Loan</li><li> Loan Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Home Loan
							<span>> 
							Update Loan Information
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
                            <h2>Update Loan Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>home_loan/edit_loan_info" class="smart-form" novalidate="novalidate">
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
                                                <section class="col col-6">
                                                    <label class="label">Loan Type</label>
                                                    <label class="select">
                                                        <select name="txtLoanType" id="txtLoanType">
<!--                                                            --><?php //echo $this->Select_model->loan_type();?>
                                                            <?php
                                                                $result = $this->Select_model->select_all('loan_type');
                                                            foreach($result->result() as $row2){
                                                                ?>
                                                                <option value="<?php echo $row2->id;?>" <?php if(isset($row["loan_type_id"]) && $row['loan_type_id']==$row2->id){echo "selected='selected'";} ?><?php echo set_select("txtLoanType", $row2->id)?> ><?php echo $row2->loan_type; ?></option>
                                                                <?php
                                                            }


                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanType');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan Name </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="220" name="txtLoanName" value="<?php if(isset($row["home_loan_name"]) && $row["home_loan_name"] != ""){echo $row["home_loan_name"];}else{echo set_value('txtLoanName');} ?>" placeholder="Write Loan Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Applicant Type</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtApplicantType[]" required>
                                                            <?php
                                                            $result = $this->Select_model->select_all('home_loan_applicant_type');
                                                            foreach($result->result() as $row3){
                                                                ?>
                                                                <option value="<?php echo $row3->id;?>" <?php if(isset($row["loan_type_id"]) && $row['loan_type_id']==$row3->id){echo "selected='selected'";} ?><?php echo set_select("txtApplicantType[]", $row3->id)?> ><?php echo $row3->home_loan_applicant_type; ?></option>
                                                            <?php
                                                            }
                                                            ?>
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
                                                            <?php echo $this->Select_model->looking_for();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLookingFor[]');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan User</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtHomeLoanUser[]" required>
                                                            <?php echo $this->Select_model->home_loan_user();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtHomeLoanUser[]');?></label>
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
                                                        <input type="text" maxlength="20" name="txtMinIncomeSalaried" value="<?php echo set_value('txtMinIncomeSalaried'); ?>" placeholder="Write Min Income for Salaried Person">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeSalaried');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Min Income Professional</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="20" name="txtMinIncomeProfessional" value="<?php echo set_value('txtMinIncomeProfessional'); ?>" placeholder="Write Min Income for Professional">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeProfessional');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Min Income Businessmen</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="20" name="txtMinIncomeBusinessmen" value="<?php echo set_value('txtMinIncomeBusinessmen'); ?>" placeholder="Write Min Income for Businessmen">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeBusinessmen');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Min Income Landlord</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="20" name="txtMinIncomeLandlord" value="<?php echo set_value('txtMinIncomeLandlord'); ?>"  placeholder="Write Min Income for Landlord">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinIncomeLandlord');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Down Payment For Flat(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPaymentFlat" value="<?php echo set_value('txtDownPaymentFlat'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentFlat');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Down Payment for Home Construction (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPaymentHomeConstruction" value="<?php echo set_value('txtDownPaymentHomeConstruction'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentHomeConstruction');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Down Payment for Housing Plot (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPaymentHousingPlot" value="<?php echo set_value('txtDownPaymentHousingPlot'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentHousingPlot');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Down Payment for Extension Finish Work (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPaymentExtensionFinishWork" value="<?php echo set_value('txtDownPaymentExtensionFinishWork'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentExtensionFinishWork');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Down Payment for Home Loan Take Over (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPaymentHomeLoanTakeOver" value="<?php echo set_value('txtDownPaymentHomeLoanTakeOver'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPaymentHomeLoanTakeOver');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label"> Security Required</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtSecurityRequired" value="<?php echo set_value('txtSecurityRequired'); ?>" placeholder="Write Security Required">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSecurityRequired');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Repayment Types</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtRepaymentType" value="<?php echo set_value('txtRepaymentType'); ?>" placeholder="Write Repayment Types">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtRepaymentType');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Repayment Option </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtRepaymentOption" value="<?php echo set_value('txtRepaymentOption'); ?>"  placeholder="Write Repayment Option">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtRepaymentOption');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Processing Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtProcessingFee" value="<?php echo set_value('txtProcessingFee'); ?>"  placeholder="Write Processing fee without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProcessingFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Early Settlement Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtEarlySettlementFee" value="<?php echo set_value('txtEarlySettlementFee'); ?>"  placeholder="Write Early Settlement fee without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEarlySettlementFee');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Partial Payment Fee </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtPartialPaymentFee" value="<?php echo set_value('txtPartialPaymentFee'); ?>"  placeholder="Write partial payment fee without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPartialPaymentFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Penalty Charge </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtPenaltyCharge" value="<?php echo set_value('txtPenaltyCharge'); ?>"  placeholder="Write penalty charge without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPenaltyCharge');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Term</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumTerm" value="<?php echo set_value('txtMinimumTerm');?>"  placeholder="Write minimum term.">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumTerm');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Maximum Term</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMaximumTerm" value="<?php echo set_value('txtMaximumTerm'); ?>"   placeholder="Write maximum term.">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumTerm');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Grace Period (Month/Year)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtGracePeriod" value="<?php echo set_value('txtGracePeriod'); ?>"  placeholder="Write grace period with month/year word">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtGracePeriod');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Availability of Early Settlement</label>
                                                    <label class="select">
                                                        <select name="txtAvailabilityOfEarlySettlement">
                                                            <option value="1" <?php echo set_select('txtAvailabilityOfEarlySettlement',1);?>>Yes</option>
                                                            <option value="0" <?php echo set_select('txtAvailabilityOfEarlySettlement',0);?>>No</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAvailabilityOfEarlySettlement');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Availability of Partial Payment</label>
                                                    <label class="select">
                                                        <select name="txtAvailabilityOfPartialPayment">
                                                            <option value="1" <?php echo set_select('txtAvailabilityOfPartialPayment',1);?>>Yes</option>
                                                            <option value="0" <?php echo set_select('txtAvailabilityOfPartialPayment',0);?>>No</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAvailabilityOfPartialPayment');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Home Loan Feature</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtHomeLoanFeature[]" required>
                                                            <?php echo $this->Select_model->home_loan_feature();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtHomeLoanFeature[]');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Try Party Agreement Allowed up to</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtTryPartyAgreement" value="<?php echo set_value('txtTryPartyAgreement'); ?>"  placeholder="Write try party agreement allowed up to ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtTryPartyAgreement');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Experience Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumExperienceSalaried" value="<?php echo set_value('txtMinimumExperienceSalaried'); ?>"  placeholder="Write minimum experience salaried person">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumExperienceSalaried');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Experience Professional</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumExperienceProfessional" value="<?php echo set_value('txtMinimumExperienceProfessional'); ?>"  placeholder="Write minimum experience professional">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumExperienceProfessional');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Experience Businessmen</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumExperienceBusinessmen" value="<?php echo set_value('txtMinimumExperienceBusinessmen'); ?>"  placeholder="Write minimum experience businessmen" >
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumExperienceBusinessmen');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Age</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtMinimumAge" value="<?php echo set_value('txtMinimumAge'); ?>" placeholder="Write Minimum age ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumAge');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Maximum Age</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtMaximumAge" value="<?php echo set_value('txtMaximumAge'); ?>" placeholder="Write Maximum Age">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumAge');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Interest Rate Min(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtInterestRateMin" value="<?php echo set_value('txtInterestRateMin'); ?>" placeholder="Write Interest Rate without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRateMin');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Interest Rate Max(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtInterestRateMax" value="<?php echo set_value('txtInterestRateMax'); ?>" placeholder="Write Interest Rate without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRateMax');?></label>
                                                </section>


                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Interest Rate Average(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php echo set_value('txtInterestRateAverage'); ?>" placeholder="Write Interest Rate without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRateAverage');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Quotation Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="220" name="txtQuotationFeeBdt" value="<?php echo set_value('txtQuotationFeeBdt'); ?>"  placeholder="Write Quotation Fee BDT ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtQuotationFeeBdt');?></label>
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