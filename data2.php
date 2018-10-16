<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Pendaftar</title>
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
	<?php
	include "koneksi.php";
	$query=mysql_query("select * from biodata");
	?>
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
	<br>
	Cari Berdasarkan Nama / NISN / Asal Sekolah / Program Studi
   <form method="GET" action="pencarian.php">
   <input type="text" name="cari">
   <input type="submit" name="submit" value="cari">

<p align=center>Data Peserta</p>
<table border="1" align="center" id="tabel">
<tr>
<th bgcolor="green" >No</th>
<th bgcolor="green">Nama Lengkap</th>
<th bgcolor="green">NISN</th>
<th bgcolor="green">Asal Sekolah</th>
<th bgcolor="green">Program Studi</th>
<th bgcolor="green">Jurusan/Kompetensi</th>
</tr>

<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['no'];?></td>
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['nisn'];?></td>
<td><?php echo $row['sekolah_asal'];?></td>
<td><?php echo $row['prodi'];?></td>
<td><?php echo $row['jurusan'];?></td>
</tr>
<?php
}
?>

</table><br />
   
 
    </div>
    <!--akhir Content-->
    <!--Footer-->
    <div id="footer">
    Pendaftaran Online Pelatihan Keterampilan LLKBS<br />
    All Reserved By <a href="login.php">Admin</a>
    </div>
    <!--akhir Footer-->
</div>
</center>
</body>
</html>
