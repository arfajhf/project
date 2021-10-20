<?php
include("../config/app.config.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan SMK NEGERI 1 PADAHERANG | Registrasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">
    <link rel="icon" href="../css/images/smk.png">
    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">register your <br> account</h3>
                    </div>
                    <div class="panel-body">
                        <form action="../controller/regisController.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nis" name="nis" type="telp" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama" name="nama" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <select name="jrs" id="" class="form-control">
                                        <option selected>Masukan Kopetensi Keahlian</option>
                                        <option >Geologi Pertambangan (GP)</option>
                                        <option >Teknik Komputer Jaringan (TKJ)</option>
                                        <option >Rekayasa Perangkat Lunak (RPL)</option>
                                        <option >Teknik Elektronika Industri (TEIN)</option>
                                        <option >Teknik Pengolahan Migas dan Petrokimia (TPMP)</option>
                                        <option >Teknik Kendaraan Ringan (TKR)</option>
                                        <option >Usaha Perjalanan Wisata (UPW)</option>
                                        <option >Multimedia (MM)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="No Telp" name="tlp" type="telp" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <!-- <select class="form-control" name="level">
                                    <option>Pilih Level</option>
                                    <option>anggota</option>
                                </select> -->

                             

                                <div class="checkbox">
                                    <!-- <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label> -->
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <a href="../controller/loginController.php" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <button name="regis" class="btn btn-lg btn-success btn-block">Daftar</button>
                                <!-- <input type="submit" class="btn btn-lg btn-success btn-block" value="Daftar" nama="regis"> -->
                                <a href="login.php" class="text-center">Sudah Punya Akun!</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

</body>

</html>