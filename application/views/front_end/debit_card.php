  <style>
      /*Testing comment*/
      .sidebar-absolute{
          /*transition: all 1s ease;*/
      }
      .sidebar-absolute-bottom{
          position: absolute;
          width: 262px;
          bottom: 35px;
          left: 15px;
      }
      .fixed {
          position: fixed;
          top: 0px;
          width: 262.5px;
      }
      .sidebar_parent{
          position: relative;
          min-height: 600px;;
      }
      #sidebar{
          margin-top: 0;
      }

</style>
<section id="debitCard_header">
</section>

<!--Filter bar by bank START -->
<div class="container">
      <section id="filter-bar">
          <div class="row">
              <div class="col-md-3">
                  <div class="bank-filter">
                      <p class="bank-small-filter">50 of 50 results filtered by:</p>
                      <div class="bank-big-filter">

                          <!--<div class="dropdown mega-dropdown">
                              <a href="javascript:;" class="dropdown-toggle">
                                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                          </div>-->
                          <ul class="filter-by">
                              <li class="dropdown mega-dropdown">
                                  <a href="javascript:;" class="dropdown-toggle">
                                      Filter By: Bank
                                        <span>
                                           <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        </span>
                                  </a>

                                  <ul class="dropdown-menu mega-dropdown-menu">
                                      <li>
                                          <div id="filter-carousel" class="carousel slide" data-ride="carousel">
                                              <ol class="carousel-indicators">
                                                  <li class="" data-slide-to="0" data-target="#carousel"></li>
                                                  <li class="active" data-slide-to="1" data-target="#carousel"></li>
                                              </ol>
                                              <div class="carousel-inner">

                                                  <div class="item active row">
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-01" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-01">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(1).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-02" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-02">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(2).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-03" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-03">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(3).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-04" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-04">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(4).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-05" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-05">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(4).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-06" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-06">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(5).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-07" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-07">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/filter_bank_logo/bank_small_icon_(6).png" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-08" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-08">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-09" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-09">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-10" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-10">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-11" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-11">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-12" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-12">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-13" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-13">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-03" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-14">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-03" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-15">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="item row">
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-016" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-16">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-17" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-17">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-18" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-18">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-19" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-19">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-20" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-20">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-21" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-21">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-22" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-22">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-23" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-23">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-24" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-24">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-25" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-25">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-26" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-26">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-27" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-27">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-28" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-28">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-29" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-29">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>

                                                      <div class="col-sm-4 col-xs-12">
                                                          <div class="material_checkbox_group">
                                                              <input type="checkbox" id="filter-bank-30" name="featuresBenefits" value="" class="material_checkbox">
                                                              <label class="material_label_checkbox" for="filter-bank-30">
                                                                  <div class="filter-check-img">
                                                                      <img src="<?php echo base_url();?>resource/front_end/images/ab_bank_sm_logo.jpg" alt=""/>
                                                                  </div>
                                                                  <div class="filter-check-name">
                                                                      Waiver on Annual Fee
                                                                  </div>
                                                              </label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-sm-3">
                                                      <a data-slide="prev" role="button" href="#filter-carousel" class="left">
                                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                                      </a>
                                                      <a data-slide="next" role="button" href="#filter-carousel" class="right">
                                                          <span class="glyphicon glyphicon-chevron-right"></span>
                                                      </a>
                                                  </div>

                                                  <div class="col-sm-6"></div>

                                                  <div class="col-sm-3">
                                                      <a class="btn-filter-clear" href="javascript:;">
                                                            <span>
                                                                <i class="fa fa-refresh" aria-hidden="true"></i>
                                                            </span>
                                                          Clear All
                                                      </a>
                                                  </div>
                                              </div>

                                          </div>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-md-8 no-padding">
                  <ul class="filter-list">
                      <li>
                            <span class="filter-option">
                                <span>Filter Option 1</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 2</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 3</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 4</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 5</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 6</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 7</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 8</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 9</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>

                      <li>
                            <span class="filter-option">
                                <span>Filter Option 10</span>
                                <a href="javascript:;">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </span>
                      </li>
                  </ul>
              </div>
              <div class="col-md-1 no-padding-left">
                  <a class="btn-filter-clear" href="javascript:;">
                        <span>
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                        </span>
                      Clear All
                  </a>
              </div>
          </div>
      </section>
  </div>
<!--Filter bar by bank START -->

<section id="card">
		<div class="container">
			<div class="row">

		<!-- Left bar query content start -->
				<div class="col-sm-3 col-xs-3 sidebar_parent">
                    <div id="sticky-anchor"></div>

                    <div class="card_left_bar home_loan_left_bar" id="sidebar">
						<div class="card_query">
							<p>Choose Account</p>
							<div class="query_radio">
                                <?php
                                $choose_account = $this->Select_model->select_all('debit_card_choose_account');

                                foreach($choose_account->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="choose_account" id="choose_account_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox " data-choose_account="<?php echo $row->account_name;?>" <?php echo ($this->session->userdata("choose_account") ==$row->id) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio debit_card_choose_account"></span>
                                        <?php echo $row->account_name;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
							</div>
						</div>
						<div class="card_query">
							<p>Looking for</p>
							<div class="query_radio">
                                <?php
                                $looking_for = $this->Select_model->select_all('debit_card_looking_for');
                                foreach($looking_for->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="looking_for" id="looking_for_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox" data-name="<?php echo $row->looking_for;?>" <?php echo ($this->session->userdata("looking_for") ==$row->id) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->looking_for;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
							</div>
						</div>
						<div class="card_query">
							<p>I Want</p>
							<div class="query_radio">

                                <?php
                                $i_want = $this->Select_model->select_all('debit_card_i_want');
                                foreach($i_want->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="i_want" id="i_want_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox" data-name="<?php echo $row->i_want;?>" <?php echo ($this->session->userdata("i_want") ==$row->id) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->i_want;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
							</div>
						</div>
                        <div class="card_query">
                            <p>Card Issuer</p>
                            <div class="query_radio">
                                <?php
                                $i_want = $this->Select_model->select_all('debit_card_issuer');
                                foreach($i_want->result() as $row){
                                    ?>
                                    <label class="material_radio_group">
                                        <input type="radio" name="card_issuer" id="card_issuer_<?php echo $row->id; ?>" value="<?php echo $row->id;?>" class="material_radiobox" data-name="<?php echo $row->card_issuer_name;?>" <?php echo ($this->session->userdata("card_issuer") ==$row->id) ? 'checked' :'' ?>/>
                                        <span class="material_check_radio"></span>
                                        <?php echo $row->card_issuer_name;?>
                                    </label><br/>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
					</div>
				</div>
				<!-- Left bar query content end -->
				
				<!-- Right bar content start -->

				<div class="col-sm-9 col-xs-9 main-content-area" id="SearchDebitCard">
                    <div id="loading" class="text-center" style="margin-top: 150px"></div>
                </div>
            </div>
        </div>
	</section>

    <!-- card compare section starts-->
<section id="hiden_div">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-9 col-lg-offset-3 col-md-9 col-md-offset-3 col-sm-12">
                    <div class="card-holder">
                        <div class="card-bg">
                            <img src="<?php echo base_url();?>resource/front_end/images/hidendivshead.png" alt="" />
                            <div class="hidden_div relative">
                                <div class="hidden_div_container">
                                    <ul class="no-padding pull-left no-list-style">
                                        <li>

                                        </li>
                                        <li></li>
                                    </ul>
                                    <a class="cart_anchor compare-card">

                                    </a>
                                    <a class="cart_anchor01 compare-card">

                                    </a>
                                    <a href="javascript:void(0);" id="go_compare" class="btn common-btn v-middle-btn">
                                        Compare
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<script type="text/javascript">
    // This function will be executed when the user scrolls the page.
    $(document).on("scroll",function () {
        var scroller_anchor = $("#sidebar").offset().top;
        var sidebar_height = $("#sidebar").height();
        var window_height = $(window).height();

        var offsetToTop = parseInt($(this).scrollTop());
        var stickySidebar = $('#sidebar').offset() || { "top": NaN }.top;

        var top_height = $('#top-page').height();
        var banner_height = $('#debitCard_header').height();
        var filter_height = $('#filter-bar').height();
        var total_top = parseInt(top_height+banner_height+filter_height+35);
        var main_height = parseInt($(".main-content-area").height());

        $(".sidebar_parent").height(main_height-20);

        // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
        if ($(window).scrollTop() >= scroller_anchor && sidebar_height < window_height )
        {
            $('#sidebar').addClass('fixed');
        }

        if ($(window).scrollTop() < scroller_anchor && sidebar_height > window_height )
        {
            $('#sidebar').removeClass('fixed');
        }

        if($('#sidebar').offset().top + $('#sidebar').height() >= $('.footer').offset().top - 65){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute-bottom");
        }

        if($(document).scrollTop() + window.innerHeight < $('.footer').offset().top + 65){
            $("#sidebar").addClass("fixed");
            $("#sidebar").removeClass("sidebar-absolute-bottom");
        }

        if($("#sidebar").offset().top < total_top){
            $("#sidebar").removeClass("fixed");
            $("#sidebar").addClass("sidebar-absolute");
        }

    });

</script>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click','#pagination a',function(e){
            e.preventDefault();
            var cur_page = $(this).attr('data-ci-pagination-page'); // I haved test with attr('href') but not ok.
//            alert(cur_page);
            loadData(cur_page);
            console.log(cur_page);
        });

        $('#SearchDebitCard').on('click', '.more_info', function (){
            var  formData = $(this).data();
            var loan_id = formData.loan_id;

            //console.log(loan_id);

            $("#moreInfo"+loan_id).toggleClass("in");
            if($("#moreInfo"+loan_id).hasClass('in')){
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> Less info");
            }else{
                $('#more_info'+loan_id).html("<i class='fa fa-info-circle'></i> more info");
            }

        });

        function loadData( page = null ){

            var choose_account = new Array();
            $('input[name="choose_account"]:checked').each(function(){
                choose_account.push($(this).val());
            });
            var choose_account_list = "&choose_account="+choose_account;
            var looking_for = new Array();
            $('input[name="looking_for"]:checked').each(function(){
                looking_for.push($(this).val());
            });

            var looking_for_list = "&looking_for="+looking_for;
            var card_issuer = new Array();
            $('input[name="card_issuer"]:checked').each(function(){
                card_issuer.push($(this).val());
            });
            var card_issuer_list = "&card_issuer="+card_issuer;
            var i_want = new Array();
            $('input[name="i_want"]:checked').each(function(){
                i_want.push($(this).val());
            });
            var i_want_list = "&i_want=" + i_want;

            var page_count ='';
            if( page != null ){
                page_count = page ;
            }

            var debit_card_choose_account = '&debit_card_choose_account='+ $('input[name="choose_account"]:checked').parent().text().trim();
            var debit_card_looking_for = '&debit_card_looking_for='+$('input[name="looking_for"]:checked').parent().text().trim();
            var debit_card_card_issuer = '&debit_card_card_issuer='+$('input[name="card_issuer"]:checked').parent().text().trim();
            var debit_card_i_want = '&debit_card_i_want='+$('input[name="i_want"]:checked').parent().text().trim();
//            alert(debit_card_i_want);

            var main_string = choose_account_list + looking_for_list + card_issuer_list + i_want_list + debit_card_choose_account + debit_card_looking_for + debit_card_card_issuer + debit_card_i_want;
            main_string = main_string.substring(1, main_string.length);
            var url_str = "<?php echo base_url();?>debit_card/ajax_debit_card_info/" + page_count;
            $.ajax({
                type: "POST",
                url: url_str,
                data: main_string,
                cache: false,
                beforeSend: function() {
                    overlay(true,true);
                },
                success: function(msg){
                    $("#SearchDebitCard").html(msg);
                    overlay( false );
                }
            });
        }

        loadData(page = null);
        $("input[type='checkbox'], input[type='radio']").on( "click", function() {
            loadData(page = null);
        } );

    });

</script>
<script type="text/javascript">
//for more info search

        $(document).on('click','.add-to-compare',function(){

            $("#hiden_div").animate({bottom:'0px'});
            //$("#hiden_div").addClass("hiddenHalfDown");

            $('html, body').animate({
                //'scrollTop' : $(".cart_anchor").position().top+1500
            });

            if($(".cart_anchor").hasClass("img_active") && $(".cart_anchor01").hasClass("img_active")){
                alert("Sorry");
            }else{
                if($(".cart_anchor").hasClass("img_active")){
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    flyToElement($(itemImg), $('.cart_anchor01'));
                    $(".cart_anchor01").addClass("img_active");
                    $(this).addClass("hidden");

                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    var  formData = $(this).data();
                    var card_id = "card_id="+formData.card_id;
                    //alert(card_id);
                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>debit_card/ajax_compare_card_image",
                            data: card_id,
                            success: function(msg)
                            {
                                //loading_hide();
                                console.log(msg);
                                $(".cart_anchor01").html(msg);
                            }
                        });
                    },850);

                }
                else{
                    //Select item image and pass to the function
                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    flyToElement($(itemImg), $('.cart_anchor'));

                    $(".cart_anchor").addClass("img_active");
                    $(this).addClass("hidden");

                    var itemImg = $(this).parents('div:eq(0)').find('.selected_card').eq(0);
                    var  formData = $(this).data();
                    var card_id = "card_id="+formData.card_id;

                    setTimeout(function(){
                        $.ajax
                        ({
                            type: "POST",
                            url: "<?php echo base_url();?>debit_card/ajax_compare_card_image",
                            data: card_id,
                            success: function(msg)
                            {
                                console.log(msg);
                                $(".cart_anchor").html(msg);
                            }
                        });
                    },850);

                }
            }

        });

        $(document).on('click','.compare-cross-btn',function(){

            var collected_card = $(this).prev().attr("data-card_id");
            //var card_id = collected_card.card_id;

            //var card_id = "data-card_id="+collected_card.card_id;
            //alert(collected_card);

            $(".full-card").each(function(){
                var obj=$(this).children().find('.add-to-compare');
                var index=$(this).children().find('.add-to-compare').attr('data-card_id');
                //alert(index);
                //if()
                if(parseInt(collected_card)==parseInt(index)){
                    obj.removeClass("hidden");
                }

            });

            $(this).parent(".cart_anchor").removeClass("img_active");
            $(this).parent(".cart_anchor").html('');
            $(this).addClass("hidden");

        });

        $(document).on('click','.compare-cross-btn',function(){

            $(this).parent(".cart_anchor01").removeClass("img_active");
            $(this).parent(".cart_anchor01").html('');
        });

        $(document).on('click','.compare-cross-btn',function(){

            var empty = $(this).parents(".hidden_div_container").find("a");
            $(".compare-card").each(function(){
                if(!$(".cart_anchor").hasClass('img_active') && !$(".cart_anchor01").hasClass('img_active')){
                    $("#hiden_div").fadeOut(1500);
                }
            });
        });

        $('#go_compare').click(function(){
            //alert(1);
            var  formData = $('.cart_anchor').children('img').data();
            var card_id1 = "card_id1="+formData.card_id;

            var  formData = $('.cart_anchor01').children('img').data();
            var card_id2 = "&card_id2="+formData.card_id;

            var card_ids = card_id1+card_id2;
            if(card_id1 != '' && card_id2 != ''){
                $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url();?>debit_card/ajax_go_card_compare_page",
                    data: card_ids,
                    success: function(msg)
                    {
                        if(msg != 'error'){

                            window.location.href = "<?php echo base_url();?>en/debit_card_compare";
                        }
                    }
                });
            }else{
                alert("Please add 2 card for compare ! ")
            }

            //alert(card_ids);

        });

        $(document).on('click','#clear_all',function(){
            var data = 'session='+'debit_card';
            $.ajax
            ({
                type: "POST",
                url: "<?php echo base_url();?>debit_card/ajax_clear_session",
                data:data,
                success: function(response)
                {
                        window.location.href = window.location.href;

                }
            });
        });

        $(document).on('click', '.debit_card_choose_account', function (){
            var  formData = $(this).data();
            var chose_account = formData.choose_account;
            var str = chose_account.split();
            alert(str);
        });


</script>
