<?php

if(isset($_GET['applicant_id']))
{
    $id=$_GET['applicant_id'];
    $table='auto_applicant';
    $id_field='id';
    $this->Delete_model->Delete_Single_Row($id,$table,$id_field);

    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
    $delete_date = array(
        "module_name" => "Auto Loan",
        "delete_details" => "Delete auto loan applicant name ",
        "deleted_by" => $this->session->userdata('admin_user_id'),
        "table_name" => $table,
        "item_id" =>$id,
        "relation_field" =>$id_field,
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
            <li>Loan</li><li>Auto Loan</li><li> Applicant Type</li>
        </ol>
        <!-- end breadcrumb -->
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Auto Loan
							<span>> 
								Applicant Type
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
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Add Applicant </h2>

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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>auto_loan/applicant_type" class="smart-form" novalidate="novalidate">
                                    <?php
                                    //-----Display Success or Error message---
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                        <section>
                                            <label class="label">Applicant Type </label>
                                            <label class="input">
                                                <input type="text" name="txtAutoLoanApplicant" placeholder="Applicant Type" value ="<?php echo set_value('txtAutoLoanApplicant') ;?>" />

                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtAutoLoanApplicant');?></label>

                                            </div>
                                        </section>
                                        <section>
                                            <label class="label">Remarks</label>
                                            <label class="input">
                                                <input type="text" name="txtRemarks" placeholder="Remarks" value ="<?php echo set_value('txtRemarks') ;?>" />

                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtRemarks');?></label>

                                            </div>
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
                            <h2>Auto Loan Applicant Type List </h2>

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
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Auto Loan Applicant Type </th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Remarks </th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $this->Common_model->order_column = 'id';
                                    $this->Common_model->table_name = 'auto_applicant';
                                    $query=$this->Common_model->select_all();
                                    $sl=1;
                                    foreach ($query->result() as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl; ?></td>
                                            <td ><?php echo $row->applicant;?></td>
                                            <td ><?php echo $row->remarks;?></td>
                                            <td><a href="<?php echo base_url(); ?>auto_loan/edit_applicant_type?id=<?php echo $row->id;?>" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?applicant_id=<?php echo $row->id;?>" onclick="return confirm('Are you really want to delete this item')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
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
