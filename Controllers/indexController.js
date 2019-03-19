function login() {
    $('#loginAjax').submit(function() {
        event.preventDefault()
        var username = $("#username").val();
        var password = $("#password").val();
        console.log(username + " " + password);
        location.replace("./Views/home/index.php");


        // $.ajax({
        //     type: "POST",
        //     url: '/class/login.php',
        //     data: {
        //         username: $("#username").val(),
        //         password: $("#password").val()
        //     },
        //     success: function(data) {
        //         if (data === 'Login') {
        //             window.location.replace('/user-page.php');
        //         } else {
        //             alert('Invalid Credentials');
        //         }
        //     }
        // });
    })
}