 <div class="main-content">
        <section class="section">
          <div class="section-header">
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Edit Kategori</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idKat = $_GET['id_kat'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kat='$idKat'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $idKat = $hasilQuery['id_kat'];
  $kat = $hasilQuery['kategori'];
?>

                  <div class="card-body">
                    <form action="module/kategori/aksi_edit.php" method="post">
                      <input type="hidden" name="id_kat" value="<?php echo $idKat; ?>">
    
                    <div class="form-group">
                      <label>Kategori</label>
                      <input type="text" class="form-control" id="kat" name="kat" placeholder="Kategori" value="<?php echo $kat; ?>">
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