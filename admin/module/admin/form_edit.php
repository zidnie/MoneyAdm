 <div class="main-content">
        <section class="section">
          <div class="section-header">
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Edit Admin</h4>
                  </div>

                  <?php 
  include "../lib/config.php";
  include "../lib/koneksi.php";
  
  $idAdmin = $_GET['id_admin'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin='$idAdmin'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $idAdmin = $hasilQuery['id_admin'];
  $username = $hasilQuery['username'];
  $namaLengkap = $hasilQuery['nama_lengkap'];
  $password = $hasilQuery['password'];
  $email = $hasilQuery['email'];
?>

                  <div class="card-body">
                    <form action="module/admin/aksi_edit.php" method="post">
                      <input type="hidden" name="id_admin" value="<?php echo $idAdmin; ?>">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>">
                    </div>

                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" value="<?php echo $namaLengkap; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control pwstrength" data-indicator="pwindicator" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                      </div>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
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