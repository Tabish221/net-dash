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
               <div class="row">
                  <div class="col-md-8">
                     <div class="card">
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="card">
                        <div class="card-header">
                           <h6>
                              list of companies
                              <span class="material-symbols-outlined dataload">autorenew</span>
                           </h6>

                           <span class="more">
                              <span class="material-symbols-outlined morebtn" role="button" data-bs-toggle="dropdown"
                                 data-bs-display="static" aria-expanded="false">more_vert</span>
                              <ul class="dropdown-menu dropdown-menu-end">
                                 <li role="button" class="edit"><span class="material-symbols-outlined">edit</span>Edit
                                 </li>
                                 <li role="button" class="mt-1 delete"><span
                                       class="material-symbols-outlined">delete</span>Delete</li>
                              </ul>
                           </span>
                        </div>

                        <div class="card-body">
                           <ul class="accordion">
                              <li class="first active">
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: block;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </li>

                              <li>
                                 <div class="acc_title">
                                    <div class="company">
                                       <div class="company-icon">
                                          <span class="material-symbols-outlined">leaderboard</span>
                                       </div>

                                       <div class="company-name">
                                          <p>Company Name</p>
                                       </div>
                                    </div>

                                    <div class="company-right">
                                       <div class="company-amount">
                                          <h6><span class="material-symbols-outlined">trending_up</span> $10,000</h6>
                                       </div>

                                       <div class="company-btn">
                                          <span class="material-symbols-outlined">filter_list</span>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="acc_desc" style="display: none;">
                                    <ul>
                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>

                                       <li>
                                          <div class="marchant">
                                             <div class="marchant-icon">
                                                <img src="assets/images/marchant.png" alt="Marchant">
                                             </div>
                                             <div class="marchant-name">
                                                Marchant Name
                                             </div>
                                          </div>

                                          <div class="marchant-amount">
                                             <span>$200,000</span>
                                          </div>
                                       </li>
                                    </ul>
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
   </div>


   <?php include("includes-ui/scripts.php"); ?>

   <script>
      // Accordion
      $('.acc_title').on('click', function () {
         if (!$(this).next('.acc_desc').is(':visible')) {
            $(this).parent('li').addClass('active')
            $(this).next('.acc_desc').slideDown();
         } else {
            $(this).parent('li').removeClass('active');
            $(this).next('.acc_desc').slideUp();
         }
      });

      var offSet = $('.accordion').offset().top;

      console.log(offSet)

      var heightOS = offSet + 26 + 16;

      $('.accordion').css('max-height', `calc(100vh - ${heightOS}px)`)
   </script>
</body>

<?php include("includes-ui/page-end.php"); ?>