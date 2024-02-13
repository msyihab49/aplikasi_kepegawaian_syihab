<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM pegawai where id_pegawai = '$id'";
$sql = mysqli_query($koneksi, $query);
$row = mysqli_fetch_array($sql);
?>
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3>Form Hapus Data Pegawai</h3>
					<form action="pegawai/edit_pegawai.php" method="POST" role="form">
					
						<div class="form-group">
							<label for="">ID PEGAWAI</label>
							<input type="hidden" class="form-control" name="id_pegawai" id="" value="<?php echo $row['id_pegawai']; ?>" placeholder="ID KELAS">
							<input type="text" class="form-control" name="id_pegawai" id="" value="<?php echo $row['id_pegawai']; ?>" placeholder="ID PEGAWAI" disabled>
						</div>

						<div class="form-group">
							<label for="">NAMA PEGAWAI</label>
							<input type="text" class="form-control" name="nama_pegawai" id="" value="<?php echo $row['nama_pegawai']; ?>" placeholder="Nama Pegawai">
						</div>
                        
						<div class="form-group">
							<label for="">email</label>
							<input type="text" class="form-control" name="email" id="" value="<?php echo $row['email']; ?>" placeholder="Username">
						</div>

						<div class="form-group">
							<label for="">alamat</label>
							<input type="text" class="form-control" name="alamat" id="" value="<?php echo $row['alamat']; ?>" placeholder="Alamat">
						</div>
                        <div class="form-group">
							<label for="">Nama Jabatan</label>
							<input type="text" class="form-control" name="nama_jabatan" id="" value="<?php echo $row['nama_jabatan']; ?>" placeholder="Nama Jabatan">
						</div>
						<div class="form-group">
							<label for="">NOMOR TELEPON</label>
							<input type="text" class="form-control" name="no_telp" id="" value="<?php echo $row['no_telp']; ?>" placeholder="Nomor Telepon">
						</div>
                        <div class="form-group">
							<label for="">STATUS</label>
							<input type="text" class="form-control" name="status" id="" value="<?php echo $row['status']; ?>" placeholder="Status">
						</div>
                        <div class="form-group">
							<label for="">Jumlah Anak</label>
							<input type="text" class="form-control" name="jumlah_anak" id="" value="<?php echo $row['jumlah_anak']; ?>" placeholder="Jumlah Anak">
						</div>
                        <div class="form-group">
							<label for="">Id Jabatan</label>
							<input type="text" class="form-control" name="id_jabatan" id="" value="<?php echo $row['id_jabatan']; ?>" placeholder="Id Jabatan">
						</div>
                        <div class="form-group">
							<label for="">Id Tunjangan</label>
							<input type="text" class="form-control" name="id_jabatan" id="" value="<?php echo $row['id_tunjangan']; ?>" placeholder="Id Jabatan">
						</div>

						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>