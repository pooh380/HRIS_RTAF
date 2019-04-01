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


function insertOrganizationcategory() {
    var OrganizationcategoryFN = $("#OrganizationcategoryFN").val();
    var OrganizationcategoryIN = $("#OrganizationcategoryIN").val();
    var checkBox = document.getElementById("isActive");
    if (checkBox.checked == true) {
        var isActive = "1";
    } else {
        var b = "0";
    }

    console.log(OrganizationcategoryFN + " " + OrganizationcategoryIN + " " + isActive);
    // e.preventDefault();

    $.post("../../Model/OrganizationCategory/InsertOrganizationCategory.php", {
        OrganizationcategoryFN: OrganizationcategoryFN,
        OrganizationcategoryIN: OrganizationcategoryIN,
        isActive: isActive
    }).done(function(data) {
        // window.location.replace("../page/listUser.php");
        console.log(data);
    }).fail(function(err) {
        console.log(err);
    });

    // $.ajax({
    //     type: 'POST',
    //     url: '../../Model/OrganizationParts/InsertOrganizationParts.php',
    //     data: {
    //         organizationPartName: organizationPartName,
    //         organizationPartAbbrName: organizationPartAbbrName,
    //         isActive: isActive
    //     },
    //     success: function(response) {
    //         alert(response);
    //     }
    // });

    // $.ajax({
    //     type: 'POST',
    //     url: '../../Model/OrganizationParts/InsertOrganizationParts.php',
    //     data: {
    //         organizationPartName: organizationPartName,
    //         organizationPartAbbrName: organizationPartAbbrName,
    //         isActive: isActive
    //     },
    //     success: function(data) {
    //         alert(data); //=== Show Success Message==
    //     },
    //     error: function(data) {
    //         alert("error occured" + data); //===Show Error Message====
    //     }
    // });

    // $("#signupForm2").validate({
    //     rules: {
    //         dst: "required"
    //     },
    //     messages: {
    //         dst: "Please enter your dst"
    //     },
    //     submitHandler: function(e) {
    //         e.preventDefault(); // Prevent Default Submission
    //         $.ajax({
    //             url: 'submit_comment.php',
    //             type: 'POST',
    //             data: $('#signupForm2').serialize() // it will serialize the form data
    //         })
    //         .done(function(data){
    //             $('#signupForm2').fadeOut('slow', function(){
    //                 $('#signupForm2').fadeIn('slow').html(data);
    //             });
    //         })
    //         .fail(function(){
    //             alert('Ajax Submit Failed ...');    
    //         });
    //     }
    // });

}