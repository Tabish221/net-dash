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
                                       <h6>Add Service Type</h6>

                                       <div class="channelCard-body">
                                          <form>
                                             <div class="row">
                                                <div class="col-md-2">
                                                   <label for="expense_service">Service Name</label>
                                                </div>
                                                <div class="col-md-7">
                                                   <input type="text" id="expense_service" name="expense_service" placeholder="Enter Service Type Name">
                                                </div>
                                                <div class="col-md-3">
                                                   <button type="submit" class="btn bg-primary pe-3 ps-2 pb-1 pt-1 w-100 h-100 text-center fs-6 text-white d-inline-flex align-items-center justify-content-center">
                                                      <span class="material-symbols-outlined me-2 text-white">add</span> Add Service
                                                   </button>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="card">
                                 <div class="card-body">
                                    <div class="customization-table">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>Service Name</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>

                                          <tbody>
                                             <tr>
                                                <td>Cable / Digital TV</td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Internet</td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Static IP</td>
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
