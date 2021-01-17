 <div class="main-content">
        <section class="section">
          <div class="section-header">
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Tambah Pemasukan</h4>
                  </div>

                  <div class="card-body">
                    <form action="module/keuangan/aksi_simpan.php" method="post">


                     <div class="form-group">
                      <label>Tanggal</label>
                      <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                    </div>

                     <div class="form-group">
                      <label>Kategori</label>
                      <select class="form-control" name="idKat">
                        <?php
                          include "../lib/koneksi.php";
                          $kueriKat = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");
                          while($kat=mysqli_fetch_array($kueriKat)){?>
                        <option value="<?php echo $kat['id_kat']; ?>"><?php echo $kat['kategori']; ?></option>
                        <?php } ?> 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" class="form-control" id="ket" name="ket" placeholder="Keterangan">
                    </div>

                    <div class="form-group">
                      <label>Pemasukan</label>
                      <input type="text" class="form-control" id="pem" name="pem" placeholder="Rp. ">
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