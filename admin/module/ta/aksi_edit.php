<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idTa = $_POST['id_ta'];
    $ta = $_POST['ta'];

	if ($ta=="") {
                echo "<script>alert('Data tahun ajaran tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_ta&id_ta='+$idTa;</script>";
	}else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_ta SET 
                    ta = '$ta', 
                    WHERE id_ta = '$idTa' " );
            if($queryEdit){
                echo "<script>alert('Data Tahun Ajaran Berhasil Diubah'); window.location='$admin_url'+'main.php?module=ta';</script>";
            }else{
                echo "<script>alert('Data Tahun Ajaran Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_ta&id_ta='+$idTa;</script>";
            }
	}
}
 ?>