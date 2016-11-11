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
            <li>Finager</li><li>Map</li><li> add Information</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Map
							<span>> 
								add Information
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
                            <h2>Add  Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>map/add" class="smart-form" novalidate="novalidate"  enctype="multipart/form-data">
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
                                                    <label class="label">District</label>
                                                    <label class="select">
                                                        <select name="txtDistrict" id="txtDistrict">
                                                            <option value="">--Select One--</option>
                                                            <?php echo $this->Select_model->select_district();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDistrict');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Thana/Area</label>
                                                    <label class="select">
                                                        <select name="txtThana" id="txtThana">

                                                            <option value="">--Select One--</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtThana');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?> > Is Non Bank Institution ?
                                                    </label>
                                                </section>
                                                <section class="col col-6" id="institution">

                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Type</label>
                                                    <label class="select">
                                                        <select name="txtTypeId" id="txtTypeId">
                                                            <option value="1">ATM</option>
                                                            <option value="2">Branch Office</option>
                                                            <option value="3">Head Office</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtTypeId');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Address</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtAddress" value="<?php echo set_value('txtAddress'); ?>" placeholder="Write Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAddress');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Contact No</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="20" name="txtContactNo" value="<?php echo set_value('txtContactNo'); ?>" placeholder="Write Contact No">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtContactNo');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Latitude</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="35" name="txtLatitude" value="<?php echo set_value('txtLatitude'); ?>" placeholder="Write Latitude">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLatitude');?></label>
                                                </section>
                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Longitude</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="35" name="txtLongitude" value="<?php echo set_value('txtLongitude'); ?>" placeholder="Write Longitude">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLongitude');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Review</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtReview" value="<?php echo set_value('txtReview'); ?>" placeholder="Write Review">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtReview');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="is_images" id="is_images" value="1" <?php set_checkbox('is_images', '1')?> > Is Images ?
                                                    </label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Select Images</label>
                                                        <input id="images" name="images[]" type="file" multiple class="file-loading"  data-allowed-file-extensions='["jpg", "JPG", "png","PNG","jpeg","JPEG"]'>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="red"><?php echo form_error('file');?></label>
                                                    </div>
                                                </section>
                                            </div>

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#images").fileinput({
            showUpload: false,
            maxFileCount: 10
        });

        $("#txtDistrict").change(function () {
            var data = $("#txtDistrict").val();
            //console.log(data);
            $.ajax({
                type:"POST",
                url:"<?php echo base_url();?>map/get_thana",
                data:{id : data},
                success: function(response){
                    if(response != "error"){
                        //console.log(response);return;
                        document.getElementById('txtThana').innerHTML = response;
                    }else{
                        alert(response);
                    }
                }
            });
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
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
//
//
//        $("input[name ='is_images']").click(function() {
//            var v_value = $(this).val();
//            if ($(this).is(":checked")) {
//                $('#images').html(' <div class="form-group"><label class="control-label">Select Images</label><input id="images" name="images[]" type="file" multiple class="file-loading"  data-allowed-file-extensions=\'["jpg", "JPG", "png","PNG","jpeg","JPEG"]\'></div><div class="form-group"><label class="red"><?php //echo form_error("file");?>//</label></div>');
//
//            }else {
//                $('#images').html(' ');
//            }
//        });

    });
</script>