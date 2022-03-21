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
    <style>
        p{
        text-align: right;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <?php
                            include "../config.php";
                            date_default_timezone_set('Asia/Jakarta');
                            $tah=date('Y');
                            $id_service = $_GET['id_service'];
                            $perintah="SELECT * FROM tbl_service WHERE id_service='$id_service'";
                            $hasil=mysqli_query($con, $perintah);
                            $data=mysqli_fetch_row($hasil);
                        ?>
                    <center><img src="../images/logo-m.png"><h1>PT. PRIMADELTA STARLESTARI</h1></center>    
                    <br><br><br><h1>Kwitansi Pembayaran</h1>
                    <form method='post' action=''>
                    <table>
                    <div class='row'>
                                <div class='col-md-6'>
                                    <label class='control-label'>Tanggal Pembayaran  = </label>
                                    <?php echo date('d F Y' ); ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Lengkap = </label>
                                    <?php echo "$data[2]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>No Telfon = </label>
                                    <?php echo "$data[3]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Jenis Service = </label>
                                    <?php echo "$data[5]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>No Polisi = </label>
                                    <?php echo "$data[7]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Teknisi = </label>
                                    <?php echo "$data[8]"; ?>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Total Bayar = </label>
                                    <?php echo "$data[10]"; ?>
                                </div><br><br>
                                <div class='col-md-6'>
                                    <label class='control-label'><p>Rangkasbitung, <?php echo date('d F Y' ); ?></p></label>
                                </div><br>
                                <div class='col-md-6'>
                                    <label class='control-label'><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Admin</p></label>
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
