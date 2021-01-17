<?php 
session_start();
include "lib/koneksi.php";
include "lib/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MoneyAdm</title>
        <link type="text/css" href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="asset/css/theme.css" rel="stylesheet">
        <link type="text/css" href="asset/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='asset/http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="">History Pembayaran Siswa</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                       
                        <ul class="nav pull-right">
                          <?php if (!empty($_SESSION['idSiswa'])) {  
                            $idSiswa = $_SESSION['idSiswa'];
                            $queryDaftar=mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id_siswa = $idSiswa");
                            $res = mysqli_fetch_array($queryDaftar);
                            $idSiswa = $res['id_siswa'];
                          ?> 
                            <li><a href="">Hallo, <?php echo $res['nama']; ?></a></li>
                            
                            <li><a href="logout.php">Logout</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">


                            <div class="module">

                                  
                               <div class="module-head">
                <h3>Data Siswa</h3>
              </div>
              <div class="module-body">

                  <form class="form-horizontal row-fluid">

                    <?php 
                                  $idSiswa = $_SESSION['idSiswa'];
                                 
                                  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_siswa WHERE id_siswa='$idSiswa'");

                                  $hasilQuery = mysqli_fetch_array($queryEdit);
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

                    <div class="control-group">
                      <label class="control-label" for="basicinput">NIS</label>
                      <div class="controls">
                        <input type="text" id="nama" value="<?php echo $nis; ?>" class="span8" disabled>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Nama</label>
                      <div class="controls">
                        <input type="text" id="nama" value="<?php echo $nama; ?>" class="span8" disabled>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Agama</label>
                      <div class="controls">
                        <input type="text" id="nama" value="<?php echo $agama; ?>" class="span8" disabled>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Alamat</label>
                      <div class="controls">
                        <input type="text" id="nama" value="<?php echo $alamat; ?>" class="span8" disabled>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" for="basicinput">Wali Murid</label>
                      <div class="controls">
                        <input type="text" id="nama" value="<?php echo $wali; ?>" class="span8" disabled>
                      </div>
                    </div>


                  </form>
              </div>
                                                                     
                            
                                </div>


                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        SPP yang telah Dibayar</h3>
                                </div>
                                  
                                <table class="table table-striped">
                                    
                                  <thead>
                                    <tr>
                                      <th>Bulan</th>
                                      <th>Tanggal Bayar</th>
                                      <th>Nominal</th>
                                    </tr>
                                  </thead>
                                  <?php 
                                  $idSiswa = $_SESSION['idSiswa'];
                                  $sql = mysqli_query($koneksi, "SELECT * FROM tbl_spp where id_siswa = '$idSiswa'");
                                  while ($d=mysqli_fetch_array($sql)){
                                  $idb = $d['id_bulan'];
                                  ?> 

                                  <tbody>
                                    <tr>
                                      <td><?php $query = mysqli_query($koneksi, "SELECT * FROM tbl_bulan where id_bulan = '$idb'");
                                            $x = mysqli_fetch_array($query); ?>
                                           <p><?php echo $x['bulan']; ?></td>
                                      <td><?php echo $d['tanggal']; ?></td>
                                      <td><?php echo $d['biaya']; ?></td>
                                     
                                    </tr>
                                  </tbody>
                                  <?php } ?> 
                                </table> 
                                                                     
                            
                                </div>


                                <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Biaya Praktek yang telah Dibayar</h3>
                                </div>
                                  
                                <table class="table table-striped">
                                    
                                  <thead>
                                    <tr>
                                      <th>Tanggal Bayar</th>
                                      <th>Nominal</th>
                                    </tr>
                                  </thead>
                                  <?php 
                                  $idSiswa = $_SESSION['idSiswa'];
                                  $sql = mysqli_query($koneksi, "SELECT * FROM tbl_praktek where id_siswa = '$idSiswa'");
                                  while ($d=mysqli_fetch_array($sql)){
                                  ?> 

                                  <tbody>
                                    <tr>
                                      <td><?php echo $d['tanggal']; ?></td>
                                      <td><?php echo $d['biaya']; ?></td>
                                     
                                    </tr>
                                  </tbody>
                                  <?php } ?> 
                                </table> 
                                                                     
                            
                                </div>


                                 <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Pembayaran Lainnya</h3>
                                </div>
                                  
                                <table class="table table-striped">
                                    
                                  <thead>
                                    <tr>
                                      <th>Tanggal Bayar</th>
                                      <th>Jenis Pembayaran</th>
                                      <th>Nominal</th>
                                    </tr>
                                  </thead>
                                  <?php 
                                  $idSiswa = $_SESSION['idSiswa'];
                                  $sql = mysqli_query($koneksi, "SELECT * FROM tbl_tahunan where id_siswa = '$idSiswa'");
                                  while ($d=mysqli_fetch_array($sql)){
                                  ?> 

                                  <tbody>
                                    <tr>
                                      <td><?php echo $d['tanggal']; ?></td>
                                      <td>
                                        <?php
                                        $kueriKat = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_pembayaran"); 
                                        while ($kat = mysqli_fetch_array($kueriKat)) {
                                        if($d['id_jenis'] == $kat['id_jenis']){echo $kat['jenis'];}
                                        } ?>
                                      </td>
                                      <td><?php echo $d['biaya']; ?></td>
                                     
                                    </tr>
                                  </tbody>
                                  <?php } ?> 
                                </table> 
                                                                     
                            
                                </div>


                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2021 </b> SMK Muhammadiyah Mungkid
            </div>
        </div>
        <script src="asset/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="asset/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="asset/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="asset/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="asset/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="asset/scripts/common.js" type="text/javascript"></script>
      
    </body>
