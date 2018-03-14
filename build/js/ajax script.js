

$("#btnAddSubCustomer").click(function () {

    $.ajax({
        method:"POST",
        url:"../../controller/save-subAdmin.php",
        data:$("#frmAddSubAdmin").serialize()
    }).done(function (response) {
        alert(response)

    });
});
