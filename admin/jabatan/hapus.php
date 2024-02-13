<?php  
include"../../config/koneksi.php";

$id = $_GET['id'];
$query = "DELETE FROM jabatan where id_jabatan='$id'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>

	alert('Data Berhasil Di Hapus');
	window.location = '../home.php?menu=2';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Dihapus);
	window.location = '../home.php?menu=2';
	</script>
	";
}
?>