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
  <style>
      .table td {
          padding: -0.75rem 2rem;
      }
  </style>
  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-md-6 col-12 mb-2">
                      <h3 class="content-header-title">Detached Left Sidebar</h3>
                      <div class="row breadcrumbs-top">
                          <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="#">Page Layouts</a>
                                  </li>
                                  <li class="breadcrumb-item active">Content detached left sidebar
                                  </li>
                              </ol>
                          </div>
                      </div>
                  </div>
                  <div class="content-header-right col-md-6 col-12">

                  </div>
              </div>
              <div class="content-detached content-right">
                  <div class="content-body">
                      <!-- Description -->

                      <section id="description" class="card">

                          <div class="card-content">
                              <div class="card-body">
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
                                              <th></th>
                                              <th>ลำดับที่</th>
                                              <th>รหัส</th>
                                              <th>ชื่อ</th>
                                              <th>ใช้งาน</th>

                                          </tr>
                                      </thead>
                                      <tbody align="center">
                                          <tr>
                                              <td><input type="checkbox" class="checkAll" /></td>
                                              <td style="color:#0f1733"><a><i class="la la-file-text"></i></a>
                                                  <a><i class="la a la-money"></i></a>
                                                  <a class="dropdown">
                                                      <a data-toggle="dropdown">
                                                          <i class="la la-ellipsis-v"></i></a>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#"><i class="la la-edit"></i> แก้ไข</a>
                                                          <a class="dropdown-item" href="#"><i class="la la-trash-o"></i>ลบ</a>
                                                  </a>

                                              </td>
                                              <td>System Architect</td>
                                              <td>Edinburgh</td>
                                              <td>61</td>
                                              <td align="center">
                                                  <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                              </td>
                                          </tr>
                                          <tr>
                                              <td><input type="checkbox" class="checkAll" /></td>
                                              <td style="color:#0f1733"><a><i class="la la-file-text"></i></a>
                                                  <a><i class="la a la-money"></i></a>
                                                  <a class="dropdown">
                                                      <a data-toggle="dropdown">
                                                          <i class="la la-ellipsis-v"></i></a>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#"><i class="la la-edit"></i> แก้ไข</a>
                                                          <a class="dropdown-item" href="#"><i class="la la-trash-o"></i>ลบ</a>
                                                  </a>

                                              </td>
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
                          </div>
                          <!--/ PUG Code -->
                  </div>
              </div>

              <div class="sidebar-detached sidebar-left" ,=",">

                  <div class="sidebar">
                      <div class="sidebar-content card d-none d-lg-block">
                          <div class="card-body">
                            <div style="background-color:#0f1733; color:white; " >
                            <a>โครงการส่วนราชกาล </a>
                            <a style="float:right;"><i class="la la-sitemap"></i> </a>
                            <br>
                            <a href="./create.php" class="btn btn-sm"style="background-color:#0f1733;color:white;border:white";>
                                                  <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 13px"> เพิ่ม</span>
                                              </a>
                            </div>
                            <div>
                           
                            </div>

                         
                              <!-- ---------------------- -->

                              

                              <!-- /Ratings sample -->

                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </section>


  <style>
      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
      }
  </style>
  <script>
      $(document).ready(function() {
          $('.dropdown-submenu a.test').on("click", function(e) {
              $(this).next('ul').toggle();
              e.stopPropagation();
              e.preventDefault();
          });
      });
  </script>


  <!-- footer -->
  <?php include '../include/footer.php'; ?> 