<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Siswa</h4>
                    <div class="card-header-form">
                      <form method="POST" action="">
                        <div class="input-group">
                          <input type="text" name="nis" class="form-control" placeholder="Cari NIS">
                          <div class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>NIS</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Tahun Ajaran</th>
                          <th>Agama</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Wali Murid</th>
                          <th>Password</th>
                          <th>Status</th>
                          <th> </th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";

                          if (isset($_POST['nis'])) {
                            $nis = $_POST['nis'];
                            $kueriSiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE nis='$nis'");
                          } else {
                          $kueriSiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                        }
                          while ($siswa = mysqli_fetch_array($kueriSiswa)) {
                        ?>

                        <tr>
                          <td><?php echo $siswa['nis']; ?></td>
                          <td><?php echo $siswa['nama']; ?></td>
                          <td>
                            <?php
                                        $kueriKls = mysqli_query($koneksi, "SELECT * FROM tbl_kelas"); 
                                        while ($kls = mysqli_fetch_array($kueriKls)) {
                                        if($siswa['id_kelas'] == $kls['id_kelas']){echo $kls['kelas'];}
                                        } ?>
                          </td>
                          <td>
                            <?php
                                        $kueriJur = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan"); 
                                        while ($jur = mysqli_fetch_array($kueriJur)) {
                                        if($siswa['id_jurusan'] == $jur['id_jurusan']){echo $jur['jurusan'];}
                                        } ?>
                          </td>
                          <td>
                            <?php
                                        $kueriTa = mysqli_query($koneksi, "SELECT * FROM tbl_ta"); 
                                        while ($ta = mysqli_fetch_array($kueriTa)) {
                                        if($siswa['id_ta'] == $ta['id_ta']){echo $ta['ta'];}
                                        } ?>
                          </td>
                          <td><?php echo $siswa['agama']; ?></td>
                          <td><?php echo $siswa['alamat']; ?></td>
                          <td><?php echo $siswa['jk']; ?></td>
                          <td><?php echo $siswa['wali']; ?></td>
                          <td><?php echo $siswa['password']; ?></td>
                          <td> <div class="badge badge-info"> 
                            <?php
                          if ($siswa['status'] == "Y") {
                             echo "Active";
                           } else {
                             echo "Non Active";
                           } ?></div></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=edit_siswa&id_siswa=<?php echo $siswa['id_siswa']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo $admin_url; ?>module/siswa/aksi_hapus.php?id_siswa=<?php echo $siswa['id_siswa']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                      </table>

                       <div class="card-footer pt-0">
                        <a href="<?php echo $admin_url; ?>main.php?module=tambah_siswa">
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