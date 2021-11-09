<?php
        include "../config.php";
        $nkar=$_POST['namakaryawan'];
        $pwd=$_POST['passakun'];
        $tpa=$_POST['tipe'];
        $sql="INSERT INTO tbl_user (id_user, namauser, password_karyawan, jenis_user) 
        VALUES ('', '$nkar', '$pwd', '$tpa')";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listakun.php?pesan=berhasiltambah");
        }else{
            header("location:listakun.php?pesan=gagalinput");
        }
?>  
