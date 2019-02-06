<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_model extends CI_Model {

    public function order_mail_html($name='',$data='',$order_id='') {
        $orderdata = '';
        if(!empty($data)){
            $TotalPrice = 0;
            foreach ($data as $key => $value) {
                $TotalPrice = $TotalPrice+$value['packageTotalPrice'];
                if($value['Type']=='Company'){
                    $packagedetail = '<h3 style="color:#1741dc;line-height:18px;margin-bottom:12px;font-size:16px;margin:0 0 8px">
                                    '.$value['Keyword'].' '.$value['packageName'].'
                                </h3>
                                <div style="margin:0 0 10px;width:100%;word-break:break-word;clear:left;font-size:15px;line-height:18px;color:#555549;min-height:36px">
                                    <ul class="similar-found"> <li>DIN for 2 Directors</li> <li>Digital Signature for 2</li> <li>Name Approval</li> <li>MOA / AOA</li> <li>ROC Registration Certificate</li> <li>1 x Company PAN &amp; TAN</li> <li>Documents Notarization</li> </ul>
                                </div>';
                }else{
                    $packagedetail = '<h3 style="color:#1741dc;line-height:18px;margin-bottom:12px;font-size:16px;margin:0 0 8px">
                                    '.$value['Keyword'].' Trademark Class '.$value['packageClass'].'
                                </h3>
                                <div style="margin:0 0 10px;width:100%;word-break:break-word;clear:left;font-size:15px;line-height:18px;color:#555549;min-height:36px">
                                    <div style="margin-left:40px;">
                                        Tradmark Filing for Class '.$cart['packageClass'].'
                                    </div>
                                </div>';
                }
                $orderdata .=   '<hr style="border:none;border-bottom:1px solid #ececec;margin:0.5rem 0;width:100%">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse">
                                    <tbody>
                                        <tr>
                                            <td>
                                                '.$packagedetail.'
                                            </td>
                                            <td style="text-align: right;font-size:15px;line-height:18px;color:#555549;">Rs.'.$value['packageTotalPrice'].' </td>
                                        </tr>
                                    </tbody>
                                </table>';
            }
            $orderdata .=   '<hr style="border:none;border-bottom:1px solid #ececec;margin:0.5rem 0;width:100%">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse">
                                <tbody>
                                    <tr>
                                        <td style="word-break:break-word;clear:left;font-size:15px;line-height:18px;color:#555549;min-height:36px">Total Pay : </td>
                                        <td style="text-align: right;font-size:16px;line-height:18px;color:#555">Rs.'.$TotalPrice.'</td>
                                    <tr>
                                <tbody>
                            </table>';

        }

        $html = '<div style="background:#f9f9f9;color:#373737;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:17px;line-height:24px;max-width:100%;width:100%!important;margin:0 auto;padding:0">    
                    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;line-height:24px;margin:0;padding:0;width:100%;font-size:17px;color:#373737;background:#f9f9f9"><tbody><tr><td valign="top" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse"><tbody><tr><td valign="bottom" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse;padding:20px 16px 12px">
                            <div style="text-align:center">
                                <a href="'.base_url().'" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">
                                <img src="'.base_url().'assets/images/Company Vakil Logo.svg" width="220" height="50" style="outline:none;text-decoration:none;border:none;background:#553eda;" class="CToWUd"></a>
                            </div>
                            </td>
                                </tr></tbody></table>
                            </td>
                    </tr>
                    <tr><td valign="top" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse"> 
                        <table cellpadding="32" cellspacing="0" border="0" align="center" style="border-collapse:collapse;background:white;border-radius:0.5rem;margin-bottom:1rem">
                        <tbody>
                            <tr>
                                <td width="546" valign="top" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                                    <div style="max-width:600px;margin:0 auto">
                                    <h2 style="color:#2ab27b;line-height:30px;margin-bottom:12px;margin:0 0 12px">Hi '.$name.',</h2>
                                    <p style="font-size:17px;line-height:24px;margin:0 0 16px">      
                                        You have new order confirmed from the <strong>companyvakil</strong> (<a href="'.base_url().'" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank" >companyvakil.com</a>).
                                    </p>
                                    Order id: '.$order_id.$orderdata.'
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table cellpadding="32" cellspacing="0" border="0" align="center" style="border-collapse:collapse;background:white;border-radius:0.5rem;margin-bottom:1rem"><tbody><tr><td width="546" valign="top" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                <div style="max-width:600px;margin:0 auto">

                <p style="font-size:0.9rem;line-height:20px;margin:0 auto 1rem;color:#aaa;text-align:left;max-width:100%;word-break:break-word;margin-bottom:0">
                    Read for our: 
                    <a href="'.base_url().'privacy_policy" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">privacy policy</a>,
                    <a href="'.base_url().'terms_and_conditions" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">terms and conditions</a>,
                    <a href="'.base_url().'refund_policy" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">refund policy</a>
                    And see all your <a href="'.base_url().'user/myorders" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">orders</a>. For more detailed preferences, see your <a href="'.base_url().'user/account" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">account page</a>.
                </p>
                </div>
            </td>
            </tr></tbody></table></td>
            </tr><tr><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse">
                <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;margin-top:1rem;background:white;color:#989ea6"><tbody><tr><td style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse;height:2px;border-top:1px solid #ddd;"></td>
                    </tr><tr><td valign="top" align="center" style="font-family:Helvetica Neue,Helvetica,Arial,sans-serif!important;border-collapse:collapse;padding:16px 8px 24px">
                        <div style="max-width:600px;margin:0 auto">
                            <p style="font-size:12px;line-height:20px;margin:0 0 16px;margin-top:16px">  
                                Made by <a href="'.base_url().'" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank">Alphabet Solutions</a>
                                &nbsp;•&nbsp;
                                <a href="http://blog.companyvakil.com/" style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word" target="_blank"> Our Blog </a><br><a href="#m_3506696770296409880_" style="color:#989ea6;font-weight:normal;text-decoration:none;word-break:break-word">   
                                13/28 Ground Floor, East Patel Nagar, New Delhi, Delhi 110008
                                </a>
                                </p>
                        </div>
                    </td>
                </tr></tbody></table></td>
            </tr></tbody></table></div>';
        return $html;

    }

}