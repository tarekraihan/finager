<?php
$admin_role = $this->session->userdata('admin_role');
$module_id =$this->Select_model->get_admin_user_modules($this->session->userdata('admin_user_id'));
$modules = array();
foreach($module_id as $k){
    foreach($k as $v){
        array_push($modules,$v);
    }
}
?>
<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="<?php echo base_url();?>resource/admin/img/avatars/sunny.png" alt="me" class="online" />
						<span>
							<?php echo ucfirst($this->session->userdata('first_name'));?> <?php echo ucfirst($this->session->userdata('last_name'));?>
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
            <?php
            if($admin_role == 'super admin' || $admin_role == 'admin'){?>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">General Settings</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>card/bank">Add Bank Name</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/bank_list">Bank List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/non_bank">Add Non Bank Institution</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>general/non_bank_list">Non Bank Institution List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/update_bank_non_bank_info">Update Bank/Non Bank Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/add_branch_info">Add Branch Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/institution_branch_info_list">Institution Branch Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/add_event_history">Add Event History</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/db_backup">Take Database Backup</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/visitor_info">Visitor Information</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>general/visitor_map">Visitor Map</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>general/subscriptions">Subscriptions</a>
                    </li>

                </ul>
            </li>
            <?php }
            if($admin_role == 'super admin') {
                ?>
                <li>
                    <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span
                            class="menu-item-parent">User Manage</span></a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>backdoor/admin_role">Add Admin Role</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>backdoor/create_admin_user">Add Admin User </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>backdoor/admin_user_list">Admin User List</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>backdoor/add_module">Add Module</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>backdoor/access_control">Access Control</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>backdoor/user_access">User Access</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>general/go_maintenance">Go Maintenance Break</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>general/go_live">Go Live</a>
                        </li>
                    </ul>
                </li>

                <?php
            }
                $i = 0;
                if( $admin_role == 'super admin' || $admin_role == 'admin'){
                    $i = 1;
                }else if(count($modules) > 0){
                    foreach($modules as $module){
                        if($module == 1){
                            $i = 1;
                        }
                    }
                }

                if($i > 0){
            ?>
                <li>
                    <a href="#"><i class="fa fa-lg fa-credit-card"></i> <span class="menu-item-parent">Credit Card</span></a>
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

                    </ul>
                </li>
            <?php
            }
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 2){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
                <li>
                    <a href="#"><i class="fa fa-credit-card"></i> <span class="menu-item-parent"> Debit Card</span></a>
                    <ul>
                        <li>
                            <a href="<?php echo base_url();?>debit_card/add_choose_account">Add Choose Account</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url();?>debit_card/card_issuer">Add Card Issur</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>debit_card/i_want/">Add I want</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>debit_card/looking_for/">Add looking for</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>debit_card/add_card_info/">Add Card Info</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>debit_card/card_info_list/">Card List</a>
                        </li>
                    </ul>
                </li>
            <?php
            }

            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 3){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 4){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li class="top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa fa-automobile txt-color-red"></i> <span class="menu-item-parent">Auto Loan</span></a>
                <ul>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 5){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 6){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 7){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 8){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 9){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 10){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-graduation-cap"></i> <span class="menu-item-parent"> Money Maximizer</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>money_maximizer/your_benefits">Add Your benefit</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>money_maximizer/add_deposit_info">Add Deposit Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>money_maximizer/deposit_list/"><i class="fa fa-stack-overflow"></i>Deposit Info List</a>
                    </li>
                </ul>
            </li>
            <?php
            }
            ?>

            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if( $module == 11 ){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="menu-item-parent"> Monthly Benefit</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>monthly_benefit/tenure">Add Tenure</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>monthly_benefit/add_deposit_info">Add Deposit Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>monthly_benefit/deposit_list/">Deposit List</a>
                    </li>
                </ul>
            </li>
            <?php
            }
            ?>

            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 12){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="menu-item-parent"> Current Account</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>current_account/i_am">Add I Am</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>current_account/account_info">Add Account Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>current_account/account_list/">Account List</a>
                    </li>
                </ul>
            </li>
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 13){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="menu-item-parent"> Saving Account</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>saving_account/account_info">Add Account Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>saving_account/account_list/">Account List</a>
                    </li>
                </ul>
            </li>
            <?php
            }
            ?>
            <?php
            $i = 0;if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 14){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="menu-item-parent"> SND Account</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>snd_account/i_am">Add I Am</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>snd_account/deposit_amount">Add Deposit Amount</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url();?>snd_account/account_info">Add Account Info</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>snd_account/account_list/">Account List</a>
                    </li>
                </ul>
            </li>
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 15){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
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
            <?php
            }
            ?>
            <?php
            $i = 0;
            if( $admin_role == 'super admin' || $admin_role == 'admin'){
                $i = 1;
            }else if(count($modules) > 0){
                foreach($modules as $module){
                    if($module == 16){
                        $i = 1;
                    }
                }
            }
            if($i > 0){
            ?>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Search</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>backdoor/search_index">Search Index</a>
                    </li>
                </ul>
            </li>
                <?php
            }
            ?>
        </ul>
    </nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

</aside>
<!-- END NAVIGATION -->
