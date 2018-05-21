<?php
	include 'koneksi.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$query = "SELECT * FROM user WHERE username='".$user."'";
	$select = mysqli_query($koneksi,$query);

	if ($akun = mysqli_fetch_assoc($select)){
		$password_db = $akun['password'];

		$hash_md5 = md5($pass);

		if ($hash_md5==$password_db){
			session_start();
			$_SESSION['id'] = $akun['id'];
			$_SESSION['username'] = $akun['username'];
			$_SESSION['nama'] = $akun['nama_lengkap'];

			header('location:index.php');
		} else {
			?>
				<script type="text/javascript">
					alert("Password Anda Salah");
					window.location='login.php';
				</script>
			<?php
		}
	} else {
		?>
			<script type="text/javascript">
				alert("Maaf, Username Belum Terdaftar");
				window.location='login.php';
			</script>
		<?php
	}

?>