<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $table='saving_account_info';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['is_non_bank']='';
    $row['non_bank_id']='';
    $row['saving_account_name']='';
    $row['i_am_id']='';
    $row['opening_balance']='';
    $row['interest_rate']='';
    $row['min_balance_for_interest']='';
    $row['interest_paid']='';
    $row['features']='';
    $row['fees_and_charges']='';
    $row['requirements']='';
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
        <li>Account</li><li>Current Account</li><li> Add Account Information</li>
    </ol>
</div>
<!-- END RIBBON -->

<<!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Saving Account
                <span>>
                    Add Account Information
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
                            <h2>Add Account Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>saving_account/edit_account_info" class="smart-form" novalidate="novalidate">
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
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?> <?php echo ($row['is_non_bank'] ==1) ? 'checked' : '' ;?>> Is Non Bank Institution ?
                                                        <input type="hidden" name="txtSavingAccountInfoId" value="<?php echo $row['id'];?>">
                                                    </label>
                                                </section>
                                                <section class="col col-6" id="institution">

                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Saving Account Name</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtSavingAccountName" value="<?php echo $row['saving_account_name']; ?>" placeholder="Write Saving Account Name">
                                                    </label>

                                                    <label class="red"><?php echo form_error('txtSavingAccountName');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">I Am</label>
                                                    <label class="select">
                                                        <select name="txtIAm" id="txtIAm">
                                                            <?php
                                                            $result=$this->Select_model->select_all('current_account_i_am');
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
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Opening Balance</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtOpeningBalance" value="<?php echo $row['opening_balance']; ?>" placeholder="Write Opening Balance">
                                                    </label>

                                                    <label class="red"><?php echo form_error('txtOpeningBalance');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Interest Rate</label>
                                                    <label class="input">
                                                        <input type="text" name="txtInterestRate" value="<?php echo $row['interest_rate']; ?>" placeholder="Write Interest Rate">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestRate');?></label>
                                                </section>
                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Minimum Amount for Interest</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtMinAmountInterest" id="txtMinAmountInterest" value="<?php echo $row['min_balance_for_interest']; ?>" placeholder="Write  Minimum Account for Interest">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinAmountInterest');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Interest Paid (Ex: Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtInterestPaid" id="txtInterestPaid" value="<?php echo $row['interest_paid']; ?>" placeholder="Write  Interest Paid">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestPaid');?></label>
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
                                        <textarea type="text" id="txtAvailableFeatures" class="ckeditor" name="txtAvailableFeatures"><?php echo $row['features']; ?></textarea>
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
                            <h2>Requirement</h2>

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
                                        <textarea type="text" id="txtRequirement" class="ckeditor" name="txtRequirement"><?php echo $row['requirements']; ?></textarea>
                                    </label>
                                </section>

                            </div>
                            <!-- end widget content -->
                            <label class="red"><?php echo form_error('txtRequirement');?></label>
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
                                        <textarea type="text" id="txtFeesAndCharges" class="ckeditor" name="txtFeesAndCharges"><?php echo $row['fees_and_charges']; ?></textarea>
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
            '<option value="<?php echo $row1->id;?>" <?php if(isset($row["bank_id"]) && $row["bank_id"]==$row1->id){echo "selected";}?><?php echo set_select("txtBankName",$row1->id)?>><?php echo $row1
    ->bank_name ; ?></option>;<?php } ?>'+
            '</select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
    });
</script>