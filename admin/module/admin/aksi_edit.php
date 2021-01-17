<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idAdmin = $_POST['id_admin'];
    $username = trim($_POST['username']);
    $namaLengkap = trim($_POST['namaLengkap']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);

	if ($username=="" && $namaLengkap=="" && $password=="" && $email=="") {
                echo "<script>alert('Data admin tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_admin&id_admin='+$idAdmin;</script>";
	}else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_admin SET 
                    username = '$username', 
                    nama_lengkap = '$namaLengkap', 
                    password = '$password',
                    email = '$email'
                    WHERE id_admin = '$idAdmin' " );
            if($queryEdit){
                echo "<script>alert('Data Admin Berhasil Diubah'); window.location='$admin_url'+'main.php?module=admin';</script>";
            }else{
                echo "<script>alert('Data Admin Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_admin&id_admin='+$idAdmin;</script>";
            }
	}
}
 ?>