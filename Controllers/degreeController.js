// getData
function getOrigins() {
    $('#degree').DataTable({
        "processing": true,
        "serverSide": true,
        "Paginate": true,
        "LengthChange": false,
        "Filter": false,
        "Info": false,
        order: [
            [0, "desc"]
        ],
        "ajax": {
            url: "../../Model/Degrees/GetDegrees.php", // json datasource
            dataType: "json",
            type: "post"
        }
    });
}
// getData

function deleteDegrees(id) {
    // alert(event);
    event.preventDefault();
    var originsId = id;
    // console.log(originsId);

    $.ajax({
        type: "POST",
        url: "../../Model/Degrees/DeleteDegrees.php",
        data: {
            originsId: originsId
        },
        success: function(data) {
            // console.log(data);
            Swal.fire({
                type: 'success',
                title: 'ลบข้อมูลสำเร็จ',
                showConfirmButton: false,
                timer: 2000
            });
            setTimeout("window.open('../degrees/index.php', '_self');", 2000);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
            Swal.fire({
                type: 'error',
                title: 'ไม่สามารถลบข้อมูลได้',
                text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
            });
        }
    });

}
// delete