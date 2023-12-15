<div class="addCustomerPanel-overlay"></div>

<div class="addCustomerPanel">
    <div class="addCustomerPanel-head">
        <span class="material-symbols-outlined addCustomerPanel-closed">keyboard_double_arrow_right</span>
        <span class="material-symbols-outlined">open_in_full</span>
        <span class="material-symbols-outlined">article</span>
        <span class="material-symbols-outlined">help</span>
    </div>

    <div class="addCustomerPanel-body">
        <div class="heading">
            <h6>New Customer</h6>
        </div>
        <div class="addCustomerPanel-form">
            <form>
                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="date">
                        <span class="material-symbols-outlined">more_time</span>
                        Added
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="date" id="date">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">person_4</span>
                        Customer Full Name
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="Text" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">captive_portal</span>
                        Country
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="text" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">call</span>
                        Phone Number
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="text" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">mark_email_read</span>
                        Email
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="email" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">home_repair_service</span>
                        Services
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="text" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">new_releases</span>
                        Brand Name
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="text" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">attach_money</span>
                        Project Cost
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="number" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">account_balance</span>
                        Transaction Amount
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="number" placeholder="Empty">
                    </div>
                </div>

                <div class="row align-items-center mb-1">
                    <div class="col-md-4">
                    <label for="#">
                        <span class="material-symbols-outlined">manage_accounts</span>
                        Sales Agent Name
                    </label>
                    </div>

                    <div class="col-md-8">
                    <input type="text" placeholder="Empty">
                    </div>
                </div>

                <div class="row">
                    <div class="addCustomerPanel-commit">
                    <span>T</span>
                    <textarea placeholder="Comments"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="addCustomerPanel-footer d-flex align-items-center justify-content-end">
        <button class="btn btn-secondary">Cancel</button>
        <button class="btn btn-success d-flex align-items-center ms-2">Save Lead <span class="material-symbols-outlined ms-1">save</span></button>
    </div>
</div>

<script>
    // ADD NEW CUSTOMER
    // HIDE 
    $(".addCustomerPanel-closed").click(function(){
        $(".addCustomerPanel").hide();
        $(".addCustomerPanel").css("right", "-1500px");
        $(".addCustomerPanel-overlay").hide();
    })
    // SHOW
    $(".addCustomerBtn").click(function(){
        $(".addCustomerPanel").show();
        $(".addCustomerPanel").css("right", "0px");
        $(".addCustomerPanel-overlay").show();
    })
</script>