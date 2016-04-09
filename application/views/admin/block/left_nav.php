

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
                        <a href="<?php echo base_url();?>card/card_benefit">Card Benefit</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>card/card_fees_charges">Card Fees and Charges</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>card/card_info">Card Information</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>card/card_info_list">Card Information List</a>
                    </li>
                </ul>
            </li>
            <li class="top-menu-invisible">
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
            </li>
            <li class="chat-users top-menu-invisible">
                <a href="#"><i class="fa fa-lg fa-fw fa-comment-o"><em class="bg-color-pink flash animated">!</em></i> <span class="menu-item-parent">Smart Chat API <sup>beta</sup></span></a>
                <ul>
                    <li>
                        <!-- DISPLAY USERS -->
                        <div class="display-users">

                            <input class="form-control chat-user-filter" placeholder="Filter" type="text">

                            <a href="#" class="usr"
                               data-chat-id="cha1"
                               data-chat-fname="Sadi"
                               data-chat-lname="Orlaf"
                               data-chat-status="busy"
                               data-chat-alertmsg="Sadi Orlaf is in a meeting. Please do not disturb!"
                               data-chat-alertshow="true"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/5.png' alt='Sadi Orlaf'>
												<div class='usr-card-content'>
													<h3>Sadi Orlaf</h3>
													<p>Marketing Executive</p>
												</div>
											</div>
										">
                                <i></i>Sadi Orlaf
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha2"
                               data-chat-fname="Jessica"
                               data-chat-lname="Dolof"
                               data-chat-status="online"
                               data-chat-alertmsg=""
                               data-chat-alertshow="false"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/1.png' alt='Jessica Dolof'>
												<div class='usr-card-content'>
													<h3>Jessica Dolof</h3>
													<p>Sales Administrator</p>
												</div>
											</div>
										">
                                <i></i>Jessica Dolof
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha3"
                               data-chat-fname="Zekarburg"
                               data-chat-lname="Almandalie"
                               data-chat-status="online"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>
												<div class='usr-card-content'>
													<h3>Zekarburg Almandalie</h3>
													<p>Sales Admin</p>
												</div>
											</div>
										">
                                <i></i>Zekarburg Almandalie
                            </a>

                            <a href="#" class="usr"
                               data-chat-id="cha4"
                               data-chat-fname="Barley"
                               data-chat-lname="Krazurkth"
                               data-chat-status="away"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/4.png' alt='Barley Krazurkth'>
												<div class='usr-card-content'>
													<h3>Barley Krazurkth</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
                                <i></i>Barley Krazurkth
                            </a>

                            <a href="#" class="usr offline"
                               data-chat-id="cha5"
                               data-chat-fname="Farhana"
                               data-chat-lname="Amrin"
                               data-chat-status="incognito"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/female.png' alt='Farhana Amrin'>
												<div class='usr-card-content'>
													<h3>Farhana Amrin</h3>
													<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>
												</div>
											</div>
										">
                                <i></i>Farhana Amrin (offline)
                            </a>

                            <a href="#" class="usr offline"
                               data-chat-id="cha6"
                               data-chat-fname="Lezley"
                               data-chat-lname="Jacob"
                               data-chat-status="incognito"
                               data-rel="popover-hover"
                               data-placement="right"
                               data-html="true"
                               data-content="
											<div class='usr-card'>
												<img src='img/avatars/male.png' alt='Lezley Jacob'>
												<div class='usr-card-content'>
													<h3>Lezley Jacob</h3>
													<p>Sales Director</p>
												</div>
											</div>
										">
                                <i></i>Lezley Jacob (offline)
                            </a>

                            <a href="ajax/chat.html" class="btn btn-xs btn-default btn-block sa-chat-learnmore-btn">About the API</a>

                        </div>
                        <!-- END DISPLAY USERS -->
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
