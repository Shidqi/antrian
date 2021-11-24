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
        td {
            background-color: #C7E7E7;
            color: black;
        }
        th {
            color: black;
        }
        a {
            color: black;
        }
    </style>
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
                    $tah=date('Y');?>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <h1>Daftar Karyawan</h1>
                        <p><a href="formtambahpegawai.php">[+]Tambah Pegawai</a></p>
                        <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="gagalinput"){
                                    echo "Input gagal".mysqli_errno().' - '.mysqli_error()."<br>";
                                }
                            }
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table class='table'>
                            <thead>
                                <tr>                         
                                    <th>Nama</th>
                                    <th>No Telfon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Foto</th>
                                    <th colspan="2">Pilihan</th>
                                </tr>
                            </thead>
                        <tbody>
                        <?php
                        $sql="SELECT * FROM tbl_karyawan";
                        $content=mysqli_query($con, $sql);
                        $i=1;
                        while ($data=mysqli_fetch_row($content)) {
                            echo "<tr>";
                            echo "<td>$data[1]</td>";
                            echo "<td>$data[2]</td>";
                            echo "<td>$data[3]</td>";
                            echo "<td>$data[4]</td>";
                            echo "<td>$data[5]</td>";
                            echo "<td>$data[6]</td>";
                            echo "<td>$data[7]</td>";
                            echo "<td><img src='../foto/".$data[8]."' width='100'></td>";
                            echo "<td><a href=\"formeditpegawai.php?id_karyawan=$data[0]\" >Ubah</a></td>";
                            echo "<td><a href=\"hapuskar.php?id_karyawan=$data[0]\" target='_blank' onclick=\"return confirm('Yakin Ingin Menghapus Data?')\">Hapus</a></td>";
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
