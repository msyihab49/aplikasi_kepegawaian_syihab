<?php  
include"../config/koneksi.php";

$id = $_GET['id'];
$query = "SELECT * FROM tunjangan where id_tunjangan = '$id'";
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
					<form action="tunjangan/edit_tunjangan.php" method="POST" role="form">
					
						<div class="form-group">
							<label for="">ID PEGAWAI</label>
							<input type="hidden" class="form-control" name="id_tunjangan" id="" value="<?php echo $row['id_tunjangan']; ?>" placeholder="ID KELAS">
							<input type="text" class="form-control" name="id_tunjangan" id="" value="<?php echo $row['id_tunjangan']; ?>" placeholder="ID JABATAN" disabled>
						</div>

						<div class="form-group">
							<label for="">NAMA JABATAN</label>
							<input type="text" class="form-control" name="nama_tunjangan" id="" value="<?php echo $row['nama_tunjangan']; ?>" placeholder="Nama Tunjangan">
						</div>
                        
						<div class="form-group">
							<label for="">GAJI</label>
							<input type="text" class="form-control" name="gaji_tunjangan" id="" value="<?php echo $row['gaji_tunjangan']; ?>" placeholder="Gaji Tunjangan">
						</div>


						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>