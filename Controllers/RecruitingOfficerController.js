function update() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

}

function uploadImages() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

}

function search() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

}

function reqChange() {

    $('#').DataTable({
        ajax: {
            url: "", // json datasource
            dataType: "json",
            type: "post",
            start: 0,
            length: 3,
            serverSide: true,
            processing: true,
            paging: true,
            searching: { "regex": true },
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            pageLength: 10,
            order: [
                [0, "desc"]
            ]
        },
        destroy: true
    });

} //คำข้อต่างๆ ในส่วนของคนข้อ function getReqChange //ดึงคำข้อมาให้สัสดี 


function saveOnHistory() {

    $$.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

} //เก็บสัสดี 


function saveHistoryPerson() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

} //เก็บลงประวัติราชการ


function getHistoryPerson() {

    $('#').DataTable({
        ajax: {
            url: "", // json datasource
            dataType: "json",
            type: "post",
            start: 0,
            length: 3,
            serverSide: true,
            processing: true,
            paging: true,
            searching: { "regex": true },
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            pageLength: 10,
            order: [
                [0, "desc"]
            ]
        },
        destroy: true
    });

} // แก้ไขสิ่งต่างๆๆ ในส่วนของสัสดี 


//การขึ้นทะเบียนทหาร 
function searchPersonNotArmy() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

} //id ขึ้นเลข 8 นักเรียนทหาร มีชื่อ ยศเป็นนักเรีบน แยกกับข้าราชการ ไม่มียศ มี report word query มาจาก ประวัติ ชาย 


function saveArmy() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

} // 


function reportDocument() { //ใช้ function php แทนได้

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

} // คนที่ขึ้นทะเบียนแล้ว ตามคำของ 


function calculatorAgeOfArmy() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "",
        data: {},
        success: function(data) {
            console.log(data);
        },
        error: function(error) {
            console.log(error);
        }
    });

} //คำนวนวันที่เป็นชั้นกองหนุน