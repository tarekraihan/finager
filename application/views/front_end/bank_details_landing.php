

<div class="container-fluid">
    <div class="bank_details_landing_head">
        <p>BANKS IN THE BANGLADESH</p>
    </div>
    <div class="col-md-2">
        <img class="bdetails_bd_bank" src="<?php echo base_url(); ?>resource/front_end/images/bangladesh-bank.jpg" alt="bangladesh bank image" />
    </div>
    <div class="col-md-10">
        <p class="bdetails_text">
            Finager.com helps you to find all national and international banks and their branches in Bangladesh. Finager.com provides all the banks product offers, features, contact details, routing number, address, location and so on.
        </p>
        <p class="bdetails_text">
            We provide more than 50 financial institutes details with location situated all over Bangladesh. We have provided a smooth and easy way to find your bank with its details. You can easily search by bank name, routing number, location or product name to find your required information. You can also choose from the list of all banks given below. To know more about the banks then click on the logo.
        </p>
    </div>
    <div class="clearfix"></div>
    <div class="bd_landing_details">
        <div class="col-md-9">
            <div class="bank_details_landing_head2">
                <p>ALPHABETICAL OF ALL BD BANKS</p>
            </div>
            <div class="bd_sorting">
                <span><a href="#"> A </a></span>
                <span><a href="#">B</a></span>
                <span><a href="#">C</a></span>
                <span><a href="#">D</a></span>
                <span><a href="#">E</a></span>
                <span><a href="#">F</a></span>
                <span><a href="#">G</a></span>
                <span><a href="#">H</a></span>
                <span><a href="#">I</a></span>
                <span><a href="#">J</a></span>
                <span><a href="#">K</a></span>
                <span><a href="#">L</a></span>
                <span><a href="#">M</a></span>
                <span><a href="#">N</a></span>
                <br><br><br>
                <span><a href="#">O</a></span>
                <span><a href="#">P</a></span>
                <span><a href="#">Q</a></span>
                <span><a href="#">R</a></span>
                <span><a href="#">S</a></span>
                <span><a href="#">T</a></span>
                <span><a href="#">U</a></span>
                <span><a href="#">V</a></span>
                <span><a href="#">W</a></span>
                <span><a href="#">X</a></span>
                <span><a href="#">Y</a></span>
                <span><a href="#">Z</a></span>
                <span><a href="#">#</a></span>
                <span><a href="#">Top</a></span>
            </div>
            <div class="bank_details_landing_head2">
                <p>BIGGEST BANKS IN BANGLADESH</p>
            </div>
            <div class="bank_details_landing_logo">
                <?php
                $this->Common_model->order_column = 'bank_name';
                $this->Common_model->order_type = 'ASC';
                $this->Common_model->table_name = 'card_bank';
                $query=$this->Common_model->select_all();

                foreach ($query->result() as $row){
                    //pr($row);
                ?>
                <div class="col-md-3">
                    <div class="bank_details_landing_box">
                        <a href="<?php echo base_url();?>en/bank_details/<?php echo $row->id;?>" > <img class="text-center" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" title="<?php echo $row->known_as; ?>"></a>
                        <h5 class="text-center"><?php echo $row->bank_name; ?></h5>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
        <div class="col-md-3">
            <div class="bank_details_head">
                <p>POPULAR BANK</p>
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
            </div>
        </div>
    </div>
</div>