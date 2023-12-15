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
                        Leads Management
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
                              <div class="tableview__items">
                                 <span class="material-symbols-outlined">hotel_class</span>
                                 All Records
                              </div>
                              <div class="tableview__itemsAddMore">
                                 <span class="material-symbols-outlined">add_circle</span>
                              </div>
                           </div>
   
                           <div class="tableMoreOption">
                              <div class="btn-group tableMoreOption__filter">
                                 <em  data-toggle="dropdown" aria-haspopup="true" class="main-filter" aria-expanded="false">Filter</em>
                                 <div class="dropdown-menu">
                                    <div class="dropdown-item drpBody__filter">
                                       <input type="text" data-searchlistinput="tableMoreOption__filter-searchByUl-list" class="searchByUl-input" placeholder="Filter by...">

                                       <ul class="tableMoreOption__filter-searchByUl-list top filterData__copy">
                                          <li>
                                             <a href="#">
                                                <span class="material-symbols-outlined">badge</span>Name
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="search" placeholder="Filter by name" class="findByName">
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <span class="material-symbols-outlined">email</span>Email
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="search" placeholder="Filter by email" class="findByEmail">
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <span class="material-symbols-outlined">call</span>Phone
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="search" placeholder="Filter by phone" class="findByPhone">
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <span class="material-symbols-outlined">tag</span>Product
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="search" placeholder="Filter by product" class="findByProduct">
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <span class="material-symbols-outlined">room_preferences</span>Brand
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="search" placeholder="Filter by brad" class="findByBrand">
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <li>
                                             <a href="#">
                                                <span class="material-symbols-outlined">calendar_month</span>Date
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="date" placeholder="Filter by date" class="findByDate">
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>

                              <div class="sort-filter-btn tableMoreOption__sort">

                                 <span role="button" class="tableMoreOption__sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <em>Sort</em>
                                 </span>

                                 <div class="dropdown-menu">
                                    <div class="dropdown-item drpBody__sort">
                                       <ul class="tableMoreOption__sort-searchByUl-list top sortData__copy">

                                          <li data-sortindex="0">
                                             <a href="#">
                                                <span class="material-symbols-outlined">abc</span> Name 
                                             </a>
                                          </li>

                                          <li data-sortindex="1">
                                             <a href="#">
                                                <span class="material-symbols-outlined">arrow_drop_down_circle</span> Date / Time 
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>

                              </div>

                              <span class="tableMoreOption__search">
                                 <!-- <input type="text">
                                 <span class="material-symbols-outlined">search</span> -->
                              </span>

                              <div class="btn-group tableMoreOption__addNew">
                                 <button type="button" class="btn btn-success addCustomerBtn">New</button>
                                 <button type="button" class="btn btn-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="material-symbols-outlined">expand_more</span> 
                                 </button>
                                 <div class="dropdown-menu">
                                    <div class="dropdown-item drpHead__addNew ">
                                       <h6>Add New</h6>
                                       <span class="material-symbols-outlined">help</span> 
                                    </div>
                                    <div class="dropdown-item drpBody__addNew">
                                       <ul>
                                          <li>
                                             <div class="text" href="#">
                                                <span class="material-symbols-outlined drpDrag__addNew">drag_indicator </span> 
                                                <a href="#" class="addCustomerBtn">
                                                   <span class="material-symbols-outlined drpTextIcon__addNew">article </span>
                                                   New Customer Add 
                                                </a>
                                             </div>

                                             <a href="#" class="material-symbols-outlined drpmore__addNew">more_horiz</a>
                                          </li>

                                          <li>
                                             <div class="text" href="#">
                                                <span class="material-symbols-outlined drpDrag__addNew">drag_indicator</span> 
                                                <a href="#">
                                                   <span class="material-symbols-outlined drpTextIcon__addNew">edit_document</span>
                                                   Edit
                                                </a>
                                             </div>

                                             <a href="#" class="material-symbols-outlined drpmore__addNew">more_horiz</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="tablecard-filter" style="display: none;">
                           <div class="tablefilter-cont d-flex align-items-center ">                              
                              <div class="main-sortbutton" style="display: none;">
                                 <div role="button" class="sortbutton"></div>

                                 <div class="sort-dropdown" style="display: none;">
                                    <div class="sortBtn-modal">
                                       <ul class="modal-cont">
                                          <li class="" style="display:none;" data-accdcsort="0">
                                             <div class="d-flex align-items-center justify-content-between w-100">
                                                <div class="d-flex align-items-center justify-content-center">
                                                   <div class="main-taskButton">
                                                      <div class="taskButton">
                                                         <span class="material-symbols-outlined">abc</span> Name
                                                      </div>
                                                   </div>
   
                                                   <div class="main-ascenButton">
                                                      <div role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="ascenButton">
                                                         Ascending
                                                         <span class="material-symbols-outlined">
                                                            expand_more
                                                         </span>
                                                      </div>
   
                                                      <div class="dropdown-menu">
                                                         <div class="dropdown dropend drpBody__filter">   
                                                            <ul>
                                                               <li data-sortaction="Ascending"><a href="#">Ascending</a></li>
                                                               <li data-sortaction="Descending"><a href="#">Descending</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div role="button" class="crossButton">
                                                   <span class="material-symbols-outlined">close</span>
                                                </div>
                                             </div>
                                          </li>

                                          <li class="" style="display:none;" data-accdcsort="1">
                                             <div class="d-flex align-items-center justify-content-between w-100">
                                                <div class="d-flex align-items-center justify-content-center">
                                                   <div class="main-taskButton">
                                                      <div class="taskButton">
                                                         <span class="material-symbols-outlined">arrow_drop_down_circle</span> Date / Time
                                                      </div>
                                                   </div>

                                                   <div class="main-ascenButton">
                                                      <div role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="ascenButton">
                                                         Ascending
                                                         <span class="material-symbols-outlined">
                                                            expand_more
                                                         </span>
                                                      </div>

                                                      <div class="dropdown-menu">
                                                         <div class="dropdown dropend drpBody__filter">

                                                            <ul>
                                                               <li data-sortaction="Ascending"><a href="#">Ascending</a></li>
                                                               <li data-sortaction="Descending"><a href="#">Descending</a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div role="button" class="crossButton">
                                                   <span class="material-symbols-outlined">close</span>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>

                                       <div class="sort-modal-btn-group d-flex flex-column">
                                          <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="addbutton">
                                             <span class="material-symbols-outlined">add</span>
                                             Add sort
                                          </div>

                                          <div class="dropdown-menu">
                                             <div class="dropdown-item drpBody__sort">
                                                <ul class="tableMoreOption__sort-searchByUl-list bottom sortData__copy">
                                                   <li data-sortindex="0">
                                                      <a href="#">
                                                         <span class="material-symbols-outlined">abc</span> Name 
                                                      </a>
                                                   </li>

                                                   <li data-sortindex="1">
                                                      <a href="#">
                                                         <span class="material-symbols-outlined">arrow_drop_down_circle</span> Date / Time 
                                                      </a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>

                                          <div role="button" class="deletebutton">
                                             <span class="material-symbols-outlined">delete</span>
                                             Delete sort
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           



                              <div class="d-flex align-items-center">
                                 <div class="addMoreFillerTab">
                                    <ul class="d-flex align-items-center">
                                    </ul>
                                 </div>

                                 <div class="addbtnDropPanel">
                                    <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="addbutton">
                                       <span class="material-symbols-outlined">add</span>
                                       Add filter
                                    </div>
                                    <div class="dropdown-menu">
                                       <div class="dropdown-item drpBody__filter">
                                          <input type="text" data-searchlistinput="drpBody__filter-searchByUl-list" class="searchByUl-input" placeholder="Filter by...">
   
                                          <ul class="filterData__copy bottom drpBody__filter-searchByUl-list">
                                             <li>
                                                <a href="#">
                                                   <span class="material-symbols-outlined">badge</span>Name
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by name" class="findByName">
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span class="material-symbols-outlined">email</span>Email
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by email" class="findByEmail">
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span class="material-symbols-outlined">call</span>Phone
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                         <input type="search" placeholder="Filter by phone" class="findByPhone">
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span class="material-symbols-outlined">tag</span>Product
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by product" class="findByProduct">
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span class="material-symbols-outlined">room_preferences</span>Brand
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by brad" class="findByBrand">
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span class="material-symbols-outlined">calendar_month</span>Date
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                         <input type="date" placeholder="Filter by date" class="findByDate">
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
   
                        <div class="tablecard-body">
                           <table class="leadsTable" style="width:100%">
                              <thead>
                                    <tr>
                                       <th data-filtername="findByName" data-filterindex="0"> <h6><span class="material-symbols-outlined">abc</span> Name </h6> </th>
                                       <th data-filtername="findByEmail" data-filterindex="1"> <h6><span class="material-symbols-outlined">subject</span> Email </h6></th>
                                       <th data-filtername="findByPhone" data-filterindex="2"> <h6><span class="material-symbols-outlined">subject</span> Phone </h6></th>
                                       <th data-filtername="false" data-filterindex="3"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Status </h6></th>
                                       <th data-filtername="false" data-filterindex="4"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Priority </h6></th>
                                       <th data-filtername="false" data-filterindex="5"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Lead Source </h6></th>
                                       <th data-filtername="false" data-filterindex="6"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Type </h6></th>
                                       <th data-filtername="false" data-filterindex="7"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Agent </h6></th>
                                       <th data-filtername="findByDate" data-filterindex="8"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Date / Time </h6></th> 
                                       <th data-filtername="false" data-filterindex="9"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Last Contact </h6></th>
                                       <th data-filtername="false" data-filterindex="10"> <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Comments </h6></th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">Normal</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Jack Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>John</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Sina Handi</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
   
                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>

                                    <tr>
                                       <td>Edwin Chan</td>
                                       <td>Edwin.chan@gmai.com</td>
                                       <td>415-928-6547</td>
                                       <td><div class="tableDataStatus">Closed <span class="material-symbols-outlined">award_star</span></div></td>
                                       <td><span class="text-danger">High</span></td>
                                       <td>Website</td>
                                       <td>Leads</td>
                                       <td>John Smith</td>
                                       <td>July 15, 2023 3:33 AM</td>
                                       <td>July 19, 2023</td>
                                       <td>Not Picking</td>
                                    </tr>
                              </tbody>
                           </table>
                        </div>
   
                        <div class="tablecard-footer">
                           <div class="tablecard-footer__addnewbtn">
                              <a href="#" class="addCustomerBtn">
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

      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

      <script>
      // FILTER WORKING START
            /// In dropdown input search
            $(document).on('keyup', '[data-searchlistinput]', function() {
               var input, filter, ul, li, a, i, txtValue, target;

               input = $(this);
               filter = $(this).val().toUpperCase();
               target = $(this).data('searchlistinput');         
               ul = $(`.${target}`);
               li = ul.find('li');
               
               for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("a")[0];
                  txtValue = a.textContent || a.innerText;

                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                  } else {
                        li[i].style.display = "none";
                  }
               }
            });
            // Filter Box Show & Hide
            $(".main-filter").click(function(){
               let btnList = $(".addMoreFillerTab ul").find("li");

               if(btnList.length > 0 ){
                  $(".tableMoreOption__filter .dropdown-menu").addClass("forHide");
                  if($(".tablecard-filter").is(":visible")){
                     $(".tablecard-filter").hide();
                  }else{
                     $(".tablecard-filter").show();
                  }
                  
               }else{
                  $(".tableMoreOption__filter .dropdown-menu").removeClass("forHide");
                  $(".tablecard-filter").hide();
               }
            });
            // MAKE FILTER LIST
            $(document).on('click', ".filterData__copy.top li a", function(){
               $(this).parent().find(".dropdownClone").children().removeClass("show");
               var el = `
                  <li>
                        <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="filterbutton">
                           <em style="display: flex;align-items: center;">${$(this).html()}</em>
                           <span class="material-symbols-outlined">
                              expand_more
                           </span>
                        </div>
                        <div class="redropdownClone">
                           ${$(this).parent().find(".dropdownClone").html()}
                        </div>
                  </li>
               `;

               $('.addMoreFillerTab ul').append(el);
               $(el).find(".dropdown-menu").addClass('show');

               let btnList2 = $(".addMoreFillerTab ul").find("li");

               if(btnList2.length > 0 ){
                  $(".tablecard-filter").show();
               }

               var taget = $(this).find('span').html();

               var z = $.trim(taget);

               $(".filterData__copy.bottom li a").each(function(i, data){
                  var x = $(this).find('span').html();
                  var o = $.trim(x);

                  if(x == taget){
                     $(this).parent().remove();
                     console.log("data");
                  }
               });


            });
            $(document).on('click', ".filterData__copy.bottom li a", function(){
               $(this).parent().find(".dropdownClone").children().removeClass("show");
               var el = `
                  <li>
                        <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="filterbutton">
                           <em style="display: flex;align-items: center;">${$(this).html()}</em>
                           <span class="material-symbols-outlined">
                              expand_more
                           </span>
                        </div>
                        <div class="redropdownClone">
                           ${$(this).parent().find(".dropdownClone").html()}
                        </div>
                  </li>
               `;
               $('.addMoreFillerTab ul').append(el);
               $(el).find(".dropdown-menu").addClass('show');

               if($(this).parent().parent().find('li').length <= 1){
                  $(".addbtnDropPanel").hide();
               }
               
               $(this).parent().remove();               
            });
            function listdataadd($this){
               $('.addMoreFillerTab ul').append(`
                  <li>
                        <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="filterbutton">
                           <em style="display: flex;align-items: center;">${$this.html()}</em>
                           <span class="material-symbols-outlined">
                              expand_more
                           </span>
                        </div>
                        <div class="redropdownClone">
                           ${$this.parent().find(".dropdownClone").html()}
                        </div>
                  </li>
               `);
            };
            // FILTER DELETED FUNCTION
            $(document).on('click', '.findFilterClosed', function() {
               $('.filterData__copy.bottom').append(`
                  <li>
                     <a href="#">
                        ${$(this).closest("li").find(".filterbutton").find("em").html()}
                     </a>
                     <div class="dropdownClone">
                        ${$(this).closest("li").find(".redropdownClone").html()}
                     </div>
                  </li>
               `);

               $(this).closest("li").remove();

               if($('.filterData__copy').find('li').length >= 1){
                     $(".addbtnDropPanel").show();
               }

            });




            // 
            $('.sortData__copy.bottom [data-sortindex]').click(function(){
                  var x = [];

                  $(".sortData__copy.bottom").children(`li:visible`).each(function(index , data){
                     x[index] = data;
                  });

                  console.log(x.length);

                  if(x.length == 1){
                     $('.sort-modal-btn-group .addbutton').hide()
                  } else{
                     $('.sort-modal-btn-group .addbutton').show()
                  }
               });

            $('[data-sortindex]').click(function(){
               var taget = $(this).data('sortindex');

               $('.modal-cont').find(`[data-accdcsort="${taget}"]`).show();

               $(".tablecard-filter").show();
               $(".main-sortbutton").show();

                             
               $('.sortData__copy.bottom').find(`[data-sortindex="${taget}"]`).hide();

               var liArray = [];
               $(".modal-cont").children("li:visible").each(function(index , data){
                  liArray[index] = data;
               });              

               if(liArray.length >= 2){
                  $(".main-sortbutton .sortbutton").text("");
                  $(".main-sortbutton .sortbutton").append(
                     `
                        <span class="material-symbols-outlined">
                           swap_vert
                        </span>
                        ${liArray.length} sorts
                        <span class="material-symbols-outlined">
                           expand_more
                        </span>
                     `
                  );
               }else{
                  $(".main-sortbutton .sortbutton").text("");
                  $(".sortbutton").append(
                     `
                     ${$(this).find('a').html()}
                     <span class="material-symbols-outlined">expand_more</span>
                     `
                  );
               }
            });
           
            $(".sortbutton").click(function(){
               $(".sort-dropdown").toggleClass("open");   
               $(".sort-dropdownoverlay").toggleClass("show");            
            });

            $(".tableMoreOption__sort").click(function(){
               if($('.tablecard-filter').is(":visible") == false && $(".main-sortbutton").is(":visible")){
                  $('.tablecard-filter').show()
               }
            });

            $(".tableMoreOption__sort").click(function(){
               let btnList = $(".sortbutton span");               
               if(btnList.length >= 1){
                  $(".sort-dropdown").toggleClass("open");
                  $(".sort-dropdownoverlay").toggleClass("show");
                  $(".sort-filter-btn .dropdown-menu").addClass('showhide');
               }else{
                  $(".sort-filter-btn .dropdown-menu").removeClass("showhide");
               }
            });

            $(document).on("click", '[data-sortaction]', function(){
               let text1 = $(this).text();
               $(this).closest('.main-ascenButton').find('.ascenButton').html("");
               $(this).closest('.main-ascenButton').find('.ascenButton').append(
                  `
                     ${text1}
                     <span class="material-symbols-outlined">
                        expand_more
                     </span>
                  `
               );
            })


            $(".sort-dropdown .sortBtn-modal .deletebutton").click(function(){
               $(".modal-cont>li").hide();
               $(".main-sortbutton .sort-dropdown").removeClass("open");
               $(".main-sortbutton .sortbutton").html("");
               $(".main-sortbutton").css("display" , "none");
               $('.sort-modal-btn-group .addbutton').show();
               $('.bottom.sortData__copy').find('li').show();
               $(".tablecard-filter").hide();
            });


            $(document).on( "click", ".modal-cont li .crossButton" , function(){
               $(this).closest("li").hide();

               var taget = $(this).closest("li").data("accdcsort");

               $('.sortData__copy.bottom').find(`[data-sortindex="${taget}"]`).show();

               var liArray2 = [];
               var innerHtml;
               $(".modal-cont").children("li:visible").each(function(index , data){
                  liArray2[index] = data;
                  innerHtml = $(data).find(".taskButton").html();
               });

               if(liArray2.length == 1){
                  $(".main-sortbutton .sortbutton").text("");
                  $(".main-sortbutton .sortbutton").append(
                     `
                        ${innerHtml}
                        <span class="material-symbols-outlined">expand_more</span>
                     `
                  );
               }else{
                  $(".main-sortbutton .sortbutton").text("");
                  $(".main-sortbutton .sortbutton").append(
                     `
                        <span class="material-symbols-outlined">
                           swap_vert
                        </span>
                        ${liArray2.length} sorts
                        <span class="material-symbols-outlined">
                           expand_more
                        </span>
                     `
                  );
               }

               var x = [];

                  $(".sortData__copy.bottom").children(`li:visible`).each(function(index , data){
                     x[index] = data;
                  });

                  console.log(x.length);

                  if(x.length == 1){
                     $('.sort-modal-btn-group .addbutton').hide()
                  } else{
                     $('.sort-modal-btn-group .addbutton').show()
                  }
            });


            $('.sort-dropdownoverlay').click(function(){
               $('.sort-dropdown').removeClass('open');
               $(this).removeClass('show');
            })










   </script>


      <!-- POPUP HERE -->
      <?php include("includes-ui/add-customer-panel.php") ?>
      
      <?php include("includes-ui/invoices-panel.php") ?>

      <div class="sort-dropdownoverlay"></div>

   </body>
<?php include("includes-ui/page-end.php"); ?>
