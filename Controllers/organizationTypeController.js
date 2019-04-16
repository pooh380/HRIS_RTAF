function getOrganizationType() {
    $('#OrganizationType').DataTable({
        "ajax": {
            url: "../../Model/OrganizationType/GetOrganizationType.php", // json datasource
            dataType: "json",
            type: "post",
            "start": 0,
            "length": 3,
            "serverSide": true,
            "processing": true,
            "paging": true,
            "searching": { "regex": true },
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "pageLength": 10,
            order: [
                [0, "desc"]
            ]
        }
    });
}

// insertData
function insertOrgType() {

    var orgCategoryName = $('#orgCategoryName :selected').val();
    var orgTypeName = $("#orgTypeName").val();
    var startDate = $("#startDate").val();
    var endDate = $("#endDate").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    var checkBox = document.getElementById("airForce");
    if (checkBox.checked == "") {
        var airForce = "0";
    } else {
        var airForce = "1";
    }

    var checkBox = document.getElementById("multiplesDay");
    if (checkBox.checked == "") {
        var multiplesDay = "0";
    } else {
        var multiplesDay = "1";
    }
    var checkBox = document.getElementById("currentOrg");
    if (checkBox.checked == "") {
        var currentOrg = "0";
    } else {
        var currentOrg = "1";
    }

    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationType/InsertOrganizationType.php",
        data: {
            orgCategoryName: orgCategoryName,
            orgTypeName: orgTypeName,
            startDate: startDate,
            endDate: endDate,
            isActive: isActive,
            airForce: airForce,
            multiplesDay: multiplesDay,
            currentOrg: currentOrg

        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../organization_types/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถเพิ่มข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
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
    var orgTypeId = getUrlVars()["id"];
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/OrganizationType/GetDataEdit.php",
        data: {
            orgTypeId: orgTypeId
        },
        success: function(data) {
            $("#orgTypeId").val(data.OrgTypeId);
            $('#orgCategoryName').append('<option value="' + data.orgCategoryId + '" selected="selected">' + data.orgCategoryName + '</option>');
            $("#orgTypeName").val(data.orgTypeName);
            // $("#passTypeName").val(data.passTypeName);
            // $("#passTypeAbbrName").val(data.passTypeAbbrName);
            // console.log(data.IsActive);
            if (data.IsActive == 0) {
                // $("#isActive").removeAttr('checked');
                $("#isActive").bootstrapToggle('off');
            } else {
                // $('#isActive').prop("checked", true);
                $("#isActive").bootstrapToggle('on');
            }

            // console.log(data);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateOrgType() {
    var orgTypeId = $("#orgTypeId").val();
    var orgCategoryName = $('#orgCategoryName :selected').val();
    var orgTypeName = $("#orgTypeName").val();
    var startDate = $("#startDate").val();
    var endDate = $("#endDate").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    var checkBox = document.getElementById("airForce");
    if (checkBox.checked == "") {
        var airForce = "0";
    } else {
        var airForce = "1";
    }

    var checkBox = document.getElementById("multiplesDay");
    if (checkBox.checked == "") {
        var multiplesDay = "0";
    } else {
        var multiplesDay = "1";
    }
    var checkBox = document.getElementById("currentOrg");
    if (checkBox.checked == "") {
        var currentOrg = "0";
    } else {
        var currentOrg = "1";
    }


    $.post("../../Model/OrganizationType/UpdateOrganizationType.php", {
        orgTypeId: orgTypeId,
        orgCategoryName: orgCategoryName,
        orgTypeName: orgTypeName,
        startDate: startDate,
        endDate: endDate,
        isActive: isActive,
        airForce: airForce,
        multiplesDay: multiplesDay,
        currentOrg: currentOrg
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'แก้ไขข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../organization_types/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถแก้ไขข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}

// delete
function deleteOrgType(id) {
    // alert(event);
    event.preventDefault();
    var orgTypeId = id;
    // console.log(PrefixsId);
    $.post("../../Model/OrganizationType/DeleteOrganizationType.php", {
        orgTypeId: orgTypeId
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Pass_Type/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}