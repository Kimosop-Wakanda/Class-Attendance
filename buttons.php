  <?php
    include_once 'fetchunits.php';
    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Unit Registration</title>

      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <link rel="stylesheet" href="units.css">
      <link rel="stylesheet" href="home.css">

  </head>

  <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                  <div class="sidebar-brand-icon rotate-n-15">
                      <i class="fas fa-book"></i>
                  </div>
                  <div class="sidebar-brand-text mx-3">Class Attendance</div>
              </a>

              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Nav Item - Dashboard -->
              <li class="nav-item">
                  <a class="nav-link" href="index.html">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                  Interface
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item active">
                  <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                      <i class="fas fa-fw fa-cog"></i>
                      <span>Register units and Mark Attendance</span>
                  </a>
                  <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                      <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Custom Components:</h6>
                          <a class="collapse-item active" href="buttons.html">Register Units</a>
                          <a class="collapse-item" href="utilities-color.php">Mark Attendance</a>
                      </div>
                  </div>
              </li>

              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                      <i class="fas fa-fw fa-wrench"></i>
                      <span>Utilities</span>
                  </a>
                  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                      <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Utilities:</h6>
                          <a class="collapse-item" href="cards.html">Notification</a>
                          <a class="collapse-item" href="utilities-border.html">Contact</a>
                          <a class="collapse-item" href="utilities-animation.html">About Us</a>
                          <a class="collapse-item" href="utilities-other.html">Other</a>
                      </div>
                  </div>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                  logins
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                      <i class="fas fa-fw fa-folder"></i>
                      <span>Pages</span>
                  </a>
                  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                      <div class="bg-white py-2 collapse-inner rounded">
                          <h6 class="collapse-header">Login Screens:</h6>
                          <a class="collapse-item" href="login.html">Login</a>
                          <a class="collapse-item" href="register.html">Register</a>
                          <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                          <div class="collapse-divider"></div>

                      </div>
                  </div>
              </li>


              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">

              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                  <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>

          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">


                  <!-- Topbar -->
                  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                      <!-- Sidebar Toggle (Topbar) -->
                      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                          <i class="fa fa-bars"></i>
                      </button>

                      <!-- Topbar Search -->
                      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                          <div class="input-group">
                              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                  <button class="btn btn-primary" type="button">
                                      <i class="fas fa-search fa-sm"></i>
                                  </button>
                              </div>
                          </div>
                      </form>

                      <!-- Topbar Navbar -->
                      <ul class="navbar-nav ml-auto">

                          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                          <li class="nav-item dropdown no-arrow d-sm-none">
                              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-search fa-fw"></i>
                              </a>
                              <!-- Dropdown - Messages -->
                              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                  <form class="form-inline mr-auto w-100 navbar-search">
                                      <div class="input-group">
                                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                          <div class="input-group-append">
                                              <button class="btn btn-primary" type="button">
                                                  <i class="fas fa-search fa-sm"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </li>

                          <!-- Nav Item - Alerts -->

                          <li class="nav-item dropdown no-arrow mx-1">
                              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-bell fa-fw"></i>
                                  <!-- Counter - Alerts -->
                                  <span class="badge badge-danger badge-counter">3+</span>
                              </a>
                              <!-- Dropdown - Alerts -->
                              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                  <h6 class="dropdown-header">
                                      Notifications
                                  </h6>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="mr-3">
                                          <div class="icon-circle bg-primary">
                                              <i class="fas fa-file-alt text-white"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="small text-gray-500">March 30, 2022</div>
                                          <span class="font-weight-bold">Distributed Manageent systems online cat.</span>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="mr-3">
                                          <div class="icon-circle bg-success">
                                              <i class="fas fa-donate text-white"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="small text-gray-500">March 22, 2022</div>
                                          Sit in cat - Operations Research
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="mr-3">
                                          <div class="icon-circle bg-warning">
                                              <i class="fas fa-exclamation-triangle text-white"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="small text-gray-500">Feb 28, 2022</div>
                                          Research Methodology project presentation
                                      </div>
                                  </a>
                                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                              </div>
                          </li>

                          <!-- Nav Item - Messages -->
                          <li class="nav-item dropdown no-arrow mx-1">
                              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-envelope fa-fw"></i>
                                  <!-- Counter - Messages -->
                                  <span class="badge badge-danger badge-counter">7</span>
                              </a>
                              <!-- Dropdown - Messages -->
                              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                  <h6 class="dropdown-header">
                                      Message Center
                                  </h6>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                          <div class="status-indicator bg-success"></div>
                                      </div>
                                      <div class="font-weight-bold">
                                          <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                          <div class="small text-gray-500">Emily Fowler · 58m</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                          <div class="status-indicator"></div>
                                      </div>
                                      <div>
                                          <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                          <div class="small text-gray-500">Jae Chun · 1d</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                          <div class="status-indicator bg-warning"></div>
                                      </div>
                                      <div>
                                          <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                          <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                          <div class="status-indicator bg-success"></div>
                                      </div>
                                      <div>
                                          <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                          <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                              </div>
                          </li>


                          <!-- Nav Item - Messages -->


                          <div class="topbar-divider d-none d-sm-block"></div>

                          <!-- Nav Item - User Information -->
                          <li class="nav-item dropdown no-arrow">
                              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kimosop</span>
                                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                              </a>
                              <!-- Dropdown - User Information -->
                              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                  <a class="dropdown-item" href="#">
                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                  </a>
                                  <a class="dropdown-item" href="#">
                                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                  </a>
                                  <a class="dropdown-item" href="#">
                                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                  </a>
                              </div>
                          </li>

                      </ul>

                  </nav>
                  <!-- End of Topbar -->

                  <div class="units">

                      <h4>Please select the Units you would like to register <br> and then submit: </h4>

                      <div class="selecting">

                          <?php
                            $sql = "SELECT * FROM unitoffer where id= 2;";
                            $result = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($result);


                            if ($resultcheck > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                  Units for
                                  <?php echo $row['year']; ?>

                                  <br> <br> <input type="checkbox" name="">
                                  <?php echo $row['unit1']; ?>

                                  <br> <input type="checkbox" name="">
                                  <?php echo $row['unit2']; ?>

                                  <br> <input type="checkbox" name="">
                                  <?php echo $row['unit3']; ?>

                                  <br> <input type="checkbox" name="">
                                  <?php echo $row['unit4']; ?>

                                  <br> <input type="checkbox" name="">
                                  <?php echo $row['unit5']; ?>

                                  <br> <input type="checkbox" name="">
                                  <?php echo $row['unit6']; ?>

                                  <br> <input type="checkbox" name="">
                                  <?php echo $row['unit7']; ?>

                                  <br> <br> <input type="submit">

                          <?php
                                }
                            }
                            ?>
                      </div>
                  </div>
                  <!-- <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <form action="regs.php" method="POST">
                                <div class="card-header">
                                    <h3>Register Units</h3>
                                    <button>See all <span class="las la-arrow-right"></span> </button>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <thead>
                                            <tr>
                                                <td>Unit Name</td>
                                                <td>Code</td>
                                                <td>Register Unit</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Research Methodology</td>
                                                <td>CCS 3353</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox" name="unit" value="Research_Methodology">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Application</td>
                                                <td>CCS 3354</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Programming Languages</td>
                                                <td>CIT 3350</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Simulation and Modelling</td>
                                                <td>SMS 3450</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Artificial Intelligence</td>
                                                <td>CCS 3350</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Distributed Systems</td>
                                                <td>CCS 3351</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Operations Research</td>
                                                <td>CCS 3356</td>
                                                <td>
                                                    <span class="status"></span>
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button class="reg">Register</button>
                            </form>
                        </div>
               </div>
        </div> -->
                  <!-- End of Main Content -->
              </div>
              <!-- End of Content Wrapper -->
              <!-- Footer -->
              <footer class="sticky-footer bg-white">
                  <div class="container my-auto">
                      <div class="copyright text-center my-auto">
                          <span>Copyright &copy; Class Attendance 2022</span>
                      </div>
                  </div>
              </footer>
              <!-- End of Footer -->

          </div>
          <!-- End of Page Wrapper -->

          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
          </a>

          <!-- Logout Modal-->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          <a class="btn btn-primary" href="login.html">Logout</a>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Bootstrap core JavaScript-->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <!-- Core plugin JavaScript-->
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

          <!-- Custom scripts for all pages-->
          <script src="js/sb-admin-2.min.js"></script>

  </body>

  </html>