<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$username = trim($_POST['username']);
	$namaLengkap = trim($_POST['namaLengkap']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);

	if ($username=="" && $namaLengkap=="" && $password=="" && $email=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'main.php?module=tambah_admin';</script>";	
	} else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_admin ( username, nama_lengkap, password, email) 
					VALUES ('$username','$namaLengkap', '$password', '$email')" );
			if($querySimpan){
				echo "<script>alert('Data Admin Berhasil Masuk'); window.location='$admin_url'+'main.php?module=admin';</script>";
			}else{
				echo "<script>alert('Data Admin Gagal Masuk'); window.location='$admin_url'+'main.php?module=tambah_admin';</script>";
			}
	}
}
 ?>