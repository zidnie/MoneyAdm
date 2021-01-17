<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idKelas = $_POST['id_kelas'];
    $kelas = trim($_POST['kelas']);
    $biaya = $_POST['biaya'];

	if ($kelas=="") {
                echo "<script>alert('Data kelas tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_kelas&id_kelas='+$idKelas;</script>";
	} elseif (!is_numeric($kelas)){
                echo "<script>alert('Data kelas harus angka'); window.location='$admin_url'+'main.php?module=edit_kelas&id_kelas='+$idKelas;</script>";
    } else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_kelas SET 
                    kelas = '$kelas', 
                    biaya = '$biaya'
                    WHERE id_kelas = '$idKelas' " );
            if($queryEdit){
                echo "<script>alert('Data Kelas Berhasil Diubah'); window.location='$admin_url'+'main.php?module=kelas';</script>";
            }else{
                echo "<script>alert('Data Kelas Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_kelas&id_kelas='+$idKelas;</script>";
            }
	}
}
 ?>