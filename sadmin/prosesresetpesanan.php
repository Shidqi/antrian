<?php
        include "../config.php";
        $sql="TRUNCATE tbl_antrian;";
        $sqla="ALTER TABLE tbl_antrian AUTO_INCREMENT = value;";
        $querya=mysqli_query($con, $sqla);
        $query=mysqli_query($con, $sql);
        if($query && $querya){
            header("location:listpesanan.php");
        }else{
            header("location:listpesanan.php");
        }
?>  
