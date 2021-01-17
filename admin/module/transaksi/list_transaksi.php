<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Transaksi SPP</h4>
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
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=bayar_spp&id_siswa=<?php echo $siswa['id_siswa']; ?>&id_kelas=<?php echo $siswa['id_kelas']; ?> " class="btn btn-info">SPP</a>

                            <a href="<?php echo $admin_url; ?>main.php?module=bayar_praktek&id_siswa=<?php echo $siswa['id_siswa']; ?>&id_jurusan=<?php echo $siswa['id_jurusan']; ?> " class="btn btn-warning">Praktek</a>

                            <a href="<?php echo $admin_url; ?>main.php?module=bayar_lainnya&id_siswa=<?php echo $siswa['id_siswa']; ?>" class="btn btn-success">Lainnya..</a>

                            <a href="<?php echo $admin_url; ?>main.php?module=detail_spp&id_siswa=<?php echo $siswa['id_siswa']; ?>" class="btn btn-danger">Detail Pembayaran</a>
                            </td>
                        </tr>

                    <?php } ?>
                      </table>
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