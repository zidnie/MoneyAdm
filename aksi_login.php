<?php 
 	include "lib/config.php";
	include "lib/koneksi.php";

	$nis = $_POST['nis'];
	$password = $_POST['password'];
	
	$queryLogin = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE nis = '$nis' AND password = '$password'");
	$resultQuery = mysqli_num_rows($queryLogin);
	$result = mysqli_fetch_array($queryLogin);
	$status = $result['status'];

	if ($resultQuery>0) {
		session_start();
		if($status == 'Y') {
		$_SESSION['idSiswa'] = $result['id_siswa'];
		header('location:main.php');
	} else {
		echo("<script>alert('Akun anda sedang di Non Aktif kan'); window.location='index.php';</script>");
	}
	} else{
		echo "<script>alert('Data Login Salah'); window.location='index.php';</script>";	
	}
 ?>