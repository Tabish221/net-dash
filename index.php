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
               <!-- <div class="row mb-3">
                  <div class="col-md-8">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              Sales Report
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>
                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body index__salesreport">
                           <div class="index__salesreport-prices">
                              <h5>
                                 <span>$ 100,000</span>
                                 <em>-$5,000</em>
                                 <i>$95,000</i>
                              </h5>
                              <p>
                                 <span>Goal</span>
                                 <b>($200,000)</b>
                              </p>
                           </div>

                           <div class="index__salesreport-bar">
                              <span class="ms-0" style="width: 35%;background: #3CD856;"></span>
                              <span style="width: 25%;background: #FF8F0D;"></span>
                              <span style="width: 10%;background: #BF83FF;"></span>
                              <span style="width: 20%;background: #FFCF00;"></span>
                              <span class="me-0" style="width: 10%;background: #0095FF;"></span>
                           </div>

                           <div class="index__salesreport-cards">
                              <div class="salesreport-card" style="background-color: #DCFCE799;">
                                 <div class="salesreport-cardHead">
                                    <h5>Sales</h5>

                                    <span class="salesreport-cardIcon" style="background-color: #3CD856;">
                                       <span class="material-symbols-outlined">insert_chart</span>
                                    </span>
                                 </div>

                                 <div class="salesreport-cardBody">
                                    <h4>$10,000 <span class="material-symbols-outlined">trending_up</span></h4>

                                    <p>+8% from yesterday</p>
                                 </div>
                              </div>

                              <div class="salesreport-card" style="background-color: #FFE5C899;">
                                 <div class="salesreport-cardHead">
                                    <h5>Project</h5>

                                    <span class="salesreport-cardIcon" style="background-color: #FF8F0D;">
                                       <span class="material-symbols-outlined">description</span>
                                    </span>
                                 </div>

                                 <div class="salesreport-cardBody">
                                    <h4>30</h4>

                                    <p>+5% from yesterday</p>
                                 </div>
                              </div>

                              <div class="salesreport-card" style="background-color: #F3E8FF99;">
                                 <div class="salesreport-cardHead">
                                    <h5>New Leads</h5>

                                    <span class="salesreport-cardIcon" style="background-color: #BF83FF ;">
                                       <span class="material-symbols-outlined">person_add</span>
                                    </span>
                                 </div>

                                 <div class="salesreport-cardBody">
                                    <h4>8</h4>

                                    <p>0,5% from yesterday </p>
                                 </div>
                              </div>

                              <div class="salesreport-card" style="background-color: #FFF4DE99;">
                                 <div class="salesreport-cardHead">
                                    <h5>Open Deals</h5>

                                    <span class="salesreport-cardIcon" style="background-color: #FFCF00;">
                                       <span class="material-symbols-outlined">sell</span>
                                    </span>
                                 </div>

                                 <div class="salesreport-cardBody">
                                    <h4>12</h4>

                                    <p>+1,2% from yesterday</p>
                                 </div>
                              </div>

                              <div class="salesreport-card" style="background-color: #F0F9FF99;">
                                 <div class="salesreport-cardHead">
                                    <h5>Total Call Schedule</h5>

                                    <span class="salesreport-cardIcon" style="background-color: #0095FF;">
                                       <span class="material-symbols-outlined">person_add</span>
                                    </span>
                                 </div>

                                 <div class="salesreport-cardBody">
                                    <h4>8</h4>

                                    <p>0,5% from yesterday</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              Projects This month
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>
                        <div class="card-body">
                           <div class="index__projectsMonth">
                              <div class="index__projectsMonth-detail">
                                 <div class="index__projectsMonth-detailHeading">
                                    <span class="index__projectsMonth-detailHeadingIcon"
                                       style="background-color: #FF8F0D;">
                                       <span class="material-symbols-outlined">description</span>
                                    </span>
                                    <h6>600</h6>
                                 </div>
                                 <h3 class="index__projectsMonth-detailSubHeading">Total Project</h3>

                                 <ul>
                                    <li>
                                       <span style="background: #0095FF;"></span> REVISION
                                    </li>
                                    <li>
                                       <span style="background: #BF83FF;"></span> COMPLETED
                                    </li>
                                    <li>
                                       <span style="background: #EF4444;"></span> REFUNDS
                                    </li>
                                 </ul>
                              </div>

                              <div class="index__projectsMonth-chart">
                                 <div id="projectsMonth-chart">
                                    <div class="projectsMonth-chartItems items1">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111 118" fill="none">
                                          <path
                                             d="M51.8567 1C83.8016 1 109.698 26.8965 109.698 58.8414C109.698 90.7863 83.8016 116.683 51.8567 116.683C30.0286 116.683 11.0245 104.592 1.17676 86.7414"
                                             stroke="#EF4444" stroke-width="1.29698" />
                                       </svg>
                                       <span>30</span>
                                       <b>Refunds</b>
                                    </div>

                                    <div class="projectsMonth-chartItems items2">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111 118" fill="none">
                                          <path
                                             d="M51.8567 1C83.8016 1 109.698 26.8965 109.698 58.8414C109.698 90.7863 83.8016 116.683 51.8567 116.683C30.0286 116.683 11.0245 104.592 1.17676 86.7414"
                                             stroke="#0095FF" stroke-width="1.29698" />
                                       </svg>
                                       <span>56</span>
                                       <b>Revision</b>
                                    </div>

                                    <div class="projectsMonth-chartItems items3">
                                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111 118" fill="none">
                                          <path
                                             d="M51.8567 1C83.8016 1 109.698 26.8965 109.698 58.8414C109.698 90.7863 83.8016 116.683 51.8567 116.683C30.0286 116.683 11.0245 104.592 1.17676 86.7414"
                                             stroke="#C58FFF" stroke-width="1.29698" />
                                       </svg>
                                       <span>900</span>
                                       <b>Completed</b>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col-md-8">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              Total Revenue
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>
                        <div class="card-body">
                           <div id="monthly_revenue" style="max-height: 400px;height:100%; width:100%;"></div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              Top Products
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body px-0">
                           <div class="tableScroll__index overflow-auto">
                              <table class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th style="width: 50%;">Propularity</th>
                                       <th class="text-end">Sales</th>
                                    </tr>
                                 </thead>

                                 <tbody>
                                    <tr class="align-middle">
                                       <td class="fontwight-500 fs-7">Logo</td>
                                       <td>
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 45%; background-color:#111111;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end"><span
                                             class="border border-primary text-primary alert-primary rounded-theam p-2">45%</span>
                                       </td>
                                    </tr>

                                    <tr class="align-middle">
                                       <td class="fontwight-500 fs-7">Website</td>
                                       <td>
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 29%; background-color:#111111;" aria-valuenow="29"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end"><span
                                             class="border border-success text-success alert-success mb-0 rounded-theam p-2">29%</span>
                                       </td>
                                    </tr>

                                    <tr class="align-middle">
                                       <td class="fontwight-500 fs-7">SEO</td>
                                       <td>
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 45%; background-color:#111111;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end"><span
                                             class="border border-success text-success alert-success mb-0 rounded-theam p-2">45%</span>
                                       </td>
                                    </tr>

                                    <tr class="align-middle">
                                       <td class="fontwight-500 fs-7">Social Media</td>
                                       <td>
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 45%; background-color:#111111;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end"><span
                                             class="border border-success text-success alert-success mb-0 rounded-theam p-2">45%</span>
                                       </td>
                                    </tr>

                                    <tr class="align-middle">
                                       <td class="fontwight-500 fs-7">Book Writing</td>
                                       <td>
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 45%; background-color:#111111;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end"><span
                                             class="border border-success text-success alert-success mb-0 rounded-theam p-2">45%</span>
                                       </td>
                                    </tr>

                                    <tr class="align-middle">
                                       <td class="fontwight-500 fs-7">Content Writing</td>
                                       <td>
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 45%; background-color:#111111;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end"><span
                                             class="border border-success text-success alert-success mb-0 rounded-theam p-2">45%</span>
                                       </td>
                                    </tr>

                                    <tr class="align-middle border-bottom-0">
                                       <td class="fontwight-500 fs-7 border-bottom-0">Logo</td>
                                       <td class=" border-bottom-0">
                                          <div class="progress" style="height: 3px;background-color: #aaaaaa;">
                                             <div class="progress-bar" role="progressbar"
                                                style="width: 45%; background-color:#111111;" aria-valuenow="45"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </td>
                                       <td class="text-end border-bottom-0"><span
                                             class="border border-success text-success alert-success mb-0 rounded-theam p-2">45%</span>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row mb-3">
                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-header pb-0">
                           <h6>
                              My Pipeline Deals By Stage
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body pt-0">
                           <figure class="highcharts-figure" style="width: 100%; height: 150px">
                              <div id="funnelChart" style="width: 100%"></div>
                           </figure>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              Projects This month
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body">
                           <div class="chartDateChange">
                              <span class="material-symbols-outlined">arrow_back_ios</span>
                              <em>July 2023</em>
                              <span class="material-symbols-outlined">arrow_forward_ios</span>
                           </div>

                           <div id="columnchart_material" style="min-height: 180px"></div>

                           <div class="forecastDealLost">
                              <div class="forecastDealLost-data forecastCard">
                                 <div class="forecastDealLost-icon">
                                    <span class="material-symbols-outlined">local_mall</span>
                                 </div>
                                 <div class="forecastDealLost-title">
                                    <p>Forecast</p>
                                 </div>
                                 <div class="forecastDealLost-value">
                                    <h6>$10,000</h6>
                                 </div>
                              </div>

                              <div class="forecastDealLost-data dealLostCard">
                                 <div class="forecastDealLost-icon">
                                    <span class="material-symbols-outlined">local_activity</span>
                                 </div>
                                 <div class="forecastDealLost-title">
                                    <p>Deal Lost</p>
                                 </div>
                                 <div class="forecastDealLost-value">
                                    <h6>$5,000</h6>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>

                  <div class="col-md-5">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              OPEN DEALS
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body">
                           <div class="table100">
                              <table class="table table-hover mydataTable">
                                 <thead>
                                    <tr>
                                       <th>Contact</th>
                                       <th>Agent</th>
                                       <th>Product</th>
                                       <th>Date</th>
                                       <th>Amount</th>
                                       <th>Status</th>
                                       <th>End Date</th>
                                       <th>Pay Amount</th>
                                    </tr>
                                 </thead>

                                 <tbody>
                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>

                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>

                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>

                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>

                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>

                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>

                                    <tr>
                                       <td class="fontwight-500">Kris Marrier <br> (Sample)</td>
                                       <td>Capla Paprocki <br> (Sample)</td>
                                       <td>Logo</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                       <td>Pending</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="fontwight-700 fs-7">$4000</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="dataTables_paginate">
                              <a class="paginate_button previous">
                                 <em class="material-symbols-outlined">arrow_back_ios</em>
                              </a>
                              <span>1 to 2</span>
                              <a class="paginate_button next">
                                 <em class="material-symbols-outlined">arrow_forward_ios</em>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              OPEN DEALS
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body">
                           <div class="scrollableTable table100">
                              <table class="table table-hover mydataTable" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>Project ID</th>
                                       <th>Contact</th>
                                       <th>Agent</th>
                                       <th>Started Date</th>
                                       <th>Deadline</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>

                                 <tbody>
                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>

                           <div class="dataTables_paginate">
                              <a class="paginate_button previous">
                                 <em class="material-symbols-outlined">arrow_back_ios</em>
                              </a>
                              <span>1 to 2</span>
                              <a class="paginate_button next">
                                 <em class="material-symbols-outlined">arrow_forward_ios</em>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              OPEN DEALS
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit</li>
                                 <li role="button" class="mt-1 delete"><span class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body">
                           <div class="scrollableTable table100">
                              <table class="table table-hover mydataTable" style="width:100%">
                                 <thead>
                                    <tr>
                                       <th>Project ID</th>
                                       <th>Contact</th>
                                       <th>Agent</th>
                                       <th>Started Date</th>
                                       <th>Deadline</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>

                                 <tbody>
                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>

                                    <tr>
                                       <td class="green-text fontwight-500">LDPROFS-00992</td>
                                       <td class="fontwight-500">Kris Marrier (Sample)</td>
                                       <td>Capla Paprocki (Sample)</td>
                                       <td class="text-nowrap">Jul 13, 2023</td>
                                       <td class="text-nowrap">Aug 13, 2023</td>
                                       <td>Revision</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="dataTables_paginate">
                              <a class="paginate_button previous">
                                 <em class="material-symbols-outlined">arrow_back_ios</em>
                              </a>
                              <span>1 to 2</span>
                              <a class="paginate_button next">
                                 <em class="material-symbols-outlined">arrow_forward_ios</em>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </div>


   <?php include("includes-ui/scripts.php"); ?>

   <!-- Google Chart JS HERE -->
   <?php include("includes-ui/cdn/google-chart.php"); ?>

   <!-- Hihg Chart JS HERE -->
   <?php include("includes-ui/cdn/high-chart.php"); ?>

   <script>
      //create trigger to resizeEnd event     
      $(window).resize(function() {
         if(this.resizeTO) clearTimeout(this.resizeTO);
         this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
         }, 500);
      });

      //redraw graph when window resize is completed  
      $(window).on('resizeEnd', function() {
         drawChart();
         drawChart1();
         Highcharts.chart('funnelChart', chartOptionsFunnel);
      });

      // FORECAST VS DEAL LOST CHART START
      google.charts.load('current', { 'packages': ['corechart', 'bar'] });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
         var data = google.visualization.arrayToDataTable([
            ['Date', 'Deal Lost', 'Forecast'],
            ['8 Jul', 200, 300],
            ['9 Jul', 180, 280],
            ['10 Jul', 160, 330],
            ['11 Jul', 210, 270],
            ['12 Jul', 240, 360],
            ['13 Jul', 240, 365],
            ['14 Jul', 250, 370],
         ]);

         var options = {
            bar: {
               groupWidth: "80%"
            },
            legend: { position: "none" },
            colors: ['#EF4444', '#00E096'],
         };

         var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

         chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      // monthly_revenue

      google.charts.setOnLoadCallback(drawChart1);
      function drawChart1() {
         var dataMonthly = google.visualization.arrayToDataTable([
            ['Month', 'Refunds', 'Sales'],
            ['Jan', 2582, 8000],
            ['Feb', 1800, 7000],
            ['Mar', 2892, 7500],
            ['Apr', 2589, 6200],
            ['May', 3152, 9200],
            ['Jun', 1851, 4000],
            ['Jul', 1525, 8000],
            ['Aug', 1558, 5400],
            ['Sep', 2952, 6300],
            ['Oct', 3415, 5400],
            ['Nov', 3548, 6700],
            ['Dec', 1000, 7500]
         ]);
         var optionsMonthly = {
          series: {
            0: {targetAxisIndex: 0}
          },
          vAxis: {format: 'short'},
          legend: { position: 'bottom' },
          colors: ['#0095FF', '#00E096'],
          chartArea: {
            top: 50,
            width: "90%",
            height: '80%' 
          },
         //  chartArea: { right: 0, left: 0, top: 40, width: '70%', height: '80%' },
            // bar: {
            //    groupWidth: "80%"
            // },
         
         };

         var classicChart = new google.visualization.ColumnChart(document.getElementById('monthly_revenue'));
         classicChart.draw(dataMonthly, optionsMonthly);
      }
      
      // google.charts.setOnLoadCallback(drawChart1);
      // function drawChart1() {
      //    var dataMonthly = google.visualization.arrayToDataTable([
      //       ['Month', 'Refunds', 'Sales'],
      //       ['Jan', 10000, 8000],
      //       ['Feb', 8000, 8000],
      //       ['Mar', 8000, 8000],
      //       ['Apr', 8000, 8000],
      //       ['May', 8000, 8000],
      //       ['Jun', 8000, 8000],
      //       ['Jul', 8000, 8000],
      //       ['Aug', 8000, 8000],
      //       ['Sep', 8000, 8000],
      //       ['Oct', 8000, 8000],
      //       ['Nov', 8000, 8000],
      //       ['Dec', 8000, 8000]
      //    ]);
      //    var classicOptions = {
      //     width: 900,
      //     series: {
      //       0: {targetAxisIndex: 0}
      //     },
      //     vAxis: {format: 'short'},
      //     legend: { position: 'bottom' },
      //     colors: ['#0095FF', '#00E096'],
         
      //    var optionsMonthly = {
      //       chartArea: { right: 0, left: 100, top: 10, width: '90%', height: '80%' },
      //       bar: {
      //          groupWidth: "80%"
      //       },
      //       series: {
      //          0: { targetAxisIndex: 0 }
      //       },
      //       colors: ['#0095FF', '#00E096'],
      //       legend: { position: 'bottom' },
      //    };

      //    var classicChart = new google.visualization.ColumnChart(document.getElementById('monthly_revenue'));
      //    classicChart.draw(dataMonthly, optionsMonthly);
      // }

      $(document).on('click', ".menu-Bar", function(){
         setTimeout(function() {
            drawChart();
            drawChart1();
            Highcharts.chart('funnelChart', chartOptionsFunnel);
         }, 500);         
      });

      // FORECAST VS DEAL LOST (FUNNEL CHART)
      var chartOptionsFunnel = {
         chart: {
            type: 'funnel'
         },
         title: {
            text: ''
         },
         plotOptions: {
            series: {
               dataLabels: {
                  enabled: true,
                  // format: '<b>{point.name}</b> : ({point.y:,.0f}) ',
                  formatter: function () {
                     // Customize the label using HTML and inline CSS
                     return '<span style="width:80px"><span style="font-size: 10px; font-weight: 300;width:10px">' + this.point.name + '</span> <br> <span style="font-size: 10px;">(' + this.y + ')</span></span>';
                  },
                  softConnector: true,
                  distance: 15,
               },
               center: ['45%', '50%'],
               neckWidth: '35px',
               neckHeight: '15%',
               width: '80%',
               height: '80%'
            }
         },
         legend: {
            enabled: false
         },
         series: [{
            name: 'Values',
            colorByPoint: true,
            colors: ['#92DC96', '#6FA2B9', '#4E6BB7', '#D55A43', '#EEB955'],
            data: [
               ['Need Analsis', 3],
               ['Value Propsition', 1],
               ['Identify Decision Makers', 2],
               ['Proposal / Price Quote', 1],
               ['Negotiation / Review', 1]
            ]
         }],

         responsive: {
            rules: [{
               chartOptions: {
                  plotOptions: {
                     series: {
                        dataLabels: {
                           inside: true
                        },
                        center: ['50%', '50%'],
                        width: '100%'
                     }
                  }
               }
            }]
         }
      };
      var chartFunnel = Highcharts.chart('funnelChart', chartOptionsFunnel);


      
   </script>
</body>

<?php include("includes-ui/page-end.php"); ?>