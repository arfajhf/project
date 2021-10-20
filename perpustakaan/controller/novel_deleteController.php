<?php
include("../config/app.config.php");

$id = $_GET["id"];
$sql = "DELETE FROM novel WHERE id = '$id' ";

if(mysqli_query($conn, $sql)){
    header("Location: ../pages/admin/novel_admin.php?status=sukses");
}else{
    header("Location: ../pages/admin/novel_admin.php?status=gagal");
}