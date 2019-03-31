function getReligions() {
    $('#Religions').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Religions/GetReligions.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}