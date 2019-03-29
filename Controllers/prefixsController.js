function getPrefixs() {
    $('#prefixsTable').DataTable({
        "processing": true,
        "serverSide": true,
        "bPaginate": true,
        "pageLength": 10,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Prefixs/new.php", // json datasource
            dataType: "json",
            type: "post" // method  , by default get
                // error: function() { // error handling
                // $(".prefixsTable-grid-error").html("");
                // $("#prefixsTable-grid").append('<tbody class="prefixsTable-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                // $("#prefixsTable-grid_processing").css("display", "none");
                // alert("ERROR");

            // }
        }
    });
}