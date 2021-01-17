<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$kelas = trim($_POST['kelas']);
	$biaya = $_POST['biaya'];

	if ($kelas=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'main.php?module=tambah_kelas';</script>";	
	} elseif (!is_numeric($biaya)){
                echo "<script>alert('Data biaya harus angka'); window.location='$admin_url'+'main.php?module=tambah_kelas';</script>";
    } else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_kelas (kelas, biaya) 
					VALUES ('$kelas', '$biaya')" );
			if($querySimpan){
				echo "<script>alert('Data Kelas Berhasil Masuk'); window.location='$admin_url'+'main.php?module=kelas';</script>";
			}else{
				echo "<script>alert('Data Kelas Gagal Masuk'); window.location='$admin_url'+'main.php?module=tambah_kelas';</script>";
			}
	}
}
 ?>