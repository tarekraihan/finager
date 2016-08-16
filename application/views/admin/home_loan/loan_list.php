<?php
if(isset($_GET['loan_id']))
{
    $id=$_GET['loan_id'];
    $table='home_loan_info';
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
            <li>Loan</li><li>Home Loan</li><li>Loan Info List</li>
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
                            <h2>Home Loan Information List </h2>

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
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Bank Image</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Loan Name</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Looking For</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Bank Name</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Max Loan Amount</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Interest Rate Avg</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Created By</th>
                                        <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        echo $this->Select_model->select_home_loan_information();
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
