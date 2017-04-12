<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $table='millionaire_info';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
//    print_r($row);die;
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['is_non_bank']='';
    $row['non_bank_id']='';
    $row['i_am_id']='';
    $row['tenure_id']='';
    $row['millionaire_info_name']='';
    $row['initial_deposit']='';
    $row['monthly_deposit']='';
    $row['maturity_amount_id']='';
    $row['loan_facility']='';
    $row['interest_rate']='';
    $row['available_feature']='';
    $row['terms_and_conditions']='';
    $row['eligibility']='';
    $row['required_document']='';
    $row['available_benefit']='';
    $row['fees_and_charges']='';
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
        <li>Deposit</li><li>Millionaire</li><li> Update Millionaire Information</li>
    </ol>
</div>
<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<div id="content">

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-table fa-fw "></i>
            Millionaire
                <span>>
                    Update Millionaire Information
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
            <h2>Update Millionaire Information</h2>

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

                <form id="age_limit" method="post" action="<?php echo base_url();?>millionaire/edit_millionaire_info" class="smart-form" novalidate="novalidate">
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
                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?><?php echo ($row['is_non_bank'] == '1') ? 'checked' : ''; ?> > Is Non Bank Institution ?
                                        <input type="hidden" name="txtMillionaireId" value="<?php echo $row['id'];?>">
                                    </label>
                                </section>
                                <section class="col col-6" id="institution">

                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">I Am</label>
                                    <label class="select">
                                        <select name="txtIAm" id="txtIAm">
                                            <?php
                                            $result=$this->Select_model->select_all('millionaire_i_am');
                                            foreach($result->result() as $row1){
                                                ?>
                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["i_am_id"]) && $row["i_am_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtIAm",$row1->id)?>><?php echo $row1->i_am ; ?></option>';
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtIAm');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Loan Facility (%)</label>
                                    <label class="input">
                                        <input type="text" maxlength="10" name="txtLoanFacility" value="<?php if(isset($row["loan_facility"]) && $row["loan_facility"] != ""){echo $row["loan_facility"];}else{echo set_value('txtLoanFacility');} ?>" placeholder="Write Loan Facility without percentage sign">
                                    </label>

                                    <label class="red"><?php echo form_error('txtLoanFacility');?></label>
                                </section>
                            </div>


                            <div class="row">

                                <section class="col col-6">
                                    <label class="label">Maturity Amount</label>
                                    <label class="select">
                                        <select name="txtMaturityAmount" id="txtMaturityAmount">
                                            <?php
                                            $result=$this->Select_model->select_all('millionaire_maturity_amount');
                                            foreach($result->result() as $row1){
                                                ?>
                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["maturity_amount_id"]) && $row["maturity_amount_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtMaturityAmount",$row1->id)?>><?php echo $row1->maturity_amount ; ?></option>';
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtMaturityAmount');?></label>


                                </section>
                                <section class="col col-6">
                                    <label class="label">Tenure</label>
                                    <label class="select">
                                        <label class="select">
                                            <select name="txtTenure" id="txtTenure">
                                                <?php
                                                $result=$this->Select_model->select_all('millionaire_tenure');
                                                foreach($result->result() as $row1){
                                                    ?>
                                                    <option value="<?php echo $row1->id;?>" <?php if(isset($row["tenure_id"]) && $row["tenure_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtTenure",$row1->id)?>><?php echo $row1->tenure.' Years' ; ?></option>';
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtTenure');?></label>
                                </section>

                            </div>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Initial Deposit</label>
                                    <label class="input">
                                        <input type="text" maxlength="15" name="txtInitialDeposit" value="<?php if(isset($row["initial_deposit"]) && $row["initial_deposit"] != ""){echo $row["initial_deposit"];}else{echo set_value('txtInitialDeposit');} ?>" placeholder="Write Initial Deposit">
                                    </label>
                                    <label class="red"><?php echo form_error('txtInitialDeposit');?></label>
                                </section>


                                <section class="col col-6">
                                    <label class="label">Monthly Deposit</label>
                                    <label class="input">
                                        <input type="text" maxlength="16" name="txtMonthlyDeposit" value="<?php if(isset($row["monthly_deposit"]) && $row["monthly_deposit"] != ""){echo $row["monthly_deposit"];}else{echo set_value('txtMonthlyDeposit');} ?>" placeholder="Write Monthly Deposit">
                                    </label>
                                    <label class="red"><?php echo form_error('txtMonthlyDeposit');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Deposit Name</label>
                                    <label class="input">
                                        <input type="text" maxlength="250" name="txtDepositName" value="<?php if(isset($row["millionaire_info_name"]) && $row["millionaire_info_name"] != ""){echo $row["millionaire_info_name"];}else{echo set_value('txtDepositName');} ?>" placeholder="Write DPS Name">
                                    </label>
                                    <label class="red"><?php echo form_error('txtDepositName');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Interest Rate</label>
                                    <label class="input">
                                        <input type="text" maxlength="50" name="txtInterestRate" value="<?php if(isset($row["interest_rate"]) && $row["interest_rate"] != ""){echo $row["interest_rate"];}else{echo set_value('txtInterestRate');} ?>" placeholder="Write Interest Rate without percentage sign">
                                    </label>
                                    <label class="red"><?php echo form_error('txtInterestRate');?></label>
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
            <h2>Available Features</h2>

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
                        <textarea type="text" id="txtAvailableFeatures" class="ckeditor" name="txtAvailableFeatures"><?php if(isset($row["available_feature"]) && $row["available_feature"] != ""){echo $row["available_feature"];}else{echo set_value('txtAvailableFeatures');} ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtAvailableFeatures');?></label>
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
                        <textarea type="text" id="txtRequiredDocument" class="ckeditor" name="txtRequiredDocument"><?php if(isset($row["required_document"]) && $row["required_document"] != ""){echo $row["required_document"];}else{echo set_value('txtRequiredDocument');} ?></textarea>
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
            <h2>Available Benefit</h2>

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
                        <textarea type="text" id="txtAvailableBenefit" class="ckeditor" name="txtAvailableBenefit"><?php if(isset($row["available_benefit"]) && $row["available_benefit"] != ""){echo $row["available_benefit"];}else{echo set_value('txtAvailableBenefit');} ?></textarea>
                    </label>
                </section>

            </div>
            <!-- end widget content -->
            <label class="red"><?php echo form_error('txtAvailableBenefit');?></label>
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

        $("#txtBankName").on('change', function(){
            call_draft_info();
        });
        $("#txtNonBankName").on('change', function(){
            call_draft_info();
        });
        $("#txtIAm").on('change', function(){
            call_draft_info();
        });
        $("#txtMaturityAmount").on('change', function(){
            call_draft_info();
        });



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

    function call_draft_info(){
        var i_am = $('#txtIAm').val();
        var bank_id = $('#txtBankName').val();
        var non_bank_id = $('#txtNonBankName').val();
        var maturity_amount_id = $('#txtMaturityAmount').val();
//        alert(maturity_amount_id);
        if($("input[name ='is_non_bank']").is(':checked')){
            var param = 'non_bank_id='+non_bank_id+'&i_am='+i_am+'&maturity_amount_id='+maturity_amount_id+'&is_non_bank=1';
        }else{
            var param = 'bank_id='+bank_id+'&i_am='+i_am+'&maturity_amount_id='+maturity_amount_id+'&is_non_bank=0';
        }
        if(bank_id != '' && i_am != '' && maturity_amount_id != ''){
            $.ajax({
                url: "<?php echo base_url(); ?>millionaire/ajax_get_draft_millionaire_info",
                type : "POST",
                dataType : "json",
                data : param
            })
                .done(function( data ) {

                    if(data.process){

                        CKEDITOR.instances['txtAvailableFeatures'].setData(data.available_feature);
                        CKEDITOR.instances['txtEligibility'].setData(data.eligibility);
                        CKEDITOR.instances['txtRequiredDocument'].setData(data.required_document);
                        CKEDITOR.instances['txtTermsAndConditions'].setData(data.terms_and_conditions);
                        CKEDITOR.instances['txtAvailableBenefit'].setData(data.available_benefit);
                        CKEDITOR.instances['txtFeesAndCharges'].setData(data.fees_and_charges);
                        CKEDITOR.instances['txtReview'].setData(data.review);
                    }else{
                        CKEDITOR.instances['txtAvailableFeatures'].setData('');
                        CKEDITOR.instances['txtEligibility'].setData('');
                        CKEDITOR.instances['txtRequiredDocument'].setData('');
                        CKEDITOR.instances['txtTermsAndConditions'].setData('');
                        CKEDITOR.instances['txtAvailableBenefit'].setData('');
                        CKEDITOR.instances['txtFeesAndCharges'].setData('');
                        CKEDITOR.instances['txtReview'].setData('');
                    }

//                    console.log(data.available_feature);
                });

        }
    }
</script>