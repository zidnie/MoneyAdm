<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idJur = $_POST['id_jurusan'];
    $jur = $_POST['jurusan'];
    $biaya = $_POST['biaya'];

	if ($jur=="") {
                echo "<script>alert('Data jurusan tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_jurusan&id_jurusan='+$idJur;</script>";
	}else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_jurusan SET 
                    jurusan = '$jur',
                    biaya = '$biaya' 
                    WHERE id_jurusan = '$idJur' " );
            if($queryEdit){
                echo "<script>alert('Data Jurusan Berhasil Diubah'); window.location='$admin_url'+'main.php?module=jurusan';</script>";
            }else{
                echo "<script>alert('Data Jurusan Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_jurusan&id_jurusan='+$idJur;</script>";
            }
	}
}
 ?>