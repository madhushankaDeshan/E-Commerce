

$("#btnAddItem").click(function () {

    $.ajax({
        method:"POST",
        url:"../../controller/save-item.php",
        data:$("#frmAddItem").serialize()
    }).done(function (response) {
        alert(response)

    });
});
