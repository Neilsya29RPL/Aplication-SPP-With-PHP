<?php 
    include 'koneksi.php';
    session_start();

    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas'];
    $alamat=$_POST['alamat'];
    $no_telp= $_POST['no_telp'];
    $id_spp= $_POST['id_spp'];
    
    $awaltempo = $_POST['jatuh_tempo'];
    $id_spp = $_POST['id_spp'];
    
    $sql = "insert into siswa (nisn, nis, nama, id_kelas, alamat, no_telp,id_spp) values ('" . $nisn . "', '" . $nis . "', '" .$nama . "', '" .$id_kelas . "', '" .$alamat . "', '" .$no_telp . "', '" .$id_spp . "');";

    $result = mysqli_query($conn, $sql);
    if(!$result){
        // echo "<script>alert('Failed add student');location.href='tambah_siswa.php';</script>";
    }else{
        for($i=0; $i<12; $i++){
        $jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));
 		$bulan     = date("m" ,strtotime($jatuhtempo));
        $tahun = date("Y", strtotime($jatuhtempo));

        $add = mysqli_query($conn,"INSERT INTO pembayaran(nisn , jatuh_tempo, bulan_spp, id_spp, tahun_spp) 
        VALUES ('$nisn','$jatuhtempo','$bulan','$id_spp', '$tahun')");
        echo "<script>alert('Success add student');location.href='tampil_siswa.php';</script>";           
        }
    } 
?>




