<!-- MAIN PANEL --><div id="main" role="main">    <!-- RIBBON -->    <div id="ribbon">        <span class="ribbon-button-alignment">            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">                <i class="fa fa-refresh"></i>            </span>        </span>        <!-- breadcrumb -->        <ol class="breadcrumb">            <li>Home</li><li>General Settings</li><li>Go Under Maintenance</li>        </ol>    </div>    <!-- END RIBBON -->    <!-- MAIN CONTENT -->    <div id="content">        <div class="row">            <div class="col-md-6">                <h1 class="page-title txt-color-blueDark">                    <i class="fa fa-table fa-fw "></i>                    General Settings                        <span>>                            Go Maintenance                        </span>                </h1>            </div>        </div>        <!-- widget grid -->        <section id="widget-grid" class="">            <!-- row -->            <div class="row">                <article class="col-md-offset-3 col-md-6">                    <!-- Widget ID (each widget will need unique ID)-->                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">                        <header>                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>                            <h2>Go Maintenance</h2>                        </header>                        <!-- widget div-->                        <div>                            <!-- widget edit box -->                            <div class="jarviswidget-editbox">                                <!-- This area used as dropdown edit box -->                            </div>                            <!-- end widget edit box -->                            <!-- widget content -->                            <div class="widget-body no-padding">                                <form id="bank" method="post" action="<?php echo base_url();?>general/go_maintenance" class="smart-form" novalidate="novalidate">                                    <?php echo ($this->session->userdata('success_message')) ?  $this->session->userdata('success_message') : ''; $this->session->unset_userdata('success_message');?>                                    <fieldset>                                        <section>                                            <label class="label">Active Break Upto</label>                                            <div class="form-group">                                                <div class='input-group date' id='go_maintenance'>                                                    <input type='text' class="form-control" />                                                    <span class="input-group-addon">                                                        <span class="glyphicon glyphicon-calendar"></span>                                                    </span>                                                </div>                                            </div>                                            <div class="form-group">                                                <label class="red"><?php echo form_error('txtNonBank');?></label>                                            </div>                                        </section>                                    </fieldset>                                    <footer>                                        <button type="submit" id="save" class="btn btn-primary">Go Maintenance</button>                                    </footer>                                </form>                            </div>                            <!-- end widget content -->                        </div>                        <!-- end widget div -->                    </div>                    <!-- end widget -->                    <!-- Widget ID (each widget will need unique ID)-->                </article>            </div>        </section>        <!-- end widget grid -->    </div>    <!-- END MAIN CONTENT --></div>