<?php
include("../config/app.config.php");

if (isset($_POST['regis'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jrs = $_POST['jrs'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $tlp = $_POST['tlp'];


    // $anggota = "SELECT pringkat FROM pengguna pringkat='anggota'";
    // $jalan = mysqli_query($conn, $anggota);


    $query = mysqli_query($conn, "INSERT INTO pengguna ( nis, nama, jurusan, email, pass, tlp, pringkat ) values ( '$nis', '$nama', '$jrs', '$email', '$pass', '$tlp', 'siswa' )");

    if ($query) {
    } else {
        header("location: ../pages/register.php?status=gagal");
    }
}

// include("../config/app.config.php");
// include("../controller/regisController.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../css/images/smk.png">
    <title>Business Card</title>
</head>

<body>
    <form action="../pages/login.php">
        <div class="card-wrapper">
            <p class="text-center">Harap Screanshoot Kartu Ini</p>
            <div class="card">
                <div class="card-front">
                    <div class="left">
                        <img src="../css/images/smk.png">
                        <h4><span>Perpustakaan</span><br>SMKN 1 PADAHERANG</h4>
                    </div>
                    <div class="right">
                        <div class="person right-content">
                            <i class="fas fa-user-tie"></i>
                            <div>
                                <h4><?= $nama; ?></h4>
                                <p><?= $nis; ?></p>
                            </div>
                        </div>
                        <div class="phone right-content">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p><?= $tlp; ?></p>
                            </div>
                        </div>
                        <div class="email right-content">
                            <i class="fas fa-envelope-open"></i>
                            <div>
                                <p><?= $email; ?></p>
                            </div>
                        </div>
                        <div class="address right-content">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>SMKN 1 PADAHERANG</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-back">
                    <img src="../css/images/smk.png">
                </div>
            </div>
            <button class="btn btn-success">Lanjut Kehalaman Login</button>
        </div>
    </form>
</body>

</html>