<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Data</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#0066FF">
<center>
<div id="site">
<?php
	include "koneksi.php";
	$no=$_GET['no'];
	$query=mysql_query("select * from biodata where no='$no'");
	?>
<!--Awal Header-->
	<div id align="left"="header">
	<img src="image/headerllk.png"/>
    <img src="image/headerllkbs.JPG"/>
 	</div>
    <!--Akhir Header-->
	<div id="menu" align="left">
	  <p align="center">Menu</p>
      <ul>
      
	  <li><a href="update_siswa.php?no=<?php echo $no;?>">Update Biodata</a></li>
      <li><a href="print.php?no=<?php echo $no;?>">Print Data</a></li>
      <li><a href="logout_siswa.php">Logout</a></li>
      
      </ul>
	</div>
    <!--awal Content-->
    <div id="main">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <table width="226">
  <tr>
    <td width="216"><div align="center"><u>Data yang Harus di Print</u></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="lapbio.php?no=<?php echo $no;?>">Form Biodata</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><a href="lap_cek.php?no=<?php echo $no;?>">Form Cek Fisik</a></div></td>
  </tr>
  
  <tr>
    <td><div align="center"><a href="form_tes.php?no=<?php echo $no;?>">Blanko Nilai Tes</a></div></td>
  </tr>
</table>

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
