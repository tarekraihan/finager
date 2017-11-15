<?php
if(isset($_GET['id'])){
    $non_bank= ($_GET['non_bank'] == 1) ? 1 : 0;
    $id = ($_GET['id']) ? $_GET['id'] : 0;

    if($id > 0){
        $row=$this->Select_model->Select_bank_non_bank_info_by_id($id,$non_bank);
        //pr($row);die;
    }

    $row['is_non_bank']= $non_bank;
}else{
    $row['id']='';
    $row['bank_id']='';
    $row['is_non_bank']= '';
    $row['non_bank_id']='';
    $row['known_as']='';
    $row['swift_code']='';
    $row['stock_code']='';
    $row['category']='';
    $row['bank_type_and_origin']='';
    $row['phone_no']='';
    $row['fax_no']='';
    $row['email_address']='';
    $row['head_office_address']='';
    $row['web_address']='';
    $row['basic_information']='';
    $row['call_center']='';
    $row['routing_no']='';
    $row['not_available_call_center']='';
}
?>
<script src="<?php echo base_url(); ?>resource/admin/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    $(document).ready(function () {

        CKEDITOR.editorConfig = function( config ) {
            config.language = 'es';
            config.uiColor = '#F7B42C';
            config.height = 300;
            config.toolbarCanCollapse = true;
        }

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
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?> <?php echo ($row['is_non_bank'] == '1') ? 'checked' : ''; ?>> Is Non Bank Institution ?
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
                                                        <input type="text" maxlength="50" name="txtKnownAs" value="<?php if(isset($row["known_as"]) && $row["known_as"] != ""){echo $row["known_as"];}else{echo set_value('txtKnownAs');} ?>" placeholder="Write known as">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtKnownAs');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Swift Code </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtSwiftCode" value="<?php if(isset($row["swift_code"]) && $row["swift_code"] != ""){echo $row["swift_code"];}else{echo set_value('txtSwiftCode');} ?>" placeholder="Write Swift Code">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSwiftCode');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Stock Code</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtStockCode" value="<?php if(isset($row["stock_code"]) && $row["stock_code"] != ""){echo $row["stock_code"];}else{echo set_value('txtStockCode');} ?>" placeholder="Write Stock Code">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtStockCode');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Category</label>
                                                    <label class="select">
                                                        <select name="txtCategory" required>
                                                            <option value="Commercial" <?php if(isset($row["category"]) && $row["category"]== 'Commercial'){echo "selected='select'";}?>>Commercial</option>
                                                            <option value="Specialized" <?php if(isset($row["category"]) && $row["category"]== 'Specialized'){echo "selected='select'";}?>>Specialized</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCategory');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Bank Type & Origin</label>
                                                    <label class="select">
                                                        <select name="txtBankTypeOrigin" required>
                                                            <option value="Private & Local" <?php if(isset($row["bank_type_and_origin"]) && $row["bank_type_and_origin"]== 'Private & Local'){echo "selected='select'";}?>>Private & Local</option>
                                                            <option value="Public & Local" <?php if(isset($row["bank_type_and_origin"]) && $row["bank_type_and_origin"]== 'Public & Local'){echo "selected='select'";}?>>Public & Local</option>
                                                            <option value="Private & Foreign" <?php if(isset($row["bank_type_and_origin"]) && $row["bank_type_and_origin"]== 'Private & Foreign'){echo "selected='select'";}?>>Private & Foreign</option>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBankTypeOrigin');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Phone No</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="225" name="txtPhoneNo" value="<?php if(isset($row["phone_no"]) && $row["phone_no"] != ""){echo $row["phone_no"];}else{echo set_value('txtPhoneNo');} ?>" placeholder="Write Phone no (029880668,0290098856)">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPhoneNo');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Fax No</label>
                                                    <label class="input">
                                                        <input type="tel" maxlength="13" name="txtFaxNo" value="<?php if(isset($row["fax_no"]) && $row["fax_no"] != ""){echo $row["fax_no"];}else{echo set_value('txtFaxNo');} ?>" placeholder="Write Fax no">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtFaxNo');?></label>
                                                </section>
                                            </div>

                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Email Address</label>
                                                    <label class="input">
                                                        <input type="email" maxlength="225" name="txtEmailAddress" value="<?php if(isset($row["email_address"]) && $row["email_address"] != ""){echo $row["email_address"];}else{echo set_value('txtEmailAddress');} ?>" placeholder="Write Email Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEmailAddress');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Web Address</label>
                                                    <label class="input">
                                                        <input type="url" maxlength="255" name="txtWebAddress" value="<?php if(isset($row["web_address"]) && $row["web_address"] != ""){echo $row["web_address"];}else{echo set_value('txtWebAddress');} ?>" placeholder="Write Web Address (https://www.indexgroupbd.com)">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtWebAddress');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Head Office Address</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtHeadOfficeAddress" value="<?php if(isset($row["head_office_address"]) && $row["head_office_address"] != ""){echo $row["head_office_address"];}else{echo set_value('txtHeadOfficeAddress');} ?>" placeholder="Write Head Office Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtHeadOfficeAddress');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Routing No</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="50" name="txtRoutingNo" value="<?php if(isset($row["routing_no"]) && $row["routing_no"] != ""){echo $row["routing_no"];}else{echo set_value('txtRoutingNo');} ?>" placeholder="Write Routing No">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtHeadOfficeAddress');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="not_available_call_center" id="not_available_call_center" value="1" <?php set_checkbox('not_available_call_center', '1')?> <?php echo ($row['not_available_call_center'] == '1') ? 'checked' : ''; ?>> Call Center Not Available
                                                    </label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Call Center No</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="100" name="txtCallCenterNo"  id="txtCallCenterNo" value="<?php if(isset($row["call_center"]) && $row["call_center"] != ""){echo $row["call_center"];}else{echo set_value('txtCallCenterNo');} ?>" placeholder="Write call center no">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCallCenterNo');?></label>
                                                </section>
                                            </div>


                </article>
                <!-- WIDGET END -->

                <!-- NEW WIDGET START -->
                <article class="col-sm-12 col-md-12 col-lg-12">

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
                                    <textarea type="text" id="txtBasicInformation" class="ckeditor" name="txtBasicInformation"><?php if(isset($row["basic_information"]) && $row["basic_information"] != ""){echo $row["basic_information"];}else{echo set_value('txtBasicInformation');} ?></textarea>
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
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName">' +
                '<?php $result=$this->Select_model->select_all('general_non_bank'); foreach($result->result() as $row1){ ?>'+
                '<option value="<?php echo $row1->id;?>" <?php if(isset($row["id"]) && $row["id"]==$row1->id){echo "selected";}?><?php echo set_select("txtNonBankName",$row1->id)?>><?php echo $row1->non_bank_name ; ?></option>;<?php } ?>'+
                '</select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName">' +
                '<?php $result=$this->Select_model->select_all('card_bank'); foreach($result->result() as $row1){ ?>'+
                '<option value="<?php echo $row1->id;?>" <?php if(isset($row["id"]) && $row["id"]==$row1->id){echo "selected";}?><?php echo set_select("txtBankName",$row1->id)?>><?php echo $row1->bank_name ; ?></option>;<?php } ?>'+
                '</select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
        $("input[name='not_available_call_center']").click(function(){
            if ($(this).is(":checked")) {
                $('#txtCallCenterNo').prop('readonly',true);
                $("#txtCallCenterNo").attr("placeholder", "Readonly").placeholder();
                $('#txtCallCenterNo').val('');
            }else{
                $('#txtCallCenterNo').prop('readonly',false);
                $("#txtCallCenterNo").attr("placeholder", "Write call center no").placeholder();
            }

        })

    });
</script>