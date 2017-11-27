<?php
$id=$this->uri->segment(3, 0);
if(empty($id)){
    $id = rand(8,50);
}
if(!empty($id) && is_numeric($id) ){
    $institution_info = $this->Front_end_select_model->Select_bank_non_bank_info_by_id($id,0);
    $home_loan = $this->Front_end_select_model->select_all_home_loan_by_bank_non_bank_id($id,0);
    $personal_loan = $this->Front_end_select_model->select_all_personal_loan_by_bank_non_bank_id($id,0);
    $auto_loan = $this->Front_end_select_model->select_all_auto_loan_by_bank_non_bank_id($id,0);
    $education_loan = $this->Front_end_select_model->select_all_education_loan_by_bank_non_bank_id($id,0);
    $fdrs = $this->Front_end_select_model->select_all_fdr_by_bank_non_bank_id($id,0);
    $all_dps = $this->Front_end_select_model->Select_dps_info_by_id($id,0);
    $millionaires = $this->Front_end_select_model->Select_all_millionaire_info_by_id($id,0);
    $money_maximizers = $this->Front_end_select_model->Select_all_money_maximizer_info_by_id($id,0);
    $monthly_benefits = $this->Front_end_select_model->Select_all_monthly_benefit_info_by_id($id,0);
    //pr($monthly_benefits->result());die;


}else{
    redirect(base_url().'My404');
}

?>
<style>
    .nav > li > a:focus, .nav > li > a:hover {
        background-color: #ddd !important;
    }
</style>
<section id="bank_details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="bank_info_left">
                    <div class="bank_info_logo">
                        <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $institution_info['bank_logo']; ?>" alt="<?php echo $institution_info['head_office_address']; ?>">
                    </div>
                    <div class="bank_address">
                        <p><b>Corporate Office:</b> <?php echo $institution_info['head_office_address']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="bank_info_right">
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Bank Name:</b><br/>
                            <?php echo $institution_info['bank_name']; ?>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Known As:</b><br/>
                            <?php echo $institution_info['known_as']; ?>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>SWIFT Code:</b><br/>
                            <?php echo $institution_info['swift_code']; ?>
                        </div>
                    </div>

                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Stock Code:</b><br/>
                            <?php
                                if($institution_info['stock_code'] == 'N/A'){
                                    echo 'Not Available';
                                }else{
                                    ?>
                                    <a href="http://dsebd.org/displayCompany.php?name=<?php echo $institution_info['stock_code'];?>" target="_blank"><?php echo $institution_info['stock_code'];?></a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Category:</b><br/>
                            <?php echo $institution_info['category']; ?>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Bank Type & Origin:</b><br/>
                            <?php echo $institution_info['bank_type_and_origin']; ?>
                        </div>
                    </div>

                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Bank Phone:</b><br/>

                              <a href="tel:<?php echo $institution_info['phone_no'];?>"><?php echo $institution_info['phone_no'];?></a>
                            <?php
                                if(!empty($institution_info['alternate_phone_no'])){
                                    ?>
                                    , <a href="tel:<?php echo $institution_info['alternate_phone_no'];?>"><?php echo $institution_info['alternate_phone_no'];?></a>
                                    <?php
                                }
                            ?>


                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Bank Fax:</b><br/>
                            <?php echo $institution_info['fax_no']; ?>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Bank  Email:</b><br/>
                            <a href="mailto:<?php echo $institution_info['email_address']; ?>" target="_top"><?php echo $institution_info['email_address']; ?></a>
                        </div>
                    </div>

                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Web Address:</b><br/>
                            <a href="<?php echo $institution_info['web_address']; ?>" target="_blank"><?php echo $institution_info['web_address']; ?></a>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Call Center:</b><br/>
                            <a href="tel:<?php echo $institution_info['call_center'];?>"><?php echo $institution_info['call_center'];?></a>
                            <?php  /*echo ($institution_info['not_available_call_center']) ? 'Not Available' :$institution_info['call_center'] ; */ ?>
                        </div>
                    </div>
                    <div class="col-md-4 nopadding">
                        <div class="bank_info_box">
                            <b>Routing No:</b><br/>
                            <!--<a href="#RoutingNoList" aria-controls="settings" role="tab" data-toggle="tab">--><?php echo $institution_info['routing_no']; ?><!--</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="hline"></div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="col-md-9">
        <section id="bank_tab_wrapper">
            <!-- Nav tabs -->
            <ul id="breadcrumbs-two" class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#Info" aria-controls="home" role="tab" data-toggle="tab">Info</a></li>
                <li role="presentation"><a href="#Loan" aria-controls="profile" role="tab" data-toggle="tab">Loan</a></li>
                <li role="presentation"><a href="#Investment" aria-controls="messages" role="tab" data-toggle="tab">Investment</a></li>
                <li role="presentation"><a href="#Cards" aria-controls="settings" role="tab" data-toggle="tab">Cards</a></li>
                <li role="presentation"><a href="#Accounts" aria-controls="settings" role="tab" data-toggle="tab">Accounts</a></li>
                <li role="presentation"><a href="#Services" aria-controls="settings" role="tab" data-toggle="tab">Services</a></li>
<!--                <li role="presentation"><a href="#ScheduleCharges" aria-controls="settings" role="tab" data-toggle="tab">Schedule of Charges</a></li>-->
<!--                <li role="presentation"><a href="#InterestRate" aria-controls="settings" role="tab" data-toggle="tab">Interest Rate</a></li>-->
<!--                <li role="presentation"><a href="#RoutingNoList" aria-controls="settings" role="tab" data-toggle="tab">Routing No List</a></li>-->
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Info">
                    <div class="bank_info_tabBody">
                        <div class="bank_info_details">
                            <h3> <?php echo $institution_info['bank_name']; ?> Information</h3>
                            <p>
                                <?php echo $institution_info['basic_information']; ?>
                            </p>
                            <br/><br/>
                            <h3> <?php echo $institution_info['bank_name']; ?> Branch Locations</h3>
                            <div class="bank_info_map">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_map.jpg" alt="AB Bank map" />
                            </div>
                            <br/><br/>
                            <h3> <?php echo $institution_info['bank_name']; ?> ATM Locations</h3>
                            <div class="bank_info_map">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_map.jpg" alt="AB Bank map" />
                            </div>
							<h3>HISTORY OF  <?php echo $institution_info['bank_name']; ?></h3>
							<p>Below is a list of some important events in banks history, including mergers and acquisitions.</p>
							<table class="table">
								<tbody>
								  <tr>
									<td>Jan 01, 1824</td>
									<td>Institution established: Original name: Chemical Bank & Trust Company</td>
								  </tr>      
								  <tr class="info">
									<td>Oct 18, 1954</td>
									<td>Changed name to Chemical Corn Exchange Bank</td>
								  </tr>
								  <tr>
									<td>Aug 08, 1959</td>
									<td>Changed name to Chemical Bank New York Trust Company</td>
								  </tr>
								  <tr class="info">
									<td>Jan 18, 1975</td>
									<td>Acquired Security National Bank (7113) in Hempstead, NY</td>
								  </tr>
								</tbody>
							</table>
							<p class="bank_details_more"><a href="#">View 36 More Events in Banks History…</a></p>
							<h3><?php echo $institution_info['bank_name']; ?> REVIEWS & COMPLAINTS</h3>
							<div class="col-md-1">
								<img src="<?php echo base_url(); ?>resource/front_end/images/Bank-Details-Empty.png" alt="User Image">
							</div>
							<div class="col-md-11">
								<p><span class="">Marie Woodson.</span> <span>4 August 2017</span></p>
								<p>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</p>
							</div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane bank_info_details" id="Loan">
                    <h3>Home Loan</h3>
                    <?php
                    if(count($home_loan->result()) > 0){
                    foreach($home_loan->result() as $home ) {
                        $interest =($home->is_fixed =='1')? $home->interest_rate_fixed.' % ' : $home->interest_rate_min.'% (Min), <br> '.$home->interest_rate_max.'% (Max)';
                        ?>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $home->bank_logo; ?>" alt="<?php echo $home->bank_name; ?> Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4><?php echo $home->home_loan_name; ?></h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>Loan type:</b></td>
                                            <td> <?php echo $home->home_loan_looking_for; ?></td>
                                        </tr>

                                        <tr>
                                            <td><b>Minimum loan amount:</b></td>
                                            <td> BDT <?php echo number_format( $home->min_loan_amount ); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Maximum loan amount:</b></td>
                                            <td> BDT <?php echo number_format( $home->max_loan_amount ); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Interest rate:</b></td>
                                            <td><?php echo $interest; ?></td>
                                        </tr>


                                        <tr>
                                            <td><b>Minimum loan period:</b></td>
                                            <td> N/A</td>
                                        </tr>

                                        <tr>
                                            <td><b>Maximum loan period:</b></td>
                                            <td> N/A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <?php }

                        }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>Personal Loan</h3>
                    <?php
                    if(count($personal_loan->result()) > 0){
                    foreach($personal_loan->result() as $personal ) {
                        //pr($personal);die;
                    $interest =($personal->is_fixed =='1')? $personal->interest_rate_fixed.' % ' : $personal->interest_rate_min.'% (Min), <br> '.$personal->interest_rate_max.'% (Max)';
                    ?>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $personal->bank_logo; ?>" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4><?php echo $personal->personal_loan_name;?></h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>Loan Type:</b></td>
                                            <td><?php echo $personal->personal_loan_looking_for;?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Minimum loan amount:</b></td>
                                            <td>BDT <?php echo number_format( $personal->min_loan_amount );?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Maximum loan amount:</b></td>
                                            <td>BDT <?php echo number_format($personal->max_loan_amount);?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Interest rate:</b></td>
                                            <td><?php echo $interest;?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>Auto Loan</h3>
                    <?php
                    if(count($auto_loan->result()) > 0){
                    foreach($auto_loan->result() as $auto ) {
                        //pr($auto);die;
                    $interest =($auto->is_fixed =='1')? $auto->interest_rate_fixed.' %' : $auto->interest_rate_min.'% (Min), <br> '.$auto->interest_rate_max.'% (Max)';
                    ?>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $auto->bank_logo; ?>" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4><?php echo $auto->auto_loan_name;?></h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>Loan Type :</b></td>
                                            <td><?php echo $auto->i_want;?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Minimum loan amount:</b></td>
                                            <td>BDT <?php echo number_format($auto->min_loan_amount);?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Maximum loan amount:</b></td>
                                            <td>BDT <?php echo number_format($auto->max_loan_amount);?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Interest rate:</b></td>
                                            <td><?php echo $interest;?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Minimum Down payment:</b></td>
                                            <td><?php echo $auto->downpayment;?> %</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>Education Loan</h3>
                    <?php
                    if(count($education_loan->result()) > 0){
                    foreach($education_loan->result() as $education ) {
                        //pr($education);die;
                    $interest =($education->is_fixed =='1')? $education->fixed_interest.' %' : $education->min_interest.'% (Min), <br> '.$education->max_interest.'% (Max)';
                    ?>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $education->bank_logo; ?>" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4><?php echo $education->loan_name;?></h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td><b>Minimum loan amount:</b></td>
                                            <td>BDT <?php echo number_format($education->min_loan_amount);?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Maximum loan amount:</b></td>
                                            <td>BDT <?php echo number_format($education->max_loan_amount);?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Interest rate:</b></td>
                                            <td><?php echo $interest;?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Minimum Down-payment:</b></td>
                                            <td><?php echo ($education->down_payment == 'N/A') ? 'Not Applicable' : $education->down_payment.'%';?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Min Period:</b></td>
                                            <td><?php echo $education->min_tenure.' Year';?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Max Period:</b></td>
                                            <td><?php echo $education->max_tenure.' Years';?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                </div>
                <div role="tabpanel" class="tab-pane bank_info_details" id="Investment">
                    <h3>FDR</h3>
                    <?php
                    if(count($fdrs->result()) > 0){
                        foreach($fdrs->result() as $fdr ) {

                            $min_amount = ($fdr->no_limit_min_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->min_amount);
                            $max_amount = ($fdr->no_limit_max_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->max_amount);
                            ?>
                            <div class="col-md-6">
                                <div class="bank_loan_details">
                                    <div class="col-md-2 nopadding">
                                        <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $fdr->bank_logo; ?>" alt="AB Bank Logo" />
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <h4><?php echo $fdr->bank_name;?> FDR</h4><br/>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td><b>Minimum Amount:</b></td>
                                                <td><?php echo $min_amount;?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Amount:</b></td>
                                                <td><?php echo $max_amount;?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Interest Rate:</b></td>
                                                <td><?php echo $fdr->interest_rate;?> %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Tenure:</b></td>
                                                <td><?php echo $fdr->tenure;?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Minimum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Loan Facility:</b></td>
                                                <td><?php echo ($fdr->loan_facility) ? $fdr->loan_facility.' % of the Deposited Amount' : 'N/A';?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>DPS</h3>
                    <?php
                    if(count($all_dps->result()) > 0){
                        foreach($all_dps->result() as $dps ) {

                            //$min_amount = ($fdr->no_limit_min_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->min_amount);
                            //$max_amount = ($fdr->no_limit_max_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->max_amount);
                            ?>
                            <div class="col-md-6">
                                <div class="bank_loan_details">
                                    <div class="col-md-2 nopadding">
                                        <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $dps->bank_logo; ?>" alt="AB Bank Logo" />
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <h4><?php echo $dps->bank_name;?> DPS</h4><br/>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td><b>Minimum Amount:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Amount:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Interest Rate:</b></td>
                                                <td><?php echo $dps->interest_rate;?> %</td>
                                            </tr>
                                            <tr>
                                                <td><b>Minimum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Loan Facility:</b></td>
                                                <td><?php echo ($dps->loan_facility) ? $dps->loan_facility.' % of the Deposited Amount' : 'N/A';?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>Lakhpoti & Millionaire Scheme</h3>
                    <?php
                    if(count($millionaires->result()) > 0){
                        foreach($millionaires->result() as $millionaire ) {

                            //$min_amount = ($fdr->no_limit_min_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->min_amount);
                            //$max_amount = ($fdr->no_limit_max_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->max_amount);
                            ?>
                            <div class="col-md-6">
                                <div class="bank_loan_details">
                                    <div class="col-md-2 nopadding">
                                        <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $millionaire->bank_logo; ?>" alt="AB Bank Logo" />
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <h4><?php echo $millionaire->millionaire_info_name;?></h4><br/>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td><b>Minimum Amount:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Amount:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Interest Rate:</b></td>
                                                <td><?php echo ($millionaire->interest_rate) ? $millionaire->interest_rate.' % ' : ' N/A';?> </td>
                                            </tr>
                                            <tr>
                                                <td><b>Minimum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Loan Facility:</b></td>
                                                <td><?php echo ($millionaire->loan_facility) ? $millionaire->loan_facility.' % of the Deposited Amount' : 'N/A';?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>Money Maximizer</h3>
                    <?php
                    if(count($money_maximizers->result()) > 0){
                        foreach($money_maximizers->result() as $money_maximizer ) {

                            //$min_amount = ($fdr->no_limit_min_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->min_amount);
                            //$max_amount = ($fdr->no_limit_max_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->max_amount);
                            ?>
                            <div class="col-md-6">
                                <div class="bank_loan_details">
                                    <div class="col-md-2 nopadding">
                                        <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $money_maximizer->bank_logo; ?>" alt="AB Bank Logo" />
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <h4><?php //echo $money_maximizer->deposit_name;?></h4><br/>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td><b>Minimum Amount:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Amount:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Interest Rate:</b></td>
                                                <td>N/A </td>
                                            </tr>
                                            <tr>
                                                <td><b>Minimum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Loan Facility:</b></td>
                                                <td><?php echo ($money_maximizer->credit_facility) ? $money_maximizer->credit_facility.' % of the Deposited Amount' : 'N/A';?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <h3>Monthly Benefit Scheme</h3>
                    <?php
                    if(count($monthly_benefits->result()) > 0){
                        foreach($monthly_benefits->result() as $monthly_benefit ) {

                            //$min_amount = ($fdr->no_limit_min_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->min_amount);
                            //$max_amount = ($fdr->no_limit_max_amount == 1) ? 'No Limit' : 'BDT '.number_format($fdr->max_amount);
                            ?>
                            <div class="col-md-6">
                                <div class="bank_loan_details">
                                    <div class="col-md-2 nopadding">
                                        <img src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $monthly_benefit->bank_logo; ?>" alt="AB Bank Logo" />
                                    </div>
                                    <div class="col-md-10 nopadding">
                                        <h4><?php echo $monthly_benefit->deposit_name;?></h4><br/>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td><b>Minimum Amount:</b></td>
                                                <td><?php echo $monthly_benefit->min_amount; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Amount:</b></td>
                                                <td><?php echo $monthly_benefit->max_amount; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Interest Rate:</b></td>
                                                <td>N/A </td>
                                            </tr>
                                            <tr>
                                                <td><b>Minimum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Maximum Period:</b></td>
                                                <td>N/A</td>
                                            </tr>
                                            <tr>
                                                <td><b>Loan Facility:</b></td>
                                                <td><?php echo ($monthly_benefit->loan_facility != 'N/A') ? $monthly_benefit->loan_facility.' % of the Deposited Amount' : 'N/A';?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }else{?>
                        <br/><div class="alert alert-warning text-center" role="alert">No data found !!</div>
                    <?php }?>
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                    <br/>
                </div>
                <div role="tabpanel" class="tab-pane bank_info_details" id="Cards">
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_card.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Credit Card</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Purchase Interest Rate:</td>
                                        <td>Cash Advance Limit:</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Advance Interest Rate:</td>
                                        <td>Annual Fee:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Bank Transfer Interest Rate:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_card.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Credit Card</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Purchase Interest Rate:</td>
                                        <td>Cash Advance Limit:</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Advance Interest Rate:</td>
                                        <td>Annual Fee:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Bank Transfer Interest Rate:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_card.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Credit Card</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Purchase Interest Rate:</td>
                                        <td>Cash Advance Limit:</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Advance Interest Rate:</td>
                                        <td>Annual Fee:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Bank Transfer Interest Rate:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_card.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Credit Card</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Purchase Interest Rate:</td>
                                        <td>Cash Advance Limit:</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Advance Interest Rate:</td>
                                        <td>Annual Fee:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Bank Transfer Interest Rate:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane bank_info_details" id="Accounts">
                    <img src="<?php echo base_url(); ?>resource/front_end/images/no-data-found.jpg" alt="Not Found" />
                </div>
                <div role="tabpanel" class="tab-pane" id="Services">
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/ab_bank_sm_logo.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Home Construction Loan</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Amount:</td>
                                        <td>Payable Amount:</td>
                                    </tr>
                                    <tr>
                                        <td>Interest Rate:</td>
                                        <td>Down Payment:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">EMI:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_card.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Credit Card</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Purchase Interest Rate:</td>
                                        <td>Cash Advance Limit:</td>
                                    </tr>
                                    <tr>
                                        <td>Cash Advance Interest Rate:</td>
                                        <td>Annual Fee:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Bank Transfer Interest Rate:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/ab_bank_sm_logo.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Deposit Pension Scheme</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Installment Amount:</td>
                                        <td>Accrued Interest:</td>
                                    </tr>
                                    <tr>
                                        <td>Number of Installment:</td>
                                        <td>Loan Facility:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Maturity Amount:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bank_loan_details">
                            <div class="col-md-2 nopadding">
                                <img src="<?php echo base_url(); ?>resource/front_end/images/bank_info_card.jpg" alt="AB Bank Logo" />
                            </div>
                            <div class="col-md-10 nopadding">
                                <h4>AB Bank Credit Card</h4><br/>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>Amount:</td>
                                        <td>Payable Amount:</td>
                                    </tr>
                                    <tr>
                                        <td>Interest Rate:</td>
                                        <td>Down Payment:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">EMI:</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div role="tabpanel" class="tab-pane" id="RoutingNoList">-->
                <!--    <div class="col-md-12">-->
                <!--        --><?php //echo $institution_info["routing_no_list"];?>
                <!--    </div>-->
                <!---->
                <!--</div>-->
            </div>
        </section>
    </div>
	<div class="col-md-3">
		<div class="bank_details_right">
			<div class="bank_details_head">
				<p>POPULAR BRANCHES</p>
			</div>
			<div class="bank_details_right_body">
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
			</div>
			<div class="bank_details_head">
				<p>NEW BRANCHES</p>
			</div>
			<div class="bank_details_right_body">
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
			</div>
			<div class="bank_details_head">
				<p>CLOSED BRANCHES</p>
			</div>
			<div class="bank_details_right_body">
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
				<p>
					South Plainfield<br>
					5201 Stelton Road, South Plainfield, NJ 07080
				</p>
			</div>
			<div class="bank_details_head">
                <p>BANK RATING & CUSTOMER REVIEWS</p>
            </div>
            <div class="bank_details_right_body">
                <span>3.2 / 5</span><br>
				<span class="bank_details_star">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</span>
                <div class="bank_details_review">
                    Bank rating displayed here is the average value for all
                    Chase Bank branchs. A total of 73 customers had case
                    their vote for 5227 branches and in average, Chase Bank
                    got a score of 3.2 out of 5 stars. The bank has 12
                    reviews or customer complaints filed.
                </div>
            </div>
            <div class="bank_details_head">
                <p>LATEST NEWS</p>
            </div>
            <div class="bank_details_right_body">
                <div class="bank_details_review">
                    Bank rating displayed here is the average value for all
                    Chase Bank branchs. A total of 73 customers had case
                    their vote for 5227 branches and in average, Chase Bank
                    got a score of 3.2 out of 5 stars. The bank has 12
                    reviews or customer complaints filed.
                </div>
            </div>
            <div class="bank_details_head">
                <p>CIRCULAR</p>
            </div>
            <div class="bank_details_right_body">
                <div class="bank_details_review">
                    Bank rating displayed here is the average value for all
                    Chase Bank branchs. A total of 73 customers had case
                    their vote for 5227 branches and in average, Chase Bank
                    got a score of 3.2 out of 5 stars. The bank has 12
                    reviews or customer complaints filed.
                </div>
            </div>
            <div class="bank_details_head">
                <p>SUBSIDIARIES</p>
            </div>
            <div class="bank_details_right_body">
                <div class="bank_details_review">
                    Bank rating displayed here is the average value for all
                    Chase Bank branchs. A total of 73 customers had case
                    their vote for 5227 branches and in average, Chase Bank
                    got a score of 3.2 out of 5 stars. The bank has 12
                    reviews or customer complaints filed.
                </div>
            </div>
		</div>
	</div>
</div>