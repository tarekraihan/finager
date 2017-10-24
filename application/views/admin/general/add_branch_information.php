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
            <li>General</li><li>Bank OR Non Bank</li><li> Branch Information</li>
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
								Bank or Non Bank Branch Information
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
                            <h2>Add Bank / Non Bank Branch Information</h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>general/add_branch_info" class="smart-form" novalidate="novalidate">
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
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php set_checkbox('is_non_bank', '1')?>> Is Non Bank Institution ?
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
                                                    <label class="label">Branch Name </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="250" name="txtBranchName" value="<?php echo set_value('txtBranchName');?>" placeholder="Write Branch Name">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBranchName');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Branch Address </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtBranchAddress" value="<?php echo set_value('txtBranchAddress'); ?>" placeholder="Write branch address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBranchAddress');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Phone No</label>
                                                    <label class="input">
                                                        <input type="tel" maxlength="200" name="txtPhoneNo" value="<?php echo set_value('txtPhoneNo'); ?>" placeholder="Write Phone No">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPhoneNo');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Fax No </label>
                                                    <label class="input">
                                                        <input type="tel" maxlength="50" name="txtFaxNo" value="<?php echo set_value('txtFaxNo'); ?>" placeholder="Write Fax No">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtFaxNo');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Email Address</label>
                                                    <label class="input">
                                                        <input type="email" maxlength="250" name="txtEmailAddress" value="<?php echo set_value('txtEmailAddress'); ?>" placeholder="Write Email Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEmailAddress');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Date of Opening </label>
                                                    <label class="input">
                                                        <input type="text" id="txtDateOfOpening" name="txtDateOfOpening" value="<?php echo set_value('txtDateOfOpening'); ?>" placeholder="Write Date Of Opening">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtDateOfOpening');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="radio-inline"  style="margin-left: 35px; margin-top: 30px;"><input type="radio" name="show_as" value="popular branch" <?php set_checkbox('show_as', 'popular branch')?>> Show as popular branch</label>
                                                    <label class="radio-inline" style="margin-left: 35px; margin-top: 30px;"><input type="radio" name="show_as" value="new branch" <?php set_checkbox('show_as', 'new branch')?>> Show as new branch</label>
                                                    <label class="radio-inline" style="margin-left: 35px; margin-top: 30px;"><input type="radio" name="show_as" value="closed branch" <?php set_checkbox('show_as', 'closed branch')?>> Show as closed branch</label>
                                                    <label class="red"><?php echo form_error('show_as');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Routing No </label>
                                                    <label class="input">
                                                        <input type="text" id="txtRoutingNo" name="txtRoutingNo" value="<?php echo set_value('txtRoutingNo'); ?>" placeholder="Write routing no">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtRoutingNo');?></label>
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

        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
            }
        });
    });
</script>