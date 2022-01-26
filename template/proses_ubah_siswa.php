<?php
    include "koneksi.php";
    if($_POST){
        $nisn=$_POST['nisn'];
        $nis=POST['nis'];
        $nama=$_$_POST['nama'];
        $id_kelas=$_POST['id_kelas'];
        $alamat=$_POST['alamat'];
        $no_telp=$_POST['no_telp'];
        $id_spp=$_POST['id_spp'];
        
        if(empty($nisn)){
            echo "<script>alert('nisn tidak boleh kosong');location.href='tampil_siswa.php';</script>";
        } else {
            $update=mysqli_query($conn,"update siswa set nis='".$nis."',nama='".$nama."',id_kelas='".$id_kelas."',alamat='".$alamat."',no_telp='".$no_telp."',id_spp='".$id_spp."' where nisn= '".$nisn."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update siswa');location.href='tampil_siswa.php';</script>";
            } else {
                echo "<script>alert('Gagal update siswa');location.href='ubah_siswa.php?nisn=".$nisn."';</script>";
            }
        }
    }
?>