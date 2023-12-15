<?php include("../includes-ui/page-start.php"); ?>
   <head>
      <base href="../">
      <?php include("../includes-ui/compatibility.php"); ?>
      <?php include("../includes-ui/style.php"); ?>
      <meta name="description" content="">
      <title>DINO Deshboard | ...</title>
   </head>
   <body>
      <div class="container-fluid pe-0 ps-0">
      <div class="mainPage">
         <?php include("../includes-ui/aside-2.php"); ?>
         <div class="mainBody" >
            <?php include("../includes-ui/header-2.php"); ?>
   
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
                           <?php  include("includes/setting-menu.php"); ?>
                        </div>

                        <div class="col-md-9 col-sm-8">
                           <div class="card">
                              <div class="card-header">
                                 <div class="search d-flex align-items-center">
                                    <span class="material-symbols-outlined me-2 grey200">search</span>
                                    <input type="text" placeholder="Search User">
                                 </div>

                                 <div class="customSetting-btn">
                                    <a class="btn btn-primary px-5 d-inline-flex align-items-center">
                                       <span class="material-symbols-outlined me-2">add</span> Add User
                                    </a>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div class="tablecard-body settingUserTable">
                                    <table class="leadsTable">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>Whatsapp</th>
                                             <th>Role</th>
                                             <th style="width: 200px">Address</th>
                                             <th>Salary</th>
                                             <th>Status</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>

                                       <tbody>
                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
                                          </tr>

                                          <tr>
                                             <td><a href="#" class="text-primary link-opacity-50-hover">1001</a></td>
                                             <td>Ahmed Sheikh</td>
                                             <td>a.sheikh@net.com</td>
                                             <td>03415869325</td>
                                             <td>03415869325</td>
                                             <td>Bill Collect</td>
                                             <td>abc, Area Xyz, Karachi</td>
                                             <td>30000</td>
                                             <td class="text-success">Active</td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <button class="btn btn-danger">InActive</button>
                                                   <a href="setting/user-edit.php"  class="btn btn-primary">Edit</a>
                                                </div>
                                             </td>
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
      
      
      <?php include("../includes-ui/scripts.php"); ?>
      <script src="assets/js/dragula/cdn.js"></script>

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

         $(document).on( "click", '.filterSelector-areaAdd', function(){
            $('.filterSelector-selected ul').append($(this).parent());
         });
         $(document).on( "click", '.filterSelector-areaRemove', function(){
            $('.filterSelector-available  ul').append($(this).parent());
         });

         var dragList = [];
         $('.filterSelector-area ul').each(function(index , data){
            dragList[index] = data;
         })
         dragula(dragList)
         .on('drag', function(el) {
            // add 'is-moving' class to element being dragged
            el.classList.add('is-moving');            
         })
         .on('dragend', function(el) {
            // remove 'is-moving' class from element after dragging has stopped
            el.classList.remove('is-moving');

            // add the 'is-moved' class for 600ms then remove it
            window.setTimeout(function() {
               el.classList.add('is-moved');
               window.setTimeout(function() {
                  el.classList.remove('is-moved');
               }, 600);
            }, 100);
         });


      </script>


   </body>
<?php include("../includes-ui/page-end.php"); ?>
