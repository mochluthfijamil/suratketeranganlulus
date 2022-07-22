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
$kelas = $_POST['kelas'];


	// Proses simpan ke Database
	$query = "INSERT INTO kelas VALUES('".$id."', '".$kelas."')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: profil.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}


?>
