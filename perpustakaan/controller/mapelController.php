<?php

include("../config/app.config.php");

if(isset($_POST['input'])){
    $judul = $_POST['judul'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $link = $_POST['link'];
    $mapel = $_POST['mapel'];

    $sql = "INSERT INTO buku (judul_buku, kelas, jurusan, mapel, link ) values ('$judul', '$kelas', '$jurusan', '$mapel', '$link')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: ../pages/admin/dashboard_admin.php?status=berhasil");
    }else{
        header("Location: ../pages/admin/input_mapel.php?status=gagal");
    }
}