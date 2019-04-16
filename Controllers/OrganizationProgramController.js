    function getOrg() {
        var orgTypeId = $('#orgTypeList :selected').val();
        var orgListId = $('#orgListList :selected').val();
        // var orgId = $('#orgList :selected').val();

        // alert("orgListId: " + orgTypeId + " " + "orgListId: " + orgListId);

        $.post("../OrganizationProgram/detail.php", {
            orgTypeId: orgTypeId,
            orgListId: orgListId
                // orgId: orgId,

        }).done(function(data) {
            // console.log(data);
            window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgListId=" + orgListId;
            // window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgId=" + orgId;

        }).fail(function(err) {
            // console.log(error);
        });

        // var url = "./detail.php?orgTypeId=" + orgTypeIdEn;
        // console.log(url);
        // $(location).attr('href', url);


        // alert(orgTypeId + " " + orgListId);
    }

    function showDetail(divisionId, orgLevelId, orgStucId) {
        var orgTypeId = $("#orgTypeId").val();
        var orgListId = $("#orgListId").val();

        // alert("orgTypeId" + " " + orgTypeId);
        // alert("orgListId" + " " + orgListId);
        // alert("divisionId" + " " + divisionId);
        // alert("orgLevelId" + " " + orgLevelId);
        // alert("orgStucId" + " " + orgStucId);

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "../../Model/OrganizationProgram/getTemplateValue.php",
            data: {
                orgLevelId: orgLevelId,
                orgTypeId: orgTypeId,
                orgListId: orgListId,
                divisionId: divisionId,
                orgStucId: orgStucId
            },
            success: function(data) {
                $("#code").val(data.id);
                $("#orglistCode").val(data.orglistCode);
                $("#divisionID").val(data.divisionID);
                $("#orgListAbbr").val(data.orgListAbbr);
                $("#orgListLong").val(data.orgListLong);
                $("#orgListAbbrLong").val(data.orgListAbbrLong);
                $("#orgListAbbrLongAbbr").val(data.orgListAbbrLongAbbr);
                $("#startDate").val(data.startDate);
                $('#orgTypeList').append('<option value="' + data.orgType + '" selected="selected">' + data.orgType + '</option>');
                $('#orgListName').append('<option value="' + data.orgListName + '" selected="selected">' + data.orgListName + '</option>');
                $('#orgPartName').append('<option value="' + data.orgPartName + '" selected="selected">' + data.orgPartName + '</option>');
                $('#orgaLevelName').append('<option value="' + data.orgaLevelName + '" selected="selected">' + data.orgaLevelName + '</option>');
                $('#divisionAbbrName').append('<option value="' + data.divisionAbbrName + '" selected="selected">' + data.divisionAbbrName + '</option>');

                // console.log(data);
            },
            error: function(error) {
                // alert(error);
                console.log(error);
            }
        });
    }

    function insertProgram() {


        var orgListName = $('#orgListName :selected').val(); //ชื่อหน่วย
        var orgPartName = $('#orgPartName :selected').val(); //ชื่อหน่วยส่วนบัญชาการ
        var orgaLevelName = $('#orgaLevelName :selected').val(); //ฐานะหน่วยสังกัด
        var orgTypeList = $("#orgTypeList :selected").val(); //โครงสร้าง
        var orgListId = $("#orgListId").val();
        var divisionID = $("#divisionID").val(); //ลำดับสังกัด/หน่วยใน Tree
        var orgListAbbr = $("#orgListAbbr").val();
        var orgListAbbrLong = $("#orgListAbbrLong").val(); //ชื่อย่อหน่วย/สังกัด
        var orgListAbbrLongAbbr = $("#orgListAbbrLongAbbr").val(); //ชื่อกึ่งย่อหน่วย/สังกัด
        var provincesName = $("#provincesName").val();
        var districtsName = $("#districtsName").val();


        alert("orgListName" + orgListName + "orgPartName" + orgPartName + "orgaLevelName" + orgaLevelName + "orgTypeList" + orgTypeList + "orgListId" + orgListId +
            "divisionID" + divisionID + "orgListAbbr" + orgListAbbr + "orgListAbbrLong" + orgListAbbrLong + "orgListAbbrLongAbbr" + orgListAbbrLongAbbr +
            "provincesName" + provincesName + "districtsName" + districtsName);

        // $.ajax({
        //     type: "POST",
        //     url: "../../Model/OrganizationProgram/programCreate.php",
        //     data: {
        //         orgTypeId: orgTypeId,
        //         //   orgListId: orgListId
        //         orgListId : orgListId,
        //         orgTypeList :orgTypeList,
        //         divisionID : divisionID,
        //         orgPartName : orgPartName,
        //         orgaLevelName : orgaLevelName,
        //         orgListName : orgListName,
        //         orgListAbbr : orgListAbbr,
        //         orgListAbbrLong : orgListAbbrLong,
        //         orgListAbbrLongAbbr : orgListAbbrLongAbbr,
        //         provincesName : provincesName,
        //         districtsName : districtsName,

        //     },
        //     success: function(data) {
        //         // console.log(data);
        //         $('#list-group-tags').append(data);
        //         var orgListId = $('#orgListList :selected').val();
        //         $("#orgListId").val(orgListId);
        //     },
        //     error: function(error) {
        //         // console.log(error);
        //     }
        // });

    }

    function create() {
        var orgTypeId = $("#orgTypeId").val();
        var orgListId = $("#orgListId").val();

        // alert("orgTypeId"+orgTypeId+"orgListId"+orgListId);
        // alert("create");

        $.post("../OrganizationProgram/create.php", {
            orgTypeId: orgTypeId,
            orgListId: orgListId
                // orgId: orgId,

        }).done(function(data) {
            // console.log(data);
            window.location.href = "./create.php?orgTypeId=" + orgTypeId + "&orgListId=" + orgListId;
            // window.location.href = "./detail.php?orgTypeId=" + orgTypeId + "&orgId=" + orgId;

        }).fail(function(err) {
            // console.log(error);
        });
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