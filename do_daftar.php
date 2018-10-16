<?php
include "koneksi.php";
$no = $_GET['no'];
$nama_lengkap=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];
$passw = md5($nisn);
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$sekolah_asal=$_POST['sekolah_asal'];
$prodi=$_POST['prodi'];
$jurusan=$_POST['jurusan'];
$nama_a=$_POST['nama_a'];
$alamat_a=$_POST['alamat_a'];
$pekerjaan_a=$_POST['pekerjaan_a'];
$nama_i=$_POST['nama_i'];
$alamat_i=$_POST['alamat_i'];
$pekerjaan_i=$_POST['pekerjaan_i'];
$telp_a=$_POST['telp_a'];
$telp_i=$_POST['telp_i'];
$n1=$_POST['n1'];
$n_mtk1=$_POST['n_mtk1'];
$n_bing1=$_POST['n_bing1'];
$n_fsk1=$_POST['n_fsk1'];
$n2=$_POST['n2'];
$n_mtk2=$_POST['n_mtk2'];
$n_bing2=$_POST['n_bing2'];
$n_fsk2=$_POST['n_fsk2'];
$n3=$_POST['n3'];
$n_mtk3=$_POST['n_mtk3'];
$n_bing3=$_POST['n_bing3'];
$n_fsk3=$_POST['n_fsk3'];
$n4=$_POST['n4'];
$n_mtk4=$_POST['n_mtk4'];
$n_bing4=$_POST['n_bing4'];
$n_fsk4=$_POST['n_fsk4'];
$n5=$_POST['n5'];
$n_mtk5=$_POST['n_mtk5'];
$n_bing5=$_POST['n_bing5'];
$n_fsk5=$_POST['n_fsk5'];
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$r5=$_POST['r5'];

if (($n1<70) or ($n_mtk1<70) or ($n_bing1<70)or($n_fsk1<70)or ($n2<70)or($n_mtk2<70) or ($n_bing2<70)or($n_fsk2<70)or ($n3<70) or ($n_mtk3<70) or ($n_bing3<70)or($n_fsk3<70) or($n4<70) or ($n_mtk4<70) or ($n_bing4<70)or($n_fsk4<70) or ($n5<70) or ($n_mtk5<70) or ($n_bing5<70)or($n_fsk5<70)or ($r1>10) or ($r2>10) or ($r3>10) or ($r4>10) or ($r5>10)) { 
?>
<meta http-equiv="refresh" content="0 ;URL=input.php?no=<?php echo $no;?>">
<script>
alert ('Nilai yang anda masukkan tidak cukup')
</script>";
<?php } else { 

$query=mysql_query("insert into biodata (no,nama_lengkap,nisn,alamat,no_telp,sekolah_asal,passw,prodi,jurusan,nama_a,alamat_a,pekerjaan_a,nama_i,alamat_i,pekerjaan_i,telp_a,telp_i,n1,n_mtk1,n_bing1,n_fsk1,n2,n_mtk2,n_bing2,n_fsk2,n3,n_mtk3,n_bing3,n_fsk3,n4,n_mtk4,n_bing4,n_fsk4,n5,n_mtk5,n_bing5,n_fsk5,r1,r2,r3,r4,r5)
 value ('$no','$nama_lengkap','$nisn','$alamat','$no_telp','$sekolah_asal','$passw','$prodi','$jurusan','$nama_a','$alamat_a','$pekerjaan_a','$nama_i','$alamat_i','$pekerjaan_i','$telp_a','$telp_i','$n1','$n_mtk1','$n_bing1','$n_fsk1','$n2','$n_mtk2','$n_bing2','$n_fsk2','$n3','$n_mtk3','$n_bing3','$n_fsk3','$n4','$n_mtk4','$n_bing4','$n_fsk4','$n5','$n_mtk5','$n_bing5','$n_fsk5','$r1','$r2','$r3','$r4','$r5')");

if ($query) { ?>
<p align="center">Anda sudah terdaftar, anda akan dialihkan ke halaman input dalam 2 detik atau pergi 
<meta http-equiv="refresh" content="0 ;URL=splash.php?no=<?php echo $no;?>">
<br /><a href="cek.php?no=<?php echo $no; ?>">kesini</a></p>
<?php } else {
echo "Gagal input data";?><br><?php
echo mysql_error();
} ?>
<?php } ?>
