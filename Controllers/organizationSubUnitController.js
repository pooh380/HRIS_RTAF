function getOrganizationSubUnit() {
    $('#OrganizationLevels').DataTable({
        "ajax": {
            url: "../../Model/OrganizationSubUnit/GetOrganizationsSubUnit.php", // json datasource
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

function insertOrganizationSubUnit() {

    var OrgSubUnitName = $("#OrgSubUnitName").val();
    var OrgSubUnitAbbr = $("#OrgSubUnitAbbr").val();
    var OrgSubUnitSemiAbbr = $("#OrgSubUnitSemiAbbr").val();
    var isActive = $("#isActive").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    // console.log(OrgSubUnitName + " " + OrgSubUnitAbbr + " " + OrgSubUnitSemiAbbr + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/OrganizationSubUnit/InsertOrganizationSubUnit.php", {
        OrgSubUnitName: OrgSubUnitName,
        OrgSubUnitAbbr: OrgSubUnitAbbr,
        OrgSubUnitSemiAbbr: OrgSubUnitSemiAbbr,
        isActive: isActive
    }).done(function(data) {
        // console.log(data);
        Swal.fire({
            type: 'success',
            title: 'เพิ่มข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../OrganizationsSubUnit/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        })
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
    var OrgSubUnitId = getUrlVars()["id"];
    // console.log(orglevelId);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/OrganizationSubUnit/GetDataEdit.php",
        data: {
            OrgSubUnitId:OrgSubUnitId,
         
        },
        success: function(data) {
            $("#id").val(data.id);
            ("#OrgSubUnitName").val(data.OrgSubUnitName);
            ("#OrgSubUnitAbbr").val(data.OrgSubUnitAbbr);
            ("#OrgSubUnitSemiAbbr").val(data.OrgSubUnitSemiAbbr);
            ("#OrgSubUnitActive").val(data.OrgSubUnitActive);

            // console.log(data.IsActive);
            if (data.IsActive == 0) {
                // $("#isActive").removeAttr('checked');
                $("#isActive").bootstrapToggle('disable');
            } else {
                // $('#isActive').prop("checked", true);
                $("#isActive").bootstrapToggle('on');
            }

            // console.log(data);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
        }
    });
}
// getData จาก db เพื่อนำมาใช้มา input value

function UpdateOrganizationSubUnit() {
    var OrgSubUnitId = $("#id").val();
    var OrgSubUnitAbbr = $("#OrgSubUnitAbbr").val();
    var OrgSubUnitSemiAbbr = $("#OrgSubUnitSemiAbbr").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }
    console.log(OrgSubUnitId + " " + OrgSubUnitAbbr + " " + OrgSubUnitSemiAbbr + " " + isActive);

    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationsSubUnit/UpdateOrganizationSubUnit.php",
        data: {
            OrgSubUnitId: OrgSubUnitId,
            OrgSubUnitAbbr: OrgSubUnitAbbr,
            OrgSubUnitSemiAbbr: OrgSubUnitSemiAbbr,
            isActive: isActive
        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                type: 'success',
                title: 'แก้ไขข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../Organization_levels/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถแก้ไขข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });
}
// ใช้ ตอน update



function deleteOrganizationSubUnit(id) {
    var organizationLevlsId = id;
    event.preventDefault();

    // console.log("organizationPartsId: " + organizationLevlsId);

    $.post("../../Model/OrganizationsSubUnit/DeleteOrganizationSubUnit.php", {
        organizationLevlsId: organizationLevlsId
    }).done(function(data) {
        console.log(data);
        Swal.fire({
            type: 'success',
            title: 'ลบข้อมูลสำเร็จ',
            showConfirmButton: false,
            timer: 2000
        });
        setTimeout("window.open('../Organization_levels/index.php', '_self');", 2000);
    }).fail(function(err) {
        // console.log(err);
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถลบข้อมูลได้',
            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
        });
    });
}