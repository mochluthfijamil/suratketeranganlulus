
<?php 
require_once'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Pengumuman Kelulusan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 50%;
  border: 2px solid #ffff;
  border-right: none;
  padding: 20px;
  height: 50px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #ffff;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 50px;
  height:60px;
  border: 2px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 30px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
<script type="text/javascript">
  $('.alert').alert()
</script>
</head>
  <body>
   <br>
  <br><br>
  <br><br>
  <center><?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){
   
   

    echo "<td><img src='admin/images/".$data['foto']."' width='100' height='100'></td>"; 
            }?></center>
  
<br>
<center><?php
  // Load file koneksi.php
  include "koneksi.php";
  
  $query = "SELECT * FROM profil"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){
   
   
 echo "<h1>".$data['sekolah']."</h1>"; 
            }?> </center>
<center><b>Unduh Surat Keterangan Lulus</b></center>
<br>

<center>
<form method="post">
  <div class="cool-8">
   <div class="form-group">
 
    <input type="number" class="form-control-lg" name="nt" autocomplete="off" placeholder="Ketikan NISN Anda" required="">
  </div>
</div>
<button class="btn btn-warning btn-lg" type="submit" name="submit" value="cari">Hasil Kelulusan</button>

<br>
<br>



<form>
<br/>
</center>



<?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM daftar";

$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){

?>

<?php } } ?>

<?php if (ISSET($_POST['submit'])){
 
$cari =mysqli_escape_string($connect,$_POST['nt']);
   $query1=$connect->query("SELECT * FROM daftar WHERE nisn LIKE '$cari'");
$ntt=$_POST['nt'];
           $jml =mysqli_num_rows($query1);
           $x=$jml;

if ($x<1) {
echo "<center><br><div class='col-sm'><div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Maaf! </strong> Hasil Pencarian NISN $ntt Tidak Ditemukan
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div></div></center>";
}else {
 echo "<center>Pencarian NISN $ntt berhasil ditemukan!</center>";
 echo"<br>";
}

 $query2 = "SELECT * FROM daftar WHERE nisn LIKE '$cari'";
 $sql = mysqli_query($connect, $query2);

 while ($r = mysqli_fetch_array($sql)){
  
  ?>
  <center>
<div class="col-sm">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><a href="surat.php?id=<?php echo $r['id']; ?>" class="btn btn-primary"> Unduh SKL</a></strong>  Atas nama <?php echo $r['nama']; ?> NISN <?php echo $r['nisn']; ?>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
</center>



 <?php }} ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" ></script>
  </body>

</html>