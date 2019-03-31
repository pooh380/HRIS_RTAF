function getProvinces() {
    $('#Provinces').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Provinces/GetProvinces.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}