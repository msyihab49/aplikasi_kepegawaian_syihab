<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM jabatan where id_jabatan = '$id'";
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
					<form action="jabatan/edit_jabatan.php" method="POST" role="form">
					
						<div class="form-group">
							<label for="">ID PEGAWAI</label>
							<input type="hidden" class="form-control" name="id_jabatan" id="" value="<?php echo $row['id_jabatan']; ?>" placeholder="ID KELAS">
							<input type="text" class="form-control" name="id_jabatan" id="" value="<?php echo $row['id_jabatan']; ?>" placeholder="ID JABATAN" disabled>
						</div>

						<div class="form-group">
							<label for="">NAMA JABATAN</label>
							<input type="text" class="form-control" name="nama_jabatan" id="" value="<?php echo $row['nama_jabatan']; ?>" placeholder="Nama Jabatan">
						</div>
                        
						<div class="form-group">
							<label for="">GAJI</label>
							<input type="text" class="form-control" name="gaji" id="" value="<?php echo $row['gaji']; ?>" placeholder="gaji">
						</div>


						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>