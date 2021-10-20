<?php
include("../../config/app.config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan SMK NEGERI 1 PADAHERANG</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/morris.css" rel="stylesheet">

    <link rel="icon" href="../../css/images/smk.png">
    <!-- Custom Fonts -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../css/ds.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand text-center" href="dashboard.php">SMK NESAPA</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#">
                        <!-- < i class="fa fa-home fa-fw"></i> -->
                    </a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">

                <!--<?php
                    /* $sql = "SELECT nama FROM pengguna ";
                $query = mysqli_query($conn, $sql); */


                    ?> -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <!-- <?php
                                // while($data= mysqli_fetch_array($query)){
                                //     echo $data['nama'];
                                //}
                                ?> -->
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="../login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="dashboard.php" class="active">Beranda</a>
                        </li>
                        <li>
                            <a href="novel_anggota.php" class="active">Novel</a>
                        </li>
                        <li>
                        <li>
                            <a href="#" class="buku" onclick="jurusan()">Buku Jurusan
                                <ul id="jrs">
                                    <!-- <li>
                                        <a href="ppkn.php">Ppkn</a>
                                    </li> -->
                                    <li>
                                        <a href="gp.php">Geologi Pertambangan (GP)</a>
                                    </li>
                                    <li>
                                        <a href="tkj.php">Teknik Komputer Jaringan (TKJ)</a>
                                    </li>
                                    <li>
                                        <a href="rpl.php">Rekayasa Perangkat Lunak (RPL)</a>
                                    </li>
                                    <li>
                                        <a href="tein.php">Teknik Elektronika Industri (TEIN)</a>
                                    </li>
                                    <li>
                                        <a href="tpmp.php">Teknik Pengolahan Migas dan Petrokimia (TPMP)</a>
                                    </li>
                                    <li>
                                        <a href="tkr.php">Teknik Kendaraan Ringan (TKR)</a>
                                    </li>
                                    <li>
                                        <a href="upw.php">Usaha Perjalanan Wisata (UPW)</a>
                                    </li>
                                    <li>
                                        <a href="mm.php">Multimedia (MM)</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="buku" onclick="pelajaran()">Buku Pelajaran
                                <ul id="pljr">
                                    <!-- <li>
                                        <a href="ppkn.php">Ppkn</a>
                                    </li> -->
                                    <li>
                                        <a href="bindo.php">Bahasa Indonesia</a>
                                    </li>
                                    <li>
                                        <a href="binggris.php">Bahasa Inggris</a>
                                    </li>
                                    <li>
                                        <a href="bsunda.php">Bahasa Sunda</a>
                                    </li>
                                    <li>
                                        <a href="fisika.php">Fisika</a>
                                    </li>
                                    <li>
                                        <a href="kimia.php">Kimia</a>
                                    </li>
                                    <li>
                                        <a href="mtk.php">Matematika</a>
                                    </li>
                                    <li>
                                        <a href="pai.php">Pendidikan Agama Islam</a>
                                    </li>
                                    <li>
                                        <a href="pjok.php">Pendidikan Jasmani Olahraga Dan Kesehatan</a>
                                    </li>
                                    <li>
                                        <a href="pkn.php">Pendidikan Pancasila Dan Kewarganegaraan</a>
                                    </li>
                                    <li>
                                        <a href="sejarah.php">Sejarah</a>
                                    </li>
                                    <li>
                                        <a href="sby.php">Seni Budaya</a>
                                    </li>
                                    <li>
                                        <a href="simdig.php">Simulasi Digital</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="input_novel.php" class="active">Inputkan Buku Novel</a>
                        </li>
                        <li>
                            <a href="input_mapel.php" class="active">Inputkan Buku Matapelajaran</a>
                        </li> -->
                    </ul>
                </div>
            </div>


        </nav>


        <div id="page-wrapper">
            <div class="container-fluid" id="mt1">
                <?php
                $buku = "SELECT * FROM buku";
                $pljrn = mysqli_query($conn, $buku);

                $ambil_data = mysqli_num_rows($pljrn);

                $novel = "SELECT * FROM novel";
                $buku_n = mysqli_query($conn, $novel);

                $ambil_novel = mysqli_num_rows($buku_n);



                // echo '<p>';
                // echo "jumlah buku: " .  $ambil_data;
                // echo '</p>';
                ?>
                <div class="col-lg-3 col-md-6 " id="mt1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $ambil_data; ?></div>
                                    <div>Buku Matapelajaran Tersedia</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">Jumlah Buku Matapelajaran Yang Tersedia Adalah: <?= $ambil_data; ?></span>
                                <span class="pull-right"></span>

                                <div class="clearfix"></div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" id="mt1"> 
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $ambil_novel; ?></div>
                                    <div>Buku Novel Tersedia</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">Jumlah Buku Novel Yang Tersedia Adalah: <?= $ambil_novel; ?></span>
                                <span class="pull-right"></span>

                                <div class="clearfix"></div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../js/raphael.min.js"></script>
    <script src="../../js/morris.min.js"></script>
    <script src="../../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../js/startmin.js"></script>
    <script>
        function pelajaran() {
            var x = document.getElementById("pljr");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        function jurusan() {
            var x = document.getElementById("jrs");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

</body>

</html>