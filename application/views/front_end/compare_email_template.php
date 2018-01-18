<?php
//print_r($this->session->userdata());

$id =(int)$loan1['id'];
$result = $this->Front_end_select_model->select_personal_loan_details($id);
$first_personal_loan = $result->row();

$id1 = (int)$loan2['id'];
$result1 = $this->Front_end_select_model->select_personal_loan_details($id1);
$second_personal_loan = $result1->row();

$first_interest =($first_personal_loan->is_fixed =='0')? $first_personal_loan->interest_rate_average.' % (Avg)' : $first_personal_loan->interest_rate_fixed.' % (Fixed)';
$first_yearly_interest = floatval( ( $first_personal_loan->is_fixed =='0' ) ? $first_personal_loan->interest_rate_average : $first_personal_loan->interest_rate_fixed ) ;

$second_yearly_interest = floatval( ( $second_personal_loan->is_fixed =='0' ) ? $second_personal_loan->interest_rate_average : $second_personal_loan->interest_rate_fixed ) ;
$second_interest =($second_personal_loan->is_fixed =='0')? $second_personal_loan->interest_rate_average.' % (Avg)' : $second_personal_loan->interest_rate_fixed.' % (Fixed)';

$first_bank_name = "";
$first_bank_logo = "";
if($first_personal_loan->is_non_bank == 1){
    $first_bank_name = $first_personal_loan->non_bank_name;
    $first_bank_logo = $first_personal_loan->non_bank_logo;
}else{
    $first_bank_name = $first_personal_loan->bank_name;
    $first_bank_logo = $first_personal_loan->bank_logo;
}

$second_bank_name = "";
$second_bank_logo = "";
if($second_personal_loan->is_non_bank == 1){
    $second_bank_name = $second_personal_loan->non_bank_name;
    $second_bank_logo = $second_personal_loan->non_bank_logo;
}else{
    $second_bank_name = $second_personal_loan->bank_name;
    $second_bank_logo = $second_personal_loan->bank_logo;
}

?>
<!DOCTYPE html>
<!-- saved from url=(0056)https://pixelbuddha.net/livepreview/green-village-email/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <style type="text/css">
        #container{
            box-sizing: border-box;
        }
        .w30{
            width: 30%;
        }
        @media only screen and (max-width: 768px){
            #container{
                width: 90% !important;
            }
            .w30{
                width: 100%;
                display: block;
                float: left;
            }
            table{
                overflow: hidden;
                width: 100% !important;
            }
            .table-bordered>tbody>tr>td {
                width: 97%;
            }
        }
        .w100{
            width: 100%;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .text-left{
            text-align: left;
        }
        table{
        }
        table:after{
            display: table;
            content: " ";
        }
        .table-bordered {
            border-width: 1px;
            border-style: solid;
            border-color: rgb(221, 221, 221);
            border-image: initial;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .table-bordered>tbody>tr>td{
            border: 1px solid #ddd;
            border-top: none !important;
            vertical-align: top;
            padding: 8px;
            vertical-align: middle;
        }
        .table-bordered>tbody>tr>td h4{
            margin: 0;
            font-size: 13px;
        }
    </style>
</head>
<body style="font-family:Gotham, &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; background-color:#f0f2ea; margin:0; padding:0; color:#333333; font-size: 14px;">
<div id="container" style="background-color: #fff; border: 1px solid #ddd; width: 600px; margin: 0 auto; height: auto; display: block; padding: 15px;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tbody>
        <tr>
            <td style="">
                <!-- begin main block -->
                <table cellpadding="0" cellspacing="0" border="0" align="center">
                    <tbody>
                    <tr>
                        <td>
                            <a href="<?php echo base_url();?>" style="display:block; margin:0 auto 20px;">
                                <img src="<?php echo base_url();?>resource/front_end/images/finager-logo.svg" alt="Pixelbuddha" style="display:block; border:0; margin:0 auto; width: 200px; height: auto;">
                            </a>
                            <!-- <p style="margin:20px auto; text-align:center; font-size:14px; line-height:20px; text-transform:uppercase; color:#626658;">
                                what is the most fascinating thing about summer?
                            </p> -->
                            <!-- begin wrapper -->

                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody>
                                <tr>
                                    <td class="w30 text-center">
                                        <a href="#">
                                            <img style="max-width:100%; height: auto; max-height: 130px; border: 1px solid #dedede;" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $first_bank_logo; ?>">
                                        </a>
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Compare</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        <a href="#">
                                            <img style="max-width:100%; height: auto; max-height: 130px; border: 1px solid #dedede;" src="<?php echo base_url(); ?>resource/common_images/bank_logo/<?php echo $second_bank_logo; ?>">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4 style="text-align: center; background-color: #ddd; padding: 7px; font-size: 15px; margin-bottom: 5px;">Basic Info</h4>
                            <table class="table-bordered" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody>
                                <tr>
                                    <td class="w30 text-center">
                                        Midland Bank Limited
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Bank Name</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        Mercantile Bank Limited
                                    </td>
                                </tr>

                                <tr>
                                    <td class="w30 text-center">
                                        Visa
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Network</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        Visa
                                    </td>
                                </tr>

                                <tr>
                                    <td class="w30 text-center">
                                        Gold
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Card Type</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        Classic
                                    </td>
                                </tr>

                                <tr>
                                    <td class="w30 text-center">
                                        15000 for Salaried & 25000 for self-employed
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Income Range</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        20000 for Salaried & 20000 for self-employed
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4 style="text-align: center; background-color: #ddd; padding: 7px; font-size: 15px; margin-bottom: 5px;">Fees & Changes</h4>
                            <table class="table-bordered" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody>
                                <tr>
                                    <td class="w30 text-center">
                                        BDT 1500
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Basic Card Annual Fee</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        BDT 750
                                    </td>
                                </tr>

                                <tr>
                                    <td class="w30 text-center">
                                        Free
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Supplementary Card Annual Fee</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        Free
                                    </td>
                                </tr>

                                <tr>
                                    <td class="w30 text-center">
                                        Free
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Purchase Fee</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        Free
                                    </td>
                                </tr>

                                <tr>
                                    <td class="w30 text-center">
                                        Free
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Balance Transfer Fee</h4>
                                    </td>
                                    <td class="w30 text-center">
                                        Free
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4 style="text-align: center; background-color: #ddd; padding: 7px; font-size: 15px; margin-bottom: 5px;">Additional Info</h4>
                            <table class="table-bordered" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody>
                                <tr>
                                    <td class="w30">
                                        <p><b>Nationality:</b> Bangladeshi</p>
                                        <p><b>Age:</b> 18 years to 60 years, age bar can be relaxed</p>
                                        <p><b>Minimum Gross Income:</b> Salaried Person- BDT 15000, Business person- BDT 25000</p>

                                        <p><b>Required Documents:</b></p>
                                        <p><b>1. Common Documents:</b></p>
                                        <p>Completed application form, NID copy/ valid passport, e-TIN related document, color photograph, bank statement for last 6 months.</p>

                                        <p><b>2. Additional Documents:</b></p>

                                        <p><b>(a) For salaried executives:</b></p>
                                        <p>Pay Slip/ Salary Certificate not more than one month old, business card, copy of employee ID(if available)</p>

                                        <p><b>(b) For Sole proprietorship: </b></p>
                                        <p>Valid trade license, one undated cheque, bank statement of sole-proprietorship account, business card (if available)</p>
                                    </td>
                                    <td class="w30 text-center">
                                        <h4>Eligibility</h4>
                                    </td>
                                    <td class="w30">
                                        <p><b>Nationality:</b> Bangladeshi</p>
                                        <p><b>Age:</b> 18 years to 60 years, age bar can be relaxed</p>
                                        <p><b>Minimum Gross Income:</b> Salaried Person- BDT 15000, Business person- BDT 25000</p>

                                        <p><b>Required Documents:</b></p>
                                        <p><b>1. Common Documents:</b></p>
                                        <p>Completed application form, NID copy/ valid passport, e-TIN related document, color photograph, bank statement for last 6 months.</p>

                                        <p><b>2. Additional Documents:</b></p>

                                        <p><b>(a) For salaried executives:</b></p>
                                        <p>Pay Slip/ Salary Certificate not more than one month old, business card, copy of employee ID(if available)</p>

                                        <p><b>(b) For Sole proprietorship: </b></p>
                                        <p>Valid trade license, one undated cheque, bank statement of sole-proprietorship account, business card (if available)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <!--table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody>

                                    <tr>
                                        <td width="4" height="4" style="background:url(shadow-left-top.png) no-repeat 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td colspan="3" rowspan="3" bgcolor="#FFFFFF" style="padding:0 0 30px;">

                                            <img src="./compare_page_files/header.jpg" width="600" height="400" alt="summer‘s coming trimm your sheeps" style="display:block; border:0; margin:0 0 44px; background:#eeeeee;">
                                            <p style="margin:0 30px 33px;; text-align:center; text-transform:uppercase; font-size:24px; line-height:30px; font-weight:bold; color:#484a42;">
                                                Best articles in this month
                                            </p>

                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tbody>
                                                    <tr valign="top">
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        <td>
                                                            <a style="display:block; margin:0 0 14px;" href="https://pixelbuddha.net/"><img src="./compare_page_files/article.jpg" width="255" height="150" alt="More" style="display:block; margin:0; border:0; background:#eeeeee;"></a>
                                                            <p style="font-size:14px; line-height:22px; font-weight:bold; color:#333333; margin:0 0 5px;"><a href="https://pixelbuddha.net/" style="color:#6c7e44; text-decoration:none;">What is it like to be young and free minded in North Korea</a></p>
                                                            <p style="margin:0 0 35px; font-size:12px; line-height:18px; color:#333333;">Fusce amet ligula ornare tempus vulputate ipsum semper. Praesent non lorem odio. Fusce sed dui massa, eu viverra erat.</p>
                                                        </td>
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        <td>
                                                            <a style="display:block; margin:0 0 14px;" href="https://pixelbuddha.net/"><img src="./compare_page_files/article2.jpg" width="255" height="150" alt="More" style="display:block; margin:0; border:0; background:#eeeeee;"></a>
                                                            <p style="font-size:14px; line-height:22px; font-weight:bold; color:#333333; margin:0 0 5px;"><a href="https://pixelbuddha.net/" style="color:#6c7e44; text-decoration:none;">What is it like to be young and free minded in North Korea</a></p>
                                                            <p style="margin:0 0 35px; font-size:12px; line-height:18px; color:#333333;">Fusce amet ligula ornare tempus vulputate ipsum semper. Praesent non lorem odio. Fusce sed dui massa, eu viverra erat.</p>
                                                        </td>
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                    </tr>
                                                    <tr valign="top">
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        <td colspan="3">
                                                            <a style="display:block; margin:0 0 14px;" href="https://pixelbuddha.net/"><img src="./compare_page_files/full.jpg" width="540" height="220" alt="More" style="display:block; margin:0; border:0; background:#eeeeee;"></a>
                                                            <p style="font-size:14px; line-height:22px; font-weight:bold; color:#333333; margin:0 0 5px;"><a href="https://pixelbuddha.net/" style="color:#6c7e44; text-decoration:none;">What is it like to be young and free minded in North Korea</a></p>
                                                            <p style="margin:0 0 35px; font-size:12px; line-height:18px; color:#333333;">Fusce amet ligula ornare tempus vulputate ipsum semper. Praesent non lorem odio. Fusce sed dui massa, eu viverra erat.</p>
                                                        </td>
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <p style="margin:0; border-top:2px solid #e5e5e5; font-size:5px; line-height:5px; margin:0 30px 29px;">&nbsp;</p>
                                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                <tbody>
                                                    <tr valign="top">
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        <td>
                                                            <p style="margin:0 0 4px; font-weight:bold; color:#333333; font-size:14px; line-height:22px;">Brannon &amp; Douglas, Inc.</p>
                                                            <p style="margin:0; color:#333333; font-size:11px; line-height:18px;">
                                                                400005 Russian Federation, Volgograd, prospekt Lenina 56<br>
                                                                Help &amp; Support Center: 0000 000 000<br>
                                                                Website: <a href="https://pixelbuddha.net/" style="color:#6d7e44; text-decoration:none; font-weight:bold;">www.yourcompany.com</a>
                                                            </p>
                                                        </td>
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                        <td width="120">
                                                            <a href="https://www.facebook.com/pixelbuddha" style="float:left; width:24px; height:24px; margin:6px 8px 10px 0;">
                                                                <img src="./compare_page_files/facebook.png" width="24" height="24" alt="facebook" style="display:block; margin:0; border:0; background:#eeeeee;">
                                                            </a>
                                                            <a href="https://twitter.com/PixelBuddha" style="float:left; width:24px; height:24px; margin:6px 8px 10px 0;">
                                                                <img src="./compare_page_files/twitter.png" width="24" height="24" alt="twitter" style="display:block; margin:0; border:0; background:#eeeeee;">
                                                            </a>
                                                            <a href="https://blog.pixelbuddha.net/" style="float:left; width:24px; height:24px; margin:6px 8px 10px 0;;">
                                                                <img src="./compare_page_files/tumblr.png" width="24" height="24" alt="tumblr" style="display:block; margin:0; border:0; background:#eeeeee;">
                                                            </a>
                                                            <a href="https://pixelbuddha.net/rss" style="float:left; width:24px; height:24px; margin:6px 0 10px 0;">
                                                                <img src="./compare_page_files/rss.png" width="24" height="24" alt="rss" style="display:block; margin:0; border:0; background:#eeeeee;">
                                                            </a>
                                                            <p style="margin:0; font-weight:bold; clear:both; font-size:12px; line-height:22px;">
                                                                <a href="https://pixelbuddha.net/" style="color:#6d7e44; text-decoration:none;">Visit website</a><br>
                                                                <a href="https://pixelbuddha.net/" style="color:#6d7e44; text-decoration:none;">Mobile version</a>
                                                            </p>
                                                        </td>
                                                        <td width="30"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                        <td width="4" height="4" style="background:url(shadow-right-top.png) no-repeat 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                    </tr>


                                    <tr>
                                        <td width="4" style="background:url(shadow-left-center.png) repeat-y 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td width="4" style="background:url(shadow-right-center.png) repeat-y 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                    </tr>

                                    <tr>
                                        <td width="4" height="4" style="background:url(shadow-left-bottom.png) repeat-y 100% 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td width="4" height="4" style="background:url(shadow-right-bottom.png) repeat-y 0 100%;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                    </tr>

                                    <tr>
                                        <td width="4" height="4" style="background:url(shadow-bottom-corner-left.png) no-repeat 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td width="4" height="4" style="background:url(shadow-bottom-left.png) no-repeat 100% 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td height="4" style="background:url(shadow-bottom-center.png) repeat-x 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td width="4" height="4" style="background:url(shadow-bottom-right.png) no-repeat 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                        <td width="4" height="4" style="background:url(shadow-bottom-corner-right.png) no-repeat 0 0;"><p style="margin:0; font-size:1px; line-height:1px;">&nbsp;</p></td>
                                    </tr>
                                </tbody>
                            </table-->
                            <!-- end wrapper-->
                            <p style="margin:0; padding:34px 0 0; text-align:center; font-size:11px; line-height:13px; color:#333333;">
                                <a href="https://pixelbuddha.net/" style="color:#333333; text-decoration:underline;">finager.com</a> ©2017 All right reserved. here
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- end main block -->
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>