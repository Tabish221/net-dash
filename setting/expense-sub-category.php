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
                                       <h6>Add Expense Sub Category</h6>

                                       <div class="channelCard-body">
                                          <form>
                                             <div class="row gy-3">
                                                <div class="col-md-6">
                                                   <label for="category_name" class=" pb-2">Main Category Name</label>
                                                   <select name="category_name" id="category_name">
                                                      <option value="" selected disabled>- Select -</option>
                                                      <option value="0">Office</option>
                                                      <option value="1">Home</option>
                                                   </select>
                                                </div>

                                                <div class="col-md-6">
                                                   <label for="category_name" class=" pb-2">Sub Category Name</label>
                                                   <input type="text" name="sub_category_name" id="sub_category_name" placeholder="Sub Category Name">
                                                </div>
                                             </div>

                                             <div class="row mt-3 justify-content-end">
                                                <div class="col-md-3 text-end">
                                                   <button type="submit" class="btn bg-primary pe-3 ps-2 py-2 text-center fs-6 text-white d-inline-flex align-items-center justify-content-center">
                                                      <span class="material-symbols-outlined me-2 text-white">add</span> Add Category
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
                                       <input type="text" placeholder="Search Category">
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    <div class="customization-table">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>Main Category Name</th>
                                                <th>Sub Category</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>

                                          <tbody>
                                             <tr>
                                                <td>Office</td>
                                                <td><a href="#" class="text-primary link-opacity-50-hover">Router</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Office</td>
                                                <td><a href="#" class="text-primary link-opacity-50-hover">Wire</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Office</td>
                                                <td><a href="#" class="text-primary link-opacity-50-hover">Bill</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Office</td>
                                                <td><a href="#" class="text-primary link-opacity-50-hover">Free Customer</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Office</td>
                                                <td><a href="#" class="text-primary link-opacity-50-hover">Discount</a></td>
                                                <td>
                                                   <div class="">
                                                      <button class="btn btn-danger">Delete</button>
                                                      <button class="btn btn-success">Edit</button>
                                                   </div>
                                                </td>
                                             </tr>

                                             <tr>
                                                <td>Home</td>
                                                <td><a href="#" class="text-primary link-opacity-50-hover">Ahmed</a></td>
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
