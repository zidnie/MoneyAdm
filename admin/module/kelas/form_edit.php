 <div class="main-content">
        <section class="section">
          <div class="section-header">
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Edit Kelas</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idKelas = $_GET['id_kelas'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kelas WHERE id_kelas='$idKelas'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $idKelas = $hasilQuery['id_kelas'];
  $kelas = $hasilQuery['kelas'];
  $biaya = $hasilQuery['biaya'];
?>

                  <div class="card-body">
                    <form action="module/kelas/aksi_edit.php" method="post">
                      <input type="hidden" name="id_kelas" value="<?php echo $idKelas; ?>">
                    <div class="form-group">
                      <label>Kelas</label>
                      <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>">
                    </div>


                    <div class="form-group">
                      <label>Biaya SPP per-Bulan</label>
                      <input type="text" class="form-control" id="biaya" name="biaya" placeholder="Biaya" value="<?php echo $biaya; ?>">
                    </div>

                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Edit</button>
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