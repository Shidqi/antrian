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
                    date_default_timezone_set('Asia/Jakarta');
                    $tah=date('Y');
                    $id = $_GET['id_karyawan'];
                    $query_mysql = mysqli_query($con, "SELECT * FROM tbl_karyawan WHERE id_karyawan='$id'")or die(mysqli_error());
                    $nomor = 1;
                    while($data = mysqli_fetch_array($query_mysql)){?>
                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-12'>
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <h1>Edit Data Karyawan</h1>
                    <button class='btn btn-default' onclick="goBack()"><-Go Back</button>
                    <script>
                    function goBack() {
                    window.history.back();
                    }
                    </script>                    
                        <form method='post' action='' enctype='multipart/form-data'>
                                    <div class='col-md-6'>
                                        <label class='control-label'>nama</label>
                                        <input type='text' name='nama' placeholder='' class='form-control' required <?php echo "value=$data[1]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>No. telfon</label>
                                        <input type='tel' name='notelfon' placeholder='' class='form-control' required <?php echo "value=$data[6]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>tanggal lahir*</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='text' name='tgl_regis' readonly='readonly' <?php echo "value=$data[2]";?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>jenis kelamin*</label>
                                        <?php $jk=$data[3]; ?>
                                        <select class='form-control' name='jenis_kelamin' required>
                                            <option value='Laki-Laki' <?php echo ($jk == 'Laki-Laki')?"selected":""?>>Laki-Laki</option>
                                            <option value='Perempuan' <?php echo ($jk == 'Perempuan')?"selected":""?>>Perempuan</option>
                                        </select>
                                    </div>
                                    
                                    <div class='col-md-6'>
                                        <label class='control-label'>Alamat</label>
                                        <textarea class='form-control' name='almt' rows='6' placeholder='' required ><?php echo "$data[4]";?></textarea>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>email</label>
                                        <input type='tel' name='email' placeholder='' class='form-control' required <?php echo "value=$data[7]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>jabatan</label>
                                        <input type='tel' name='jabatan' placeholder='' class='form-control' required <?php echo "value=$data[8]";?>>
                                    </div>                                    
                                    <div class='col-md-6'>
                                        <label class='control-label'>status</label>
                                        <?php $jk=$data[9]; ?>
                                        <select class='form-control' name='status' required>
                                            <option value='Pegawai Tetap' <?php echo ($jk == 'Pegawai Tetap')?"selected":""?>>Pegawai Tetap</option>
                                            <option value='Magang' <?php echo ($jk == 'Magang')?"selected":""?>>Magang</option>
                                        </select>
                                    </div>
                                    <div class='col-md-6'>
                                        <label class='control-label'>Foto</label>
                                        <input type="file" name="foto" <?php echo "value=$data[5]";?>>
                                    </div>
                                    <div class='col-md-6'>
                                        <input type='hidden' name='id_karyawan' placeholder='' class='form-control' required <?php echo "value=$data[0]";?>>
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
                    <?php
                        if($_POST['singlebutton']=="Tambahkan"){
                                $foto = $_FILES['foto']['name'];
                                move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
                                $sql="INSERT INTO tbl_karyawan (id_karyawan, nama_karyawan, tgl_lahir_karyawan, jenis_kelamin_karyawan, alamat_karyawan 
                                foto, no_telfon_karyawan, email_karyawan, jabatan_karyawan, status_karyawan) 
                                VALUES ('', '$_POST[nama]', '$_POST[tgl_lahir]', '$_POST[jenis_kelamin]', '$_POST[almt]', '$foto', 
                                '$_POST[notelfon]', '$_POST[email]', '$_POST[jabatan]', '$_POST[status]')";
                                mysqli_query($con, $sql);
                                echo "<meta http-equiv='refresh' content='0'>";    
                        }
                    ?>
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
