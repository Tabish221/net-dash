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
                  <div class="bodyPanel__head ps-5 pe-3 d-flex align-items-center justify-content-between">
                     <h6>
                        <span class="material-symbols-outlined">diamond</span> 
                        Leads Management
                     </h6>

                     <div class="bodyPanel__headButton">
                        <div class="btn-group tableMoreOption__filter">
                           <em  data-toggle="dropdown" aria-haspopup="true" class="main-filter" aria-expanded="false" onClick="filterbtnclick()">Filter</em>
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
                        
                        <span class="tableMoreOption__search">
                           <span class="material-symbols-outlined">search</span>
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

                  <div class="tablecard-filter ps-5 pe-3 bg-transparent" style="display: none;">
                     <div class="tablefilter-cont d-flex align-items-center ">
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
                  
                  <div class="dealMain__body ps-5">
                     <ul>
                        <li>
                           <div class="dealTitleBox primary mb-3">
                              <h4>Review</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel pb-3" id="left">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="dealTitleBox info mb-3">
                              <h4>Negotiation</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel" id="right">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="dealTitleBox success mb-3">
                              <h4>Negotiation</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="dealTitleBox danger mb-3">
                              <h4>Negotiation</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="dealTitleBox warning mb-3">
                              <h4>Negotiation</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="dealTitleBox secondary mb-3">
                              <h4>Negotiation</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li>
                           <div class="dealTitleBox orange mb-3">
                              <h4>Negotiation</h4>

                              <h5>
                                 $100,00 <span></span> <p>2 Deals</p>
                              </h5>
                           </div>

                           <div class="dealbox-panel">
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
   
                              <div class="card dealCard mb-3">
                                 <div class="card-body">
                                    <div class="row">
                                       <div class="col-md-7 pe-0">
                                          <div class="dealCard-detail">
                                             <h6>Edwin Chan</h6>
                                             <p>John Smith</p>
                                             <p>Logo Design Package Name</p>
                                             <p>Website</p>
                                             <p>Jul 15, 2023</p>
                                          </div>
                                       </div>
   
                                       <div class="col-md-5 ps-0">
                                          <div class="dealCard-price">
                                             <h6>$5,000</h6>
   
                                             <a href="#">
                                                <span class="material-symbols-outlined">add_circle</span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
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
      
      <?php include("includes-ui/scripts.php"); ?>
      <script src="assets/js/filter-and-sort.js"></script>
      <script src="assets/js/dragula/dragula.min.js"></script>

      <script>
         function filterbtnclick(){
            var a = $('header').outerHeight();
            var b = $('.bodyPanel__head').outerHeight();
            var c = 0;
            let btnList = $(".addMoreFillerTab ul").find("li");

            if($('.tablecard-filter').is(':visible')){
               c = 0;
            } else{
               c = $('.tablecard-filter').outerHeight();
   
               if (btnList.length > 0) {
                  c = $('.tablecard-filter').outerHeight();
                  if ($(".tablecard-filter").is(":visible")) {
                     c = 0;
                  } else {
                     c = $('.tablecard-filter').outerHeight();
                  }

               } else {
                  c = 0;
               }
            }

            var x = a+b+c+25;
            // console.log(a, b, c);

            $(".dealMain__body").attr("style", `height: calc(100vh - ${x}px)`)
         }

         $(document).on('click', '.tableMoreOption__filter .dropdown-menu ul li a', function(){
            var a = $('header').outerHeight();
            var b = $('.bodyPanel__head').outerHeight();
            var c = 0;

            if($('.tablecard-filter').is(':visible')){
               c = $('.tablecard-filter').outerHeight();
            } else{
               c = 0;
            }

            var x = a+b+c+25;

            $(".dealMain__body").attr("style", `height: calc(100vh - ${x}px)`)
         })
      </script>
   </body>
<?php include("includes-ui/page-end.php"); ?>
