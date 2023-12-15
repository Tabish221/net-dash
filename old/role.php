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
                           <div class="rolesMain-panelBox">
                              <div class="rolesMain-card">
                                 <div class="rolesMain-header">
                                    <h6 class="fontwight-700 fs-6 grey300 pb-2">Roles</h6>
                                    <p class=" fs-6 grey300">This page will allow you to define how you share the data among users based on your organization's role hierarchy. For more information, refer to online help.</p>

                                    <div class="btnGroup">
                                       <a class="btn btn-primary pe-3 ps-2 d-inline-flex align-items-center roleAdd">
                                          <span class="material-symbols-outlined me-2">add</span> New Roles
                                       </a>

                                       <a href="#" class="expandRole">Expand All</a>
                                       <a href="#" class="collapseRole">Collapse All</a>
                                    </div>
                                 </div>
                                 <div class="rolesMain-cardBody">
                                    <div class="roleOrder">
                                       <span class="expendCollapse">
                                          <span class="material-symbols-outlined collaps-btn">remove</span>
                                          <input type="text" value="Legendesk" disabled>
                                       </span>
                                       <div class="roleOrder-acticonBtn">
                                          <a href="#" class="roleAdd">
                                             <span class="material-symbols-outlined">add</span>
                                          </a>
                                          <a href="#" class="roleEdit">
                                             <span class="material-symbols-outlined">edit</span>
                                          </a>
                                          <a href="#" class="roleDelet">
                                             <span class="material-symbols-outlined">delete</span>
                                          </a>
                                       </div>
                                    </div>
                                    
                                    <div class="roleOrder">
                                       <span class="expendCollapse">
                                          <span class="material-symbols-outlined collaps-btn">remove</span>
                                          <input type="text" value="CEO" disabled>
                                       </span>
                                       <div class="roleOrder-acticonBtn">
                                          <a href="#" class="roleAdd">
                                             <span class="material-symbols-outlined">add</span>
                                          </a>
                                          <a href="#" class="roleEdit">
                                             <span class="material-symbols-outlined">edit</span>
                                          </a>
                                          <a href="#" class="roleDelet">
                                             <span class="material-symbols-outlined">delete</span>
                                          </a>
                                       </div>
                                    </div>

                                    <div class="roleOrder">
                                       <span class="expendCollapse">
                                          <span class="material-symbols-outlined collaps-btn">remove</span>
                                          <input type="text" value="Manager" disabled>
                                       </span>
                                       <div class="roleOrder-acticonBtn">
                                          <a href="#" class="roleAdd">
                                             <span class="material-symbols-outlined">add</span>
                                          </a>
                                          <a href="#" class="roleEdit">
                                             <span class="material-symbols-outlined">edit</span>
                                          </a>
                                          <a href="#" class="roleDelet">
                                             <span class="material-symbols-outlined">delete</span>
                                          </a>
                                       </div>
                                    </div>

                                    <div class="roleOrder">
                                       <span class="expendCollapse">
                                          <span class="material-symbols-outlined collaps-btn">remove</span>
                                          <input type="text" value="Assistant Manager" disabled>
                                       </span>
                                       <div class="roleOrder-acticonBtn">
                                          <a href="#" class="roleAdd">
                                             <span class="material-symbols-outlined">add</span>
                                          </a>
                                          <a href="#" class="roleEdit">
                                             <span class="material-symbols-outlined">edit</span>
                                          </a>
                                          <a href="#" class="roleDelet">
                                             <span class="material-symbols-outlined">delete</span>
                                          </a>
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

         $(document).ready(function(){
           var fsval = $('.rolesMain-cardBody').offset();
           var x = fsval.top;
           $('.rolesMain-cardBody').css('height', `calc(100vh - ${x}px - 60px)`);
           rolemargin();
         })
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

         // ROLE MARGIN
         $(document).on('click', ".roleEdit", function(){
            if($(this).closest('.roleOrder').find('.expendCollapse').find('input').attr('disabled')){
               $(this).closest('.roleOrder').find('.expendCollapse').find('input').removeAttr("disabled");
               $(this).closest('.roleOrder').addClass('roleEditMode');
               $(this).find('span').html('done');
            }else{
               $(this).closest('.roleOrder').find('.expendCollapse').find('input').attr("disabled", "disabled");
               $(this).closest('.roleOrder').removeClass('roleEditMode');
               $(this).find('span').html('edit');
            }
         });

         $(document).on('click', ".roleDelet", function(){
            $(this).closest('.roleOrder').remove();
            rolemargin();
         })

         $(document).on('click', ".roleAdd", function(){
            $(".roleOrder.first").nextAll().slideDown(400);
            $(".roleOrder").each(function(i , data){
               $(data).find(".collaps-btn").html("remove")
            })
            var val = `
               <div class="roleOrder roleEditMode" style="margin-left: 0px;">
                  <span class="expendCollapse">
                     <span class="material-symbols-outlined collaps-btn">remove</span>
                     <input type="text" value="">
                  </span>
                  <div class="roleOrder-acticonBtn">
                     <a href="javascript:;" class="roleAdd">
                        <span class="material-symbols-outlined">add</span>
                     </a>
                     <a href="javascript:;" class="roleEdit">
                        <span class="material-symbols-outlined">done</span>
                     </a>
                     <a href="javascript:;" class="roleDelet">
                        <span class="material-symbols-outlined">delete</span>
                     </a>
                  </div>
               </div>
            `;

            $(".rolesMain-cardBody").append(val);
            
            rolemargin();
         });

         $(document).on("click" , ".collaps-btn" , function(){
            var btnName = $(this).html();
            console.log(btnName);

            var x = $(this).closest(".roleOrder").nextAll();

            if (btnName == "remove"){

               $(this).html("add");
               x.each(function(i , data){
                  $(data).slideUp(400);
               })

            }
            else{
               $(this).html("remove");
                console.log(x.length);
               x.each(function(i , data){
                  $(data).find(".collaps-btn").html("remove")
                  $(data).slideDown(300);
               })
            }
         })

         $(document).on("click" , ".expandRole" , function(){
            $(".roleOrder").each(function(i , data){
               $(data).find(".collaps-btn").html("remove")
            })
            $(".roleOrder.first").nextAll().slideDown(400);
         })

         $(document).on("click" , ".collapseRole" , function(){
            $(".roleOrder.first").find(".collaps-btn").html("add");
            $(".roleOrder.first").nextAll().slideUp(400);
         })

         var rolemargin = function(){
            $(".rolesMain-cardBody .roleOrder").each(function(i, d){
               margin = i*50;
               $(d).css('margin-left', margin);
               $(".roleOrder.first").removeClass("first");
               $(".roleOrder.last").removeClass("last");
               $(".roleOrder:last-child").addClass("last");
               $(".roleOrder:first-child").addClass("first");
            })
         }

      </script>

   </body>
<?php include("includes-ui/page-end.php"); ?>
