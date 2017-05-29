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
            <li>Home</li><li>Admin</li><li>Finager Module Access</li>
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
                    <i class="fa fa-table fa-fw "></i>
                    Management
							<span>>Finager Module Access </span>
                </h1>
            </div>

        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-6">
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2> Module Access</h2>
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
                                <form id="add_module_form" method="post" action="<?php echo base_url();?>backdoor/access_control" class="smart-form" novalidate="novalidate">
                                    <fieldset>
                                        <section>
                                            <?php echo ($this->session->userdata('success_message')) ?  $this->session->userdata('success_message') : ''; $this->session->unset_userdata('success_message');?>
                                        </section>
                                        <section>
                                            <label class="label">Module Name</label>
                                            <label class="select">
                                                <select name="txtAdminUser" id="txtAdminUser">
                                                    <option value="">--Select One--</option>
                                                    <?php echo $this->Select_model->select_admin_users();?>
                                                </select>
                                            </label>
                                            <label class="red"><?php echo form_error('txtAdminUser');?></label>
                                        </section>
                                        <section>
                                            <label class="label">Module</label>
                                            <label class="select">
                                                <select multiple style="width:100%" class="select2" name="txtModule[]" id="txtModule" required>
                                                    <?php
                                                  /*  $result1=$this->Select_model->select_finager_all_modules();

                                                    $user_id =$this->Select_model->get_home_loan_user_home_loan_info($row['id']);

                                                    $user = array();
                                                    foreach($user_id as $k){
                                                        foreach($k as $v){
                                                            array_push($user,$v);
                                                        }
                                                    }
                                                    $i=0;
                                                    foreach($result1->result() as $row1){

                                                        */?><!--
                                                        <option value="<?php /*echo $row1->id;*/?>" <?php /*if(isset($user[$i]) ? ($user[$i] == $row1->id) : false) { echo "selected='select'"; }else{ echo set_select("txtHomeLoanUser[]", $row1->id);}*/?>><?php /*echo $row1->home_loan_user; */?></option>';
                                                        --><?php
/*                                                        $i++;
                                                    }*/
                                                    ?>
                                                </select>
                                            </label>
                                            <label class="red"><?php echo form_error('txtModule[]');?></label>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <button type="submit" id="save" class="btn btn-primary"  >
                                            Save
                                        </button>
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

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Finager Module List </h2>

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

                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">No.</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Module Name </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Created by </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Created Date </th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    echo $this->Select_model->select_all_modules();
                                    ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- WIDGET END -->



            </div>

            <!-- end row -->

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
