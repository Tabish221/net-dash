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
            <div class="bodyPanel pb-0">
               <div class="bodyPanel__head">
                  <h6>
                     <span class="material-symbols-outlined">diamond</span> 
                     Leads Management
                  </h6>
               </div>
               
               <div class="tablecard onPage__TC">
                  <div class="tablecard-head">
                     <div class="tableview">
                        <div class="tableview__items">
                           <span class="material-symbols-outlined">view_list</span>
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
                           <div class="dataTables_filter">
                              <label>
                                 <span class="material-symbols-outlined">search</span>
                                 <input type="search" placeholder="Search records">
                              </label>
                           </div>
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
                  
                  <div class="tablecard-body" style="background-color: transparent">
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                     <?php include("include-widget/box3.php"); ?>
                  </div>

                  <div class="tablecard-footer">
                     <div class="tablecard-footer__addnewbtn">
                        <a href="#" class="addCustomerBtn">
                           <span class="material-symbols-outlined">add_circle</span> New
                        </a>
                     </div>

                     <div class="tablecard-footer__tablepage">
                        <div class="tablepage_leads">
                           <div class="dataTables_length">
                              <label>
                                 <select>
                                    <option value="10">10 Leads Per Page</option>
                                    <option value="20">20 Leads Per Page</option>
                                    <option value="30">30 Leads Per Page</option>
                                    <option value="40">40 Leads Per Page</option>
                                    <option value="50">50 Leads Per Page</option>
                                    <option value="-1">All Leads One Page</option>
                                 </select>
                              </label>
                           </div>
                        </div>
                        <div class="tablepage_nav">
                           <div class="dataTables_paginate paging_simple_numbers">
                              <a class="paginate_button previous">
                                 <em class="material-symbols-outlined">arrow_back_ios</em>
                              </a>
                              <span>2 to 4</span>
                              <a class="paginate_button next">
                                 <em class="material-symbols-outlined">arrow_forward_ios</em>
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

   <div class="sort-dropdownoverlay"></div>

   <?php include("includes-ui/scripts.php"); ?>

   <script src="assets/js/filter-and-sort.js"></script>


</body>

<?php include("includes-ui/page-end.php"); ?>