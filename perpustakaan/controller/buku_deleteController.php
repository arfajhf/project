<?php
include("../config/app.config.php");

$id = $_GET["id"];
$sql = "DELETE FROM buku WHERE id_buku = '$id' ";

if(mysqli_query($conn, $sql)){
    header("Location: ../pages/admin/dashboard_admin.php?status=sukses");
}else{
    header("Location: ../pages/admin/dashboard_admin.php?status=gagal");
}
// $query = mysqli_query($conn, $sql);

// while(mysqli_fetch_array($query)){
//     if($sql == 'Geologi Pertambangan (GP)'){
//         header("location: ../pages/admin/gp_admin.php");
//     }
//     elseif($sql == 'Teknik Komputer Jaringan (TKJ)'){
//         header("location: ../pages/admin/tkj_admin.php");
//     }
//     elseif($sql == 'Rekayasa Perangkat Lunak (RPL)'){
//         header("location: ../pages/admin/rpl_admin.php");
//     }
//     elseif($sql == 'Geologi Pertambangan (GP)'){
//         header("location: ../pages/admin/gp_admin.php");
//     }
//     elseif($sql == 'Geologi Pertambangan (GP)'){
//         header("location: ../pages/admin/gp_admin.php");
//     }
//     elseif($sql == 'Geologi Pertambangan (GP)'){
//         header("location: ../pages/admin/gp_admin.php");
//     }
//     elseif($sql == 'Geologi Pertambangan (GP)'){
//         header("location: ../pages/admin/gp_admin.php");
//     }
//     elseif($sql == 'Geologi Pertambangan (GP)'){
//         header("location: ../pages/admin/gp_admin.php");
//     }else{
//         header("location: ../pages/admin/dashboard_admin.php?status=gagal");
//     }
// }