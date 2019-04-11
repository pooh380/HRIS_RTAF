function getOrg() {
    var orgTypeId = $('#orgTypeList :selected').val();
    var orgListId = $('#orgListList :selected').val();



    $.post("../OrganizationProgram/detail.php", {
        orgTypeId: orgTypeId,
        orgListId: orgListId

    }).done(function(data) {
        // console.log(data);
        window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgListId=" + orgListId;

    }).fail(function(err) {
        // console.log(error);
    });

    // var url = "./detail.php?orgTypeId=" + orgTypeIdEn;
    // console.log(url);
    // $(location).attr('href', url);


    // alert(orgTypeId + " " + orgListId);
}

function getDataFromUrl() {
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };

    var tech = getUrlParameter('orgTypeId');
    var blog = getUrlParameter('orgListId');
    alert(tech + blog);
}

function insertOrganizationCategory() {
    var OrganizationcategoryFN = $("#OrganizationcategoryFN").val();
    var OrganizationcategoryIN = $("#OrganizationcategoryIN").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }

    console.log(OrganizationcategoryFN + " " + OrganizationcategoryIN + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/organizationProgram/detail.php", {
        OrganizationcategoryFN: OrganizationcategoryFN,
        OrganizationcategoryIN: OrganizationcategoryIN,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });
}

function insertOrganizationParts() {

    var organizationPartName = $("#organizationPartName").val();
    var organizationPartAbbrName = $("#organizationPartAbbrName").val();

    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var isActive = "0";
    }


    console.log(organizationPartName + " " + organizationPartAbbrName + " " + isActive);
    // e.preventDefault();
    $.ajax({
        type: "POST",
        url: "../../Model/OrganizationParts/InsertOrganizationParts.php",
        data: {
            organizationPartName: organizationPartName,
            organizationPartAbbrName: organizationPartAbbrName,
            isActive: isActive
        },
        success: function(data) {
            console.log(data);
            Swal.fire({
                type: 'success',
                title: 'เพิ่มข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../organizationProgram/detail.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถเพิ่มข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });

}