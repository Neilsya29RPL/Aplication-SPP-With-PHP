<?php
    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama_petugas = $_POST['nama_petugas'];
        $level = $_POST['level'];
        if(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } elseif(empty($nama_petugas)){
            echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } elseif(empty($level)){
            echo "<script>alert('level tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } else {
            include "koneksi.php";
            //menambahkan data ke tabel
            $insert = mysqli_query($conn,"insert into petugas (username, password, nama_petugas, level) value ('".$username."','".$password."','".$nama_petugas."','".$level."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";
        }
        }
    }
?>