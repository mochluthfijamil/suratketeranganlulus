
  <?php

require_once __DIR__ . '/vendor/autoload.php';
 include "koneksi.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
; // Ambil data dari hasil eksekusi $sql
   $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
include "koneksi.php";
  
  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data2 = mysqli_fetch_array($sql)){        
      
    
         

  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM daftar WHERE id='".$id."'";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
 

  $mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="white">
 
 <table border="" width="100%" align ="center" >
 
    <tr>
    
    <td>
       <center><img src='.'admin/images/'.$data2['foto'].' width="10%"></center>
        <td><center><br><h3>PEMERINTAH '.$data2['kabupaten'].' </p><br><h3>DINAS PENDIDIKAN </p><br><h3>'.$data2['sekolah'].' </p><br><b>'.$data2['alamat'].'<b> <center><td>
       <td>  <td>
        
    </tr>
    </table>
  <hr>
  </br>
  </br></br>
  <font face="Arial"  color="black"> <h4 align="center"> SURAT KETERANGAN LULUS  </h4></font>


  </br>
  </br></br>
  <font face="Arial" color="black"> <p align="leaft">    Dengan Hormat, yang bertanda tangan dibawah ini kepala Sekolah '.$data2['sekolah'].' , Menerangkan Bahwa :</p></font>


      <center>
<table border="1" width="80%" align ="center" >
 
    
    <tr>
  
        <td>Nama Lengkap</td>
        
        <td>'.$data['nama'].'</td>
        
    </tr>
      <tr>
  
        <td>NISN</td>
        
         <td>'.$data['nisn'].'</td>
        
    </tr>
      <tr>
  
        <td>Kelas</td>
        
        <td>'.$data['kelas'].'</td>
        
    </tr>

</table>

   </center>
   <font face="Arial" color="black"> <p align="leaft">    Benar nama tersebut diatas siswa '.$data['kelas'].' pada '.$data2['sekolah'].' telah dinyatakan <b>'.$data['ket'].'</b> dari sekolah tahun pelajaran '.$data['angkatan'].'.<br>Demikian surat keterangan ini kami buat untuk digunakan seperlunya</p></font>


       <font face="Arial" color="black"> <p align="leaft">    Mengetahui,</p></font>
         <font face="Arial" color="black"> <p align="leaft">  Kepala Sekolah </p></font> 
      <br>
         
         <font face="Arial" color="black"> <p align="leaft"> '.$data2['kepala'].'</p></font> 
  </body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('SKL '.$data['nama'].'.pdf',\Mpdf\Output\Destination::INLINE);
}?>