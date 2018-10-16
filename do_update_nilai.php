<?php
include "koneksi.php";
$no = $_POST['no'];
$nama=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];
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
$query=mysql_query("update ntes set 
n1='$n1', n_mtk1='$n_mtk1', n_bing1='$n_bing1', n_fsk1='$n_fsk1', 
n2='$n2', n_mtk2='$n_mtk2', n_bing2='$n_bing2', n_fsk2='$n_fsk2',
n3='$n3', n_mtk3='$n_mtk3', n_bing3='$n_bing3', n_fsk3='$n_fsk3',
n4='$n4', n_mtk4='$n_mtk4', n_bing4='$n_bing4', n_fsk4='$n_fsk4',
n5='$n5', n_mtk5='$n_mtk5', n_bing5='$n_bing5', n_fsk5='$n_fsk5' where no='$no'");
if($query){
echo "Berhasil update data ke database ";
?>
<a href="tabel2.php"><br>Lihat data di Tabel</a>
<meta http-equiv="refresh" content="0 ;URL=nilai.php?no=<?php echo $no ?>"><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>