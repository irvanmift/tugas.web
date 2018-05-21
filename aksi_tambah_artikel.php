<?php
	include 'koneksi.php';

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tanggal = date('Y-m-d H:i:s');

	if ($judul == null || $isi == null){
		?>
			<script type="text/javascript">
				alert("Data Belum Diisi");
				window.location='tambah_artikel.php';
			</script>
		<?php
	}

		//input data ke Database
		$query = "INSERT INTO artikel VALUES (NULL,'".$judul."','".$isi."','".$tanggal."')";
		$insert = mysqli_query($koneksi,$query);

		//cek keberhasilan input data
		if ($insert){
			header('location:index.php');

		} else{
			?>
				<script type="text/javascript">
					alert("Maaf, Posting Artikel Gagal");
					window.location='tambah_artikel.php';
				</script>
			<?php
		}	
?>