<?php
include '../config.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$waktu = $_POST['waktu'];


}

$save = "INSERT INTO tbl_absensi SET tgl_absen='$waktu', nama_karyawan='$nama', status_absen='Masuk'";
mysqli_query($con, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
	 echo "<script>window.location.href = \"listabsenview.php\" </script>";	
}else{
	echo "kryptosssss";
}

 ?>