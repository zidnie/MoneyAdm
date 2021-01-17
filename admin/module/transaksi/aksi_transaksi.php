<?php 
 	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idSiswa = $_POST['id_siswa'];
	$idBulan = $_POST['id_bulan'];
	$tanggal_bayar = date("Y-m-d");
	$biaya = $_POST['biaya'];

	$queryCek = mysqli_query($koneksi, "SELECT id_bulan FROM tbl_spp WHERE id_bulan = '$idBulan'");
	$jml = mysqli_num_rows($queryCek);
	
	if ($jml>0) {
		echo "<script>alert('Transaksi pada bulan tersebut pernah dilakukan'); window.location='$admin_url'+'main.php?module=bayar_spp;</script>";
	}else{
	$queryProses = mysqli_query($koneksi, "INSERT INTO tbl_spp (id_siswa, id_bulan, tanggal, biaya) VALUES ('$idSiswa', '$idBulan','$tanggal_bayar', '$biaya')");
		if ($queryProses) {
			echo "<script>alert('Data Berhasil Masuk'); window.location='$admin_url'+'main.php?module=transaksi';</script>";
		}else{
			echo "<script>alert('Transaksi Gagal Masuk');  window.location='$admin_url'+'main.php?module=bayar_spp;</script>";
		}
	}
 ?>
