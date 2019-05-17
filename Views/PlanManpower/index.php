  <!-- header -->
  <?php include '../include/header.php'; ?>
  <?php include '../../Model/Ducklab/func.php'; ?>
  <?php  
  //Recruitment and appointment
    $menu1 = "RECRNAPPOINT" ;
    $menu2 = "PlanManpower" ;


  ?>
  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <section>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
          <h3 class="content-header-title">แผนการบรรจุกำลังพล (จากกองแผน)</h3>
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
                    <p class="card-text"></p>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../home/index.php">หน้าแรก </a></li> 
                        <li class="breadcrumb-item  active" aria-current="page"> ระบบงานสรรหาและบรรจุกำลังพล </li>  
                      </ol>
                    </nav>

                    <div class="row"> 
                        <div class="col-md-3 col-sm-12">
                          <div class="form-group">  
                            <select class="  form-control block " >
                              <option value=""> ปีงบประมาณทั้งหมด </option>
                              <option value="2562"> 2562 </option>
                              <option value="2561"> 2561 </option>
                              <option value="2560"> 2560 </option>
                              <option value="2559"> 2559 </option>
                            </select>
                          </div>
                        </div> 
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="box1 txtdesc">
                            ข้อมูลจำนวน <span> 500 </span> อัตรา
                        </div>
                      </div>
                    </div>
                    
                    <table id="planManpowerTable" class="table table-striped table-borderless table-hover " style="width:100%;">
                      <thead>
                        <tr style="background-color:#0f1733; color:whitesmoke;text-align: center;">
                          <th> </th>
                          <th> ลำดับที่ </th>
                          <th> ปีงบประมาณ</th>
                          <th> ชื่อแผน</th>
                          <th> จำนวนอัตราทั้งหมด </th>
                          <th >สถานะ</th> 
                        </tr>
                      </thead>
                      <tbody> 
                        <tr>
                          <td class="text-center" > 
                            <a href="plan_detail.php" title="รายละเอียดแผน" > <i class="ico la la-file-text-o "> </i> </a> 
                            <a href="#" title="ลงตำแหน่ง" > <i class="ico la la-cloud-upload disable"> </i> </a>  
                          </td>
                          <td class="text-center"> 1 </td>
                          <td class="text-center"> 2562 </td>
                          <td> แผนการบรรจุกำลังพล ประจำปี 2562 </td>
                          <td class="text-center"> 457 </td>
                          <td class="text-center"> 
                            
                            <div class="badge badge-warning round badge_c1">
                              <i class="la la-clock-o font-medium-2"></i> <span> กำลังสรรหา </span> 
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center" > 
                            <a href="plan_detail.php" title="รายละเอียดแผน" > <i class="ico la la-file-text-o "> </i> </a> 
                            <a href="#" title="ลงตำแหน่ง" > <i class="ico la la-cloud-upload"> </i> </a>  
                          </td>
                          <td class="text-center"> 2 </td>
                          <td class="text-center"> 2561 </td>
                          <td> แผนการบรรจุกำลังพลเพิ่มเติม ประจำปี 2561 </td>
                          <td class="text-center"> 72 </td>
                          <td class="text-center"> 
                            
                            <div class="badge badge-success round badge_c1">
                            <i class="la la-check-circle-o font-medium-2"></i> <span> เสร็จสิ้น </span> 
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center" > 
                            <a href="plan_detail.php" title="รายละเอียดแผน" > <i class="ico la la-file-text-o "> </i> </a> 
                            <a href="#" title="ลงตำแหน่ง" > <i class="ico la la-cloud-upload"> </i> </a>  
                          </td>
                          <td class="text-center"> 3 </td>
                          <td class="text-center"> 2561 </td>
                          <td> แผนการบรรจุกำลังพล ประจำปี 2561 </td>
                          <td class="text-center"> 400 </td>
                          <td class="text-center"> 
                            
                            <div class="badge badge-success round badge_c1">
                            <i class="la la-check-circle-o font-medium-2"></i><span> เสร็จสิ้น </span> 
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="text-center" > 
                            <a href="plan_detail.php" title="รายละเอียดแผน" > <i class="ico la la-file-text-o "> </i> </a> 
                            <a href="#" title="ลงตำแหน่ง" > <i class="ico la la-cloud-upload"> </i> </a>  
                          </td>
                          <td class="text-center"> 4</td>
                          <td class="text-center"> 2560 </td>
                          <td> แผนการบรรจุกำลังพล ประจำปี 2560 </td>
                          <td class="text-center"> 600 </td>
                          <td class="text-center"> 
                            
                            <div class="badge badge-success round badge_c1">
                              <i class="la la-check-circle-o font-medium-2"></i> <span> เสร็จสิ้น </span> 
                            </div>
                          </td>
                        </tr>
                      </tbody>
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

  
 
  
  

    

  <!-- footer -->
  <?php include '../include/footer.php'; ?>
  <script src="../../Controllers/Ducklab/duck.script.js"></script>
  <script src="../../Controllers/planManpowerController.js"></script>
  <script type="text/javascript">
    $(document).ready(function() { 
     // planManpower.GetArmy();
     // planManpower.GetPlanHeader('');
     planManpower.GetPlanHeader('');

     $('#planManpowerTable').DataTable( {
        "paging":   true,
        "lengthChange": false,
        "ordering": false,
        "info":     false,
        "searching": false
    } );
    }); 
  </script>
  