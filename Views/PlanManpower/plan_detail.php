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
          <h3 class="content-header-title">แผนการบรรจุกำลังพล </h3>
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
                        <li class="breadcrumb-item"><a href="index.php">ระบบงานสรรหาและบรรจุกำลังพล</a></li> 
                        <li class="breadcrumb-item active" aria-current="page">แผนบรรจุกำลังพล ประจำปี 2562 </li>
                      </ol>
                    </nav>

                    <div class="row"> 
                        <div class="col-md-3 col-sm-12">
                          <div class="form-group">  
                            <select  id="planManTypeId" class="  form-control block " >
                              <!-- <option value="0"> ประเภทการบรรจุกำลังพล </option> -->
                              <option value="1"> กำลังพลพิเศษ </option>
                              <option value="2"> น.ประทวนเลื่อนฐานะ  </option>
                              <option value="3">  จัดกลุ่มคุณวุฒิ/จังหวัด </option>
                              <!-- <option value="2"> น.ประทวนทำหน้าที่ </option>
                              <option value="3">  น.ประทวนท ป.ตรีปรับ </option>  -->
                            </select>
                          </div> 
                        </div> 
                        <div class="col-md-3 col-sm-12 ">
                          <div class="form-group">  
                            <select  id="planManTypeId2" class="  form-control block hidden" >
                              <option value="21"> น.ประทวนทำหน้าที่ </option>
                              <option value="22">  น.ประทวนท ป.ตรีปรับ </option>  
                            </select>
                          </div>
                          
                        </div>
                    </div>
                    <div class="row"> 
                      <div class="col-sm-12">
                        <div class="box_h1 card">
                          <div class="card-header card-head-inverse  ">
                            <h4 class="card-title text-white"> ค้นหา </h4> 
                          </div>
                          <div class="card-content collapse show">
                            <div class="card-body">
                              <div class="row">
                                <div class=" col-md-8  m-auto ">
                                 
                                      <form class="form">
                                        <div class="form-body"> 
                                          <div class="row">
                                            <div class="col-md-3">
                                              <div class="form-group">  
                                                
                                                  <select id="" name="" class="form-control round">
                                                    <option value="illustration">เหล่า/จำพวก</option>
                                                    <option value="branding">branding</option>
                                                    <option value="video">video</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="form-group">  
                                                  <select id="projectinput5" name="interested" class="form-control round">
                                                    <option value="illustration">สังกัด</option>
                                                    <option value="branding">branding</option>
                                                    <option value="video">video</option>
                                                  </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">  
                                                  <select id="projectinput5" name="interested" class="form-control round">
                                                    <option value="development">ตำแหน่ง</option>
                                                    <option value="illustration">illustration</option>
                                                    <option value="branding">branding</option>
                                                    <option value="video">video</option>
                                                  </select>
                                                </div>
                                            </div>
                                          </div>
                                          
                                          <div class="row">
                                            <div class="col-md-3">
                                              <div class="form-group">   
                                              <input type="text" id="" class="form-control round" placeholder="เลขลชทอ." name="">
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="form-group"> 
                                                <select id="" name="" class="form-control round">
                                                  <option value="0" selected="" >อัตรา</option>
                                                  <option value="less than 5000$">less than 5000$</option>
                                                  <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                </select>
                                              </div>
                                            </div>
                                          </div>
                                        
                                        </div>
                                        <div class="text-center">
                                          <button type="button" class="btn round btn1 btncustom1 mr-1">
                                            <i class="fa fa-search"></i> ค้นหา
                                          </button>
                                          <button type="button" class="btn round btn1 btncustom1">
                                            <i class=" fa fa-repeat"></i> ล้างค่า
                                          </button>
                                        </div>
                                      </form>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 

                    <div class="row"> 
                      <div class="col-md-3 col-sm-12">
                        <div class="box1 txtdesc">
                            ข้อมูลจำนวน <span> 500 </span> อัตรา
                        </div>
                      </div> 
                    </div>
                    <div class="row">
                      <div class="col-6 ">
                         <button class="btn round btn1 btncustom1">  <i class="la la-print"></i> <span > ปริ้น </span> </button>
                         <button class="btn round btn1 btncustom1">  <i class="la la-file-excel-o"></i> <span > Export Excel</span> </button>
                      </div>
                      <div class="col-6 text-right">
                         <button class="btn round btn1 btncustom1">  <i class="la la-calendar"></i> <span >  เปิด/ปิด รับสมัคร </span> </button>
                      </div>
                    </div>
                    
                    <div class="box_tb1">

                      <table id="planManpowerTable1" class="table  tb1 "  >
                        <thead>
                          <tr>
                            <th> ลำดับที่ </th>
                            <th style="width:32%;"> คุณวุฒิ</th>
                            <th  style="width:32%;"> ตำแหน่ง</th>
                            <th> เหล่าทหาร/จำพวก </th>
                            <th >เพศ</th> 
                            <th >อัตรา</th> 
                            <th >สังกัด</th> 
                            <th >จำนวน</th> 
                          </tr>
                        </thead>
                        <tbody> 
                          <tr> 
                            <td class="text-center"> 1 </td>
                            <td>   
                              ปริญญาพยาบาลศาสตร์มหาบัณฑิต ทางการพยาบาลผู้ใหญ่, ทางการพยาบาลผู้งอายุ และได้รับใบอนุญาตประกอบวิชาชีพการพยาบาลและการผดุงครรภ์ และไม่มีข้อผูกพันในการใช้ทุน
                            </td>
                            <td  class="border1"> อาจารย์ ภาควิชาการพยาบาลผู้ใหญ่ กองการศึกษา วพอ.พอ. </td>
                            <td class="text-center"> พ. </td>
                            <td class="text-center"> ญ </td>
                            <td class="text-center"> ร.อ. </td>
                            <td class="text-center"> พอ. </td>
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr class="even"> 
                            <td   rowspan="2"  class="text-center"> 2  </td>
                            <td   rowspan="2" >   
                              ปริญญาโท ในสาขาวิชาใดวิชาหนึ่ง ทางการจัดการทรัพยากรมนุษย์ ทางการพัฒนาทรัพยากรมนุษย์และองค์การ
                            </td>
                            <td  class="border1"> 
                              นายทหารพัฒนากำลัง แผนกพัฒนากำลังพล กคพ.สปพ.กพ.ทอ.  
                            
                            </td>
                            <td class="text-center"> กพ. </td>
                            <td class="text-center"> ช/ญ  </td>
                            <td class="text-center"> ร.อ. </td>
                            <td class="text-center"> กพ.ทอ. </td>
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr class="even"> 
                             <td class="border1">   นายทหารนโยบายและแผน ผนผ.กนผ.สนพ.กพ.ทอ.  </td>
                             <td class="text-center"> กพ. </td>
                            <td class="text-center"> ช/ญ  </td>
                            <td class="text-center"> ร.อ. </td>
                            <td class="text-center"> กพ.ทอ. </td>
                            <td class="text-center"> 1 </td>
                          </tr> 


                          <tr> 
                            <td class="text-center">3  </td> 
                            <td>   
                              ปริญญาโท ในสาขาวิชาคอมพิวเตอร์ หรือในสาขาวิชาใดวิชาหนึ่งทางคอมพิวเตอร์, ทางวิทยาการคอมพิวเอตร์, ทางเทคโนโลยีสารสนเทศ (ทดสอบปฏิบัติการสอน)
                            </td>
                            <td  class="border1"> 
                              อาจารย์ กกศ.รร.นนก.
                            </td>
                            <td class="text-center" > กพ. </td>
                            <td class="text-center" > ช/ญ  </td>
                            <td class="text-center"> ร.อ. </td>
                            <td class="text-center"> รร.นนก. </td>
                            <td class="text-center"> 1 </td>
                          </tr>

                          <tr  class="even"> 
                            <td class="text-center"> 4 </td>
                            <td>   
                              ปริญญาพยาบาลศาสตร์มหาบัณฑิต ทางการพยาบาลผู้ใหญ่, ทางการพยาบาลผู้งอายุ และได้รับใบอนุญาตประกอบวิชาชีพการพยาบาลและการผดุงครรภ์ และไม่มีข้อผูกพันในการใช้ทุน
                            </td>
                            <td  class="border1"> อาจารย์ ภาควิชาการพยาบาลผู้ใหญ่ กองการศึกษา วพอ.พอ. </td>
                            <td class="text-center"> พ. </td>
                            <td class="text-center"> ญ </td>
                            <td class="text-center"> ร.อ. </td>
                            <td class="text-center"> พอ. </td>
                            <td class="text-center"> 1 </td>
                          </tr>  
                          <tr> 
                            <td class="text-center"> 5   </td> 
                            <td>   
                              ปริญญาโท ในสาขาวิชาคอมพิวเตอร์ หรือในสาขาวิชาใดวิชาหนึ่งทางคอมพิวเตอร์, ทางวิทยาการคอมพิวเอตร์, ทางเทคโนโลยีสารสนเทศ (ทดสอบปฏิบัติการสอน)
                            </td>
                            <td  class="border1"> 
                              อาจารย์ กกศ.รร.นนก.
                            </td>
                            <td class="text-center" > กพ. </td>
                            <td class="text-center" > ช/ญ  </td>
                            <td class="text-center"> ร.อ. </td>
                            <td class="text-center"> รร.นนก. </td>
                            <td class="text-center"> 1 </td>
                          </tr>
                        </tbody>
                      </table>


                      
                      <table id="planManpowerTable2" class="table  tb1 hidden "  >
                        <thead>
                          <tr>
                            <th> ลำดับที่ </th> 
                            <th> เหล่าทหาร/จำพวกทหาร </th>
                            <th > สังกัด</th>
                            <th> ตำแหน่ง </th> 
                            <th > ลชทอ.หน้าที่ </th> 
                            <th >อัตรา</th>  
                            <th >จำนวน</th> 
                          </tr>
                        </thead>
                        <tbody> 
                          <tr> 
                            <td class="text-center"> 1 </td>
                            <td class="text-center"> กง. </td>
                            <td class="text-center"> กง.ทอ. </td>
                            <td class="text-left"> นายทหารรายงานและหลักฐาน แปนกรายงานและหลักฐาน กกง.กง.ทอ. </td>
                            <td class="text-center"> 6713 </td>
                            <td class="text-center"> ร.อ. </td> 
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr> 
                            <td class="text-center"> 2 </td>
                            <td class="text-center"> กง. </td>
                            <td class="text-center"> กง.ทอ. </td>
                            <td class="text-left"> นายทหารบัญชี แผนกการเงิน ชย.ทอ. </td>
                            <td class="text-center"> 6713 </td>
                            <td class="text-center"> ร.อ. </td> 
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr> 
                            <td class="text-center"> 3 </td>
                            <td class="text-center"> กง. </td>
                            <td class="text-center"> บน.1. </td>
                            <td class="text-left"> ผู้ช่วยนายทหารการเงิน กองพันทหารอากาศโยธิน บน.1  </td>
                            <td class="text-center"> 6713 </td>
                            <td class="text-center"> ร.ท. </td> 
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr> 
                            <td class="text-center"> 4 </td>
                            <td class="text-center"> กง. </td>
                            <td class="text-center"> บน.21 </td>
                            <td class="text-left"> นายทหารบัญชี แผนกการเงิน บน.21   </td>
                            <td class="text-center"> 6713 </td>
                            <td class="text-center"> ร.อ. </td> 
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr> 
                            <td class="text-center"> 5 </td>
                            <td class="text-center"> กง. </td>
                            <td class="text-center"> บน.21 </td>
                            <td class="text-left"> ผู้ช่วยนายทหารการเงิน กองพันทหารอากาศโยธิน บน.21   </td>
                            <td class="text-center"> 6713 </td>
                            <td class="text-center"> ร.ท. </td> 
                            <td class="text-center"> 1 </td>
                          </tr>
                           
                        </tbody>
                      </table>

                      <table id="planManpowerTable3" class="table table-bordered tb1 hidden  "  >
                        <thead>
                          <tr>
                            <th> ลำดับที่ </th>
                            <th style="width:32%;"> คุณวุฒิ</th>
                            <th> เหล่าทหาร/จำพวก </th>
                            <th> สังกัด </th>
                            <th  style="width:32%;"> ตำแหน่ง</th>
                            <th >ลชทอ.หน้าที่</th> 
                            <th >เพศ</th> 
                            <th >อัตรา</th>  
                            <th >จำนวน</th> 
                          </tr>
                        </thead>
                        <tbody> 
                          <tr> 
                            <td  rowspan="2"  class="text-center"> 1 </td>
                            <td  rowspan="2" >   
                              ปริญญาตรี ในสาขาวิชาพยาบาลศาสตร์  ได้รับใบประกอบวิชาชีพทางการพยาบาลและการผดุงครรภ์
                            </td>
                            <td class="text-center"> พ. </td> 
                            <td class="text-center"> พอ. </td>
                            <td class="text-center"> รองผู้บังคับหมวดนักเรียนพยาบาลทหารอากาศ ฝ่ายปกครอง แผนกปกครอง วพอ.พอ. </td>
                            <td class="text-center"> 9713 </td> 
                            <td class="text-center"> ช </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr >   
                          <td class="text-center"> พ. </td> 
                            <td class="text-center"> พอ. </td>
                            <td class="text-center"> นายทหารสันทัดงาน กวห.รพ.ภูมิพลอดุลยเดชพอ. </td>
                            <td class="text-center"> 9713,9023 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          
                          <tr> 
                            <td  rowspan="5"  class="text-center"> 2</td>
                            <td  rowspan="5" >   
                            ปริญญาตรี ในสาขาวิชาการบัญชี หรือในสาขาวิชาใดสาขาวิชาหนึ่ง
                            ทางการบัญชี, ทางการธนาคารและการเงิน,
                            ทางการบัญชีการเงิน, ทางการบัญชีบริหาร,
                            ทางระบบสารสนเทศทางการบัญชี
                            </td>
                            <td class="text-center"> กง. </td> 
                            <td class="text-center"> อย. </td>
                            <td class="text-center"> นายทหารควบคุมการเบิกจ่าย แผนกการเงิน อย. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr >   
                            <td class="text-center"> กง. </td> 
                            <td class="text-center"> สอ.ทอ. </td>
                            <td class="text-center"> นายทหารควบคุมการเบิกจ่าย แผนกการเงิน สอ.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr >   
                            <td class="text-center"> ตน. </td> 
                            <td class="text-center"> สตน.ทอ. </td>
                            <td class="text-center"> นายทหารตรวจสอบ ชุดตรวจที่ ๒ กตจ.๑ กตส.๑ สตน.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr >   
                            <td class="text-center"> ตน. </td> 
                            <td class="text-center"> สตน.ทอ. </td>
                            <td class="text-center"> นายทหารตรวจสอบ ชุดตรวจที่ ๒ กตจ.๒ กตส.๑ สตน.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr >   
                            <td class="text-center"> ตน. </td> 
                            <td class="text-center"> สตน.ทอ. </td>
                            <td class="text-center"> นายทหารตรวจสอบ ชุดตรวจที่ ๒ กตจ.๒ กตส.๓ สตน.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 

                          <tr> 
                            <td  rowspan="2"  class="text-center"> 3 </td>
                            <td  rowspan="2" >   
                            ปริญญาตรี ในสาขาวิชาคอมพิวเตอร์ หรือในสาขาวิชาใดสาขาวิชาหนึ่ง ทางคอมพิวเตอร์, ทางวิทยาการคอมพิวเตอร์, ทางเทคโนโลยีสารสนเทศ
                            </td>
                            <td class="text-center"> ทสส. </td> 
                            <td class="text-center"> ชว.ทอ. </td>
                            <td class="text-center">  นายทหารเทคโนโลยีสารสนเทศและการสื่อสาร ขว.ทอ. </td>
                            <td class="text-center"> 2713 </td> 
                            <td class="text-center"> ช </td>
                            <td class="text-center"> ร.อ. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr >   
                            <td class="text-center"> ทสส. </td> 
                            <td class="text-center">  บน.4 </td>
                            <td class="text-center">  นายทหารเทคโนโลยีสารสนเทศและการสื่อสาร ฝ่ายเทคโนโลยีสารสนเทศและการสื่อสาร บก.บน.๔ </td>
                            <td class="text-center"> 2713 </td> 
                            <td class="text-center"> ช </td>
                            <td class="text-center"> ร.อ. </td>   
                            <td class="text-center"> 1 </td> 
                          </tr>


                          <tr> 
                            <td  rowspan="5"  class="text-center"> 4</td>
                            <td  rowspan="5" >   
                            ปริญญาตรี ในสาขาวิชาการบัญชี หรือในสาขาวิชาใดสาขาวิชาหนึ่ง
                            ทางการบัญชี, ทางการธนาคารและการเงิน,
                            ทางการบัญชีการเงิน, ทางการบัญชีบริหาร,
                            ทางระบบสารสนเทศทางการบัญชี
                            </td>
                            <td class="text-center"> กง. </td> 
                            <td class="text-center"> อย. </td>
                            <td class="text-center"> นายทหารควบคุมการเบิกจ่าย แผนกการเงิน อย. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr >   
                            <td class="text-center"> กง. </td> 
                            <td class="text-center"> สอ.ทอ. </td>
                            <td class="text-center"> นายทหารควบคุมการเบิกจ่าย แผนกการเงิน สอ.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr >   
                            <td class="text-center"> ตน. </td> 
                            <td class="text-center"> สตน.ทอ. </td>
                            <td class="text-center"> นายทหารตรวจสอบ ชุดตรวจที่ ๒ กตจ.๑ กตส.๑ สตน.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr >   
                            <td class="text-center"> ตน. </td> 
                            <td class="text-center"> สตน.ทอ. </td>
                            <td class="text-center"> นายทหารตรวจสอบ ชุดตรวจที่ ๒ กตจ.๒ กตส.๑ สตน.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr>
                          <tr >   
                            <td class="text-center"> ตน. </td> 
                            <td class="text-center"> สตน.ทอ. </td>
                            <td class="text-center"> นายทหารตรวจสอบ ชุดตรวจที่ ๒ กตจ.๒ กตส.๓ สตน.ทอ. </td>
                            <td class="text-center"> 6713 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.ท. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 

                          <tr> 
                            <td   class="text-center"> 5 </td>
                            <td   >   
                            ปริญญาตรี ในสาขาวิชานิติศาสตร์และเป็นสมาชิกเนติบัณฑิตยสภา
                            </td>
                            <td class="text-center"> ธน. </td> 
                            <td class="text-center"> สธน.ทอ. </td>
                            <td class="text-center">  นายทหารบริหารกำลังพล กฎก.สธน.ทอ.  </td>
                            <td class="text-center"> 8813 </td> 
                            <td class="text-center"> ช/ญ </td>
                            <td class="text-center"> ร.อ. </td>   
                            <td class="text-center"> 1 </td>
                          </tr> 

                        </tbody>
                      </table>


                      <table id="planManpowerTable4" class="table table-bordered tb1 hidden "  >
                        <thead>
                          <tr>
                            <th style="width: 90px;"> กลุ่ม </th>
                            <th style="width: 90px;"> รหัสตำแหน่ง </th>
                            <th style="width:30%;"> คุณวุฒิ</th>
                            <th style="width:20%;"> คุณสมบัติเพิ่มเติม </th>
                            <th>เพศ</th> 
                            <th>ที่ตั้งหน่วย</th>
                            <th style="width:20%;"> ตำแหน่ง</th> 
                            <th>จำนวน</th> 
                          </tr>
                        </thead>
                        <tbody>  
                          <tr> 
                            <td class="text-center"> DOF-01</td>
                            <td class="text-center"> 101310  </td>
                            <td >   
                            ปริญญำโท ในสำขำวิชำใดวิชำหนึ่ง ทำงควำมสัมพันธ์ระหว่ำงประเทศ,
                              ทำงกำรระหว่ำงประเทศและกำรทูต, ทำงกำรเมืองและกำรระหว่ำงประเทศ,
                              ทำงเอเชียศึกษำ, ทำงเอเชียตะวันออกเฉียงใต้ศึกษำ, ทำงอำเซียนศึกษำ
                            </td>
                            <td class="text-left"> มีคุณวุฒิปริญญำตรี สำขำวิชำรัฐศำสตร์  </td> 
                            <td class="text-center"> ชำยหรือหญิง  </td>
                            <td class="text-center">  กรุงเทพฯ  </td>
                            <td class="text-left"> อาจารย์ </td>  
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr> 
                            <td class="text-center"> DOF-01</td>
                            <td class="text-center"> 101310  </td>
                            <td >   
                            ปริญญำโท ในสำขำวิชำใดวิชำหนึ่ง ทำงควำมสัมพันธ์ระหว่ำงประเทศ,
                              ทำงกำรระหว่ำงประเทศและกำรทูต, ทำงกำรเมืองและกำรระหว่ำงประเทศ,
                              ทำงเอเชียศึกษำ, ทำงเอเชียตะวันออกเฉียงใต้ศึกษำ, ทำงอำเซียนศึกษำ
                            </td>
                            <td class="text-left"> มีคุณวุฒิปริญญำตรี สำขำวิชำรัฐศำสตร์  </td> 
                            <td class="text-center"> ชำยหรือหญิง  </td>
                            <td class="text-center">  กรุงเทพฯ  </td>
                            <td class="text-left"> อาจารย์ </td>  
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr> 
                            <td class="text-center"> DOF-01</td>
                            <td class="text-center"> 101310  </td>
                            <td >   
                            ปริญญำโท ในสำขำวิชำใดวิชำหนึ่ง ทำงควำมสัมพันธ์ระหว่ำงประเทศ,
                              ทำงกำรระหว่ำงประเทศและกำรทูต, ทำงกำรเมืองและกำรระหว่ำงประเทศ,
                              ทำงเอเชียศึกษำ, ทำงเอเชียตะวันออกเฉียงใต้ศึกษำ, ทำงอำเซียนศึกษำ
                            </td>
                            <td class="text-left"> มีคุณวุฒิปริญญำตรี สำขำวิชำรัฐศำสตร์  </td> 
                            <td class="text-center"> ชำยหรือหญิง  </td>
                            <td class="text-center">  กรุงเทพฯ  </td>
                            <td class="text-left"> อาจารย์ </td>  
                            <td class="text-center"> 1 </td>
                          </tr> 
                          <tr> 
                            <td class="text-center"> DOF-01</td>
                            <td class="text-center"> 101310  </td>
                            <td >   
                            ปริญญำโท ในสำขำวิชำใดวิชำหนึ่ง ทำงควำมสัมพันธ์ระหว่ำงประเทศ,
                              ทำงกำรระหว่ำงประเทศและกำรทูต, ทำงกำรเมืองและกำรระหว่ำงประเทศ,
                              ทำงเอเชียศึกษำ, ทำงเอเชียตะวันออกเฉียงใต้ศึกษำ, ทำงอำเซียนศึกษำ
                            </td>
                            <td class="text-left"> มีคุณวุฒิปริญญำตรี สำขำวิชำรัฐศำสตร์  </td> 
                            <td class="text-center"> ชำยหรือหญิง  </td>
                            <td class="text-center">  กรุงเทพฯ  </td>
                            <td class="text-left"> อาจารย์ </td>  
                            <td class="text-center"> 1 </td>
                          </tr> 

                        </tbody>
                      </table>

                    </div>
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
  <script src="../../Controllers/planManpowerController.js"></script>
  <script type="text/javascript">
    $(document).ready(function() { 

      $("#planManTypeId").change(function(){
        // alert( $(this).val() );
         $('.tb1').addClass('hidden');

         $('#planManTypeId2').addClass('hidden'); 
         if( $(this).val() == 1 || $(this).val() == 0){
            $('#planManpowerTable1').removeClass('hidden');
         }else if( $(this).val() ==2 ){ 
            $('#planManTypeId2').removeClass('hidden'); 
            $('#planManpowerTable2').removeClass('hidden'); 
         }else if( $(this).val() == 3 ) {
            $('#planManpowerTable4').removeClass('hidden');
         }

      });

      $("#planManTypeId2").change(function(){
        $('.tb1').addClass('hidden');
         if( $(this).val() ==22 ){
            $('#planManpowerTable3').removeClass('hidden'); 
          }else{
            $('#planManpowerTable2').removeClass('hidden'); 
          }
      });


    }); 
  </script>
  