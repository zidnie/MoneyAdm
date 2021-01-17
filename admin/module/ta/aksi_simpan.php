<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$ta = $_POST['ta'];

	if ($ta=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'main.php?module=tambah_ta';</script>";	
	} else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_ta (ta) 
					VALUES ('$ta')" );
			if($querySimpan){
				echo "<script>alert('Data Tahun Ajaran Berhasil Masuk'); window.location='$admin_url'+'main.php?module=ta';</script>";
			}else{
				echo "<script>alert('Data Tahun Ajaran Gagal Masuk'); window.location='$admin_url'+'main.php?module=tambah_ta';</script>";
			}
	}
}
 ?>