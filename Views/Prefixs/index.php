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
        <!-- Description -->
        <section id="description" class="card">
          <div class="card-header">
            <h4 class="card-title">Description</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="card-text">
                <p>Modern Admin provides flexible navbar component, which allows you
                  to modify navbar colors, appearance of different types of content,
                  components placement etc. This page contain all navbar styling
                  options.
                </p>

                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Classes</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><code>.fixed-top</code></th>
                        <td>To set navbar fixed at top you need to add <code>.fixed-top</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="fixed-top.html" target="_blank">fixed-top.html</a>.</td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.fixed-bottom</code></th>
                        <td>To set navbar fixed at bottom you need to add <code>.fixed-bottom</code>                          class in navbar <code>&lt;nav&gt;</code> tag.</td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-static-top</code></th>
                        <td>Create a full-width navbar that scrolls away with the page
                          by adding <code>.navbar-static-top</code>. Unlike the <code>.navbar-fixed-*</code>                          classes, you do not need to change any padding on the <code>body</code>.</td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-brand-center</code></th>
                        <td>This class allow you to set navbar branding portion at center.
                          Add <code>.navbar-brand-center</code> class in navbar <code>&lt;nav&gt;</code>                          tag. For more information please check <a href="navbar-brand-center.html"
                          target="_blank">navbar-brand-center.html</a>. This is optional
                          class.
                        </td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-light</code></th>
                        <td> To set navbar light color you need to add <code>.navbar-light</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="navbar-light.html" target="_blank">navbar-light.html</a></td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-dark</code></th>
                        <td> To set navbar dark color you need to add <code>.navbar-dark</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="navbar-dark.html" target="_blank">navbar-dark.html</a></td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-semi-dark</code></th>
                        <td> To set navbar semi dark color you need to add <code>.navbar-semi-dark</code>                          class in navbar <code>&lt;nav&gt;</code> tag. For more
                          information please check <a href="navbar-semi-dark.html"
                          target="_blank">navbar-semi-dark.html</a></td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-border</code></th>
                        <td>You can add navbar border bottom by adding <code>.navbar-border</code>                          class in navbar <code>&lt;nav&gt;</code> tag. This navbar
                          class is optional.</td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.navbar-shadow</code></th>
                        <td>You can also apply navbar shadow bottom by adding <code>.navbar-shadow</code>                          class in navbar <code>&lt;nav&gt;</code> tag. This navbar
                          class is optional.</td>
                      </tr>
                      <tr>
                        <th scope="row"><code>.disabled</code></th>
                        <td>To disabled navbar menu item link, you need to add <code>.disabled</code>                          class in navigation
                          <code>&lt;li&gt;</code> tag. This navigation class is optional.
                          Fore more information please check <a href="vertical-disabled-navigation-link.html"
                          target="_blank">vertical-disabled-navigation-link.html</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Description -->
      </div>
    </div>
  </div>
  </section>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
            console.log("ready");
            change_autorefreshdiv()
    });
    function change_autorefreshdiv(){
      // $('#prefixPage').addClass('active');
}   
  </script>

  <!-- footer -->
  <?php include '../include/footer.php'; ?>