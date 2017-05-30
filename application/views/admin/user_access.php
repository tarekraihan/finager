<?php
if(isset($_GET['user_id'])){
    $this->Delete_model->Delete_All_Row($id=$_GET['user_id'],$table='admin_user_vs_modules',$id_field='user_id');
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
            <li>Home</li><li>Admin</li><li> User Access</li>
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
                             Admin User Access
                        </span>
                </h1>
            </div>

        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-md-offset-1 col-md-10">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Admin Access </h2>

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
                                <section>
                                    <?php echo ($this->session->userdata('success_message')) ?  $this->session->userdata('success_message') : ''; $this->session->unset_userdata('success_message');?>
                                </section>
                                <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                    <thead>
                                    <tr>
                                        <th data-hide="phone">No.</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Name  </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Email Address </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Module name </th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query = $this->Select_model->select_all_admin_user_access();
                                    $results = $query->result_array();
                                    //pr($results);die;
                                    $modules = array();
                                    foreach( $results as $row ){

                                        if(array_key_exists($row['email_address'], $modules)) {
                                            if(array_key_exists('module_name', $modules[$row['email_address']])) {
                                                $prev_module = $modules[$row['email_address']]['module_name'] . ", " . $row['module_name'];
                                                $modules[$row['email_address']]['module_name'] = $prev_module;
                                            } else {

                                            }
                                        } else {
                                            $modules[$row['email_address']] = array(
                                                'user_id' => $row['user_id'],
                                                'user_first_name' => $row['user_first_name'],
                                                'user_last_name' => $row['user_last_name'],
                                                'email_address' => $row['email_address'],
                                                'module_name' => $row['module_name']
                                            );
                                        }
                                    }



                                    $sl=1;
                                    foreach ($modules as $module)
                                    {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl; ?></td>
                                            <td ><?php echo $module['user_first_name'].' '.$module['user_last_name'];?></td>
                                            <td ><?php echo $module['email_address'];?></td>
                                            <td ><?php echo $module['module_name'];?></td>
                                            <td><a href="<?php echo base_url();?>backdoor/edit_access_control/?id=<?php echo $module['user_id'];?>" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?user_id=<?php echo $module['user_id'];?>" onclick="return confirm('Are you really want to delete this item')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
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