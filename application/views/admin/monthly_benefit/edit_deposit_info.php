<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $row=$this->Select_model->Select_monthly_benefit_info_by_id($id);
    /* echo '<pre>';
     print_r($row);
     echo "</pre>"; die;

     echo $row['id'];die;*/
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['tenure_id']='';
    $row['deposit_amount']='';
    $row['benefit_amount']='';
    $row['choose_your_benefit_id']='';
    $row['loan_facility']='';
    $row['deposit_name']='';
    $row['min_amount']='';
    $row['max_amount']='';
    $row['features']='';
    $row['eligibility']='';
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
        <li>Deposit</li><li>Monthly Benefit</li><li> Edit Deposit Information</li>
    </ol>
</div>
<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<div id="content">

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-table fa-fw "></i>
            Monthly Benefit
                <span>>
                    Edit Deposit Information
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
            <h2>Edit Deposit Information</h2>

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

                <form id="age_limit" method="post" action="<?php echo base_url();?>monthly_benefit/edit_deposit_info" class="smart-form" novalidate="novalidate">
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
                                    <input name="txtDepositId" type="hidden" value="<?php echo $row['id'];?>">
                                    <label class="label">Bank Name</label>
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
                                    <label class="label">Tenure</label>
                                    <label class="select">
                                        <select name="txtTenure" id="txtTenure">
                                            <?php
                                            $result=$this->Select_model->select_all('monthly_benefit_tenure');
                                            foreach($result->result() as $row1){
                                                ?>
                                                <option value="<?php echo $row1->id;?>" <?php if(isset($row["tenure_id"]) && $row["tenure_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtTenure",$row1->id)?>><?php echo $row1->no_of_month ; ?></option>';
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
                                    <label class="label">Deposit Name</label>
                                    <label class="input">
                                        <input type="text" maxlength="250" name="txtDepositName" value="<?php echo $row['deposit_name']; ?>" placeholder="Write Deposit Name">
                                    </label>

                                    <label class="red"><?php echo form_error('txtDepositName');?></label>
                                </section>

                                <section class="col col-6">
                                    <label class="label">Loan Facility (%)</label>
                                    <label class="input">
                                        <input type="text" maxlength="10" name="txtLoanFacility" value="<?php echo $row['loan_facility']; ?>" placeholder="Write Loan Facility without percentage sign">
                                    </label>

                                    <label class="red"><?php echo form_error('txtLoanFacility');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Deposit amount</label>
                                    <label class="input">
                                        <input type="text" maxlength="20" name="txtDepositAmount" value="<?php echo $row['deposit_amount']; ?>" placeholder="Write Deposit Amount">
                                    </label>

                                    <label class="red"><?php echo form_error('txtDepositAmount');?></label>
                                </section>

                                <section class="col col-6">
                                    <label class="label">Benefit Amount</label>
                                    <label class="input">
                                        <input type="text" maxlength="20" name="txtBenefitAmount" value="<?php echo $row['benefit_amount']; ?>" placeholder="Write Benefit Amount">
                                    </label>

                                    <label class="red"><?php echo form_error('txtBenefitAmount');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Minimum Amount</label>
                                    <label class="input">
                                        <input type="text" maxlength="20" name="txtMinimumAmount" value="<?php echo $row['min_amount']; ?>" placeholder="Write Minimum Amount">
                                    </label>

                                    <label class="red"><?php echo form_error('txtMinimumAmount');?></label>
                                </section>

                                <section class="col col-6">
                                    <label class="label">Maximum Amount</label>
                                    <label class="input">
                                        <input type="text" maxlength="20" name="txtMaximumAmount" value="<?php echo $row['max_amount']; ?>" placeholder="Write Maximum Amount">
                                    </label>

                                    <label class="red"><?php echo form_error('txtMaximumAmount');?></label>
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
