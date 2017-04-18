<?php
/**********************************************
 * Developer : Tarek Raihan                   *
 * Developer Email : tarekraihan@yahoo.com    *
 * Project : FINAGER.COM                      *
 * Module : Education Loan                    *
 * Script : back end  controller              *
 * Start Date : 30-08-2016                    *
 * Last Update : 18-04-2017                   *
 **********************************************/
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $table='education_loan_info';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
//    print_r($row);die;
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['is_non_bank']='';
    $row['non_bank_id']='';
    $row['loan_name']='';
    $row['loan_type_id']='';
    $row['min_loan_amount']='';
    $row['max_loan_amount']='';
    $row['short_description']='';
    $row['min_term']='';
    $row['max_term']='';
    $row['grace_period']='';
    $row['loan_against_fdr']='';
    $row['down_payment']='';
    $row['processing_fee']='';
    $row['early_settlement_fee']='';
    $row['partial_payment_fee']='';
    $row['penalty_charge']='';
    $row['is_fixed']='';
    $row['fixed_interest']='';
    $row['min_interest']='';
    $row['max_interest']='';
    $row['avg_interest']='';
    $row['eligibility']='';
    $row['feature']='';
    $row['requirement']='';
    $row['terms_and_conditions']='';
    $row['review']='';

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
            <li>Loan</li><li>Education Loan</li><li>Edit Loan Information</li>
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
							Edit Loan Information
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
                            <h2>Edit  Loan Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>education_loan/edit_loan_info" class="smart-form" novalidate="novalidate">
                                    <?php
                                    //-----Display Success or Error message---
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                        <input type="hidden" value="<?php echo $row['id'];?>" name="txtEducationLoanId">
                                        <section>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?><?php echo ($row['is_non_bank'] == '1') ? 'checked' : ''; ?> > Is Non Bank Institution ?
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
                                                            <?php
                                                            $result=$this->Select_model->select_all('loan_type');
                                                            //   print_r($result);die;
                                                            foreach($result->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["loan_type_id"]) && $row["loan_type_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtLoanType",$row1->id)?>><?php echo $row1->loan_type ; ?></option>';
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
                                                        <input type="text" maxlength="220" name="txtLoanName" value="<?php echo $row['loan_name']; ?>" placeholder="Write Loan Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Expenses Considered</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtExpensesConsidered[]" required>
                                                            <?php
                                                            $result1=$this->Select_model->select_all('education_expenses_considered');

                                                            $expenses_considered_id =$this->Select_model->get_education_loan_info_vs_expenses_considered($row['id']);

                                                            $expenses_considered = array();

                                                            foreach($expenses_considered_id as $k){
                                                                foreach($k as $v){
                                                                    array_push($expenses_considered,$v);
                                                                }
                                                            }
                                                            $i=0;
                                                            foreach($result1->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($expenses_considered[$i]) ? true : false) { echo "selected='select'"; }else{ echo set_select("txtExpensesConsidered[]", $row1->id);} ?>><?php echo $row1->expenses_considered; ?></option>';
                                                                <?php
                                                                $i++;
                                                            }
                                                            ?>
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
                                                            <?php
                                                            $result1=$this->Select_model->select_all('education_loan_purpose');

                                                            $loan_purpose_id =$this->Select_model->get_education_loan_info_vs_loan_purpose($row['id']);

                                                            $loan_purpose = array();

                                                            foreach($loan_purpose_id as $k){
                                                                foreach($k as $v){
                                                                    array_push($loan_purpose,$v);
                                                                }
                                                            }
                                                            $i=0;
                                                            foreach($result1->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($loan_purpose[$i]) ? true : false) { echo "selected='select'"; }else{ echo set_select("txtLoanPurpose[]", $row1->id);} ?>><?php echo $row1->loan_purpose; ?></option>';
                                                                <?php
                                                                $i++;
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanPurpose[]');?></label>
                                                </section>


                                                <section class="col col-6">
                                                    <label class="label">Grace Period</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="220" name="txtGracePeriod" value="<?php echo $row['grace_period']; ?>" placeholder="Write Grace Period">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtGracePeriod');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Minimum Term</label>
                                                    <label class="select">
                                                        <select name="txtMinEducationLoanTenure" id="txtMinEducationLoanTenure">
                                                            <?php
                                                            $result=$this->Select_model->select_all('education_loan_tenure');

                                                            foreach($result->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["min_term"]) && $row["min_term"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtMinEducationLoanTenure",$row1->id)?>><?php echo $row1->tenure ; ?> Years</option>';
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinEducationLoanTenure');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Maximum Term</label>
                                                    <label class="select">
                                                        <select name="txtMaxEducationLoanTenure" id="txtMaxEducationLoanTenure">
                                                            <?php
                                                            $result=$this->Select_model->select_all('education_loan_tenure');

                                                            foreach($result->result() as $row1){
                                                                ?>
                                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["max_term"]) && $row["max_term"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtMaxEducationLoanTenure",$row1->id)?>><?php echo $row1->tenure ; ?> Years</option>';
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaxEducationLoanTenure');?></label>
                                                </section>
                                            </div>
                                            <div class="row">


                                                <section class="col col-6">
                                                    <label class="label">Minimum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMinimumLoanAmount" value="<?php echo $row['min_loan_amount'];  ?>" placeholder="Write min loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumLoanAmount');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Maximum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMaximumLonAmount" value="<?php echo $row['max_loan_amount'];  ?>" placeholder="Write Max loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumLonAmount');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Down Payment (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPayment" value="<?php echo $row['down_payment']; ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPayment');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan Short Description</label>
                                                    <label class="input">
                                                        <input type="text"  name="txtLoanShortDescription" value="<?php echo $row['short_description']; ?>" placeholder="Write short description">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanShortDescription');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Loan Against FDR</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="25" name="txtLoanAgainstFDR" value="<?php echo $row['loan_against_fdr']; ?>" placeholder="Write Loan Against FDR ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanAgainstFDR');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Processing Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtProcessingFee" value="<?php echo $row['processing_fee']; ?>" placeholder="Write Processing Fee ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtProcessingFee');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Early Settlement Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtEarlySettlementFee" value="<?php echo $row['early_settlement_fee']; ?>" placeholder="Write Early Settlement Fee ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEarlySettlementFee');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Partial Payment Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtPartialPaymentFee" value="<?php echo $row['partial_payment_fee']; ?>" placeholder="Write Partial Payment fee ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPartialPaymentFee');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Penalty Charge</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtPenaltyCharge" value="<?php echo $row['penalty_charge']; ?>" placeholder="Write Penalty Charge ">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPenaltyCharge');?></label>
                                                </section>
                                                <section class="col col-6"  >
                                                    <label class="radio-inline" style="margin-left: 25px ">
                                                        <input type="radio" name="is_fixed" value="variable" id="is_variable" <?php if($row['is_fixed'] == '0'){echo 'checked'; }?>> Variable Interest
                                                    </label>
                                                    <label class="radio-inline" style=" margin-left:35px">
                                                        <input type="radio" name="is_fixed" id="is_fixed" value="fixed" <?php if($row['is_fixed'] == '1'){echo 'checked'; }?> > Fixed Interest
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
                        <h2>Feature</h2>

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
                                    <textarea type="text" id="txtFeature" class="ckeditor" name="txtFeature"><?php echo $row['feature']; ?></textarea>
                                </label>
                            </section>

                        </div>
                        <!-- end widget content -->
                        <label class="red"><?php echo form_error('txtFeature');?></label>
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
                                        <textarea type="text" id="txtEligibility" class="ckeditor" name="txtEligibility"><?php echo $row['eligibility']; ?></textarea>
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
                                        <textarea type="text" id="txtRequiredDocument" class="ckeditor" name="txtRequiredDocument"><?php echo $row['requirement']; ?></textarea>
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
                                        <textarea type="text" id="txtTermsAndConditions" class="ckeditor" name="txtTermsAndConditions"><?php echo $row['terms_and_conditions']; ?></textarea>
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
                                        <textarea type="text" id="txtReview" class="ckeditor" name="txtReview"><?php echo $row['review']; ?></textarea>
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
                                                    <button class="btn btn-primary" type="submit" >Update</button>
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
        $("input[name ='is_fixed']").click(function() {
            var v_value = $(this).val();
            if(v_value == 'fixed'){
                $('#interest_rate').html('<div class="row"><section class="col col-6"><label class="label">Interest Rate Fixed (%)</label><label class="input"><input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php if(isset($row["fixed_interest"]) && $row["fixed_interest"] != ""){echo $row["fixed_interest"];}else{echo set_value('txtInterestRateFixed');} ?>" placeholder="Write Interest Rate without percentage sign"></label><label class="red"><?php echo form_error('txtInterestRateFixed');?></label></section></div>');
            }

            if(v_value == 'variable'){
                $('#interest_rate').html('<div class="row">'+
                '<section class="col col-6">'+
                '<label class="label">Interest Rate Max(%)</label>'+
                '<label class="input">'+
                '<input type="text" maxlength="50" name="txtInterestRateMax" value="<?php if(!empty($row["max_interest"])){echo $row["max_interest"];}else{echo set_value('txtInterestRateMax');} ?>" placeholder="Write Interest Rate without percentage sign">'+
                '</label>'+
                '<label class="red"><?php echo form_error('txtInterestRateMax');?></label>'+
                '</section>'+
                '<section class="col col-6">'+
                '<label class="label">Interest Rate Average(%)</label>'+
                '<label class="input">'+
                '<input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php if(!empty($row["avg_interest"])){echo $row["avg_interest"];}else{echo set_value('txtInterestRateAverage');} ?>" placeholder="Write Interest Rate without percentage sign">'+
                '</label>'+
                '<label class="red"><?php echo form_error("txtInterestRateAverage");?></label>'+
                '</section>'+
                '</div>'+
                '<div class="row">'+
                '<section class="col col-6">'+
                '<label class="label">Interest Rate Min(%)</label>'+
                '<label class="input">'+
                '<input type="text" maxlength="50" name="txtInterestRateMin" value="<?php if(!empty($row["min_interest"])){echo $row["min_interest"];}else{echo set_value('txtInterestRateMin');} ?>" placeholder="Write Interest Rate without percentage sign">'+
                '</label>'+
                '<label class="red"><?php echo form_error('txtInterestRateMin');?></label>'+
                '</section>'+

                '</div>');
            }
        });

        if($("input[id='is_fixed']").is(':checked')){
            $('#interest_rate').html('<div class="row"><section class="col col-6"><label class="label">Interest Rate Fixed (%)</label><label class="input"><input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php if(isset($row["fixed_interest"]) && $row["fixed_interest"] != ""){echo $row["fixed_interest"];}else{echo set_value('txtInterestRateFixed');} ?>" placeholder="Write Interest Rate without percentage sign"></label><label class="red"><?php echo form_error('txtInterestRateFixed');?></label></section></div>');

        }else{
            $('#interest_rate').html('<div class="row">'+
            '<section class="col col-6">'+
            '<label class="label">Interest Rate Max(%)</label>'+
            '<label class="input">'+
            '<input type="text" maxlength="50" name="txtInterestRateMax" value="<?php if(!empty($row["max_interest"])){echo $row["max_interest"];}else{echo set_value('txtInterestRateMax');} ?>" placeholder="Write Interest Rate without percentage sign">'+
            '</label>'+
            '<label class="red"><?php echo form_error('txtInterestRateMax');?></label>'+
            '</section>'+
            '<section class="col col-6">'+
            '<label class="label">Interest Rate Average(%)</label>'+
            '<label class="input">'+
            '<input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php if(!empty($row["avg_interest"])){echo $row["avg_interest"];}else{echo set_value('txtInterestRateAverage');} ?>" placeholder="Write Interest Rate without percentage sign">'+
            '</label>'+
            '<label class="red"><?php echo form_error("txtInterestRateAverage");?></label>'+
            '</section>'+
            '</div>'+
            '<div class="row">'+
            '<section class="col col-6">'+
            '<label class="label">Interest Rate Min(%)</label>'+
            '<label class="input">'+
            '<input type="text" maxlength="50" name="txtInterestRateMin" value="<?php if(!empty($row["min_interest"])){echo $row["min_interest"];}else{echo set_value('txtInterestRateMin');} ?>" placeholder="Write Interest Rate without percentage sign">'+
            '</label>'+
            '<label class="red"><?php echo form_error('txtInterestRateMin');?></label>'+
            '</section>'+

            '</div>');
        }

        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
            }
        });

        if($("input[name ='is_non_bank']").is(':checked')){
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName">' +
            '<?php $result=$this->Select_model->select_all('general_non_bank'); foreach($result->result() as $row1){ ?>'+
            '<option value="<?php echo $row1->id;?>" <?php if(isset($row["non_bank_id"]) && $row["non_bank_id"]==$row1->id){echo "selected";}?><?php echo set_select("txtNonBankName",$row1->id)?>><?php echo $row1->non_bank_name ; ?></option>;<?php } ?>'+
            '</select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName">' +
            '<?php $result=$this->Select_model->select_all('card_bank'); foreach($result->result() as $row1){ ?>'+
            '<option value="<?php echo $row1->id;?>" <?php if(isset($row["bank_id"]) && $row["bank_id"]==$row1->id){echo "selected";}?><?php echo set_select("txtBankName",$row1->id)?>><?php echo $row1->bank_name ; ?></option>;<?php } ?>'+
            '</select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
    });

</script>