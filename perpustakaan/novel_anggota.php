<?php
include("../config/app.config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .tbl {
            position: absolute;
            margin-top: 30;
        }
    </style>

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
                <a class="navbar-brand" href="index.html">Startmin</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="novel.php" class="active">Novel</a>
                        </li>
                        <li>
                            <a href="#">Buku Pelajaran
                                <ul>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tables</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DataTables Advanced Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Pengarang</th>
                                                <th>Penerbit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        $sql = "SELECT * FROM novel";
                                        $query = mysqli_query($conn, $sql);
                                        $index = 1;




                                        ?>

                                        <tbody>
                                            <?php
                                            while ($buku = mysqli_fetch_array($query)) {
                                                echo "<tr>";

                                                echo "<td>" . $index++ . "</td>";
                                                echo "<td>" . $buku['judul'] . "</td>";
                                                echo "<td>" . $buku['pengarang'] . "</td>";
                                                echo "<td>" . $buku['penerbit'] . "</td>";
                                                // echo "<td>" . $buku['link'] . "</td>";



                                            ?>
                                                <td class="text-center">
                                                    <a href="<?= $buku['link']; ?>" class="btn btn-sm btn-success">Baca Buku</a>
                                                </td>
                                            <?php
                                                echo "</tr>";
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/raphael.min.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/startmin.js"></script>

</body>

</html>