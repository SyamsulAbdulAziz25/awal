<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi Member</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;Background-color:#2E8B57">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" style="color:#FFFFFF" class="navbar-brand">KOPERASI SIMPAN PINJAM</a>
            </div>
            <!-- /.navbar-header -->

            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Simpanan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="simpanan.php">Simpanan Masuk</a>
                                </li>
                                <li>
                                    <a href="withdraw.php">Withdraw</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Pinjaman<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="pinjam.php">Pinjam</a>
                                </li>
                                <li>
                                    <a href="angsuran.php">Angsuran</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>About</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="about.php">Tentang</a>
                                </li>
                                <li>
                                    <a href="logout.php.php">Logout</a>
                                </li>
                            </ul>
                           
                        </li>
                        
                    </ul>
                </div>
        </nav>

        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-12">
                        <center><h2>Pinjaman </h2></center>
                </div>
                <form name="masuk" method="post" action="proses_masuk.php">
                    <div>
                        <label class="col-md-3" style="margin-top: 5px">
                             No.Pinjaman     
                        </label>
                        <div class="col-md-7">
                            <input type="text" style="color:black; " class="form-control" name="nomor"  
                            minlength="2" maxlength="15" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>        
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Id Member          
                        </label>
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control"name="id"  
                            minlength="3" maxlength="15" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Jumlah Pinjaman     
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="jumlah"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                     <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Tennor
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="jenis"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                     <div>
                        <label class="col-md-3" style="margin-top: 20px">
                            Bunga pertahun
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="tanggal"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                           Biaya Administrasi
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="tanggal"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                            Keterangan
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="tanggal"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                            Tanggal Transaksi
                        </label>  
                        <div class="col-md-7">
                            <input type="date" style="color:black;margin-top: 12px;" class="form-control" name="tanggal"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                    
                </form>

        <!-- /#page-wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
