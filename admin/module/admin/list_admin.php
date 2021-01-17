<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
            


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Admin</h4>
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
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Username</th>
                          <th>Nama Lengkap</th>
                          <th>Password</th>
                          <th>Email</th>
                          <th>Level</th>
                          <th>Action</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $kueriAdmin = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
                          while ($adm = mysqli_fetch_array($kueriAdmin)) {
                        ?>

                        <tr>
                          <td><?php echo $adm['username']; ?></td>
                          <td>
                            <?php echo $adm['nama_lengkap']; ?>
                          </td>
                          <td>
                            <?php echo $adm['password']; ?>
                          </td>
                          <td><?php echo $adm['email']; ?></td>
                          <td><div class="badge badge-info"><?php
                          if ($adm['level'] == "a") {
                             echo "Admin";
                           } elseif ($adm['level'] == "t") {
                             echo "Tata Usaha";
                           } else {
                             echo "Bendahara";
                           } ?></div></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=edit_admin&id_admin=<?php echo $adm['id_admin']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo $admin_url; ?>module/admin/aksi_hapus.php?id_admin=<?php echo $adm['id_admin']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                      </table>

                       <div class="card-footer pt-0">
                        <a href="<?php echo $admin_url; ?>main.php?module=tambah_admin">
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