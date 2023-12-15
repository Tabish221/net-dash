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
                              <div class="card mb-3">
                                 <div class="card-body">
                                    <div class="channels-card">
                                       <h6>Add Package</h6>

                                       <div class="channelCard-body">
                                          <form>
                                             <div class="row gy-3">
                                                <div class="col-md-6">
                                                   <label for="package_method_name" class="pb-2">Package Name</label>
                                                   <input type="text" id="package_method_name" placeholder="Enter Package Name">
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="package_service_type" class=" pb-2">Service Type</label>
                                                   <select name="package_service_type" id="package_service_type">
                                                      <option value="">- Select -</option>
                                                      <option value="0">Cable</option>
                                                      <option value="1">Internet</option>
                                                      <option value="2">Static IP</option>
                                                   </select>
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="package_cost" class="pb-2">Package Cost</label>
                                                   <input type="text" id="package_cost" placeholder="Enter Package Cost">
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="package_sell" class="pb-2">Package Sell</label>
                                                   <input type="text" id="package_sell" placeholder="Enter Package Sell">
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="package_sell" class="pb-2">Package Logo</label>
                                                   <input type="file" id="package_sell" placeholder="Enter Package Sell">
                                                </div>

                                                <div class="col-md-6 text-end d-flex align-items-end justify-content-end">
                                                   <button type="submit" class="btn bg-primary px-2 py-2 text-center fs-6 text-white d-inline-flex align-items-center justify-content-center">
                                                      <span class="material-symbols-outlined me-1 text-white">add</span> Payment Method
                                                   </button>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="card">
                                 <div class="card-header">
                                    <div class="search d-flex align-items-center">
                                       <span class="material-symbols-outlined me-2 grey200">search</span>
                                       <input type="text" placeholder="Search Payment Method">
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    <div class="customization-table">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>Icon</th>
                                                <th>Name</th>
                                                <th>Service Type</th>
                                                <th>Cost Rate</th>
                                                <th>Sell Rate</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>

                                          <tbody>
                                             <tr class="align-middle">
                                                <td>
                                                   <div class="icon">
                                                      <img src="assets/images/1.png" alt="">
                                                   </div>
                                                </td>
                                                <td>Orange</td>
                                                <td>Internet</td>
                                                <td><span class="text-primary">800</a></td>
                                                <td><span class="text-success">1000</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr class="align-middle">
                                                <td>
                                                   <div class="icon">
                                                      <img src="assets/images/1.png" alt="">
                                                   </div>
                                                </td>
                                                <td>Orange</td>
                                                <td>Internet</td>
                                                <td><span class="text-primary">800</a></td>
                                                <td><span class="text-success">1000</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
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
