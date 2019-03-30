function getOrganizationParts() {
    $('#OrganizationParts').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/OrganizationParts/GetOrganizationParts.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}
function addOrganizationList(){}
function editOrganizationList(){}
function deletOrganizationList(){}

// ยังมีในส่วนที่เกี่ยวข้องกับหน้า organizationList ในหน้าอื่นๆ อ้างอื่นจากไฟล์ organizationList

