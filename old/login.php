<?php include("includes-ui/page-start.php"); ?>
   <head>
        <?php include("includes-ui/compatibility.php"); ?>
        <?php include("includes-ui/style.php"); ?>
        <meta name="description" content="">
        <title>DINO Deshboard | ...</title>
   </head>

   <body>
        <div class="login-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="logo">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-6 text-end">
                        <div class="loging-more">
                            <span class="material-symbols-outlined">more_horiz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="login-body">
                <div class="loginBox">
                    <div class="loginBox-icon">
                        <img src="assets/images/company-icon.png" alt="">
                    </div>
    
                    <div class="loginBox-companyName">
                        <h6>Sign in with Company ID</h6>
                    </div>
    
                    <div class="loginBox-form">
                        <form>
                            <div class="loginBox-fFeild">
                                <input type="text" placeholder="Company ID" id="username">
                                <button class="material-symbols-outlined">arrow_circle_right</button>
                            </div>
                            
                            <div class="loginBox-fFeild">
                                <input type="password" placeholder="Password" id="password">
                                <button class="material-symbols-outlined">arrow_circle_right</button>
                            </div>
    
                            <a href="#" class="loginBox-forgotPassword">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="#">System Status</a>
                        <span> | </span>
                        <a href="#">Privacy Policy</a>
                        <span> | </span>
                        <a href="#">Terms & Conditions</a>
                    </div>
        
                    <div class="col-md-6 text-end">
                        <p>Copyright © 2023 dino Inc. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php include("includes-ui/scripts.php"); ?>
   </body>
<?php include("includes-ui/page-end.php"); ?>
