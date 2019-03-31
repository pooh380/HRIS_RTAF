function getOrigins() {
    $('#Origins').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Origins/GetOrigins.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}