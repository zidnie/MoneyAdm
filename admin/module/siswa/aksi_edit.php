<?php 
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
    echo "<center>Untuk mengakses modul, Anda harus Login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
}else{
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idSiswa = $_POST['id_siswa'];
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

    if ($nama=="" && $password) {
                echo "<script>alert('Data siswa tidak boleh kosong'); window.location='$admin_url'+'main.php?module=edit_siswa&id_siswa='+$idSiswa;</script>";
	} else{
    $queryEdit = mysqli_query($koneksi, 
                    "UPDATE tbl_siswa SET 
                    nama = '$nama',
                    id_kelas = '$idKls',
                    id_jurusan = '$idJur',
                    id_ta = '$idTa',
                    agama = '$agama',
                    alamat = '$alamat',
                    jk = '$jk',
                    wali = '$wali',
                    password = '$password',
                    status = '$status'
                    WHERE id_siswa = '$idSiswa' " );
            if($queryEdit){
                echo "<script>alert('Data Siswa Berhasil Diubah'); window.location='$admin_url'+'main.php?module=siswa';</script>";
            }else{
                echo "<script>alert('Data Siswa Gagal Diubah'); window.location='$admin_url'+'main.php?module=edit_siswa&id_siswa='+$idSiswa;</script>";
            }
	}
}
 ?>