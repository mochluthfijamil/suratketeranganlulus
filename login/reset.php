 <?php  
 include("../koneksi.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login SI LULUS </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon1.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form" action="" method="GET">
					<center><?php
  // Load file koneksi.php
  include "../koneksi.php";
  
  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){
   
   

    echo "<td><img src='../admin/images/".$data['foto']."' width='100' height='100'></td>"; 
            }?>
            <br>
            <?php
  // Load file koneksi.php
  include "../koneksi.php";
  
  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){
   
   
 echo "<p>".$data['sekolah']."</p>"; 
            }?> </center>
					<span class="login100-form-title p-b-43">
						Aplikasi SI LULUS
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Masukan Token">
						<input class="input100" type="number" name="no" autocomplete="off">
						<span class="focus-input100"></span>
						<span class="label-input100">Masukan Token Untuk Reset</span>
					</div>
					
					
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							
							
						</div>

						<div>
							<a href="index.php" class="txt1">
								Kembali Login 
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Tampilkan Sandi
						</button>
					</div>
					
					<?php 

 
  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){
   

 $a= $data['user']; 
  $b= $data['pass'];  
  $c= $data['token']; 

            }
$no=$_GET['no'];
$kunci =$c;


if ($no==$kunci) {
echo "<b>Selamat Token Yang Anda Masukan Benar!</b> <br> Username : $a <br> Password : $b <br> Silahkan ke Halaman Login";
}else {
 echo " Masukan Token, Token Dengan Kode : <b> $no </b> tidak dapat ditemukan ";
}
?>
				</form>

				<div class="login100-more" style="background-image: url('images/bg22.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>