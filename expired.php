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
         <?php include("includes-ui/aside.php"); ?>
         <div class="mainBody">
            <?php include("includes-ui/header.php"); ?>

            <div class="bodyPanel pb-0 pe-0 ps-0">
               <div class="bodyPanel__head">
                  <h6>
                     <span class="material-symbols-outlined">diamond</span>
                     Customer List
                  </h6>
               </div>

               <div class="tableMainBox">
                  <div class="tablecard">
                     <div class="tablecard-head">
                        <div class="tableview">
                           <div class="tableview__items">
                              <span class="material-symbols-outlined">view_list</span>
                              All Records
                           </div>
                        </div>

                        <div class="tableMoreOption">
                           <span class="tableMoreOption__search">
                              <div class="dataTables_filter" id="DataTables_Table_0_filter"></div>
                           </span>

                           <div class="btn-group tableMoreOption__addNew">
                              <a href="customer-add.php" class="btn btn-success">Add New Customer</a>
                           </div>
                        </div>
                     </div>

                     <div class="tablecard-body">
                        <table class="leadsTable" style="width:100%">
                           <thead>
                              <tr>
                                 <th>
                                    <h6><span class="material-symbols-outlined">abc</span> Service </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">how_to_reg</span> User ID / Nane </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">home</span> Address </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">badge</span> CNIC </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">contact_phone</span> Contact </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Status</h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Amount</h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">event</span> Expire Date </h6>
                                 </th>
                                 <th><h6><span class="material-symbols-outlined">event</span> Action </h6></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="icon text-center">
                                       <img src="assets/images/1.png" alt="">
                                    </div>
                                 </td>
                                 <td><a href="customer.php" class="fs-7 fw-bold text-nowrap">Kashif Usmani</a></td>
                                 <td class=" mw-25"><div class="userAddress">House# 710-A, Street# 07, Area Nazamabad, Nearest Hospital, Karachi, Pakistan</div></td>
                                 <td class="text-nowrap">4240-48958667-1</td>
                                 <td>
                                    <div class="d-flex flex-column gap-2">
                                       <a href="mailto:k.usmani123@gmai.com" class="text-nowrap">k.usmani123@gmai.com</a>
                                       <a href="tel:03159286547" class="text-nowrap">03159286547</a>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="tableDataStatus text-nowrap">Active <span class="material-symbols-outlined">award_star</span></div>
                                 </td>
                                 <td class="text-nowrap">1200 PKR</td>
                                 <td class="text-nowrap">18 Sep 2023</td>
                                 <td><button class="btn btn-primary">Recharge</button></td>
                              </tr>

                              <tr>
                                 <td>
                                    <div class="icon text-center">
                                       <img src="assets/images/1.png" alt="">
                                    </div>
                                 </td>
                                 <td><a href="customer.php" class="fs-7 fw-bold text-nowrap">Shariq Jammel</a></td>
                                 <td class=" mw-25"><div class="userAddress">House# 570-B, Street# 06, Area Nazamabad, Nearest Hospital, Karachi, Pakistan</div></td>
                                 <td class="text-nowrap">4240-48958667-1</td>
                                 <td>
                                    <div class="d-flex flex-column gap-2">
                                       <a href="mailto:k.usmani123@gmai.com" class="text-nowrap">s.jammel@gmai.com</a>
                                       <a href="tel:03159286547" class="text-nowrap">033256988999</a>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="tableDataStatus text-nowrap bg-danger">Closed <span class="material-symbols-outlined">award_star</span></div>
                                 </td>
                                 <td class="text-nowrap">1800 PKR</td>
                                 <td class="text-nowrap">12 Sep 2023</td>
                                 <td><button class="btn btn-primary">Recharge</button></td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th colspan="6"></th>
                                 <th colspan=""></th>
                                 <th colspan="2"></th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>

                     <div class="tablecard-footer">
                        <div class="tablecard-footer__addnewbtn">
                           <a href="customer-add.php" class="addCustomerBtn">
                              <span class="material-symbols-outlined">add_circle</span> New
                           </a>
                        </div>

                        <div class="tablecard-footer__tablepage">
                           <div class="tablepage_leads dataTables_length">
                           </div>
                           <div class="tablepage_nav dataTables_paginate">
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

   <!-- DATA TABLE -->
   <?php include("includes-ui/cdn/data-tables.php"); ?>

   <script>
      new DataTable('.leadsTable',{
         // rowReorder: false,
         // "sort": false,
         "info": false,

         initComplete: function () {
            var table = this;

            table.api().columns().every(function (index) {
               var column = this;
                           
               // Find the h6 element within the column header
               var h6Element = $(column.header()).find('h6');
               var h6Text = h6Element
                  .clone() // Clone to preserve original
                  .children() // Select children elements
                  .remove() // Remove children
                  .end() // Go back to original element
                  .text() // Get the text
                  .trim(); // Remove leading and trailing white spaces

               $(column.footer()).html('');

               // Check if h6 contains 'CNIC'
               if (h6Text === 'Amount') {
                  var sum = column.data().reduce(function (acc, val) {
                     console.log(acc, val);
                     return acc + parseFloat(val);
                  }, 0);

                  $(column.footer()).html(`<h6>${sum} PKR</h6>`);
               }
            });

            $('.dataTables_paginate').appendTo('.tablepage_nav');
            $('.dataTables_length').appendTo(".tablepage_leads");
            $('.dataTables_filter').appendTo(".tableMoreOption__search");
         },
         searchPanes: {
            viewTotal: true
         },
         dom: 'Plfrtip',
         language: {
            oPaginate: {
               sNext: '<em class="material-symbols-outlined">arrow_forward_ios</em>',
               sPrevious: '<em class="material-symbols-outlined">arrow_back_ios</em>',
            },
            "lengthMenu": '<select>'+
            '<option value="10">10 Leads Per Page</option>'+
            '<option value="20">20 Leads Per Page</option>'+
            '<option value="30">30 Leads Per Page</option>'+
            '<option value="40">40 Leads Per Page</option>'+
            '<option value="50">50 Leads Per Page</option>'+
            '<option value="-1">All Leads One Page</option>'+
            '</select>',
            "sSearch": "<span class='material-symbols-outlined'>search</span>",
            searchPlaceholder: "Search records",
            "info": "_START_ to _END_",
            "pagingType": "full_numbers"
            
         }
         // Custom function to display current page number and last page number

      });
   </script>
</body>
<?php include("includes-ui/page-end.php"); ?>