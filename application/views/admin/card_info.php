<script src="<?php echo base_url(); ?>resource/admin/js/plugin/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    $(document).ready(function () {

        CKEDITOR.replace('.ckeditor', {
            height: '120px',
            startupFocus: true,
            toolbarGroups: [
                {name: 'document', groups: ['mode', 'document']}, // Displays document group with its two subgroups.
                {name: 'clipboard', groups: ['clipboard', 'undo']}, // Group's name will be used to create voice label.
                '/', // Line break - next group will be placed in new line.
                {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                {name: 'links'}
            ]


        });
        CKEDITOR.config.removePlugins = 'save,print,preview,find,about,maximize,showblocks';

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
            <li>Home</li><li>Forms</li><li>Smart Form Elements</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-edit fa-fw "></i>
                    Card
							<span>>
								Card Information
							</span>
                </h1>
            </div>
        </div>


        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- START ROW -->

            <div class="row">

                <!-- NEW COL START -->
                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Card Information </h2>

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

                                <form class="smart-form" method="post" action="<?php echo base_url();?>card/card_info" enctype="multipart/form-data">

                                <?php
                                //-----Display Success or Error message---
                                if(isset($feedback)){
                                    echo $feedback;
                                }
                                ?>
                                    <fieldset>
                                        <!-- custom select-->
                                        <section>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Bank Name</label>
                                                    <label class="select">
                                                        <select name="txtBankName">
                                                            <?php echo $this->select_model->select_bank();?>
                                                        </select>
                                                    </label>
                                                     <label class="red"><?php echo form_error('txtBankName');?></label>
                                                </section>
                                                <section class="col col-6" >
                                                    <label class="label">Card Type</label>
                                                    <label class="select">
                                                        <select name="txtCardType">
                                                            <?php echo $this->Select_model->select_card_type();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardType');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Card Category</label>
                                                    <label class="select" >
                                                        <select name="txtCardCategory">
                                                            <?php echo $this->Select_model->select_credit_card_type();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditCardType');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Card Issuer</label>
                                                    <label class="select">
                                                        <select name="txtCardIssuer">
                                                            <?php echo $this->Select_model->select_card_issuer();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardIssuer');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Name</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="30" name="txtCardName" value="<?php set_value('txtCardName') ? set_value('txtCardName') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardName');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">File input</label>
                                                    <div class="input input-file">
                                                        <span class="button"><input type="file" id="file" name="file"  onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
                                                    </div>
                                                    <label class="red"><?php echo form_error('file');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Income range (Min) Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtIncomeRangeMinBusiness" value="<?php set_value('txtIncomeRangeMinBusiness') ? set_value('txtIncomeRangeMinBusiness') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMinBusiness');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Income range (Max) Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtIncomeRangeMaxBusiness" value="<?php set_value('txtIncomeRangeMaxBusiness') ? set_value('txtIncomeRangeMaxBusiness') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMaxBusiness');?></label>
                                                </section>
                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Income range (Min) Salaried </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtIncomeRangeMinSalaried" value="<?php set_value('txtIncomeRangeMinSalaried') ? set_value('txtIncomeRangeMinSalaried') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMinSalaried');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Income range (Max) Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtIncomeRangeMaxSalaried"  value="<?php set_value('txtIncomeRangeMaxSalaried') ? set_value('txtIncomeRangeMaxSalaried') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIncomeRangeMaxSalaried');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">I'm (Card User)</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtIm[]">
                                                            <?php echo $this->Select_model->card_card_user();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtIm[]');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">User Age Min</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtUserAgeMin"  value="<?php set_value('txtUserAgeMin') ? set_value('txtUserAgeMin') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtUserAgeMin');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">User Age Max</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtUserAgeMax" value="<?php set_value('txtUserAgeMax') ? set_value('txtUserAgeMax') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtUserAgeMax');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Min Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCreditLimitMinBusiness" value="<?php set_value('txtCreditLimitMinBusiness') ? set_value('txtCreditLimitMinBusiness') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMinBusiness');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Max Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCreditLimitMaxBusiness" value="<?php set_value('txtCreditLimitMaxBusiness') ? set_value('txtCreditLimitMaxBusiness') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMaxBusiness');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Min Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCreditLimitMinSalaried" value="<?php set_value('txtCreditLimitMinSalaried') ? set_value('txtCreditLimitMinSalaried') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMinSalaried');?></label>
                                                </section>

                                            </div>
											<div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Credit Limit Max Salaried</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCreditLimitMaxSalaried" value="<?php set_value('txtCreditLimitMaxSalaried') ? set_value('txtCreditLimitMaxSalaried') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCreditLimitMaxSalaried');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Supplementary</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="200" name="txtSupplementary"  value="<?php set_value('txtSupplementary') ? set_value('txtSupplementary') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtSupplementary');?></label>
                                                </section>
											</div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Year of Experience Salaried </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtYearOfExperienceSalaried" value="<?php set_value('txtYearOfExperienceSalaried') ? set_value('txtYearOfExperienceSalaried') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtYearOfExperienceSalaried');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Year of Experience Business</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtYearOfExperienceBusiness" value="<?php set_value('txtYearOfExperienceBusiness') ? set_value('txtYearOfExperienceBusiness') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtYearOfExperienceBusiness');?></label>
                                                </section>

                                            </div>
                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Card Benefit</label>
                                                    <label class="select">
                                                        <select multiple style="width:100%" class="select2" name="txtCardBenefit[]">
                                                            <?php echo $this->Select_model->card_benefit();?>
                                                        </select>
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCardBenefit[]');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Interest Free Period Min</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtInterestFreePeriodMin"  value="<?php set_value('txtInterestFreePeriodMin') ? set_value('txtInterestFreePeriodMin') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestFreePeriodMin');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Interest Free Period Max</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtInterestFreePeriodMax"  value="<?php set_value('txtInterestFreePeriodMax') ? set_value('txtInterestFreePeriodMax') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtInterestFreePeriodMax');?></label>
                                                </section>

                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Interest Rate (Yearly)</label><!--Cash Withdraw same as Cash Advance rate Yearly -->
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceRateYearly" value="<?php set_value('txtCashAdvanceRateYearly') ? set_value('txtCashAdvanceRateYearly') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceRateYearly');?></label>
                                                </section>
                                            </div>
											
											<div class="row">

												<section class="col col-6">
                                                    <label class="label">Annual Fee</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtAnnualFee" value="<?php set_value('txtAnnualFee') ? set_value('txtAnnualFee') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAnnualFee');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Annual Fee Vat(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtAnnualFeeVat" value="<?php set_value('txtAnnualFeeVat') ? set_value('txtAnnualFeeVat') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtAnnualFeeVat');?></label>
                                                </section>

                                            </div>
											
											<div class="row">
												<section class="col col-6">
                                                    <label class="label">Purchase Interest Rate(Yearly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtPurchaseInterestRate" value="<?php set_value('txtPurchaseInterestRate') ? set_value('txtPurchaseInterestRate') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPurchaseInterestRate');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Purchase Interest Rate (Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtPurchaseInterestRateMonthly"  value="<?php set_value('txtPurchaseInterestRateMonthly') ? set_value('txtPurchaseInterestRateMonthly') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtPurchaseInterestRateMonthly');?></label>
                                                </section>

                                            </div>


											<div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Balance Transfer Rate (Yearly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtBalanceTransferRate"  value="<?php set_value('txtBalanceTransferRate') ? set_value('txtBalanceTransferRate') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferRate');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Balance Transfer Rate (Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtBalanceTransferRateMonthly"  value="<?php set_value('txtBalanceTransferRateMonthly') ? set_value('txtBalanceTransferRateMonthly') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBalanceTransferRateMonthly');?></label>
                                                </section>

                                            </div>


											<div class="row">
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Interest Rate(Monthly)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceInterestRateMonthly"  value="<?php set_value('txtCashAdvanceInterestRateMonthly') ? set_value('txtCashAdvanceInterestRateMonthly') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceInterestRateMonthly');?></label>
                                                </section>
                                                <section class="col col-6">
                                                    <label class="label">Cash Advance Limit(%)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtCashAdvanceLimit"  value="<?php set_value('txtCashAdvanceLimit') ? set_value('txtCashAdvanceLimit') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtCashAdvanceLimit');?></label>
                                                </section>

                                            </div>

											<div class="row">
												<section class="col col-6">
                                                    <label class="label">Billing cycle (Start)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtBillingCycleStart"  value="<?php set_value('txtBillingCycleStart') ? set_value('txtBillingCycleStart') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBillingCycleStart');?></label>
                                                </section>
												<section class="col col-6">
                                                    <label class="label">Billing cycle (End)</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="10" name="txtBillingCycleEnd"  value="<?php set_value('txtBillingCycleEnd') ? set_value('txtBillingCycleEnd') : ''?>">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBillingCycleEnd');?></label>
                                                </section>
                                            </div>

                                            <div class="row">
                                                <div class="col col-3">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="txtFeaturedProduct" value="featured"  >
                                                        <i></i>Featured Product</label>
                                                </div>
                                                <div class="col col-3">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="isActive" value="active" >
                                                        <i></i>Is Active</label>
                                                </div>
                                            </div>


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
                                                                <textarea type="text" id="txtEligibility" class="ckeditor" name="txtEligibility"><?php set_value('txtEligibility') ? set_value('txtEligibility') : ''?></textarea>
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



                                        <article class="col-sm-6 col-md-6 col-lg-6">

                                            <!-- Widget ID (each widget will need unique ID)-->
                                            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                                    <h2>Card Summary</h2>

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
                                                                <textarea type="text" id="txtCardSummary" class="ckeditor" name="txtCardSummary"><?php set_value('txtCardSummary') ? set_value('txtCardSummary') : ''?></textarea>
                                                            </label>
                                                        </section>

                                                    </div>
                                                    <!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtCardSummary');?></label>
                                                </div>
                                                <!-- end widget div -->

                                            </div>
                                            <!-- end widget -->

                                        </article>
                                        <article class="col-sm-6 col-md-6 col-lg-6">

											<!-- Widget ID (each widget will need unique ID)-->
											<div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
												<header>
													<span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
													<h2>Pros</h2>

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
                                                                <textarea type="text" id="txtPros" class="ckeditor" name="txtPros"><?php set_value('txtPros') ? set_value('txtPros') : ''?></textarea>
                                                            </label>
                                                        </section>

													</div>
													<!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtPros');?></label>
												</div>
												<!-- end widget div -->

											</div>
											<!-- end widget -->

										</article>
										<!-- WIDGET END -->



                                        <article class="col-sm-6 col-md-6 col-lg-6">

                                            <!-- Widget ID (each widget will need unique ID)-->
                                            <div class="jarviswidget jarviswidget-color-blue" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                                    <h2>Cons</h2>

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
                                                                <textarea type="text" id="txtCons" class="ckeditor" name="txtCons"><?php set_value('txtCons') ? set_value('txtCons') : ''?></textarea>
                                                            </label>
                                                        </section>

                                                    </div>
                                                    <!-- end widget content -->
                                                    <label class="red"><?php echo form_error('txtCons');?></label>
                                                </div>
                                                <!-- end widget div -->

                                            </div>
                                            <!-- end widget -->

                                        </article>
                                        <article class="col-sm-12 col-md-12 col-lg-12">

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

                                                            <label class="input" style="width:100%;">
                                                                <textarea type="text" id="txtReview" class="ckeditor" name="txtReview"><?php set_value('txtReview') ? set_value('txtReview
') : ''?></textarea>
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

                                        <div class="row">
                                            <section class='col-md-6'>

                                            </section>
                                            <section class="col-md-6">
                                                <label class="input">
                                                    <button class="btn btn-primary" type="submit" >Save</button>
                                                </label>
                                            </section>

                                        </div>
                <!-- WIDGET END -->

                                    </fieldset>
                                </form>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- END COL -->

            </div>

            <!-- END ROW -->


        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>


