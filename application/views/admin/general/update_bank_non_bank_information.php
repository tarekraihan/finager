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
            <li>General</li><li>Bank </li><li> Bank / Non Bank Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                   General
							<span>>
								Bank / Non Bank Information
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
                            <h2>Update Bank / Non Bank Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>general/update_bank_non_bank_info" class="smart-form" novalidate="novalidate">
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
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?> > Is Non Bank Institution ?
                                                    </label>
                                                </section>

                                            </div>
                                            <div class="row">
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
                                                    <label class="label">Known as </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtKnownAs" value="<?php echo set_value('txtKnownAs'); ?>" placeholder="Write known as">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtKnownAs');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Swift Code </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtSwiftCode" value="<?php echo set_value('txtSwiftCode'); ?>" placeholder="Write Swift Code">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSwiftCode');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Stock Code</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtStockCode" value="<?php echo set_value('txtStockCode'); ?>" placeholder="Write Stock Code">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtStockCode');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Loan User</label>
                                                    <label class="select">
                                                        <select name="txtCategory" required>
                                                            <option value="Commercial">Commercial</option>
                                                            <option value="Specialized">Specialized</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCategory');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Bank Type & Origin</label>
                                                    <label class="select">
                                                        <select name="txtBankTypeOrigin" required>
                                                            <option value="Private/Local">Private/Local</option>
                                                            <option value="Public/Local">Public/Local</option>
                                                            <option value="Private/Foreign">Private/Foreign</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBankTypeOrigin');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Phone No</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="225" name="txtPhoneNo" value="<?php echo set_value('txtPhoneNo'); ?>" placeholder="Write Phone no (029880668,0290098856)">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPhoneNo');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Fax No</label>
                                                    <label class="input">
                                                        <input type="tel" maxlength="13" name="txtFaxNo" value="<?php echo set_value('txtFaxNo'); ?>" placeholder="Write Fax no">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtFaxNo');?></label>
                                                </section>
                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Email Address</label>
                                                    <label class="input">
                                                        <input type="email" maxlength="225" name="txtEmailAddress" value="<?php echo set_value('txtEmailAddress'); ?>" placeholder="Write Email Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEmailAddress');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Web Address</label>
                                                    <label class="input">
                                                        <input type="url" maxlength="255" name="txtWebAddress" value="<?php echo set_value('txtWebAddress'); ?>" placeholder="Write Web Address (https://www.indexgroupbd.com)">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtWebAddress');?></label>
                                                </section>
                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Head Office Address</label>
                                                    <label class="input">
                                                        <input type="email" maxlength="255" name="txtHeadOfficeAddress" value="<?php echo set_value('txtHeadOfficeAddress'); ?>" placeholder="Write Head Office Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtHeadOfficeAddress');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Call Center No</label>
                                                    <label class="input">
                                                        <input type="number" maxlength="10" name="txtCallCenterNo" value="<?php echo set_value('txtCallCenterNo'); ?>" placeholder="Write call center no">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCallCenterNo');?></label>
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
                            <h2>Basic Information</h2>

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
                                        <textarea type="text" id="txtBasicInformation" class="ckeditor" name="txtBasicInformation"><?php echo set_value('txtBasicInformation'); ?></textarea>
                                    </label>
                                </section>

                            </div>
                            <!-- end widget content -->
                            <label class="red"><?php echo form_error('txtBasicInformation');?></label>
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
        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
            }
        });

        if($("input[name ='is_non_bank']").is(':checked')){
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
        $("#txtBankName").on('change', function(){
            call_draft_info();
        });
        $("#txtNonBankName").on('change', function(){
            call_draft_info();
        });

        function call_bank_non_bank_info(){
            var bank_id = $('#txtBankName').val();
            var non_bank_id = $('#txtNonBankName').val();

            if($("input[name ='is_non_bank']").is(':checked')){
                var param = 'non_bank_id='+non_bank_id+'&table_name=general_non_bank';
            }else{
                var param = 'bank_id='+bank_id+'&table_name=card_bank';
            }
            if(bank_id != ''){
                $.ajax({
                        url: "<?php echo base_url(); ?>general/ajax_get_bank_non_bank_info",
                        type : "POST",
                        dataType : "json",
                        data : param
                    })
                    .done(function( data ) {

                        if(data.process){


                        }else{

                        }

                    });

            }
        }
    });
</script>