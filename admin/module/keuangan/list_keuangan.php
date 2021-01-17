<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Keuangan</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <?php
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          ?>
                          <input type="date" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>

                          </div>
                          </form>

                          <div class="text-center pt-1 pb-1">
                            <a href="<?php echo $admin_url; ?>main.php?module=tambah_keuangan" class="btn btn-primary btn-lg btn-round">
                              Tambah Pemasukan
                            </a>
                          </div>

                          <div class="text-center pt-1 pb-1">
                            <a a href="<?php echo $admin_url; ?>main.php?module=tambah_pengeluaran" class="btn btn-primary btn-lg btn-round">
                              Tambah Pengeluaran
                            </a>
                          </div>


                        </div>
                      
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <tr>
                          <th>Tanggal</th>
                          <th>Kategori</th>
                          <th>Keterangan</th>
                          <th>Pemasukan</th>
                          <th>Pengeluaran</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $kueriPem = mysqli_query($koneksi, "SELECT * FROM tbl_keuangan");
                          while ($pem = mysqli_fetch_array($kueriPem)) {
                        ?>

                        <tr>
                                    <td><?php echo $pem['tanggal']; ?></td>
                                    <td>
                                     <?php
                                        $kueriKat = mysqli_query($koneksi, "SELECT * FROM tbl_kategori"); 
                                        while ($kat = mysqli_fetch_array($kueriKat)) {
                                        if($pem['id_kat'] == $kat['id_kat']){echo $kat['kategori'];}
                                        } ?>
                                    </td>
                                    <td><?php echo $pem['keterangan']; ?></td>

                                    <td>Rp. <?php 
                                    if ($pem['pemasukan'] == 0) {
                                      echo "-";
                                    } else {
                                      echo number_format ($pem['pemasukan']); 
                                    } ?></td>

                                    <td>Rp. <?php 
                                    if ($pem['pengeluaran'] == 0) {
                                      echo "-";
                                    } else {
                                      echo number_format ($pem['pengeluaran']); 
                                    } ?></td>
                          <td>
                            <a href="<?php echo $admin_url; ?>main.php?module=edit_keuangan&id_keu=<?php echo $pem['id_keu']; ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?php echo $admin_url; ?>module/keuangan/aksi_hapus.php?id_keu=<?php echo $pem['id_keu']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-action"><i class="fas fa-trash"></i></a></td>
                        </tr>

                    <?php } ?>
                      </table>

                       <div class="card-footer pt-0">
                         <a href="module/keuangan/cetak_laporan.php">
                    <button class="btn btn-primary">Laporan</button>
                        
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