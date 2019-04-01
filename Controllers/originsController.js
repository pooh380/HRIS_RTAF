function getOrigins() {
    $('#Origins').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Origins/GetOrigins.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}

function InsertNations() {
    var originsName = $("#originsName").val();
    var originsAbbrName = $("#originsAbbrName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(originsName + " " + originsAbbrName + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Origins/InsertOrigins.php", {
        originsName: originsName,
        originsAbbrName: originsAbbrName,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });
}