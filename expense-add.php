<?php include("includes-ui/page-start.php"); ?>

<head>
   <?php include("includes-ui/compatibility.php"); ?>
   <?php include("includes-ui/style.php"); ?>
   <meta name="description" content="">
   <title>DINO Deshboard | ...</title>
</head>

<body>


   <div class="container-fluid pe-0 ps-0">
      <div class="mainPage">
         <div class="loader-overlay">
            <div class="loader-line"></div>
         </div>
         <?php include("includes-ui/aside.php"); ?>
         <div class="mainBody">
            <?php include("includes-ui/header.php"); ?>
            <div class="bodyPanel">
               <div class="bodyPanel__head ps-0 d-flex flex-wrap gap-2 justify-content-between">
                  <h6 class="d-flex align-items-center">
                     <span class="material-symbols-outlined fs-5 grey100">box</span>
                     <a href="#" class="fs-5 grey600 fontwight-500"> Dashboard </a>
                     <span class="material-symbols-outlined grey100 ps-2 fs-8">arrow_forward_ios</span>
                     <b class="fs-5 grey600 fontwight-500"> Add Expense </b>
                  </h6>
               </div>

               <div class="card">
                  <div class="card-body">
                     <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <h6 class="fs-5 fw-bold grey600 pb-4">Expense Infomation</h6>

                        <span  class="fs-6 fontwight-500 grey200 pb-4">Expense ID: <em>EX-009</em></span>
                     </div>

                     <div class="row justify-content-end">
                        <div class="col-md-4">
                           <div class="theamform-feild">
                              <label for="">Select Date <span>*</span></label>
                              <input type="date" placeholder="Enter user ID fill data auto">
                           </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-md-6">
                           <div class="theamform-feild">
                              <label for="ex_category">Category <span>*</span></label>
                              <select name="ex_category" id="ex_category">
                                 <option value="0" selected disabled>- Select -</option>
                                 <option value="1">Home</option>
                                 <option value="2">Office</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="theamform-feild">
                              <label for="ex_sub_category">Sub Category <span>*</span></label>
                              <select name="ex_sub_category" id="ex_sub_category" disabled>
                                 <option value="0" selected disabled>- Select -</option>
                                 <option value="1">Wire</option>
                                 <option value="2">Bill</option>
                                 <option value="3">Salary</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="theamform-feild">
                              <label for="ex_payment_method">Payment Method <span>*</span></label>
                              <select name="ex_payment_method" id="ex_payment_method">
                                 <option value="0" selected disabled>- Select -</option>
                                 <option value="1">Cash</option>
                                 <option value="2">Jazzcash</option>
                                 <option value="3">Easypaysa</option>
                                 <option value="3">UBL</option>
                                 <option value="3">HBL</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="theamform-feild">
                              <label for="ex_amount">Amount <span>*</span></label>
                              <input type="text" id="ex_amount" name="ex_amount" placeholder="Amount (PKR)">
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="theamform-feild">
                              <label for="ex_details">Details <span>*</span></label>
                              <textarea id="ex_details" name="ex_details" placeholder="Write Expense Details here!!!"></textarea>
                           </div>
                        </div>

                        <hr class="divider mb-4 mt-3">

                        <div class="col-md-12 text-end">
                           <div class="theamform-btn">
                              <button type="submit"
                                 class="btn bg-primary py-3 px-4 text-white fw-bold fs-6 d-inline-flex align-items-center gap-2 justify-content-end">
                                 <span class="material-symbols-outlined">add</span> Add Customer</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <?php include("includes-ui/scripts.php"); ?>

   <script>
      $('.complaintype').on("change", function () {
         console.log($(this).val());
         if($(this).val() == "othercomplaintype"){
            $('.otherComplainType').css('display', 'block')
         }
      })
   </script>
</body>

<?php include("includes-ui/page-end.php"); ?>