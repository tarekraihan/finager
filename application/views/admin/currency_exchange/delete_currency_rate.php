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
            <li>Home</li><li>Currency Exchange</li><li>Delete Exchange Rate</li>
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
                        Delete Exchange Rate
                    </span>
                </h1>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">
                <article class="col-md-offset-3 col-md-6">
                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                            <h2>Delete Exchange Rate </h2>
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
                                <form id="bank" method="post" action="<?php echo base_url();?>backdoor/delete_currency_rate" class="smart-form" novalidate="novalidate" >
                                    <?php
                                    if(isset($feedback)){
                                        echo $feedback;
                                    }
                                    ?>
                                    <fieldset>
                                       
                                            <input type="hidden" name="exchange_date" value ="<?php echo (isset($_GET['exchange_date'] )) ? $_GET['exchange_date'] : '';?>" />
                                         
                                        <section>
                                        <div class="alert alert-danger" role="alert">Are you sure you want to delete?</div>
                                        </section>
                                    </fieldset>
                                    <footer>
                                        <a class="btn btn-primary"  href="<?php echo base_url().'backdoor/upload_currency_rate'?>">Back</a>
                                        <?php
                                            if(isset($_GET['exchange_date'])){
                                                ?>
                                                <button type="submit" id="save" class="btn btn-danger">Delete</button>
                                                <?php
                                            }else{
                                                ?>
                                                <button type="submit" id="save" class="btn btn-danger disabled">Delete</button>
                                                <?php
                                            }
                                        ?>
                                        
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
            </div>
            <!-- end row -->
            <!-- end row -->
        </section>
        <!-- end widget grid -->
    </div>
    <!-- END MAIN CONTENT -->
</div>