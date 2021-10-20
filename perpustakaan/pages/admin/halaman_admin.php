<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan SMK NEGERI 1 PADAHERANG | Novel</title>

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

    <!-- Custom Fonts -->
    <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="../css/images/smk.png">

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
                <li><a href="#"><i class="fa fa-home fa-fw"></i> </a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
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
                            <a href="halaman_admin.php" class="active">Novel</a>
                        </li>
                        <li>
                            <a href="#">Buku Pelajaran
                                <ul>
                                    <!-- <li>
                                        <a href="ppkn.php">Ppkn</a>
                                    </li> -->
                                    <li>
                                        <a href="admin/gp_admin.php">Geologi Pertambangan (GP)</a>
                                    </li>
                                    <li>
                                        <a href="admin/tkj_admin.php">Teknik Komputer Jaringan (TKJ)</a>
                                    </li>
                                    <li>
                                        <a href="admin/rpl_admin.php">Rekayasa Perangkat Lunak (RPL)</a>
                                    </li>
                                    <li>
                                        <a href="admin/tein_admin.php">Teknik Elektronika Industri (TEIN)</a>
                                    </li>
                                    <li>
                                        <a href="admin/tpmp_admin.php">Teknik Pengolahan Migas dan Petrokimia (TPMP)</a>
                                    </li>
                                    <li>
                                        <a href="admin/tkr_admin.php">Teknik Kendaraan Ringan (TKR)</a>
                                    </li>
                                    <li>
                                        <a href="admin/upw_admin.php">Usaha Perjalanan Wisata (UPW)</a>
                                    </li>
                                    <li>
                                        <a href="admin/mm_admin.php">Multimedia (MM)</a>
                                    </li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a href="input_novel.php" class="active">Inputkan Buku Novel</a>
                        </li>
                        <li>
                            <a href="input_mapel.php" class="active">Inputkan Buku Matapelajaran</a>
                        </li>
                    </ul>
                </div>
            </div>


        </nav>


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
    <script src="../js/startmin.js"></script>
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