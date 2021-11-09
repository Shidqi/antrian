<?php
    include "../config.php";
    if(isset($_GET['kd_projek'])){
        $id=$_GET['kd_projek'];
        $sql="DELETE FROM tbl_projek WHERE kd_projek='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listprojek.php?pesan=berhasilhapus");
        }else{
            header("location:listprojek.php?pesan=gagalhapus");
        }
    }
?>