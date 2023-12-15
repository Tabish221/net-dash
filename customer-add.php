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
         <div class="loader-overlay">
            <div class="loader-line"></div>
         </div>
         <?php include("includes-ui/aside.php"); ?>
         <div class="mainBody">
            <?php include("includes-ui/header.php"); ?>
            <div class="bodyPanel">
               <div class="bodyPanel__head ps-0 d-flex flex-wrap gap-2 justify-content-between">
                  <h6 class="d-flex align-items-center">
                     <span class="material-symbols-outlined fs-5 grey100">box</span>
                     <a href="#" class="fs-5 grey600 fontwight-500"> Dashboard </a>
                     <span class="material-symbols-outlined grey100 ps-2 fs-8">arrow_forward_ios</span>
                     <b class="fs-5 grey600 fontwight-500"> Add Customer </b>
                  </h6>
               </div>

               <div class="card text-start">

                  <div class="card-body">
                     <div class="userDetail">
                        <form action="">
                           <div class="theamform">
                              <div class="row justify-content-between">
                                 <div class="col-md-6">
                                    <div class="theamform-feild form-check form-switch">
                                       <input class="form-check-input" type="checkbox" name="free_pad" id="flexSwitchCheckChecked" checked>
                                       <label class="form-check-label" for="flexSwitchCheckChecked">Free / Pad</label>
                                    </div>
                                 </div>

                                 <div class="col-md-4">
                                    <div class="theamform-feild">
                                       <label for="enterdate">Registation Date <span>*</span></label>
                                       <input type="date" placeholder="dd-mm-yyyy" id="date" name="date" min="2001-01-01" max="2050-12-31">
                                       <!-- <span class="msg-error">This feild must be filled!!</span>
                                       <span class="msg-success">This feild must be filled!!</span> -->
                                    </div>
                                 </div>
                              </div>

                              <div class="customerAdd-serviceType">
                                 <div class="row align-items-center">
                                    <div class="col-md-4">
                                       <div class="theamform-feild">
                                          <label for="user_serice0">Service</label>
                                          <select name="user_serice0" id="user_serice0" data-service="selectuser_serice0">
                                             <option selected disabled>Select Service Type</option>
                                             <option value="1">Internet</option>
                                             <option value="2">Cable</option>
                                             <option value="3">Static IP</option>
                                          <select>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="theamform-feild selectuser_serice0" style="display:none;">
                                          <label for="user_package1">Package</label>
                                          <select name="user_package1" id="user_package1">
                                             <option selected disabled>Select Package Type</option>
                                             <option value="1">Orange</option>
                                             <option value="1">Red</option>
                                             <option value="1">Green</option>
                                          <select>
                                       </div>
                                    </div>
                                    <div class="col-md-1">
                                       <span class="btn btn-success px-1 py-1 text-white material-symbols-outlined fs-6 serviceType-addBtn" data-count='0'>add</span>
                                    </div>
                                 </div>
                              </div>


                              <div class="row">
                                 <hr class="divider mb-4">
                                 <h6 class="fs-5 fw-bold grey600 pb-4">User Personal Details</h6>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_full_name">Full Name <span>*</span></label>
                                       <input type="text" id="user_full_name" name="user_full_name" placeholder="User Full Name">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_name">User Name <span>*</span></label>
                                       <input type="text" id="user_name" name="user_name" placeholder="User Name">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_password">User Password <span>*</span></label>
                                       <input type="password" id="user_password" name="user_password" placeholder="User Password">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_phone">Phone# <span>*</span></label>
                                       <input type="text" id="user_phone" name="user_phone" placeholder="User Phone Number">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_whatsapp">WhatsApp# <span>*</span></label>
                                       <input type="text" name="user_whatsapp" id="user_whatsapp" placeholder="User WhatsApp Number">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_email">Email <span>*</span></label>
                                       <input type="email" id="user_email" name="user_email" placeholder="User Email">
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <div class="theamform-feild">
                                       <label for="user_google_address_url">Google Address URL <span>*</span></label>
                                       <input type="text" name="user_google_address_url" id="user_google_address_url" placeholder="User Google Address URL">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_area">Area <span>*</span></label>
                                       <input type="text" name="user_area" id="user_area" placeholder="Area">
                                    </div>
                                 </div>

                                 <div class="col-lg-8 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_address">Address <span>*</span></label>
                                       <input type="text" name="user_address" id="user_address" placeholder="User Address">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-12">
                                    <div class="theamform-feild">
                                       <label for="user_cnic_number">CNIC Number <span>*</span></label>
                                       <input type="text" id="user_cnic_number" name="user_cnic_number" placeholder="User CNIC Number">
                                    </div>
                                 </div>

                                 <div class="col-lg-8 col-md-8">
                                    <div class="d-flex align-items-center gap-4">
                                       <div class="theamform-feild">
                                          <label for="image-file">CNIC Fornt Images <span>*</span></label>
                                          <div class="nicImages">
                                             <label id="image-label" for="image-file">
                                                <span class="material-symbols-outlined">photo_camera</span>
                                             </label>
                                             <input type="file" id="image-file" name="image-file" accept="image/x-png, image/jpeg"
                                                style="display : none" />
                                          </div>
                                       </div>
                                       <div class="theamform-feild">
                                          <label for="image-file2">CNIC Back Images <span>*</span></label>
                                          <div class="nicImages">
                                             <label id="image-label2" for="image-file2">
                                                <span class="material-symbols-outlined">photo_camera</span>
                                             </label>

                                             <input type="file" id="image-file2" name="image-file2" accept="image/x-png, image/jpeg"
                                                style="display : none" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <hr class="divider mb-4">
                                 <h6 class="fs-5 fw-bold grey600 pb-4">User Router & Connection Details</h6>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_router_name">Router User Name <span>*</span></label>
                                       <input type="text" id="user_router_name" name="user_router_name" placeholder="Router User Name">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_router_password">Router Password <span>*</span></label>
                                       <input type="password" id="user_router_password" name="user_router_password" placeholder="Router Password">
                                    </div>
                                 </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="theamform-feild">
                                       <label for="user_recharge_date">Next Recharge Date <span>*</span></label>
                                       <input type="date" id="user_recharge_date" name="user_recharge_date" placeholder="Router Password">
                                    </div>
                                 </div>

                                 <hr class="divider mb-4 mt-3">

                                 <div class="col-md-12 text-end">
                                    <div class="theamform-btn">
                                       <button type="submit"
                                          class="btn btn-primary py-3 px-4 text-white fw-bold fs-6 d-inline-flex align-items-center gap-2 justify-content-end">
                                          <span class="material-symbols-outlined">add</span> Add Customer</button>
                                    </div>
                                 </div>
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


   <?php include("includes-ui/scripts.php"); ?>

   <script>

      $(document).ready(function () {
         var date = new Date();
         var day = date.getDate();
         var month = date.getMonth() + 1;
         var year = date.getFullYear();
         if (month < 10) month = "0" + month;
         if (day < 10) day = "0" + day;
         var today = year + "-" + month + "-" + day;
         $("#date").attr("value", today);

         // Get today's date
         var today = new Date();
         // Add 30 days to today's date
         var next30Days = new Date(today.getTime() + 30 * 24 * 60 * 60 * 1000);
         // Format the date to 'YYYY-MM-DD' (required by the date input)
         var formattedDate = next30Days.toISOString().split('T')[0];
         // Set the value to the input field using jQuery
         $('#user_recharge_date').val(formattedDate);
      });

      $(document).on('click', '.serviceType-addBtn', function(){
         var count = $(this).data('count');

         count = count + 1;

         var elemt = `
         <div class="row align-items-center">
            <div class="col-md-4">
               <div class="theamform-feild">
                  <label>Service</label>
                  <select name="user_serice${count}" id="user_serice${count}" data-service="selectuser_serice${count}">
                     <option selected disabled>Select Service Type</option>
                     <option value="1">Internet</option>
                     <option value="2">Cable</option>
                     <option value="3">Static IP</option>
                     <select>
               </div>
            </div>
            <div class="col-md-4">
               <div class="theamform-feild selectuser_serice${count}" style="display:none;">
                  <label for="user_package${count}">Package</label>
                  <select name="user_package${count}" id="user_package${count}">
                     <option selected disabled>Select Package Type</option>
                     <option value="1">Orange</option>
                     <option value="1">Red</option>
                     <option value="1">Green</option>
                     <select>
               </div>
            </div>
            <div class="col-md-1">
               <span class="btn btn-danger px-1 py-1 text-white material-symbols-outlined fs-6 serviceType-deleteBtn">delete</span>
               <span class="btn btn-success px-1 py-1 text-white material-symbols-outlined fs-6 serviceType-addBtn" data-count="${count}">add</span>
            </div>
         </div>
         `;

         $(".customerAdd-serviceType").append(elemt);
      });

      $(document).on('click', '.serviceType-deleteBtn', function(){
         $(this).closest('.row').remove();
      });

      $(document).on('click', '[data-service]', function(){
         var data = $(this).data('service');
         var val = $(this).val();

         if(val == 1){
            $(`.${data}`).css('display', 'block')
         }else{
            $(`.${data}`).css('display', 'none')
         }
      });

      const input_file = document.getElementById('image-file');
      const input_label = document.getElementById('image-label');

      input_file.addEventListener('change', async function () {
         const file = document.querySelector('#image-file').files;
         console.log("file asdasadas", file)
      });

      const convert_to_base64 = file => new Promise((response) => {
         const file_reader = new FileReader();
         file_reader.readAsDataURL(file);
         file_reader.onload = () => response(file_reader.result);
      });

      input_file.addEventListener('change', async function () {
         const file = document.querySelector('#image-file').files;
         const my_image = await convert_to_base64(file[0]);
         input_label.style.backgroundImage = `url(${my_image})`
      });
      // 
      const input_file2 = document.getElementById('image-file2');
      const input_label2 = document.getElementById('image-label2');

      input_file2.addEventListener('change', async function () {
         const file2 = document.querySelector('#image-file2').files;
         console.log("file2", file2)
      })

      const convert_to_base642 = file2 => new Promise((response) => {
         const file_reader2 = new FileReader();
         file_reader2.readAsDataURL(file2);
         file_reader2.onload = () => response(file_reader2.result);
         console.log("first")
      });

      input_file2.addEventListener('change', async function () {
         const file2 = document.querySelector('#image-file2').files;
         const my_image2 = await convert_to_base642(file2[0]);
         input_label2.style.backgroundImage = `url(${my_image2})`
      });
   </script>
</body>

<?php include("includes-ui/page-end.php"); ?>