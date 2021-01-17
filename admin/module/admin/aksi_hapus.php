<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idAdmin = $_GET['id_admin'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_admin  WHERE id_admin='$idAdmin'");

	if ($queryHapus) {
		echo "<script>alert('Data Admin Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=admin';</script>";
	}else{
		echo "<script>alert('Data Admin Gagal Dihapus'); window.location = '$admin_url'+'main.php?module=admin';</script>";
	}
}
 ?>
