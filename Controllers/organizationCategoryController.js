function getOrganizationCategory() {
    $('#OrganizationCategory').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/OrganizationCategory/GetOrganizationCategory.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}