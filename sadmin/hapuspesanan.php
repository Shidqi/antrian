<?php
    include "../config.php";
    if(isset($_GET['id_antrian'])){
        $id=$_GET['id_antrian'];
        $sql="DELETE FROM tbl_antrian WHERE id_antrian='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listpesanan.php?pesan=berhasilhapus");
        }else{
            header("location:listpesanan.php?pesan=gagalhapus");
        }
    }
?>