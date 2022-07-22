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
            <a href="index.php" class="nav-link  " >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Data Peserta Didik
              </p>
            </a>
            </li>

     

          <li class="nav-item has-treeview menu-open">
           <li class="nav-item">
          <a href="profil.php" class="nav-link active" >
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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Input Data Siswa</h3>
              </div>
              <!-- /.card-header -->
                <?php
  // Load file koneksi.php
  include "../koneksi.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM  daftar WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
              <!-- form start -->
              <form method="post" action="pedit.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <div class="card-body">             
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" autocomplete="off" required=""> 
                  </div>

             <div class="form-group">
                    <label for="exampleInputEmail1">NISN</label>
                    <input type="number" class="form-control" id="nisn" name="nisn" value="<?php echo $data['nisn']; ?>" autocomplete="off" > 
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Lulus Angkatan</label>
                    <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?php echo $data['angkatan']; ?>" autocomplete="off" > 
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <select class="form-control" id="ket" name="ket" value="<?php echo $data['ket']; ?>">
                   <option value="<?php echo $data['ket']; ?>"><?php echo $data['ket']; ?></option>
                      <option value="Lulus">Lulus</option>
                      <option value="Tidak Lulus">Tidak Lulus</option>

               
                    </select>
                  </div>   
                    
                    

<?php

  require_once '../koneksi.php';

  $query = "SELECT * FROM kelas ORDER BY id DESC";

  $result = mysqli_query($connect, $query);

 ?>
                   <div class="form-group">
                    <div class="col-md-12">
                    <label for="exampleInputEmail1">Kelas/ Jurusan</label>
 <select class="form-control" id="kelas" name="kelas" value="<?php echo $data['kelas']; ?>">
<option value="<?php echo $data['ket']; ?>"><?php echo $data['kelas']; ?></option>
   <?php while($data = mysqli_fetch_assoc($result) ){?>

    <option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>

   <?php } ?>

  </select>
</div>
</div>
                   
                
                    
                <div class="card-footer">
                  <button type="submit" value="Simpan" class="btn btn-primary">Ubah Data</button>
                  <a class="btn btn-danger " href="index.php" role="button" >Kembali </a>
                </div>
              </form>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>tim Coding @Luthfi,@Mubin,@Salim,@Mabsur | Ilmu Komputer</strong>
   
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

</body>
</html>
