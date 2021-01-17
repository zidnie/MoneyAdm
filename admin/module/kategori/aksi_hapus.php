<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKat = $_GET['id_kat'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kategori WHERE id_kat='$idKat'");

	if ($queryHapus) {
		echo "<script>alert('Data Kategori Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=kategori';</script>";
	}else{
		echo "<script>alert('Data Kategori Gagal Dihapus'); window.location = '$admin_url'+'main.php?module=kategori';</script>";
	}
}
 ?>
