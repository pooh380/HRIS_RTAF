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

  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left">
                  <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                  <h3 class="content-header-title">รายละเอียดอัตราตำแหน่งโครงสร้าง</h3> <br>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                          <li class="breadcrumb-item"><a href="../home/index.php">ตำแหน่ง</a></li>
                          <li class="breadcrumb-item"><a href="../home/index.php">อัตราตำแหน่งโครงสร้าง</a></li>
                          <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <div class="content-body">
              <!-- Basic tabs start -->
              <section id="basic-tabs-components">
                  <div class="row match-height">
                      <div class="" style="width:100%;">
                          <div class="card">
                              <div class="card-content">
                                <div class="card-header">
                                    <div class="media">
                                      <a class="media-left" href="#">
                                        <img src="../../app-assets/images/portrait/small/avatar-s-13.png" alt="Generic placeholder image"
                                        style="width: 111px;height: 110px; margin-right:20px;" />
                                      </a>
                                      <div class="media-body">
                                        <div class="media-heading" style="margin-top:5px;"> 
                                          <h5 style="float:left;">ชื่อตำแหน่ง :&nbsp;</h5> <p>หัวหน้าแผนก</p>
                                          <h5 style="float:left;">ชื่อตำแหน่ง-สังกัด :&nbsp;</h5> <p>หัวหน้าแผนกวิเคราะห์และพัฒนาระบบ กขพ.สปพ.กพ.ทอ.</p>
                                          <h5 style="float:left;">เงินเดือนอัตรา :&nbsp;</h5> <p>น.ท.</p>
                                          <h5 style="float:left;">จำนวน :&nbsp;</h5> <p style="float:left;">1</p> <p>&nbsp;อัตรา</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                   
                                      <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                          <li class="nav-item">
                                              <a class="nav-link active" id="base-tab11" data-toggle="tab" aria-controls="tab11" href="#tab11" aria-expanded="true">เงินเพิ่มประจำตำแหน่ง</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" id="base-tab12" data-toggle="tab" aria-controls="tab12" href="#tab12" aria-expanded="false">ลชทอ./เลขหมายรายงาน</a>
                                          </li>
                                      </ul>
                                      <div class="tab-content pt-1">
                                          <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab11">
                                              <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                                  <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                              </a>
                                              <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                                  <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                              </a>
                                              <table class="table table-striped table-borderless table-hover bootstrap-3">
                                                  <thead>
                                                      <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                          <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                                                          <th>ลำดับที่</th>
                                                          <th>รหัส</th>
                                                          <th>ชื่อ</th>
                                                          <th>ใช้งาน</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody align="center">
                                                      <tr>
                                                          <td><input type="checkbox" class="checkAll" /></td>
                                                          <td>System Architect</td>
                                                          <td>Edinburgh</td>
                                                          <td>61</td>
                                                          <td align="center">
                                                              <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td><input type="checkbox" class="checkAll" /></td>
                                                          <td>Accountant</td>
                                                          <td>Tokyo</td>
                                                          <td>63</td>
                                                          <td align="center">
                                                              <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                                          </td>
                                                      </tr>
                                                  </tbody>
                                                </table>
                                          </div>
                                          <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                                            ข้อมูล ลชทอ
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- Basic badge Input end -->
          </div>
      </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>

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