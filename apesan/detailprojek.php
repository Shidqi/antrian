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
p { color: black; 
font-weight: 700; 
font-size: 20px; 
text-transform: uppercase; }
</style>
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
                    <h1>Lihat Detail Projek</h1>
                    <button class='btn btn-default' onclick="goBack()"><-Go Back</button>
                    <script>
                    function goBack() {
                    window.history.back();
                    }
                    </script>                    
                                    <br><p><input type='hidden' name='kd_projek' placeholder='' class='form-control' required value="<?php echo "$data[0]";?>">
                                        <label >nama projek : </label>
                                        <label ><?php echo "$data[1]";?></label><br>
                                        <label >nama pemesan : </label>
                                        <label ><?php echo "$data[2]";?></label><br>
                                        <label >email pemesan : </label>
                                        <label ><?php echo "$data[3]";?></label><br>
                                        <label >no. Telfon pemesan : </label>
                                        <label ><?php echo "$data[4]";?></label><br>
                                        <label >Jenis Aplikasi : </label>
                                        <label ><?php echo "$data[5]";?></label><br>
                                        <label >Detail Pesanan : </label>
                                        <label ><?php echo "$data[6]";?></label><br>
                                        <label >Ketua Projek : </label>
                                        <label ><?php echo "$data[7]";?></label><br>
                                        <label >Karyawan 1 : </label>
                                        <label ><?php echo "$data[8]";?></label><br>
                                        <label >Karyawan 2 : </label>
                                        <label ><?php echo "$data[9]";?></label><br>
                                        <label >Karyawan 3 : </label>
                                        <label ><?php echo "$data[10]";?></label><br>
                                        <label >Karyawan 4 : </label>
                                        <label ><?php echo "$data[11]";?></label><br>
                                        <label >Karyawan 5 : </label>
                                        <label ><?php echo "$data[12]";?></label><br>
                                        <label >Karyawan 6 : </label>
                                        <label ><?php echo "$data[13]";?></label><br>
                                        <label >Status Projek : </label>
                                        <label ><?php echo "$data[14]";?></label><br>
                                        <label >Deadline Projek : </label>
                                        <label ><?php echo "$data[15]";?></label><br>
                                        <label >Biaya : </label>
                                        <label ><?php echo "$data[16]";?></label><br></p>
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
