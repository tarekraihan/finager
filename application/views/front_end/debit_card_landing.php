	<section id="debit_second_div">
		<div class="container">
			<div class="best_card">
				<h1><i>Find the best<br/> 
					debit cards for you.</i>
				</h1>
				<h4><i>Whether you're looking for side-by-side comparisons,<br/> 
					info around rewards versus points or you're ready to <br/>
					apply, we've gathered everything you need in one easy<br/>
					place.</i>
				</h4>
					<a href="javascript:void(0);" class="start_compare"><span class="debit_card_button flash-button pull-right">Start Comparing</span></a>
			</div>	
		</div>
		<div class="container">
			<div class="card_bank">
				<div class="All_debit_card">
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal choose_account" data-choose_account ='1' ><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_card_current.png" alt="current_account"/>
							<p>Current Account</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal choose_account" data-choose_account = '2'><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_card_savings.png" alt="savings_account"/>
							<p>Savings Account</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">	
						<a class="land_modal looking_for" data-looking_for = '2' ><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_international_card.png" alt="International Debit Card"/>
							<p>International Debit Card</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal looking_for" data-looking_for ='1'><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_local_card.png" alt="Local Debit Card"/>
							<p>Local Debit Card</p>
						</div></a>
					</div>
					<div style="clear:both"></div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal card_issuer" data-card_issuer="1"><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_visa_card.png" alt="Visa Card"/>
							<p>Visa Card</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal card_issuer" data-card_issuer = '2'><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_master_card.png" alt="Master Card"/>
							<p>Master Card</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">	
						<a class="land_modal i_want" data-i_want="3"><div class="debit_All_card">
							<img src="<?php echo base_url();?>resource/front_end/images/debit_student_card.png" alt="General Debit Card"/>
							<p>General Debit Card</p>
						</div></a>
					</div>
					<div class="col-md-3 col-sm-3 nopadding">
						<a class="land_modal i_want" data-i_want="1">
							<div class="debit_All_card">
								<img src="<?php echo base_url();?>resource/front_end/images/debit_business_card.png" alt="Business Debit Card"/>
								<p>Business Debit Card</p>
							</div>
						</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<div style="clear:both"></div>
	<!-- Header part end -->
	<!--section id="third_div">
		<div class="container">
			<div class="debit_box"></div>
		</div>
	</section-->
	<section id="debit_blog">
		<div class="container">
			<div class="row">
				<h3 class="debit_head">Debit Card Top Blog</h3>
				<div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Debit Card',0);
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
                    }else{
                    ?>
                    <a href="<?php echo base_url();?>blog">
                        <div class="debit_blog_box">
                            <img src="<?php echo base_url();?>resource/blog/images/debit_card6.jpg" alt="Image Not Found" />
                            <p><i>What Is a Debit Card and How Is It Used?</i></p>
                        </div>
                    </a>
                    <?php
                    }
                    ?>
				</div>
				<div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Debit Card',1);
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
                    }else{
                        ?>
                        <a href="<?php echo base_url();?>blog">
                            <div class="debit_blog_box">
                                <img src="<?php echo base_url();?>resource/blog/images/debit_card6.jpg" alt="Image Not Found" />
                                <p><i>What Is a Debit Card and How Is It Used?</i></p>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
				</div>
				<div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Debit Card',2);
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
                    }else{
                        ?>
                        <a href="<?php echo base_url();?>blog">
                            <div class="debit_blog_box">
                                <img src="<?php echo base_url();?>resource/blog/images/debit_card6.jpg" alt="Image Not Found" />
                                <p><i>What Is a Debit Card and How Is It Used?</i></p>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
				</div>
				<div class="col-md-3 col-sm-3">
                    <?php
                    $post_details = $this->Front_end_select_model->select_blog_post_by_product_category('Debit Card',3);
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
                    }else{
                        ?>
                        <a href="<?php echo base_url();?>blog">
                            <div class="debit_blog_box">
                                <img src="<?php echo base_url();?>resource/blog/images/debit_card6.jpg" alt="Image Not Found" />
                                <p><i>What Is a Debit Card and How Is It Used?</i></p>
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
	<section id="artical">
		<!--div class="container">
				<h3><i>Recent Popular Article</i></h3><hr/>
			<div class="popular_artical">
				<h5>What Dave Ramsey Doesn’t Acknowledge About Credit Cards</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/Sujat.jpg"/>
				<span><a href="#">Sujat Barua</a></span><hr/>
				<h5>How to Pick the Best Credit Card for You: 4 Easy Steps</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/nirob.jpg"/>
				<span><a href="#">Nirob</a></span><hr/>
				<h5>What Is the Range for Credit Scores?</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/Rubayat.jpg"/>
				<span><a href="#">Rubayat</a></span><hr/>
				<h5>What Dave Ramsey Doesn’t Acknowledge About Credit Cards</h5>
				<img src="<?php echo base_url();?>resource/front_end/images/Tarek Raihan.jpg"/>
				<span><a href="#">Tarek Raihan</a></span><hr/>
			</div>
		</div-->
	</section>
	
	<section id="debit_Basic">
		<div class="container">
		<h3><i>The Basics</i></h3><hr/>
			<div class="card_basic row">
				<div class="col-md-6 col-sm-6">
					<h4><strong>What is the minimum eligibility for getting a credit card?</strong></h4>
					<p>Applicant must be a Bangladeshi citizen aged between 21 years to 60 years.
					</p>
					<hr/>
				</div>

                <div class="col-md-6 col-sm-6">
                    <h4><strong>How does a user request for a replacement card?</strong></h4>
                    <p>To request for a replacement card a user must fill the application to issue a replacement card and send it to the card section of the bank or card issuer organization.
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
			</div>

		</div>
	</section>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.choose_account').on('click',function(){
				var  formData = $(this).data();
				var choose_account = formData.choose_account;
				var data = 'choose_account='+choose_account;
//				console.log(data);
				quick_link(data);

			});

			$('.looking_for').on('click',function(){
				var  formData = $(this).data();
				var looking_for = formData.looking_for;
				var data = 'looking_for='+looking_for;
//				console.log(data);
				quick_link(data);

			});

			$('.card_issuer').on('click',function(){
				var  formData = $(this).data();
				var card_issuer = formData.card_issuer;
				var data = 'card_issuer='+card_issuer;
//				console.log(data);
				quick_link(data);

			});

			$('.i_want').on('click',function(){
				var  formData = $(this).data();
				var i_want = formData.i_want;
				var data = 'i_want='+i_want;
//				console.log(data);
				quick_link(data);

			});

			$('.start_compare').on('click',function(){
				var data = 'data = all';
//				console.log(data);
				quick_link(data);

			});

		});
		function quick_link(data){
			var url_str = "<?php echo base_url();?>debit_card/ajax_debit_card_quick_link/";
			$.ajax({
				type: "POST",
				url: url_str,
				data: data,
				cache: false,
				success: function(response){
					window.location.href = "<?php echo base_url();?>compare-debit-cards.html";
				}
			});
		}
	</script>