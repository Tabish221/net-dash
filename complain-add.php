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
                     <b class="fs-5 grey600 fontwight-500"> Add Complain </b>
                  </h6>

                  <a href="#" class="btn btn-primary">
                     <span class="material-symbols-outlined">add</span>
                     Add New Complain
                  </a>
               </div>

               <div class="row mb-3">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                              <h6 class="fs-5 fw-bold grey600 pb-4">User Infomation</h6>

                              <span  class="fs-6 fontwight-500 grey200 pb-4">Complain ID: <em>CP-009</em></span>
                           </div>

                           <div class="row justify-content-between">
                              <div class="col-lg-3  col-md-4">
                                 <div class="theamform-feild">
                                    <label for="">Select Date <span>*</span></label>
                                    <input type="date" placeholder="Enter user ID fill data auto">
                                 </div>
                              </div>
                              <div class="col-lg-3 col-md-4">
                                 <div class="theamform-feild">
                                    <label for="">User ID <span>*</span></label>
                                    <input type="text" placeholder="Enter user ID Data Auto Filled">
                                 </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">Full Name <span>*</span></label>
                                    <input type="text" placeholder="User Full Name">
                                 </div>
                              </div>
   
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">Phone Number <span>*</span></label>
                                    <input type="text" placeholder="Phone Number">
                                 </div>
                              </div>
                              
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">WhatsApp Number <span>*</span></label>
                                    <input type="text" placeholder="WhatsApp Number">
                                 </div>
                              </div>
   
                              <div class="col-lg-4 col-md-6">
                                 <div class="theamform-feild">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="text" placeholder="Email Address">
                                 </div>
                              </div>

                              <div class="col-lg-8 col-md-12">
                                 <div class="theamform-feild">
                                    <label for="">Address <span>*</span></label>
                                    <input type="text" placeholder="Address">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="card text-start">
                  <div class="card-body">
                     <div class="userDetail">
                        <form action="">
                           <div class="theamform">
                              <div class="row">
                                 <h6 class="fs-5 fw-bold grey600 pb-4">Complain Details</h6>

                                 <div class="row justify-content-between">
                                    <div class="col-lg-4 col-md-4">
                                       <div class="theamform-feild">
                                          <label for="">Complain Type <span>*</span></label>
                                          <select class="complaintype">
                                             <option value="0" selected disabled>Select Complain Type</option>
                                             <option value="1">Wire Change</option>
                                             <option value="2">Connection Issue</option>
                                             <option value="3">Shitting Home</option>
                                             <option value="4">Shiting Router</option>
                                             <option value="othercomplaintype">Other</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                       <div class="theamform-feild otherComplainType" style="display: none;">
                                          <label for="">Write Your Complain Type <span>*</span></label>
                                          <input type="text" placeholder="Write Your Complain Type">
                                       </div>
                                    </div>
   
                                    <div class="col-lg-4 col-md-4">
                                       <div class="theamform-feild">
                                          <label for="">Staff <span>*</span></label>
                                          <select>
                                             <option value="0" selected disabled>Select Staff</option>
                                             <option value="1">User 1</option>
                                             <option value="2">User 2</option>
                                             <option value="3">On Call</option>
                                          </select>
                                       </div>
                                    </div>

                                 </div>

                                 
                                 <div class="col-lg-12 col-md-12">
                                    <div class="theamform-feild">
                                       <label for="">Complain Box <span>*</span></label>
                                       <textarea placeholder="Write complain here!!!"></textarea>
                                    </div>
                                 </div>



                                 <hr class="divider mb-4 mt-3">

                                 <div class="col-md-12 text-end">
                                    <div class="theamform-btn">
                                       <button type="submit"
                                          class="btn btn-primary py-3 px-4 text-white fw-bold fs-6 d-inline-flex align-items-center gap-2 justify-content-end">
                                          <span class="material-symbols-outlined">add</span> Add Customer</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
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