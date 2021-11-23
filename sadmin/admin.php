<!DOCTYPE html>
<html lang="en">
<?php
  	error_reporting(0);
  	session_start();
  	$a=$_SESSION['user'];
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title>Admin</title>
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
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <style>
    p {
    color: black;
    display: block;
    margin-bottom: 25px;
    margin-left: 25px;
    margin-right: 25px;
    
    }
    .bawah{
        padding-top: 60px; 
        padding-bottom: 60px;
        background-color: #F6931E;
    }
    a{
        color: black;
        margin-top: 25px;
    }
    </style>
</head>
<body>
    <?php
    include "navadmin.php";
    ?>
    <div class="bawah">
        <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidenav">
                        <ul class="listnone">
                            <li> <a href='listakun.php'>Daftar Akun</a></li>
                            <li> <a href='listkaryawan.php'>Daftar Karyawan</a></li>
                        </ul>
                    </div>                    
                </div>
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
