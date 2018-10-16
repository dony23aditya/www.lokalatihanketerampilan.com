<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
      <li><a href="logout.php">Logout</a></li>
      <li><a href="data3.php">Lihat Peserta</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
<?php
include "koneksi.php";
$query=mysql_query("select * from biodata");
$jumlah=mysql_num_rows($query);
echo "Jumlah Data : ".$jumlah;
?>
<?php if(isset($_COOKIE["ceklogin"])) {
 ?>


<p align=center>Data Peserta</p>
<table border="1" align="center" id="tabel">
<tr>
<th>ID Pendaftaran</th>
<th>Nama Lengkap</th>
<th>NISN</th>
<th>Alamat</th>
<th>No Telp / HP</th>
<th>Asal Sekolah</th>
<td>Aksi</td>
</tr>
<?php
while($row=mysql_fetch_array($query)){
$no=$row['no'];

?>
<tr>
<td><?php echo 'REG17'; echo $row['no'];?></td> 
<td width="225"><?php echo $row['nama_lengkap'];?></td>
<td><?php echo $row['nisn'];?></td>
<td><?php echo $row['alamat'];?></td>
<td><?php echo $row['no_telp'];?></td>
<td><?php echo $row['sekolah_asal'];?></td>
<td>
<a href="update.php?no=<?php echo $row['no']; ?>">Update</a>
<a href="delete.php?no=<?php echo $row['no']; ?>">Delete</a>
<a href="data_lengkap.php?no=<?php echo $row['no']; ?>">Data Lengkap</a> | 
<a href="nilai.php?no=<?php echo $row['no']; ?>">View Nilai</a> | 
<?php $query1=mysql_query("select * from ntes where no='$no'");
$count = mysql_num_rows($query1);
if($count==0){ ?>
<a href="input_nilai.php?no=<?php echo $no ?>">Input Nilai Tes</a>
<? } else { ?>
<a href="tabel_nilai.php?no=<?php echo $no ?>">View Nilai Tes</a>
<?php } ?>
</td>
<?php
}
?>
</table><br />
<p align="center"><!--<a href="index.php">Kembali ke Homepage</a>-->
<a href="daftar.php">Daftarkan Peserta</a>
<?php } else { ?>
<html>
<title>Konfirmasi</title>
<meta http-equiv="refresh" content="0 ;URL=login.php">
</html>
<?php } ?>
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
