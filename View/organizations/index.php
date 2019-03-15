<?php
  require_once '../../dbconfig.php';
  include_once '../../libs/Medoo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="../../Controller/organizationsController.js"></script>

  
    

    <h1>ดีจ้า454564566545646556</h1>
    <h2>454654564654</h2>
    
    <div id='open_ender_output'></div>
    <button type="button" onclick="myFunction()">ส่งค่าตัวแปร</button>
    <div id='a'></div>

    

    <form method="post" name="postForm">
    <ul>
        <li>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Bruce Wayne">
            <span class="throw_error"></span>
            <span id="success"></span>
       </li>
      </ul>
      <input type="submit" value="Send" onclick="addOrganizations()"/>
    </form>

    <div id='testAjax'></div>


</body>
</html>
