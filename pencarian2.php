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
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      
   <li><a href="data3.php">Back</a></li>
      <li><a href="logout_siswa.php">Logout</a></li>
      
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
	
<?php
include ("koneksi.php");
$cari = $_GET['cari'];
$sql = "select * from biodata where nama_lengkap like '%$cari%' or nisn like '%$cari%' or sekolah_asal like '%$cari%' or prodi like '%$cari%'";
$result = mysql_query($sql);
if(mysql_num_rows($result) > 0){
?>
Cari Berdasarkan Nama / NISN / Asal Sekolah / Program Studi
   <form method="GET" action="pencarian2.php">
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
while($row= mysql_fetch_array($result)){?>
<tr>
<td><?php echo $row['no'];?></td>
<td><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['nisn'];?></td>
<td><?php echo $row['sekolah_asal'];?></td>
<td><?php echo $row['prodi'];?></td>
<td><?php echo $row['jurusan'];?></td>
</tr>
<?php } ?>
</table>
<?php
}else{
?>
<br> <br>
<br><?php
echo 'Data not found!';
echo mysql_error();
}
?>
 
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
,