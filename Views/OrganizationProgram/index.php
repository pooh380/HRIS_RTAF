<!-- header -->
<?php include '../include/header.php'; ?>



<!-- menu -->
<?php include '../include/menu.php'; ?>

<!-- <div class="app-content content">
    <div class="content-wrapper">
        <div id="login" align="center">
            <div id="left">
                <div id="picLogin">
                    <img src="../../Asset/Images/Login1.png" width="750px;" height="500px;">
                </div>
                <div id="hris">
                    <img src="../../Asset/Images/hris.png" alt="" width="300px;">
                </div>
            </div>

            <div id="right">
                <div id="square"></div>
                <p id="textTitle">โปรแกรมจัดการโครงสร้าง</p>
                <br><br>
                <div id=loginForm>
                    <form id="loginAjax" method="post">
                        <div class="form-group">
                            <label id="usernameForm">โครงสร้าง:</label>
                            <select class="select2 form-control block" id="Input1">
                                <option value="โครงสร้างอัตราทอ.52">โครงสร้างอัตราทอ.52</option>
                                <option value="โครงสร้างอื่นๆ">โครงสร้างอื่นๆ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label id="passwordForm">หน่วยกำลังพล: </label>
                            <select class="select2 form-control block" id="Input2">
                                <option value="โครงสร้างอัตราทอ.52">หน่วย</option>
                                <option value="โครงสร้างอื่นๆ">โครงสร้างอื่นๆ</option>
                            </select>
                        </div>
                        <button type="submit" class="btn" onclick="login()">ค้นหา</button>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row full-height-vh-with-nav">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-10">
                        <img class="img-fluid mx-auto d-block pb-3 pt-4 width-65-per" src="../../../app-assets/images/logo/logo-dark-lg.png" alt="Modern Search">
                        <fieldset class="form-group position-relative">

                            <div class="row">
                                <div class="form-group col-lg-6 ">
                                    <label id="usernameForm">โครงสร้าง:</label>
                                    <select class="select2 form-control block" id="organization">
                                        <option value="โครงสร้างอัตราทอ.52">โครงสร้างอัตราทอ.52</option>
                                        <option value="โครงสร้างอื่นๆ">โครงสร้างอื่นๆ</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label id="passwordForm">หน่วยกำลังพล: </label>
                                    <select class="select2 form-control block" id="group">
                                        <option value="โครงสร้างอัตราทอ.52">หน่วย</option>
                                        <option value="โครงสร้างอื่นๆ">โครงสร้างอื่นๆ</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>



                        <div class="row py-2">
                            <div class="col-12 text-center">
                                <a href="search-website.html" class="btn btn-primary btn-md"><i class="ft-search"></i> Modern Search</a>
                                <span class="dropdown">
                                    <button id="btnSearchDrop" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning  btn-md dropdown-toggle dropdown-menu-right"><i class="la la-cog"></i> Advanced search</button>
                                    <button type="submit" class="btn" onclick="search()">ค้นหา</button>
                                    <span aria-labelledby="btnSearchDrop" class="dropdown-menu mt-1 dropdown-menu-right">
                                        <a href="search-website.html" class="dropdown-item"><i class="ft-globe"></i> Web</a>
                                        <a href="search-images.html" class="dropdown-item"><i class="la la-file-image-o"></i> Images</a>
                                        <a href="search-videos.html" class="dropdown-item"><i class="ft-video"></i> Videos</a>
                                        <a href="search-maps.html" class="dropdown-item"><i class="la la-map-o"></i> Maps</a>
                                        <span class="dropdown-divider block"></span>
                                        <a href="search-maps.html" class="dropdown-item"><i class="la la-smile-o"></i> I'm Feeling Lucky</a>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                    <span class="la la-facebook"></span>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                                    <span class="la la-twitter"></span>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                                    <span class="la la-linkedin font-medium-4"></span>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                                    <span class="la la-github font-medium-4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</head>

<script src="../../Controllers/indeOrganizationsProgram"></script>
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- footer -->
<?php include '../include/footer.php'; ?> 