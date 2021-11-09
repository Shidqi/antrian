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
        $sql="INSERT INTO tbl_projek (kd_projek, nm_projek,
                                nm_pemesan, email_pemesan,
                                no_tlp_pemesan, jns_aplikasi,
                                detail_aplikasi, nm_kar_penanngung,
                                nm_karyawan_1, nm_karyawan_2,
                                nm_karyawan_3, nm_karyawan_4,
                                nm_karyawan_5, nm_karyawan_6,
                                status_project, deadline_project,
                                harga_project) 
                                VALUES ('', '$np', '$np2', '$ep', 
                                '$ntp', '$ja', '$d', '$pj', '$k1', '$k2', '$k3', '$k4', '$k5', '$k6', '$sp', '$tgl', '$b')";
                                $query=mysqli_query($con, $sql);
                                if($query){
                                    header("location:listprojek.php?pesan=berhasiltambah");
                                    $sqldel="DELETE FROM tbl_pesanan WHERE kd_pesanan='$id'";
                                    $query2=mysqli_query($con, $sqldel);
                                }else{
                                    header("location:listprojek.php?pesan=gagalinput");
                                }
?>  
