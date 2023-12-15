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

                <?php include("include-widget/box1.php"); ?>
                <?php include("include-widget/box2.php"); ?>
                <?php include("include-widget/box3.php"); ?>
                

                
            </div>
         </div>
      </div>
   </div>


   <?php include("includes-ui/scripts.php"); ?>


</body>

<?php include("includes-ui/page-end.php"); ?>