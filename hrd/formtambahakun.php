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
    <style>
    label{
        color: #474747;
    }
</style>
</head>

<body>

    <?php
    include "navadmin.php";
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <?php
                    include "../config.php";
                ?>
                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <h1>Form Akun Baru</h1>
                        <button class='btn btn-default' onclick="goBack()"><-Go Back</button>
                        <script>
                        function goBack() {
                        window.history.back();
                        }
                        </script>
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                            <div class="form-group">
                                <label for="sel1">Pilih Karyawan:</label>
                                <select class="form-control" name="id_karyawan">
                                    <?php
                                    include "../config.php";
                                    $sql="SELECT * FROM tbl_karyawan";
                                    $hasil=mysqli_query($con,$sql);
                                    $no=0;
                                    while ($data = mysqli_fetch_array($hasil)) {
                                        $no++;

                                        $ket="";
                                        if (isset($_GET['id_karyawan'])) {
                                            $nik = trim($_GET['id_karyawan']);

                                            if ($nik==$data['id_karyawan'])
                                            {
                                                $ket="selected";
                                            }
                                        }
                                        ?>
                                        <option <?php echo $ket; ?> value="<?php echo $data['id_karyawan'];?>"><?php echo $data['id_karyawan'];?> - <?php echo $data['nama_karyawan'];?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-default" value="Pilih">
                            </div>
                        </form>
                        <?php
                            if (isset($_GET['id_karyawan'])) {
                                $nik=$_GET["id_karyawan"];

                                $sql="select * from tbl_karyawan where id_karyawan=$nik";
                                $hasil=mysqli_query($con,$sql);
                                $data = mysqli_fetch_assoc($hasil);
                            }
                            ?>                   
                        <form method='post' action='prosestambahaku.php'>
                                    <div class='col-md-6'>
                                        <label color='black'>Karyawan: <?php echo $data['id_karyawan'];?> - <?php echo $data['nama_karyawan'];?></label>
                                        <input type='hidden' name='idkaryawan' placeholder='' class='form-control' value=<?php echo $data['id_karyawan'];?>><br>
                                        <label class='control-label'>Password</label>
                                        <input type='text' name='passakun' placeholder='' class='form-control' required>
                                    </div>
                                    <br><br><br><br><br>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Tipe akun</label>
                                        <select class='form-control' name='tipe' required>
                                            <option value='Admin'>Admin IT</option>
                                            <option value='Admin Pesan'>Admin Pemesanan</option>
                                            <option value='HRD'>HRD</option>
                                            <option value='Keuangan'>Keuangan</option>
                                            <option value='Karyawan'>Karyawan</option>
                                        </select>
                                    </div>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <input name='input' class='btn btn-default' type='submit' value='Tambahkan'>
                                        </div>
                                    </div>
                            </form>
                            
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
