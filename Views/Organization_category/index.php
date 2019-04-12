  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>
  <style>
      /* ol > li > a {color:#222233;} */
      
    .modal {
        text-align: center;
        padding: 0 !important;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 20, 0.4);
        /* Black w/ opacity */
    }

    .modal:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -4px;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    .modal-body {
        width: 100% height:100%;
    }

    .modal-content {
        background-color: transparent;
        border: none;
    }
      .toggle.ios,
      .toggle-on.ios,
      .toggle-off.ios {
          border-radius: 20rem;
      }

      .toggle.ios .toggle-handle {
          border-radius: 20rem;
      }
  </style>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <img src="../../Asset/Images/gif-To-not-Bg-Th.gif" style="width:90%" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


  <section>
      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-md-6 col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">ประเภทโครงสร้าง</h3>
                  </div>
              </div>
              <div class="content-body">
                  <section id="bootstrap3">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-content collapse show">
                                      <div class="card-body card-dashboard">
                                          <p class="card-text"></p>
                                          <nav aria-label="breadcrumb">
                                              <ol class="breadcrumb">
                                                  <li class="breadcrumb-item"><a href="../home/index.php">ระบบงานโครงสร้างอัตรากำลังพล</a></li>
                                                  <li class="breadcrumb-item"><a href="../home/index.php">โครงสร้าง</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">ประเภทโครงสร้าง</li>
                                              </ol>
                                          </nav>
                                          <a href="./create.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                              <span class="la la-plus-circle" style="color:white; font-weight: bold;font-size: 18px"></span> เพิ่ม
                                          </a>
                                          <a href="./delete.php" class="btn btn-social btn-min-width mb-1" style="background-color:#0f1733; color:white;">
                                              <span class="la la-trash-o" style="color:white; font-weight: bold;font-size: 18px"></span> ลบ
                                          </a>
                                          <table id="OrganizationCategory" class="table table-striped table-borderless table-hover bootstrap-3 " style="width:100%">
                                              <thead>
                                                  <tr align="center" style="background-color:#0f1733; color:whitesmoke;">
                                                      <th></th>
                                                      <th>ลำดับที่</th>
                                                      <th>รหัสโครงสร้าง</th>
                                                      <th>ชื่อโครงสร้าง</th>
                                                      <th>ชื่อย่อโครงสร้าง</th>
                                                      <th>สถานะ</th>
                                                  </tr>
                                              </thead></tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
              </div>
          </div>
      </div>
  </section>

  <script src="../../Controllers/organizationCategoryController.js"></script>
  
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

 
  <script type="text/javascript">
      $(document).ready(function() {
          // console.log("ready");
          
        $(document).ajaxStart(function() {
            $(".modal").show();
        });
        $(document).ajaxComplete(function() {
            $(".modal").hide();
        });
          change_autorefreshdiv();
          getOrganizationCategory();
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
  <?php
    include "../include/footer.php";
    ?> 