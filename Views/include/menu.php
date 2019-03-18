<!doctype html>
<html lang="en">
  <head>
    <title>Menu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
    @import url(../../Asset/Css/thsarabunnew.css);

    /* Desktop Styles */
    @media (min-width: 1200px) {
<<<<<<< HEAD
        body{
            color: #fafafa;
            font-family: 'THSarabunNew', sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
        #nav{
=======
        #menu{
>>>>>>> 3b992d5441c43d2222ff593bfbd5561b22c9d3b7
            width: 25%;
            height: 1000px;
            background-color: #1a1d52;
            float:left;
        }
        .list-group-item{
            background-color: #1a1d52 ;
            color: #fafafa;
        }
        .list-group .list-group-item:hover {
            background-color: #404C69;
            color: #fafafa;
        }
            
        .list-group .list-group-item.active {
            color: #fafafa;
            background-color: #2F47A1;
            border-color: #2F47A1;
        }
        .pull-right {float:right;}
    }
    </style>

  </head>
  <body>

    <section>
        <nav id="nav" role="navigation" style="display:block;">
        <div class="list-group" >
            <a href="#" class="list-group-item list-group-item-action active" onclick="changeBtn1()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon1"></i> <i class="fas fa-chevron-down pull-right downIcon1"></i></a>
            <div id="menu1" style="margin-left: 20px;">
                <ul class="list-group">
                    <li class="list-group-item active">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn2()">ระบบงานทำเนียบกำลงพล  <i class="fas fa-chevron-right pull-right rightIcon2"></i> <i class="fas fa-chevron-down pull-right downIcon2"></i></a>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn3()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon3"></i> <i class="fas fa-chevron-down pull-right downIcon3"></i></a>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn4()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon4"></i> <i class="fas fa-chevron-down pull-right downIcon4"></i></a>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn5()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon5"></i> <i class="fas fa-chevron-down pull-right downIcon5"></i></a>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn6()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon6"></i> <i class="fas fa-chevron-down pull-right downIcon6"></i></a>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn7()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon7"></i> <i class="fas fa-chevron-down pull-right downIcon7"></i></a>
            </div>
            <div>
                <a href="#" class="list-group-item list-group-item-action" onclick="changeBtn8()">ระบบงานอัตรากำลงพล  <i class="fas fa-chevron-right pull-right rightIcon8"></i> <i class="fas fa-chevron-down pull-right downIcon8"></i></a>
            </div>
        </nav>
    </section>
    

    <script> 
    
        $( document ).ready(function() {
            console.log( "document loaded" );
        });

        function changeBtn1(){
            $(".rightIcon1").toggle();
            $(".downIcon1").toggle();
            $("#menu1").toggle();
        }
        function changeBtn2(){
            $(".rightIcon2").toggle();
            $(".downIcon2").toggle();
        }
        function changeBtn3(){
            $(".rightIcon3").toggle();
            $(".downIcon3").toggle();
        }
        function changeBtn4(){
            $(".rightIcon4").toggle();
            $(".downIcon4").toggle();
        }
        function changeBtn5(){
            $(".rightIcon5").toggle();
            $(".downIcon5").toggle();
        }
        function changeBtn6(){
            $(".rightIcon6").toggle();
            $(".downIcon6").toggle();
        }
        function changeBtn7(){
            $(".rightIcon7").toggle();
            $(".downIcon7").toggle();
        }
        function changeBtn8(){
            $(".rightIcon8").toggle();
            $(".downIcon8").toggle();
        }
    </script>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>