 <?php  
 include("../koneksi.php"); 
session_start();
if (empty($_SESSION['status_login'])) {
  header("location:../login");
}

  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI LULUS</title>
  <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
     <a href="index.php" class="brand-link">
      <center>
        
    <!-- Brand Logo -->
        <?php
  // Load file koneksi.php
  include "../koneksi.php";

  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = mysqli_fetch_array($sql)){

       echo "<td><img src='images/".$data['foto']."' width='50' height='50'></td>";
           }?>
             <br> <br><h4>SI LULUS </h4>
          
 <?php
  // Load file koneksi.php
  include "../koneksi.php";

  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

  while($data = mysqli_fetch_array($sql)){


     echo "<p>".$data['sekolah']."</p>";
     }?>
   </span>
</center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         
        </div>
        
     
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

    <li class="nav-item has-treeview menu-open">
           <li class="nav-item">
            <a href="index.php" class="nav-link active " >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Data Peserta Didik
              </p>
            </a>
            </li>

     

          <li class="nav-item has-treeview menu-open">
           <li class="nav-item">
          <a href="profil.php" class="nav-link" >
              <i class="nav-icon fas fa-home"></i>
              <p>Profil Sekolah
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
           <li class="nav-item">
            <a href="logout.php" class="nav-link" >
              <i class="nav-icon fas fa-door-open "></i>
              <p>Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kelulusan Peserta Didik</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambahkan Data Peserta Didik</h3>
               <br>
              <a class="btn btn-primary " href="add.php" role="button" >Tambah Data </a>  
            </div>
 
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-hover text-center table-responsive-sm">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Lengkap</th>
                  <th>NISN</th>
                  <th>Kelas</th>
                       <th>Angkatan</th>
                   <th>Keterangan</th>
                 <th>Edit</th>
                   <th>Hapus</th>
                  
                </tr>
                </thead>
                <tbody>
                   <?php  
            include "../koneksi.php";
  $no=1;
  $query = "SELECT * FROM daftar"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
   echo "<td>".$no++."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['nisn']."</td>";
    echo "<td>".$data['kelas']."</td>";
    echo "<td>".$data['angkatan']."</td>";
    echo "<td>".$data['ket']."</td>";
  
     echo "<td><a class='btn btn-primary' href='edit.php?id=".$data['id']."' role='button' >Edit </a></td>"; 
     echo "<td><a class='btn btn-danger' href='hapus.php?id=".$data['id']."' role='button' >Hapus </a></td>"; 
    

    echo "</tr>";
    }
  ?>
               
                </tfoot>
              </table>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>    <strong>tim Coding@ Luthfi,Mubin,Salim,Mabsur | Ilmu Komputer</strong>
   
    </div>
  </footer>

  <!-- Control Sidebar -->
 
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
