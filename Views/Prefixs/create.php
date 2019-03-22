  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>
  <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert.css">

  <style>
    /* ol > li > a {color:#222233;} */
    .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
    .toggle.ios .toggle-handle { border-radius: 20rem; }
  </style>
  <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-header row">
              <div class="content-header-left col-md-6 col-12 mb-2">
                  <h3 class="content-header-title">หน่วยงาน</h3>
                  <div class="row breadcrumbs-top">
                      <div class="breadcrumb-wrapper col-12">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="../home/index.php">Home</a>
                              </li>
                              <li class="breadcrumb-item"><a href="./index.php">Prefix</a>
                              </li>
                              <li class="breadcrumb-item active"><a href="#">เพิ่มข้อมูล</a>
                              </li>
                          </ol>
                      </div>
                  </div>
              </div>
              <!-- <div class="content-header-right col-md-6 col-12">
                  <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                      <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                  </div>
              </div> -->
          </div>
          <div class="content-body">
              <!-- Basic form layout section start -->
              <section id="horizontal-form-layouts">
                  
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header">
                                  <h4 class="form-section" id="horz-layout-colored-controls">สร้างหน่วยงาน</h4>
                                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                  <div class="heading-elements">
                                      <ul class="list-inline mb-0">
                                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="card-content collpase show">
                                  <div class="card-body">
                                      <!-- <div class="card-text">
                                          <p>คำโปรย</p>
                                      </div> -->
                                      <form class="form form-horizontal">
                                          <div class="form-body">
                                              <div class="row">
                                                  <div class="col-md-6">
                                                          <label class="col-md-4 label-control" for="userinput1">รหัสหน่วยงาน</label>
                                                          <div class="col-md-12">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="userinput1" class="form-control border-primary" placeholder="รหัสหน่วยงาน" name="firstname">
                                                              <div class="form-control-position">
                                                              <i class="ft-message-square"></i>
                                                          </div>
                                                        </div>
                                                  </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                          <label class="col-md-4 label-control" for="userinput2">ชื่อตัวย่อ</label>
                                                          <div class="col-md-12">
                                                          <div class="position-relative has-icon-left">
                                                              <input type="text" id="userinput2" class="form-control border-primary" placeholder="ชื่อตัวย่อ" name="lastname">
                                                              <div class="form-control-position">
                                                              <i class="ft-message-square"></i>
                                                          </div>
                                                            </div>
                                                          </div>
                                                  </div>
                                              </div>
                                              <br>
                                              <div class="row">
                                              <div class="col-md-12">
                                              <label class="col-md-4 label-control" for="userinput3">ชื่อหน่วยงาน</label>
                                            
                                              <div class="col-md-12">
                                                      <div class="position-relative has-icon-left">
                                                          <input type="text" id="timesheetinput1" class="form-control border-primary" placeholder="ชื่อหน่วยงาน" name="employeename">
                                                          <div class="form-control-position">
                                                              <i class="ft-user"></i>
                                                          </div>
                                                      </div>
                                                  </div>
                                                
                                                </div>
                                                <div class="col-md-12">
                                                    <br>
                                                    <label class="col-md-1 label-control" for="userinput3" style="padding-right:0px;">สถานะ</label>
                                                    <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                                    
                                                  </div>
                                              </div>
                                             
                                          </div>
                                        
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="form-actions center" align="center"> 
                      
                                                 <button type="button" class="btn btn-danger  round btn-min-width mr-1 mb-1">ยกเลิก</button>
                                                <button type="button" class="btn btn-success  round btn-min-width mr-1 mb-1" id="type-success">บันทึก</button>
                                          </div>
              </section>
              <!-- // Basic form layout section end -->
          </div>
      </div>
  </div>
    <!-- BEGIN VENDOR JS-->
    <script src="../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../../app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../../app-assets/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <!-- footer -->
  <?php include '../include/footer.php'; ?> 