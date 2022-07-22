<?php
// Load file koneksi.php
include "../koneksi.php";
$id = $_GET['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$kelas = $_POST['kelas'];
$angkatan = $_POST['angkatan'];
$ket = $_POST['ket'];
 // Cek apakah gambar berhasil diupload atau tidak
	// Proses simpan ke Database

	$query = "SELECT * FROM daftar WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
		$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

		// Proses ubah data ke Database
		$query = "UPDATE daftar SET nama='".$nama."', nisn='".$nisn."', kelas='".$kelas."', angkatan='".$angkatan."', ket='".$ket."' WHERE id='".$id."'";
		$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

		if($sql){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: index.php"); // Redirect ke halaman index.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	
?>
