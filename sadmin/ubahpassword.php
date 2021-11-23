<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title>Ubah Password</title>
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
    <script type="../text/javascript" src="../js/jquery-1.10.2.min.js"></script>
</head>
<body>
<?php
    include "navadmin.php";
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <?php
                            include "../config.php";
                            $perintah="SELECT * FROM tbl_user WHERE nama_user='$a'";
                            $hasil=mysqli_query($con, $perintah);
                            $data=mysqli_fetch_row($hasil);
                            if (! @$_POST['singlebutton']) 
                                @$_POST['singlebutton']='';
                        ?>  
                        <h1>Edit password</h1>
                        <p> Gunakan password yang mudah di ingat.</p>
                        <form method='post' action=''>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <h3><?php echo "$data[1]";?></h3>
                                    <label class='control-label'>password lama</label>
                                    <input type='password' name='password' placeholder='' class='form-control' required <?php echo "value=$data[2]";?> >
                                    <label class='control-label'>password baru</label>
                                    <input type='password' name='password1' placeholder='' class='form-control' required>
                                    <label class='control-label'>konfirmasi password</label>
                                    <input type='password' name='password2' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-12'>
                                    <div class='form-group'>
                                        <input name='singlebutton' class='btn btn-primary' type='submit' value='Simpan'>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                            include "../config.php";
                            if($_POST['singlebutton']=="Simpan"){
                                if($_POST['password1']==$_POST['password']||$_POST['password2']==$_POST['password']){
                                ?>
                                    <script type="text/javascript" language="JavaScript">
                                        alert('Password sudah ada');
                                    </script>
                                <?php
                                echo "<meta http-equiv='refresh' content='0'>";
                               }else if($_POST['password1']!=$_POST['password2']){
                                ?>
                                    <script type="text/javascript" language="JavaScript">
                                        alert('Sesuaikan Password Baru dengan Konfirmasi Password');
                                    </script>
                                <?php
                                echo "<meta http-equiv='refresh' content='0'>";
                               }else{
                                    $var1=$_POST['password1'];
                                    $sql="UPDATE tbl_user SET pass_user='$var1' WHERE nama_user='$a'";
                                    mysqli_query($con, $sql);
                                    ?>
                                        <script type="text/javascript" language="JavaScript">
                                            alert('Password Berhasil diubah');
                                        </script>
                                    <?php
                                    echo "<meta http-equiv='refresh' content='0'>";
                               }
                            }
                        ?>
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
