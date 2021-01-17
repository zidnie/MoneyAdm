<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Kelas</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Kelas</th>
                          <th>Biaya SPP per-Bulan</th>
                          <th></th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $kueriKelas = mysqli_query($koneksi, "SELECT * FROM tbl_kelas");
                          while ($kls = mysqli_fetch_array($kueriKelas)) {
                        ?>

                        <tr>
                          <td><?php echo $kls['kelas']; ?></td>
                          <td>Rp. <?php echo number_format($kls['biaya']); ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=edit_kelas&id_kelas=<?php echo $kls['id_kelas']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo $admin_url; ?>module/kelas/aksi_hapus.php?id_kelas=<?php echo $kls['id_kelas']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                      </table>

                       <div class="card-footer pt-0">
                        <a href="<?php echo $admin_url; ?>main.php?module=tambah_kelas">
                    <button class="btn btn-primary">Add</button>
                  </div>
                    </div>
                  </div>
                </div>
              </div>


          </div>
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>