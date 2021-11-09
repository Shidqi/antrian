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
                    $id = $_GET['kd_projek'];
                    $query_mysql = mysqli_query($con, "SELECT * FROM tbl_projek WHERE kd_projek='$id'")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)){?>
                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <h1>Lihat Data Projek</h1>
                    <button class='btn btn-default' onclick="goBack()"><-Go Back</button>
                    <script>
                    function goBack() {
                    window.history.back();
                    }
                    </script>                    
                        <form method='post' action='proseseditpesanan.php'>
                                    <input type='hidden' name='kd_projek' placeholder='' class='form-control' required value="<?php echo "$data[0]";?>">
                                    <div class='col-md-6'>
                                        <label class='control-label'>nama projek</label>
                                        <input type='text' name='namaprojek' placeholder='' class='form-control' required value="<?php echo "$data[1]";?>"></input>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>nama pemesan</label>
                                        <input type='text' name='namapemesan' placeholder='' class='form-control' required value="<?php echo "$data[2]";?>">
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>email pemesan</label>
                                        <input type='text' name='emailpemesan' placeholder='' class='form-control' required value="<?php echo "$data[3]";?>">
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>no. Telfon pemesan</label>
                                        <input type='text' name='nopemesan' placeholder='' class='form-control' required value="<?php echo "$data[4]";?>">
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Jenis Aplikasi</label>
                                        <?php $ja=$data[5]; ?>
                                        <select class='form-control' name='ja' required>
                                            <option value='Aplikasi Web' <?php echo ($ja == 'Aplikasi Web')?"selected":""?>>Aplikasi Web</option>
                                            <option value='Aplikasi Desktop' <?php echo ($ja == 'Aplikasi Desktop')?"selected":""?>>Aplikasi Desktop</option>
                                            <option value='Aplikasi Mobile' <?php echo ($ja == 'Aplikasi Mobile')?"selected":""?>>Aplikasi Mobile</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Detail Pesanan</label>
                                        <textarea class='form-control' name='detail' rows='6' placeholder='' ><?php echo "$data[6]";?></textarea>
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Ketua Projek</label>
                                    <input type='text' name='penanggungjawab' placeholder='' class='form-control' required value="<?php echo "$data[7]";?>">
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 1</label>
                                    <input type='text' name='kar1' placeholder='' class='form-control' required value="<?php echo "$data[8]";?>">
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 2</label>
                                    <input type='text' name='kar2' placeholder='' class='form-control' required value="<?php echo "$data[9]";?>">
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 3</label>
                                    <input type='text' name='kar3' placeholder='' class='form-control' required value="<?php echo "$data[10]";?>">
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 4</label>
                                    <input type='text' name='kar4' placeholder='' class='form-control' required value="<?php echo "$data[11]";?>">
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 5</label>
                                    <input type='text' name='kar5' placeholder='' class='form-control' required value="<?php echo "$data[12]";?>">
                                    </div>
                                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
                                    <div class="col-md-6">
                                    <label class='control-label'>Karyawan 6</label>
                                    <input type='text' name='kar6' placeholder='' class='form-control' required value="<?php echo "$data[13]";?>">
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Status Projek</label>
                                        <?php $sp=$data[14]; ?>
                                        <select class='form-control' name='sp' required>
                                            <option value='Proses'<?php echo ($sp == 'Proses')?"selected":""?>>Proses</option>
                                            <option value='Done'<?php echo ($sp == 'Done')?"selected":""?>>Done</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Deadline Projek</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='text' name='tgl_regis' readonly='readonly' value="<?php echo "$data[15]";?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Biaya</label>
                                        <input type='text' name='biaya' placeholder='' class='form-control' required value="<?php echo "$data[16]";?>">
                                    </div>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <input name='singlebutton' class='btn btn-default' type='submit' value='Ubah'>
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
