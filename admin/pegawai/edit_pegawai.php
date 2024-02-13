<?php  
include"../../config/koneksi.php";

$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$nama_jabatan = $_POST['nama_jabatan'];
$status = $_POST['status'];
$jumlah_anak = $_POST['jumlah_anak'];
$no_telp = $_POST['no_telp'];
$id_jabatan = $_POST['id_jabatan'];
$id_tunjangan = $_POST['id_tunjangan'];

$query = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai', email='$email', alamat='$alamat', nama_jabatan='$nama_jabatan', status='$status', jumlah_anak='$jumlah_anak', no_telp='$no_telp', id_jabatan='$id_jabatan', id_tunjangan='$id_tunjangan' where id_pegawai = '$id_pegawai'";

if (mysqli_query($koneksi, $query)) {
	echo "
	<script>
	alert('Data Berhasil di Ubah');
	window.location = '../home.php?menu=1';
	</script>
	";
}else{
	echo "
	<script>
	alert('Data Gagal di Ubah');
	window.location = '../home.php?menu=1';
	</script>
	";
}
?>