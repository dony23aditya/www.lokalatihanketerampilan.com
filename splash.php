<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pendaftaran Peserta</title>
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
$no=$_GET['no'];
$query=mysql_query("select * from biodata where no='$no'");
$row=mysql_fetch_array($query)
?>
<br><br><br><br><br><br><br>
<center>
Anda telah terdaftar sebagai calon siswa tes dengan rincian sebagai berikut:<br />
<table>
<tr>
<td>Username</td>
<td>:</td>
<td><?php echo 'REG17'; echo $row['no'];?></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><?php echo $row['passw'];?></td>
</tr>
</table>
<b><i><u>*username dan password mohon disimpan, karena akan digunakan untuk login ke data anda*</b></i></u>
<br />
<br /><a href="login_peserta.php">Login</a></p>
</center>
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
