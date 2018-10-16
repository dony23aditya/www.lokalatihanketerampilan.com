<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data Peserta</title>
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
 if(isset($_COOKIE["peserta"])) { 
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from biodata where no='$no'");
?>
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      
	  <li><a href="data.php?no=<? echo $no;?>">Back</a></li>
       <li><a href="print.php?no=<?php echo $no;?>">Print Data</a></li>
      <li><a href="logout_siswa.php">Logout</a></li>
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">

<form action="do_update_siswa.php" method="post">
<table align="center">
<input type="hidden" name="no" value="<?php echo $no;?>">
<?php
while($row=mysql_fetch_array($query)){
?>
<tr><td colspan="2" align="center">Form Data Peserta</tr>
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama_lengkap" maxlength="30" size="35" value="<?php echo $row['nama_lengkap'];?>"></td>
</tr>
<tr>
<td>NISN</td>
  <td><input type="text" name="nisn" maxlength="10" size="35" value="<?php echo $row['nisn'];?>"></td>
</tr>
<tr>
<td>Alamat</td>
  <td><input type="text" name="alamat" maxlength="250" size="35" value="<?php echo $row['alamat'];?>"></td>
</tr>
<tr>
<td>No Telepon / HP</td>
  <td><input type="text" name="no_telp" maxlength="12" size="35" value="<?php echo $row['no_telp'];?>"></td>
</tr>

<td>Sekolah Asal</td>
  <td><input type="text" name="sekolah_asal" maxlength="250" size="50" value="<?php echo $row['sekolah_asal'];?>"></td>
</tr>

<tr>
<td>Program Keahlian</td>
  <td><select name="prodi">
  <option>Teknik Informatika
  <option>Teknik Kimia
  <option>Teknik Listrik
  <option>Teknik Bangunan
  <option>Teknik Elektronika
  <option>Teknik Otomotif
  </select>
  </td>
</tr>
<tr>
<td>Jurusan/Kompetensi</td>
  <td><select name="jurusan">
  <option>Rekayasa Perangkat Lunak
  <option>Teknik Komputer dan Jaringan
  <option>Multimedia
  <option>Animasi
  <option>Kimia Analis
  <option>Kimia Industri
  <option>Teknik Pembangkit Tenaga Listrik
  <option>Teknik Distribusi Tenaga Listrik
  <option>Teknik Transmisi Tenaga Listrik
  <option>Teknik Instalasi Tenaga Listrik
  <option>Teknik Otomasi Industri
  <option>Teknik Konstruksi Baja
  <option>Teknik Konstruksi Kayu
  <option>Teknik Konstruksi Batu dan Beton
  <option>Teknik Gambar Bangunan
  <option>Teknik Furnitur
  <option>Teknik Audio-Video
  <option>Teknik Elektronika Industri
  <option>Teknik Mekatronika
  <option>Teknik Kendaraan Ringan
  <option>Teknik Sepeda Motor
  <option>Teknik Perbaikan Bodi Otomotif
  <option>Teknik Alat Berat
  <option>Teknik Ototronik
  <option>Teknik Pemesinan
  <option>Teknik Pengelasan
  <option>Teknik Fabrikasi Logam
  <option>Teknik Pengecoran Logam
  <option>Teknik Gambar Mesin
  <option>Teknik Pemeliharaan Industri
  <option>--Jurusan/Kompetensi Lainnya--
  </select>
  </td> 
</tr>

<tr><td colspan="2" align="center">Biodata Orangtua</tr>

<tr>
<td>Nama Ayah</td>
  <td><input type="text" name="nama_a" maxlength="12" size="35" value="<?php echo $row['nama_a'];?>"></td>
</tr>
<tr>
<td>Alamat</td>
  <td><input type="text" name="alamat_a" maxlength="12" size="35" value="<?php echo $row['alamat_a'];?>"></td>
</tr>
<tr>
<td>Pekerjaan</td>
  <td><input type="text" name="pekerjaan_a" maxlength="12" size="35" value="<?php echo $row['pekerjaan_a'];?>"></td>
</tr>
<tr>
<td>No. Telp</td>
  <td><input type="text" name="telp_a" maxlength="12" size="35" value="<?php echo $row['telp_a'];?>"></td>
</tr>

<tr>
<td>Nama Ibu</td>
  <td><input type="text" name="nama_i" maxlength="12" size="35" value="<?php echo $row['nama_i'];?>"></td>
</tr>
<tr>
<td>Alamat</td>
  <td><input type="text" name="alamat_i" maxlength="12" size="35" value="<?php echo $row['alamat_i'];?>"></td>
</tr>
<tr>
<td>Pekerjaan</td>
  <td><input type="text" name="pekerjaan_i" maxlength="12" size="35" value="<?php echo $row['pekerjaan_i'];?>"></td>
</tr>
<tr>
<td>No. Telp</td>
  <td><input type="text" name="telp_i" maxlength="12" size="35" value="<?php echo $row['telp_i'];?>"></td>
</tr>


<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Update">&nbsp;</td>
</tr>
</table>
</form>
<?php 
}
?>
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
