<?php
        include "../config.php";
        $kp=$_POST['kd_pelamar'];
        $nm=$_POST['nama'];
        $tlp=$_POST['notelfon'];
        $tgl=$_POST['tgl_regis'];
        $jk=$_POST['jenis_kelamin'];
        $alamat=$_POST['almt'];
        $email=$_POST['email'];
        $jabatan=$_POST['jabatan'];
        $stts=$_POST['status'];
        $foto = $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], "../foto/".$_FILES['foto']['name']);
        $sql="INSERT INTO tbl_karyawan (id_karyawan, nama_karyawan, tgl_lahir_karyawan, 
                                        jenis_kelamin_karyawan, alamat_karyawan, foto_karyawan, 
                                        no_telfon_karyawan, email_karyawan, jabatan_karyawan, 
                                        status_karyawan) 
                VALUES ('', '$nm', '$tgl', 
                        '$jk', '$alamat', '$foto', 
                        '$tlp', '$email', '$jabatan', 
                        '$stts')";
        $query=mysqli_query($con, $sql);
        if($query){
            header("location:listkaryawan.php?pesan=berhasiltambah");
            $sqldel="DELETE FROM tbl_pelamar WHERE kd_pelamar='$kp'";
            $query2=mysqli_query($con, $sqldel);
        }else{
            header("location:listkaryawan.php?pesan=gagalinput");
        }
?>  
