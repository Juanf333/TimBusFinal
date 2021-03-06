<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="../images/logo.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="Ask online Form" />
    <meta
      name="description"
      content="Vanchi is a Material unique admin template built with tiles concept. It comes with Different dashboard layouts, fully responsive HTML pages and, colorful widgets."
    />
    <meta
      name="keywords"
      content="mobilewebdevelopment,HTML, CSS, JavaScript,Material,js,Forum ,webdesign ,website ,web ,webdesigner ,webdevelopment,Template,admin,dashboard,ebsitedesig,themeym,radwanweb,frontend-with-radwan"
    />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <title>timbus</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="../css/fontawesome-all.min.css" />
    <link href="../css/materil.css" rel="stylesheet" />
    <link href="../css/custom.css" rel="stylesheet" />
    <link href="../css/responsive.css" rel="stylesheet"/>
  </head>

  <body class="">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="orange"
        data-background-color="white"
        data-image=""
      >
        <div class="logo">
           <a href="./index.html" class="simple-text logo-normal">
            <img src="../images/champaña.jpg" alt="usuario" />
           </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">

            <li class="nav-item">
              <a class="nav-link" href="./index.html">
                <img class="mr-2" src="../img/ic_view_quilt_24px.png" />
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="perfil_Institucion.html">
                <img class="mr-2" src="../img/Group 1380.png" />
                Perfil
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="ruta_institucion.html">
                <img class="mr-2" src="../bootstrap-icons/truck.svg"/>
                Ruta
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="empresas_transporte.html">
                <img class="mr-2" src="../bootstrap-icons/building.svg" />
                Empresas Transporte
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inscripcionTransporte.html">
                <img class="mr-2" src="../bootstrap-icons/pencil-fill.svg" />
                Inscripcion al Transporte
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pagoTransporte.html">
                <img class="mr-2" src="../bootstrap-icons/cash-coin.svg" />
                Pago
              </a>
            </li>

           
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="
            navbar navbar-expand-lg navbar-transparent navbar-absolute
            fixed-top 
          "
        >
          <div class="container-fluid padi">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:;">Champagnat</a>
            </div>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse">

              <form class="navbar-form">
                <!-- <div class="input-group custom-input no-border"> -->
                  <!-- <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder=""
                  /> -->
                  <!-- <button
                    type="submit"
                    class="btn btn-danger btn-round btn-just-icon"
                  >
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button> -->
                <!-- </div> -->
              </form>

              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="http://example.com"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">notifications</i>
                    <span class="notification">3</span>
                    <p class="d-lg-none d-md-block">Some Actions</p>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="#"
                      >Champagnat email</a
                    >
                    <a class="dropdown-item" href="#">Ruta Pendiente</a>
                    <a class="dropdown-item" href="#"
                      >Pago Trabsporte 01-12-2021</a
                    >
                    <a class="dropdown-item" href="#">Alerta cambio de ruta</a>
                    <a class="dropdown-item" href="#">Mas</a>
                  </div>
                </li>


                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="javascript:;"
                    id="navbarDropdownProfile"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">Account</p>
                    <span class="hide-arrow-admin-text">
                      Champagnat
                      <i class="material-icons">arrow_drop_down</i>
                    </span>
                  </a>

                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownProfile"
                  >
                    <a class="dropdown-item" href="user-profile.html">Perfil</a>
                    <a class="dropdown-item" href="#">Configuraciones</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../index.html">Log out</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->


        <div class="content"> 
          <div class="container-fluid">
            <div class="row">
              <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <img src="./img/Group 1381.png" alt="building" />
                    </div>
                    <p class="card-category">Total Floor</p>
                    <h3 class="card-title">81</h3>
                  </div>

                  <div class="card-body">
                    <div class="stats">
                      <div class="progress" style="height: 4px">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 65%"
                          aria-valuenow="65"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <article class="d-flex">
                <div class="card p-3 mb-2 bg-warning text-dark" style="width: 18rem;">
                  <img src="../images/conductor.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card Conductor</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                      content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div><br></br>
            
                <div class="card p-3 mb-2 bg-info text-dark"" style=" width: 18rem;">
                  <img src="../images/institucion.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card Institucion</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                      content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div><br></br>
            
                <div class="card p-3 mb-2 bg-secondary text-dark" style="width: 18rem;">
                  <img src="../images/empresa.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card Empresa</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                      content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div><br></br>
            
                <div class="card p-3 mb-2 bg-warning text-dark" style="width: 18rem;">
                  <img src="../images/escolar4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card Estudiantes</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                      content.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div><br></br>
            
              </article>

              <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <img src="./img/Group 1382.png" alt="building" />
                    </div>
                    <p class="card-category">Total Unit</p>
                    <h3 class="card-title">45</h3>
                  </div>
                  <div class="card-body">
                    <div class="stats">
                      <div class="progress" style="height: 4px">
                        <div
                          class="progress-bar bg-success"
                          role="progressbar"
                          style="width: 65%"
                          aria-valuenow="65"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                      <img src="./img/Group 1324.png" alt="building" />
                    </div>
                    <p class="card-category">Tatal Tenant</p>
                    <h3 class="card-title">1</h3>
                  </div>
                  <div class="card-body">
                    <div class="stats">
                      <div class="progress" style="height: 4px">
                        <div
                          class="progress-bar bg-danger"
                          role="progressbar"
                          style="width: 65%"
                          aria-valuenow="65"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <img src="./img/Group 1383.png" alt="building" />
                    </div>
                    <p class="card-category">Family Head</p>
                    <h3 class="card-title">1</h3>
                  </div>
                  <div class="card-body">
                    <div class="stats">
                      <div class="progress" style="height: 4px">
                        <div
                          class="progress-bar bg-info"
                          role="progressbar"
                          style="width: 65%"
                          aria-valuenow="65"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->


            </div>

            <div class="row">

              <!-- <div class="col-lg-8 col-md-12">
                <div class="card">
                  <div
                    class="card-header card-header-primary custom-card-height"
                  >
                    <div class="float-left">
                      <a
                        ><span class="material-icons custom-material-icon">
                          person </span
                        ><span>Flat Owner</span></a
                      >
                    </div>
                    <div class="text-right">
                      <h4 class="card-title">Total Owner</h4>
                      <p class="card-category">81</p>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>+880 00000 0000000</td>
                          <td>444, South Paikpara, Mirpur, Dhaka</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>+880 00000 0000000</td>
                          <td>444, South Paikpara, Mirpur, Dhaka</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>+880 00000 0000000</td>
                          <td>444, South Paikpara, Mirpur, Dhaka</td>
                        </tr>

                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>+880 00000 0000000</td>
                          <td>444, South Paikpara, Mirpur, Dhaka</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>+880 00000 0000000</td>
                          <td>444, South Paikpara, Mirpur, Dhaka</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> -->

              <!-- <div class="col-lg-4 col-md-12">
                <div class="custom-account-card card">
                  <div
                    class="card-header card-header-warning custom-card-height"
                  >
                    <div class="float-left">
                      <a
                        ><span class="material-icons custom-material-icon">
                          person </span
                        >Account Summary</a
                      >
                    </div>
                  </div>
                  <div class="card-body">
                    <div
                      class="progress custom-progress mx-auto"
                      data-value="80"
                    >
                      <span class="progress-left">
                        <span
                          class="
                            progress-bar
                            account-progress-bar
                            border-info
                            bg-gray-white
                          "
                        ></span>
                      </span>
                      <span class="progress-right">
                        <span
                          class="
                            progress-bar
                            account-progress-bar
                            border-info
                            bg-gray-white
                          "
                        ></span>
                      </span>
                      <div
                        class="
                          progress-value
                          w-100
                          h-100
                          rounded-circle
                          d-flex
                          align-items-center
                          justify-content-center
                        "
                      >
                        <div class="h5 font-weight-bold text-center">
                          6565.00<br />Totatl Due
                        </div>
                      </div>
                    </div>
                    <!-- Demo info -->

                    <!-- <div class="row text-center mt-4">
                      <div class="col-6 border-right">
                        <div class="p mb-0 bullet">Current Month Due</div>
                        <span class="small text-gray">18,570</span>
                      </div>
                      <div class="col-6">
                        <div class="p mb-0 bullet">Current Month Paid</div>
                        <span class="small text-gray">31,430</span>
                      </div>
                    </div> -->
                    <!-- END -->
                  </div>
                </div>
              </div> -->
              
            </div>

            <!-- <div class="row">
              <div class="col-md-12">
                <div class="card custom-user-info-card">
                  <div class="card-header card-header-danger">
                    <div class="float-left">
                      <a
                        ><span class="material-icons custom-material-icon">
                          person </span
                        ><span>Tenant</span></a
                      >
                    </div>
                    <div class="float-right">
                      <div class="user-profile-nav">
                        <div class="searchbar">
                          <input
                            class="search_input"
                            type="text"
                            name=""
                            placeholder="Search..."
                          />
                          <a href="#" class="search_icon"
                            ><i class="material-icons">search</i></a
                          >
                        </div>
                        <div class="btn-add-group">
                          <button type="submit" class="btn btn-white">
                            <span class="material-icons add-icon">
                              add_box
                            </span>
                            Add New
                          </button>
                          <button type="submit" class="btn btn-white">
                            <span class="material-icons add-icon">
                              picture_as_pdf
                            </span>
                            PDF
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body custom-user-table-data">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-danger">
                          <th style="width: 5%">Photo</th>
                          <th style="width: 20%">Name</th>
                          <th style="width: 22%">Flat</th>
                          <th style="width: 10%">Unit</th>
                          <th style="width: 20%">Flat Owner</th>
                          <th style="width: 15%">Head Of Family</th>
                          <th style="width: 20%">Contact</th>
                          <th style="width: 10%">Gender</th>
                          <th style="width: 10%" class="text-center">Action</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img
                                class="circle"
                                src="./img/19.png"
                                alt="user"
                              />
                            </td>
                            <td>Kumar Chandra Baura</td>
                            <td>Mohmmad Kamrul Hasan</td>
                            <td>ICT</td>
                            <td>Mohmmad Kamrul Hasan</td>
                            <td>Md.Matin</td>
                            <td>+880 00000 0000000</td>
                            <td>Female</td>
                            <td class="text-primary">
                              <div class="action-btn-group float-right d-flex">
                                <button
                                  type="button"
                                  class="
                                    custom-action-btn
                                    btn btn-primary
                                    mr-2
                                    edit-btn
                                  "
                                >
                                  Edit
                                </button>
                                <button
                                  type="button"
                                  class="
                                    custom-action-btn
                                    btn btn-danger
                                    delete-btn
                                  "
                                >
                                  Delete
                                </button>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img
                                class="circle"
                                src="./img/19.png"
                                alt="user"
                              />
                            </td>
                            <td>Kumar Chandra Baura</td>
                            <td>Mohmmad Kamrul Hasan</td>
                            <td>ICT</td>
                            <td>Mohmmad Kamrul Hasan</td>
                            <td>Md.Matin</td>
                            <td>+880 00000 0000000</td>
                            <td>Female</td>
                            <td class="text-primary">
                              <div class="action-btn-group float-right d-flex">
                                <button
                                  type="button"
                                  class="
                                    custom-action-btn
                                    btn btn-primary
                                    mr-2
                                    edit-btn
                                  "
                                >
                                  Edit
                                </button>
                                <button
                                  type="button"
                                  class="
                                    custom-action-btn
                                    btn btn-danger
                                    delete-btn
                                  "
                                >
                                  Delete
                                </button>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->


          </div>
        </div>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap-material-design.min.js"></script>
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../js/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../js/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../js/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../js/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../js/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../js/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../js/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../js/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../js/fullcalendar.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../js/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="../js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../js/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script
      src="../js/material-dashboard.min.js?v=2.1.2"
      type="text/javascript"
    ></script>
    <script src="../js/main.js"></script>

    <script>
      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $(".sidebar");

          $sidebar_img_container = $sidebar.find(".sidebar-background");

          $full_page = $(".full-page");

          $sidebar_responsive = $("body > .navbar-collapse");

          window_width = $(window).width();

          fixed_plugin_open = $(
            ".sidebar .sidebar-wrapper .nav li.active a p"
          ).html();

          if (window_width > 767 && fixed_plugin_open == "Dashboard") {
            if ($(".fixed-plugin .dropdown").hasClass("show-dropdown")) {
              $(".fixed-plugin .dropdown").addClass("open");
            }
          }

          $(".fixed-plugin a").click(function (event) {
            if ($(this).hasClass("switch-trigger")) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $(".fixed-plugin .active-color span").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-color", new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr("filter-color", new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr("data-color", new_color);
            }
          });

          $(".fixed-plugin .background-color .badge").click(function () {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("background-color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-background-color", new_color);
            }
          });

          $(".fixed-plugin .img-holder").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).parent("li").siblings().removeClass("active");
            $(this).parent("li").addClass("active");

            var new_image = $(this).find("img").attr("src");

            if (
              $sidebar_img_container.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              $sidebar_img_container.fadeOut("fast", function () {
                $sidebar_img_container.css(
                  "background-image",
                  'url("' + new_image + '")'
                );
                $sidebar_img_container.fadeIn("fast");
              });
            }

            if (
              $full_page_background.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $full_page_background.fadeOut("fast", function () {
                $full_page_background.css(
                  "background-image",
                  'url("' + new_image_full_page + '")'
                );
                $full_page_background.fadeIn("fast");
              });
            }

            if ($(".switch-sidebar-image input:checked").length == 0) {
              var new_image = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .attr("src");
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css(
                "background-image",
                'url("' + new_image + '")'
              );
            }
          });

          $(".switch-sidebar-image input").change(function () {
            $full_page_background = $(".full-page-background");

            $input = $(this);

            if ($input.is(":checked")) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn("fast");
                $sidebar.attr("data-image", "#");
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn("fast");
                $full_page.attr("data-image", "#");
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr("data-image");
                $sidebar_img_container.fadeOut("fast");
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr("data-image", "#");
                $full_page_background.fadeOut("fast");
              }

              background_image = false;
            }
          });

          $(".switch-sidebar-mini input").change(function () {
            $body = $("body");

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $("body").removeClass("sidebar-mini");
              md.misc.sidebar_mini_active = false;

              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
            } else {
              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                "destroy"
              );

              setTimeout(function () {
                $("body").addClass("sidebar-mini");

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event("resize"));
            }, 180);

            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });
        });
      });
    </script>
  </body>
</html>
