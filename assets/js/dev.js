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


 function saveContactComment(e) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) { //Enter keycode
        var txtAreaContactLog = $('#txtAreaContactLog').val();
        var contact_id = $('#contact_id').val();

        if (txtAreaContactLog == "") {
            alert('Please Enter Text in Comments Section');
        }
        else {
            console.log(contact_id);
            $.ajax({
                type: "POST",
                url: 'includes/softwareinclude/ajax.php',
                data: { type: 'contact-log-comment', contactlogcomment: txtAreaContactLog, contact_id: contact_id },
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    if (obj.status == 'success') {
                        location.reload();
                    }
                }
            });
        }
    }
}


function getDealsTable(dealClass,dealstatus){
    //console.log(dealstatus);
    $.ajax({
        type: "POST",
        url: 'includes/softwareinclude/ajax.php',
        data: { type: 'get-deals-list',dealstatus:dealstatus },
        success: function (data) {
            //console.log(data);
            var obj = jQuery.parseJSON(data);

            if (obj.status == 'success') {
                $('.dealbox-panel.'+dealClass).html(obj.dealList)
            }
            $('h5.'+dealClass+ ' > p').text(obj.totalDeals + ' Deals');
            $('h5.'+dealClass+ ' > em').text('$'+ obj.dealAmountTotal);
        },
        error: function(data) { // if error occured
            // alert("Error occured.please try again");
            // $(placeholder).append(xhr.statusText + xhr.responseText);
            // $(placeholder).removeClass('loading');
            console.log(data);
            
        },
        complete: function() {
            //$(placeholder).removeClass('loading');
            //$('.loader').remove();
        }
    });
}
function camalize(str) {
    return str.toLowerCase().replace(/[^a-zA-Z0-9]+(.)/g, (m, chr) => chr.toUpperCase());
}
function titleCase(str) {
    var splitStr = str.toLowerCase().split(' ');
    for (var i = 0; i < splitStr.length; i++) {
        // You do not need to check if i is larger than splitStr length, as your for does that for you
        // Assign it back to the array
        splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
    }
    // Directly return the joined string
    return splitStr.join(' '); 
 }
function changeDealStatus(dealid,newStage,oldStage){

    
    var deal_id = dealid;
    var newStatus = newStage;
    var oldStatus = oldStage;
    if(newStatus == oldStatus){}else{
        newStatus_1 =titleCase(newStatus.replace('_',' '));
        newStatus_2 =camalize(newStatus)+'Table';

        oldStatus_1 =titleCase(oldStatus.replace('_',' '));
        oldStatus_2 =camalize(oldStatus)+'Table';

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
                            Sure want to change?
                        </h6>
                        <p class="fw-bold sweetText-300">
                            Are you sure you want to change status?
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
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: 'includes/softwareinclude/ajax.php',
                data: { type: 'change-deal-status', deal_id: deal_id, dealstage: newStatus },
                type: 'post',
                success: function (res) {
                    var obj = jQuery.parseJSON(res);
                    if (obj.status == 'success') {
                        getDealsTable(newStatus_2, newStatus_1);
                        getDealsTable(oldStatus_2, oldStatus_1);
                    }
                }
            });

        }else{

            //Swal.fire('Changes are not saved', '', 'info')
            getDealsTable(newStatus_2, newStatus_1);
            getDealsTable(oldStatus_2, oldStatus_1);
        }
        });
    }
    

}