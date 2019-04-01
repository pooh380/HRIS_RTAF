function getOrigins() {
    $('#Origins').DataTable({
        "processing": true,
        "serverSide": true,
        "Paginate": true,
        "LengthChange": false,
        "Filter": false,
        "Info": false,
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

function insertOrigins() {

    var originName = $("#originName").val();
    var originAbbrName = $("#originAbbrName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(originName + " " + originAbbrName + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Origins/InsertOrigins.php", {
        originName: originName,
        originAbbrName: originAbbrName,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });
}


function UpdateOrigins() {

}