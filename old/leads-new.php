

<!DOCTYPE html>
<html lang="en">
   
<head>
   <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />   <link rel="stylesheet" href="assets/css/layout.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- loads the entire Variable Font -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
   <meta name="description" content="">
   <title>Dino Dashboard | ...</title>
</head>

<body>
   <div class="container-fluid pe-0 ps-0">
      <div class="mainPage">
         <aside>
    <div class="top-headerLeft">
        <a href="#">
            <div class="header-profile loader-items">
                <div class="header-profileAvatar">
                    <img src="assets/images/admin.png" class="" alt="">
                </div>
                <div class="header-profileName">
                    <h6>Frank M. Goff</h6>
                </div>
            </div>
            <div class="loader-div"></div>
            <!-- <div class="header-fullProfile">
                <div class="hfp-card">
                    <div class="hfp-cardHeader">
                        <p>frank_m_goff@dino.com</p>
                        <span class="material-symbols-outlined">more_horiz</span>
                    </div>
                    <div class="hfp-cardData">
                        <div class="hfp-cardImg">
                            <img src="assets/images/admin.png" alt="">
                        </div>
                        <div class="hfp-cardName">
                            <h6>Frank M. Goff</h6>
                            <span><em>Free Plan</em> . <i>1 member</i></span>
                        </div>
                    </div>
                    .hfp-card
                </div>
            </div> -->
    
            <div class="menu-Bar">
                <span class="material-symbols-outlined">left_panel_close</span>
            </div>
        </a>				
    </div>

    <ul class="aside-nav">
        <li class="active">
            <a href="./">
                <div class="nav-icon" style="font-variation-settings: 'FILL' 1;">
                    <span class="material-symbols-outlined">space_dashboard</span>
                </div>
                <span>Dashboard</span>
            </a>
            <!-- <div class="nav-iconDropDown">
                <i class="far fa-angle-down"></i>
            </div> -->
        </li>

        <li>
            <a href="leads.php?at=all">
                <div class="nav-icon" >
                    <span class="material-symbols-outlined">diamond</span>
                </div>
                <span>Leads</span>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">contact_page</span>
                </div>
                <span>Contact</span>
            </a>
        </li>

        <li>
            <a href="deals.php">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">box</span>
                </div>
                <span>Deals</span>
            </a>
        </li>

        <li>
            <a href="administration.php">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">event_list</span>
                </div>
                <span>Task Mangement</span>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">shapes</span>
                </div>
                <span>Projects</span>
            </a>
        </li>

        <li>
            <a href="login.php">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">deployed_code_alert</span>
                </div>
                <span>Disputes</span>
            </a>
        </li>

        <li>
            <a href="login.php">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <span>Billing Report</span>
            </a>
        </li>

        <li>
            <a href="login.php">
                <div class="nav-icon">
                    <span class="material-symbols-outlined">supervisor_account</span>
                </div>
                <span>Users</span>
            </a>
        </li>
    </ul>

    <div class="aside-setting">
        <a href="login.php">
            <div class="nav-icon">
                <span class="material-symbols-outlined">settings</span>
            </div>
            <span>Settings</span>
        </a>
    </div>
</aside>         <div class="mainBody">
            <header>
	<div class="top-header">
		<div class="d-flex align-items-center">
			<div class="menu-Bar me-3" style="display: none">
			<span class="material-symbols-outlined">left_panel_open</span>
				<span class="material-symbols-outlined">menu</span>
			</div>
			<div class="search-header">
				<form class="loader-items">
					<button for="gsearch">
						<span class="material-symbols-outlined">search</span>
					</button>
					<input type="search" id="gsearch" name="gsearch" placeholder="Search">
				</form>
				<div class="loader-div"></div>
			</div>
		</div>

		<div class="d-flex align-items-center">
			<div class="chat-header me-3">
				<a href="#" class="material-symbols-outlined">
					mark_unread_chat_alt
				</a>
			</div>

			<div class="more-header">
				<a href="http://localhost:81/one-window/crm/dashboard/includes/softwareinclude/logout.php" class="material-symbols-outlined">
					more_horiz
				</a>
			</div>
		</div>
	</div>
</header>
                        <div class="bodyPanel pb-0 pe-0 ps-0">
               <div class="bodyPanel__head">
                  <h6>
                     <span class="material-symbols-outlined">diamond</span>
                     Leads Management
                  </h6>
               </div>

               <div class="tableMainBox">
                  <div class="tablecard">
                     <div class="tablecard-toAlways">
                        <div class="tablecard-head">
                           <div class="tableview">
                              <div class="tableview__items">
                                 <span class="material-symbols-outlined">view_list</span>
                                 All Records
                              </div>
                              <!-- <div class="tableview__items">
                                 <span class="material-symbols-outlined">hotel_class</span>
                                 All Records
                              </div>
                              <div class="tableview__itemsAddMore">
                                 <span class="material-symbols-outlined">add_circle</span>
                              </div> -->
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
                                                <span class="material-symbols-outlined">badge</span>
                                                Name
                                             </a>
                                             <div class="dropdownClone">
                                                <div class="dropdown-menu">
                                                   <div class="dropdown-item drpBody__filter">
                                                      <span class="findFilterClosed material-symbols-outlined" style="cursor: pointer;">delete</span>
                                                      <input type="text" placeholder="Filter by name" class="findByName findByFilter" rel="name">
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
                                                      <input type="search" placeholder="Filter by email" class="findByEmail findByFilter" rel="email">
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
                                                      <input type="search" placeholder="Filter by phone" class="findByPhone findByFilter" rel="phone">
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
                                                      <input type="search" placeholder="Filter by product" class="findByProduct findByFilter" rel='service'>
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
                                                      <input type="search" placeholder="Filter by brad" class="findByBrand findByFilter" rel='leadsource'>
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


                              <div class="sort-filter-btn tableMoreOption__sort d-none">

                                    <span role="button" class="tableMoreOption__sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       <em>Sort</em>
                                    </span>

                                    <div class="dropdown-menu">
                                       <div class="dropdown-item drpBody__sort">
                                          <ul class="tableMoreOption__sort-searchByUl-list top sortData__copy">

                                             <li data-sortindex="0">
                                                <a href="#">
                                                   <span class="material-symbols-outlined">badge</span> Name 
                                                </a>
                                             </li>

                                             <li data-sortindex="1">
                                                <a href="#">
                                                   <span class="material-symbols-outlined">calendar_month</span> Date / Time 
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
                                 <button type="button" class="btn btn-success" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
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
                                                <span class="material-symbols-outlined drpDrag__addNew">drag_indicator
                                                </span>
                                                <a href="#" class="addCustomerBtn">
                                                   <span class="material-symbols-outlined drpTextIcon__addNew">article
                                                   </span>
                                                   New Lead Add
                                                </a>
                                             </div>

                                             <a href="#" class="material-symbols-outlined drpmore__addNew">more_horiz</a>
                                          </li>

                                          <li>
                                             <div class="text" href="#">
                                                <span
                                                   class="material-symbols-outlined drpDrag__addNew">drag_indicator</span>
                                                <a href="#">
                                                   <span
                                                      class="material-symbols-outlined drpTextIcon__addNew">edit_document</span>
                                                   Edit
                                                </a>
                                             </div>

                                             <a href="#" class="material-symbols-outlined drpmore__addNew">more_horiz</a>
                                          </li>
                                       </ul>
                                    </div>


                                    <!-- <a class="dropdown-item" href="#">Something else here</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="#">Separated link</a> -->
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
                                                            <span class="material-symbols-outlined">badge</span> Name
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
                                                            <span class="material-symbols-outlined">calendar_month</span> Date / Time
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
                                                            <span class="material-symbols-outlined">badge</span> Name 
                                                         </a>
                                                      </li>

                                                      <li data-sortindex="1">
                                                         <a href="#">
                                                            <span class="material-symbols-outlined">calendar_month</span> Date / Time 
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
                                    <div role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                       class="addbutton">
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
                                                         <span class="findFilterClosed material-symbols-outlined findByNameDelete"
                                                            style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by name"
                                                            class="findByName findByFilter" rel="name">
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
                                                         <span class="findFilterClosed material-symbols-outlined findByEmailDelete"
                                                            style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by email"
                                                            class="findByEmail findByFilter" rel="email">
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
                                                         <span class="findFilterClosed material-symbols-outlined findByPhoneDelete"
                                                            style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by phone"
                                                            class="findByPhone findByFilter" rel="phone">
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
                                                         <span class="findFilterClosed material-symbols-outlined findByProductDelete"
                                                            style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by product"
                                                            class="findByProduct findByFilter" rel='service'>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span
                                                      class="material-symbols-outlined">room_preferences</span>Brand
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined findByBrandDelete"
                                                            style="cursor: pointer;">delete</span>
                                                         <input type="text" placeholder="Filter by brand"
                                                            class="findByBrand findByFilter" rel='leadsource'>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <a href="#">
                                                   <span
                                                      class="material-symbols-outlined">calendar_month</span>Date
                                                </a>
                                                <div class="dropdownClone">
                                                   <div class="dropdown-menu">
                                                      <div class="dropdown-item drpBody__filter">
                                                         <span class="findFilterClosed material-symbols-outlined findByDateDelete"
                                                            style="cursor: pointer;">delete</span>
                                                         <input type="date" placeholder="Filter by date"
                                                            class="findByDate findByFilter">
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
                     </div>


                     <div class="tablecard-body">
                        <table class="leadsTable" style="width:100%">
                           <thead>
                              <tr>
                                 <th>
                                    <h6>
                                       <span class="material-symbols-outlined">abc</span> Name
                                    </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">subject</span> Email </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">subject</span> Phone </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Status
                                    </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Priority
                                    </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Lead
                                       Source </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span>Service </h6>
                                 </th>
                                 <!-- <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Agent
                                    </h6>
                                 </th> -->
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Date /
                                       Time</h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Last
                                       Contact </h6>
                                 </th>
                                 <th>
                                    <h6><span class="material-symbols-outlined">arrow_drop_down_circle</span> Comments
                                    </h6>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=9">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>04 August 2023, 08:58 AM</td>
                                    <td><strong>(logcat)</strong><BR>d</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=25">
                                          wajih 11                                       </a>
                                    </td>
                                    <td>
                                       wajih@gmail.com                                    </td>
                                    <td>
                                       123456                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd1.com                                    </td>
                                    <td>Logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=12">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=28">
                                          umair 2                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin2@gmail.com                                    </td>
                                    <td>
                                       12345611                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=15">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=31">
                                          Amir 2                                       </a>
                                    </td>
                                    <td>
                                       amir2@gmail.com                                    </td>
                                    <td>
                                       123456                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=18">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=34">
                                          wajih 3                                       </a>
                                    </td>
                                    <td>
                                       wajih3@gmail.com                                    </td>
                                    <td>
                                       +923001045632                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=21">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=8">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=24">
                                          umair 1                                       </a>
                                    </td>
                                    <td>
                                       umair@gmail.com                                    </td>
                                    <td>
                                       123456                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>03 August 2023, 05:01 AM</td>
                                    <td><strong>(logcat)</strong><BR>leads history</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=11">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=27">
                                          Amir                                       </a>
                                    </td>
                                    <td>
                                       amir@yahoo.com                                    </td>
                                    <td>
                                       +923001045632                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd1.com                                    </td>
                                    <td>Animation</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=14">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=30">
                                          wajih 2                                       </a>
                                    </td>
                                    <td>
                                       wajih2@gmail.com                                    </td>
                                    <td>
                                       123456                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd1.com                                    </td>
                                    <td>App</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=17">
                                          wajih 2345                                       </a>
                                    </td>
                                    <td>
                                       1umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001045632                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>01 August 2023, 07:53 AM</td>
                                    <td><strong>(logcat)</strong><BR>asdasd123123123  umair</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=33">
                                          sumair 3                                       </a>
                                    </td>
                                    <td>
                                       sumair3@gmail.com                                    </td>
                                    <td>
                                       123456                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=20">
                                          wajih 111                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin1231@gmail.com                                    </td>
                                    <td>
                                       +9230011112132                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd151.com                                    </td>
                                    <td>logo 11</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>02 August 2023, 11:25 AM</td>
                                    <td><strong>(logcat)</strong><BR>ok</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=7">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=23">
                                          wajih 1234                                       </a>
                                    </td>
                                    <td>
                                       12umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +92301234567                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=10">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=26">
                                          sumair                                       </a>
                                    </td>
                                    <td>
                                       sumair@gmail.com                                    </td>
                                    <td>
                                       0987                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>App</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>03 August 2023, 11:51 AM</td>
                                    <td><strong>(logcat)</strong><BR>test</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=13">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=29">
                                          sumair 2                                       </a>
                                    </td>
                                    <td>
                                       sumair2@gmail.com                                    </td>
                                    <td>
                                       +923012345671                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd1.com                                    </td>
                                    <td>Logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=16">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=32">
                                          umair 3                                       </a>
                                    </td>
                                    <td>
                                       umair3@gmail.com                                    </td>
                                    <td>
                                       123456                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd4.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=19">
                                          wajih                                       </a>
                                    </td>
                                    <td>
                                       umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=4">
                                          sumair mukati                                       </a>
                                    </td>
                                    <td>
                                       hmsumai01@gmail.com                                    </td>
                                    <td>
                                       +923001001010                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd.com                                    </td>
                                    <td>logo</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>-</td>
                                    <td>-</td>
                                 </tr>
                              
                                 <tr>
                                    <td>
                                       <a href="./leads-detail.php?lead_id=22">
                                          wajih 2345                                       </a>
                                    </td>
                                    <td>
                                       11umair.yasin@gmail.com                                    </td>
                                    <td>
                                       +92301234567                                    </td>
                                    <td>
                                       <div class="tableDataStatus">Closed <span
                                             class="material-symbols-outlined">award_star</span></div>
                                    </td>
                                    <td><span class="text-danger">Normal</span></td>
                                    <td>
                                       https://abcd5.com                                    </td>
                                    <td>Web</td>
                                    <!-- <td>John Smith</td> -->
                                    <td>
                                       04 August 2023, 02:01 PM                                    </td>
                                    <td>01 August 2023, 10:19 AM</td>
                                    <td><strong>(logcat)</strong><BR>aa</td>
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
                            
    <select name="dataperpage">
        <option value="5" >5 Leads Per Page</option>
        <option value="10" >10 Leads Per Page</option>
        <option value="50" selected>50 Leads Per Page</option>
        <option value="100" >100 Leads Per Page</option>
        <!-- <option value="">Full Leads Per Page</option> -->
    </select>

                           </div>
                               

        <div class="tablepage_nav">
            <span class="material-symbols-outlined   disabled"><a href="javascript:;">keyboard_arrow_left</a></span>
            <em>1</em> to <i>1</i>
            <span class="material-symbols-outlined  disabled  "><a href="javascript:;">keyboard_arrow_right</a></span>
        </div>


                        </div>
                        <!-- <div class="tablecard-footer__tablepage">
                              <div class="tablepage_leads">
                              </div>
                              <div class="tablepage_nav">
                              </div>
                           </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="assets/js/jquery.js"></script>
<script src="assets/js/custom.js"></script>

   <!-- DATA TABLE -->
   <!-- DATA TABLE -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>


   <!-- POPUP HERE -->
   <div class="addCustomerPanel-overlay"></div>

<div class="addCustomerPanel">
      <div class="addCustomerPanel-head">
         <span class="material-symbols-outlined addCustomerPanel-closed">keyboard_double_arrow_right</span>
         <span class="material-symbols-outlined addCustomerPanel-fullwindo">open_in_full</span>
         <span class="material-symbols-outlined tooltip"  data-tooltip="I found what I need. And it's not friends, it's things." data-tooltip-pos="down" data-tooltip-length="fit">help</span>
      </div>

      <div class="addCustomerPanel-body">
         <div class="heading">
            <h6>New Lead</h6>
         </div>
         <div class="addCustomerPanel-form">
            <form class="add-lead-form">

               <div class="row align-items-center mb-1">
                  <div class="col-md-4">
                     <label for="#">
                        <span class="material-symbols-outlined">person_4</span>
                        Customer Full Name
                     </label>
                  </div>

                  <div class="col-md-8">
                     <input type="Text" placeholder="Empty" name="customerFullName" required>
                  </div>
               </div>

               <div class="row align-items-center mb-1">
                  <div class="col-md-4">
                     <label for="#">
                        <span class="material-symbols-outlined">mark_email_read</span>
                        Email
                     </label>
                  </div>

                  <div class="col-md-8">
                     <input type="email" placeholder="Empty" name="customerEmailAddress" required>
                  </div>
               </div>

               <div class="row align-items-center mb-1">
                  <div class="col-md-4">
                     <label for="#">
                        <span class="material-symbols-outlined">call</span>
                        Phone Number
                     </label>
                  </div>

                  <div class="col-md-8">
                     <input type="text" placeholder="Empty" name="customerPhoneNumber" required>
                  </div>
               </div>

               <div class="row align-items-center mb-1">
                  <div class="col-md-4">
                     <label for="#">
                        <span class="material-symbols-outlined">captive_portal</span>
                        Country
                     </label>
                  </div>

                  <div class="col-md-8">
                     <input type="text" placeholder="Empty" name="country" required>
                  </div>
               </div>

               <div class="row align-items-center mb-1">
                  <div class="col-md-4">
                     <label for="#">
                        <span class="material-symbols-outlined">home_repair_service</span>
                        Services
                     </label>
                  </div>

                  <div class="col-md-8">
                     <input type="text" placeholder="Empty" name="product" required>
                  </div>
               </div>

               <div class="row align-items-center mb-1">
                  <div class="col-md-4">
                     <label for="#">
                        <span class="material-symbols-outlined">new_releases</span>
                        Brand Name
                     </label>
                  </div>

                  <div class="col-md-8">
                     <input type="text" placeholder="Empty" name="page_link" required>
                  </div>
               </div>

               
               <div class="lastLeadDiv"></div>
          

               <!-- <div class="row">
                  <div class="addCustomerPanel-commit">
                     <span>T</span>
                     <textarea placeholder="Comments"></textarea>
                  </div>
               </div> -->
               <button type="submit" class="hide" style="display:none"></button>
            </form>
         </div>
         <div class="addCustomerPanel__addnewbtn">
            <a href="#" class="addCustomerBtn addLeadNewMeta">
               <span class="material-symbols-outlined">add_box</span> New
            </a>
         </div>
            <!-- <div class="row align-items-center mb-1 ">
               <div class="col-md-12">
               </div>
            </div> -->
      </div>

      <div class="addCustomerPanel-footer d-flex align-items-center justify-content-end">
         <button class="btn btn-secondary addCustomerPanel-closed">Cancel</button>
         <button class="btn btn-success d-flex align-items-center ms-2 save-lead">Save Lead <span
               class="material-symbols-outlined ms-1">save</span></button>
      </div>
   </div>
   
<script>
    // ADD NEW CUSTOMER
    // HIDE 
    $(".addCustomerPanel-closed").click(function(){
        $(".addCustomerPanel").hide();
        $(".addCustomerPanel").css("right", "-1500px");
        $(".addCustomerPanel-overlay").hide();
    })
    // SHOW
    $(".addCustomerBtn").click(function(){
        $(".addCustomerPanel").show();
        $(".addCustomerPanel").css("right", "0px");
        $(".addCustomerPanel-overlay").show();
    })
</script>
   <div class="invoicePanel-overlay"></div>

<div class="invoicePanel">
    <div class="invoicePanel-head">
        <span class="material-symbols-outlined invoicePanel-closed">keyboard_double_arrow_right</span>
    </div>

    <div class="invoicePanel-body">
        <div class="heading">
            <h6>Invoices: <span>ALD1567-01</span></h6>
        </div>
        <div class="invoiceCard">
            <div class="company-details">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <img src="assets/images/aspire.png" alt="logo">
                        </div>
                    </div>
    
                    <div class="col-md-6 text-end">
                        <div class="address">
                            <p>
                                Address:1053 Irolo St Unit #12 Los Angeles, CA 90006,
                            </p>
                            <a href="tel:+18447166111">Phone:+18447166111</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="invoce-detail">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Invoice Number</h5>

                        <p>ALD1567-01</p>
                        <p>Issued Date: <em>10 Apr 2022</em></p>
                        <p>Due Date: <em>20 Apr 2022</em></p>
                    </div>

                    <div class="col-md-6 text-end">
                        <h5>Billed To</h5>

                        <p>Nerino J. Petro, Jr.</p>
                        <p>nerinopetro@cencomtech.com</p>
                    </div>
                </div>
            </div>

            <div class="item-detail">
                <h5>Items Details</h5>
                <p class="text-uppercase">BELOW ARE THE PAYMENT DETAILS</p>
            </div>

            <div class="items-table">
                <table class="invoiceTable table table-hover" style="width:100%;">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Products</th>
                            <th class="text-uppercase">Rate</th>
                            <th class="text-uppercase">Discount</th>
                            <th class="text-uppercase">Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>logo - logo - (Paid)</td>
                            <td>5244</td>
                            <td>5%</td>
                            <td>5244.00</td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>- Federal Fee for Attestation of the Trademark = ONLY $899+tax - Attorney’s fee for the remaining Documentation = ONLY $399+tax Total = $1392 Including Tax - (Pending)</td>
                            <td>5244</td>
                            <td>5%</td>
                            <td>5244.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoice-cal">
                <div class="row">
                    <div class="col-md-6">
                        <div class="invoice-print">
                            <p>*THIS IS A SYSTEM GENERATED DOCUMENT POWERED BY DINOCAMP.*</p>

                            <button class="btn btn-success d-flex align-items-center ms-2">Print this page <span class="material-symbols-outlined ms-1">print</span></button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="invoice-total">
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Subtotal</h4>
                                        </div>
                                        <div class="col-6 text-end">
                                            <h4>$4131.00</h4>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Amount Paid</h4>
                                        </div>
                                        <div class="col-6">
                                            <h3>$2739</h3>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4>Amount Balance</h4>
                                        </div>
                                        <div class="col-6">
                                            <h3>$1392</h3>
                                        </div>
                                    </div>
                                </li>

                                <li class="grandtotal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Total</h4>
                                        </div>

                                        <div class="col-md-6">
                                            <h3>$4131.00</h3>
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
</div>

<div class="sort-dropdownoverlay"></div>

<script>
    // ADD NEW CUSTOMER
    // HIDE 
    $(".invoicePanel-closed").click(function(){
        $(".invoicePanel").hide();
        $(".invoicePanel").css("right", "-1500px");
        $(".invoicePanel-overlay").hide();
    })
    // SHOW
    $(".invoiceBtn").click(function(){
        $(".invoicePanel").show();
        $(".invoicePanel").css("right", "0px");
        $(".invoicePanel-overlay").show();
    })
</script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

   <script>

      $('select[name="dataperpage"]').on('change', function () {
         const selectedUrl = $(this).val();
         $.ajax({
            type: "GET",
            url: 'leads.php',
            data: { dataperpage: selectedUrl },
            success: function (data) {
               window.location = window.location.href.split("?")[0];
            }
         });
      });



      $(document).on('click', '.save-lead', function (e) {
         $('.add-lead-form').find('[type="submit"]').trigger('click');
      })
      $(document).on('submit', '.add-lead-form', function (e) {
         e.preventDefault();
         var formData = $(this).serialize();
         $.ajax({
            url: 'includes/softwareinclude/ajax.php',
            data: formData + '&type=add-lead',
            type: 'post',
            success: function (res) {
               alert('Lead Added ');
               location.reload()
            }
         })
      })

      $('.addLeadNewMeta').on('click', function (event) {
         let x = 'divLeadNewMeta' + Math.round(Math.floor((event.timeStamp * 100) + 1));
         var newLeadDiv = `
            <div class="row align-items-center mb-1 ${x}">
               <div class="col-md-4">
                  <label for="#">
                     <span class="material-symbols-outlined">manage_accounts</span>
                     <input name="leadmetakey[]" class="leadMetaKey" type="text" placeholder="Field Name (eg: gclid, keyword)" required>
                  </label>
               </div>
               <div class="col-md-6">
                  <input class="leadMetaValue" type="text" placeholder="Field Value (eg: asda..., keyword)" name="leadmetavalue[]" required>
               </div>
               <div class="col-md-2">
                  <span class="material-symbols-outlined addCustomerPanel__addnewbtn-closed" onclick="deleteThisDiv(\'${x}\');">delete</span>
               </div>
            </div>`;
         $(newLeadDiv).insertBefore('.lastLeadDiv');
      });


      function deleteThisDiv(val) {
         $("." + val).remove();
      };


   </script>

   <script>
      $(document).ready(function () {
         $(document).on('keyup', '.findByFilter', function (e) {
            if(e.keyCode == 13)
            {
               var value = $(this).val();
               var fieldName = $(this).attr('rel');
               searchInLeadList(fieldName, value);
            }
         });
         $(document).on('click', '.findByNameDelete', function () {
            dataTable.columns(0).search('').draw();
         });
      });

      function searchInLeadList(fieldName, val){
         console.log(fieldName);
         console.log(val);

         if (val == "") {
                    alert('Please Enter Text');
                }
                else {
                    $.ajax({
                        type: "POST",
                        url: 'includes/softwareinclude/ajax.php',
                        data: { type: 'search-lead-list', fieldName: fieldName, fieldVal: val },
                        success: function (data) {
                           console.log(data);
                           window.location = window.location.href.split("?")[0];
                        }
                    });
                }
      }
   </script>

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
            });

            $('.addCustomerPanel-fullwindo').click(function(){
               $(this).toggleClass('show');
               $('.addCustomerPanel').toggleClass("fullScreen");

               if($(this).hasClass('show')){
                  $(this).text('close_fullscreen')
               }else{
                  $(this).text('open_in_full')
               }
            });
   </script>

</body>
</html>
