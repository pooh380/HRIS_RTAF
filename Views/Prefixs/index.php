  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <section>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">คำนำหน้า</h3>
        </div>
      </div>
      <div class="content-body">
        <!-- Checkbox selection -->
        <section id="checkbox">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- <div class="card-header"> -->
                  <!-- <h4 class="card-title">Checkbox selection</h4> -->
                  <!-- <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a> -->
                  <!-- <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                  </div> -->
                <!-- </div> -->
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <p class="card-text"></p>
                    <table class="table table-striped table-bordered responsive dataex-select-checkbox" style="width:100%;">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Salary</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td>Cara Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>$145,600</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Hermione Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>$356,250</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Lael Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>$103,500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Jonas Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>$86,500</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Shad Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Michael Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>$183,000</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Donna Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>$112,000</td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th></th>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Checkbox selection -->
      </div>
    </div>
  </div>
  </section>
  
  <!-- datatables -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  

  <script type="text/javascript">
    $(document).ready(function() {
            console.log("ready");
            change_autorefreshdiv();
    });

    function change_autorefreshdiv(){
      // $('#prefixPage').addClass('active');
}   
  </script>

    

  <!-- footer -->
  <?php include '../include/footer.php'; ?>