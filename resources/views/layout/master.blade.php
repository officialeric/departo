<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Departo - @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- login form css -->
  <link rel="stylesheet" href="/bootstrap-5/css/bootstrap.min.css">
   <link rel="stylesheet" href="/login.style.css">
     <!-- CSS -->
     <link rel="stylesheet" href="dist/css/style.css">
      <!-- Fontawesome CDN Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @auth
        <div class="wrapper">

           
        
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>
        
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
                </li>
        
                
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                    </a>
                </li> --}}
                </ul>
            </nav>
            <!-- /.navbar -->
        
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link  text-decoration-none">
                <img src="dist/img/departo.png" alt="departo Logo" class="brand-image img-circle "  >
                <span class="brand-text font-weight-medium">Departo CMS</span>
                </a>
        
                <!-- Sidebar -->
                <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                
        
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-3">
                    <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                    </div>
                </div>
        
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="/dashboard" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Staffs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-staff" class="nav-link">
                            <i class="fas fa-plus nav-icon"></i>
                            <p>Add Staff</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view-staff" class="nav-link">
                            <i class="far fa-list-alt nav-icon"></i>
                            <p>View Staff</p>
                            </a>
                        </li>                  
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Students
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-student" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add Student</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view-student" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View Students</p>
                            </a>
                        </li>
                    </li>
                    </ul>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>
                            Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-section" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view-section" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View Sections</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p>
                            Tasks
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-task" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add Task</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="view-task" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View Tasks</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-tag nav-icon"></i>
                        <p>
                            Roles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-role" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view-role" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View Roles</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fab fa-odnoklassniki-square nav-icon"></i>
                        <p>
                            Classes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-class" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add class</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view-class" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View classes</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>
                            Modules
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="/add-module" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add Module</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view-module" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View Modules</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="/issues" class="nav-link">
                        <i class="fas fa-box-tissue nav-icon"></i>
                        <p>
                            Issues
                            
                        </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/notification" class="nav-link">
                        <i class="fas fa-bell nav-icon"></i>
                        <p>
                            Notifications
                        </p>
                        </a>
                        
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-cog nav-icon"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview ml-3">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>                            
                                <p>Add Module</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                                <i class="far fa-list-alt nav-icon"></i>
                            <p>View Modules</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="/logout" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>
                            Log Out
                        </p>
                        </a>
                        
                    </li>

                    <div class="user-panel mt-5 pb-3 mb-3 d-flex">
                        <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                        <a href="/profile" class="d-block">Alexander Pierce</a>
                        </div>
                    </div>
                </nav>
                <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
        
        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="px-5 py-4">

                    @yield('content')

                </div>
            </div>
        <!-- /.content-wrapper -->

    </div>
    <footer class="main-footer text-center">
        <strong>&copy;  Departo  v1.0</strong>
        
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
<!-- ./wrapper -->
@else
<section class="background-radial-gradient overflow-hidden sect">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center my-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    LOG ME IN TO  <br />
                    <span style="color: hsl(218, 81%, 75%)">DEPARTO </span>
                </h1>
                <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                    Welcome to the College Department Activities Management System,
                    the central hub for orchestrating and optimizing the myriad 
                    activities that propel our academic departments forward. 
                    This cutting-edge software solution is finely tuned to enhance 
                    the efficiency and organization of all departmental operations, 
                    ensuring that students, faculty, and staff can focus on their 
                    core mission: education and research. 
                </p>
            </div>
    
            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
    
                <div class="card bg-glass">
                    <div class="card-body px-4 py-5 px-md-5">
                        <form action="/admin" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label fw-bolder" for="form3Example3">Email address</label>
                                <input type="email" name="loginemail" id="form3Example3" class="form-control" />
                            </div>
            
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label fw-bolder" for="form3Example4">Password</label>
                                <input type="password" name="loginpassword" id="form3Example4" class="form-control" />
                            </div>
            
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4 fw-bold">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endauth


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<<<<<<< HEAD
<!-- JavaScript -->
<script src="dist/js/script.js"></script>
=======
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
>>>>>>> c993be92509706b5141fc0ae5d28eaa9744cd846
</body>
</html>
