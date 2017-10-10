<?php
$admin_role = $this->session->userdata('admin_role');
echo $admin_role;
$module_id =$this->Select_model->get_admin_user_modules($this->session->userdata('admin_user_id'));
$modules = array();
foreach($module_id as $k){
    foreach($k as $v){
        array_push($modules,$v);
    }
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
            <li>Home</li><li>Backdoor</li><li>Dashboard</li>
        </ol>


    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-table fa-fw "></i>
                    Backdoor
                        <span>>
                            Dashboard
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
                    <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        <header>
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Dashboard </h2>

                        </header>

                        <!-- widget div-->
                        <div>

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body">

                                <div class="row">
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 1){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                    ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-credit-card fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                                $this->Common_model->table_name = 'card_card_informations';
                                                                echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Credit Card</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>card/card_info_list">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 2){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-green">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-credit-card fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'debit_card_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Debit Card</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>debit_card/card_info_list">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 3){
                                                $i = 1;
                                            }
                                        }
                                    }

                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-yellow">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-home fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'home_loan_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Home Loan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>home_loan/loan_list">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 4){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-red">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-car fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'auto_loan_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Auto Loan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>auto_loan/loan_list">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 5){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-skyblue">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-car fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'personal_loan_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Personal Loan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>personal_loan/loan_list/">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 6){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-firoza">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-car fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'fdr_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Fixed Deposit</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>fdr/fdr_info_list/">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 7){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-aqua">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-car fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'dps_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total DPS</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>dps/deposit_list">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 8){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-olive">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-car fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'millionaire_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Millionaire Scheme</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>millionaire/deposit_list/">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    $i = 0;
                                    if( $admin_role == 'super admin' || $admin_role == 'admin'){
                                        $i = 1;
                                    }else if(count($modules) > 0){
                                        foreach($modules as $module){
                                            if($module == 9){
                                                $i = 1;
                                            }
                                        }
                                    }
                                    if($i > 0){
                                        ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-deepgreen">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <i class="fa fa-graduation-cap fa-5x"></i>
                                                    </div>
                                                    <div class="col-xs-9 text-right">
                                                        <div class="huge">
                                                            <?php
                                                            $this->Common_model->table_name = 'education_loan_info';
                                                            echo $this->Common_model->count_all();
                                                            ?>
                                                        </div>
                                                        <div>Total Education Loan</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo base_url();?>education_loan/loan_list/">
                                                <div class="panel-footer">
                                                    <span class="pull-left">View Details</span>
                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
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
