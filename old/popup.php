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
            <div class="mainBody">
                <?php include("includes-ui/header.php"); ?>
                <div class="bodyPanel">
                    <div class="row">
                        <div class="col-md-3">
                            <div class=" d-flex flex-column">
                                <h6 class="fs-2 mb-4 fw-bold">Alerts</h6>
                                <button class="btn btn-success mb-2 successSweetAlert">Successfully applied!</button>
                                <button class="btn btn-warning mb-2 warningSweetAlert">Project Successfully
                                    created</button>
                                <button class="btn btn-danger mb-2 dangerSweetAlert">Successfully applied!</button>
                                <button class="btn btn-primary mb-2 primarySweetAlert">Successfully applied!</button>
                                <button class="btn bg-white mb-2 whiteSweetAlert">Successfully applied!</button>
                                <button class="btn btn-light mb-2 lightSweetAlert">Successfully applied!</button>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class=" d-flex flex-column">
                                <h6 class="fs-2 mb-4 fw-bold">Popups</h6>

                                <button class="btn btn-success mb-2 successSweetPopup">Sure you want to accept?</button>

                                <button class="btn btn-success mb-2 successSweetPopupForm">Sure you want to accept?
                                    (with form)</button>

                                <button class="btn btn-primary mb-2 tremsSweetPopup">Terms and agreements</button>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class=" d-flex flex-column">
                                <h6 class="fs-2 mb-4 fw-bold">Modals</h6>

                                <button
                                    class="btn bg-white text-success btn-outline-success mb-2 innersuccessSweetModal">Sure
                                    you want to accept?</button>

                                <button
                                    class="btn bg-white text-success btn-outline-success mb-2 innersuccessSweetModal2">Sure
                                    you want to accept?</button>

                                <button
                                    class="btn bg-white text-primary btn-outline-primary mb-2 innerprimarySweetModal">Sure
                                    you want to accept?</button>

                                <button
                                    class="btn bg-white text-primary btn-outline-primary mb-2 innerprimarySweetModal2">Sure
                                    you want to accept?</button>

                                <button class="btn btn-success mb-2 successSweetModal">Successfully accepted!</button>

                                <button
                                    class="btn bg-white text-success btn-outline-success mb-2 innersuccessSweetModal3">Sure
                                    you want to accept?</button>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class=" d-flex flex-column">
                                <h6 class="fs-2 mb-4 fw-bold">Modals 2</h6>

                                <button
                                    class="btn bg-white text-primary btn-outline-primary mb-2 innerprimarySweetModal3">Are
                                    you ok?</button>

                                <button class="btn btn-warning mb-2 warningSweetModal">Successfully accepted!</button>

                                <button
                                    class="btn bg-white text-primary btn-outline-primary mb-2 innerprimarySweetModal4">Sure
                                    you want to accept?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes-ui/scripts.php"); ?>

    <?php include("includes-ui/cdn/sweet-alert.php"); ?>

    <script>
        // ALERT
        $('.successSweetAlert').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetIcon">
                            <span class="w-100 h-100 sweetBg-light d-flex align-items-center justify-content-center">
                                <i class="material-symbols-outlined sweetText-200">check_circle</i>
                            </span>
                        </div>
                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-2 fw-bold sweetText-100">Successfully applied!</h6>
                            <p class="pb-2 fw-bold sweetText-300">Malesuada tellus tincidunt fringilla enim, id mauris. Id etiam nibh suscipit aliquam dolor. Nunc sit nunc aliquet justo, facilisi leo. Nulla a eget tincidunt integer orci.</p>
                            <a href="#" class="sweetText-200 fw-bold">Learn More</a>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: 'mySweetBox sweetBg-light-success sweetbg sweetborder',
                animation: true,
                allowEscapeKey: true,
            });
        });
        $('.warningSweetAlert').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetBody">
                            <h6 class="pb-2 fw-bold sweetText-100">Successfully applied!</h6>
                            <p class="pb-2 fw-bold sweetText-300">Malesuada tellus tincidunt fringilla enim, id mauris. Id etiam nibh suscipit aliquam dolor. Nunc sit nunc aliquet justo, facilisi leo. Nulla a eget tincidunt integer orci.</p>
                            <a href="#" class="sweetText-200 fw-bold">Learn More</a>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: 'mySweetBox sweetBg-light-warning sweetbg sweetborder',
                animation: true,
                allowEscapeKey: true,
            });
        });
        $('.dangerSweetAlert').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetIcon">
                            <span class="w-100 h-100 sweetBg-light d-flex align-items-center justify-content-center">
                                <i class="material-symbols-outlined sweetText-danger">check_circle</i>
                            </span>
                        </div>
                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-2 fw-bold sweetText-100">Successfully applied!</h6>
                            <p class="pb-2 fw-bold sweetText-300">Malesuada tellus tincidunt fringilla enim, id mauris. Id etiam nibh suscipit aliquam dolor. Nunc sit nunc aliquet justo, facilisi leo. Nulla a eget tincidunt integer orci.</p>
                            <a href="#" class="sweetText-200 fw-bold">Learn More</a>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: 'mySweetBox sweetBg-light-danger sweetbg sweetborder',
                animation: true,
                allowEscapeKey: true,
            });
        });
        $('.primarySweetAlert').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetBody">
                            <h6 class="pb-2 fw-bold sweetText-100">Successfully applied!</h6>
                            <p class="pb-2 fw-bold sweetText-300">Malesuada tellus tincidunt fringilla enim, id mauris. Id etiam nibh suscipit aliquam dolor. Nunc sit nunc aliquet justo, facilisi leo. Nulla a eget tincidunt integer orci.</p>
                            <a href="#" class="sweetText-200 fw-bold">Learn More</a>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: 'mySweetBox sweetBg-light-primary sweetbg sweetborder',
                animation: true,
                allowEscapeKey: true,
            });
        });
        $('.whiteSweetAlert').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetIcon">
                            <span class="w-100 h-100 sweetBg-light d-flex align-items-center justify-content-center">
                                <i class="material-symbols-outlined sweetText-200">check_circle</i>
                            </span>
                        </div>
                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-2 fw-bold sweetText-100">Successfully applied!</h6>
                            <p class="pb-2 fw-bold sweetText-300">Malesuada tellus tincidunt fringilla enim, id mauris. Id etiam nibh suscipit aliquam dolor. Nunc sit nunc aliquet justo, facilisi leo. Nulla a eget tincidunt integer orci.</p>
                            <a href="#" class="sweetText-200 fw-bold">Learn More</a>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: 'mySweetBox sweetbg sweetborder',
                animation: true,
                allowEscapeKey: true,
            });
        });
        $('.lightSweetAlert').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetIcon">
                            <span class="w-100 h-100 sweetBg-light d-flex align-items-center justify-content-center">
                                <i class="material-symbols-outlined sweetText-200">check_circle</i>
                            </span>
                        </div>
                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-2 fw-bold sweetText-100">Successfully applied!</h6>
                            <p class="pb-2 fw-bold sweetText-300">Malesuada tellus tincidunt fringilla enim, id mauris. Id etiam nibh suscipit aliquam dolor. Nunc sit nunc aliquet justo, facilisi leo. Nulla a eget tincidunt integer orci.</p>
                            <a href="#" class="sweetText-200 fw-bold">Learn More</a>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                showConfirmButton: false,
                showCloseButton: true,
                customClass: 'mySweetBox sweetBg-dark sweetbg sweetborder',
                animation: true,
                allowEscapeKey: true,
            });
        });

        // POPUP
        $('.successSweetPopup').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-2 fw-bold sweetText-100">
                                Sure you want to accept?
                            </h6>

                            <p class="fw-bold sweetText-300">
                                Egestas arcu egestas parturient dui vitae. Ornare risus id ullamcorper in ut. Vestibulum neque ullamcorper non orci vel, consectetur mi, pulvinar. Eu lectus quis leo viverra lacus non fames est ut.
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetBg-light-success sweetBorder-success sweetbg sweetborder buttonRight',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#43A047',
                cancelButtonColor: '#FFF',
            });
        });
        $('.successSweetPopupForm').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">                        
                        <div class="sweetBody w-100">
                            <h6 class="pb-4 fw-bold sweetText-100">
                                Sure you want to accept?
                            </h6>

                            <form>
                                <label class="sweetText-200 fw-bold pb-2 ps-1">Write your name</label>
                                <input class="sweetText-100 w-100" style="height: 45px;" type="text" placeholder="Your Name"/>
                            </form>

                            <p class="fw-bold sweetText-200"></p>
                            
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetBg-light-success sweetBorder-success sweetbg sweetborder buttonRight',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#43A047',
            });
        });
        $('.tremsSweetPopup').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-2 fw-bold sweetText-100">
                                Terms and agreements
                            </h6>

                            <p class="pb-4 fw-bold sweetText-300">
                                Egestas arcu egestas parturient dui vitae. Ornare risus id ullamcorper in ut. Vestibulum neque ullamcorper non orci vel, consectetur mi, pulvinar. Eu lectus quis leo viverra lacus non fames est ut.
                            </p>
                            <p class="fw-bold sweetText-300">
                                Egestas arcu egestas parturient dui vitae. Ornare risus id ullamcorper in ut. Vestibulum neque ullamcorper non orci vel, consectetur mi, pulvinar. Eu lectus quis leo viverra lacus non fames est ut.
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetBg-light-primary sweetBorder-primary sweetbg sweetborder buttonRight',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#2196F3',
                cancelButtonColor: '#FFF',
            });
        });

        // Modals
        $('.innersuccessSweetModal').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard align-items-center">                        
                        <div class="sweetIcon">
                            <span class="w-100 h-100 sweetBg-light d-flex align-items-center justify-content-center">
                                <i class="material-symbols-outlined sweetText-success">check_circle</i>
                            </span>
                        </div>
                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-1 fw-bold sweetText-success">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300">
                                Are you sure you want to accept this?
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#43A047',
                cancelButtonColor: '#FFF',
                showCloseButton: true,
            });
        });
        $('.innersuccessSweetModal2').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard align-items-center">                        
                        <div class="sweetIcon">
                            <span class="w-100 h-100 sweetBg-light d-flex align-items-center justify-content-center">
                                <i class="material-symbols-outlined sweetText-success">check_circle</i>
                            </span>
                        </div>
                        
                        <div class="sweetBody ms-4">
                            <h6 class="pb-1 fw-bold sweetText-success">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300">
                                Are you sure you want to accept this?
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                confirmButtonColor: '#43A047',
                cancelButtonColor: '#FFF',
                showCloseButton: true,
            });
        });
        $('.innerprimarySweetModal').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard align-items-center">                         
                        <div class="sweetBody w-100 text-center">
                            <h6 class="pb-1 fw-bold sweetText-primary">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300">
                                Are you sure you want to accept this?
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#2196F3',
                cancelButtonColor: '#FFF',
                showCloseButton: true,
            });
        });
        $('.innerprimarySweetModal2').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">                         
                        <div class="sweetBody w-100">
                            <h6 class="pb-2 fw-bold sweetText-primary">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300 pb-3">
                                Are you sure you want to accept this?
                            </p>

                            <form>
                                <label class="d-inline-flex align-items-center fs-7 sweetText-100 fw-bold"> 
                                    <input type="checkbox" class="me-2" style="width:20px;height:20px;"> Don't Show this again
                                </label>
                            </form>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#2196F3',
                cancelButtonColor: '#FFF',
                closeOnConfirm: false,
                closeOnCancel: true,
                showCloseButton: true,
            });
        });
        $('.successSweetModal').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard align-items-center">    
                        <div class="sweetBody text-center">
                            <i class="material-symbols-outlined sweetText-success fs-1 mb-4 bg-white rounded-circle">
                                check_circle
                            </i>
                            
                            <h6 class="pb-2 fw-bold sweetText-success">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300">
                                Et leo, enim in non sed quis sed. Auctor natoque auctor risus amet quis mauris. Interdum et nisi, pellentesque id lectus. Ut bibendum pellentesque arcu luctus sapien.
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetBg-light-success sweetbg sweetborder buttonFull',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                confirmButtonText: 'Dashboard',
                cancelButtonText: 'Undo',
                confirmButtonColor: '#43A047',
                cancelButtonColor: '#FFF',
                showCloseButton: true,
                reverseButtons: true
            });
        });
        $('.innersuccessSweetModal3').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetBody w-100 text-center">
                            <div class="sweetImg pb-3">
                                <img src="assets/images/popup-img.png"/>
                            </div>

                            <h6 class="pb-1 fw-bold sweetText-success">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300">
                                Are you sure you want to accept this?
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'No, cancel',
                confirmButtonColor: '#43A047',
                cancelButtonColor: '#FFF',
                showCloseButton: true,
            });
        });

        // Modals 2
        $('.innerprimarySweetModal3').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard align-items-center">                         
                        <div class="sweetBody w-100 text-center">
                            <h6 class="pb-1 fw-bold sweetText-primary">
                                Are you ok?
                            </h6>
                            <p class="fw-bold sweetText-300">
                                Just checking in
                            </p>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, thanks!',
                confirmButtonColor: '#2196F3',
                showCloseButton: true,
            });
        });
        $('.innerprimarySweetModal4').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetBody w-100 text-center">
                            <div class="sweetImg pb-3">
                                <img src="assets/images/popup-img.png"/ style="width: 100%;height: 180px;object-fit: cover;">
                            </div>

                            <h6 class="pb-1 fw-bold sweetText-100">
                                Successfully applied!
                            </h6>
                            <p class="fw-bold sweetText-300 pb-3">
                                Are you sure you want to accept this?
                            </p>

                            <form>
                                <input class="sweetText-100 w-100" style="height: 45px;" type="text" placeholder="Your Name"/>
                            </form>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, thanks!',
                confirmButtonColor: '#2196F3',
                showCloseButton: true,
            });
        });
        $('.warningSweetModal').click(function () {
            Swal.fire({
                //  position: 'top-end',
                html: `
                    <div class="mySweetCard">
                        <div class="sweetBody w-100 text-center">
                            <h6 class="pb-1 fw-bold sweetText-warning">
                                Subscribe to our Newsletter
                            </h6>
                            <p class="fw-bold sweetText-300 pb-3">
                                Are you sure you want to accept this?
                            </p>

                            <form>
                                <input class="sweetText-100 w-100" style="height: 45px;" type="text" placeholder="Your Name"/>
                            </form>
                        </div>
                    </div>
                `,
                allowOutsideClick: true,
                customClass: 'mySweetBox sweetBg-light-warning sweetBorder-warning sweetbg sweetborder buttonFull buttonRow',
                animation: true,
                allowEscapeKey: true,
                showConfirmButton: true,
                confirmButtonText: 'Yes, thanks!',
                confirmButtonColor: '#FFA31C',
                showCloseButton: true,
            });
        });
    </script>
</body>
<?php include("includes-ui/page-end.php"); ?>