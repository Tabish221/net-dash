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
                              <div class="card-body">
                                 <div class="channels-card">
                                    <h6>Email Configuration</h6>

                                    <!-- <div class="channelCard-nav">
                                       <ul>
                                          <li data-targetit="box-compose" class="current">
                                             <a href="#">Compose</a>
                                          </li>

                                          <li data-targetit="box-email">
                                             <a href="#">Email</a>
                                          </li>
                                       </ul>
                                    </div> -->

                                    <div class="box-compose showfirst">
                                       <div class="channelCard-body">
                                          <h3>Compose Setting</h3>
                                          <p>Configure basic default email compose settings to personalize your composing experience.</p>

                                          <form>
                                             <div class="row mb-2">
                                                <div class="col-md-3">
                                                   <label for="defaul_fornt">Default Fornt Family</label>
                                                </div>
                                                <div class="col-md-9">
                                                   <select id="defaul_fornt" name="defaul_fornt">
                                                      <option value="" selected disabled>- Select -</option>
                                                      <option value="1">Verdana</option>
                                                   </select>

                                                   <div class="preview">
                                                      <h6>Perview</h6>

                                                      <p>The quick brown fox jumped over the lazy dog</p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row mb-2">
                                                <div class="col-md-3">
                                                   <label for="defaul_email">Default Email Address</label>
                                                </div>
                                                <div class="col-md-9">
                                                   <input type="email" name="defaul_email" id="defaul_email" placeholder="info@domin.com">
                                                </div>
                                             </div> 

                                             <div class="row">
                                                <div class="col-md-3">
                                                   <label for="">&nbsp;</label>
                                                </div>
                                                <div class="col-md-9">
                                                   <button class="btn bg-success text-white fw-normal">
                                                      <span class="material-symbols-outlined me-1   text-white ">save</span>
                                                      Save Setting
                                                   </button>
                                                </div>
                                             </div> 
                                          </form>
                                       </div>
                                    </div>

                                    <div class="box-email ">
                                       <div class="channelCard-body">
                                          <h3>Compose Setting</h3>
                                          <p>Configure basic default email compose settings to personalize your composing experience.</p>

                                          <ul>
                                             <li>
                                                <div class="img-icon">
                                                   <img src="assets/images/setting/1.png" alt="">
                                                </div>

                                                <p>Access your customer emails with holistic CRM information</p>
                                             </li>

                                             <li>
                                                <div class="img-icon">
                                                   <img src="assets/images/setting/2.png" alt="">
                                                </div>

                                                <p>Access your customer emails with holistic CRM information</p>
                                             </li>

                                             <li>
                                                <div class="img-icon">
                                                   <img src="assets/images/setting/3.png" alt="">
                                                </div>

                                                <p>Access your customer emails with holistic CRM information</p>
                                             </li>
                                          </ul>

                                          <a href="#">Get Started</a>
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
