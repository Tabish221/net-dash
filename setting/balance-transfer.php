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
                                       <h6>Balance Transfer</h6>

                                       <div class="channelCard-body">
                                          <form>
                                             <div class="row gy-3">
                                                <div class="col-md-6">
                                                   <label for="package_method_name" class="pb-2">To Account</label>
                                                   <select name="package_service_type" id="package_service_type">
                                                      <option value="">- Select -</option>
                                                      <option value="0">Cash</option>
                                                      <option value="1">Jazzcash</option>
                                                      <option value="2">Easspaysa</option>
                                                      <option value="2">UBL</option>
                                                      <option value="2">HBL</option>
                                                   </select>
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="package_service_type" class=" pb-2">Form Accpunt</label>
                                                   <select name="package_service_type" id="package_service_type">
                                                      <option value="">- Select -</option>
                                                      <option value="0">Cash</option>
                                                      <option value="1">Jazzcash</option>
                                                      <option value="2">Easspaysa</option>
                                                      <option value="2">UBL</option>
                                                      <option value="2">HBL</option>
                                                   </select>
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="package_cost" class="pb-2">Amount</label>
                                                   <input type="number" id="package_cost" placeholder="Enter Package Cost">
                                                </div>

                                                <div class="col-md-6 text-end d-flex align-items-end justify-content-end">
                                                   <button type="submit" class="btn bg-primary px-2 py-2 text-center fs-6 text-white d-inline-flex align-items-center justify-content-center">
                                                      <span class="material-symbols-outlined me-1 text-white">add</span> Transfer Amount
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
                                    <h6 class="fs-6 text-capitalize">Transfer History</h6>
                                 </div>
                                 <div class="card-body">
                                    <div class="customization-table">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>To Account</th>
                                                <th>Form Account</th>
                                                <th>Amount</th>
                                             </tr>
                                          </thead>

                                          <tbody>
                                             <tr>
                                                <td>Cash</td>
                                                <td>UBL</td>
                                                <td><p class="text-primary">50000</p></td>
                                             </tr>
                                             
                                             <tr>
                                                <td>Cash</td>
                                                <td>Jazzcash</td>
                                                <td><p class="text-primary">50000</p></td>
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
