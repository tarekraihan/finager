<?php
if(isset($_GET['id'])){
    $id = ($_GET['id']) ? $_GET['id'] : 0;
    if($id > 0){
        $row=$this->Select_model->Select_bank_non_bank_event_info_by_id($id);
        $bank = "";
        if($row["is_non_bank"] == 1){
            $bank = $row["non_bank_id"];
        }else{
            $bank = $row["bank_id"];
        }
    }

}else{
    $row['id']='';
    $row['is_non_bank']='';
    $bank = "";
    $row['event_date'] = '';
    $row['event_title'] = '';
}
if(isset($_GET['event_id'])){
    $id = $_GET['event_id'];
    $table='institution_event_history';
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
            <li>General</li><li>Bank OR Non Bank</li><li> Event History</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                   General
							<span>>
								Bank or Non Bank Event History
                            </span>
                </h1>
            </div>

        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">
                <article class="col-sm-12 col-md-4 col-lg-4">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Edit Bank / Non Bank Event History</h2>
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

                                <form id="age_limit" method="post" action="<?php echo base_url();?>general/edit_event_history" class="smart-form" novalidate="novalidate">
                                    <?php
                                    //-----Display Success or Error message---
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                        <section>
                                            <div>
                                                <section class="col-md-6">
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="is_non_bank" id="is_non_bank" value="1" <?php if(isset($row["is_non_bank"]) && $row["is_non_bank"] == 1){ echo "checked";}else{set_checkbox('is_non_bank', '1');}?>> Is Non Bank Institution ?
                                                    </label>
                                                </section>
                                                <section class="col-md-6">
                                                    <label class="radio-inline" style="margin-left: 25px; margin-top: 25px;">
                                                        <input type="checkbox" name="is_history" id="is_history" value="1"  <?php if(isset($row["is_history"]) && $row["is_history"] == 1){ echo "checked";}else{set_checkbox('is_history', '1');}?>> Is History ?
                                                    </label>
                                                </section>
                                                <section class="col-md-12" id="institution">
                                                    <label class="label">Bank Name</label>
                                                    <label class="select">
                                                        <select name="txtBankName" id="txtBankName">
                                                            <?php echo $this->Select_model->select_bank();?>
                                                        </select>

                                                    </label>
                                                    <label class="red"><?php echo form_error('txtBankName');?></label>
                                                </section>
                                                <section class="col-md-12">
                                                    <label class="label">Event Date </label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtEventDate" value="<?php if(isset($row["event_date"]) && $row["event_date"] != ""){echo $row["event_date"];}else{ set_value('txtEventDate');} ?>" placeholder="Write event date">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEventDate');?></label>
                                                </section>
                                                <section class="col-md-12">
                                                    <label class="label">Event Title</label>
                                                    <label class="input">
                                                        <input type="text" maxlength="255" name="txtEventTitle" value="<?php  if(isset($row["event_title"]) && $row["event_title"] != ""){echo $row["event_title"];}else{ set_value('txtEventTitle');}  ?>" placeholder="Write Event Title">
                                                    </label>
                                                    <label class="red"><?php echo form_error('txtEventTitle');?></label>
                                                </section>
                                                <section class="col-md-12">
                                                    <label class="input">
                                                        <input type="hidden" value="<?php  echo $row["id"]; ?>" name="event_id">
                                                        <button class="btn btn-primary" type="submit" style="padding:5px 10px;" >Update</button>
                                                    </label>
                                                </section>
                                            </div>
                                    </article>
                                </form>
                        </article>
                        <!-- END COL -->
                        <!-- NEW WIDGET START -->
                        <article class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                    <h2>Event History List </h2>

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
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Institution Logo </th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Institution Name </th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Event Date</th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Event Type</th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Event Title</th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Created By</th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Modified By</th>
                                                <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Last Modified</th>
                                                <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            echo $this->Select_model->select_all_institution_event_list();
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){


        $("input[name ='is_non_bank']").click(function() {
            var v_value = $(this).val();
            if ($(this).is(":checked")) {
                $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName"><?php echo $this->Select_model->select_non_bank();?></select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');

            }else {
                $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName"><?php echo $this->Select_model->select_bank();?></select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
            }
        });

        if($("input[name ='is_non_bank']").is(':checked')){
            $('#institution').html(' <label class="label">Non Bank Name</label><label class="select"><select name="txtNonBankName" id="txtNonBankName">' +
                '<?php $result=$this->Select_model->select_all('general_non_bank'); foreach($result->result() as $row1){ ?>'+
                '<option value="<?php echo $row1->id;?>" <?php if(isset($row["non_bank_id"]) && $row["non_bank_id"]==$row1->id){echo "selected";}?><?php echo set_select("txtNonBankName",$row1->id)?>><?php echo $row1->non_bank_name ; ?></option>;<?php } ?>'+
                '</select></label><label class="red"><?php echo form_error('txtNonBankName');?></label>');
        }else{
            $('#institution').html(' <label class="label">Bank Name</label><label class="select"><select name="txtBankName" id="txtBankName">' +
                '<?php $result=$this->Select_model->select_all('card_bank'); foreach($result->result() as $row1){ ?>'+
                '<option value="<?php echo $row1->id;?>" <?php if(isset($row["bank_id"]) && $row["bank_id"]==$row1->id){echo "selected";}?><?php echo set_select("txtBankName",$row1->id)?>><?php echo $row1->bank_name ; ?></option>;<?php } ?>'+
                '</select></label><label class="red"><?php echo form_error('txtBankName');?></label>');
        }
    });
</script>