<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title>Biodata</title>
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
    <?php
        error_reporting(0);
        include "check.php";
        $a=$_SESSION['user'];
        include "limited.php";
        $query="SELECT * FROM peserta_pendaftar WHERE nama='$a'";
        $qwe=mysqli_query($con, $query);
        $dataq=mysqli_fetch_row($qwe);
    ?>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="#"><img src="../images/sdosis.png" alt="image" style="width:70px;height:80px;"></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                      <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="has-sub"><a href="#" title=""><?= $dataq[1]; ?></a>
                                    <ul>
                                        <li><a href="logout.php" title="Logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')"> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Data Pribadi Anda</h2>
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
                            $perintah="SELECT * FROM peserta_pendaftar WHERE nama='$a'";
                            $hasil=mysqli_query($con, $perintah);
                            $data=mysqli_fetch_row($hasil);
                            if (! @$_POST['singlebutton']) 
                                @$_POST['singlebutton']='';
                        ?>
                    <h1>Biodata Peserta</h1>
                    <p> Periksa Kembali data Peserta jika ada kesalahan bisa di lakukan saat verifikasi dengan membawa berkas asli.</p>
                    <form method='post' action=''>
                    <div class='row'>
                                <div class='col-md-6'>
                                    <label class='control-label'>No Pendaftaran</label>
                                    <h3><?php echo "$data[0]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>nama</label>
                                    <h3><?php echo "$data[1]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>tempat lahir</label>
                                    <h3><?php echo "$data[2]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>jenis kelamin*</label>
                                    <h3><?php echo "$data[4]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>tanggal lahir</label>
                                    <h3><?php echo "$data[3]"; ?></h3>
                                </div>
                                                
                                <div class='col-md-6'>
                                    <label class='control-label'>agama</label>
                                    <h3><?php echo "$data[5]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>anak ke</label>
                                    <h3><?php echo "$data[6]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>jumlah saudara</label>
                                    <h3><?php echo "$data[7]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Berat Badan</label>
                                    <h3><?php echo "$data[9]"; ?> Kg</h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Siswa</label>
                                    <h3><?php echo "$data[8]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tinggi Badan</label>
                                    <h3><?php echo "$data[10]"; ?> cm</h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Golongan Darah</label>
                                    <h3><?php echo "$data[11]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ayah</label>
                                    <h3><?php echo "$data[12]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Orangtua</label>
                                    <h3><?php echo "$data[14]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ibu</label>
                                    <h3><?php echo "$data[13]"; ?></h3>
                                </div>
                                                
                                <div class='col-md-6'>
                                    <label class='control-label'>No. Telfon Orangtua</label>
                                    <h3><?php echo "$data[15]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ibu</label>
                                    <h3><?php echo "$data[17]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ayah</label>
                                    <h3><?php echo "$data[16]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Gaji Orangtua</label>
                                    <h3>Rp.<?php echo "$data[18]"; ?>,-</h3>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tanggungan Anak</label>
                                    <h3><?php echo "$data[19]"; ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <h3><?php echo "<img src='../foto/".$data[21]."' width='300'>" ?></h3>
                                </div>
                                <div class='col-md-6'>
                                    <h1><?php echo "<td><a href=\"../cetak.php?nisn=$data[0]\" target='_blank'>Klik untuk Cetak</a></td>";?></h1>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidenav">
                        <ul class="listnone">
                            <li> <a href='../admin.php'>Data Peserta</a></li>
                            <li> <a href='ubahpassworda.php' class="active">Ubah Password</a></li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
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
