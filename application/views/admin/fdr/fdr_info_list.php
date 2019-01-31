<?php
if(isset($_GET['draft_id']))
{
    $id=$_GET['draft_id'];
    $table='fdr_info_draft';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
    $this->Delete_model->Delete_Single_Row($id,$table,$id_field);

    $delete_date = array(
        "module_name" => "FDR",
        "delete_details" => "Delete FDR draft items ",
        "deleted_by" => $this->session->userdata('admin_user_id'),
        "table_name" => $table,
        "deleted_data" => json_encode($row)
    );
    $this->Delete_model->Delete_log($delete_date);
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
            <li>Deposit</li><li>FDR</li><li>Draft List</li>
        </ol>


    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">

        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>FDR Info List </h2>

                        </header>
                        <div >
                            <?php echo ($this->session->userdata('success_message')) ?  $this->session->userdata('success_message') : ''; $this->session->unset_userdata('success_message');?>
                        </div>
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
                                        <th data-hide="phone">FDR ID.</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Bank Image</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Bank Name</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Tenure</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Min Amount</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Max Amount</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Interest Rate</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Loan Facility</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Category</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Created By</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Modified By</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Last Modified</th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        echo $this->Select_model->get_fdr_info();
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
