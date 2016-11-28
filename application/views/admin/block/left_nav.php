

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="<?php echo base_url();?>resource/admin/img/avatars/sunny.png" alt="me" class="online" />
						<span>
							<?php echo $this->session->userdata('first_name');?> <?php echo $this->session->userdata('last_name');?>
						</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
					
				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive-->
    <nav>
        <ul>
            <li>
                <a href="<?php echo base_url();?>backdoor/dashboard" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
          <!--  <li>
                <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a>
            </li>
            -->
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">General Settings</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>card/bank">Add Bank Name</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/non_bank">Add Non Bank Institution</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/db_backup">Take Database Backup</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">User Manage</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>backdoor/admin_role">Add Admin Role</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>backdoor/edit_admin">Edit User </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Credit Card</span></a>
                <ul>
                    <!--<li>
                        <a href="<?php /*echo base_url();*/?>card/age_limit">Age Limit</a>
                    </li>-->

                    <li>
                        <a href="<?php echo base_url();?>card/card_issuer">Card Issuer </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>card/card_type">Card Type</a>
                    </li>
                    <!--<li>
                        <a href="<?php /*echo base_url();*/?>card/card_limit">Credit Limit</a>
                    </li>-->
                    <li>
                        <a href="<?php echo base_url();?>card/card_user">Card User</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>card/credit_card_type">Credit Card Type</a>
                    </li>
                    <!--<li>
                        <a href="<?php /*echo base_url(); */?>card/card_income_range">Income Range</a>
                    </li>-->
                   <!-- <li>
                        <a href="<?php /*echo base_url(); */?>card/card_interest_free_period">Interest Free Period</a>
                    </li>-->
                    <li>
                        <a href="<?php echo base_url();?>card/card_reward">Card Reward</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>card/card_info">Card Information</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>card/card_info_list">Card Information List</a>
                    <li>
                    <a href="<?php echo base_url();?>card/card_fees_charges">Fees and Charges</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>card/card_fees_charges_list">Fees and Charges List</a>
                    </li>
            </li>

        </ul>
            </li>
            <li class="top-menu-invisible">
            <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">Home Loan</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>home_loan/loan_type/"><i class="fa fa-stack-overflow"></i>Add Loan Type</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>home_loan/looking_for/"><i class="fa fa-stack-overflow"></i> Add Looking For</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>home_loan/user/"><i class="fa fa-stack-overflow"></i> Add Loan User</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>home_loan/loan_info/"><i class="fa fa-stack-overflow"></i> Add Loan Information</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>home_loan/loan_list/"><i class="fa fa-stack-overflow"></i>  Loan List</a>
                </li>
            </ul>
        </li>

        <li class="top-menu-invisible">
            <a href="#"><i class="fa fa-lg fa-fw fa fa-automobile txt-color-red"></i> <span class="menu-item-parent">Auto Loan</span></a>
            <ul>

                <!--<li>
                    <a href="<?php /*echo base_url();*/?>auto_loan/applicant_type/"><i class="fa fa-stack-overflow"></i> Add Applicant Type</a>
                </li>
                <li>
                    <a href="<?php /*echo base_url();*/?>auto_loan/feature/"><i class="fa fa-stack-overflow"></i> Add Feature</a>
                </li>-->
                <li>
                    <a href="<?php echo base_url();?>auto_loan/looking_for/"><i class="fa fa-stack-overflow"></i> Add Looking For</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>auto_loan/user/"><i class="fa fa-stack-overflow"></i> Add Loan User</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>auto_loan/loan_info/"><i class="fa fa-stack-overflow"></i> Add Loan Information</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>auto_loan/loan_list/"><i class="fa fa-stack-overflow"></i>  Loan List</a>
                </li>
            </ul>
        </li>

        <li class="top-menu-invisible">
            <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">Personal Loan</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>personal_loan/i_am/"><i class="fa fa-stack-overflow"></i> Add I Am</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>personal_loan/looking_for/"><i class="fa fa-stack-overflow"></i> Add Looking For</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>personal_loan/loan_info/"><i class="fa fa-stack-overflow"></i> Add Loan Information</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>personal_loan/loan_list/"><i class="fa fa-stack-overflow"></i>  Loan List</a>
                </li>
            </ul>
        </li>


        <li class="top-menu-invisible">
            <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">Fixed Deposit</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>fdr/deposit_type/"><i class="fa fa-stack-overflow"></i> Add Deposit Type</a>
                </li>
<!--
                <li>
                    <a href="<?php /*echo base_url();*/?>fdr/i_want/"><i class="fa fa-stack-overflow"></i> Add I Want</a>
                </li>
-->
                <li>
                    <a href="<?php echo base_url();?>fdr/tenure/"><i class="fa fa-stack-overflow"></i> Add Tenure</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>fdr/i_am/"><i class="fa fa-stack-overflow"></i> Add I Am</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>fdr/draft_info/"><i class="fa fa-stack-overflow"></i> Add Draft/Common Info</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>fdr/draft_list/"><i class="fa fa-stack-overflow"></i>  Draft List</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>fdr/fdr_info/"><i class="fa fa-stack-overflow"></i> Add fdr Information</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>fdr/fdr_info_list/"><i class="fa fa-stack-overflow"></i>  FDR Info List</a>
                </li>
            </ul>
        </li>


        <li class="top-menu-invisible">
            <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">DPS</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>dps/tenure"><i class="fa fa-stack-overflow"></i> Add Tenure</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>dps/monthly_installment/"><i class="fa fa-stack-overflow"></i> Add Monthly Installment</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>dps/draft_info/"><i class="fa fa-stack-overflow"></i> Add Draft Info</a>
                </li>


                <li>
                    <a href="<?php echo base_url();?>dps/draft_list/"><i class="fa fa-stack-overflow"></i> Draft List</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>dps/add_info/"><i class="fa fa-stack-overflow"></i> Add Information</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>dps/deposit_list/"><i class="fa fa-stack-overflow"></i>Deposit List</a>
                </li>
            </ul>
        </li>

        <li class="top-menu-invisible">
            <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">Millionaire</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>millionaire/tenure"><i class="fa fa-stack-overflow"></i> Add Tenure</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>millionaire/i_am"><i class="fa fa-stack-overflow"></i> Add I am</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>millionaire/maturity_amount/"><i class="fa fa-stack-overflow"></i> Add Maturity Amount</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>millionaire/draft_info/"><i class="fa fa-stack-overflow"></i> Add Draft Info</a>
                </li>


                <li>
                    <a href="<?php echo base_url();?>millionaire/draft_list/"><i class="fa fa-stack-overflow"></i> Draft List</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>millionaire/add_info/"><i class="fa fa-stack-overflow"></i> Add Information</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>millionaire/deposit_list/"><i class="fa fa-stack-overflow"></i>Millionaire Info List</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-graduation-cap"></i> <span class="menu-item-parent"> Education Loan</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>education_loan/tenure">Add Tenure</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>education_loan/expenses_considered">Add Expenses</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>education_loan/purpose">Add Purpose</a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>education_loan/loan_info">Add Loan Info</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>education_loan/loan_list/"><i class="fa fa-stack-overflow"></i>Loan Info List</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Map Manage</span></a>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>map/add">Add Map Info</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>map/map_info_list">Info List</a>
                </li>

            </ul>
        </li>
        </ul>
    </nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

</aside>
<!-- END NAVIGATION -->
