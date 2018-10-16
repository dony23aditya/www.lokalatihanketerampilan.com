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
	<?php
	include "koneksi.php";
	$no=$_GET['no'];
	$query=mysql_query("select * from biodata where no='$no'");
	?>
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      <li><a href="index.php">Home</a></li>
	  <li><a href="tabel2.php">Back</a></li>
      <li><a href="logout_siswa.php">Logout</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
   

<?php
if(isset($_COOKIE["ceklogin"])) { 
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from biodata where no='$no'");
$jumlah=mysql_num_rows($query);
echo "Jumlah Data : ".$jumlah;
?>
<?php
while($row=mysql_fetch_array($query)){
?>
<p align=center>Data Peserta</p>
<table border="0" align="center">
<tr>
<td >No</td>
<td>:</td>
<td><?php echo $row['no'];?></td>
</tr>
<tr>
<td >Password</td>
<td>:</td>
<td><?php echo $row['passw'];?></td>
</tr>
<tr>
<td >Nama Lengkap</td>
<td>:</td>
<td><?php echo $row['nama_lengkap'];?></td>
</tr>
<tr>
<td >NISN</td>
<td>:</td>
<td><?php echo $row['nisn'];?></td>
</tr>
<tr>
<td >Alamat</td>
<td>:</td>
<td><?php echo $row['alamat'];?></td>
</tr>
<tr>
<td >No Telpon</td>
<td>:</td>
<td><?php echo $row['no_telp'];?></td>
</tr>
<tr>
<td >Asal Sekolah</td>
<td>:</td>
<td><?php echo $row['sekolah_asal'];?></td>
</tr>
<tr>
<td >Program Studi</td>
<td>:</td>
<td><?php echo $row['prodi'];?></td>
</tr>
<tr>
<td >Jurusan/Kompetensi</td>
<td>:</td>
<td><?php echo $row['jurusan'];?></td>
</tr>
<tr>
<td><b>Biodata Orangtua</b></td>
</tr>
<tr>
<td>Nama Ayah</td>
<td>:</td>
<td><?php echo $row['nama_a'];?></td>
</tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $row['alamat_a'];?></td>
</tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $row['pekerjaan_a'];?></td>
</tr>
<td>No. Telp</td>
<td>:</td>
<td><?php echo $row['telp_a'];?></td>
</tr>
<td>Nama Ibu</td>
<td>:</td>
<td><?php echo $row['nama_a'];?></td>
</tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $row['alamat_i'];?></td>
</tr>
<td>Pekerjaan</td>
<td>:</td>
<td><?php echo $row['pekerjaan_i'];?></td>
</tr>
<td>No. Telp</td>
<td>:</td>
<td><?php echo $row['telp_i'];?></td>
</tr>



</table><br>
| <a href="update.php?no=<?php echo $row['no']; ?>">Update</a> | 
<a href="delete.php?no=<?php echo $row['no']; ?>">Delete</a> |
<?php
}
?>

</table><br />
   
   <?php } else {header("location:login_peserta.php"); }?> 
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
