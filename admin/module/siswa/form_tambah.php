<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-8">
                <div class="card">

                  <div class="card-header">
                    <h4>Tambah Siswa</h4>
                  </div>

                  <div class="card-body">
                    <form action="module/siswa/aksi_simpan.php" method="post">
                    <div class="form-group">
                      <label>NIS</label>
                      <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS">
                    </div>

                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>

                    <div class="form-group">
                      <label>Kelas</label>
                      <select class="form-control" name="idKls">
                        <?php
          include "../lib/koneksi.php";
          $kueriKls = mysqli_query($koneksi,"SELECT * FROM tbl_kelas");
          while($kls=mysqli_fetch_array($kueriKls)){?>
                        <option value="<?php echo $kls['id_kelas']; ?>"><?php echo $kls['kelas']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Jurusan</label>
                      <select class="form-control" name="idJur">
                        <?php
          include "lib/koneksi.php";
          $kueriJur = mysqli_query($koneksi,"SELECT * FROM tbl_jurusan");
          while($jur=mysqli_fetch_array($kueriJur)){?>
                        <option value="<?php echo $jur['id_jurusan']; ?>"><?php echo $jur['jurusan']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Tahun Ajaran</label>
                      <select class="form-control" name="idTa">
                        <?php
          include "lib/koneksi.php";
          $kueriTa = mysqli_query($koneksi,"SELECT * FROM tbl_ta");
          while($ta=mysqli_fetch_array($kueriTa)){?>
                        <option value="<?php echo $ta['id_ta']; ?>"><?php echo $ta['ta']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Agama</label>
                      <select class="form-control" name="agama">
                      <option value="Islam">Islam</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Konghucu">Konghucu</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>

                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jk">
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Wali Murid</label>
                      <input type="text" class="form-control" id="wali" name="wali" placeholder="Wali Murid">
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                      <option value="Y">Active</option>
                      <option value="N">Non Active</option>
                      </select>
                    </div>


                    <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Tambah</button>
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