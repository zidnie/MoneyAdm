<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idJur = $_GET['id_jurusan'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_jurusan  WHERE id_jurusan='$idJur'");

	if ($queryHapus) {
		echo "<script>alert('Data Jurusan Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=jurusan';</script>";
	}else{
		echo "<script>alert('Data Jurusan Gagal Dihapus'); window.location = '$admin_url'+'main.php?module=jurusan';</script>";
	}
}
 ?>
