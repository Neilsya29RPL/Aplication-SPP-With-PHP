<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cetak Tunggakan</title>
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
                   <h4>Data Tunggakan</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Jatuh Tempo</th>
                            <th>Keterangan</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                        <?php 
                                $date = date('Y-m-d');
                                $qry_pembayaran= mysqli_query($conn ,"select * from pembayaran join spp on pembayaran.id_spp=spp.id_spp WHERE nisn = '$data[nisn]' and jatuh_tempo < '$date' and tgl_bayar IS NULL ORDER BY jatuh_tempo ASC ");
                                $i=1;
                                $total=0;
                                while($data_pembayaran=mysqli_fetch_array($qry_pembayaran)){
                               ?>
                                        <tr>
                                            <td><?=$i?></td>
                                            <td><?=$data_pembayaran['bulan_spp']?></td>
                                            <td><?=$data_pembayaran['tahun_spp']?></td>
                                            <td><?=$data_pembayaran['nominal']?></td>
                                            <td><?=$data_pembayaran['jatuh_tempo']?></td>
                                            <td align='center';
                                            <?php
                                            $ket = 'LUNAS';
                                            if ($data_pembayaran['keterangan'] === $ket){
                                                echo "</a>";
                                                echo "<span class='badge badge-success px-4'>Lunas</span>";
                                            }else {
                                                echo "</a>";
                                                echo "<span class='badge badge-danger px-2'>Belum Lunas</span>";
                                                
                                            } echo "</td>
                                   </tr>
                                   ";
                                   $i++;
                                   $total += $data_pembayaran['nominal'];
                           }
                           ?>     
                           </tbody>
                                <tr>
                                    <td align="left">TOTAL TUNGGAKAN : </td>
                                    <td align="left"><b>Rp. <?= $total ?>,-</b></td>
                                </tr>                                    
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
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
