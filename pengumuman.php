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
    margin-left: 25px;
    margin-right: 25px;
    text-align: justify;
    
    }
    .bawah{
        padding-top: 60px; 
        padding-bottom: 60px;
    }
    a{
        color: black;
        margin-top: 25px;
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
                        <h2 class="page-title">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
            <left>
            <div class='row'>
            <table border="0" width="auto" >
            <tbody>
            <tr>
            <td><p font-size= "20px";>ISOAE is an omni-potent team of professionals with 
                a plethora of experience in Software solutions, Mobile application development, 
                Software testing, Digital Creative Agency & Campaign Analytics Solution.</p>
            </td>
            <td>
                <p><img src="images/isobae.PNG"  width="auto" height="auto"></p>
            </td>
            </tr>
            </tbody>
            </table>
            </div>
            </left>
            </div>
        </div>
</body>

</html>
