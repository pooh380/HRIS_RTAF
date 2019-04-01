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

<<<<<<< HEAD
function insertOrigins() {

    var originName = $("#originName").val();
    var originAbbrName = $("#originAbbrName").val();

=======
function InsertNations() {
    var originsName = $("#originsName").val();
    var originsAbbrName = $("#originsAbbrName").val();
>>>>>>> 5dab3bacaff59b0ebecd6d47cef025ecae05d121
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

<<<<<<< HEAD
    console.log(originName + " " + originAbbrName + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Origins/InsertOrigins.php", {
        originName: originName,
        originAbbrName: originAbbrName,
=======
    console.log(originsName + " " + originsAbbrName + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Origins/InsertOrigins.php", {
        originsName: originsName,
        originsAbbrName: originsAbbrName,
>>>>>>> 5dab3bacaff59b0ebecd6d47cef025ecae05d121
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });
}