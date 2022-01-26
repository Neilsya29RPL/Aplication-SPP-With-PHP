<?php
    include "koneksi.php";
    if($_POST){
        $id_petugas=$_POST['id_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $nama_petugas=$_POST['nama_petugas'];
        $level=$_POST['level'];
        
        if(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } else {
            include "koneksi.php";
            if(empty($password)){
                $update=mysqli_query($conn,"update petugas set username='".$username."',password='".$password."',nama_petugas='".$nama_petugas."',level='".$level."' where id_petugas= '".$id_petugas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
            }
            } else {
                $update=mysqli_query($conn,"update petugas set username='".$username."',password='".$password."',nama_petugas='".$nama_petugas."',level='".$level."' where id_petugas= '".$id_petugas."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_petugas.php?id_petugas=".$id_petugas."';</script>";
                }
            }
        }
    }    
?>