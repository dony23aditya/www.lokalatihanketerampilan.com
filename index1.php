<?php if(isset($_COOKIE["ceklogin"])) { ?>
<meta http-equiv="refresh" content="0 ;URL=tabel2.php">
<?php } else { ?>
<html>
<body background="image/bg.jpg">
<H1><p align="center">LOKA LATIHAN KETERAMPILAN</H1></p>
<hr />
<p align="center"><br>
Selamat Datang, silahkan Login melalui <a href="login.php"> Admin</a> atau <a href="login_peserta.php">Peserta</a>
<br><br>Daftar <a href="daftar.php">disini</a> atau lihat <a href="data.php">data peserta</a>
<br>
<br>
<a href="tabel_urut.php">Lihat Rangking Peserta</a>
<?php
}
?>
