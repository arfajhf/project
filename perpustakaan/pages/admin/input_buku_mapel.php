<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan SMK NEGERI 1 PADAHERANG | Input Mapel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../../../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="../../css/images/smk.png">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

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
            <a class="navbar-brand" href="dashboard_admin.php">SMK NESAPA</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"></a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>   <b class="caret"></b>
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
                            <a href="dashboard_admin.php" class="active">Beranda</a>
                        </li>
                        <li>
                            <a href="novel_admin.php" class="active">Novel</a>
                        </li>
                        <li>
                        <a href="#" class="buku" onclick="jurusan()">Buku Jurusan
                                <ul id="jrs" >
                                    <!-- <li>
                                        <a href="ppkn.php">Ppkn</a>
                                    </li> -->
                                    <li>
                                        <a href="gp_admin.php">Geologi Pertambangan (GP)</a>
                                    </li>
                                    <li>
                                        <a href="tkj_admin.php">Teknik Komputer Jaringan (TKJ)</a>
                                    </li>
                                    <li>
                                        <a href="rpl_admin.php">Rekayasa Perangkat Lunak (RPL)</a>
                                    </li>
                                    <li>
                                        <a href="tein_admin.php">Teknik Elektronika Industri (TEIN)</a>
                                    </li>
                                    <li>
                                        <a href="tpmp_admin.php">Teknik Pengolahan Migas dan Petrokimia (TPMP)</a>
                                    </li>
                                    <li>
                                        <a href="tkr_admin.php">Teknik Kendaraan Ringan (TKR)</a>
                                    </li>
                                    <li>
                                        <a href="upw_admin.php">Usaha Perjalanan Wisata (UPW)</a>
                                    </li>
                                    <li>
                                        <a href="mm_admin.php">Multimedia (MM)</a>
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
                                        <a href="bindo_admin.php">Bahasa Indonesia</a>
                                    </li>
                                    <li>
                                        <a href="binggris_admin.php">Bahasa Inggris</a>
                                    </li>
                                    <li>
                                        <a href="bsunda_admin.php">Bahasa Sunda</a>
                                    </li>
                                    <li>
                                        <a href="fisika_admin.php">Fisika</a>
                                    </li>
                                    <li>
                                        <a href="kimia_admin.php">Kimia</a>
                                    </li>
                                    <li>
                                        <a href="mtk_admin.php">Matematika</a>
                                    </li>
                                    <li>
                                        <a href="pai_admin.php">Pendidikan Agama Islam</a>
                                    </li>
                                    <li>
                                        <a href="pjok_admin.php">Pendidikan Jasmani Olahraga Dan Kesehatan</a>
                                    </li>
                                    <li>
                                        <a href="pkn_admin.php">Pendidikan Pancasila Dan Kewarganegaraan</a>
                                    </li>
                                    <li>
                                        <a href="sejarah_admin.php">Sejarah</a>
                                    </li>
                                    <li>
                                        <a href="sby_admin.php">Seni Budaya</a>
                                    </li>
                                    <li>
                                        <a href="simdig_admin.php">Simulasi Digital</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="input_novel.php" class="active">Inputkan Buku Novel</a>
                        </li>
                        <li>
                            <a href="input_mapel.php" class="active">Inputkan Buku Kopetensi</a>
                        </li>
                        <li>
                            <a href="input_buku_mapel.php" class="active">Inputkan Buku Matapelajaran</a>
                        </li>
                    </ul>
                </div>
            </div>


        </nav>


        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2">
                    <div class="login-panel panel panel-default">
                        <!-- <?php
                                // if (isset($_GET['status'])) {
                                //     switch ($_GET['status']) {
                                //         case 'berhasil':
                                ?> -->
                        <!-- <div class="alert alert-warning alert-dismissible fade show panel-title text-center" role="alert">
                                        Data berhasil ditambahkan

                                    </div> -->
                        <!-- <?php
                                //     break;
                                // default:
                                ?> -->
                        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        Data gagal ditambambahkan
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div> -->
                        <!-- <?php
                                //break;
                                ?> -->
                        <!-- <?php
                                // }
                                ?> -->
                        <!-- <?php
                                //  }
                                ?> -->

                        <?php
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] == 'berhasil') {
                                echo "<p class='alert-dismissible alert-warning alert' role='alert'>";
                                echo "Buku Berhasil Ditambahkan";
                                echo "</p>";
                                // echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
                                // echo "<span aria-hidden='true'>";
                                // echo "&times;";
                                // echo "</span>";
                                // echo "</button>";
                            }
                        }
                        elseif (isset($_GET['status'])) {
                            if ($_GET['status'] == 'gagal') {
                                echo "<p class='alert-dismissible alert-warning alert' role='alert'>";
                                echo "Buku Berhasil Ditambahkan";
                                echo "</p>";
                                // echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
                                // echo "<span aria-hidden='true'>";
                                // echo "&times;";
                                // echo "</span>";
                                // echo "</button>";
                            }
                        }

                        ?>
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">Inputkan Buku Matapelajaran</h3>
                        </div>
                        <div class="panel-body">
                            <form action="../../controller/mapelController.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Judul Buku" name="judul" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input class="form-control" placeholder="Kelas" name="kelas" type="text" autofocus> -->
                                        <select name="kelas" id="" class="form-control">
                                            <option selected>Masukan Kelas</option>
                                            <option>X</option>
                                            <option>XI</option>
                                            <option>XII</option>
                                            <option>XIII</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input class="form-control" placeholder="Jurusan" name="jurusan" type="text" value=""> -->
                                        <select name="mapel" id="" class="form-control">
                                            <option selected>Masukan Matapelajaran</option>
                                            <option>Bahasa Indonesia</option>
                                            <option>Bahasa Inggris</option>
                                            <option>Bahasa Sunda</option>
                                            <option>Fisika</option>
                                            <option>Kimia</option>
                                            <option>Matematika</option>
                                            <option>Pendidikan Agama Islam</option>
                                            <option>Pendidikan Jasmani Olahraga Dan Kesekatan</option>
                                            <option>Pendidikan Pancasila Dan Kewarganegaraan</option>
                                            <option>Sejarah</option>
                                            <option>Seni Budaya</option>
                                            <option>Simulasi Digital</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Link Buku Berupa PDF" name="link" type="text" value="">
                                    </div>
                                    <div class="checkbox">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <!-- <a href="../controller/loginController.php" class="btn btn-lg btn-success btn-block">Login</a> -->
                                    <button name="input" class="btn btn-lg btn-success btn-block">Input</button>
                                    <!-- <input type="submit" class="btn btn-lg btn-success btn-block" value="Input" nama="input"> -->
                                </fieldset>
                            </form>
                        </div>
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
        function pelajaran(){
            var x = document.getElementById("pljr");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        function jurusan(){
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