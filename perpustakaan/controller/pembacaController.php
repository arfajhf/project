<?php 

include "../config/app.config.php";

date_default_timezone_set('Asia/Jakarta');
$id = $_GET['id'];
$date = Date('Y-m-d');
$clook = Date('H:i:s');


$sql = "INSERT INTO tbl_pembaca (id_buku, tanggal, jam) values ('$id', '$date' , '$clook')";
$query = mysqli_query($conn, $sql);

if($query){
    header('location: ../pages/anggota/dashboard.php');
}

// $date = new DateTime();
// $clook = new DateTime();

// $dates = $date->format('d-m-Y');
// $clooks = $clook->format('H:i:s');

    // echo $date->format('d-m-Y'); 
    // echo "<br>";
    // echo $clook->format('h:m:s');

/**
 * 
 */
// class PembacaController
// {
    
//     public function jam()
//     {
//         $this->date = new DateTime(d-m-Y);
//         $this->clook = new DateTime(H:i);

//         return;
//     }
//     public function tampil(){
//         echo $this->date;
//         echo $this->clook;
//     }

// }

// $panggil = new PembacaController();
// $panggil->tampil();
// $_GET['id_buku'];

// $id = "SELECT * FROM buku";
// $conek = mysqli_query($conn, $id);

// $row = mysqli_fetch_array($conek);
// $sip = $row['judul_buku'];



// $buku = "SELECT FROM buku where id_buku = '$id'";
// $masuk = mysqli_query($conn, $buku);


 ?>