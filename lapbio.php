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
#tabel tr td center strong {
	font-family: Comic Sans MS, cursive;
}
#tabel tr td center strong {
	font-family: Tahoma, Geneva, sans-serif;
}
#tabel tr td center strong {
	font-family: Comic Sans MS, cursive;
}
#tabel tr td center h1 strong {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
}
#tabel tr td center h1 {
	font-family: Tahoma, Geneva, sans-serif;
}
#tabel tr td center h2 strong {
	font-family: Palatino Linotype, Book Antiqua, Palatino, serif;
}
#tabel tr td center h2 strong {
	font-family: Comic Sans MS, cursive;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Biodata</title>
</head>
<script type="text/javascript">
window.print()
</script>
	<?php
 if(isset($_COOKIE["peserta"])) { 
include "koneksi.php";
$no=$_GET['no'];
$query=mysql_query("select * from biodata where no='$no'");
?>
<?php
while($row=mysql_fetch_array($query)){
?>
<body>
<br /><br /><br />
<a href="print.php?no=<?php echo $no; ?>">
<table width="896" border="1" align="center" id="tabel">
  <tr>
    <td height="217" colspan="6"><center>
      <h1><img src="image/headerllk.png" height="205" align="left"></h1>
      <h2 align="center"><strong >Formulir Pendaftaran Peserta Pelatihan LLK-BS </strong></h2>
      <h2 align="center"><strong >Periode 2017 - 2018</strong></h2>
      <h1 align="center">PT BRIDGESTONE TIRE INDONESIA</h1>
      <h5 align="center">Jl. Raya Bekasi Km 27 Kel.Harapan Jaya, Bekasi Jawa Barat 17000 Telp. (021)6844576/FAX</h5>
    </center></td>
  </tr>
  <tr>
    <td colspan="6" align="center"><b>Biodata Peserta</b></td>
  </tr>
  <tr>
    <td width="340" align="justify">ID Pendaftaran</td>
    <td colspan="5" align="justify"><?php echo 'REG17'; echo $row['no'];?></td>
  </tr>
  <tr>
    <td align="justify">Nama Peserta</td>
    <td colspan="5" align="justify"><?php echo $row['nama_lengkap'];?></td>
  </tr>
  <tr>
    <td align="justify">NISN</td>
    <td colspan="5" align="justify"><?php echo $row['nisn'];?></td>
  </tr>
  <tr>
    <td align="justify">Sekolah Asal</td>
    <td colspan="5" align="justify"><?php echo $row['sekolah_asal'];?></td>
  </tr>
  <tr>
    <td align="justify">Program Studi</td>
    <td colspan="5" align="justify"><?php echo $row['prodi'];?></td>
  </tr>
  <tr>
    <td align="justify">Jurusan/Kompetensi</td>
    <td colspan="5" align="justify"><?php echo $row['jurusan'];?></td>
  </tr>
  <tr>
    <td align="justify">Alamat</td>
    <td colspan="5" align="justify"><?php echo $row['alamat'];?></td>
  </tr>
  <tr>
    <td align="justify">No Telepon/Handphone</td>
    <td colspan="5" align="justify"><?php echo $row['no_telp'];?></td>
  </tr>
  <tr>
    <td colspan="6" align="center"><b>Biodata Orangtua</b></td>
  </tr>
   <tr>
     <td align="justify">Nama Ayah</td>
    <td colspan="5" align="justify"><?php echo $row['nama_a'];?></td>
  </tr>
   <tr>
     <td align="justify">Alamat</td>
    <td colspan="5" align="justify"><?php echo $row['alamat_a'];?></td>
  </tr>
   <tr>
     <td align="justify">Pekerjaan</td>
    <td colspan="5" align="justify"><?php echo $row['pekerjaan_a'];?></td>
  </tr>
   <tr>
     <td align="justify">No. Telp</td>
    <td colspan="5" align="justify"><?php echo $row['telp_a'];?></td>
  </tr>
  <tr>
    <td align="justify">Nama Ibu</td>
    <td colspan="5" align="justify"><?php echo $row['nama_i'];?></td>
  </tr>
   <tr>
     <td align="justify">Alamat</td>
    <td colspan="5" align="justify"><?php echo $row['alamat_i'];?></td>
  </tr>
   <tr>
     <td align="justify">Pekerjaan</td>
    <td colspan="5" align="justify"><?php echo $row['pekerjaan_i'];?></td>
  </tr>
   <tr>
     <td align="justify">No. Telp</td>
    <td colspan="5" align="justify"><?php echo $row['telp_i'];?></td>
  </tr>
  
  <tr>
    <td colspan="6" align="center"><b>Form Nilai</b></td>
  </tr>
  <tr>
    <td rowspan="2"><b>Nilai Semester</b></td>
    <td width="85" colspan="2"><b>Kelas 10</b></td>
    <td width="85" colspan="2"><b>Kelas 11</b></td>
    <td width="85"><b>Kelas 12</b></td>
  </tr>
  <tr>
    <td width="85"><b>Semester 1</b></td>
    <td width="85"><b>Semester 2</b></td>
    <td width="85"><b>Semester 3</b></td>
    <td width="85"><b>Semester 4</b></td>
    <td><b>Semester 5</b></td>
  </tr>
  <tr>
    <td>Matematika</td>
    <td><?php echo $row['n_mtk1'];?></td>
    <td><?php echo $row['n_mtk2'];?></td>
    <td><?php echo $row['n_mtk3'];?></td>
    <td><?php echo $row['n_mtk4'];?></td>
    <td><?php echo $row['n_mtk5'];?></td>
  </tr>
  <tr>
    <td>B.Inggris</td>
    <td><?php echo $row['n_bing1'];?></td>
    <td><?php echo $row['n_bing2'];?></td>
    <td><?php echo $row['n_bing3'];?></td>
    <td><?php echo $row['n_bing4'];?></td>
    <td><?php echo $row['n_bing5'];?></td>
  </tr>
  <tr>
    <td>Fisika</td>
    <td><?php echo $row['n_fsk1'];?></td>
    <td><?php echo $row['n_fsk2'];?></td>
    <td><?php echo $row['n_fsk3'];?></td>
    <td><?php echo $row['n_fsk4'];?></td>
    <td><?php echo $row['n_fsk5'];?></td>
  </tr>
  <tr>
    <td>Nilai Rata-rata</td>
    <td><?php echo $row['n1'];?></td>
    <td><?php echo $row['n2'];?></td>
    <td><?php echo $row['n3'];?></td>
    <td><?php echo $row['n4'];?></td>
    <td><?php echo $row['n5'];?></td>
  </tr>
  <tr>
    <td>Rangking</td>
    <td><?php echo $row['r1'];?></td>
    <td><?php echo $row['r2'];?></td>
    <td><?php echo $row['r3'];?></td>
    <td><?php echo $row['r4'];?></td>
    <td><?php echo $row['r5'];?></td>
  </tr>
</table>
<br /><br /><br />
<table width="603" border="0" align="center">
  <tr>
    <td width="211" align="center">Peserta,</td>
    <td width="167" rowspan="3">&nbsp;</td>
    <td width="211" align="center">Panitia,</td>
  </tr>
  <tr>
    <td height="67">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><?php echo $row['nama_lengkap'];?></td>
    <td>....................................................</td>
  </tr>
</table>
  <?php 
}
?>
<?php 
}
?>
 
</a>
</body>
</html>
