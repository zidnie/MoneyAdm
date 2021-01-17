<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idKat = $_POST['id_kat'];
    $kat = $_POST['kategori'];

	if ($kat=="") {
                echo "<script>alert('Data Kategori tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_kategori&id_kat='+$idKat;</script>";
	} else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_kategori SET  
                    kategori = '$kat',
                    WHERE id_kat = '$idKat' " );
            if($queryEdit){
                echo "<script>alert('Data Kategori Berhasil Diubah'); window.location='$admin_url'+'main.php?module=kategori';</script>";
            }else{
                echo "<script>alert('Data Rekening Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_rekening&id_rek='+$idRek;</script>";
            }
	}
}
 ?>