<?php
    include "../config.php";
    if(isset($_GET['id_akun'])){
        $id=$_GET['id_akun'];
        $sql="DELETE FROM tbl_user WHERE id_user='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listakun.php?pesan=berhasilhapus");
        }else{
            header("location:listakun.php?pesan=gagalhapus");
        }
    }
?>