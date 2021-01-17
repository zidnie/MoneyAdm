<?php 
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idSiswa = $_POST['id_siswa'];
	$idJen = $_POST['id_jenis'];
	$tanggal_bayar = date("Y-m-d");
	$biaya = $_POST['biaya'];
	
	$queryProses = mysqli_query($koneksi, "INSERT INTO tbl_tahunan (id_siswa, id_jenis, tanggal, biaya) VALUES ('$idSiswa', '$idJen','$tanggal_bayar', '$biaya')");
		if ($queryProses) {
			echo "<script>alert('Data Berhasil Masuk'); window.location='$admin_url'+'main.php?module=transaksi';</script>";
		}else{
			echo "<script>alert('Transaksi Gagal Masuk');  window.location='$admin_url'+'main.php?module=bayar_praktek;</script>";
		}
 ?>
