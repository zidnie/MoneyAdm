<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idKelas = $_GET['id_kelas'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kelas  WHERE id_kelas='$idKelas'");

	if ($queryHapus) {
		echo "<script>alert('Data Kelas Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=kelas';</script>";
	}else{
		echo "<script>alert('Data Kelas Gagal Dihapus'); window.location = '$admin_url'+'main.php?module=kelas';</script>";
	}
}
 ?>
