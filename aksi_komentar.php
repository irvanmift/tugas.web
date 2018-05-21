<?php
	include 'koneksi.php';

	$nama = $_POST['nama'];
	$komentar = $_POST['komentar'];
	$judul = $_GET['judul'];

	if ($nama == null || $komentar == null){
		?>
			<script type="text/javascript">
				alert("Data Belum Diisi");
				window.location='tambah_artikel.php?judul=<?php echo $judul?>';
			</script>
		<?php
	}

		//input data ke Database
		$query = "INSERT INTO komentar VALUES ('".$nama."','".$komentar."')";
		$insert = mysqli_query($koneksi,$query);

		//cek keberhasilan input data
		if ($insert){
			header('location:detail_artikel.php');

		} else{
			?>
				<script type="text/javascript">
					alert("Maaf, Komentar Gagal");
					window.location='detail_artikel.php?judul=<?php echo $judul?>';
				</script>
			<?php
		}	
?>