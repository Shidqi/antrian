<?php
    include "../config.php";
    if(isset($_GET['id_akun'])){
        $id=$_GET['id_akun'];
        $sql="DELETE FROM user WHERE id_akun='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listakun.php?pesan=berhasilhapus");
        }else{
            header("location:listakun.php?pesan=gagalhapus");
        }
    }
?>