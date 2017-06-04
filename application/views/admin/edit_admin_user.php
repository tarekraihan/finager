<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='tbl_admin_user';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
//    pr($row);die;
}else{
    $row['id']='';
    $row['email_address']='';
    $row['admin_role_id']='';
    $row['actual_password']='';
    $row['status']='';
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
            <li>Home</li><li>Admin</li><li> edit User</li>
        </ol>

    </div>
    <!-- END RIBBON -->
    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Management
                        <span>>
                            edit Admin User
                        </span>
                    <a href="<?php echo base_url();?>backdoor/admin_user_list" class="btn btn-info pull-right"><< Admin User List</a>
                </h1>

            </div>

        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">
                <article class="col-md-offset-3 col-md-6">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-sortable jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Edit Admin User </h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>backdoor/edit_admin_user" class="smart-form" novalidate="novalidate">

                                    <fieldset>
                                        <section>
                                           <?php echo ($this->session->userdata('success_message')) ?  $this->session->userdata('success_message') : ''; $this->session->unset_userdata('success_message');?>
                                        </section>
                                        <section>
                                            <label class="label">Email Address</label>
                                            <label class="input">
                                                <input type="hidden" name="txtUserId"  value ="<?php echo $row['id'];?>" />
                                                <input type="email" name="txtEmailAddress" placeholder="Email Address" value ="<?php echo $row['email_address'];?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtEmailAddress');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">User Role</label>
                                            <label class="select">
                                                <select name="txtAdminUserRole">
                                                    <option value=''>-- Select One --</option>
                                                    <?php
                                                    $result=$this->Select_model->select_all('tbl_admin_user_role');
                                                    foreach($result->result() as $row1){
                                                        ?>
                                                        <option value="<?php echo $row1->id;?>" <?php if(isset($row["admin_role_id"]) && $row["admin_role_id"]==$row1->id){echo "selected='select'";}?><?php echo set_select("txtAdminUserRole",$row1->id)?>><?php echo $row1->admin_role ; ?></option>';
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtAdminUserRole');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">Password</label>
                                            <label class="input">
                                                <input type="password" name="txtPassword" placeholder="Password" value ="<?php if(isset($row["actual_password"]) && !empty($row["actual_password"])){ echo $row['actual_password'];}else{ echo set_select("txtPassword"); } ?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtPassword');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">Confirm Password</label>
                                            <label class="input">
                                                <input type="password" name="txtConfirmPassword" placeholder="Confirm Password" value ="<?php if(isset($row["actual_password"]) && !empty($row["actual_password"])){ echo $row['actual_password'];}else{ echo set_select("txtConfirmPassword"); } ?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtConfirmPassword');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">Change Status</label>
                                            <label class="select">
                                                <select name="txtStatus">
                                                    <option value=''>-- Select One --</option>
                                                    <option value='1' <?php if($row["status"] ==1){echo "selected='select'";}else{ echo set_select("txtStatus",1); } ?>>Active</option>
                                                    <option value='0' <?php if( $row["status"] == 0){echo "selected='select'";}else{ echo set_select("txtStatus",0);}?>>Inactive</option>
                                                </select>
                                            </label>
                                    </fieldset>
                                    <footer>
                                        <button type="submit" id="save" class="btn btn-primary"  >
                                            Update Admin
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
            </div>
            <!-- end row -->
            <!-- end row -->
        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->