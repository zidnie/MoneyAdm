<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">


            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Pembayaran Uang Praktek Siswa</h4>
                    <div class="card-header-form">
                      
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>NIS</th>
                          <th>Jurusan</th>
                          <th>Tanggal Bayar</th>
                          <th>Jumlah</th>
                        </tr>

                        <?php 
                          include "../lib/config.php";
                          include "../lib/koneksi.php";
                          $kueriSpp = mysqli_query($koneksi, "SELECT * FROM tbl_praktek");
                          while ($spp = mysqli_fetch_array($kueriSpp)) {
                        ?>

                        <tr>

                                    <td>
                                     <?php
                                        $kueriKls = mysqli_query($koneksi, "SELECT * FROM tbl_siswa"); 
                                        while ($kls = mysqli_fetch_array($kueriKls)) {
                                        if($spp['id_siswa'] == $kls['id_siswa']){echo $kls['nis'];}
                                        } ?>
                                    </td>

                                    <td>
                                     <?php
                                        $kueriJur = mysqli_query($koneksi, "SELECT * FROM tbl_jurusan"); 
                                        while ($jur = mysqli_fetch_array($kueriJur)) {
                                        if($spp['id_jurusan'] == $jur['id_jurusan']){echo $jur['jurusan'];}
                                        } ?>
                                    </td>
                                    <td><?php echo $spp['tanggal']; ?></td>
                                    <td><?php echo $spp['biaya']; ?></td>
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