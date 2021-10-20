<?php
include("../config/app.config.php");

if(isset($_POST['input'])){
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $link = $_POST['link'];

    $sql = "INSERT INTO novel (judul, pengarang, penerbit, link ) values ('$judul', '$pengarang', '$penerbit', '$link')";

    $query = mysqli_query($conn, $sql);

    $cek = mysqli_num_rows($query);

    if($query){
        header("location: ../pages/admin/novel_admin.php");
    }else{
        header("location: ../pages/admin/input_novel.php");
    }
    
}