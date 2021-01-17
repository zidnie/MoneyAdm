<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Pembayaran Uang Tahunan</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idSiswa = $_GET['id_siswa'];
  $idJen = $_GET['id_jenis'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_pembayaran WHERE id_jenis='$idJen'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $biaya =  $hasilQuery['biaya'];
  $jenis =  $hasilQuery['jenis'];
?>

                  <div class="card-body">
                    <form action="module/transaksi/aksi_lain.php" method="post">
                      <input type="hidden" name="id_siswa" value="<?php echo $idSiswa; ?>">
                      <input type="hidden" name="id_jenis" value="<?php echo $idJen; ?>">
                      <input type="hidden" name="biaya" value="<?php echo $biaya; ?>">
                    
                    <div class="form-group">
                      <label>Jenis Pembayaran</label>
                      <input type="text" class="form-control" id="jenis" name="jenis"  value="<?php echo $jenis; ?>" disabled>
                <div class="validation"></div>
                    </div>

                    <div class="form-group">
                      <label>Total Bayar</label>
                      <input type="text" class="form-control" id="biaya" name="biaya"  value="Rp. <?php echo number_format($biaya); ?>" disabled>
                <div class="validation"></div>
                    </div>

                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Bayar</button>
                  </div>
                    </form>

                    

                  </div>
                </div>
              
              </div>

                </div>
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>