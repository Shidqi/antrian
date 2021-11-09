<?php
    include "../config.php";
    $id=$_POST['ikar'];
    $tgl=$_POST['tgl_regis'];
    $gj=$_POST['gaji'];
    $sql="UPDATE tbl_gaji set tgl_gaji='$tgl',
                                gaji_karyawan='$gj'
                                WHERE kd_gaji=$id";
    $query=mysqli_query($con, $sql);
    if($query){
    header("location:listgaji.php?pesan=berhasiltambah");
    }else{
    header("location:listgaji.php?pesan=gagalinput");
    }
?>  