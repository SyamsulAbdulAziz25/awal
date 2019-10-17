<?php
session_start();

include ("koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="../asset/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../asset/datatable.min.css">

</head>

<body>
    <div id="wrapper">
         <!-- Navigation -->
       <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;Background-color:#2E8B57">
            <div class="navbar-header">
                <a href="index.html" style="color:#FFFFFF" class="navbar-brand">KOPERASI SIMPAN PINJAM</a>
            </div>
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
                                    <a href="tampil_simpanan.php">Simpanan Masuk</a>
                                </li>
                                <li>
                                    <a href="tampil_withdraw.php">Withdraw</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Pinjaman<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tampil_pinjaman.php">Pinjam</a>
                                </li>
                                <li>
                                    <a href="tampil_angsuran.php">Angsuran</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.php"><i class="fa fa-home fa-fw"></i> About</a>
                        </li>
                        
                    </ul>
                </div>
             </div>
        </div>
    </nav>

        <div id="page-wrapper">

            <div width="50px" height="180px">
                                <center><h3>PINJAMAN</h3>
                                <hr></center>
                                 <table class="table table-striped table-bordered" id="table"> 
                                 <thead>
                                            <tr>
                                                <th width="10px">N SIMPANAN</th>
                                                <th width="10px">ID MEMBER</th>
                                                <th width="10px">JUMLAH PINJAMAN</th>
                                                <th width="10px">TENNOR</th>
                                                <th width="10px">BUNGA PERTAHUN</th>
                                                <th width="10px">BIAYA ADMINISTRASI</th>
                                                <th width="10px">KETERANGAN</th>
                                                
                                            </tr>
                                            </thead>
                                            <?php
                                                $data=mysqli_query($konek,"SELECT * FROM pinjaman");    
                                                if (mysqli_num_rows($data)) {
                                                    while ($query=mysqli_fetch_assoc($data)) {

                                            ?>  
                
                                            <tbody>    
                                            <tr>
                                                <td><?php echo $query['NO_PINJAMAN'] ?> </td>
                                                <td><?php echo $query['ID_MEMBER']?></td>
                                                <td><?php echo $query['JUMLAH_PINJAMAN']?></td>
                                                <td><?php echo $query['TENNOR']?></td>
                                                <td><?php echo $query['BUNGA_PERTAHUN']?></td>
                                                <td><?php echo $query['BIAYA_ADMINISTRASI']?></td>
                                                <td><?php echo $query['KETERANGAN']?></td>
                                                
                                            </tr>

                                            <?php 
                                              }} ?>
                                            </tbody>
                                        </table>
                           
            </div>
    </div>

   
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<script type="text/javascript" src="../asset/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../asset/datatable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#table').DataTable();
    });
</script>


</html>
