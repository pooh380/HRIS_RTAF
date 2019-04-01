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

// ใช้ ตอน update
// getUrlVars  เพื่อนำค่า id จาก url มาใช้ต่อ
function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
// getUrlVars  เพื่อนำค่า id จาก url มาใช้ต่อ

// getData จาก db เพื่อนำมาใช้มา input value
function getIdForEdit() {
    var nationID = getUrlVars()["id"];
    console.log(nationID);
    
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Nations/GetDataEdit.php",
        data: {
            nationID: nationID
        },
        success: function(data) {
            $("#id").val(data.id);
            $("#nationCode").val(data.nationCode);
            $("#nationName").val(data.nationName);
            $("#isActive").val(data.IsActive);
            console.log(data);
        },
        error: function(error) {
            alert(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateNation() {
    var id = $("#id").val();
    var nationName = $("#nationName").val();
    var nationCode = $("#nationCode").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(originsId + " " + originName + " " + originAbbrName + " " + isActive);

    $.post("../../Model/Nations/UpdateNations.php", {
        id: id,
        nationName: nationName,
        nationCode: nationCode,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Nations/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถแก้ไขข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}
// ใช้ ตอน update

// delete
function deleteNation(event) {
    // alert(event);
    var nationId = event;
    // console.log(nationId);
    $.post("../../Model/Nations/DeleteNation.php", {
        nationId: nationId
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Nations/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}
// delete