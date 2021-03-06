	<!-- header part end -->
	<section id="second_div">
		<div class="container">
			<div class="best_card">
				<h1><i>Find the best<br/> 
					credit cards for you</i>
				</h1>
				<h4><i>Whether you're looking for side-by-side comparisons,<br/> 
					info around rewards versus points or you're ready to <br/>
					apply, we've gathered everything you need in one easy<br/>
					place.</i>
				</h4>
			<a href="javascript:void(0);" class="start_compare"><span class="credit_card_button flash-button pull-right">Start Comparing</span></a>
			</div>	
		</div>
		<div class="container">
			<div class="card_bank">
				<div class="All_cradit_card">
                    <div class="col-md-3 col-sm-3 nopadding">
						<a  class="land_modal feature" data-credit_card_feature_benefits ="17=Rewards Program"><div class="All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/reaward.png" alt="reaward"/>
							<p>Rewards Program</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal feature" data-credit_card_feature_benefits ="23=Waiver on Annual Fee">
							<div class="All_card1">
								<img src="<?php echo base_url();?>resource/front_end/images/cash_back.png" alt="cash_back"/>
								<p>Waiver on Annual Fee</p>
							</div>
						</a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal feature"  data-credit_card_feature_benefits ="18=Installment Payment for Purchase"><div class="All_card2">
							<img src="<?php echo base_url();?>resource/front_end/images/Installment-Payment-For-Purchase.png" alt="card"/>
							<p>Installment Payment for Purchase</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal feature"  data-credit_card_feature_benefits ="19=Airport Facility"  ><div class="All_card3">
							<img src="<?php echo base_url();?>resource/front_end/images/travel.png" alt="travel"/>
							<p>Airport Facility </p>
						</div></a>
					</div>	
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal feature"  data-credit_card_feature_benefits ="20=Fund Transfer Facility"><div class="All_card4">
							<img src="<?php echo base_url();?>resource/front_end/images/zero.png" alt="zero"/>
							<p>Fund Transfer Facility</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal credit_card_type" data-credit_card_type="7=MaxX" ><div class="All_card5">
							<img src="<?php echo base_url();?>resource/front_end/images/MX-Card.png" alt="student"/>
							<p>MaxX Card</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal credit_card_type" data-credit_card_type="3=Signature" data-toggle="modal"><div class="All_card5">
							<img src="<?php echo base_url();?>resource/front_end/images/Signature-Card.png" alt="business"/>
							<p>Signature Card</p>
						</div></a>
					</div>
                    <div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal feature"  data-credit_card_feature_benefits ="22=Low Interest Rate" >
							<div class="All_card7">
								<img src="<?php echo base_url();?>resource/front_end/images/low_interest.png" alt="low_interest"/>
								<p>Low Interest Rate</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div style="clear:both"></div>
	<!-- Header part end -->

    <section id="credit_blog">
        <div class="container">
            <div class="row">
                <h3 class="debit_head">Credit Card Top Blog</h3>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Credit Card',0);
                        if($post_details) {
                        $post_image = $this->Front_end_select_model->select_blog_post_image_url_by_post_id($post_details->ID);
                        ?>
                        <a href="<?php echo $post_details->guid ?>" target="_blank">
                            <div class="debit_blog_box">
                                <img src="<?php echo $post_image->image_url; ?>" alt="<?php echo $post_details->post_title;?>" />
                                <p><i><?php echo $post_details->post_title;?></i></p>
                            </div>
                        </a>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Credit Card',1);
                    if($post_details) {
                        $post_image = $this->Front_end_select_model->select_blog_post_image_url_by_post_id($post_details->ID);
                        ?>
                        <a href="<?php echo $post_details->guid ?>" target="_blank">
                            <div class="debit_blog_box">
                                <img src="<?php echo $post_image->image_url; ?>" alt="<?php echo $post_details->post_title;?>" />
                                <p><i><?php echo $post_details->post_title;?></i></p>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Credit Card',2);
                    if($post_details) {
                        $post_image = $this->Front_end_select_model->select_blog_post_image_url_by_post_id($post_details->ID);
                        ?>
                        <a href="<?php echo $post_details->guid ?>" target="_blank">
                            <div class="debit_blog_box">
                                <img src="<?php echo $post_image->image_url; ?>" alt="<?php echo $post_details->post_title;?>" />
                                <p><i><?php echo $post_details->post_title;?></i></p>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Credit Card',3);
                    if($post_details) {
                        $post_image = $this->Front_end_select_model->select_blog_post_image_url_by_post_id($post_details->ID);
                        ?>
                        <a href="<?php echo $post_details->guid ?>" target="_blank">
                            <div class="debit_blog_box">
                                <img src="<?php echo $post_image->image_url; ?>" alt="<?php echo $post_details->post_title;?>" />
                                <p><i><?php echo $post_details->post_title;?></i></p>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>


	<!--section id="artical">
		<div class="container">
				<h3><i>Recent Popular Article</i></h3><hr/>
			<div class="popular_artical">
				<h5>What Dave Ramsey Doesn???t Acknowledge About Credit Cards</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/Sujat.jpg"/>
				<span><a href="#">Sujat Barua</a></span><hr/>
				<h5>How to Pick the Best Credit Card for You: 4 Easy Steps</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/nirob.jpg"/>
				<span><a href="#">Nirob</a></span><hr/>
				<h5>What Is the Range for Credit Scores?</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/Rubayat.jpg"/>
				<span><a href="#">Rubayat</a></span><hr/>
				<h5>What Dave Ramsey Doesn???t Acknowledge About Credit Cards</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/Tarek Raihan.jpg"/>
				<span><a href="#">Tarek Raihan</a></span><hr/>
			</div>
		</div>
	</section-->
	
	<section id="Basic">
		<div class="container">
		<h3><i>The Basics</i></h3><hr/>
			<div class="card_basic row">
				<div class="col-md-6 col-sm-6">
					<h4><strong>What is the minimum eligibility for getting a credit card?</strong></h4>
					<p>Applicant must be a Bangladeshi citizen aged between 21 years to 60 years and his monthly income must be above BDT 20,000.
					</p>
					<hr/>
				</div>

                <div class="col-md-6 col-sm-6">
                    <h4><strong>How does a user change his pin number linked with his credit card?</strong></h4>
                    <p>A user can change his pin number by using ATM machine software or by going to the issuer and apply a request to change the pin number.
                    </p>
                    <hr/>
                </div>

				<div class="col-md-6 col-sm-6">
					<h4><strong>How can a user prevent credit card fraud?</strong></h4>
					<p>A user must not share his pin number with anyone and must not select his phone number, date of birth etc. as his pin number and finally he must monitor every transaction of his card.
					</p>
					<hr/>
				</div>

                <div class="col-md-6 col-sm-6">
                    <h4><strong>How does a user request for a replacement card?</strong></h4>
                    <p>To request for a replacement card a user must fill the application to issue a replacement card and send it to the card section of the bank or card issuer organization.
                    </p>
                    <hr/>
                </div>

			</div>
		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.feature').on('click',function(){
				var  formData = $(this).data();
				var credit_card_feature_benefits = formData.credit_card_feature_benefits;
				var data = 'credit_card_features_benefits='+credit_card_feature_benefits;
				quick_link(data);

			});

			$('.credit_card_type').on('click',function(){
				var  formData = $(this).data();
				var credit_card_type = formData.credit_card_type;
				var data = 'card_type='+credit_card_type;
				quick_link(data);

			});
			$('.start_compare').on('click',function(){
				var data = 'data = all';
				quick_link(data);

			});

		});
		function quick_link(data){
			var url_str = "<?php echo base_url();?>card/ajax_credit_card_quick_link/";
			$.ajax({
				type: "POST",
				url: url_str,
				data: data,
				cache: false,
				success: function(response){
					window.location.href = "<?php echo base_url();?>compare-credit-cards.html";
				}
			});
		}
	</script>