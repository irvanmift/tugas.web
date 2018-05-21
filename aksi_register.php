<?php
	include 'koneksi.php';

	$user = $_POST['username_baru'];
	$nama = $_POST['nama_baru'];
	$pass = $_POST['password_baru'];
	$ulang = $_POST['ulangi_password_baru'];

	if ($user == null){
		?>
			<script type="text/javascript">
				alert("Data Belum Diisi");
				window.location='login.php';
			</script>
		<?php
	}

	//cek pasword dengan ulang password
	if($pass == $ulang){
		//enkripsi multi layer
		//1. hash MD5
		$hash_md5 = md5($pass);

		//2. hash bcrypt

		//input data ke Database
		$query = "INSERT INTO user VALUES (NULL,'".$user."','".$nama."','".$hash_md5."')";
		$insert = mysqli_query($koneksi,$query);

		//cek keberhasilan input data
		if ($insert){
			header('location:login.php');

		} else{
			?>
				<script type="text/javascript">
					alert("Maaf, Pendaftaran Gagal");
					window.location='login.php';
				</script>
			<?php
		}
	}else{
		?>
			<script type="text/javascript">
				alert("Password dan Ulangi Password tidak Valid");
				window.location='login.php';
			</script>
		<?php	
	}
?>