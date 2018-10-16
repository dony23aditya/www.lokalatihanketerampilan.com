<?php
include "koneksi.php";
$no = $_POST['no'];
$nama_lengkap=$_POST['nama_lengkap'];
$nisn=$_POST['nisn'];
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

$query=mysql_query("update biodata set nama_lengkap='$nama_lengkap', nisn='$nisn', 
alamat='$alamat', no_telp='$no_telp', sekolah_asal='$sekolah_asal', prodi='$prodi' ,jurusan='$jurusan', nama_a='$nama_a' , alamat_a='$alamat_a', pekerjaan_a='$pekerjaan_a', 
nama_i='$nama_i', alamat_i='$alamat_i' , pekerjaan_i='$pekerjaan_i' , telp_a='$telp_a', telp_i='$telp_i' 
where no='$no'");
if($query ){
echo "Berhasil update data ke database ";
?>
<a href="tabel2.php"><br>Lihat data di Tabel</a>
<meta http-equiv="refresh" content="0 ;URL=tabel2.php"><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>