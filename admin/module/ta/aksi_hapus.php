<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idTa = $_GET['id_ta'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_ta WHERE id_ta='$idTa'");

	if ($queryHapus) {
		echo "<script>alert('Data Tahun Ajaran Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=ta';</script>";
	}else{
		echo "<script>alert('Data Tahun Ajaran Gagal Dihapus'); window.location = '$admin_url'+'main.php?module=ta';</script>";
	}
}
 ?>
