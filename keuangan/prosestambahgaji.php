<?php
        include "../config.php";
        $nm=$_POST['nmkar'];
        $tgl=$_POST['tgl_regis'];
        $gj=$_POST['gaji'];
        $sql="INSERT INTO tbl_gaji (kd_gaji, tgl_gaji, nama_karyawan, gaji_karyawan) 
        VALUES ('', '$tgl', '$nm', '$gj')";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listgaji.php?pesan=berhasiltambah");
        }else{
            header("location:listgaji.php?pesan=gagalinput");
        }
?>  
