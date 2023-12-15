<div class="invoicePanel-overlay"></div>

<div class="invoicePanel">
    <div class="invoicePanel-head">
        <span class="material-symbols-outlined invoicePanel-closed">keyboard_double_arrow_right</span>
    </div>

    <div class="invoicePanel-body">
        <div class="heading">
            <h6>Invoices: <span>ALD1567-01</span></h6>
        </div>
        <div class="invoiceCard">
            <div class="company-details">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <img src="assets/images/aspire.png" alt="logo">
                        </div>
                    </div>
    
                    <div class="col-md-6 text-end">
                        <div class="address">
                            <p>
                                Address:1053 Irolo St Unit #12 Los Angeles, CA 90006,
                            </p>
                            <a href="tel:+18447166111">Phone:+18447166111</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="invoce-detail">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Invoice Number</h5>

                        <p>ALD1567-01</p>
                        <p>Issued Date: <em>10 Apr 2022</em></p>
                        <p>Due Date: <em>20 Apr 2022</em></p>
                    </div>

                    <div class="col-md-6 text-end">
                        <h5>Billed To</h5>

                        <p>Nerino J. Petro, Jr.</p>
                        <p>nerinopetro@cencomtech.com</p>
                    </div>
                </div>
            </div>

            <div class="item-detail">
                <h5>Items Details</h5>
                <p class="text-uppercase">BELOW ARE THE PAYMENT DETAILS</p>
            </div>

            <div class="items-table">
                <table class="invoiceTable table table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Products</th>
                            <th class="text-uppercase">Rate</th>
                            <th class="text-uppercase">Discount</th>
                            <th class="text-uppercase">Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>logo - logo - (Paid)</td>
                            <td>5244</td>
                            <td>5%</td>
                            <td>5244.00</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>- Federal Fee for Attestation of the Trademark = ONLY $899+tax - Attorney’s fee for the remaining Documentation = ONLY $399+tax Total = $1392 Including Tax - (Pending)</td>
                            <td>5244</td>
                            <td>5%</td>
                            <td>5244.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoice-cal">
                <div class="row">
                    <div class="col-md-6">
                        <div class="invoice-print">
                            <p>*THIS IS A SYSTEM GENERATED DOCUMENT POWERED BY DINOCAMP.*</p>

                            <button class="btn btn-success d-flex align-items-center ms-2">Print this page <span class="material-symbols-outlined ms-1">print</span></button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="invoice-total">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Subtotal</h4>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h4>$4131.00</h4>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Amount Paid</h4>
                                        </div>
                                        <div class="col-6">
                                            <h3>$2739</h3>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Amount Balance</h4>
                                        </div>
                                        <div class="col-6">
                                            <h3>$1392</h3>
                                        </div>
                                    </div>
                                </li>

                                <li class="grandtotal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Total</h4>
                                        </div>

                                        <div class="col-md-6">
                                            <h3>$4131.00</h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // ADD NEW CUSTOMER
    // HIDE 
    $(".invoicePanel-closed").click(function(){
        $(".invoicePanel").hide();
        $(".invoicePanel").css("right", "-1500px");
        $(".invoicePanel-overlay").hide();
    })
    // SHOW
    $(".invoiceBtn").click(function(){
        $(".invoicePanel").show();
        $(".invoicePanel").css("right", "0px");
        $(".invoicePanel-overlay").show();
    })
</script>