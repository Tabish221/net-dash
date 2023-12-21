<?php include("includes-ui/page-start.php"); ?>

<head>
   <?php include("includes-ui/compatibility.php"); ?>
   <?php include("includes-ui/style.php"); ?>
   <meta name="description" content="">
   <title>DINO Deshboard | ...</title>
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
                     <span class="material-symbols-outlined">person_cancel</span>
                     Expired Customer in 3 days
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

                        <div class="tableMoreOption gap-3">
                           <span class="tableMoreOption__search">
                              <div class="dataTables_filter" id="DataTables_Table_0_filter"></div>
                           </span>

                           <div class="btn-group tableMoreOption__addNew">
                              <input type="text" name="datefilter" value="" placeholder="Search by Expire Date"
                                 class="textbox-n" id="filter_date" />
                              <!-- <input placeholder="Search by Expire Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" /> -->
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
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Status
                                    </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Amount
                                    </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">event</span> Expire Date </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">event</span> Action </h6>
                                 </th>
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
                                 <td class=" mw-25">
                                    <div class="userAddress">House# 710-A, Street# 07, Area Nazamabad, Nearest Hospital,
                                       Karachi, Pakistan</div>
                                 </td>
                                 <td class="text-nowrap">4240-48958667-1</td>
                                 <td>
                                    <div class="d-flex flex-column gap-2">
                                       <a href="mailto:k.usmani123@gmai.com"
                                          class="text-nowrap">k.usmani123@gmai.com</a>
                                       <a href="tel:03159286547" class="text-nowrap">03159286547</a>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="tableDataStatus text-nowrap">Active <span
                                          class="material-symbols-outlined">award_star</span></div>
                                 </td>
                                 <td class="text-nowrap">1200 PKR</td>
                                 <td class="text-nowrap text-danger">18 Sep 2023</td>
                                 <td><button class="btn btn-primary">Recharge</button></td>
                              </tr>

                              <tr>
                                 <td>
                                    <div class="icon text-center">
                                       <img src="assets/images/1.png" alt="">
                                    </div>
                                 </td>
                                 <td><a href="customer.php" class="fs-7 fw-bold text-nowrap">Shariq Jammel</a></td>
                                 <td class=" mw-25">
                                    <div class="userAddress">House# 570-B, Street# 06, Area Nazamabad, Nearest Hospital,
                                       Karachi, Pakistan</div>
                                 </td>
                                 <td class="text-nowrap">4240-48958667-1</td>
                                 <td>
                                    <div class="d-flex flex-column gap-2">
                                       <a href="mailto:k.usmani123@gmai.com" class="text-nowrap">s.jammel@gmai.com</a>
                                       <a href="tel:03159286547" class="text-nowrap">033256988999</a>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="tableDataStatus text-nowrap bg-danger">Closed <span
                                          class="material-symbols-outlined">award_star</span></div>
                                 </td>
                                 <td class="text-nowrap">1800 PKR</td>
                                 <td class="text-nowrap text-danger">12 Dec 2023</td>
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
   <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

   <script>
      $(document).ready(function () {
         var table = new DataTable('.leadsTable', {
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

                  // Check if h6 contains 'Amount'
                  if (h6Text === 'Amount') {
                     var sum = column.data().reduce(function (acc, val) {
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
               "lengthMenu": '<select>' +
                  '<option value="10">10 Leads Per Page</option>' +
                  '<option value="20">20 Leads Per Page</option>' +
                  '<option value="30">30 Leads Per Page</option>' +
                  '<option value="40">40 Leads Per Page</option>' +
                  '<option value="50">50 Leads Per Page</option>' +
                  '<option value="-1">All Leads One Page</option>' +
                  '</select>',
               "sSearch": "<span class='material-symbols-outlined'>search</span>",
               searchPlaceholder: "Search records",
               "info": "_START_ to _END_",
               "pagingType": "full_numbers"
            }
            // Custom function to display current page number and last page number
         });



         var initialTableData = table.rows().data().toArray(); // Store initial table data

         // Function to calculate and update sum in the 'Amount' column footer
         function updateSumFooter() {
            var sum = table.column(6).data().reduce(function (acc, val) {
               return acc + parseFloat(val);
            }, 0);

            console.log("{{{{{first}}}}}", sum)

            table.column(6).footer().innerHTML = `<h6>${sum} PKR</h6>`;
         }



         function upSumFooter() {
            table.columns().every(function (index) {
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

               // Check if h6 contains 'Amount'
               if (h6Text === 'Amount') {
                  var sum = column.data().reduce(function (acc, val) {
                     return acc + parseFloat(val);
                  }, 0);

                  console.log("SUM", sum)

                  $(column.footer()).html(`<h6>${sum} PKR</h6>`);
               }
            });
         }

         // Calculate initial sum of 'Amount' column during table setup
         updateSumFooter();

         // Event listener for DateRangePicker changes
         $('input[name="datefilter"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
               cancelLabel: 'Clear',
               format: 'DD MMM YYYY' // Set the format to match your table's date format (e.g., "18 Sep 2023")
            }
         });

         // Event listener for applying date range
         $('input[name="datefilter"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(`${picker.startDate.format('DD MMM YYYY')} - ${picker.endDate.format('DD MMM YYYY')}`)
            var startDate = picker.startDate.format('DD MMM YYYY'); // Format for DataTable's date (e.g., "18 Sep 2023")
            var endDate = picker.endDate.format('DD MMM YYYY');

            // Iterate through each row in the initial table data and filter based on the date range
            var filteredData = initialTableData.filter(function (rowData) {
               var rowDate = rowData[7]; // Assuming column 8 (index 7) contains the date

               // Check if the row date falls within the selected range
               return moment(rowDate, 'DD MMM YYYY').isBetween(startDate, endDate, null, '[]');
            });

            // Clear the table content and draw the filtered data or show "No matching records found"
            if (filteredData.length > 0 && table.rows().any()) {
               table.clear().rows.add(filteredData).draw();
               updateSumFooter();
            } else {
               table.clear().draw();
               table.row.add(["No matching records found"]).draw();
               table.column(6).footer().innerHTML = `<h6>0 PKR</h6>`;
            }


         });

         // Event listener for clearing date filter
         $('input[name="datefilter"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');

            // Show the initial table data when the filter is cleared
            table.clear().rows.add(initialTableData).draw();

            // Update sum footer
            updateSumFooter();
         });


         /// Event listener for default search input
         $('.dataTables_filter input').on('keyup', function () {
            var searchValue = $(this).val();

            // Apply the search on the table
            table.search(searchValue).draw();

            // Update sum footer after the search is completed and the table is redrawn
            upSumFooter() // Delay for 100 milliseconds to ensure the table redraws
         });
      });
   </script>
</body>
<?php include("includes-ui/page-end.php"); ?>