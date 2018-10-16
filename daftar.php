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
   <?php include "koneksi.php";
$query1=mysql_query("select * from biodata order by no desc limit 1");
$row=mysql_fetch_array($query1);?>
<form action="do_daftar.php?no=<?php echo $row['no']+1;?>" method="post">
<input type="hidden" name="no" maxlength="15" size="35" value="<?php echo $row['no']+1;?>">
<table align="center">
<tr><td colspan="3" align="center">Form Pendaftaran</tr>
<tr>
<td>Nama Lengkap</td>
<td><input type="text" name="nama_lengkap" maxlength="30" size="50"></td>
</tr>
<tr>
<td>NISN</td>
  <td><input type="text" name="nisn" maxlength="10" size="25"></td>
</tr>
<tr>
<td>Alamat</td>
  <td><input type="text" name="alamat" maxlength="250" size="50"></td>
</tr>
<tr>
<td>No Telepon / HP</td>
  <td><input type="text" name="no_telp" maxlength="12" size="25"></td>
</tr>
<td>Sekolah Asal</td>
  <td><input type="text" name="sekolah_asal" maxlength="250" size="50"></td>
</tr>

<tr>
<td>Program Studi</td>
  <td><select name="prodi">
  <option>Teknik Informatika
  <option>Teknik Kimia
  <option>Teknik Listrik
  <option>Teknik Bangunan
  <option>Teknik Elektronika
  <option>Teknik Otomotif
  <option>Teknik Mesin
  <option>--Program Studi Lainnya--
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
<br /><br /><br />
<tr>
<td align="justify"><b>Biodata Orangtua</b> </td>
</tr>
 
<tr>  
<td>Nama Ayah</td>
<td><input type="text" name="nama_a" maxlength="250" size="50"></td>
</tr>

<tr>  
<td>Alamat</td>
<td><input type="text" name="alamat_a" maxlength="250" size="50"></td>
</tr>

<tr>  
<td>Pekerjaan</td>
<td><input type="text" name="pekerjaan_a" maxlength="250" size="25"></td>
</tr>

<tr>  
<td>No. Telp</td>
<td><input type="text" name="telp_a" maxlength="250" size="25"></td>
</tr>
  
<tr>  
<td>Nama Ibu</td>
<td><input type="text" name="nama_i" maxlength="250" size="50"></td>
</tr>

<tr>  
<td>Alamat</td>
<td><input type="text" name="alamat_i" maxlength="250" size="50"></td>
</tr>

<tr>  
<td>Pekerjaan</td>
<td><input type="text" name="pekerjaan_i" maxlength="250" size="25"></td>
</tr>

<td>No. Telp</td>
<td><input type="text" name="telp_i" maxlength="250" size="25"></td>
</tr>
<br /><br />
<tr><td colspan="3" align="justify"><b>Nilai Semester 1</b></tr>
<tr>
<tr>
<td >Nilai Rata-rata</td>
<td><input type="text" name="n1" maxlength="8" size="5"></td>
</tr>
<tr>
<td>Matematika</td>
<td ><input type="text" name="n_mtk1" maxlength="8" size="5"></td>
</tr>
<tr><td>B.inggris</td>
<td><input type="text" name="n_bing1" maxlength="8" size="5"></td>
</tr>
<tr><td>Fisika</td>
<td><input type="text" name="n_fsk1" maxlength="8" size="5"></td>
</tr>
<tr><td>Ranking</td>
<td><input type="text" name="r1" maxlength="8" size="5"></td>
</tr>

<tr><td colspan="2" align="justify"><b>Nilai Semester 2</b></tr>
<tr>
<td>Nilai Rata-rata</td>
<td><input type="text" name="n2" maxlength="8" size="5"></td>
</tr>  
<tr><td>Matematika</td>
<td><input type="text" name="n_mtk2" maxlength="8" size="5"></td>
</tr>
<tr><td>B.inggris</td>
  <td><input type="text" name="n_bing2" maxlength="8" size="5"></td>
</tr>
<tr><td>Fisika</td>
  <td><input type="text" name="n_fsk2" maxlength="8" size="5"></td>
</tr>
<tr><td>Ranking</td>
  <td><input type="text" name="r2" maxlength="8" size="5"></td>
</tr>

<tr><td colspan="2" align="justify"><b>Nilai Semester 3</b></tr>
<tr>
<td>Nilai Rata-rata</td>
  <td><input type="text" name="n3" maxlength="8" size="5"></td>
</tr>
<tr><td>Matematika</td>
  <td><input type="text" name="n_mtk3" maxlength="8" size="5"></td>
  </tr>
<tr><td>B.inggris</td>
  <td><input type="text" name="n_bing3" maxlength="8" size="5"></td>
  </tr>
<tr><td>Fisika</td>
  <td><input type="text" name="n_fsk3" maxlength="8" size="5"></td>
  </tr>
<tr><td>Ranking</td>
  <td><input type="text" name="r3" maxlength="8" size="5"></td>
</tr>

<tr><td colspan="2" align="justify"><b>Nilai Semester 4</b></tr>
<tr>
<td>Nilai Rata-rata</td>
  <td><input type="text" name="n4" maxlength="8" size="5"></td>
  </tr>
  <tr><td>Matematika</td>
  <td><input type="text" name="n_mtk4" maxlength="8" size="5"></td>
  </tr>
  <tr><td>B.inggris</td>
  <td><input type="text" name="n_bing4" maxlength="8" size="5"></td>
  </tr>
  <tr><td>Fisika</td>
  <td><input type="text" name="n_fsk4" maxlength="8" size="5"></td>
  </tr>
  <tr><td>Ranking</td>
  <td><input type="text" name="r4" maxlength="8" size="5"></td>
</tr>

<tr><td colspan="2" align="justify"><b>Nilai Semester 5</b></tr>
<tr>
<td>Nilai Rata-rata</td>
  <td><input type="text" name="n5" maxlength="8" size="5"></td>
  </tr>
  <tr><td>Matematika</td>
  <td><input type="text" name="n_mtk5" maxlength="8" size="5"></td>
  </tr>
  <tr><td>B.inggris</td>
  <td><input type="text" name="n_bing5" maxlength="8" size="5"></td>
  </tr>
  <tr><td>Fisika</td>
  <td><input type="text" name="n_fsk5" maxlength="8" size="5"></td>
  </tr>
  <tr><td>Ranking</td>
  <td><input type="text" name="r5" maxlength="8" size="5"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="submit" value="Daftar">&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>

</table>

</form>

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
