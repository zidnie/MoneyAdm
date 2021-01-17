<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$kat = $_POST['kat'];

	if ($kat=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'main.php?module=tambah_kategori';</script>";	
	} else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_kategori (kategori) 
					VALUES ('$kat')" );
			if($querySimpan){
				echo "<script>alert('Data Kategori Berhasil Masuk'); window.location='$admin_url'+'main.php?module=kategori';</script>";
			}else{
				echo "<script>alert('Data Kategori Gagal Masuk'); window.location='$admin_url'+'main.php?module=tambah_kategori';</script>";
			}
	}
}
 ?>