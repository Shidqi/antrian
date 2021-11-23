<?php
    include "../config.php";
    $id=$_POST['ikar'];
    $nama=$_POST['nama'];
    $tlp=$_POST['notelfon'];
    $tgl=$_POST['tgl_regis'];
    $jk=$_POST['jenis_kelamin'];
    $a=$_POST['almt'];
    $e=$_POST['email'];
    $j=$_POST['jabatan'];
    $stts=$_POST['status'];
    $sql="UPDATE tbl_karyawan set nama_karyawan='$nama', 
                                tgl_lahir_karyawan='$tgl', 
                                jenis_kelamin_karyawan='$jk', 
                                alamat_karyawan='$a',
                                no_telfon_karyawan='$tlp',
                                email_karyawan='$e',
                                jabatan_karyawan='$j',
                                status_karyawan='$stts'
                                WHERE id_karyawan=$id";
    $query=mysqli_query($con, $sql);
    if($query){
    header("location:listkaryawan.php?pesan=berhasiltambah");
    }else{
    header("location:listkaryawan.php?pesan=gagalinput");
    }
?>  