<?php



if(isset($_GET['non_bank_id']))

{

    $id=$_GET['non_bank_id'];

    $table='card_non_bank';

    $id_field='id';

    $row=$this->Select_model->Select_Single_Row($id,$table,$id_field);
    $this->Delete_model->Delete_Single_Row($id,$table,$id_field);

    $delete_date = array(
        "module_name" => "General",
        "delete_details" => "Delete Non bank institution items ",
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

            <li>Home</li><li>General Settings</li><li>Non Bank</li>

        </ol>

    </div>

    <!-- END RIBBON -->
    <!-- MAIN CONTENT -->

    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    General Settings
							<span>> 
								Non Bank
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

                            <h2>Add Non Bank Name </h2>

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



                                <form id="bank" method="post" action="<?php echo base_url();?>general/non_bank" class="smart-form" novalidate="novalidate" enctype="multipart/form-data">

                                    <?php

                                    //-----Display Success or Error message---

                                    if(isset($feedback)){

                                        echo $feedback;

                                    }

                                    ?>

                                    <fieldset>

                                        <section>

                                            <label class="label">Non Bank Name</label>

                                            <label class="input">

                                                <input type="text" name="txtNonBank" placeholder="Write Non Bank Name" value ="<?php echo set_value('txtNonBank') ;?>" />
                                            </label>

                                            <div class="form-group">

                                                <label class="red"><?php echo form_error('txtNonBank');?></label>
                                            </div>

                                        </section>

                                        <section>

                                            <label class="label">Non Bank Logo</label>

                                            <div class="input input-file">

                                                <span class="button"><input type="file" id="file" required="required" name="file"  onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Bank logo" readonly="">

                                            </div>

                                            <label class="red"><?php echo form_error('file');?></label>

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

                            <h2>Non Bank List </h2>



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

                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Non Bank Name</th>

                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Non Bank Logo</th>

                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>



                                    </tr>

                                    </thead>

                                    <tbody>



                                    <?php

                                    $this->Common_model->order_column = 'id';

                                    $this->Common_model->table_name = 'general_non_bank';

                                    $query=$this->Common_model->select_all();

                                    $sl=1;

                                    foreach ($query->result() as $row)

                                    {

                                        ?>

                                        <tr>

                                            <td class="text-center"><?php echo $sl; ?></td>

                                            <td ><?php echo $row->non_bank_name;?></td>

                                            <td ><img src="<?php echo base_url(); ?>/resource/common_images/bank_logo/<?php if($row->bank_logo =="&lt;" || $row->bank_logo == null){echo 'dummy_logo.png';}else{echo $row->bank_logo;}?>" style="height:auto; width:80px;"></td>

                                            <td><a href="<?php echo base_url(); ?>general/edit_non_bank?id=<?php echo $row->id;?>" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="?non_bank_id=<?php echo $row->id;?>" onclick="return confirm('Are you really want to delete this item')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>

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

<!--

<script>

    $(document).ready(function(){

        $('#save').click(function(event){

            ///alert(2);

            $.ajax({

                type:"POST",

                url:"<?php /*echo base_url();*/?>card/save_bank_name",

                data:$("#bank").serialize(),

                success: function(response){

                    if(response != "error"){

                        //console.log(response);return;

//                        window.location.href = "<?php /*//echo base_url();*/?>//backdoor/dashboard"

                        location.reload();

                        console.log('error');

                    }else{

                        location.reload();

                        console.log('error');

                    }

                }

            });

        });

    });

</script>

-->