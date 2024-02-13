<?php  
include'../../config/koneksi.php';

$nama_jabatan = $_POST['nama_jabatan'];
$gaji = $_POST['gaji'];

$query = "INSERT INTO jabatan values ('','$nama_jabatan','$gaji')";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil Disimpan');
	window.location = '../home.php?menu=2';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../home.php?menu=2';
	</script>
	";
}
?>