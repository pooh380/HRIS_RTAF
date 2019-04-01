// getData
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
// getData

// insertData
function insertOrigins() {

    var originName = $("#originName").val();
    var originAbbrName = $("#originAbbrName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    // console.log(originName + " " + originAbbrName + " " + isActive);

    $.post("../../Model/Origins/InsertOrigins.php", {
        originName: originName,
        originAbbrName: originAbbrName,
        isActive: isActive
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Origins/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}
// insertData

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
    var originsId = getUrlVars()["id"];
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Origins/GetDataEdit.php",
        data: {
            originsId: originsId
        },
        success: function(data) {
            $("#id").val(data.id);
            $("#originName").val(data.originName);
            $("#originAbbrName").val(data.originAbbrName);
            $("#IsActive").val(data.IsActive);
            // console.log(data);
        },
        error: function(error) {
            alert(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateOrigins() {
    var originsId = $("#id").val();
    var originName = $("#originName").val();
    var originAbbrName = $("#originAbbrName").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(originsId + " " + originName + " " + originAbbrName + " " + isActive);

    $.post("../../Model/Origins/UpdateOrigins.php", {
        originsId: originsId,
        originName: originName,
        originAbbrName: originAbbrName,
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
        setTimeout("window.open('../Origins/index.php', '_self');", 2000);
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
function deleteOrigins(event) {
    // alert(event);
    var originsId = event;
    // console.log(originsId);
    $.post("../../Model/Origins/DeleteOrigins.php", {
        originsId: originsId
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Origins/index.php', '_self');", 2000);
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