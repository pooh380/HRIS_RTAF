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
                                              <td><a><i class="la la-file-text"></i></a>
                                             <a><i class="la a la-money"></i></a>
                                             <a><i class="la la-ellipsis-v"></i></a></td>
                                              <td>System Architect</td>
                                              <td>Edinburgh</td>
                                              <td>61</td>
                                              <td align="center">
                                                  <input type="checkbox" checked data-toggle="toggle" data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success" data-offstyle="danger" data-size="sm">
                                              </td>
                                          </tr>
                                          <tr>
                                              <td><input type="checkbox" class="checkAll" /></td>
                                              <td><a><i class="la la-file-text"></i></a>
                                             <a><i class="la a la-money"></i></a>
                                             <a><i class="la la-ellipsis-v"></i></a></td>
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
                              <div class="category-title pb-1">
                                  <h6>Card example</h6>
                              </div>
                              <!-- Card sample -->
                              <div class="text-center">
                                  <img class="card-img-top mb-1 img-fluid" data-src="holder.js/100px180/" src="../../../app-assets/images/portfolio/portfolio-1.jpg" alt="Card image cap">
                              </div>
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                  bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Button</a>
                              <!-- /Card sample -->
                              <hr>
                              <!-- Striped Progress sample -->
                              <div class="category-title pb-1">
                                  <h6>Progress example</h6>
                              </div>
                              <div>
                                  <div class="progress progress-sm mt-1 mb-0">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <div class="progress progress-sm mt-1 mb-0">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <div class="progress progress-sm mt-1 mb-0">
                                      <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                              </div>
                              <!-- /Striped Progress sample -->
                              <hr>
                              <!-- Media sample -->
                              <div class="category-title pb-1">
                                  <h6>Media example</h6>
                              </div>
                              <div class="media">
                                  <a class="media-left pr-1" href="#">
                                      <img class="media-object" src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="Generic placeholder image" style="width: 64px;height: 64px;" />
                                  </a>
                                  <div class="media-body">
                                      <h4 class="media-heading">Cookie candy</h4> Cookie candy dragée marzipan pie pudding.
                                  </div>
                              </div>
                              <!-- /Media sample -->
                              <hr>
                              <!-- /Eange Slider sample -->
                              <div class="category-title pb-1">
                                  <h6>Range Slider example</h6>
                              </div>
                              <fieldset>
                                  <div class="form-group">
                                      <div class="slider-sm slider-success my-1" id="small-slider"></div>
                                  </div>
                              </fieldset>
                              <!-- /Range Slider sample -->
                              <hr>
                              <!-- Knob sample -->
                              <div class="category-title pb-1">
                                  <h6>Knob example</h6>
                              </div>
                              <div>
                                  <div class="text-center">
                                      <input type="text" value="35" class="knob angle-offset" data-angleOffset="90" data-linecap="round" data-fgColor="#FB6E52">
                                  </div>
                              </div>
                              <!-- /Knob sample -->
                              <hr>
                              <!-- Form sample -->
                              <div class="sidebar-category">
                                  <div class="category-title pb-1">
                                      <h6>Form example</h6>
                                  </div>
                                  <form action="#" class="category-content">
                                      <div class="form-group">
                                          <label>Your name:</label>
                                          <input type="text" class="form-control" placeholder="Username">
                                      </div>
                                      <div class="form-group">
                                          <label>Your password:</label>
                                          <input type="password" class="form-control" placeholder="Password">
                                      </div>
                                      <div class="form-group">
                                          <label>Your message:</label>
                                          <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                      </div>
                                      <div class="row">
                                          <div class="col-6">
                                              <button type="reset" class="btn btn-danger btn-block">Reset</button>
                                          </div>
                                          <div class="col-6">
                                              <button type="submit" class="btn btn-info btn-block">Submit</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                              <!-- /form sample -->
                              <hr>
                              <!-- /Ratings sample -->
                              <div class="category-title pb-1">
                                  <h6>Ratings example</h6>
                              </div>
                              <div>
                                  <p class="card-text">This is the most basic example of ratings.</p>
                                  <div id="score-rating"></div>
                              </div>
                              <!-- /Ratings sample -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>



  <!-- footer -->
  <?php include '../include/footer.php'; ?> 