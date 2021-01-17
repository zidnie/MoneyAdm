<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Pembayaran Uang Praktek</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idSiswa = $_GET['id_siswa'];
  $idJur = $_GET['id_jurusan'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan WHERE id_jurusan='$idJur'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $jur = $hasilQuery['jurusan'];
  $biaya =  $hasilQuery['biaya'];
?>

                  <div class="card-body">
                    <form action="module/transaksi/aksi_praktek.php" method="post">
                      <input type="hidden" name="id_siswa" value="<?php echo $idSiswa; ?>">
                      <input type="hidden" name="id_jurusan" value="<?php echo $idJur; ?>">
                      <input type="hidden" name="biaya" value="<?php echo $biaya; ?>">
                    
                    <div class="form-group">
                      <label>Jurusan</label>
                      <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?php echo $jur; ?>" disabled>
                <div class="validation"></div>
                    </div>

                    <div class="form-group">
                      <label>Total Bayar</label>
                      <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Total" value="<?php echo $biaya; ?>" disabled>
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