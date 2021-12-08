<?php
        include "../config.php";
        $id=$_POST['id_antrian'];
        $tp=$_POST['kendaraan'];
        $np=$_POST['namapemesan'];
        $ep=$_POST['emailpemesan'];
        $ntp=$_POST['nopemesan'];
        $js=$_POST['service'];
        $d=$_POST['detail'];
        $tkn=$_POST['teknisi'];
        $nop=$_POST['nopol'];
        $b=$_POST['biaya'];
        $sql="INSERT INTO tbl_service (id_service, tipe_kendaraan,
                                nama_client, no_telfon_client,
                                email_client, jenis_service,
                                masalah_tambahan, no_polisi,
                                teknisi, biaya) 
                                VALUES ('', '$tp', '$np', '$ntp', '$ep', 
                                 '$js', '$d',  '$nop', '$tkn', '$b')";
                                $query=mysqli_query($con, $sql);
                                if($query){
                                    header("location:listpesanan.php?pesan=berhasiltambah");
                                    $sqldel="DELETE FROM tbl_antrian WHERE id_antrian='$id'";
                                    $query2=mysqli_query($con, $sqldel);
                                }else{
                                    header("location:listpesanan.php?pesan=gagalinput");
                                }
?>  
