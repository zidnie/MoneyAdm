<html>
<body>

<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Keuangan.xls");
	?>
 
	<center>
		<h1>Laporan Keuangan <br/> SMK Muhammadiyah Mungkid</h1>
	</center>
 
	<table border="1">
		<tr>
			<th>Tanggal</th>
			<th>Kategori</th>
			<th>Keterangan</th>
			<th>Pemasukan</th>
			<th>Pengeluaran</th>
		</tr>
		<?php 
 include "../../../lib/config.php";
 include "../../../lib/koneksi.php";

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from tbl_keuangan");
 $totalpem = 0;
 $totalpeng = 0;
 while($d = mysqli_fetch_array($data)){
	$totalpem += $d['pemasukan'];
		$totalpeng += $d['pengeluaran'];
 ?>


		<tr>
			<td><?php echo $d['tanggal']; ?></td>
			<td><?php
                                        $kueriKat = mysqli_query($koneksi, "SELECT * FROM tbl_kategori"); 
                                        while ($kat = mysqli_fetch_array($kueriKat)) {
                                        if($d['id_kat'] == $kat['id_kat']){echo $kat['kategori'];}
                                        } ?></td>
			<td><?php echo $d['keterangan']; ?></td>
			 <td>Rp. <?php 
                                    if ($d['pemasukan'] == 0) {
                                      echo "-";
                                    } else {
                                      echo number_format ($d['pemasukan']); 
                                    } ?></td>

                                    <td>Rp. <?php 
                                    if ($d['pengeluaran'] == 0) {
                                      echo "-";
                                    } else {
                                      echo number_format ($d['pengeluaran']); 
                                    } ?></td>
		</tr>
		 
		
		<?php 
 }

 ?>
 <tr>
			<td colspan="3">Total</td>
			<td>Rp. <?php echo number_format($totalpem); ?></td>
			<td>Rp. <?php echo number_format($totalpeng) ; ?></td>
		</tr>
	</table>
</body>
</html>