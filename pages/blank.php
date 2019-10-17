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
                            <a href="blank.php"><i class="fa fa-bar-chart-o fa-fw"></i> Register Member</a>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Login<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="login.php">Admin</a>
                                </li>
                                <li>
                                    <a href="login.php">Member</a>
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
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-12">
                        <center><h2>Registrasi Member</h2></center>
                </div>
                <form name="masuk" method="post" action="proses_masuk.php">
                    <div>
                        <label class="col-md-3" style="margin-top: 5px">
                            ID         
                        </label>
                        <div class="col-md-7">
                            <input type="text" style="color:black; " class="form-control" name="nomor" placeholder="M-000001" 
                            minlength="2" maxlength="15" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>        
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                            NIK          
                        </label>
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control"name="nobukti"  
                            minlength="3" maxlength="15" onkeypress="return isNumber(event)" required>
                        </div>
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Nama Lengkap      
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="nama"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                        <div>
                         <div >
                            <label class="col-md-3" style="margin-top: 20px">
                                 Tempat, Tanggal Lahir
                            </label>  
                            <div class="col-md-4">
                                <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="nama"  onkeypress="return isNumberKey(event)" 
                                minlength="3" maxlength="50" required>
                            </div>
                             <div class="col-md-3">
                                <input type="date" style="color:black;margin-top: 12px;" class="form-control" name="nama"  onkeypress="return isNumberKey(event)" 
                                minlength="3" maxlength="50" required>
                            </div>
                        </div>
                    </div>
                     <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Jenis Kelamin 
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="nama"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                     <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Pekerjan 
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="nama"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                     <div>
                        <label class="col-md-3" style="margin-top: 20px">
                             Alamat 
                        </label>  
                        <div class="col-md-7">
                            <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="nama"  onkeypress="return isNumberKey(event)" 
                            minlength="3" maxlength="50" required>
                        </div>
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                            E-mail 
                        </label>
                        <div class="col-md-7">
                                 <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="keterangan" onkeypress="return isNumberKey(event)" 
                                 minlength="5" maxlength="100" required>
                        </div> 
                    </div>
                    <div>
                        <label class="col-md-3" style="margin-top: 20px">
                            No.Telp 
                        </label>
                        <div class="col-md-7">
                                 <input type="text" style="color:black;margin-top: 12px;" class="form-control" name="keterangan" onkeypress="return isNumberKey(event)" 
                                 minlength="5" maxlength="100" required>
                        </div> 
                    </div>
                    <br>
                   <div class="row">
                        <div class="col-md-9">
                            <input type="submit" name="simpan" value="REGISTER" onclick="validasi()" class="btn btn-info" style="margin-left : 350px;margin-top:20px">
                             <input type="reset" name="reset" value="Cancel" class="btn btn-danger" style=" margin-top:20px">   
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
