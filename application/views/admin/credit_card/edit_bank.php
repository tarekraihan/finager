<?php



if(isset($_GET['bank_id']))

{

    $id=$_GET['bank_id'];

    $table='card_bank';

    $id_field='id';

    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
    $this->Delete_model->Delete_Single_Row($id,$table,$id_field);
    $delete_date = array(
        "module_name" => "Credit Card",
        "delete_details" => "Delete credit card bank items ",
        "deleted_by" => $this->session->userdata('admin_user_id'),
        "table_name" => $table,
        "item_id" =>$id,
        "relation_field" =>$id_field,
        "deleted_data" => json_encode($row)
    );
    $this->Delete_model->Delete_log($delete_date);

}



if(isset($_GET['id']))

{

    $id=$_GET['id'];

    $table='card_bank';

    $id_field='id';

    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);

    /*print_r($row);

        die;*/

}else{

    $row['id']='';

    $row['bank_name']='';

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

            <li>Home</li><li>Card</li><li>Edit Bank Name</li>

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
								Edit Bank
							</span>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <a href="<?php echo base_url();?>card/bank/" class="btn btn-primary pull-right">Add +</a>
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

                            <h2> Edit Bank Name </h2>
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



                                <form  method="post" action="<?php echo base_url();?>card/edit_bank" class="smart-form" novalidate="novalidate" enctype="multipart/form-data">

                                    <?php

                                    //-----Display Success or Error message---

                                    if(isset($feedback)){

                                        echo $feedback;

                                    }

                                    ?>

                                    <fieldset>

                                        <section>

                                            <label class="label">Bank Name </label>

                                            <label class="input">

                                                <input type="hidden" name="txtBankId" value ="<?php echo $row['id']; ?>" />

                                                <input type="text" name="txtBank" placeholder="Bank Name" value ="<?php echo $row['bank_name']; ?>" />



                                            </label>

                                            <div class="form-group">

                                                <label class="red"><?php echo form_error('txtBank');?></label>



                                            </div>

                                        </section>

                                        <section>

                                            <label class="label"> Bank Logo</label>

                                            <div class="input input-file">

                                                <span class="button"><input type="file" id="file"  name="file"  onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">

                                            </div>

                                            <label class="red"><?php echo form_error('file');?></label>

                                        </section>

                                    </fieldset>

                                    <footer>

                                        <button type="submit" id="save" class="btn btn-primary"  >

                                            Update

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

                            <h2>Bank List Tables </h2>



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

                                        <th data-hide="phone">NO.</th>

                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Bank ID</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Bank Name</th>

                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Bank Logo</th>

                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>



                                    </tr>

                                    </thead>

                                    <tbody>



                                    <?php

                                    $this->Common_model->order_column = 'id';

                                    $this->Common_model->table_name = 'card_bank';

                                    $query=$this->Common_model->select_all();

                                    $sl=1;

                                    foreach ($query->result() as $row)

                                    {

                                        ?>

                                        <tr>

                                            <td class="text-center"><?php echo $sl; ?></td>

                                            <td ><?php echo $row->id;?></td>
                                            <td ><?php echo $row->bank_name;?></td>

                                            <td ><img src="<?php echo base_url(); ?>/resource/common_images/bank_logo/<?php if($row->bank_logo =="&lt;" || $row->bank_logo == null){echo 'dummy_logo.png';}else{echo $row->bank_logo;}?>" style="height:auto; width:80px;"></td>

                                            <td><a href="<?php echo base_url(); ?>card/edit_bank?id=<?php echo $row->id;?>" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?bank_id=<?php echo $row->id;?>" onclick="return confirm('Are you really want to delete this item')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

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

