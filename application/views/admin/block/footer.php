
<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Finager <span class="hidden-xs"> - Tarek Raihan</span> © 20116-2017</span>
        </div>

        <div class="col-xs-6 col-sm-6 text-right hidden-xs">
            <div class="txt-color-white inline-block">
                <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                <div class="btn-group dropup">
                    <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                        <i class="fa fa-link"></i> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right text-left">
                        <li>
                            <div class="padding-5">
                                <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                                <div class="progress progress-micro no-margin">
                                    <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="padding-5">
                                <p class="txt-color-darken font-sm no-margin">Server Load</p>
                                <div class="progress progress-micro no-margin">
                                    <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="padding-5">
                                <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                                <div class="progress progress-micro no-margin">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="padding-5">
                                <button class="btn btn-block btn-default">refresh</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
            <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
            <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->



<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" id="maintains-modal">
    <div class="modal-dialog beta_modal" role="document">
        <div class="modal-content">
            <div class="maintains_pop_bg">

            </div>

        </div>

    </div>
</div>
<?php

    if ($this->session->userdata('admin_first_login') == '1' ){
        echo "<script>$(window).on('load',function(){
            $('#update_information_modal').modal({
                show: true,
                backdrop: 'static'
            });
        });</script>";
    }
?>

<!-- Modal -->
<div id="update_information_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog">
        <form id="update_admin_info" action="" method="post" enctype="multipart/form-data">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Please Fill Your Basic Information</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="txtFirstName">First Name</label>
                    <input type="text" class="form-control" name="txtFirstName" id="txtFirstName" placeholder="First Name" value ="<?php echo set_value('txtFirstName');?>" />
                </div>
                <div class="form-group">
                    <label class="red"><?php echo form_error('txtFirstName');?></label>
                </div>
                <div class="form-group">
                    <label for="txtLastName">Last Name</label>
                    <input type="text" class="form-control" name="txtLastName" id="txtLastName" placeholder="Last Name" value ="<?php echo set_value('txtLastName');?>" />
                </div>
                <div class="form-group">
                    <label class="red"><?php echo form_error('txtLastName');?></label>
                </div>
                <div class="form-group">
                    <label for="txtPhoneNo">Phone No</label>
                    <input type="tel" class="form-control" name="txtPhoneNo"  id="txtPhoneNo" placeholder="Phone No" value ="<?php echo set_value('txtPhoneNo');?>" />
                </div>
                <div class="form-group">
                    <label class="red"><?php echo form_error('txtPhoneNo');?></label>
                </div>

                <div class="form-group">
                    <label for="txtPassword">Password:</label>
                    <input type="password" class="form-control" name="txtPassword" id="txtPassword" value ="<?php echo set_value('txtPassword');?>" >
                </div>

                <div class="form-group">
                    <label class="red"><?php echo form_error('txtPhoneNo');?></label>
                </div>

                <div class="form-group">
                    <label for="txtConfirmPassword">Confirm Password:</label>
                    <input type="password" class="form-control" name="txtConfirmPassword" id="txtConfirmPassword" value ="<?php echo set_value('txtConfirmPassword');?>" >
                </div>

                <div class="form-group">
                    <label class="red"><?php echo form_error('txtConfirmPassword');?></label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" >Update</button>
                <a href="<?php echo base_url();?>backdoor/logout" class="btn btn-info" >Log Out</a>
            </div>
        </div>
        </form>
    </div>
</div>



<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url();?>resource/admin/js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="<?php echo base_url();?>resource/admin/js/jquery.min.js"></script>


<script src="<?php echo base_url();?>resource/admin/js/jquery-ui.min.js"></script>
<!-- BOOTSTRAP JS -->
<script src="<?php echo base_url();?>resource/admin/js/bootstrap/bootstrap.min.js"></script>

<!-- Moment JS -->
<script src="<?php echo base_url();?>resource/admin/js/moment-with-locales.min.js"></script>

<!--Boodstrap DateTimePicker JS-->
<script src="<?php echo base_url();?>resource/admin/js/bootstrap-datetimepicker.min.js"></script>

<!-- IMPORTANT: APP CONFIG -->
<script src="<?php echo base_url();?>resource/admin/js/app.config.js"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="<?php echo base_url();?>resource/admin/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>




<!-- CUSTOM NOTIFICATION -->
<script src="<?php echo base_url();?>resource/admin/js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="<?php echo base_url();?>resource/admin/js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/fastclick/fastclick.min.js"></script>



<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="<?php echo base_url();?>resource/admin/js/demo.min.js"></script>

<!-- MAIN APP JS FILE -->
<script src="<?php echo base_url();?>resource/admin/js/app.min.js"></script>

<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src="<?php echo base_url();?>resource/admin/js/speech/voicecommand.min.js"></script>

<!-- SmartChat UI : plugin -->
<script src="<?php echo base_url();?>resource/admin/js/smart-chat-ui/smart.chat.ui.min.js"></script>
<script src="<?php echo base_url();?>resource/admin/js/smart-chat-ui/smart.chat.manager.min.js"></script>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo base_url();?>resource/admin/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>resource/admin/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?php echo base_url();?>resource/admin/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url();?>resource/admin/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>resource/admin/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

<script src="<?php echo base_url();?>resource/admin/js/plugin/summernote/summernote.min.js"></script>

<script src="<?php echo base_url(); ?>resource/admin/js/fileinput.min.js"></script>



<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();

        /* // DOM Position key index //

         l - Length changing (dropdown)
         f - Filtering input (search)
         t - The Table! (datatable)
         i - Information (records)
         p - Pagination (paging)
         r - pRocessing
         < and > - div elements
         <"#id" and > - div with an id
         <"class" and > - div with a class
         <"#id.class" and > - div with an id and class

         Also see: http://legacy.datatables.net/usage/features
         */

        /* BASIC ;*/
        var responsiveHelper_dt_basic = undefined;
        var responsiveHelper_datatable_fixed_column = undefined;
        var responsiveHelper_datatable_col_reorder = undefined;
        var responsiveHelper_datatable_tabletools = undefined;

        var breakpointDefinition = {
            tablet : 1024,
            phone : 480
        };

        $('#dt_basic').dataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
            "t"+
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth" : true,
            "preDrawCallback" : function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_dt_basic) {
                    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_dt_basic.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_dt_basic.respond();
            }
        });

        /* END BASIC */

        /* COLUMN FILTER  */
        var otable = $('#datatable_fixed_column').DataTable({
            //"bFilter": false,
            //"bInfo": false,
            //"bLengthChange": false
            //"bAutoWidth": false,
            //"bPaginate": false,
            //"bStateSave": true // saves sort state using localStorage
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
            "t"+
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth" : true,
            "preDrawCallback" : function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_fixed_column) {
                    responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_datatable_fixed_column.respond();
            }

        });

        // custom toolbar
        $("div.toolbar").html('<div class="text-right"><img src="<?php echo base_url();?>resource/admin/img/logo.png" alt="Tarek Raihan" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');

        // Apply the filter
        $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {

            otable
                .column( $(this).parent().index()+':visible' )
                .search( this.value )
                .draw();

        } );
        /* END COLUMN FILTER */

        /* COLUMN SHOW - HIDE */
        $('#datatable_col_reorder').dataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
            "t"+
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "autoWidth" : true,
            "preDrawCallback" : function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_col_reorder) {
                    responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_datatable_col_reorder.respond();
            }
        });

        /* END COLUMN SHOW - HIDE */

        /* TABLETOOLS */
        $('#datatable_tabletools').dataTable({

            // Tabletools options:
            //   https://datatables.net/extensions/tabletools/button_options
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
            "t"+
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
            "oTableTools": {
                "aButtons": [
                    "copy",
                    "csv",
                    "xls",
                    {
                        "sExtends": "pdf",
                        "sTitle": "SmartAdmin_PDF",
                        "sPdfMessage": "SmartAdmin PDF Export",
                        "sPdfSize": "letter"
                    },
                    {
                        "sExtends": "print",
                        "sMessage": "Generated by Tarek Raihan <i>(press Esc to close)</i>"
                    }
                ],
                "sSwfPath": "<?php echo base_url();?>resource/admin/js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
            },
            "autoWidth" : true,
            "preDrawCallback" : function() {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_datatable_tabletools) {
                    responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
                }
            },
            "rowCallback" : function(nRow) {
                responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
            },
            "drawCallback" : function(oSettings) {
                responsiveHelper_datatable_tabletools.respond();
            }
        });

        /* END TABLETOOLS */

    })

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<script type="text/javascript">

    //message hide
    $("#message").show();
    setTimeout(function(){
        $('#message').fadeOut(5000);
    });

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();

        /*
         * SUMMERNOTE EDITOR
         */

        $('.summernote').summernote({
            height : 180,
            focus : false,
            tabsize : 2
        });

        /*
         * MARKDOWN EDITOR
         */

       /* $("#mymarkdown").markdown({
            autofocus:false,
            savable:true
        })
*/

//        Call Bootstrap DateTimePIcker For admin/general/go_maintenance

        $('#go_maintenance').datetimepicker({
            format: 'DD-MM-YYYY hh:mm A',
            minDate : moment().valueOf(),
            sideBySide: false,
            useCurrent: false,
            showClose: true,
            toolbarPlacement: 'bottom'

        });

        $('#go_live').datetimepicker({
            format: 'DD-MM-YYYY hh:mm A',
            minDate : moment().valueOf(),
            sideBySide: false,
            useCurrent: false,
            showClose: true,
            toolbarPlacement: 'bottom'

        });


    })

</script>



</body>

</html>