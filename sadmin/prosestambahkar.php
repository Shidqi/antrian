<?php
        include "../config.php";
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
        $sql="INSERT INTO tbl_karyawan (id_karyawan, nama_karyawan, no_telfon_karyawan, 
                                        jk_karyawan, alamat, email_karyawan, 
                                        jabatan_karyawan, status_karyawan, foto_karyawan) 
                VALUES ('', '$nm', '$tlp', 
                        '$jk', '$alamat', '$email', '$jabatan', '$stts', '$foto' )";
        $sqla="INSERT INTO tbl_user (id_user, nama_user, pass_user, type_user)
                VALUES ('', '$nm', '$nm', 'karyawan baru')";
        $querya=mysqli_query($con, $sqla);
        $query=mysqli_query($con, $sql);
        if($query && $querya){
            header("location:listkaryawan.php?pesan=berhasiltambah");
        }else{
            header("location:listkaryawan.php?pesan=gagalinput");
        }
?>  
