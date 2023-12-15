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
                     Customer List
                     <span class="material-symbols-outlined ps-2 fs-8">arrow_forward_ios</span>
                     <b class="fs-6">Details</b>
                  </h6>
               </div>

               <div class="dealMain">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="">
                           <div class="card mb-3">
                              <div class="card-header">
                                 <h6>Summary</h6>
                              </div>
                              <div class="card-body p-0">
                                 <div class="dealSummary__aside">
                                    <p>Dues: <span class="text-danger">3000</span></p>
                                    <p>Status: <span class="text-success">Active</span></p>
                                    <p>Customer Type: <span class="text-success">Pad</span></p>

                                 </div>
                              </div>
                           </div>

                           <div class="card">
                              <div class="card-header">
                                 <h6>Connection Details</h6>

                                 <div class="dealSummary__headBtn">
                                    <a href="#">
                                       Edit <span class="material-symbols-outlined">edit</span>
                                    </a>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div class="mb-3">
                                    <span class="fs-12 grey200 fontwight-500 pb-1">Service (Package)</span>
                                    <span class="d-flex align-items-center gap-2 black100 fs-7 fontwight-500">
                                       <div class="icon text-center">
                                          <img src="assets/images/1.png" alt="">
                                       </div>
                                       Internet
                                    </span>
                                 </div>
                                 
                                 <div class="mb-3">
                                    <span class="fs-12 grey200 fontwight-500 pb-1">Router ID</span>
                                    <p class="black100 fs-7 fontwight-500">admin123@admin.com</p>
                                 </div>

                                 <div class="mb-3">
                                    <span class="fs-12 grey200 fontwight-500 pb-1">Router Password</span>
                                    <p class="black100 fs-7 fontwight-500">admin123</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="dealSummary__body">
                           <div class="row mb-3">
                              <div class="col-md-12">
                                 <div class="card">
                                    <div class="card-header">
                                       <h6>Personal Information</h6>

                                       <div class="dealSummary__headBtn">
                                          <a href="#">
                                             Edit <span class="material-symbols-outlined">edit</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">Name</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">John ABC</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">User Name</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">john_abc</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">User Password</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">admin123</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">Phone#</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">054 654 6524</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">WhatsApp#</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">054 654 6524</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">Address</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">abc street, city, state, country,
                                                zip code</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">Google Address URL</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500"><a
                                                   href="https://www.google.com/maps">https://www.google.com/maps</a>
                                             </p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">CNIC#</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">42401-82594587-7</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">CNIC Issue Date</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">02 June 2018</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3 align-items-center">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">CNIC Expire Date</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <p class="black100 fs-7 fontwight-500">02 June 2028</p>
                                          </div>
                                       </div>

                                       <div class="row mb-3">
                                          <div class="col-lg-2 col-md-3 col-5 text-end">
                                             <span class="fs-12 grey200 fontwight-500">CNIC Fornt & Back</span>
                                          </div>
                                          <div class="col-lg-10 col-md-9 col-7">
                                             <div class="d-flex gap-3">
                                                <div class="cnicimg">
                                                   <img src="assets/images/cnic-fornt.png" alt="">
                                                </div>
                                                <div class="cnicimg">
                                                   <img src="assets/images/cnic-back.png" alt="">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-12">
                                 <div class="card">
                                    <div class="card-header">
                                       <h6>Invoice Details</h6>

                                       <div class="dealSummary__headBtn">
                                          <a href="#" class="">
                                             View
                                             <span class="material-symbols-outlined">visibility</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="card-body">
                                       <table class="normalTable" style="width:100%; border: none;">
                                          <thead>
                                             <tr>
                                                <th>
                                                   <h6>Month</h6>
                                                </th>
                                                <th>
                                                   <h6>Amount</h6>
                                                </th>
                                                <th>
                                                   <h6>Pay</h6>
                                                </th>
                                                <th>
                                                   <h6>Discount</h6>
                                                </th>
                                                <th>
                                                   <h6>Status</h6>
                                                </th>
                                                <th>
                                                   <h6>Closing Date</h6>
                                                </th>
                                                <th>
                                                   <h6>Payment Date</h6>
                                                </th>
                                                <th>
                                                   <h6>Payment Method</h6>
                                                </th>
                                                <th>
                                                   <h6>Collection To</h6>
                                                </th>
                                             </tr>
                                          </thead>

                                          <tbody>
                                             <tr>
                                                <td>August</td>
                                                <td>RS 1500</td>
                                                <td>RS 0</td>
                                                <td>Rs 0</td>
                                                <td>
                                                   <div class="tableDataStatus bg-primary">Open <span
                                                         class="material-symbols-outlined">award_star</span></div>
                                                </td>
                                                <td><span class="text-danger">10 Aug 2023</span></td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                             </tr>

                                             <tr>
                                                <td>July</td>
                                                <td>RS 1500</td>
                                                <td>RS 0</td>
                                                <td>Rs 0</td>
                                                <td>
                                                   <div class="tableDataStatus bg-danger">Pandding <span
                                                         class="material-symbols-outlined">award_star</span></div>
                                                </td>
                                                <td><span class="text-danger">10 July 2023</span></td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                             </tr>

                                             <tr>
                                                <td>June</td>
                                                <td>RS 1500</td>
                                                <td>RS 1500</td>
                                                <td>Rs 0</td>
                                                <td>
                                                   <div class="tableDataStatus">Closed <span
                                                         class="material-symbols-outlined">award_star</span></div>
                                                </td>
                                                <td><span class="text-danger">10 June 2023</span></td>
                                                <td>08 June 2023</td>
                                                <td>E-banking</td>
                                                <td>Admin</td>
                                             </tr>

                                             <tr>
                                                <td>May</td>
                                                <td>RS 1500</td>
                                                <td>RS 1500</td>
                                                <td>Rs 0</td>
                                                <td>
                                                   <div class="tableDataStatus">Closed <span
                                                         class="material-symbols-outlined">award_star</span></div>
                                                </td>
                                                <td><span class="text-danger">10 May 2023</span></td>
                                                <td>04 May 2023</td>
                                                <td>Cash</td>
                                                <td>User 1</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row mb-3">
                              <div class="col-md-12">
                                 <div class="card">
                                    <div class="card-header">
                                       <h6>Complaine Details</h6>

                                       <a href="#" class="cardHeader-btn">
                                          <span class="material-symbols-outlined">add_circle</span>
                                       </a>
                                    </div>
                                    <div class="card-body">
                                       <table class="normalTable" style="width:100%; border: none;">
                                          <thead>
                                             <tr>
                                                <th>
                                                   <h6>Complaine#</h6>
                                                </th>
                                                <th>
                                                   <h6>Assing Agent</h6>
                                                </th>
                                                <th>
                                                   <h6>Lunch Date</h6>
                                                </th>
                                                <th>
                                                   <h6>Type</h6>
                                                </th>
                                                <th>
                                                   <h6>Status</h6>
                                                </th>
                                                <th>
                                                   <h6>Message</h6>
                                                </th>
                                             </tr>
                                          </thead>

                                          <tbody>
                                             <tr>
                                                <td class="grey200"><a href="complain.php" class="fs-7 fw-bold text-decoration-underline green-text link">CP-001</a></td>
                                                <td>User 01</td>
                                                <td>12 June 2023</td>
                                                <td>Wire Damage</td>
                                                <td>
                                                   <div class="tableDataStatus bg-primary">Open <span
                                                         class="material-symbols-outlined">award_star</span></div>
                                                </td>
                                                <td class="text-wrap grey200 fs-12">Hi there, I received my armchair
                                                   today in the mail and I noticed that the material has a tear in it.I
                                                   would like a replacement sent to me or to be issued a refund.</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
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
</body>
<?php include("includes-ui/page-end.php"); ?>