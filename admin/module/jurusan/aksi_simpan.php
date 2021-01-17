<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$jurusan = $_POST['jurusan'];
	$biaya = $_POST['biaya'];

	if ($jurusan=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'main.php?module=tambah_jurusan';</script>";	
	} else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_jurusan (jurusan, biaya) 
					VALUES ('$jurusan', '$biaya')" );
			if($querySimpan){
				echo "<script>alert('Data Jurusan Berhasil Masuk'); window.location='$admin_url'+'main.php?module=jurusan';</script>";
			}else{
				echo "<script>alert('Data Jurusan Gagal Masuk'); window.location='$admin_url'+'main.php?module=tambah_jurusan';</script>";
			}
	}
}
 ?>