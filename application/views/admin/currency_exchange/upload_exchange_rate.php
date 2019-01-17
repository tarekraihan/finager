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
            <li>Home</li><li>Currency Exchange</li><li>Upload Exchange Rate</li>
        </ol>
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Currency 
							<span>> 
								Exchange rate
							</span>
                </h1>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">
                <article class="col-sm-12 col-md-12 col-lg-3">
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Upload Exchange Rate </h2>
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
                                <form id="bank" method="post" action="<?php echo base_url();?>backdoor/upload_currency_rate" class="smart-form" novalidate="novalidate" enctype="multipart/form-data">
                                    <?php
                                    //-----Display Success or Error message---
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                        <section>
                                            <label class="label">Exchange Date</label>
                                            <label class="input">
                                                <input type="text" name="exchange_date" id="exchange_date" class="datepicker" autocomplete="off" placeholder="Exchange Date" value ="<?php echo set_value('exchange_date') ;?>" />
                                            </label>
                                            <div class="form-group">
                                                <label class="red"><?php echo form_error('exchange_date');?></label>
                                            </div>
                                        </section>
                                        <section>
                                            <label class="label"> Bank Logo</label>
                                            <div class="input input-file">
                                                <span class="button"><input type="file" id="file" required="required" name="file"  onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Exchage Rate" readonly="">
                                                <small id="file" class="form-text text-muted">Upload only .xlsx file</small>
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
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Exchange Rate List </h2>
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
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> No of Rows</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Central Bank Sell Rate</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Central Bank Buy Rate</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Exchange Rate Date</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Uploaded By</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Upload Date</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $query=$this->Select_model->Select_Exchange_Rate();
                                    $sl=1;
                                    foreach ($query->result() as $row)
                                    {
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl; ?></td>
                                            <td class="text-center"><?php echo $row->number_of_rows;?></td>
                                            <td class="text-center"><?php echo $row->central_bank_buy_rate;?></td>
                                            <td class="text-center"><?php echo $row->central_bank_sell_rate;?></td>
                                            <td class="text-center"><?php echo date('d M Y', strtotime($row->date_of_exchange_rate));?></td>
                                            <td class="text-center"><?php echo $row->uploaded_by;?></td>
                                            <td class="text-center"><?php echo date('d M Y', strtotime($row->created_on)); ?></td>
                                            <td class="text-center"><a class="btn btn-danger" href="<?php echo base_url().'backdoor/delete_currency_rate';?>?exchange_date=<?php echo date('Y-m-d', strtotime($row->date_of_exchange_rate));?>">Delete</a></td>
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