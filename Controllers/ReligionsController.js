function getReligions() {
    $('#Religions').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Religions/GetReligions.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}

function insertReligions() {

    var religionsName = $("#religionsName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var b = "0";
    }

    console.log(religionsName + " " + religionsAbbrName + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Religions/InsertReligions.php", {
        religionsName: religionsName,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });
}