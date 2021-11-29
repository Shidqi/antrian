<?php
include "../config.php";
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="../text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body>

    <?php
    include "navpesanan.php";
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <?php
                    include "../config.php";
                    date_default_timezone_set('Asia/Jakarta');
                    $tah=date('Y');
                    $id = $_GET['kd_pesanan'];
                    $query_mysql = mysqli_query($con, "SELECT * FROM tbl_pesanan WHERE kd_pesanan='$id'")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)){?>
                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <h1>Lengkapi Data Pesanan</h1>
                    <button class='btn btn-default' onclick="goBack()"><-Go Back</button>
                    <script>
                    function goBack() {
                    window.history.back();
                    }
                    </script>                    
                        <form method='post' action='prosestambahpesanan.php'>
                                    <input type='hidden' name='kd_pesanan' placeholder='' class='form-control' required <?php echo "value=$data[0]";?>>
                                    <div class='col-md-6'>
                                        <label class='control-label'>nama projek</label>
                                        <input type='text' name='namaprojek' placeholder='' class='form-control' required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>nama pemesan</label>
                                        <input type='text' name='namapemesan' placeholder='' class='form-control' required <?php echo "value=$data[1]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>email pemesan</label>
                                        <input type='text' name='emailpemesan' placeholder='' class='form-control' required <?php echo "value=$data[3]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>no. Telfon pemesan</label>
                                        <input type='text' name='nopemesan' placeholder='' class='form-control' required <?php echo "value=$data[2]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Jenis Aplikasi</label>
                                        <select class='form-control' name='ja' required>
                                            <option value='Aplikasi Web'>Aplikasi Web</option>
                                            <option value='Aplikasi Desktop'>Aplikasi Desktop</option>
                                            <option value='Aplikasi Mobile'>Aplikasi Mobile</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Detail Pesanan</label>
                                        <textarea class='form-control' name='detail' rows='6' placeholder='' ><?php echo "$data[4]";?></textarea>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Ketua Projek</label>
                                        <select class="form-control" name="penanggungjawab">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 1</label>
                                        <select class="form-control" name="kar1">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 2</label>
                                        <select class="form-control" name="kar2">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 3</label>
                                        <select class="form-control" name="kar3">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 4</label>
                                        <select class="form-control" name="kar4">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 5</label>
                                        <select class="form-control" name="kar5">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 6</label>
                                        <select class="form-control" name="kar6">
                                        <option value='-'>-</option>
                                            <?php
                                            include "../config.php";
                                            $sql="SELECT * FROM tbl_karyawan";
                                            $hasil=mysqli_query($con,$sql);
                                            $no=0;
                                            while ($kar = mysqli_fetch_array($hasil)) {
                                                $no++;

                                                $ket="";
                                                if (isset($_GET['id_karyawan'])) {
                                                    $nik = trim($_GET['id_karyawan']);

                                                    if ($nik==$kar['id_karyawan'])
                                                    {
                                                        $ket="selected";
                                                    }
                                                }
                                                ?>
                                                <option <?php echo $ket; ?> value="<?php echo $kar['nama_karyawan'];?>"><?php echo $kar['nama_karyawan'];?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Status Projek</label>
                                        <select class='form-control' name='sp' required>
                                            <option value='Proses'>Proses</option>
                                            <option value='Done'>Done</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Deadline Projek</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='text' name='tgl_regis' readonly='readonly'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Biaya</label>
                                        <input type='text' name='biaya' placeholder='' class='form-control' required>
                                    </div>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <input name='singlebutton' class='btn btn-default' type='submit' value='Tambahkan'>
                                        </div>
                                    </div>
                            </form>
                            <?php }?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/menumaker.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/sticky-header.js"></script>
	<script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
</body>

</html>
