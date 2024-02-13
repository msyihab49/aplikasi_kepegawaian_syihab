<?php  
include"../../config/koneksi.php";

$id_jabatan = $_POST['id_jabatan'];
$nama_jabatan = $_POST['nama_jabatan'];
$gaji = $_POST['gaji'];

$query = "UPDATE jabatan SET nama_jabatan = '$nama_jabatan', gaji='$gaji' where id_jabatan = '$id_jabatan'";

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