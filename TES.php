
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
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #ffff;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 100px;
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
</head>
  <body>
   <br>
  <br><br>
  <center><img src="images/kemendikbud" width="200"></center>
  
<br>
<center><h1>SMKI 1 IBRAHIMY</h1></center>
<center><p>Unduh Surat Keterangan Lulus</p></center>
<br>

<center>
<form method="post">
<input type="text"  name="nt" class="searchTerm" autocomplete="off" placeholder="Ketikan Nama Anda Menggunakan Kapital" > 
<input type="submit" class="searchButton" name="submit" value="cari">
<br>
<br>



<form>
<br/>
</center>
<center>
  
<table border=2 >

<?php
if(!ISSET($_POST['submit'])){

$sql = "SELECT * FROM daftar";

$query = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($query)){

?>

<?php } } ?>

<?php if (ISSET($_POST['submit'])){
 
$cari =mysqli_escape_string($connect,$_POST['nt']);
   $query1=$connect->query("SELECT * FROM daftar WHERE nama LIKE '$cari'");

           $jml =mysqli_num_rows($query1);
           $x=$jml;

if ($x<1) {
echo "Data Tidak Dapat Kami Temukan";
}else {
 echo "Data Peserta Didik Sesuai Kata Kunci Tersedia :$x ";
}

 $query2 = "SELECT * FROM daftar WHERE nama LIKE '$cari'";
 $sql = mysqli_query($connect, $query2);

 while ($r = mysqli_fetch_array($sql)){
  
  ?>

  <table class="table table-responsive-md table-hover ">

  <thead>
    <tr> <td><center>No</center></td>
 <td><center>NISN</center></td>
<td><center>Nama Lengkap</center></td> 

<td><center>Unduh </td> </center></tr>

<tr></tr>
<tr>
</thead>
<thead>
<tr>
<td>1</td>
 <td><?php echo $r['nisn']; ?></td>
 <td><?php echo $r['nama']; ?></td>

 <td><a href="#" class="btn btn-primary active" role="button" aria-pressed="true">Unduh</a></td>
</tr>  
</thead>
 <?php }} ?>

</table>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>