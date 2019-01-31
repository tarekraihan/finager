<?php

if(isset($_GET['deposit_id']))
{
    $id=$_GET['deposit_id'];
    $table='snd_deposit_amount_range';
    $id_field='id';
    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
    $this->Delete_model->Delete_Single_Row($id,$table,$id_field);

    $delete_date = array(
        "module_name" => "SND Deposit",
        "delete_details" => "Delete snd deposit amount range items ",
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
            <li>Account</li><li>SND Account</li><li> Deposit Amount</li>
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
                    SND Account
							<span>> 
								Deposit Amount
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
                            <h2>Add Deposit Amount</h2>

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

                                <form  method="post" action="<?php echo base_url();?>snd_account/deposit_amount" class="smart-form" novalidate="novalidate">
                                    <?php
                                    //-----Display Success or Error message---
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                        <section>
                                            <label class="label">Deposit Amount Range</label>
                                            <label class="input">
                                                <input type="text" name="txtDepositAmount" placeholder="Deposit Amount" value ="<?php echo set_value('txtDepositAmount') ;?>" />

                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('txtDepositAmount');?></label>

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
                            <h2>SND Deposit Amount List </h2>

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
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> SND Account Deposit Amount</th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                    $this->Common_model->order_column = 'id';
                                    $this->Common_model->table_name = 'snd_deposit_amount_range';
                                    $query=$this->Common_model->select_all();
                                    $sl=1;
                                    foreach ($query->result() as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl; ?></td>
                                            <td ><?php echo $row->deposit_amount_range;?></td>
                                            <td><a href="<?php echo base_url(); ?>snd_account/edit_deposit_amount?id=<?php echo $row->id;?>" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?deposit_id=<?php echo $row->id;?>" onclick="return confirm('Are you really want to delete this item')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
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
