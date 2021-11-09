<?php
    include "../config.php";
    $id=$_POST['ikun'];
    $nama=$_POST['nama'];
    $pwd=$_POST['pwd'];
    $tipe=$_POST['tipe'];
    $sql="UPDATE tbl_user set namauser='$nama', 
                                password_karyawan='$pwd', 
                                jenis_user='$tipe'
                                WHERE id_user=$id";
    $query=mysqli_query($con, $sql);
    if($query){
    header("location:listakun.php?pesan=berhasiltambah");
    }else{
    header("location:listakun.php?pesan=gagalinput");
    }
?>  