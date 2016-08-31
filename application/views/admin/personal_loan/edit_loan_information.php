<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $table='personal_loan_info';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
//    print_r($row);die;
}else{
    $row['id']='';
    $row['bank_id']='';
//    $row['loan_type_id']='';
//    $row['auto_loan_looking_for_id']='';
    $row['personal_loan_name']='';
    $row['loan_short_description']='';
    $row['min_loan_amount']='';
    $row['max_loan_amount']='';
    $row['interest_rate_min']='';
    $row['interest_rate_max']='';
    $row['interest_rate_average']='';
    $row['is_fixed']='';
    $row['interest_rate_fixed']='';
//    $row['downpayment']='';
    $row['security_required']='';
    $row['fees_and_charges']='';
    $row['features']='';
    $row['eligibility_for_applying']='';
    $row['required_document']='';
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
            <li>Loan</li><li>Personal Loan</li><li>Edit Loan Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Personal Loan
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
                            <h2>Edit Loan Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>personal_loan/edit_loan_info" class="smart-form" novalidate="novalidate">
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
                                                    <input type="hidden" value="<?php echo $row['id'];?>" name="txtPersonalLoanId">
                                                    <label class="select">
                                                        <select name="txtBankName" id="txtBankName">
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
                                                            <?php
                                                            $result=$this->Select_model->select_all('loan_type');
                                                            //                                                            print_r($result);die;
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
                                                        <input type="text" maxlength="220" name="txtLoanName" value="<?php if(isset($row["personal_loan_name"]) && $row["personal_loan_name"] != ""){echo $row["personal_loan_name"];}else{echo set_value('txtLoanName');} ?>" placeholder="Write Loan Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan Short Description</label>
                                                    <label class="input">
                                                        <input type="text"  name="txtLoanShortDescription" value="<?php if(isset($row["loan_short_description"]) && $row["loan_short_description"] != ""){echo $row["loan_short_description"];}else{echo set_value('txtLoanShortDescription');} ?>" placeholder="Write short description">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanShortDescription');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan User( I Am )</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtPersonalLoanUser[]" required>
                                                            <?php
                                                            $result1=$this->Select_model->personal_loan_all_user();

                                                            $user_id =$this->Select_model->get_personal_loan_info_vs_i_am($row['id']);

                                                            $user = array();
//                                                              print_r($user_id);die;
                                                            foreach($user_id as $k){
                                                                foreach($k as $v){
                                                                    array_push($user,$v);
                                                                }
                                                            }
//                                                            $count = count($user);
                                                            $i=0;
                                                            foreach($result1->result() as $row1){

                                                                    ?>
                                                                    <option value="<?php echo $row1->id;?>" <?php if(isset($user[$i]) ? ($user[$i] == $row1->id) : false) { echo "selected='select'"; }else{ echo set_select("txtPersonalLoanUser[]", $row1->id);} ?>><?php echo $row1->i_am; ?></option>';
                                                            <?php
                                                                $i++;
                                                            }
                                                            ?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPersonalLoanUser[]');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMinimumLoanAmount" value="<?php if(isset($row["min_loan_amount"]) && $row["min_loan_amount"] != ""){echo $row["min_loan_amount"];}else{echo set_value('txtMinimumLoanAmount');} ?>" placeholder="Write min loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumLoanAmount');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Maximum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMaximumLonAmount" value="<?php if(isset($row["max_loan_amount"]) && $row["max_loan_amount"] != ""){echo $row["max_loan_amount"];}else{echo set_value('txtMaximumLonAmount');} ?>" placeholder="Write Max loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumLonAmount');?></label>
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
                            <h2>Security</h2>

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
                                        <textarea type="text" id="txtSecurityRequired" class="ckeditor" name="txtSecurityRequired"><?php if(isset($row["security_required"]) && $row["security_required"] != ""){echo $row["security_required"];}else{echo set_value('txtSecurityRequired');} ?></textarea>
                                    </label>
                                </section>

                            </div>
                            <!-- end widget content -->
                            <label class="red"><?php echo form_error('txtSecurityRequired');?></label>
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
                                        <textarea type="text" id="txtFeesAndCharges" class="ckeditor" name="txtFeesAndCharges"><?php if(isset($row["fees_and_charges"]) && $row["fees_and_charges"] != ""){echo $row["fees_and_charges"];}else{echo set_value('txtFeesAndCharges');} ?></textarea>
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
                                        <textarea type="text" id="txtFeatures" class="ckeditor" name="txtFeatures"><?php if(isset($row["features"]) && $row["features"] != ""){echo $row["features"];}else{echo set_value('txtFeatures');} ?></textarea>
                                    </label>
                                </section>

                            </div>
                            <!-- end widget content -->
                            <label class="red"><?php echo form_error('txtFeatures');?></label>
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
                                        <textarea type="text" id="txtEligibility" class="ckeditor" name="txtEligibility"><?php if(isset($row["eligibility_for_applying"]) && $row["eligibility_for_applying"] != ""){echo $row["eligibility_for_applying"];}else{echo set_value('txtEligibility');} ?></textarea>
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
                            <h2>Documents</h2>

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
                                        <textarea type="text" id="txtRequiredDocument" class="ckeditor" name="txtRequiredDocument"><?php if(isset($row["required_document"]) && $row["required_document"] != ""){echo $row["required_document"];}else{echo set_value('txtRequiredDocument');} ?>></textarea>
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
                                        <textarea type="text" id="txtTermsAndConditions" class="ckeditor" name="txtTermsAndConditions"><?php if(isset($row["terms_and_conditions"]) && $row["terms_and_conditions"] != ""){echo $row["terms_and_conditions"];}else{echo set_value('txtTermsAndConditions');} ?></textarea>
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
                <!-- WIDGET END -->

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
        $("input[name ='is_fixed']").click(function() {
            var v_value = $(this).val();
            if(v_value == 'fixed'){
                $('#interest_rate').html('<div class="row"><section class="col col-6"><label class="label">Interest Rate Fixed (%)</label><label class="input"><input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php if(isset($row["interest_rate_fixed"]) && $row["interest_rate_fixed"] != ""){echo $row["interest_rate_fixed"];}else{echo set_value('txtInterestRateFixed');} ?>" placeholder="Write Interest Rate without percentage sign"></label><label class="red"><?php echo form_error('txtInterestRateFixed');?></label></section></div>');

            }

            if(v_value == 'variable'){
                $('#interest_rate').html('<div class="row">'+
                '<section class="col col-6">'+
                '<label class="label">Interest Rate Max(%)</label>'+
                '<label class="input">'+
                '<input type="text" maxlength="50" name="txtInterestRateMax" value="<?php if(!empty($row["interest_rate_max"])){echo $row["interest_rate_max"];}else{echo set_value('txtInterestRateMax');} ?>" placeholder="Write Interest Rate without percentage sign">'+
                '</label>'+
                '<label class="red"><?php echo form_error('txtInterestRateMax');?></label>'+
                '</section>'+
                '<section class="col col-6">'+
                '<label class="label">Interest Rate Average(%)</label>'+
                '<label class="input">'+
                '<input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php if(!empty($row["interest_rate_average"])){echo $row["interest_rate_average"];}else{echo set_value('txtInterestRateAverage');} ?>" placeholder="Write Interest Rate without percentage sign">'+
                '</label>'+
                '<label class="red"><?php echo form_error("txtInterestRateAverage");?></label>'+
                '</section>'+
                '</div>'+
                '<div class="row">'+
                '<section class="col col-6">'+
                '<label class="label">Interest Rate Min(%)</label>'+
                '<label class="input">'+
                '<input type="text" maxlength="50" name="txtInterestRateMin" value="<?php if(!empty($row["interest_rate_min"])){echo $row["interest_rate_min"];}else{echo set_value('txtInterestRateMin');} ?>" placeholder="Write Interest Rate without percentage sign">'+
                '</label>'+
                '<label class="red"><?php echo form_error('txtInterestRateMin');?></label>'+
                '</section>'+

                '</div>');
            }
        });

        if($("input[id='is_fixed']").is(':checked')){


            $('#interest_rate').html('<div class="row"><section class="col col-6"><label class="label">Interest Rate Fixed (%)</label><label class="input"><input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php if(isset($row["interest_rate_fixed"]) && $row["interest_rate_fixed"] != ""){echo $row["interest_rate_fixed"];}else{echo set_value('txtInterestRateFixed');} ?>" placeholder="Write Interest Rate without percentage sign"></label><label class="red"><?php echo form_error('txtInterestRateFixed');?></label></section></div>');

        }else{
            $('#interest_rate').html('<div class="row">'+
            '<section class="col col-6">'+
            '<label class="label">Interest Rate Max(%)</label>'+
            '<label class="input">'+
            '<input type="text" maxlength="50" name="txtInterestRateMax" value="<?php if(!empty($row["interest_rate_max"])){echo $row["interest_rate_max"];}else{echo set_value('txtInterestRateMax');} ?>" placeholder="Write Interest Rate without percentage sign">'+
            '</label>'+
            '<label class="red"><?php echo form_error('txtInterestRateMax');?></label>'+
            '</section>'+
            '<section class="col col-6">'+
            '<label class="label">Interest Rate Average(%)</label>'+
            '<label class="input">'+
            '<input type="text" maxlength="50" name="txtInterestRateAverage" value="<?php if(!empty($row["interest_rate_average"])){echo $row["interest_rate_average"];}else{echo set_value('txtInterestRateAverage');} ?>" placeholder="Write Interest Rate without percentage sign">'+
            '</label>'+
            '<label class="red"><?php echo form_error("txtInterestRateAverage");?></label>'+
            '</section>'+
            '</div>'+
            '<div class="row">'+
            '<section class="col col-6">'+
            '<label class="label">Interest Rate Min(%)</label>'+
            '<label class="input">'+
            '<input type="text" maxlength="50" name="txtInterestRateMin" value="<?php if(!empty($row["interest_rate_min"])){echo $row["interest_rate_min"];}else{echo set_value('txtInterestRateMin');} ?>" placeholder="Write Interest Rate without percentage sign">'+
            '</label>'+
            '<label class="red"><?php echo form_error('txtInterestRateMin');?></label>'+
            '</section>'+

            '</div>');
        }
    });
</script>