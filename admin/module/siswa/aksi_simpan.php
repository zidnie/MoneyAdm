<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  	echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  	echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$idKls = $_POST['idKls'];
	$idJur = $_POST['idJur'];
	$idTa = $_POST['idTa'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$wali = $_POST['wali'];
	$password = $_POST['password'];
	$status = $_POST['status'];

	$queryCek = mysqli_query($koneksi, "SELECT nis FROM tbl_siswa WHERE nis = '$nis'");
	$jml = mysqli_num_rows($queryCek);

	if ($jml>0) {
		echo "<script>alert('NIS telah terdata'); window.location= '$admin_url'+'main.php?module=tambah_siswa';</script>";
	}
	elseif ($nis=="" && $nama=="" && $password=="") {
				echo "<script>alert('Data tidak boleh kosong'); window.location='$admin_url'+'main.php?module=tambah_siswa';</script>";	
	} elseif (!is_numeric($nis)){
                echo "<script>alert('Data NIS harus angka'); window.location='$admin_url'+'main.php?module=tambah_siswa';</script>";
    }
    else{
	$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_siswa (nis, nama, id_kelas, id_jurusan, id_ta, agama, alamat, jk, wali, password, status) 
					VALUES ('$nis', '$nama', '$idKls', '$idJur', '$idTa', '$agama', '$alamat', '$jk', '$wali', '$password', '$status')" );
			if($querySimpan){
				echo "<script>alert('Data Siswa Berhasil Masuk'); window.location='$admin_url'+'main.php?module=siswa';</script>";
			}else{
				echo "<script>alert('Data Siswa Gagal Masuk'); window.location='$admin_url'+'main.php?module=tambah_siswa';</script>";
			}
	}
}
 ?>