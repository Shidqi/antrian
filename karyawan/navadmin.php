<?php
        if (! @$_GET['menu']) 
            @$_GET['menu']='daftar';
        if (! @$_POST['singlebutton']) 
            @$_POST['singlebutton']='';
        error_reporting(0);
        include "../login/check.php";
        $a=$_SESSION['user'];
        include "limited.php";
        $query="SELECT * FROM tbl_user WHERE namauser ='$a'";
        $qwe=mysqli_query($con, $query);
        $dataq=mysqli_fetch_row($qwe);
    ?>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="index.php"><img src="../images/logo-white.png" alt="image" style="width:200px;height:70px;"></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                      <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <!--<li class="has-sub"><a href="#" title="">Administrasi</a>
                                    <ul>
                                    <li> <a href='listakun.php'>Daftar Akun</a></li>
                                    <li> <a href='listkaryawan.php'>Daftar Karyawan</a></li>
                                    </ul>
                                </li>-->
                                <li class="has-sub"><a href="admin.php" title=""><?= $dataq[1]; ?></a>
                                    <ul>
                                        <li><a href='listprojekview.php'>Lihat Projek</a></li>
                                        <li><a href='listgajiview.php'>Riwayat Gaji</a></li>
                                        <li><a href='listabsenview.php'>Riwayat Absensi</a></li>
                                        <li><a href='ubahpassword.php'>Ubah Password</a></li>
                                        <li><a href="../login/logout.php" title="Logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')"> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>