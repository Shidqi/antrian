<?php
//fungsi check.php ini adalah untuk mengecek data user yang ada dalam database agar bisa login ke halaman website.
	session_start();
	require_once "config.php";
	if(ISSET($_POST['user']) && ISSET($_POST['password']))
  	{
      	$user=$_POST['user'];
      	$password=$_POST['password'];
      	$perintah="SELECT * FROM tbl_user 
		  WHERE namauser='$user' AND password_karyawan='$password'";
     	$hasil=mysqli_query($con, $perintah);
      	$jml_data=mysqli_num_rows($hasil);
	  	if ($jml_data>0)
	  	{

	    	$_SESSION['user']=$user;
	    	function sesi($user){
	    		$usr=$user;
	    		
	    	}
	    	
			
			$akun=mysqli_fetch_row($hasil);
			switch ($akun[3]) {
				case 'Admin':
					?>
					<script type='text/javascript' language='JavaScript'>
						alert('Anda Berhasil Masuk');
						window.location.href="../admin/admin.php";
					</script>
					<?php
				break;

				case 'HRD':
					?>
					<script type='text/javascript' language='JavaScript'>
						alert('Anda Berhasil Masuk');
						window.location.href="../hrd/admin.php";
					</script>
					<?php
				break;

				case 'Admin Pesan':
					?>
					<script type='text/javascript' language='JavaScript'>
						alert('Anda Berhasil Masuk');
						window.location.href="../apesan/admin.php";
					</script>
					<?php
				break;

				case 'Keuangan':
					?>
					<script type='text/javascript' language='JavaScript'>
						alert('Anda Berhasil Masuk');
						window.location.href="../keuangan/admin.php";
					</script>
					<?php
				break;
				
				case 'Karyawan':
					?>
					<script type='text/javascript' language='JavaScript'>
						alert('Anda Berhasil Masuk');
						window.location.href="../karyawan/admin.php";
					</script>
					<?php
				break;

				default:
						?>
			  			<script type='text/javascript' language='JavaScript'>
							alert('Anda Berhasil Masuk');
							window.location.href="editbiodata.php";
						</script>
						<?php
					//header('location: editbiodata.php');
				break;
			}
			
		 	//include "akun_login.php";		 
		 	
	  	}else{
	    ?>
			<script type="text/javascript" language="JavaScript">
				alert('Username atau Password yang Anda Masukkan Salah');
				document.location='akun.php';
			</script>
		<?php
		}
	}
?>