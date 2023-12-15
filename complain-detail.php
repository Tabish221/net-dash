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
         <div class="mainBody" >
            <?php include("includes-ui/header.php"); ?>
   
               <div class="bodyPanel pb-0 pe-0 ps-0" >
                  <div class="bodyPanel__head">
                     <h6>
                        <span class="material-symbols-outlined">diamond</span> 
                        Complain List
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
                                 <a href="complain-add.php" class="btn btn-success">Add New Complain</a>
                              </div>
                           </div>
                        </div>
   
                        <div class="tablecard-body">
                           <table class="leadsTable" style="width:100%">
                              <thead>
                                    <tr>
                                       <th> <h6><span class="material-symbols-outlined">badge</span> Complain ID </h6> </th>
                                       <th> <h6><span class="material-symbols-outlined">abc</span> Customer Name / ID </h6> </th>
                                       <th> <h6><span class="material-symbols-outlined">perm_phone_msg</span> Phone </h6></th>
                                       <th> <h6><span class="material-symbols-outlined">home</span> Address </h6></th>
                                       <th> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Status </h6></th>
                                       <th> <h6><span class="material-symbols-outlined">group</span> Assigning Staff </h6></th>
                                       <th> <h6><span class="material-symbols-outlined">quick_reference</span> Complain Detail </h6></th>
                                    </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><a href="complain.php" class="fs-7 fw-bold text-decoration-underline green-text link">CP-001</a></td>
                                    <td><a href="customer.php" class="fs-7 fw-bold text-decoration-underline green-text link">Edwin Chan</a></td>
                                    <td class="text-nowrap">0315-9286547</td>
                                    <td>
                                       <span class="w-400px">House# 710-A, Street# 07, Area Nazamabad, Nearest Hospital, Karachi, Pakistan</span>
                                    </td>
                                    <td><div class="tableDataStatus bg-danger">Open <span class="material-symbols-outlined">award_star</span></div></td>
                                    <td>User 1</td>
                                    <td>
                                       <p class="w-450px text-overflow-ellipsis overflow-hidden text-nowrap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </td>
                                 </tr>

                                 <tr>
                                    <td><a href="complain.php" class="fs-7 fw-bold text-decoration-underline green-text link text-nowrap">CP-001</a></td>
                                    <td><a href="customer.php" class="fs-7 fw-bold text-decoration-underline green-text link text-nowrap">Edwin Chan</a></td>
                                    <td class="text-nowrap">0315-9286547</td>
                                    <td>
                                       <span class="w-400px">House# 710-A, Street# 07, Area Nazamabad, Nearest Hospital, Karachi, Pakistan</span>
                                    </td>
                                    <td><div class="tableDataStatus text-nowrap">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                    <td>User 1</td>
                                    <td>
                                       <span class="w-450px text-overflow-ellipsis overflow-hidden text-nowrap">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                                    </td>
                                 </tr>
                                 
                              </tbody>
                           </table>
                        </div>
   
                        <div class="tablecard-footer">
                           <div class="tablecard-footer__addnewbtn">
                              <a href="complain-add.php" class="addCustomerBtn">
                                 <span class="material-symbols-outlined">add_circle</span> New
                              </a>
                           </div>
   
                           <div class="tablecard-footer__tablepage">
                              <div class="tablepage_leads">
                              </div>
                              <div class="tablepage_nav">
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
               // var table = this;

               // table.api().columns().every(function (index) {
               //    var column = this;
                              
               //    // Find the h6 element within the column header
               //    var h6Element = $(column.header()).find('h6');
               //    var h6Text = h6Element
               //       .clone() // Clone to preserve original
               //       .children() // Select children elements
               //       .remove() // Remove children
               //       .end() // Go back to original element
               //       .text() // Get the text
               //       .trim(); // Remove leading and trailing white spaces
                  
               //    // Check if h6 contains 'CNIC'
               //    if (h6Text === 'CNIC') {
               //       var sum = column.data().reduce(function (acc, val) {
               //          return acc + parseFloat(val);
               //       }, 0);

               //       $(column.footer()).html(`<h6>${sum}</h6>`);
               //    }
               // });

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
