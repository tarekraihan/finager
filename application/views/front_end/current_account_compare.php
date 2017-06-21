<?php
//		print_r($this->session->userdata());die;
$id = $this->session->userdata('first_account_id') ;
$result = $this->Front_end_select_model->select_current_account_info_details($id);
$first_current_account = $result->row();

$id1 = $this->session->userdata('second_account_id') ;
$result1 = $this->Front_end_select_model->select_current_account_info_details($id1);
$second_current_account = $result1->row();
	//pr($second_current_account);die;


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

<style>
	.innerMdlWrapper .innerMdlInner {
		width: 418px;
	}
	.home-loan-Compare-hr1 {
		width: 41.5%;
	}
	.Card-Compare-hr2 {
		width: 41%;
	}
	.home-loan-Compare-hr3 {
		width: 44.3%;
	}
	.home-loan-Compare-hr4 {
		width: 39.5%;
	}
	#basic_info {
		margin-top: -45px;
	}

</style>
	<section id="card_compare_default">
		<div class="container">
			<div class="row">
				<table class="table">
					<tr>
						<td><p><a href="<?php echo base_url();?>en/current_account_details/<?php echo $first_current_account->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>" /></a> </p></td>
						<td><b><p class="text-center com_title">Comparison </p></b>
							
						</td>
						<td><a href="<?php echo base_url();?>en/current_account_details/<?php echo $second_current_account->id;?>"><img class="home_loan_img" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>" /></a> </td>
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
				<h3 class="text-center"> <img class="maximizer-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/> Current account <img class="maximizer-Compare-hr1" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				<div class="col-md-6 col-sm-6">
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
							<td> BDT. <?php echo number_format($first_current_account->opening_balance)?> </td>
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
				<div class="col-md-6 col-sm-6">
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
								<td> BDT. <?php echo number_format($second_current_account->opening_balance)?> </td>
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
				<h3 class="text-center"> <img class="maximizer-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/>Features<img class="maximizer-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
					<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_current_account->features;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_current_account->features;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="maximizer-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png"/>Privilege<img class="maximizer-Compare-hr3" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
					<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
						<?php echo $first_current_account->privilege;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_current_account->privilege;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Fees and Charges <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>
				
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_current_account->fees_and_charges;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_current_account->fees_and_charges;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" />  Requirements <img class="Card-Compare-hr2" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $first_current_account->requirements;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive">
                        <?php echo $second_current_account->requirements;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="maximizer-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Terms and Conditions <img class="maximizer-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_current_account->terms_and_conditions;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_current_account->terms_and_conditions;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h3 class="text-center"> <img class="maximizer-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> Review <img class="maximizer-Compare-hr6" src="<?php echo base_url(); ?>resource/front_end/images/Card-Compare-hr.png" /> </h3>

				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $first_current_account->review;?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="table-responsive home_compare_div">
                        <?php echo $second_current_account->review;?>
					</div>
				</div>
			</div>

			<div class="row">
				<h4 class="text-center">  Send this comparison to yourself. Enter your email here.  </h4>	
				<div class="col-md-12">
					<form class="comparison_email">
					  <div class="form-group col-md-11">
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email here">
					  </div>
					  <div class="form-group col-md-1">
						<button type="submit" class="btn btn-default">SEND </button>
					  </div>
					</form>
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
<script>
    $(window).on('scroll', function (){
        if ($(window).scrollTop() > 150){
            $('#card_compare_default').addClass('compare-bg');
        } else {
            $('#card_compare_default').removeClass('compare-bg');
        }
    });
</script>