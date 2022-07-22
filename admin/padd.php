 <?php  
 include("../koneksi.php"); 
session_start();
if (empty($_SESSION['status_login'])) {
  header("location:../login");
}

  
?>
<?php
// Load file koneksi.php
include "../koneksi.php";

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];

$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];
$ket = $_POST['ket'];

	// Proses simpan ke Database
	$query = "INSERT INTO daftar VALUES('".$id."', '".$nama."','".$nisn."', '".$kelas."', '".$angkatan."','".$ket."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: index.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}


?>
