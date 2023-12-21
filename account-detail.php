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
                     <span class="material-symbols-outlined">account_balance</span>
                     Account (Eassypaysa)
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
                              <input type="text" name="datefilter" value="" placeholder="Search by Expire Date" class="textbox-n" id="filter_date" />
                           </div>

                           <div class="btn-group tableMoreOption__addNew">
                              <a href="setting/payment-method.php" class="btn btn-success">Add New Account</a>
                           </div>
                        </div>
                     </div>

                     <div class="tablecard-body">
                        <table class="leadsTable" style="width:100%">
                           <thead>
                              <tr>
                                 <th>
                                    <h6><span class="material-symbols-outlined">whatshot</span> Details </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">event</span> Date </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">payments</span> Amount </h6>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Rev Jazzcash - transation Id (29394)</td>
                                 <td class=" mw-25">20 Dec 2023</td>
                                 <td class="text-nowrap text-success">500 PKR</td>
                              </tr>

                              <tr>
                                 <td>Rev cash - transation Id (29394)</td>
                                 <td class=" mw-25">3 Dec 2023</td>
                                 <td class="text-nowrap text-success">400 PKR</td>
                              </tr>

                              <tr>
                                 <td>Use to expence (EX-001) - transation Id (29394)</td>
                                 <td class=" mw-25">2 Nov 2023</td>
                                 <td class="text-nowrap text-danger">-800 PKR</td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th colspan="2"></th>
                                 <th colspan=""></th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>

                     <div class="tablecard-footer">
                        <div class="tablecard-footer__addnewbtn">
                           <a href="setting/payment-method.php" class="addCustomerBtn">
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
            "info": false,
            initComplete: function () {
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
         });

         var initialTableData = table.rows().data().toArray(); // Store initial table data

         // Function to calculate and update sum in the 'Amount' column footer
         function updateSumFooter() {
            var columnIndex = 2; // Replace 0 with the actual index of the 'Amount' column

            var sum = table.column(columnIndex, { search: 'applied' }).data().reduce(function (acc, val) {
               return acc + parseFloat(val);
            }, 0);

            // Update the footer with the calculated sum
            $(table.column(columnIndex).footer()).html(`<h6>${sum} PKR</h6>`);
         }

         updateSumFooter(); // Calculate and update sum footer initially

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
            $(this).val(`${picker.startDate.format('DD MMM YYYY')} - ${picker.endDate.format('DD MMM YYYY')}`);
            var startDate = picker.startDate.format('DD MMM YYYY');
            var endDate = picker.endDate.format('DD MMM YYYY');

            // Iterate through each row in the initial table data and filter based on the date range
            var filteredData = initialTableData.filter(function (rowData) {
               var rowDate = rowData[1]; // Assuming column 8 (index 7) contains the date

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
               table.column(2).footer().innerHTML = `<h6>0 PKR</h6>`;
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
            updateSumFooter();
         });
      });
   </script>
</body>
<?php include("includes-ui/page-end.php"); ?>