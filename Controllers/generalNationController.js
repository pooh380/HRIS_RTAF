function getGeneralNation() {
    $('#GeneralNation').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Nations/GetNations.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}

function InsertNations() {
    var NationFN = $("#NationFN").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(NationFN + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/Nations/InsertNations.php", {
        NationFN: NationFN,
        isActive: isActive

    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });
}