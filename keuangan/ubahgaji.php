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
    include "navadmin.php";
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <?php
                    include "../config.php";
                    date_default_timezone_set('Asia/Jakarta');
                    $tah=date('Y');
                    $id = $_GET['kd_gaji'];
                    $query_mysql = mysqli_query($con, "SELECT * FROM tbl_gaji WHERE kd_gaji='$id'")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)){?>
                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <h1>Edit gaji Karyawan</h1>
                    <button class='btn btn-default' onclick="goBack()"><-Go Back</button>
                    <script>
                    function goBack() {
                    window.history.back();
                    }
                    </script>                    
                        <form method='post' action='proseseditgaji.php' enctype='multipart/form-data'>
                                    <div class='col-md-6'>
                                        <input type='hidden' name='ikar' placeholder='' class='form-control' required <?php echo "value=$data[0]";?>>
                                        <label class='control-label'>Kode Gaji = <br><h2>GJK<?php echo "$data[0]";?></h2></label><br>
                                        <label class='control-label'>Nama Karyawan = <br><h2><?php echo "$data[2]";?></h2></label><br>
                                        <label class='control-label'>Tanggal Pembayaran</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='text' name='tgl_regis' readonly='readonly' <?php echo "value=$data[1]";?>>
                                            </div>
                                        </div>
                                        <label class='control-label'>Gaji</label>
                                        <input type='tel' name='gaji' placeholder='' class='form-control' required <?php echo "value=$data[3]";?>>
                                    </div>
                                    <!--<div class='col-md-6'>
                                        <label class='control-label'>Foto</label>
                                        <input type="file" name="foto" <?php /*echo "value=$data[5]";*/?>>
                                    </div>-->
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
