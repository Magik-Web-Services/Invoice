<?php
ob_start();
if (isset($_POST) && !empty($_POST)) {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // heading
    $invoice_heading = (!empty($_POST['invoice_heading'])) ? $_POST['invoice_heading'] : '';
    // $sub_title = (!empty($_POST['sub_title'])) ? $_POST['sub_title'] : '';
    // Logo
    $logo_url = (!empty($_POST['logo_url'])) ? $_POST['logo_url'] : '';
    if (!empty($logo_url)) {
        $files = glob('assets/upload/{,.}*', GLOB_BRACE);
        foreach ($files as $file) { // iterate files
            if (is_file($file)) {
                unlink($file); // delete file
            }
        }
        $finfo = finfo_open(FILEINFO_MIME_TYPE); // return mime type ala mimetype extension   
        $file_mine = finfo_file($finfo, $logo_url);
        finfo_close($finfo);
        if (isset($file_mine) && !empty($file_mine) && $file_mine == 'image/jpeg') {

            $img = str_replace('data:image/jpeg;base64,', '', $logo_url);
            $filename =  uniqid() . '.jpeg';
        } elseif ($file_mine == 'image/jpg') {
            $img = str_replace('data:image/jpg;base64,', '', $logo_url);
            $filename =  uniqid() . '.jpg';
        } else {
            $img = str_replace('data:image/png;base64,', '', $logo_url);
            $filename =  uniqid() . '.png';
        }

        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = "assets/upload/" . $filename;
        $success = file_put_contents($file, $data);
        $logo_url = '<img src="' . $file . '" height="80">';
    } else {
        $logo_url = '<img src="assets/images/elsevier.png" height="80">';
    }
    // $logo_url = imageinterlace($logo_url, false);

    // to
    $to_name = (!empty($_POST['to_name'])) ? $_POST['to_name'] : '';
    $to_address1 = (!empty($_POST['to_address1'])) ? $_POST['to_address1'] : '';
    $to_address2 = (!empty($_POST['to_address2'])) ? $_POST['to_address2'] : '';
    // $to_registration_no = (!empty($_POST['to_registration_no'])) ? $_POST['to_registration_no'] : '';
    // $to_head_vat = (!empty($_POST['to_head_vat'])) ? $_POST['to_head_vat'] : '';
    // $to = (!empty($_POST['to'])) ? $_POST['to'] : '';

    // from
    $from_name = (!empty($_POST['from_name'])) ? $_POST['from_name'] : '';
    $from_address1 = (!empty($_POST['from_address1'])) ? $_POST['from_address1'] : '';
    $from_address2 = (!empty($_POST['from_address2'])) ? $_POST['from_address2'] : '';
    // $from_registration_no = (!empty($_POST['from_registration_no'])) ? $_POST['from_registration_no'] : '';
    // $from_head_vat = (!empty($_POST['from_head_vat'])) ? $_POST['from_head_vat'] : '';
    // $from = (!empty($_POST['from'])) ? $_POST['from'] : '';


    // table
    $qtDetails = (!empty($_POST['qtDetails'])) ? $_POST['qtDetails'] : '';
    $qtDate = (!empty($_POST['qtDate'])) ? $_POST['qtDate'] : '';
    $qtNumber = (!empty($_POST['qtNumber'])) ? $_POST['qtNumber'] : '';
    $qtExDate = (!empty($_POST['qtExDate'])) ? $_POST['qtExDate'] : '';


    if (isset($_POST['item_name']) && !empty($_POST['item_name']) && is_array($_POST['item_name'])) {
        $items = '';
        foreach ($_POST['item_name'] as $key => $value) {
            $item_name = (!empty($_POST['item_name'][$key])) ? $_POST['item_name'][$key] : '';
            $item_product = (!empty($_POST['item_product'][$key])) ? $_POST['item_product'][$key] : '';
            $item_product_code = (!empty($_POST['item_product_code'][$key])) ? $_POST['item_product_code'][$key] : '';
            $item_quantity = (!empty($_POST['item_quantity'][$key])) ? $_POST['item_quantity'][$key] : '';
            $item_subscription_fee = (!empty($_POST['item_subscription_fee'][$key])) ? $_POST['item_subscription_fee'][$key] : '';
            $item_product_fee = (!empty($_POST['item_product_fee'][$key])) ? $_POST['item_product_fee'][$key] : '';
            $item_price = (!empty($_POST['item_price'][$key])) ? $_POST['item_price'][$key] : '';
            $item_total = (!empty($_POST['item_total'][$key])) ? $_POST['item_total'][$key] : '';

            $items .= '<tr align="center">
                <td>' . $item_name . '</td>
                <td>' . $item_product . '</td>
                <td> ' . $item_product_code . ' </td>
                <td> ' . $item_quantity . ' </td>
                <td> ' . $item_subscription_fee . ' </td>
                <td> ' . $item_product_fee . ' </td>
                <td> ' . $item_price . ' </td>
                <td> ' . $item_total . ' </td>
            </tr>';
        }
    }


    // $item_grand_total = (!empty($_POST['item_grand_total'])) ? $_POST['item_grand_total'] : '';

    // Product or Service Terms:
    $productTS = (!empty($_POST['productTS'])) ? $_POST['productTS'] : '';

    // Terms and Conditions as below:
    $termCond = (!empty($_POST['termCond'])) ? $_POST['termCond'] : '';


    // left footer
    $lcompany_Signature = (!empty($_POST['lcompany_Signature'])) ? $_POST['lcompany_Signature'] : '';
    $lcompany_Name = (!empty($_POST['lcompany_Name'])) ? $_POST['lcompany_Name'] : '';
    $lcompany_Title = (!empty($_POST['lcompany_Title'])) ? $_POST['lcompany_Title'] : '';
    $lcompany_Date = (!empty($_POST['lcompany_Date'])) ? $_POST['lcompany_Date'] : '';

    // right footer
    $rcompany_Signature = (!empty($_POST['rcompany_Signature'])) ? $_POST['rcompany_Signature'] : '';
    $rcompany_Name = (!empty($_POST['rcompany_Name'])) ? $_POST['rcompany_Name'] : '';
    // $rcompany_Title = (!empty($_POST['rcompany_Title'])) ? $_POST['rcompany_Title'] : '';
    $rcompany_Date = (!empty($_POST['rcompany_Date'])) ? $_POST['rcompany_Date'] : '';


    // $order_number = (!empty($_POST['order_number'])) ? $_POST['order_number'] : '';
    // $date1 = (!empty($_POST['date1'])) ? $_POST['date1'] : date('M d, Y');
    // $date1 = date_create($date1);
    // $date1 = date_format($date1, 'M d, Y');
    // $currency = (!empty($_POST['currency'])) ? $currency_name[$_POST['currency']] : 'USD';

    // $bf_name = (!empty($_POST['bf_name'])) ? $_POST['bf_name'] : '';
    // $bf_address1 = (!empty($_POST['bf_address1'])) ? $_POST['bf_address1'] : '';
    // $bf_address2 = (!empty($_POST['bf_address2'])) ? $_POST['bf_address2'] : '';
    // $registration_no = (!empty($_POST['registration_no'])) ? $_POST['registration_no'] : '';
    // $head_vat = (!empty($_POST['head_vat'])) ? $_POST['head_vat'] : '';
    // if (isset($_POST['item_qty']) && !empty($_POST['item_qty']) && is_array($_POST['item_qty'])) {

    //     $items = '';
    //     foreach ($_POST['item_qty'] as $key => $value) {

    //         $item_name = (!empty($_POST['item_name'][$key])) ? $_POST['item_name'][$key] : '';
    //         $item_price = (!empty($_POST['item_price'][$key])) ? $_POST['item_price'][$key] : '';
    //         $item_total = (!empty($_POST['item_total'][$key])) ? $_POST['item_total'][$key] : '';

    //         $items .= '<tr>            
    //         <td class="tbl_td" style="text-align:left">' . $item_name . '</td>
    //         <td class="tbl_td">' . $value . '</td>
    //         <td class="tbl_td">' . $item_price . '</td>
    //         <td class="tbl_td">' . $item_total . '</td>
    //     </tr>';
    //     }
    // }
    // $item_grand_total = (!empty($_POST['item_grand_total'])) ? $_POST['item_grand_total'] : '00';

    // if (isset($_POST['mathod_name']) && !empty($_POST['mathod_name']) && is_array($_POST['mathod_name'])) {

    //     $listmethod = '';
    //     foreach ($_POST['mathod_name'] as $key => $value) {


    //         $mathod_date = (!empty($_POST['mathod_date'][$key])) ? $_POST['mathod_date'][$key] : '';
    //         $mathod_date = date_create($mathod_date);
    //         $mathod_date = date_format($mathod_date, 'M d, Y');
    //         $method_total = (!empty($_POST['method_total'][$key])) ? $_POST['method_total'][$key] : '';

    //         $listmethod .= '<tr>            
    //         <td class="tbl_td2" style="text-align:left">' . $value . '</td>
    //         <td class="tbl_td2">' . $mathod_date . '</td>
    //         <td class="tbl_td2" style="text-align: right;">' . $method_total . '</td>
    //     </tr>';
    //     }
    // }



    $pageborder  = '1';
    $bordercolor = '';
    $bordercolor = str_replace("rgb(", "", $bordercolor);
    $bordercolor = str_replace(")", "", $bordercolor);
    $bordercolor = explode(",", $bordercolor);
    // Include the main TCPDF library (search for installation path).
    require('assets/libs/tcpdf/tcpdf.php');

    // Extend the TCPDF class to create custom Header and Footer
    // class MYPDF extends TCPDF
    // {

    //     // Page footer
    //     public function Footer()
    //     {

    //         $company_name = (!empty($_POST['company_name'])) ? $_POST['company_name'] : '';
    //         $company_sub_heading = (!empty($_POST['company_sub_heading'])) ? $_POST['company_sub_heading'] : '';
    //         $company_address1 = (!empty($_POST['company_address1'])) ? $_POST['company_address1'] : '';
    //         // $company_address2 = (!empty($_POST['company_address2'])) ? $_POST['company_address2'] : '';
    //         $company_number = (!empty($_POST['company_number'])) ? $_POST['company_number'] : '';
    //         $company_withheldtex = (!empty($_POST['company_withheldtex'])) ? $_POST['company_withheldtex'] : '';
    //         $company_business_number = (!empty($_POST['company_business_number'])) ? $_POST['company_business_number'] : '';
    //         $document_type = (!empty($_POST['document_type'])) ? $_POST['document_type'] : '';

    //         // Position at 15 mm from bottom
    //         $this->SetY(-40);
    //         // Set font
    //         $this->SetFont('helvetica', '', 8);
    //         // Page number

    //         $this->Cell(0, 56, 'Page ' . $this->getAliasNumPage() . ' of ' . $this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    //         $footer_content = '';
    //         $y = $this->getY();
    //         $this->SetFillColor(255, 255, 255);
    //         $this->writeHTMLCell(150, '', '', $y, $footer_content, 0, 0, 1, true, 'J', false);
    //         // $this->writeHTML($footer_content, true, false, true, false, ""); 
    //     }
    // }
    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $pdf->setPrintHeader(false);
    $pdf->setHeaderTemplateAutoreset(true);
    // set margins
    $pdf->SetMargins(5, 5, 5);
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
        require_once(dirname(__FILE__) . '/lang/eng.php');
        $pdf->setLanguageArray($l);
    }


    // set some text to print
    $content = '    <table cellpadding="0" border="0" cellspacing="0" style="width: 100%;margin: 0 auto;">
    <tbody>
        <tr>
            <td width="100%">
                <table width="100%" border="0" cellpadding="10">
                    <tr>
                        <td width="20%"></td>
                        <td width="60%" align="center">
                            <h2>' . $invoice_heading . '</h2>
                        </td>
                        <td align="right" width="20%">
                        ' . $logo_url . '
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="100%">
                <table width="100%" border="1">
                    <tr style="background-color: #f1e8e9 ;">
                        <td width="50%">Bill To: <br>
                        ' . $to_name . '  <br>
                        ' . $to_address1  . '  <br>
                        ' . $to_address2 . '  <br>
                        </td>
                        <td width="50%">
                        From: <br>
                        ' . $from_name . '  <br>
                        ' . $from_address1  . '  <br>
                        ' . $from_address2 . '  <br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="100%">
                <table border="1" cellspacing="0" cellpadding="10">
                <tr style="background-color: #f1e8e9 ;">
                <td colspan="6">Quotation Details: ' . $qtDetails . '</td>
                <td>Fee Quote Date' . $qtDate . ' </td>
                <td></td>
            </tr>
            <tr style="background-color: #f1e8e9 ;">
                <td colspan="6">Quote Number ' . $qtNumber . '</td>
                <td>Fee Quote Expiration Date ' . $qtExDate . '</td>
                <td></td>
            </tr>
                    <tr align="center" style="background-color: #f1e8e9 ;">
                        <td>Item</td>
                        <td>Product</td>
                        <td>Product Code</td>

                        <td>Quantity</td>
                        <td>subscription Period</td>
                        <td>product fee</td>
                        <td>Price</td>
                        <td>totle Product fee</td>
                    </tr>
                    <tbody>
                    ' . $items . '
                    </tbody>
                    <tr style="background-color:  #f1e8e9 ;">
                        <td colspan="8">Product or Service Terms:</td>
                    </tr>
                    <tr>
                        <td colspan="8" style="font-weight: 900;">The Service Start Date for the above service provided by ASCENT FINTECH shall be the date of receipt of the above Total Fees. <br><br>
                            The Line Item 1 Subscription, Line Item 2, 3 and 4 shall commence upon the signing of the Fee Quotation on a date both customer and ASCENT FINTECH agreed. Line Item 5 and 6 is Optional. <br><br>
                            Technical Support shall commence on the same date of service subscription via supported channel including e-mail and telecommunication on Business Day (Monday to Friday), from 10am-6pm <br><br>
                            (Singapore Time Zone)</td>
                    </tr>
                    <tr style="background-color:  #f1e8e9 ;">
                        <td colspan="8">Terms An Conditions:</td>
                    </tr>
                    <tr>
                    <td colspan="8">1. By signing this Legal Fee Quotation ("<span style="text-decoration: underline;">Schedule</span>") or issuing a purchase order referencing this Schedule</td>
                </tr>
                <tr>
                    <td colspan="8">2. Fees are exclusive of any applicable sales, goods and services, GST or withholding tax (if any), and will be invoiced starting on the above Service Start Date. Payment can be remitted to ASCENT FINTECH in US$ to a bank account specified by ASCENT FINTECH</td>
                </tr>
                <tr>
                    <td colspan="8">3. Once accepted, this Schedule shall be a binding commitment to purchase the above service beginning on the above subscription start date. Acceptance of this Schedule is expressly limited to the terms of ASCENT FINTECH written offer. Once accepted, this Schedule and the terms and conditions referenced herein will be the complete and exclusive statement of the Agreement. Any modifications proposed by Customer are expressly rejected by ASCENT FINTECH and shall not become part of the Agreement in the absence of ASCENT FINTECH written acceptance.</td>
                </tr>
                <tr>
                    <td colspan="8">4. All fees are stated in USD and exclude prevailing rate of goods & services taxes. The Licensee acknowledges that upon signing this order form, the licensee has read, understood, and accepted the terms and conditions set out and they are hereby incorporated by reference here.</td>
                </tr>
                    <tfoot>
                    <table cellpadding="0" border="0" cellspacing="0">
                    <thead>
                        <tr>
                            <td width="40%">
                                <h4>The Above Legal Fee Quotation Is DulyAccepted By The Below Parties:</h4>
                            </td>
                            <td width="20%"></td>
                            <td width="40%">
                                <h4>ASCENT GLOBAL FINTECH SOLUTIONS PTE. LTD.
                                    “ASCENT FINTECH”</h4>
                            </td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td width="30%" height="50px">
                                <h4>Signature: </h4>
                            </td>
                            <td width="30%"></td>
                            <td width="20%">
                                <h4>Signature:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom: 1px solid black;">' . $lcompany_Signature . '</td>
                            <td width="30%"></td>
                            <td width="30%">
                            ' . $rcompany_Signature . '
                                <!-- <h4>On Behalf of “ASCENT FINTECH”:</h4> -->
                            </td>
                        </tr>
                        <tr>
                        <td width="30%"></td>
                        <td width="30%"></td>
                        <td width="20%" style="border-bottom: 1px solid black;"></td>
                    </tr>
                    <tr>
                        <td width="30%" height="50px">
                            <h4>Name:</h4>
                        </td>
                        <td width="30%"></td>
                        <td width="20%">
                            <h4>Name:</h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" style="border-bottom: 1px solid black;">' . $lcompany_Signature . '</td>
                        <td width="30%"></td>
                        <td width="20%" style="border-bottom: 1px solid black;">' . $rcompany_Signature . '</td>
                    </tr>
                    <tr>
                        <td width="30%" height="50px">
                            <h4>Title</h4>
                        </td>
                        <td width="30%"></td>
                        <td width="20%">
                            <h4>Date</h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" style="border-bottom: 1px solid black;">' . $lcompany_Title . '</td>
                        <td width="30%"></td>
                        <td width="20%" style="border-bottom: 1px solid black;">' . $rcompany_Date . '</td>
                    </tr>
                    <tr>
                        <td width="30%" height="50px">
                            <h4>Date</h4>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" height="50px">
                        ' . $lcompany_Date . '
                        </td>
                    </tr>
                    </tfoot>
                    </table>
                    </tfoot>
                </table>
            </td>
        </tr>
    </tbody>
</table>';

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die;
    $invoice_number = 'text';
    $order_number = "text";
    $pdf->SetTitle($invoice_number . '-' . date('Y-m-d H:i:s'));
    $pdf->AddPage('L', "A4");
    $pdf->SetLineStyle(array('width' => $pageborder, 'color' => $bordercolor));
    $pdf->Line(0, 0, $pdf->getPageWidth(), 0);
    $pdf->Line($pdf->getPageWidth(), 0, $pdf->getPageWidth(), $pdf->getPageHeight());
    $pdf->Line(0, $pdf->getPageHeight(), $pdf->getPageWidth(), $pdf->getPageHeight());
    $pdf->Line(0, 0, 0, $pdf->getPageHeight());

    // $pdf->writeHTMLCell(0, 0, '', '', $content, 0, 1, 0, true, '', true);
    // $pdf->writeHTML($content, true, 0, false, 0);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->writeHTMLCell('', '', '', '', $content, 0, 0, 1, true, 'J', false);
    if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'download') {
        $outputs = "d";
    } else {
        $outputs = "I";
    }

    $pdf->Output($order_number . '-' . date('Y-m-d H:i:s') . '.pdf', $outputs);
    // } else {
    //     echo "No data Available";
    // }
}
ob_end_flush();
