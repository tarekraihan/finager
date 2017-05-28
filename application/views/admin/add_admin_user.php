<?php

if(isset($_GET['a_user_id']))
{
    $id=$_GET['a_user_id'];
    $table='tbl_admin_user_role';
    $id_field='id';
    $this->Delete_model->Delete_Single_Row($id,$table,$id_field);
}
?>
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
            <li>Home</li><li>Admin</li><li> add User</li>
        </ol>
    </div>
    <!-- END RIBBON -->
    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Management
                        <span>>
                            Add Admin User
                        </span>
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
                            <h2>Add Admin User </h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>backdoor/create_admin_user" class="smart-form" novalidate="novalidate">

                                    <fieldset>
                                        <section>
                                            <?php echo ($this->session->userdata('success_message')) ?  $this->session->userdata('success_message') : ''; $this->session->unset_userdata('success_message');?>
                                        </section>
                                        <section>
                                            <label class="label">Email Address</label>
                                            <label class="input">
                                                <input type="email" name="txtEmailAddress" placeholder="Email Address" value ="<?php echo set_value('txtEmailAddress');?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtEmailAddress');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">User Role</label>
                                            <label class="select">
                                                <select name="txtAdminUserRole">
                                                    <?php echo $this->Select_model->select_admin_role();?>
                                                </select>
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtAdminUserRole');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">Password</label>
                                            <label class="input">
                                                <input type="password" name="txtPassword" placeholder="Password" value ="<?php echo set_value('txtPassword');?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtPassword');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">Confirm Password</label>
                                            <label class="input">
                                                <input type="password" name="txtConfirmPassword" placeholder="Confirm Password" value ="<?php echo set_value('txtPassword');?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtConfirmPassword');?></label>
                                            </div>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <button type="submit" id="save" class="btn btn-primary"  >
                                            Create Admin
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
                            <h2>Admin List </h2>

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
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Name  </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Email Address </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Admin Role </th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $query = $this->Select_model->select_all_admin_user();
                                    $sl=1;
                                    foreach ($query->result() as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl; ?></td>
                                            <td ><?php echo $row->first_name.' '.$row->last_name;?></td>
                                            <td ><?php echo $row->email_address;?></td>
                                            <td ><?php echo ucfirst($row->admin_role);?></td>
                                            <td><a href="?a_user_id=<?php echo $row->id;?>" onclick="return confirm('Are you really want to delete this item')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
                                        </tr>
                                        <?php
                                        $sl++;
                                    }
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