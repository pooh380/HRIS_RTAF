  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <style>
/* ol > li > a {color:#222233;} */
.toggle.ios,
.toggle-on.ios,
.toggle-off.ios {
    border-radius: 20rem;
}

.toggle.ios .toggle-handle {
    border-radius: 20rem;
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">ข้อมูลประวัติราชการ</h3>
                      
                      <div class="search-container">
                          <form action="/action_page.php">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </div>
                  </div>

              </div>
              <div class="content-body">
                  <!-- Bootstrap 3 table -->
                  <section id="bootstrap3">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-content collapse show">
                                      <div class="card-body card-dashboard">

                                          <nav aria-label="breadcrumb">
                                              <ol class="breadcrumb">
                                                  <li class="breadcrumb-item">ข้อมูลตำแหน่ง</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">
                                                      ข้อมูลประวัติราชการ</li>
                                              </ol>
                                          </nav>

                                          <div class="profiletree"
                                              style="background-color:#0f1733; color:whitesmoke;padding:1%;width: 100%;">
                                              <div class="name">พล.อ.เลย์รสสาหร่าย สองถุง &nbsp; &nbsp; &nbsp;
                                                  หมายเลขประจำตัว&nbsp;&nbsp;332124562455

                                                  <ul class="list-inline mb-0" style="margin-left:1100px">
                                                      <li><a data-action="collapse"><i class="ft-minus"></i></a>
                                                      </li>
                                                  </ul>

                                              </div>
                                          </div>
                                          <div>

                                              <div class="profile"
                                                  style="background-color:#f4f5fa; color:whitesmoke;padding:1%; height: 180px;width: 100%;">

                                                  <div class="image"
                                                      style="background-color:#BEBEBE;height: 160px;width: 12%;">

                                                      <div class="profile_data"
                                                          style="height: 160px;width: 450px;margin-left:150px;padding:1%;">
                                                          <p class="text">
                                                              <h5>หมายเลขประจำตัว : 12345678888</h5>
                                                              <h5>ยศ : ร.อ.</h5>
                                                              <h5>เหล่า : สบ.</h5>
                                                              <h5>สังกัด : กบ.ทอ.</h5>
                                                              <h5>ตำแหน่ง : ปฏิบัติการเครื่องจักรคำนวณ แผนกวิเคราะห์
                                                              </h5>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/ profile -->
                                              <div class="profile_head"
                                                  style="height: auto;width: 100%;margin-left:0px;padding:1%;">
                                                  <h3>ประวัติข้าราชการ</h3>
                                              
                                                  <br>
                                                  <!-- <div class="card-header">
                <h4 class="card-title">How to use starter kit ?</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div> -->
                                                  <div class="w3-bar">
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          ข้อมูลบุคคล</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          รูปภาพ</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          การเปลี่ยนชื่อ</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          ขึ้นทะเบียนอาหาร/ลักษณะร่างกาย</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          เหล่าทหาร</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          บิดามารดา,บรรพบุรุษ</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          คู่สมรส</a>
                                                      <a href="#"
                                                          class="w3-bar-item w3-button w3-hover-none w3-border-white w3-bottombar w3-hover-border-blue w3-hover-text-blue">
                                                          บุตร-ธิดา</a>
                                                  </div>
                                                  <br>
                                                  <div id="how-to" class="card">
            <div class="card-header" style="background-color:#f4f5fa;color:whitesmoke;">
                <h4 class="card-title">พล.อ.เลย์รสสาหร่าย สองถุง     หมายเลขประจำตัว 332124562455</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        
                    </ul>
                </div>
            </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                  </section>
                  <!--/ Bootstrap 3 table -->
              </div>
          </div>
      </div>
  </section>

  <script src=" http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
  </script>

  <script type="text/javascript">
$(document).ready(function() {
    console.log("ready");
    change_autorefreshdiv();
});

function change_autorefreshdiv() {
    // $('#prefixPage').addClass('active');
}

function toggle(source) {
    var checkboxes = document.querySelectorAll('.checkAll');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
  </script>



  <!-- footer -->
  <?php include '../include/footer.php'; ?>