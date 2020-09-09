<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url("assets/template/") ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/template/") ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
      <li class="nav-item">
        <div class="user-panel d-flex">
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
          <div class="image">
            <img src="<?= base_url("assets/template/") ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url("assets/template/") ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Main</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">System</li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-list"></i>
              <p>JTM</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Gangguan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Sampling</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Gardu</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Ganggu/Manajemen Trafo</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="inspeksi.php" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Sampling</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>JTR</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Gangguan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Sampling</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>SR</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Gangguan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Inspeksi</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>SLD</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Statement</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Aset Distribusi</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Permintaan Material</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring Materal</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Input Aset</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>MDU</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Non-MDU</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>WO</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Input WO</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Pekerjaan Distribusi</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengajuan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengesahan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Tindak Lanjut</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Jadwal</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Laporan Distribusi</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Teknik</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Yantek</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Berita Acara</p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengajuan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Pengesahan</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link ">
                  <i class="fas fa- nav-icon"></i>
                  <p>Monitoring</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">System</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>

                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div> -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url("assets/template/") ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/template/") ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/template/") ?>dist/js/adminlte.min.js"></script>
</body>
</html>
