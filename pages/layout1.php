


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Nation Church</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
   <script src="../steps.js"></script>
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script src="js/datepickers.js"></script> -->




</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

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


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
   <a href="\church/MainDashboard.php?status=" class="brand-link">
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img src="../img/logo-black.png" alt="AdminLTE Logo"  style="opacity: .8; width:150px; height:120px;">
      <!-- <img src="../img/logo-center.png" alt="AdminLTE Logo"  style="opacity: .8; width:160px; height:80px;"> -->
      <span class="brand-text font-weight-light"> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->
<BR>
      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="\church/MainDashboard.php?status=" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul> -->
        </li>

          <li class="nav-item">
            <a href="\church/MainDashboard.php?status=add_believer" class="nav-link">
              <i class="fas fa-plus-square nav-icon"></i>
              <p>
                ADD BELIEVER
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="\church/pages/viewBelieversCrud/index.php" class="nav-link">
             <i class="fas fa-eye nav-icon"></i>
              <p>
               VIEW NEW COMER
              </p>
            </a>
          </li>


           <li class="nav-item">
            <a href="\church/pages/viewChurchBelievercard/index.php" class="nav-link">
            <i class="fas fa-binoculars nav-icon"></i>
              <p>
               VIEW CHURCH MEMBER
              </p>
            </a>
          </li>

              <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-clipboard nav-icon"></i>
              <p>
               REPORTS
               <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="\church/pages/Reportss/Report.php" class="nav-link active">
                 <i class="fas fa-filter nav-icon"></i>
                  <p>REPORT FILTER</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\church/pages/Reportss/re.php" class="nav-link">
                  <i class="fas fa-arrow-circle-down nav-icon"></i>
                  <p>REPORT DOWNLOAD</p>
                </a>
              </li>
            </ul>
          </li>

            <li class="nav-item">
            <a href="../back_up/back_up.php" class="nav-link">
              <i class="fas fa-arrow-circle-down nav-icon" ></i>
              <p>
                BACK-UP
              </p>
            </a>
          </li>

           <li class="nav-item align-text-bottom">
            <a href="../logout/logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>
                LOGOUT
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>















