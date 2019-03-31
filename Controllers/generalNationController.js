function getGeneralNation() {
    $('#GeneralNation').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Nations/GetNations.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}