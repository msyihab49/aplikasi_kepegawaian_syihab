<?php  
include"../../config/koneksi.php";

$id_tunjangan = $_POST['id_tunjangan'];
$nama_tunjangan = $_POST['nama_tunjangan'];
$gaji_tunjangan = $_POST['gaji_tunjangan'];

$query = "UPDATE tunjangan SET nama_tunjangan = '$nama_tunjangan', gaji_tunjangan='$gaji_tunjangan' where id_tunjangan = '$id_tunjangan'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil di Ubah');
	window.location = '../home.php?menu=3';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal di Ubah');
	window.location = '../home.php?menu=3';
	</script>
	";
}
?>