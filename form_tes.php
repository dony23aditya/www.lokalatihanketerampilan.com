<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
#tabel{
border-collapse:collapse;
font-family:"Palatino Linotype","tahoma";
	font-size:16px;
text-align:center;
}
a:link{color:black; text-decoration:none;}
a:visited{color:black; text-decoration:none;}
a:hover {text-decoration:underline;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Nilai Tes</title>
</head>
<script type="text/javascript">
window.print()
</script>
<?php
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("SELECT * FROM biodata where no='$no' ");
$row=mysql_fetch_array($query);
?>
<body>
<br /><br /><br />
<a href="print.php?no=<? echo $no; ?>">
<table width="653" border="1" align="center" id="tabel">
  <tr>
    <td colspan="2"><center>
      <h3><strong>Form Nilai Tes</strong></h3>
    </center></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Data Peserta</div></td>
  </tr>
  <tr>
    <td width="102">Id Pendaftaran</td>
    <td width="223"><?php echo 'REG17'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td>Nama Peserta</td>
    <td><?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td>NISN</td>
    <td><?php echo $row['nisn'];?></td>
  </tr>
</table>
</a>
<p>&nbsp;</p>
<table width="664" align="center">
  <tr>
    <td width="605" height="72">1. Cek Fisik</td>
    <td width="47"><div align="center"><textarea name=komentar cols=5 rows=2></textarea></div></td>
  </tr>
  
  <tr>
    <td height="71">2. Tes Bahasa Inggris</td>
    <td><div align="center"><textarea name=komentar cols=5 rows=2></textarea></div></td>
  </tr>
  
  <tr>
    <td height="65">3. Tes Matematika</td>
    <td><div align="center"><textarea name=komentar cols=5 rows=2></textarea></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="732" align="center">
  <tr>
    <td width="245"><div align="center">Peserta,</div></td>
    <td width="223"><div align="center"></div></td>
    <td width="248"><div align="center">Panitia,</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $row['nama_lengkap'];?>&nbsp;</td>
    <td width="223">&nbsp;</td>
    <td width="248"><div align="center">.............................................................</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
