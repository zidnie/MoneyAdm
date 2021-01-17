 <div class="main-content">
        <section class="section">
          <div class="section-header">
<div class="row">

<div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                  <div class="card-header">
                    <h4>Tambah Admin</h4>
                  </div>

                  <div class="card-body">
                    <form action="module/admin/aksi_simpan.php" method="post">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>

                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap">
                    </div>
                    
                    <div class="form-group">
                      <label>Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control pwstrength" data-indicator="pwindicator" id="password" name="password" placeholder="Password">
                      </div>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                    <select class="form-control" name="level">
                         <option value="A">Admin</option>
                          <option value="T">Tata Usaha</option>
                          <option value="B">Bendahara</option>
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