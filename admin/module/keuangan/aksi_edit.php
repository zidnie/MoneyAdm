<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $id_keu = $_POST['id_keu'];
    $tanggal = $_POST['tanggal'];
    $idKat = $_POST['idKat'];
    $ket = $_POST['ket'];
    $pem = $_POST['pem'];
    $peng = $_POST['peng'];

	if ($ket=="") {
                echo "<script>alert('Data Pemasukan tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_keuangan&id_keuangan='+$id_keu;</script>";
	} else{

    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_keuangan SET 
                    tanggal = '$tanggal',
                    id_kat = '$idKat',
                    keterangan = '$ket',
                    pemasukan = '$pem',
                    pengeluaran = '$peng'
                    WHERE id_keu = '$id_keu' " );
            if($queryEdit){
                echo "<script>alert('Data Pemasukan Berhasil Diubah'); window.location='$admin_url'+'main.php?module=keuangan';</script>";
            }else{
                echo "<script>alert('Data Pemasukan Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_keuangan&id_keu='+$id_keu;</script>";
            }
	}
}
 ?>