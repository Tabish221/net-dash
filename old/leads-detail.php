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
                  <h6>
                     <span class="material-symbols-outlined">diamond</span>
                     Leads Management
                  </h6>

                  <div class="bodyPanel__headButton">
                     <span class="tableMoreOption__search">
                        <div class="dataTables_filter">
                           <label for="topsearch">
                              <span class="material-symbols-outlined">search</span>
                              <input type="text" placeholder="Search..." id="topsearch">
                           </label>
                        </div>
                     </span>

                     <div class="btn-group tableMoreOption__addNew">
                        <button type="button" class="btn btn-success addCustomerBtn">New</button>
                        <button type="button" class="btn btn-success" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                           <span class="material-symbols-outlined">expand_more</span>
                        </button>
                        <div class="dropdown-menu">
                           <div class="dropdown-item drpHead__addNew ">
                              <h6>Add New</h6>
                              <span class="material-symbols-outlined">help</span>
                           </div>
                           <div class="dropdown-item drpBody__addNew">
                              <ul>
                                 <li>
                                    <div class="text" href="#">
                                       <span class="material-symbols-outlined drpDrag__addNew">drag_indicator </span>
                                       <a href="#" class="addCustomerBtn">
                                          <span class="material-symbols-outlined drpTextIcon__addNew">article </span>
                                          New Customer Add
                                       </a>
                                    </div>

                                    <a href="#" class="material-symbols-outlined drpmore__addNew">more_horiz</a>
                                 </li>

                                 <li>
                                    <div class="text" href="#">
                                       <span class="material-symbols-outlined drpDrag__addNew">drag_indicator</span>
                                       <a href="#">
                                          <span
                                             class="material-symbols-outlined drpTextIcon__addNew">edit_document</span>
                                          Edit
                                       </a>
                                    </div>

                                    <a href="#" class="material-symbols-outlined drpmore__addNew">more_horiz</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="card">
                  <div class="card-body p-0">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="addCustomerPanel-Detail">
                              <div class="heading">
                                 <h6>Lead Information</h6>

                                 <a href="#" class="btn btn-primary d-flex align-items-center">
                                    Convert to Contact
                                    <span class="material-symbols-outlined ms-2 fs-6">contact_phone</span>
                                 </a>
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
                                          <input disabled type="text" value="July 20, 2023 (1:44 AM)">
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
                                          <input disabled type="Text" placeholder="Empty" value="ABC Customer">
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
                                          <input disabled type="text" placeholder="Empty" value="USA">
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
                                          <input disabled type="text" placeholder="Empty" value="+178-5412-69">
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
                                          <input disabled type="email" placeholder="Empty" value="abc@abc.com">
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
                                          <input disabled type="text" placeholder="Empty" value="Logo">
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
                                          <input disabled type="text" placeholder="Empty" value="DINO">
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
                                          <input disabled type="number" placeholder="Empty" value="10000">
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
                                          <input disabled type="number" placeholder="Empty" value="3000">
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
                                          <input disabled type="text" placeholder="Empty" value="Jack">
                                       </div>
                                    </div>
                                 </form>
                              </div>

                              <div class="addCustomerPanel-footer d-flex align-items-center justify-content-end">
                                 <button class="btn btn-success d-flex align-items-center me-2">Save Lead <span
                                       class="material-symbols-outlined ms-1">save</span></button>
                                 <button class="btn btn-secondary">Cancel</button>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="addCustomerPanel-chat">
                              <div class="heading">
                                 <h6>Lead History</h6>
                              </div>

                              <div class="timeline">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="timeline-container">
                                          <div class="timeline-end">
                                             <p>Jul 28, 2023</p>
                                          </div>

                                          <div class="timeline-continue">
                                             <div class="row timeline-right">
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>
                                                
                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                      <p>I would like a replacement sent to me or to be issued a
                                                         refund. by taimur ansari Jul 28, 2023</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row timeline-right">      
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>

                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row timeline-right">
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-12">
                                                   <div class="timeline-year">
                                                      <p>Jul 28, 2023</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row timeline-right">
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>
                                                      
                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                      <p>I would like a replacement sent to me or to be issued a
                                                         refund. by taimur ansari Jul 28, 2023</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row timeline-right">
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-12">
                                                   <div class="timeline-year">
                                                      <p>Jul 28, 2023</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row timeline-right">
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                      <p>I would like a replacement sent to me or to be issued a
                                                         refund. by taimur ansari Jul 28, 2023</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row timeline-right">
                                                <div class="timeline-box">
                                                   <div class="timeline-date">
                                                      01:48 AM

                                                      <div class="btnDel">
                                                         <span class="material-symbols-outlined">delete</span>
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="timeline-text">
                                                      <p>Note deleted-Taylor Moore Yesterday 23:16 Hi there, I
                                                         received my armchair today in the mail and I noticed that
                                                         the material has a tear in it.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="addCustomerPanel-commit">
                                 <span>T</span>
                                 <textarea placeholder="Comments"></textarea>
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

   <?php include("includes-ui/add-customer-panel.php") ?>

   <script>
      // Chat Always bottom
      $(document).ready(function () {
         var x = $(".addCustomerPanel-chat .timeline .timeline-container").innerHeight();
         $(".addCustomerPanel-chat .timeline").scrollTop(x);
      });
   </script>

</body>
<?php include("includes-ui/page-end.php"); ?>