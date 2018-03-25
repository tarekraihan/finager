

<div class="container-fluid m-b-30">
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
            We provide more than 50 financial institutes details with location all over Bangladesh. We have provided a smooth and easy way to find your bank with its details. You can easily search by bank name, routing number, location or product name to find your required information. You can also choose from the list of all banks given below. To know more about the banks then click on the logo.
        </p>
    </div>

    <div class="clearfix"></div>
    <div class="bd_landing_details">
        <div class="col-md-9">
            <div class="bank_details_landing_head2">
                <p>ALPHABETICAL LIST OF ALL BD BANKS</p>
            </div>
            <!--div class="bd_sorting">
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
            </div-->

            <div class="letter-sort">
                <ul>
                    <li><a href="#"> A </a></li>
                    <li><a href="#"> B </a></li>
                    <li><a href="#"> C </a></li>
                    <li><a href="#"> D </a></li>
                    <li><a href="#"> E </a></li>
                    <li><a href="#"> F </a></li>
                    <li><a href="#"> G </a></li>
                    <li><a href="#"> H </a></li>
                    <li><a href="#"> I </a></li>
                    <li><a href="#"> J </a></li>
                    <li><a href="#"> K </a></li>
                    <li><a href="#"> L </a></li>
                    <li><a href="#"> M </a></li>
                    <li><a href="#"> N </a></li>
                    <li><a href="#"> O </a></li>
                    <li><a href="#"> P </a></li>
                    <li><a href="#"> Q </a></li>
                    <li><a href="#"> R </a></li>
                    <li><a href="#"> S </a></li>
                    <li><a href="#"> T </a></li>
                    <li><a href="#"> U </a></li>
                    <li><a href="#"> V </a></li>
                    <li><a href="#"> W </a></li>
                    <li><a href="#"> X </a></li>
                    <li><a href="#"> Y </a></li>
                    <li><a href="#"> Z </a></li>
                    <li><a href="#"> # </a></li>
                    <li><a href="#"> Top </a></li>
                </ul>
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
                    $slug = url_title($row->bank_name,'dash',TRUE);
                   /* $this->Common_model->data = array(
                        'slug' => $slug
                    );
                    $this->Common_model->where = array('id' => $row->id);
                    $this->Common_model->table_name = 'card_bank';
                    $this->Common_model->update();*/
                ?>
                <div class="col-md-3">
                    <div class="bank_details_landing_box">
                        <a href="<?php echo base_url();?>bank-details/<?php echo ($row->slug) ? $row->slug : $slug;?>.html" > <img class="text-center" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $row->bank_logo; ?>" title="<?php echo $row->known_as; ?>"></a>
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
                    <?php
                        //$this->Common_model->order_column = 'bank_name';
                        $this->Common_model->order_type = 'ASC';
                        $this->Common_model->offset = 0;
                        $this->Common_model->limit = 10;
                        $this->Common_model->table_name = 'card_bank';
                        $query=$this->Common_model->select_all();
                    foreach ($query->result() as $bank) {
                        ?>
                        <p>
                            <?php echo $bank->bank_name; ?><br>
                            <?php echo $bank->head_office_address; ?>
                        </p>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>