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
          <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
          <h3 class="content-header-title">รายละเอียดอัตราตำแหน่งโครงสร้าง</h3>
        </div>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
          <li class="breadcrumb-item"><a href="../home/index.php">ตำแหน่ง</a></li>
          <li class="breadcrumb-item"><a href="../home/index.php">อัตราตำแหน่งโครงสร้าง</a></li>
          <li class="breadcrumb-item active" aria-current="page">รายละเอียดอัตราตำแหน่งโครงสร้าง</li>
        </ol>
      </nav>
      <div class="content-body">
        <!-- Basic tabs start -->
        <section id="basic-tabs-components">
          <div class="row match-height">
            <div class="" style="width:100%;">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Basic Tabs</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1"
                        href="#tab1" aria-expanded="true">Tab 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2"
                        aria-expanded="false">Tab 2</a>
                      </li>
                    </ul>
                    <div class="tab-content px-1 pt-1">
                      <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                      <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                        <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                      </a>
                      <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                        <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                      </a>
                      <table class="table table-striped table-borderless table-hover bootstrap-3 table-">
                      <thead>
                        <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
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
                      <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                        <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie
                          pastry cotton candy oat cake fruitcake jelly chupa chups.
                          Pudding caramels pastry powder cake soufflé wafer caramels.
                          Jelly-o pie cupcake.</p>
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