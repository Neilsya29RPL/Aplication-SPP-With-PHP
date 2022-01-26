<?php
if($_POST){
    $nisn=$_POST['nisn'];
        if(empty($nisn)){
            echo "<script>alert('nisn tidak boleh kosong');location.href='login_siswa.php';</script>";
        } else {
            include "koneksi.php";
            $qry_siswa=mysqli_query($conn,"select * from siswa where nisn = '".$nisn."'");
        if(mysqli_num_rows($qry_siswa)>0){
            $dt_login_siswa=mysqli_fetch_array($qry_siswa);
                session_start();
                $_SESSION['nisn']=$dt_login_siswa['nisn'];
                echo "<script>alert('Login Siswa Success');location.href='index_siswa.php';</script>";
        }else {
            echo "<script>alert('nisn tidak benar');location.href='login_siswa.php';</script>";
            }
        }
    }
?>