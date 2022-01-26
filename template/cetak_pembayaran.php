
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cetak Pembayaran</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

  <?php 
    include 'koneksi.php';
    session_start();
    $sql = 'select * from  siswa  join kelas on siswa.id_kelas=kelas.id_kelas where nisn =' .$_GET['nisn'];
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);    
  ?>
    <div class="container-scroller">
        <!-- partial -->
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class ="card-title text-white">Laporan Pembayaran SPP</h1>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                  <div class="card-body">                 
                    <h4 class="card-title">Biodata <?= $data['nama'] ?></h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-hover table-striped  header-border zero-configuration">                       
                                <tr class="table table-dark px-2">
                                    <th>NISN</th>
                                    <td><?=$data['nisn']?></td>     
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td><?=$data['nama']?></td>     
                                </tr>
                                <tr class="table table-dark px-2">
                                    <th>Kelas</th>
                                    <td><?=$data['nama_kelas']?></td>     
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?=$data['alamat']?></td>     
                                </tr>
                                <tr class="table table-dark px-2">
                                    <th>No Telp</th>
                                    <td><?=$data['no_telp']?></td>     
                                </tr>
                                <tr>
                        </table>
                    </div>
                    </div>
                    </div>
                    </div>   
                     <?php 
                        include 'koneksi.php';
                        $sql = 'select * from  pembayaran  join spp on pembayaran.id_spp=spp.id_spp where nisn =' .$_GET['nisn'];
                        $result = mysqli_query($conn, $sql);
                        $data=mysqli_fetch_assoc($result);    
                    ?>  
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                  <div class="card-body">                 
                    <h4 class="card-title">Data Transaksi</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-hover table-striped  header-border zero-configuration">                       
                                <tr class="table table-dark px-2">
                                    <th>Nominal</th>
                                    <td><?=$data['nominal']?></td>     
                                </tr>
                                <tr>
                                    <th>Tahun SPP</th>
                                    <td><?=$data['tahun_spp']?></td>     
                                </tr>
                                <tr class="table table-dark px-2">
                                    <th>Bulan SPP</th>
                                    <td><?=$data['bulan_spp']?></td>     
                                </tr>
                                <tr>
                                    <th>Tanggal Jatuh Tempo</th>
                                    <td><?=$data['jatuh_tempo']?></td>     
                                </tr>
                                <tr class="table table-dark px-2">
                                    <th>Keterangan</th>
                                    <td><?=$data['keterangan']?></td>     
                                </tr>
                                    <th>Tanggal Bayar</th>
                                    <td><?=$data['tgl_bayar']?></td>     
                                </tr>
                                <tr>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>                                                     
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
  </body>
</html>
