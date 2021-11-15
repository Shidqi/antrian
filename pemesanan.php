<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <?php
        if (! @$_GET['menu']) 
            @$_GET['menu']='daftar';
        if (! @$_POST['singlebutton']) 
            @$_POST['singlebutton']='';
    ?>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="home.php"><img src="images/logo-white.png" alt="image" style="height:50px;"></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                        <?php include 'nav.php';?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
            <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <h1>Layanan Antrian Online Service</h1>
                    
                        <form method='post' action=''>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Nama pemesan</label>
                                        <input type='text' name='nama' placeholder='' class='form-control' required>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>No Telfon</label>
                                        <input type='text' name='tlp' placeholder='' class='form-control' required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Jenis Service</label>
                                        <select class='form-control' name='service' required>
                                            <option value='paketservicepenuh'>Service Full</option>
                                            <option value='gantioli'>Ganti Oli</option>
                                            <option value='gantiban'>Ganti Ban</option>
                                            <option value='gantipartlain'>Ganti Part Lain</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>E-mail</label>
                                        <input type='text' name='email' placeholder='' class='form-control' required>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>Detail Permasalahan</label>
                                        <textarea class='form-control' name='detail' rows='6' placeholder=''></textarea>
                                    </div>
                                   
                                    <div class='col-md-6'>
                                        <label class='control-label'>STNK (Upload STNK dalam Bentuk gambar atau foto)</label>
                                        <input type="file" name="stnk">
                                    </div>
                                    </div>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <input name='singlebutton' class='btn btn-primary' type='submit' value='Daftar'>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                    include "config.php";
                        if($_POST['singlebutton']=="Daftar"){ 
                                $sql="INSERT INTO tbl_pesanan (kd_pesanan, nama_pemesan, no_telfon_pemesan, email_pemesan, detail_pesanan) 
                                VALUES ('', '$_POST[nama]', '$_POST[tlp]', '$_POST[email]', '$_POST[detail]')";
                                mysqli_query($con, $sql);
                                include("clientmail.php");
                                include("emailnotifikasipemesanan.php");
                                ?>
                                <script type='text/javascript' language='JavaScript'>
                                    alert('Antrian berhasil dibuat');
                                </script>
                                <?php
                                echo "<meta http-equiv='refresh' content='0'>";    
                        }
                ?>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
</body>

</html>
