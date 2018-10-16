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
      <li><a href="login_peserta.php">Login</a></li>
      <li><a href="data2.php">Lihat Peserta</a></li>
	  <li><a href="daftar.php">Register</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   <br><br>
 <br><?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from biodata where no='$no'");
?>
<?php
while($row=mysql_fetch_array($query)){
?>
<table align="center" id="tabel">
<tr><th colspan="10">
Calon Peserta LLKBS
</th>
</tr>
<tr>
<th>No</th><td><?php echo $row['no'];?></td>
</tr>
<tr>
<th>ID Pendaftaran</th><td><?php echo 'REG17'; echo $row['no'];?></td> 
</tr>
<tr>
<th>Nama Lengkap</th><td><?php echo $row['nama_lengkap'];?></td>
</tr>
<tr>
<th>NISN</th><td><?php echo $row['nisn'];?></td>
</tr>

<tr>
<td align="justify"><b>Semester 1</b></td>
</tr>
<tr>
<td>Nilai Rata-rata Semester 1</th><td><?php echo $row['n1'];?></td>
</tr>
<tr>
<td>Matematika</th><td><?php echo $row['n_mtk1'];?></td>
</tr>
<tr>
<td>B.Inggris</th><td><?php echo $row['n_bing1'];?></td>
</tr>
<tr>
<td>Fisika</th><td><?php echo $row['n_fsk1'];?></td>
</tr>

<tr>
<td align="justify"><b>Semester 2</b></td>
</tr>
<tr>
<td>Nilai Rata-rata Semester 2</th><td><?php echo $row['n2'];?></td>
</tr>
<tr>
<td>Matematika</th><td><?php echo $row['n_mtk2'];?></td>
</tr>
<tr>
<td>B.Inggris</th><td><?php echo $row['n_bing2'];?></td>
</tr>
<tr>
<td>Fisika</th><td><?php echo $row['n_fsk2'];?></td>
</tr>

<tr>
<td align="justify"><b>Semester 3</b></td>
</tr>
<tr>
<td>Nilai Rata-rata Semester 3</th><td><?php echo $row['n3'];?></td>
</tr>
<tr>
<td>Matematika</th><td><?php echo $row['n_mtk3'];?></td>
</tr>
<tr>
<td>B.Inggris</th><td><?php echo $row['n_bing3'];?></td>
</tr>
<tr>
<td>Fisika</th><td><?php echo $row['n_fsk3'];?></td>
</tr>

<tr>
<td align="justify"><b>Semester 4</b></td>
</tr>
<tr>
<td>Nilai Rata-rata Semester 4</th><td><?php echo $row['n4'];?></td>
</tr>
<tr>
<td>Matematika</th><td><?php echo $row['n_mtk4'];?></td>
</tr>
<tr>
<td>B.Inggris</th><td><?php echo $row['n_bing4'];?></td>
</tr>
<tr>
<td>Fisika</th><td><?php echo $row['n_fsk4'];?></td>
</tr>

<tr>
<td align="justify"><b>Semester 5</b></td>
</tr>
<tr>
<td>Nilai Rata-rata Semester 5</th><td><?php echo $row['n5'];?></td>
</tr>
<tr>
<td>Matematika</th><td><?php echo $row['n_mtk5'];?></td>
</tr>
<tr>
<td>B.Inggris</th><td><?php echo $row['n_bing5'];?></td>
</tr>
<tr>
<td>Fisika</th><td><?php echo $row['n_fsk5'];?></td>
</tr>

<tr>
<th>Aksi</th><td><a href="update_nilai.php?no=<?php echo $row['no']; ?>">Update</a></td>
</tr>
<?php
}
?>
</table>
<!--<p align="center"><a href="#" onclick="window.print();return false">Print</a></p>-->
<p align="center"><a href="tabel2.php">Back</a>
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
