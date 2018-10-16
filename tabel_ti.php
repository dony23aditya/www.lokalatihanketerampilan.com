<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Peserta</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#0066FF">
<center>
<div id="site">
<!--Awal Header-->
	<div id align="left"="header">
	<img src="image/headerllk.png"/>
    <img src="image/headerllkbs.JPG"/>
 	</div>
    <!--Akhir Header-->
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="syarat_daftar.php">Syarat Daftar</a></li>
      <li><a href="daftar.php">Register</a></li>
      <li><a href="login_peserta.php">Login</a></li>
      <li><a href="data2.php">Lihat Peserta</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   
<?php
include "koneksi.php";
$query=mysql_query("select * from ntes order by rata desc limit 10");
if(isset($_GET['prodi'])) {
$prodi=$_GET['prodi'];
$query=mysql_query("SELECT * FROM biodata inner join ntes where daftar.no=ntes.no and daftar.prodi='$prodi' order by ntes.rata");
?>
<a href="tabel_urut_ti.php?prodi=<? echo $prod;?>">TI</a>

<p align=center>Data Peserta</p>
<table border="1" align="center" id="tabel">
<tr>
<th align="center">ID Pendaftaran</th>
<th align="center">Nama Peserta</th>
<th align="center">Tes Inggris</th>
<th align="center">Tes Matematika</th>
<th align="center">Rata - Rata</th>
<th align="center">Jurusan</th>
</tr>
<?php
while($row=mysql_fetch_array($query)){
$nop = $row['no'];
$query1=mysql_query("select * from biodata where no='$nop'");
$isi=mysql_fetch_array($query1);

?>
<tr>
<td><?php echo 'REG17'; echo $row['no'];?></td>
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['ntes_ing'];?></td>
<td><?php echo $row['ntes_mtk'];?></td>
<td><?php echo $row['rata'];?></td>
<td><?php echo $isi['prodi'];?></td>
</tr>
<?php } ?>
</table>

<p align="center"><a href="index.php">Back</a>
<?php }?>
   
    </div>
    <!--akhir Content-->
    <!--Footer-->
    <div id="footer">
    Pendaftaran Online Pelatihan Keterampilan LLKBS<br>
    All Reserved By <a href="login.php">Admin</a>
    </div>
    <!--akhir Footer-->
</div>
</center>
</body>
</html>
