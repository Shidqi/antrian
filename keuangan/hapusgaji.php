<?php
    include "../config.php";
    if(isset($_GET['kd_gaji'])){
        $id=$_GET['kd_gaji'];
        $sql="DELETE FROM tbl_gaji WHERE kd_gaji='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listgaji.php?pesan=berhasilhapus");
        }else{
            header("location:listgaji.php?pesan=gagalhapus");
        }
    }
?>