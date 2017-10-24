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
            <li>General</li><li>Bank or Non Bank</li><li> Branch List</li>
        </ol>
    </div>
    <!-- END RIBBON -->
    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Bank or Non Bank
                        <span>>
                             Branch List
                        </span>
                </h1>
            </div>

        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">
            <!-- row -->
            <div class="row">

                <!-- NEW WIDGET START -->
                <article class="col-md-12">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Branch Information  List </h2>

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

                                <div class="table-responsive">
                                    <table id="dt_basic" class="table table-striped table-bordered table-hover " width="100%">
                                        <thead>
                                        <tr>
                                            <th data-hide="phone">No.</th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Institution Name </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Logo </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Branch Name</th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Branch Address </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Phone No </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Fax No </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Email Address </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Branch Opening </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Show As </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Routing No </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Created By </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i> Modified By </th>
                                            <th data-class="expand"><i class="text-muted hidden-md hidden-sm hidden-xs"></i>Last Modified </th>
                                            <th data-hide="phone"><i class="fa fa-pencil-square-o text-muted hidden-md hidden-sm hidden-xs"></i> Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $query = $this->Select_model->select_all_institution_branch_info_list();
                                        $sl=1;
                                        foreach ($query->result() as $row)
                                        {
                                            $institution_name = '';
                                            if($row->is_non_bank == 1){
                                                $institution_name = $row->non_bank_name;
                                            }else{
                                                $institution_name = $row->bank_name;
                                            }

                                            $logo = '';
                                            if($row->is_non_bank == 1){
                                                $logo = $row->non_bank_logo;
                                            }else{
                                                $logo = $row->bank_logo;
                                            }
                                            $show_as = '';
                                            if($row->show_as_popular_branch == 1){
                                                $show_as = 'Popular Branch';
                                            }else if($row->show_as_new_branch == 1){
                                                $show_as = 'New Branch';
                                            }else if($row->show_as_closed_branch == 1){
                                                $show_as = 'Closed Branch';
                                            }
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $sl; ?></td>
                                                <td ><?php echo $institution_name;?></td>
                                                <td ><img src="<?php echo base_url(); ?>/resource/common_images/bank_logo/<?php if(empty($logo)){echo 'dummy_logo.png';}else{echo $logo;}?>" style="height:auto; width:80px;"></td>
                                                <td ><?php echo $row->branch_name;?></td>
                                                <td ><?php echo $row->branch_address;?></td>
                                                <td ><?php echo $row->phone_no;?></td>
                                                <td ><?php echo $row->fax_no;?></td>
                                                <td ><?php echo $row->email_address;?></td>
                                                <td ><?php echo date("j F Y",strtotime($row->date_of_opening));?></td>
                                                <td ><?php echo $show_as;?></td>
                                                <td ><?php echo $row->routing_no;?></td>
                                                <td class="center"><?php echo $row->created_first_name.' '.$row->created_last_name; ?></td>
                                                <td class="center"><?php echo $row->modified_first_name.' '.$row->modified_last_name; ?></td>
                                                <td class="center"><?php echo date("j F Y",strtotime($row->modified)); ?></td>
                                                <td><a href="<?php echo base_url();?>general/update_bank_non_bank_branch_info/?id=<?php echo $row->id;?>&non_bank=0" class="edit"><i class="fa fa-pencil-square-o fa-lg"></i></a><a href="" onclick="return confirm('Delete Action off for security reason.')" class="delete"> <i class="fa fa-trash-o fa-lg"></i></a></td>
                                            </tr>
                                            <?php
                                            $sl++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>

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