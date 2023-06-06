<?php include('header.php'); ?>
<section class="p-md-5 p-sm-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="create_pdf.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Top Header</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fl"> Heading <font color="#FF0000">*</font></label>
                                                <input type="text" name="invoice_heading" class="form-control roundcorner" style="width: 100%;" required>
                                                <!-- <label class="fl mt-2">Sub Title <font color="#FF0000">*</font></label>
                                                <input type="text" name="sub_title" id="sub_title" class="form-control roundcorner" style="width: 100%;" required> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <img id="uploadlogo" src="assets/images/logo-img.png" height="148" alt="your image" class="float-end" />
                                                <input type="file" name="logo" class="form-control roundcorner" id="logo" onchange="readURL(this);">
                                                <textarea class="d-none" name="logo_url" id="logo_url"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">To</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 hd_box">
                                            <!-- <textarea name="to" class="form-control roundcorner" cols="30" rows="10"></textarea> -->
                                            <div class="form-group">
                                                <label class="fl">Your Name/Business Name <font color="#FF0000">*</font></label>
                                                <input type="text" name="to_name" class="form-control roundcorner" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Address Line 1</label>
                                                <input type="text" name="to_address1" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Address Line 2</label>
                                                <input type="text" name="to_address2" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <!-- <div class="form-group part2">
                                                <label class="fl">Registration No</label>
                                                <input type="text" name="to_registration_no" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <div class="form-group part2">
                                                <label class="fl">VAT.</label>
                                                <input type="text" name="to_head_vat" class="form-control roundcorner" style="width: 100%;">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">From</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 hd_box">
                                            <!-- <textarea name="from" class="form-control roundcorner" cols="30" rows="10"></textarea> -->
                                            <div class="form-group">
                                                <label class="fl">Your Name/Business Name <font color="#FF0000">*</font></label>
                                                <input type="text" name="from_name" class="form-control roundcorner" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Address Line 1</label>
                                                <input type="text" name="from_address1" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Address Line 2</label>
                                                <input type="text" name="from_address2" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <!-- <div class="form-group part2">
                                                <label class="fl">Registration No</label>
                                                <input type="text" name="from_registration_no" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <div class="form-group part2">
                                                <label class="fl">VAT.</label>
                                                <input type="text" name="from_head_vat" class="form-control roundcorner" style="width: 100%;">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Quotation Details -->
                    <div class="row">
                        <table cellpadding="5" border="0" cellspacing="0" class="w-100 table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                    <th colspan="6">
                                        <h5 class="card-title m-0" style="display: inline;">Quotation Details</h5>
                                        <input type="text" name="qtDetails" style="display: inline; width: 200px;" class="form-control roundcorner">
                                    </th>
                                    <th>
                                        <h5 class="card-title m-0" style="display: inline;">Fee Quote Date</h5>
                                        <input type="text" name="qtDate" style="display: inline; width: 200px;" class="form-control roundcorner">
                                    </th>
                                    <!-- <th>
                                <h5 class="card-title m-0"></h5>
                            </th> -->
                                </tr>
                                <!-- 2 -->
                                <tr>
                                    <td colspan="6">
                                        <h5 class="card-title m-0" style="display: inline;">Quote Number:</h5>
                                        <input type="text" name="qtNumber" style="display: inline; width: 200px;" class="form-control roundcorner">
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0" style="display: inline;"> Fee Quote Expiration Date</h5>
                                        <input type="text" name="qtExDate" style="display: inline; width: 200px;" class="form-control roundcorner">
                                    </td>
                                    <!-- <td>
                                <h5 class="card-title m-0"></h5>
                            </td> -->
                                </tr>

                            </thead>
                        </table>
                        <table cellpadding="5" border="0" cellspacing="0" class="w-100 service_table table table-striped table-bordered nowrap" id="example">
                            <thead>
                                <tr>
                                    <td>
                                        <h5 class="card-title m-0">Item</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Product</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Product Code</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Quantity</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Subscription Period</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Product Fee</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Price</h5>
                                    </td>
                                    <td>
                                        <h5 class="card-title m-0">Total Product Fees <i class="fas fa-plus-circle text-success h5 additems m-0 ps-1"></i></h5>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="listitems" data-count='1'>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="number" id="item_name_1" class="form-control item_name" required="" name="item_name[]"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_product_1" class="form-control item_product" required="" name="item_product[]"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_product_code_1" class="form-control item_product_code" required="" name="item_product_code[]" step="0.01"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_quantity_1" class="form-control item_quantity" required="" name="item_quantity[]" step="0.01"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_subscription_fee_1" class="form-control item_subscription_fee" required="" name="item_subscription_fee[]" step="0.01"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_product_fee_1" class="form-control item_product_fee" required="" name="item_product_fee[]" step="0.01"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_price_1" class="form-control item_price" required="" name="item_price[]" step="0.01"></div>
                                    </td>
                                    <td class="prd_data">
                                        <div class="input-group"><input type="text" id="item_total_1" class="form-control item_total rounded" required="" name="item_total[]" step="0.01">
                                            <div class="remove items_r p-2"><i class="fa fa-trash text-danger"></i></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tfoot>
                        <tr>
                            <td> </td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <th>
                                <p class="text-success">Total (USD)</p>
                            </th>
                            <td>
                                <div class="input-group"><input type="number" class="form-control item_grand_total text-success" required="" name="item_grand_total" step="0.01" readonly></div>
                            </td>
                        </tr>
                    </tfoot> -->
                        </table>
                    </div>
                    <!--  Quotation Details -->
                    <!-- Service section-->
                    <!-- <div class="row">
                        <div class="col-md-12 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Service Information</h5>
                                </div>
                                <div class="card-body">
                                    <table cellpadding="5" border="0" cellspacing="0" class="w-100 service_table table table-striped table-bordered nowrap" id="example">
                                        <thead>
                                            <tr>
                                                <th style="width:12%">Service</th>
                                                <th style="width:10%">Quantity</th>
                                                <th style="width:12%">Unit price (USD)</th>
                                                <th style="width:10%">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="m-0">Total (USD)</p> <i class="fas fa-plus-circle text-success h5 additems m-0 ps-1"></i>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="listitems" data-count='1'>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="text" id="item_name_1" class="form-control item_name" required="" name="item_name[]"></div>
                                                </td>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="number" id="item_qty_1"  class="form-control item_qty" required="" name="item_qty[]"></div>
                                                </td>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="number" id="item_price_1"  class="form-control item_price" required="" name="item_price[]" step="0.01"></div>
                                                </td>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="number" id="item_total_1"  class="form-control item_total rounded" required="" name="item_total[]" step="0.01" readonly>
                                                        <div class="remove items_r p-2"><i class="fa fa-trash text-danger"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td> </td>
                                                <td></td>
                                                <th>
                                                    <p class="text-success">Total (USD)</p>
                                                </th>
                                                <td>
                                                    <div class="input-group"><input type="number" class="form-control item_grand_total text-success" required="" name="item_grand_total" step="0.01" readonly></div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Service section -->
                    <!-- Method section-->
                    <!-- <div class="row">
                        <div class="col-md-12 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Method Information</h5>
                                </div>
                                <div class="card-body">
                                    <table cellpadding="5" border="0" cellspacing="0" class="w-100 method_table table table-striped table-bordered nowrap" id="example">
                                        <thead>
                                            <tr>
                                                <th style="width:12%">Method</th>
                                                <th style="width:12%">Date</th>
                                                <th style="width:10%">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="m-0">Total (USD)</p> <i class="fas fa-plus-circle text-success h5 additems m-0 ps-1"></i>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="listmethods" data-count='1'>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="text" id="mathod_name_1" class="form-control mathod_name" required="" name="mathod_name[]"></div>
                                                </td>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="date" id="mathod_date_1" onchange="calculate_method(this)" class="form-control mathod_date" required="" name="mathod_date[]"></div>
                                                </td>
                                                <td class="prd_data">
                                                    <div class="input-group"><input type="number" id="method_total_1" onchange="calculate_method(this)" class="form-control method_total rounded" required="" name="method_total[]" step="0.01">
                                                        <div class="remove items_r p-2"><i class="fa fa-trash text-danger"></i></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- method section -->

                    <!-- Product or Service Terms: -->
                    <div class="row">
                        <table cellpadding="5" border="0" cellspacing="0" class="w-100 table table-striped table-bordered nowrap">
                            <tr>
                                <th colspan="6">
                                    <h5 class="card-title m-0">Product or Service Terms:</h5>
                                </th>
                            </tr>
                            <tr>
                                <td class="card-title m-0">
                                    <!-- <textarea class="card-title m-0 form-control roundcorner" style="width: 100%;" name="productTS" cols="30" rows="10"></textarea> -->
                                    <h6 class="card-title m-0 form-control roundcorner"> The Service Start Date for the above service provided by ASCENT FINTECH shall be the date of receipt of the above Total Fees. <br>
                                        The Line Item 1 Subscription, Line Item 2, 3 and 4 shall commence upon the signing of the Fee Quotation on a date both customer and ASCENT FINTECH agreed. Line Item 5 and 6 is Optional. <br>
                                        Technical Support shall commence on the same date of service subscription via supported channel including e-mail and telecommunication on Business Day (Monday to Friday), from 10am-6pm <br>
                                        (Singapore Time Zone)
                                    </h6>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="row">
                        <table cellpadding="5" border="0" cellspacing="0" class="w-100 table table-striped table-bordered nowrap">
                            <tr>
                                <th colspan="6">
                                    <h5 class="card-title m-0">Terms and Conditions as below:</h5>
                                </th>
                            </tr>
                            <!-- <tr>
                                <td>
                                    <textarea class="card-title m-0 form-control roundcorner" style="width: 100%;" name="termCond" cols="30" rows="10"></textarea>
                                </td>
                            </tr> -->
                            <tr>
                                <td>
                                    <h6 class="card-title m-0 form-control roundcorner">1. By signing this Legal Fee Quotation ("<span style="text-decoration: underline;">Schedule</span>") or issuing a purchase order referencing this Schedule</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="card-title m-0 form-control roundcorner">2. Fees are exclusive of any applicable sales, goods and services, GST or withholding tax (if any), and will be invoiced starting on the above Service Start Date. Payment can be remitted to ASCENT FINTECH in US$ to a bank account specified by ASCENT FINTECH</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="card-title m-0 form-control roundcorner">3. Once accepted, this Schedule shall be a binding commitment to purchase the above service beginning on the above subscription start date. Acceptance of this Schedule is expressly limited to the terms of ASCENT FINTECH written offer. Once accepted, this Schedule and the terms and conditions referenced herein will be the complete and exclusive statement of the Agreement. Any modifications proposed by Customer are expressly rejected by ASCENT FINTECH and shall not become part of the Agreement in the absence of ASCENT FINTECH written acceptance.</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="card-title m-0 form-control roundcorner">4. All fees are stated in USD and exclude prevailing rate of goods & services taxes. The Licensee acknowledges that upon signing this order form, the licensee has read, understood, and accepted the terms and conditions set out and they are hereby incorporated by reference here.</h6>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- Product or Service Terms: -->
                    <div class="row d-flex">
                        <div class="d-flex col-md-6 py-3">
                            <div>
                                <h6 class="card-title m-0"> <strong>The Above Legal Fee Quotation Is Duly <br> Accepted By The Below Parties: </strong> </h6>
                            </div>
                        </div>

                        <div class="d-flex col-md-6 py-3">
                            <div>
                                <h6 class="card-title m-0"> <strong>ASCENT GLOBAL FINTECH SOLUTIONS PTE. LTD. <br> “ASCENT FINTECH”</strong> </h6>
                            </div>
                        </div>
                    </div>

                    <!-- Footer section-->
                    <div class="row d-flex">
                        <div class="d-flex col-md-6 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Left Footer Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 hd_box">
                                            <div class="form-group">
                                                <label class="fl">Signature <font color="#FF0000">*</font></label>
                                                <input type="text" name="lcompany_Signature" class="form-control roundcorner" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Name</label>
                                                <input type="text" name="lcompany_Name" class="form-control roundcorner" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Title</label>
                                                <input type="text" name="lcompany_Title" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <!-- <div class="form-group">
                                        <label class="fl">Address Line 2</label>
                                        <input type="text" name="company_address2" class="form-control roundcorner" style="width: 100%;" id="company_address2">
                                    </div> -->
                                            <div class="form-group">
                                                <label class="fl">Date</label>
                                                <input type="date" name="lcompany_Date" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <!-- <div class="form-group">
                                        <label class="fl">Withheld tax</label>
                                        <input type="text" name="company_withheldtex" class="form-control roundcorner" style="width: 100%;" id="company_withheldtex" value="917369274">
                                    </div> -->
                                            <!-- <div class="form-group">
                                        <label class="fl">Business Number</label>
                                        <input type="text" name="company_business_number" class="form-control roundcorner" style="width: 100%;" id="company_business_number" value="558327284">
                                    </div> -->
                                            <!-- <div class="form-group">
                                        <label class="fl">Document Type</label>
                                        <input type="text" name="document_type" class="form-control roundcorner" style="width: 100%;" id="document_type" value="Electronic Document">
                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex col-md-6 py-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Right Footer Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12 hd_box">
                                            <div class="form-group">
                                                <label class="fl">Signature <font color="#FF0000">*</font></label>
                                                <input type="text" name="rcompany_Signature" class="form-control roundcorner" style="width: 100%;" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="fl">Name</label>
                                                <input type="text" name="rcompany_Name" class="form-control roundcorner" style="width: 100%;" required>
                                            </div>
                                            <!-- <div class="form-group">
                                        <label class="fl">Title</label>
                                        <input type="text" name="rcompany_Title" class="form-control roundcorner" style="width: 100%;">
                                    </div> -->
                                            <!-- <div class="form-group">
                                        <label class="fl">Address Line 2</label>
                                        <input type="text" name="company_address2" class="form-control roundcorner" style="width: 100%;" id="company_address2">
                                    </div> -->
                                            <div class="form-group">
                                                <label class="fl">Date</label>
                                                <input type="date" name="rcompany_Date" class="form-control roundcorner" style="width: 100%;">
                                            </div>
                                            <!-- <div class="form-group">
                                        <label class="fl">Withheld tax</label>
                                        <input type="text" name="company_withheldtex" class="form-control roundcorner" style="width: 100%;" id="company_withheldtex" value="917369274">
                                    </div> -->
                                            <!-- <div class="form-group">
                                        <label class="fl">Business Number</label>
                                        <input type="text" name="company_business_number" class="form-control roundcorner" style="width: 100%;" id="company_business_number" value="558327284">
                                    </div> -->
                                            <!-- <div class="form-group">
                                        <label class="fl">Document Type</label>
                                        <input type="text" name="document_type" class="form-control roundcorner" style="width: 100%;" id="document_type" value="Electronic Document">
                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer section -->
                    <div class="row">
                        <div class="col-md-12 pt-5 text-end">
                            <button type="submit" class="btn btn-info text-white px-5">Generate</button>
                            <input type="hidden" value="1" id="item_count" />
                            <!-- <input type="hidden" value="1" id="method_count" /> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>ḍ