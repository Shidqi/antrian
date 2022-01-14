<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    color: #FF0000;
    display: block;
    margin-bottom: 25px;
    margin-left: 25px;
    margin-right: 25px;
    font-size: 25px;    
    }
    a {
        color: #FF0000;
        margin-top: 25px;
    }
    h1 {
        color: #FF0000;
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
    <center>
    <div class="content">
        <div class="container">
            <div class="row">
            <left>
            <div class='row'>
            <table border="0" width="auto" >
            <tbody>
            <tr>
            <td rowspan="2"><center><h1>Contact Us</h1><p>
                PT. PRIMADELTA STARLESTARI<br>
                Jalan Jenderal Ahmad Yani,  Mandala, Kaduagung Timur,<br> Kec. Rangkasbitung, Kabupaten Lebak,<br>
                Banten 42317<br>
                Phone : +6287772666767</p></center></td>
            </tr>
            </tbody>
            </table>
            </div>
            </left>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9431.195906951945!2d106.2275281764638!3d-6.3513806893414735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb215fa92844150bc!2sDEALER%20HONDA%20PT.%20PRIMADELTA%20STARLESTARI!5e0!3m2!1sid!2sid!4v1642142213300!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</center>
    
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
