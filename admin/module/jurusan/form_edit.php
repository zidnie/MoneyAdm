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
  
  $idJur = $_GET['id_jurusan'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan WHERE id_jurusan='$idJur'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $idJur = $hasilQuery['id_jurusan'];
  $jur = $hasilQuery['jurusan'];
  $biaya = $hasilQuery['biaya'];
?>

                  <div class="card-body">
                    <form action="module/jurusan/aksi_edit.php" method="post">
                      <input type="hidden" name="id_jurusan" value="<?php echo $idJur; ?>">
                    <div class="form-group">
                      <label>Jurusan</label>
                      <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?php echo $jur; ?>">
                    </div>

                    <div class="form-group">
                      <label>Biaya</label>
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