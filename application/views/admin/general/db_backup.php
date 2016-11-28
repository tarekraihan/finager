

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
            <li>Finager</li><li>Database</li><li> Take Backup</li>
        </ol>
        <!-- end breadcrumb -->
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>Database<span>>Take Backup</span>
                </h1>
            </div>

        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">


                <article class="col-sm-12 col-md-12 col-lg-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken text-center" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header class="text-center">
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Take Backup </h2>

                        </header>

                        <!-- widget div-->
                        <div class="text-center">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding text-center">
                                <div>
                                    <div>
                                        <?php
                                        //-----Display Success or Error message---
                                        if(isset($feedback)){
                                            echo $feedback;
                                        }
                                        ?>
                                    </div>
                                    <h2> Take Database Backup </h2>
                                    <div class="registration_form">
                                        <div class="db_title">
                                            <h2> Database Backup</h2>
                                        </div>


                                        <div class="download_image">
                                            <a href="<?php echo base_url();?>general/dbbackup"> <img src="<?php echo base_url(); ?>resource/admin/img/database.png" style="width: 50px;"/></a>
                                            <br/>
                                            <br/>
                                            <br/>
                                            <br/>
                                            <br/>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                    <!-- Widget ID (each widget will need unique ID)-->

                </article>
                <!-- END COL -->

            </div>

            <!-- end row -->

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
