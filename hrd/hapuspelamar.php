<?php
    include "../config.php";
    if(isset($_GET['kd_pelamar'])){
        $id=$_GET['kd_pelamar'];
        $sql="DELETE FROM tbl_pelamar WHERE kd_pelamar='$id'";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listkaryawanbaru.php?pesan=berhasilhapus");
        }else{
            header("location:listkaryawanbaru.php?pesan=gagalhapus");
        }
    }
?>