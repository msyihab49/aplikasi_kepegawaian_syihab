<?php  
include'../../config/koneksi.php';

$nama_tunjangan = $_POST['nama_tunjangan'];
$gaji_tunjangan = $_POST['gaji_tunjangan'];

$query = "INSERT INTO tunjangan values ('','$nama_tunjangan','$gaji_tunjangan')";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil Disimpan');
	window.location = '../home.php?menu=3';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../home.php?menu=3';
	</script>
	";
}
?>