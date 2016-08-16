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
								Loan Information
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
                            <h2>Add Loan Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>home_loan/loan_info" class="smart-form" novalidate="novalidate">
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
                                                        <select name="txtBankName" id="txtBankName">
                                                            <?php echo $this->Select_model->select_bank();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBankName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Loan Type</label>
                                                    <label class="select">
                                                        <select name="txtLoanType" id="txtLoanType">
                                                            <?php echo $this->Select_model->loan_type();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanType');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan Name </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="220" name="txtLoanName" value="<?php echo set_value('txtLoanName'); ?>" placeholder="Write Loan Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLoanName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Looking For</label>
                                                    <label class="select">
                                                        <select name="txtLookingFor" id="txtLookingFor">
                                                            <?php echo $this->Select_model->looking_for();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLookingFor');?></label>
                                                </section>

                                                <!--
                                                <section class="col col-6">
                                                    <label class="label">Looking For</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtLookingFor[]" required>
                                                            <?php /*echo $this->Select_model->looking_for();*/?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php /*echo form_error('txtLookingFor[]');*/?></label>
                                                </section>-->
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan User</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtHomeLoanUser[]" required>
                                                            <?php echo $this->Select_model->home_loan_user();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtHomeLoanUser[]');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Minimum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMinimumLoanAmount" value="<?php echo set_value('txtMinimumLoanAmount'); ?>" placeholder="Write min loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMinimumLoanAmount');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Maximum Loan Amount</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="15" name="txtMaximumLonAmount" value="<?php echo set_value('txtMaximumLonAmount'); ?>" placeholder="Write Max loan amount">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtMaximumLonAmount');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Down Payment (%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtDownPayment" value="<?php echo set_value('txtDownPayment'); ?>" placeholder="Write Down payment without percentage sign">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDownPayment');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="radio-inline">
                                                        <input type="checkbox" name="is_fixeds">Variable Interest
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="is_fixed" id="is_fixed" value="fixed">Fixed Interest
                                                    </label>

                                                </section>
                                            </div>


                                            <div id="interest_rate">


                                            </div>

                        </article>
                        <!-- WIDGET END -->

                <!-- NEW WIDGET START -->
                <article class="col-sm-6 col-md-6 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                            <h2>Security Required</h2>

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
                                        <textarea type="text" id="txtSecurityRequired" class="ckeditor" name="txtSecurityRequired"><?php echo set_value('txtSecurityRequired'); ?></textarea>
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
                                        <textarea type="text" id="txtFeesAndCharges" class="ckeditor" name="txtFeesAndCharges"><?php echo set_value('txtFeesAndCharges'); ?></textarea>
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
                                        <textarea type="text" id="txtFeatures" class="ckeditor" name="txtFeatures"><?php echo set_value('txtFeatures'); ?></textarea>
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
                            <h2>Eligibility for Applying</h2>

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
                                        <textarea type="text" id="txtEligibility" class="ckeditor" name="txtEligibility"><?php echo set_value('txtEligibility'); ?></textarea>
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
                                        <textarea type="text" id="txtReview" class="ckeditor" name="txtReview"><?php echo set_value('txtReview'); ?></textarea>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
//        alert(1);

        $('input[name="is_fixed"]:checked').each(function(){
            alert(1);
        });

          $('input[type="radio"]:checked').change(function(){
           /* if($(this).val()=="fixed")
            {*/
                alert();
               $.ajax({
                        type: 'post',
                        url: <?php echo base_url(); ?>'home_loan/ajax_home_loan_interest_variable',
                        dataType: 'html'
                    })
                    .done(function(data) {
                        $('#interest_rate').html(data);
                });
            }
            else
            {
                $('#interest_rate').html('');
            }

        })
    });
</script>