<?php
    include "../config.php";
    if(isset($_GET['id_karyawan'])){
        $id=$_GET['id_karyawan'];
        $sql="DELETE FROM tbl_karyawan WHERE id_karyawan='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listkaryawan.php?pesan=berhasilhapus");
        }else{
            header("location:listkaryawan.php?pesan=gagalhapus");
        }
    }
?>