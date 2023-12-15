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
         <?php include("includes-ui/aside.php"); ?>
         <div class="mainBody">
            <?php include("includes-ui/header.php"); ?>

            <div class="bodyPanel">
               <div class="bodyPanel__head ps-0 d-flex align-items-center justify-content-between">
                  <h6 class="fs-6">
                     <span class="material-symbols-outlined fs-5">box</span>
                     Complain List
                     <span class="material-symbols-outlined ps-2 fs-8">arrow_forward_ios</span>
                     <b class="fs-6">Details</b>
                  </h6>
               </div>

               <div class="row mb-3">
                  <div class="col-lg-5 col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <h6>Customer Information</h6>
                        </div>
                        <div class="card-body">
                           <div class="row mb-3">
                              <div class="col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Customer Name</span>
                              </div>
                              <div class="col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500"><a href="customer.php"
                                       class="fs-7 fw-bold text-decoration-underline green-text link">Edwin Chan</a></p>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Phone#</span>
                              </div>
                              <div class="col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">0315-9286547</p>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">WhatsApp</span>
                              </div>
                              <div class="col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">0315-9286547</p>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Email</span>
                              </div>
                              <div class="col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">tabishtanveer@gmail.com</p>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Address</span>
                              </div>
                              <div class="col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">House# 710-A, Street# 07, Area Nazamabad,
                                    Nearest Hospital, Karachi, Pakistan</p>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Status</span>
                              </div>
                              <div class="col-md-9 col-7">
                                 <div class="tableDataStatus bg-primary">Open <span
                                       class="material-symbols-outlined">award_star</span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-lg-7 col-md-6">
                     <div class="card">
                        <div class="card-header align-items-start">
                           <h6>Complain Detail</h6>
                           <div class="">
                              <div class="theamform-feild text-end pb-0">
                                 <label for="" class="pb-0">Complain ID</label>
                                 <input class=" text-end border-0 bg-white px-0" type="text" disabled value="CP-001"
                                    placeholder="Enter user ID Data Auto Filled">
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row mb-3 align-items-center">
                              <div class="col-lg-2 col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Type</span>
                              </div>
                              <div class="col-lg-10 col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">Connecting Faild</p>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-lg-2 col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Details</span>
                              </div>
                              <div class="col-lg-10 col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                    to make a type specimen book. It has survived not only five centuries, but also the
                                    leap into electronic typesetting, remaining essentially unchanged. It was
                                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.</p>
                              </div>
                           </div>

                           <div class="row mb-3 align-items-center">
                              <div class="col-lg-2 col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Assign Staff</span>
                              </div>
                              <div class="col-lg-10 col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">User 1</p>
                              </div>
                           </div>

                           <div class="row mb-3 align-items-center">
                              <div class="col-lg-2 col-md-3 col-5">
                                 <span class="fs-12 grey200 fontwight-500">Assign Commit</span>
                              </div>
                              <div class="col-lg-10 col-md-9 col-7">
                                 <p class="black100 fs-7 fontwight-500">-</p>
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
                              <h6 class="fs-5 fw-bold grey600 pb-4">Staff Comment</h6>
                              
                              <div class="theamform-feild">
                                 <label for="">Staff Comment Box <span>*</span></label>
                                 <textarea placeholder="Write your comment here!!!"></textarea>
                              </div>
                              <hr class="divider mb-4 mt-3">
                              <div class="theamform-btn text-end">
                                 <button type="submit"
                                    class="btn btn-primary py-3 px-4 text-white fw-bold fs-6 d-inline-flex align-items-center gap-2 justify-content-end">
                                    <span class="material-symbols-outlined">fact_check</span> Complete Task</button>
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
</body>
<?php include("includes-ui/page-end.php"); ?>