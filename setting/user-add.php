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
                           <div class="settingMain-panelBox">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="channels-card">
                                       <h6>Add New User</h6>

                                       <div class="channelCard-body">
                                          <form>
                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_id">User ID</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="text" id="user_id" name="user_id" disabled value="1001" placeholder="Enter User ID">
                                                </div>
                                             </div>

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_name">Name</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="text" id="user_name" name="user_name" placeholder="Enter User Name">
                                                </div>
                                             </div>

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_email">Email ID</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="email" id="user_email" name="user_email" placeholder="Enter User Email">
                                                </div>
                                             </div>

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_phone">Phone Number</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="text" id="user_phone" name="user_phone" placeholder="Enter Phone Number">
                                                </div>
                                             </div>

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_whatsapp">Whatsapp Number</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="text" id="user_whatsapp" name="user_whatsapp" placeholder="Enter Whatsapp Number">
                                                </div>
                                             </div>

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_role">Role</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <select name="user_role" id="user_role">
                                                      <option value="" selected disabled>- Select -</option>
                                                      <option value="1">Admin</option>
                                                      <option value="2">Bill Collect</option>
                                                      <option value="3">Complain Officer</option>
                                                   </select>
                                                </div>
                                             </div>

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_address">Address</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="text" id="user_address" name="user_address" placeholder="Enter Compay Address">
                                                </div>
                                             </div> 

                                             <div class="row mb-3">
                                                <div class="col-md-2">
                                                   <label for="user_salary">Salary</label>
                                                </div>
                                                <div class="col-md-5">
                                                   <input type="text" id="user_salary" name="user_salary" placeholder="Enter User Salary">
                                                </div>
                                             </div> 

                                             <div class="row">
                                                <div class="col-md-7">
                                                   <a href="#" class="btn bg-primary pe-3 ps-2 d-inline-flex align-items-center">
                                                      <span class="material-symbols-outlined me-2">add</span> Add New User
                                                   </a>
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
