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
  
  $idKeu = $_GET['id_keu'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_keuangan WHERE id_keu='$idKeu'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $id_keu = $hasilQuery['id_keu'];
  $tanggal = $hasilQuery['tanggal'];
  $idKat = $hasilQuery['id_kat'];
  $ket = $hasilQuery['keterangan'];
  $pem = $hasilQuery['pemasukan'];
  $peng = $hasilQuery['pengeluaran'];

?>

                  <div class="card-body">
                    <form action="module/keuangan/aksi_edit.php" method="post">
                      <input type="hidden" name="id_keu" value="<?php echo $idKeu; ?>">

                      <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>">
                    </div>

                      <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="idKat">
                        <?php
                          $kueriKat = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");
                          while($kat=mysqli_fetch_array($kueriKat)){?>
                        <option value="<?php echo $kat['id_kat']; ?>"
                          <?php
                          if ($idKat == $kat['id_kat']) {
                            echo 'selected';
                          }
                          ?>>
                          <?php echo $kat['kategori']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan" value="<?php echo $ket; ?>">
                    </div>

                    <div class="form-group">
                      <label>Pemasukan</label>
                      <input type="text" class="form-control" id="pem" name="pem" placeholder="Pemasukan" value="<?php echo $pem; ?>">
                    </div>

                    <div class="form-group">
                      <label>Pengeluaran</label>
                      <input type="text" class="form-control" id="peng" name="peng" placeholder="Pemasukan" value="<?php echo $peng; ?>">
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