<?php
session_start();

include("../config/app.config.php");

$email = $_POST['email'];
$pass = $_POST['password'];

// $sql = "SELECT * FROM login where email='$email' and pass='$pass'";

$query = mysqli_query($conn, "SELECT * FROM pengguna where email='$email' and pass='$pass'");

$cek = mysqli_num_rows($query);

if( $cek > 0 ){
    $data = mysqli_fetch_assoc($query);

    if( $data['pringkat']=="guru"){
        $_SESSION['email'] = "$email";
        $_SESSION['pringkat'] = "guru";
        
        header("Location: ../pages/admin/dashboard_admin.php");
        
    }
    elseif( $data['pringkat']=="siswa"){
        $_SESSION['email'] = "$email";
        $_SESSION['pringkat'] = "siswa";
        
        header("Location: ../pages/anggota/dashboard.php");
        
    }else{
        header("Location: ../pages/login.php?pesan=gagal");
    }
}else{
    header("Location: ../pages/login.php?keterangan=gagal");
}