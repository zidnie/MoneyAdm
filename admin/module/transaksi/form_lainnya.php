<div class="main-content">
        <section class="section">
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Pembayaran SPP</h4>
                  </div>


                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                         <tr>
                          <th>Jenis Pembayaran</th>
                          <th>Total</th>                          
                        </tr>


            
                                       <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idSiswa = $_GET['id_siswa'];
      $kueriSpp = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_pembayaran");
      while ($spp = mysqli_fetch_array($kueriSpp)) {
        $jenis = $spp['jenis'];
        $biaya = $spp['biaya'];
      ?>
                    
                    
                    <div class="form-group">
        
        
                      <input type="hidden" name="id_siswa" value="<?php echo $idSiswa; ?>">
                      <input type="hidden" name="id_jenis" value="<?php echo $jenis; ?>">
                      <tr>
                      <td><?php echo $jenis; ?> </td>
                      <td>Rp. <?php echo number_format($biaya) ; ?></td>
                        
<td>
                   
                    <a href="<?php echo $admin_url; ?>main.php?module=lanjut&id_siswa=<?php echo $idSiswa; ?>&id_jenis=<?php echo $spp['id_jenis']; ?> " class="btn btn-success">Pilih</a>

                  
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