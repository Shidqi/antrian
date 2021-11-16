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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <center><h1>Daftar Antrian Terdaftar Saat ini</h1><Center>
                    <div class="sidenav">
                    <?php
                    include "config.php";
                    date_default_timezone_set('Asia/Jakarta');
                    $tah=date('Y');?>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                            <table class='table'>
                            <thead>
                                <tr>                         
                                    <th>No. Antrian</th>
                                    <th>Nama Pendaftar</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php
                        $sql="SELECT * FROM tbl_antrian";
                        $content=mysqli_query($con, $sql);
                        $i=1;
                        while ($data=mysqli_fetch_row($content)) {
                            echo "<tr>";
                            echo "<td>$data[0]</td>";
                            echo "<td>$data[1]</td>";
                            echo "</tr>";
                            $i++;
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    
                ?>
                    </div>                    
                </div>
            <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <h1>Layanan Antrian Online Service</h1>
                    
                        <form method='post' action=''>
                                <div class='row'>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Nama pemesan</label>
                                        <input type='text' name='nama' placeholder='Nama Lengkap Anda' class='form-control' required>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>No Telfon</label>
                                        <input type='text' name='tlp' placeholder='081xxxxxxxxx' class='form-control' required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Jenis Service</label>
                                        <select class='form-control' name='service' required>
                                            <option value='servicepenuh'>Service Full</option>
                                            <option value='gantioli'>Ganti Oli</option>
                                            <option value='gantiban'>Ganti Ban</option>
                                            <option value='gantipartlain'>Ganti Part Lain</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>E-mail</label>
                                        <input type='text' name='email' placeholder='yourname@mail.com' class='form-control' required>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>Detail Permasalahan Tambahan</label>
                                        <textarea class='form-control' name='detail' rows='6' placeholder='Berikan tanda (-) jika tidak ada'></textarea>
                                    </div>
                                   
                                    <div class='col-md-6'>
                                        <label class='control-label'>STNK (*Upload STNK dalam Bentuk gambar atau foto)</label>
                                        <input type="file" name="stnk" class='btn btn-primary' required>
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
                    date_default_timezone_set('Asia/Jakarta');
                    $tah=date('Y');
                        if($_POST['singlebutton']=="Daftar"){ 
                        $stnk = $_FILES['stnk']['name'];
                        move_uploaded_file($_FILES['stnk']['tmp_name'], "stnk/".$_FILES['stnk']['name']);
                        $sql="INSERT INTO tbl_antrian (id_antrian, nama, no_telfon, email, jenisservice, masalah, stnk) 
                        VALUES ('', '$_POST[nama]', '$_POST[tlp]', '$_POST[email]', '$_POST[service]', 
                        '$_POST[detail]', '$stnk')";
                        mysqli_query($con, $sql);
                        ?>
                        <script type='text/javascript' language='JavaScript'>
                        alert('Data pelamar terkirim silahkan tunggu pihak kami manghubungi');
                        </script>
                        <?php
                        echo "<meta http-equiv='refresh' content='0'>";    
                    }else if($_GET['menu']=='listprojek'){
                        
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
