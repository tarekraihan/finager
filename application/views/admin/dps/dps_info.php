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
        <li>Deposit</li><li>DPS</li><li> Add DPS Information</li>
    </ol>
</div>
<!-- END RIBBON -->

<!-- MAIN CONTENT -->
<div id="content">

<div class="row">
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            <i class="fa fa-table fa-fw "></i>
            DPS
                <span>>
                    Add DPS Information
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
            <h2>Add DPS Information</h2>

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

                <form id="age_limit" method="post" action="<?php echo base_url();?>dps/add_info" class="smart-form" novalidate="novalidate">
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
                                <section class="col col-6" id="institution">
                                    <label class="label">Bank Name</label>
                                    <label class="select">
                                        <select name="txtBankName" id="txtBankName">
                                            <?php echo $this->Select_model->select_bank();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtBankName');?></label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">I Am</label>
                                    <label class="select">
                                        <select name="txtIAm" id="txtIAm">
                                            <?php echo $this->Select_model->select_fdr_i_am();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtIAm');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Loan Facility (%)</label>
                                    <label class="input">
                                        <input type="text" maxlength="10" name="txtLoanFacility" value="<?php echo set_value('txtLoanFacility'); ?>" placeholder="Write Loan Facility without percentage sign">
                                    </label>

                                    <label class="red"><?php echo form_error('txtLoanFacility');?></label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Interest Rate</label>
                                    <label class="input">
                                        <input type="text" maxlength="50" name="txtInterestRate" value="<?php echo set_value('txtInterestRate'); ?>" placeholder="Write Interest Rate without percentage sign">
                                    </label>
                                    <label class="red"><?php echo form_error('txtInterestRate');?></label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Tenure</label>
                                    <label class="select">
                                        <select name="txtTenure" id="txtTenure">
                                            <?php echo $this->Select_model->select_dps_tenure();?>
                                        </select>
                                    </label>
                                    <label class="red"><?php echo form_error('txtTenure');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.200 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="two_hundred_maturity" value="<?php echo set_value('two_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.200">
                                    </label>
                                    <label class="red"><?php echo form_error('two_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="two_hundred_interest" value="200" readonly placeholder="Write Total Accrued Interest for Tk. 200">
                                    </label>
                                    <label class="red"><?php echo form_error('two_hundred_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.300 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="three_hundred_maturity" value="<?php echo set_value('three_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.300">
                                    </label>
                                    <label class="red"><?php echo form_error('three_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="three_hundred_interest" value="300" readonly  placeholder="Write Total Accrued Interest for Tk. 300">
                                    </label>
                                    <label class="red"><?php echo form_error('three_hundred_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.400 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="four_hundred_maturity" value="<?php echo set_value('four_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.400">
                                    </label>
                                    <label class="red"><?php echo form_error('four_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="four_hundred_interest" value="400" readonly  placeholder="Write Total Accrued Interest for Tk. 400">
                                    </label>
                                    <label class="red"><?php echo form_error('four_hundred_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="five_hundred_maturity" value="<?php echo set_value('five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.500">
                                    </label>
                                    <label class="red"><?php echo form_error('five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="five_hundred_interest" value="500"  readonly placeholder="Write Total Accrued Interest for Tk. 500">
                                    </label>
                                    <label class="red"><?php echo form_error('five_hundred_interest');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.1000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="one_thousand_maturity" value="<?php echo set_value('one_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.1000">
                                    </label>
                                    <label class="red"><?php echo form_error('one_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="one_thousand_interest" value="1000" readonly  placeholder="Write Total Accrued Interest for Tk. 1000">
                                    </label>
                                    <label class="red"><?php echo form_error('one_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.1500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="one_thousand_five_hundred_maturity" value="<?php echo set_value('one_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.1500">
                                    </label>
                                    <label class="red"><?php echo form_error('one_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="one_thousand_five_hundred_interest" value="1500" readonly  placeholder="Write Total Accrued Interest for Tk. 1500">
                                    </label>
                                    <label class="red"><?php echo form_error('one_thousand_five_hundred_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.2000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="two_thousand_maturity" value="<?php echo set_value('two_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.2000">
                                    </label>
                                    <label class="red"><?php echo form_error('two_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="two_thousand_interest" value="2000" readonly  placeholder="Write Total Accrued Interest for Tk. 2000">
                                    </label>
                                    <label class="red"><?php echo form_error('two_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.2500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="two_thousand_five_hundred_maturity" value="<?php echo set_value('two_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.2500">
                                    </label>
                                    <label class="red"><?php echo form_error('two_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="two_thousand_five_hundred_interest" value="2500" readonly  placeholder="Write Total Accrued Interest for Tk. 2500">
                                    </label>
                                    <label class="red"><?php echo form_error('two_thousand_five_hundred_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.3000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="three_thousand_maturity" value="<?php echo set_value('three_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.3000">
                                    </label>
                                    <label class="red"><?php echo form_error('three_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="three_thousand_interest" value="3000" readonly  placeholder="Write Total Accrued Interest for Tk. 3000">
                                    </label>
                                    <label class="red"><?php echo form_error('three_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.3500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="three_thousand_five_hundred_maturity" value="<?php echo set_value('three_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.3500">
                                    </label>
                                    <label class="red"><?php echo form_error('three_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="three_thousand_five_hundred_interest" value="3500" readonly  placeholder="Write Total Accrued Interest for Tk. 3500">
                                    </label>
                                    <label class="red"><?php echo form_error('three_thousand_five_hundred_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.4000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="four_thousand_maturity" value="<?php echo set_value('four_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.4000">
                                    </label>
                                    <label class="red"><?php echo form_error('four_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="four_thousand_interest" value="4000" readonly  placeholder="Write Total Accrued Interest for Tk. 4000">
                                    </label>
                                    <label class="red"><?php echo form_error('four_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.4500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="four_thousand_five_hundred_maturity" value="<?php echo set_value('four_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.4500">
                                    </label>
                                    <label class="red"><?php echo form_error('four_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="four_thousand_five_hunderd_interest" value="4500" readonly  placeholder="Write Total Accrued Interest for Tk. 4500">
                                    </label>
                                    <label class="red"><?php echo form_error('four_thousand_five_hunderd_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.5000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="five_thousand_maturity" value="<?php echo set_value('five_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.5000">
                                    </label>
                                    <label class="red"><?php echo form_error('five_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="five_thousand_interest" value="5000" readonly  placeholder="Write Total Accrued Interest for Tk. 5000">
                                    </label>
                                    <label class="red"><?php echo form_error('five_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.5500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="five_thousand_five_hundred_maturity" value="<?php echo set_value('five_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.5500">
                                    </label>
                                    <label class="red"><?php echo form_error('five_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="five_thousand_five_hundred_interest" value="5500" readonly  placeholder="Write Total Accrued Interest for Tk. 5500">
                                    </label>
                                    <label class="red"><?php echo form_error('five_thousand_five_hundred_interest');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.6000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="six_thousand_maturity" value="<?php echo set_value('six_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.6000">
                                    </label>
                                    <label class="red"><?php echo form_error('six_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="six_thousand_interest" value="6000" readonly  placeholder="Write Total Accrued Interest for Tk. 6000">
                                    </label>
                                    <label class="red"><?php echo form_error('six_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.6500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="six_thousand_five_hundred_maturity" value="<?php echo set_value('six_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.6500">
                                    </label>
                                    <label class="red"><?php echo form_error('six_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="six_thousand_five_hundred_interest" value="6500" readonly  placeholder="Write Total Accrued Interest for Tk. 6500">
                                    </label>
                                    <label class="red"><?php echo form_error('six_thousand_five_hundred_interest');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.7000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="seven_thousand_maturity" value="<?php echo set_value('seven_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.7000">
                                    </label>
                                    <label class="red"><?php echo form_error('seven_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="seven_thousand_interest" value="7000" readonly  placeholder="Write Total Accrued Interest for Tk. 7000">
                                    </label>
                                    <label class="red"><?php echo form_error('seven_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.7500 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="seven_thousand_five_hundred_maturity" value="<?php echo set_value('seven_thousand_five_hundred_maturity'); ?>" placeholder="Write Maturity Amount for Tk.7500">
                                    </label>
                                    <label class="red"><?php echo form_error('seven_thousand_five_hundred_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="seven_thousand_five_hundred_interest" value="7500" readonly  placeholder="Write Total Accrued Interest for Tk.7500">
                                    </label>
                                    <label class="red"><?php echo form_error('seven_thousand_five_hundred_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.8000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="eight_thousand_maturity" value="<?php echo set_value('eight_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.8000">
                                    </label>
                                    <label class="red"><?php echo form_error('eight_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="eight_thousand_interest" value="8000" readonly  placeholder="Write Total Accrued Interest for Tk. 8000">
                                    </label>
                                    <label class="red"><?php echo form_error('eight_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.9000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="nine_thousand_maturity" value="<?php echo set_value('nine_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.9000">
                                    </label>
                                    <label class="red"><?php echo form_error('nine_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="nine_thousand_interest" value="9000" readonly  placeholder="Write Total Accrued Interest for Tk.9000">
                                    </label>
                                    <label class="red"><?php echo form_error('nine_thousand_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.10000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="ten_thousand_maturity" value="<?php echo set_value('ten_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.10000">
                                    </label>
                                    <label class="red"><?php echo form_error('ten_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="ten_thousand_interest" value="10000" readonly  placeholder="Write Total Accrued Interest for Tk. 10000">
                                    </label>
                                    <label class="red"><?php echo form_error('ten_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.11000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="eleven_thousand_maturity" value="<?php echo set_value('eleven_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.11000">
                                    </label>
                                    <label class="red"><?php echo form_error('eleven_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="eleven_thousand_interest" value="11000" readonly  placeholder="Write Total Accrued Interest for Tk.11000">
                                    </label>
                                    <label class="red"><?php echo form_error('eleven_thousand_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.12000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twelve_thousand_maturity" value="<?php echo set_value('twelve_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.12000">
                                    </label>
                                    <label class="red"><?php echo form_error('twelve_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twelve_thousand_interest" value="12000" readonly  placeholder="Write Total Accrued Interest for Tk. 12000">
                                    </label>
                                    <label class="red"><?php echo form_error('twelve_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.13000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="thirteen_thousadn_maturity" value="<?php echo set_value('thirteen_thousadn_maturity'); ?>" placeholder="Write Maturity Amount for Tk.13000">
                                    </label>
                                    <label class="red"><?php echo form_error('thirteen_thousadn_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="thirteen_thousand_interest" value="13000" readonly  placeholder="Write Total Accrued Interest for Tk.13000">
                                    </label>
                                    <label class="red"><?php echo form_error('thirteen_thousand_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.14000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="fourteen_thousand_maturity" value="<?php echo set_value('fourteen_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.14000">
                                    </label>
                                    <label class="red"><?php echo form_error('fourteen_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="fourteen_thousand_interest" value="14000" readonly  placeholder="Write Total Accrued Interest for Tk. 14000">
                                    </label>
                                    <label class="red"><?php echo form_error('fourteen_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.15000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="fifteen_thousand_maturity" value="<?php echo set_value('fifteen_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.15000">
                                    </label>
                                    <label class="red"><?php echo form_error('fifteen_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="fifteen_thousand_interest" value="15000" readonly  placeholder="Write Total Accrued Interest for Tk.15000">
                                    </label>
                                    <label class="red"><?php echo form_error('fifteen_thousand_interest');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.16000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="sixteen_thousand_maturity" value="<?php echo set_value('sixteen_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.16000">
                                    </label>
                                    <label class="red"><?php echo form_error('sixteen_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="sixteen_thousand_interest" value="16000" readonly  placeholder="Write Total Accrued Interest for Tk. 16000">
                                    </label>
                                    <label class="red"><?php echo form_error('sixteen_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.17000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="seventeen_thousand_maturity" value="<?php echo set_value('seventeen_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.17000">
                                    </label>
                                    <label class="red"><?php echo form_error('seventeen_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="seventeen_thousand_interest" value="17000" readonly  placeholder="Write Total Accrued Interest for Tk.17000">
                                    </label>
                                    <label class="red"><?php echo form_error('seventeen_thousand_interest');?></label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.18000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="eighteen_thousand_maturity" value="<?php echo set_value('eighteen_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.18000">
                                    </label>
                                    <label class="red"><?php echo form_error('eighteen_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="eighteen_thousand_interest" value="18000" readonly  placeholder="Write Total Accrued Interest for Tk. 18000">
                                    </label>
                                    <label class="red"><?php echo form_error('eighteen_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.19000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="nineteen_thousand_maturity" value="<?php echo set_value('nineteen_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.19000">
                                    </label>
                                    <label class="red"><?php echo form_error('nineteen_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="nineteen_thousand_interest" value="19000" readonly  placeholder="Write Total Accrued Interest for Tk.19000">
                                    </label>
                                    <label class="red"><?php echo form_error('nineteen_thousand_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.20000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_thousand_maturity" value="<?php echo set_value('twenty_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.20000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_thousand_interest" value="20000" readonly  placeholder="Write Total Accrued Interest for Tk. 20000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.21000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_one_thousand_maturity" value="<?php echo set_value('twenty_one_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.21000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_one_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_one_thousand_interest" value="21000" readonly  placeholder="Write Total Accrued Interest for Tk.21000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_one_thousand_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.22000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_two_thousand_maturity" value="<?php echo set_value('twenty_two_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.22000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_two_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_two_thousand_interest" value="22000" readonly  placeholder="Write Total Accrued Interest for Tk. 22000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_two_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.23000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_three_thousand_maturity" value="<?php echo set_value('twenty_three_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.23000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_three_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_three_thousand_interest" value="23000" readonly  placeholder="Write Total Accrued Interest for Tk.23000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_three_thousand_interest');?></label>
                                </section>
                            </div>



                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.24000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_four_thousand_maturity" value="<?php echo set_value('twenty_four_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.24000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_four_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_four_thousand_interest" value="24000" readonly  placeholder="Write Total Accrued Interest for Tk. 24000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_four_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.25000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_five_thousand_maturity" value="<?php echo set_value('twenty_five_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.25000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_five_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_five_thousand_interest" value="25000" readonly  placeholder="Write Total Accrued Interest for Tk.25000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_five_thousand_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.26000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_six_thousand_maturity" value="<?php echo set_value('twenty_six_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.26000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_six_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_six_thousand_interest" value="26000" readonly  placeholder="Write Total Accrued Interest for Tk. 26000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_six_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.27000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_seven_thousand_maturity" value="<?php echo set_value('twenty_seven_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.27000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_seven_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_seven_thousand_interest" value="27000" readonly  placeholder="Write Total Accrued Interest for Tk.27000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_seven_thousand_interest');?></label>
                                </section>
                            </div>


                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.28000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_eight_thousand_maturity" value="<?php echo set_value('twenty_eight_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.28000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_eight_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_eight_thousand_interest" value="28000" readonly  placeholder="Write Total Accrued Interest for Tk. 28000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_eight_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.29000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_nine_thousand_maturity" value="<?php echo set_value('twenty_nine_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.29000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_nine_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="twenty_nine_thousand_interest" value="29000"  readonly placeholder="Write Total Accrued Interest for Tk.29000">
                                    </label>
                                    <label class="red"><?php echo form_error('twenty_nine_thousand_interest');?></label>
                                </section>
                            </div>




                            <div class="row">
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.30000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="thirty_thousand_maturity" value="<?php echo set_value('thirty_thousand_maturity'); ?>" placeholder="Write Maturity Amount for Tk.30000">
                                    </label>
                                    <label class="red"><?php echo form_error('thirty_thousand_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="thirty_thousand_interest" value="30000" readonly  placeholder="Write Total Accrued Interest for Tk. 30000">
                                    </label>
                                    <label class="red"><?php echo form_error('thirty_thousand_interest');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Maturity Amount for Tk.100000 </label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="one_lac_maturity" value="<?php echo set_value('one_lac_maturity'); ?>" placeholder="Write Maturity Amount for Tk.100000">
                                    </label>
                                    <label class="red"><?php echo form_error('one_lac_maturity');?></label>
                                </section>
                                <section class="col col-3">
                                    <label class="label">Monthly Installment</label>
                                    <label class="input">
                                        <input type="text" maxlength="25" name="one_lac_interest" value="100000" readonly  placeholder="Write Total Accrued Interest for Tk.100000">
                                    </label>
                                    <label class="red"><?php echo form_error('one_lac_interest');?></label>
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
                        <textarea type="text" id="txtAvailableFeatures" class="ckeditor" name="txtAvailableFeatures"><?php echo set_value('txtAvailableFeatures'); ?></textarea>
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
                        <textarea type="text" id="txtTermsAndConditions" class="ckeditor" name="txtTermsAndConditions"><?php echo set_value('txtTermsAndConditions'); ?></textarea>
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
                        <textarea type="text" id="txtAvailableBenefit" class="ckeditor" name="txtAvailableBenefit"><?php echo set_value('txtAvailableBenefit'); ?></textarea>
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
    });

    function call_draft_info(){
        var i_am = $('#txtIAm').val();
        var bank_id = $('#txtBankName').val();
        var non_bank_id = $('#txtNonBankName').val();
        if($("input[name ='is_non_bank']").is(':checked')){
            var param = 'non_bank_id='+non_bank_id+'&i_am='+i_am+'&is_non_bank=1';
        }else{
            var param = 'bank_id='+bank_id+'&i_am='+i_am+'&is_non_bank=0';
        }
        if(bank_id != '' && i_am != ''){
            $.ajax({
                url: "<?php echo base_url(); ?>dps/ajax_get_draft_dps_info",
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
                        CKEDITOR.instances['txtReview'].setData(data.review);
                    }else{
                        CKEDITOR.instances['txtAvailableFeatures'].setData('');
                        CKEDITOR.instances['txtEligibility'].setData('');
                        CKEDITOR.instances['txtRequiredDocument'].setData('');
                        CKEDITOR.instances['txtTermsAndConditions'].setData('');
                        CKEDITOR.instances['txtAvailableBenefit'].setData('');
                        CKEDITOR.instances['txtReview'].setData('');
                    }

//                    console.log(data.available_feature);
                });

        }
    }
</script>