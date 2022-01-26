<?php
    if($_POST){
    $id_pembayaran=$_POST['id_pembayaran'];
    $id_petugas=$_POST['id_petugas'];
    $nisn=$_POST['nisn'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $bulan=$_POST['bulan'];
    $id_spp=$_POST['id_spp']; 
    $jumlah_bayar= $_POST['jumlah_bayar'];
    if(empty($nisn)){
        echo "<script>alert('nisn tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into pembayaran (id_pembayaran,id_petugas, nisn, tgl_bayar, bulan, id_spp, jumlah_bayar) value ('".$id_pembayaran."','".$id_petugas."','".$nisn."','".$tgl_bayar."','".$bulan."','".$id_spp."','".$jumlah_bayar."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script>alert('Sukses menambahkan transaksi');location.href='tampil_pembayaran.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_pembayaran.php';</script>";
    }
    }
    }
?>

