  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <style>
    /* ol > li > a {color:#222233;} */
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
    .toggle.ios .toggle-handle { border-radius: 20rem; }
  </style>

  <section>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">คำนำหน้า</h3>
        </div>
      </div>
      <div class="content-body">
         <!-- Bootstrap 3 table -->
         <section id="bootstrap3">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <!-- <h4 class="card-title">Bootstrap 3</h4> -->
                  <!-- <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a> -->
                  <!-- <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div> -->
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้่างอัตรากำลังพล</a></li>
                      <li class="breadcrumb-item"><a href="../home/index.php">โครงสร้าง</a></li>
                      <li class="breadcrumb-item active" aria-current="page">คำนำหน้าา</li>
                    </ol>
                  </nav>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <p class="card-text"></p>
                    <table class="table table-striped table-bordered bootstrap-3 table-">
                      <thead>
                        <tr align="center">
                          <th><input type="checkbox" class="checkAll" onclick="toggle(this);" /></th>
                          <th>ลำดับที่</th>
                          <th>รหัส</th>
                          <th>ชื่อ</th>
                          <th >ใช้งาน</th>
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
                          <td><input type="checkbox" class="checkAll"/></td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td align="center">
                            <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                          </td>
                        </tr>
                      </tbody>
                      <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
                    </table>
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
  
  <script type="text/javascript">
    $(document).ready(function() {
            console.log("ready");
            change_autorefreshdiv();
    });

    function change_autorefreshdiv(){
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