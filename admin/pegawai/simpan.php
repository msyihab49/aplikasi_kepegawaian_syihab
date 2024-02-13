<?php  
include'../../config/koneksi.php';

$nama_petugas = $_POST['nama_pegawai'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nama_jabatan = $_POST['nama_jabatan'];
$status = $_POST['status'];
$jumlah_anak = $_POST['jumlah_anak'];
$no_telp = $_POST['no_telp'];
$id_jabatan = $_POST['id_jabatan'];
$id_tunjangan = $_POST['id_tunjangan'];

$query = "INSERT INTO pegawai values ('','$nama_pegawai','$email','$alamat','$nama_jabatan','$status','$jumlah_anak','$no_telp','$id_jabatan','$id_tunjangan')";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil Disimpan');
	window.location = '../home.php?menu=1';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal Disimpan');
	window.location = '../home.php?menu=1';
	</script>
	";
}
?>