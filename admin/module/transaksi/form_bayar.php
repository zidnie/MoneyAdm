<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Pembayaran SPP</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idSiswa = $_GET['id_siswa'];
  $idKls = $_GET['id_kelas'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kelas WHERE id_kelas='$idKls'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $biaya =  $hasilQuery['biaya'];
?>

                  <div class="card-body">
                    <form action="module/transaksi/aksi_transaksi.php" method="post">
                      <input type="hidden" name="id_siswa" value="<?php echo $idSiswa; ?>">
                      <input type="hidden" name="id_spp" value="<?php echo $idSpp; ?>">
                      <input type="hidden" name="biaya" value="<?php echo $biaya; ?>">
                    
                    <div class="form-group">
                      <label>Bulan</label>
                      <select class="form-control" name="id_bulan">
                        <?php
                          include "../lib/koneksi.php";
                          $kueriBul = mysqli_query($koneksi,"SELECT * FROM tbl_bulan");
                          while($bul=mysqli_fetch_array($kueriBul)){?>
                        <option value="<?php echo $bul['id_bulan']; ?>"><?php echo $bul['bulan']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Total Bayar</label>
                      <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Tahun Ajaran" value="<?php echo $biaya; ?>" disabled>
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