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
            <li>Visitor</li><li>Visitor Information</li>
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
                            <h2>Website Visitor Information</h2>

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
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Page Name</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Event Name</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> IP Address</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Browser</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Country</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Region</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>City</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Latitude</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Longitude</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Currency</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Currency Symbol</th>
                                        <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Visit Date Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        echo $this->Select_model->select_visitor_information();
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
