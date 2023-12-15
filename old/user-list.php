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
         <?php include("includes-ui/aside-2.php"); ?>
         <div class="mainBody" >
            <?php include("includes-ui/header-2.php"); ?>
   
               <div class="bodyPanel" >
                  <div class="bodyPanel__head ps-0 d-flex align-items-center justify-content-between">
                     <h6 class="fs-6">
                        <span class="material-symbols-outlined fs-5">box</span>
                        Dashboard
                        <span class="material-symbols-outlined ps-2 fs-8">arrow_forward_ios</span>
                        <b class="fs-6">Setting</b>
                     </h6>
                  </div>
                  
                  <div class="settingMain">
                     <div class="row">
                        <div class="col-md-3 col-sm-4">
                           <div class="settingAside" >
                              <div class="card">
                                 <div class="card-body">
                                    <div class="">
                                       <div class="title">
                                          <h6 class="fs-20 d-flex align-items-center grey600">
                                             <span class="material-symbols-outlined fs-5 me-2 grey300">tune</span>
                                             Setting
                                          </h6>
                                       </div>

                                       <div class="search">
                                          <input type="text" placeholder="Search">
                                          <span class="material-symbols-outlined">search</span>
                                       </div>

                                       <ul class="list-unstyled ps-0">
                                          <li>
                                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-personal" aria-expanded="false">
                                                <span class="material-symbols-outlined">arrow_drop_down</span> General Settings 
                                             </button>
                                             <div class="collapse" id="dashboard-personal">
                                                <ul class="">
                                                   <li class="active">
                                                      <a href="#" class="" data-targetit="box-gernealsetting">Personal Information</a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </li>

                                          <li>
                                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-channel" aria-expanded="false">
                                                <span class="material-symbols-outlined">arrow_drop_down</span> Channel 
                                             </button>
                                             <div class="collapse" id="dashboard-channel">
                                                <ul class="">
                                                   <li><a href="#" data-targetit="box-channelsmail">Mail</a></li>
                                                   <li><a href="#">SMS</a></li>
                                                   <li><a href="#">Merchant</a></li>
                                                   <li><a href="#">Chat</a></li>
                                                   <li><a href="#">Calling</a></li>
                                                   <li><a href="#">Api Documentation</a></li>
                                                </ul>
                                             </div>
                                          </li>

                                          <li>
                                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-control" aria-expanded="false">
                                                <span class="material-symbols-outlined">arrow_drop_down</span> User & Control 
                                             </button>
                                             <div class="collapse" id="dashboard-control">
                                                <ul class="">
                                                   <li><a href="#" data-targetit="box-viewlist">User List</a></li>
                                                   <li><a href="#">User Detail</a></li>
                                                   <li><a href="#">Roles</a></li>
                                                </ul>
                                             </div>
                                          </li>

                                          <li>
                                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-brand" aria-expanded="false">
                                                <span class="material-symbols-outlined">arrow_drop_down</span> Brand 
                                             </button>
                                             <div class="collapse" id="dashboard-brand">
                                                <ul class="">
                                                   <li><a href="#" data-targetit="box-userlist">List</a></li>
                                                   <li><a href="#" data-targetit="box-branddetail">Brand Detail</a></li>
                                                </ul>
                                             </div>
                                          </li>

                                          <li>
                                             <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-customization" aria-expanded="false">
                                                <span class="material-symbols-outlined">arrow_drop_down</span> Customization 
                                             </button>
                                             <div class="collapse" id="dashboard-customization">
                                                <ul class="">
                                                   <li><a href="#" data-targetit="box-customization">Filter</a></li>
                                                   <li><a href="#">Product</a></li>
                                                   <li><a href="#">Package</a></li>
                                                </ul>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-9 col-sm-8">
                           <div class="userlistMain-panelBox">
                              <div class="userlist-card">
                                 <div class="userlist-cardHead d-flex align-items-center justify-content-between">
                                    <select>
                                       <option value="1">Active Brand (14)</option>
                                    <select>
   
                                    <div class="btn-group">
                                       <a class="btn btn-primary pe-3 ps-2 d-inline-flex align-items-center">
                                          <span class="material-symbols-outlined me-2">add</span> Add New Brand
                                       </a>
                                    </div>
                                 </div>
   
                                 <div class="userlist-cardBody">
                                    <div class="userlist-profile viewlistBtn">
                                       <div class="userlist-profileImg">
                                          <img src="assets/images/contact-user.png" alt="">
                                       </div>
                                       <div class="userlist-profileCont">
                                          <h6>Osama Ahmed</h6>

                                          <div class="tags">
                                             <em>CEO, </em>
                                             <div class="badge badge-warring">Super Admin</div>
                                          </div>

                                          <a href="#" class="email"><span class="material-symbols-outlined">mail</span>johnnyrose1877@gmail.com</a>
                                       </div>
                                    </div>

                                    <div class="userlist-profile viewlistBtn">
                                       <div class="userlist-profileImg">
                                          <img src="assets/images/contact-user.png" alt="">
                                       </div>
                                       <div class="userlist-profileCont">
                                          <h6>Osama Ahmed</h6>

                                          <div class="tags">
                                             <em>CEO, </em>
                                             <div class="badge badge-light">Agent</div>
                                          </div>

                                          <a href="#" class="email"><span class="material-symbols-outlined">mail</span>johnnyrose1877@gmail.com</a>
                                       </div>
                                    </div>

                                    <div class="userlist-profile viewlistBtn">
                                       <div class="userlist-profileImg">
                                          <img src="assets/images/contact-user.png" alt="">
                                       </div>
                                       <div class="userlist-profileCont">
                                          <h6>Osama Ahmed</h6>

                                          <div class="tags">
                                             <em>CEO, </em>
                                             <div class="badge">Teamlead</div>
                                          </div>

                                          <a href="#" class="email"><span class="material-symbols-outlined">mail</span>johnnyrose1877@gmail.com</a>
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
      
      <div class="addCustomerPanel-overlay"></div>

      <div class="userlistPanel">
         <div class="userlistPanel-head">
            <span class="material-symbols-outlined userlistPanel-closed">keyboard_double_arrow_right</span>
            <span class="material-symbols-outlined">help</span>
         </div>

         <div class="userlistPanel-body">
            <div class="userlistPanel-form">
               <div class="userlist-profile">
                  <div class="userlist-profileImg">
                     <img src="assets/images/contact-user.png" alt="">
                  </div>
                  <div class="userlist-profileCont">
                     <h6>Osama Ahmed</h6>

                     <div class="tags">
                        <em>CEO, </em>
                        <div class="badge badge-warring">Super Admin</div>
                     </div>

                     <a href="#" class="email"><span class="material-symbols-outlined">mail</span>johnnyrose1877@gmail.com</a>
                  </div>
               </div>
               <div class="setting-UserInfo pb-4">
                  <h6>User Infomation</h6>

                  <table>
                     <tbody><tr>
                        <td>First Name</td>
                        <td>English (United States)</td>
                     </tr>
                     <tr>
                        <td>Last Name</td>
                        <td>United States</td>
                     </tr>
                     <tr>
                        <td>Email</td>
                        <td>MMM D, YYYY</td>
                     </tr>
                     <tr>
                        <td>Role</td>
                        <td>12 Hours</td>
                     </tr>
                     <tr>
                        <td>Profile</td>
                        <td>(GMT 5:0) Pakistan Time (Asia/Karachi)</td>
                     </tr>
                     <tr>
                        <td>Added By</td>
                        <td>123,456.789</td>
                     </tr>
                     <tr>
                        <td>Alias</td>
                        <td>123,456.789</td>
                     </tr>
                     <tr>
                        <td>Phone</td>
                        <td>123,456.789</td>
                     </tr>
                     <tr>
                        <td>Mobile</td>
                        <td>123,456.789</td>
                     </tr>
                     <tr>
                        <td>Website</td>
                        <td>123,456.789</td>
                     </tr>
                     <tr>
                        <td>Fax</td>
                        <td>123,456.789</td>
                     </tr>
                     <tr>
                        <td>Date of Birth</td>
                        <td>123,456.789</td>
                     </tr>
                  </tbody></table>
               </div>
               <div class="setting-UserInfo pb-4">
                  <h6>Address Information</h6>

                  <table>
                     <tr>
                        <td>Street</td>
                        <td>English (United States)</td>
                     </tr>
                     <tr>
                        <td>City</td>
                        <td>United States</td>
                     </tr>
                     <tr>
                        <td>State</td>
                        <td>MMM D, YYYY</td>
                     </tr>
                     <tr>
                        <td>Zip Code</td>
                        <td>12 Hours</td>
                     </tr>
                     <tr>
                        <td>Country</td>
                        <td>(GMT 5:0) Pakistan Time (Asia/Karachi)</td>
                     </tr>
                  </table>
               </div>
               <div class="setting-UserInfo pb-4">
                  <h6>Groups</h6>

                  <table>
                     <tr>
                        <td>Member in</td>
                        <td>-</td>
                     </tr>
                  </table>
               </div>
               <div class="setting-UserInfo pb-4">
                  <h6 class="pb-2">Display Name Format & Preferences</h6>
                  <p class="fs-7 grey-600 pb-2">It applies to fullname in column of list view, lookup fields and user name</p>

                  <table class="selectTable">
                     <tr>
                        <td>Name Format</td>
                        <td>
                           <select>
                              <option value="0">Salutation, First Name, Last Name</option>
                           </select>
                        </td>
                     </tr>

                     <tr>
                        <td>Sort order preference</td>
                        <td>
                           <select>
                              <option value="0">Salutation, First Name, Last Name</option>
                           </select>
                        </td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
      </div>

      
      <?php include("includes-ui/scripts.php"); ?>

      <script>
         $(window).ready(function(){
            $('.menu-Bar').show();
            $(this).hide();
            $('.menu-Bar').addClass('open');
            $(this).removeClass('open');
            $('aside').addClass('closedBar');
            $('header').addClass('closedBar');
            removeasideclasses();
         });
         // ADD NEW CUSTOMER
         // HIDE 
         $(".userlistPanel-closed").click(function(){
            $(".userlistPanel").hide();
            $(".userlistPanel").css("right", "-1500px");
            $(".addCustomerPanel-overlay").hide();
         })
         // SHOW
         $(".viewlistBtn").click(function(){
            $(".userlistPanel").show();
            $(".userlistPanel").css("right", "0px");
            $(".addCustomerPanel-overlay").show();
         })
      </script>

   </body>
<?php include("includes-ui/page-end.php"); ?>
