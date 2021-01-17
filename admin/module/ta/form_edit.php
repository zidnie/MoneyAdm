 <div class="main-content">
        <section class="section">
          <div class="section-header">
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Edit Tahun Ajaran</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idTa = $_GET['id_ta'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_ta WHERE id_ta='$idTa'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $idTa = $hasilQuery['id_ta'];
  $ta = $hasilQuery['ta'];
?>

                  <div class="card-body">
                    <form action="module/ta/aksi_edit.php" method="post">
                      <input type="hidden" name="id_ta" value="<?php echo $idTa; ?>">
                    <div class="form-group">
                      <label>Tahun Ajaran</label>
                      <input type="text" class="form-control" id="ta" name="ta" placeholder="Tahun Ajaran" value="<?php echo $ta; ?>">
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