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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
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
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="../images/logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <!--li><a href="index.html"></a></li>
                                <li class="active">Service Single</li-->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <?php
                            include "config.php";
                            $nisn = $_GET['nisn'];
                            $perintah="SELECT * FROM peserta_pendaftar WHERE nisn='$nisn'";
                            $hasil=mysqli_query($con, $perintah);
                            $data=mysqli_fetch_row($hasil);
                        ?>
                    <h1>Form Pendaftaran</h1>
                    <form method='post' action=''>
                    <table>
                    <div class='row'>
                                <div class='col-md-6'>
                                    <label class='control-label'>No Pendaftaran = </label>
                                    <?php echo "$data[0]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama  = </label>
                                    <?php echo "$data[1]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tempat Lahir = </label>
                                    <?php echo "$data[2]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Jenis Kelamin = </label>
                                    <?php echo "$data[4]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tanggal Lahir = </label>
                                    <?php echo "$data[3]"; ?>
                                </div>
                                                
                                <div class='col-md-6'>
                                    <label class='control-label'>Agama = </label>
                                    <?php echo "$data[5]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Anak ke = </label>
                                    <?php echo "$data[6]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Jumlah Saudara = </label>
                                    <?php echo "$data[7]"; ?> Bersaudara
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Berat Badan = </label>
                                    <?php echo "$data[9]"; ?> Kg
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Siswa = </label>
                                    <?php echo "$data[8]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tinggi Badan = </label>
                                    <?php echo "$data[10]"; ?>cm
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Golongan Darah = </label>
                                    <?php echo "$data[11]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ayah = </label>
                                    <?php echo "$data[12]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Orangtua = </label>
                                    <?php echo "$data[14]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ibu = </label>
                                    <?php echo "$data[13]"; ?>
                                </div>
                                                
                                <div class='col-md-6'>
                                    <label class='control-label'>No. Telfon Orangtua = </label>
                                    <?php echo "$data[15]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ibu = </label>
                                    <?php echo "$data[17]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ayah = </label>
                                    <?php echo "$data[16]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Gaji Orangtua = </label>
                                    Rp.<?php echo "$data[18]"; ?>,-
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tanggungan Anak = </label>
                                    <?php echo "$data[19]"; ?> Orang
                                </div>
                                <div class='col-md-6'>
                                    <?php echo "<img src='foto/".$data[21]."' width='300'>" ?>
                                </div>
                            </div>
                            </table>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <script>
		window.print();
	</script>
</body>

</html>
