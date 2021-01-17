<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h3>Detail Pembayaran</h3>
          </div>



            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Pembayaran SPP</h4>
                    <div class="card-body">
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Bulan</th>
                          <th>Tanggal Bayar</th>
                          <th>Total Bayar</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $id_siswa = $_GET['id_siswa'];
                          $kueriSiswa = mysqli_query($koneksi, "SELECT * FROM tbl_spp where id_siswa = '$id_siswa'");
                          while ($spp = mysqli_fetch_array($kueriSiswa)) {
                        ?>

                        <tr>
                          <td>
                             <?php
                                        $kueriBulan = mysqli_query($koneksi, "SELECT * FROM tbl_bulan"); 
                                        while ($bln = mysqli_fetch_array($kueriBulan)) {
                                        if($spp['id_bulan'] == $bln['id_bulan']){echo $bln['bulan'];}
                                        } ?>
                          </td>
                          <td><?php echo $spp['tanggal']; ?></td>
                          <td>Rp. <?php echo number_format($spp['biaya']) ; ?></td>
      
                
                        </tr>

                    <?php } ?>
                      </table>

                  </div>
                  </div>
                  </div>
                  </div>

                    <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Pembayaran Praktek</h4>
                    <div class="card-body">
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Jurusan</th>
                          <th>Tanggal Bayar</th>
                          <th>Total Bayar</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $id_siswa = $_GET['id_siswa'];
                          $kueriSiswa = mysqli_query($koneksi, "SELECT * FROM tbl_praktek where id_siswa = '$id_siswa'");
                          while ($spp = mysqli_fetch_array($kueriSiswa)) {
                        ?>

                        <tr>
                          <td>
                             <?php
                                        $kueriBulan = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan"); 
                                        while ($bln = mysqli_fetch_array($kueriBulan)) {
                                        if($spp['id_jurusan'] == $bln['id_jurusan']){echo $bln['jurusan'];}
                                        } ?>
                          </td>
                          <td><?php echo $spp['tanggal']; ?></td>
                          <td>Rp. <?php echo number_format($spp['biaya']) ; ?></td>
      
                
                        </tr>

                    <?php } ?>
                      </table>

    
                  </div>
                  </div>
                  </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Detail Pembayaran Lainnya..</h4>
                    <div class="card-body">
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>Jenis</th>
                          <th>Tanggal Bayar</th>
                          <th>Total Bayar</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $id_siswa = $_GET['id_siswa'];
                          $kueriSiswa = mysqli_query($koneksi, "SELECT * FROM tbl_tahunan where id_siswa = '$id_siswa'");
                          while ($spp = mysqli_fetch_array($kueriSiswa)) {
                        ?>

                        <tr>
                          <td>
                             <?php
                                        $kueriBulan = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_pembayaran"); 
                                        while ($bln = mysqli_fetch_array($kueriBulan)) {
                                        if($spp['id_jenis'] == $bln['id_jenis']){echo $bln['jenis'];}
                                        } ?>
                          </td>
                          <td><?php echo $spp['tanggal']; ?></td>
                          <td>Rp. <?php echo number_format($spp['biaya']) ; ?></td>
      
                
                        </tr>

                    <?php } ?>
                      </table>

    
                  </div>
                  </div>
                  </div>
                  </div>

                  </div>
                    






          <div class="section-body">
          </div>
        </section>
      </div>