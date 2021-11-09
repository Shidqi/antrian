<?php
        include "../config.php";
        $id=$_POST['kd_projek'];
        $np=$_POST['namaprojek'];
        $np2=$_POST['namapemesan'];
        $ep=$_POST['emailpemesan'];
        $ntp=$_POST['nopemesan'];
        $ja=$_POST['ja'];
        $d=$_POST['detail'];
        $pj=$_POST['penanggungjawab'];
        $k1=$_POST['kar1'];
        $k2=$_POST['kar2'];
        $k3=$_POST['kar3'];
        $k4=$_POST['kar4'];
        $k5=$_POST['kar5'];
        $k6=$_POST['kar6'];
        $sp=$_POST['sp'];
        $tgl=$_POST['tgl_regis'];
        $b=$_POST['biaya'];
        $sql="UPDATE tbl_projek set nm_projek='$np',
                                    nm_pemesan='$np2', 
                                    email_pemesan='$ep',
                                    no_tlp_pemesan='$ntp', 
                                    jns_aplikasi='$ja',
                                    detail_aplikasi='$d', 
                                    nm_kar_penanngung='$pj',
                                    nm_karyawan_1='$k1',
                                    nm_karyawan_2='$k2',
                                    nm_karyawan_3='$k3', 
                                    nm_karyawan_4='$k4',
                                    nm_karyawan_5='$k5', 
                                    nm_karyawan_6='$k6',
                                    status_project='$sp', 
                                    deadline_project='$tgl',
                                    harga_project='$b'
                                    WHERE kd_projek='$id'";
                                $query=mysqli_query($con, $sql);
                                if($query){
                                    header("location:listprojek.php?pesan=berhasiltambah");
                                }else{
                                    header("location:listprojek.php?pesan=gagalinput");
                                }
?> 