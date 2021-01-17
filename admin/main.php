<?php 
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['password']) ) {
  include "../lib/config.php";
  echo "<center>Untuk mengakses modul, Anda harus Login <br>";
  echo "<a href=$admin_url><b>LOGIN</b></a></center>";
 }else{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Keuangan &mdash; SMK</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../admin/asset/node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../admin/asset/node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../admin/asset/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../admin/asset/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../admin/asset/assets/css/style.css">
  <link rel="stylesheet" href="../admin/asset/assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          
        </form>
        <ul class="navbar-nav navbar-right">
    
          </li>
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="asset/assets/img/money-adm.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Administrasi</div></a>
          </li>
        </ul>
      </nav>

      <!-- sidebar -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="main.php?module=home">Money-Adm</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">M-A</a>
          </div>
          <ul class="sidebar-menu">

            <?php if($_SESSION['level']=='a'){ ?>
              <li class="menu-header">Admin</li>
              <li><a class="nav-link" href="main.php?module=admin"><i class="far fa-user"></i> <span>Admin</span></a></li>
               <li><a class="nav-link" href="main.php?module=siswa"><i class="far fa-user"></i> <span>Siswa</span></a></li>

               <li class="menu-header">SPP</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Olah Pembayaran</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="main.php?module=kelas">Kelas</a></li>
                  <li><a class="nav-link" href="main.php?module=jurusan">Jurusan</a></li>
                  <li><a class="nav-link" href="main.php?module=ta">Tahun Ajaran</a></li>
                </ul>
                <li><a class="nav-link" href="main.php?module=transaksi"><i class="far fa-user"></i> <span>Transaksi SPP</span></a></li>
              </li>

          
              <li class="menu-header">Keuangan</li>
              <li><a class="nav-link" href="main.php?module=kategori"><i class="far fa-user"></i> <span>Kategori</span></a></li>
              <li><a class="nav-link" href="main.php?module=keuangan"><i class="far fa-user"></i> <span>Keuangan</span></a></li>
              <li><a class="nav-link" href="main.php?module=spp"><i class="far fa-user"></i> <span>Laporan SPP</span></a></li>
              <li><a class="nav-link" href="main.php?module=praktek"><i class="far fa-user"></i> <span>Dana Praktek</span></a></li>
               <li><a class="nav-link" href="main.php?module=tahunan"><i class="far fa-user"></i> <span>Dana Tahunan Siswa</span></a></li>
               
               <?php } else { ?>
               <?php if ($_SESSION['level']=='t') { ?>
              <li class="menu-header">SPP</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Olah Pembayaran</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="main.php?module=kelas">Kelas</a></li>
                  <li><a class="nav-link" href="main.php?module=jurusan">Jurusan</a></li>
                  <li><a class="nav-link" href="main.php?module=ta">Tahun Ajaran</a></li>
                </ul>
                <li><a class="nav-link" href="main.php?module=transaksi"><i class="far fa-user"></i> <span>Transaksi SPP</span></a></li>
              </li>
              <?php } else{ ?>
          
              <li class="menu-header">Keuangan</li>
              <li><a class="nav-link" href="main.php?module=kategori"><i class="far fa-user"></i> <span>Kategori</span></a></li>
              <li><a class="nav-link" href="main.php?module=keuangan"><i class="far fa-user"></i> <span>Keuangan</span></a></li>
              <li><a class="nav-link" href="main.php?module=spp"><i class="far fa-user"></i> <span>Laporan SPP</span></a></li>
              <li><a class="nav-link" href="main.php?module=praktek"><i class="far fa-user"></i> <span>Dana Praktek</span></a></li>
               <li><a class="nav-link" href="main.php?module=tahunan"><i class="far fa-user"></i> <span>Dana Tahunan Siswa</span></a></li>
              <?php } ?>
             <?php } ?>
              
              <li class="menu-header"></li>
              <li><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>

            </ul> 
        </aside>
           </div>


        <?php 
          if ($_GET['module'] == 'home') {
              include "module/home/home.php";
            }elseif ($_GET['module'] == 'admin'){
              include "module/admin/list_admin.php";
            }elseif ($_GET['module'] == 'tambah_admin'){
              include "module/admin/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_admin'){
              include "module/admin/form_edit.php";
            }
            // kelas
            elseif ($_GET['module'] == 'kelas'){
              include "module/kelas/list_kelas.php";
            }elseif ($_GET['module'] == 'tambah_kelas'){
              include "module/kelas/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_kelas'){
              include "module/kelas/form_edit.php";
            } // jurusan
            elseif ($_GET['module'] == 'jurusan'){
              include "module/jurusan/list_jurusan.php";
            }elseif ($_GET['module'] == 'tambah_jurusan'){
              include "module/jurusan/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_jurusan'){
              include "module/jurusan/form_edit.php";
            } // tahun ajaran
            elseif ($_GET['module'] == 'ta'){
              include "module/ta/list_ta.php";
            }elseif ($_GET['module'] == 'tambah_ta'){
              include "module/ta/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_ta'){
              include "module/ta/form_edit.php";
            } // siswa
            elseif ($_GET['module'] == 'siswa'){
              include "module/siswa/list_siswa.php";
            }elseif ($_GET['module'] == 'tambah_siswa'){
              include "module/siswa/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_siswa'){
              include "module/siswa/form_edit.php";
            } // kategori
            elseif ($_GET['module'] == 'kategori'){
              include "module/kategori/list_kategori.php";
            }elseif ($_GET['module'] == 'tambah_kategori'){
              include "module/kategori/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_kategori'){
              include "module/kategori/form_edit.php";
            } // SPP
            elseif ($_GET['module'] == 'spp'){
              include "module/spp/list_spp.php";
            } // Praktek
            elseif ($_GET['module'] == 'praktek'){
              include "module/spp/list_praktek.php";
            } // Tahunan
            elseif ($_GET['module'] == 'tahunan'){
              include "module/spp/list_tahunan.php";
            } // Keuangan
            elseif ($_GET['module'] == 'keuangan'){
              include "module/keuangan/list_keuangan.php";
            }elseif ($_GET['module'] == 'tambah_keuangan'){
              include "module/keuangan/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_keuangan'){
              include "module/keuangan/form_edit.php";
            } // Bulan
            elseif ($_GET['module'] == 'bulan'){
              include "module/bulan/list_bulan.php";
            }
             // pengeluaran
            elseif ($_GET['module'] == 'tambah_pengeluaran'){
              include "module/pengeluaran/form_tambah.php";
            }elseif ($_GET['module'] == 'edit_pengeluaran'){
              include "module/pengeluaran/form_edit.php";
            } // laporan
            elseif ($_GET['module'] == 'laporan_keuangan'){
              include "module/keuangan/laporan.php";
            } // Transaksi SPP
            elseif ($_GET['module'] == 'transaksi'){
              include "module/transaksi/list_transaksi.php";
            }elseif ($_GET['module'] == 'bayar_spp'){
              include "module/transaksi/form_bayar.php";
            }elseif ($_GET['module'] == 'detail_spp'){
              include "module/transaksi/form_detail.php";
            } elseif ($_GET['module'] == 'bayar_praktek'){
              include "module/transaksi/form_praktek.php";
            } elseif ($_GET['module'] == 'bayar_lainnya'){
              include "module/transaksi/form_lainnya.php";
            } elseif ($_GET['module'] == 'lanjut'){
              include "module/transaksi/form_lanjut.php";
            }
       ?>
       ?>

      <!-- end sidebar -->

      <!-- Main Content -->
    
          

      <!-- footer -->
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> 
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../admin/asset/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../admin/asset/assets/js/scripts.js"></script>
  <script src="../admin/asset/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../admin/asset/assets/js/page/index.js"></script>
</body>
</html>
<?php } ?>