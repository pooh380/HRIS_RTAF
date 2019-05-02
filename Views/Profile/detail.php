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
#background{
    position:absolute;
    z-index:0;
    background:white;
    display:block;
    min-height:50%; 
    min-width:50%;
    color:yellow;
}

#content{
    position:absolute;
    z-index:1;
}

#bg-text
{
    color:lightgrey;
    font-size:120px;
    transform:rotate(300deg);
    -webkit-transform:rotate(300deg);
}
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- select2 -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/selects/select2.min.css">
  <!-- select2 -->


  <!-- datetime-->
  <!-- <link rel="stylesheet" type="text/css" href="../../app-assets/css/vendors.css"> -->
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
  <!-- datetime-->


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
                                                  style="background-color:#f5f5f5;height: auto;width: 100%;margin-left:0px;padding:1%;">
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

                                                      </ul>


                                                  </div>



                                                  <div class="container">
                                                      

                                                      <div class="card-content">
                                                          <div class="card-body">


                                                              <div class="tab-content px-1 pt-1" >
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
                                                                                  <h6><U>ส่วนที่ 1</U>
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
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ประเภทกำลังพล :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>
                                                                                                          </optgroup>


                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                  </div>
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ยศ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 100%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>
                                                                                                          </optgroup>


                                                                                                      </select>

                                                                                                  </div>


                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เพศ :
                                                                                                      <div
                                                                                                          class="card-content">
                                                                                                          <div
                                                                                                              class="card-body">
                                                                                                              <div
                                                                                                                  class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                  <input
                                                                                                                      type="radio"
                                                                                                                      class="custom-control-input"
                                                                                                                      name="colorRadio"
                                                                                                                      id="radio1">
                                                                                                                  <label
                                                                                                                      class="custom-control-label"
                                                                                                                      for="radio1">เพศชาย</label>
                                                                                                              </div>
                                                                                                              <div
                                                                                                                  class="d-inline-block custom-control custom-radio mr-1">
                                                                                                                  <input
                                                                                                                      type="radio"
                                                                                                                      class="custom-control-input"
                                                                                                                      name="colorRadio"
                                                                                                                      id="radio2"
                                                                                                                      checked>
                                                                                                                  <label
                                                                                                                      class="custom-control-label"
                                                                                                                      for="radio2"
                                                                                                                      checked>เพศหญิง</label>
                                                                                                              </div>

                                                                                                          </div>
                                                                                                      </div>


                                                                                                  </div>


                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ชื่อ(ภาษาไทย) :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="เลย์ ">
                                                                                                  </div>
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ชื่อ(ภาษาอังกฤษ) :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="Lays  ">
                                                                                                  </div>
                                                                                              </div>


                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      หมายเลขประจำตัวราชการ
                                                                                                      :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="1111111111">
                                                                                                  </div>
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ยศก่อนสูญเสีย :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 100%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>

                                                                                                  </div>
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      คำนำหน้าชื่อ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 100%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>

                                                                                                  </div>
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      นามสกุล(ภาษาไทย) :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="เลย์รสสาหร่าย ">
                                                                                                  </div>
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      นามสกุล(อังกฤษ) :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="Nori Seaweed ">
                                                                                                  </div>
                                                                                              </div>

                                                                                          </div>





                                                                                      </div>



                                                                                  </div>
                                                                              </div>
                                                                          </div>






                                                                      </div>
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

                                                              <div class="tab-content px-1 pt-1">
                                                                  <div role="tabpanel" class="tab-pane active"
                                                                      id="tab11" aria-expanded="true"
                                                                      aria-labelledby="base-tab11">

                                                                      <div
                                                                          class="card collapse-icon accordion-icon-rotate active">
                                                                          <div id="headingCollapse32"
                                                                              class="card-header bg-success">
                                                                              <a data-toggle="collapse"
                                                                                  href="#collapse32"
                                                                                  aria-expanded="true"
                                                                                  aria-controls="collapse32"
                                                                                  class="card-title lead white">
                                                                                  <h6><U>ส่วนที่ 2</U>
                                                                                      ข้อมูลบุคคล(ประวัติข้าราชการ)</h6>
                                                                              </a>
                                                                          </div>
                                                                          <div class="col-md-12 col-sm-12">
                                                                              <div class="card-body ">
                                                                                  ประเภทแฟ้ม :
                                                                                  <div class="card-content">
                                                                                      <div class="card-body">
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio3">
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radio3">แผ่น</label>
                                                                                          </div>
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio4" checked>
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radio4"
                                                                                                  checked>เล่ม</label>
                                                                                          </div>
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio5" checked>
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radio5"
                                                                                                  checked>ชุดบรรจุกล่อง</label>
                                                                                          </div>
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio6" checked>
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radio6"
                                                                                                  checked>เล่ม(ปกสีฟ้า)</label>
                                                                                          </div>
                                                                                          <div
                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                              <input type="radio"
                                                                                                  class="custom-control-input"
                                                                                                  name="colorRadio"
                                                                                                  id="radio7" checked>
                                                                                              <label
                                                                                                  class="custom-control-label"
                                                                                                  for="radio7"
                                                                                                  checked>ไม่ระบุ</label>
                                                                                          </div>

                                                                                      </div>
                                                                                  </div>


                                                                              </div>

                                                                          </div>
                                                                          <div id="collapse31" role="tabpanel"
                                                                              aria-labelledby="headingCollapse31"
                                                                              class="card-collapse collapse show"
                                                                              aria-expanded="true">
                                                                              <div class="card-content">
                                                                                  <div class="card-body">
                                                                                      <div class="row match-height">



                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  หมายเลขแฟ้มประวัติ :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder="123456798 ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>หมายเลขแฟ้มประวัติใหม่
                                                                                                      : </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder="123456789 ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เลขที่ประจำตัว :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="1111111111">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วันที่ออกบัตร
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      หลักสูตรที่ใช้ในการบรรจุเข้ารับราชการสัญญาบัตร/ประทวน
                                                                                                      :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                      <div>

                                                                                                      </div>

                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body first birth ">
                                                                                                      กำเนิดแรกบรรจุ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;border-color: #ff0000 ;border: 1px solid #ff0000;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body">
                                                                                                      กำหนดปรับสภาพ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      คุณวุฒิแรกบรรจุ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>

                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      คุณวุฒิปรับสภาพ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ระยะเวลาการศึกษา :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ระยะเวลาการศึกษา :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เหล่า : <br>
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      จำพวก :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>



                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  รุ่น นตท. :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>รุ่น นตท.ซ้ำชั้น :
                                                                                                  </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>

                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  รุ่น นนอ. :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>รุ่น นนอ.ซ้ำชั้น :
                                                                                                  </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      รุ่นศิษย์การบิน :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>


                                                                                          <div class="col-md-3">


                                                                                          </div>
                                                                                          <div class="col-md-3">


                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เลขหมายรายงาน :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>ลชทอ. รอง1 : </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>

                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  ลชทอ. รอง2 :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เลขที่ตำแหน่งระบบจ่ายตรงฯ
                                                                                                      (ตำแหน่งหลัก) :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ลชทอ.หลัก :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-12 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ชื่อตำแหน่ง :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      สังกัด :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      สายวิทยาการ :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder=" ">

                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี
                                                                                                      รับตำแหน่ง
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี บรรจุ
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี
                                                                                                      น.สัญญาบัตร/ประทวน
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี
                                                                                                      บรรจุรับยศปัจจุบัน
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>


                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  ชั้นเงินเดือน :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>เงินเดือน : </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เบิกลด :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      สถานะภาพบุคคล :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>


                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  คำนวณวันรับยศ :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>จำนวนปีครองยศ :
                                                                                                  </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>




                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  จำนวนปีรับราชการ :
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div class="col-md-3">
                                                                                              <div class="card-body ">
                                                                                                  <a>จำนวนวันลา : </a>
                                                                                                  <input
                                                                                                      class="input form-control"
                                                                                                      style="width: 100%;"
                                                                                                      placeholder=" ">
                                                                                              </div>

                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      วันทวีคูณ :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ประเภทการสูญเสีย :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี
                                                                                                      สูญเสีย
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>




                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>






                                                                      </div>
                                                                  </div>

                                                              </div>

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
                                                                                  <h6><U>ส่วนที่ 3</U>
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
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">







                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เลขประจำตัวประชาชน
                                                                                                      :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="154990044999 ">
                                                                                                  </div>

                                                                                              </div>


                                                                                          </div>
                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เลขประจำตัวผู้เสียภาษี
                                                                                                      :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="130545621872  ">
                                                                                                  </div>

                                                                                              </div>

                                                                                          </div>


                                                                                          <div
                                                                                              class="col-md-12 col-sm-12">
                                                                                              <div class="card-body ">
                                                                                                  สถานภาพสมรส :
                                                                                                  <div
                                                                                                      class="card-content">
                                                                                                      <div
                                                                                                          class="card-body">
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio8">
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio8">ไม่ระบุ</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio9"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio9"
                                                                                                                  checked>โสด</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio10"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio10"
                                                                                                                  checked>สมรส</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio11"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio11"
                                                                                                                  checked>หย่า</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio12"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio12"
                                                                                                                  checked>หม้าย</label>
                                                                                                          </div>

                                                                                                      </div>
                                                                                                  </div>


                                                                                              </div>

                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี เกิด
                                                                                                      :
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">

                                                                                                  <div
                                                                                                      class="input-group">
                                                                                                      วัน/เดือน/ปี
                                                                                                      เกษียณ :
                                                                                                      <input type="text"
                                                                                                          class="form-control pickadate-disable-dates"
                                                                                                          placeholder="25 กรกฏาคม 2562"
                                                                                                          aria-describedby="button-addon4">
                                                                                                      <div
                                                                                                          class="input-group-append">
                                                                                                          <button
                                                                                                              class="btn btn-primary"
                                                                                                              type="button"
                                                                                                              style=" padding-bottom: 1px; padding-top: 1px;"><i
                                                                                                                  class="la la-calendar-o"></i></button>
                                                                                                      </div>
                                                                                                  </div>

                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      เชื้อชาติ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      สัญชาติ :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ศาสนา :
                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>




                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      อาชีพก่อนรับราชการ
                                                                                                      :

                                                                                                      <select
                                                                                                          class="select2 form-control"
                                                                                                          style="width: 90%;">
                                                                                                          <optgroup
                                                                                                              label="สัญญาบัตร">
                                                                                                              <option
                                                                                                                  value="AK">
                                                                                                                  จอมพลอากาศ
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="HI">
                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                              </option>
                                                                                                          </optgroup>
                                                                                                          <optgroup
                                                                                                              label="ชั้นประทวน">
                                                                                                              <option
                                                                                                                  value="CA">
                                                                                                                  พันจ่าอากาศเอก
                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="NV">
                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="OR">
                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                              </option>
                                                                                                              <option
                                                                                                                  value="WA">
                                                                                                                  พลทหาร/พลฯ
                                                                                                              </option>

                                                                                                      </select>
                                                                                                      <a
                                                                                                          href="../Organizations/create.php">
                                                                                                          <i class="la la-plus-circle"
                                                                                                              style="font-size:36px;color:#0f1733;"></i></a>
                                                                                                  </div>



                                                                                              </div>


                                                                                          </div>


                                                                                          <div
                                                                                              class="col-md-6 col-sm-12">
                                                                                              <div class="card-body ">
                                                                                                  กบข./กสจ. :
                                                                                                  <div
                                                                                                      class="card-content">
                                                                                                      <div
                                                                                                          class="card-body">
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio13">
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio13">ไม่ระบุ</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio14"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio14"
                                                                                                                  checked>เป็นสมาชิก</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio15"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio15"
                                                                                                                  checked>ไม่เป็นสมาชิก</label>
                                                                                                          </div>


                                                                                                      </div>
                                                                                                  </div>


                                                                                              </div>

                                                                                          </div>


                                                                                          <div
                                                                                              class="col-md-6 col-sm-12">
                                                                                              <div class="card-body ">
                                                                                                  ประเภทการเป็นสมาชิก :
                                                                                                  <div
                                                                                                      class="card-content">
                                                                                                      <div
                                                                                                          class="card-body">
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio16">
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio16">สมาชิกแบบสะสม</label>
                                                                                                          </div>
                                                                                                          <div
                                                                                                              class="d-inline-block custom-control custom-radio mr-1">
                                                                                                              <input
                                                                                                                  type="radio"
                                                                                                                  class="custom-control-input"
                                                                                                                  name="colorRadio"
                                                                                                                  id="radio17"
                                                                                                                  checked>
                                                                                                              <label
                                                                                                                  class="custom-control-label"
                                                                                                                  for="radio17"
                                                                                                                  checked>สมาชิกแบบไม่สะสม</label>
                                                                                                          </div>


                                                                                                      </div>
                                                                                                  </div>


                                                                                              </div>







                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      อีเมล :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      อีเมลสำรอง :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">


                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      หมายเลขโทรศัพท์ที่ทำงาน
                                                                                                      :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>


                                                                                          <div
                                                                                              class="col-lg-6 col-md-12">
                                                                                          </div>



                                                                                          <div
                                                                                              class="col-lg-12 col-md-12">

                                                                                              <div class="card-block">
                                                                                                  <div
                                                                                                      class="card-body ">
                                                                                                      ข้อมูลทะเบียนรา :
                                                                                                      <input
                                                                                                          class="input form-control"
                                                                                                          style="width: 100%;height: 150px;"
                                                                                                          placeholder="">
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>

                                                                                          <div class="form-actions center" align="center">
                                <!-- <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="confirm-text" onclick="insertOrganizationParts()">บันทึก</button> -->

                                <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1" id="type-error">ยกเลิก</button>
                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="submit" name="submit" onclick="insertOrganizationGroupType()">บันทึก</button>

                            </div>












                                                                                      </div>



                                                                                  </div>
                                                                              </div>
                                                                          </div>






                                                                      </div>
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
  <script src="../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
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

  <!-- select2 -->
  <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
  <script src="../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
  <!-- select2 -->

  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
  <script src="../../app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
  <!-- <script src="../../app-assets/vendors/js/pickers/pickadate/picker.time.js" type="text/javascript"></script> -->
  <!-- <script src="../../app-assets/vendors/js/pickers/pickadate/legacy.js" type="text/javascript"></script> -->
  <!-- <script src="../../app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" -->

  <!-- END PAGE VENDOR JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <!-- <script type="text/javascript" src="../../app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script> -->
  <script src="../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- footer -->
  <?php include '../include/footer.php'; ?>