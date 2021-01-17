<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKeu = $_GET['id_keu'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_keuangan WHERE id_keu='$idKeu'");

	if ($queryHapus) {
		echo "<script>alert('Data Pemasukan Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=keuangan';</script>";
	}else{
		echo "<script>alert('Data Pemasukan Dihapus'); window.location = '$admin_url'+'main.php?module=keuangan';</script>";
	}
}
 ?>
