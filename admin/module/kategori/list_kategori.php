<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Kategori</h4>
                    <div class="card-header-form">
                      
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Kategori</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $kueriKat = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                          while ($kat = mysqli_fetch_array($kueriKat)) {
                        ?>

                        <tr>
                          <td><?php echo $kat['kategori']; ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=edit_kategori&id_kat=<?php echo $kat['id_kat']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kat=<?php echo $kat['id_kat']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                      </table>

                       <div class="card-footer pt-0">
                        <a href="<?php echo $admin_url; ?>main.php?module=tambah_kategori">
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