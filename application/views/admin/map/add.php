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
            <li>Loan</li><li>Personal Loan</li><li> Loan Information</li>
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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>map/add" class="smart-form" novalidate="novalidate">
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
                                                    <label class="label">Bank Name</label>
                                                    <label class="select">
                                                        <select name="txtBankName" id="txtBankName">
                                                            <?php echo $this->Select_model->select_bank();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBankName');?></label>
                                                </section>
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

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Address</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtAddress" value="<?php echo set_value('txtAddress'); ?>" placeholder="Write Address">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAddress');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Contact No</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="20" name="txtContactNo" value="<?php echo set_value('txtContactNo'); ?>" placeholder="Write Contact No">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtContactNo');?></label>
                                                </section>

                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Latitude</label>
                                                    <label class="input">
                                                    <input type="text" maxlength="35" name="txtLatitude" value="<?php echo set_value('txtLatitude'); ?>" placeholder="Write Latitude">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLatitude');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Longitude</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="35" name="txtLongitude" value="<?php echo set_value('txtLongitude'); ?>" placeholder="Write Longitude">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtLongitude');?></label>
                                                </section>
                                            </div>
                                            <div class="row">

                                                <section class="col col-6">
                                                    <label class="label">Review</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtReview" value="<?php echo set_value('txtReview'); ?>" placeholder="Write Review">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtReview');?></label>
                                                </section>
                                                <section class="col col-6"  >
                                                    <label class="radio-inline" style="margin-left: 25px ">
                                                        <input type="checkbox" name="is_image" value="is_image" > Is Images ?
                                                    </label>

                                                </section>
                                            </div>

                                            <div id="images">

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
        $("input[name ='is_image']").click(function() {
            var v_value = $(this).val();
            if(v_value == 'is_image'){
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
    });
</script>