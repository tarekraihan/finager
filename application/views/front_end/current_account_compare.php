<?php
$id = $current_account1['id'] ;
$result = $this->Front_end_select_model->select_current_account_info_details($id);
$first_current_account = $result->row();

$id1 = $current_account2['id'];
$result1 = $this->Front_end_select_model->select_current_account_info_details($id1);
$second_current_account = $result1->row();
$first_bank_name = "";
$first_bank_logo = "";
if($first_current_account->is_non_bank == 1){
    $first_bank_name = $first_current_account->non_bank_name;
    $first_bank_logo = $first_current_account->non_bank_logo;
}else{
    $first_bank_name = $first_current_account->bank_name;
    $first_bank_logo = $first_current_account->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_current_account->is_non_bank == 1){
    $second_bank_name = $second_current_account->non_bank_name;
    $second_bank_logo = $second_current_account->non_bank_logo;
}else{
    $second_bank_name = $second_current_account->bank_name;
    $second_bank_logo = $second_current_account->bank_logo;
}

?>
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>compare-current-account/<?php echo $first_current_account->slug;?>.html"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></a> </p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
							
						</td>
						<td><a href="<?php echo base_url();?>compare-current-account/<?php echo $second_current_account->slug;?>.html"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></a> </td>
					</tr>			
				</table>
			</div>
		</div>
	</section>
	
	<section id="basic_info">
		<div class="container">
			
			<div class="row">
				<h3 class="text-center">  <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> User Reviews <img class="Card-Compare-hr" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<table class="table text-center">
					<tr>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
						<td><b> Rating </b></td>
						<td> <p class="text-center">	<i class="fa fa-star-o"></i> 	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>   	<i class="fa fa-star-o"></i>  </p> </td>
					</tr>
				</table>
			</div>
		
			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Current account</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
				<div class="table-responsive">
					<table class="table table-bordered table-hover text-center table-align  compare_table">
						<tr>
							<td class="abc"><b> Bank Name </b></td>
							<td> <?php echo $first_bank_name;?> </td>
						</tr>
						
						<tr>
							<td><b> Product Name</b></td>
							<td><?php echo $first_current_account->current_account_name;?></td>
						</tr>
						
						<tr>
							<td><b> A/C Opening Balance</b></td>
							<td> BDT <?php echo number_format($first_current_account->opening_balance)?> </td>
						</tr>
						
						<tr>
							<td><b> Total Branch</b></td>
							<td> <?php echo $first_current_account->total_branch;?> </td>
						</tr>
                        <tr>
                            <td><b>Fund Transfer</b></td>
                            <td> <?php echo $first_current_account->fund_transfer;?></td>
                        </tr>
						<tr>
							<td><b>Overdraft Facility</b></td>
							<td><?php echo $first_current_account->overdraft_facility;?> </td>
						</tr>
					</table>
				</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
						<table class="table table-bordered table-hover text-center table-align  compare_table">

                            <tr>
                                <td class="abc"><b> Bank Name </b></td>
                                <td> <?php echo $second_bank_name;?> </td>
                            </tr>

							<tr>
								<td><b> Product Name</b></td>
								<td><?php echo $second_current_account->current_account_name;?></td>
							</tr>

							<tr>
								<td><b> A/C Opening Balance</b></td>
								<td> BDT <?php echo number_format($second_current_account->opening_balance)?> </td>
							</tr>

							<tr>
								<td><b> Total Branch</b></td>
								<td> <?php echo $second_current_account->total_branch;?> </td>
							</tr>
							<tr>
								<td><b>Fund Transfer</b></td>
								<td> <?php echo $second_current_account->fund_transfer;?></td>
							</tr>
							<tr>
								<td><b>Overdraft Facility</b></td>
								<td><?php echo $second_current_account->overdraft_facility;?> </td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<div class="row">
                <h3 class="text-center compare-feature-bar"> <span>Features</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_current_account->features;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_current_account->features;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Privilege</span> </h3>
                <div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
						<?php echo $first_current_account->privilege;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_current_account->privilege;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Fees and Charges</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_current_account->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_current_account->fees_and_charges;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Requirements</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive">
                        <?php echo $first_current_account->requirements;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive">
                        <?php echo $second_current_account->requirements;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Terms and Conditions</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_current_account->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_current_account->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
                <h3 class="text-center compare-feature-bar margin-top-50"> <span>Review</span> </h3>
				<div class="col-md-6 col-sm-6 tble-no-padding-left">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_current_account->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 tble-no-padding-right">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_current_account->review;?>
					</div>
				</div>
			</div>

			<div class="row comparision-subscribe">
				<h4 class="text-center">  Send this comparison to yourself. Enter your email here.  </h4>
				<div class="col-md-12">
					<div class="comparison_email">
						<div class="form-group col-md-11">
							<input type="email" class="form-control" id="send_comparison_email" placeholder="Enter your email here">
						</div>
						<div class="form-group col-md-1">
							<button type="submit" class="btn btn-default" id="send_comparison_button">SEND </button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<script>
    $(document).ready(function() {

        $('[data-toggle="toggle"]').change(function(){
            $(this).parents().next('.hide').toggle();
        });
    });
</script>
<script type="text/javascript">

    //for left bar query
    $(document).ready(function () {

        $('[data-toggle="toggle"]').change(function(){
            $(this).parents().next('.hide').toggle();
        });

        var outputSpan = $('#spanOutPut');
        var sliderElement = $('#slider');


        sliderElement.slider({
            range: false,
            min: 2,
            max: 120,
            values: [10],
            slide:function(event, ui) {
                outputSpan.html(ui.values[0] + ' Years');
                $('#txtMinAge').val(ui.values[0]);
            }
        });
        outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
        $('#txtMinAge').val(sliderElement.slider('values', 0));


    });

    $(document).ready(function () {

        var outputSpan = $('#spanOutPut');
        var sliderElement = $('#slider1');


        sliderElement.slider({
            range: false,
            min: 2,
            max: 120,
            values: [10],
            slide:function(event, ui) {
                outputSpan.html(ui.values[0] + ' Years');
                $('#txtMinAge1').val(ui.values[0]);
            }
        });
        outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
        $('#txtMinAge1').val(sliderElement.slider('values', 0));


    });

    $(document).ready(function () {

        var outputSpan = $('#spanOutPut');
        var sliderElement = $('#slider2');


        sliderElement.slider({
            range: false,
            min: 2,
            max: 120,
            values: [10],
            slide:function(event, ui) {
                outputSpan.html(ui.values[0] + ' Years');
                $('#txtMinAge2').val(ui.values[0]);
            }
        });
        outputSpan.html(sliderElement.slider('values', 0) +  ' Years');
        $('#txtMinAge2').val(sliderElement.slider('values', 0));


    });

    //for show hide (more info & Repayment Schedule)

    $(document).ready(function() {
        $('#hideDetailsDiv').hide();
        $('a#hideDetailsButton').click(function() {
            if (!$('#hideDetailsDiv').is(':visible')) {
                $('.hideMe').hide(400);
            }
            $('#hideDetailsDiv').toggle(800);
        });
    });

    $(document).ready(function() {
        $('#hideDetailsDiv2').hide();
        $('a#hideDetailsButton2').click(function() {
            if (!$('#hideDetailsDiv2').is(':visible')) {
                $('.hideMe').hide(400);
            }
            $('#hideDetailsDiv2').toggle(400);
        });
    });
</script>
