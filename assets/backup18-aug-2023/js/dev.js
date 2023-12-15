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