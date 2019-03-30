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