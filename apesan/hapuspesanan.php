<?php
    include "../config.php";
    if(isset($_GET['kd_pesanan'])){
        $id=$_GET['kd_pesanan'];
        $sql="DELETE FROM tbl_pesanan WHERE kd_pesanan='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listpesanan.php?pesan=berhasilhapus");
        }else{
            header("location:listpesanan.php?pesan=gagalhapus");
        }
    }
?>