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
$no=$_GET['no'];
$query=mysql_query("select * from ntes where no='$no'");
while($row=mysql_fetch_array($query)){
?>
<form action="do_update_nilai_tes.php?no=<?php echo $no;?>" method="post">
<table border="0" align="center">
<tr><td colspan="5" align="center">Form Nilai Tes Peserta</tr>
<tr>
<td align="center">No</td>
<td colspan="3">
<input type="hidden" name="no" maxlength="15" size="35" value="<?php echo $row['no'];?>"><?php echo $row['no'];?></td>
</tr>
<tr>
<td align="center">Nama Peserta</td>
<td colspan="3">
<input type="hidden" name="namalp" maxlength="15" size="35" value="<?php echo $row['nama_lengkap'];?>"><?php echo $row['nama_lengkap'];?></td>
</tr>
<tr>
<td>Nilai Tes Bahasa Inggris</td>
  <td><input type="text" name="ntes_ing" maxlength="15" size="5" value="<?php echo $row['ntes_ing'];?>"></td>
  <td>Nilai Tes Matematika</td>
  <td><input type="text" name="ntes_mtk" maxlength="15" size="5" value="<?php echo $row['ntes_mtk'];?>"></td>
</tr>
<tr>
<td>Nilai IPA Semester 1</td>
  <td><input type="text" name="nipa1" maxlength="15" size="5" value="<?php echo $row['nipa1'];?>"></td>
<td>Nilai Matematika Semester 1</td>
  <td><input type="text" name="nmtk1" maxlength="15" size="5" value="<?php echo $row['nmtk1'];?>"></td>
</tr>
<tr>
<td>Nilai IPA Semester 2</td>
  <td><input type="text" name="nipa2" maxlength="15" size="5" value="<?php echo $row['nipa2'];?>"></td>
<td>Nilai Matematika Semester 2</td>
  <td><input type="text" name="nmtk2" maxlength="15" size="5" value="<?php echo $row['nmtk2'];?>"></td>
</tr>
<tr>
<td>Nilai IPA Semester 3</td>
  <td><input type="text" name="nipa3" maxlength="15" size="5" value="<?php echo $row['nipa3'];?>"></td>
  <td>Nilai Matematika Semester 3</td>
  <td><input type="text" name="nmtk3" maxlength="15" size="5" value="<?php echo $row['nmtk3'];?>"></td>
</tr>
<tr>
<td>Nilai IPA Semester 4</td>
  <td><input type="text" name="nipa4" maxlength="15" size="5" value="<?php echo $row['nipa4'];?>"></td>
  <td>Nilai Matematika Semester 4</td>
  <td><input type="text" name="nmtk4" maxlength="15" size="5" value="<?php echo $row['nmtk4'];?>"></td>
</tr>
<tr>
<td>Nilai IPA Semester 5</td>
  <td><input type="text" name="nipa5" maxlength="15" size="5" value="<?php echo $row['nipa5'];?>"></td>
  <td>Nilai Matematika Semester 5</td>
  <td><input type="text" name="nmtk5" maxlength="15" size="5" value="<?php echo $row['nmtk5'];?>"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 1</td>
  <td><input type="text" name="ning1" maxlength="15" size="5" value="<?php echo $row['ning1'];?>"></td>
  <td>Nilai Bahasa Indonesia Semester 1</td>
  <td><input type="text" name="nindo1" maxlength="15" size="5" value="<?php echo $row['nindo1'];?>"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 2</td>
  <td><input type="text" name="ning2" maxlength="15" size="5" value="<?php echo $row['ning2'];?>"></td>
  <td>Nilai Bahasa Indonesia Semester 2</td>
  <td><input type="text" name="nindo2" maxlength="15" size="5" value="<?php echo $row['nindo2'];?>"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 3</td>
  <td><input type="text" name="ning3" maxlength="15" size="5" value="<?php echo $row['ning3'];?>"></td>
  <td>Nilai Bahasa Indonesia Semester 3</td>
  <td><input type="text" name="nindo3" maxlength="15" size="5" value="<?php echo $row['nindo3'];?>"></td>
</tr>
<tr>
<td>Nilai Bahasa Inggris Semester 4</td>
  <td><input type="text" name="ning4" maxlength="15" size="5" value="<?php echo $row['ning4'];?>"></td>
  <td>Nilai Bahasa Indonesia Semester 4</td>
  <td><input type="text" name="nindo4" maxlength="15" size="5" value="<?php echo $row['nindo4'];?>"></td>
</tr>
</tr>
<td>Nilai Bahasa Inggris Semester 5</td>
  <td><input type="text" name="ning5" maxlength="15" size="5" value="<?php echo $row['ning5'];?>"></td>
  <td>Nilai Bahasa Indonesia Semester 5</td>
  <td><input type="text" name="nindo5" maxlength="15" size="5" value="<?php echo $row['nindo5'];?>"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="submit" value="Submit">&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
<?php
}
?>
   
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
