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
    <style>
    p {
    color: black;
    display: block;
    margin-bottom: 25px;
    text-align: justify;
    
    }
    .bawah{
        padding-top: 60px; 
        padding-bottom: 60px;
        background-color: white;
    }
</style>
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
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Karir</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <h1>Mari Bergabung Bersama Kami</h1>
                    <div class="sidenav">
                        <p>PT. Asli Isoae Solusine membuka kesempatan untuk 
                            anda ikut mengambil bagian dalam memajukan dan 
                            membangun perusahaan. Kami membuka lowongan kerja IT, 
                            magang, program internship, untuk pengembangan aplikasi 
                            berbasis web dan mobile. Kembangkan minat dan bakat anda 
                            dalam dunia IT, serta membangun karir anda untuk mengikuti
                             transformasi digital saat ini.</p>
                    </div>                    
                </div>
                <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>                  
                        <form method='post' action='' enctype='multipart/form-data'>
                                    <div class='col-md-6'>
                                        <label class='control-label'>nama</label>
                                        <input type='text' name='nama' placeholder='' class='form-control' required>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>No. telfon</label>
                                        <input type='tel' name='no_tlfn' placeholder='' class='form-control' required>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>email</label>
                                        <input type='text' name='email' placeholder='' class='form-control' required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>jenis kelamin*</label>
                                        <select class='form-control' name='jenis_kelamin' required>
                                            <option value='Laki-Laki'>Laki-Laki</option>
                                            <option value='Perempuan'>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>tanggal lahir*</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='text' name='tgl_regis' readonly='readonly'>
                                            </div>
                                        </div>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>link portofolio</label>
                                        <input type='text' name='portofolio' placeholder='' class='form-control' required>
                                    </div>         
									<div class='col-md-6'>
                                        <label class='control-label'>Jabatan yang dilamar</label>
                                        <input type='text' name='jabatan' placeholder='' class='form-control' required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>status</label>
                                        <select class='form-control' name='status' required>
                                            <option value='Magang'>Magang</option>
                                            <option value='Full Time'>Full Time</option>
                                        </select>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>Pendidikan Terakhir</label>
                                        <select class='form-control' name='pendidikan' required>
                                            <option value='SMA/SMK'>SMA/SMK</option>
                                            <option value='D3'>D3</option>
											<option value='S1'>S1</option>
                                        </select>
                                    </div>
									<div class='col-md-6'>
                                        <label class='control-label'>Asal Sekolah</label>
                                        <input type='text' name='asalsekolah' placeholder='' class='form-control' required>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>CV (Upload CV dalam Bentuk gambar atau foto)</label>
                                        <input type="file" name="cv">
                                    </div>
                                    <div class='col-md-12'>
                                        <div class='form-group'>
                                            <input name='singlebutton' class='btn btn-primary' type='submit' value='Daftar'>
                                        </div>
                                    </div>
                            </form>
                        </div>
                </div>
                <?php
                    include "config.php";
                    date_default_timezone_set('Asia/Jakarta');
                    $tah=date('Y');
                        if($_POST['singlebutton']=="Daftar"){
                        $cv = $_FILES['cv']['name'];
                        move_uploaded_file($_FILES['cv']['tmp_name'], "cv/".$_FILES['cv']['name']);
                        $sql="INSERT INTO tbl_pelamar (kd_pelamar, nama_pelamar, no_telfon_pelamar, 
                        email_pelamar, jk_pelamar, tgl_lahir_pelamar, link_portofolio, jabatan_yg_dilamar, status_pelamar, 
                        pendidikan_terakhir, cv_pelamar, asal_sekolah_kampus) 
                        VALUES ('', '$_POST[nama]', '$_POST[no_tlfn]', '$_POST[email]', '$_POST[jenis_kelamin]', 
                        '$_POST[tgl_regis]', '$_POST[portofolio]', '$_POST[jabatan]', '$_POST[status]','$_POST[pendidikan]', '$cv', '$_POST[asalsekolah]')";
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
