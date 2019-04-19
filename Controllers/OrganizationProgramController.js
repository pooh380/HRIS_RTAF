    function getOrg() {
        var orgTypeId = $('#orgTypeList :selected').val();
        var orgListId = $('#orgListList :selected').val();
        // var orgId = $('#orgList :selected').val();

        // alert("เอา OrganizationTypeId: " + orgTypeId + " ช่องโครงสร้างและ OrganizationListId: " + orgListId + "ช่องสังกัดไปหาโครงสร้างส่วนราชการว่ามีส่วนไหนบ้างที่มี OrganizationTypeId และ OrganizationListId ใน Table organization_struc");
        // alert(" SQL ในการนำไปค้นหาโครงสร้างส่วนราชการ: SELECT division_id,division.division_name, organization_struc.id , ORG_PATH , ORG_LEV_PK , ORG_LEVEL" +
        //     "FROM organization_struc JOIN  division ON organization_struc.division_id = division.id" +
        //     "where ORG_PATH LIKE N'0/OrganizationListId%' AND ORG_TYPE_PK = OrganizationTypeId;");

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

        // alert("นำค่า divisionId: " + divisionId + " OrganizationLevelId: " + orgLevelId + " OrganizationStucId: " + orgStucId + " นำไปค้นหาใน OrganizationList เพื่อที่จะนำไปโชว์ค่าขวา");
        // alert(" SQL ที่นำค่าไปค้นหา: SELECT * , organization_type.organization_type_name,organization_part.organization_part_name,organization_level.organization_level_name , organization_id , division.division_abbr_name" +
        //     " FROM  organization_list" +
        //     " JOIN  organization_type ON organization_list.organization_type_id = organization_type.id" +
        //     " JOIN  organization_part on organization_list.organization_part_id = organization_part.id" +
        //     " JOIN  organization_level on organization_list.organization_level_id = organization_level.id" +
        //     " JOIN  division on organization_list.organization_id = division.id" +
        //     " WHERE organization_list.division_id = divisionId AND organization_list.id = OrganizationStucId;");


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


        // alert("orgListName" + orgListName + "orgPartName" + orgPartName + "orgaLevelName" + orgaLevelName + "orgTypeList" + orgTypeList + "orgListId" + orgListId +
        //     "divisionID" + divisionID + "orgListAbbr" + orgListAbbr + "orgListAbbrLong" + orgListAbbrLong + "orgListAbbrLongAbbr" + orgListAbbrLongAbbr +
        //     "provincesName" + provincesName + "districtsName" + districtsName);

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