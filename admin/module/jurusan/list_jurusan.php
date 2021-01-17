<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Advanced Table</h4>
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
                          <th>Jurusan</th>
                          <th>Biaya Praktek</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $kueriJurusan = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan");
                          while ($jrs = mysqli_fetch_array($kueriJurusan)) {
                        ?>

                        <tr>
                          <td><?php echo $jrs['jurusan']; ?></td>
                          <td>Rp. <?php echo number_format($jrs['biaya']); ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=edit_jurusan&id_jurusan=<?php echo $jrs['id_jurusan']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo $admin_url; ?>module/jurusan/aksi_hapus.php?id_jurusan=<?php echo $jrs['id_jurusan']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                      </table>

                       <div class="card-footer pt-0">
                        <a href="<?php echo $admin_url; ?>main.php?module=tambah_jurusan">
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