function getOrganizationType() {
    $('#OrganizationType').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/OrganizationType/GetOrganizationType.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}