<?php
        include "../config.php";
        $idkar=$_POST['idkaryawan'];
        $pwd=$_POST['[passakun]'];
        $tpa=$_POST['tipe'];
        $sql="INSERT INTO tbl_karyawan (id_akun, id_karyawan, password_karyawan, type_akun) 
        VALUES ('', '$idkar', '$pwd', '$tpa')";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listakun.php?pesan=berhasiltambah");
        }else{
            header("location:listakun.php?pesan=gagalinput");
        }
?>  
