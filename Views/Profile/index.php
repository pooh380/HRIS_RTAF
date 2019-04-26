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
                                                  <li class="breadcrumb-item"><a
                                                          href="../home/index.php">งานประวัติรับราชการ</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">ข้อมูลตำแหน่ง
                                                  </li>


                                              </ol>
                                          </nav>
                                          <div id="how-to" class="card">
                                              <!-- card -->
                                              <div class="card-header"
                                                  style="background-color:#0f1733;padding:1.0rem 1.0rem">
                                                  <h6 class="card-title">
                                                      <font color="White">พล.อ.เลย์รสสาหร่าย สองถุง หมายเลขประจำตัว
                                                          332124562455
                                                  </h6>
                                                  </font>
                                                  <a class="heading-elements-toggle"><i
                                                          class="la la-ellipsis-v font-medium-3"></i></a>
                                                  <div class="heading-elements">
                                                      <ul class="list-inline mb-0">
                                                          <li><a data-action="collapse"><i class="ft-minus"></i></a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div> <!-- card -->





                                          <div>

                                              <div class="profile"
                                                  style="background-color:#f4f5fa; color:whitesmoke;padding:1%; height: 180px;width: 100%;">

                                                  <div class="image"
                                                      style="background-color:#BEBEBE;height: 160px;width: 12%;">

                                                      <div class="profile_data"
                                                          style="height: 160px;width: 450px;margin-left:150px;padding:1%;">
                                                          <p class="text">
                                                              <h6>หมายเลขประจำตัว : 12345678888</h6>
                                                              <h6>ยศ : ร.อ.</h6>
                                                              <h6>เหล่า : สบ.</h6>
                                                              <h6>สังกัด : กบ.ทอ.</h6>
                                                              <h6>ตำแหน่ง : ปฏิบัติการเครื่องจักรคำนวณ แผนกวิเคราะห์
                                                              </h6>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <!--/ profile -->
                                              <div class="profile_head"
                                                  style="background-color:#FFE4C4;height: auto;width: 100%;margin-left:0px;padding:1%;">
                                                  <h3>ประวัติข้าราชการ</h3>

                                                  <br>
                                                  <div class="card-body">

                                                      <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                                          <li class="nav-item">
                                                              <a class="nav-link active" id="base-tab11"
                                                                  data-toggle="tab" aria-controls="tab11" href="#tab11"
                                                                  aria-expanded="true">ข้อมูลบุคคล</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                                  aria-controls="tab12" href="#tab12"
                                                                  aria-expanded="false">รูปภาพ</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab13" data-toggle="tab"
                                                                  aria-controls="tab13" href="#tab13"
                                                                  aria-expanded="false">การเปลี่ยนชื่อ</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                                  aria-controls="tab12" href="#tab12"
                                                                  aria-expanded="false">ขึ้นทะเบียนอาหาร/ลักษณะร่างกาย</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                                  aria-controls="tab12" href="#tab12"
                                                                  aria-expanded="false">เหล่าทหาร</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                                  aria-controls="tab12" href="#tab12"
                                                                  aria-expanded="false">บิดามารดา,บรรพบุรุษ</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                                  aria-controls="tab12" href="#tab12"
                                                                  aria-expanded="false">คู่สมรส</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                                  aria-controls="tab12" href="#tab12"
                                                                  aria-expanded="false">บุตร-ธิดา</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link disabled">Disabled</a>
                                                          </li>
                                                      </ul>



                                                      <div class="card-content">
                                                          <div class="card-body">


                                                              <div class="tab-content px-1 pt-1">
                                                                  <div role="tabpanel" class="tab-pane active"
                                                                      id="tab11" aria-expanded="true"
                                                                      aria-labelledby="base-tab11">

                                                                      <div
                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                          <div id="headingCollapse31"
                                                                              class="card-header bg-success">
                                                                              <a data-toggle="collapse"
                                                                                  href="#collapse31"
                                                                                  aria-expanded="true"
                                                                                  aria-controls="collapse31"
                                                                                  class="card-title lead white">
                                                                                  <h6>ส่วนที่1
                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)</h6>
                                                                              </a>
                                                                          </div>
                                                                          <div id="collapse31" role="tabpanel"
                                                                              aria-labelledby="headingCollapse31"
                                                                              class="card-collapse collapse show"
                                                                              aria-expanded="true">
                                                                              <div class="card-content">
                                                                                  <div class="card-body">
                                                                                  <div class="row match-height">
                                                                                      <div class="col-lg-6 col-md-12">
                                                                                          <div class="card">
                                                                                              <div class="card-header">
                                                                                                  <label
                                                                                                      class="card-title"
                                                                                                      for="DefaultSelect">ประเพศกำลังพล</label>
                                                                                              </div>
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <fieldset
                                                                                                          class="form-group position-relative">
                                                                                                          <select
                                                                                                              class="form-control"
                                                                                                              id="DefaultSelect">
                                                                                                              <option
                                                                                                                  selected>
                                                                                                                  Default
                                                                                                                  select
                                                                                                                  options
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="1">
                                                                                                                  One
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="2">
                                                                                                                  Two
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="3">
                                                                                                                  Three
                                                                                                              </option>
                                                                                                          </select>
                                                                                                      </fieldset>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>

                                                                                      <div class="col-lg-6 col-md-12">
                                                                                          <div class="card">
                                                                                              <div class="card-header">
                                                                                                  <label
                                                                                                      class="card-title"
                                                                                                      for="DefaultSelect">ประเพศกำลังพล</label>
                                                                                              </div>
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      <fieldset
                                                                                                          class="form-group position-relative">
                                                                                                          <select
                                                                                                              class="form-control"
                                                                                                              id="DefaultSelect">
                                                                                                              <option
                                                                                                                  selected>
                                                                                                                  Default
                                                                                                                  select
                                                                                                                  options
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="1">
                                                                                                                  One
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="2">
                                                                                                                  Two
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="3">
                                                                                                                  Three
                                                                                                              </option>
                                                                                                          </select>
                                                                                                      </fieldset>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      </div>
                                                                                      

                                                                                      
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                          <div id="headingCollapse32"
                                                                              class="card-header bg-danger ">
                                                                              <a data-toggle="collapse"
                                                                                  href="#collapse32"
                                                                                  aria-expanded="false"
                                                                                  aria-controls="collapse32"
                                                                                  class="card-title lead white collapsed">
                                                                                  <h6>ส่วนที่2
                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)</h6>
                                                                              </a>
                                                                          </div>
                                                                          <div id="collapse32" role="tabpanel"
                                                                              aria-labelledby="headingCollapse32"
                                                                              class="card-collapse collapse show"
                                                                              aria-expanded="false">
                                                                              <div class="card-content">
                                                                                  <div class="card-body">
                                                                                      Sugar plum bear claw oat cake
                                                                                      chocolate jelly tiramisu dessert
                                                                                      pie. Tiramisu macaroon
                                                                                      muffin jelly marshmallow cake.
                                                                                      Pastry oat cake chupa chups.
                                                                                      Caramels marshmallow carrot cake
                                                                                      topping donut sesame snaps
                                                                                      toffee tootsie roll. Lollipop
                                                                                      sweet jelly beans oat cake biscuit
                                                                                      pastry chocolate cake. Cupcake
                                                                                      chocolate biscuit lemon drops
                                                                                      cotton candy mชarshmallow oat cake
                                                                                      donut. Croissant chocolate
                                                                                      cake oat cake brownie topping
                                                                                      carrot cake jelly beans. Dessert
                                                                                      gingerbread marshmallow pudding
                                                                                      donut lemon drops cake. Cake
                                                                                      topping gummi bears cake.
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                          <div id="headingCollapse33"
                                                                              class="card-header bg-info">
                                                                              <a data-toggle="collapse"
                                                                                  href="#collapse33"
                                                                                  aria-expanded="false"
                                                                                  aria-controls="collapse33"
                                                                                  class="card-title lead white collapsed">
                                                                                  <h6>ส่วนที่3
                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)</h6>
                                                                              </a>
                                                                          </div>
                                                                          <div id="collapse33" role="tabpanel"
                                                                              aria-labelledby="headingCollapse33"
                                                                              class="card-collapse collapse show"
                                                                              aria-expanded="false">
                                                                              <div class="card-content">
                                                                                  <div class="card-body">
                                                                                      Candy cupcake sugar plum oat cake
                                                                                      wafer marzipan jujubes lollipop
                                                                                      macaroon. Cake
                                                                                      dragée jujubes donut chocolate bar
                                                                                      chocolate cake cupcake chocolate
                                                                                      topping. Dessert jelly beans
                                                                                      toffee muffin tiramisu sesame
                                                                                      snaps brownie. Cake halvah pastry
                                                                                      soufflé oat cake candy candy
                                                                                      canes. Lemon drops gummies
                                                                                      gingerbread toffee. Tart jelly
                                                                                      candy
                                                                                      pastry. Pastry cake jelly beans
                                                                                      carrot cake marzipan lollipop
                                                                                      muffin. Soufflé jujubes cupcake.
                                                                                      Powder danish candy carrot
                                                                                      cake pastry. Tart marshmallow
                                                                                      caramels cake macaroon gummies
                                                                                      lollipop.
                                                                                  </div>
                                                                              </div>
                                                                          </div>

                                                                      </div>
                                                                  </div>
                                                                  <div class="tab-pane active" id="tab12"
                                                                      aria-labelledby="base-tab12">
                                                                      <p>Sugar plum tootsie roll biscuit caramels.
                                                                          Liquorice brownie
                                                                          pastry cotton candy oat cake fruitcake jelly
                                                                          chupa chups.
                                                                          Pudding caramels pastry powder cake soufflé
                                                                          wafer caramels.
                                                                          Jelly-o pie cupcake.</p>
                                                                  </div>
                                                                  <div class="tab-pane" id="tab13"
                                                                      aria-labelledby="base-tab13">
                                                                      <p>Biscuit ice cream halvah candy canes bear claw
                                                                          ice cream
                                                                          cake chocolate bar donut. Toffee cotton candy
                                                                          liquorice.
                                                                          Oat cake lemon drops gingerbread dessert
                                                                          caramels. Sweet
                                                                          dessert jujubes powder sweet sesame snaps.</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>







                                                      <br>

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