<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-8">
                <div class="card">

                  <div class="card-header">
                    <h4>Edit Siswa</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idSiswa = $_GET['id_siswa'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id_siswa='$idSiswa'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $idSiswa = $hasilQuery['id_siswa'];
  $nis = $hasilQuery['nis'];
  $nama = $hasilQuery['nama'];
  $idKls = $hasilQuery['id_kelas'];
  $idJur = $hasilQuery['id_jurusan'];
  $idTa = $hasilQuery['id_ta'];
  $agama = $hasilQuery['agama'];
  $alamat = $hasilQuery['alamat'];
  $jk = $hasilQuery['jk'];
  $wali = $hasilQuery['wali'];
  $password = $hasilQuery['password'];
  $status = $hasilQuery['status'];
?>

                  <div class="card-body">
                    <form action="module/siswa/aksi_edit.php" method="post">
                      <input type="hidden" name="id_siswa" value="<?php echo $idSiswa; ?>">
                    <div class="form-group">
                      <label>NIS</label>
                      <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" value="<?php echo $nis; ?>"disabled>
                      
                    </div>

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $nama; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label>Kelas</label>
                      <select class="form-control" name="idKls">
                        <?php
                          $kueriKls = mysqli_query($koneksi,"SELECT * FROM tbl_kelas");
                          while($kls=mysqli_fetch_array($kueriKls)){?>
                        <option value="<?php echo $kls['id_kelas']; ?>"
                          <?php
                          if ($idKls == $kls['id_kelas']) {
                            echo 'selected';
                          }
                          ?>>
                          <?php echo $kls['kelas']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Jurusan</label>
                      <select class="form-control" name="idJur">
                        <?php
          $kueriJur = mysqli_query($koneksi,"SELECT * FROM tbl_jurusan");
          while($jur=mysqli_fetch_array($kueriJur)){?>
                        <option value="<?php echo $jur['id_jurusan']; ?>"
                          <?php
                          if ($idJur == $jur['id_jurusan']) {
                            echo 'selected';
                          }
                          ?>>
                          <?php echo $jur['jurusan']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Tahun Ajaran</label>
                      <select class="form-control" name="idTa">
                        <?php
          $kueriTa = mysqli_query($koneksi,"SELECT * FROM tbl_ta");
          while($ta=mysqli_fetch_array($kueriTa)){?>
                        <option value="<?php echo $ta['id_ta']; ?>"
                          <?php
                          if ($idTa == $ta['id_ta']) {
                            echo 'selected';
                          }
                          ?>>
                          <?php echo $ta['ta']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama">
                        <option value="Islam" <?php echo ($agama == 'Islam') ? "selected": ""; ?>>Islam</option>
                        <option value="Protestan" <?php echo ($agama == 'Protestan') ? "selected": ""; ?>>Protestan</option>
                        <option value="Katolik" <?php echo ($agama == 'Katolik') ? "selected": ""; ?>>Katolik</option>
                        <option value="Hindu" <?php echo ($agama == 'Hindu') ? "selected": ""; ?>>Hindu</option>
                        <option value="Budha" <?php echo ($agama == 'Budha') ? "selected": ""; ?>>Budha</option>
                        <option value="Konghucu" <?php echo ($agama == 'Konghucu') ? "selected": ""; ?>>Konghucu</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
                    </div>

                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk">
                        <option value="L" <?php echo ($jk == 'L') ? "selected": ""; ?>>Laki-Laki</option>
                        <option value="P" <?php echo ($jk == 'P') ? "selected": ""; ?>>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Wali</label>
                      <input type="text" class="form-control" id="wali" name="wali" placeholder="Wali" value="<?php echo $wali; ?>">
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                    </div>

                     <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option value="Y" <?php echo ($status == 'Y') ? "selected": ""; ?>>Active</option>
                        <option value="N" <?php echo ($status == 'N') ? "selected": ""; ?>>Non-Active</option>
                      </select>
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