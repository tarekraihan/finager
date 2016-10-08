<?php
/*$result1=$this->Select_model->select_all('home_loan_user');
foreach($result1->result() as $k){
    echo $k->home_loan_user;
}
die;*/
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $table='fdr_info_draft';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
//    print_r($row);die;
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['is_non_bank']='';
    $row['non_bank_id']='';
    $row["i_am_id"] ='';
    $row['deposit_type_id']='';
    $row['available_feature']='';
    $row['eligibility']='';
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
            <li>Deposit</li><li>FDR</li><li> Draft/Common Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    FDR
                    <span>>
                        Draft/Common Information
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
                            <h2>Add common Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>fdr/edit_draft_info" class="smart-form" novalidate="novalidate">
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
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?><?php if($row['is_non_bank'] == '1'){echo 'checked'; }?> > Is Non Bank Institution ?
                                                        <input type="hidden" name="txtDraftId" value="<?php echo $row['id'];?>">
                                                    </label>
                                                </section>
                                            </div>

                                        <div class="row">

                                            <section class="col col-6">

                                                <label class="label">Bank Name</label>

                                                <label class="select">
                                                    <select name="txtBankName" id="txtBankName">
                                                        <?php
                                                        $result=$this->Select_model->select_all("card_bank");
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
                                            <section class="col col-6" id="institution">
                                                <label class="label">Bank Name</label>
                                                <label class="select">
                                                    <select name="txtBankName" id="txtBankName">
                                                        <?php echo $this->Select_model->select_bank();?>
                                                    </select>
                                                </label>
                                                <label class="red"><?php echo form_error('txtBankName');?></label>
                                            </section>

                                            <section class="col col-6">
                                                <label class="label">Deposit Type</label>
                                                <label class="select">
                                                    <select name="txtDepositType" id="txtDepositType">
                                                        <?php
                                                        $result=$this->Select_model->select_all('deposit_type');
                                                        //   print_r($result);die;
                                                        foreach($result->result() as $row1){
                                                            ?>
                                                            <option value="<?php echo $row1->id;?>" <?php if(isset($row["deposit_type_id"]) && $row["deposit_type_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtDepositType",$row1->id)?>><?php echo $row1->deposit_name ; ?></option>';
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </label>
                                                <label class="red"><?php echo form_error('txtDepositType');?></label>
                                            </section>

                                        </div>
                                        <div class="row">
                                            <section class="col col-6">
                                                <label class="label">I Am</label>
                                                <label class="select">
                                                    <select name="txtIAm" id="txtIAm">
                                                        <?php
                                                        $result=$this->Select_model->select_all('fdr_i_am');
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
                                        </div>
                                    </section>
                                </fieldset>
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
        $("input[name ='is_fixed']").click(function() {
            var v_value = $(this).val();
            if(v_value == 'fixed'){
                $.ajax({
                    url: "<?php echo base_url(); ?>home_loan/ajax_home_loan_interest_variable",
                    type : "POST",
                    dataType : "html"
                })
                .done(function( data ) {
                    $('#interest_rate').html('<div class="row"><section class="col col-6"><label class="label">Interest Rate Fixed (%)</label><label class="input"><input type="text" maxlength="50" name="txtInterestRateFixed" value="<?php echo set_value('txtInterestRateFixed'); ?>" placeholder="Write Interest Rate without percentage sign"></label><label class="red"><?php echo form_error('txtInterestRateFixed');?></label></section></div>');
                });

            }

            if(v_value == 'variable'){
                $.ajax({
                    url: "<?php echo base_url(); ?>home_loan/ajax_home_loan_interest_variable",
                    type : "POST",
                    dataType : "html"
                })
                .done(function( data ) {
                    $('#interest_rate').html(data);
                });
            }
        });
        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html('<label class="select"><select name="txtBankName" id="txtBankName"><?php $result=$this->Select_model->select_all("card_bank");
                foreach($result->result() as $row1){
                    ?><option value="<?php echo $row1->id;?>" <?php if(isset($row["bank_id"]) && $row["bank_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtBankName",$row1->id)?>><?php echo $row1->bank_name ; ?></option>';
                <?php
                }
                ?>
                </select>
                </label>');
            }
        });

        if($("input[name ='is_non_bank']").is(':checked')){
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
    });
</script>