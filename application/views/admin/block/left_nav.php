

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
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
                <ul>
                    <li>
                        <a href="flot.html">Flot Chart</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris Charts</a>
                    </li>
                    <li>
                        <a href="inline-charts.html">Inline Charts</a>
                    </li>
                    <li>
                        <a href="dygraphs.html">Dygraphs</a>
                    </li>
                    <li>
                        <a href="chartjs.html">Chart.js <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
                    </li>
                </ul>
            </li>-->
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">User Manage</span></a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>backdoor/admin_role">Add Admin Role</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>backdoor/edit_admin">Edit User </a>
                    </li>
                    <li>
                        <a href="jqgrid.html">Jquery Grid</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Card Management</span></a>
                <ul>
                    <!--<li>
                        <a href="<?php /*echo base_url();*/?>card/age_limit">Age Limit</a>
                    </li>-->
                    <li>
                        <a href="<?php echo base_url();?>card/bank">Add Bank Name</a>
                    </li>
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
                    <a href="<?php echo base_url();?>card/card_fees_charges">Card Fees and Charges</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>card/card_fees_charges_list">Card Fees and Charges List</a>
                    </li>
            </li>
        </ul>
            </li>
            <!--<li class="top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
                <ul>
                    <li>
                        <a href=""><i class="fa fa-stack-overflow"></i> Different Versions</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-cube"></i> App Settings</a>
                    </li>
                    <li>
                        <a href="http://bootstraphunter.com/smartadmin/BUGTRACK/track_/documentation/index.html" target="_blank"><i class="fa fa-book"></i> Documentation</a>
                    </li>
                    <li>
                        <a href="http://bootstraphunter.com/smartadmin/BUGTRACK/track_/" target="_blank"><i class="fa fa-bug"></i> Bug Tracker</a>
                    </li>
                </ul>
            </li>-->


        </ul>
    </nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

</aside>
<!-- END NAVIGATION -->
