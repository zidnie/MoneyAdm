<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}else{
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idSiswa = $_GET['id_siswa'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_siswa WHERE id_siswa='$idSiswa'");

	if ($queryHapus) {
		echo "<script>alert('Data Siswa Berhasil Dihapus'); window.location = '$admin_url'+'main.php?module=siswa';</script>";
	}else{
		echo "<script>alert('Data Siswa Dihapus'); window.location = '$admin_url'+'main.php?module=siswa';</script>";
	}
}
 ?>
